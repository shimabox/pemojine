<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

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
                'award-medal',
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
                'jack-o-lantern',
                'Christmas tree',
                'fireworks',
                'sparkler',
                'sparkles',
                'balloon',
                'party popper',
                'pine decoration',
                'Japanese dolls',
                'carp streamer',
                'wind chime',
                'moon viewing ceremony',
                'ribbon',
                'wrapped gift',
                'ticket',
            ]
        ],
        'award-medal' => [
            'parent' => 'Activities',
            'children' => [
                'trophy',
            ]
        ],
        'sport' => [
            'parent' => 'Activities',
            'children' => [
                'soccer ball',
                'baseball',
                'basketball',
                'american football',
                'tennis',
                'flag in hole',
                'skis',
            ]
        ],
        'game' => [
            'parent' => 'Activities',
            'children' => [
                'bullseye',
                'pool 8 ball',
                'slot machine',
                'spade suit',
                'heart suit',
                'diamond suit',
                'club suit',
                'mahjong red dragon',
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
        'jack-o-lantern' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':jack_o_lantern:',
            ]
        ],
        'Christmas tree' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':christmas_tree:',
            ]
        ],
        'fireworks' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':fireworks:',
            ]
        ],
        'sparkler' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':sparkler:',
            ]
        ],
        'sparkles' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':sparkles:',
            ]
        ],
        'balloon' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':balloon:',
            ]
        ],
        'party popper' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':tada:',
            ]
        ],
        'pine decoration' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':bamboo:',
            ]
        ],
        'Japanese dolls' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':dolls:',
            ]
        ],
        'carp streamer' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':flags:',
            ]
        ],
        'wind chime' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':wind_chime:',
            ]
        ],
        'moon viewing ceremony' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':rice_scene:',
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
        'trophy' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':trophy:',
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
        'american football' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':football:',
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
        'skis' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':ski:',
            ]
        ],
        'bullseye' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
            ]
        ],
        'pool 8 ball' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':8ball:',
            ]
        ],
        'slot machine' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':slot_machine:',
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
        'mahjong red dragon' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':mahjong:',
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
