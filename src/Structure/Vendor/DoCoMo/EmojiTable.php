<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

use SMB\Pemojine\Structure\Interfaces\EmojiTable\Gettable;
use SMB\Pemojine\Structure\Traits\EmojiTableTrait;

/**
 *
 */
class EmojiTable implements Gettable
{
    use EmojiTableTrait;

    /**
     *
     * @var array
     */
    private static $table = [
        'grinning face with big eyes' => 'U+1F603',
        'beaming face with smiling eyes' => 'U+1F601',
        'grinning squinting face' => 'U+1F606',
        'grinning face with sweat' => 'U+1F605',
        'winking face' => 'U+1F609',
        'smiling face with heart-eyes' => 'U+1F60D',
        'face savoring food' => 'U+1F60B',
        'winking face with tongue' => 'U+1F61C',
        'smirking face' => 'U+1F60F',
        'unamused face' => 'U+1F612',
        'relieved face' => 'U+1F60C',
        'pensive face' => 'U+1F614',
        'dizzy face' => 'U+1F635',
        'crying face' => 'U+1F622',
        'loudly crying face' => 'U+1F62D',
        'face screaming in fear' => 'U+1F631',
        'confounded face' => 'U+1F616',
        'persevering face' => 'U+1F623',
        'disappointed face' => 'U+1F61E',
        'downcast face with sweat' => 'U+1F613',
        'pouting face' => 'U+1F621',
        'angry face' => 'U+1F620',
        'kiss mark' => 'U+1F48B',
        'love letter' => 'U+1F48C',
        'beating heart' => 'U+1F493',
        'two hearts' => 'U+1F495',
        'broken heart' => 'U+1F494',
        'red heart' => 'U+2764',
        'anger symbol' => 'U+1F4A2',
        'collision' => 'U+1F4A5',
        'sweat droplets' => 'U+1F4A6',
        'dashing away' => 'U+1F4A8',
        'bomb' => 'U+1F4A3',
        'zzz' => 'U+1F4A4',
        'raised hand' => 'U+270B',
        'victory hand' => 'U+270C',
        'thumbs up' => 'U+1F44D',
        'raised fist' => 'U+270A',
        'oncoming fist' => 'U+1F44A',
        'ear' => 'U+1F442',
        'eyes' => 'U+1F440',
        'person running' => 'U+1F3C3',
        'snowboarder' => 'U+1F3C2',
        'bust in silhouette' => 'U+1F464',
        'footprints' => 'U+1F463',
        'dog face' => 'U+1F436',
        'cat face' => 'U+1F431',
        'horse face' => 'U+1F434',
        'pig face' => 'U+1F437',
        'baby chick' => 'U+1F424',
        'penguin' => 'U+1F427',
        'fish' => 'U+1F41F',
        'snail' => 'U+1F40C',
        'cherry blossom' => 'U+1F338',
        'tulip' => 'U+1F337',
        'seedling' => 'U+1F331',
        'four leaf clover' => 'U+1F340',
        'maple leaf' => 'U+1F341',
        'banana' => 'U+1F34C',
        'red apple' => 'U+1F34E',
        'cherries' => 'U+1F352',
        'bread' => 'U+1F35E',
        'hamburger' => 'U+1F354',
        'rice ball' => 'U+1F359',
        'steaming bowl' => 'U+1F35C',
        'birthday cake' => 'U+1F382',
        'shortcake' => 'U+1F370',
        'hot beverage' => 'U+2615',
        'teacup without handle' => 'U+1F375',
        'sake' => 'U+1F376',
        'wine glass' => 'U+1F377',
        'cocktail glass' => 'U+1F378',
        'beer mug' => 'U+1F37A',
        'fork and knife' => 'U+1F374',
        'mount fuji' => 'U+1F5FB',
        'house' => 'U+1F3E0',
        'office building' => 'U+1F3E2',
        'Japanese post office' => 'U+1F3E3',
        'hospital' => 'U+1F3E5',
        'bank' => 'U+1F3E6',
        'hotel' => 'U+1F3E8',
        'convenience store' => 'U+1F3EA',
        'school' => 'U+1F3EB',
        'foggy' => 'U+1F301',
        'night with stars' => 'U+1F303',
        'hot springs' => 'U+2668',
        'carousel horse' => 'U+1F3A0',
        'circus tent' => 'U+1F3AA',
        'railway car' => 'U+1F683',
        'high-speed train' => 'U+1F684',
        'bus' => 'U+1F68C',
        'automobile' => 'U+1F697',
        'sport utility vehicle' => 'U+1F699',
        'bicycle' => 'U+1F6B2',
        'fuel pump' => 'U+26FD',
        'horizontal traffic light' => 'U+1F6A5',
        'sailboat' => 'U+26F5',
        'ship' => 'U+1F6A2',
        'airplane' => 'U+2708',
        'seat' => 'U+1F4BA',
        'hourglass not done' => 'U+23F3',
        'watch' => 'U+231A',
        'alarm clock' => 'U+23F0',
        'new moon' => 'U+1F311',
        'first quarter moon' => 'U+1F313',
        'waxing gibbous moon' => 'U+1F314',
        'full moon' => 'U+1F315',
        'crescent moon' => 'U+1F319',
        'sun' => 'U+2600',
        'cloud' => 'U+2601',
        'cyclone' => 'U+1F300',
        'closed umbrella' => 'U+1F302',
        'umbrella with rain drops' => 'U+2614',
        'high voltage' => 'U+26A1',
        'snowman without snow' => 'U+26C4',
        'droplet' => 'U+1F4A7',
        'water wave' => 'U+1F30A',
        'Christmas tree' => 'U+1F384',
        'sparkles' => 'U+2728',
        'ribbon' => 'U+1F380',
        'wrapped gift' => 'U+1F381',
        'ticket' => 'U+1F3AB',
        'soccer ball' => 'U+26BD',
        'baseball' => 'U+26BE',
        'basketball' => 'U+1F3C0',
        'tennis' => 'U+1F3BE',
        'flag in hole' => 'U+26F3',
        'running shirt' => 'U+1F3BD',
        'skis' => 'U+1F3BF',
        'video game' => 'U+1F3AE',
        'spade suit' => 'U+2660',
        'heart suit' => 'U+2665',
        'diamond suit' => 'U+2666',
        'club suit' => 'U+2663',
        'artist palette' => 'U+1F3A8',
        'glasses' => 'U+1F453',
        't-shirt' => 'U+1F455',
        'jeans' => 'U+1F456',
        'purse' => 'U+1F45B',
        'handbag' => 'U+1F45C',
        'clutch bag' => 'U+1F45D',
        'running shoe' => 'U+1F45F',
        'high-heeled shoe' => 'U+1F460',
        'crown' => 'U+1F451',
        'top hat' => 'U+1F3A9',
        'lipstick' => 'U+1F484',
        'ring' => 'U+1F48D',
        'bell' => 'U+1F514',
        'musical note' => 'U+1F3B5',
        'musical notes' => 'U+1F3B6',
        'microphone' => 'U+1F3A4',
        'headphone' => 'U+1F3A7',
        'mobile phone' => 'U+1F4F1',
        'mobile phone with arrow' => 'U+1F4F2',
        'telephone' => 'U+260E',
        'pager' => 'U+1F4DF',
        'fax machine' => 'U+1F4E0',
        'laptop' => 'U+1F4BB',
        'optical disk' => 'U+1F4BF',
        'movie camera' => 'U+1F3A5',
        'clapper board' => 'U+1F3AC',
        'television' => 'U+1F4FA',
        'camera' => 'U+1F4F7',
        'magnifying glass tilted left' => 'U+1F50D',
        'light bulb' => 'U+1F4A1',
        'open book' => 'U+1F4D6',
        'money bag' => 'U+1F4B0',
        'yen banknote' => 'U+1F4B4',
        'envelope' => 'U+2709',
        'envelope with arrow' => 'U+1F4E9',
        'pencil' => 'U+270F',
        'black nib' => 'U+2712',
        'memo' => 'U+1F4DD',
        'paperclip' => 'U+1F4CE',
        'scissors' => 'U+2702',
        'key' => 'U+1F511',
        'wrench' => 'U+1F527',
        'door' => 'U+1F6AA',
        'cigarette' => 'U+1F6AC',
        'ATM sign' => 'U+1F3E7',
        'wheelchair symbol' => 'U+267F',
        'restroom' => 'U+1F6BB',
        'warning' => 'U+26A0',
        'no smoking' => 'U+1F6AD',
        'up-right arrow' => 'U+2197',
        'down-right arrow' => 'U+2198',
        'down-left arrow' => 'U+2199',
        'up-left arrow' => 'U+2196',
        'up-down arrow' => 'U+2195',
        'left-right arrow' => 'U+2194',
        'right arrow curving left' => 'U+21A9',
        'right arrow curving up' => 'U+2934',
        'right arrow curving down' => 'U+2935',
        'END arrow' => 'U+1F51A',
        'ON! arrow' => 'U+1F51B',
        'SOON arrow' => 'U+1F51C',
        'Aries' => 'U+2648',
        'Taurus' => 'U+2649',
        'Gemini' => 'U+264A',
        'Cancer' => 'U+264B',
        'Leo' => 'U+264C',
        'Virgo' => 'U+264D',
        'Libra' => 'U+264E',
        'Scorpio' => 'U+264F',
        'Sagittarius' => 'U+2650',
        'Capricorn' => 'U+2651',
        'Aquarius' => 'U+2652',
        'Pisces' => 'U+2653',
        'double exclamation mark' => 'U+203C',
        'exclamation question mark' => 'U+2049',
        'exclamation mark' => 'U+2757',
        'wavy dash' => 'U+3030',
        'recycling symbol' => 'U+267B',
        'curly loop' => 'U+27B0',
        'copyright' => 'U+00A9',
        'registered' => 'U+00AE',
        'trade mark' => 'U+2122',
        'keycap: #' => 'U+0023 U+FE0F U+20E3',
        'keycap: 0' => 'U+0030 U+FE0F U+20E3',
        'keycap: 1' => 'U+0031 U+FE0F U+20E3',
        'keycap: 2' => 'U+0032 U+FE0F U+20E3',
        'keycap: 3' => 'U+0033 U+FE0F U+20E3',
        'keycap: 4' => 'U+0034 U+FE0F U+20E3',
        'keycap: 5' => 'U+0035 U+FE0F U+20E3',
        'keycap: 6' => 'U+0036 U+FE0F U+20E3',
        'keycap: 7' => 'U+0037 U+FE0F U+20E3',
        'keycap: 8' => 'U+0038 U+FE0F U+20E3',
        'keycap: 9' => 'U+0039 U+FE0F U+20E3',
        'CL button' => 'U+1F191',
        'FREE button' => 'U+1F193',
        'ID button' => 'U+1F194',
        'circled M' => 'U+24C2',
        'NEW button' => 'U+1F195',
        'NG button' => 'U+1F196',
        'OK button' => 'U+1F197',
        'P button' => 'U+1F17F',
        'Japanese “prohibited” button' => 'U+1F232',
        'Japanese “passing grade” button' => 'U+1F234',
        'Japanese “vacancy” button' => 'U+1F233',
        'Japanese “secret” button' => 'U+3299',
        'Japanese “no vacancy” button' => 'U+1F235',
        'diamond with a dot' => 'U+1F4A0',
        'chequered flag' => 'U+1F3C1',
        'triangular flag' => 'U+1F6A9',
    ];

    /**
     *
     * @var array
     */
    public static $mappingOfShortName = [
        ':smiley:' => 'grinning face with big eyes',
        ':-D' => 'grinning face with big eyes',
        '=D' => 'grinning face with big eyes',
        ':grin:' => 'beaming face with smiling eyes',
        ':laughing:' => 'grinning squinting face',
        ':satisfied:' => 'grinning squinting face',
        '>:)' => 'grinning squinting face',
        '>;)' => 'grinning squinting face',
        '>:-)' => 'grinning squinting face',
        '>=)' => 'grinning squinting face',
        ':sweat_smile:' => 'grinning face with sweat',
        '\':)' => 'grinning face with sweat', // ':)
        '\':-)' => 'grinning face with sweat', // ':-)
        '\'=)' => 'grinning face with sweat', // '=)
        '\':D' => 'grinning face with sweat', // ':D
        '\':-D' => 'grinning face with sweat', // ':-D
        '\'=D' => 'grinning face with sweat', // '=D
        ':wink:' => 'winking face',
        ';)' => 'winking face',
        ';-)' => 'winking face',
        '*-)' => 'winking face',
        '*)' => 'winking face',
        ';-]' => 'winking face',
        ';]' => 'winking face',
        ';D' => 'winking face',
        ';^)' => 'winking face',
        ':heart_eyes:' => 'smiling face with heart-eyes',
        ':yum:' => 'face savoring food',
        ':stuck_out_tongue_winking_eye:' => 'winking face with tongue',
        '>:P' => 'winking face with tongue',
        'X-P' => 'winking face with tongue',
        ':smirk:' => 'smirking face',
        ':unamused:' => 'unamused face',
        ':relieved:' => 'relieved face',
        ':pensive:' => 'pensive face',
        ':dizzy_face:' => 'dizzy face',
        '#-)' => 'dizzy face',
        '#)' => 'dizzy face',
        '%-)' => 'dizzy face',
        '%)' => 'dizzy face',
        'X)' => 'dizzy face',
        'X-)' => 'dizzy face',
        ':cry:' => 'crying face',
        ':\'(' => 'crying face', // :'(
        ':\'-(' => 'crying face', // :'-(
        ';(' => 'crying face',
        ';-(' => 'crying face',
        ':sob:' => 'loudly crying face',
        ':scream:' => 'face screaming in fear',
        ':confounded:' => 'confounded face',
        ':persevere:' => 'persevering face',
        '>.<' => 'persevering face',
        ':disappointed:' => 'disappointed face',
        '>:[' => 'disappointed face',
        ':-(' => 'disappointed face',
        ':(' => 'disappointed face',
        ':-[' => 'disappointed face',
        ':[' => 'disappointed face',
        '=(' => 'disappointed face',
        ':sweat:' => 'downcast face with sweat',
        '\':(' => 'downcast face with sweat', // ':(
        '\':-(' => 'downcast face with sweat', // ':-(
        '\'=(' => 'downcast face with sweat', // '=(
        ':rage:' => 'pouting face',
        ':angry:' => 'angry face',
        '>:(' => 'angry face',
        '>:-(' => 'angry face',
        ':@' => 'angry face',
        ':kiss:' => 'kiss mark',
        ':love_letter:' => 'love letter',
        ':heartbeat:' => 'beating heart',
        ':two_hearts:' => 'two hearts',
        ':broken_heart:' => 'broken heart',
        '</3' => 'broken heart',
        ':heart:' => 'red heart',
        '<3' => 'red heart',
        ':anger:' => 'anger symbol',
        ':boom:' => 'collision',
        ':sweat_drops:' => 'sweat droplets',
        ':dash:' => 'dashing away',
        ':bomb:' => 'bomb',
        ':zzz:' => 'zzz',
        ':raised_hand:' => 'raised hand',
        ':v:' => 'victory hand',
        ':thumbsup:' => 'thumbs up',
        ':+1:' => 'thumbs up',
        ':thumbup:' => 'thumbs up',
        '(y)' => 'thumbs up',
        ':fist:' => 'raised fist',
        ':punch:' => 'oncoming fist',
        ':ear:' => 'ear',
        ':eyes:' => 'eyes',
        ':person_running:' => 'person running',
        ':runner:' => 'person running',
        ':snowboarder:' => 'snowboarder',
        ':bust_in_silhouette:' => 'bust in silhouette',
        ':footprints:' => 'footprints',
        ':dog:' => 'dog face',
        ':cat:' => 'cat face',
        ':horse:' => 'horse face',
        ':pig:' => 'pig face',
        ':baby_chick:' => 'baby chick',
        ':penguin:' => 'penguin',
        ':fish:' => 'fish',
        ':snail:' => 'snail',
        ':cherry_blossom:' => 'cherry blossom',
        ':tulip:' => 'tulip',
        ':seedling:' => 'seedling',
        ':four_leaf_clover:' => 'four leaf clover',
        ':maple_leaf:' => 'maple leaf',
        ':banana:' => 'banana',
        ':apple:' => 'red apple',
        ':cherries:' => 'cherries',
        ':bread:' => 'bread',
        ':hamburger:' => 'hamburger',
        ':rice_ball:' => 'rice ball',
        ':ramen:' => 'steaming bowl',
        ':birthday:' => 'birthday cake',
        ':cake:' => 'shortcake',
        ':coffee:' => 'hot beverage',
        ':tea:' => 'teacup without handle',
        ':sake:' => 'sake',
        ':wine_glass:' => 'wine glass',
        ':cocktail:' => 'cocktail glass',
        ':beer:' => 'beer mug',
        ':fork_and_knife:' => 'fork and knife',
        ':mount_fuji:' => 'mount fuji',
        ':house:' => 'house',
        ':office:' => 'office building',
        ':post_office:' => 'Japanese post office',
        ':hospital:' => 'hospital',
        ':bank:' => 'bank',
        ':hotel:' => 'hotel',
        ':convenience_store:' => 'convenience store',
        ':school:' => 'school',
        ':foggy:' => 'foggy',
        ':night_with_stars:' => 'night with stars',
        ':hotsprings:' => 'hot springs',
        ':carousel_horse:' => 'carousel horse',
        ':circus_tent:' => 'circus tent',
        ':railway_car:' => 'railway car',
        ':bullettrain_side:' => 'high-speed train',
        ':bus:' => 'bus',
        ':red_car:' => 'automobile',
        ':blue_car:' => 'sport utility vehicle',
        ':bike:' => 'bicycle',
        ':fuelpump:' => 'fuel pump',
        ':traffic_light:' => 'horizontal traffic light',
        ':sailboat:' => 'sailboat',
        ':ship:' => 'ship',
        ':airplane:' => 'airplane',
        ':seat:' => 'seat',
        ':hourglass_flowing_sand:' => 'hourglass not done',
        ':watch:' => 'watch',
        ':alarm_clock:' => 'alarm clock',
        ':new_moon:' => 'new moon',
        ':first_quarter_moon:' => 'first quarter moon',
        ':waxing_gibbous_moon:' => 'waxing gibbous moon',
        ':full_moon:' => 'full moon',
        ':crescent_moon:' => 'crescent moon',
        ':sunny:' => 'sun',
        ':cloud:' => 'cloud',
        ':cyclone:' => 'cyclone',
        ':closed_umbrella:' => 'closed umbrella',
        ':umbrella:' => 'umbrella with rain drops',
        ':zap:' => 'high voltage',
        ':snowman:' => 'snowman without snow',
        ':droplet:' => 'droplet',
        ':ocean:' => 'water wave',
        ':christmas_tree:' => 'Christmas tree',
        ':sparkles:' => 'sparkles',
        ':ribbon:' => 'ribbon',
        ':gift:' => 'wrapped gift',
        ':ticket:' => 'ticket',
        ':soccer:' => 'soccer ball',
        ':baseball:' => 'baseball',
        ':basketball:' => 'basketball',
        ':tennis:' => 'tennis',
        ':golf:' => 'flag in hole',
        ':running_shirt_with_sash:' => 'running shirt',
        ':ski:' => 'skis',
        ':video_game:' => 'video game',
        ':spades:' => 'spade suit',
        ':hearts:' => 'heart suit',
        ':diamonds:' => 'diamond suit',
        ':clubs:' => 'club suit',
        ':art:' => 'artist palette',
        ':eyeglasses:' => 'glasses',
        ':shirt:' => 't-shirt',
        ':jeans:' => 'jeans',
        ':purse:' => 'purse',
        ':handbag:' => 'handbag',
        ':pouch:' => 'clutch bag',
        ':athletic_shoe:' => 'running shoe',
        ':high_heel:' => 'high-heeled shoe',
        ':crown:' => 'crown',
        ':tophat:' => 'top hat',
        ':lipstick:' => 'lipstick',
        ':ring:' => 'ring',
        ':bell:' => 'bell',
        ':musical_note:' => 'musical note',
        ':notes:' => 'musical notes',
        ':microphone:' => 'microphone',
        ':headphones:' => 'headphone',
        ':iphone:' => 'mobile phone',
        ':calling:' => 'mobile phone with arrow',
        ':telephone:' => 'telephone',
        ':pager:' => 'pager',
        ':fax:' => 'fax machine',
        ':cd:' => 'optical disk',
        ':movie_camera:' => 'movie camera',
        ':clapper:' => 'clapper board',
        ':tv:' => 'television',
        ':camera:' => 'camera',
        ':mag:' => 'magnifying glass tilted left',
        ':bulb:' => 'light bulb',
        ':book:' => 'open book',
        ':moneybag:' => 'money bag',
        ':yen:' => 'yen banknote',
        ':envelope:' => 'envelope',
        ':envelope_with_arrow:' => 'envelope with arrow',
        ':pencil2:' => 'pencil',
        ':black_nib:' => 'black nib',
        ':pencil:' => 'memo',
        ':memo:' => 'memo',
        ':paperclip:' => 'paperclip',
        ':scissors:' => 'scissors',
        ':key:' => 'key',
        ':wrench:' => 'wrench',
        ':door:' => 'door',
        ':smoking:' => 'cigarette',
        ':atm:' => 'ATM sign',
        ':wheelchair:' => 'wheelchair symbol',
        ':restroom:' => 'restroom',
        ':warning:' => 'warning',
        ':no_smoking:' => 'no smoking',
        ':arrow_upper_right:' => 'up-right arrow',
        ':arrow_lower_right:' => 'down-right arrow',
        ':arrow_lower_left:' => 'down-left arrow',
        ':arrow_upper_left:' => 'up-left arrow',
        ':arrow_up_down:' => 'up-down arrow',
        ':left_right_arrow:' => 'left-right arrow',
        ':leftwards_arrow_with_hook:' => 'right arrow curving left',
        ':arrow_heading_up:' => 'right arrow curving up',
        ':arrow_heading_down:' => 'right arrow curving down',
        ':end:' => 'END arrow',
        ':on:' => 'ON! arrow',
        ':soon:' => 'SOON arrow',
        ':aries:' => 'Aries',
        ':taurus:' => 'Taurus',
        ':gemini:' => 'Gemini',
        ':cancer:' => 'Cancer',
        ':leo:' => 'Leo',
        ':virgo:' => 'Virgo',
        ':libra:' => 'Libra',
        ':scorpius:' => 'Scorpio',
        ':sagittarius:' => 'Sagittarius',
        ':capricorn:' => 'Capricorn',
        ':aquarius:' => 'Aquarius',
        ':pisces:' => 'Pisces',
        ':bangbang:' => 'double exclamation mark',
        ':interrobang:' => 'exclamation question mark',
        ':exclamation:' => 'exclamation mark',
        ':wavy_dash:' => 'wavy dash',
        ':recycle:' => 'recycling symbol',
        ':curly_loop:' => 'curly loop',
        ':copyright:' => 'copyright',
        ':registered:' => 'registered',
        ':tm:' => 'trade mark',
        ':hash:' => 'keycap: #',
        ':zero:' => 'keycap: 0',
        ':one:' => 'keycap: 1',
        ':two:' => 'keycap: 2',
        ':three:' => 'keycap: 3',
        ':four:' => 'keycap: 4',
        ':five:' => 'keycap: 5',
        ':six:' => 'keycap: 6',
        ':seven:' => 'keycap: 7',
        ':eight:' => 'keycap: 8',
        ':nine:' => 'keycap: 9',
        ':cl:' => 'CL button',
        ':free:' => 'FREE button',
        ':id:' => 'ID button',
        ':m:' => 'circled M',
        ':new:' => 'NEW button',
        ':ng:' => 'NG button',
        ':ok:' => 'OK button',
        ':parking:' => 'P button',
        ':u7981:' => 'Japanese “prohibited” button',
        ':u5408:' => 'Japanese “passing grade” button',
        ':u7a7a:' => 'Japanese “vacancy” button',
        ':secret:' => 'Japanese “secret” button',
        ':u6e80:' => 'Japanese “no vacancy” button',
        ':diamond_shape_with_a_dot_inside:' => 'diamond with a dot',
        ':checkered_flag:' => 'chequered flag',
        ':triangular_flag_on_post:' => 'triangular flag',
    ];
}
