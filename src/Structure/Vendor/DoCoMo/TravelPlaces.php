<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

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
                'convenience store',
                'school',
            ]
        ],
        'place-other' => [
            'parent' => 'Travel & Places',
            'children' => [
                'foggy',
                'night with stars',
                'hot springs',
                'carousel horse',
                'circus tent',
            ]
        ],
        'transport-ground' => [
            'parent' => 'Travel & Places',
            'children' => [
                'railway car',
                'high-speed train',
                'bus',
                'automobile',
                'sport utility vehicle',
                'bicycle',
                'fuel pump',
                'horizontal traffic light',
            ]
        ],
        'transport-water' => [
            'parent' => 'Travel & Places',
            'children' => [
                'sailboat',
                'ship',
            ]
        ],
        'transport-air' => [
            'parent' => 'Travel & Places',
            'children' => [
                'airplane',
                'seat',
            ]
        ],
        'time' => [
            'parent' => 'Travel & Places',
            'children' => [
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
                'full moon',
                'crescent moon',
                'sun',
                'cloud',
                'cyclone',
                'closed umbrella',
                'umbrella with rain drops',
                'high voltage',
                'snowman without snow',
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
        'hot springs' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':hotsprings:',
            ]
        ],
        'carousel horse' => [
            'parent' => 'place-other',
            'children' => null,
            'aliases' => [
                ':carousel_horse:',
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
        'high-speed train' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bullettrain_side:',
            ]
        ],
        'bus' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bus:',
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
        'bicycle' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':bike:',
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
        'seat' => [
            'parent' => 'transport-air',
            'children' => null,
            'aliases' => [
                ':seat:',
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
        'full moon' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':full_moon:',
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
