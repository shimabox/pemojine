<?php

namespace SMB\Pemojine\Scraping\Emoji;

use SMB\Pemojine\Scraping\Emoji\MediumGroup;

/**
 * 
 */
class BigGroup implements \Countable
{
    /**
     *
     * @var string
     */
    public $bigGroupName = '';

    /**
     *
     * @var array
     */
    private $mediumGroups = [];

    /**
     *
     * @param MediumGroup $group
     * @return void
     */
    public function addMediumGroup(MediumGroup $group=null)
    {
        $this->mediumGroups[$group->groupName] = $group;
    }

    /**
     * 
     * @return \Generator
     */
    public function getMediumGroups()
    {
        foreach ($this->mediumGroups as $name => $group) {
            yield $name => $group;
        }
    }

    /**
     *
     * @param MediumGroup $group
     * @return void
     */
    public function addMediumGroupByMerge(MediumGroup $group=null)
    {
        $this->mediumGroups += [$group->groupName => $group];
    }

    /**
     * 
     * @return int
     */
    public function count()
    {
        return count($this->mediumGroups);
    }
}
