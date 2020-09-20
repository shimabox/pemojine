<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class Symbols implements Gettable
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
        'Symbols' => [
            'parent' => null,
            'children' => [
                'transport-sign',
                'warning',
                'arrow',
                'zodiac',
                'punctuation',
                'other-symbol',
                'keycap',
                'alphanum',
                'geometric',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'transport-sign' => [
            'parent' => 'Symbols',
            'children' => [
                'ATM sign',
                'wheelchair symbol',
                'restroom',
            ]
        ],
        'warning' => [
            'parent' => 'Symbols',
            'children' => [
                'warning',
                'no smoking',
            ]
        ],
        'arrow' => [
            'parent' => 'Symbols',
            'children' => [
                'up-right arrow',
                'down-right arrow',
                'down-left arrow',
                'up-left arrow',
                'up-down arrow',
                'left-right arrow',
                'right arrow curving left',
                'right arrow curving up',
                'right arrow curving down',
                'END arrow',
                'ON! arrow',
                'SOON arrow',
            ]
        ],
        'zodiac' => [
            'parent' => 'Symbols',
            'children' => [
                'Aries',
                'Taurus',
                'Gemini',
                'Cancer',
                'Leo',
                'Virgo',
                'Libra',
                'Scorpio',
                'Sagittarius',
                'Capricorn',
                'Aquarius',
                'Pisces',
            ]
        ],
        'punctuation' => [
            'parent' => 'Symbols',
            'children' => [
                'double exclamation mark',
                'exclamation question mark',
                'red exclamation mark',
                'wavy dash',
            ]
        ],
        'other-symbol' => [
            'parent' => 'Symbols',
            'children' => [
                'recycling symbol',
                'curly loop',
                'copyright',
                'registered',
                'trade mark',
            ]
        ],
        'keycap' => [
            'parent' => 'Symbols',
            'children' => [
                'keycap: #',
                'keycap: 0',
                'keycap: 1',
                'keycap: 2',
                'keycap: 3',
                'keycap: 4',
                'keycap: 5',
                'keycap: 6',
                'keycap: 7',
                'keycap: 8',
                'keycap: 9',
            ]
        ],
        'alphanum' => [
            'parent' => 'Symbols',
            'children' => [
                'CL button',
                'FREE button',
                'ID button',
                'circled M',
                'NEW button',
                'NG button',
                'OK button',
                'P button',
                'Japanese “prohibited” button',
                'Japanese “passing grade” button',
                'Japanese “vacancy” button',
                'Japanese “secret” button',
                'Japanese “no vacancy” button',
            ]
        ],
        'geometric' => [
            'parent' => 'Symbols',
            'children' => [
                'diamond with a dot',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'ATM sign' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':atm:',
            ]
        ],
        'wheelchair symbol' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':wheelchair:',
            ]
        ],
        'restroom' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':restroom:',
            ]
        ],
        'warning' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':warning:',
            ]
        ],
        'no smoking' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_smoking:',
            ]
        ],
        'up-right arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_upper_right:',
            ]
        ],
        'down-right arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_lower_right:',
            ]
        ],
        'down-left arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_lower_left:',
            ]
        ],
        'up-left arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_upper_left:',
            ]
        ],
        'up-down arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_up_down:',
            ]
        ],
        'left-right arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':left_right_arrow:',
            ]
        ],
        'right arrow curving left' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':leftwards_arrow_with_hook:',
            ]
        ],
        'right arrow curving up' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_heading_up:',
            ]
        ],
        'right arrow curving down' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_heading_down:',
            ]
        ],
        'END arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':end:',
            ]
        ],
        'ON! arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':on:',
            ]
        ],
        'SOON arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':soon:',
            ]
        ],
        'Aries' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':aries:',
            ]
        ],
        'Taurus' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':taurus:',
            ]
        ],
        'Gemini' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':gemini:',
            ]
        ],
        'Cancer' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':cancer:',
            ]
        ],
        'Leo' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':leo:',
            ]
        ],
        'Virgo' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':virgo:',
            ]
        ],
        'Libra' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':libra:',
            ]
        ],
        'Scorpio' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':scorpius:',
            ]
        ],
        'Sagittarius' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':sagittarius:',
            ]
        ],
        'Capricorn' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':capricorn:',
            ]
        ],
        'Aquarius' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':aquarius:',
            ]
        ],
        'Pisces' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':pisces:',
            ]
        ],
        'double exclamation mark' => [
            'parent' => 'punctuation',
            'children' => null,
            'aliases' => [
                ':bangbang:',
            ]
        ],
        'exclamation question mark' => [
            'parent' => 'punctuation',
            'children' => null,
            'aliases' => [
                ':interrobang:',
            ]
        ],
        'red exclamation mark' => [
            'parent' => 'punctuation',
            'children' => null,
            'aliases' => [
            ]
        ],
        'wavy dash' => [
            'parent' => 'punctuation',
            'children' => null,
            'aliases' => [
                ':wavy_dash:',
            ]
        ],
        'recycling symbol' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':recycle:',
            ]
        ],
        'curly loop' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':curly_loop:',
            ]
        ],
        'copyright' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':copyright:',
            ]
        ],
        'registered' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':registered:',
            ]
        ],
        'trade mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':tm:',
            ]
        ],
        'keycap: #' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':hash:',
            ]
        ],
        'keycap: 0' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':zero:',
            ]
        ],
        'keycap: 1' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':one:',
            ]
        ],
        'keycap: 2' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':two:',
            ]
        ],
        'keycap: 3' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':three:',
            ]
        ],
        'keycap: 4' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':four:',
            ]
        ],
        'keycap: 5' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':five:',
            ]
        ],
        'keycap: 6' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':six:',
            ]
        ],
        'keycap: 7' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':seven:',
            ]
        ],
        'keycap: 8' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':eight:',
            ]
        ],
        'keycap: 9' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':nine:',
            ]
        ],
        'CL button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':cl:',
            ]
        ],
        'FREE button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':free:',
            ]
        ],
        'ID button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':id:',
            ]
        ],
        'circled M' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':m:',
            ]
        ],
        'NEW button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':new:',
            ]
        ],
        'NG button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':ng:',
            ]
        ],
        'OK button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':ok:',
            ]
        ],
        'P button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':parking:',
            ]
        ],
        'Japanese “prohibited” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7981:',
            ]
        ],
        'Japanese “passing grade” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u5408:',
            ]
        ],
        'Japanese “vacancy” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7a7a:',
            ]
        ],
        'Japanese “secret” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':secret:',
            ]
        ],
        'Japanese “no vacancy” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u6e80:',
            ]
        ],
        'diamond with a dot' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':diamond_shape_with_a_dot_inside:',
            ]
        ],
    ];
}
