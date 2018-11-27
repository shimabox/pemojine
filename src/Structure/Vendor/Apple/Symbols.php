<?phpnamespace SMB\Pemojine\Structure\Vendor\Apple;

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
                'litter in bin sign',
                'potable water',
                'wheelchair symbol',
                'men’s room',
                'women’s room',
                'restroom',
                'baby symbol',
                'water closet',
                'passport control',
                'customs',
                'baggage claim',
                'left luggage',
            ]
        ],
        'warning' => [
            'parent' => 'Symbols',
            'children' => [
                'warning',
                'children crossing',
                'no entry',
                'prohibited',
                'no bicycles',
                'no smoking',
                'no littering',
                'non-potable water',
                'no pedestrians',
                'no mobile phones',
                'no one under eighteen',
                'radioactive',
                'biohazard',
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
                'counterclockwise arrows button',
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
                'place of worship',
                'atom symbol',
                'om',
                'star of David',
                'wheel of dharma',
                'yin yang',
                'latin cross',
                'orthodox cross',
                'star and crescent',
                'peace symbol',
                'menorah',
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
                'shuffle tracks button',
                'repeat button',
                'repeat single button',
                'play button',
                'fast-forward button',
                'next track button',
                'play or pause button',
                'reverse button',
                'fast reverse button',
                'last track button',
                'upwards button',
                'fast up button',
                'downwards button',
                'fast down button',
                'pause button',
                'stop button',
                'record button',
                'eject button',
                'cinema',
                'dim button',
                'bright button',
                'antenna bars',
                'vibration mode',
                'mobile phone off',
            ]
        ],
        'other-symbol' => [
            'parent' => 'Symbols',
            'children' => [
                '⊛ infinity',
                'recycling symbol',
                'fleur-de-lis',
                'trident emblem',
                'name badge',
                'Japanese symbol for beginner',
                'heavy large circle',
                'white heavy check mark',
                'ballot box with check',
                'heavy check mark',
                'heavy multiplication x',
                'cross mark',
                'cross mark button',
                'heavy plus sign',
                'heavy minus sign',
                'heavy division sign',
                'curly loop',
                'double curly loop',
                'part alternation mark',
                'eight-spoked asterisk',
                'eight-pointed star',
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
                'keycap: *',
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
                'white circle',
                'black circle',
                'white large square',
                'black large square',
                'black medium square',
                'white medium square',
                'white medium-small square',
                'black medium-small square',
                'white small square',
                'black small square',
                'large orange diamond',
                'large blue diamond',
                'small orange diamond',
                'small blue diamond',
                'red triangle pointed up',
                'red triangle pointed down',
                'diamond with a dot',
                'radio button',
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
        'litter in bin sign' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':put_litter_in_its_place:',
            ]
        ],
        'potable water' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':potable_water:',
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
        'passport control' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':passport_control:',
            ]
        ],
        'customs' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':customs:',
            ]
        ],
        'baggage claim' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':baggage_claim:',
            ]
        ],
        'left luggage' => [
            'parent' => 'transport-sign',
            'children' => null,
            'aliases' => [
                ':left_luggage:',
            ]
        ],
        'warning' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':warning:',
            ]
        ],
        'children crossing' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':children_crossing:',
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
        'no bicycles' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_bicycles:',
            ]
        ],
        'no smoking' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_smoking:',
            ]
        ],
        'no littering' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':do_not_litter:',
            ]
        ],
        'non-potable water' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':non-potable_water:',
            ]
        ],
        'no pedestrians' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_pedestrians:',
            ]
        ],
        'no mobile phones' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':no_mobile_phones:',
            ]
        ],
        'no one under eighteen' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':underage:',
            ]
        ],
        'radioactive' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':radioactive:',
                ':radioactive_sign:',
            ]
        ],
        'biohazard' => [
            'parent' => 'warning',
            'children' => null,
            'aliases' => [
                ':biohazard:',
                ':biohazard_sign:',
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
        'counterclockwise arrows button' => [
            'parent' => 'arrow',
            'children' => null,
            'aliases' => [
                ':arrows_counterclockwise:',
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
        'place of worship' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':place_of_worship:',
                ':worship_symbol:',
            ]
        ],
        'atom symbol' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':atom:',
                ':atom_symbol:',
            ]
        ],
        'om' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':om_symbol:',
            ]
        ],
        'star of David' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':star_of_david:',
            ]
        ],
        'wheel of dharma' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':wheel_of_dharma:',
            ]
        ],
        'yin yang' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':yin_yang:',
            ]
        ],
        'latin cross' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':cross:',
                ':latin_cross:',
            ]
        ],
        'orthodox cross' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':orthodox_cross:',
            ]
        ],
        'star and crescent' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':star_and_crescent:',
            ]
        ],
        'peace symbol' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':peace:',
                ':peace_symbol:',
            ]
        ],
        'menorah' => [
            'parent' => 'religion',
            'children' => null,
            'aliases' => [
                ':menorah:',
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
        'shuffle tracks button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':twisted_rightwards_arrows:',
            ]
        ],
        'repeat button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':repeat:',
            ]
        ],
        'repeat single button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':repeat_one:',
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
        'next track button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':track_next:',
                ':next_track:',
            ]
        ],
        'play or pause button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':play_pause:',
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
        'last track button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':track_previous:',
                ':previous_track:',
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
        'pause button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':pause_button:',
                ':double_vertical_bar:',
            ]
        ],
        'stop button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':stop_button:',
            ]
        ],
        'record button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':record_button:',
            ]
        ],
        'eject button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':eject:',
                ':eject_symbol:',
            ]
        ],
        'cinema' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':cinema:',
            ]
        ],
        'dim button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':low_brightness:',
            ]
        ],
        'bright button' => [
            'parent' => 'av-symbol',
            'children' => null,
            'aliases' => [
                ':high_brightness:',
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
        '⊛ infinity' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
            ]
        ],
        'recycling symbol' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':recycle:',
            ]
        ],
        'fleur-de-lis' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':fleur-de-lis:',
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
        'heavy large circle' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':o:',
            ]
        ],
        'white heavy check mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':white_check_mark:',
            ]
        ],
        'ballot box with check' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':ballot_box_with_check:',
            ]
        ],
        'heavy check mark' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_check_mark:',
            ]
        ],
        'heavy multiplication x' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_multiplication_x:',
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
        'heavy plus sign' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_plus_sign:',
            ]
        ],
        'heavy minus sign' => [
            'parent' => 'other-symbol',
            'children' => null,
            'aliases' => [
                ':heavy_minus_sign:',
            ]
        ],
        'heavy division sign' => [
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
        'keycap: *' => [
            'parent' => 'keycap',
            'children' => null,
            'aliases' => [
                ':asterisk:',
                ':keycap_asterisk:',
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
        'white circle' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_circle:',
            ]
        ],
        'black circle' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_circle:',
            ]
        ],
        'white large square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_large_square:',
            ]
        ],
        'black large square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_large_square:',
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
        'white medium-small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_medium_small_square:',
            ]
        ],
        'black medium-small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_medium_small_square:',
            ]
        ],
        'white small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':white_small_square:',
            ]
        ],
        'black small square' => [
            'parent' => 'geometric',
            'children' => null,
            'aliases' => [
                ':black_small_square:',
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
