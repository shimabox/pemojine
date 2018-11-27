<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class FoodDrink implements Gettable
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
        'Food & Drink' => [
            'parent' => null,
            'children' => [
                'food-fruit',
                'food-vegetable',
                'food-prepared',
                'food-asian',
                'food-sweet',
                'drink',
                'dishware',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'food-fruit' => [
            'parent' => 'Food & Drink',
            'children' => [
                'watermelon',
                'tangerine',
                'red apple',
                'strawberry',
                'tomato',
            ]
        ],
        'food-vegetable' => [
            'parent' => 'Food & Drink',
            'children' => [
                'eggplant',
            ]
        ],
        'food-prepared' => [
            'parent' => 'Food & Drink',
            'children' => [
                'bread',
                'hamburger',
                'french fries',
                'cooking',
                'pot of food',
            ]
        ],
        'food-asian' => [
            'parent' => 'Food & Drink',
            'children' => [
                'bento box',
                'rice cracker',
                'rice ball',
                'cooked rice',
                'curry rice',
                'steaming bowl',
                'spaghetti',
                'oden',
                'sushi',
                'dango',
            ]
        ],
        'food-sweet' => [
            'parent' => 'Food & Drink',
            'children' => [
                'soft ice cream',
                'shaved ice',
                'birthday cake',
                'shortcake',
            ]
        ],
        'drink' => [
            'parent' => 'Food & Drink',
            'children' => [
                'hot beverage',
                'teacup without handle',
                'sake',
                'cocktail glass',
                'beer mug',
                'clinking beer mugs',
            ]
        ],
        'dishware' => [
            'parent' => 'Food & Drink',
            'children' => [
                'fork and knife',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'watermelon' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':watermelon:',
            ]
        ],
        'tangerine' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':tangerine:',
            ]
        ],
        'red apple' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':apple:',
            ]
        ],
        'strawberry' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':strawberry:',
            ]
        ],
        'tomato' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':tomato:',
            ]
        ],
        'eggplant' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':eggplant:',
            ]
        ],
        'bread' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':bread:',
            ]
        ],
        'hamburger' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':hamburger:',
            ]
        ],
        'french fries' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':fries:',
            ]
        ],
        'cooking' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':cooking:',
            ]
        ],
        'pot of food' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':stew:',
            ]
        ],
        'bento box' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':bento:',
            ]
        ],
        'rice cracker' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':rice_cracker:',
            ]
        ],
        'rice ball' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':rice_ball:',
            ]
        ],
        'cooked rice' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':rice:',
            ]
        ],
        'curry rice' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':curry:',
            ]
        ],
        'steaming bowl' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':ramen:',
            ]
        ],
        'spaghetti' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':spaghetti:',
            ]
        ],
        'oden' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':oden:',
            ]
        ],
        'sushi' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':sushi:',
            ]
        ],
        'dango' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':dango:',
            ]
        ],
        'soft ice cream' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':icecream:',
            ]
        ],
        'shaved ice' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':shaved_ice:',
            ]
        ],
        'birthday cake' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':birthday:',
            ]
        ],
        'shortcake' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':cake:',
            ]
        ],
        'hot beverage' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':coffee:',
            ]
        ],
        'teacup without handle' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':tea:',
            ]
        ],
        'sake' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':sake:',
            ]
        ],
        'cocktail glass' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':cocktail:',
            ]
        ],
        'beer mug' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':beer:',
            ]
        ],
        'clinking beer mugs' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':beers:',
            ]
        ],
        'fork and knife' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':fork_and_knife:',
            ]
        ],
    ];
}
