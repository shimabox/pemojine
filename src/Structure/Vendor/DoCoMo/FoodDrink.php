<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

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
                'banana',
                'red apple',
                'cherries',
            ]
        ],
        'food-prepared' => [
            'parent' => 'Food & Drink',
            'children' => [
                'bread',
                'hamburger',
            ]
        ],
        'food-asian' => [
            'parent' => 'Food & Drink',
            'children' => [
                'rice ball',
                'steaming bowl',
            ]
        ],
        'food-sweet' => [
            'parent' => 'Food & Drink',
            'children' => [
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
                'wine glass',
                'cocktail glass',
                'beer mug',
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
        'banana' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':banana:',
            ]
        ],
        'red apple' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':apple:',
            ]
        ],
        'cherries' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':cherries:',
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
        'rice ball' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':rice_ball:',
            ]
        ],
        'steaming bowl' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':ramen:',
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
        'beer mug' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':beer:',
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
