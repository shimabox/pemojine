<?phpnamespace SMB\Pemojine\Structure\Vendor\Windows;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class Flags implements Gettable
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
        'Flags' => [
            'parent' => null,
            'children' => [
                'flag',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'flag' => [
            'parent' => 'Flags',
            'children' => [
                'chequered flag',
                'triangular flag',
                'crossed flags',
                'black flag',
                'white flag',
                'rainbow flag',
                'pirate flag',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'chequered flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':checkered_flag:',
            ]
        ],
        'triangular flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':triangular_flag_on_post:',
            ]
        ],
        'crossed flags' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':crossed_flags:',
            ]
        ],
        'black flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':flag_black:',
                ':waving_black_flag:',
            ]
        ],
        'white flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':flag_white:',
                ':waving_white_flag:',
            ]
        ],
        'rainbow flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':rainbow_flag:',
                ':gay_pride_flag:',
            ]
        ],
        'pirate flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':pirate_flag:',
            ]
        ],
    ];
}
