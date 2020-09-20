<?phpnamespace SMB\Pemojine\Structure\Vendor\GMail;

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
                'poodle',
                'wolf',
                'cat face',
                'tiger face',
                'horse face',
                'horse',
                'cow face',
                'pig face',
                'boar',
                'pig nose',
                'ewe',
                'two-hump camel',
                'elephant',
                'mouse face',
                'hamster',
                'rabbit face',
                'bear',
                'koala',
                'panda',
                'paw prints',
            ]
        ],
        'animal-bird' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'chicken',
                'hatching chick',
                'baby chick',
                'front-facing baby chick',
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
                'turtle',
                'snake',
                'dragon face',
            ]
        ],
        'animal-marine' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'spouting whale',
                'dolphin',
                'fish',
                'tropical fish',
                'blowfish',
                'octopus',
                'spiral shell',
            ]
        ],
        'animal-bug' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'snail',
                'bug',
                'ant',
                'honeybee',
                'lady beetle',
            ]
        ],
        'plant-flower' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'bouquet',
                'cherry blossom',
                'white flower',
                'rose',
                'hibiscus',
                'sunflower',
                'blossom',
                'tulip',
            ]
        ],
        'plant-other' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'seedling',
                'palm tree',
                'cactus',
                'sheaf of rice',
                'herb',
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
        'poodle' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':poodle:',
            ]
        ],
        'wolf' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':wolf:',
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
        'pig nose' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':pig_nose:',
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
                ':hamster:',
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
                ':bear:',
            ]
        ],
        'koala' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':koala:',
            ]
        ],
        'panda' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':panda_face:',
            ]
        ],
        'paw prints' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':feet:',
                ':paw_prints:',
            ]
        ],
        'chicken' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':chicken:',
            ]
        ],
        'hatching chick' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':hatching_chick:',
            ]
        ],
        'baby chick' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':baby_chick:',
            ]
        ],
        'front-facing baby chick' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':hatched_chick:',
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
                ':frog:',
            ]
        ],
        'turtle' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':turtle:',
            ]
        ],
        'snake' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':snake:',
            ]
        ],
        'dragon face' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':dragon_face:',
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
        'blowfish' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':blowfish:',
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
        'snail' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':snail:',
            ]
        ],
        'bug' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':bug:',
            ]
        ],
        'ant' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':ant:',
            ]
        ],
        'honeybee' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':bee:',
            ]
        ],
        'lady beetle' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':lady_beetle:',
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
        'white flower' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':white_flower:',
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
        'blossom' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':blossom:',
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
        'herb' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':herb:',
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
