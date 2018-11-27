<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

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
                'hand-fingers-closed',
                'body-parts',
                'person-activity',
                'person-sport',
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
                'raised hand',
            ]
        ],
        'hand-fingers-partial' => [
            'parent' => 'People & Body',
            'children' => [
                'victory hand',
            ]
        ],
        'hand-fingers-closed' => [
            'parent' => 'People & Body',
            'children' => [
                'thumbs up',
                'raised fist',
                'oncoming fist',
            ]
        ],
        'body-parts' => [
            'parent' => 'People & Body',
            'children' => [
                'ear',
                'eyes',
            ]
        ],
        'person-activity' => [
            'parent' => 'People & Body',
            'children' => [
                'person running',
            ]
        ],
        'person-sport' => [
            'parent' => 'People & Body',
            'children' => [
                'snowboarder',
            ]
        ],
        'person-symbol' => [
            'parent' => 'People & Body',
            'children' => [
                'bust in silhouette',
                'footprints',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'raised hand' => [
            'parent' => 'hand-fingers-open',
            'children' => null,
            'aliases' => [
                ':raised_hand:',
            ]
        ],
        'victory hand' => [
            'parent' => 'hand-fingers-partial',
            'children' => null,
            'aliases' => [
                ':v:',
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
        'ear' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':ear:',
            ]
        ],
        'eyes' => [
            'parent' => 'body-parts',
            'children' => null,
            'aliases' => [
                ':eyes:',
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
        'snowboarder' => [
            'parent' => 'person-sport',
            'children' => null,
            'aliases' => [
                ':snowboarder:',
            ]
        ],
        'bust in silhouette' => [
            'parent' => 'person-symbol',
            'children' => null,
            'aliases' => [
                ':bust_in_silhouette:',
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
