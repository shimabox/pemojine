<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

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
                'religion',
                'zodiac',
                'av-symbol',
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
                'men’s room',
                'women’s room',
                'restroom',
                'baby symbol',
                'water closet',
            ]
        ],
        'warning' => [
            'parent' => 'Symbols',
            'children' => [
                'warning',
                'no smoking',
                'no one under eighteen',
            ]
        ],
        'arrow' => [
            'parent' => 'Symbols',
            'children' => [
                'up arrow',
                'up-right arrow',
                'right arrow',
                'down-right arrow',
                'down arrow',
                'down-left arrow',
                'left arrow',
                'up-left arrow',
                'TOP arrow',
            ]
        ],
        'religion' => [
            'parent' => 'Symbols',
            'children' => [
                'dotted six-pointed star',
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
                'Ophiuchus',
            ]
        ],
        'av-symbol' => [
            'parent' => 'Symbols',
            'children' => [
                'play button',
                'fast-forward button',
                'reverse button',
                'fast reverse button',
                'cinema',
                'antenna bars',
                'vibration mode',
                'mobile phone off',
            ]
        ],
        'other-symbol' => [
            'parent' => 'Symbols',
            'children' => [
                'trident emblem',
                'Japanese symbol for beginner',
                'hollow red circle',
                'cross mark',
                'part alternation mark',
                'eight-spoked asterisk',
                'eight-pointed star',
                'question mark',
                'white question mark',
                'white exclamation mark',
                'exclamation mark',
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
                'A button (blood type)',
                'AB button (blood type)',
                'B button (blood type)',
                'COOL button',
                'ID button',
                'NEW button',
                'O button (blood type)',
                'OK button',
                'P button',
                'UP! button',
                'VS button',
                'Japanese “here” button',
                'Japanese “service charge” button',
                'Japanese “monthly amount” button',
                'Japanese “not free of charge” button',
                'Japanese “reserved” button',
                'Japanese “bargain” button',
                'Japanese “discount” button',
                'Japanese “free of charge” button',
                'Japanese “application” button',
                'Japanese “vacancy” button',
                'Japanese “congratulations” button',
                'Japanese “secret” button',
                'Japanese “open for business” button',
                'Japanese “no vacancy” button',
            ]
        ],
        'geometric' => [
            'parent' => 'Symbols',
            'children' => [
                'red circle',
                'black square button',
                'white square button',
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
        'men’s room' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':mens:',
            ]
        ],
        'women’s room' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':womens:',
            ]
        ],
        'restroom' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':restroom:',
            ]
        ],
        'baby symbol' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':baby_symbol:',
            ]
        ],
        'water closet' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':wc:',
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
        'no one under eighteen' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':underage:',
            ]
        ],
        'up arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_up:',
            ]
        ],
        'up-right arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_upper_right:',
            ]
        ],
        'right arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_right:',
            ]
        ],
        'down-right arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_lower_right:',
            ]
        ],
        'down arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_down:',
            ]
        ],
        'down-left arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_lower_left:',
            ]
        ],
        'left arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_left:',
            ]
        ],
        'up-left arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_upper_left:',
            ]
        ],
        'TOP arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':top:',
            ]
        ],
        'dotted six-pointed star' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':six_pointed_star:',
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
        'Ophiuchus' => [
            'parent' => 'zodiac',
            'children' => null,
            'aliases' => [
                ':ophiuchus:',
            ]
        ],
        'play button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':arrow_forward:',
            ]
        ],
        'fast-forward button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':fast_forward:',
            ]
        ],
        'reverse button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':arrow_backward:',
            ]
        ],
        'fast reverse button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':rewind:',
            ]
        ],
        'cinema' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':cinema:',
            ]
        ],
        'antenna bars' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':signal_strength:',
            ]
        ],
        'vibration mode' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':vibration_mode:',
            ]
        ],
        'mobile phone off' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':mobile_phone_off:',
            ]
        ],
        'trident emblem' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':trident:',
            ]
        ],
        'Japanese symbol for beginner' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':beginner:',
            ]
        ],
        'hollow red circle' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
            ]
        ],
        'cross mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':x:',
            ]
        ],
        'part alternation mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':part_alternation_mark:',
            ]
        ],
        'eight-spoked asterisk' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':eight_spoked_asterisk:',
            ]
        ],
        'eight-pointed star' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':eight_pointed_black_star:',
            ]
        ],
        'question mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':question:',
            ]
        ],
        'white question mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':grey_question:',
            ]
        ],
        'white exclamation mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':grey_exclamation:',
            ]
        ],
        'exclamation mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':exclamation:',
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
        'A button (blood type)' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':a:',
            ]
        ],
        'AB button (blood type)' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':ab:',
            ]
        ],
        'B button (blood type)' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':b:',
            ]
        ],
        'COOL button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':cool:',
            ]
        ],
        'ID button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':id:',
            ]
        ],
        'NEW button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':new:',
            ]
        ],
        'O button (blood type)' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':o2:',
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
        'UP! button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':up:',
            ]
        ],
        'VS button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':vs:',
            ]
        ],
        'Japanese “here” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':koko:',
            ]
        ],
        'Japanese “service charge” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':sa:',
            ]
        ],
        'Japanese “monthly amount” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u6708:',
            ]
        ],
        'Japanese “not free of charge” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u6709:',
            ]
        ],
        'Japanese “reserved” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u6307:',
            ]
        ],
        'Japanese “bargain” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':ideograph_advantage:',
            ]
        ],
        'Japanese “discount” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u5272:',
            ]
        ],
        'Japanese “free of charge” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7121:',
            ]
        ],
        'Japanese “application” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7533:',
            ]
        ],
        'Japanese “vacancy” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7a7a:',
            ]
        ],
        'Japanese “congratulations” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':congratulations:',
            ]
        ],
        'Japanese “secret” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':secret:',
            ]
        ],
        'Japanese “open for business” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u55b6:',
            ]
        ],
        'Japanese “no vacancy” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u6e80:',
            ]
        ],
        'red circle' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':red_circle:',
            ]
        ],
        'black square button' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_square_button:',
            ]
        ],
        'white square button' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_square_button:',
            ]
        ],
    ];
}
