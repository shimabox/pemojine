<?phpnamespace SMB\Pemojine\Structure\Vendor\GMail;

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
                'no entry',
                'prohibited',
                'no smoking',
                'no one under eighteen',
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
                'left arrow curving right',
                'right arrow curving up',
                'right arrow curving down',
                'clockwise vertical arrows',
                'BACK arrow',
                'END arrow',
                'ON! arrow',
                'SOON arrow',
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
                'upwards button',
                'fast up button',
                'downwards button',
                'fast down button',
                'cinema',
                'antenna bars',
                'vibration mode',
                'mobile phone off',
            ]
        ],
        'other-symbol' => [
            'parent' => 'Symbols',
            'children' => [
                'recycling symbol',
                'trident emblem',
                'name badge',
                'Japanese symbol for beginner',
                'hollow red circle',
                'check mark button',
                'check box with check',
                'cross mark',
                'cross mark button',
                'plus sign',
                'minus sign',
                'division sign',
                'curly loop',
                'double curly loop',
                'part alternation mark',
                'eight-spoked asterisk',
                'sparkle',
                'double exclamation mark',
                'exclamation question mark',
                'question mark',
                'white question mark',
                'white exclamation mark',
                'exclamation mark',
                'wavy dash',
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
                'keycap: 10',
            ]
        ],
        'alphanum' => [
            'parent' => 'Symbols',
            'children' => [
                'input latin uppercase',
                'input latin lowercase',
                'input numbers',
                'input symbols',
                'input latin letters',
                'A button (blood type)',
                'AB button (blood type)',
                'B button (blood type)',
                'CL button',
                'COOL button',
                'FREE button',
                'information',
                'ID button',
                'circled M',
                'NEW button',
                'NG button',
                'O button (blood type)',
                'OK button',
                'P button',
                'SOS button',
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
                'Japanese “prohibited” button',
                'Japanese “acceptable” button',
                'Japanese “application” button',
                'Japanese “passing grade” button',
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
                'blue circle',
                'black circle',
                'white circle',
                'black medium square',
                'white medium square',
                'black medium-small square',
                'white medium-small square',
                'black small square',
                'white small square',
                'large orange diamond',
                'large blue diamond',
                'small orange diamond',
                'small blue diamond',
                'red triangle pointed up',
                'red triangle pointed down',
                'diamond with a dot',
                'radio button',
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
        'no entry' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_entry:',
            ]
        ],
        'prohibited' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_entry_sign:',
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
        'left arrow curving right' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrow_right_hook:',
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
        'clockwise vertical arrows' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrows_clockwise:',
            ]
        ],
        'BACK arrow' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':back:',
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
        'upwards button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':arrow_up_small:',
            ]
        ],
        'fast up button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':arrow_double_up:',
            ]
        ],
        'downwards button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':arrow_down_small:',
            ]
        ],
        'fast down button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':arrow_double_down:',
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
        'recycling symbol' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':recycle:',
            ]
        ],
        'trident emblem' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':trident:',
            ]
        ],
        'name badge' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':name_badge:',
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
                ':o:',
            ]
        ],
        'check mark button' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':white_check_mark:',
            ]
        ],
        'check box with check' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':ballot_box_with_check:',
            ]
        ],
        'cross mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':x:',
            ]
        ],
        'cross mark button' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':negative_squared_cross_mark:',
            ]
        ],
        'plus sign' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_plus_sign:',
            ]
        ],
        'minus sign' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_minus_sign:',
            ]
        ],
        'division sign' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_division_sign:',
            ]
        ],
        'curly loop' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':curly_loop:',
            ]
        ],
        'double curly loop' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':loop:',
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
        'sparkle' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':sparkle:',
            ]
        ],
        'double exclamation mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':bangbang:',
            ]
        ],
        'exclamation question mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':interrobang:',
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
        'wavy dash' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':wavy_dash:',
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
        'keycap: 10' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':keycap_ten:',
            ]
        ],
        'input latin uppercase' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':capital_abcd:',
            ]
        ],
        'input latin lowercase' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':abcd:',
            ]
        ],
        'input numbers' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':1234:',
            ]
        ],
        'input symbols' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':symbols:',
            ]
        ],
        'input latin letters' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':abc:',
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
        'CL button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':cl:',
            ]
        ],
        'COOL button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':cool:',
            ]
        ],
        'FREE button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':free:',
            ]
        ],
        'information' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':information_source:',
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
        'SOS button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':sos:',
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
        'Japanese “prohibited” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7981:',
            ]
        ],
        'Japanese “acceptable” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':accept:',
            ]
        ],
        'Japanese “application” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':u7533:',
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
        'blue circle' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':blue_circle:',
            ]
        ],
        'black circle' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_circle:',
            ]
        ],
        'white circle' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_circle:',
            ]
        ],
        'black medium square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_medium_square:',
            ]
        ],
        'white medium square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_medium_square:',
            ]
        ],
        'black medium-small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_medium_small_square:',
            ]
        ],
        'white medium-small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_medium_small_square:',
            ]
        ],
        'black small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_small_square:',
            ]
        ],
        'white small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_small_square:',
            ]
        ],
        'large orange diamond' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':large_orange_diamond:',
            ]
        ],
        'large blue diamond' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':large_blue_diamond:',
            ]
        ],
        'small orange diamond' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':small_orange_diamond:',
            ]
        ],
        'small blue diamond' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':small_blue_diamond:',
            ]
        ],
        'red triangle pointed up' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':small_red_triangle:',
            ]
        ],
        'red triangle pointed down' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':small_red_triangle_down:',
            ]
        ],
        'diamond with a dot' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':diamond_shape_with_a_dot_inside:',
            ]
        ],
        'radio button' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':radio_button:',
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
