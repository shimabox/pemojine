<?php

namespace SMB\Pemojine\Scraping\Parser;

use SMB\Pemojine\Scraping\Emoji\BigGroups;
use SMB\Pemojine\Scraping\Emoji\BigGroup;
use SMB\Pemojine\Scraping\Emoji\MediumGroup;
use SMB\Pemojine\Scraping\Emoji\Group;

use \phpQuery as PHPQuery;

/**
 *
 */
class Parser
{
    /**
     *
     * @var string
     */
    private $cacheDir = '';

    /**
     *
     */
    public function __construct()
    {
        $this->cacheDir = realpath(dirname(__FILE__) . '/../../cache');
    }

    /**
     * Parse
     *
     * @param string $url
     * @param string $cacheFileName
     * @param int $cacheExpires default 3600(1h)
     *
     * @return BigGroups
     */
    public function parse($url, $cacheFileName, $cacheExpires = 60 * 60)
    {
        $cacheFile = $this->cacheDir . '/' . $cacheFileName;

        if (
            file_exists($cacheFile)
            && (time() - filemtime($cacheFile)) <= $cacheExpires
        ) {
            $c = file_get_contents($cacheFile);
            return unserialize($c);
        }

        // Initialize
        $bigGroups = new BigGroups();

        // ShortNames
        $shortNames = $this->fetchShortNamesFromJoyPixelsJson();

        foreach ($this->fetchTableRows($url) as $type => $val) {
            switch ($type) {
                case 'bigGroupInit':
                    $bigGroup = new BigGroup();
                    break;
                case 'changedBigGroup':
                    $bigGroup->addMediumGroup($mediumGroup);
                    $bigGroups->addBigGroup($bigGroup);

                    $mediumGroup = new MediumGroup();
                    $bigGroup = new BigGroup();
                    break;
                case 'bigGroupName':
                    $bigGroup->bigGroupName = $val;
                    break;
                case 'mediumGroupInit':
                    $mediumGroup = new MediumGroup();
                    break;
                case 'changedMediumGroup':
                    if (count($mediumGroup) > 0) { // It is not initialized MediumGroup
                        $bigGroup->addMediumGroup($mediumGroup);
                    }

                    $mediumGroup = new MediumGroup();
                    break;
                case 'mediumGroupName':
                    $mediumGroup->groupName = $val;
                    break;
                case 'startRow':
                    $group = new Group();
                    break;
                case 'code':
                    foreach (explode(' ', $val) as $index => $c) {
                        $group->addCode($c);
                    }
                    break;
                case 'notSupport':
                    $group->notSupport();
                    break;
                case 'invalidApple':
                    $group->validWithApple = false;
                    break;
                case 'invalidGoogle':
                    $group->validWithGoogle = false;
                    break;
                case 'invalidTwitter':
                    $group->validWithTwitter = false;
                    break;
                case 'invalidJoyPixels':
                    $group->validWithJoyPixels = false;
                    break;
                case 'invalidFacebook':
                    $group->validWithFacebook = false;
                    break;
                case 'invalidWindows':
                    $group->validWithWindows = false;
                    break;
                case 'invalidGMail':
                    $group->validWithGMail = false;
                    break;
                case 'invalidSamsung':
                    $group->validWithSamsung = false;
                    break;
                case 'invalidDoCoMo':
                    $group->validWithDoCoMo = false;
                    break;
                case 'invalidKDDI':
                    $group->validWithKDDI = false;
                    break;
                case 'invalidSoftBank':
                    $group->validWithSoftBank = false;
                    break;
                case 'shortName':
                    $group->shortName = $val;

                    $adaptName = $this->_h($val);
                    $group->shortNameAliases = isset($shortNames[$adaptName]) ? $shortNames[$adaptName] : [];
                    break;
                case 'endRow':
                    $mediumGroup->addGroup($group);
                    break;
                case 'lastRow':
                    $bigGroup->addMediumGroup($mediumGroup);
                    $bigGroups->addBigGroup($bigGroup);
                    break;
            }
        }

        $g = serialize($bigGroups);
        file_put_contents($cacheFile, $g);

        return $bigGroups;
    }

    /**
     *
     * @param BigGroups $base
     * @param BigGroups $add
     */
    public function merge(BigGroups $base, BigGroups $add)
    {
        foreach ($base->getBigGroups() as $bigGroupName => $bigGroup) {

            foreach ($bigGroup->getMediumGroups() as $mediumGroupName => $mediumGroup) {

                foreach ($add->getBigGroups() as $addBigGroupName => $addBigGroup) {

                    if ($bigGroupName !== $addBigGroupName) {
                        $base->addBigGroupByMerge($addBigGroup);
                        continue;
                    }

                    foreach ($addBigGroup->getMediumGroups() as $addMediumGroupName => $addMediumGroup) {

                        if ($mediumGroupName !== $addMediumGroupName) {
                            $bigGroup->addMediumGroupByMerge($addMediumGroup);
                            continue;
                        }

                        foreach ($addMediumGroup->getGroups() as $addGroup) {
                            $mediumGroup->addGroup($addGroup);
                        }
                    }
                }
            }
        }
    }

    /**
     * Fetch table row
     *
     * @param string $url
     *
     * @return \Generator
     */
    private function fetchTableRows($url)
    {
        $dom = PHPQuery::newDocumentFile($url);

        $tableRows = pq($dom)->find('.main table')->eq(0)->find('tr');
        $tableRowCount = $tableRows->count();

        $isFirstBigGroup = true;
        $isFirstMediumGroup = true;
        foreach ($tableRows as $i => $tr) {
            $phpQueryObject = pq($tr); /* @var \phpQueryObject */

            // Big Group Name
            $bighead = $phpQueryObject->find('th.bighead');
            if ($bighead->count() === 1) {

                if ($isFirstBigGroup === true) {
                    yield 'bigGroupInit' => true;
                    $isFirstBigGroup = false;
                } else {
                    yield 'changedBigGroup' => true;
                }

                yield 'bigGroupName' => $bighead->find('a')->text();
                continue;
            }

            // Medium Group Name
            $mediumhead = $phpQueryObject->find('th.mediumhead');
            if ($mediumhead->count() === 1) {

                if ($isFirstMediumGroup === true) {
                    yield 'mediumGroupInit' => true;
                    $isFirstMediumGroup = false;
                } else {
                    yield 'changedMediumGroup' => true;
                }

                yield 'mediumGroupName' => $mediumhead->find('a')->text();
                continue;
            }

            // No
            $no = $phpQueryObject->find('td.rchars');
            if ($no->count() === 1) {
                yield 'startRow' => true;
            }

            // Code
            $code = $phpQueryObject->find('td.code');
            if ($code->count() === 1) {
                yield 'code' => $code->find('a')->text();
            }

            // Vendor Support
            $andr = $phpQueryObject->find('td.andr');
            if ($andr->count() === 1) {
                yield 'notSupport' => true;
            }
            if ($andr->count() === 11) {
                foreach ($andr as $c => $vendor) {

                    if ($vendor->nodeValue !== '—') {
                        continue;
                    }

                    switch ($c) {
                        case 0:
                            yield 'invalidApple' => true;
                            break;
                        case 1:
                            yield 'invalidGoogle' => true;
                            break;
                        case 2:
                            yield 'invalidFacebook' => true;
                            break;
                        case 3:
                            yield 'invalidWindows' => true;
                            break;
                        case 4:
                            yield 'invalidTwitter' => true;
                            break;
                        case 5:
                            yield 'invalidJoyPixels' => true;
                            break;
                        case 6:
                            yield 'invalidSamsung' => true;
                            break;
                        case 7:
                            yield 'invalidGMail' => true;
                            break;
                        case 8:
                            yield 'invalidSoftBank' => true;
                            break;
                        case 9:
                            yield 'invalidDoCoMo' => true;
                            break;
                        case 10:
                            yield 'invalidKDDI' => true;
                            break;
                        default:
                            break;
                    }
                }
            }

            // CLDR Short Name
            $shortName = $phpQueryObject->find('td.name');
            if ($shortName->count() === 1) {
                yield 'shortName' => $shortName->text();
                yield 'endRow'    => true;
            }

            // Last Row
            if ( ($i + 1) === $tableRowCount) {
                yield 'lastRow' => true;
            }
        }
    }

    /**
     *
     * @return array ['name' => ['shortName','shortName',,],,]
     *
     * @link https://github.com/joypixels/emoji-toolkit/blob/master/emoji.json
     */
    private function fetchShortNamesFromJoyPixelsJson()
    {
        static $shortNames;

        if ($shortNames !== null) {
            return $shortNames;
        }

        $url = 'https://raw.githubusercontent.com/joypixels/emoji-toolkit/master/emoji.json';

        $ch = curl_init($url);

        $option = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false
        ];

        curl_setopt_array($ch, $option);

        $json    = curl_exec($ch);
        $info    = curl_getinfo($ch);
        $errorNo = curl_errno($ch);

        if ($errorNo !== CURLE_OK) {
            return [];
        }

        if ($info['http_code'] !== 200) {
            return [];
        }

        $decoded = json_decode($json, true);
        foreach ($decoded as $val) {
            $shortNames[$val['name']] = array_merge(
                [$val['shortname']],
                $val['shortname_alternates'],
                $val['ascii']
            );
        }

        return $shortNames;
    }

    /**
     *
     * @param string $in
     *
     * @return string
     */
    private function _h($in)
    {
        return htmlspecialchars($in, ENT_QUOTES, 'UTF-8');
    }
}
