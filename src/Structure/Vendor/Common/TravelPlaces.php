<?phpnamespace SMB\Pemojine\Structure\Vendor\Common;

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
                'night with stars',
                'hot springs',
            ]
        ],
        'transport-ground' => [
            'parent' => 'Travel & Places',
            'children' => [
                'railway car',
                'bus',
                'automobile',
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
            ]
        ],
        'sky & weather' => [
            'parent' => 'Travel & Places',
            'children' => [
                'crescent moon',
                'sun',
                'cloud',
                'cyclone',
                'closed umbrella',
                'umbrella with rain drops',
                'high voltage',
                'snowman without snow',
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
        'railway car' => [
            'parent' => 'transport-ground',
            'children' => null,
            'aliases' => [
                ':railway_car:',
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
        'water wave' => [
            'parent' => 'sky & weather',
            'children' => null,
            'aliases' => [
                ':ocean:',
            ]
        ],
    ];
}
