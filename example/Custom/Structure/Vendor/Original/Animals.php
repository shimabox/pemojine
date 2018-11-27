<?php

namespace SMB\Pemojine\Example\Custom\Structure\Vendor\Original;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Custom
 */
class Animals implements Gettable
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
        'Animals' => [
            'parent' => null,
            'children' => [
                'UMA',
                'dinosaur'
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'UMA' => [
            'parent' => 'Animals',
            'children' => [
                'unicorn face',
                'dragon face',
                'dragon',
            ]
        ],
        'dinosaur' => [
            'parent' => 'Animals',
            'children' => [
                'sauropod',
                'T-Rex',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'unicorn face' => [
            'parent' => 'UMA',
            'children' => null,
            'aliases' => [
                ':unicorn:',
                ':unicorn_face:',
                ':u:', // Alias name to be newly added by oneself.
            ]
        ],
        'dragon face' => [
            'parent' => 'UMA',
            'children' => null,
            'aliases' => [
                ':dragon_face:',
            ]
        ],
        'dragon' => [
            'parent' => 'UMA',
            'children' => null,
            'aliases' => [
                ':dragon:',
            ]
        ],
        'sauropod' => [
            'parent' => 'dinosaur',
            'children' => null,
            'aliases' => [
                ':sauropod:',
            ]
        ],
        'T-Rex' => [
            'parent' => 'dinosaur',
            'children' => null,
            'aliases' => [
                ':t_rex:',
            ]
        ],
    ];
}