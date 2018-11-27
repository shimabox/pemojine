<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class SmileysEmotion implements Gettable
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
        'Smileys & Emotion' => [
            'parent' => null,
            'children' => [
                'face-smiling',
                'face-affection',
                'face-tongue',
                'face-neutral-skeptical',
                'face-sleepy',
                'face-unwell',
                'face-concerned',
                'face-negative',
                'face-costume',
                'emotion',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'face-smiling' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'grinning face with big eyes',
                'grinning face with smiling eyes',
                'beaming face with smiling eyes',
                'face with tears of joy',
                'winking face',
                'smiling face with smiling eyes',
            ]
        ],
        'face-affection' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'smiling face with heart-eyes',
                'face blowing a kiss',
                'smiling face',
                'kissing face with closed eyes',
            ]
        ],
        'face-tongue' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'winking face with tongue',
                'squinting face with tongue',
            ]
        ],
        'face-neutral-skeptical' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'smirking face',
                'unamused face',
            ]
        ],
        'face-sleepy' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'relieved face',
                'pensive face',
                'sleepy face',
            ]
        ],
        'face-unwell' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'face with medical mask',
            ]
        ],
        'face-concerned' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'astonished face',
                'flushed face',
                'fearful face',
                'anxious face with sweat',
                'sad but relieved face',
                'crying face',
                'loudly crying face',
                'face screaming in fear',
                'confounded face',
                'persevering face',
                'disappointed face',
                'downcast face with sweat',
            ]
        ],
        'face-negative' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'pouting face',
                'angry face',
                'angry face with horns',
                'skull',
            ]
        ],
        'face-costume' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'pile of poo',
                'ghost',
                'alien',
                'alien monster',
            ]
        ],
        'emotion' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'kiss mark',
                'heart with arrow',
                'heart with ribbon',
                'growing heart',
                'beating heart',
                'heart decoration',
                'broken heart',
                'red heart',
                'yellow heart',
                'green heart',
                'blue heart',
                'purple heart',
                'anger symbol',
                'sweat droplets',
                'dashing away',
                'bomb',
                'zzz',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'grinning face with big eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':smiley:',
                ':D',
                ':-D',
                '=D',
            ]
        ],
        'grinning face with smiling eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':smile:',
            ]
        ],
        'beaming face with smiling eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':grin:',
            ]
        ],
        'face with tears of joy' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':joy:',
                ':\')', // :')
                ':\'-)', // :'-)
            ]
        ],
        'winking face' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':wink:',
                ';)',
                ';-)',
                '*-)',
                '*)',
                ';-]',
                ';]',
                ';D',
                ';^)',
            ]
        ],
        'smiling face with smiling eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':blush:',
            ]
        ],
        'smiling face with heart-eyes' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':heart_eyes:',
            ]
        ],
        'face blowing a kiss' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':kissing_heart:',
                ':*',
                ':-*',
                '=*',
                ':^*',
            ]
        ],
        'smiling face' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':relaxed:',
            ]
        ],
        'kissing face with closed eyes' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':kissing_closed_eyes:',
            ]
        ],
        'winking face with tongue' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':stuck_out_tongue_winking_eye:',
                '>:P',
                'X-P',
            ]
        ],
        'squinting face with tongue' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':stuck_out_tongue_closed_eyes:',
            ]
        ],
        'smirking face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':smirk:',
            ]
        ],
        'unamused face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':unamused:',
            ]
        ],
        'relieved face' => [
            'parent' => 'face-sleepy',
            'children' => null,
            'aliases' => [
                ':relieved:',
            ]
        ],
        'pensive face' => [
            'parent' => 'face-sleepy',
            'children' => null,
            'aliases' => [
                ':pensive:',
            ]
        ],
        'sleepy face' => [
            'parent' => 'face-sleepy',
            'children' => null,
            'aliases' => [
                ':sleepy:',
            ]
        ],
        'face with medical mask' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':mask:',
            ]
        ],
        'astonished face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':astonished:',
            ]
        ],
        'flushed face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':flushed:',
                ':$',
                '=$',
            ]
        ],
        'fearful face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':fearful:',
                'D:',
            ]
        ],
        'anxious face with sweat' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':cold_sweat:',
            ]
        ],
        'sad but relieved face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':disappointed_relieved:',
            ]
        ],
        'crying face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':cry:',
                ':\'(', // :'(
                ':\'-(', // :'-(
                ';(',
                ';-(',
            ]
        ],
        'loudly crying face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':sob:',
            ]
        ],
        'face screaming in fear' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':scream:',
            ]
        ],
        'confounded face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':confounded:',
            ]
        ],
        'persevering face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':persevere:',
                '>.<',
            ]
        ],
        'disappointed face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':disappointed:',
                '>:[',
                ':-(',
                ':(',
                ':-[',
                ':[',
                '=(',
            ]
        ],
        'downcast face with sweat' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':sweat:',
                '\':(', // ':(
                '\':-(', // ':-(
                '\'=(', // '=(
            ]
        ],
        'pouting face' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':rage:',
            ]
        ],
        'angry face' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':angry:',
                '>:(',
                '>:-(',
                ':@',
            ]
        ],
        'angry face with horns' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':imp:',
            ]
        ],
        'skull' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':skull:',
                ':skeleton:',
            ]
        ],
        'pile of poo' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':poop:',
                ':shit:',
                ':hankey:',
                ':poo:',
            ]
        ],
        'ghost' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':ghost:',
            ]
        ],
        'alien' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':alien:',
            ]
        ],
        'alien monster' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':space_invader:',
            ]
        ],
        'kiss mark' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':kiss:',
            ]
        ],
        'heart with arrow' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':cupid:',
            ]
        ],
        'heart with ribbon' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':gift_heart:',
            ]
        ],
        'growing heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':heartpulse:',
            ]
        ],
        'beating heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':heartbeat:',
            ]
        ],
        'heart decoration' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':heart_decoration:',
            ]
        ],
        'broken heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':broken_heart:',
                '</3',
            ]
        ],
        'red heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':heart:',
                '<3',
            ]
        ],
        'yellow heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':yellow_heart:',
            ]
        ],
        'green heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':green_heart:',
            ]
        ],
        'blue heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':blue_heart:',
            ]
        ],
        'purple heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':purple_heart:',
            ]
        ],
        'anger symbol' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':anger:',
            ]
        ],
        'sweat droplets' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':sweat_drops:',
            ]
        ],
        'dashing away' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':dash:',
            ]
        ],
        'bomb' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':bomb:',
            ]
        ],
        'zzz' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':zzz:',
            ]
        ],
    ];
}
