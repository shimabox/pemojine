<?phpnamespace SMB\Pemojine\Structure\Vendor\Common;

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
                'face-concerned',
                'face-negative',
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
                'beaming face with smiling eyes',
                'winking face',
            ]
        ],
        'face-affection' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'smiling face with heart-eyes',
            ]
        ],
        'face-tongue' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'winking face with tongue',
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
            ]
        ],
        'face-concerned' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'crying face',
                'loudly crying face',
                'face screaming in fear',
                'confounded face',
                'persevering face',
                'downcast face with sweat',
            ]
        ],
        'face-negative' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'pouting face',
                'angry face',
            ]
        ],
        'emotion' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'kiss mark',
                'beating heart',
                'broken heart',
                'red heart',
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
        'beaming face with smiling eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':grin:',
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
        'smiling face with heart-eyes' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':heart_eyes:',
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
        'kiss mark' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':kiss:',
            ]
        ],
        'beating heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':heartbeat:',
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
