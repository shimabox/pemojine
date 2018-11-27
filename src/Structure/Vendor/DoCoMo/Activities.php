<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class Activities implements Gettable
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
        'Activities' => [
            'parent' => null,
            'children' => [
                'event',
                'sport',
                'game',
                'arts & crafts',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'event' => [
            'parent' => 'Activities',
            'children' => [
                'Christmas tree',
                'sparkles',
                'ribbon',
                'wrapped gift',
                'ticket',
            ]
        ],
        'sport' => [
            'parent' => 'Activities',
            'children' => [
                'soccer ball',
                'baseball',
                'basketball',
                'tennis',
                'flag in hole',
                'running shirt',
                'skis',
            ]
        ],
        'game' => [
            'parent' => 'Activities',
            'children' => [
                'video game',
                'spade suit',
                'heart suit',
                'diamond suit',
                'club suit',
            ]
        ],
        'arts & crafts' => [
            'parent' => 'Activities',
            'children' => [
                'artist palette',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'Christmas tree' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':christmas_tree:',
            ]
        ],
        'sparkles' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':sparkles:',
            ]
        ],
        'ribbon' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':ribbon:',
            ]
        ],
        'wrapped gift' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':gift:',
            ]
        ],
        'ticket' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':ticket:',
            ]
        ],
        'soccer ball' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':soccer:',
            ]
        ],
        'baseball' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':baseball:',
            ]
        ],
        'basketball' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':basketball:',
            ]
        ],
        'tennis' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':tennis:',
            ]
        ],
        'flag in hole' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':golf:',
            ]
        ],
        'running shirt' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':running_shirt_with_sash:',
            ]
        ],
        'skis' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':ski:',
            ]
        ],
        'video game' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':video_game:',
            ]
        ],
        'spade suit' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':spades:',
            ]
        ],
        'heart suit' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':hearts:',
            ]
        ],
        'diamond suit' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':diamonds:',
            ]
        ],
        'club suit' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':clubs:',
            ]
        ],
        'artist palette' => [
            'parent' => 'arts & crafts',
            'children' => null,
            'aliases' => [
                ':art:',
            ]
        ],
    ];
}
