<?phpnamespace SMB\Pemojine\Structure\Vendor\GMail;

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
                'face-glasses',
                'face-concerned',
                'face-negative',
                'face-costume',
                'cat-face',
                'monkey-face',
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
                'grinning face',
                'grinning face with big eyes',
                'grinning face with smiling eyes',
                'beaming face with smiling eyes',
                'grinning squinting face',
                'grinning face with sweat',
                'face with tears of joy',
                'slightly smiling face',
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
                'face savoring food',
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
                'dizzy face',
            ]
        ],
        'face-glasses' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'smiling face with sunglasses',
            ]
        ],
        'face-concerned' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'confused face',
                'worried face',
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
                'weary face',
                'tired face',
            ]
        ],
        'face-negative' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'face with steam from nose',
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
                'ogre',
                'goblin',
                'ghost',
                'alien',
                'alien monster',
            ]
        ],
        'cat-face' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'grinning cat',
                'grinning cat with smiling eyes',
                'cat with tears of joy',
                'smiling cat with heart-eyes',
                'cat with wry smile',
                'kissing cat',
                'weary cat',
                'crying cat',
                'pouting cat',
            ]
        ],
        'monkey-face' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'see-no-evil monkey',
                'hear-no-evil monkey',
                'speak-no-evil monkey',
            ]
        ],
        'emotion' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'kiss mark',
                'love letter',
                'heart with arrow',
                'heart with ribbon',
                'sparkling heart',
                'growing heart',
                'beating heart',
                'revolving hearts',
                'two hearts',
                'heart decoration',
                'broken heart',
                'red heart',
                'yellow heart',
                'green heart',
                'blue heart',
                'purple heart',
                'hundred points',
                'anger symbol',
                'collision',
                'dizzy',
                'sweat droplets',
                'dashing away',
                'bomb',
                'speech balloon',
                'zzz',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'grinning face' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':grinning:',
            ]
        ],
        'grinning face with big eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':smiley:',
                ':-D',
                '=D',
            ]
        ],
        'grinning face with smiling eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':smile:',
                ':D',
            ]
        ],
        'beaming face with smiling eyes' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':grin:',
            ]
        ],
        'grinning squinting face' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':laughing:',
                ':satisfied:',
                '>:)',
                '>;)',
                '>:-)',
                '>=)',
            ]
        ],
        'grinning face with sweat' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':sweat_smile:',
                '\':)', // ':)
                '\':-)', // ':-)
                '\'=)', // '=)
                '\':D', // ':D
                '\':-D', // ':-D
                '\'=D', // '=D
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
        'slightly smiling face' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':slight_smile:',
                ':slightly_smiling_face:',
                ':)',
                ':-)',
                '=]',
                '=)',
                ':]',
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
        'face savoring food' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':yum:',
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
        'dizzy face' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':dizzy_face:',
                '#-)',
                '#)',
                '%-)',
                '%)',
                'X)',
                'X-)',
            ]
        ],
        'smiling face with sunglasses' => [
            'parent' => 'face-glasses',
            'children' => null,
            'aliases' => [
                ':sunglasses:',
                'B-)',
                'B)',
                '8)',
                '8-)',
                'B-D',
                '8-D',
            ]
        ],
        'confused face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':confused:',
                '>:\\', // >:\
                '>:/',
                ':-/',
                ':-.',
                ':/',
                ':\\', // :\
                '=/',
                '=\\', // =\
                ':L',
                '=L',
            ]
        ],
        'worried face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':worried:',
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
        'weary face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':weary:',
            ]
        ],
        'tired face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':tired_face:',
            ]
        ],
        'face with steam from nose' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':triumph:',
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
        'ogre' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':japanese_ogre:',
            ]
        ],
        'goblin' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':japanese_goblin:',
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
        'grinning cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':smiley_cat:',
            ]
        ],
        'grinning cat with smiling eyes' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':smile_cat:',
            ]
        ],
        'cat with tears of joy' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':joy_cat:',
            ]
        ],
        'smiling cat with heart-eyes' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':heart_eyes_cat:',
            ]
        ],
        'cat with wry smile' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':smirk_cat:',
            ]
        ],
        'kissing cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':kissing_cat:',
            ]
        ],
        'weary cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':scream_cat:',
            ]
        ],
        'crying cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':crying_cat_face:',
            ]
        ],
        'pouting cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
                ':pouting_cat:',
            ]
        ],
        'see-no-evil monkey' => [
            'parent' => 'monkey-face',
            'children' => null,
            'aliases' => [
                ':see_no_evil:',
            ]
        ],
        'hear-no-evil monkey' => [
            'parent' => 'monkey-face',
            'children' => null,
            'aliases' => [
                ':hear_no_evil:',
            ]
        ],
        'speak-no-evil monkey' => [
            'parent' => 'monkey-face',
            'children' => null,
            'aliases' => [
                ':speak_no_evil:',
            ]
        ],
        'kiss mark' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':kiss:',
            ]
        ],
        'love letter' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':love_letter:',
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
        'sparkling heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':sparkling_heart:',
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
        'revolving hearts' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':revolving_hearts:',
            ]
        ],
        'two hearts' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':two_hearts:',
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
        'hundred points' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':100:',
            ]
        ],
        'anger symbol' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':anger:',
            ]
        ],
        'collision' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':boom:',
            ]
        ],
        'dizzy' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':dizzy:',
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
        'speech balloon' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':speech_balloon:',
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
