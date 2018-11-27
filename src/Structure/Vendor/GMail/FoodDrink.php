<?phpnamespace SMB\Pemojine\Structure\Vendor\GMail;

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
                'grapes',
                'melon',
                'watermelon',
                'tangerine',
                'banana',
                'pineapple',
                'red apple',
                'green apple',
                'peach',
                'cherries',
                'strawberry',
                'tomato',
            ]
        ],
        'food-vegetable' => [
            'parent' => 'Food & Drink',
            'children' => [
                'eggplant',
                'ear of corn',
                'mushroom',
                'chestnut',
            ]
        ],
        'food-prepared' => [
            'parent' => 'Food & Drink',
            'children' => [
                'bread',
                'meat on bone',
                'poultry leg',
                'hamburger',
                'french fries',
                'pizza',
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
                'roasted sweet potato',
                'oden',
                'sushi',
                'fried shrimp',
                'fish cake with swirl',
                'dango',
            ]
        ],
        'food-sweet' => [
            'parent' => 'Food & Drink',
            'children' => [
                'soft ice cream',
                'shaved ice',
                'ice cream',
                'doughnut',
                'cookie',
                'birthday cake',
                'shortcake',
                'chocolate bar',
                'candy',
                'lollipop',
                'custard',
                'honey pot',
            ]
        ],
        'drink' => [
            'parent' => 'Food & Drink',
            'children' => [
                'hot beverage',
                'teacup without handle',
                'sake',
                'wine glass',
                'cocktail glass',
                'tropical drink',
                'beer mug',
                'clinking beer mugs',
            ]
        ],
        'dishware' => [
            'parent' => 'Food & Drink',
            'children' => [
                'fork and knife',
                'kitchen knife',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'grapes' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':grapes:',
            ]
        ],
        'melon' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':melon:',
            ]
        ],
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
        'banana' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':banana:',
            ]
        ],
        'pineapple' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':pineapple:',
            ]
        ],
        'red apple' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':apple:',
            ]
        ],
        'green apple' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':green_apple:',
            ]
        ],
        'peach' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':peach:',
            ]
        ],
        'cherries' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':cherries:',
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
        'ear of corn' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':corn:',
            ]
        ],
        'mushroom' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':mushroom:',
            ]
        ],
        'chestnut' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':chestnut:',
            ]
        ],
        'bread' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':bread:',
            ]
        ],
        'meat on bone' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':meat_on_bone:',
            ]
        ],
        'poultry leg' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':poultry_leg:',
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
        'pizza' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':pizza:',
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
        'roasted sweet potato' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':sweet_potato:',
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
        'fried shrimp' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':fried_shrimp:',
            ]
        ],
        'fish cake with swirl' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':fish_cake:',
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
        'ice cream' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':ice_cream:',
            ]
        ],
        'doughnut' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':doughnut:',
            ]
        ],
        'cookie' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':cookie:',
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
        'chocolate bar' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':chocolate_bar:',
            ]
        ],
        'candy' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':candy:',
            ]
        ],
        'lollipop' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':lollipop:',
            ]
        ],
        'custard' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':custard:',
                ':pudding:',
                ':flan:',
            ]
        ],
        'honey pot' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':honey_pot:',
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
        'wine glass' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':wine_glass:',
            ]
        ],
        'cocktail glass' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':cocktail:',
            ]
        ],
        'tropical drink' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':tropical_drink:',
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
        'kitchen knife' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':knife:',
            ]
        ],
    ];
}
