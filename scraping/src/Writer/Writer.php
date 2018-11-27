<?php

namespace SMB\Pemojine\Scraping\Writer;

use SMB\Pemojine\Config\Vendor;
use SMB\Pemojine\Scraping\Emoji\BigGroups;
use SMB\Pemojine\Scraping\Emoji\Group;

use Philo\Blade\Blade;

/**
 * 
 */
class Writer
{
    /**
     *
     * @var string
     */
    const PHPDOC_VAR = '@var';

    /**
     * 
     * @var string
     */
    const PHPDOC_PARAM = '@param';

    /**
     * 
     * @var string
     */
    const PHPDOC_RETURN = '@return';

    /**
     *
     * @var BigGroups
     */
    private $groups;

    /**
     *
     * @var string
     */
    private $outputDir;

    /**
     *
     * @var Blade
     */
    private $template;

    /**
     * 
     * @param BigGroups $groups
     */
    public function __construct(BigGroups $groups)
    {
        $this->groups = $groups;

        $this->outputDir   = realpath(dirname(__FILE__) . '/../../output');

        $template = realpath(dirname(__FILE__) . '/../../template');
        $cacheDir = realpath(dirname(__FILE__) . '/../../cache');
        $this->template = new Blade($template, $cacheDir);
    }

    /**
     * Initialize. Delete files and so on.
     * 
     * @return void
     */
    public function init()
    {
        foreach(glob($this->outputDir . '/Structure/Vendor/*') as $target){
            exec("rm -rf {$target}");
        }

        foreach(glob($this->outputDir . '/Config/*') as $target){
            exec("rm -rf {$target}");
        }
    }

    /**
     * Write files.
     * 
     * @return void
     */
    public function write()
    {
        $this->writeConfigEmojiTable($this->groups, $this->template);
        $this->writeConfigEmojiCount($this->groups, $this->template);

        list($groupAssets, $emojiTableAssets) = $this->createAssets($this->groups);
        $structureOutputDir = $this->outputDir . '/Structure/Vendor';

        $this->writeStructureBase($groupAssets, $this->template, $structureOutputDir);
        $this->writeStructure($groupAssets, $this->template, $structureOutputDir);
        $this->writeStructureEmojiTable($emojiTableAssets, $this->template, $structureOutputDir);
    }

    /**
     * Write Config/EmojiTable.php
     * 
     * @param BigGroups $groups
     * @param Blade $template
     * 
     * @return void
     */
    private function writeConfigEmojiTable(BigGroups $groups, Blade $template)
    {
        $table = [];
        $shortNameAliases = [];
        $unicodeToShortNames = [];
        foreach ($groups->getBigGroups() as $bigGroup) {
            foreach ($bigGroup->getMediumGroups() as $mediumgroup) {
                foreach ($mediumgroup->getGroups() as $group) {

                    if (!$group->isEvenOneSupported()) {
                        continue;
                    }

                    $codes = [];
                    foreach ($group->getCodes() as $code) {
                        $codes[] = $code;
                    }

                    $table[$group->shortName]['unicode'] = implode(' ', $codes);
                    $table[$group->shortName]['supportVendor'] = $this->supportVendor($group);

                    $shortNames = [];
                    foreach($group->shortNameAliases as $alias) {
                        $escapedName = $this->escapeLastBackslash($alias);
                        $shortNameAliases[$escapedName] = $group->shortName;
                        $shortNames[] = $escapedName;
                    }

                    $unicodeToShortNames[implode(' ', $codes)] = array_merge([$group->shortName], $shortNames);
                }
            }
        }

        $view = $template->view()->make('configEmojiTable', [
            'table'                 => $table,
            'shortNameAliases'      => $shortNameAliases,
            'unicodeToShortNames'   => $unicodeToShortNames,
            'escapeSingleQuotation' => function ($v) {
                return $this->escapeSingleQuotation($v);
            },
            'restoreLastBackslash'  => function ($v) {
                return $this->restoreLastBackslash($v);
            },
            'phpdocVar'             => self::PHPDOC_VAR
        ]);

        file_put_contents(
            $this->outputDir . '/Config/EmojiTable' . '.php',
            "<?php\r\r" . $view
        );
    }

    /**
     * Write Config/EmojiCount.php
     * 
     * @param BigGroups $groups
     * @param Blade $template
     * 
     * @return void
     */
    private function writeConfigEmojiCount(BigGroups $groups, Blade $template)
    {
        $bigGroupCnt = count($groups);
        $mediumGroupCnt = 0;
        $groupCnt = 0;

        foreach ($groups->getBigGroups() as $bigGroup) {
            $mediumGroupCnt += count($bigGroup);

            foreach ($bigGroup->getMediumGroups() as $mediumgroup) {
                $groupCnt += count($mediumgroup);
            }
        }

        $view = $template->view()->make('configEmojiCount', [
            'bigGroupCnt'    => $bigGroupCnt,
            'mediumGroupCnt' => $mediumGroupCnt,
            'groupCnt'       => $groupCnt,
            'phpdocVar'      => self::PHPDOC_VAR
        ]);

        file_put_contents(
            $this->outputDir . '/Config/EmojiCount' . '.php',
            "<?php\r\r" . $view
        );
    }

    /**
     * Escape backmost backward slash.
     * 
     * @param string $in
     * 
     * @return string e.g)something\ => something\\
     */
    private function escapeLastBackslash($in)
    {
        return preg_replace('/\\\\\z/', '\\\\\\', $in);
    }

    /**
     * Escape single quotation.
     * 
     * @param string $in
     * 
     * @return string e.g)some'thing => some\'thing
     */
    private function escapeSingleQuotation($in)
    {
        return preg_replace('/\'/', '\\\'', $in);
    }

    /**
     * Restore the backward slash most behind.
     * 
     * @param string $in
     * 
     * @return string
     */
    private function restoreLastBackslash($in)
    {
        return preg_replace('/\\\\\\\\\z/', '\\', $in);
    }

    /**
     * Get support vendor.
     * 
     * @param Group $group
     * 
     * @return array
     */
    private function supportVendor(Group $group)
    {
        $ret = [];
        foreach (Vendor::$VENDORS_LIST as $vendor) {
            $func = 'validWith' . $vendor;
            if ($group->$func === true) {
                $ret[] = $vendor;
            }
        }

        return $ret;
    }

    /**
     * Create assets for creating files.
     * 
     * @param BigGroups $bigGroups
     * 
     * @return array [array, array]
     */
    private function createAssets(BigGroups $bigGroups)
    {
        $groupAssets      = [];
        $emojiTableAssets = [];

        foreach ($bigGroups->getBigGroups() as $bigGroup) {

            foreach ($bigGroup->getMediumGroups() as $mediumgroup) {

                foreach ($mediumgroup->getGroups() as $group) {

                    if (!$group->isEvenOneSupported()) {
                        continue;
                    }

                    $codes = [];
                    foreach ($group->getCodes() as $index => $code) {
                        $codes[] = $code;
                    }
                    $unicode = implode(' ', $codes);

                    foreach (Vendor::$VENDORS_LIST as $vendorName) {
                        $this->poolAssets(
                            $vendorName,
                            $group,
                            $bigGroup->bigGroupName,
                            $mediumgroup->groupName,
                            $unicode,
                            $groupAssets,     // Pass by Reference
                            $emojiTableAssets // Pass by Reference
                        );
                    }

                    $this->poolAssets(
                        Vendor::ALL_SUPPORTS_VENDOR_NAME,
                        $group,
                        $bigGroup->bigGroupName,
                        $mediumgroup->groupName,
                        $unicode,
                        $groupAssets,      // Pass by Reference
                        $emojiTableAssets, // Pass by Reference
                        true
                    );
                }
            }
        }

        return [$groupAssets, $emojiTableAssets];
    }

    /**
     * Store assets for each group.
     * 
     * @param string $vendorName
     * @param Group $group
     * @param string $bigGroupName
     * @param string $mediumGroupName
     * @param string $unicode
     * @param array $groupAssets Reference
     * @param array $emojiTableAssets Reference
     * @param boolean $isCommon True if all vendors support it.
     * 
     * @return void
     */
    private function poolAssets(
        $vendorName,
        Group $group,
        $bigGroupName,
        $mediumGroupName,
        $unicode,
        &$groupAssets,
        &$emojiTableAssets,
        $isCommon = false
    )
    {
        if ($isCommon === true) {
            if ($group->isAllSupported() === false) {
                return;
            }
        } else {
            $func = 'validWith'. $vendorName;
            if ($group->$func === false) {
                return;
            }
        }

        $shortNameAliases = [];
        foreach($group->shortNameAliases as $alias) {
            $shortNameAliases[$this->escapeLastBackslash($alias)] = $group->shortName;
        }

        if (!isset($groupAssets[$vendorName]['bigGroup'])) {
            $groupAssets[$vendorName]['bigGroup'] = [];
        }
        if (!in_array($bigGroupName, $groupAssets[$vendorName]['bigGroup'])) {
            $groupAssets[$vendorName]['bigGroup'][] = $bigGroupName;
        }
        $groupAssets[$vendorName][$bigGroupName][$mediumGroupName]['groupNames'][] = $group->shortName;
        $groupAssets[$vendorName][$bigGroupName][$mediumGroupName]['groupShortNameAliases'][$group->shortName] = array_keys($shortNameAliases);

        $emojiTableAssets[$vendorName]['table'][$group->shortName] = $unicode;
        foreach ($shortNameAliases as $alias => $baseName) {
            $emojiTableAssets[$vendorName]['shortNameAliases'][$alias] = $baseName;
        }
    }

    /**
     * Write Structure/Vendor/{$VendorName}.php
     * 
     * @param array $assets
     * @param Blade $template
     * @param string $outputDir
     * 
     * @return void
     */
    private function writeStructureBase(
        array $assets,
        Blade $template,
        $outputDir
    )
    {
        foreach ($assets as $vendorName => $groups) {

            $classes = [];

            foreach ($groups['bigGroup'] as $bigGroupName) {
                $classes[] = $vendorName . '\\' . $this->normalizeBigGroupName($bigGroupName) . '::class';
            }

            $viewParam = [];
            $viewParam['vendorName']   = $vendorName;
            $viewParam['classes']      = $classes;
            $viewParam['phpdocReturn'] = self::PHPDOC_RETURN;

            $view = $template->view()->make('structureBase', $viewParam);
            file_put_contents(
                $outputDir . '/' . $vendorName . '.php',
                "<?php\r\r" . $view
            );
        }
    }

    /**
     * Write Structure/Vendor/{$VendorName}/{$BigGroupName}.php
     * 
     * @param array $assets
     * @param Blade $template
     * @param string $outputDir
     * 
     * @return void
     */
    private function writeStructure(
        array $assets,
        Blade $template,
        $outputDir
    )
    {
        foreach ($assets as $vendorName => $groups) {

            foreach ($groups['bigGroup'] as $bigGroupName) {

                $viewParam = [];

                foreach ($groups[$bigGroupName] as $mediumGroupName => $group) {

                    $viewParam['mediumGroups'][$mediumGroupName] = [
                        'parent'   => $bigGroupName,
                        'children' => $group['groupNames']
                    ];

                    foreach ($group['groupNames'] as $groupName) {
                        $viewParam['groups'][$groupName] = [
                            'parent'  => $mediumGroupName,
                            'aliases' => $group['groupShortNameAliases'][$groupName]
                        ];
                    }

                }

                $viewParam['vendorName']              = $vendorName;
                $viewParam['className']               = $this->normalizeBigGroupName($bigGroupName);
                $viewParam['bigGroup'][$bigGroupName] = array_keys($groups[$bigGroupName]);
                $viewParam['escapeSingleQuotation']   = function ($v) {
                    return $this->escapeSingleQuotation($v);
                };
                $viewParam['restoreLastBackslash']    = function ($v) {
                    return $this->restoreLastBackslash($v);
                };
                $viewParam['phpdocVar']               = self::PHPDOC_VAR;
                $viewParam['phpdocReturn']            = self::PHPDOC_RETURN;

                if (! file_exists($outputDir . '/' . $vendorName)) {
                    mkdir($outputDir . '/' . $vendorName, 0777);
                }

                $view = $template->view()->make('structure', $viewParam);
                file_put_contents(
                    $outputDir . '/' . $vendorName . '/' . $this->normalizeBigGroupName($bigGroupName) . '.php',
                    "<?php\r\r" . $view
                );
            }
        }
    }

    /**
     * Write Structure/Vendor/{$VendorName}/EmojiTable.php
     * 
     * @param array $assets
     * @param Blade $template
     * @param string $outputDir
     * 
     * @return void
     */
    private function writeStructureEmojiTable(
        array $assets,
        Blade $template,
        $outputDir
    )
    {
        foreach ($assets as $vendorName => $contents) {
            $viewParam = [];
            $viewParam['vendorName']            = $vendorName;
            $viewParam['table']                 = $contents['table'];
            $viewParam['shortNameAliases']      = $contents['shortNameAliases'];
            $viewParam['escapeSingleQuotation'] = function ($v) {
                return $this->escapeSingleQuotation($v);
            };
            $viewParam['restoreLastBackslash']  = function ($v) {
                return $this->restoreLastBackslash($v);
            };
            $viewParam['phpdocVar']             = self::PHPDOC_VAR;

            if (! file_exists($outputDir . '/' . $vendorName)) {
                mkdir($outputDir . '/' . $vendorName, 0777);
            }

            $view = $template->view()->make('emojiTable', $viewParam);
            file_put_contents(
                $outputDir . '/' . $vendorName . '/EmojiTable.php',
                "<?php\r\r" . $view
            );
        }
    }

    /**
     * Normalize the big group name. Because it is used as a class name.
     * 
     * @param string $bigGroupName
     * 
     * @return string
     */
    private function normalizeBigGroupName($bigGroupName)
    {
        return str_replace(array(' ', '　', '&'), '', $bigGroupName);
    }
}
