<?php

namespace SMB\Pemojine\Example\Custom\Structure\Vendor\Original;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Custom
 */
class Gambling implements Gettable
{
    /**
     * 
     * @return array
     */
    public function getBigGroup()
    {
        return $this->bigGroup;
    }

    /**
     * 
     * @return array
     */
    public function getMediumGroups()
    {
        return $this->mediumGroups;
    }

    /**
     * 
     * @return array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * 
     * @var array
     */
    private $bigGroup = [
        'Gambling' => [
            'parent' => null,
            'children' => [
                'gambling'
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'gambling' => [
            'parent' => 'Gambling',
            'children' => [
                'gambling'
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'gambling' => [
            'parent' => 'gambling',
            'children' => null,
            'aliases' => []
        ]
    ];
}
