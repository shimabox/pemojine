<?phpnamespace SMB\Pemojine\Structure\Vendor\Facebook;

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
                'subdivision-flag',
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
                'crossed flags',
                'black flag',
                'white flag',
                'rainbow flag',
            ]
        ],
        'country-flag' => [
            'parent' => 'Flags',
            'children' => [
                'flag: Ascension Island',
                'flag: Andorra',
                'flag: United Arab Emirates',
                'flag: Afghanistan',
                'flag: Antigua & Barbuda',
                'flag: Anguilla',
                'flag: Albania',
                'flag: Armenia',
                'flag: Angola',
                'flag: Antarctica',
                'flag: Argentina',
                'flag: American Samoa',
                'flag: Austria',
                'flag: Australia',
                'flag: Aruba',
                'flag: Åland Islands',
                'flag: Azerbaijan',
                'flag: Bosnia & Herzegovina',
                'flag: Barbados',
                'flag: Bangladesh',
                'flag: Belgium',
                'flag: Burkina Faso',
                'flag: Bulgaria',
                'flag: Bahrain',
                'flag: Burundi',
                'flag: Benin',
                'flag: St. Barthélemy',
                'flag: Bermuda',
                'flag: Brunei',
                'flag: Bolivia',
                'flag: Caribbean Netherlands',
                'flag: Brazil',
                'flag: Bahamas',
                'flag: Bhutan',
                'flag: Bouvet Island',
                'flag: Botswana',
                'flag: Belarus',
                'flag: Belize',
                'flag: Canada',
                'flag: Cocos (Keeling) Islands',
                'flag: Congo - Kinshasa',
                'flag: Central African Republic',
                'flag: Congo - Brazzaville',
                'flag: Switzerland',
                'flag: Côte d’Ivoire',
                'flag: Cook Islands',
                'flag: Chile',
                'flag: Cameroon',
                'flag: China',
                'flag: Colombia',
                'flag: Clipperton Island',
                'flag: Costa Rica',
                'flag: Cuba',
                'flag: Cape Verde',
                'flag: Curaçao',
                'flag: Christmas Island',
                'flag: Cyprus',
                'flag: Czechia',
                'flag: Germany',
                'flag: Diego Garcia',
                'flag: Djibouti',
                'flag: Denmark',
                'flag: Dominica',
                'flag: Dominican Republic',
                'flag: Algeria',
                'flag: Ceuta & Melilla',
                'flag: Ecuador',
                'flag: Estonia',
                'flag: Egypt',
                'flag: Western Sahara',
                'flag: Eritrea',
                'flag: Spain',
                'flag: Ethiopia',
                'flag: European Union',
                'flag: Finland',
                'flag: Fiji',
                'flag: Falkland Islands',
                'flag: Micronesia',
                'flag: Faroe Islands',
                'flag: France',
                'flag: Gabon',
                'flag: United Kingdom',
                'flag: Grenada',
                'flag: Georgia',
                'flag: French Guiana',
                'flag: Guernsey',
                'flag: Ghana',
                'flag: Gibraltar',
                'flag: Greenland',
                'flag: Gambia',
                'flag: Guinea',
                'flag: Guadeloupe',
                'flag: Equatorial Guinea',
                'flag: Greece',
                'flag: South Georgia & South Sandwich Islands',
                'flag: Guatemala',
                'flag: Guam',
                'flag: Guinea-Bissau',
                'flag: Guyana',
                'flag: Hong Kong SAR China',
                'flag: Heard & McDonald Islands',
                'flag: Honduras',
                'flag: Croatia',
                'flag: Haiti',
                'flag: Hungary',
                'flag: Canary Islands',
                'flag: Indonesia',
                'flag: Ireland',
                'flag: Israel',
                'flag: Isle of Man',
                'flag: India',
                'flag: British Indian Ocean Territory',
                'flag: Iraq',
                'flag: Iran',
                'flag: Iceland',
                'flag: Italy',
                'flag: Jersey',
                'flag: Jamaica',
                'flag: Jordan',
                'flag: Japan',
                'flag: Kenya',
                'flag: Kyrgyzstan',
                'flag: Cambodia',
                'flag: Kiribati',
                'flag: Comoros',
                'flag: St. Kitts & Nevis',
                'flag: North Korea',
                'flag: South Korea',
                'flag: Kuwait',
                'flag: Cayman Islands',
                'flag: Kazakhstan',
                'flag: Laos',
                'flag: Lebanon',
                'flag: St. Lucia',
                'flag: Liechtenstein',
                'flag: Sri Lanka',
                'flag: Liberia',
                'flag: Lesotho',
                'flag: Lithuania',
                'flag: Luxembourg',
                'flag: Latvia',
                'flag: Libya',
                'flag: Morocco',
                'flag: Monaco',
                'flag: Moldova',
                'flag: Montenegro',
                'flag: St. Martin',
                'flag: Madagascar',
                'flag: Marshall Islands',
                'flag: Macedonia',
                'flag: Mali',
                'flag: Myanmar (Burma)',
                'flag: Mongolia',
                'flag: Macau SAR China',
                'flag: Northern Mariana Islands',
                'flag: Martinique',
                'flag: Mauritania',
                'flag: Montserrat',
                'flag: Malta',
                'flag: Mauritius',
                'flag: Maldives',
                'flag: Malawi',
                'flag: Mexico',
                'flag: Malaysia',
                'flag: Mozambique',
                'flag: Namibia',
                'flag: New Caledonia',
                'flag: Niger',
                'flag: Norfolk Island',
                'flag: Nigeria',
                'flag: Nicaragua',
                'flag: Netherlands',
                'flag: Norway',
                'flag: Nepal',
                'flag: Nauru',
                'flag: Niue',
                'flag: New Zealand',
                'flag: Oman',
                'flag: Panama',
                'flag: Peru',
                'flag: French Polynesia',
                'flag: Papua New Guinea',
                'flag: Philippines',
                'flag: Pakistan',
                'flag: Poland',
                'flag: St. Pierre & Miquelon',
                'flag: Pitcairn Islands',
                'flag: Puerto Rico',
                'flag: Palestinian Territories',
                'flag: Portugal',
                'flag: Palau',
                'flag: Paraguay',
                'flag: Qatar',
                'flag: Réunion',
                'flag: Romania',
                'flag: Serbia',
                'flag: Russia',
                'flag: Rwanda',
                'flag: Saudi Arabia',
                'flag: Solomon Islands',
                'flag: Seychelles',
                'flag: Sudan',
                'flag: Sweden',
                'flag: Singapore',
                'flag: St. Helena',
                'flag: Slovenia',
                'flag: Svalbard & Jan Mayen',
                'flag: Slovakia',
                'flag: Sierra Leone',
                'flag: San Marino',
                'flag: Senegal',
                'flag: Somalia',
                'flag: Suriname',
                'flag: South Sudan',
                'flag: São Tomé & Príncipe',
                'flag: El Salvador',
                'flag: Sint Maarten',
                'flag: Syria',
                'flag: Swaziland',
                'flag: Tristan da Cunha',
                'flag: Turks & Caicos Islands',
                'flag: Chad',
                'flag: French Southern Territories',
                'flag: Togo',
                'flag: Thailand',
                'flag: Tajikistan',
                'flag: Tokelau',
                'flag: Timor-Leste',
                'flag: Turkmenistan',
                'flag: Tunisia',
                'flag: Tonga',
                'flag: Turkey',
                'flag: Trinidad & Tobago',
                'flag: Tuvalu',
                'flag: Taiwan',
                'flag: Tanzania',
                'flag: Ukraine',
                'flag: Uganda',
                'flag: U.S. Outlying Islands',
                'flag: United Nations',
                'flag: United States',
                'flag: Uruguay',
                'flag: Uzbekistan',
                'flag: Vatican City',
                'flag: St. Vincent & Grenadines',
                'flag: Venezuela',
                'flag: British Virgin Islands',
                'flag: U.S. Virgin Islands',
                'flag: Vietnam',
                'flag: Vanuatu',
                'flag: Wallis & Futuna',
                'flag: Samoa',
                'flag: Kosovo',
                'flag: Yemen',
                'flag: Mayotte',
                'flag: South Africa',
                'flag: Zambia',
                'flag: Zimbabwe',
            ]
        ],
        'subdivision-flag' => [
            'parent' => 'Flags',
            'children' => [
                'flag: England',
                'flag: Scotland',
                'flag: Wales',
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
        'crossed flags' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':crossed_flags:',
            ]
        ],
        'black flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':flag_black:',
                ':waving_black_flag:',
            ]
        ],
        'white flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':flag_white:',
                ':waving_white_flag:',
            ]
        ],
        'rainbow flag' => [
            'parent' => 'flag',
            'children' => null,
            'aliases' => [
                ':rainbow_flag:',
                ':gay_pride_flag:',
            ]
        ],
        'flag: Ascension Island' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ac:',
                ':ac:',
            ]
        ],
        'flag: Andorra' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ad:',
                ':ad:',
            ]
        ],
        'flag: United Arab Emirates' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ae:',
                ':ae:',
            ]
        ],
        'flag: Afghanistan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_af:',
                ':af:',
            ]
        ],
        'flag: Antigua & Barbuda' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ag:',
                ':ag:',
            ]
        ],
        'flag: Anguilla' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ai:',
                ':ai:',
            ]
        ],
        'flag: Albania' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_al:',
                ':al:',
            ]
        ],
        'flag: Armenia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_am:',
                ':am:',
            ]
        ],
        'flag: Angola' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ao:',
                ':ao:',
            ]
        ],
        'flag: Antarctica' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_aq:',
                ':aq:',
            ]
        ],
        'flag: Argentina' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ar:',
                ':ar:',
            ]
        ],
        'flag: American Samoa' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_as:',
                ':as:',
            ]
        ],
        'flag: Austria' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_at:',
                ':at:',
            ]
        ],
        'flag: Australia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_au:',
                ':au:',
            ]
        ],
        'flag: Aruba' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_aw:',
                ':aw:',
            ]
        ],
        'flag: Åland Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ax:',
                ':ax:',
            ]
        ],
        'flag: Azerbaijan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_az:',
                ':az:',
            ]
        ],
        'flag: Bosnia & Herzegovina' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ba:',
                ':ba:',
            ]
        ],
        'flag: Barbados' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bb:',
                ':bb:',
            ]
        ],
        'flag: Bangladesh' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bd:',
                ':bd:',
            ]
        ],
        'flag: Belgium' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_be:',
                ':be:',
            ]
        ],
        'flag: Burkina Faso' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bf:',
                ':bf:',
            ]
        ],
        'flag: Bulgaria' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bg:',
                ':bg:',
            ]
        ],
        'flag: Bahrain' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bh:',
                ':bh:',
            ]
        ],
        'flag: Burundi' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bi:',
                ':bi:',
            ]
        ],
        'flag: Benin' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bj:',
                ':bj:',
            ]
        ],
        'flag: St. Barthélemy' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bl:',
                ':bl:',
            ]
        ],
        'flag: Bermuda' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bm:',
                ':bm:',
            ]
        ],
        'flag: Brunei' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bn:',
                ':bn:',
            ]
        ],
        'flag: Bolivia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bo:',
                ':bo:',
            ]
        ],
        'flag: Caribbean Netherlands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bq:',
                ':bq:',
            ]
        ],
        'flag: Brazil' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_br:',
                ':br:',
            ]
        ],
        'flag: Bahamas' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bs:',
                ':bs:',
            ]
        ],
        'flag: Bhutan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bt:',
                ':bt:',
            ]
        ],
        'flag: Bouvet Island' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bv:',
                ':bv:',
            ]
        ],
        'flag: Botswana' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bw:',
                ':bw:',
            ]
        ],
        'flag: Belarus' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_by:',
                ':by:',
            ]
        ],
        'flag: Belize' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_bz:',
                ':bz:',
            ]
        ],
        'flag: Canada' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ca:',
                ':ca:',
            ]
        ],
        'flag: Cocos (Keeling) Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cc:',
                ':cc:',
            ]
        ],
        'flag: Congo - Kinshasa' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cd:',
                ':congo:',
            ]
        ],
        'flag: Central African Republic' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cf:',
                ':cf:',
            ]
        ],
        'flag: Congo - Brazzaville' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cg:',
                ':cg:',
            ]
        ],
        'flag: Switzerland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ch:',
                ':ch:',
            ]
        ],
        'flag: Côte d’Ivoire' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ci:',
                ':ci:',
            ]
        ],
        'flag: Cook Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ck:',
                ':ck:',
            ]
        ],
        'flag: Chile' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cl:',
                ':chile:',
            ]
        ],
        'flag: Cameroon' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cm:',
                ':cm:',
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
        'flag: Colombia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_co:',
                ':co:',
            ]
        ],
        'flag: Clipperton Island' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cp:',
                ':cp:',
            ]
        ],
        'flag: Costa Rica' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cr:',
                ':cr:',
            ]
        ],
        'flag: Cuba' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cu:',
                ':cu:',
            ]
        ],
        'flag: Cape Verde' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cv:',
                ':cv:',
            ]
        ],
        'flag: Curaçao' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cw:',
                ':cw:',
            ]
        ],
        'flag: Christmas Island' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cx:',
                ':cx:',
            ]
        ],
        'flag: Cyprus' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cy:',
                ':cy:',
            ]
        ],
        'flag: Czechia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_cz:',
                ':cz:',
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
        'flag: Diego Garcia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_dg:',
                ':dg:',
            ]
        ],
        'flag: Djibouti' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_dj:',
                ':dj:',
            ]
        ],
        'flag: Denmark' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_dk:',
                ':dk:',
            ]
        ],
        'flag: Dominica' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_dm:',
                ':dm:',
            ]
        ],
        'flag: Dominican Republic' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_do:',
                ':do:',
            ]
        ],
        'flag: Algeria' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_dz:',
                ':dz:',
            ]
        ],
        'flag: Ceuta & Melilla' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ea:',
                ':ea:',
            ]
        ],
        'flag: Ecuador' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ec:',
                ':ec:',
            ]
        ],
        'flag: Estonia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ee:',
                ':ee:',
            ]
        ],
        'flag: Egypt' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_eg:',
                ':eg:',
            ]
        ],
        'flag: Western Sahara' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_eh:',
                ':eh:',
            ]
        ],
        'flag: Eritrea' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_er:',
                ':er:',
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
        'flag: Ethiopia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_et:',
                ':et:',
            ]
        ],
        'flag: European Union' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_eu:',
                ':eu:',
            ]
        ],
        'flag: Finland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_fi:',
                ':fi:',
            ]
        ],
        'flag: Fiji' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_fj:',
                ':fj:',
            ]
        ],
        'flag: Falkland Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_fk:',
                ':fk:',
            ]
        ],
        'flag: Micronesia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_fm:',
                ':fm:',
            ]
        ],
        'flag: Faroe Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_fo:',
                ':fo:',
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
        'flag: Gabon' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ga:',
                ':ga:',
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
        'flag: Grenada' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gd:',
                ':gd:',
            ]
        ],
        'flag: Georgia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ge:',
                ':ge:',
            ]
        ],
        'flag: French Guiana' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gf:',
                ':gf:',
            ]
        ],
        'flag: Guernsey' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gg:',
                ':gg:',
            ]
        ],
        'flag: Ghana' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gh:',
                ':gh:',
            ]
        ],
        'flag: Gibraltar' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gi:',
                ':gi:',
            ]
        ],
        'flag: Greenland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gl:',
                ':gl:',
            ]
        ],
        'flag: Gambia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gm:',
                ':gm:',
            ]
        ],
        'flag: Guinea' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gn:',
                ':gn:',
            ]
        ],
        'flag: Guadeloupe' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gp:',
                ':gp:',
            ]
        ],
        'flag: Equatorial Guinea' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gq:',
                ':gq:',
            ]
        ],
        'flag: Greece' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gr:',
                ':gr:',
            ]
        ],
        'flag: South Georgia & South Sandwich Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gs:',
                ':gs:',
            ]
        ],
        'flag: Guatemala' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gt:',
                ':gt:',
            ]
        ],
        'flag: Guam' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gu:',
                ':gu:',
            ]
        ],
        'flag: Guinea-Bissau' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gw:',
                ':gw:',
            ]
        ],
        'flag: Guyana' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_gy:',
                ':gy:',
            ]
        ],
        'flag: Hong Kong SAR China' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_hk:',
                ':hk:',
            ]
        ],
        'flag: Heard & McDonald Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_hm:',
                ':hm:',
            ]
        ],
        'flag: Honduras' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_hn:',
                ':hn:',
            ]
        ],
        'flag: Croatia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_hr:',
                ':hr:',
            ]
        ],
        'flag: Haiti' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ht:',
                ':ht:',
            ]
        ],
        'flag: Hungary' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_hu:',
                ':hu:',
            ]
        ],
        'flag: Canary Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ic:',
                ':ic:',
            ]
        ],
        'flag: Indonesia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_id:',
                ':indonesia:',
            ]
        ],
        'flag: Ireland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ie:',
                ':ie:',
            ]
        ],
        'flag: Israel' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_il:',
                ':il:',
            ]
        ],
        'flag: Isle of Man' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_im:',
                ':im:',
            ]
        ],
        'flag: India' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_in:',
                ':in:',
            ]
        ],
        'flag: British Indian Ocean Territory' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_io:',
                ':io:',
            ]
        ],
        'flag: Iraq' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_iq:',
                ':iq:',
            ]
        ],
        'flag: Iran' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ir:',
                ':ir:',
            ]
        ],
        'flag: Iceland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_is:',
                ':is:',
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
        'flag: Jersey' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_je:',
                ':je:',
            ]
        ],
        'flag: Jamaica' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_jm:',
                ':jm:',
            ]
        ],
        'flag: Jordan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_jo:',
                ':jo:',
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
        'flag: Kenya' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ke:',
                ':ke:',
            ]
        ],
        'flag: Kyrgyzstan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kg:',
                ':kg:',
            ]
        ],
        'flag: Cambodia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kh:',
                ':kh:',
            ]
        ],
        'flag: Kiribati' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ki:',
                ':ki:',
            ]
        ],
        'flag: Comoros' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_km:',
                ':km:',
            ]
        ],
        'flag: St. Kitts & Nevis' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kn:',
                ':kn:',
            ]
        ],
        'flag: North Korea' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kp:',
                ':kp:',
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
        'flag: Kuwait' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kw:',
                ':kw:',
            ]
        ],
        'flag: Cayman Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ky:',
                ':ky:',
            ]
        ],
        'flag: Kazakhstan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_kz:',
                ':kz:',
            ]
        ],
        'flag: Laos' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_la:',
                ':la:',
            ]
        ],
        'flag: Lebanon' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lb:',
                ':lb:',
            ]
        ],
        'flag: St. Lucia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lc:',
                ':lc:',
            ]
        ],
        'flag: Liechtenstein' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_li:',
                ':li:',
            ]
        ],
        'flag: Sri Lanka' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lk:',
                ':lk:',
            ]
        ],
        'flag: Liberia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lr:',
                ':lr:',
            ]
        ],
        'flag: Lesotho' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ls:',
                ':ls:',
            ]
        ],
        'flag: Lithuania' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lt:',
                ':lt:',
            ]
        ],
        'flag: Luxembourg' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lu:',
                ':lu:',
            ]
        ],
        'flag: Latvia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_lv:',
                ':lv:',
            ]
        ],
        'flag: Libya' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ly:',
                ':ly:',
            ]
        ],
        'flag: Morocco' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ma:',
                ':ma:',
            ]
        ],
        'flag: Monaco' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mc:',
                ':mc:',
            ]
        ],
        'flag: Moldova' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_md:',
                ':md:',
            ]
        ],
        'flag: Montenegro' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_me:',
                ':me:',
            ]
        ],
        'flag: St. Martin' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mf:',
                ':mf:',
            ]
        ],
        'flag: Madagascar' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mg:',
                ':mg:',
            ]
        ],
        'flag: Marshall Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mh:',
                ':mh:',
            ]
        ],
        'flag: Macedonia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mk:',
                ':mk:',
            ]
        ],
        'flag: Mali' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ml:',
                ':ml:',
            ]
        ],
        'flag: Myanmar (Burma)' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mm:',
                ':mm:',
            ]
        ],
        'flag: Mongolia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mn:',
                ':mn:',
            ]
        ],
        'flag: Macau SAR China' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mo:',
                ':mo:',
            ]
        ],
        'flag: Northern Mariana Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mp:',
                ':mp:',
            ]
        ],
        'flag: Martinique' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mq:',
                ':mq:',
            ]
        ],
        'flag: Mauritania' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mr:',
                ':mr:',
            ]
        ],
        'flag: Montserrat' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ms:',
                ':ms:',
            ]
        ],
        'flag: Malta' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mt:',
                ':mt:',
            ]
        ],
        'flag: Mauritius' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mu:',
                ':mu:',
            ]
        ],
        'flag: Maldives' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mv:',
                ':mv:',
            ]
        ],
        'flag: Malawi' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mw:',
                ':mw:',
            ]
        ],
        'flag: Mexico' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mx:',
                ':mx:',
            ]
        ],
        'flag: Malaysia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_my:',
                ':my:',
            ]
        ],
        'flag: Mozambique' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_mz:',
                ':mz:',
            ]
        ],
        'flag: Namibia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_na:',
                ':na:',
            ]
        ],
        'flag: New Caledonia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_nc:',
                ':nc:',
            ]
        ],
        'flag: Niger' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ne:',
                ':ne:',
            ]
        ],
        'flag: Norfolk Island' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_nf:',
                ':nf:',
            ]
        ],
        'flag: Nigeria' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ng:',
                ':nigeria:',
            ]
        ],
        'flag: Nicaragua' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ni:',
                ':ni:',
            ]
        ],
        'flag: Netherlands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_nl:',
                ':nl:',
            ]
        ],
        'flag: Norway' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_no:',
                ':no:',
            ]
        ],
        'flag: Nepal' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_np:',
                ':np:',
            ]
        ],
        'flag: Nauru' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_nr:',
                ':nr:',
            ]
        ],
        'flag: Niue' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_nu:',
                ':nu:',
            ]
        ],
        'flag: New Zealand' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_nz:',
                ':nz:',
            ]
        ],
        'flag: Oman' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_om:',
                ':om:',
            ]
        ],
        'flag: Panama' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pa:',
                ':pa:',
            ]
        ],
        'flag: Peru' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pe:',
                ':pe:',
            ]
        ],
        'flag: French Polynesia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pf:',
                ':pf:',
            ]
        ],
        'flag: Papua New Guinea' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pg:',
                ':pg:',
            ]
        ],
        'flag: Philippines' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ph:',
                ':ph:',
            ]
        ],
        'flag: Pakistan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pk:',
                ':pk:',
            ]
        ],
        'flag: Poland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pl:',
                ':pl:',
            ]
        ],
        'flag: St. Pierre & Miquelon' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pm:',
                ':pm:',
            ]
        ],
        'flag: Pitcairn Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pn:',
                ':pn:',
            ]
        ],
        'flag: Puerto Rico' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pr:',
                ':pr:',
            ]
        ],
        'flag: Palestinian Territories' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ps:',
                ':ps:',
            ]
        ],
        'flag: Portugal' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pt:',
                ':pt:',
            ]
        ],
        'flag: Palau' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_pw:',
                ':pw:',
            ]
        ],
        'flag: Paraguay' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_py:',
                ':py:',
            ]
        ],
        'flag: Qatar' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_qa:',
                ':qa:',
            ]
        ],
        'flag: Réunion' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_re:',
                ':re:',
            ]
        ],
        'flag: Romania' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ro:',
                ':ro:',
            ]
        ],
        'flag: Serbia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_rs:',
                ':rs:',
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
        'flag: Rwanda' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_rw:',
                ':rw:',
            ]
        ],
        'flag: Saudi Arabia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sa:',
                ':saudiarabia:',
                ':saudi:',
            ]
        ],
        'flag: Solomon Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sb:',
                ':sb:',
            ]
        ],
        'flag: Seychelles' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sc:',
                ':sc:',
            ]
        ],
        'flag: Sudan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sd:',
                ':sd:',
            ]
        ],
        'flag: Sweden' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_se:',
                ':se:',
            ]
        ],
        'flag: Singapore' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sg:',
                ':sg:',
            ]
        ],
        'flag: St. Helena' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sh:',
                ':sh:',
            ]
        ],
        'flag: Slovenia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_si:',
                ':si:',
            ]
        ],
        'flag: Svalbard & Jan Mayen' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sj:',
                ':sj:',
            ]
        ],
        'flag: Slovakia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sk:',
                ':sk:',
            ]
        ],
        'flag: Sierra Leone' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sl:',
                ':sl:',
            ]
        ],
        'flag: San Marino' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sm:',
                ':sm:',
            ]
        ],
        'flag: Senegal' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sn:',
                ':sn:',
            ]
        ],
        'flag: Somalia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_so:',
                ':so:',
            ]
        ],
        'flag: Suriname' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sr:',
                ':sr:',
            ]
        ],
        'flag: South Sudan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ss:',
                ':ss:',
            ]
        ],
        'flag: São Tomé & Príncipe' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_st:',
                ':st:',
            ]
        ],
        'flag: El Salvador' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sv:',
                ':sv:',
            ]
        ],
        'flag: Sint Maarten' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sx:',
                ':sx:',
            ]
        ],
        'flag: Syria' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sy:',
                ':sy:',
            ]
        ],
        'flag: Swaziland' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_sz:',
                ':sz:',
            ]
        ],
        'flag: Tristan da Cunha' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ta:',
                ':ta:',
            ]
        ],
        'flag: Turks & Caicos Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tc:',
                ':tc:',
            ]
        ],
        'flag: Chad' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_td:',
                ':td:',
            ]
        ],
        'flag: French Southern Territories' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tf:',
                ':tf:',
            ]
        ],
        'flag: Togo' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tg:',
                ':tg:',
            ]
        ],
        'flag: Thailand' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_th:',
                ':th:',
            ]
        ],
        'flag: Tajikistan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tj:',
                ':tj:',
            ]
        ],
        'flag: Tokelau' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tk:',
                ':tk:',
            ]
        ],
        'flag: Timor-Leste' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tl:',
                ':tl:',
            ]
        ],
        'flag: Turkmenistan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tm:',
                ':turkmenistan:',
            ]
        ],
        'flag: Tunisia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tn:',
                ':tn:',
            ]
        ],
        'flag: Tonga' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_to:',
                ':to:',
            ]
        ],
        'flag: Turkey' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tr:',
                ':tr:',
            ]
        ],
        'flag: Trinidad & Tobago' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tt:',
                ':tt:',
            ]
        ],
        'flag: Tuvalu' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tv:',
                ':tuvalu:',
            ]
        ],
        'flag: Taiwan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tw:',
                ':tw:',
            ]
        ],
        'flag: Tanzania' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_tz:',
                ':tz:',
            ]
        ],
        'flag: Ukraine' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ua:',
                ':ua:',
            ]
        ],
        'flag: Uganda' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ug:',
                ':ug:',
            ]
        ],
        'flag: U.S. Outlying Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_um:',
                ':um:',
            ]
        ],
        'flag: United Nations' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':united_nations:',
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
        'flag: Uruguay' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_uy:',
                ':uy:',
            ]
        ],
        'flag: Uzbekistan' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_uz:',
                ':uz:',
            ]
        ],
        'flag: Vatican City' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_va:',
                ':va:',
            ]
        ],
        'flag: St. Vincent & Grenadines' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_vc:',
                ':vc:',
            ]
        ],
        'flag: Venezuela' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ve:',
                ':ve:',
            ]
        ],
        'flag: British Virgin Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_vg:',
                ':vg:',
            ]
        ],
        'flag: U.S. Virgin Islands' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_vi:',
                ':vi:',
            ]
        ],
        'flag: Vietnam' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_vn:',
                ':vn:',
            ]
        ],
        'flag: Vanuatu' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_vu:',
                ':vu:',
            ]
        ],
        'flag: Wallis & Futuna' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_wf:',
                ':wf:',
            ]
        ],
        'flag: Samoa' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ws:',
                ':ws:',
            ]
        ],
        'flag: Kosovo' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_xk:',
                ':xk:',
            ]
        ],
        'flag: Yemen' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_ye:',
                ':ye:',
            ]
        ],
        'flag: Mayotte' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_yt:',
                ':yt:',
            ]
        ],
        'flag: South Africa' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_za:',
                ':za:',
            ]
        ],
        'flag: Zambia' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_zm:',
                ':zm:',
            ]
        ],
        'flag: Zimbabwe' => [
            'parent' => 'country-flag',
            'children' => null,
            'aliases' => [
                ':flag_zw:',
                ':zw:',
            ]
        ],
        'flag: England' => [
            'parent' => 'subdivision-flag',
            'children' => null,
            'aliases' => [
                ':england:',
            ]
        ],
        'flag: Scotland' => [
            'parent' => 'subdivision-flag',
            'children' => null,
            'aliases' => [
                ':scotland:',
            ]
        ],
        'flag: Wales' => [
            'parent' => 'subdivision-flag',
            'children' => null,
            'aliases' => [
                ':wales:',
            ]
        ],
    ];
}
