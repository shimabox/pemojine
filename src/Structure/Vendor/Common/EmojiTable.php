<?phpnamespace SMB\Pemojine\Structure\Vendor\Common;

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
        'winking face' => 'U+1F609',
        'smiling face with heart-eyes' => 'U+1F60D',
        'winking face with tongue' => 'U+1F61C',
        'smirking face' => 'U+1F60F',
        'unamused face' => 'U+1F612',
        'relieved face' => 'U+1F60C',
        'pensive face' => 'U+1F614',
        'crying face' => 'U+1F622',
        'loudly crying face' => 'U+1F62D',
        'face screaming in fear' => 'U+1F631',
        'confounded face' => 'U+1F616',
        'persevering face' => 'U+1F623',
        'downcast face with sweat' => 'U+1F613',
        'pouting face' => 'U+1F621',
        'angry face' => 'U+1F620',
        'kiss mark' => 'U+1F48B',
        'beating heart' => 'U+1F493',
        'broken heart' => 'U+1F494',
        'red heart' => 'U+2764',
        'anger symbol' => 'U+1F4A2',
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
        'footprints' => 'U+1F463',
        'dog face' => 'U+1F436',
        'cat face' => 'U+1F431',
        'horse face' => 'U+1F434',
        'pig face' => 'U+1F437',
        'baby chick' => 'U+1F424',
        'penguin' => 'U+1F427',
        'cherry blossom' => 'U+1F338',
        'tulip' => 'U+1F337',
        'four leaf clover' => 'U+1F340',
        'maple leaf' => 'U+1F341',
        'red apple' => 'U+1F34E',
        'bread' => 'U+1F35E',
        'hamburger' => 'U+1F354',
        'rice ball' => 'U+1F359',
        'steaming bowl' => 'U+1F35C',
        'birthday cake' => 'U+1F382',
        'shortcake' => 'U+1F370',
        'hot beverage' => 'U+2615',
        'teacup without handle' => 'U+1F375',
        'sake' => 'U+1F376',
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
        'night with stars' => 'U+1F303',
        'hot springs' => 'U+2668',
        'railway car' => 'U+1F683',
        'bus' => 'U+1F68C',
        'automobile' => 'U+1F697',
        'bicycle' => 'U+1F6B2',
        'fuel pump' => 'U+26FD',
        'horizontal traffic light' => 'U+1F6A5',
        'sailboat' => 'U+26F5',
        'ship' => 'U+1F6A2',
        'airplane' => 'U+2708',
        'crescent moon' => 'U+1F319',
        'sun' => 'U+2600',
        'cloud' => 'U+2601',
        'cyclone' => 'U+1F300',
        'closed umbrella' => 'U+1F302',
        'umbrella with rain drops' => 'U+2614',
        'high voltage' => 'U+26A1',
        'snowman without snow' => 'U+26C4',
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
        'skis' => 'U+1F3BF',
        'spade suit' => 'U+2660',
        'heart suit' => 'U+2665',
        'diamond suit' => 'U+2666',
        'club suit' => 'U+2663',
        'artist palette' => 'U+1F3A8',
        't-shirt' => 'U+1F455',
        'handbag' => 'U+1F45C',
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
        'envelope with arrow' => 'U+1F4E9',
        'memo' => 'U+1F4DD',
        'scissors' => 'U+2702',
        'key' => 'U+1F511',
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
        'exclamation mark' => 'U+2757',
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
        'ID button' => 'U+1F194',
        'NEW button' => 'U+1F195',
        'OK button' => 'U+1F197',
        'P button' => 'U+1F17F',
        'Japanese “vacancy” button' => 'U+1F233',
        'Japanese “secret” button' => 'U+3299',
        'Japanese “no vacancy” button' => 'U+1F235',
        'chequered flag' => 'U+1F3C1',
    ];

    /**
     *
     * @var array
     */
    public static $mappingOfShortName = [
        ':smiley:' => 'grinning face with big eyes',
        ':D' => 'grinning face with big eyes',
        ':-D' => 'grinning face with big eyes',
        '=D' => 'grinning face with big eyes',
        ':grin:' => 'beaming face with smiling eyes',
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
        ':stuck_out_tongue_winking_eye:' => 'winking face with tongue',
        '>:P' => 'winking face with tongue',
        'X-P' => 'winking face with tongue',
        ':smirk:' => 'smirking face',
        ':unamused:' => 'unamused face',
        ':relieved:' => 'relieved face',
        ':pensive:' => 'pensive face',
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
        ':heartbeat:' => 'beating heart',
        ':broken_heart:' => 'broken heart',
        '</3' => 'broken heart',
        ':heart:' => 'red heart',
        '<3' => 'red heart',
        ':anger:' => 'anger symbol',
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
        ':footprints:' => 'footprints',
        ':dog:' => 'dog face',
        ':cat:' => 'cat face',
        ':horse:' => 'horse face',
        ':pig:' => 'pig face',
        ':baby_chick:' => 'baby chick',
        ':penguin:' => 'penguin',
        ':cherry_blossom:' => 'cherry blossom',
        ':tulip:' => 'tulip',
        ':four_leaf_clover:' => 'four leaf clover',
        ':maple_leaf:' => 'maple leaf',
        ':apple:' => 'red apple',
        ':bread:' => 'bread',
        ':hamburger:' => 'hamburger',
        ':rice_ball:' => 'rice ball',
        ':ramen:' => 'steaming bowl',
        ':birthday:' => 'birthday cake',
        ':cake:' => 'shortcake',
        ':coffee:' => 'hot beverage',
        ':tea:' => 'teacup without handle',
        ':sake:' => 'sake',
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
        ':night_with_stars:' => 'night with stars',
        ':hotsprings:' => 'hot springs',
        ':railway_car:' => 'railway car',
        ':bus:' => 'bus',
        ':red_car:' => 'automobile',
        ':bike:' => 'bicycle',
        ':fuelpump:' => 'fuel pump',
        ':traffic_light:' => 'horizontal traffic light',
        ':sailboat:' => 'sailboat',
        ':ship:' => 'ship',
        ':airplane:' => 'airplane',
        ':crescent_moon:' => 'crescent moon',
        ':sunny:' => 'sun',
        ':cloud:' => 'cloud',
        ':cyclone:' => 'cyclone',
        ':closed_umbrella:' => 'closed umbrella',
        ':umbrella:' => 'umbrella with rain drops',
        ':zap:' => 'high voltage',
        ':snowman:' => 'snowman without snow',
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
        ':ski:' => 'skis',
        ':spades:' => 'spade suit',
        ':hearts:' => 'heart suit',
        ':diamonds:' => 'diamond suit',
        ':clubs:' => 'club suit',
        ':art:' => 'artist palette',
        ':shirt:' => 't-shirt',
        ':handbag:' => 'handbag',
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
        ':envelope_with_arrow:' => 'envelope with arrow',
        ':pencil:' => 'memo',
        ':memo:' => 'memo',
        ':scissors:' => 'scissors',
        ':key:' => 'key',
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
        ':exclamation:' => 'exclamation mark',
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
        ':id:' => 'ID button',
        ':new:' => 'NEW button',
        ':ok:' => 'OK button',
        ':parking:' => 'P button',
        ':u7a7a:' => 'Japanese “vacancy” button',
        ':secret:' => 'Japanese “secret” button',
        ':u6e80:' => 'Japanese “no vacancy” button',
        ':checkered_flag:' => 'chequered flag',
    ];
}
