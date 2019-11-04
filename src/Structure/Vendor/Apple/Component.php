<?phpnamespace SMB\Pemojine\Structure\Vendor\Apple;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class Component implements Gettable
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
        'Component' => [
            'parent' => null,
            'children' => [
                'hair-style',
                'skin-tone',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'hair-style' => [
            'parent' => 'Component',
            'children' => [
                'red hair',
                'curly hair',
                'white hair',
                'bald',
            ]
        ],
        'skin-tone' => [
            'parent' => 'Component',
            'children' => [
                'light skin tone',
                'medium-light skin tone',
                'medium skin tone',
                'medium-dark skin tone',
                'dark skin tone',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'red hair' => [
            'parent' => 'hair-style',
            'children' => null,
            'aliases' => [
                ':red_haired:',
            ]
        ],
        'curly hair' => [
            'parent' => 'hair-style',
            'children' => null,
            'aliases' => [
                ':curly_haired:',
            ]
        ],
        'white hair' => [
            'parent' => 'hair-style',
            'children' => null,
            'aliases' => [
                ':white_haired:',
            ]
        ],
        'bald' => [
            'parent' => 'hair-style',
            'children' => null,
            'aliases' => [
                ':bald:',
            ]
        ],
        'light skin tone' => [
            'parent' => 'skin-tone',
            'children' => null,
            'aliases' => [
                ':tone1:',
            ]
        ],
        'medium-light skin tone' => [
            'parent' => 'skin-tone',
            'children' => null,
            'aliases' => [
                ':tone2:',
            ]
        ],
        'medium skin tone' => [
            'parent' => 'skin-tone',
            'children' => null,
            'aliases' => [
                ':tone3:',
            ]
        ],
        'medium-dark skin tone' => [
            'parent' => 'skin-tone',
            'children' => null,
            'aliases' => [
                ':tone4:',
            ]
        ],
        'dark skin tone' => [
            'parent' => 'skin-tone',
            'children' => null,
            'aliases' => [
                ':tone5:',
            ]
        ],
    ];
}
