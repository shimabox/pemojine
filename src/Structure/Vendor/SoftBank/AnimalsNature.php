<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

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
                'animal-amphibian',
                'animal-reptile',
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
                'monkey face',
                'monkey',
                'dog face',
                'wolf',
                'cat face',
                'tiger face',
                'horse face',
                'horse',
                'cow face',
                'pig face',
                'boar',
                'ewe',
                'two-hump camel',
                'elephant',
                'mouse face',
                'hamster',
                'rabbit face',
                'bear',
                'koala',
            ]
        ],
        'animal-bird' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'chicken',
                'baby chick',
                'bird',
                'penguin',
            ]
        ],
        'animal-amphibian' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'frog',
            ]
        ],
        'animal-reptile' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'snake',
            ]
        ],
        'animal-marine' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'spouting whale',
                'dolphin',
                'fish',
                'tropical fish',
                'octopus',
                'spiral shell',
            ]
        ],
        'animal-bug' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'bug',
            ]
        ],
        'plant-flower' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'bouquet',
                'cherry blossom',
                'rose',
                'hibiscus',
                'sunflower',
                'tulip',
            ]
        ],
        'plant-other' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'palm tree',
                'cactus',
                'sheaf of rice',
                'four leaf clover',
                'maple leaf',
                'fallen leaf',
                'leaf fluttering in wind',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'monkey face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':monkey_face:',
            ]
        ],
        'monkey' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':monkey:',
            ]
        ],
        'dog face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':dog:',
            ]
        ],
        'wolf' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'cat face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':cat:',
            ]
        ],
        'tiger face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':tiger:',
            ]
        ],
        'horse face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':horse:',
            ]
        ],
        'horse' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':racehorse:',
            ]
        ],
        'cow face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':cow:',
            ]
        ],
        'pig face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':pig:',
            ]
        ],
        'boar' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':boar:',
            ]
        ],
        'ewe' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':sheep:',
            ]
        ],
        'two-hump camel' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':camel:',
            ]
        ],
        'elephant' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':elephant:',
            ]
        ],
        'mouse face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':mouse:',
            ]
        ],
        'hamster' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'rabbit face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':rabbit:',
            ]
        ],
        'bear' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'koala' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':koala:',
            ]
        ],
        'chicken' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':chicken:',
            ]
        ],
        'baby chick' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':baby_chick:',
            ]
        ],
        'bird' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':bird:',
            ]
        ],
        'penguin' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':penguin:',
            ]
        ],
        'frog' => [
            'parent' => 'animal-amphibian',
            'children' => null,
            'aliases' => [
            ]
        ],
        'snake' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':snake:',
            ]
        ],
        'spouting whale' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':whale:',
            ]
        ],
        'dolphin' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':dolphin:',
            ]
        ],
        'fish' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':fish:',
            ]
        ],
        'tropical fish' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':tropical_fish:',
            ]
        ],
        'octopus' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':octopus:',
            ]
        ],
        'spiral shell' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':shell:',
            ]
        ],
        'bug' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':bug:',
            ]
        ],
        'bouquet' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':bouquet:',
            ]
        ],
        'cherry blossom' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':cherry_blossom:',
            ]
        ],
        'rose' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':rose:',
            ]
        ],
        'hibiscus' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':hibiscus:',
            ]
        ],
        'sunflower' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':sunflower:',
            ]
        ],
        'tulip' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':tulip:',
            ]
        ],
        'palm tree' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':palm_tree:',
            ]
        ],
        'cactus' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':cactus:',
            ]
        ],
        'sheaf of rice' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':ear_of_rice:',
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
        'fallen leaf' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':fallen_leaf:',
            ]
        ],
        'leaf fluttering in wind' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':leaves:',
            ]
        ],
    ];
}
