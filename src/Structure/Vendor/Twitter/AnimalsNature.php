<?phpnamespace SMB\Pemojine\Structure\Vendor\Twitter;

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
                'gorilla',
                'dog face',
                'dog',
                'poodle',
                'wolf',
                'fox',
                '⊛ raccoon',
                'cat face',
                'cat',
                'lion',
                'tiger face',
                'tiger',
                'leopard',
                'horse face',
                'horse',
                'unicorn',
                'zebra',
                'deer',
                'cow face',
                'ox',
                'water buffalo',
                'cow',
                'pig face',
                'pig',
                'boar',
                'pig nose',
                'ram',
                'ewe',
                'goat',
                'camel',
                'two-hump camel',
                '⊛ llama',
                'giraffe',
                'elephant',
                'rhinoceros',
                '⊛ hippopotamus',
                'mouse face',
                'mouse',
                'rat',
                'hamster',
                'rabbit face',
                'rabbit',
                'chipmunk',
                'hedgehog',
                'bat',
                'bear',
                'koala',
                'panda',
                '⊛ kangaroo',
                '⊛ badger',
                'paw prints',
            ]
        ],
        'animal-bird' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'turkey',
                'chicken',
                'rooster',
                'hatching chick',
                'baby chick',
                'front-facing baby chick',
                'bird',
                'penguin',
                'dove',
                'eagle',
                'duck',
                '⊛ swan',
                'owl',
                '⊛ peacock',
                '⊛ parrot',
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
                'crocodile',
                'turtle',
                'lizard',
                'snake',
                'dragon face',
                'dragon',
                'sauropod',
                'T-Rex',
            ]
        ],
        'animal-marine' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'spouting whale',
                'whale',
                'dolphin',
                'fish',
                'tropical fish',
                'blowfish',
                'shark',
                'octopus',
                'spiral shell',
            ]
        ],
        'animal-bug' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'snail',
                'butterfly',
                'bug',
                'ant',
                'honeybee',
                'lady beetle',
                'cricket',
                'spider',
                'spider web',
                'scorpion',
                '⊛ mosquito',
                '⊛ microbe',
            ]
        ],
        'plant-flower' => [
            'parent' => 'Animals & Nature',
            'children' => [
                'bouquet',
                'cherry blossom',
                'white flower',
                'rosette',
                'rose',
                'wilted flower',
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
                'evergreen tree',
                'deciduous tree',
                'palm tree',
                'cactus',
                'sheaf of rice',
                'herb',
                'shamrock',
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
        'gorilla' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':gorilla:',
            ]
        ],
        'dog face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':dog:',
            ]
        ],
        'dog' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':dog2:',
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
            ]
        ],
        'fox' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        '⊛ raccoon' => [
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
        'cat' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':cat2:',
            ]
        ],
        'lion' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'tiger face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':tiger:',
            ]
        ],
        'tiger' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':tiger2:',
            ]
        ],
        'leopard' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':leopard:',
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
        'unicorn' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'zebra' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':zebra:',
            ]
        ],
        'deer' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':deer:',
            ]
        ],
        'cow face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':cow:',
            ]
        ],
        'ox' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':ox:',
            ]
        ],
        'water buffalo' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':water_buffalo:',
            ]
        ],
        'cow' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':cow2:',
            ]
        ],
        'pig face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':pig:',
            ]
        ],
        'pig' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':pig2:',
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
        'ram' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':ram:',
            ]
        ],
        'ewe' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':sheep:',
            ]
        ],
        'goat' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':goat:',
            ]
        ],
        'camel' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':dromedary_camel:',
            ]
        ],
        'two-hump camel' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':camel:',
            ]
        ],
        '⊛ llama' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'giraffe' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':giraffe:',
            ]
        ],
        'elephant' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':elephant:',
            ]
        ],
        'rhinoceros' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':rhino:',
                ':rhinoceros:',
            ]
        ],
        '⊛ hippopotamus' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        'mouse face' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':mouse:',
            ]
        ],
        'mouse' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':mouse2:',
            ]
        ],
        'rat' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':rat:',
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
        'rabbit' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':rabbit2:',
            ]
        ],
        'chipmunk' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':chipmunk:',
            ]
        ],
        'hedgehog' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':hedgehog:',
            ]
        ],
        'bat' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
                ':bat:',
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
        'panda' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        '⊛ kangaroo' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
            ]
        ],
        '⊛ badger' => [
            'parent' => 'animal-mammal',
            'children' => null,
            'aliases' => [
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
        'turkey' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':turkey:',
            ]
        ],
        'chicken' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':chicken:',
            ]
        ],
        'rooster' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':rooster:',
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
        'dove' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':dove:',
                ':dove_of_peace:',
            ]
        ],
        'eagle' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':eagle:',
            ]
        ],
        'duck' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':duck:',
            ]
        ],
        '⊛ swan' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
            ]
        ],
        'owl' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
                ':owl:',
            ]
        ],
        '⊛ peacock' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
            ]
        ],
        '⊛ parrot' => [
            'parent' => 'animal-bird',
            'children' => null,
            'aliases' => [
            ]
        ],
        'frog' => [
            'parent' => 'animal-amphibian',
            'children' => null,
            'aliases' => [
            ]
        ],
        'crocodile' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':crocodile:',
            ]
        ],
        'turtle' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':turtle:',
            ]
        ],
        'lizard' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':lizard:',
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
        'dragon' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':dragon:',
            ]
        ],
        'sauropod' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':sauropod:',
            ]
        ],
        'T-Rex' => [
            'parent' => 'animal-reptile',
            'children' => null,
            'aliases' => [
                ':t_rex:',
            ]
        ],
        'spouting whale' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':whale:',
            ]
        ],
        'whale' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':whale2:',
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
        'shark' => [
            'parent' => 'animal-marine',
            'children' => null,
            'aliases' => [
                ':shark:',
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
        'butterfly' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':butterfly:',
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
                ':beetle:',
            ]
        ],
        'cricket' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':cricket:',
            ]
        ],
        'spider' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':spider:',
            ]
        ],
        'spider web' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':spider_web:',
            ]
        ],
        'scorpion' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
                ':scorpion:',
            ]
        ],
        '⊛ mosquito' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
            ]
        ],
        '⊛ microbe' => [
            'parent' => 'animal-bug',
            'children' => null,
            'aliases' => [
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
        'rosette' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':rosette:',
            ]
        ],
        'rose' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':rose:',
            ]
        ],
        'wilted flower' => [
            'parent' => 'plant-flower',
            'children' => null,
            'aliases' => [
                ':wilted_rose:',
                ':wilted_flower:',
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
        'evergreen tree' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':evergreen_tree:',
            ]
        ],
        'deciduous tree' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':deciduous_tree:',
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
        'shamrock' => [
            'parent' => 'plant-other',
            'children' => null,
            'aliases' => [
                ':shamrock:',
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
