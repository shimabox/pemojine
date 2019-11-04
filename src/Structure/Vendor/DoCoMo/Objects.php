<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

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
                'tool',
                'household',
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
                'glasses',
                't-shirt',
                'jeans',
                'purse',
                'handbag',
                'clutch bag',
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
                'pager',
                'fax machine',
            ]
        ],
        'computer' => [
            'parent' => 'Objects',
            'children' => [
                'laptop',
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
                'yen banknote',
            ]
        ],
        'mail' => [
            'parent' => 'Objects',
            'children' => [
                'envelope',
                'envelope with arrow',
            ]
        ],
        'writing' => [
            'parent' => 'Objects',
            'children' => [
                'pencil',
                'black nib',
                'memo',
            ]
        ],
        'office' => [
            'parent' => 'Objects',
            'children' => [
                'paperclip',
                'scissors',
            ]
        ],
        'lock' => [
            'parent' => 'Objects',
            'children' => [
                'key',
            ]
        ],
        'tool' => [
            'parent' => 'Objects',
            'children' => [
                'wrench',
            ]
        ],
        'household' => [
            'parent' => 'Objects',
            'children' => [
                'door',
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
        'glasses' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':eyeglasses:',
            ]
        ],
        't-shirt' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':shirt:',
            ]
        ],
        'jeans' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':jeans:',
            ]
        ],
        'purse' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':purse:',
            ]
        ],
        'handbag' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':handbag:',
            ]
        ],
        'clutch bag' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':pouch:',
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
        'pager' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':pager:',
            ]
        ],
        'fax machine' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':fax:',
            ]
        ],
        'laptop' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
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
        'yen banknote' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':yen:',
            ]
        ],
        'envelope' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':envelope:',
            ]
        ],
        'envelope with arrow' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':envelope_with_arrow:',
            ]
        ],
        'pencil' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':pencil2:',
            ]
        ],
        'black nib' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':black_nib:',
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
        'paperclip' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':paperclip:',
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
        'wrench' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':wrench:',
            ]
        ],
        'door' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':door:',
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
