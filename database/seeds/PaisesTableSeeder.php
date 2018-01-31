<?php

use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paises')->delete();
        
        \DB::table('paises')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Aruba',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Angola',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Anguilla',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Albania',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Andorra',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Netherlands Antilles',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'United Arab Emirates',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Argentina',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Armenia',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'American Samoa',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Antarctica',
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'French Southern territories',
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Antigua and Barbuda',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Australia',
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Austria',
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Azerbaijan',
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Burundi',
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Belgium',
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'Benin',
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Burkina Faso',
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'Bangladesh',
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'Bulgaria',
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'Bahrain',
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'Bahamas',
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'Bosnia and Herzegovina',
            ),
            26 => 
            array (
                'id' => 27,
                'nombre' => 'Belarus',
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'Belize',
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'Bermuda',
            ),
            29 => 
            array (
                'id' => 30,
                'nombre' => 'Bolivia',
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'Brazil',
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'Barbados',
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => 'Brunei',
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => 'Bhutan',
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => 'Bouvet Island',
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => 'Botswana',
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => 'Central African Republic',
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => 'Canada',
            ),
            38 => 
            array (
                'id' => 39,
            'nombre' => 'Cocos (Keeling) Islands',
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => 'Switzerland',
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => 'Chile',
            ),
            41 => 
            array (
                'id' => 42,
                'nombre' => 'China',
            ),
            42 => 
            array (
                'id' => 43,
                'nombre' => 'Côte d’Ivoire',
            ),
            43 => 
            array (
                'id' => 44,
                'nombre' => 'Cameroon',
            ),
            44 => 
            array (
                'id' => 45,
                'nombre' => 'Congo, The Democratic Republic of the',
            ),
            45 => 
            array (
                'id' => 46,
                'nombre' => 'Congo',
            ),
            46 => 
            array (
                'id' => 47,
                'nombre' => 'Cook Islands',
            ),
            47 => 
            array (
                'id' => 48,
                'nombre' => 'Colombia',
            ),
            48 => 
            array (
                'id' => 49,
                'nombre' => 'Comoros',
            ),
            49 => 
            array (
                'id' => 50,
                'nombre' => 'Cape Verde',
            ),
            50 => 
            array (
                'id' => 51,
                'nombre' => 'Costa Rica',
            ),
            51 => 
            array (
                'id' => 52,
                'nombre' => 'Cuba',
            ),
            52 => 
            array (
                'id' => 53,
                'nombre' => 'Christmas Island',
            ),
            53 => 
            array (
                'id' => 54,
                'nombre' => 'Cayman Islands',
            ),
            54 => 
            array (
                'id' => 55,
                'nombre' => 'Cyprus',
            ),
            55 => 
            array (
                'id' => 56,
                'nombre' => 'Czech Republic',
            ),
            56 => 
            array (
                'id' => 57,
                'nombre' => 'Germany',
            ),
            57 => 
            array (
                'id' => 58,
                'nombre' => 'Djibouti',
            ),
            58 => 
            array (
                'id' => 59,
                'nombre' => 'Dominica',
            ),
            59 => 
            array (
                'id' => 60,
                'nombre' => 'Denmark',
            ),
            60 => 
            array (
                'id' => 61,
                'nombre' => 'Dominican Republic',
            ),
            61 => 
            array (
                'id' => 62,
                'nombre' => 'Algeria',
            ),
            62 => 
            array (
                'id' => 63,
                'nombre' => 'Ecuador',
            ),
            63 => 
            array (
                'id' => 64,
                'nombre' => 'Egypt',
            ),
            64 => 
            array (
                'id' => 65,
                'nombre' => 'Eritrea',
            ),
            65 => 
            array (
                'id' => 66,
                'nombre' => 'Western Sahara',
            ),
            66 => 
            array (
                'id' => 67,
                'nombre' => 'Spain',
            ),
            67 => 
            array (
                'id' => 68,
                'nombre' => 'Estonia',
            ),
            68 => 
            array (
                'id' => 69,
                'nombre' => 'Ethiopia',
            ),
            69 => 
            array (
                'id' => 70,
                'nombre' => 'Finland',
            ),
            70 => 
            array (
                'id' => 71,
                'nombre' => 'Fiji Islands',
            ),
            71 => 
            array (
                'id' => 72,
                'nombre' => 'Falkland Islands',
            ),
            72 => 
            array (
                'id' => 73,
                'nombre' => 'France',
            ),
            73 => 
            array (
                'id' => 74,
                'nombre' => 'Faroe Islands',
            ),
            74 => 
            array (
                'id' => 75,
                'nombre' => 'Micronesia, Federated States of',
            ),
            75 => 
            array (
                'id' => 76,
                'nombre' => 'Gabon',
            ),
            76 => 
            array (
                'id' => 77,
                'nombre' => 'United Kingdom',
            ),
            77 => 
            array (
                'id' => 78,
                'nombre' => 'Georgia',
            ),
            78 => 
            array (
                'id' => 79,
                'nombre' => 'Ghana',
            ),
            79 => 
            array (
                'id' => 80,
                'nombre' => 'Gibraltar',
            ),
            80 => 
            array (
                'id' => 81,
                'nombre' => 'Guinea',
            ),
            81 => 
            array (
                'id' => 82,
                'nombre' => 'Guadeloupe',
            ),
            82 => 
            array (
                'id' => 83,
                'nombre' => 'Gambia',
            ),
            83 => 
            array (
                'id' => 84,
                'nombre' => 'Guinea-Bissau',
            ),
            84 => 
            array (
                'id' => 85,
                'nombre' => 'Equatorial Guinea',
            ),
            85 => 
            array (
                'id' => 86,
                'nombre' => 'Greece',
            ),
            86 => 
            array (
                'id' => 87,
                'nombre' => 'Grenada',
            ),
            87 => 
            array (
                'id' => 88,
                'nombre' => 'Greenland',
            ),
            88 => 
            array (
                'id' => 89,
                'nombre' => 'Guatemala',
            ),
            89 => 
            array (
                'id' => 90,
                'nombre' => 'French Guiana',
            ),
            90 => 
            array (
                'id' => 91,
                'nombre' => 'Guam',
            ),
            91 => 
            array (
                'id' => 92,
                'nombre' => 'Guyana',
            ),
            92 => 
            array (
                'id' => 93,
                'nombre' => 'Hong Kong',
            ),
            93 => 
            array (
                'id' => 94,
                'nombre' => 'Heard Island and McDonald Islands',
            ),
            94 => 
            array (
                'id' => 95,
                'nombre' => 'Honduras',
            ),
            95 => 
            array (
                'id' => 96,
                'nombre' => 'Croatia',
            ),
            96 => 
            array (
                'id' => 97,
                'nombre' => 'Haiti',
            ),
            97 => 
            array (
                'id' => 98,
                'nombre' => 'Hungary',
            ),
            98 => 
            array (
                'id' => 99,
                'nombre' => 'Indonesia',
            ),
            99 => 
            array (
                'id' => 100,
                'nombre' => 'India',
            ),
            100 => 
            array (
                'id' => 101,
                'nombre' => 'British Indian Ocean Territory',
            ),
            101 => 
            array (
                'id' => 102,
                'nombre' => 'Ireland',
            ),
            102 => 
            array (
                'id' => 103,
                'nombre' => 'Iran',
            ),
            103 => 
            array (
                'id' => 104,
                'nombre' => 'Iraq',
            ),
            104 => 
            array (
                'id' => 105,
                'nombre' => 'Iceland',
            ),
            105 => 
            array (
                'id' => 106,
                'nombre' => 'Israel',
            ),
            106 => 
            array (
                'id' => 107,
                'nombre' => 'Italy',
            ),
            107 => 
            array (
                'id' => 108,
                'nombre' => 'Jamaica',
            ),
            108 => 
            array (
                'id' => 109,
                'nombre' => 'Jordan',
            ),
            109 => 
            array (
                'id' => 110,
                'nombre' => 'Japan',
            ),
            110 => 
            array (
                'id' => 111,
                'nombre' => 'Kazakstan',
            ),
            111 => 
            array (
                'id' => 112,
                'nombre' => 'Kenya',
            ),
            112 => 
            array (
                'id' => 113,
                'nombre' => 'Kyrgyzstan',
            ),
            113 => 
            array (
                'id' => 114,
                'nombre' => 'Cambodia',
            ),
            114 => 
            array (
                'id' => 115,
                'nombre' => 'Kiribati',
            ),
            115 => 
            array (
                'id' => 116,
                'nombre' => 'Saint Kitts and Nevis',
            ),
            116 => 
            array (
                'id' => 117,
                'nombre' => 'South Korea',
            ),
            117 => 
            array (
                'id' => 118,
                'nombre' => 'Kuwait',
            ),
            118 => 
            array (
                'id' => 119,
                'nombre' => 'Laos',
            ),
            119 => 
            array (
                'id' => 120,
                'nombre' => 'Lebanon',
            ),
            120 => 
            array (
                'id' => 121,
                'nombre' => 'Liberia',
            ),
            121 => 
            array (
                'id' => 122,
                'nombre' => 'Libyan Arab Jamahiriya',
            ),
            122 => 
            array (
                'id' => 123,
                'nombre' => 'Saint Lucia',
            ),
            123 => 
            array (
                'id' => 124,
                'nombre' => 'Liechtenstein',
            ),
            124 => 
            array (
                'id' => 125,
                'nombre' => 'Sri Lanka',
            ),
            125 => 
            array (
                'id' => 126,
                'nombre' => 'Lesotho',
            ),
            126 => 
            array (
                'id' => 127,
                'nombre' => 'Lithuania',
            ),
            127 => 
            array (
                'id' => 128,
                'nombre' => 'Luxembourg',
            ),
            128 => 
            array (
                'id' => 129,
                'nombre' => 'Latvia',
            ),
            129 => 
            array (
                'id' => 130,
                'nombre' => 'Macao',
            ),
            130 => 
            array (
                'id' => 131,
                'nombre' => 'Morocco',
            ),
            131 => 
            array (
                'id' => 132,
                'nombre' => 'Monaco',
            ),
            132 => 
            array (
                'id' => 133,
                'nombre' => 'Moldova',
            ),
            133 => 
            array (
                'id' => 134,
                'nombre' => 'Madagascar',
            ),
            134 => 
            array (
                'id' => 135,
                'nombre' => 'Maldives',
            ),
            135 => 
            array (
                'id' => 136,
                'nombre' => 'Mexico',
            ),
            136 => 
            array (
                'id' => 137,
                'nombre' => 'Marshall Islands',
            ),
            137 => 
            array (
                'id' => 138,
                'nombre' => 'Macedonia',
            ),
            138 => 
            array (
                'id' => 139,
                'nombre' => 'Mali',
            ),
            139 => 
            array (
                'id' => 140,
                'nombre' => 'Malta',
            ),
            140 => 
            array (
                'id' => 141,
                'nombre' => 'Myanmar',
            ),
            141 => 
            array (
                'id' => 142,
                'nombre' => 'Mongolia',
            ),
            142 => 
            array (
                'id' => 143,
                'nombre' => 'Northern Mariana Islands',
            ),
            143 => 
            array (
                'id' => 144,
                'nombre' => 'Mozambique',
            ),
            144 => 
            array (
                'id' => 145,
                'nombre' => 'Mauritania',
            ),
            145 => 
            array (
                'id' => 146,
                'nombre' => 'Montserrat',
            ),
            146 => 
            array (
                'id' => 147,
                'nombre' => 'Martinique',
            ),
            147 => 
            array (
                'id' => 148,
                'nombre' => 'Mauritius',
            ),
            148 => 
            array (
                'id' => 149,
                'nombre' => 'Malawi',
            ),
            149 => 
            array (
                'id' => 150,
                'nombre' => 'Malaysia',
            ),
            150 => 
            array (
                'id' => 151,
                'nombre' => 'Mayotte',
            ),
            151 => 
            array (
                'id' => 152,
                'nombre' => 'Namibia',
            ),
            152 => 
            array (
                'id' => 153,
                'nombre' => 'New Caledonia',
            ),
            153 => 
            array (
                'id' => 154,
                'nombre' => 'Niger',
            ),
            154 => 
            array (
                'id' => 155,
                'nombre' => 'Norfolk Island',
            ),
            155 => 
            array (
                'id' => 156,
                'nombre' => 'Nigeria',
            ),
            156 => 
            array (
                'id' => 157,
                'nombre' => 'Nicaragua',
            ),
            157 => 
            array (
                'id' => 158,
                'nombre' => 'Niue',
            ),
            158 => 
            array (
                'id' => 159,
                'nombre' => 'Netherlands',
            ),
            159 => 
            array (
                'id' => 160,
                'nombre' => 'Norway',
            ),
            160 => 
            array (
                'id' => 161,
                'nombre' => 'Nepal',
            ),
            161 => 
            array (
                'id' => 162,
                'nombre' => 'Nauru',
            ),
            162 => 
            array (
                'id' => 163,
                'nombre' => 'New Zealand',
            ),
            163 => 
            array (
                'id' => 164,
                'nombre' => 'Oman',
            ),
            164 => 
            array (
                'id' => 165,
                'nombre' => 'Pakistan',
            ),
            165 => 
            array (
                'id' => 166,
                'nombre' => 'Panama',
            ),
            166 => 
            array (
                'id' => 167,
                'nombre' => 'Pitcairn',
            ),
            167 => 
            array (
                'id' => 168,
                'nombre' => 'Peru',
            ),
            168 => 
            array (
                'id' => 169,
                'nombre' => 'Philippines',
            ),
            169 => 
            array (
                'id' => 170,
                'nombre' => 'Palau',
            ),
            170 => 
            array (
                'id' => 171,
                'nombre' => 'Papua New Guinea',
            ),
            171 => 
            array (
                'id' => 172,
                'nombre' => 'Poland',
            ),
            172 => 
            array (
                'id' => 173,
                'nombre' => 'Puerto Rico',
            ),
            173 => 
            array (
                'id' => 174,
                'nombre' => 'North Korea',
            ),
            174 => 
            array (
                'id' => 175,
                'nombre' => 'Portugal',
            ),
            175 => 
            array (
                'id' => 176,
                'nombre' => 'Paraguay',
            ),
            176 => 
            array (
                'id' => 177,
                'nombre' => 'Palestine',
            ),
            177 => 
            array (
                'id' => 178,
                'nombre' => 'French Polynesia',
            ),
            178 => 
            array (
                'id' => 179,
                'nombre' => 'Qatar',
            ),
            179 => 
            array (
                'id' => 180,
                'nombre' => 'Réunion',
            ),
            180 => 
            array (
                'id' => 181,
                'nombre' => 'Romania',
            ),
            181 => 
            array (
                'id' => 182,
                'nombre' => 'Russian Federation',
            ),
            182 => 
            array (
                'id' => 183,
                'nombre' => 'Rwanda',
            ),
            183 => 
            array (
                'id' => 184,
                'nombre' => 'Saudi Arabia',
            ),
            184 => 
            array (
                'id' => 185,
                'nombre' => 'Sudan',
            ),
            185 => 
            array (
                'id' => 186,
                'nombre' => 'Senegal',
            ),
            186 => 
            array (
                'id' => 187,
                'nombre' => 'Singapore',
            ),
            187 => 
            array (
                'id' => 188,
                'nombre' => 'South Georgia and the South Sandwich Islands',
            ),
            188 => 
            array (
                'id' => 189,
                'nombre' => 'Saint Helena',
            ),
            189 => 
            array (
                'id' => 190,
                'nombre' => 'Svalbard and Jan Mayen',
            ),
            190 => 
            array (
                'id' => 191,
                'nombre' => 'Solomon Islands',
            ),
            191 => 
            array (
                'id' => 192,
                'nombre' => 'Sierra Leone',
            ),
            192 => 
            array (
                'id' => 193,
                'nombre' => 'El Salvador',
            ),
            193 => 
            array (
                'id' => 194,
                'nombre' => 'San Marino',
            ),
            194 => 
            array (
                'id' => 195,
                'nombre' => 'Somalia',
            ),
            195 => 
            array (
                'id' => 196,
                'nombre' => 'Saint Pierre and Miquelon',
            ),
            196 => 
            array (
                'id' => 197,
                'nombre' => 'Sao Tome and Principe',
            ),
            197 => 
            array (
                'id' => 198,
                'nombre' => 'Suriname',
            ),
            198 => 
            array (
                'id' => 199,
                'nombre' => 'Slovakia',
            ),
            199 => 
            array (
                'id' => 200,
                'nombre' => 'Slovenia',
            ),
            200 => 
            array (
                'id' => 201,
                'nombre' => 'Sweden',
            ),
            201 => 
            array (
                'id' => 202,
                'nombre' => 'Swaziland',
            ),
            202 => 
            array (
                'id' => 203,
                'nombre' => 'Seychelles',
            ),
            203 => 
            array (
                'id' => 204,
                'nombre' => 'Syria',
            ),
            204 => 
            array (
                'id' => 205,
                'nombre' => 'Turks and Caicos Islands',
            ),
            205 => 
            array (
                'id' => 206,
                'nombre' => 'Chad',
            ),
            206 => 
            array (
                'id' => 207,
                'nombre' => 'Togo',
            ),
            207 => 
            array (
                'id' => 208,
                'nombre' => 'Thailand',
            ),
            208 => 
            array (
                'id' => 209,
                'nombre' => 'Tajikistan',
            ),
            209 => 
            array (
                'id' => 210,
                'nombre' => 'Tokelau',
            ),
            210 => 
            array (
                'id' => 211,
                'nombre' => 'Turkmenistan',
            ),
            211 => 
            array (
                'id' => 212,
                'nombre' => 'East Timor',
            ),
            212 => 
            array (
                'id' => 213,
                'nombre' => 'Tonga',
            ),
            213 => 
            array (
                'id' => 214,
                'nombre' => 'Trinidad and Tobago',
            ),
            214 => 
            array (
                'id' => 215,
                'nombre' => 'Tunisia',
            ),
            215 => 
            array (
                'id' => 216,
                'nombre' => 'Turkey',
            ),
            216 => 
            array (
                'id' => 217,
                'nombre' => 'Tuvalu',
            ),
            217 => 
            array (
                'id' => 218,
                'nombre' => 'Taiwan',
            ),
            218 => 
            array (
                'id' => 219,
                'nombre' => 'Tanzania',
            ),
            219 => 
            array (
                'id' => 220,
                'nombre' => 'Uganda',
            ),
            220 => 
            array (
                'id' => 221,
                'nombre' => 'Ukraine',
            ),
            221 => 
            array (
                'id' => 222,
                'nombre' => 'United States Minor Outlying Islands',
            ),
            222 => 
            array (
                'id' => 223,
                'nombre' => 'Uruguay',
            ),
            223 => 
            array (
                'id' => 224,
                'nombre' => 'United States',
            ),
            224 => 
            array (
                'id' => 225,
                'nombre' => 'Uzbekistan',
            ),
            225 => 
            array (
                'id' => 226,
            'nombre' => 'Holy See (Vatican City State)',
            ),
            226 => 
            array (
                'id' => 227,
                'nombre' => 'Saint Vincent and the Grenadines',
            ),
            227 => 
            array (
                'id' => 228,
                'nombre' => 'Venezuela',
            ),
            228 => 
            array (
                'id' => 229,
                'nombre' => 'Virgin Islands, British',
            ),
            229 => 
            array (
                'id' => 230,
                'nombre' => 'Virgin Islands, U.S.',
            ),
            230 => 
            array (
                'id' => 231,
                'nombre' => 'Vietnam',
            ),
            231 => 
            array (
                'id' => 232,
                'nombre' => 'Vanuatu',
            ),
            232 => 
            array (
                'id' => 233,
                'nombre' => 'Wallis and Futuna',
            ),
            233 => 
            array (
                'id' => 234,
                'nombre' => 'Samoa',
            ),
            234 => 
            array (
                'id' => 235,
                'nombre' => 'Yemen',
            ),
            235 => 
            array (
                'id' => 236,
                'nombre' => 'Yugoslavia',
            ),
            236 => 
            array (
                'id' => 237,
                'nombre' => 'South Africa',
            ),
            237 => 
            array (
                'id' => 238,
                'nombre' => 'Zambia',
            ),
            238 => 
            array (
                'id' => 239,
                'nombre' => 'Zimbabwe',
            ),
        ));
        
        
    }
}