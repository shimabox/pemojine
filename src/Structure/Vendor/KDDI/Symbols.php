<?phpnamespace SMB\Pemojine\Structure\Vendor\KDDI;

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
                'av-symbol',
                'math',
                'punctuation',
                'currency',
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
                'no entry',
                'prohibited',
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
                'up-down arrow',
                'left-right arrow',
                'right arrow curving left',
                'left arrow curving right',
                'right arrow curving up',
                'right arrow curving down',
                'clockwise vertical arrows',
                'BACK arrow',
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
                'antenna bars',
                'vibration mode',
                'mobile phone off',
            ]
        ],
        'math' => [
            'parent' => 'Symbols',
            'children' => [
                'multiply',
                'plus',
                'minus',
                'divide',
            ]
        ],
        'punctuation' => [
            'parent' => 'Symbols',
            'children' => [
                'double exclamation mark',
                'exclamation question mark',
                'red question mark',
                'red exclamation mark',
            ]
        ],
        'currency' => [
            'parent' => 'Symbols',
            'children' => [
                'heavy dollar sign',
            ]
        ],
        'other-symbol' => [
            'parent' => 'Symbols',
            'children' => [
                'recycling symbol',
                'name badge',
                'Japanese symbol for beginner',
                'hollow red circle',
                'check mark button',
                'check box with check',
                'check mark',
                'cross mark',
                'cross mark button',
                'curly loop',
                'eight-spoked asterisk',
                'eight-pointed star',
                'sparkle',
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
                'NEW button',
                'O button (blood type)',
                'OK button',
                'P button',
                'SOS button',
                'UP! button',
                'VS button',
                'Japanese “service charge” button',
                'Japanese “reserved” button',
                'Japanese “bargain” button',
                'Japanese “discount” button',
                'Japanese “acceptable” button',
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
                'black large square',
                'white large square',
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
                'radio button',
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
        'multiply' => [
            'parent' => 'math',
            'children' => null,
            'aliases' => [
            ]
        ],
        'plus' => [
            'parent' => 'math',
            'children' => null,
            'aliases' => [
            ]
        ],
        'minus' => [
            'parent' => 'math',
            'children' => null,
            'aliases' => [
            ]
        ],
        'divide' => [
            'parent' => 'math',
            'children' => null,
            'aliases' => [
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
        'red question mark' => [
            'parent' => 'punctuation',
            'children' => null,
            'aliases' => [
            ]
        ],
        'red exclamation mark' => [
            'parent' => 'punctuation',
            'children' => null,
            'aliases' => [
            ]
        ],
        'heavy dollar sign' => [
            'parent' => 'currency',
            'children' => null,
            'aliases' => [
                ':heavy_dollar_sign:',
            ]
        ],
        'recycling symbol' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':recycle:',
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
        'check mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_check_mark:',
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
        'curly loop' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':curly_loop:',
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
        'sparkle' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':sparkle:',
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
        'Japanese “service charge” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':sa:',
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
        'Japanese “acceptable” button' => [
            'parent' => 'alphanum',
            'children' => null,
            'aliases' => [
                ':accept:',
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
        'black large square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_large_square:',
            ]
        ],
        'white large square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_large_square:',
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
        'radio button' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':radio_button:',
            ]
        ],
    ];
}
