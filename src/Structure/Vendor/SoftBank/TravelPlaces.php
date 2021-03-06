<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

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
        'place-geographic' => [
            'parent' => 'Travel & Places',
            'children' => [
                'mount fuji',
            ]
        ],
        'place-building' => [
            'parent' => 'Travel & Places',
            'children' => [
                'house',
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
                'wedding',
                'Tokyo tower',
                'Statue of Liberty',
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
                'night with stars',
                'sunrise over mountains',
                'sunrise',
                'cityscape at dusk',
                'sunset',
                'hot springs',
                'ferris wheel',
                'roller coaster',
                'barber pole',
            ]
        ],
        'transport-ground' => [
            'parent' => 'Travel & Places',
            'children' => [
                'railway car',
                'high-speed train',
                'bullet train',
                'metro',
                'station',
                'bus',
                'ambulance',
                'fire engine',
                'police car',
                'taxi',
                'automobile',
                'sport utility vehicle',
                'delivery truck',
                'bicycle',
                'bus stop',
                'fuel pump',
                'horizontal traffic light',
                'construction',
            ]
        ],
        'transport-water' => [
            'parent' => 'Travel & Places',
            'children' => [
                'sailboat',
                'speedboat',
                'ship',
            ]
        ],
        'transport-air' => [
            'parent' => 'Travel & Places',
            'children' => [
                'airplane',
                'seat',
                'rocket',
            ]
        ],
        'time' => [
            'parent' => 'Travel & Places',
            'children' => [
                'twelve o’clock',
                'one o’clock',
                'two o’clock',
                'three o’clock',
                'four o’clock',
                'five o’clock',
                'six o’clock',
                'seven o’clock',
                'eight o’clock',
                'nine o’clock',
                'ten o’clock',
                'eleven o’clock',
            ]
        ],
        'sky & weather' => [
            'parent' => 'Travel & Places',
            'children' => [
                'crescent moon',
                'sun',
                'star',
                'glowing star',
                'cloud',
                'cyclone',
                'rainbow',
                'closed umbrella',
                'umbrella with rain drops',
                'high voltage',
                'snowman without snow',
                'fire',
                'water wave',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
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
        'night with stars' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':night_with_stars:',
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
        'taxi' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':taxi:',
            ]
        ],
        'automobile' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':red_car:',
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
        'sailboat' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':sailboat:',
            ]
        ],
        'speedboat' => [
            'parent' => 'transport-water',
            'children' => null,
            'aliases' => [
                ':speedboat:',
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
        'seat' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':seat:',
            ]
        ],
        'rocket' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':rocket:',
            ]
        ],
        'twelve o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock12:',
            ]
        ],
        'one o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock1:',
            ]
        ],
        'two o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock2:',
            ]
        ],
        'three o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock3:',
            ]
        ],
        'four o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock4:',
            ]
        ],
        'five o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock5:',
            ]
        ],
        'six o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock6:',
            ]
        ],
        'seven o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock7:',
            ]
        ],
        'eight o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock8:',
            ]
        ],
        'nine o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock9:',
            ]
        ],
        'ten o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock10:',
            ]
        ],
        'eleven o’clock' => [
            'parent' => 'time',
            'children' => null,
            'aliases' => [
                ':clock11:',
            ]
        ],
        'crescent moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':crescent_moon:',
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
        'glowing star' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':star2:',
            ]
        ],
        'cloud' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':cloud:',
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
        'water wave' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':ocean:',
            ]
        ],
    ];
}
