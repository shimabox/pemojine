<?php

namespace SMB\Pemojine\Scraping\Emoji;

use SMB\Pemojine\Scraping\Emoji\Group;

/**
 * 
 */
class MediumGroup implements \Countable
{
    /**
     *
     * @var string
     */
    public $groupName = '';

    /**
     *
     * @var array
     */
    private $groups = [];

    /**
     *
     * @param Group $group
     * @return void
     */
    public function addGroup(Group $group)
    {
        $this->groups[$group->shortName] = $group;
    }

    /**
     * @return \Generator
     */
    public function getGroups()
    {
        foreach ($this->groups as $name => $group) {
            yield $name => $group;
        }
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->groups);
    }
}
