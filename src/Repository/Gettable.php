<?php

namespace SMB\Pemojine\Repository;

/**
 * Interface of Pemojine repository.
 */
interface Gettable
{
    /**
     * 
     * @return string
     */
    public function getVendorName();

    /**
     * 
     * @return \Generator ['bigGroupName' => \SMB\Pemojine\Structure\BigGroup]
     */
    public function getAllBigGroups();

    /**
     * 
     * @return int
     */
    public function countOfBigGroups();

    /**
     * 
     * @return \Generator ['mediumGroupName' => \SMB\Pemojine\Structure\MediumGroup]
     */
    public function getAllMediumGroups();

    /**
     * 
     * @return int
     */
    public function countOfMediumGroups();

    /**
     * 
     * @return int
     */
    public function countOfGroups();

    /**
     * 
     * @return \Generator ['groupName' => \SMB\Pemojine\Structure\Group]
     */
    public function getAllGroups();

    /**
     * 
     * @return \SMB\Pemojine\Outputter\Outputtable
     */
    public function getOutputter();

    /**
     * 
     * @param string $name
     * 
     * @throws Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Structure\BigGroup
     */
    public function selectBigGroup($name);

    /**
     * 
     * @param string $name
     * 
     * @throws Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Structure\MediumGroup
     */
    public function selectMediumGroup($name);

    /**
     * 
     * @param string $name
     * 
     * @throws Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Structure\Group
     */
    public function selectGroup($name);

    /**
     * 
     * @throws Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Structure\BigGroup
     */
    public function randomFromBigGroup();

    /**
     * 
     * @throws Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Structure\MediumGroup
     */
    public function randomFromMediumGroup();

    /**
     * 
     * @throws Exception\GroupNotFound
     * 
     * @return \SMB\Pemojine\Structure\Group
     */
    public function randomFromGroup();

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function hasBigGroup($name);

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function hasMediumGroup($name);

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function hasGroup($name);
}
