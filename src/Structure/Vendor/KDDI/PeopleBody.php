<?phpnamespace SMB\Pemojine\Structure\Vendor\KDDI;

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
                'raised hand',
            ]
        ],
        'hand-fingers-partial' => [
            'parent' => 'People & Body',
            'children' => [
                'OK hand',
                'victory hand',
            ]
        ],
        'hand-single-finger' => [
            'parent' => 'People & Body',
            'children' => [
                'backhand index pointing left',
                'backhand index pointing right',
                'backhand index pointing up',
                'backhand index pointing down',
                'index pointing up',
            ]
        ],
        'hand-fingers-closed' => [
            'parent' => 'People & Body',
            'children' => [
                'thumbs up',
                'thumbs down',
                'raised fist',
                'oncoming fist',
            ]
        ],
        'hands' => [
            'parent' => 'People & Body',
            'children' => [
                'clapping hands',
                'raising hands',
                'folded hands',
            ]
        ],
        'hand-prop' => [
            'parent' => 'People & Body',
            'children' => [
                'nail polish',
            ]
        ],
        'body-parts' => [
            'parent' => 'People & Body',
            'children' => [
                'flexed biceps',
                'ear',
                'nose',
                'eyes',
                'tongue',
                'mouth',
            ]
        ],
        'person' => [
            'parent' => 'People & Body',
            'children' => [
                'baby',
                'person: blond hair',
                'man',
                'woman',
                'old man',
                'old woman',
            ]
        ],
        'person-gesture' => [
            'parent' => 'People & Body',
            'children' => [
                'person frowning',
                'person pouting',
                'person gesturing NO',
                'person gesturing OK',
                'person raising hand',
                'person bowing',
            ]
        ],
        'person-role' => [
            'parent' => 'People & Body',
            'children' => [
                'police officer',
                'construction worker',
                'princess',
                'person wearing turban',
                'man with skullcap',
                'bride with veil',
            ]
        ],
        'person-fantasy' => [
            'parent' => 'People & Body',
            'children' => [
                'baby angel',
                'Santa Claus',
            ]
        ],
        'person-activity' => [
            'parent' => 'People & Body',
            'children' => [
                'person getting massage',
                'person getting haircut',
                'person walking',
                'person running',
                'woman dancing',
                'people with bunny ears',
            ]
        ],
        'person-sport' => [
            'parent' => 'People & Body',
            'children' => [
                'snowboarder',
                'person surfing',
                'person swimming',
            ]
        ],
        'person-resting' => [
            'parent' => 'People & Body',
            'children' => [
                'person taking bath',
            ]
        ],
        'family' => [
            'parent' => 'People & Body',
            'children' => [
                'kiss',
                'couple with heart',
                'family',
            ]
        ],
        'person-symbol' => [
            'parent' => 'People & Body',
            'children' => [
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
        'raised hand' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand:',
            ]
        ],
        'OK hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':ok_hand:',
            ]
        ],
        'victory hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v:',
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
        'folded hands' => [
            'parent' => 'hands',
            'children' => null,
            'aliases' => [
                ':pray:',
            ]
        ],
        'nail polish' => [
            'parent' => 'hand-prop',
            'children' => null,
            'aliases' => [
                ':nail_care:',
            ]
        ],
        'flexed biceps' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':muscle:',
            ]
        ],
        'ear' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear:',
            ]
        ],
        'nose' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':nose:',
            ]
        ],
        'eyes' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':eyes:',
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
        'baby' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':baby:',
            ]
        ],
        'person: blond hair' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
            ]
        ],
        'man' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':man:',
            ]
        ],
        'woman' => [
            'parent' => 'person',
            'children' => null,
            'aliases' => [
                ':woman:',
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
        'person frowning' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_frowning:',
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
        'person gesturing NO' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_gesturing_no:',
                ':no_good:',
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
        'person raising hand' => [
            'parent' => 'person-gesture',
            'children' => null,
            'aliases' => [
                ':person_raising_hand:',
                ':raising_hand:',
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
        'police officer' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':police_officer:',
                ':cop:',
            ]
        ],
        'construction worker' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':construction_worker:',
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
        'man with skullcap' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
            ]
        ],
        'bride with veil' => [
            'parent' => 'person-role',
            'children' => null,
            'aliases' => [
                ':bride_with_veil:',
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
        'person getting massage' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_getting_massage:',
                ':massage:',
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
        'person walking' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':person_walking:',
                ':walking:',
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
        'woman dancing' => [
            'parent' => 'person-activity',
            'children' => null,
            'aliases' => [
                ':dancer:',
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
        'snowboarder' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder:',
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
        'person swimming' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':person_swimming:',
                ':swimmer:',
            ]
        ],
        'person taking bath' => [
            'parent' => 'person-resting',
            'children' => null,
            'aliases' => [
                ':bath:',
            ]
        ],
        'kiss' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couplekiss:',
            ]
        ],
        'couple with heart' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':couple_with_heart:',
            ]
        ],
        'family' => [
            'parent' => 'family',
            'children' => null,
            'aliases' => [
                ':family:',
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
