<?phpnamespace SMB\Pemojine\Structure\Vendor\SoftBank;

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class Flags implements Gettable
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
        'Flags' => [
            'parent' => null,
            'children' => [
                'flag',
                'country-flag',
            ]
        ]
    ];

    /**
     * 
     * @var array
     */
    private $mediumGroups = [
        'flag' => [
            'parent' => 'Flags',
            'children' => [
                'chequered flag',
                'crossed flags',
            ]
        ],
        'country-flag' => [
            'parent' => 'Flags',
            'children' => [
                'flag: China',
                'flag: Germany',
                'flag: Spain',
                'flag: France',
                'flag: United Kingdom',
                'flag: Italy',
                'flag: Japan',
                'flag: South Korea',
                'flag: Russia',
                'flag: United States',
            ]
        ],
    ];

    /**
     * 
     * @var array
     */
    private $groups = [
        'chequered flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':checkered_flag:',
            ]
        ],
        'crossed flags' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':crossed_flags:',
            ]
        ],
        'flag: China' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cn:',
                ':cn:',
            ]
        ],
        'flag: Germany' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_de:',
                ':de:',
            ]
        ],
        'flag: Spain' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_es:',
                ':es:',
            ]
        ],
        'flag: France' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_fr:',
                ':fr:',
            ]
        ],
        'flag: United Kingdom' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gb:',
                ':gb:',
            ]
        ],
        'flag: Italy' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_it:',
                ':it:',
            ]
        ],
        'flag: Japan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_jp:',
                ':jp:',
            ]
        ],
        'flag: South Korea' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kr:',
                ':kr:',
            ]
        ],
        'flag: Russia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ru:',
                ':ru:',
            ]
        ],
        'flag: United States' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_us:',
                ':us:',
            ]
        ],
    ];
}
