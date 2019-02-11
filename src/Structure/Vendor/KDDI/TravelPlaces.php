<?phpnamespace SMB\Pemojine\Structure\Vendor\KDDI;

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
                'globe showing Asia-Australia',
                'map of Japan',
            ]
        ],
        'place-geographic' => [
            'parent' => 'Travel & Places',
            'children' => [
                'volcano',
                'mount fuji',
            ]
        ],
        'place-building' => [
            'parent' => 'Travel & Places',
            'children' => [
                'house',
                'house with garden',
                'office building',
                'Japanese post office',
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
                'Tokyo tower',
            ]
        ],
        'place-religious' => [
            'parent' => 'Travel & Places',
            'children' => [
                'church',
            ]
        ],
        'place-other' => [
            'parent' => 'Travel & Places',
            'children' => [
                'fountain',
                'tent',
                'foggy',
                'night with stars',
                'sunrise',
                'cityscape at dusk',
                'bridge at night',
                'hot springs',
                'ferris wheel',
                'roller coaster',
                'barber pole',
                'circus tent',
            ]
        ],
        'transport-ground' => [
            'parent' => 'Travel & Places',
            'children' => [
                'railway car',
                'bullet train',
                'metro',
                'station',
                'bus',
                'ambulance',
                'fire engine',
                'police car',
                'automobile',
                'delivery truck',
                'bicycle',
                'bus stop',
                'fuel pump',
                'police car light',
                'horizontal traffic light',
                'construction',
            ]
        ],
        'transport-water' => [
            'parent' => 'Travel & Places',
            'children' => [
                'anchor',
                'sailboat',
                'ship',
            ]
        ],
        'transport-air' => [
            'parent' => 'Travel & Places',
            'children' => [
                'airplane',
                'rocket',
            ]
        ],
        'time' => [
            'parent' => 'Travel & Places',
            'children' => [
                'hourglass done',
                'hourglass not done',
                'watch',
                'alarm clock',
            ]
        ],
        'sky & weather' => [
            'parent' => 'Travel & Places',
            'children' => [
                'new moon',
                'first quarter moon',
                'waxing gibbous moon',
                'crescent moon',
                'first quarter moon face',
                'sun',
                'star',
                'shooting star',
                'milky way',
                'cloud',
                'sun behind cloud',
                'cyclone',
                'rainbow',
                'closed umbrella',
                'umbrella with rain drops',
                'high voltage',
                'snowflake',
                'snowman without snow',
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
        'globe showing Asia-Australia' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':earth_asia:',
            ]
        ],
        'map of Japan' => [
            'parent' => 'place-map',
            'children' => null,
            'aliases' => [
                ':japan:',
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
        'Tokyo tower' => [
            'parent' => 'place-building',
            'children' => null,
            'aliases' => [
                ':tokyo_tower:',
            ]
        ],
        'church' => [
            'parent' => 'place-religious',
            'children' => null,
            'aliases' => [
                ':church:',
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
        'railway car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':railway_car:',
            ]
        ],
        'bullet train' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bullettrain_front:',
            ]
        ],
        'metro' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':metro:',
            ]
        ],
        'station' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':station:',
            ]
        ],
        'bus' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bus:',
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
        'automobile' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':red_car:',
            ]
        ],
        'delivery truck' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':truck:',
            ]
        ],
        'bicycle' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bike:',
            ]
        ],
        'bus stop' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':busstop:',
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
        'rocket' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':rocket:',
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
        'new moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':new_moon:',
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
        'crescent moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':crescent_moon:',
            ]
        ],
        'first quarter moon face' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':first_quarter_moon_with_face:',
            ]
        ],
        'sun' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':sunny:',
            ]
        ],
        'star' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':star:',
            ]
        ],
        'shooting star' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':stars:',
            ]
        ],
        'milky way' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':milky_way:',
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
        'umbrella with rain drops' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':umbrella:',
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
        'snowman without snow' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':snowman:',
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
