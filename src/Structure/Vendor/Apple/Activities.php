<?phpnamespace SMB\Pemojine\Structure\Vendor\Apple;

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
                'firecracker',
                'sparkles',
                'balloon',
                'party popper',
                'confetti ball',
                'tanabata tree',
                'pine decoration',
                'Japanese dolls',
                'carp streamer',
                'wind chime',
                'moon viewing ceremony',
                'red envelope',
                'ribbon',
                'wrapped gift',
                'reminder ribbon',
                'admission tickets',
                'ticket',
            ]
        ],
        'award-medal' => [
            'parent' => 'Activities',
            'children' => [
                'military medal',
                'trophy',
                'sports medal',
                '1st place medal',
                '2nd place medal',
                '3rd place medal',
            ]
        ],
        'sport' => [
            'parent' => 'Activities',
            'children' => [
                'soccer ball',
                'baseball',
                'softball',
                'basketball',
                'volleyball',
                'american football',
                'rugby football',
                'tennis',
                'flying disc',
                'bowling',
                'cricket game',
                'field hockey',
                'ice hockey',
                'lacrosse',
                'ping pong',
                'badminton',
                'boxing glove',
                'martial arts uniform',
                'goal net',
                'flag in hole',
                'ice skate',
                'fishing pole',
                'diving mask',
                'running shirt',
                'skis',
                'sled',
                'curling stone',
            ]
        ],
        'game' => [
            'parent' => 'Activities',
            'children' => [
                'direct hit',
                'yo-yo',
                'kite',
                'pool 8 ball',
                'crystal ball',
                'nazar amulet',
                'video game',
                'joystick',
                'slot machine',
                'game die',
                'puzzle piece',
                'teddy bear',
                'spade suit',
                'heart suit',
                'diamond suit',
                'club suit',
                'chess pawn',
                'joker',
                'mahjong red dragon',
                'flower playing cards',
            ]
        ],
        'arts & crafts' => [
            'parent' => 'Activities',
            'children' => [
                'performing arts',
                'framed picture',
                'artist palette',
                'thread',
                'yarn',
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
        'firecracker' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':firecracker:',
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
        'confetti ball' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':confetti_ball:',
            ]
        ],
        'tanabata tree' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':tanabata_tree:',
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
        'red envelope' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':red_envelope:',
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
        'reminder ribbon' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':reminder_ribbon:',
            ]
        ],
        'admission tickets' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':tickets:',
                ':admission_tickets:',
            ]
        ],
        'ticket' => [
            'parent' => 'event',
            'children' => null,
            'aliases' => [
                ':ticket:',
            ]
        ],
        'military medal' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':military_medal:',
            ]
        ],
        'trophy' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':trophy:',
            ]
        ],
        'sports medal' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':medal:',
                ':sports_medal:',
            ]
        ],
        '1st place medal' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':first_place:',
                ':first_place_medal:',
            ]
        ],
        '2nd place medal' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':second_place:',
                ':second_place_medal:',
            ]
        ],
        '3rd place medal' => [
            'parent' => 'award-medal',
            'children' => null,
            'aliases' => [
                ':third_place:',
                ':third_place_medal:',
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
        'softball' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':softball:',
            ]
        ],
        'basketball' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':basketball:',
            ]
        ],
        'volleyball' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':volleyball:',
            ]
        ],
        'american football' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':football:',
            ]
        ],
        'rugby football' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':rugby_football:',
            ]
        ],
        'tennis' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':tennis:',
            ]
        ],
        'flying disc' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':flying_disc:',
            ]
        ],
        'bowling' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':bowling:',
            ]
        ],
        'cricket game' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':cricket_game:',
                ':cricket_bat_ball:',
            ]
        ],
        'field hockey' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':field_hockey:',
            ]
        ],
        'ice hockey' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':hockey:',
            ]
        ],
        'lacrosse' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':lacrosse:',
            ]
        ],
        'ping pong' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':ping_pong:',
                ':table_tennis:',
            ]
        ],
        'badminton' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':badminton:',
            ]
        ],
        'boxing glove' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':boxing_glove:',
                ':boxing_gloves:',
            ]
        ],
        'martial arts uniform' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':martial_arts_uniform:',
                ':karate_uniform:',
            ]
        ],
        'goal net' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':goal:',
                ':goal_net:',
            ]
        ],
        'flag in hole' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':golf:',
            ]
        ],
        'ice skate' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':ice_skate:',
            ]
        ],
        'fishing pole' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':fishing_pole_and_fish:',
            ]
        ],
        'diving mask' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
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
        'sled' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':sled:',
            ]
        ],
        'curling stone' => [
            'parent' => 'sport',
            'children' => null,
            'aliases' => [
                ':curling_stone:',
            ]
        ],
        'direct hit' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':dart:',
            ]
        ],
        'yo-yo' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
            ]
        ],
        'kite' => [
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
        'crystal ball' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':crystal_ball:',
            ]
        ],
        'nazar amulet' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':nazar_amulet:',
            ]
        ],
        'video game' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':video_game:',
            ]
        ],
        'joystick' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':joystick:',
            ]
        ],
        'slot machine' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':slot_machine:',
            ]
        ],
        'game die' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':game_die:',
            ]
        ],
        'puzzle piece' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
            ]
        ],
        'teddy bear' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':teddy_bear:',
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
        'chess pawn' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':chess_pawn:',
            ]
        ],
        'joker' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':black_joker:',
            ]
        ],
        'mahjong red dragon' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':mahjong:',
            ]
        ],
        'flower playing cards' => [
            'parent' => 'game',
            'children' => null,
            'aliases' => [
                ':flower_playing_cards:',
            ]
        ],
        'performing arts' => [
            'parent' => 'arts & crafts',
            'children' => null,
            'aliases' => [
                ':performing_arts:',
            ]
        ],
        'framed picture' => [
            'parent' => 'arts & crafts',
            'children' => null,
            'aliases' => [
                ':frame_photo:',
                ':frame_with_picture:',
            ]
        ],
        'artist palette' => [
            'parent' => 'arts & crafts',
            'children' => null,
            'aliases' => [
                ':art:',
            ]
        ],
        'thread' => [
            'parent' => 'arts & crafts',
            'children' => null,
            'aliases' => [
                ':thread:',
            ]
        ],
        'yarn' => [
            'parent' => 'arts & crafts',
            'children' => null,
            'aliases' => [
                ':yarn:',
            ]
        ],
    ];
}
