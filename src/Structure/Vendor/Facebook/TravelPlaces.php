<?phpnamespace SMB\Pemojine\Structure\Vendor\Facebook;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class TravelPlaces implements Gettable
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
        'Travel & Places' => [
            'parent' => null,
            'children' => [
                'place-map',
                'place-geographic',
                'place-building',
                'place-religious',
                'place-other',
                'transport-ground',
                'transport-water',
                'transport-air',
                'hotel',
                'time',
                'sky & weather',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'place-map' => [
            'parent' => 'Travel & Places',
            'children' => [
                'globe showing Europe-Africa',
                'globe showing Americas',
                'globe showing Asia-Australia',
                'globe with meridians',
                'world map',
                'map of Japan',
                '⊛ compass',
            ]
        ],
        'place-geographic' => [
            'parent' => 'Travel & Places',
            'children' => [
                'snow-capped mountain',
                'mountain',
                'volcano',
                'mount fuji',
                'camping',
                'beach with umbrella',
                'desert',
                'desert island',
                'national park',
            ]
        ],
        'place-building' => [
            'parent' => 'Travel & Places',
            'children' => [
                'stadium',
                'classical building',
                'building construction',
                '⊛ brick',
                'houses',
                'derelict house',
                'house',
                'house with garden',
                'office building',
                'Japanese post office',
                'post office',
                'hospital',
                'bank',
                'hotel',
                'love hotel',
                'convenience store',
                'school',
                'department store',
                'factory',
                'Japanese castle',
                'castle',
                'wedding',
                'Tokyo tower',
                'Statue of Liberty',
            ]
        ],
        'place-religious' => [
            'parent' => 'Travel & Places',
            'children' => [
                'church',
                'mosque',
                'synagogue',
                'shinto shrine',
                'kaaba',
            ]
        ],
        'place-other' => [
            'parent' => 'Travel & Places',
            'children' => [
                'fountain',
                'tent',
                'foggy',
                'night with stars',
                'cityscape',
                'sunrise over mountains',
                'sunrise',
                'cityscape at dusk',
                'sunset',
                'bridge at night',
                'hot springs',
                'milky way',
                'carousel horse',
                'ferris wheel',
                'roller coaster',
                'barber pole',
                'circus tent',
            ]
        ],
        'transport-ground' => [
            'parent' => 'Travel & Places',
            'children' => [
                'locomotive',
                'railway car',
                'high-speed train',
                'bullet train',
                'train',
                'metro',
                'light rail',
                'station',
                'tram',
                'monorail',
                'mountain railway',
                'tram car',
                'bus',
                'oncoming bus',
                'trolleybus',
                'minibus',
                'ambulance',
                'fire engine',
                'police car',
                'oncoming police car',
                'taxi',
                'oncoming taxi',
                'automobile',
                'oncoming automobile',
                'sport utility vehicle',
                'delivery truck',
                'articulated lorry',
                'tractor',
                'racing car',
                'motorcycle',
                'motor scooter',
                'bicycle',
                'kick scooter',
                '⊛ skateboard',
                'bus stop',
                'motorway',
                'railway track',
                'oil drum',
                'fuel pump',
                'police car light',
                'horizontal traffic light',
                'vertical traffic light',
                'stop sign',
                'construction',
            ]
        ],
        'transport-water' => [
            'parent' => 'Travel & Places',
            'children' => [
                'anchor',
                'sailboat',
                'canoe',
                'speedboat',
                'passenger ship',
                'ferry',
                'motor boat',
                'ship',
            ]
        ],
        'transport-air' => [
            'parent' => 'Travel & Places',
            'children' => [
                'airplane',
                'small airplane',
                'airplane departure',
                'airplane arrival',
                'seat',
                'helicopter',
                'suspension railway',
                'mountain cableway',
                'aerial tramway',
                'satellite',
                'rocket',
                'flying saucer',
            ]
        ],
        'hotel' => [
            'parent' => 'Travel & Places',
            'children' => [
                'bellhop bell',
                '⊛ luggage',
            ]
        ],
        'time' => [
            'parent' => 'Travel & Places',
            'children' => [
                'hourglass done',
                'hourglass not done',
                'watch',
                'alarm clock',
                'stopwatch',
                'timer clock',
                'mantelpiece clock',
                'twelve o’clock',
                'twelve-thirty',
                'one o’clock',
                'one-thirty',
                'two o’clock',
                'two-thirty',
                'three o’clock',
                'three-thirty',
                'four o’clock',
                'four-thirty',
                'five o’clock',
                'five-thirty',
                'six o’clock',
                'six-thirty',
                'seven o’clock',
                'seven-thirty',
                'eight o’clock',
                'eight-thirty',
                'nine o’clock',
                'nine-thirty',
                'ten o’clock',
                'ten-thirty',
                'eleven o’clock',
                'eleven-thirty',
            ]
        ],
        'sky & weather' => [
            'parent' => 'Travel & Places',
            'children' => [
                'new moon',
                'waxing crescent moon',
                'first quarter moon',
                'waxing gibbous moon',
                'full moon',
                'waning gibbous moon',
                'last quarter moon',
                'waning crescent moon',
                'crescent moon',
                'new moon face',
                'first quarter moon face',
                'last quarter moon face',
                'thermometer',
                'sun',
                'full moon face',
                'sun with face',
                'star',
                'glowing star',
                'shooting star',
                'cloud',
                'sun behind cloud',
                'cloud with lightning and rain',
                'sun behind small cloud',
                'sun behind large cloud',
                'sun behind rain cloud',
                'cloud with rain',
                'cloud with snow',
                'cloud with lightning',
                'tornado',
                'fog',
                'wind face',
                'cyclone',
                'rainbow',
                'closed umbrella',
                'umbrella',
                'umbrella with rain drops',
                'umbrella on ground',
                'high voltage',
                'snowflake',
                'snowman',
                'snowman without snow',
                'comet',
                'fire',
                'droplet',
                'water wave',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'globe showing Europe-Africa' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':earth_africa:',
            ]
        ],
        'globe showing Americas' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':earth_americas:',
            ]
        ],
        'globe showing Asia-Australia' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':earth_asia:',
            ]
        ],
        'globe with meridians' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':globe_with_meridians:',
            ]
        ],
        'world map' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':map:',
                ':world_map:',
            ]
        ],
        'map of Japan' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':japan:',
            ]
        ],
        '⊛ compass' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
            ]
        ],
        'snow-capped mountain' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':mountain_snow:',
                ':snow_capped_mountain:',
            ]
        ],
        'mountain' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':mountain:',
            ]
        ],
        'volcano' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':volcano:',
            ]
        ],
        'mount fuji' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':mount_fuji:',
            ]
        ],
        'camping' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':camping:',
            ]
        ],
        'beach with umbrella' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':beach:',
                ':beach_with_umbrella:',
            ]
        ],
        'desert' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':desert:',
            ]
        ],
        'desert island' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':island:',
                ':desert_island:',
            ]
        ],
        'national park' => [
            'parent' => 'place-geographic',
            'children' => null,
            'aliases' => [
                ':park:',
                ':national_park:',
            ]
        ],
        'stadium' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':stadium:',
            ]
        ],
        'classical building' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':classical_building:',
            ]
        ],
        'building construction' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':construction_site:',
                ':building_construction:',
            ]
        ],
        '⊛ brick' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
            ]
        ],
        'houses' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':homes:',
                ':house_buildings:',
            ]
        ],
        'derelict house' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':house_abandoned:',
                ':derelict_house_building:',
            ]
        ],
        'house' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':house:',
            ]
        ],
        'house with garden' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':house_with_garden:',
            ]
        ],
        'office building' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':office:',
            ]
        ],
        'Japanese post office' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':post_office:',
            ]
        ],
        'post office' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':european_post_office:',
            ]
        ],
        'hospital' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':hospital:',
            ]
        ],
        'bank' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':bank:',
            ]
        ],
        'hotel' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':hotel:',
            ]
        ],
        'love hotel' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':love_hotel:',
            ]
        ],
        'convenience store' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':convenience_store:',
            ]
        ],
        'school' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':school:',
            ]
        ],
        'department store' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':department_store:',
            ]
        ],
        'factory' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':factory:',
            ]
        ],
        'Japanese castle' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':japanese_castle:',
            ]
        ],
        'castle' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':european_castle:',
            ]
        ],
        'wedding' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':wedding:',
            ]
        ],
        'Tokyo tower' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':tokyo_tower:',
            ]
        ],
        'Statue of Liberty' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':statue_of_liberty:',
            ]
        ],
        'church' => [
            'parent' => 'place-religious',
            'children' => null,
            'aliases' => [
                ':church:',
            ]
        ],
        'mosque' => [
            'parent' => 'place-religious',
            'children' => null,
            'aliases' => [
                ':mosque:',
            ]
        ],
        'synagogue' => [
            'parent' => 'place-religious',
            'children' => null,
            'aliases' => [
                ':synagogue:',
            ]
        ],
        'shinto shrine' => [
            'parent' => 'place-religious',
            'children' => null,
            'aliases' => [
                ':shinto_shrine:',
            ]
        ],
        'kaaba' => [
            'parent' => 'place-religious',
            'children' => null,
            'aliases' => [
                ':kaaba:',
            ]
        ],
        'fountain' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':fountain:',
            ]
        ],
        'tent' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':tent:',
            ]
        ],
        'foggy' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':foggy:',
            ]
        ],
        'night with stars' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':night_with_stars:',
            ]
        ],
        'cityscape' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':cityscape:',
            ]
        ],
        'sunrise over mountains' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':sunrise_over_mountains:',
            ]
        ],
        'sunrise' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':sunrise:',
            ]
        ],
        'cityscape at dusk' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':city_dusk:',
            ]
        ],
        'sunset' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':city_sunset:',
                ':city_sunrise:',
            ]
        ],
        'bridge at night' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':bridge_at_night:',
            ]
        ],
        'hot springs' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':hotsprings:',
            ]
        ],
        'milky way' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':milky_way:',
            ]
        ],
        'carousel horse' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':carousel_horse:',
            ]
        ],
        'ferris wheel' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':ferris_wheel:',
            ]
        ],
        'roller coaster' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':roller_coaster:',
            ]
        ],
        'barber pole' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':barber:',
            ]
        ],
        'circus tent' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':circus_tent:',
            ]
        ],
        'locomotive' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':steam_locomotive:',
            ]
        ],
        'railway car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':railway_car:',
            ]
        ],
        'high-speed train' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bullettrain_side:',
            ]
        ],
        'bullet train' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bullettrain_front:',
            ]
        ],
        'train' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':train2:',
            ]
        ],
        'metro' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':metro:',
            ]
        ],
        'light rail' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':light_rail:',
            ]
        ],
        'station' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':station:',
            ]
        ],
        'tram' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':tram:',
            ]
        ],
        'monorail' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':monorail:',
            ]
        ],
        'mountain railway' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':mountain_railway:',
            ]
        ],
        'tram car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':train:',
            ]
        ],
        'bus' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bus:',
            ]
        ],
        'oncoming bus' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':oncoming_bus:',
            ]
        ],
        'trolleybus' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':trolleybus:',
            ]
        ],
        'minibus' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':minibus:',
            ]
        ],
        'ambulance' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':ambulance:',
            ]
        ],
        'fire engine' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':fire_engine:',
            ]
        ],
        'police car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':police_car:',
            ]
        ],
        'oncoming police car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':oncoming_police_car:',
            ]
        ],
        'taxi' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':taxi:',
            ]
        ],
        'oncoming taxi' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':oncoming_taxi:',
            ]
        ],
        'automobile' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':red_car:',
            ]
        ],
        'oncoming automobile' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':oncoming_automobile:',
            ]
        ],
        'sport utility vehicle' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':blue_car:',
            ]
        ],
        'delivery truck' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':truck:',
            ]
        ],
        'articulated lorry' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':articulated_lorry:',
            ]
        ],
        'tractor' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':tractor:',
            ]
        ],
        'racing car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':race_car:',
                ':racing_car:',
            ]
        ],
        'motorcycle' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':motorcycle:',
                ':racing_motorcycle:',
            ]
        ],
        'motor scooter' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':motor_scooter:',
                ':motorbike:',
            ]
        ],
        'bicycle' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bike:',
            ]
        ],
        'kick scooter' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':scooter:',
            ]
        ],
        '⊛ skateboard' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
            ]
        ],
        'bus stop' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':busstop:',
            ]
        ],
        'motorway' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':motorway:',
            ]
        ],
        'railway track' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':railway_track:',
                ':railroad_track:',
            ]
        ],
        'oil drum' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':oil:',
                ':oil_drum:',
            ]
        ],
        'fuel pump' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':fuelpump:',
            ]
        ],
        'police car light' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':rotating_light:',
            ]
        ],
        'horizontal traffic light' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':traffic_light:',
            ]
        ],
        'vertical traffic light' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':vertical_traffic_light:',
            ]
        ],
        'stop sign' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':octagonal_sign:',
                ':stop_sign:',
            ]
        ],
        'construction' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':construction:',
            ]
        ],
        'anchor' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':anchor:',
            ]
        ],
        'sailboat' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':sailboat:',
            ]
        ],
        'canoe' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':canoe:',
                ':kayak:',
            ]
        ],
        'speedboat' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':speedboat:',
            ]
        ],
        'passenger ship' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':cruise_ship:',
                ':passenger_ship:',
            ]
        ],
        'ferry' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':ferry:',
            ]
        ],
        'motor boat' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':motorboat:',
            ]
        ],
        'ship' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':ship:',
            ]
        ],
        'airplane' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':airplane:',
            ]
        ],
        'small airplane' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':airplane_small:',
                ':small_airplane:',
            ]
        ],
        'airplane departure' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':airplane_departure:',
            ]
        ],
        'airplane arrival' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':airplane_arriving:',
            ]
        ],
        'seat' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':seat:',
            ]
        ],
        'helicopter' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':helicopter:',
            ]
        ],
        'suspension railway' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':suspension_railway:',
            ]
        ],
        'mountain cableway' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':mountain_cableway:',
            ]
        ],
        'aerial tramway' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':aerial_tramway:',
            ]
        ],
        'satellite' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':satellite_orbital:',
            ]
        ],
        'rocket' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':rocket:',
            ]
        ],
        'flying saucer' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':flying_saucer:',
            ]
        ],
        'bellhop bell' => [
            'parent' => 'hotel',
            'children' => null,
            'aliases' => [
                ':bellhop:',
                ':bellhop_bell:',
            ]
        ],
        '⊛ luggage' => [
            'parent' => 'hotel',
            'children' => null,
            'aliases' => [
            ]
        ],
        'hourglass done' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':hourglass:',
            ]
        ],
        'hourglass not done' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':hourglass_flowing_sand:',
            ]
        ],
        'watch' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':watch:',
            ]
        ],
        'alarm clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':alarm_clock:',
            ]
        ],
        'stopwatch' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':stopwatch:',
            ]
        ],
        'timer clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':timer:',
                ':timer_clock:',
            ]
        ],
        'mantelpiece clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock:',
                ':mantlepiece_clock:',
            ]
        ],
        'twelve o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock12:',
            ]
        ],
        'twelve-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock1230:',
            ]
        ],
        'one o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock1:',
            ]
        ],
        'one-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock130:',
            ]
        ],
        'two o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock2:',
            ]
        ],
        'two-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock230:',
            ]
        ],
        'three o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock3:',
            ]
        ],
        'three-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock330:',
            ]
        ],
        'four o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock4:',
            ]
        ],
        'four-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock430:',
            ]
        ],
        'five o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock5:',
            ]
        ],
        'five-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock530:',
            ]
        ],
        'six o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock6:',
            ]
        ],
        'six-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock630:',
            ]
        ],
        'seven o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock7:',
            ]
        ],
        'seven-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock730:',
            ]
        ],
        'eight o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock8:',
            ]
        ],
        'eight-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock830:',
            ]
        ],
        'nine o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock9:',
            ]
        ],
        'nine-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock930:',
            ]
        ],
        'ten o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock10:',
            ]
        ],
        'ten-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock1030:',
            ]
        ],
        'eleven o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock11:',
            ]
        ],
        'eleven-thirty' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock1130:',
            ]
        ],
        'new moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':new_moon:',
            ]
        ],
        'waxing crescent moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':waxing_crescent_moon:',
            ]
        ],
        'first quarter moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':first_quarter_moon:',
            ]
        ],
        'waxing gibbous moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':waxing_gibbous_moon:',
            ]
        ],
        'full moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':full_moon:',
            ]
        ],
        'waning gibbous moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':waning_gibbous_moon:',
            ]
        ],
        'last quarter moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':last_quarter_moon:',
            ]
        ],
        'waning crescent moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':waning_crescent_moon:',
            ]
        ],
        'crescent moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':crescent_moon:',
            ]
        ],
        'new moon face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':new_moon_with_face:',
            ]
        ],
        'first quarter moon face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':first_quarter_moon_with_face:',
            ]
        ],
        'last quarter moon face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':last_quarter_moon_with_face:',
            ]
        ],
        'thermometer' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':thermometer:',
            ]
        ],
        'sun' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':sunny:',
            ]
        ],
        'full moon face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':full_moon_with_face:',
            ]
        ],
        'sun with face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':sun_with_face:',
            ]
        ],
        'star' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':star:',
            ]
        ],
        'glowing star' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':star2:',
            ]
        ],
        'shooting star' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':stars:',
            ]
        ],
        'cloud' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cloud:',
            ]
        ],
        'sun behind cloud' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':partly_sunny:',
            ]
        ],
        'cloud with lightning and rain' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':thunder_cloud_rain:',
                ':thunder_cloud_and_rain:',
            ]
        ],
        'sun behind small cloud' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':white_sun_small_cloud:',
                ':white_sun_with_small_cloud:',
            ]
        ],
        'sun behind large cloud' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':white_sun_cloud:',
                ':white_sun_behind_cloud:',
            ]
        ],
        'sun behind rain cloud' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':white_sun_rain_cloud:',
                ':white_sun_behind_cloud_with_rain:',
            ]
        ],
        'cloud with rain' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cloud_rain:',
                ':cloud_with_rain:',
            ]
        ],
        'cloud with snow' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cloud_snow:',
                ':cloud_with_snow:',
            ]
        ],
        'cloud with lightning' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cloud_lightning:',
                ':cloud_with_lightning:',
            ]
        ],
        'tornado' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cloud_tornado:',
                ':cloud_with_tornado:',
            ]
        ],
        'fog' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':fog:',
            ]
        ],
        'wind face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':wind_blowing_face:',
            ]
        ],
        'cyclone' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cyclone:',
            ]
        ],
        'rainbow' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':rainbow:',
            ]
        ],
        'closed umbrella' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':closed_umbrella:',
            ]
        ],
        'umbrella' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':umbrella2:',
            ]
        ],
        'umbrella with rain drops' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':umbrella:',
            ]
        ],
        'umbrella on ground' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':beach_umbrella:',
                ':umbrella_on_ground:',
            ]
        ],
        'high voltage' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':zap:',
            ]
        ],
        'snowflake' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':snowflake:',
            ]
        ],
        'snowman' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':snowman2:',
            ]
        ],
        'snowman without snow' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':snowman:',
            ]
        ],
        'comet' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':comet:',
            ]
        ],
        'fire' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':fire:',
                ':flame:',
            ]
        ],
        'droplet' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':droplet:',
            ]
        ],
        'water wave' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':ocean:',
            ]
        ],
    ];
}
