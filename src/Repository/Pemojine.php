<?php

namespace SMB\Pemojine\Repository;

use SMB\Pemojine\Entity;
use SMB\Pemojine\Exception\Exception;

/**
 * Repository of each group.
 */
class Pemojine implements Gettable
{
    /**
     *
     * @var string
     */
    private $vendorName = '';

    /**
     *
     * @var array [['bigGroupName' => \SMB\Pemojine\Entity\BigGroup],,]
     */
    private $bigGroups = [];

    /**
     *
     * @var array [['mediumGroupName' => \SMB\Pemojine\Entity\MediumGroup],,]
     */
    private $mediumGroups = [];

    /**
     *
     * @var array [['groupName' => \SMB\Pemojine\Entity\Group],,]
     */
    private $groups = [];

    /**
     *
     * @var array ['groupAliaseName' => 'groupName']
     */
    private $groupAliases = [];

    /**
     * 
     */
    public function __construct(){}

    /**
     * 
     * @param string $vendorName
     * 
     * @return void
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;
    }

    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     *
     * @param string $name
     * @param Entity\BigGroup $group
     * 
     * @return void
     */
    public function addBigGroup($name, Entity\BigGroup $group)
    {
        $this->bigGroups[$name] = $group;
    }

    /**
     *
     * @param string $name
     * 
     * @return void
     */
    public function removeBigGroup($name)
    {
        if (isset($this->bigGroups[$name])) {
            unset($this->bigGroups[$name]);
        }
    }

    /**
     *
     * @param string $name
     * @param Entity\MediumGroup $group
     * 
     * @return void
     */
    public function addMediumGroup($name, Entity\MediumGroup $group)
    {
        $this->mediumGroups[$name] = $group;
    }

    /**
     *
     * @param string $name
     * 
     * @return void
     */
    public function removeMediumGroup($name)
    {
        if (isset($this->mediumGroups[$name])) {
            unset($this->mediumGroups[$name]);
        }
    }

    /**
     * 
     * @param string $name
     * @param Entity\Group $group
     * 
     * @return void
     */
    public function addGroup($name, Entity\Group $group)
    {
        $this->groups[$name] = $group;
    }

    /**
     *
     * @param string $name
     * 
     * @return void
     */
    public function removeGroup($name)
    {
        if (isset($this->groups[$name])) {
            unset($this->groups[$name]);
        }
    }

    /**
     * 
     * @param string $alias
     * @param string $name
     * 
     * @return void
     */
    public function addGroupAliase($alias, $name)
    {
        $this->groupAliases[$alias] = $name;
    }

    /**
     * 
     * @return array ['bigGroupName' => \SMB\Pemojine\Entity\BigGroup]
     */
    public function getAllBigGroups()
    {
        return $this->bigGroups;
    }

    /**
     * 
     * @return int
     */
    public function countOfBigGroups()
    {
        return count($this->bigGroups);
    }

    /**
     * 
     * @return array ['mediumGroupName' => \SMB\Pemojine\Entity\MediumGroup]
     */
    public function getAllMediumGroups()
    {
        return $this->mediumGroups;
    }

    /**
     * 
     * @return int
     */
    public function countOfMediumGroups()
    {
        return count($this->mediumGroups);
    }

    /**
     * 
     * @return \Generator ['groupName' => \SMB\Pemojine\Entity\Group]
     */
    public function getAllGroups()
    {
        return $this->groups;
    }

    /**
     * 
     * @return int
     */
    public function countOfGroups()
    {
        return count($this->groups);
    }

    /**
     * 
     * @return \SMB\Pemojine\Outputter\Outputtable|null
     */
    public function getOutputter()
    {
        $group = $this->randomFromGroup();

        if ($group === null) {
            return null;
        }

        return $group->getOutputter();
    }

    /**
     * 
     * @param string $name
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Entity\BigGroup
     */
    public function selectBigGroup($name)
    {
        if (isset($this->bigGroups[$name])) {
            return $this->bigGroups[$name];
        }

        throw Exception::groupNotFound($this->vendorName, $name);
    }

    /**
     * 
     * @param string $name
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Entity\MediumGroup
     */
    public function selectMediumGroup($name)
    {
        if (isset($this->mediumGroups[$name])) {
            return $this->mediumGroups[$name];
        }

        throw Exception::groupNotFound($this->vendorName, $name);
    }

    /**
     * 
     * @param string $name
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Entity\Group
     */
    public function selectGroup($name)
    {
        if (isset($this->groups[$name])) {
            return $this->groups[$name];
        }

        if (
            isset($this->groupAliases[$name])
            && isset($this->groups[$this->groupAliases[$name]])
        ) {
            return $this->groups[$this->groupAliases[$name]];
        }

        throw Exception::groupNotFound($this->vendorName, $name);
    }

    /**
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Entity\BigGroup|null
     */
    public function randomFromBigGroup()
    {
        $this->initSeed();

        if (count($this->bigGroups) === 0) {
            return null;
        }

        $name = array_rand($this->bigGroups, 1);
        return $this->selectBigGroup($name);
    }

    /**
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Entity\MediumGroup|null
     */
    public function randomFromMediumGroup()
    {
        $this->initSeed();

        if (count($this->mediumGroups) === 0) {
            return null;
        }

        $name = array_rand($this->mediumGroups, 1);
        return $this->selectMediumGroup($name);
    }

    /**
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Entity\Group|null
     */
    public function randomFromGroup()
    {
        $this->initSeed();

        if (count($this->groups) === 0) {
            return null;
        }

        $name = array_rand($this->groups, 1);
        return $this->selectGroup($name);
    }

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function hasBigGroup($name)
    {
        return isset($this->bigGroups[$name]);
    }

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function hasMediumGroup($name)
    {
        return isset($this->mediumGroups[$name]);
    }

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function hasGroup($name)
    {
        if (isset($this->groups[$name])) {
            return true;
        }

        if (
            isset($this->groupAliases[$name])
            && isset($this->groups[$this->groupAliases[$name]])
        ) {
            return true;
        }

        return false;
    }

    /**
     * Initialize seed
     * 
     * @return void
     */
    private function initSeed()
    {
        list($usec, $sec) = explode(' ', microtime());
        srand((int)$sec - (int)($usec * 100000000));
    }
}
