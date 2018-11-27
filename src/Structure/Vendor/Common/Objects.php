<?phpnamespace SMB\Pemojine\Structure\Vendor\Common;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class Objects implements Gettable
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
        'Objects' => [
            'parent' => null,
            'children' => [
                'clothing',
                'sound',
                'music',
                'phone',
                'computer',
                'light & video',
                'book-paper',
                'money',
                'mail',
                'writing',
                'office',
                'lock',
                'other-object',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'clothing' => [
            'parent' => 'Objects',
            'children' => [
                't-shirt',
                'handbag',
                'running shoe',
                'high-heeled shoe',
                'crown',
                'top hat',
                'lipstick',
                'ring',
            ]
        ],
        'sound' => [
            'parent' => 'Objects',
            'children' => [
                'bell',
            ]
        ],
        'music' => [
            'parent' => 'Objects',
            'children' => [
                'musical note',
                'musical notes',
                'microphone',
                'headphone',
            ]
        ],
        'phone' => [
            'parent' => 'Objects',
            'children' => [
                'mobile phone',
                'mobile phone with arrow',
                'telephone',
                'fax machine',
            ]
        ],
        'computer' => [
            'parent' => 'Objects',
            'children' => [
                'laptop computer',
                'optical disk',
            ]
        ],
        'light & video' => [
            'parent' => 'Objects',
            'children' => [
                'movie camera',
                'clapper board',
                'television',
                'camera',
                'magnifying glass tilted left',
                'light bulb',
            ]
        ],
        'book-paper' => [
            'parent' => 'Objects',
            'children' => [
                'open book',
            ]
        ],
        'money' => [
            'parent' => 'Objects',
            'children' => [
                'money bag',
            ]
        ],
        'mail' => [
            'parent' => 'Objects',
            'children' => [
                'envelope with arrow',
            ]
        ],
        'writing' => [
            'parent' => 'Objects',
            'children' => [
                'memo',
            ]
        ],
        'office' => [
            'parent' => 'Objects',
            'children' => [
                'scissors',
            ]
        ],
        'lock' => [
            'parent' => 'Objects',
            'children' => [
                'key',
            ]
        ],
        'other-object' => [
            'parent' => 'Objects',
            'children' => [
                'cigarette',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        't-shirt' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':shirt:',
            ]
        ],
        'handbag' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':handbag:',
            ]
        ],
        'running shoe' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':athletic_shoe:',
            ]
        ],
        'high-heeled shoe' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':high_heel:',
            ]
        ],
        'crown' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':crown:',
            ]
        ],
        'top hat' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':tophat:',
            ]
        ],
        'lipstick' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':lipstick:',
            ]
        ],
        'ring' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':ring:',
            ]
        ],
        'bell' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':bell:',
            ]
        ],
        'musical note' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':musical_note:',
            ]
        ],
        'musical notes' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':notes:',
            ]
        ],
        'microphone' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':microphone:',
            ]
        ],
        'headphone' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':headphones:',
            ]
        ],
        'mobile phone' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':iphone:',
            ]
        ],
        'mobile phone with arrow' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':calling:',
            ]
        ],
        'telephone' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':telephone:',
            ]
        ],
        'fax machine' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':fax:',
            ]
        ],
        'laptop computer' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':computer:',
            ]
        ],
        'optical disk' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':cd:',
            ]
        ],
        'movie camera' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':movie_camera:',
            ]
        ],
        'clapper board' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':clapper:',
            ]
        ],
        'television' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':tv:',
            ]
        ],
        'camera' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':camera:',
            ]
        ],
        'magnifying glass tilted left' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':mag:',
            ]
        ],
        'light bulb' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':bulb:',
            ]
        ],
        'open book' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':book:',
            ]
        ],
        'money bag' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':moneybag:',
            ]
        ],
        'envelope with arrow' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':envelope_with_arrow:',
            ]
        ],
        'memo' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':pencil:',
                ':memo:',
            ]
        ],
        'scissors' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':scissors:',
            ]
        ],
        'key' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':key:',
            ]
        ],
        'cigarette' => [
            'parent' => 'other-object',
            'children' => null,
            'aliases' => [
                ':smoking:',
            ]
        ],
    ];
}
