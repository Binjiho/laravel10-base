<?php

return [
    'tf_file_max' => 1, // 파일 업로드 갯수

    'round' => [ // 접수구분
        '1' => '1차',
        '2' => '2차',
    ],

    'reg_gubun' => [
        'P' => 'Individual',
        'G' => 'Group',
    ],

    'status' => [
        'C' => 'Complete',
        'I' => 'In-process',
    ],

    'price_unit' => [
        'domestic' => 'KRW',
        'overseas' => 'USD',
    ],

    'payment_method' => [
        'C' => 'Credit Card',
        'B' => 'Bank Transfer',
        'F' => 'Free',
    ],

    'payment_status' => [
        'C' => 'Complete',
        'I' => 'Payment is needed',
    ],

    'att_type' => [
        'F' => 'Full Day (11/25 ~ 11/26)',
        'O1' => 'One Day - 11/25 (Mon)',
        'O2' => 'One Day - 11/26 (Thu)',
    ],

    'category' => [
        // 국내
        'K1' => [
            'title' => '전문의',
            'upload' => false, // 파일 업로드 필수 체크
            'domestic' => true, // 국내
        ],

        'K2' => [
            'title' => '간호학과, 응급의학과, 응급구조학과 등 교수',
            'upload' => false,
            'domestic' => true,
        ],

        'K3' => [
            'title' => '전공의, 대학원 석·박사 과정',
            'upload' => false,
            'domestic' => true,
        ],

        'K4' => [
            'title' => '간호사',
            'upload' => false,
            'domestic' => true,
        ],

        'K5' => [
            'title' => '응급구조사',
            'upload' => false,
            'domestic' => true,
        ],

        'K6' => [
            'title' => '일반행정직, 연구직, 기타 일반직',
            'upload' => false,
            'domestic' => true,
        ],

        'K7' => [
            'title' => '공무원',
            'upload' => false,
            'domestic' => true,
        ],

        'K8' => [
            'title' => '군의관, 공중보건의, 간호장교',
            'upload' => false,
            'domestic' => true,
        ],

        'K9' => [
            'title' => '대학생',
            'upload' => false,
            'domestic' => true,
        ],

        // 국외
        'O1' => [
            'title' => 'Physician & Professor (Nursing, Emergency Medicine, Paramedicine, …) - Category I',
            'upload' => false, // 파일업로드 필수 체크
            'domestic' => false, // 국외
            'category' => '1', // 카테고리 구분
        ],

        'O2' => [
            'title' => 'Physician & Professor (Nursing, Emergency Medicine, Paramedicine, …) - Category II',
            'upload' => false,
            'domestic' => false,
            'category' => '2',
        ],

        'O3' => [
            'title' => 'Trainee (Resident, Graduate, Individual Researcher), Nurse, EMT - Category I',
            'upload' => false,
            'domestic' => false,
            'category' => '1',
        ],

        'O4' => [
            'title' => 'Trainee (Resident, Graduate, Individual Researcher), Nurse, EMT - Category II',
            'upload' => false,
            'domestic' => false,
            'category' => '2',
        ],

        'O5' => [
            'title' => 'Student & Military, Fire Department, Public Healthcare Officer - Category I',
            'upload' => false,
            'domestic' => false,
            'category' => '1',
        ],

        'O6' => [
            'title' => 'Student & Military, Fire Department, Public Healthcare Officer - Category II',
            'upload' => false,
            'domestic' => false,
            'category' => '2',
        ],

        'O7' => [
            'title' => 'Nurse, EMT - Category I',
            'upload' => false,
            'domestic' => false,
            'category' => '1',
        ],

        'O8' => [
            'title' => 'Nurse, EMT - Category II',
            'upload' => false,
            'domestic' => false,
            'category' => '2',
        ],
    ],

    'category_group' => [
        'KG1' => [
            'title' => 'Full Day (11/25 ~ 11/26)',
            'upload' => false, // 파일 업로드 필수 체크
            'domestic' => true, // 국내
        ],

        'KG2' => [
            'title' => 'One Day - 11/25 (Mon)',
            'upload' => false,
            'domestic' => true,
        ],

        'KG3' => [
            'title' => 'One Day - 11/26 (Thu)',
            'upload' => false,
            'domestic' => true,
        ],

        // 국외
        'OG1' => [
            'title' => 'Nurse, EMT – Category I',
            'upload' => false,
            'domestic' => false,
            'category' => '1',
        ],

        'OG2' => [
            'title' => 'Nurse, EMT – Category II',
            'upload' => false,
            'domestic' => false,
            'category' => '2',
        ],

        'OG3' => [
            'title' => 'Student & Military, Fire Department, Public Healthcare Officer – Category I',
            'upload' => false,
            'domestic' => false,
            'category' => '1',
        ],

        'OG4' => [
            'title' => 'Student & Military, Fire Department, Public Healthcare Officer – Category II',
            'upload' => false,
            'domestic' => false,
            'category' => '2',
        ],
    ],

    'price' => [
        // 국내
        'K1' => [ // 전문의
            '1' => [ // 1차
                'F' => 250000,
                'O1' => 200000,
                'O2' => 200000,
            ],

            '2' => [ // 2차
                'F' => 350000,
                'O1' => 250000,
                'O2' => 250000,
            ],
        ],

        'K2' => [ // 간호학과, 응급의학과, 응급구조학과 등 교수
            '1' => [ // 1차
                'F' => 250000,
                'O1' => 200000,
                'O2' => 200000,
            ],

            '2' => [ // 2차
                'F' => 350000,
                'O1' => 250000,
                'O2' => 250000,
            ],
        ],

        'K3' => [ // 전공의, 대학원 석·박사 과정
            '1' => [ // 1차
                'F' => 200000,
                'O1' => 150000,
                'O2' => 150000,
            ],

            '2' => [ // 2차
                'F' => 220000,
                'O1' => 170000,
                'O2' => 170000,
            ],
        ],

        'K4' => [ // 간호사
            '1' => [ // 1차
                'F' => 200000,
                'O1' => 150000,
                'O2' => 150000,
            ],

            '2' => [ // 2차
                'F' => 220000,
                'O1' => 170000,
                'O2' => 170000,
            ],
        ],

        'K5' => [ // 응급구조사
            '1' => [ // 1차
                'F' => 200000,
                'O1' => 150000,
                'O2' => 150000,
            ],

            '2' => [ // 2차
                'F' => 220000,
                'O1' => 170000,
                'O2' => 170000,
            ],
        ],

        'K6' => [ // 일반행정직, 연구직, 기타 일반직
            '1' => [ // 1차
                'F' => 200000,
                'O1' => 150000,
                'O2' => 150000,
            ],

            '2' => [ // 2차
                'F' => 220000,
                'O1' => 170000,
                'O2' => 170000,
            ],
        ],

        'K7' => [ // 공무원
            '1' => [ // 1차
                'F' => 150000,
                'O1' => 100000,
                'O2' => 100000,
            ],

            '2' => [ // 2차
                'F' => 150000,
                'O1' => 150000,
                'O2' => 150000,
            ],
        ],

        'K8' => [ // 군의관, 공중보건의, 간호장교
            '1' => [ // 1차
                'F' => 150000,
                'O1' => 100000,
                'O2' => 100000,
            ],

            '2' => [ // 2차
                'F' => 150000,
                'O1' => 100000,
                'O2' => 100000,
            ],
        ],

        'K9' => [ // 대학생
            '1' => [ // 1차
                'F' => 150000,
                'O1' => 100000,
                'O2' => 100000,
            ],

            '2' => [ // 2차
                'F' => 150000,
                'O1' => 150000,
                'O2' => 150000,
            ],
        ],

        // 국외
        'O1' => [ // Physician & Professor (Nursing, Emergency Medicine, Paramedicine, …) - Category I
            '1' => [ // 1차
                'F' => 500,
            ],

            '2' => [ // 2차
                'F' => 600,
            ],
        ],

        'O2' => [ // Physician & Professor (Nursing, Emergency Medicine, Paramedicine, …) - Category II
            '1' => [ // 1차
                'F' => 300,
            ],

            '2' => [ // 2차
                'F' => 400,
            ],
        ],

        'O3' => [ // Trainee (Resident, Graduate, Individual Researcher), Nurse, EMT - Category I
            '1' => [ // 1차
                'F' => 400,
            ],

            '2' => [ // 2차
                'F' => 450,
            ],
        ],

        'O4' => [ // Trainee (Resident, Graduate, Individual Researcher), Nurse, EMT - Category II
            '1' => [ // 1차
                'F' => 250,
            ],

            '2' => [ // 2차
                'F' => 300,
            ],
        ],

        'O5' => [ // Student & Military, Fire Department, Public Healthcare Officer - Category I
            '1' => [ // 1차
                'F' => 300,
            ],

            '2' => [ // 2차
                'F' => 350,
            ],
        ],

        'O6' => [ // Student & Military, Fire Department, Public Healthcare Officer - Category II
            '1' => [ // 1차
                'F' => 200,
            ],

            '2' => [ // 2차
                'F' => 250,
            ],
        ],

        'O7' => [ // Nurse, EMT - Category I
            '1' => [ // 1차
                'F' => 400,
            ],

            '2' => [ // 2차
                'F' => 450,
            ],
        ],

        'O8' => [ // Nurse, EMT - Category II
            '1' => [ // 1차
                'F' => 200,
            ],

            '2' => [ // 2차
                'F' => 300,
            ],
        ],
    ],

    'price_group' => [
        // 국내
        'KG1' => [
            '1' => 200000, // 1차
            '2' => 200000, // 2차

            '9' => [ // 소방청 소속 금액 (별도)
                '1' => 150000, // 1차
                '2' => 150000, // 2차
            ],
        ],

        'KG2' => [
            '1' => 150000, // 1차
            '2' => 150000, // 2차

            '9' => [ // 소방청 소속 금액 (별도)
                '1' => 100000, // 1차
                '2' => 100000, // 2차
            ],
        ],

        'KG3' => [
            '1' => 150000, // 1차
            '2' => 150000, // 2차

            '9' => [ // 소방청 소속 금액 (별도)
                '1' => 100000, // 1차
                '2' => 100000, // 2차
            ],
        ],

        // 국외
        'OG1' => [
            '1' => 300, // 1차
            '2' => 300, // 2차
        ],

        'OG2' => [
            '1' => 200, // 1차
            '2' => 200, // 2차
        ],

        'OG3' => [
            '1' => 250, // 1차
            '2' => 250, // 2차
        ],

        'OG4' => [
            '1' => 150, // 1차
            '2' => 150, // 2차
        ],
    ],

    'category_country' => [ // 국외 등록자 국가에 따라 카테고리 노출 다르게 하기 위한 변수
        /* 카테고리 1만 노출  */
        'AW' => '1', // Aruba
        'AL' => '1', // Albania
        'AD' => '1', // Andorra
        'AE' => '1', // United Arab Emirates
        'AR' => '1', // Argentina
        'AM' => '1', // Armenia
        'AS' => '1', // American Samoa
        'AG' => '1', // Antigua and Barbuda
        'AU' => '1', // Australia
        'AT' => '1', // Austria
        'AZ' => '1', // Azerbaijan
        'BE' => '1', // Belgium
        'BG' => '1', // Bulgaria
        'BH' => '1', // Bahrain
        'BS' => '1', // Bahamas
        'BA' => '1', // Bosnia and Herzegovina
        'BY' => '1', // Belarus
        'BZ' => '1', // Belize
        'BM' => '1', // Bermuda
        'BR' => '1', // Brazil
        'BB' => '1', // Barbados
        'BN' => '1', // Brunei Darussalam
        'BW' => '1', // Botswana
        'CA' => '1', // Canada
        'CH' => '1', // Switzerland
        'GG' => '1', // Channel Islands
        'CL' => '1', // Chile
        'CN' => '1', // China
        'CO' => '1', // Colombia
        'CR' => '1', // Costa Rica
        'CU' => '1', // Cuba
        'CW' => '1', // Curaçao
        'KY' => '1', // Cayman Islands
        'CY' => '1', // Cyprus
        'DE' => '1', // Germany
        'DM' => '1', // Dominica
        'DK' => '1', // Denmark
        'DO' => '1', // Dominican Republic
        'EC' => '1', // Ecuador
        'ES' => '1', // Spain
        'EE' => '1', // Estonia
        'FI' => '1', // Finland
        'FJ' => '1', // Fiji
        'FR' => '1', // France
        'FO' => '1', // Faroe Islands
        'GA' => '1', // Gabon
        'GB' => '1', // United Kingdom
        'GE' => '1', // Georgia
        'GI' => '1', // Gibraltar
        'GQ' => '1', // Equatorial Guinea
        'GR' => '1', // Greece
        'GD' => '1', // Grenada
        'GL' => '1', // Greenland
        'GT' => '1', // Guatemala
        'GU' => '1', // Guam
        'GY' => '1', // Guyana
        'HR' => '1', // Croatia
        'HU' => '1', // Hungary
        'ID' => '1', // Indonesia
        'IM' => '1', // Isle of Man
        'IE' => '1', // Ireland
        'IQ' => '1', // Iraq
        'IS' => '1', // Iceland
        'IL' => '1', // Israel
        'IT' => '1', // Italy
        'JM' => '1', // Jamaica
        'JP' => '1', // Japan
        'KZ' => '1', // Kazakhstan
        'KN' => '1', // St. Kitts and Nevis
        'KW' => '1', // Kuwait
        'LC' => '1', // St. Lucia
        'LI' => '1', // Liechtenstein
        'LT' => '1', // Lithuania
        'LU' => '1', // Luxembourg
        'LV' => '1', // Latvia
        'MF' => '1', // St. Martin (French part)
        'MC' => '1', // Monaco
        'MV' => '1', // Maldives
        'MX' => '1', // Mexico
        'MH' => '1', // Marshall Islands
        'MT' => '1', // Malta
        'ME' => '1', // Montenegro
        'MP' => '1', // Northern Mariana Islands
        'MU' => '1', // Mauritius
        'MY' => '1', // Malaysia
        'NA' => '1', // Namibia
        'NC' => '1', // New Caledonia
        'NL' => '1', // Netherlands
        'NO' => '1', // Norway
        'NZ' => '1', // New Zealand
        'OM' => '1', // Oman
        'PA' => '1', // Panama
        'PE' => '1', // Peru
        'PW' => '1', // Palau
        'PL' => '1', // Poland
        'PR' => '1', // Puerto Rico
        'PT' => '1', // Portugal
        'PY' => '1', // Paraguay
        'PS' => '1', // West Bank and Gaza
        'PF' => '1', // French Polynesia
        'QA' => '1', // Qatar
        'RO' => '1', // Romania
        'RU' => '1', // Russian Federation
        'SA' => '1', // Saudi Arabia
        'SG' => '1', // Singapore
        'SV' => '1', // El Salvador
        'SM' => '1', // San Marino
        'RS' => '1', // Serbia
        'SR' => '1', // Suriname
        'SI' => '1', // Slovenia
        'SE' => '1', // Sweden
        'SX' => '1', // Sint Maarten (Dutch part)
        'SC' => '1', // Seychelles
        'TC' => '1', // Turks and Caicos Islands
        'TH' => '1', // Thailand
        'TM' => '1', // Turkmenistan
        'TO' => '1', // Tonga
        'TT' => '1', // Trinidad and Tobago
        'TR' => '1', // Türkiye
        'TV' => '1', // Tuvalu
        'UY' => '1', // Uruguay
        'US' => '1', // United States
        'VC' => '1', // St. Vincent and the Grenadines
        'KS' => '1', // Kosovo
        'ZA' => '1', // South Africa
        'CZ' => '1', // Czech Republic
        'HK' => '1', // Hong Kong
        'LY' => '1', // Libyan Arab Jamahiriya
        'MO' => '1', // Macau
        'MK' => '1', // Macedonia
        'MD' => '1', // Moldova, Republic of
        'TW' => '1', // Taiwan
        'VI' => '1', // Virgin Islands, U.S.
        'SK' => '1', // Slovakia
        'KG' => '1', // Kyrgyzstan
        'YT' => '1', // Mayotte
        'VE' => '1', // Venezuela

        /* 카테고리 2만노출 */
        'AF' => '2', // Afghanistan
        'AO' => '2', // Angola
        'BI' => '2', // Burundi
        'BJ' => '2', // Benin
        'BF' => '2', // Burkina Faso
        'BD' => '2', // Bangladesh
        'BO' => '2', // Bolivia
        'BT' => '2', // Bhutan
        'CF' => '2', // Central African Republic
        'CM' => '2', // Cameroon
        'KM' => '2', // Comoros
        'DJ' => '2', // Djibouti
        'DZ' => '2', // Algeria
        'ER' => '2', // Eritrea
        'ET' => '2', // Ethiopia
        'GH' => '2', // Ghana
        'GN' => '2', // Guinea
        'GW' => '2', // Guinea-Bissau
        'HN' => '2', // Honduras
        'HT' => '2', // Haiti
        'IN' => '2', // India
        'JO' => '2', // Jordan
        'KE' => '2', // Kenya
        'KH' => '2', // Cambodia
        'KI' => '2', // Kiribati
        'LB' => '2', // Lebanon
        'LR' => '2', // Liberia
        'LK' => '2', // Sri Lanka
        'LS' => '2', // Lesotho
        'MA' => '2', // Morocco
        'MG' => '2', // Madagascar
        'ML' => '2', // Mali
        'MM' => '2', // Myanmar
        'MN' => '2', // Mongolia
        'MZ' => '2', // Mozambique
        'MR' => '2', // Mauritania
        'MW' => '2', // Malawi
        'NE' => '2', // Niger
        'NG' => '2', // Nigeria
        'NI' => '2', // Nicaragua
        'NP' => '2', // Nepal
        'PK' => '2', // Pakistan
        'PH' => '2', // Philippines
        'PG' => '2', // Papua New Guinea
        'RW' => '2', // Rwanda
        'SD' => '2', // Sudan
        'SN' => '2', // Senegal
        'SB' => '2', // Solomon Islands
        'SL' => '2', // Sierra Leone
        'SO' => '2', // Somalia
        'SS' => '2', // South Sudan
        'SY' => '2', // Syrian Arab Republic
        'TD' => '2', // Chad
        'TG' => '2', // Togo
        'TJ' => '2', // Tajikistan
        'TL' => '2', // Timor-Leste
        'TN' => '2', // Tunisia
        'UG' => '2', // Uganda
        'UA' => '2', // Ukraine
        'UZ' => '2', // Uzbekistan
        'VN' => '2', // Vietnam
        'VU' => '2', // Vanuatu
        'WS' => '2', // Samoa
        'ZM' => '2', // Zambia
        'ZW' => '2', // Zimbabwe
        'CV' => '2', // Cape Verde
        'CG' => '2', // Congo
        'CD' => '2', // Congo, The Democratic Republic of the
        'CI' => '2', // Cote D'Ivoire
        'EG' => '2', // Egypt
        'GM' => '2', // Gambia
        'IR' => '2', // Iran, Islamic Republic of
        'LA' => '2', // Lao People's Democratic Republic
        'TZ' => '2', // Tanzania, United Republic of
        'YE' => '2', // Yemen
        'FM' => '2', // Micronesia, Federated States of
        'ST' => '2', // Sao Tome and Principe
        'SZ' => '2', // Swaziland
    ],

    'workshop' => [
        '2' => [
            'name' => 'Workshop 1: 2024 APCDM DISTURBIA Workshop: Catastrophe in APCDM City, Capital of Disturbia. A Tabletop Immersive Experience',
            'max' => 30,
            'price' => [
                'domestic' => 200000, // 국내
                'overseas' => 200, // 국외
            ],
            'domestic' => true, // 국내
            'overseas' => true, // 국외
        ],

        '1' => [
            'name' => 'Workshop 2: Trainning Using XR(eXtended Reality) Simulator of Radiation Emergency Medicine',
            'max' => 30,
            'price' => [
                'domestic' => 0, // 국내
                'overseas' => 0, // 국외
            ],
            'domestic' => true, // 국내
            'overseas' => false, // 국외
        ],

        '4' => [
            'name' => 'Workshop 3: Radiological Contamination Survey',
            'max' => 30,
            'price' => [
                'domestic' => 0, // 국내
                'overseas' => 0, // 국외
            ],
            'domestic' => true, // 국내
            'overseas' => true, // 국외
        ],

        '3' => [
            'name' => 'Workshop 4: K-HICS Workshop: K-HICS Provider Course',
            'max' => 30,
            'price' => [
                'domestic' => 250000, // 국내
                'overseas' => 0, // 국외
            ],
            'domestic' => true, // 국내
            'overseas' => true, // 국외
        ],

        '6' => [
            'name' => 'Workshop 4: K-HICS Workshop: K-HICS Instructor Training Course',
            'max' => 30,
            'price' => [
                'domestic' => 150000, // 국내
                'overseas' => 0, // 국외
            ],
            'domestic' => true, // 국내
            'overseas' => true, // 국외
        ],

        '5' => [
            'name' => 'Meeting 1: NDLS Education Consortium',
            'max' => 50,
            'price' => [
                'domestic' => 0, // 국내
                'overseas' => 0, // 국외
            ],
            'domestic' => true, // 국내
            'overseas' => true, // 국외
        ],
    ],

    'account_info' => [
        'swift_code' => 'KOEXKRSE or KOEXKRSEXXX',

        'account_number' =>  '286-910022-39104',

        'account_name' =>  [
            'domestic' => '㈜제이에스기획',
            'overseas' => 'JS Communication',
        ],

        'bank_name' => [
            'domestic' => '하나은행',
            'overseas' => 'KEB Hana Bank',
        ],

        'address' => [
            'overseas' => '35-1, Seongbuk-dong1-ga, Seongbuk-gu, Seoul',
        ],
    ]
];
