<?phpnamespace SMB\Pemojine\Structure\Vendor\Windows;

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
                'sunglasses',
                'goggles',
                'lab coat',
                'necktie',
                't-shirt',
                'jeans',
                'scarf',
                'gloves',
                'coat',
                'socks',
                'dress',
                'kimono',
                'bikini',
                'woman’s clothes',
                'purse',
                'handbag',
                'clutch bag',
                'shopping bags',
                'backpack',
                'man’s shoe',
                'running shoe',
                'hiking boot',
                'flat shoe',
                'high-heeled shoe',
                'woman’s sandal',
                'woman’s boot',
                'crown',
                'woman’s hat',
                'top hat',
                'graduation cap',
                'billed cap',
                'rescue worker’s helmet',
                'prayer beads',
                'lipstick',
                'ring',
                'gem stone',
            ]
        ],
        'sound' => [
            'parent' => 'Objects',
            'children' => [
                'muted speaker',
                'speaker low volume',
                'speaker medium volume',
                'speaker high volume',
                'loudspeaker',
                'megaphone',
                'postal horn',
                'bell',
                'bell with slash',
            ]
        ],
        'music' => [
            'parent' => 'Objects',
            'children' => [
                'musical score',
                'musical note',
                'musical notes',
                'studio microphone',
                'level slider',
                'control knobs',
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
                'drum',
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
                'desktop computer',
                'printer',
                'keyboard',
                'computer mouse',
                'trackball',
                'computer disk',
                'floppy disk',
                'optical disk',
                'dvd',
                'abacus',
            ]
        ],
        'light & video' => [
            'parent' => 'Objects',
            'children' => [
                'movie camera',
                'film frames',
                'film projector',
                'clapper board',
                'television',
                'camera',
                'camera with flash',
                'video camera',
                'videocassette',
                'magnifying glass tilted left',
                'magnifying glass tilted right',
                'candle',
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
                'rolled-up newspaper',
                'bookmark tabs',
                'bookmark',
                'label',
            ]
        ],
        'money' => [
            'parent' => 'Objects',
            'children' => [
                'money bag',
                'yen banknote',
                'dollar banknote',
                'euro banknote',
                'pound banknote',
                'money with wings',
                'credit card',
                'receipt',
                'chart increasing with yen',
                'currency exchange',
                'heavy dollar sign',
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
                'open mailbox with raised flag',
                'open mailbox with lowered flag',
                'postbox',
                'ballot box with ballot',
            ]
        ],
        'writing' => [
            'parent' => 'Objects',
            'children' => [
                'pencil',
                'black nib',
                'fountain pen',
                'pen',
                'paintbrush',
                'crayon',
                'memo',
            ]
        ],
        'office' => [
            'parent' => 'Objects',
            'children' => [
                'briefcase',
                'file folder',
                'open file folder',
                'card index dividers',
                'calendar',
                'tear-off calendar',
                'spiral notepad',
                'spiral calendar',
                'card index',
                'chart increasing',
                'chart decreasing',
                'bar chart',
                'clipboard',
                'pushpin',
                'round pushpin',
                'paperclip',
                'linked paperclips',
                'straight ruler',
                'triangular ruler',
                'scissors',
                'card file box',
                'file cabinet',
                'wastebasket',
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
                'old key',
            ]
        ],
        'tool' => [
            'parent' => 'Objects',
            'children' => [
                'hammer',
                'pick',
                'hammer and pick',
                'hammer and wrench',
                'dagger',
                'crossed swords',
                'pistol',
                'bow and arrow',
                'shield',
                'wrench',
                'nut and bolt',
                'gear',
                'clamp',
                'balance scale',
                'link',
                'chains',
                'toolbox',
                'magnet',
            ]
        ],
        'science' => [
            'parent' => 'Objects',
            'children' => [
                'alembic',
                'test tube',
                'petri dish',
                'dna',
                'microscope',
                'telescope',
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
                'bed',
                'couch and lamp',
                'toilet',
                'shower',
                'bathtub',
                'lotion bottle',
                'safety pin',
                'broom',
                'basket',
                'roll of paper',
                'soap',
                'sponge',
                'fire extinguisher',
                'shopping cart',
            ]
        ],
        'other-object' => [
            'parent' => 'Objects',
            'children' => [
                'cigarette',
                'coffin',
                'funeral urn',
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
        'sunglasses' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':dark_sunglasses:',
            ]
        ],
        'goggles' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':goggles:',
            ]
        ],
        'lab coat' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':lab_coat:',
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
        'scarf' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':scarf:',
            ]
        ],
        'gloves' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':gloves:',
            ]
        ],
        'coat' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':coat:',
            ]
        ],
        'socks' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':socks:',
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
        'shopping bags' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':shopping_bags:',
            ]
        ],
        'backpack' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
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
        'hiking boot' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':hiking_boot:',
            ]
        ],
        'flat shoe' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
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
        'billed cap' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':billed_cap:',
            ]
        ],
        'rescue worker’s helmet' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':helmet_with_cross:',
                ':helmet_with_white_cross:',
            ]
        ],
        'prayer beads' => [
            'parent' => 'clothing',
            'children' => null,
            'aliases' => [
                ':prayer_beads:',
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
        'muted speaker' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':mute:',
            ]
        ],
        'speaker low volume' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':speaker:',
            ]
        ],
        'speaker medium volume' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':sound:',
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
        'postal horn' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':postal_horn:',
            ]
        ],
        'bell' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':bell:',
            ]
        ],
        'bell with slash' => [
            'parent' => 'sound',
            'children' => null,
            'aliases' => [
                ':no_bell:',
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
        'studio microphone' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':microphone2:',
                ':studio_microphone:',
            ]
        ],
        'level slider' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':level_slider:',
            ]
        ],
        'control knobs' => [
            'parent' => 'music',
            'children' => null,
            'aliases' => [
                ':control_knobs:',
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
        'drum' => [
            'parent' => 'musical-instrument',
            'children' => null,
            'aliases' => [
                ':drum:',
                ':drum_with_drumsticks:',
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
        'desktop computer' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':desktop:',
                ':desktop_computer:',
            ]
        ],
        'printer' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':printer:',
            ]
        ],
        'keyboard' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':keyboard:',
            ]
        ],
        'computer mouse' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':mouse_three_button:',
                ':three_button_mouse:',
            ]
        ],
        'trackball' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':trackball:',
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
        'abacus' => [
            'parent' => 'computer',
            'children' => null,
            'aliases' => [
                ':abacus:',
            ]
        ],
        'movie camera' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':movie_camera:',
            ]
        ],
        'film frames' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':film_frames:',
            ]
        ],
        'film projector' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':projector:',
                ':film_projector:',
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
        'camera with flash' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':camera_with_flash:',
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
        'candle' => [
            'parent' => 'light & video',
            'children' => null,
            'aliases' => [
                ':candle:',
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
        'rolled-up newspaper' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':newspaper2:',
                ':rolled_up_newspaper:',
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
        'label' => [
            'parent' => 'book-paper',
            'children' => null,
            'aliases' => [
                ':label:',
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
        'euro banknote' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':euro:',
            ]
        ],
        'pound banknote' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':pound:',
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
        'receipt' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':receipt:',
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
        'heavy dollar sign' => [
            'parent' => 'money',
            'children' => null,
            'aliases' => [
                ':heavy_dollar_sign:',
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
        'open mailbox with raised flag' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':mailbox_with_mail:',
            ]
        ],
        'open mailbox with lowered flag' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':mailbox_with_no_mail:',
            ]
        ],
        'postbox' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':postbox:',
            ]
        ],
        'ballot box with ballot' => [
            'parent' => 'mail',
            'children' => null,
            'aliases' => [
                ':ballot_box:',
                ':ballot_box_with_ballot:',
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
        'fountain pen' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':pen_fountain:',
                ':lower_left_fountain_pen:',
            ]
        ],
        'pen' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':pen_ballpoint:',
                ':lower_left_ballpoint_pen:',
            ]
        ],
        'paintbrush' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':paintbrush:',
                ':lower_left_paintbrush:',
            ]
        ],
        'crayon' => [
            'parent' => 'writing',
            'children' => null,
            'aliases' => [
                ':crayon:',
                ':lower_left_crayon:',
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
        'card index dividers' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':dividers:',
                ':card_index_dividers:',
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
        'spiral notepad' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':notepad_spiral:',
                ':spiral_note_pad:',
            ]
        ],
        'spiral calendar' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':calendar_spiral:',
                ':spiral_calendar_pad:',
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
        'linked paperclips' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':paperclips:',
                ':linked_paperclips:',
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
        'card file box' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':card_box:',
                ':card_file_box:',
            ]
        ],
        'file cabinet' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':file_cabinet:',
            ]
        ],
        'wastebasket' => [
            'parent' => 'office',
            'children' => null,
            'aliases' => [
                ':wastebasket:',
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
        'old key' => [
            'parent' => 'lock',
            'children' => null,
            'aliases' => [
                ':key2:',
                ':old_key:',
            ]
        ],
        'hammer' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':hammer:',
            ]
        ],
        'pick' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':pick:',
            ]
        ],
        'hammer and pick' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':hammer_pick:',
                ':hammer_and_pick:',
            ]
        ],
        'hammer and wrench' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':tools:',
                ':hammer_and_wrench:',
            ]
        ],
        'dagger' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':dagger:',
                ':dagger_knife:',
            ]
        ],
        'crossed swords' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':crossed_swords:',
            ]
        ],
        'pistol' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':gun:',
            ]
        ],
        'bow and arrow' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':bow_and_arrow:',
                ':archery:',
            ]
        ],
        'shield' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':shield:',
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
        'gear' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':gear:',
            ]
        ],
        'clamp' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':compression:',
            ]
        ],
        'balance scale' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':scales:',
            ]
        ],
        'link' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':link:',
            ]
        ],
        'chains' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':chains:',
            ]
        ],
        'toolbox' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':toolbox:',
            ]
        ],
        'magnet' => [
            'parent' => 'tool',
            'children' => null,
            'aliases' => [
                ':magnet:',
            ]
        ],
        'alembic' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':alembic:',
            ]
        ],
        'test tube' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':test_tube:',
            ]
        ],
        'petri dish' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':petri_dish:',
            ]
        ],
        'dna' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':dna:',
            ]
        ],
        'microscope' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':microscope:',
            ]
        ],
        'telescope' => [
            'parent' => 'science',
            'children' => null,
            'aliases' => [
                ':telescope:',
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
        'bed' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':bed:',
            ]
        ],
        'couch and lamp' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':couch:',
                ':couch_and_lamp:',
            ]
        ],
        'toilet' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':toilet:',
            ]
        ],
        'shower' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':shower:',
            ]
        ],
        'bathtub' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':bathtub:',
            ]
        ],
        'lotion bottle' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
            ]
        ],
        'safety pin' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':safety_pin:',
            ]
        ],
        'broom' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':broom:',
            ]
        ],
        'basket' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':basket:',
            ]
        ],
        'roll of paper' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':roll_of_paper:',
            ]
        ],
        'soap' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':soap:',
            ]
        ],
        'sponge' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':sponge:',
            ]
        ],
        'fire extinguisher' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':fire_extinguisher:',
            ]
        ],
        'shopping cart' => [
            'parent' => 'household',
            'children' => null,
            'aliases' => [
                ':shopping_cart:',
                ':shopping_trolley:',
            ]
        ],
        'cigarette' => [
            'parent' => 'other-object',
            'children' => null,
            'aliases' => [
                ':smoking:',
            ]
        ],
        'coffin' => [
            'parent' => 'other-object',
            'children' => null,
            'aliases' => [
                ':coffin:',
            ]
        ],
        'funeral urn' => [
            'parent' => 'other-object',
            'children' => null,
            'aliases' => [
                ':urn:',
                ':funeral_urn:',
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
