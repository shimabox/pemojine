<?phpnamespace SMB\Pemojine\Structure\Vendor\GMail;

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
                'glasses',
                'necktie',
                't-shirt',
                'jeans',
                'dress',
                'kimono',
                'bikini',
                'woman’s clothes',
                'purse',
                'handbag',
                'clutch bag',
                'backpack',
                'man’s shoe',
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
                'musical score',
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
                'musical keyboard',
                'trumpet',
                'violin',
            ]
        ],
        'phone' => [
            'parent' => 'Objects',
            'children' => [
                'mobile phone',
                'mobile phone with arrow',
                'telephone',
                'telephone receiver',
                'pager',
                'fax machine',
            ]
        ],
        'computer' => [
            'parent' => 'Objects',
            'children' => [
                'battery',
                'electric plug',
                'laptop',
                'computer disk',
                'floppy disk',
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
                'video camera',
                'videocassette',
                'magnifying glass tilted left',
                'magnifying glass tilted right',
                'light bulb',
                'flashlight',
                'red paper lantern',
            ]
        ],
        'book-paper' => [
            'parent' => 'Objects',
            'children' => [
                'notebook with decorative cover',
                'closed book',
                'open book',
                'green book',
                'blue book',
                'orange book',
                'books',
                'notebook',
                'ledger',
                'page with curl',
                'scroll',
                'page facing up',
                'newspaper',
                'bookmark tabs',
                'bookmark',
            ]
        ],
        'money' => [
            'parent' => 'Objects',
            'children' => [
                'money bag',
                'yen banknote',
                'dollar banknote',
                'money with wings',
                'credit card',
                'chart increasing with yen',
            ]
        ],
        'mail' => [
            'parent' => 'Objects',
            'children' => [
                'envelope',
                'e-mail',
                'incoming envelope',
                'envelope with arrow',
                'outbox tray',
                'inbox tray',
                'package',
                'closed mailbox with raised flag',
                'closed mailbox with lowered flag',
                'postbox',
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
                'briefcase',
                'file folder',
                'open file folder',
                'calendar',
                'tear-off calendar',
                'card index',
                'chart increasing',
                'chart decreasing',
                'bar chart',
                'clipboard',
                'pushpin',
                'round pushpin',
                'paperclip',
                'straight ruler',
                'triangular ruler',
                'scissors',
            ]
        ],
        'lock' => [
            'parent' => 'Objects',
            'children' => [
                'locked',
                'unlocked',
                'locked with pen',
                'locked with key',
                'key',
            ]
        ],
        'tool' => [
            'parent' => 'Objects',
            'children' => [
                'hammer',
                'water pistol',
                'wrench',
                'nut and bolt',
                'link',
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
                'door',
                'toilet',
            ]
        ],
        'other-object' => [
            'parent' => 'Objects',
            'children' => [
                'cigarette',
                'moai',
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
        'jeans' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':jeans:',
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
        'woman’s clothes' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':womans_clothes:',
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
        'backpack' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':school_satchel:',
            ]
        ],
        'man’s shoe' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':mans_shoe:',
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
        'musical score' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':musical_score:',
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
        'musical keyboard' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':musical_keyboard:',
            ]
        ],
        'trumpet' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':trumpet:',
            ]
        ],
        'violin' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':violin:',
            ]
        ],
        'mobile phone' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':mobile_phone:',
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
        'telephone receiver' => [
            'parent' => 'phone',
            'children' => null,
            'aliases' => [
                ':telephone_receiver:',
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
        'battery' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':battery:',
            ]
        ],
        'electric plug' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':electric_plug:',
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
        'floppy disk' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':floppy_disk:',
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
        'video camera' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':video_camera:',
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
        'magnifying glass tilted right' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':mag_right:',
            ]
        ],
        'light bulb' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':bulb:',
            ]
        ],
        'flashlight' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':flashlight:',
            ]
        ],
        'red paper lantern' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':izakaya_lantern:',
            ]
        ],
        'notebook with decorative cover' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':notebook_with_decorative_cover:',
            ]
        ],
        'closed book' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':closed_book:',
            ]
        ],
        'open book' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':book:',
            ]
        ],
        'green book' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':green_book:',
            ]
        ],
        'blue book' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':blue_book:',
            ]
        ],
        'orange book' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':orange_book:',
            ]
        ],
        'books' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':books:',
            ]
        ],
        'notebook' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':notebook:',
            ]
        ],
        'ledger' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':ledger:',
            ]
        ],
        'page with curl' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':page_with_curl:',
            ]
        ],
        'scroll' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':scroll:',
            ]
        ],
        'page facing up' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':page_facing_up:',
            ]
        ],
        'newspaper' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':newspaper:',
            ]
        ],
        'bookmark tabs' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':bookmark_tabs:',
            ]
        ],
        'bookmark' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':bookmark:',
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
        'dollar banknote' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':dollar:',
            ]
        ],
        'money with wings' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':money_with_wings:',
            ]
        ],
        'credit card' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':credit_card:',
            ]
        ],
        'chart increasing with yen' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':chart:',
            ]
        ],
        'envelope' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':envelope:',
            ]
        ],
        'e-mail' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':e-mail:',
                ':email:',
            ]
        ],
        'incoming envelope' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':incoming_envelope:',
            ]
        ],
        'envelope with arrow' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':envelope_with_arrow:',
            ]
        ],
        'outbox tray' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':outbox_tray:',
            ]
        ],
        'inbox tray' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':inbox_tray:',
            ]
        ],
        'package' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':package:',
            ]
        ],
        'closed mailbox with raised flag' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':mailbox:',
            ]
        ],
        'closed mailbox with lowered flag' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':mailbox_closed:',
            ]
        ],
        'postbox' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':postbox:',
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
        'briefcase' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':briefcase:',
            ]
        ],
        'file folder' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':file_folder:',
            ]
        ],
        'open file folder' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':open_file_folder:',
            ]
        ],
        'calendar' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':date:',
            ]
        ],
        'tear-off calendar' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':calendar:',
            ]
        ],
        'card index' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':card_index:',
            ]
        ],
        'chart increasing' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':chart_with_upwards_trend:',
            ]
        ],
        'chart decreasing' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':chart_with_downwards_trend:',
            ]
        ],
        'bar chart' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':bar_chart:',
            ]
        ],
        'clipboard' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':clipboard:',
            ]
        ],
        'pushpin' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':pushpin:',
            ]
        ],
        'round pushpin' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':round_pushpin:',
            ]
        ],
        'paperclip' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':paperclip:',
            ]
        ],
        'straight ruler' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':straight_ruler:',
            ]
        ],
        'triangular ruler' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':triangular_ruler:',
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
        'locked with pen' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':lock_with_ink_pen:',
            ]
        ],
        'locked with key' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':closed_lock_with_key:',
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
        'water pistol' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
            ]
        ],
        'wrench' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':wrench:',
            ]
        ],
        'nut and bolt' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':nut_and_bolt:',
            ]
        ],
        'link' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':link:',
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
        'door' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':door:',
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
        'moai' => [
            'parent' => 'other-object',
            'children' => null,
            'aliases' => [
                ':moyai:',
            ]
        ],
    ];
}
