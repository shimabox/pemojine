<?php

namespace SMB\Pemojine\Scraping\Result;

/**
 *
 */
class Result
{
    /**
     *
     * @var array
     */
    private $result = [];

    /**
     * 
     * @param string  $bigGroupName
     * @param string  $mediumGroupName
     * @param string  $groupName
     * @param string  $shortNameAliases
     * @param string  $unicode
     * @param boolean $supprtApple
     * @param boolean $supprtGoogle
     * @param boolean $supprtTwitter
     * @param boolean $supprtJoyPixels
     * @param boolean $supprtFacebook
     * @param boolean $supprtSamsung
     * @param boolean $supprtWindows
     * @param boolean $supprtGmail
     * @param boolean $supprtSoftbank
     * @param boolean $supprtDocomo
     * @param boolean $supprtKddi
     */
    public function add(
        $bigGroupName = '', 
        $mediumGroupName = '', 
        $groupName = '', 
        $shortNameAliases = '', 
        $unicode = '', 
        $supprtApple = false,
        $supprtGoogle = false,
        $supprtTwitter = false,
        $supprtJoyPixels = false,
        $supprtFacebook = false,
        $supprtSamsung = false,
        $supprtWindows = false,
        $supprtGmail = false,
        $supprtSoftbank = false,
        $supprtDocomo = false,
        $supprtKddi = false
    )
    {
        $row = [
            'BigGroup'         => $bigGroupName,
            'MediumGroup'      => $mediumGroupName,
            'Group(ShortName)' => $groupName,
            'ShortNameAliases' => $shortNameAliases,
            'Unicode'          => $unicode,
            'Appl'             => $supprtApple     ? 'Yes' : 'No',
            'Goog.'            => $supprtGoogle    ? 'Yes' : 'No',
            'Twtr'             => $supprtTwitter   ? 'Yes' : 'No',
            'Joy'              => $supprtJoyPixels ? 'Yes' : 'No',
            'FB'               => $supprtFacebook  ? 'Yes' : 'No',
            'Sams.'            => $supprtSamsung   ? 'Yes' : 'No',
            'Wind.'            => $supprtWindows   ? 'Yes' : 'No',
            'GMail'            => $supprtGmail     ? 'Yes' : 'No',
            'SB'               => $supprtSoftbank  ? 'Yes' : 'No',
            'DCM'              => $supprtDocomo    ? 'Yes' : 'No',
            'KDDI'             => $supprtKddi      ? 'Yes' : 'No',
        ];

        $this->result[] = $row;
    }

    /**
     * 
     * @return array
     */
    public function getResult()
    {
        return $this->result;
    }
}
