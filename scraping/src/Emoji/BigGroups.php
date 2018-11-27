<?php

namespace SMB\Pemojine\Scraping\Emoji;

use SMB\Pemojine\Scraping\Emoji\BigGroup;

/**
 * 
 */
class BigGroups implements \Countable
{
    /**
     *
     * @var array
     */
    private $bigGroups = [];

    /**
     *
     * @param Group $bigGroup
     * @return void
     */
    public function addBigGroup(BigGroup $bigGroup)
    {
        $this->bigGroups[$bigGroup->bigGroupName] = $bigGroup;
    }

    /**
     * @return \Generator
     */
    public function getBigGroups()
    {
        foreach ($this->bigGroups as $name => $bigGroup) {
            yield $name => $bigGroup;
        }
    }

    /**
     *
     * @param BigGroup $bigGroup
     * @return void
     */
    public function addBigGroupByMerge(BigGroup $bigGroup)
    {
        $this->bigGroups += [$bigGroup->bigGroupName => $bigGroup];
    }

    /**
     * 
     * @return int
     */
    public function count()
    {
        return count($this->bigGroups);
    }
}
