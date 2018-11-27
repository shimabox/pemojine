<?phpnamespace SMB\Pemojine\Structure\Vendor\Facebook;

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
                'food-marine',
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
                'lemon',
                'banana',
                'pineapple',
                'red apple',
                'green apple',
                'pear',
                'peach',
                'cherries',
                'strawberry',
                'kiwi fruit',
                'tomato',
                'coconut',
            ]
        ],
        'food-vegetable' => [
            'parent' => 'Food & Drink',
            'children' => [
                'avocado',
                'eggplant',
                'potato',
                'carrot',
                'ear of corn',
                'hot pepper',
                'cucumber',
                'broccoli',
                'mushroom',
                'peanuts',
                'chestnut',
            ]
        ],
        'food-prepared' => [
            'parent' => 'Food & Drink',
            'children' => [
                'bread',
                'croissant',
                'baguette bread',
                'pretzel',
                'pancakes',
                'cheese wedge',
                'meat on bone',
                'poultry leg',
                'cut of meat',
                'bacon',
                'hamburger',
                'french fries',
                'pizza',
                'hot dog',
                'sandwich',
                'taco',
                'burrito',
                'stuffed flatbread',
                'egg',
                'cooking',
                'shallow pan of food',
                'pot of food',
                'bowl with spoon',
                'green salad',
                'popcorn',
                'canned food',
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
                'dumpling',
                'fortune cookie',
                'takeout box',
            ]
        ],
        'food-marine' => [
            'parent' => 'Food & Drink',
            'children' => [
                'crab',
                'shrimp',
                'squid',
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
                'pie',
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
                'baby bottle',
                'glass of milk',
                'hot beverage',
                'teacup without handle',
                'sake',
                'bottle with popping cork',
                'wine glass',
                'cocktail glass',
                'tropical drink',
                'beer mug',
                'clinking beer mugs',
                'clinking glasses',
                'tumbler glass',
                'cup with straw',
            ]
        ],
        'dishware' => [
            'parent' => 'Food & Drink',
            'children' => [
                'chopsticks',
                'fork and knife with plate',
                'fork and knife',
                'spoon',
                'kitchen knife',
                'amphora',
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
        'lemon' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':lemon:',
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
        'pear' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':pear:',
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
        'kiwi fruit' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':kiwi:',
                ':kiwifruit:',
            ]
        ],
        'tomato' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':tomato:',
            ]
        ],
        'coconut' => [
            'parent' => 'food-fruit',
            'children' => null,
            'aliases' => [
                ':coconut:',
            ]
        ],
        'avocado' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':avocado:',
            ]
        ],
        'eggplant' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':eggplant:',
            ]
        ],
        'potato' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':potato:',
            ]
        ],
        'carrot' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':carrot:',
            ]
        ],
        'ear of corn' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':corn:',
            ]
        ],
        'hot pepper' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':hot_pepper:',
            ]
        ],
        'cucumber' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':cucumber:',
            ]
        ],
        'broccoli' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':broccoli:',
            ]
        ],
        'mushroom' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':mushroom:',
            ]
        ],
        'peanuts' => [
            'parent' => 'food-vegetable',
            'children' => null,
            'aliases' => [
                ':peanuts:',
                ':shelled_peanut:',
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
        'croissant' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':croissant:',
            ]
        ],
        'baguette bread' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':french_bread:',
                ':baguette_bread:',
            ]
        ],
        'pretzel' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':pretzel:',
            ]
        ],
        'pancakes' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':pancakes:',
            ]
        ],
        'cheese wedge' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':cheese:',
                ':cheese_wedge:',
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
        'cut of meat' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':cut_of_meat:',
            ]
        ],
        'bacon' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':bacon:',
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
        'hot dog' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':hotdog:',
                ':hot_dog:',
            ]
        ],
        'sandwich' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':sandwich:',
            ]
        ],
        'taco' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':taco:',
            ]
        ],
        'burrito' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':burrito:',
            ]
        ],
        'stuffed flatbread' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':stuffed_flatbread:',
                ':stuffed_pita:',
            ]
        ],
        'egg' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':egg:',
            ]
        ],
        'cooking' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':cooking:',
            ]
        ],
        'shallow pan of food' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':shallow_pan_of_food:',
                ':paella:',
            ]
        ],
        'pot of food' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':stew:',
            ]
        ],
        'bowl with spoon' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':bowl_with_spoon:',
            ]
        ],
        'green salad' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':salad:',
                ':green_salad:',
            ]
        ],
        'popcorn' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':popcorn:',
            ]
        ],
        'canned food' => [
            'parent' => 'food-prepared',
            'children' => null,
            'aliases' => [
                ':canned_food:',
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
        'dumpling' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':dumpling:',
            ]
        ],
        'fortune cookie' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':fortune_cookie:',
            ]
        ],
        'takeout box' => [
            'parent' => 'food-asian',
            'children' => null,
            'aliases' => [
                ':takeout_box:',
            ]
        ],
        'crab' => [
            'parent' => 'food-marine',
            'children' => null,
            'aliases' => [
                ':crab:',
            ]
        ],
        'shrimp' => [
            'parent' => 'food-marine',
            'children' => null,
            'aliases' => [
                ':shrimp:',
            ]
        ],
        'squid' => [
            'parent' => 'food-marine',
            'children' => null,
            'aliases' => [
                ':squid:',
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
        'pie' => [
            'parent' => 'food-sweet',
            'children' => null,
            'aliases' => [
                ':pie:',
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
        'baby bottle' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':baby_bottle:',
            ]
        ],
        'glass of milk' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':milk:',
                ':glass_of_milk:',
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
        'bottle with popping cork' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':champagne:',
                ':bottle_with_popping_cork:',
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
        'clinking glasses' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':champagne_glass:',
                ':clinking_glass:',
            ]
        ],
        'tumbler glass' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':tumbler_glass:',
                ':whisky:',
            ]
        ],
        'cup with straw' => [
            'parent' => 'drink',
            'children' => null,
            'aliases' => [
                ':cup_with_straw:',
            ]
        ],
        'chopsticks' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':chopsticks:',
            ]
        ],
        'fork and knife with plate' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':fork_knife_plate:',
                ':fork_and_knife_with_plate:',
            ]
        ],
        'fork and knife' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':fork_and_knife:',
            ]
        ],
        'spoon' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':spoon:',
            ]
        ],
        'kitchen knife' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':knife:',
            ]
        ],
        'amphora' => [
            'parent' => 'dishware',
            'children' => null,
            'aliases' => [
                ':amphora:',
            ]
        ],
    ];
}
