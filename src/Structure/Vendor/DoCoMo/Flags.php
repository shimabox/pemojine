<?phpnamespace SMB\Pemojine\Structure\Vendor\DoCoMo;

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
                'triangular flag',
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
        'triangular flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':triangular_flag_on_post:',
            ]
        ],
    ];
}
