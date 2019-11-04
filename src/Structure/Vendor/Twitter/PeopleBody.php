<?phpnamespace SMB\Pemojine\Structure\Vendor\Twitter;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class PeopleBody implements Gettable
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
        'People & Body' => [
            'parent' => null,
            'children' => [
                'hand-fingers-open',
                'hand-fingers-partial',
                'hand-single-finger',
                'hand-fingers-closed',
                'hands',
                'hand-prop',
                'body-parts',
                'person',
                'person-gesture',
                'person-role',
                'person-fantasy',
                'person-activity',
                'person-sport',
                'person-resting',
                'family',
                'person-symbol',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'hand-fingers-open' => [
            'parent' => 'People & Body',
            'children' => [
                'waving hand',
                'raised back of hand',
                'hand with fingers splayed',
                'raised hand',
                'vulcan salute',
                'waving hand: light skin tone',
                'waving hand: medium-light skin tone',
                'waving hand: medium skin tone',
                'waving hand: medium-dark skin tone',
                'waving hand: dark skin tone',
                'raised back of hand: light skin tone',
                'raised back of hand: medium-light skin tone',
                'raised back of hand: medium skin tone',
                'raised back of hand: medium-dark skin tone',
                'raised back of hand: dark skin tone',
                'hand with fingers splayed: light skin tone',
                'hand with fingers splayed: medium-light skin tone',
                'hand with fingers splayed: medium skin tone',
                'hand with fingers splayed: medium-dark skin tone',
                'hand with fingers splayed: dark skin tone',
                'raised hand: light skin tone',
                'raised hand: medium-light skin tone',
                'raised hand: medium skin tone',
                'raised hand: medium-dark skin tone',
                'raised hand: dark skin tone',
                'vulcan salute: light skin tone',
                'vulcan salute: medium-light skin tone',
                'vulcan salute: medium skin tone',
                'vulcan salute: medium-dark skin tone',
                'vulcan salute: dark skin tone',
            ]
        ],
        'hand-fingers-partial' => [
            'parent' => 'People & Body',
            'children' => [
                'OK hand',
                'pinching hand',
                'victory hand',
                'crossed fingers',
                'love-you gesture',
                'sign of the horns',
                'call me hand',
                'OK hand: light skin tone',
                'OK hand: medium-light skin tone',
                'OK hand: medium skin tone',
                'OK hand: medium-dark skin tone',
                'OK hand: dark skin tone',
                'pinching hand: light skin tone',
                'pinching hand: medium-light skin tone',
                'pinching hand: medium skin tone',
                'pinching hand: medium-dark skin tone',
                'pinching hand: dark skin tone',
                'victory hand: light skin tone',
                'victory hand: medium-light skin tone',
                'victory hand: medium skin tone',
                'victory hand: medium-dark skin tone',
                'victory hand: dark skin tone',
                'crossed fingers: light skin tone',
                'crossed fingers: medium-light skin tone',
                'crossed fingers: medium skin tone',
                'crossed fingers: medium-dark skin tone',
                'crossed fingers: dark skin tone',
                'love-you gesture: light skin tone',
                'love-you gesture: medium-light skin tone',
                'love-you gesture: medium skin tone',
                'love-you gesture: medium-dark skin tone',
                'love-you gesture: dark skin tone',
                'sign of the horns: light skin tone',
                'sign of the horns: medium-light skin tone',
                'sign of the horns: medium skin tone',
                'sign of the horns: medium-dark skin tone',
                'sign of the horns: dark skin tone',
                'call me hand: light skin tone',
                'call me hand: medium-light skin tone',
                'call me hand: medium skin tone',
                'call me hand: medium-dark skin tone',
                'call me hand: dark skin tone',
            ]
        ],
        'hand-single-finger' => [
            'parent' => 'People & Body',
            'children' => [
                'backhand index pointing left',
                'backhand index pointing right',
                'backhand index pointing up',
                'middle finger',
                'backhand index pointing down',
                'index pointing up',
                'backhand index pointing left: light skin tone',
                'backhand index pointing left: medium-light skin tone',
                'backhand index pointing left: medium skin tone',
                'backhand index pointing left: medium-dark skin tone',
                'backhand index pointing left: dark skin tone',
                'backhand index pointing right: light skin tone',
                'backhand index pointing right: medium-light skin tone',
                'backhand index pointing right: medium skin tone',
                'backhand index pointing right: medium-dark skin tone',
                'backhand index pointing right: dark skin tone',
                'backhand index pointing up: light skin tone',
                'backhand index pointing up: medium-light skin tone',
                'backhand index pointing up: medium skin tone',
                'backhand index pointing up: medium-dark skin tone',
                'backhand index pointing up: dark skin tone',
                'middle finger: light skin tone',
                'middle finger: medium-light skin tone',
                'middle finger: medium skin tone',
                'middle finger: medium-dark skin tone',
                'middle finger: dark skin tone',
                'backhand index pointing down: light skin tone',
                'backhand index pointing down: medium-light skin tone',
                'backhand index pointing down: medium skin tone',
                'backhand index pointing down: medium-dark skin tone',
                'backhand index pointing down: dark skin tone',
                'index pointing up: light skin tone',
                'index pointing up: medium-light skin tone',
                'index pointing up: medium skin tone',
                'index pointing up: medium-dark skin tone',
                'index pointing up: dark skin tone',
            ]
        ],
        'hand-fingers-closed' => [
            'parent' => 'People & Body',
            'children' => [
                'thumbs up',
                'thumbs down',
                'raised fist',
                'oncoming fist',
                'left-facing fist',
                'right-facing fist',
                'thumbs up: light skin tone',
                'thumbs up: medium-light skin tone',
                'thumbs up: medium skin tone',
                'thumbs up: medium-dark skin tone',
                'thumbs up: dark skin tone',
                'thumbs down: light skin tone',
                'thumbs down: medium-light skin tone',
                'thumbs down: medium skin tone',
                'thumbs down: medium-dark skin tone',
                'thumbs down: dark skin tone',
                'raised fist: light skin tone',
                'raised fist: medium-light skin tone',
                'raised fist: medium skin tone',
                'raised fist: medium-dark skin tone',
                'raised fist: dark skin tone',
                'oncoming fist: light skin tone',
                'oncoming fist: medium-light skin tone',
                'oncoming fist: medium skin tone',
                'oncoming fist: medium-dark skin tone',
                'oncoming fist: dark skin tone',
                'left-facing fist: light skin tone',
                'left-facing fist: medium-light skin tone',
                'left-facing fist: medium skin tone',
                'left-facing fist: medium-dark skin tone',
                'left-facing fist: dark skin tone',
                'right-facing fist: light skin tone',
                'right-facing fist: medium-light skin tone',
                'right-facing fist: medium skin tone',
                'right-facing fist: medium-dark skin tone',
                'right-facing fist: dark skin tone',
            ]
        ],
        'hands' => [
            'parent' => 'People & Body',
            'children' => [
                'clapping hands',
                'raising hands',
                'open hands',
                'palms up together',
                'handshake',
                'folded hands',
                'clapping hands: light skin tone',
                'clapping hands: medium-light skin tone',
                'clapping hands: medium skin tone',
                'clapping hands: medium-dark skin tone',
                'clapping hands: dark skin tone',
                'raising hands: light skin tone',
                'raising hands: medium-light skin tone',
                'raising hands: medium skin tone',
                'raising hands: medium-dark skin tone',
                'raising hands: dark skin tone',
                'open hands: light skin tone',
                'open hands: medium-light skin tone',
                'open hands: medium skin tone',
                'open hands: medium-dark skin tone',
                'open hands: dark skin tone',
                'palms up together: light skin tone',
                'palms up together: medium-light skin tone',
                'palms up together: medium skin tone',
                'palms up together: medium-dark skin tone',
                'palms up together: dark skin tone',
                'folded hands: light skin tone',
                'folded hands: medium-light skin tone',
                'folded hands: medium skin tone',
                'folded hands: medium-dark skin tone',
                'folded hands: dark skin tone',
            ]
        ],
        'hand-prop' => [
            'parent' => 'People & Body',
            'children' => [
                'writing hand',
                'nail polish',
                'selfie',
                'writing hand: light skin tone',
                'writing hand: medium-light skin tone',
                'writing hand: medium skin tone',
                'writing hand: medium-dark skin tone',
                'writing hand: dark skin tone',
                'nail polish: light skin tone',
                'nail polish: medium-light skin tone',
                'nail polish: medium skin tone',
                'nail polish: medium-dark skin tone',
                'nail polish: dark skin tone',
                'selfie: light skin tone',
                'selfie: medium-light skin tone',
                'selfie: medium skin tone',
                'selfie: medium-dark skin tone',
                'selfie: dark skin tone',
            ]
        ],
        'body-parts' => [
            'parent' => 'People & Body',
            'children' => [
                'flexed biceps',
                'mechanical arm',
                'mechanical leg',
                'leg',
                'foot',
                'ear',
                'ear with hearing aid',
                'nose',
                'brain',
                'tooth',
                'bone',
                'eyes',
                'eye',
                'tongue',
                'mouth',
                'flexed biceps: light skin tone',
                'flexed biceps: medium-light skin tone',
                'flexed biceps: medium skin tone',
                'flexed biceps: medium-dark skin tone',
                'flexed biceps: dark skin tone',
                'leg: light skin tone',
                'leg: medium-light skin tone',
                'leg: medium skin tone',
                'leg: medium-dark skin tone',
                'leg: dark skin tone',
                'foot: light skin tone',
                'foot: medium-light skin tone',
                'foot: medium skin tone',
                'foot: medium-dark skin tone',
                'foot: dark skin tone',
                'ear: light skin tone',
                'ear: medium-light skin tone',
                'ear: medium skin tone',
                'ear: medium-dark skin tone',
                'ear: dark skin tone',
                'ear with hearing aid: light skin tone',
                'ear with hearing aid: medium-light skin tone',
                'ear with hearing aid: medium skin tone',
                'ear with hearing aid: medium-dark skin tone',
                'ear with hearing aid: dark skin tone',
                'nose: light skin tone',
                'nose: medium-light skin tone',
                'nose: medium skin tone',
                'nose: medium-dark skin tone',
                'nose: dark skin tone',
            ]
        ],
        'person' => [
            'parent' => 'People & Body',
            'children' => [
                'baby',
                'child',
                'boy',
                'girl',
                'person',
                'person: blond hair',
                'man',
                'man: beard',
                'man: red hair',
                'man: curly hair',
                'man: white hair',
                'man: bald',
                'woman',
                'woman: red hair',
                'woman: curly hair',
                'woman: white hair',
                'woman: bald',
                'woman: blond hair',
                'man: blond hair',
                'older person',
                'old man',
                'old woman',
                'baby: light skin tone',
                'baby: medium-light skin tone',
                'baby: medium skin tone',
                'baby: medium-dark skin tone',
                'baby: dark skin tone',
                'child: light skin tone',
                'child: medium-light skin tone',
                'child: medium skin tone',
                'child: medium-dark skin tone',
                'child: dark skin tone',
                'boy: light skin tone',
                'boy: medium-light skin tone',
                'boy: medium skin tone',
                'boy: medium-dark skin tone',
                'boy: dark skin tone',
                'girl: light skin tone',
                'girl: medium-light skin tone',
                'girl: medium skin tone',
                'girl: medium-dark skin tone',
                'girl: dark skin tone',
                'person: light skin tone',
                'person: medium-light skin tone',
                'person: medium skin tone',
                'person: medium-dark skin tone',
                'person: dark skin tone',
                'person: light skin tone, blond hair',
                'person: medium-light skin tone, blond hair',
                'person: medium skin tone, blond hair',
                'person: medium-dark skin tone, blond hair',
                'person: dark skin tone, blond hair',
                'man: light skin tone',
                'man: medium-light skin tone',
                'man: medium skin tone',
                'man: medium-dark skin tone',
                'man: dark skin tone',
                'man: light skin tone, beard',
                'man: medium-light skin tone, beard',
                'man: medium skin tone, beard',
                'man: medium-dark skin tone, beard',
                'man: dark skin tone, beard',
                'man: light skin tone, red hair',
                'man: medium-light skin tone, red hair',
                'man: medium skin tone, red hair',
                'man: medium-dark skin tone, red hair',
                'man: dark skin tone, red hair',
                'man: light skin tone, curly hair',
                'man: medium-light skin tone, curly hair',
                'man: medium skin tone, curly hair',
                'man: medium-dark skin tone, curly hair',
                'man: dark skin tone, curly hair',
                'man: light skin tone, white hair',
                'man: medium-light skin tone, white hair',
                'man: medium skin tone, white hair',
                'man: medium-dark skin tone, white hair',
                'man: dark skin tone, white hair',
                'man: light skin tone, bald',
                'man: medium-light skin tone, bald',
                'man: medium skin tone, bald',
                'man: medium-dark skin tone, bald',
                'man: dark skin tone, bald',
                'woman: light skin tone',
                'woman: medium-light skin tone',
                'woman: medium skin tone',
                'woman: medium-dark skin tone',
                'woman: dark skin tone',
                'woman: light skin tone, red hair',
                'woman: medium-light skin tone, red hair',
                'woman: medium skin tone, red hair',
                'woman: medium-dark skin tone, red hair',
                'woman: dark skin tone, red hair',
                'woman: light skin tone, curly hair',
                'woman: medium-light skin tone, curly hair',
                'woman: medium skin tone, curly hair',
                'woman: medium-dark skin tone, curly hair',
                'woman: dark skin tone, curly hair',
                'woman: light skin tone, white hair',
                'woman: medium-light skin tone, white hair',
                'woman: medium skin tone, white hair',
                'woman: medium-dark skin tone, white hair',
                'woman: dark skin tone, white hair',
                'woman: light skin tone, bald',
                'woman: medium-light skin tone, bald',
                'woman: medium skin tone, bald',
                'woman: medium-dark skin tone, bald',
                'woman: dark skin tone, bald',
                'woman: light skin tone, blond hair',
                'woman: medium-light skin tone, blond hair',
                'woman: medium skin tone, blond hair',
                'woman: medium-dark skin tone, blond hair',
                'woman: dark skin tone, blond hair',
                'man: light skin tone, blond hair',
                'man: medium-light skin tone, blond hair',
                'man: medium skin tone, blond hair',
                'man: medium-dark skin tone, blond hair',
                'man: dark skin tone, blond hair',
                'older person: light skin tone',
                'older person: medium-light skin tone',
                'older person: medium skin tone',
                'older person: medium-dark skin tone',
                'older person: dark skin tone',
                'old man: light skin tone',
                'old man: medium-light skin tone',
                'old man: medium skin tone',
                'old man: medium-dark skin tone',
                'old man: dark skin tone',
                'old woman: light skin tone',
                'old woman: medium-light skin tone',
                'old woman: medium skin tone',
                'old woman: medium-dark skin tone',
                'old woman: dark skin tone',
            ]
        ],
        'person-gesture' => [
            'parent' => 'People & Body',
            'children' => [
                'person frowning',
                'man frowning',
                'woman frowning',
                'person pouting',
                'man pouting',
                'woman pouting',
                'person gesturing NO',
                'man gesturing NO',
                'woman gesturing NO',
                'person gesturing OK',
                'man gesturing OK',
                'woman gesturing OK',
                'person tipping hand',
                'man tipping hand',
                'woman tipping hand',
                'person raising hand',
                'man raising hand',
                'woman raising hand',
                'deaf person',
                'deaf man',
                'deaf woman',
                'person bowing',
                'man bowing',
                'woman bowing',
                'person facepalming',
                'man facepalming',
                'woman facepalming',
                'person shrugging',
                'man shrugging',
                'woman shrugging',
                'person frowning: light skin tone',
                'person frowning: medium-light skin tone',
                'person frowning: medium skin tone',
                'person frowning: medium-dark skin tone',
                'person frowning: dark skin tone',
                'man frowning: light skin tone',
                'man frowning: medium-light skin tone',
                'man frowning: medium skin tone',
                'man frowning: medium-dark skin tone',
                'man frowning: dark skin tone',
                'woman frowning: light skin tone',
                'woman frowning: medium-light skin tone',
                'woman frowning: medium skin tone',
                'woman frowning: medium-dark skin tone',
                'woman frowning: dark skin tone',
                'person pouting: light skin tone',
                'person pouting: medium-light skin tone',
                'person pouting: medium skin tone',
                'person pouting: medium-dark skin tone',
                'person pouting: dark skin tone',
                'man pouting: light skin tone',
                'man pouting: medium-light skin tone',
                'man pouting: medium skin tone',
                'man pouting: medium-dark skin tone',
                'man pouting: dark skin tone',
                'woman pouting: light skin tone',
                'woman pouting: medium-light skin tone',
                'woman pouting: medium skin tone',
                'woman pouting: medium-dark skin tone',
                'woman pouting: dark skin tone',
                'person gesturing NO: light skin tone',
                'person gesturing NO: medium-light skin tone',
                'person gesturing NO: medium skin tone',
                'person gesturing NO: medium-dark skin tone',
                'person gesturing NO: dark skin tone',
                'man gesturing NO: light skin tone',
                'man gesturing NO: medium-light skin tone',
                'man gesturing NO: medium skin tone',
                'man gesturing NO: medium-dark skin tone',
                'man gesturing NO: dark skin tone',
                'woman gesturing NO: light skin tone',
                'woman gesturing NO: medium-light skin tone',
                'woman gesturing NO: medium skin tone',
                'woman gesturing NO: medium-dark skin tone',
                'woman gesturing NO: dark skin tone',
                'person gesturing OK: light skin tone',
                'person gesturing OK: medium-light skin tone',
                'person gesturing OK: medium skin tone',
                'person gesturing OK: medium-dark skin tone',
                'person gesturing OK: dark skin tone',
                'man gesturing OK: light skin tone',
                'man gesturing OK: medium-light skin tone',
                'man gesturing OK: medium skin tone',
                'man gesturing OK: medium-dark skin tone',
                'man gesturing OK: dark skin tone',
                'woman gesturing OK: light skin tone',
                'woman gesturing OK: medium-light skin tone',
                'woman gesturing OK: medium skin tone',
                'woman gesturing OK: medium-dark skin tone',
                'woman gesturing OK: dark skin tone',
                'person tipping hand: light skin tone',
                'person tipping hand: medium-light skin tone',
                'person tipping hand: medium skin tone',
                'person tipping hand: medium-dark skin tone',
                'person tipping hand: dark skin tone',
                'man tipping hand: light skin tone',
                'man tipping hand: medium-light skin tone',
                'man tipping hand: medium skin tone',
                'man tipping hand: medium-dark skin tone',
                'man tipping hand: dark skin tone',
                'woman tipping hand: light skin tone',
                'woman tipping hand: medium-light skin tone',
                'woman tipping hand: medium skin tone',
                'woman tipping hand: medium-dark skin tone',
                'woman tipping hand: dark skin tone',
                'person raising hand: light skin tone',
                'person raising hand: medium-light skin tone',
                'person raising hand: medium skin tone',
                'person raising hand: medium-dark skin tone',
                'person raising hand: dark skin tone',
                'man raising hand: light skin tone',
                'man raising hand: medium-light skin tone',
                'man raising hand: medium skin tone',
                'man raising hand: medium-dark skin tone',
                'man raising hand: dark skin tone',
                'woman raising hand: light skin tone',
                'woman raising hand: medium-light skin tone',
                'woman raising hand: medium skin tone',
                'woman raising hand: medium-dark skin tone',
                'woman raising hand: dark skin tone',
                'deaf person: light skin tone',
                'deaf person: medium-light skin tone',
                'deaf person: medium skin tone',
                'deaf person: medium-dark skin tone',
                'deaf person: dark skin tone',
                'deaf man: light skin tone',
                'deaf man: medium-light skin tone',
                'deaf man: medium skin tone',
                'deaf man: medium-dark skin tone',
                'deaf man: dark skin tone',
                'deaf woman: light skin tone',
                'deaf woman: medium-light skin tone',
                'deaf woman: medium skin tone',
                'deaf woman: medium-dark skin tone',
                'deaf woman: dark skin tone',
                'person bowing: light skin tone',
                'person bowing: medium-light skin tone',
                'person bowing: medium skin tone',
                'person bowing: medium-dark skin tone',
                'person bowing: dark skin tone',
                'man bowing: light skin tone',
                'man bowing: medium-light skin tone',
                'man bowing: medium skin tone',
                'man bowing: medium-dark skin tone',
                'man bowing: dark skin tone',
                'woman bowing: light skin tone',
                'woman bowing: medium-light skin tone',
                'woman bowing: medium skin tone',
                'woman bowing: medium-dark skin tone',
                'woman bowing: dark skin tone',
                'person facepalming: light skin tone',
                'person facepalming: medium-light skin tone',
                'person facepalming: medium skin tone',
                'person facepalming: medium-dark skin tone',
                'person facepalming: dark skin tone',
                'man facepalming: light skin tone',
                'man facepalming: medium-light skin tone',
                'man facepalming: medium skin tone',
                'man facepalming: medium-dark skin tone',
                'man facepalming: dark skin tone',
                'woman facepalming: light skin tone',
                'woman facepalming: medium-light skin tone',
                'woman facepalming: medium skin tone',
                'woman facepalming: medium-dark skin tone',
                'woman facepalming: dark skin tone',
                'person shrugging: light skin tone',
                'person shrugging: medium-light skin tone',
                'person shrugging: medium skin tone',
                'person shrugging: medium-dark skin tone',
                'person shrugging: dark skin tone',
                'man shrugging: light skin tone',
                'man shrugging: medium-light skin tone',
                'man shrugging: medium skin tone',
                'man shrugging: medium-dark skin tone',
                'man shrugging: dark skin tone',
                'woman shrugging: light skin tone',
                'woman shrugging: medium-light skin tone',
                'woman shrugging: medium skin tone',
                'woman shrugging: medium-dark skin tone',
                'woman shrugging: dark skin tone',
            ]
        ],
        'person-role' => [
            'parent' => 'People & Body',
            'children' => [
                'man health worker',
                'woman health worker',
                'man student',
                'woman student',
                'man teacher',
                'woman teacher',
                'man judge',
                'woman judge',
                'man farmer',
                'woman farmer',
                'man cook',
                'woman cook',
                'man mechanic',
                'woman mechanic',
                'man factory worker',
                'woman factory worker',
                'man office worker',
                'woman office worker',
                'man scientist',
                'woman scientist',
                'man technologist',
                'woman technologist',
                'man singer',
                'woman singer',
                'man artist',
                'woman artist',
                'man pilot',
                'woman pilot',
                'man astronaut',
                'woman astronaut',
                'man firefighter',
                'woman firefighter',
                'police officer',
                'man police officer',
                'woman police officer',
                'detective',
                'man detective',
                'woman detective',
                'guard',
                'man guard',
                'woman guard',
                'construction worker',
                'man construction worker',
                'woman construction worker',
                'prince',
                'princess',
                'person wearing turban',
                'man wearing turban',
                'woman wearing turban',
                'man with skullcap',
                'woman with headscarf',
                'man in tuxedo',
                'bride with veil',
                'pregnant woman',
                'breast-feeding',
                'man health worker: light skin tone',
                'man health worker: medium-light skin tone',
                'man health worker: medium skin tone',
                'man health worker: medium-dark skin tone',
                'man health worker: dark skin tone',
                'woman health worker: light skin tone',
                'woman health worker: medium-light skin tone',
                'woman health worker: medium skin tone',
                'woman health worker: medium-dark skin tone',
                'woman health worker: dark skin tone',
                'man student: light skin tone',
                'man student: medium-light skin tone',
                'man student: medium skin tone',
                'man student: medium-dark skin tone',
                'man student: dark skin tone',
                'woman student: light skin tone',
                'woman student: medium-light skin tone',
                'woman student: medium skin tone',
                'woman student: medium-dark skin tone',
                'woman student: dark skin tone',
                'man teacher: light skin tone',
                'man teacher: medium-light skin tone',
                'man teacher: medium skin tone',
                'man teacher: medium-dark skin tone',
                'man teacher: dark skin tone',
                'woman teacher: light skin tone',
                'woman teacher: medium-light skin tone',
                'woman teacher: medium skin tone',
                'woman teacher: medium-dark skin tone',
                'woman teacher: dark skin tone',
                'man judge: light skin tone',
                'man judge: medium-light skin tone',
                'man judge: medium skin tone',
                'man judge: medium-dark skin tone',
                'man judge: dark skin tone',
                'woman judge: light skin tone',
                'woman judge: medium-light skin tone',
                'woman judge: medium skin tone',
                'woman judge: medium-dark skin tone',
                'woman judge: dark skin tone',
                'man farmer: light skin tone',
                'man farmer: medium-light skin tone',
                'man farmer: medium skin tone',
                'man farmer: medium-dark skin tone',
                'man farmer: dark skin tone',
                'woman farmer: light skin tone',
                'woman farmer: medium-light skin tone',
                'woman farmer: medium skin tone',
                'woman farmer: medium-dark skin tone',
                'woman farmer: dark skin tone',
                'man cook: light skin tone',
                'man cook: medium-light skin tone',
                'man cook: medium skin tone',
                'man cook: medium-dark skin tone',
                'man cook: dark skin tone',
                'woman cook: light skin tone',
                'woman cook: medium-light skin tone',
                'woman cook: medium skin tone',
                'woman cook: medium-dark skin tone',
                'woman cook: dark skin tone',
                'man mechanic: light skin tone',
                'man mechanic: medium-light skin tone',
                'man mechanic: medium skin tone',
                'man mechanic: medium-dark skin tone',
                'man mechanic: dark skin tone',
                'woman mechanic: light skin tone',
                'woman mechanic: medium-light skin tone',
                'woman mechanic: medium skin tone',
                'woman mechanic: medium-dark skin tone',
                'woman mechanic: dark skin tone',
                'man factory worker: light skin tone',
                'man factory worker: medium-light skin tone',
                'man factory worker: medium skin tone',
                'man factory worker: medium-dark skin tone',
                'man factory worker: dark skin tone',
                'woman factory worker: light skin tone',
                'woman factory worker: medium-light skin tone',
                'woman factory worker: medium skin tone',
                'woman factory worker: medium-dark skin tone',
                'woman factory worker: dark skin tone',
                'man office worker: light skin tone',
                'man office worker: medium-light skin tone',
                'man office worker: medium skin tone',
                'man office worker: medium-dark skin tone',
                'man office worker: dark skin tone',
                'woman office worker: light skin tone',
                'woman office worker: medium-light skin tone',
                'woman office worker: medium skin tone',
                'woman office worker: medium-dark skin tone',
                'woman office worker: dark skin tone',
                'man scientist: light skin tone',
                'man scientist: medium-light skin tone',
                'man scientist: medium skin tone',
                'man scientist: medium-dark skin tone',
                'man scientist: dark skin tone',
                'woman scientist: light skin tone',
                'woman scientist: medium-light skin tone',
                'woman scientist: medium skin tone',
                'woman scientist: medium-dark skin tone',
                'woman scientist: dark skin tone',
                'man technologist: light skin tone',
                'man technologist: medium-light skin tone',
                'man technologist: medium skin tone',
                'man technologist: medium-dark skin tone',
                'man technologist: dark skin tone',
                'woman technologist: light skin tone',
                'woman technologist: medium-light skin tone',
                'woman technologist: medium skin tone',
                'woman technologist: medium-dark skin tone',
                'woman technologist: dark skin tone',
                'man singer: light skin tone',
                'man singer: medium-light skin tone',
                'man singer: medium skin tone',
                'man singer: medium-dark skin tone',
                'man singer: dark skin tone',
                'woman singer: light skin tone',
                'woman singer: medium-light skin tone',
                'woman singer: medium skin tone',
                'woman singer: medium-dark skin tone',
                'woman singer: dark skin tone',
                'man artist: light skin tone',
                'man artist: medium-light skin tone',
                'man artist: medium skin tone',
                'man artist: medium-dark skin tone',
                'man artist: dark skin tone',
                'woman artist: light skin tone',
                'woman artist: medium-light skin tone',
                'woman artist: medium skin tone',
                'woman artist: medium-dark skin tone',
                'woman artist: dark skin tone',
                'man pilot: light skin tone',
                'man pilot: medium-light skin tone',
                'man pilot: medium skin tone',
                'man pilot: medium-dark skin tone',
                'man pilot: dark skin tone',
                'woman pilot: light skin tone',
                'woman pilot: medium-light skin tone',
                'woman pilot: medium skin tone',
                'woman pilot: medium-dark skin tone',
                'woman pilot: dark skin tone',
                'man astronaut: light skin tone',
                'man astronaut: medium-light skin tone',
                'man astronaut: medium skin tone',
                'man astronaut: medium-dark skin tone',
                'man astronaut: dark skin tone',
                'woman astronaut: light skin tone',
                'woman astronaut: medium-light skin tone',
                'woman astronaut: medium skin tone',
                'woman astronaut: medium-dark skin tone',
                'woman astronaut: dark skin tone',
                'man firefighter: light skin tone',
                'man firefighter: medium-light skin tone',
                'man firefighter: medium skin tone',
                'man firefighter: medium-dark skin tone',
                'man firefighter: dark skin tone',
                'woman firefighter: light skin tone',
                'woman firefighter: medium-light skin tone',
                'woman firefighter: medium skin tone',
                'woman firefighter: medium-dark skin tone',
                'woman firefighter: dark skin tone',
                'police officer: light skin tone',
                'police officer: medium-light skin tone',
                'police officer: medium skin tone',
                'police officer: medium-dark skin tone',
                'police officer: dark skin tone',
                'man police officer: light skin tone',
                'man police officer: medium-light skin tone',
                'man police officer: medium skin tone',
                'man police officer: medium-dark skin tone',
                'man police officer: dark skin tone',
                'woman police officer: light skin tone',
                'woman police officer: medium-light skin tone',
                'woman police officer: medium skin tone',
                'woman police officer: medium-dark skin tone',
                'woman police officer: dark skin tone',
                'detective: light skin tone',
                'detective: medium-light skin tone',
                'detective: medium skin tone',
                'detective: medium-dark skin tone',
                'detective: dark skin tone',
                'man detective: light skin tone',
                'man detective: medium-light skin tone',
                'man detective: medium skin tone',
                'man detective: medium-dark skin tone',
                'man detective: dark skin tone',
                'woman detective: light skin tone',
                'woman detective: medium-light skin tone',
                'woman detective: medium skin tone',
                'woman detective: medium-dark skin tone',
                'woman detective: dark skin tone',
                'guard: light skin tone',
                'guard: medium-light skin tone',
                'guard: medium skin tone',
                'guard: medium-dark skin tone',
                'guard: dark skin tone',
                'man guard: light skin tone',
                'man guard: medium-light skin tone',
                'man guard: medium skin tone',
                'man guard: medium-dark skin tone',
                'man guard: dark skin tone',
                'woman guard: light skin tone',
                'woman guard: medium-light skin tone',
                'woman guard: medium skin tone',
                'woman guard: medium-dark skin tone',
                'woman guard: dark skin tone',
                'construction worker: light skin tone',
                'construction worker: medium-light skin tone',
                'construction worker: medium skin tone',
                'construction worker: medium-dark skin tone',
                'construction worker: dark skin tone',
                'man construction worker: light skin tone',
                'man construction worker: medium-light skin tone',
                'man construction worker: medium skin tone',
                'man construction worker: medium-dark skin tone',
                'man construction worker: dark skin tone',
                'woman construction worker: light skin tone',
                'woman construction worker: medium-light skin tone',
                'woman construction worker: medium skin tone',
                'woman construction worker: medium-dark skin tone',
                'woman construction worker: dark skin tone',
                'prince: light skin tone',
                'prince: medium-light skin tone',
                'prince: medium skin tone',
                'prince: medium-dark skin tone',
                'prince: dark skin tone',
                'princess: light skin tone',
                'princess: medium-light skin tone',
                'princess: medium skin tone',
                'princess: medium-dark skin tone',
                'princess: dark skin tone',
                'person wearing turban: light skin tone',
                'person wearing turban: medium-light skin tone',
                'person wearing turban: medium skin tone',
                'person wearing turban: medium-dark skin tone',
                'person wearing turban: dark skin tone',
                'man wearing turban: light skin tone',
                'man wearing turban: medium-light skin tone',
                'man wearing turban: medium skin tone',
                'man wearing turban: medium-dark skin tone',
                'man wearing turban: dark skin tone',
                'woman wearing turban: light skin tone',
                'woman wearing turban: medium-light skin tone',
                'woman wearing turban: medium skin tone',
                'woman wearing turban: medium-dark skin tone',
                'woman wearing turban: dark skin tone',
                'man with skullcap: light skin tone',
                'man with skullcap: medium-light skin tone',
                'man with skullcap: medium skin tone',
                'man with skullcap: medium-dark skin tone',
                'man with skullcap: dark skin tone',
                'woman with headscarf: light skin tone',
                'woman with headscarf: medium-light skin tone',
                'woman with headscarf: medium skin tone',
                'woman with headscarf: medium-dark skin tone',
                'woman with headscarf: dark skin tone',
                'man in tuxedo: light skin tone',
                'man in tuxedo: medium-light skin tone',
                'man in tuxedo: medium skin tone',
                'man in tuxedo: medium-dark skin tone',
                'man in tuxedo: dark skin tone',
                'bride with veil: light skin tone',
                'bride with veil: medium-light skin tone',
                'bride with veil: medium skin tone',
                'bride with veil: medium-dark skin tone',
                'bride with veil: dark skin tone',
                'pregnant woman: light skin tone',
                'pregnant woman: medium-light skin tone',
                'pregnant woman: medium skin tone',
                'pregnant woman: medium-dark skin tone',
                'pregnant woman: dark skin tone',
                'breast-feeding: light skin tone',
                'breast-feeding: medium-light skin tone',
                'breast-feeding: medium skin tone',
                'breast-feeding: medium-dark skin tone',
                'breast-feeding: dark skin tone',
            ]
        ],
        'person-fantasy' => [
            'parent' => 'People & Body',
            'children' => [
                'baby angel',
                'Santa Claus',
                'Mrs. Claus',
                'superhero',
                'man superhero',
                'woman superhero',
                'supervillain',
                'man supervillain',
                'woman supervillain',
                'mage',
                'man mage',
                'woman mage',
                'fairy',
                'man fairy',
                'woman fairy',
                'vampire',
                'man vampire',
                'woman vampire',
                'merperson',
                'merman',
                'mermaid',
                'elf',
                'man elf',
                'woman elf',
                'genie',
                'man genie',
                'woman genie',
                'zombie',
                'man zombie',
                'woman zombie',
                'baby angel: light skin tone',
                'baby angel: medium-light skin tone',
                'baby angel: medium skin tone',
                'baby angel: medium-dark skin tone',
                'baby angel: dark skin tone',
                'Santa Claus: light skin tone',
                'Santa Claus: medium-light skin tone',
                'Santa Claus: medium skin tone',
                'Santa Claus: medium-dark skin tone',
                'Santa Claus: dark skin tone',
                'Mrs. Claus: light skin tone',
                'Mrs. Claus: medium-light skin tone',
                'Mrs. Claus: medium skin tone',
                'Mrs. Claus: medium-dark skin tone',
                'Mrs. Claus: dark skin tone',
                'superhero: light skin tone',
                'superhero: medium-light skin tone',
                'superhero: medium skin tone',
                'superhero: medium-dark skin tone',
                'superhero: dark skin tone',
                'man superhero: light skin tone',
                'man superhero: medium-light skin tone',
                'man superhero: medium skin tone',
                'man superhero: medium-dark skin tone',
                'man superhero: dark skin tone',
                'woman superhero: light skin tone',
                'woman superhero: medium-light skin tone',
                'woman superhero: medium skin tone',
                'woman superhero: medium-dark skin tone',
                'woman superhero: dark skin tone',
                'supervillain: light skin tone',
                'supervillain: medium-light skin tone',
                'supervillain: medium skin tone',
                'supervillain: medium-dark skin tone',
                'supervillain: dark skin tone',
                'man supervillain: light skin tone',
                'man supervillain: medium-light skin tone',
                'man supervillain: medium skin tone',
                'man supervillain: medium-dark skin tone',
                'man supervillain: dark skin tone',
                'woman supervillain: light skin tone',
                'woman supervillain: medium-light skin tone',
                'woman supervillain: medium skin tone',
                'woman supervillain: medium-dark skin tone',
                'woman supervillain: dark skin tone',
                'mage: light skin tone',
                'mage: medium-light skin tone',
                'mage: medium skin tone',
                'mage: medium-dark skin tone',
                'mage: dark skin tone',
                'man mage: light skin tone',
                'man mage: medium-light skin tone',
                'man mage: medium skin tone',
                'man mage: medium-dark skin tone',
                'man mage: dark skin tone',
                'woman mage: light skin tone',
                'woman mage: medium-light skin tone',
                'woman mage: medium skin tone',
                'woman mage: medium-dark skin tone',
                'woman mage: dark skin tone',
                'fairy: light skin tone',
                'fairy: medium-light skin tone',
                'fairy: medium skin tone',
                'fairy: medium-dark skin tone',
                'fairy: dark skin tone',
                'man fairy: light skin tone',
                'man fairy: medium-light skin tone',
                'man fairy: medium skin tone',
                'man fairy: medium-dark skin tone',
                'man fairy: dark skin tone',
                'woman fairy: light skin tone',
                'woman fairy: medium-light skin tone',
                'woman fairy: medium skin tone',
                'woman fairy: medium-dark skin tone',
                'woman fairy: dark skin tone',
                'vampire: light skin tone',
                'vampire: medium-light skin tone',
                'vampire: medium skin tone',
                'vampire: medium-dark skin tone',
                'vampire: dark skin tone',
                'man vampire: light skin tone',
                'man vampire: medium-light skin tone',
                'man vampire: medium skin tone',
                'man vampire: medium-dark skin tone',
                'man vampire: dark skin tone',
                'woman vampire: light skin tone',
                'woman vampire: medium-light skin tone',
                'woman vampire: medium skin tone',
                'woman vampire: medium-dark skin tone',
                'woman vampire: dark skin tone',
                'merperson: light skin tone',
                'merperson: medium-light skin tone',
                'merperson: medium skin tone',
                'merperson: medium-dark skin tone',
                'merperson: dark skin tone',
                'merman: light skin tone',
                'merman: medium-light skin tone',
                'merman: medium skin tone',
                'merman: medium-dark skin tone',
                'merman: dark skin tone',
                'mermaid: light skin tone',
                'mermaid: medium-light skin tone',
                'mermaid: medium skin tone',
                'mermaid: medium-dark skin tone',
                'mermaid: dark skin tone',
                'elf: light skin tone',
                'elf: medium-light skin tone',
                'elf: medium skin tone',
                'elf: medium-dark skin tone',
                'elf: dark skin tone',
                'man elf: light skin tone',
                'man elf: medium-light skin tone',
                'man elf: medium skin tone',
                'man elf: medium-dark skin tone',
                'man elf: dark skin tone',
                'woman elf: light skin tone',
                'woman elf: medium-light skin tone',
                'woman elf: medium skin tone',
                'woman elf: medium-dark skin tone',
                'woman elf: dark skin tone',
            ]
        ],
        'person-activity' => [
            'parent' => 'People & Body',
            'children' => [
                'person getting massage',
                'man getting massage',
                'woman getting massage',
                'person getting haircut',
                'man getting haircut',
                'woman getting haircut',
                'person walking',
                'man walking',
                'woman walking',
                'person standing',
                'man standing',
                'woman standing',
                'person kneeling',
                'man kneeling',
                'woman kneeling',
                'man with probing cane',
                'woman with probing cane',
                'man in motorized wheelchair',
                'woman in motorized wheelchair',
                'man in manual wheelchair',
                'woman in manual wheelchair',
                'person running',
                'man running',
                'woman running',
                'woman dancing',
                'man dancing',
                'man in suit levitating',
                'people with bunny ears',
                'men with bunny ears',
                'women with bunny ears',
                'person in steamy room',
                'man in steamy room',
                'woman in steamy room',
                'person climbing',
                'man climbing',
                'woman climbing',
                'person getting massage: light skin tone',
                'person getting massage: medium-light skin tone',
                'person getting massage: medium skin tone',
                'person getting massage: medium-dark skin tone',
                'person getting massage: dark skin tone',
                'man getting massage: light skin tone',
                'man getting massage: medium-light skin tone',
                'man getting massage: medium skin tone',
                'man getting massage: medium-dark skin tone',
                'man getting massage: dark skin tone',
                'woman getting massage: light skin tone',
                'woman getting massage: medium-light skin tone',
                'woman getting massage: medium skin tone',
                'woman getting massage: medium-dark skin tone',
                'woman getting massage: dark skin tone',
                'person getting haircut: light skin tone',
                'person getting haircut: medium-light skin tone',
                'person getting haircut: medium skin tone',
                'person getting haircut: medium-dark skin tone',
                'person getting haircut: dark skin tone',
                'man getting haircut: light skin tone',
                'man getting haircut: medium-light skin tone',
                'man getting haircut: medium skin tone',
                'man getting haircut: medium-dark skin tone',
                'man getting haircut: dark skin tone',
                'woman getting haircut: light skin tone',
                'woman getting haircut: medium-light skin tone',
                'woman getting haircut: medium skin tone',
                'woman getting haircut: medium-dark skin tone',
                'woman getting haircut: dark skin tone',
                'person walking: light skin tone',
                'person walking: medium-light skin tone',
                'person walking: medium skin tone',
                'person walking: medium-dark skin tone',
                'person walking: dark skin tone',
                'man walking: light skin tone',
                'man walking: medium-light skin tone',
                'man walking: medium skin tone',
                'man walking: medium-dark skin tone',
                'man walking: dark skin tone',
                'woman walking: light skin tone',
                'woman walking: medium-light skin tone',
                'woman walking: medium skin tone',
                'woman walking: medium-dark skin tone',
                'woman walking: dark skin tone',
                'person standing: light skin tone',
                'person standing: medium-light skin tone',
                'person standing: medium skin tone',
                'person standing: medium-dark skin tone',
                'person standing: dark skin tone',
                'man standing: light skin tone',
                'man standing: medium-light skin tone',
                'man standing: medium skin tone',
                'man standing: medium-dark skin tone',
                'man standing: dark skin tone',
                'woman standing: light skin tone',
                'woman standing: medium-light skin tone',
                'woman standing: medium skin tone',
                'woman standing: medium-dark skin tone',
                'woman standing: dark skin tone',
                'person kneeling: light skin tone',
                'person kneeling: medium-light skin tone',
                'person kneeling: medium skin tone',
                'person kneeling: medium-dark skin tone',
                'person kneeling: dark skin tone',
                'man kneeling: light skin tone',
                'man kneeling: medium-light skin tone',
                'man kneeling: medium skin tone',
                'man kneeling: medium-dark skin tone',
                'man kneeling: dark skin tone',
                'woman kneeling: light skin tone',
                'woman kneeling: medium-light skin tone',
                'woman kneeling: medium skin tone',
                'woman kneeling: medium-dark skin tone',
                'woman kneeling: dark skin tone',
                'man with probing cane: light skin tone',
                'man with probing cane: medium-light skin tone',
                'man with probing cane: medium skin tone',
                'man with probing cane: medium-dark skin tone',
                'man with probing cane: dark skin tone',
                'woman with probing cane: light skin tone',
                'woman with probing cane: medium-light skin tone',
                'woman with probing cane: medium skin tone',
                'woman with probing cane: medium-dark skin tone',
                'woman with probing cane: dark skin tone',
                'man in motorized wheelchair: light skin tone',
                'man in motorized wheelchair: medium-light skin tone',
                'man in motorized wheelchair: medium skin tone',
                'man in motorized wheelchair: medium-dark skin tone',
                'man in motorized wheelchair: dark skin tone',
                'woman in motorized wheelchair: light skin tone',
                'woman in motorized wheelchair: medium-light skin tone',
                'woman in motorized wheelchair: medium skin tone',
                'woman in motorized wheelchair: medium-dark skin tone',
                'woman in motorized wheelchair: dark skin tone',
                'man in manual wheelchair: light skin tone',
                'man in manual wheelchair: medium-light skin tone',
                'man in manual wheelchair: medium skin tone',
                'man in manual wheelchair: medium-dark skin tone',
                'man in manual wheelchair: dark skin tone',
                'woman in manual wheelchair: light skin tone',
                'woman in manual wheelchair: medium-light skin tone',
                'woman in manual wheelchair: medium skin tone',
                'woman in manual wheelchair: medium-dark skin tone',
                'woman in manual wheelchair: dark skin tone',
                'person running: light skin tone',
                'person running: medium-light skin tone',
                'person running: medium skin tone',
                'person running: medium-dark skin tone',
                'person running: dark skin tone',
                'man running: light skin tone',
                'man running: medium-light skin tone',
                'man running: medium skin tone',
                'man running: medium-dark skin tone',
                'man running: dark skin tone',
                'woman running: light skin tone',
                'woman running: medium-light skin tone',
                'woman running: medium skin tone',
                'woman running: medium-dark skin tone',
                'woman running: dark skin tone',
                'woman dancing: light skin tone',
                'woman dancing: medium-light skin tone',
                'woman dancing: medium skin tone',
                'woman dancing: medium-dark skin tone',
                'woman dancing: dark skin tone',
                'man dancing: light skin tone',
                'man dancing: medium-light skin tone',
                'man dancing: medium skin tone',
                'man dancing: medium-dark skin tone',
                'man dancing: dark skin tone',
                'man in suit levitating: light skin tone',
                'man in suit levitating: medium-light skin tone',
                'man in suit levitating: medium skin tone',
                'man in suit levitating: medium-dark skin tone',
                'man in suit levitating: dark skin tone',
                'person in steamy room: light skin tone',
                'person in steamy room: medium-light skin tone',
                'person in steamy room: medium skin tone',
                'person in steamy room: medium-dark skin tone',
                'person in steamy room: dark skin tone',
                'man in steamy room: light skin tone',
                'man in steamy room: medium-light skin tone',
                'man in steamy room: medium skin tone',
                'man in steamy room: medium-dark skin tone',
                'man in steamy room: dark skin tone',
                'woman in steamy room: light skin tone',
                'woman in steamy room: medium-light skin tone',
                'woman in steamy room: medium skin tone',
                'woman in steamy room: medium-dark skin tone',
                'woman in steamy room: dark skin tone',
                'person climbing: light skin tone',
                'person climbing: medium-light skin tone',
                'person climbing: medium skin tone',
                'person climbing: medium-dark skin tone',
                'person climbing: dark skin tone',
                'man climbing: light skin tone',
                'man climbing: medium-light skin tone',
                'man climbing: medium skin tone',
                'man climbing: medium-dark skin tone',
                'man climbing: dark skin tone',
                'woman climbing: light skin tone',
                'woman climbing: medium-light skin tone',
                'woman climbing: medium skin tone',
                'woman climbing: medium-dark skin tone',
                'woman climbing: dark skin tone',
            ]
        ],
        'person-sport' => [
            'parent' => 'People & Body',
            'children' => [
                'person fencing',
                'horse racing',
                'skier',
                'snowboarder',
                'person golfing',
                'man golfing',
                'woman golfing',
                'person surfing',
                'man surfing',
                'woman surfing',
                'person rowing boat',
                'man rowing boat',
                'woman rowing boat',
                'person swimming',
                'man swimming',
                'woman swimming',
                'person bouncing ball',
                'man bouncing ball',
                'woman bouncing ball',
                'person lifting weights',
                'man lifting weights',
                'woman lifting weights',
                'person biking',
                'man biking',
                'woman biking',
                'person mountain biking',
                'man mountain biking',
                'woman mountain biking',
                'person cartwheeling',
                'man cartwheeling',
                'woman cartwheeling',
                'people wrestling',
                'men wrestling',
                'women wrestling',
                'person playing water polo',
                'man playing water polo',
                'woman playing water polo',
                'person playing handball',
                'man playing handball',
                'woman playing handball',
                'person juggling',
                'man juggling',
                'woman juggling',
                'horse racing: light skin tone',
                'horse racing: medium-light skin tone',
                'horse racing: medium skin tone',
                'horse racing: medium-dark skin tone',
                'horse racing: dark skin tone',
                'snowboarder: light skin tone',
                'snowboarder: medium-light skin tone',
                'snowboarder: medium skin tone',
                'snowboarder: medium-dark skin tone',
                'snowboarder: dark skin tone',
                'person golfing: light skin tone',
                'person golfing: medium-light skin tone',
                'person golfing: medium skin tone',
                'person golfing: medium-dark skin tone',
                'person golfing: dark skin tone',
                'man golfing: light skin tone',
                'man golfing: medium-light skin tone',
                'man golfing: medium skin tone',
                'man golfing: medium-dark skin tone',
                'man golfing: dark skin tone',
                'woman golfing: light skin tone',
                'woman golfing: medium-light skin tone',
                'woman golfing: medium skin tone',
                'woman golfing: medium-dark skin tone',
                'woman golfing: dark skin tone',
                'person surfing: light skin tone',
                'person surfing: medium-light skin tone',
                'person surfing: medium skin tone',
                'person surfing: medium-dark skin tone',
                'person surfing: dark skin tone',
                'man surfing: light skin tone',
                'man surfing: medium-light skin tone',
                'man surfing: medium skin tone',
                'man surfing: medium-dark skin tone',
                'man surfing: dark skin tone',
                'woman surfing: light skin tone',
                'woman surfing: medium-light skin tone',
                'woman surfing: medium skin tone',
                'woman surfing: medium-dark skin tone',
                'woman surfing: dark skin tone',
                'person rowing boat: light skin tone',
                'person rowing boat: medium-light skin tone',
                'person rowing boat: medium skin tone',
                'person rowing boat: medium-dark skin tone',
                'person rowing boat: dark skin tone',
                'man rowing boat: light skin tone',
                'man rowing boat: medium-light skin tone',
                'man rowing boat: medium skin tone',
                'man rowing boat: medium-dark skin tone',
                'man rowing boat: dark skin tone',
                'woman rowing boat: light skin tone',
                'woman rowing boat: medium-light skin tone',
                'woman rowing boat: medium skin tone',
                'woman rowing boat: medium-dark skin tone',
                'woman rowing boat: dark skin tone',
                'person swimming: light skin tone',
                'person swimming: medium-light skin tone',
                'person swimming: medium skin tone',
                'person swimming: medium-dark skin tone',
                'person swimming: dark skin tone',
                'man swimming: light skin tone',
                'man swimming: medium-light skin tone',
                'man swimming: medium skin tone',
                'man swimming: medium-dark skin tone',
                'man swimming: dark skin tone',
                'woman swimming: light skin tone',
                'woman swimming: medium-light skin tone',
                'woman swimming: medium skin tone',
                'woman swimming: medium-dark skin tone',
                'woman swimming: dark skin tone',
                'person bouncing ball: light skin tone',
                'person bouncing ball: medium-light skin tone',
                'person bouncing ball: medium skin tone',
                'person bouncing ball: medium-dark skin tone',
                'person bouncing ball: dark skin tone',
                'man bouncing ball: light skin tone',
                'man bouncing ball: medium-light skin tone',
                'man bouncing ball: medium skin tone',
                'man bouncing ball: medium-dark skin tone',
                'man bouncing ball: dark skin tone',
                'woman bouncing ball: light skin tone',
                'woman bouncing ball: medium-light skin tone',
                'woman bouncing ball: medium skin tone',
                'woman bouncing ball: medium-dark skin tone',
                'woman bouncing ball: dark skin tone',
                'person lifting weights: light skin tone',
                'person lifting weights: medium-light skin tone',
                'person lifting weights: medium skin tone',
                'person lifting weights: medium-dark skin tone',
                'person lifting weights: dark skin tone',
                'man lifting weights: light skin tone',
                'man lifting weights: medium-light skin tone',
                'man lifting weights: medium skin tone',
                'man lifting weights: medium-dark skin tone',
                'man lifting weights: dark skin tone',
                'woman lifting weights: light skin tone',
                'woman lifting weights: medium-light skin tone',
                'woman lifting weights: medium skin tone',
                'woman lifting weights: medium-dark skin tone',
                'woman lifting weights: dark skin tone',
                'person biking: light skin tone',
                'person biking: medium-light skin tone',
                'person biking: medium skin tone',
                'person biking: medium-dark skin tone',
                'person biking: dark skin tone',
                'man biking: light skin tone',
                'man biking: medium-light skin tone',
                'man biking: medium skin tone',
                'man biking: medium-dark skin tone',
                'man biking: dark skin tone',
                'woman biking: light skin tone',
                'woman biking: medium-light skin tone',
                'woman biking: medium skin tone',
                'woman biking: medium-dark skin tone',
                'woman biking: dark skin tone',
                'person mountain biking: light skin tone',
                'person mountain biking: medium-light skin tone',
                'person mountain biking: medium skin tone',
                'person mountain biking: medium-dark skin tone',
                'person mountain biking: dark skin tone',
                'man mountain biking: light skin tone',
                'man mountain biking: medium-light skin tone',
                'man mountain biking: medium skin tone',
                'man mountain biking: medium-dark skin tone',
                'man mountain biking: dark skin tone',
                'woman mountain biking: light skin tone',
                'woman mountain biking: medium-light skin tone',
                'woman mountain biking: medium skin tone',
                'woman mountain biking: medium-dark skin tone',
                'woman mountain biking: dark skin tone',
                'person cartwheeling: light skin tone',
                'person cartwheeling: medium-light skin tone',
                'person cartwheeling: medium skin tone',
                'person cartwheeling: medium-dark skin tone',
                'person cartwheeling: dark skin tone',
                'man cartwheeling: light skin tone',
                'man cartwheeling: medium-light skin tone',
                'man cartwheeling: medium skin tone',
                'man cartwheeling: medium-dark skin tone',
                'man cartwheeling: dark skin tone',
                'woman cartwheeling: light skin tone',
                'woman cartwheeling: medium-light skin tone',
                'woman cartwheeling: medium skin tone',
                'woman cartwheeling: medium-dark skin tone',
                'woman cartwheeling: dark skin tone',
                'person playing water polo: light skin tone',
                'person playing water polo: medium-light skin tone',
                'person playing water polo: medium skin tone',
                'person playing water polo: medium-dark skin tone',
                'person playing water polo: dark skin tone',
                'man playing water polo: light skin tone',
                'man playing water polo: medium-light skin tone',
                'man playing water polo: medium skin tone',
                'man playing water polo: medium-dark skin tone',
                'man playing water polo: dark skin tone',
                'woman playing water polo: light skin tone',
                'woman playing water polo: medium-light skin tone',
                'woman playing water polo: medium skin tone',
                'woman playing water polo: medium-dark skin tone',
                'woman playing water polo: dark skin tone',
                'person playing handball: light skin tone',
                'person playing handball: medium-light skin tone',
                'person playing handball: medium skin tone',
                'person playing handball: medium-dark skin tone',
                'person playing handball: dark skin tone',
                'man playing handball: light skin tone',
                'man playing handball: medium-light skin tone',
                'man playing handball: medium skin tone',
                'man playing handball: medium-dark skin tone',
                'man playing handball: dark skin tone',
                'woman playing handball: light skin tone',
                'woman playing handball: medium-light skin tone',
                'woman playing handball: medium skin tone',
                'woman playing handball: medium-dark skin tone',
                'woman playing handball: dark skin tone',
                'person juggling: light skin tone',
                'person juggling: medium-light skin tone',
                'person juggling: medium skin tone',
                'person juggling: medium-dark skin tone',
                'person juggling: dark skin tone',
                'man juggling: light skin tone',
                'man juggling: medium-light skin tone',
                'man juggling: medium skin tone',
                'man juggling: medium-dark skin tone',
                'man juggling: dark skin tone',
                'woman juggling: light skin tone',
                'woman juggling: medium-light skin tone',
                'woman juggling: medium skin tone',
                'woman juggling: medium-dark skin tone',
                'woman juggling: dark skin tone',
            ]
        ],
        'person-resting' => [
            'parent' => 'People & Body',
            'children' => [
                'person in lotus position',
                'man in lotus position',
                'woman in lotus position',
                'person taking bath',
                'person in bed',
                'person in lotus position: light skin tone',
                'person in lotus position: medium-light skin tone',
                'person in lotus position: medium skin tone',
                'person in lotus position: medium-dark skin tone',
                'person in lotus position: dark skin tone',
                'man in lotus position: light skin tone',
                'man in lotus position: medium-light skin tone',
                'man in lotus position: medium skin tone',
                'man in lotus position: medium-dark skin tone',
                'man in lotus position: dark skin tone',
                'woman in lotus position: light skin tone',
                'woman in lotus position: medium-light skin tone',
                'woman in lotus position: medium skin tone',
                'woman in lotus position: medium-dark skin tone',
                'woman in lotus position: dark skin tone',
                'person taking bath: light skin tone',
                'person taking bath: medium-light skin tone',
                'person taking bath: medium skin tone',
                'person taking bath: medium-dark skin tone',
                'person taking bath: dark skin tone',
                'person in bed: light skin tone',
                'person in bed: medium-light skin tone',
                'person in bed: medium skin tone',
                'person in bed: medium-dark skin tone',
                'person in bed: dark skin tone',
            ]
        ],
        'family' => [
            'parent' => 'People & Body',
            'children' => [
                'people holding hands',
                'women holding hands',
                'woman and man holding hands',
                'men holding hands',
                'kiss',
                'kiss: woman, man',
                'kiss: man, man',
                'kiss: woman, woman',
                'couple with heart',
                'couple with heart: woman, man',
                'couple with heart: man, man',
                'couple with heart: woman, woman',
                'family',
                'family: man, woman, boy',
                'family: man, woman, girl',
                'family: man, woman, girl, boy',
                'family: man, woman, boy, boy',
                'family: man, woman, girl, girl',
                'family: man, man, boy',
                'family: man, man, girl',
                'family: man, man, girl, boy',
                'family: man, man, boy, boy',
                'family: man, man, girl, girl',
                'family: woman, woman, boy',
                'family: woman, woman, girl',
                'family: woman, woman, girl, boy',
                'family: woman, woman, boy, boy',
                'family: woman, woman, girl, girl',
                'family: man, boy',
                'family: man, boy, boy',
                'family: man, girl',
                'family: man, girl, boy',
                'family: man, girl, girl',
                'family: woman, boy',
                'family: woman, boy, boy',
                'family: woman, girl',
                'family: woman, girl, boy',
                'family: woman, girl, girl',
                'people holding hands: light skin tone',
                'people holding hands: medium-light skin tone, light skin tone',
                'people holding hands: medium-light skin tone',
                'people holding hands: medium skin tone, light skin tone',
                'people holding hands: medium skin tone, medium-light skin tone',
                'people holding hands: medium skin tone',
                'people holding hands: medium-dark skin tone, light skin tone',
                'people holding hands: medium-dark skin tone, medium-light skin tone',
                'people holding hands: medium-dark skin tone, medium skin tone',
                'people holding hands: medium-dark skin tone',
                'people holding hands: dark skin tone, light skin tone',
                'people holding hands: dark skin tone, medium-light skin tone',
                'people holding hands: dark skin tone, medium skin tone',
                'people holding hands: dark skin tone, medium-dark skin tone',
                'people holding hands: dark skin tone',
                'women holding hands: light skin tone',
                'women holding hands: medium-light skin tone, light skin tone',
                'women holding hands: medium-light skin tone',
                'women holding hands: medium skin tone, light skin tone',
                'women holding hands: medium skin tone, medium-light skin tone',
                'women holding hands: medium skin tone',
                'women holding hands: medium-dark skin tone, light skin tone',
                'women holding hands: medium-dark skin tone, medium-light skin tone',
                'women holding hands: medium-dark skin tone, medium skin tone',
                'women holding hands: medium-dark skin tone',
                'women holding hands: dark skin tone, light skin tone',
                'women holding hands: dark skin tone, medium-light skin tone',
                'women holding hands: dark skin tone, medium skin tone',
                'women holding hands: dark skin tone, medium-dark skin tone',
                'women holding hands: dark skin tone',
                'woman and man holding hands: light skin tone',
                'woman and man holding hands: light skin tone, medium-light skin tone',
                'woman and man holding hands: light skin tone, medium skin tone',
                'woman and man holding hands: light skin tone, medium-dark skin tone',
                'woman and man holding hands: light skin tone, dark skin tone',
                'woman and man holding hands: medium-light skin tone, light skin tone',
                'woman and man holding hands: medium-light skin tone',
                'woman and man holding hands: medium-light skin tone, medium skin tone',
                'woman and man holding hands: medium-light skin tone, medium-dark skin tone',
                'woman and man holding hands: medium-light skin tone, dark skin tone',
                'woman and man holding hands: medium skin tone, light skin tone',
                'woman and man holding hands: medium skin tone, medium-light skin tone',
                'woman and man holding hands: medium skin tone',
                'woman and man holding hands: medium skin tone, medium-dark skin tone',
                'woman and man holding hands: medium skin tone, dark skin tone',
                'woman and man holding hands: medium-dark skin tone, light skin tone',
                'woman and man holding hands: medium-dark skin tone, medium-light skin tone',
                'woman and man holding hands: medium-dark skin tone, medium skin tone',
                'woman and man holding hands: medium-dark skin tone',
                'woman and man holding hands: medium-dark skin tone, dark skin tone',
                'woman and man holding hands: dark skin tone, light skin tone',
                'woman and man holding hands: dark skin tone, medium-light skin tone',
                'woman and man holding hands: dark skin tone, medium skin tone',
                'woman and man holding hands: dark skin tone, medium-dark skin tone',
                'woman and man holding hands: dark skin tone',
                'men holding hands: light skin tone',
                'men holding hands: medium-light skin tone, light skin tone',
                'men holding hands: medium-light skin tone',
                'men holding hands: medium skin tone, light skin tone',
                'men holding hands: medium skin tone, medium-light skin tone',
                'men holding hands: medium skin tone',
                'men holding hands: medium-dark skin tone, light skin tone',
                'men holding hands: medium-dark skin tone, medium-light skin tone',
                'men holding hands: medium-dark skin tone, medium skin tone',
                'men holding hands: medium-dark skin tone',
                'men holding hands: dark skin tone, light skin tone',
                'men holding hands: dark skin tone, medium-light skin tone',
                'men holding hands: dark skin tone, medium skin tone',
                'men holding hands: dark skin tone, medium-dark skin tone',
                'men holding hands: dark skin tone',
            ]
        ],
        'person-symbol' => [
            'parent' => 'People & Body',
            'children' => [
                'speaking head',
                'bust in silhouette',
                'busts in silhouette',
                'footprints',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'waving hand' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':wave:',
            ]
        ],
        'raised back of hand' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_back_of_hand:',
                ':back_of_hand:',
            ]
        ],
        'hand with fingers splayed' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':hand_splayed:',
                ':raised_hand_with_fingers_splayed:',
            ]
        ],
        'raised hand' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand:',
            ]
        ],
        'vulcan salute' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':vulcan:',
                ':raised_hand_with_part_between_middle_and_ring_fingers:',
            ]
        ],
        'waving hand: light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':wave_tone1:',
            ]
        ],
        'waving hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':wave_tone2:',
            ]
        ],
        'waving hand: medium skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':wave_tone3:',
            ]
        ],
        'waving hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':wave_tone4:',
            ]
        ],
        'waving hand: dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':wave_tone5:',
            ]
        ],
        'raised back of hand: light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_back_of_hand_tone1:',
                ':back_of_hand_tone1:',
            ]
        ],
        'raised back of hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_back_of_hand_tone2:',
                ':back_of_hand_tone2:',
            ]
        ],
        'raised back of hand: medium skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_back_of_hand_tone3:',
                ':back_of_hand_tone3:',
            ]
        ],
        'raised back of hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_back_of_hand_tone4:',
                ':back_of_hand_tone4:',
            ]
        ],
        'raised back of hand: dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_back_of_hand_tone5:',
                ':back_of_hand_tone5:',
            ]
        ],
        'hand with fingers splayed: light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':hand_splayed_tone1:',
                ':raised_hand_with_fingers_splayed_tone1:',
            ]
        ],
        'hand with fingers splayed: medium-light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':hand_splayed_tone2:',
                ':raised_hand_with_fingers_splayed_tone2:',
            ]
        ],
        'hand with fingers splayed: medium skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':hand_splayed_tone3:',
                ':raised_hand_with_fingers_splayed_tone3:',
            ]
        ],
        'hand with fingers splayed: medium-dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':hand_splayed_tone4:',
                ':raised_hand_with_fingers_splayed_tone4:',
            ]
        ],
        'hand with fingers splayed: dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':hand_splayed_tone5:',
                ':raised_hand_with_fingers_splayed_tone5:',
            ]
        ],
        'raised hand: light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand_tone1:',
            ]
        ],
        'raised hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand_tone2:',
            ]
        ],
        'raised hand: medium skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand_tone3:',
            ]
        ],
        'raised hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand_tone4:',
            ]
        ],
        'raised hand: dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand_tone5:',
            ]
        ],
        'vulcan salute: light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':vulcan_tone1:',
                ':raised_hand_with_part_between_middle_and_ring_fingers_tone1:',
            ]
        ],
        'vulcan salute: medium-light skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':vulcan_tone2:',
                ':raised_hand_with_part_between_middle_and_ring_fingers_tone2:',
            ]
        ],
        'vulcan salute: medium skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':vulcan_tone3:',
                ':raised_hand_with_part_between_middle_and_ring_fingers_tone3:',
            ]
        ],
        'vulcan salute: medium-dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':vulcan_tone4:',
                ':raised_hand_with_part_between_middle_and_ring_fingers_tone4:',
            ]
        ],
        'vulcan salute: dark skin tone' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':vulcan_tone5:',
                ':raised_hand_with_part_between_middle_and_ring_fingers_tone5:',
            ]
        ],
        'OK hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand:',
            ]
        ],
        'pinching hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':pinching_hand:',
            ]
        ],
        'victory hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v:',
            ]
        ],
        'crossed fingers' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':fingers_crossed:',
                ':hand_with_index_and_middle_finger_crossed:',
            ]
        ],
        'love-you gesture' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':love_you_gesture:',
            ]
        ],
        'sign of the horns' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':metal:',
                ':sign_of_the_horns:',
            ]
        ],
        'call me hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':call_me:',
                ':call_me_hand:',
            ]
        ],
        'OK hand: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand_tone1:',
            ]
        ],
        'OK hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand_tone2:',
            ]
        ],
        'OK hand: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand_tone3:',
            ]
        ],
        'OK hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand_tone4:',
            ]
        ],
        'OK hand: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand_tone5:',
            ]
        ],
        'pinching hand: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':pinching_hand_tone1:',
                ':pinching_hand_light_skin_tone:',
            ]
        ],
        'pinching hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':pinching_hand_tone2:',
                ':pinching_hand_medium_light_skin_tone:',
            ]
        ],
        'pinching hand: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':pinching_hand_tone3:',
                ':pinching_hand_medium_skin_tone:',
            ]
        ],
        'pinching hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':pinching_hand_tone4:',
                ':pinching_hand_medium_dark_skin_tone:',
            ]
        ],
        'pinching hand: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':pinching_hand_tone5:',
                ':pinching_hand_dark_skin_tone:',
            ]
        ],
        'victory hand: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v_tone1:',
            ]
        ],
        'victory hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v_tone2:',
            ]
        ],
        'victory hand: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v_tone3:',
            ]
        ],
        'victory hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v_tone4:',
            ]
        ],
        'victory hand: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v_tone5:',
            ]
        ],
        'crossed fingers: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':fingers_crossed_tone1:',
                ':hand_with_index_and_middle_fingers_crossed_tone1:',
            ]
        ],
        'crossed fingers: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':fingers_crossed_tone2:',
                ':hand_with_index_and_middle_fingers_crossed_tone2:',
            ]
        ],
        'crossed fingers: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':fingers_crossed_tone3:',
                ':hand_with_index_and_middle_fingers_crossed_tone3:',
            ]
        ],
        'crossed fingers: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':fingers_crossed_tone4:',
                ':hand_with_index_and_middle_fingers_crossed_tone4:',
            ]
        ],
        'crossed fingers: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':fingers_crossed_tone5:',
                ':hand_with_index_and_middle_fingers_crossed_tone5:',
            ]
        ],
        'love-you gesture: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':love_you_gesture_tone1:',
                ':love_you_gesture_light_skin_tone:',
            ]
        ],
        'love-you gesture: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':love_you_gesture_tone2:',
                ':love_you_gesture_medium_light_skin_tone:',
            ]
        ],
        'love-you gesture: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':love_you_gesture_tone3:',
                ':love_you_gesture_medium_skin_tone:',
            ]
        ],
        'love-you gesture: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':love_you_gesture_tone4:',
                ':love_you_gesture_medium_dark_skin_tone:',
            ]
        ],
        'love-you gesture: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':love_you_gesture_tone5:',
                ':love_you_gesture_dark_skin_tone:',
            ]
        ],
        'sign of the horns: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':metal_tone1:',
                ':sign_of_the_horns_tone1:',
            ]
        ],
        'sign of the horns: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':metal_tone2:',
                ':sign_of_the_horns_tone2:',
            ]
        ],
        'sign of the horns: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':metal_tone3:',
                ':sign_of_the_horns_tone3:',
            ]
        ],
        'sign of the horns: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':metal_tone4:',
                ':sign_of_the_horns_tone4:',
            ]
        ],
        'sign of the horns: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':metal_tone5:',
                ':sign_of_the_horns_tone5:',
            ]
        ],
        'call me hand: light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':call_me_tone1:',
                ':call_me_hand_tone1:',
            ]
        ],
        'call me hand: medium-light skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':call_me_tone2:',
                ':call_me_hand_tone2:',
            ]
        ],
        'call me hand: medium skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':call_me_tone3:',
                ':call_me_hand_tone3:',
            ]
        ],
        'call me hand: medium-dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':call_me_tone4:',
                ':call_me_hand_tone4:',
            ]
        ],
        'call me hand: dark skin tone' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':call_me_tone5:',
                ':call_me_hand_tone5:',
            ]
        ],
        'backhand index pointing left' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_left:',
            ]
        ],
        'backhand index pointing right' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_right:',
            ]
        ],
        'backhand index pointing up' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_2:',
            ]
        ],
        'middle finger' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':middle_finger:',
                ':reversed_hand_with_middle_finger_extended:',
            ]
        ],
        'backhand index pointing down' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_down:',
            ]
        ],
        'index pointing up' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up:',
            ]
        ],
        'backhand index pointing left: light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_left_tone1:',
            ]
        ],
        'backhand index pointing left: medium-light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_left_tone2:',
            ]
        ],
        'backhand index pointing left: medium skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_left_tone3:',
            ]
        ],
        'backhand index pointing left: medium-dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_left_tone4:',
            ]
        ],
        'backhand index pointing left: dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_left_tone5:',
            ]
        ],
        'backhand index pointing right: light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_right_tone1:',
            ]
        ],
        'backhand index pointing right: medium-light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_right_tone2:',
            ]
        ],
        'backhand index pointing right: medium skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_right_tone3:',
            ]
        ],
        'backhand index pointing right: medium-dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_right_tone4:',
            ]
        ],
        'backhand index pointing right: dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_right_tone5:',
            ]
        ],
        'backhand index pointing up: light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_2_tone1:',
            ]
        ],
        'backhand index pointing up: medium-light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_2_tone2:',
            ]
        ],
        'backhand index pointing up: medium skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_2_tone3:',
            ]
        ],
        'backhand index pointing up: medium-dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_2_tone4:',
            ]
        ],
        'backhand index pointing up: dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_2_tone5:',
            ]
        ],
        'middle finger: light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':middle_finger_tone1:',
                ':reversed_hand_with_middle_finger_extended_tone1:',
            ]
        ],
        'middle finger: medium-light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':middle_finger_tone2:',
                ':reversed_hand_with_middle_finger_extended_tone2:',
            ]
        ],
        'middle finger: medium skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':middle_finger_tone3:',
                ':reversed_hand_with_middle_finger_extended_tone3:',
            ]
        ],
        'middle finger: medium-dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':middle_finger_tone4:',
                ':reversed_hand_with_middle_finger_extended_tone4:',
            ]
        ],
        'middle finger: dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':middle_finger_tone5:',
                ':reversed_hand_with_middle_finger_extended_tone5:',
            ]
        ],
        'backhand index pointing down: light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_down_tone1:',
            ]
        ],
        'backhand index pointing down: medium-light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_down_tone2:',
            ]
        ],
        'backhand index pointing down: medium skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_down_tone3:',
            ]
        ],
        'backhand index pointing down: medium-dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_down_tone4:',
            ]
        ],
        'backhand index pointing down: dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_down_tone5:',
            ]
        ],
        'index pointing up: light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_tone1:',
            ]
        ],
        'index pointing up: medium-light skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_tone2:',
            ]
        ],
        'index pointing up: medium skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_tone3:',
            ]
        ],
        'index pointing up: medium-dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_tone4:',
            ]
        ],
        'index pointing up: dark skin tone' => [
            'parent' => 'hand-single-finger',
            'children' => null,
            'aliases' => [
                ':point_up_tone5:',
            ]
        ],
        'thumbs up' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsup:',
                ':+1:',
                ':thumbup:',
                '(y)',
            ]
        ],
        'thumbs down' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsdown:',
                ':-1:',
                ':thumbdown:',
            ]
        ],
        'raised fist' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':fist:',
            ]
        ],
        'oncoming fist' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':punch:',
            ]
        ],
        'left-facing fist' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':left_facing_fist:',
                ':left_fist:',
            ]
        ],
        'right-facing fist' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':right_facing_fist:',
                ':right_fist:',
            ]
        ],
        'thumbs up: light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsup_tone1:',
                ':+1_tone1:',
                ':thumbup_tone1:',
            ]
        ],
        'thumbs up: medium-light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsup_tone2:',
                ':+1_tone2:',
                ':thumbup_tone2:',
            ]
        ],
        'thumbs up: medium skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsup_tone3:',
                ':+1_tone3:',
                ':thumbup_tone3:',
            ]
        ],
        'thumbs up: medium-dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsup_tone4:',
                ':+1_tone4:',
                ':thumbup_tone4:',
            ]
        ],
        'thumbs up: dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsup_tone5:',
                ':+1_tone5:',
                ':thumbup_tone5:',
            ]
        ],
        'thumbs down: light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsdown_tone1:',
                ':-1_tone1:',
                ':thumbdown_tone1:',
            ]
        ],
        'thumbs down: medium-light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsdown_tone2:',
                ':-1_tone2:',
                ':thumbdown_tone2:',
            ]
        ],
        'thumbs down: medium skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsdown_tone3:',
                ':-1_tone3:',
                ':thumbdown_tone3:',
            ]
        ],
        'thumbs down: medium-dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsdown_tone4:',
                ':-1_tone4:',
                ':thumbdown_tone4:',
            ]
        ],
        'thumbs down: dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':thumbsdown_tone5:',
                ':-1_tone5:',
                ':thumbdown_tone5:',
            ]
        ],
        'raised fist: light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':fist_tone1:',
            ]
        ],
        'raised fist: medium-light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':fist_tone2:',
            ]
        ],
        'raised fist: medium skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':fist_tone3:',
            ]
        ],
        'raised fist: medium-dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':fist_tone4:',
            ]
        ],
        'raised fist: dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':fist_tone5:',
            ]
        ],
        'oncoming fist: light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':punch_tone1:',
            ]
        ],
        'oncoming fist: medium-light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':punch_tone2:',
            ]
        ],
        'oncoming fist: medium skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':punch_tone3:',
            ]
        ],
        'oncoming fist: medium-dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':punch_tone4:',
            ]
        ],
        'oncoming fist: dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':punch_tone5:',
            ]
        ],
        'left-facing fist: light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':left_facing_fist_tone1:',
                ':left_fist_tone1:',
            ]
        ],
        'left-facing fist: medium-light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':left_facing_fist_tone2:',
                ':left_fist_tone2:',
            ]
        ],
        'left-facing fist: medium skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':left_facing_fist_tone3:',
                ':left_fist_tone3:',
            ]
        ],
        'left-facing fist: medium-dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':left_facing_fist_tone4:',
                ':left_fist_tone4:',
            ]
        ],
        'left-facing fist: dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':left_facing_fist_tone5:',
                ':left_fist_tone5:',
            ]
        ],
        'right-facing fist: light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':right_facing_fist_tone1:',
                ':right_fist_tone1:',
            ]
        ],
        'right-facing fist: medium-light skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':right_facing_fist_tone2:',
                ':right_fist_tone2:',
            ]
        ],
        'right-facing fist: medium skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':right_facing_fist_tone3:',
                ':right_fist_tone3:',
            ]
        ],
        'right-facing fist: medium-dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':right_facing_fist_tone4:',
                ':right_fist_tone4:',
            ]
        ],
        'right-facing fist: dark skin tone' => [
            'parent' => 'hand-fingers-closed',
            'children' => null,
            'aliases' => [
                ':right_facing_fist_tone5:',
                ':right_fist_tone5:',
            ]
        ],
        'clapping hands' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':clap:',
            ]
        ],
        'raising hands' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':raised_hands:',
            ]
        ],
        'open hands' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':open_hands:',
            ]
        ],
        'palms up together' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':palms_up_together:',
            ]
        ],
        'handshake' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':handshake:',
                ':shaking_hands:',
            ]
        ],
        'folded hands' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray:',
            ]
        ],
        'clapping hands: light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':clap_tone1:',
            ]
        ],
        'clapping hands: medium-light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':clap_tone2:',
            ]
        ],
        'clapping hands: medium skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':clap_tone3:',
            ]
        ],
        'clapping hands: medium-dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':clap_tone4:',
            ]
        ],
        'clapping hands: dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':clap_tone5:',
            ]
        ],
        'raising hands: light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':raised_hands_tone1:',
            ]
        ],
        'raising hands: medium-light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':raised_hands_tone2:',
            ]
        ],
        'raising hands: medium skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':raised_hands_tone3:',
            ]
        ],
        'raising hands: medium-dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':raised_hands_tone4:',
            ]
        ],
        'raising hands: dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':raised_hands_tone5:',
            ]
        ],
        'open hands: light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':open_hands_tone1:',
            ]
        ],
        'open hands: medium-light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':open_hands_tone2:',
            ]
        ],
        'open hands: medium skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':open_hands_tone3:',
            ]
        ],
        'open hands: medium-dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':open_hands_tone4:',
            ]
        ],
        'open hands: dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':open_hands_tone5:',
            ]
        ],
        'palms up together: light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':palms_up_together_tone1:',
                ':palms_up_together_light_skin_tone:',
            ]
        ],
        'palms up together: medium-light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':palms_up_together_tone2:',
                ':palms_up_together_medium_light_skin_tone:',
            ]
        ],
        'palms up together: medium skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':palms_up_together_tone3:',
                ':palms_up_together_medium_skin_tone:',
            ]
        ],
        'palms up together: medium-dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':palms_up_together_tone4:',
                ':palms_up_together_medium_dark_skin_tone:',
            ]
        ],
        'palms up together: dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':palms_up_together_tone5:',
                ':palms_up_together_dark_skin_tone:',
            ]
        ],
        'folded hands: light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray_tone1:',
            ]
        ],
        'folded hands: medium-light skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray_tone2:',
            ]
        ],
        'folded hands: medium skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray_tone3:',
            ]
        ],
        'folded hands: medium-dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray_tone4:',
            ]
        ],
        'folded hands: dark skin tone' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray_tone5:',
            ]
        ],
        'writing hand' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':writing_hand:',
            ]
        ],
        'nail polish' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care:',
            ]
        ],
        'selfie' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':selfie:',
            ]
        ],
        'writing hand: light skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':writing_hand_tone1:',
            ]
        ],
        'writing hand: medium-light skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':writing_hand_tone2:',
            ]
        ],
        'writing hand: medium skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':writing_hand_tone3:',
            ]
        ],
        'writing hand: medium-dark skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':writing_hand_tone4:',
            ]
        ],
        'writing hand: dark skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':writing_hand_tone5:',
            ]
        ],
        'nail polish: light skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care_tone1:',
            ]
        ],
        'nail polish: medium-light skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care_tone2:',
            ]
        ],
        'nail polish: medium skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care_tone3:',
            ]
        ],
        'nail polish: medium-dark skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care_tone4:',
            ]
        ],
        'nail polish: dark skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care_tone5:',
            ]
        ],
        'selfie: light skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':selfie_tone1:',
            ]
        ],
        'selfie: medium-light skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':selfie_tone2:',
            ]
        ],
        'selfie: medium skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':selfie_tone3:',
            ]
        ],
        'selfie: medium-dark skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':selfie_tone4:',
            ]
        ],
        'selfie: dark skin tone' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':selfie_tone5:',
            ]
        ],
        'flexed biceps' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle:',
            ]
        ],
        'mechanical arm' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':mechanical_arm:',
            ]
        ],
        'mechanical leg' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':mechanical_leg:',
            ]
        ],
        'leg' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':leg:',
            ]
        ],
        'foot' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':foot:',
            ]
        ],
        'ear' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear:',
            ]
        ],
        'ear with hearing aid' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_with_hearing_aid:',
            ]
        ],
        'nose' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose:',
            ]
        ],
        'brain' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':brain:',
            ]
        ],
        'tooth' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':tooth:',
            ]
        ],
        'bone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':bone:',
            ]
        ],
        'eyes' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':eyes:',
            ]
        ],
        'eye' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':eye:',
            ]
        ],
        'tongue' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':tongue:',
            ]
        ],
        'mouth' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':lips:',
            ]
        ],
        'flexed biceps: light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle_tone1:',
            ]
        ],
        'flexed biceps: medium-light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle_tone2:',
            ]
        ],
        'flexed biceps: medium skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle_tone3:',
            ]
        ],
        'flexed biceps: medium-dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle_tone4:',
            ]
        ],
        'flexed biceps: dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle_tone5:',
            ]
        ],
        'leg: light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':leg_tone1:',
                ':leg_light_skin_tone:',
            ]
        ],
        'leg: medium-light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':leg_tone2:',
                ':leg_medium_light_skin_tone:',
            ]
        ],
        'leg: medium skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':leg_tone3:',
                ':leg_medium_skin_tone:',
            ]
        ],
        'leg: medium-dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':leg_tone4:',
                ':leg_medium_dark_skin_tone:',
            ]
        ],
        'leg: dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':leg_tone5:',
                ':leg_dark_skin_tone:',
            ]
        ],
        'foot: light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':foot_tone1:',
                ':foot_light_skin_tone:',
            ]
        ],
        'foot: medium-light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':foot_tone2:',
                ':foot_medium_light_skin_tone:',
            ]
        ],
        'foot: medium skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':foot_tone3:',
                ':foot_medium_skin_tone:',
            ]
        ],
        'foot: medium-dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':foot_tone4:',
                ':foot_medium_dark_skin_tone:',
            ]
        ],
        'foot: dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':foot_tone5:',
                ':foot_dark_skin_tone:',
            ]
        ],
        'ear: light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_tone1:',
            ]
        ],
        'ear: medium-light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_tone2:',
            ]
        ],
        'ear: medium skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_tone3:',
            ]
        ],
        'ear: medium-dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_tone4:',
            ]
        ],
        'ear: dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_tone5:',
            ]
        ],
        'ear with hearing aid: light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_with_hearing_aid_tone1:',
                ':ear_with_hearing_aid_light_skin_tone:',
            ]
        ],
        'ear with hearing aid: medium-light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_with_hearing_aid_tone2:',
                ':ear_with_hearing_aid_medium_light_skin_tone:',
            ]
        ],
        'ear with hearing aid: medium skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_with_hearing_aid_tone3:',
                ':ear_with_hearing_aid_medium_skin_tone:',
            ]
        ],
        'ear with hearing aid: medium-dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_with_hearing_aid_tone4:',
                ':ear_with_hearing_aid_medium_dark_skin_tone:',
            ]
        ],
        'ear with hearing aid: dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear_with_hearing_aid_tone5:',
                ':ear_with_hearing_aid_dark_skin_tone:',
            ]
        ],
        'nose: light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose_tone1:',
            ]
        ],
        'nose: medium-light skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose_tone2:',
            ]
        ],
        'nose: medium skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose_tone3:',
            ]
        ],
        'nose: medium-dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose_tone4:',
            ]
        ],
        'nose: dark skin tone' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose_tone5:',
            ]
        ],
        'baby' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby:',
            ]
        ],
        'child' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':child:',
            ]
        ],
        'boy' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':boy:',
            ]
        ],
        'girl' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':girl:',
            ]
        ],
        'person' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':adult:',
            ]
        ],
        'person: blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':blond_haired_person:',
                ':person_with_blond_hair:',
            ]
        ],
        'man' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man:',
            ]
        ],
        'man: beard' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':bearded_person:',
            ]
        ],
        'man: red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_red_haired:',
            ]
        ],
        'man: curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_curly_haired:',
            ]
        ],
        'man: white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_white_haired:',
            ]
        ],
        'man: bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_bald:',
            ]
        ],
        'woman' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman:',
            ]
        ],
        'woman: red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_red_haired:',
            ]
        ],
        'woman: curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_curly_haired:',
            ]
        ],
        'woman: white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_white_haired:',
            ]
        ],
        'woman: bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_bald:',
            ]
        ],
        'woman: blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':blond-haired_woman:',
            ]
        ],
        'man: blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':blond-haired_man:',
            ]
        ],
        'older person' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_adult:',
            ]
        ],
        'old man' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_man:',
            ]
        ],
        'old woman' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_woman:',
                ':grandma:',
            ]
        ],
        'baby: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby_tone1:',
            ]
        ],
        'baby: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby_tone2:',
            ]
        ],
        'baby: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby_tone3:',
            ]
        ],
        'baby: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby_tone4:',
            ]
        ],
        'baby: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby_tone5:',
            ]
        ],
        'child: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':child_tone1:',
                ':child_light_skin_tone:',
            ]
        ],
        'child: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':child_tone2:',
                ':child_medium_light_skin_tone:',
            ]
        ],
        'child: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':child_tone3:',
                ':child_medium_skin_tone:',
            ]
        ],
        'child: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':child_tone4:',
                ':child_medium_dark_skin_tone:',
            ]
        ],
        'child: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':child_tone5:',
                ':child_dark_skin_tone:',
            ]
        ],
        'boy: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':boy_tone1:',
            ]
        ],
        'boy: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':boy_tone2:',
            ]
        ],
        'boy: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':boy_tone3:',
            ]
        ],
        'boy: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':boy_tone4:',
            ]
        ],
        'boy: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':boy_tone5:',
            ]
        ],
        'girl: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':girl_tone1:',
            ]
        ],
        'girl: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':girl_tone2:',
            ]
        ],
        'girl: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':girl_tone3:',
            ]
        ],
        'girl: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':girl_tone4:',
            ]
        ],
        'girl: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':girl_tone5:',
            ]
        ],
        'person: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: light skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: medium-light skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: medium skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: medium-dark skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'person: dark skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_tone1:',
            ]
        ],
        'man: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_tone2:',
            ]
        ],
        'man: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_tone3:',
            ]
        ],
        'man: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_tone4:',
            ]
        ],
        'man: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man_tone5:',
            ]
        ],
        'man: light skin tone, beard' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-light skin tone, beard' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium skin tone, beard' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-dark skin tone, beard' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: dark skin tone, beard' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: light skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-light skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-dark skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: dark skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: light skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-light skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-dark skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: dark skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: light skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-light skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-dark skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: dark skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: light skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-light skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-dark skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: dark skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_tone1:',
            ]
        ],
        'woman: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_tone2:',
            ]
        ],
        'woman: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_tone3:',
            ]
        ],
        'woman: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_tone4:',
            ]
        ],
        'woman: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman_tone5:',
            ]
        ],
        'woman: light skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-light skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-dark skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: dark skin tone, red hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: light skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-light skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-dark skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: dark skin tone, curly hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: light skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-light skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-dark skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: dark skin tone, white hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: light skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-light skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-dark skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: dark skin tone, bald' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: light skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-light skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: medium-dark skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman: dark skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: light skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-light skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: medium-dark skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man: dark skin tone, blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'older person: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'older person: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'older person: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'older person: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'older person: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'old man: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_man_tone1:',
            ]
        ],
        'old man: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_man_tone2:',
            ]
        ],
        'old man: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_man_tone3:',
            ]
        ],
        'old man: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_man_tone4:',
            ]
        ],
        'old man: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_man_tone5:',
            ]
        ],
        'old woman: light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_woman_tone1:',
                ':grandma_tone1:',
            ]
        ],
        'old woman: medium-light skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_woman_tone2:',
                ':grandma_tone2:',
            ]
        ],
        'old woman: medium skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_woman_tone3:',
                ':grandma_tone3:',
            ]
        ],
        'old woman: medium-dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_woman_tone4:',
                ':grandma_tone4:',
            ]
        ],
        'old woman: dark skin tone' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':older_woman_tone5:',
                ':grandma_tone5:',
            ]
        ],
        'person frowning' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning:',
            ]
        ],
        'man frowning' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_frowning:',
            ]
        ],
        'woman frowning' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_frowning:',
            ]
        ],
        'person pouting' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_pouting:',
                ':person_with_pouting_face:',
            ]
        ],
        'man pouting' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_pouting:',
            ]
        ],
        'woman pouting' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_pouting:',
            ]
        ],
        'person gesturing NO' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no:',
                ':no_good:',
            ]
        ],
        'man gesturing NO' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_no:',
            ]
        ],
        'woman gesturing NO' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_no:',
            ]
        ],
        'person gesturing OK' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_ok:',
                ':ok_woman:',
                '*\0/*',
                '\0/',
                '*\O/*',
                '\O/',
            ]
        ],
        'man gesturing OK' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_ok:',
            ]
        ],
        'woman gesturing OK' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_ok:',
            ]
        ],
        'person tipping hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_tipping_hand:',
                ':information_desk_person:',
            ]
        ],
        'man tipping hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_tipping_hand:',
            ]
        ],
        'woman tipping hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_tipping_hand:',
            ]
        ],
        'person raising hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand:',
                ':raising_hand:',
            ]
        ],
        'man raising hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_raising_hand:',
            ]
        ],
        'woman raising hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_raising_hand:',
            ]
        ],
        'deaf person' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_person:',
            ]
        ],
        'deaf man' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_man:',
            ]
        ],
        'deaf woman' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_woman:',
            ]
        ],
        'person bowing' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_bowing:',
                ':bow:',
            ]
        ],
        'man bowing' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_bowing:',
            ]
        ],
        'woman bowing' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_bowing:',
            ]
        ],
        'person facepalming' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_facepalming:',
                ':face_palm:',
                ':facepalm:',
            ]
        ],
        'man facepalming' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_facepalming:',
            ]
        ],
        'woman facepalming' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_facepalming:',
            ]
        ],
        'person shrugging' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_shrugging:',
                ':shrug:',
            ]
        ],
        'man shrugging' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_shrugging:',
            ]
        ],
        'woman shrugging' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_shrugging:',
            ]
        ],
        'person frowning: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning_tone1:',
            ]
        ],
        'person frowning: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning_tone2:',
            ]
        ],
        'person frowning: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning_tone3:',
            ]
        ],
        'person frowning: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning_tone4:',
            ]
        ],
        'person frowning: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning_tone5:',
            ]
        ],
        'man frowning: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_frowning_tone1:',
                ':man_frowning_light_skin_tone:',
            ]
        ],
        'man frowning: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_frowning_tone2:',
                ':man_frowning_medium_light_skin_tone:',
            ]
        ],
        'man frowning: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_frowning_tone3:',
                ':man_frowning_medium_skin_tone:',
            ]
        ],
        'man frowning: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_frowning_tone4:',
                ':man_frowning_medium_dark_skin_tone:',
            ]
        ],
        'man frowning: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_frowning_tone5:',
                ':man_frowning_dark_skin_tone:',
            ]
        ],
        'woman frowning: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_frowning_tone1:',
                ':woman_frowning_light_skin_tone:',
            ]
        ],
        'woman frowning: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_frowning_tone2:',
                ':woman_frowning_medium_light_skin_tone:',
            ]
        ],
        'woman frowning: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_frowning_tone3:',
                ':woman_frowning_medium_skin_tone:',
            ]
        ],
        'woman frowning: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_frowning_tone4:',
                ':woman_frowning_medium_dark_skin_tone:',
            ]
        ],
        'woman frowning: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_frowning_tone5:',
                ':woman_frowning_dark_skin_tone:',
            ]
        ],
        'person pouting: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_pouting_tone1:',
                ':person_with_pouting_face_tone1:',
            ]
        ],
        'person pouting: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_pouting_tone2:',
                ':person_with_pouting_face_tone2:',
            ]
        ],
        'person pouting: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_pouting_tone3:',
                ':person_with_pouting_face_tone3:',
            ]
        ],
        'person pouting: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_pouting_tone4:',
                ':person_with_pouting_face_tone4:',
            ]
        ],
        'person pouting: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_pouting_tone5:',
                ':person_with_pouting_face_tone5:',
            ]
        ],
        'man pouting: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_pouting_tone1:',
                ':man_pouting_light_skin_tone:',
            ]
        ],
        'man pouting: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_pouting_tone2:',
                ':man_pouting_medium_light_skin_tone:',
            ]
        ],
        'man pouting: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_pouting_tone3:',
                ':man_pouting_medium_skin_tone:',
            ]
        ],
        'man pouting: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_pouting_tone4:',
                ':man_pouting_medium_dark_skin_tone:',
            ]
        ],
        'man pouting: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_pouting_tone5:',
                ':man_pouting_dark_skin_tone:',
            ]
        ],
        'woman pouting: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_pouting_tone1:',
                ':woman_pouting_light_skin_tone:',
            ]
        ],
        'woman pouting: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_pouting_tone2:',
                ':woman_pouting_medium_light_skin_tone:',
            ]
        ],
        'woman pouting: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_pouting_tone3:',
                ':woman_pouting_medium_skin_tone:',
            ]
        ],
        'woman pouting: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_pouting_tone4:',
                ':woman_pouting_medium_dark_skin_tone:',
            ]
        ],
        'woman pouting: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_pouting_tone5:',
                ':woman_pouting_dark_skin_tone:',
            ]
        ],
        'person gesturing NO: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no_tone1:',
                ':no_good_tone1:',
            ]
        ],
        'person gesturing NO: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no_tone2:',
                ':no_good_tone2:',
            ]
        ],
        'person gesturing NO: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no_tone3:',
                ':no_good_tone3:',
            ]
        ],
        'person gesturing NO: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no_tone4:',
                ':no_good_tone4:',
            ]
        ],
        'person gesturing NO: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no_tone5:',
                ':no_good_tone5:',
            ]
        ],
        'man gesturing NO: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_no_tone1:',
                ':man_gesturing_no_light_skin_tone:',
            ]
        ],
        'man gesturing NO: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_no_tone2:',
                ':man_gesturing_no_medium_light_skin_tone:',
            ]
        ],
        'man gesturing NO: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_no_tone3:',
                ':man_gesturing_no_medium_skin_tone:',
            ]
        ],
        'man gesturing NO: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_no_tone4:',
                ':man_gesturing_no_medium_dark_skin_tone:',
            ]
        ],
        'man gesturing NO: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_no_tone5:',
                ':man_gesturing_no_dark_skin_tone:',
            ]
        ],
        'woman gesturing NO: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_no_tone1:',
                ':woman_gesturing_no_light_skin_tone:',
            ]
        ],
        'woman gesturing NO: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_no_tone2:',
                ':woman_gesturing_no_medium_light_skin_tone:',
            ]
        ],
        'woman gesturing NO: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_no_tone3:',
                ':woman_gesturing_no_medium_skin_tone:',
            ]
        ],
        'woman gesturing NO: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_no_tone4:',
                ':woman_gesturing_no_medium_dark_skin_tone:',
            ]
        ],
        'woman gesturing NO: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_no_tone5:',
                ':woman_gesturing_no_dark_skin_tone:',
            ]
        ],
        'person gesturing OK: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_ok_tone1:',
                ':ok_woman_tone1:',
            ]
        ],
        'person gesturing OK: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_ok_tone2:',
                ':ok_woman_tone2:',
            ]
        ],
        'person gesturing OK: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_ok_tone3:',
                ':ok_woman_tone3:',
            ]
        ],
        'person gesturing OK: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_ok_tone4:',
                ':ok_woman_tone4:',
            ]
        ],
        'person gesturing OK: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_ok_tone5:',
                ':ok_woman_tone5:',
            ]
        ],
        'man gesturing OK: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_ok_tone1:',
                ':man_gesturing_ok_light_skin_tone:',
            ]
        ],
        'man gesturing OK: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_ok_tone2:',
                ':man_gesturing_ok_medium_light_skin_tone:',
            ]
        ],
        'man gesturing OK: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_ok_tone3:',
                ':man_gesturing_ok_medium_skin_tone:',
            ]
        ],
        'man gesturing OK: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_ok_tone4:',
                ':man_gesturing_ok_medium_dark_skin_tone:',
            ]
        ],
        'man gesturing OK: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_gesturing_ok_tone5:',
                ':man_gesturing_ok_dark_skin_tone:',
            ]
        ],
        'woman gesturing OK: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_ok_tone1:',
                ':woman_gesturing_ok_light_skin_tone:',
            ]
        ],
        'woman gesturing OK: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_ok_tone2:',
                ':woman_gesturing_ok_medium_light_skin_tone:',
            ]
        ],
        'woman gesturing OK: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_ok_tone3:',
                ':woman_gesturing_ok_medium_skin_tone:',
            ]
        ],
        'woman gesturing OK: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_ok_tone4:',
                ':woman_gesturing_ok_medium_dark_skin_tone:',
            ]
        ],
        'woman gesturing OK: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_gesturing_ok_tone5:',
                ':woman_gesturing_ok_dark_skin_tone:',
            ]
        ],
        'person tipping hand: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_tipping_hand_tone1:',
                ':information_desk_person_tone1:',
            ]
        ],
        'person tipping hand: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_tipping_hand_tone2:',
                ':information_desk_person_tone2:',
            ]
        ],
        'person tipping hand: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_tipping_hand_tone3:',
                ':information_desk_person_tone3:',
            ]
        ],
        'person tipping hand: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_tipping_hand_tone4:',
                ':information_desk_person_tone4:',
            ]
        ],
        'person tipping hand: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_tipping_hand_tone5:',
                ':information_desk_person_tone5:',
            ]
        ],
        'man tipping hand: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_tipping_hand_tone1:',
                ':man_tipping_hand_light_skin_tone:',
            ]
        ],
        'man tipping hand: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_tipping_hand_tone2:',
                ':man_tipping_hand_medium_light_skin_tone:',
            ]
        ],
        'man tipping hand: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_tipping_hand_tone3:',
                ':man_tipping_hand_medium_skin_tone:',
            ]
        ],
        'man tipping hand: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_tipping_hand_tone4:',
                ':man_tipping_hand_medium_dark_skin_tone:',
            ]
        ],
        'man tipping hand: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_tipping_hand_tone5:',
                ':man_tipping_hand_dark_skin_tone:',
            ]
        ],
        'woman tipping hand: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_tipping_hand_tone1:',
                ':woman_tipping_hand_light_skin_tone:',
            ]
        ],
        'woman tipping hand: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_tipping_hand_tone2:',
                ':woman_tipping_hand_medium_light_skin_tone:',
            ]
        ],
        'woman tipping hand: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_tipping_hand_tone3:',
                ':woman_tipping_hand_medium_skin_tone:',
            ]
        ],
        'woman tipping hand: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_tipping_hand_tone4:',
                ':woman_tipping_hand_medium_dark_skin_tone:',
            ]
        ],
        'woman tipping hand: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_tipping_hand_tone5:',
                ':woman_tipping_hand_dark_skin_tone:',
            ]
        ],
        'person raising hand: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand_tone1:',
                ':raising_hand_tone1:',
            ]
        ],
        'person raising hand: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand_tone2:',
                ':raising_hand_tone2:',
            ]
        ],
        'person raising hand: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand_tone3:',
                ':raising_hand_tone3:',
            ]
        ],
        'person raising hand: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand_tone4:',
                ':raising_hand_tone4:',
            ]
        ],
        'person raising hand: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand_tone5:',
                ':raising_hand_tone5:',
            ]
        ],
        'man raising hand: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_raising_hand_tone1:',
                ':man_raising_hand_light_skin_tone:',
            ]
        ],
        'man raising hand: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_raising_hand_tone2:',
                ':man_raising_hand_medium_light_skin_tone:',
            ]
        ],
        'man raising hand: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_raising_hand_tone3:',
                ':man_raising_hand_medium_skin_tone:',
            ]
        ],
        'man raising hand: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_raising_hand_tone4:',
                ':man_raising_hand_medium_dark_skin_tone:',
            ]
        ],
        'man raising hand: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_raising_hand_tone5:',
                ':man_raising_hand_dark_skin_tone:',
            ]
        ],
        'woman raising hand: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_raising_hand_tone1:',
                ':woman_raising_hand_light_skin_tone:',
            ]
        ],
        'woman raising hand: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_raising_hand_tone2:',
                ':woman_raising_hand_medium_light_skin_tone:',
            ]
        ],
        'woman raising hand: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_raising_hand_tone3:',
                ':woman_raising_hand_medium_skin_tone:',
            ]
        ],
        'woman raising hand: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_raising_hand_tone4:',
                ':woman_raising_hand_medium_dark_skin_tone:',
            ]
        ],
        'woman raising hand: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_raising_hand_tone5:',
                ':woman_raising_hand_dark_skin_tone:',
            ]
        ],
        'deaf person: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_person_tone1:',
                ':deaf_person_light_skin_tone:',
            ]
        ],
        'deaf person: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_person_tone2:',
                ':deaf_person_medium_light_skin_tone:',
            ]
        ],
        'deaf person: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_person_tone3:',
                ':deaf_person_medium_skin_tone:',
            ]
        ],
        'deaf person: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_person_tone4:',
                ':deaf_person_medium_dark_skin_tone:',
            ]
        ],
        'deaf person: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_person_tone5:',
                ':deaf_person_dark_skin_tone:',
            ]
        ],
        'deaf man: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_man_tone1:',
                ':deaf_man_light_skin_tone:',
            ]
        ],
        'deaf man: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_man_tone2:',
                ':deaf_man_medium_light_skin_tone:',
            ]
        ],
        'deaf man: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_man_tone3:',
                ':deaf_man_medium_skin_tone:',
            ]
        ],
        'deaf man: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_man_tone4:',
                ':deaf_man_medium_dark_skin_tone:',
            ]
        ],
        'deaf man: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_man_tone5:',
                ':deaf_man_dark_skin_tone:',
            ]
        ],
        'deaf woman: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_woman_tone1:',
                ':deaf_woman_light_skin_tone:',
            ]
        ],
        'deaf woman: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_woman_tone2:',
                ':deaf_woman_medium_light_skin_tone:',
            ]
        ],
        'deaf woman: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_woman_tone3:',
                ':deaf_woman_medium_skin_tone:',
            ]
        ],
        'deaf woman: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_woman_tone4:',
                ':deaf_woman_medium_dark_skin_tone:',
            ]
        ],
        'deaf woman: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':deaf_woman_tone5:',
                ':deaf_woman_dark_skin_tone:',
            ]
        ],
        'person bowing: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_bowing_tone1:',
                ':bow_tone1:',
            ]
        ],
        'person bowing: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_bowing_tone2:',
                ':bow_tone2:',
            ]
        ],
        'person bowing: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_bowing_tone3:',
                ':bow_tone3:',
            ]
        ],
        'person bowing: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_bowing_tone4:',
                ':bow_tone4:',
            ]
        ],
        'person bowing: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_bowing_tone5:',
                ':bow_tone5:',
            ]
        ],
        'man bowing: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_bowing_tone1:',
                ':man_bowing_light_skin_tone:',
            ]
        ],
        'man bowing: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_bowing_tone2:',
                ':man_bowing_medium_light_skin_tone:',
            ]
        ],
        'man bowing: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_bowing_tone3:',
                ':man_bowing_medium_skin_tone:',
            ]
        ],
        'man bowing: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_bowing_tone4:',
                ':man_bowing_medium_dark_skin_tone:',
            ]
        ],
        'man bowing: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_bowing_tone5:',
                ':man_bowing_dark_skin_tone:',
            ]
        ],
        'woman bowing: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_bowing_tone1:',
                ':woman_bowing_light_skin_tone:',
            ]
        ],
        'woman bowing: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_bowing_tone2:',
                ':woman_bowing_medium_light_skin_tone:',
            ]
        ],
        'woman bowing: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_bowing_tone3:',
                ':woman_bowing_medium_skin_tone:',
            ]
        ],
        'woman bowing: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_bowing_tone4:',
                ':woman_bowing_medium_dark_skin_tone:',
            ]
        ],
        'woman bowing: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_bowing_tone5:',
                ':woman_bowing_dark_skin_tone:',
            ]
        ],
        'person facepalming: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_facepalming_tone1:',
                ':face_palm_tone1:',
                ':facepalm_tone1:',
            ]
        ],
        'person facepalming: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_facepalming_tone2:',
                ':face_palm_tone2:',
                ':facepalm_tone2:',
            ]
        ],
        'person facepalming: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_facepalming_tone3:',
                ':face_palm_tone3:',
                ':facepalm_tone3:',
            ]
        ],
        'person facepalming: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_facepalming_tone4:',
                ':face_palm_tone4:',
                ':facepalm_tone4:',
            ]
        ],
        'person facepalming: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_facepalming_tone5:',
                ':face_palm_tone5:',
                ':facepalm_tone5:',
            ]
        ],
        'man facepalming: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_facepalming_tone1:',
                ':man_facepalming_light_skin_tone:',
            ]
        ],
        'man facepalming: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_facepalming_tone2:',
                ':man_facepalming_medium_light_skin_tone:',
            ]
        ],
        'man facepalming: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_facepalming_tone3:',
                ':man_facepalming_medium_skin_tone:',
            ]
        ],
        'man facepalming: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_facepalming_tone4:',
                ':man_facepalming_medium_dark_skin_tone:',
            ]
        ],
        'man facepalming: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_facepalming_tone5:',
                ':man_facepalming_dark_skin_tone:',
            ]
        ],
        'woman facepalming: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_facepalming_tone1:',
                ':woman_facepalming_light_skin_tone:',
            ]
        ],
        'woman facepalming: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_facepalming_tone2:',
                ':woman_facepalming_medium_light_skin_tone:',
            ]
        ],
        'woman facepalming: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_facepalming_tone3:',
                ':woman_facepalming_medium_skin_tone:',
            ]
        ],
        'woman facepalming: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_facepalming_tone4:',
                ':woman_facepalming_medium_dark_skin_tone:',
            ]
        ],
        'woman facepalming: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_facepalming_tone5:',
                ':woman_facepalming_dark_skin_tone:',
            ]
        ],
        'person shrugging: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_shrugging_tone1:',
                ':shrug_tone1:',
            ]
        ],
        'person shrugging: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_shrugging_tone2:',
                ':shrug_tone2:',
            ]
        ],
        'person shrugging: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_shrugging_tone3:',
                ':shrug_tone3:',
            ]
        ],
        'person shrugging: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_shrugging_tone4:',
                ':shrug_tone4:',
            ]
        ],
        'person shrugging: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_shrugging_tone5:',
                ':shrug_tone5:',
            ]
        ],
        'man shrugging: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_shrugging_tone1:',
                ':man_shrugging_light_skin_tone:',
            ]
        ],
        'man shrugging: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_shrugging_tone2:',
                ':man_shrugging_medium_light_skin_tone:',
            ]
        ],
        'man shrugging: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_shrugging_tone3:',
                ':man_shrugging_medium_skin_tone:',
            ]
        ],
        'man shrugging: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_shrugging_tone4:',
                ':man_shrugging_medium_dark_skin_tone:',
            ]
        ],
        'man shrugging: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':man_shrugging_tone5:',
                ':man_shrugging_dark_skin_tone:',
            ]
        ],
        'woman shrugging: light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_shrugging_tone1:',
                ':woman_shrugging_light_skin_tone:',
            ]
        ],
        'woman shrugging: medium-light skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_shrugging_tone2:',
                ':woman_shrugging_medium_light_skin_tone:',
            ]
        ],
        'woman shrugging: medium skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_shrugging_tone3:',
                ':woman_shrugging_medium_skin_tone:',
            ]
        ],
        'woman shrugging: medium-dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_shrugging_tone4:',
                ':woman_shrugging_medium_dark_skin_tone:',
            ]
        ],
        'woman shrugging: dark skin tone' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':woman_shrugging_tone5:',
                ':woman_shrugging_dark_skin_tone:',
            ]
        ],
        'man health worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_health_worker:',
            ]
        ],
        'woman health worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_health_worker:',
            ]
        ],
        'man student' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_student:',
            ]
        ],
        'woman student' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_student:',
            ]
        ],
        'man teacher' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_teacher:',
            ]
        ],
        'woman teacher' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_teacher:',
            ]
        ],
        'man judge' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_judge:',
            ]
        ],
        'woman judge' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_judge:',
            ]
        ],
        'man farmer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_farmer:',
            ]
        ],
        'woman farmer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_farmer:',
            ]
        ],
        'man cook' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_cook:',
            ]
        ],
        'woman cook' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_cook:',
            ]
        ],
        'man mechanic' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_mechanic:',
            ]
        ],
        'woman mechanic' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_mechanic:',
            ]
        ],
        'man factory worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_factory_worker:',
            ]
        ],
        'woman factory worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_factory_worker:',
            ]
        ],
        'man office worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_office_worker:',
            ]
        ],
        'woman office worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_office_worker:',
            ]
        ],
        'man scientist' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_scientist:',
            ]
        ],
        'woman scientist' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_scientist:',
            ]
        ],
        'man technologist' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_technologist:',
            ]
        ],
        'woman technologist' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_technologist:',
            ]
        ],
        'man singer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_singer:',
            ]
        ],
        'woman singer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_singer:',
            ]
        ],
        'man artist' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_artist:',
            ]
        ],
        'woman artist' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_artist:',
            ]
        ],
        'man pilot' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_pilot:',
            ]
        ],
        'woman pilot' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_pilot:',
            ]
        ],
        'man astronaut' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_astronaut:',
            ]
        ],
        'woman astronaut' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_astronaut:',
            ]
        ],
        'man firefighter' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_firefighter:',
            ]
        ],
        'woman firefighter' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_firefighter:',
            ]
        ],
        'police officer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer:',
                ':cop:',
            ]
        ],
        'man police officer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_police_officer:',
            ]
        ],
        'woman police officer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_police_officer:',
            ]
        ],
        'detective' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':detective:',
                ':spy:',
                ':sleuth_or_spy:',
            ]
        ],
        'man detective' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_detective:',
            ]
        ],
        'woman detective' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_detective:',
            ]
        ],
        'guard' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':guard:',
                ':guardsman:',
            ]
        ],
        'man guard' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_guard:',
            ]
        ],
        'woman guard' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_guard:',
            ]
        ],
        'construction worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker:',
            ]
        ],
        'man construction worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_construction_worker:',
            ]
        ],
        'woman construction worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_construction_worker:',
            ]
        ],
        'prince' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':prince:',
            ]
        ],
        'princess' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':princess:',
            ]
        ],
        'person wearing turban' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':person_wearing_turban:',
                ':man_with_turban:',
            ]
        ],
        'man wearing turban' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_wearing_turban:',
            ]
        ],
        'woman wearing turban' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_wearing_turban:',
            ]
        ],
        'man with skullcap' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman with headscarf' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_with_headscarf:',
            ]
        ],
        'man in tuxedo' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_in_tuxedo:',
            ]
        ],
        'bride with veil' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil:',
            ]
        ],
        'pregnant woman' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':pregnant_woman:',
                ':expecting_woman:',
            ]
        ],
        'breast-feeding' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':breast_feeding:',
            ]
        ],
        'man health worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_health_worker_tone1:',
                ':man_health_worker_light_skin_tone:',
            ]
        ],
        'man health worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_health_worker_tone2:',
                ':man_health_worker_medium_light_skin_tone:',
            ]
        ],
        'man health worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_health_worker_tone3:',
                ':man_health_worker_medium_skin_tone:',
            ]
        ],
        'man health worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_health_worker_tone4:',
                ':man_health_worker_medium_dark_skin_tone:',
            ]
        ],
        'man health worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_health_worker_tone5:',
                ':man_health_worker_dark_skin_tone:',
            ]
        ],
        'woman health worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_health_worker_tone1:',
                ':woman_health_worker_light_skin_tone:',
            ]
        ],
        'woman health worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_health_worker_tone2:',
                ':woman_health_worker_medium_light_skin_tone:',
            ]
        ],
        'woman health worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_health_worker_tone3:',
                ':woman_health_worker_medium_skin_tone:',
            ]
        ],
        'woman health worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_health_worker_tone4:',
                ':woman_health_worker_medium_dark_skin_tone:',
            ]
        ],
        'woman health worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_health_worker_tone5:',
                ':woman_health_worker_dark_skin_tone:',
            ]
        ],
        'man student: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_student_tone1:',
                ':man_student_light_skin_tone:',
            ]
        ],
        'man student: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_student_tone2:',
                ':man_student_medium_light_skin_tone:',
            ]
        ],
        'man student: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_student_tone3:',
                ':man_student_medium_skin_tone:',
            ]
        ],
        'man student: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_student_tone4:',
                ':man_student_medium_dark_skin_tone:',
            ]
        ],
        'man student: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_student_tone5:',
                ':man_student_dark_skin_tone:',
            ]
        ],
        'woman student: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_student_tone1:',
                ':woman_student_light_skin_tone:',
            ]
        ],
        'woman student: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_student_tone2:',
                ':woman_student_medium_light_skin_tone:',
            ]
        ],
        'woman student: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_student_tone3:',
                ':woman_student_medium_skin_tone:',
            ]
        ],
        'woman student: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_student_tone4:',
                ':woman_student_medium_dark_skin_tone:',
            ]
        ],
        'woman student: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_student_tone5:',
                ':woman_student_dark_skin_tone:',
            ]
        ],
        'man teacher: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_teacher_tone1:',
                ':man_teacher_light_skin_tone:',
            ]
        ],
        'man teacher: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_teacher_tone2:',
                ':man_teacher_medium_light_skin_tone:',
            ]
        ],
        'man teacher: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_teacher_tone3:',
                ':man_teacher_medium_skin_tone:',
            ]
        ],
        'man teacher: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_teacher_tone4:',
                ':man_teacher_medium_dark_skin_tone:',
            ]
        ],
        'man teacher: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_teacher_tone5:',
                ':man_teacher_dark_skin_tone:',
            ]
        ],
        'woman teacher: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_teacher_tone1:',
                ':woman_teacher_light_skin_tone:',
            ]
        ],
        'woman teacher: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_teacher_tone2:',
                ':woman_teacher_medium_light_skin_tone:',
            ]
        ],
        'woman teacher: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_teacher_tone3:',
                ':woman_teacher_medium_skin_tone:',
            ]
        ],
        'woman teacher: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_teacher_tone4:',
                ':woman_teacher_medium_dark_skin_tone:',
            ]
        ],
        'woman teacher: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_teacher_tone5:',
                ':woman_teacher_dark_skin_tone:',
            ]
        ],
        'man judge: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_judge_tone1:',
                ':man_judge_light_skin_tone:',
            ]
        ],
        'man judge: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_judge_tone2:',
                ':man_judge_medium_light_skin_tone:',
            ]
        ],
        'man judge: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_judge_tone3:',
                ':man_judge_medium_skin_tone:',
            ]
        ],
        'man judge: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_judge_tone4:',
                ':man_judge_medium_dark_skin_tone:',
            ]
        ],
        'man judge: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_judge_tone5:',
                ':man_judge_dark_skin_tone:',
            ]
        ],
        'woman judge: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_judge_tone1:',
                ':woman_judge_light_skin_tone:',
            ]
        ],
        'woman judge: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_judge_tone2:',
                ':woman_judge_medium_light_skin_tone:',
            ]
        ],
        'woman judge: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_judge_tone3:',
                ':woman_judge_medium_skin_tone:',
            ]
        ],
        'woman judge: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_judge_tone4:',
                ':woman_judge_medium_dark_skin_tone:',
            ]
        ],
        'woman judge: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_judge_tone5:',
                ':woman_judge_dark_skin_tone:',
            ]
        ],
        'man farmer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_farmer_tone1:',
                ':man_farmer_light_skin_tone:',
            ]
        ],
        'man farmer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_farmer_tone2:',
                ':man_farmer_medium_light_skin_tone:',
            ]
        ],
        'man farmer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_farmer_tone3:',
                ':man_farmer_medium_skin_tone:',
            ]
        ],
        'man farmer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_farmer_tone4:',
                ':man_farmer_medium_dark_skin_tone:',
            ]
        ],
        'man farmer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_farmer_tone5:',
                ':man_farmer_dark_skin_tone:',
            ]
        ],
        'woman farmer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_farmer_tone1:',
                ':woman_farmer_light_skin_tone:',
            ]
        ],
        'woman farmer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_farmer_tone2:',
                ':woman_farmer_medium_light_skin_tone:',
            ]
        ],
        'woman farmer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_farmer_tone3:',
                ':woman_farmer_medium_skin_tone:',
            ]
        ],
        'woman farmer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_farmer_tone4:',
                ':woman_farmer_medium_dark_skin_tone:',
            ]
        ],
        'woman farmer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_farmer_tone5:',
                ':woman_farmer_dark_skin_tone:',
            ]
        ],
        'man cook: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_cook_tone1:',
                ':man_cook_light_skin_tone:',
            ]
        ],
        'man cook: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_cook_tone2:',
                ':man_cook_medium_light_skin_tone:',
            ]
        ],
        'man cook: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_cook_tone3:',
                ':man_cook_medium_skin_tone:',
            ]
        ],
        'man cook: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_cook_tone4:',
                ':man_cook_medium_dark_skin_tone:',
            ]
        ],
        'man cook: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_cook_tone5:',
                ':man_cook_dark_skin_tone:',
            ]
        ],
        'woman cook: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_cook_tone1:',
                ':woman_cook_light_skin_tone:',
            ]
        ],
        'woman cook: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_cook_tone2:',
                ':woman_cook_medium_light_skin_tone:',
            ]
        ],
        'woman cook: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_cook_tone3:',
                ':woman_cook_medium_skin_tone:',
            ]
        ],
        'woman cook: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_cook_tone4:',
                ':woman_cook_medium_dark_skin_tone:',
            ]
        ],
        'woman cook: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_cook_tone5:',
                ':woman_cook_dark_skin_tone:',
            ]
        ],
        'man mechanic: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_mechanic_tone1:',
                ':man_mechanic_light_skin_tone:',
            ]
        ],
        'man mechanic: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_mechanic_tone2:',
                ':man_mechanic_medium_light_skin_tone:',
            ]
        ],
        'man mechanic: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_mechanic_tone3:',
                ':man_mechanic_medium_skin_tone:',
            ]
        ],
        'man mechanic: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_mechanic_tone4:',
                ':man_mechanic_medium_dark_skin_tone:',
            ]
        ],
        'man mechanic: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_mechanic_tone5:',
                ':man_mechanic_dark_skin_tone:',
            ]
        ],
        'woman mechanic: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_mechanic_tone1:',
                ':woman_mechanic_light_skin_tone:',
            ]
        ],
        'woman mechanic: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_mechanic_tone2:',
                ':woman_mechanic_medium_light_skin_tone:',
            ]
        ],
        'woman mechanic: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_mechanic_tone3:',
                ':woman_mechanic_medium_skin_tone:',
            ]
        ],
        'woman mechanic: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_mechanic_tone4:',
                ':woman_mechanic_medium_dark_skin_tone:',
            ]
        ],
        'woman mechanic: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_mechanic_tone5:',
                ':woman_mechanic_dark_skin_tone:',
            ]
        ],
        'man factory worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_factory_worker_tone1:',
                ':man_factory_worker_light_skin_tone:',
            ]
        ],
        'man factory worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_factory_worker_tone2:',
                ':man_factory_worker_medium_light_skin_tone:',
            ]
        ],
        'man factory worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_factory_worker_tone3:',
                ':man_factory_worker_medium_skin_tone:',
            ]
        ],
        'man factory worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_factory_worker_tone4:',
                ':man_factory_worker_medium_dark_skin_tone:',
            ]
        ],
        'man factory worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_factory_worker_tone5:',
                ':man_factory_worker_dark_skin_tone:',
            ]
        ],
        'woman factory worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_factory_worker_tone1:',
                ':woman_factory_worker_light_skin_tone:',
            ]
        ],
        'woman factory worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_factory_worker_tone2:',
                ':woman_factory_worker_medium_light_skin_tone:',
            ]
        ],
        'woman factory worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_factory_worker_tone3:',
                ':woman_factory_worker_medium_skin_tone:',
            ]
        ],
        'woman factory worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_factory_worker_tone4:',
                ':woman_factory_worker_medium_dark_skin_tone:',
            ]
        ],
        'woman factory worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_factory_worker_tone5:',
                ':woman_factory_worker_dark_skin_tone:',
            ]
        ],
        'man office worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_office_worker_tone1:',
                ':man_office_worker_light_skin_tone:',
            ]
        ],
        'man office worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_office_worker_tone2:',
                ':man_office_worker_medium_light_skin_tone:',
            ]
        ],
        'man office worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_office_worker_tone3:',
                ':man_office_worker_medium_skin_tone:',
            ]
        ],
        'man office worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_office_worker_tone4:',
                ':man_office_worker_medium_dark_skin_tone:',
            ]
        ],
        'man office worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_office_worker_tone5:',
                ':man_office_worker_dark_skin_tone:',
            ]
        ],
        'woman office worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_office_worker_tone1:',
                ':woman_office_worker_light_skin_tone:',
            ]
        ],
        'woman office worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_office_worker_tone2:',
                ':woman_office_worker_medium_light_skin_tone:',
            ]
        ],
        'woman office worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_office_worker_tone3:',
                ':woman_office_worker_medium_skin_tone:',
            ]
        ],
        'woman office worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_office_worker_tone4:',
                ':woman_office_worker_medium_dark_skin_tone:',
            ]
        ],
        'woman office worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_office_worker_tone5:',
                ':woman_office_worker_dark_skin_tone:',
            ]
        ],
        'man scientist: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_scientist_tone1:',
                ':man_scientist_light_skin_tone:',
            ]
        ],
        'man scientist: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_scientist_tone2:',
                ':man_scientist_medium_light_skin_tone:',
            ]
        ],
        'man scientist: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_scientist_tone3:',
                ':man_scientist_medium_skin_tone:',
            ]
        ],
        'man scientist: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_scientist_tone4:',
                ':man_scientist_medium_dark_skin_tone:',
            ]
        ],
        'man scientist: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_scientist_tone5:',
                ':man_scientist_dark_skin_tone:',
            ]
        ],
        'woman scientist: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_scientist_tone1:',
                ':woman_scientist_light_skin_tone:',
            ]
        ],
        'woman scientist: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_scientist_tone2:',
                ':woman_scientist_medium_light_skin_tone:',
            ]
        ],
        'woman scientist: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_scientist_tone3:',
                ':woman_scientist_medium_skin_tone:',
            ]
        ],
        'woman scientist: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_scientist_tone4:',
                ':woman_scientist_medium_dark_skin_tone:',
            ]
        ],
        'woman scientist: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_scientist_tone5:',
                ':woman_scientist_dark_skin_tone:',
            ]
        ],
        'man technologist: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_technologist_tone1:',
                ':man_technologist_light_skin_tone:',
            ]
        ],
        'man technologist: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_technologist_tone2:',
                ':man_technologist_medium_light_skin_tone:',
            ]
        ],
        'man technologist: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_technologist_tone3:',
                ':man_technologist_medium_skin_tone:',
            ]
        ],
        'man technologist: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_technologist_tone4:',
                ':man_technologist_medium_dark_skin_tone:',
            ]
        ],
        'man technologist: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_technologist_tone5:',
                ':man_technologist_dark_skin_tone:',
            ]
        ],
        'woman technologist: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_technologist_tone1:',
                ':woman_technologist_light_skin_tone:',
            ]
        ],
        'woman technologist: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_technologist_tone2:',
                ':woman_technologist_medium_light_skin_tone:',
            ]
        ],
        'woman technologist: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_technologist_tone3:',
                ':woman_technologist_medium_skin_tone:',
            ]
        ],
        'woman technologist: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_technologist_tone4:',
                ':woman_technologist_medium_dark_skin_tone:',
            ]
        ],
        'woman technologist: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_technologist_tone5:',
                ':woman_technologist_dark_skin_tone:',
            ]
        ],
        'man singer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_singer_tone1:',
                ':man_singer_light_skin_tone:',
            ]
        ],
        'man singer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_singer_tone2:',
                ':man_singer_medium_light_skin_tone:',
            ]
        ],
        'man singer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_singer_tone3:',
                ':man_singer_medium_skin_tone:',
            ]
        ],
        'man singer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_singer_tone4:',
                ':man_singer_medium_dark_skin_tone:',
            ]
        ],
        'man singer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_singer_tone5:',
                ':man_singer_dark_skin_tone:',
            ]
        ],
        'woman singer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_singer_tone1:',
                ':woman_singer_light_skin_tone:',
            ]
        ],
        'woman singer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_singer_tone2:',
                ':woman_singer_medium_light_skin_tone:',
            ]
        ],
        'woman singer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_singer_tone3:',
                ':woman_singer_medium_skin_tone:',
            ]
        ],
        'woman singer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_singer_tone4:',
                ':woman_singer_medium_dark_skin_tone:',
            ]
        ],
        'woman singer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_singer_tone5:',
                ':woman_singer_dark_skin_tone:',
            ]
        ],
        'man artist: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_artist_tone1:',
                ':man_artist_light_skin_tone:',
            ]
        ],
        'man artist: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_artist_tone2:',
                ':man_artist_medium_light_skin_tone:',
            ]
        ],
        'man artist: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_artist_tone3:',
                ':man_artist_medium_skin_tone:',
            ]
        ],
        'man artist: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_artist_tone4:',
                ':man_artist_medium_dark_skin_tone:',
            ]
        ],
        'man artist: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_artist_tone5:',
                ':man_artist_dark_skin_tone:',
            ]
        ],
        'woman artist: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_artist_tone1:',
                ':woman_artist_light_skin_tone:',
            ]
        ],
        'woman artist: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_artist_tone2:',
                ':woman_artist_medium_light_skin_tone:',
            ]
        ],
        'woman artist: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_artist_tone3:',
                ':woman_artist_medium_skin_tone:',
            ]
        ],
        'woman artist: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_artist_tone4:',
                ':woman_artist_medium_dark_skin_tone:',
            ]
        ],
        'woman artist: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_artist_tone5:',
                ':woman_artist_dark_skin_tone:',
            ]
        ],
        'man pilot: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_pilot_tone1:',
                ':man_pilot_light_skin_tone:',
            ]
        ],
        'man pilot: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_pilot_tone2:',
                ':man_pilot_medium_light_skin_tone:',
            ]
        ],
        'man pilot: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_pilot_tone3:',
                ':man_pilot_medium_skin_tone:',
            ]
        ],
        'man pilot: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_pilot_tone4:',
                ':man_pilot_medium_dark_skin_tone:',
            ]
        ],
        'man pilot: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_pilot_tone5:',
                ':man_pilot_dark_skin_tone:',
            ]
        ],
        'woman pilot: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_pilot_tone1:',
                ':woman_pilot_light_skin_tone:',
            ]
        ],
        'woman pilot: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_pilot_tone2:',
                ':woman_pilot_medium_light_skin_tone:',
            ]
        ],
        'woman pilot: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_pilot_tone3:',
                ':woman_pilot_medium_skin_tone:',
            ]
        ],
        'woman pilot: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_pilot_tone4:',
                ':woman_pilot_medium_dark_skin_tone:',
            ]
        ],
        'woman pilot: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_pilot_tone5:',
                ':woman_pilot_dark_skin_tone:',
            ]
        ],
        'man astronaut: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_astronaut_tone1:',
                ':man_astronaut_light_skin_tone:',
            ]
        ],
        'man astronaut: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_astronaut_tone2:',
                ':man_astronaut_medium_light_skin_tone:',
            ]
        ],
        'man astronaut: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_astronaut_tone3:',
                ':man_astronaut_medium_skin_tone:',
            ]
        ],
        'man astronaut: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_astronaut_tone4:',
                ':man_astronaut_medium_dark_skin_tone:',
            ]
        ],
        'man astronaut: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_astronaut_tone5:',
                ':man_astronaut_dark_skin_tone:',
            ]
        ],
        'woman astronaut: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_astronaut_tone1:',
                ':woman_astronaut_light_skin_tone:',
            ]
        ],
        'woman astronaut: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_astronaut_tone2:',
                ':woman_astronaut_medium_light_skin_tone:',
            ]
        ],
        'woman astronaut: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_astronaut_tone3:',
                ':woman_astronaut_medium_skin_tone:',
            ]
        ],
        'woman astronaut: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_astronaut_tone4:',
                ':woman_astronaut_medium_dark_skin_tone:',
            ]
        ],
        'woman astronaut: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_astronaut_tone5:',
                ':woman_astronaut_dark_skin_tone:',
            ]
        ],
        'man firefighter: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_firefighter_tone1:',
                ':man_firefighter_light_skin_tone:',
            ]
        ],
        'man firefighter: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_firefighter_tone2:',
                ':man_firefighter_medium_light_skin_tone:',
            ]
        ],
        'man firefighter: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_firefighter_tone3:',
                ':man_firefighter_medium_skin_tone:',
            ]
        ],
        'man firefighter: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_firefighter_tone4:',
                ':man_firefighter_medium_dark_skin_tone:',
            ]
        ],
        'man firefighter: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_firefighter_tone5:',
                ':man_firefighter_dark_skin_tone:',
            ]
        ],
        'woman firefighter: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_firefighter_tone1:',
                ':woman_firefighter_light_skin_tone:',
            ]
        ],
        'woman firefighter: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_firefighter_tone2:',
                ':woman_firefighter_medium_light_skin_tone:',
            ]
        ],
        'woman firefighter: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_firefighter_tone3:',
                ':woman_firefighter_medium_skin_tone:',
            ]
        ],
        'woman firefighter: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_firefighter_tone4:',
                ':woman_firefighter_medium_dark_skin_tone:',
            ]
        ],
        'woman firefighter: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_firefighter_tone5:',
                ':woman_firefighter_dark_skin_tone:',
            ]
        ],
        'police officer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer_tone1:',
                ':cop_tone1:',
            ]
        ],
        'police officer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer_tone2:',
                ':cop_tone2:',
            ]
        ],
        'police officer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer_tone3:',
                ':cop_tone3:',
            ]
        ],
        'police officer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer_tone4:',
                ':cop_tone4:',
            ]
        ],
        'police officer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer_tone5:',
                ':cop_tone5:',
            ]
        ],
        'man police officer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_police_officer_tone1:',
                ':man_police_officer_light_skin_tone:',
            ]
        ],
        'man police officer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_police_officer_tone2:',
                ':man_police_officer_medium_light_skin_tone:',
            ]
        ],
        'man police officer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_police_officer_tone3:',
                ':man_police_officer_medium_skin_tone:',
            ]
        ],
        'man police officer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_police_officer_tone4:',
                ':man_police_officer_medium_dark_skin_tone:',
            ]
        ],
        'man police officer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_police_officer_tone5:',
                ':man_police_officer_dark_skin_tone:',
            ]
        ],
        'woman police officer: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_police_officer_tone1:',
                ':woman_police_officer_light_skin_tone:',
            ]
        ],
        'woman police officer: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_police_officer_tone2:',
                ':woman_police_officer_medium_light_skin_tone:',
            ]
        ],
        'woman police officer: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_police_officer_tone3:',
                ':woman_police_officer_medium_skin_tone:',
            ]
        ],
        'woman police officer: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_police_officer_tone4:',
                ':woman_police_officer_medium_dark_skin_tone:',
            ]
        ],
        'woman police officer: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_police_officer_tone5:',
                ':woman_police_officer_dark_skin_tone:',
            ]
        ],
        'detective: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':detective_tone1:',
                ':spy_tone1:',
                ':sleuth_or_spy_tone1:',
            ]
        ],
        'detective: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':detective_tone2:',
                ':spy_tone2:',
                ':sleuth_or_spy_tone2:',
            ]
        ],
        'detective: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':detective_tone3:',
                ':spy_tone3:',
                ':sleuth_or_spy_tone3:',
            ]
        ],
        'detective: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':detective_tone4:',
                ':spy_tone4:',
                ':sleuth_or_spy_tone4:',
            ]
        ],
        'detective: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':detective_tone5:',
                ':spy_tone5:',
                ':sleuth_or_spy_tone5:',
            ]
        ],
        'man detective: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_detective_tone1:',
                ':man_detective_light_skin_tone:',
            ]
        ],
        'man detective: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_detective_tone2:',
                ':man_detective_medium_light_skin_tone:',
            ]
        ],
        'man detective: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_detective_tone3:',
                ':man_detective_medium_skin_tone:',
            ]
        ],
        'man detective: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_detective_tone4:',
                ':man_detective_medium_dark_skin_tone:',
            ]
        ],
        'man detective: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_detective_tone5:',
                ':man_detective_dark_skin_tone:',
            ]
        ],
        'woman detective: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_detective_tone1:',
                ':woman_detective_light_skin_tone:',
            ]
        ],
        'woman detective: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_detective_tone2:',
                ':woman_detective_medium_light_skin_tone:',
            ]
        ],
        'woman detective: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_detective_tone3:',
                ':woman_detective_medium_skin_tone:',
            ]
        ],
        'woman detective: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_detective_tone4:',
                ':woman_detective_medium_dark_skin_tone:',
            ]
        ],
        'woman detective: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_detective_tone5:',
                ':woman_detective_dark_skin_tone:',
            ]
        ],
        'guard: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':guard_tone1:',
                ':guardsman_tone1:',
            ]
        ],
        'guard: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':guard_tone2:',
                ':guardsman_tone2:',
            ]
        ],
        'guard: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':guard_tone3:',
                ':guardsman_tone3:',
            ]
        ],
        'guard: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':guard_tone4:',
                ':guardsman_tone4:',
            ]
        ],
        'guard: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':guard_tone5:',
                ':guardsman_tone5:',
            ]
        ],
        'man guard: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_guard_tone1:',
                ':man_guard_light_skin_tone:',
            ]
        ],
        'man guard: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_guard_tone2:',
                ':man_guard_medium_light_skin_tone:',
            ]
        ],
        'man guard: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_guard_tone3:',
                ':man_guard_medium_skin_tone:',
            ]
        ],
        'man guard: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_guard_tone4:',
                ':man_guard_medium_dark_skin_tone:',
            ]
        ],
        'man guard: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_guard_tone5:',
                ':man_guard_dark_skin_tone:',
            ]
        ],
        'woman guard: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_guard_tone1:',
                ':woman_guard_light_skin_tone:',
            ]
        ],
        'woman guard: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_guard_tone2:',
                ':woman_guard_medium_light_skin_tone:',
            ]
        ],
        'woman guard: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_guard_tone3:',
                ':woman_guard_medium_skin_tone:',
            ]
        ],
        'woman guard: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_guard_tone4:',
                ':woman_guard_medium_dark_skin_tone:',
            ]
        ],
        'woman guard: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_guard_tone5:',
                ':woman_guard_dark_skin_tone:',
            ]
        ],
        'construction worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker_tone1:',
            ]
        ],
        'construction worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker_tone2:',
            ]
        ],
        'construction worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker_tone3:',
            ]
        ],
        'construction worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker_tone4:',
            ]
        ],
        'construction worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker_tone5:',
            ]
        ],
        'man construction worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_construction_worker_tone1:',
                ':man_construction_worker_light_skin_tone:',
            ]
        ],
        'man construction worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_construction_worker_tone2:',
                ':man_construction_worker_medium_light_skin_tone:',
            ]
        ],
        'man construction worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_construction_worker_tone3:',
                ':man_construction_worker_medium_skin_tone:',
            ]
        ],
        'man construction worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_construction_worker_tone4:',
                ':man_construction_worker_medium_dark_skin_tone:',
            ]
        ],
        'man construction worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_construction_worker_tone5:',
                ':man_construction_worker_dark_skin_tone:',
            ]
        ],
        'woman construction worker: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_construction_worker_tone1:',
                ':woman_construction_worker_light_skin_tone:',
            ]
        ],
        'woman construction worker: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_construction_worker_tone2:',
                ':woman_construction_worker_medium_light_skin_tone:',
            ]
        ],
        'woman construction worker: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_construction_worker_tone3:',
                ':woman_construction_worker_medium_skin_tone:',
            ]
        ],
        'woman construction worker: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_construction_worker_tone4:',
                ':woman_construction_worker_medium_dark_skin_tone:',
            ]
        ],
        'woman construction worker: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_construction_worker_tone5:',
                ':woman_construction_worker_dark_skin_tone:',
            ]
        ],
        'prince: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':prince_tone1:',
            ]
        ],
        'prince: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':prince_tone2:',
            ]
        ],
        'prince: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':prince_tone3:',
            ]
        ],
        'prince: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':prince_tone4:',
            ]
        ],
        'prince: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':prince_tone5:',
            ]
        ],
        'princess: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':princess_tone1:',
            ]
        ],
        'princess: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':princess_tone2:',
            ]
        ],
        'princess: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':princess_tone3:',
            ]
        ],
        'princess: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':princess_tone4:',
            ]
        ],
        'princess: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':princess_tone5:',
            ]
        ],
        'person wearing turban: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':person_wearing_turban_tone1:',
                ':man_with_turban_tone1:',
            ]
        ],
        'person wearing turban: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':person_wearing_turban_tone2:',
                ':man_with_turban_tone2:',
            ]
        ],
        'person wearing turban: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':person_wearing_turban_tone3:',
                ':man_with_turban_tone3:',
            ]
        ],
        'person wearing turban: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':person_wearing_turban_tone4:',
                ':man_with_turban_tone4:',
            ]
        ],
        'person wearing turban: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':person_wearing_turban_tone5:',
                ':man_with_turban_tone5:',
            ]
        ],
        'man wearing turban: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_wearing_turban_tone1:',
                ':man_wearing_turban_light_skin_tone:',
            ]
        ],
        'man wearing turban: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_wearing_turban_tone2:',
                ':man_wearing_turban_medium_light_skin_tone:',
            ]
        ],
        'man wearing turban: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_wearing_turban_tone3:',
                ':man_wearing_turban_medium_skin_tone:',
            ]
        ],
        'man wearing turban: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_wearing_turban_tone4:',
                ':man_wearing_turban_medium_dark_skin_tone:',
            ]
        ],
        'man wearing turban: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_wearing_turban_tone5:',
                ':man_wearing_turban_dark_skin_tone:',
            ]
        ],
        'woman wearing turban: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_wearing_turban_tone1:',
                ':woman_wearing_turban_light_skin_tone:',
            ]
        ],
        'woman wearing turban: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_wearing_turban_tone2:',
                ':woman_wearing_turban_medium_light_skin_tone:',
            ]
        ],
        'woman wearing turban: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_wearing_turban_tone3:',
                ':woman_wearing_turban_medium_skin_tone:',
            ]
        ],
        'woman wearing turban: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_wearing_turban_tone4:',
                ':woman_wearing_turban_medium_dark_skin_tone:',
            ]
        ],
        'woman wearing turban: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_wearing_turban_tone5:',
                ':woman_wearing_turban_dark_skin_tone:',
            ]
        ],
        'man with skullcap: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man with skullcap: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man with skullcap: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man with skullcap: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man with skullcap: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman with headscarf: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_with_headscarf_tone1:',
                ':woman_with_headscarf_light_skin_tone:',
            ]
        ],
        'woman with headscarf: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_with_headscarf_tone2:',
                ':woman_with_headscarf_medium_light_skin_tone:',
            ]
        ],
        'woman with headscarf: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_with_headscarf_tone3:',
                ':woman_with_headscarf_medium_skin_tone:',
            ]
        ],
        'woman with headscarf: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_with_headscarf_tone4:',
                ':woman_with_headscarf_medium_dark_skin_tone:',
            ]
        ],
        'woman with headscarf: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':woman_with_headscarf_tone5:',
                ':woman_with_headscarf_dark_skin_tone:',
            ]
        ],
        'man in tuxedo: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_in_tuxedo_tone1:',
                ':tuxedo_tone1:',
            ]
        ],
        'man in tuxedo: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_in_tuxedo_tone2:',
                ':tuxedo_tone2:',
            ]
        ],
        'man in tuxedo: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_in_tuxedo_tone3:',
                ':tuxedo_tone3:',
            ]
        ],
        'man in tuxedo: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_in_tuxedo_tone4:',
                ':tuxedo_tone4:',
            ]
        ],
        'man in tuxedo: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':man_in_tuxedo_tone5:',
                ':tuxedo_tone5:',
            ]
        ],
        'bride with veil: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil_tone1:',
            ]
        ],
        'bride with veil: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil_tone2:',
            ]
        ],
        'bride with veil: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil_tone3:',
            ]
        ],
        'bride with veil: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil_tone4:',
            ]
        ],
        'bride with veil: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil_tone5:',
            ]
        ],
        'pregnant woman: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':pregnant_woman_tone1:',
                ':expecting_woman_tone1:',
            ]
        ],
        'pregnant woman: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':pregnant_woman_tone2:',
                ':expecting_woman_tone2:',
            ]
        ],
        'pregnant woman: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':pregnant_woman_tone3:',
                ':expecting_woman_tone3:',
            ]
        ],
        'pregnant woman: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':pregnant_woman_tone4:',
                ':expecting_woman_tone4:',
            ]
        ],
        'pregnant woman: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':pregnant_woman_tone5:',
                ':expecting_woman_tone5:',
            ]
        ],
        'breast-feeding: light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':breast_feeding_tone1:',
                ':breast_feeding_light_skin_tone:',
            ]
        ],
        'breast-feeding: medium-light skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':breast_feeding_tone2:',
                ':breast_feeding_medium_light_skin_tone:',
            ]
        ],
        'breast-feeding: medium skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':breast_feeding_tone3:',
                ':breast_feeding_medium_skin_tone:',
            ]
        ],
        'breast-feeding: medium-dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':breast_feeding_tone4:',
                ':breast_feeding_medium_dark_skin_tone:',
            ]
        ],
        'breast-feeding: dark skin tone' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':breast_feeding_tone5:',
                ':breast_feeding_dark_skin_tone:',
            ]
        ],
        'baby angel' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':angel:',
            ]
        ],
        'Santa Claus' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':santa:',
            ]
        ],
        'Mrs. Claus' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mrs_claus:',
                ':mother_christmas:',
            ]
        ],
        'superhero' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':superhero:',
            ]
        ],
        'man superhero' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_superhero:',
            ]
        ],
        'woman superhero' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_superhero:',
            ]
        ],
        'supervillain' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':supervillain:',
            ]
        ],
        'man supervillain' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_supervillain:',
            ]
        ],
        'woman supervillain' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_supervillain:',
            ]
        ],
        'mage' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mage:',
            ]
        ],
        'man mage' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_mage:',
            ]
        ],
        'woman mage' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_mage:',
            ]
        ],
        'fairy' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':fairy:',
            ]
        ],
        'man fairy' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_fairy:',
            ]
        ],
        'woman fairy' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_fairy:',
            ]
        ],
        'vampire' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':vampire:',
            ]
        ],
        'man vampire' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_vampire:',
            ]
        ],
        'woman vampire' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_vampire:',
            ]
        ],
        'merperson' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merperson:',
            ]
        ],
        'merman' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merman:',
            ]
        ],
        'mermaid' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mermaid:',
            ]
        ],
        'elf' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':elf:',
            ]
        ],
        'man elf' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_elf:',
            ]
        ],
        'woman elf' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_elf:',
            ]
        ],
        'genie' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':genie:',
            ]
        ],
        'man genie' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_genie:',
            ]
        ],
        'woman genie' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_genie:',
            ]
        ],
        'zombie' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':zombie:',
            ]
        ],
        'man zombie' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_zombie:',
            ]
        ],
        'woman zombie' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_zombie:',
            ]
        ],
        'baby angel: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':angel_tone1:',
            ]
        ],
        'baby angel: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':angel_tone2:',
            ]
        ],
        'baby angel: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':angel_tone3:',
            ]
        ],
        'baby angel: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':angel_tone4:',
            ]
        ],
        'baby angel: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':angel_tone5:',
            ]
        ],
        'Santa Claus: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':santa_tone1:',
            ]
        ],
        'Santa Claus: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':santa_tone2:',
            ]
        ],
        'Santa Claus: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':santa_tone3:',
            ]
        ],
        'Santa Claus: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':santa_tone4:',
            ]
        ],
        'Santa Claus: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':santa_tone5:',
            ]
        ],
        'Mrs. Claus: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mrs_claus_tone1:',
                ':mother_christmas_tone1:',
            ]
        ],
        'Mrs. Claus: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mrs_claus_tone2:',
                ':mother_christmas_tone2:',
            ]
        ],
        'Mrs. Claus: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mrs_claus_tone3:',
                ':mother_christmas_tone3:',
            ]
        ],
        'Mrs. Claus: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mrs_claus_tone4:',
                ':mother_christmas_tone4:',
            ]
        ],
        'Mrs. Claus: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mrs_claus_tone5:',
                ':mother_christmas_tone5:',
            ]
        ],
        'superhero: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':superhero_tone1:',
                ':superhero_light_skin_tone:',
            ]
        ],
        'superhero: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':superhero_tone2:',
                ':superhero_medium_light_skin_tone:',
            ]
        ],
        'superhero: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':superhero_tone3:',
                ':superhero_medium_skin_tone:',
            ]
        ],
        'superhero: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':superhero_tone4:',
                ':superhero_medium_dark_skin_tone:',
            ]
        ],
        'superhero: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':superhero_tone5:',
                ':superhero_dark_skin_tone:',
            ]
        ],
        'man superhero: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_superhero_tone1:',
                ':man_superhero_light_skin_tone:',
            ]
        ],
        'man superhero: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_superhero_tone2:',
                ':man_superhero_medium_light_skin_tone:',
            ]
        ],
        'man superhero: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_superhero_tone3:',
                ':man_superhero_medium_skin_tone:',
            ]
        ],
        'man superhero: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_superhero_tone4:',
                ':man_superhero_medium_dark_skin_tone:',
            ]
        ],
        'man superhero: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_superhero_tone5:',
                ':man_superhero_dark_skin_tone:',
            ]
        ],
        'woman superhero: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_superhero_tone1:',
                ':woman_superhero_light_skin_tone:',
            ]
        ],
        'woman superhero: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_superhero_tone2:',
                ':woman_superhero_medium_light_skin_tone:',
            ]
        ],
        'woman superhero: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_superhero_tone3:',
                ':woman_superhero_medium_skin_tone:',
            ]
        ],
        'woman superhero: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_superhero_tone4:',
                ':woman_superhero_medium_dark_skin_tone:',
            ]
        ],
        'woman superhero: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_superhero_tone5:',
                ':woman_superhero_dark_skin_tone:',
            ]
        ],
        'supervillain: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':supervillain_tone1:',
                ':supervillain_light_skin_tone:',
            ]
        ],
        'supervillain: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':supervillain_tone2:',
                ':supervillain_medium_light_skin_tone:',
            ]
        ],
        'supervillain: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':supervillain_tone3:',
                ':supervillain_medium_skin_tone:',
            ]
        ],
        'supervillain: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':supervillain_tone4:',
                ':supervillain_medium_dark_skin_tone:',
            ]
        ],
        'supervillain: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':supervillain_tone5:',
                ':supervillain_dark_skin_tone:',
            ]
        ],
        'man supervillain: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_supervillain_tone1:',
                ':man_supervillain_light_skin_tone:',
            ]
        ],
        'man supervillain: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_supervillain_tone2:',
                ':man_supervillain_medium_light_skin_tone:',
            ]
        ],
        'man supervillain: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_supervillain_tone3:',
                ':man_supervillain_medium_skin_tone:',
            ]
        ],
        'man supervillain: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_supervillain_tone4:',
                ':man_supervillain_medium_dark_skin_tone:',
            ]
        ],
        'man supervillain: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_supervillain_tone5:',
                ':man_supervillain_dark_skin_tone:',
            ]
        ],
        'woman supervillain: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_supervillain_tone1:',
                ':woman_supervillain_light_skin_tone:',
            ]
        ],
        'woman supervillain: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_supervillain_tone2:',
                ':woman_supervillain_medium_light_skin_tone:',
            ]
        ],
        'woman supervillain: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_supervillain_tone3:',
                ':woman_supervillain_medium_skin_tone:',
            ]
        ],
        'woman supervillain: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_supervillain_tone4:',
                ':woman_supervillain_medium_dark_skin_tone:',
            ]
        ],
        'woman supervillain: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_supervillain_tone5:',
                ':woman_supervillain_dark_skin_tone:',
            ]
        ],
        'mage: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mage_tone1:',
                ':mage_light_skin_tone:',
            ]
        ],
        'mage: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mage_tone2:',
                ':mage_medium_light_skin_tone:',
            ]
        ],
        'mage: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mage_tone3:',
                ':mage_medium_skin_tone:',
            ]
        ],
        'mage: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mage_tone4:',
                ':mage_medium_dark_skin_tone:',
            ]
        ],
        'mage: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mage_tone5:',
                ':mage_dark_skin_tone:',
            ]
        ],
        'man mage: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_mage_tone1:',
                ':man_mage_light_skin_tone:',
            ]
        ],
        'man mage: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_mage_tone2:',
                ':man_mage_medium_light_skin_tone:',
            ]
        ],
        'man mage: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_mage_tone3:',
                ':man_mage_medium_skin_tone:',
            ]
        ],
        'man mage: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_mage_tone4:',
                ':man_mage_medium_dark_skin_tone:',
            ]
        ],
        'man mage: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_mage_tone5:',
                ':man_mage_dark_skin_tone:',
            ]
        ],
        'woman mage: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_mage_tone1:',
                ':woman_mage_light_skin_tone:',
            ]
        ],
        'woman mage: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_mage_tone2:',
                ':woman_mage_medium_light_skin_tone:',
            ]
        ],
        'woman mage: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_mage_tone3:',
                ':woman_mage_medium_skin_tone:',
            ]
        ],
        'woman mage: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_mage_tone4:',
                ':woman_mage_medium_dark_skin_tone:',
            ]
        ],
        'woman mage: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_mage_tone5:',
                ':woman_mage_dark_skin_tone:',
            ]
        ],
        'fairy: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':fairy_tone1:',
                ':fairy_light_skin_tone:',
            ]
        ],
        'fairy: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':fairy_tone2:',
                ':fairy_medium_light_skin_tone:',
            ]
        ],
        'fairy: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':fairy_tone3:',
                ':fairy_medium_skin_tone:',
            ]
        ],
        'fairy: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':fairy_tone4:',
                ':fairy_medium_dark_skin_tone:',
            ]
        ],
        'fairy: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':fairy_tone5:',
                ':fairy_dark_skin_tone:',
            ]
        ],
        'man fairy: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_fairy_tone1:',
                ':man_fairy_light_skin_tone:',
            ]
        ],
        'man fairy: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_fairy_tone2:',
                ':man_fairy_medium_light_skin_tone:',
            ]
        ],
        'man fairy: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_fairy_tone3:',
                ':man_fairy_medium_skin_tone:',
            ]
        ],
        'man fairy: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_fairy_tone4:',
                ':man_fairy_medium_dark_skin_tone:',
            ]
        ],
        'man fairy: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_fairy_tone5:',
                ':man_fairy_dark_skin_tone:',
            ]
        ],
        'woman fairy: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_fairy_tone1:',
                ':woman_fairy_light_skin_tone:',
            ]
        ],
        'woman fairy: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_fairy_tone2:',
                ':woman_fairy_medium_light_skin_tone:',
            ]
        ],
        'woman fairy: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_fairy_tone3:',
                ':woman_fairy_medium_skin_tone:',
            ]
        ],
        'woman fairy: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_fairy_tone4:',
                ':woman_fairy_medium_dark_skin_tone:',
            ]
        ],
        'woman fairy: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_fairy_tone5:',
                ':woman_fairy_dark_skin_tone:',
            ]
        ],
        'vampire: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':vampire_tone1:',
                ':vampire_light_skin_tone:',
            ]
        ],
        'vampire: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':vampire_tone2:',
                ':vampire_medium_light_skin_tone:',
            ]
        ],
        'vampire: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':vampire_tone3:',
                ':vampire_medium_skin_tone:',
            ]
        ],
        'vampire: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':vampire_tone4:',
                ':vampire_medium_dark_skin_tone:',
            ]
        ],
        'vampire: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':vampire_tone5:',
                ':vampire_dark_skin_tone:',
            ]
        ],
        'man vampire: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_vampire_tone1:',
                ':man_vampire_light_skin_tone:',
            ]
        ],
        'man vampire: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_vampire_tone2:',
                ':man_vampire_medium_light_skin_tone:',
            ]
        ],
        'man vampire: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_vampire_tone3:',
                ':man_vampire_medium_skin_tone:',
            ]
        ],
        'man vampire: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_vampire_tone4:',
                ':man_vampire_medium_dark_skin_tone:',
            ]
        ],
        'man vampire: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_vampire_tone5:',
                ':man_vampire_dark_skin_tone:',
            ]
        ],
        'woman vampire: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_vampire_tone1:',
                ':woman_vampire_light_skin_tone:',
            ]
        ],
        'woman vampire: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_vampire_tone2:',
                ':woman_vampire_medium_light_skin_tone:',
            ]
        ],
        'woman vampire: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_vampire_tone3:',
                ':woman_vampire_medium_skin_tone:',
            ]
        ],
        'woman vampire: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_vampire_tone4:',
                ':woman_vampire_medium_dark_skin_tone:',
            ]
        ],
        'woman vampire: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_vampire_tone5:',
                ':woman_vampire_dark_skin_tone:',
            ]
        ],
        'merperson: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merperson_tone1:',
                ':merperson_light_skin_tone:',
            ]
        ],
        'merperson: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merperson_tone2:',
                ':merperson_medium_light_skin_tone:',
            ]
        ],
        'merperson: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merperson_tone3:',
                ':merperson_medium_skin_tone:',
            ]
        ],
        'merperson: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merperson_tone4:',
                ':merperson_medium_dark_skin_tone:',
            ]
        ],
        'merperson: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merperson_tone5:',
                ':merperson_dark_skin_tone:',
            ]
        ],
        'merman: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merman_tone1:',
                ':merman_light_skin_tone:',
            ]
        ],
        'merman: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merman_tone2:',
                ':merman_medium_light_skin_tone:',
            ]
        ],
        'merman: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merman_tone3:',
                ':merman_medium_skin_tone:',
            ]
        ],
        'merman: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merman_tone4:',
                ':merman_medium_dark_skin_tone:',
            ]
        ],
        'merman: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':merman_tone5:',
                ':merman_dark_skin_tone:',
            ]
        ],
        'mermaid: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mermaid_tone1:',
                ':mermaid_light_skin_tone:',
            ]
        ],
        'mermaid: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mermaid_tone2:',
                ':mermaid_medium_light_skin_tone:',
            ]
        ],
        'mermaid: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mermaid_tone3:',
                ':mermaid_medium_skin_tone:',
            ]
        ],
        'mermaid: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mermaid_tone4:',
                ':mermaid_medium_dark_skin_tone:',
            ]
        ],
        'mermaid: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':mermaid_tone5:',
                ':mermaid_dark_skin_tone:',
            ]
        ],
        'elf: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':elf_tone1:',
                ':elf_light_skin_tone:',
            ]
        ],
        'elf: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':elf_tone2:',
                ':elf_medium_light_skin_tone:',
            ]
        ],
        'elf: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':elf_tone3:',
                ':elf_medium_skin_tone:',
            ]
        ],
        'elf: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':elf_tone4:',
                ':elf_medium_dark_skin_tone:',
            ]
        ],
        'elf: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':elf_tone5:',
                ':elf_dark_skin_tone:',
            ]
        ],
        'man elf: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_elf_tone1:',
                ':man_elf_light_skin_tone:',
            ]
        ],
        'man elf: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_elf_tone2:',
                ':man_elf_medium_light_skin_tone:',
            ]
        ],
        'man elf: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_elf_tone3:',
                ':man_elf_medium_skin_tone:',
            ]
        ],
        'man elf: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_elf_tone4:',
                ':man_elf_medium_dark_skin_tone:',
            ]
        ],
        'man elf: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':man_elf_tone5:',
                ':man_elf_dark_skin_tone:',
            ]
        ],
        'woman elf: light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_elf_tone1:',
                ':woman_elf_light_skin_tone:',
            ]
        ],
        'woman elf: medium-light skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_elf_tone2:',
                ':woman_elf_medium_light_skin_tone:',
            ]
        ],
        'woman elf: medium skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_elf_tone3:',
                ':woman_elf_medium_skin_tone:',
            ]
        ],
        'woman elf: medium-dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_elf_tone4:',
                ':woman_elf_medium_dark_skin_tone:',
            ]
        ],
        'woman elf: dark skin tone' => [
            'parent' => 'person-fantasy',
            'children' => null,
            'aliases' => [
                ':woman_elf_tone5:',
                ':woman_elf_dark_skin_tone:',
            ]
        ],
        'person getting massage' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage:',
                ':massage:',
            ]
        ],
        'man getting massage' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_face_massage:',
            ]
        ],
        'woman getting massage' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_face_massage:',
            ]
        ],
        'person getting haircut' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_haircut:',
                ':haircut:',
            ]
        ],
        'man getting haircut' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_haircut:',
            ]
        ],
        'woman getting haircut' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_haircut:',
            ]
        ],
        'person walking' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking:',
                ':walking:',
            ]
        ],
        'man walking' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_walking:',
            ]
        ],
        'woman walking' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_walking:',
            ]
        ],
        'person standing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_standing:',
            ]
        ],
        'man standing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_standing:',
            ]
        ],
        'woman standing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_standing:',
            ]
        ],
        'person kneeling' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_kneeling:',
            ]
        ],
        'man kneeling' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_kneeling:',
            ]
        ],
        'woman kneeling' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_kneeling:',
            ]
        ],
        'man with probing cane' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_with_probing_cane:',
            ]
        ],
        'woman with probing cane' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_with_probing_cane:',
            ]
        ],
        'man in motorized wheelchair' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_motorized_wheelchair:',
            ]
        ],
        'woman in motorized wheelchair' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_motorized_wheelchair:',
            ]
        ],
        'man in manual wheelchair' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_manual_wheelchair:',
            ]
        ],
        'woman in manual wheelchair' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_manual_wheelchair:',
            ]
        ],
        'person running' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_running:',
                ':runner:',
            ]
        ],
        'man running' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_running:',
            ]
        ],
        'woman running' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_running:',
            ]
        ],
        'woman dancing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer:',
            ]
        ],
        'man dancing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_dancing:',
                ':male_dancer:',
            ]
        ],
        'man in suit levitating' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':levitate:',
                ':man_in_business_suit_levitating:',
            ]
        ],
        'people with bunny ears' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':people_with_bunny_ears_partying:',
                ':dancers:',
            ]
        ],
        'men with bunny ears' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':men_with_bunny_ears_partying:',
            ]
        ],
        'women with bunny ears' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':women_with_bunny_ears_partying:',
            ]
        ],
        'person in steamy room' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_in_steamy_room:',
            ]
        ],
        'man in steamy room' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_steamy_room:',
            ]
        ],
        'woman in steamy room' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_steamy_room:',
            ]
        ],
        'person climbing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_climbing:',
            ]
        ],
        'man climbing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_climbing:',
            ]
        ],
        'woman climbing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_climbing:',
            ]
        ],
        'person getting massage: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage_tone1:',
                ':massage_tone1:',
            ]
        ],
        'person getting massage: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage_tone2:',
                ':massage_tone2:',
            ]
        ],
        'person getting massage: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage_tone3:',
                ':massage_tone3:',
            ]
        ],
        'person getting massage: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage_tone4:',
                ':massage_tone4:',
            ]
        ],
        'person getting massage: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage_tone5:',
                ':massage_tone5:',
            ]
        ],
        'man getting massage: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_face_massage_tone1:',
                ':man_getting_face_massage_light_skin_tone:',
            ]
        ],
        'man getting massage: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_face_massage_tone2:',
                ':man_getting_face_massage_medium_light_skin_tone:',
            ]
        ],
        'man getting massage: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_face_massage_tone3:',
                ':man_getting_face_massage_medium_skin_tone:',
            ]
        ],
        'man getting massage: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_face_massage_tone4:',
                ':man_getting_face_massage_medium_dark_skin_tone:',
            ]
        ],
        'man getting massage: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_face_massage_tone5:',
                ':man_getting_face_massage_dark_skin_tone:',
            ]
        ],
        'woman getting massage: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_face_massage_tone1:',
                ':woman_getting_face_massage_light_skin_tone:',
            ]
        ],
        'woman getting massage: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_face_massage_tone2:',
                ':woman_getting_face_massage_medium_light_skin_tone:',
            ]
        ],
        'woman getting massage: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_face_massage_tone3:',
                ':woman_getting_face_massage_medium_skin_tone:',
            ]
        ],
        'woman getting massage: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_face_massage_tone4:',
                ':woman_getting_face_massage_medium_dark_skin_tone:',
            ]
        ],
        'woman getting massage: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_face_massage_tone5:',
                ':woman_getting_face_massage_dark_skin_tone:',
            ]
        ],
        'person getting haircut: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_haircut_tone1:',
                ':haircut_tone1:',
            ]
        ],
        'person getting haircut: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_haircut_tone2:',
                ':haircut_tone2:',
            ]
        ],
        'person getting haircut: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_haircut_tone3:',
                ':haircut_tone3:',
            ]
        ],
        'person getting haircut: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_haircut_tone4:',
                ':haircut_tone4:',
            ]
        ],
        'person getting haircut: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_haircut_tone5:',
                ':haircut_tone5:',
            ]
        ],
        'man getting haircut: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_haircut_tone1:',
                ':man_getting_haircut_light_skin_tone:',
            ]
        ],
        'man getting haircut: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_haircut_tone2:',
                ':man_getting_haircut_medium_light_skin_tone:',
            ]
        ],
        'man getting haircut: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_haircut_tone3:',
                ':man_getting_haircut_medium_skin_tone:',
            ]
        ],
        'man getting haircut: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_haircut_tone4:',
                ':man_getting_haircut_medium_dark_skin_tone:',
            ]
        ],
        'man getting haircut: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_getting_haircut_tone5:',
                ':man_getting_haircut_dark_skin_tone:',
            ]
        ],
        'woman getting haircut: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_haircut_tone1:',
                ':woman_getting_haircut_light_skin_tone:',
            ]
        ],
        'woman getting haircut: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_haircut_tone2:',
                ':woman_getting_haircut_medium_light_skin_tone:',
            ]
        ],
        'woman getting haircut: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_haircut_tone3:',
                ':woman_getting_haircut_medium_skin_tone:',
            ]
        ],
        'woman getting haircut: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_haircut_tone4:',
                ':woman_getting_haircut_medium_dark_skin_tone:',
            ]
        ],
        'woman getting haircut: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_getting_haircut_tone5:',
                ':woman_getting_haircut_dark_skin_tone:',
            ]
        ],
        'person walking: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking_tone1:',
                ':walking_tone1:',
            ]
        ],
        'person walking: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking_tone2:',
                ':walking_tone2:',
            ]
        ],
        'person walking: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking_tone3:',
                ':walking_tone3:',
            ]
        ],
        'person walking: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking_tone4:',
                ':walking_tone4:',
            ]
        ],
        'person walking: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking_tone5:',
                ':walking_tone5:',
            ]
        ],
        'man walking: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_walking_tone1:',
                ':man_walking_light_skin_tone:',
            ]
        ],
        'man walking: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_walking_tone2:',
                ':man_walking_medium_light_skin_tone:',
            ]
        ],
        'man walking: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_walking_tone3:',
                ':man_walking_medium_skin_tone:',
            ]
        ],
        'man walking: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_walking_tone4:',
                ':man_walking_medium_dark_skin_tone:',
            ]
        ],
        'man walking: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_walking_tone5:',
                ':man_walking_dark_skin_tone:',
            ]
        ],
        'woman walking: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_walking_tone1:',
                ':woman_walking_light_skin_tone:',
            ]
        ],
        'woman walking: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_walking_tone2:',
                ':woman_walking_medium_light_skin_tone:',
            ]
        ],
        'woman walking: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_walking_tone3:',
                ':woman_walking_medium_skin_tone:',
            ]
        ],
        'woman walking: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_walking_tone4:',
                ':woman_walking_medium_dark_skin_tone:',
            ]
        ],
        'woman walking: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_walking_tone5:',
                ':woman_walking_dark_skin_tone:',
            ]
        ],
        'person standing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_standing_tone1:',
                ':person_standing_light_skin_tone:',
            ]
        ],
        'person standing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_standing_tone2:',
                ':person_standing_medium_light_skin_tone:',
            ]
        ],
        'person standing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_standing_tone3:',
                ':person_standing_medium_skin_tone:',
            ]
        ],
        'person standing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_standing_tone4:',
                ':person_standing_medium_dark_skin_tone:',
            ]
        ],
        'person standing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_standing_tone5:',
                ':person_standing_dark_skin_tone:',
            ]
        ],
        'man standing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_standing_tone1:',
                ':man_standing_light_skin_tone:',
            ]
        ],
        'man standing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_standing_tone2:',
                ':man_standing_medium_light_skin_tone:',
            ]
        ],
        'man standing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_standing_tone3:',
                ':man_standing_medium_skin_tone:',
            ]
        ],
        'man standing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_standing_tone4:',
                ':man_standing_medium_dark_skin_tone:',
            ]
        ],
        'man standing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_standing_tone5:',
                ':man_standing_dark_skin_tone:',
            ]
        ],
        'woman standing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_standing_tone1:',
                ':woman_standing_light_skin_tone:',
            ]
        ],
        'woman standing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_standing_tone2:',
                ':woman_standing_medium_light_skin_tone:',
            ]
        ],
        'woman standing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_standing_tone3:',
                ':woman_standing_medium_skin_tone:',
            ]
        ],
        'woman standing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_standing_tone4:',
                ':woman_standing_medium_dark_skin_tone:',
            ]
        ],
        'woman standing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_standing_tone5:',
                ':woman_standing_dark_skin_tone:',
            ]
        ],
        'person kneeling: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_kneeling_tone1:',
                ':person_kneeling_light_skin_tone:',
            ]
        ],
        'person kneeling: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_kneeling_tone2:',
                ':person_kneeling_medium_light_skin_tone:',
            ]
        ],
        'person kneeling: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_kneeling_tone3:',
                ':person_kneeling_medium_skin_tone:',
            ]
        ],
        'person kneeling: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_kneeling_tone4:',
                ':person_kneeling_medium_dark_skin_tone:',
            ]
        ],
        'person kneeling: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_kneeling_tone5:',
                ':person_kneeling_dark_skin_tone:',
            ]
        ],
        'man kneeling: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_kneeling_tone1:',
                ':man_kneeling_light_skin_tone:',
            ]
        ],
        'man kneeling: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_kneeling_tone2:',
                ':man_kneeling_medium_light_skin_tone:',
            ]
        ],
        'man kneeling: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_kneeling_tone3:',
                ':man_kneeling_medium_skin_tone:',
            ]
        ],
        'man kneeling: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_kneeling_tone4:',
                ':man_kneeling_medium_dark_skin_tone:',
            ]
        ],
        'man kneeling: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_kneeling_tone5:',
                ':man_kneeling_dark_skin_tone:',
            ]
        ],
        'woman kneeling: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_kneeling_tone1:',
                ':woman_kneeling_light_skin_tone:',
            ]
        ],
        'woman kneeling: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_kneeling_tone2:',
                ':woman_kneeling_medium_light_skin_tone:',
            ]
        ],
        'woman kneeling: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_kneeling_tone3:',
                ':woman_kneeling_medium_skin_tone:',
            ]
        ],
        'woman kneeling: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_kneeling_tone4:',
                ':woman_kneeling_medium_dark_skin_tone:',
            ]
        ],
        'woman kneeling: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_kneeling_tone5:',
                ':woman_kneeling_dark_skin_tone:',
            ]
        ],
        'man with probing cane: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_with_probing_cane_tone1:',
                ':man_with_probing_cane_light_skin_tone:',
            ]
        ],
        'man with probing cane: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_with_probing_cane_tone2:',
                ':man_with_probing_cane_medium_light_skin_tone:',
            ]
        ],
        'man with probing cane: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_with_probing_cane_tone3:',
                ':man_with_probing_cane_medium_skin_tone:',
            ]
        ],
        'man with probing cane: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_with_probing_cane_tone4:',
                ':man_with_probing_cane_medium_dark_skin_tone:',
            ]
        ],
        'man with probing cane: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_with_probing_cane_tone5:',
                ':man_with_probing_cane_dark_skin_tone:',
            ]
        ],
        'woman with probing cane: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_with_probing_cane_tone1:',
                ':woman_with_probing_cane_light_skin_tone:',
            ]
        ],
        'woman with probing cane: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_with_probing_cane_tone2:',
                ':woman_with_probing_cane_medium_light_skin_tone:',
            ]
        ],
        'woman with probing cane: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_with_probing_cane_tone3:',
                ':woman_with_probing_cane_medium_skin_tone:',
            ]
        ],
        'woman with probing cane: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_with_probing_cane_tone4:',
                ':woman_with_probing_cane_medium_dark_skin_tone:',
            ]
        ],
        'woman with probing cane: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_with_probing_cane_tone5:',
                ':woman_with_probing_cane_dark_skin_tone:',
            ]
        ],
        'man in motorized wheelchair: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_motorized_wheelchair_tone1:',
                ':man_in_motorized_wheelchair_light_skin_tone:',
            ]
        ],
        'man in motorized wheelchair: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_motorized_wheelchair_tone2:',
                ':man_in_motorized_wheelchair_medium_light_skin_tone:',
            ]
        ],
        'man in motorized wheelchair: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_motorized_wheelchair_tone3:',
                ':man_in_motorized_wheelchair_medium_skin_tone:',
            ]
        ],
        'man in motorized wheelchair: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_motorized_wheelchair_tone4:',
                ':man_in_motorized_wheelchair_medium_dark_skin_tone:',
            ]
        ],
        'man in motorized wheelchair: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_motorized_wheelchair_tone5:',
                ':man_in_motorized_wheelchair_dark_skin_tone:',
            ]
        ],
        'woman in motorized wheelchair: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_motorized_wheelchair_tone1:',
                ':woman_in_motorized_wheelchair_light_skin_tone:',
            ]
        ],
        'woman in motorized wheelchair: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_motorized_wheelchair_tone2:',
                ':woman_in_motorized_wheelchair_medium_light_skin_tone:',
            ]
        ],
        'woman in motorized wheelchair: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_motorized_wheelchair_tone3:',
                ':woman_in_motorized_wheelchair_medium_skin_tone:',
            ]
        ],
        'woman in motorized wheelchair: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_motorized_wheelchair_tone4:',
                ':woman_in_motorized_wheelchair_medium_dark_skin_tone:',
            ]
        ],
        'woman in motorized wheelchair: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_motorized_wheelchair_tone5:',
                ':woman_in_motorized_wheelchair_dark_skin_tone:',
            ]
        ],
        'man in manual wheelchair: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_manual_wheelchair_tone1:',
                ':man_in_manual_wheelchair_light_skin_tone:',
            ]
        ],
        'man in manual wheelchair: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_manual_wheelchair_tone2:',
                ':man_in_manual_wheelchair_medium_light_skin_tone:',
            ]
        ],
        'man in manual wheelchair: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_manual_wheelchair_tone3:',
                ':man_in_manual_wheelchair_medium_skin_tone:',
            ]
        ],
        'man in manual wheelchair: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_manual_wheelchair_tone4:',
                ':man_in_manual_wheelchair_medium_dark_skin_tone:',
            ]
        ],
        'man in manual wheelchair: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_manual_wheelchair_tone5:',
                ':man_in_manual_wheelchair_dark_skin_tone:',
            ]
        ],
        'woman in manual wheelchair: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_manual_wheelchair_tone1:',
                ':woman_in_manual_wheelchair_light_skin_tone:',
            ]
        ],
        'woman in manual wheelchair: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_manual_wheelchair_tone2:',
                ':woman_in_manual_wheelchair_medium_light_skin_tone:',
            ]
        ],
        'woman in manual wheelchair: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_manual_wheelchair_tone3:',
                ':woman_in_manual_wheelchair_medium_skin_tone:',
            ]
        ],
        'woman in manual wheelchair: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_manual_wheelchair_tone4:',
                ':woman_in_manual_wheelchair_medium_dark_skin_tone:',
            ]
        ],
        'woman in manual wheelchair: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_manual_wheelchair_tone5:',
                ':woman_in_manual_wheelchair_dark_skin_tone:',
            ]
        ],
        'person running: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_running_tone1:',
                ':runner_tone1:',
            ]
        ],
        'person running: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_running_tone2:',
                ':runner_tone2:',
            ]
        ],
        'person running: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_running_tone3:',
                ':runner_tone3:',
            ]
        ],
        'person running: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_running_tone4:',
                ':runner_tone4:',
            ]
        ],
        'person running: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_running_tone5:',
                ':runner_tone5:',
            ]
        ],
        'man running: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_running_tone1:',
                ':man_running_light_skin_tone:',
            ]
        ],
        'man running: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_running_tone2:',
                ':man_running_medium_light_skin_tone:',
            ]
        ],
        'man running: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_running_tone3:',
                ':man_running_medium_skin_tone:',
            ]
        ],
        'man running: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_running_tone4:',
                ':man_running_medium_dark_skin_tone:',
            ]
        ],
        'man running: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_running_tone5:',
                ':man_running_dark_skin_tone:',
            ]
        ],
        'woman running: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_running_tone1:',
                ':woman_running_light_skin_tone:',
            ]
        ],
        'woman running: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_running_tone2:',
                ':woman_running_medium_light_skin_tone:',
            ]
        ],
        'woman running: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_running_tone3:',
                ':woman_running_medium_skin_tone:',
            ]
        ],
        'woman running: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_running_tone4:',
                ':woman_running_medium_dark_skin_tone:',
            ]
        ],
        'woman running: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_running_tone5:',
                ':woman_running_dark_skin_tone:',
            ]
        ],
        'woman dancing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer_tone1:',
            ]
        ],
        'woman dancing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer_tone2:',
            ]
        ],
        'woman dancing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer_tone3:',
            ]
        ],
        'woman dancing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer_tone4:',
            ]
        ],
        'woman dancing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer_tone5:',
            ]
        ],
        'man dancing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_dancing_tone1:',
                ':male_dancer_tone1:',
            ]
        ],
        'man dancing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_dancing_tone2:',
                ':male_dancer_tone2:',
            ]
        ],
        'man dancing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_dancing_tone3:',
                ':male_dancer_tone3:',
            ]
        ],
        'man dancing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_dancing_tone4:',
                ':male_dancer_tone4:',
            ]
        ],
        'man dancing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_dancing_tone5:',
                ':male_dancer_tone5:',
            ]
        ],
        'man in suit levitating: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':levitate_tone1:',
                ':man_in_business_suit_levitating_tone1:',
                ':man_in_business_suit_levitating_light_skin_tone:',
            ]
        ],
        'man in suit levitating: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':levitate_tone2:',
                ':man_in_business_suit_levitating_tone2:',
                ':man_in_business_suit_levitating_medium_light_skin_tone:',
            ]
        ],
        'man in suit levitating: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':levitate_tone3:',
                ':man_in_business_suit_levitating_tone3:',
                ':man_in_business_suit_levitating_medium_skin_tone:',
            ]
        ],
        'man in suit levitating: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':levitate_tone4:',
                ':man_in_business_suit_levitating_tone4:',
                ':man_in_business_suit_levitating_medium_dark_skin_tone:',
            ]
        ],
        'man in suit levitating: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':levitate_tone5:',
                ':man_in_business_suit_levitating_tone5:',
                ':man_in_business_suit_levitating_dark_skin_tone:',
            ]
        ],
        'person in steamy room: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_in_steamy_room_tone1:',
                ':person_in_steamy_room_light_skin_tone:',
            ]
        ],
        'person in steamy room: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_in_steamy_room_tone2:',
                ':person_in_steamy_room_medium_light_skin_tone:',
            ]
        ],
        'person in steamy room: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_in_steamy_room_tone3:',
                ':person_in_steamy_room_medium_skin_tone:',
            ]
        ],
        'person in steamy room: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_in_steamy_room_tone4:',
                ':person_in_steamy_room_medium_dark_skin_tone:',
            ]
        ],
        'person in steamy room: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_in_steamy_room_tone5:',
                ':person_in_steamy_room_dark_skin_tone:',
            ]
        ],
        'man in steamy room: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_steamy_room_tone1:',
                ':man_in_steamy_room_light_skin_tone:',
            ]
        ],
        'man in steamy room: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_steamy_room_tone2:',
                ':man_in_steamy_room_medium_light_skin_tone:',
            ]
        ],
        'man in steamy room: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_steamy_room_tone3:',
                ':man_in_steamy_room_medium_skin_tone:',
            ]
        ],
        'man in steamy room: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_steamy_room_tone4:',
                ':man_in_steamy_room_medium_dark_skin_tone:',
            ]
        ],
        'man in steamy room: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_in_steamy_room_tone5:',
                ':man_in_steamy_room_dark_skin_tone:',
            ]
        ],
        'woman in steamy room: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_steamy_room_tone1:',
                ':woman_in_steamy_room_light_skin_tone:',
            ]
        ],
        'woman in steamy room: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_steamy_room_tone2:',
                ':woman_in_steamy_room_medium_light_skin_tone:',
            ]
        ],
        'woman in steamy room: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_steamy_room_tone3:',
                ':woman_in_steamy_room_medium_skin_tone:',
            ]
        ],
        'woman in steamy room: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_steamy_room_tone4:',
                ':woman_in_steamy_room_medium_dark_skin_tone:',
            ]
        ],
        'woman in steamy room: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_in_steamy_room_tone5:',
                ':woman_in_steamy_room_dark_skin_tone:',
            ]
        ],
        'person climbing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_climbing_tone1:',
                ':person_climbing_light_skin_tone:',
            ]
        ],
        'person climbing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_climbing_tone2:',
                ':person_climbing_medium_light_skin_tone:',
            ]
        ],
        'person climbing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_climbing_tone3:',
                ':person_climbing_medium_skin_tone:',
            ]
        ],
        'person climbing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_climbing_tone4:',
                ':person_climbing_medium_dark_skin_tone:',
            ]
        ],
        'person climbing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_climbing_tone5:',
                ':person_climbing_dark_skin_tone:',
            ]
        ],
        'man climbing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_climbing_tone1:',
                ':man_climbing_light_skin_tone:',
            ]
        ],
        'man climbing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_climbing_tone2:',
                ':man_climbing_medium_light_skin_tone:',
            ]
        ],
        'man climbing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_climbing_tone3:',
                ':man_climbing_medium_skin_tone:',
            ]
        ],
        'man climbing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_climbing_tone4:',
                ':man_climbing_medium_dark_skin_tone:',
            ]
        ],
        'man climbing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':man_climbing_tone5:',
                ':man_climbing_dark_skin_tone:',
            ]
        ],
        'woman climbing: light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_climbing_tone1:',
                ':woman_climbing_light_skin_tone:',
            ]
        ],
        'woman climbing: medium-light skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_climbing_tone2:',
                ':woman_climbing_medium_light_skin_tone:',
            ]
        ],
        'woman climbing: medium skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_climbing_tone3:',
                ':woman_climbing_medium_skin_tone:',
            ]
        ],
        'woman climbing: medium-dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_climbing_tone4:',
                ':woman_climbing_medium_dark_skin_tone:',
            ]
        ],
        'woman climbing: dark skin tone' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':woman_climbing_tone5:',
                ':woman_climbing_dark_skin_tone:',
            ]
        ],
        'person fencing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_fencing:',
                ':fencer:',
                ':fencing:',
            ]
        ],
        'horse racing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':horse_racing:',
            ]
        ],
        'skier' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':skier:',
            ]
        ],
        'snowboarder' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder:',
            ]
        ],
        'person golfing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_golfing:',
                ':golfer:',
            ]
        ],
        'man golfing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_golfing:',
            ]
        ],
        'woman golfing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_golfing:',
            ]
        ],
        'person surfing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_surfing:',
                ':surfer:',
            ]
        ],
        'man surfing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_surfing:',
            ]
        ],
        'woman surfing' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_surfing:',
            ]
        ],
        'person rowing boat' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_rowing_boat:',
                ':rowboat:',
            ]
        ],
        'man rowing boat' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_rowing_boat:',
            ]
        ],
        'woman rowing boat' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_rowing_boat:',
            ]
        ],
        'person swimming' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming:',
                ':swimmer:',
            ]
        ],
        'man swimming' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_swimming:',
            ]
        ],
        'woman swimming' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_swimming:',
            ]
        ],
        'person bouncing ball' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_bouncing_ball:',
                ':basketball_player:',
                ':person_with_ball:',
            ]
        ],
        'man bouncing ball' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_bouncing_ball:',
            ]
        ],
        'woman bouncing ball' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_bouncing_ball:',
            ]
        ],
        'person lifting weights' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_lifting_weights:',
                ':lifter:',
                ':weight_lifter:',
            ]
        ],
        'man lifting weights' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_lifting_weights:',
            ]
        ],
        'woman lifting weights' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_lifting_weights:',
            ]
        ],
        'person biking' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_biking:',
                ':bicyclist:',
            ]
        ],
        'man biking' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_biking:',
            ]
        ],
        'woman biking' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_biking:',
            ]
        ],
        'person mountain biking' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_mountain_biking:',
                ':mountain_bicyclist:',
            ]
        ],
        'man mountain biking' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_mountain_biking:',
            ]
        ],
        'woman mountain biking' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_mountain_biking:',
            ]
        ],
        'person cartwheeling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_doing_cartwheel:',
                ':cartwheel:',
            ]
        ],
        'man cartwheeling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_cartwheeling:',
            ]
        ],
        'woman cartwheeling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_cartwheeling:',
            ]
        ],
        'people wrestling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':people_wrestling:',
                ':wrestlers:',
                ':wrestling:',
            ]
        ],
        'men wrestling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':men_wrestling:',
            ]
        ],
        'women wrestling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':women_wrestling:',
            ]
        ],
        'person playing water polo' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_water_polo:',
                ':water_polo:',
            ]
        ],
        'man playing water polo' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_water_polo:',
            ]
        ],
        'woman playing water polo' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_water_polo:',
            ]
        ],
        'person playing handball' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_handball:',
                ':handball:',
            ]
        ],
        'man playing handball' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_handball:',
            ]
        ],
        'woman playing handball' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_handball:',
            ]
        ],
        'person juggling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_juggling:',
                ':juggling:',
                ':juggler:',
            ]
        ],
        'man juggling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_juggling:',
            ]
        ],
        'woman juggling' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_juggling:',
            ]
        ],
        'horse racing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':horse_racing_tone1:',
            ]
        ],
        'horse racing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':horse_racing_tone2:',
            ]
        ],
        'horse racing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':horse_racing_tone3:',
            ]
        ],
        'horse racing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':horse_racing_tone4:',
            ]
        ],
        'horse racing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':horse_racing_tone5:',
            ]
        ],
        'snowboarder: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder_tone1:',
                ':snowboarder_light_skin_tone:',
            ]
        ],
        'snowboarder: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder_tone2:',
                ':snowboarder_medium_light_skin_tone:',
            ]
        ],
        'snowboarder: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder_tone3:',
                ':snowboarder_medium_skin_tone:',
            ]
        ],
        'snowboarder: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder_tone4:',
                ':snowboarder_medium_dark_skin_tone:',
            ]
        ],
        'snowboarder: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder_tone5:',
                ':snowboarder_dark_skin_tone:',
            ]
        ],
        'person golfing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_golfing_tone1:',
                ':person_golfing_light_skin_tone:',
            ]
        ],
        'person golfing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_golfing_tone2:',
                ':person_golfing_medium_light_skin_tone:',
            ]
        ],
        'person golfing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_golfing_tone3:',
                ':person_golfing_medium_skin_tone:',
            ]
        ],
        'person golfing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_golfing_tone4:',
                ':person_golfing_medium_dark_skin_tone:',
            ]
        ],
        'person golfing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_golfing_tone5:',
                ':person_golfing_dark_skin_tone:',
            ]
        ],
        'man golfing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_golfing_tone1:',
                ':man_golfing_light_skin_tone:',
            ]
        ],
        'man golfing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_golfing_tone2:',
                ':man_golfing_medium_light_skin_tone:',
            ]
        ],
        'man golfing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_golfing_tone3:',
                ':man_golfing_medium_skin_tone:',
            ]
        ],
        'man golfing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_golfing_tone4:',
                ':man_golfing_medium_dark_skin_tone:',
            ]
        ],
        'man golfing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_golfing_tone5:',
                ':man_golfing_dark_skin_tone:',
            ]
        ],
        'woman golfing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_golfing_tone1:',
                ':woman_golfing_light_skin_tone:',
            ]
        ],
        'woman golfing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_golfing_tone2:',
                ':woman_golfing_medium_light_skin_tone:',
            ]
        ],
        'woman golfing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_golfing_tone3:',
                ':woman_golfing_medium_skin_tone:',
            ]
        ],
        'woman golfing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_golfing_tone4:',
                ':woman_golfing_medium_dark_skin_tone:',
            ]
        ],
        'woman golfing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_golfing_tone5:',
                ':woman_golfing_dark_skin_tone:',
            ]
        ],
        'person surfing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_surfing_tone1:',
                ':surfer_tone1:',
            ]
        ],
        'person surfing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_surfing_tone2:',
                ':surfer_tone2:',
            ]
        ],
        'person surfing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_surfing_tone3:',
                ':surfer_tone3:',
            ]
        ],
        'person surfing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_surfing_tone4:',
                ':surfer_tone4:',
            ]
        ],
        'person surfing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_surfing_tone5:',
                ':surfer_tone5:',
            ]
        ],
        'man surfing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_surfing_tone1:',
                ':man_surfing_light_skin_tone:',
            ]
        ],
        'man surfing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_surfing_tone2:',
                ':man_surfing_medium_light_skin_tone:',
            ]
        ],
        'man surfing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_surfing_tone3:',
                ':man_surfing_medium_skin_tone:',
            ]
        ],
        'man surfing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_surfing_tone4:',
                ':man_surfing_medium_dark_skin_tone:',
            ]
        ],
        'man surfing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_surfing_tone5:',
                ':man_surfing_dark_skin_tone:',
            ]
        ],
        'woman surfing: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_surfing_tone1:',
                ':woman_surfing_light_skin_tone:',
            ]
        ],
        'woman surfing: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_surfing_tone2:',
                ':woman_surfing_medium_light_skin_tone:',
            ]
        ],
        'woman surfing: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_surfing_tone3:',
                ':woman_surfing_medium_skin_tone:',
            ]
        ],
        'woman surfing: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_surfing_tone4:',
                ':woman_surfing_medium_dark_skin_tone:',
            ]
        ],
        'woman surfing: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_surfing_tone5:',
                ':woman_surfing_dark_skin_tone:',
            ]
        ],
        'person rowing boat: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_rowing_boat_tone1:',
                ':rowboat_tone1:',
            ]
        ],
        'person rowing boat: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_rowing_boat_tone2:',
                ':rowboat_tone2:',
            ]
        ],
        'person rowing boat: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_rowing_boat_tone3:',
                ':rowboat_tone3:',
            ]
        ],
        'person rowing boat: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_rowing_boat_tone4:',
                ':rowboat_tone4:',
            ]
        ],
        'person rowing boat: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_rowing_boat_tone5:',
                ':rowboat_tone5:',
            ]
        ],
        'man rowing boat: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_rowing_boat_tone1:',
                ':man_rowing_boat_light_skin_tone:',
            ]
        ],
        'man rowing boat: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_rowing_boat_tone2:',
                ':man_rowing_boat_medium_light_skin_tone:',
            ]
        ],
        'man rowing boat: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_rowing_boat_tone3:',
                ':man_rowing_boat_medium_skin_tone:',
            ]
        ],
        'man rowing boat: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_rowing_boat_tone4:',
                ':man_rowing_boat_medium_dark_skin_tone:',
            ]
        ],
        'man rowing boat: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_rowing_boat_tone5:',
                ':man_rowing_boat_dark_skin_tone:',
            ]
        ],
        'woman rowing boat: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_rowing_boat_tone1:',
                ':woman_rowing_boat_light_skin_tone:',
            ]
        ],
        'woman rowing boat: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_rowing_boat_tone2:',
                ':woman_rowing_boat_medium_light_skin_tone:',
            ]
        ],
        'woman rowing boat: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_rowing_boat_tone3:',
                ':woman_rowing_boat_medium_skin_tone:',
            ]
        ],
        'woman rowing boat: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_rowing_boat_tone4:',
                ':woman_rowing_boat_medium_dark_skin_tone:',
            ]
        ],
        'woman rowing boat: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_rowing_boat_tone5:',
                ':woman_rowing_boat_dark_skin_tone:',
            ]
        ],
        'person swimming: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming_tone1:',
                ':swimmer_tone1:',
            ]
        ],
        'person swimming: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming_tone2:',
                ':swimmer_tone2:',
            ]
        ],
        'person swimming: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming_tone3:',
                ':swimmer_tone3:',
            ]
        ],
        'person swimming: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming_tone4:',
                ':swimmer_tone4:',
            ]
        ],
        'person swimming: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming_tone5:',
                ':swimmer_tone5:',
            ]
        ],
        'man swimming: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_swimming_tone1:',
                ':man_swimming_light_skin_tone:',
            ]
        ],
        'man swimming: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_swimming_tone2:',
                ':man_swimming_medium_light_skin_tone:',
            ]
        ],
        'man swimming: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_swimming_tone3:',
                ':man_swimming_medium_skin_tone:',
            ]
        ],
        'man swimming: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_swimming_tone4:',
                ':man_swimming_medium_dark_skin_tone:',
            ]
        ],
        'man swimming: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_swimming_tone5:',
                ':man_swimming_dark_skin_tone:',
            ]
        ],
        'woman swimming: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_swimming_tone1:',
                ':woman_swimming_light_skin_tone:',
            ]
        ],
        'woman swimming: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_swimming_tone2:',
                ':woman_swimming_medium_light_skin_tone:',
            ]
        ],
        'woman swimming: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_swimming_tone3:',
                ':woman_swimming_medium_skin_tone:',
            ]
        ],
        'woman swimming: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_swimming_tone4:',
                ':woman_swimming_medium_dark_skin_tone:',
            ]
        ],
        'woman swimming: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_swimming_tone5:',
                ':woman_swimming_dark_skin_tone:',
            ]
        ],
        'person bouncing ball: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_bouncing_ball_tone1:',
                ':basketball_player_tone1:',
                ':person_with_ball_tone1:',
            ]
        ],
        'person bouncing ball: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_bouncing_ball_tone2:',
                ':basketball_player_tone2:',
                ':person_with_ball_tone2:',
            ]
        ],
        'person bouncing ball: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_bouncing_ball_tone3:',
                ':basketball_player_tone3:',
                ':person_with_ball_tone3:',
            ]
        ],
        'person bouncing ball: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_bouncing_ball_tone4:',
                ':basketball_player_tone4:',
                ':person_with_ball_tone4:',
            ]
        ],
        'person bouncing ball: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_bouncing_ball_tone5:',
                ':basketball_player_tone5:',
                ':person_with_ball_tone5:',
            ]
        ],
        'man bouncing ball: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_bouncing_ball_tone1:',
                ':man_bouncing_ball_light_skin_tone:',
            ]
        ],
        'man bouncing ball: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_bouncing_ball_tone2:',
                ':man_bouncing_ball_medium_light_skin_tone:',
            ]
        ],
        'man bouncing ball: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_bouncing_ball_tone3:',
                ':man_bouncing_ball_medium_skin_tone:',
            ]
        ],
        'man bouncing ball: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_bouncing_ball_tone4:',
                ':man_bouncing_ball_medium_dark_skin_tone:',
            ]
        ],
        'man bouncing ball: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_bouncing_ball_tone5:',
                ':man_bouncing_ball_dark_skin_tone:',
            ]
        ],
        'woman bouncing ball: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_bouncing_ball_tone1:',
                ':woman_bouncing_ball_light_skin_tone:',
            ]
        ],
        'woman bouncing ball: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_bouncing_ball_tone2:',
                ':woman_bouncing_ball_medium_light_skin_tone:',
            ]
        ],
        'woman bouncing ball: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_bouncing_ball_tone3:',
                ':woman_bouncing_ball_medium_skin_tone:',
            ]
        ],
        'woman bouncing ball: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_bouncing_ball_tone4:',
                ':woman_bouncing_ball_medium_dark_skin_tone:',
            ]
        ],
        'woman bouncing ball: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_bouncing_ball_tone5:',
                ':woman_bouncing_ball_dark_skin_tone:',
            ]
        ],
        'person lifting weights: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_lifting_weights_tone1:',
                ':lifter_tone1:',
                ':weight_lifter_tone1:',
            ]
        ],
        'person lifting weights: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_lifting_weights_tone2:',
                ':lifter_tone2:',
                ':weight_lifter_tone2:',
            ]
        ],
        'person lifting weights: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_lifting_weights_tone3:',
                ':lifter_tone3:',
                ':weight_lifter_tone3:',
            ]
        ],
        'person lifting weights: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_lifting_weights_tone4:',
                ':lifter_tone4:',
                ':weight_lifter_tone4:',
            ]
        ],
        'person lifting weights: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_lifting_weights_tone5:',
                ':lifter_tone5:',
                ':weight_lifter_tone5:',
            ]
        ],
        'man lifting weights: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_lifting_weights_tone1:',
                ':man_lifting_weights_light_skin_tone:',
            ]
        ],
        'man lifting weights: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_lifting_weights_tone2:',
                ':man_lifting_weights_medium_light_skin_tone:',
            ]
        ],
        'man lifting weights: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_lifting_weights_tone3:',
                ':man_lifting_weights_medium_skin_tone:',
            ]
        ],
        'man lifting weights: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_lifting_weights_tone4:',
                ':man_lifting_weights_medium_dark_skin_tone:',
            ]
        ],
        'man lifting weights: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_lifting_weights_tone5:',
                ':man_lifting_weights_dark_skin_tone:',
            ]
        ],
        'woman lifting weights: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_lifting_weights_tone1:',
                ':woman_lifting_weights_light_skin_tone:',
            ]
        ],
        'woman lifting weights: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_lifting_weights_tone2:',
                ':woman_lifting_weights_medium_light_skin_tone:',
            ]
        ],
        'woman lifting weights: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_lifting_weights_tone3:',
                ':woman_lifting_weights_medium_skin_tone:',
            ]
        ],
        'woman lifting weights: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_lifting_weights_tone4:',
                ':woman_lifting_weights_medium_dark_skin_tone:',
            ]
        ],
        'woman lifting weights: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_lifting_weights_tone5:',
                ':woman_lifting_weights_dark_skin_tone:',
            ]
        ],
        'person biking: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_biking_tone1:',
                ':bicyclist_tone1:',
            ]
        ],
        'person biking: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_biking_tone2:',
                ':bicyclist_tone2:',
            ]
        ],
        'person biking: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_biking_tone3:',
                ':bicyclist_tone3:',
            ]
        ],
        'person biking: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_biking_tone4:',
                ':bicyclist_tone4:',
            ]
        ],
        'person biking: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_biking_tone5:',
                ':bicyclist_tone5:',
            ]
        ],
        'man biking: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_biking_tone1:',
                ':man_biking_light_skin_tone:',
            ]
        ],
        'man biking: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_biking_tone2:',
                ':man_biking_medium_light_skin_tone:',
            ]
        ],
        'man biking: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_biking_tone3:',
                ':man_biking_medium_skin_tone:',
            ]
        ],
        'man biking: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_biking_tone4:',
                ':man_biking_medium_dark_skin_tone:',
            ]
        ],
        'man biking: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_biking_tone5:',
                ':man_biking_dark_skin_tone:',
            ]
        ],
        'woman biking: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_biking_tone1:',
                ':woman_biking_light_skin_tone:',
            ]
        ],
        'woman biking: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_biking_tone2:',
                ':woman_biking_medium_light_skin_tone:',
            ]
        ],
        'woman biking: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_biking_tone3:',
                ':woman_biking_medium_skin_tone:',
            ]
        ],
        'woman biking: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_biking_tone4:',
                ':woman_biking_medium_dark_skin_tone:',
            ]
        ],
        'woman biking: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_biking_tone5:',
                ':woman_biking_dark_skin_tone:',
            ]
        ],
        'person mountain biking: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_mountain_biking_tone1:',
                ':mountain_bicyclist_tone1:',
            ]
        ],
        'person mountain biking: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_mountain_biking_tone2:',
                ':mountain_bicyclist_tone2:',
            ]
        ],
        'person mountain biking: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_mountain_biking_tone3:',
                ':mountain_bicyclist_tone3:',
            ]
        ],
        'person mountain biking: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_mountain_biking_tone4:',
                ':mountain_bicyclist_tone4:',
            ]
        ],
        'person mountain biking: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_mountain_biking_tone5:',
                ':mountain_bicyclist_tone5:',
            ]
        ],
        'man mountain biking: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_mountain_biking_tone1:',
                ':man_mountain_biking_light_skin_tone:',
            ]
        ],
        'man mountain biking: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_mountain_biking_tone2:',
                ':man_mountain_biking_medium_light_skin_tone:',
            ]
        ],
        'man mountain biking: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_mountain_biking_tone3:',
                ':man_mountain_biking_medium_skin_tone:',
            ]
        ],
        'man mountain biking: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_mountain_biking_tone4:',
                ':man_mountain_biking_medium_dark_skin_tone:',
            ]
        ],
        'man mountain biking: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_mountain_biking_tone5:',
                ':man_mountain_biking_dark_skin_tone:',
            ]
        ],
        'woman mountain biking: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_mountain_biking_tone1:',
                ':woman_mountain_biking_light_skin_tone:',
            ]
        ],
        'woman mountain biking: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_mountain_biking_tone2:',
                ':woman_mountain_biking_medium_light_skin_tone:',
            ]
        ],
        'woman mountain biking: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_mountain_biking_tone3:',
                ':woman_mountain_biking_medium_skin_tone:',
            ]
        ],
        'woman mountain biking: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_mountain_biking_tone4:',
                ':woman_mountain_biking_medium_dark_skin_tone:',
            ]
        ],
        'woman mountain biking: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_mountain_biking_tone5:',
                ':woman_mountain_biking_dark_skin_tone:',
            ]
        ],
        'person cartwheeling: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_doing_cartwheel_tone1:',
                ':cartwheel_tone1:',
            ]
        ],
        'person cartwheeling: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_doing_cartwheel_tone2:',
                ':cartwheel_tone2:',
            ]
        ],
        'person cartwheeling: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_doing_cartwheel_tone3:',
                ':cartwheel_tone3:',
            ]
        ],
        'person cartwheeling: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_doing_cartwheel_tone4:',
                ':cartwheel_tone4:',
            ]
        ],
        'person cartwheeling: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_doing_cartwheel_tone5:',
                ':cartwheel_tone5:',
            ]
        ],
        'man cartwheeling: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_cartwheeling_tone1:',
                ':man_cartwheeling_light_skin_tone:',
            ]
        ],
        'man cartwheeling: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_cartwheeling_tone2:',
                ':man_cartwheeling_medium_light_skin_tone:',
            ]
        ],
        'man cartwheeling: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_cartwheeling_tone3:',
                ':man_cartwheeling_medium_skin_tone:',
            ]
        ],
        'man cartwheeling: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_cartwheeling_tone4:',
                ':man_cartwheeling_medium_dark_skin_tone:',
            ]
        ],
        'man cartwheeling: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_cartwheeling_tone5:',
                ':man_cartwheeling_dark_skin_tone:',
            ]
        ],
        'woman cartwheeling: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_cartwheeling_tone1:',
                ':woman_cartwheeling_light_skin_tone:',
            ]
        ],
        'woman cartwheeling: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_cartwheeling_tone2:',
                ':woman_cartwheeling_medium_light_skin_tone:',
            ]
        ],
        'woman cartwheeling: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_cartwheeling_tone3:',
                ':woman_cartwheeling_medium_skin_tone:',
            ]
        ],
        'woman cartwheeling: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_cartwheeling_tone4:',
                ':woman_cartwheeling_medium_dark_skin_tone:',
            ]
        ],
        'woman cartwheeling: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_cartwheeling_tone5:',
                ':woman_cartwheeling_dark_skin_tone:',
            ]
        ],
        'person playing water polo: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_water_polo_tone1:',
                ':water_polo_tone1:',
            ]
        ],
        'person playing water polo: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_water_polo_tone2:',
                ':water_polo_tone2:',
            ]
        ],
        'person playing water polo: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_water_polo_tone3:',
                ':water_polo_tone3:',
            ]
        ],
        'person playing water polo: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_water_polo_tone4:',
                ':water_polo_tone4:',
            ]
        ],
        'person playing water polo: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_water_polo_tone5:',
                ':water_polo_tone5:',
            ]
        ],
        'man playing water polo: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_water_polo_tone1:',
                ':man_playing_water_polo_light_skin_tone:',
            ]
        ],
        'man playing water polo: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_water_polo_tone2:',
                ':man_playing_water_polo_medium_light_skin_tone:',
            ]
        ],
        'man playing water polo: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_water_polo_tone3:',
                ':man_playing_water_polo_medium_skin_tone:',
            ]
        ],
        'man playing water polo: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_water_polo_tone4:',
                ':man_playing_water_polo_medium_dark_skin_tone:',
            ]
        ],
        'man playing water polo: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_water_polo_tone5:',
                ':man_playing_water_polo_dark_skin_tone:',
            ]
        ],
        'woman playing water polo: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_water_polo_tone1:',
                ':woman_playing_water_polo_light_skin_tone:',
            ]
        ],
        'woman playing water polo: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_water_polo_tone2:',
                ':woman_playing_water_polo_medium_light_skin_tone:',
            ]
        ],
        'woman playing water polo: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_water_polo_tone3:',
                ':woman_playing_water_polo_medium_skin_tone:',
            ]
        ],
        'woman playing water polo: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_water_polo_tone4:',
                ':woman_playing_water_polo_medium_dark_skin_tone:',
            ]
        ],
        'woman playing water polo: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_water_polo_tone5:',
                ':woman_playing_water_polo_dark_skin_tone:',
            ]
        ],
        'person playing handball: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_handball_tone1:',
                ':handball_tone1:',
            ]
        ],
        'person playing handball: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_handball_tone2:',
                ':handball_tone2:',
            ]
        ],
        'person playing handball: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_handball_tone3:',
                ':handball_tone3:',
            ]
        ],
        'person playing handball: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_handball_tone4:',
                ':handball_tone4:',
            ]
        ],
        'person playing handball: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_playing_handball_tone5:',
                ':handball_tone5:',
            ]
        ],
        'man playing handball: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_handball_tone1:',
                ':man_playing_handball_light_skin_tone:',
            ]
        ],
        'man playing handball: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_handball_tone2:',
                ':man_playing_handball_medium_light_skin_tone:',
            ]
        ],
        'man playing handball: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_handball_tone3:',
                ':man_playing_handball_medium_skin_tone:',
            ]
        ],
        'man playing handball: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_handball_tone4:',
                ':man_playing_handball_medium_dark_skin_tone:',
            ]
        ],
        'man playing handball: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_playing_handball_tone5:',
                ':man_playing_handball_dark_skin_tone:',
            ]
        ],
        'woman playing handball: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_handball_tone1:',
                ':woman_playing_handball_light_skin_tone:',
            ]
        ],
        'woman playing handball: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_handball_tone2:',
                ':woman_playing_handball_medium_light_skin_tone:',
            ]
        ],
        'woman playing handball: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_handball_tone3:',
                ':woman_playing_handball_medium_skin_tone:',
            ]
        ],
        'woman playing handball: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_handball_tone4:',
                ':woman_playing_handball_medium_dark_skin_tone:',
            ]
        ],
        'woman playing handball: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_playing_handball_tone5:',
                ':woman_playing_handball_dark_skin_tone:',
            ]
        ],
        'person juggling: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_juggling_tone1:',
                ':juggling_tone1:',
                ':juggler_tone1:',
            ]
        ],
        'person juggling: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_juggling_tone2:',
                ':juggling_tone2:',
                ':juggler_tone2:',
            ]
        ],
        'person juggling: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_juggling_tone3:',
                ':juggling_tone3:',
                ':juggler_tone3:',
            ]
        ],
        'person juggling: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_juggling_tone4:',
                ':juggling_tone4:',
                ':juggler_tone4:',
            ]
        ],
        'person juggling: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_juggling_tone5:',
                ':juggling_tone5:',
                ':juggler_tone5:',
            ]
        ],
        'man juggling: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_juggling_tone1:',
                ':man_juggling_light_skin_tone:',
            ]
        ],
        'man juggling: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_juggling_tone2:',
                ':man_juggling_medium_light_skin_tone:',
            ]
        ],
        'man juggling: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_juggling_tone3:',
                ':man_juggling_medium_skin_tone:',
            ]
        ],
        'man juggling: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_juggling_tone4:',
                ':man_juggling_medium_dark_skin_tone:',
            ]
        ],
        'man juggling: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':man_juggling_tone5:',
                ':man_juggling_dark_skin_tone:',
            ]
        ],
        'woman juggling: light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_juggling_tone1:',
                ':woman_juggling_light_skin_tone:',
            ]
        ],
        'woman juggling: medium-light skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_juggling_tone2:',
                ':woman_juggling_medium_light_skin_tone:',
            ]
        ],
        'woman juggling: medium skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_juggling_tone3:',
                ':woman_juggling_medium_skin_tone:',
            ]
        ],
        'woman juggling: medium-dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_juggling_tone4:',
                ':woman_juggling_medium_dark_skin_tone:',
            ]
        ],
        'woman juggling: dark skin tone' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':woman_juggling_tone5:',
                ':woman_juggling_dark_skin_tone:',
            ]
        ],
        'person in lotus position' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_lotus_position:',
            ]
        ],
        'man in lotus position' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':man_in_lotus_position:',
            ]
        ],
        'woman in lotus position' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':woman_in_lotus_position:',
            ]
        ],
        'person taking bath' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath:',
            ]
        ],
        'person in bed' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':sleeping_accommodation:',
            ]
        ],
        'person in lotus position: light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_lotus_position_tone1:',
                ':person_in_lotus_position_light_skin_tone:',
            ]
        ],
        'person in lotus position: medium-light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_lotus_position_tone2:',
                ':person_in_lotus_position_medium_light_skin_tone:',
            ]
        ],
        'person in lotus position: medium skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_lotus_position_tone3:',
                ':person_in_lotus_position_medium_skin_tone:',
            ]
        ],
        'person in lotus position: medium-dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_lotus_position_tone4:',
                ':person_in_lotus_position_medium_dark_skin_tone:',
            ]
        ],
        'person in lotus position: dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_lotus_position_tone5:',
                ':person_in_lotus_position_dark_skin_tone:',
            ]
        ],
        'man in lotus position: light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':man_in_lotus_position_tone1:',
                ':man_in_lotus_position_light_skin_tone:',
            ]
        ],
        'man in lotus position: medium-light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':man_in_lotus_position_tone2:',
                ':man_in_lotus_position_medium_light_skin_tone:',
            ]
        ],
        'man in lotus position: medium skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':man_in_lotus_position_tone3:',
                ':man_in_lotus_position_medium_skin_tone:',
            ]
        ],
        'man in lotus position: medium-dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':man_in_lotus_position_tone4:',
                ':man_in_lotus_position_medium_dark_skin_tone:',
            ]
        ],
        'man in lotus position: dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':man_in_lotus_position_tone5:',
                ':man_in_lotus_position_dark_skin_tone:',
            ]
        ],
        'woman in lotus position: light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':woman_in_lotus_position_tone1:',
                ':woman_in_lotus_position_light_skin_tone:',
            ]
        ],
        'woman in lotus position: medium-light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':woman_in_lotus_position_tone2:',
                ':woman_in_lotus_position_medium_light_skin_tone:',
            ]
        ],
        'woman in lotus position: medium skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':woman_in_lotus_position_tone3:',
                ':woman_in_lotus_position_medium_skin_tone:',
            ]
        ],
        'woman in lotus position: medium-dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':woman_in_lotus_position_tone4:',
                ':woman_in_lotus_position_medium_dark_skin_tone:',
            ]
        ],
        'woman in lotus position: dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':woman_in_lotus_position_tone5:',
                ':woman_in_lotus_position_dark_skin_tone:',
            ]
        ],
        'person taking bath: light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath_tone1:',
            ]
        ],
        'person taking bath: medium-light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath_tone2:',
            ]
        ],
        'person taking bath: medium skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath_tone3:',
            ]
        ],
        'person taking bath: medium-dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath_tone4:',
            ]
        ],
        'person taking bath: dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath_tone5:',
            ]
        ],
        'person in bed: light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_bed_tone1:',
                ':person_in_bed_light_skin_tone:',
            ]
        ],
        'person in bed: medium-light skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_bed_tone2:',
                ':person_in_bed_medium_light_skin_tone:',
            ]
        ],
        'person in bed: medium skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_bed_tone3:',
                ':person_in_bed_medium_skin_tone:',
            ]
        ],
        'person in bed: medium-dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_bed_tone4:',
                ':person_in_bed_medium_dark_skin_tone:',
            ]
        ],
        'person in bed: dark skin tone' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':person_in_bed_tone5:',
                ':person_in_bed_dark_skin_tone:',
            ]
        ],
        'people holding hands' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands:',
            ]
        ],
        'women holding hands' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':two_women_holding_hands:',
            ]
        ],
        'woman and man holding hands' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couple:',
            ]
        ],
        'men holding hands' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':two_men_holding_hands:',
            ]
        ],
        'kiss' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couplekiss:',
            ]
        ],
        'kiss: woman, man' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':kiss_woman_man:',
            ]
        ],
        'kiss: man, man' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':kiss_mm:',
                ':couplekiss_mm:',
            ]
        ],
        'kiss: woman, woman' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':kiss_ww:',
                ':couplekiss_ww:',
            ]
        ],
        'couple with heart' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couple_with_heart:',
            ]
        ],
        'couple with heart: woman, man' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couple_with_heart_woman_man:',
            ]
        ],
        'couple with heart: man, man' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couple_mm:',
                ':couple_with_heart_mm:',
            ]
        ],
        'couple with heart: woman, woman' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couple_ww:',
                ':couple_with_heart_ww:',
            ]
        ],
        'family' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family:',
            ]
        ],
        'family: man, woman, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_man_woman_boy:',
            ]
        ],
        'family: man, woman, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mwg:',
            ]
        ],
        'family: man, woman, girl, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mwgb:',
            ]
        ],
        'family: man, woman, boy, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mwbb:',
            ]
        ],
        'family: man, woman, girl, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mwgg:',
            ]
        ],
        'family: man, man, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mmb:',
            ]
        ],
        'family: man, man, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mmg:',
            ]
        ],
        'family: man, man, girl, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mmgb:',
            ]
        ],
        'family: man, man, boy, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mmbb:',
            ]
        ],
        'family: man, man, girl, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_mmgg:',
            ]
        ],
        'family: woman, woman, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_wwb:',
            ]
        ],
        'family: woman, woman, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_wwg:',
            ]
        ],
        'family: woman, woman, girl, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_wwgb:',
            ]
        ],
        'family: woman, woman, boy, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_wwbb:',
            ]
        ],
        'family: woman, woman, girl, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_wwgg:',
            ]
        ],
        'family: man, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_man_boy:',
            ]
        ],
        'family: man, boy, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_man_boy_boy:',
            ]
        ],
        'family: man, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_man_girl:',
            ]
        ],
        'family: man, girl, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_man_girl_boy:',
            ]
        ],
        'family: man, girl, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_man_girl_girl:',
            ]
        ],
        'family: woman, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_woman_boy:',
            ]
        ],
        'family: woman, boy, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_woman_boy_boy:',
            ]
        ],
        'family: woman, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_woman_girl:',
            ]
        ],
        'family: woman, girl, boy' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_woman_girl_boy:',
            ]
        ],
        'family: woman, girl, girl' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family_woman_girl_girl:',
            ]
        ],
        'people holding hands: light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone1:',
                ':people_holding_hands_light_skin_tone:',
            ]
        ],
        'people holding hands: medium-light skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone2_tone1:',
                ':people_holding_hands_medium_light_skin_tone_light_skin_tone:',
            ]
        ],
        'people holding hands: medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone2:',
                ':people_holding_hands_medium_light_skin_tone:',
            ]
        ],
        'people holding hands: medium skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone3_tone1:',
                ':people_holding_hands_medium_skin_tone_light_skin_tone:',
            ]
        ],
        'people holding hands: medium skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone3_tone2:',
                ':people_holding_hands_medium_skin_tone_medium_light_skin_tone:',
            ]
        ],
        'people holding hands: medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone3:',
                ':people_holding_hands_medium_skin_tone:',
            ]
        ],
        'people holding hands: medium-dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone4_tone1:',
                ':people_holding_hands_medium_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'people holding hands: medium-dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'people holding hands: medium-dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone4_tone3:',
                ':people_holding_hands_medium_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'people holding hands: medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone4:',
                ':people_holding_hands_medium_dark_skin_tone:',
            ]
        ],
        'people holding hands: dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone5_tone1:',
                ':people_holding_hands_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'people holding hands: dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone5_tone2:',
                ':people_holding_hands_dark_skin_tone_medium_light_skin_tone:',
            ]
        ],
        'people holding hands: dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone5_tone3:',
                ':people_holding_hands_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'people holding hands: dark skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone5_tone4:',
                ':people_holding_hands_dark_skin_tone_medium_dark_skin_tone:',
            ]
        ],
        'people holding hands: dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':people_holding_hands_tone5:',
                ':people_holding_hands_dark_skin_tone:',
            ]
        ],
        'women holding hands: light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone1:',
                ':women_holding_hands_light_skin_tone:',
            ]
        ],
        'women holding hands: medium-light skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone2_tone1:',
                ':women_holding_hands_medium_light_skin_tone_light_skin_tone:',
            ]
        ],
        'women holding hands: medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone2:',
                ':women_holding_hands_medium_light_skin_tone:',
            ]
        ],
        'women holding hands: medium skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone3_tone1:',
                ':women_holding_hands_medium_skin_tone_light_skin_tone:',
            ]
        ],
        'women holding hands: medium skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone3_tone2:',
                ':women_holding_hands_medium_skin_tone_medium_light_skin_tone:',
            ]
        ],
        'women holding hands: medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone3:',
                ':women_holding_hands_medium_skin_tone:',
            ]
        ],
        'women holding hands: medium-dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone4_tone1:',
                ':women_holding_hands_medium_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'women holding hands: medium-dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'women holding hands: medium-dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone4_tone3:',
                ':women_holding_hands_medium_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'women holding hands: medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone4:',
                ':women_holding_hands_medium_dark_skin_tone:',
            ]
        ],
        'women holding hands: dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone5_tone1:',
                ':women_holding_hands_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'women holding hands: dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone5_tone2:',
                ':women_holding_hands_dark_skin_tone_medium_light_skin_tone:',
            ]
        ],
        'women holding hands: dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone5_tone3:',
                ':women_holding_hands_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'women holding hands: dark skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone5_tone4:',
                ':women_holding_hands_dark_skin_tone_medium_dark_skin_tone:',
            ]
        ],
        'women holding hands: dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':women_holding_hands_tone5:',
                ':women_holding_hands_dark_skin_tone:',
            ]
        ],
        'woman and man holding hands: light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone1:',
                ':woman_and_man_holding_hands_light_skin_tone:',
            ]
        ],
        'woman and man holding hands: light skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: light skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone1_tone3:',
                ':woman_and_man_holding_hands_light_skin_tone_medium_skin_tone:',
            ]
        ],
        'woman and man holding hands: light skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: light skin tone, dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone1_tone5:',
                ':woman_and_man_holding_hands_light_skin_tone_dark_skin_tone:',
            ]
        ],
        'woman and man holding hands: medium-light skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone2:',
                ':woman_and_man_holding_hands_medium_light_skin_tone:',
            ]
        ],
        'woman and man holding hands: medium-light skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium-light skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium-light skin tone, dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone3_tone1:',
                ':woman_and_man_holding_hands_medium_skin_tone_light_skin_tone:',
            ]
        ],
        'woman and man holding hands: medium skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone3:',
                ':woman_and_man_holding_hands_medium_skin_tone:',
            ]
        ],
        'woman and man holding hands: medium skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium skin tone, dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone3_tone5:',
                ':woman_and_man_holding_hands_medium_skin_tone_dark_skin_tone:',
            ]
        ],
        'woman and man holding hands: medium-dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium-dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium-dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone4:',
                ':woman_and_man_holding_hands_medium_dark_skin_tone:',
            ]
        ],
        'woman and man holding hands: medium-dark skin tone, dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone5_tone1:',
                ':woman_and_man_holding_hands_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'woman and man holding hands: dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone5_tone3:',
                ':woman_and_man_holding_hands_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'woman and man holding hands: dark skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'woman and man holding hands: dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':woman_and_man_holding_hands_tone5:',
                ':woman_and_man_holding_hands_dark_skin_tone:',
            ]
        ],
        'men holding hands: light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone1:',
                ':men_holding_hands_light_skin_tone:',
            ]
        ],
        'men holding hands: medium-light skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone2_tone1:',
                ':men_holding_hands_medium_light_skin_tone_light_skin_tone:',
            ]
        ],
        'men holding hands: medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone2:',
                ':men_holding_hands_medium_light_skin_tone:',
            ]
        ],
        'men holding hands: medium skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone3_tone1:',
                ':men_holding_hands_medium_skin_tone_light_skin_tone:',
            ]
        ],
        'men holding hands: medium skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone3_tone2:',
                ':men_holding_hands_medium_skin_tone_medium_light_skin_tone:',
            ]
        ],
        'men holding hands: medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone3:',
                ':men_holding_hands_medium_skin_tone:',
            ]
        ],
        'men holding hands: medium-dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone4_tone1:',
                ':men_holding_hands_medium_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'men holding hands: medium-dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
            ]
        ],
        'men holding hands: medium-dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone4_tone3:',
                ':men_holding_hands_medium_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'men holding hands: medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone4:',
                ':men_holding_hands_medium_dark_skin_tone:',
            ]
        ],
        'men holding hands: dark skin tone, light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone5_tone1:',
                ':men_holding_hands_dark_skin_tone_light_skin_tone:',
            ]
        ],
        'men holding hands: dark skin tone, medium-light skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone5_tone2:',
                ':men_holding_hands_dark_skin_tone_medium_light_skin_tone:',
            ]
        ],
        'men holding hands: dark skin tone, medium skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone5_tone3:',
                ':men_holding_hands_dark_skin_tone_medium_skin_tone:',
            ]
        ],
        'men holding hands: dark skin tone, medium-dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone5_tone4:',
                ':men_holding_hands_dark_skin_tone_medium_dark_skin_tone:',
            ]
        ],
        'men holding hands: dark skin tone' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':men_holding_hands_tone5:',
                ':men_holding_hands_dark_skin_tone:',
            ]
        ],
        'speaking head' => [
            'parent' => 'person-symbol',
            'children' => null,
            'aliases' => [
                ':speaking_head:',
                ':speaking_head_in_silhouette:',
            ]
        ],
        'bust in silhouette' => [
            'parent' => 'person-symbol',
            'children' => null,
            'aliases' => [
                ':bust_in_silhouette:',
            ]
        ],
        'busts in silhouette' => [
            'parent' => 'person-symbol',
            'children' => null,
            'aliases' => [
                ':busts_in_silhouette:',
            ]
        ],
        'footprints' => [
            'parent' => 'person-symbol',
            'children' => null,
            'aliases' => [
                ':footprints:',
            ]
        ],
    ];
}
