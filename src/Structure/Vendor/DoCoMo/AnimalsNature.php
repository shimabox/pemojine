<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class AnimalsNature implements Gettable
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
        'Animals & Nature' => [
            'parent' => null,
            'children' => [
                'animal-mammal',
                'animal-bird',
                'animal-marine',
                'animal-bug',
                'plant-flower',
                'plant-other',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'animal-mammal' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'dog face',
                'cat face',
                'horse face',
                'pig face',
            ]
        ],
        'animal-bird' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'baby chick',
                'penguin',
            ]
        ],
        'animal-marine' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'fish',
            ]
        ],
        'animal-bug' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'snail',
            ]
        ],
        'plant-flower' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'cherry blossom',
                'tulip',
            ]
        ],
        'plant-other' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'seedling',
                'four leaf clover',
                'maple leaf',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'dog face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':dog:',
            ]
        ],
        'cat face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':cat:',
            ]
        ],
        'horse face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':horse:',
            ]
        ],
        'pig face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':pig:',
            ]
        ],
        'baby chick' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':baby_chick:',
            ]
        ],
        'penguin' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':penguin:',
            ]
        ],
        'fish' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':fish:',
            ]
        ],
        'snail' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':snail:',
            ]
        ],
        'cherry blossom' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':cherry_blossom:',
            ]
        ],
        'tulip' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':tulip:',
            ]
        ],
        'seedling' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':seedling:',
            ]
        ],
        'four leaf clover' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':four_leaf_clover:',
            ]
        ],
        'maple leaf' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':maple_leaf:',
            ]
        ],
    ];
}
