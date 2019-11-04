<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

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
                'musical-instrument',
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
                'science',
                'medical',
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
                'necktie',
                't-shirt',
                'dress',
                'kimono',
                'bikini',
                'handbag',
                'backpack',
                'running shoe',
                'high-heeled shoe',
                'woman’s sandal',
                'woman’s boot',
                'crown',
                'woman’s hat',
                'top hat',
                'graduation cap',
                'lipstick',
                'ring',
                'gem stone',
            ]
        ],
        'sound' => [
            'parent' => 'Objects',
            'children' => [
                'speaker high volume',
                'loudspeaker',
                'megaphone',
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
                'radio',
            ]
        ],
        'musical-instrument' => [
            'parent' => 'Objects',
            'children' => [
                'saxophone',
                'guitar',
                'trumpet',
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
                'laptop',
                'computer disk',
                'optical disk',
                'dvd',
            ]
        ],
        'light & video' => [
            'parent' => 'Objects',
            'children' => [
                'movie camera',
                'clapper board',
                'television',
                'camera',
                'videocassette',
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
                'chart increasing with yen',
                'currency exchange',
            ]
        ],
        'mail' => [
            'parent' => 'Objects',
            'children' => [
                'envelope with arrow',
                'closed mailbox with raised flag',
                'postbox',
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
                'briefcase',
                'scissors',
            ]
        ],
        'lock' => [
            'parent' => 'Objects',
            'children' => [
                'locked',
                'unlocked',
                'key',
            ]
        ],
        'tool' => [
            'parent' => 'Objects',
            'children' => [
                'hammer',
                'pistol',
            ]
        ],
        'science' => [
            'parent' => 'Objects',
            'children' => [
                'satellite antenna',
            ]
        ],
        'medical' => [
            'parent' => 'Objects',
            'children' => [
                'syringe',
                'pill',
            ]
        ],
        'household' => [
            'parent' => 'Objects',
            'children' => [
                'toilet',
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
        'necktie' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':necktie:',
            ]
        ],
        't-shirt' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':shirt:',
            ]
        ],
        'dress' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':dress:',
            ]
        ],
        'kimono' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':kimono:',
            ]
        ],
        'bikini' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':bikini:',
            ]
        ],
        'handbag' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':handbag:',
            ]
        ],
        'backpack' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
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
        'woman’s sandal' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':sandal:',
            ]
        ],
        'woman’s boot' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':boot:',
            ]
        ],
        'crown' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':crown:',
            ]
        ],
        'woman’s hat' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':womans_hat:',
            ]
        ],
        'top hat' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':tophat:',
            ]
        ],
        'graduation cap' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':mortar_board:',
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
        'gem stone' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':gem:',
            ]
        ],
        'speaker high volume' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':loud_sound:',
            ]
        ],
        'loudspeaker' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':loudspeaker:',
            ]
        ],
        'megaphone' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':mega:',
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
        'radio' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':radio:',
            ]
        ],
        'saxophone' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':saxophone:',
            ]
        ],
        'guitar' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':guitar:',
            ]
        ],
        'trumpet' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':trumpet:',
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
        'laptop' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
            ]
        ],
        'computer disk' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':minidisc:',
            ]
        ],
        'optical disk' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':cd:',
            ]
        ],
        'dvd' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':dvd:',
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
        'videocassette' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':vhs:',
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
        'chart increasing with yen' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':chart:',
            ]
        ],
        'currency exchange' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':currency_exchange:',
            ]
        ],
        'envelope with arrow' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':envelope_with_arrow:',
            ]
        ],
        'closed mailbox with raised flag' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':mailbox:',
            ]
        ],
        'postbox' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':postbox:',
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
        'briefcase' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':briefcase:',
            ]
        ],
        'scissors' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':scissors:',
            ]
        ],
        'locked' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':lock:',
            ]
        ],
        'unlocked' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':unlock:',
            ]
        ],
        'key' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':key:',
            ]
        ],
        'hammer' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':hammer:',
            ]
        ],
        'pistol' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':gun:',
            ]
        ],
        'satellite antenna' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':satellite:',
            ]
        ],
        'syringe' => [
            'parent' => 'medical',
            'children' => null,
            'aliases' => [
                ':syringe:',
            ]
        ],
        'pill' => [
            'parent' => 'medical',
            'children' => null,
            'aliases' => [
                ':pill:',
            ]
        ],
        'toilet' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':toilet:',
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
