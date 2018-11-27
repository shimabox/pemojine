<?php

namespace SMB\Pemojine\Structure\Interfaces;

/**
 *
 */
interface Gettable
{
    /**
     * 
     * @return array
     */
    public function getBigGroup();

    /**
     * 
     * @return array
     */
    public function getMediumGroups();

    /**
     * 
     * @return array
     */
    public function getGroups();
}
