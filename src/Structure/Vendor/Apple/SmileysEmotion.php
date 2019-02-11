<?phpnamespace SMB\Pemojine\Structure\Vendor\Apple;

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
                'face-hand',
                'face-neutral-skeptical',
                'face-sleepy',
                'face-unwell',
                'face-hat',
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
                'rolling on the floor laughing',
                'face with tears of joy',
                'slightly smiling face',
                'upside-down face',
                'winking face',
                'smiling face with smiling eyes',
                'smiling face with halo',
            ]
        ],
        'face-affection' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'smiling face with hearts',
                'smiling face with heart-eyes',
                'star-struck',
                'face blowing a kiss',
                'kissing face',
                'smiling face',
                'kissing face with closed eyes',
                'kissing face with smiling eyes',
            ]
        ],
        'face-tongue' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'face savoring food',
                'face with tongue',
                'winking face with tongue',
                'zany face',
                'squinting face with tongue',
                'money-mouth face',
            ]
        ],
        'face-hand' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'hugging face',
                'face with hand over mouth',
                'shushing face',
                'thinking face',
            ]
        ],
        'face-neutral-skeptical' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'zipper-mouth face',
                'face with raised eyebrow',
                'neutral face',
                'expressionless face',
                'face without mouth',
                'smirking face',
                'unamused face',
                'face with rolling eyes',
                'grimacing face',
                'lying face',
            ]
        ],
        'face-sleepy' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'relieved face',
                'pensive face',
                'sleepy face',
                'drooling face',
                'sleeping face',
            ]
        ],
        'face-unwell' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'face with medical mask',
                'face with thermometer',
                'face with head-bandage',
                'nauseated face',
                'face vomiting',
                'sneezing face',
                'hot face',
                'cold face',
                'woozy face',
                'dizzy face',
                'exploding head',
            ]
        ],
        'face-hat' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'cowboy hat face',
                'partying face',
            ]
        ],
        'face-glasses' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'smiling face with sunglasses',
                'nerd face',
                'face with monocle',
            ]
        ],
        'face-concerned' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'confused face',
                'worried face',
                'slightly frowning face',
                'frowning face',
                'face with open mouth',
                'hushed face',
                'astonished face',
                'flushed face',
                'pleading face',
                'frowning face with open mouth',
                'anguished face',
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
                'face with symbols on mouth',
                'smiling face with horns',
                'angry face with horns',
                'skull',
                'skull and crossbones',
            ]
        ],
        'face-costume' => [
            'parent' => 'Smileys & Emotion',
            'children' => [
                'pile of poo',
                'clown face',
                'ogre',
                'goblin',
                'ghost',
                'alien',
                'alien monster',
                'robot',
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
                'heart exclamation',
                'broken heart',
                'red heart',
                'orange heart',
                'yellow heart',
                'green heart',
                'blue heart',
                'purple heart',
                'black heart',
                'hundred points',
                'anger symbol',
                'collision',
                'dizzy',
                'sweat droplets',
                'dashing away',
                'hole',
                'bomb',
                'speech balloon',
                'eye in speech bubble',
                'left speech bubble',
                'right anger bubble',
                'thought balloon',
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
        'rolling on the floor laughing' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':rofl:',
                ':rolling_on_the_floor_laughing:',
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
        'upside-down face' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':upside_down:',
                ':upside_down_face:',
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
        'smiling face with halo' => [
            'parent' => 'face-smiling',
            'children' => null,
            'aliases' => [
                ':innocent:',
                'O:-)',
                '0:-3',
                '0:3',
                '0:-)',
                '0:)',
                '0;^)',
                'O:)',
                'O;-)',
                'O=)',
                '0;-)',
                'O:-3',
                'O:3',
            ]
        ],
        'smiling face with hearts' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
            ]
        ],
        'smiling face with heart-eyes' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':heart_eyes:',
            ]
        ],
        'star-struck' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':star_struck:',
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
        'kissing face' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':kissing:',
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
        'kissing face with smiling eyes' => [
            'parent' => 'face-affection',
            'children' => null,
            'aliases' => [
                ':kissing_smiling_eyes:',
            ]
        ],
        'face savoring food' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':yum:',
            ]
        ],
        'face with tongue' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':stuck_out_tongue:',
                ':P',
                ':-P',
                '=P',
                ':-Þ',
                ':Þ',
                ':-b',
                ':b',
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
        'zany face' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':zany_face:',
            ]
        ],
        'squinting face with tongue' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':stuck_out_tongue_closed_eyes:',
            ]
        ],
        'money-mouth face' => [
            'parent' => 'face-tongue',
            'children' => null,
            'aliases' => [
                ':money_mouth:',
                ':money_mouth_face:',
            ]
        ],
        'hugging face' => [
            'parent' => 'face-hand',
            'children' => null,
            'aliases' => [
                ':hugging:',
                ':hugging_face:',
            ]
        ],
        'face with hand over mouth' => [
            'parent' => 'face-hand',
            'children' => null,
            'aliases' => [
                ':face_with_hand_over_mouth:',
            ]
        ],
        'shushing face' => [
            'parent' => 'face-hand',
            'children' => null,
            'aliases' => [
                ':shushing_face:',
            ]
        ],
        'thinking face' => [
            'parent' => 'face-hand',
            'children' => null,
            'aliases' => [
                ':thinking:',
                ':thinking_face:',
            ]
        ],
        'zipper-mouth face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':zipper_mouth:',
                ':zipper_mouth_face:',
            ]
        ],
        'face with raised eyebrow' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':face_with_raised_eyebrow:',
            ]
        ],
        'neutral face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':neutral_face:',
            ]
        ],
        'expressionless face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':expressionless:',
                '-_-',
                '-__-',
                '-___-',
            ]
        ],
        'face without mouth' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':no_mouth:',
                ':-X',
                ':X',
                ':-#',
                ':#',
                '=X',
                '=#',
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
        'face with rolling eyes' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':rolling_eyes:',
                ':face_with_rolling_eyes:',
            ]
        ],
        'grimacing face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':grimacing:',
            ]
        ],
        'lying face' => [
            'parent' => 'face-neutral-skeptical',
            'children' => null,
            'aliases' => [
                ':lying_face:',
                ':liar:',
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
        'drooling face' => [
            'parent' => 'face-sleepy',
            'children' => null,
            'aliases' => [
                ':drooling_face:',
                ':drool:',
            ]
        ],
        'sleeping face' => [
            'parent' => 'face-sleepy',
            'children' => null,
            'aliases' => [
                ':sleeping:',
            ]
        ],
        'face with medical mask' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':mask:',
            ]
        ],
        'face with thermometer' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':thermometer_face:',
                ':face_with_thermometer:',
            ]
        ],
        'face with head-bandage' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':head_bandage:',
                ':face_with_head_bandage:',
            ]
        ],
        'nauseated face' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':nauseated_face:',
                ':sick:',
            ]
        ],
        'face vomiting' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':face_vomiting:',
            ]
        ],
        'sneezing face' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':sneezing_face:',
                ':sneeze:',
            ]
        ],
        'hot face' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':hot_face:',
            ]
        ],
        'cold face' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':cold_face:',
            ]
        ],
        'woozy face' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':woozy_face:',
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
        'exploding head' => [
            'parent' => 'face-unwell',
            'children' => null,
            'aliases' => [
                ':exploding_head:',
            ]
        ],
        'cowboy hat face' => [
            'parent' => 'face-hat',
            'children' => null,
            'aliases' => [
                ':cowboy:',
                ':face_with_cowboy_hat:',
            ]
        ],
        'partying face' => [
            'parent' => 'face-hat',
            'children' => null,
            'aliases' => [
                ':partying_face:',
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
        'nerd face' => [
            'parent' => 'face-glasses',
            'children' => null,
            'aliases' => [
                ':nerd:',
                ':nerd_face:',
            ]
        ],
        'face with monocle' => [
            'parent' => 'face-glasses',
            'children' => null,
            'aliases' => [
                ':face_with_monocle:',
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
        'slightly frowning face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':slight_frown:',
                ':slightly_frowning_face:',
            ]
        ],
        'frowning face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':frowning2:',
                ':white_frowning_face:',
            ]
        ],
        'face with open mouth' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':open_mouth:',
                ':-O',
                ':O',
                'O_O',
                '>:O',
            ]
        ],
        'hushed face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':hushed:',
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
        'pleading face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':pleading_face:',
            ]
        ],
        'frowning face with open mouth' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':frowning:',
            ]
        ],
        'anguished face' => [
            'parent' => 'face-concerned',
            'children' => null,
            'aliases' => [
                ':anguished:',
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
        'face with symbols on mouth' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':face_with_symbols_over_mouth:',
            ]
        ],
        'smiling face with horns' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':smiling_imp:',
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
        'skull and crossbones' => [
            'parent' => 'face-negative',
            'children' => null,
            'aliases' => [
                ':skull_crossbones:',
                ':skull_and_crossbones:',
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
        'clown face' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
                ':clown:',
                ':clown_face:',
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
        'robot' => [
            'parent' => 'face-costume',
            'children' => null,
            'aliases' => [
            ]
        ],
        'grinning cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'grinning cat with smiling eyes' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'cat with tears of joy' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'smiling cat with heart-eyes' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'cat with wry smile' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'kissing cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'weary cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'crying cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
            ]
        ],
        'pouting cat' => [
            'parent' => 'cat-face',
            'children' => null,
            'aliases' => [
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
        'heart exclamation' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
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
        'orange heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':orange_heart:',
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
        'black heart' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':black_heart:',
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
        'hole' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':hole:',
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
        'eye in speech bubble' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':eye_in_speech_bubble:',
            ]
        ],
        'left speech bubble' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':speech_left:',
                ':left_speech_bubble:',
            ]
        ],
        'right anger bubble' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':anger_right:',
                ':right_anger_bubble:',
            ]
        ],
        'thought balloon' => [
            'parent' => 'emotion',
            'children' => null,
            'aliases' => [
                ':thought_balloon:',
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
