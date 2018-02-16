<?php

use Illuminate\Database\Seeder;

class GeoCiudadesTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('geo_ciudades')->delete();
        
        \DB::table('geo_ciudades')->insert(array (
            0 => 
            array (
                'id' => 240,
                'latitude' => 34.555349,
                'longitude' => 69.207486,
                'nombre' => 'Kabul',
            ),
            1 => 
            array (
                'id' => 241,
                'latitude' => 31.628871,
                'longitude' => 65.737175,
                'nombre' => 'Qandahar',
            ),
            2 => 
            array (
                'id' => 242,
                'latitude' => 34.352865,
                'longitude' => 62.204029,
                'nombre' => 'Herat',
            ),
            3 => 
            array (
                'id' => 243,
                'latitude' => 36.692617,
                'longitude' => 67.117951,
                'nombre' => 'Mazar-e-Sharif',
            ),
            4 => 
            array (
                'id' => 244,
                'latitude' => 52.370216,
                'longitude' => 4.895168,
                'nombre' => 'Amsterdam',
            ),
            5 => 
            array (
                'id' => 245,
                'latitude' => 51.92442,
                'longitude' => 4.477733,
                'nombre' => 'Rotterdam',
            ),
            6 => 
            array (
                'id' => 246,
                'latitude' => 52.070498,
                'longitude' => 4.3007,
                'nombre' => 'Haag',
            ),
            7 => 
            array (
                'id' => 247,
                'latitude' => 52.090737,
                'longitude' => 5.12142,
                'nombre' => 'Utrecht',
            ),
            8 => 
            array (
                'id' => 248,
                'latitude' => 51.441642,
                'longitude' => 5.469722,
                'nombre' => 'Eindhoven',
            ),
            9 => 
            array (
                'id' => 249,
                'latitude' => 51.585253,
                'longitude' => 5.056375,
                'nombre' => 'Tilburg',
            ),
            10 => 
            array (
                'id' => 250,
                'latitude' => 53.219384,
                'longitude' => 6.566502,
                'nombre' => 'Groningen',
            ),
            11 => 
            array (
                'id' => 251,
                'latitude' => 51.571915,
                'longitude' => 4.768323,
                'nombre' => 'Breda',
            ),
            12 => 
            array (
                'id' => 252,
                'latitude' => 52.211157,
                'longitude' => 5.969923,
                'nombre' => 'Apeldoorn',
            ),
            13 => 
            array (
                'id' => 253,
                'latitude' => 51.812563,
                'longitude' => 5.837226,
                'nombre' => 'Nijmegen',
            ),
            14 => 
            array (
                'id' => 254,
                'latitude' => 52.221537,
                'longitude' => 6.893662,
                'nombre' => 'Enschede',
            ),
            15 => 
            array (
                'id' => 255,
                'latitude' => 52.387388,
                'longitude' => 4.646219,
                'nombre' => 'Haarlem',
            ),
            16 => 
            array (
                'id' => 256,
                'latitude' => 52.350785,
                'longitude' => 5.264702,
                'nombre' => 'Almere',
            ),
            17 => 
            array (
                'id' => 257,
                'latitude' => 51.985103,
                'longitude' => 5.89873,
                'nombre' => 'Arnhem',
            ),
            18 => 
            array (
                'id' => 258,
                'latitude' => 52.457966,
                'longitude' => 4.751043,
                'nombre' => 'Zaanstad',
            ),
            19 => 
            array (
                'id' => 259,
                'latitude' => 51.697816,
                'longitude' => 5.303675,
                'nombre' => '´s-Hertogenbosch',
            ),
            20 => 
            array (
                'id' => 260,
                'latitude' => 52.156111,
                'longitude' => 5.387827,
                'nombre' => 'Amersfoort',
            ),
            21 => 
            array (
                'id' => 261,
                'latitude' => 50.851368,
                'longitude' => 5.690973,
                'nombre' => 'Maastricht',
            ),
            22 => 
            array (
                'id' => 262,
                'latitude' => 51.813298,
                'longitude' => 4.690093,
                'nombre' => 'Dordrecht',
            ),
            23 => 
            array (
                'id' => 263,
                'latitude' => 52.160114,
                'longitude' => 4.49701,
                'nombre' => 'Leiden',
            ),
            24 => 
            array (
                'id' => 264,
                'latitude' => 52.300378,
                'longitude' => 4.674359,
                'nombre' => 'Haarlemmermeer',
            ),
            25 => 
            array (
                'id' => 265,
                'latitude' => 52.060669,
                'longitude' => 4.494025,
                'nombre' => 'Zoetermeer',
            ),
            26 => 
            array (
                'id' => 266,
                'latitude' => 52.713237,
                'longitude' => 6.955777,
                'nombre' => 'Emmen',
            ),
            27 => 
            array (
                'id' => 267,
                'latitude' => 52.516775,
                'longitude' => 6.083022,
                'nombre' => 'Zwolle',
            ),
            28 => 
            array (
                'id' => 268,
                'latitude' => 43.260317,
                'longitude' => -2.942062,
                'nombre' => 'Ede',
            ),
            29 => 
            array (
                'id' => 269,
                'latitude' => 52.011577,
                'longitude' => 4.357068,
                'nombre' => 'Delft',
            ),
            30 => 
            array (
                'id' => 270,
                'latitude' => 50.888174,
                'longitude' => 5.979499,
                'nombre' => 'Heerlen',
            ),
            31 => 
            array (
                'id' => 271,
                'latitude' => 52.632381,
                'longitude' => 4.753375,
                'nombre' => 'Alkmaar',
            ),
            32 => 
            array (
                'id' => 272,
                'latitude' => 12.122422,
                'longitude' => -68.882423,
                'nombre' => 'Willemstad',
            ),
            33 => 
            array (
                'id' => 273,
                'latitude' => 41.327546,
                'longitude' => 19.818698,
                'nombre' => 'Tirana',
            ),
            34 => 
            array (
                'id' => 274,
                'latitude' => 36.753768,
                'longitude' => 3.058756,
                'nombre' => 'Alger',
            ),
            35 => 
            array (
                'id' => 275,
                'latitude' => 35.69707,
                'longitude' => -0.630799,
                'nombre' => 'Oran',
            ),
            36 => 
            array (
                'id' => 276,
                'latitude' => 41.84116,
                'longitude' => -85.668603,
                'nombre' => 'Constantine',
            ),
            37 => 
            array (
                'id' => 277,
                'latitude' => 36.926458,
                'longitude' => 7.752535,
                'nombre' => 'Annaba',
            ),
            38 => 
            array (
                'id' => 278,
                'latitude' => 35.561022,
                'longitude' => 6.173912,
                'nombre' => 'Batna',
            ),
            39 => 
            array (
                'id' => 279,
                'latitude' => 36.196903,
                'longitude' => 5.415087,
                'nombre' => 'Sétif',
            ),
            40 => 
            array (
                'id' => 280,
                'latitude' => 35.202225,
                'longitude' => -0.629892,
                'nombre' => 'Sidi Bel Abbès',
            ),
            41 => 
            array (
                'id' => 281,
                'latitude' => 36.87152,
                'longitude' => 6.910181,
                'nombre' => 'Skikda',
            ),
            42 => 
            array (
                'id' => 282,
                'latitude' => 34.837035,
                'longitude' => 5.751048,
                'nombre' => 'Biskra',
            ),
            43 => 
            array (
                'id' => 283,
                'latitude' => 36.475793,
                'longitude' => 2.829758,
            'nombre' => 'Blida (el-Boulaida)',
            ),
            44 => 
            array (
                'id' => 284,
                'latitude' => 36.75089,
                'longitude' => 5.056733,
                'nombre' => 'Béjaïa',
            ),
            45 => 
            array (
                'id' => 285,
                'latitude' => 36.013124,
                'longitude' => 0.140138,
                'nombre' => 'Mostaganem',
            ),
            46 => 
            array (
                'id' => 286,
                'latitude' => 35.414249,
                'longitude' => 8.101092,
                'nombre' => 'Tébessa',
            ),
            47 => 
            array (
                'id' => 287,
                'latitude' => 34.888406,
                'longitude' => -1.318004,
            'nombre' => 'Tlemcen (Tilimsen)',
            ),
            48 => 
            array (
                'id' => 288,
                'latitude' => 34.555349,
                'longitude' => 69.207486,
                'nombre' => 'Kabul',
            ),
            49 => 
            array (
                'id' => 289,
                'latitude' => 31.628871,
                'longitude' => 65.737175,
                'nombre' => 'Qandahar',
            ),
            50 => 
            array (
                'id' => 290,
                'latitude' => 34.352865,
                'longitude' => 62.204029,
                'nombre' => 'Herat',
            ),
            51 => 
            array (
                'id' => 291,
                'latitude' => 36.692617,
                'longitude' => 67.117951,
                'nombre' => 'Mazar-e-Sharif',
            ),
            52 => 
            array (
                'id' => 292,
                'latitude' => 52.370216,
                'longitude' => 4.895168,
                'nombre' => 'Amsterdam',
            ),
            53 => 
            array (
                'id' => 293,
                'latitude' => 51.92442,
                'longitude' => 4.477733,
                'nombre' => 'Rotterdam',
            ),
            54 => 
            array (
                'id' => 294,
                'latitude' => 52.070498,
                'longitude' => 4.3007,
                'nombre' => 'Haag',
            ),
            55 => 
            array (
                'id' => 295,
                'latitude' => 52.090737,
                'longitude' => 5.12142,
                'nombre' => 'Utrecht',
            ),
            56 => 
            array (
                'id' => 296,
                'latitude' => 51.441642,
                'longitude' => 5.469722,
                'nombre' => 'Eindhoven',
            ),
            57 => 
            array (
                'id' => 297,
                'latitude' => 51.585253,
                'longitude' => 5.056375,
                'nombre' => 'Tilburg',
            ),
            58 => 
            array (
                'id' => 298,
                'latitude' => 53.219384,
                'longitude' => 6.566502,
                'nombre' => 'Groningen',
            ),
            59 => 
            array (
                'id' => 299,
                'latitude' => 51.571915,
                'longitude' => 4.768323,
                'nombre' => 'Breda',
            ),
            60 => 
            array (
                'id' => 300,
                'latitude' => 52.211157,
                'longitude' => 5.969923,
                'nombre' => 'Apeldoorn',
            ),
            61 => 
            array (
                'id' => 301,
                'latitude' => 51.812563,
                'longitude' => 5.837226,
                'nombre' => 'Nijmegen',
            ),
            62 => 
            array (
                'id' => 302,
                'latitude' => 52.221537,
                'longitude' => 6.893662,
                'nombre' => 'Enschede',
            ),
            63 => 
            array (
                'id' => 303,
                'latitude' => 52.387388,
                'longitude' => 4.646219,
                'nombre' => 'Haarlem',
            ),
            64 => 
            array (
                'id' => 304,
                'latitude' => 52.350785,
                'longitude' => 5.264702,
                'nombre' => 'Almere',
            ),
            65 => 
            array (
                'id' => 305,
                'latitude' => 51.985103,
                'longitude' => 5.89873,
                'nombre' => 'Arnhem',
            ),
            66 => 
            array (
                'id' => 306,
                'latitude' => 52.457966,
                'longitude' => 4.751043,
                'nombre' => 'Zaanstad',
            ),
            67 => 
            array (
                'id' => 307,
                'latitude' => 51.697816,
                'longitude' => 5.303675,
                'nombre' => '´s-Hertogenbosch',
            ),
            68 => 
            array (
                'id' => 308,
                'latitude' => 52.156111,
                'longitude' => 5.387827,
                'nombre' => 'Amersfoort',
            ),
            69 => 
            array (
                'id' => 309,
                'latitude' => 50.851368,
                'longitude' => 5.690973,
                'nombre' => 'Maastricht',
            ),
            70 => 
            array (
                'id' => 310,
                'latitude' => 51.813298,
                'longitude' => 4.690093,
                'nombre' => 'Dordrecht',
            ),
            71 => 
            array (
                'id' => 311,
                'latitude' => 52.160114,
                'longitude' => 4.49701,
                'nombre' => 'Leiden',
            ),
            72 => 
            array (
                'id' => 312,
                'latitude' => 52.300378,
                'longitude' => 4.674359,
                'nombre' => 'Haarlemmermeer',
            ),
            73 => 
            array (
                'id' => 313,
                'latitude' => 52.060669,
                'longitude' => 4.494025,
                'nombre' => 'Zoetermeer',
            ),
            74 => 
            array (
                'id' => 314,
                'latitude' => 52.713237,
                'longitude' => 6.955777,
                'nombre' => 'Emmen',
            ),
            75 => 
            array (
                'id' => 315,
                'latitude' => 52.516775,
                'longitude' => 6.083022,
                'nombre' => 'Zwolle',
            ),
            76 => 
            array (
                'id' => 316,
                'latitude' => 43.260317,
                'longitude' => -2.942062,
                'nombre' => 'Ede',
            ),
            77 => 
            array (
                'id' => 317,
                'latitude' => 52.011577,
                'longitude' => 4.357068,
                'nombre' => 'Delft',
            ),
            78 => 
            array (
                'id' => 318,
                'latitude' => 50.888174,
                'longitude' => 5.979499,
                'nombre' => 'Heerlen',
            ),
            79 => 
            array (
                'id' => 319,
                'latitude' => 52.632381,
                'longitude' => 4.753375,
                'nombre' => 'Alkmaar',
            ),
            80 => 
            array (
                'id' => 320,
                'latitude' => 12.122422,
                'longitude' => -68.882423,
                'nombre' => 'Willemstad',
            ),
            81 => 
            array (
                'id' => 321,
                'latitude' => 41.327546,
                'longitude' => 19.818698,
                'nombre' => 'Tirana',
            ),
            82 => 
            array (
                'id' => 322,
                'latitude' => 36.753768,
                'longitude' => 3.058756,
                'nombre' => 'Alger',
            ),
            83 => 
            array (
                'id' => 323,
                'latitude' => 35.69707,
                'longitude' => -0.630799,
                'nombre' => 'Oran',
            ),
            84 => 
            array (
                'id' => 324,
                'latitude' => 41.84116,
                'longitude' => -85.668603,
                'nombre' => 'Constantine',
            ),
            85 => 
            array (
                'id' => 325,
                'latitude' => 36.926458,
                'longitude' => 7.752535,
                'nombre' => 'Annaba',
            ),
            86 => 
            array (
                'id' => 326,
                'latitude' => 35.561022,
                'longitude' => 6.173912,
                'nombre' => 'Batna',
            ),
            87 => 
            array (
                'id' => 327,
                'latitude' => 36.196903,
                'longitude' => 5.415087,
                'nombre' => 'Sétif',
            ),
            88 => 
            array (
                'id' => 328,
                'latitude' => 35.202225,
                'longitude' => -0.629892,
                'nombre' => 'Sidi Bel Abbès',
            ),
            89 => 
            array (
                'id' => 329,
                'latitude' => 36.87152,
                'longitude' => 6.910181,
                'nombre' => 'Skikda',
            ),
            90 => 
            array (
                'id' => 330,
                'latitude' => 34.837035,
                'longitude' => 5.751048,
                'nombre' => 'Biskra',
            ),
            91 => 
            array (
                'id' => 331,
                'latitude' => 36.475793,
                'longitude' => 2.829758,
            'nombre' => 'Blida (el-Boulaida)',
            ),
            92 => 
            array (
                'id' => 332,
                'latitude' => 36.75089,
                'longitude' => 5.056733,
                'nombre' => 'Béjaïa',
            ),
            93 => 
            array (
                'id' => 333,
                'latitude' => 36.013124,
                'longitude' => 0.140138,
                'nombre' => 'Mostaganem',
            ),
            94 => 
            array (
                'id' => 334,
                'latitude' => 35.414249,
                'longitude' => 8.101092,
                'nombre' => 'Tébessa',
            ),
            95 => 
            array (
                'id' => 335,
                'latitude' => 34.888406,
                'longitude' => -1.318004,
            'nombre' => 'Tlemcen (Tilimsen)',
            ),
            96 => 
            array (
                'id' => 336,
                'latitude' => 34.555349,
                'longitude' => 69.207486,
                'nombre' => 'Kabul',
            ),
            97 => 
            array (
                'id' => 337,
                'latitude' => 31.628871,
                'longitude' => 65.737175,
                'nombre' => 'Qandahar',
            ),
            98 => 
            array (
                'id' => 338,
                'latitude' => 34.352865,
                'longitude' => 62.204029,
                'nombre' => 'Herat',
            ),
            99 => 
            array (
                'id' => 339,
                'latitude' => 36.692617,
                'longitude' => 67.117951,
                'nombre' => 'Mazar-e-Sharif',
            ),
            100 => 
            array (
                'id' => 340,
                'latitude' => 52.370216,
                'longitude' => 4.895168,
                'nombre' => 'Amsterdam',
            ),
            101 => 
            array (
                'id' => 341,
                'latitude' => 51.92442,
                'longitude' => 4.477733,
                'nombre' => 'Rotterdam',
            ),
            102 => 
            array (
                'id' => 342,
                'latitude' => 52.070498,
                'longitude' => 4.3007,
                'nombre' => 'Haag',
            ),
            103 => 
            array (
                'id' => 343,
                'latitude' => 52.090737,
                'longitude' => 5.12142,
                'nombre' => 'Utrecht',
            ),
            104 => 
            array (
                'id' => 344,
                'latitude' => 51.441642,
                'longitude' => 5.469722,
                'nombre' => 'Eindhoven',
            ),
            105 => 
            array (
                'id' => 345,
                'latitude' => 51.585253,
                'longitude' => 5.056375,
                'nombre' => 'Tilburg',
            ),
            106 => 
            array (
                'id' => 346,
                'latitude' => 53.219384,
                'longitude' => 6.566502,
                'nombre' => 'Groningen',
            ),
            107 => 
            array (
                'id' => 347,
                'latitude' => 51.571915,
                'longitude' => 4.768323,
                'nombre' => 'Breda',
            ),
            108 => 
            array (
                'id' => 348,
                'latitude' => 52.211157,
                'longitude' => 5.969923,
                'nombre' => 'Apeldoorn',
            ),
            109 => 
            array (
                'id' => 349,
                'latitude' => 51.812563,
                'longitude' => 5.837226,
                'nombre' => 'Nijmegen',
            ),
            110 => 
            array (
                'id' => 350,
                'latitude' => 52.221537,
                'longitude' => 6.893662,
                'nombre' => 'Enschede',
            ),
            111 => 
            array (
                'id' => 351,
                'latitude' => 52.387388,
                'longitude' => 4.646219,
                'nombre' => 'Haarlem',
            ),
            112 => 
            array (
                'id' => 352,
                'latitude' => 52.350785,
                'longitude' => 5.264702,
                'nombre' => 'Almere',
            ),
            113 => 
            array (
                'id' => 353,
                'latitude' => 51.985103,
                'longitude' => 5.89873,
                'nombre' => 'Arnhem',
            ),
            114 => 
            array (
                'id' => 354,
                'latitude' => 52.457966,
                'longitude' => 4.751043,
                'nombre' => 'Zaanstad',
            ),
            115 => 
            array (
                'id' => 355,
                'latitude' => 51.697816,
                'longitude' => 5.303675,
                'nombre' => '´s-Hertogenbosch',
            ),
            116 => 
            array (
                'id' => 356,
                'latitude' => 52.156111,
                'longitude' => 5.387827,
                'nombre' => 'Amersfoort',
            ),
            117 => 
            array (
                'id' => 357,
                'latitude' => 50.851368,
                'longitude' => 5.690973,
                'nombre' => 'Maastricht',
            ),
            118 => 
            array (
                'id' => 358,
                'latitude' => 51.813298,
                'longitude' => 4.690093,
                'nombre' => 'Dordrecht',
            ),
            119 => 
            array (
                'id' => 359,
                'latitude' => 52.160114,
                'longitude' => 4.49701,
                'nombre' => 'Leiden',
            ),
            120 => 
            array (
                'id' => 360,
                'latitude' => 52.300378,
                'longitude' => 4.674359,
                'nombre' => 'Haarlemmermeer',
            ),
            121 => 
            array (
                'id' => 361,
                'latitude' => 52.060669,
                'longitude' => 4.494025,
                'nombre' => 'Zoetermeer',
            ),
            122 => 
            array (
                'id' => 362,
                'latitude' => 52.713237,
                'longitude' => 6.955777,
                'nombre' => 'Emmen',
            ),
            123 => 
            array (
                'id' => 363,
                'latitude' => 52.516775,
                'longitude' => 6.083022,
                'nombre' => 'Zwolle',
            ),
            124 => 
            array (
                'id' => 364,
                'latitude' => 43.260317,
                'longitude' => -2.942062,
                'nombre' => 'Ede',
            ),
            125 => 
            array (
                'id' => 365,
                'latitude' => 52.011577,
                'longitude' => 4.357068,
                'nombre' => 'Delft',
            ),
            126 => 
            array (
                'id' => 366,
                'latitude' => 50.888174,
                'longitude' => 5.979499,
                'nombre' => 'Heerlen',
            ),
            127 => 
            array (
                'id' => 367,
                'latitude' => 52.632381,
                'longitude' => 4.753375,
                'nombre' => 'Alkmaar',
            ),
            128 => 
            array (
                'id' => 368,
                'latitude' => 12.122422,
                'longitude' => -68.882423,
                'nombre' => 'Willemstad',
            ),
            129 => 
            array (
                'id' => 369,
                'latitude' => 41.327546,
                'longitude' => 19.818698,
                'nombre' => 'Tirana',
            ),
            130 => 
            array (
                'id' => 370,
                'latitude' => 36.753768,
                'longitude' => 3.058756,
                'nombre' => 'Alger',
            ),
            131 => 
            array (
                'id' => 371,
                'latitude' => 35.69707,
                'longitude' => -0.630799,
                'nombre' => 'Oran',
            ),
            132 => 
            array (
                'id' => 372,
                'latitude' => 41.84116,
                'longitude' => -85.668603,
                'nombre' => 'Constantine',
            ),
            133 => 
            array (
                'id' => 373,
                'latitude' => 36.926458,
                'longitude' => 7.752535,
                'nombre' => 'Annaba',
            ),
            134 => 
            array (
                'id' => 374,
                'latitude' => 35.561022,
                'longitude' => 6.173912,
                'nombre' => 'Batna',
            ),
            135 => 
            array (
                'id' => 375,
                'latitude' => 36.196903,
                'longitude' => 5.415087,
                'nombre' => 'Sétif',
            ),
            136 => 
            array (
                'id' => 376,
                'latitude' => 35.202225,
                'longitude' => -0.629892,
                'nombre' => 'Sidi Bel Abbès',
            ),
            137 => 
            array (
                'id' => 377,
                'latitude' => 36.87152,
                'longitude' => 6.910181,
                'nombre' => 'Skikda',
            ),
            138 => 
            array (
                'id' => 378,
                'latitude' => 34.837035,
                'longitude' => 5.751048,
                'nombre' => 'Biskra',
            ),
            139 => 
            array (
                'id' => 379,
                'latitude' => 36.475793,
                'longitude' => 2.829758,
            'nombre' => 'Blida (el-Boulaida)',
            ),
            140 => 
            array (
                'id' => 380,
                'latitude' => 36.75089,
                'longitude' => 5.056733,
                'nombre' => 'Béjaïa',
            ),
            141 => 
            array (
                'id' => 381,
                'latitude' => 36.013124,
                'longitude' => 0.140138,
                'nombre' => 'Mostaganem',
            ),
            142 => 
            array (
                'id' => 382,
                'latitude' => 35.414249,
                'longitude' => 8.101092,
                'nombre' => 'Tébessa',
            ),
            143 => 
            array (
                'id' => 383,
                'latitude' => 34.888406,
                'longitude' => -1.318004,
            'nombre' => 'Tlemcen (Tilimsen)',
            ),
            144 => 
            array (
                'id' => 384,
                'latitude' => 31.616703,
                'longitude' => -2.219486,
                'nombre' => 'Béchar',
            ),
            145 => 
            array (
                'id' => 385,
                'latitude' => 34.555349,
                'longitude' => 69.207486,
                'nombre' => 'Kabul',
            ),
            146 => 
            array (
                'id' => 386,
                'latitude' => 31.628871,
                'longitude' => 65.737175,
                'nombre' => 'Qandahar',
            ),
            147 => 
            array (
                'id' => 387,
                'latitude' => 34.352865,
                'longitude' => 62.204029,
                'nombre' => 'Herat',
            ),
            148 => 
            array (
                'id' => 388,
                'latitude' => 36.692617,
                'longitude' => 67.117951,
                'nombre' => 'Mazar-e-Sharif',
            ),
            149 => 
            array (
                'id' => 389,
                'latitude' => 52.370216,
                'longitude' => 4.895168,
                'nombre' => 'Amsterdam',
            ),
            150 => 
            array (
                'id' => 390,
                'latitude' => 51.92442,
                'longitude' => 4.477733,
                'nombre' => 'Rotterdam',
            ),
            151 => 
            array (
                'id' => 391,
                'latitude' => 52.070498,
                'longitude' => 4.3007,
                'nombre' => 'Haag',
            ),
            152 => 
            array (
                'id' => 392,
                'latitude' => 52.090737,
                'longitude' => 5.12142,
                'nombre' => 'Utrecht',
            ),
            153 => 
            array (
                'id' => 393,
                'latitude' => 51.441642,
                'longitude' => 5.469722,
                'nombre' => 'Eindhoven',
            ),
            154 => 
            array (
                'id' => 394,
                'latitude' => 51.585253,
                'longitude' => 5.056375,
                'nombre' => 'Tilburg',
            ),
            155 => 
            array (
                'id' => 395,
                'latitude' => 53.219384,
                'longitude' => 6.566502,
                'nombre' => 'Groningen',
            ),
            156 => 
            array (
                'id' => 396,
                'latitude' => 51.571915,
                'longitude' => 4.768323,
                'nombre' => 'Breda',
            ),
            157 => 
            array (
                'id' => 397,
                'latitude' => 52.211157,
                'longitude' => 5.969923,
                'nombre' => 'Apeldoorn',
            ),
            158 => 
            array (
                'id' => 398,
                'latitude' => 51.812563,
                'longitude' => 5.837226,
                'nombre' => 'Nijmegen',
            ),
            159 => 
            array (
                'id' => 399,
                'latitude' => 52.221537,
                'longitude' => 6.893662,
                'nombre' => 'Enschede',
            ),
            160 => 
            array (
                'id' => 400,
                'latitude' => 52.387388,
                'longitude' => 4.646219,
                'nombre' => 'Haarlem',
            ),
            161 => 
            array (
                'id' => 401,
                'latitude' => 52.350785,
                'longitude' => 5.264702,
                'nombre' => 'Almere',
            ),
            162 => 
            array (
                'id' => 402,
                'latitude' => 51.985103,
                'longitude' => 5.89873,
                'nombre' => 'Arnhem',
            ),
            163 => 
            array (
                'id' => 403,
                'latitude' => 52.457966,
                'longitude' => 4.751043,
                'nombre' => 'Zaanstad',
            ),
            164 => 
            array (
                'id' => 404,
                'latitude' => 51.697816,
                'longitude' => 5.303675,
                'nombre' => '´s-Hertogenbosch',
            ),
            165 => 
            array (
                'id' => 405,
                'latitude' => 52.156111,
                'longitude' => 5.387827,
                'nombre' => 'Amersfoort',
            ),
            166 => 
            array (
                'id' => 406,
                'latitude' => 50.851368,
                'longitude' => 5.690973,
                'nombre' => 'Maastricht',
            ),
            167 => 
            array (
                'id' => 407,
                'latitude' => 51.813298,
                'longitude' => 4.690093,
                'nombre' => 'Dordrecht',
            ),
            168 => 
            array (
                'id' => 408,
                'latitude' => 52.160114,
                'longitude' => 4.49701,
                'nombre' => 'Leiden',
            ),
            169 => 
            array (
                'id' => 409,
                'latitude' => 52.300378,
                'longitude' => 4.674359,
                'nombre' => 'Haarlemmermeer',
            ),
            170 => 
            array (
                'id' => 410,
                'latitude' => 52.060669,
                'longitude' => 4.494025,
                'nombre' => 'Zoetermeer',
            ),
            171 => 
            array (
                'id' => 411,
                'latitude' => 52.713237,
                'longitude' => 6.955777,
                'nombre' => 'Emmen',
            ),
            172 => 
            array (
                'id' => 412,
                'latitude' => 52.516775,
                'longitude' => 6.083022,
                'nombre' => 'Zwolle',
            ),
            173 => 
            array (
                'id' => 413,
                'latitude' => 43.260317,
                'longitude' => -2.942062,
                'nombre' => 'Ede',
            ),
            174 => 
            array (
                'id' => 414,
                'latitude' => 52.011577,
                'longitude' => 4.357068,
                'nombre' => 'Delft',
            ),
            175 => 
            array (
                'id' => 415,
                'latitude' => 50.888174,
                'longitude' => 5.979499,
                'nombre' => 'Heerlen',
            ),
            176 => 
            array (
                'id' => 416,
                'latitude' => 52.632381,
                'longitude' => 4.753375,
                'nombre' => 'Alkmaar',
            ),
            177 => 
            array (
                'id' => 417,
                'latitude' => 12.122422,
                'longitude' => -68.882423,
                'nombre' => 'Willemstad',
            ),
            178 => 
            array (
                'id' => 418,
                'latitude' => 41.327546,
                'longitude' => 19.818698,
                'nombre' => 'Tirana',
            ),
            179 => 
            array (
                'id' => 419,
                'latitude' => 36.753768,
                'longitude' => 3.058756,
                'nombre' => 'Alger',
            ),
            180 => 
            array (
                'id' => 420,
                'latitude' => 35.69707,
                'longitude' => -0.630799,
                'nombre' => 'Oran',
            ),
            181 => 
            array (
                'id' => 421,
                'latitude' => 41.84116,
                'longitude' => -85.668603,
                'nombre' => 'Constantine',
            ),
            182 => 
            array (
                'id' => 422,
                'latitude' => 36.926458,
                'longitude' => 7.752535,
                'nombre' => 'Annaba',
            ),
            183 => 
            array (
                'id' => 423,
                'latitude' => 35.561022,
                'longitude' => 6.173912,
                'nombre' => 'Batna',
            ),
            184 => 
            array (
                'id' => 424,
                'latitude' => 36.196903,
                'longitude' => 5.415087,
                'nombre' => 'Sétif',
            ),
            185 => 
            array (
                'id' => 425,
                'latitude' => 35.202225,
                'longitude' => -0.629892,
                'nombre' => 'Sidi Bel Abbès',
            ),
            186 => 
            array (
                'id' => 426,
                'latitude' => 36.87152,
                'longitude' => 6.910181,
                'nombre' => 'Skikda',
            ),
            187 => 
            array (
                'id' => 427,
                'latitude' => 34.837035,
                'longitude' => 5.751048,
                'nombre' => 'Biskra',
            ),
            188 => 
            array (
                'id' => 428,
                'latitude' => 36.475793,
                'longitude' => 2.829758,
            'nombre' => 'Blida (el-Boulaida)',
            ),
            189 => 
            array (
                'id' => 429,
                'latitude' => 36.75089,
                'longitude' => 5.056733,
                'nombre' => 'Béjaïa',
            ),
            190 => 
            array (
                'id' => 430,
                'latitude' => 36.013124,
                'longitude' => 0.140138,
                'nombre' => 'Mostaganem',
            ),
            191 => 
            array (
                'id' => 431,
                'latitude' => 35.414249,
                'longitude' => 8.101092,
                'nombre' => 'Tébessa',
            ),
            192 => 
            array (
                'id' => 432,
                'latitude' => 34.888406,
                'longitude' => -1.318004,
            'nombre' => 'Tlemcen (Tilimsen)',
            ),
            193 => 
            array (
                'id' => 433,
                'latitude' => 31.616703,
                'longitude' => -2.219486,
                'nombre' => 'Béchar',
            ),
            194 => 
            array (
                'id' => 434,
                'latitude' => 34.555349,
                'longitude' => 69.207486,
                'nombre' => 'Kabul',
            ),
            195 => 
            array (
                'id' => 435,
                'latitude' => 31.628871,
                'longitude' => 65.737175,
                'nombre' => 'Qandahar',
            ),
            196 => 
            array (
                'id' => 436,
                'latitude' => 34.352865,
                'longitude' => 62.204029,
                'nombre' => 'Herat',
            ),
            197 => 
            array (
                'id' => 437,
                'latitude' => 36.692617,
                'longitude' => 67.117951,
                'nombre' => 'Mazar-e-Sharif',
            ),
            198 => 
            array (
                'id' => 438,
                'latitude' => 52.370216,
                'longitude' => 4.895168,
                'nombre' => 'Amsterdam',
            ),
            199 => 
            array (
                'id' => 439,
                'latitude' => 51.92442,
                'longitude' => 4.477733,
                'nombre' => 'Rotterdam',
            ),
            200 => 
            array (
                'id' => 440,
                'latitude' => 52.070498,
                'longitude' => 4.3007,
                'nombre' => 'Haag',
            ),
            201 => 
            array (
                'id' => 441,
                'latitude' => 52.090737,
                'longitude' => 5.12142,
                'nombre' => 'Utrecht',
            ),
            202 => 
            array (
                'id' => 442,
                'latitude' => 51.441642,
                'longitude' => 5.469722,
                'nombre' => 'Eindhoven',
            ),
            203 => 
            array (
                'id' => 443,
                'latitude' => 51.585253,
                'longitude' => 5.056375,
                'nombre' => 'Tilburg',
            ),
            204 => 
            array (
                'id' => 444,
                'latitude' => 53.219384,
                'longitude' => 6.566502,
                'nombre' => 'Groningen',
            ),
            205 => 
            array (
                'id' => 445,
                'latitude' => 51.571915,
                'longitude' => 4.768323,
                'nombre' => 'Breda',
            ),
            206 => 
            array (
                'id' => 446,
                'latitude' => 52.211157,
                'longitude' => 5.969923,
                'nombre' => 'Apeldoorn',
            ),
            207 => 
            array (
                'id' => 447,
                'latitude' => 51.812563,
                'longitude' => 5.837226,
                'nombre' => 'Nijmegen',
            ),
            208 => 
            array (
                'id' => 448,
                'latitude' => 52.221537,
                'longitude' => 6.893662,
                'nombre' => 'Enschede',
            ),
            209 => 
            array (
                'id' => 449,
                'latitude' => 52.387388,
                'longitude' => 4.646219,
                'nombre' => 'Haarlem',
            ),
            210 => 
            array (
                'id' => 450,
                'latitude' => 52.350785,
                'longitude' => 5.264702,
                'nombre' => 'Almere',
            ),
            211 => 
            array (
                'id' => 451,
                'latitude' => 51.985103,
                'longitude' => 5.89873,
                'nombre' => 'Arnhem',
            ),
            212 => 
            array (
                'id' => 452,
                'latitude' => 52.457966,
                'longitude' => 4.751043,
                'nombre' => 'Zaanstad',
            ),
            213 => 
            array (
                'id' => 453,
                'latitude' => 51.697816,
                'longitude' => 5.303675,
                'nombre' => '´s-Hertogenbosch',
            ),
            214 => 
            array (
                'id' => 454,
                'latitude' => 52.156111,
                'longitude' => 5.387827,
                'nombre' => 'Amersfoort',
            ),
            215 => 
            array (
                'id' => 455,
                'latitude' => 50.851368,
                'longitude' => 5.690973,
                'nombre' => 'Maastricht',
            ),
            216 => 
            array (
                'id' => 456,
                'latitude' => 51.813298,
                'longitude' => 4.690093,
                'nombre' => 'Dordrecht',
            ),
            217 => 
            array (
                'id' => 457,
                'latitude' => 52.160114,
                'longitude' => 4.49701,
                'nombre' => 'Leiden',
            ),
            218 => 
            array (
                'id' => 458,
                'latitude' => 52.300378,
                'longitude' => 4.674359,
                'nombre' => 'Haarlemmermeer',
            ),
            219 => 
            array (
                'id' => 459,
                'latitude' => 52.060669,
                'longitude' => 4.494025,
                'nombre' => 'Zoetermeer',
            ),
            220 => 
            array (
                'id' => 460,
                'latitude' => 52.713237,
                'longitude' => 6.955777,
                'nombre' => 'Emmen',
            ),
            221 => 
            array (
                'id' => 461,
                'latitude' => 52.516775,
                'longitude' => 6.083022,
                'nombre' => 'Zwolle',
            ),
            222 => 
            array (
                'id' => 462,
                'latitude' => 43.260317,
                'longitude' => -2.942062,
                'nombre' => 'Ede',
            ),
            223 => 
            array (
                'id' => 463,
                'latitude' => 52.011577,
                'longitude' => 4.357068,
                'nombre' => 'Delft',
            ),
            224 => 
            array (
                'id' => 464,
                'latitude' => 50.888174,
                'longitude' => 5.979499,
                'nombre' => 'Heerlen',
            ),
            225 => 
            array (
                'id' => 465,
                'latitude' => 52.632381,
                'longitude' => 4.753375,
                'nombre' => 'Alkmaar',
            ),
            226 => 
            array (
                'id' => 466,
                'latitude' => 12.122422,
                'longitude' => -68.882423,
                'nombre' => 'Willemstad',
            ),
            227 => 
            array (
                'id' => 467,
                'latitude' => 41.327546,
                'longitude' => 19.818698,
                'nombre' => 'Tirana',
            ),
            228 => 
            array (
                'id' => 468,
                'latitude' => 36.753768,
                'longitude' => 3.058756,
                'nombre' => 'Alger',
            ),
            229 => 
            array (
                'id' => 469,
                'latitude' => 35.69707,
                'longitude' => -0.630799,
                'nombre' => 'Oran',
            ),
            230 => 
            array (
                'id' => 470,
                'latitude' => 41.84116,
                'longitude' => -85.668603,
                'nombre' => 'Constantine',
            ),
            231 => 
            array (
                'id' => 471,
                'latitude' => 36.926458,
                'longitude' => 7.752535,
                'nombre' => 'Annaba',
            ),
            232 => 
            array (
                'id' => 472,
                'latitude' => 35.561022,
                'longitude' => 6.173912,
                'nombre' => 'Batna',
            ),
            233 => 
            array (
                'id' => 473,
                'latitude' => 36.196903,
                'longitude' => 5.415087,
                'nombre' => 'Sétif',
            ),
            234 => 
            array (
                'id' => 474,
                'latitude' => 35.202225,
                'longitude' => -0.629892,
                'nombre' => 'Sidi Bel Abbès',
            ),
            235 => 
            array (
                'id' => 475,
                'latitude' => 36.87152,
                'longitude' => 6.910181,
                'nombre' => 'Skikda',
            ),
            236 => 
            array (
                'id' => 476,
                'latitude' => 34.837035,
                'longitude' => 5.751048,
                'nombre' => 'Biskra',
            ),
            237 => 
            array (
                'id' => 477,
                'latitude' => 36.475793,
                'longitude' => 2.829758,
            'nombre' => 'Blida (el-Boulaida)',
            ),
            238 => 
            array (
                'id' => 478,
                'latitude' => 36.75089,
                'longitude' => 5.056733,
                'nombre' => 'Béjaïa',
            ),
            239 => 
            array (
                'id' => 479,
                'latitude' => 36.013124,
                'longitude' => 0.140138,
                'nombre' => 'Mostaganem',
            ),
            240 => 
            array (
                'id' => 480,
                'latitude' => 35.414249,
                'longitude' => 8.101092,
                'nombre' => 'Tébessa',
            ),
            241 => 
            array (
                'id' => 481,
                'latitude' => 34.888406,
                'longitude' => -1.318004,
            'nombre' => 'Tlemcen (Tilimsen)',
            ),
            242 => 
            array (
                'id' => 482,
                'latitude' => 31.616703,
                'longitude' => -2.219486,
                'nombre' => 'Béchar',
            ),
            243 => 
            array (
                'id' => 483,
                'latitude' => 35.367355,
                'longitude' => 1.322032,
                'nombre' => 'Tiaret',
            ),
            244 => 
            array (
                'id' => 484,
                'latitude' => 0.0,
                'longitude' => 0.0,
            'nombre' => 'Ech-Chleff (el-Asnam)',
            ),
            245 => 
            array (
                'id' => 485,
                'latitude' => 32.490225,
                'longitude' => 3.673841,
                'nombre' => 'Ghardaïa',
            ),
            246 => 
            array (
                'id' => 486,
                'latitude' => -14.331296,
                'longitude' => -170.726985,
                'nombre' => 'Tafuna',
            ),
            247 => 
            array (
                'id' => 487,
                'latitude' => -14.279568,
                'longitude' => -170.692331,
                'nombre' => 'Fagatogo',
            ),
            248 => 
            array (
                'id' => 488,
                'latitude' => 42.506317,
                'longitude' => 1.521835,
                'nombre' => 'Andorra la Vella',
            ),
            249 => 
            array (
                'id' => 489,
                'latitude' => -8.839988,
                'longitude' => 13.289437,
                'nombre' => 'Luanda',
            ),
            250 => 
            array (
                'id' => 490,
                'latitude' => -12.773976,
                'longitude' => 15.746854,
                'nombre' => 'Huambo',
            ),
            251 => 
            array (
                'id' => 491,
                'latitude' => -12.375729,
                'longitude' => 13.561045,
                'nombre' => 'Lobito',
            ),
            252 => 
            array (
                'id' => 492,
                'latitude' => -12.590516,
                'longitude' => 13.416501,
                'nombre' => 'Benguela',
            ),
            253 => 
            array (
                'id' => 493,
                'latitude' => -15.197832,
                'longitude' => 12.157554,
                'nombre' => 'Namibe',
            ),
            254 => 
            array (
                'id' => 494,
                'latitude' => 36.726532,
                'longitude' => -78.128886,
                'nombre' => 'South Hill',
            ),
            255 => 
            array (
                'id' => 495,
                'latitude' => 40.45065,
                'longitude' => -3.693904,
                'nombre' => 'The Valley',
            ),
            256 => 
            array (
                'id' => 496,
                'latitude' => 17.12741,
                'longitude' => -61.846772,
                'nombre' => 'Saint John´s',
            ),
            257 => 
            array (
                'id' => 497,
                'latitude' => 25.204849,
                'longitude' => 55.270783,
                'nombre' => 'Dubai',
            ),
            258 => 
            array (
                'id' => 498,
                'latitude' => 24.453884,
                'longitude' => 54.377344,
                'nombre' => 'Abu Dhabi',
            ),
            259 => 
            array (
                'id' => 499,
                'latitude' => 25.346255,
                'longitude' => 55.420932,
                'nombre' => 'Sharja',
            ),
            260 => 
            array (
                'id' => 500,
                'latitude' => 24.130162,
                'longitude' => 55.802312,
                'nombre' => 'al-Ayn',
            ),
            261 => 
            array (
                'id' => 501,
                'latitude' => 25.405217,
                'longitude' => 55.513643,
                'nombre' => 'Ajman',
            ),
            262 => 
            array (
                'id' => 502,
                'latitude' => -34.603684,
                'longitude' => -58.381559,
                'nombre' => 'Buenos Aires',
            ),
            263 => 
            array (
                'id' => 503,
                'latitude' => -34.786248,
                'longitude' => -58.622966,
                'nombre' => 'La Matanza',
            ),
            264 => 
            array (
                'id' => 504,
                'latitude' => 37.888175,
                'longitude' => -4.779383,
                'nombre' => 'Córdoba',
            ),
            265 => 
            array (
                'id' => 505,
                'latitude' => -32.944243,
                'longitude' => -60.650539,
                'nombre' => 'Rosario',
            ),
            266 => 
            array (
                'id' => 506,
                'latitude' => -34.761182,
                'longitude' => -58.430248,
                'nombre' => 'Lomas de Zamora',
            ),
            267 => 
            array (
                'id' => 507,
                'latitude' => -34.720634,
                'longitude' => -58.254605,
                'nombre' => 'Quilmes',
            ),
            268 => 
            array (
                'id' => 508,
                'latitude' => -34.840061,
                'longitude' => -58.394511,
                'nombre' => 'Almirante Brown',
            ),
            269 => 
            array (
                'id' => 509,
                'latitude' => -34.920495,
                'longitude' => -57.953566,
                'nombre' => 'La Plata',
            ),
            270 => 
            array (
                'id' => 510,
                'latitude' => -38.005477,
                'longitude' => -57.542611,
                'nombre' => 'Mar del Plata',
            ),
            271 => 
            array (
                'id' => 511,
                'latitude' => -26.808285,
                'longitude' => -65.21759,
                'nombre' => 'San Miguel de Tucumán',
            ),
            272 => 
            array (
                'id' => 512,
                'latitude' => -34.699479,
                'longitude' => -58.39208,
                'nombre' => 'Lanús',
            ),
            273 => 
            array (
                'id' => 513,
                'latitude' => -34.6685,
                'longitude' => -58.728248,
                'nombre' => 'Merlo',
            ),
            274 => 
            array (
                'id' => 514,
                'latitude' => -34.560506,
                'longitude' => -58.56581,
                'nombre' => 'General San Martín',
            ),
            275 => 
            array (
                'id' => 515,
                'latitude' => -24.782127,
                'longitude' => -65.423198,
                'nombre' => 'Salta',
            ),
            276 => 
            array (
                'id' => 516,
                'latitude' => -34.63401,
                'longitude' => -58.791382,
                'nombre' => 'Moreno',
            ),
            277 => 
            array (
                'id' => 517,
                'latitude' => 35.686975,
                'longitude' => -105.937799,
                'nombre' => 'Santa Fé',
            ),
            278 => 
            array (
                'id' => 518,
                'latitude' => -34.661076,
                'longitude' => -58.366974,
                'nombre' => 'Avellaneda',
            ),
            279 => 
            array (
                'id' => 519,
                'latitude' => -34.613848,
                'longitude' => -58.542955,
                'nombre' => 'Tres de Febrero',
            ),
            280 => 
            array (
                'id' => 520,
                'latitude' => -34.655861,
                'longitude' => -58.616721,
                'nombre' => 'Morón',
            ),
            281 => 
            array (
                'id' => 521,
                'latitude' => -34.796581,
                'longitude' => -58.276012,
                'nombre' => 'Florencio Varela',
            ),
            282 => 
            array (
                'id' => 522,
                'latitude' => -34.470829,
                'longitude' => -58.52861,
                'nombre' => 'San Isidro',
            ),
            283 => 
            array (
                'id' => 523,
                'latitude' => -34.425087,
                'longitude' => -58.579658,
                'nombre' => 'Tigre',
            ),
            284 => 
            array (
                'id' => 524,
                'latitude' => -34.479665,
                'longitude' => -58.703033,
                'nombre' => 'Malvinas Argentinas',
            ),
            285 => 
            array (
                'id' => 525,
                'latitude' => -34.520947,
                'longitude' => -58.49726,
                'nombre' => 'Vicente López',
            ),
            286 => 
            array (
                'id' => 526,
                'latitude' => -34.762001,
                'longitude' => -58.211296,
                'nombre' => 'Berazategui',
            ),
            287 => 
            array (
                'id' => 527,
                'latitude' => -27.50485,
                'longitude' => -58.780434,
                'nombre' => 'Corrientes',
            ),
            288 => 
            array (
                'id' => 528,
                'latitude' => 20.914449,
                'longitude' => -100.745235,
                'nombre' => 'San Miguel',
            ),
            289 => 
            array (
                'id' => 529,
                'latitude' => -38.718318,
                'longitude' => -62.266348,
                'nombre' => 'Bahía Blanca',
            ),
            290 => 
            array (
                'id' => 530,
                'latitude' => -34.872986,
                'longitude' => -58.474916,
                'nombre' => 'Esteban Echeverría',
            ),
            291 => 
            array (
                'id' => 531,
                'latitude' => -27.451862,
                'longitude' => -58.985555,
                'nombre' => 'Resistencia',
            ),
            292 => 
            array (
                'id' => 532,
                'latitude' => -34.515105,
                'longitude' => -58.766246,
                'nombre' => 'José C. Paz',
            ),
            293 => 
            array (
                'id' => 533,
                'latitude' => -31.74132,
                'longitude' => -60.511547,
                'nombre' => 'Paraná',
            ),
            294 => 
            array (
                'id' => 534,
                'latitude' => -32.913867,
                'longitude' => -68.850044,
                'nombre' => 'Godoy Cruz',
            ),
            295 => 
            array (
                'id' => 535,
                'latitude' => -27.362137,
                'longitude' => -55.900875,
                'nombre' => 'Posadas',
            ),
            296 => 
            array (
                'id' => 536,
                'latitude' => -32.885004,
                'longitude' => -68.739345,
                'nombre' => 'Guaymallén',
            ),
            297 => 
            array (
                'id' => 537,
                'latitude' => -27.791039,
                'longitude' => -64.273442,
                'nombre' => 'Santiago del Estero',
            ),
            298 => 
            array (
                'id' => 538,
                'latitude' => -24.185786,
                'longitude' => -65.299477,
                'nombre' => 'San Salvador de Jujuy',
            ),
            299 => 
            array (
                'id' => 539,
                'latitude' => -34.589571,
                'longitude' => -58.62755,
                'nombre' => 'Hurlingham',
            ),
            300 => 
            array (
                'id' => 540,
                'latitude' => -38.94587,
                'longitude' => -68.073093,
                'nombre' => 'Neuquén',
            ),
            301 => 
            array (
                'id' => 541,
                'latitude' => -34.657024,
                'longitude' => -58.675398,
                'nombre' => 'Ituzaingó',
            ),
            302 => 
            array (
                'id' => 542,
                'latitude' => 36.471865,
                'longitude' => -6.196595,
                'nombre' => 'San Fernando',
            ),
            303 => 
            array (
                'id' => 543,
                'latitude' => -26.18948,
                'longitude' => -58.224281,
                'nombre' => 'Formosa',
            ),
            304 => 
            array (
                'id' => 544,
                'latitude' => -32.850297,
                'longitude' => -68.840594,
                'nombre' => 'Las Heras',
            ),
            305 => 
            array (
                'id' => 545,
                'latitude' => 42.287073,
                'longitude' => -2.539603,
                'nombre' => 'La Rioja',
            ),
            306 => 
            array (
                'id' => 546,
                'latitude' => 0.0,
                'longitude' => 0.0,
                'nombre' => 'San Fernando del Valle de Cata',
            ),
            307 => 
            array (
                'id' => 547,
                'latitude' => -33.123159,
                'longitude' => -64.349344,
                'nombre' => 'Río Cuarto',
            ),
            308 => 
            array (
                'id' => 548,
                'latitude' => -45.865615,
                'longitude' => -67.482243,
                'nombre' => 'Comodoro Rivadavia',
            ),
            309 => 
            array (
                'id' => 549,
                'latitude' => -32.889459,
                'longitude' => -68.845839,
                'nombre' => 'Mendoza',
            ),
            310 => 
            array (
                'id' => 550,
                'latitude' => -33.333467,
                'longitude' => -60.211049,
                'nombre' => 'San Nicolás de los Arroyos',
            ),
            311 => 
            array (
                'id' => 551,
                'latitude' => 37.463416,
                'longitude' => -109.759167,
                'nombre' => 'San Juan',
            ),
            312 => 
            array (
                'id' => 552,
                'latitude' => -34.340252,
                'longitude' => -58.784943,
                'nombre' => 'Escobar',
            ),
            313 => 
            array (
                'id' => 553,
                'latitude' => -31.391392,
                'longitude' => -58.017434,
                'nombre' => 'Concordia',
            ),
            314 => 
            array (
                'id' => 554,
                'latitude' => -34.477862,
                'longitude' => -58.909167,
                'nombre' => 'Pilar',
            ),
            315 => 
            array (
                'id' => 555,
                'latitude' => -33.296204,
                'longitude' => -66.329495,
                'nombre' => 'San Luis',
            ),
            316 => 
            array (
                'id' => 556,
                'latitude' => -34.853733,
                'longitude' => -58.522862,
                'nombre' => 'Ezeiza',
            ),
            317 => 
            array (
                'id' => 557,
                'latitude' => 37.973535,
                'longitude' => -122.531087,
                'nombre' => 'San Rafael',
            ),
            318 => 
            array (
                'id' => 558,
                'latitude' => -37.3288,
                'longitude' => -59.136717,
                'nombre' => 'Tandil',
            ),
            319 => 
            array (
                'id' => 559,
                'latitude' => 40.179186,
                'longitude' => 44.499103,
                'nombre' => 'Yerevan',
            ),
            320 => 
            array (
                'id' => 560,
                'latitude' => 40.792903,
                'longitude' => 43.846497,
                'nombre' => 'Gjumri',
            ),
            321 => 
            array (
                'id' => 561,
                'latitude' => 40.807399,
                'longitude' => 44.497027,
                'nombre' => 'Vanadzor',
            ),
            322 => 
            array (
                'id' => 562,
                'latitude' => 12.509204,
                'longitude' => -70.008631,
                'nombre' => 'Oranjestad',
            ),
            323 => 
            array (
                'id' => 563,
                'latitude' => -33.86882,
                'longitude' => 151.209296,
                'nombre' => 'Sydney',
            ),
            324 => 
            array (
                'id' => 564,
                'latitude' => -37.813628,
                'longitude' => 144.963058,
                'nombre' => 'Melbourne',
            ),
            325 => 
            array (
                'id' => 565,
                'latitude' => -27.469771,
                'longitude' => 153.025124,
                'nombre' => 'Brisbane',
            ),
            326 => 
            array (
                'id' => 566,
                'latitude' => -31.950527,
                'longitude' => 115.860457,
                'nombre' => 'Perth',
            ),
            327 => 
            array (
                'id' => 567,
                'latitude' => -34.928499,
                'longitude' => 138.600746,
                'nombre' => 'Adelaide',
            ),
            328 => 
            array (
                'id' => 568,
                'latitude' => -35.280937,
                'longitude' => 149.130009,
                'nombre' => 'Canberra',
            ),
            329 => 
            array (
                'id' => 569,
                'latitude' => -28.016667,
                'longitude' => 153.4,
                'nombre' => 'Gold Coast',
            ),
            330 => 
            array (
                'id' => 570,
                'latitude' => 47.538989,
                'longitude' => -122.155677,
                'nombre' => 'Newcastle',
            ),
            331 => 
            array (
                'id' => 571,
                'latitude' => -33.320841,
                'longitude' => 151.233559,
                'nombre' => 'Central Coast',
            ),
            332 => 
            array (
                'id' => 572,
                'latitude' => -34.427812,
                'longitude' => 150.893061,
                'nombre' => 'Wollongong',
            ),
            333 => 
            array (
                'id' => 573,
                'latitude' => 41.532259,
                'longitude' => -87.255035,
                'nombre' => 'Hobart',
            ),
            334 => 
            array (
                'id' => 574,
                'latitude' => -38.149918,
                'longitude' => 144.361719,
                'nombre' => 'Geelong',
            ),
            335 => 
            array (
                'id' => 575,
                'latitude' => -19.258963,
                'longitude' => 146.816948,
                'nombre' => 'Townsville',
            ),
            336 => 
            array (
                'id' => 576,
                'latitude' => -16.918551,
                'longitude' => 145.778055,
                'nombre' => 'Cairns',
            ),
            337 => 
            array (
                'id' => 577,
                'latitude' => 40.409262,
                'longitude' => 49.867092,
                'nombre' => 'Baku',
            ),
            338 => 
            array (
                'id' => 578,
                'latitude' => 40.687858,
                'longitude' => 46.372331,
                'nombre' => 'Gäncä',
            ),
            339 => 
            array (
                'id' => 579,
                'latitude' => 40.585477,
                'longitude' => 49.631741,
                'nombre' => 'Sumqayit',
            ),
            340 => 
            array (
                'id' => 580,
                'latitude' => 40.770256,
                'longitude' => 47.049601,
                'nombre' => 'Mingäçevir',
            ),
            341 => 
            array (
                'id' => 581,
                'latitude' => 25.047984,
                'longitude' => -77.355413,
                'nombre' => 'Nassau',
            ),
            342 => 
            array (
                'id' => 582,
                'latitude' => 25.33019,
                'longitude' => 55.997133,
                'nombre' => 'al-Manama',
            ),
            343 => 
            array (
                'id' => 583,
                'latitude' => 23.810332,
                'longitude' => 90.412518,
                'nombre' => 'Dhaka',
            ),
            344 => 
            array (
                'id' => 584,
                'latitude' => 22.347537,
                'longitude' => 91.812332,
                'nombre' => 'Chittagong',
            ),
            345 => 
            array (
                'id' => 585,
                'latitude' => 22.845641,
                'longitude' => 89.540328,
                'nombre' => 'Khulna',
            ),
            346 => 
            array (
                'id' => 586,
                'latitude' => 24.363589,
                'longitude' => 88.624135,
                'nombre' => 'Rajshahi',
            ),
            347 => 
            array (
                'id' => 587,
                'latitude' => 23.62264,
                'longitude' => 90.499797,
                'nombre' => 'Narayanganj',
            ),
            348 => 
            array (
                'id' => 588,
                'latitude' => 25.848339,
                'longitude' => 88.941387,
                'nombre' => 'Rangpur',
            ),
            349 => 
            array (
                'id' => 589,
                'latitude' => 24.743448,
                'longitude' => 90.398383,
                'nombre' => 'Mymensingh',
            ),
            350 => 
            array (
                'id' => 590,
                'latitude' => 22.702921,
                'longitude' => 90.346597,
                'nombre' => 'Barisal',
            ),
            351 => 
            array (
                'id' => 591,
                'latitude' => 24.801572,
                'longitude' => 85.318791,
                'nombre' => 'Tungi',
            ),
            352 => 
            array (
                'id' => 592,
                'latitude' => 23.163401,
                'longitude' => 89.218166,
                'nombre' => 'Jessore',
            ),
            353 => 
            array (
                'id' => 593,
                'latitude' => 23.46188,
                'longitude' => 91.186911,
                'nombre' => 'Comilla',
            ),
            354 => 
            array (
                'id' => 594,
                'latitude' => 28.540537,
                'longitude' => 79.63056,
                'nombre' => 'Nawabganj',
            ),
            355 => 
            array (
                'id' => 595,
                'latitude' => 25.627912,
                'longitude' => 88.633176,
                'nombre' => 'Dinajpur',
            ),
            356 => 
            array (
                'id' => 596,
                'latitude' => 24.843559,
                'longitude' => 89.370108,
                'nombre' => 'Bogra',
            ),
            357 => 
            array (
                'id' => 597,
                'latitude' => 24.904539,
                'longitude' => 91.861101,
                'nombre' => 'Sylhet',
            ),
            358 => 
            array (
                'id' => 598,
                'latitude' => 23.960818,
                'longitude' => 91.111501,
                'nombre' => 'Brahmanbaria',
            ),
            359 => 
            array (
                'id' => 599,
                'latitude' => 24.391743,
                'longitude' => 89.994826,
                'nombre' => 'Tangail',
            ),
            360 => 
            array (
                'id' => 600,
                'latitude' => 25.312717,
                'longitude' => 86.490609,
                'nombre' => 'Jamalpur',
            ),
            361 => 
            array (
                'id' => 601,
                'latitude' => 24.011326,
                'longitude' => 89.256224,
                'nombre' => 'Pabna',
            ),
            362 => 
            array (
                'id' => 602,
                'latitude' => 24.91316,
                'longitude' => 88.753095,
                'nombre' => 'Naogaon',
            ),
            363 => 
            array (
                'id' => 603,
                'latitude' => 24.314112,
                'longitude' => 89.569961,
                'nombre' => 'Sirajganj',
            ),
            364 => 
            array (
                'id' => 604,
                'latitude' => 23.919267,
                'longitude' => 90.717649,
                'nombre' => 'Narsinghdi',
            ),
            365 => 
            array (
                'id' => 605,
                'latitude' => 25.782954,
                'longitude' => 88.898267,
                'nombre' => 'Saidpur',
            ),
            366 => 
            array (
                'id' => 606,
                'latitude' => 24.095817,
                'longitude' => 90.412518,
                'nombre' => 'Gazipur',
            ),
            367 => 
            array (
                'id' => 607,
                'latitude' => 13.096851,
                'longitude' => -59.614482,
                'nombre' => 'Bridgetown',
            ),
            368 => 
            array (
                'id' => 608,
                'latitude' => 51.219448,
                'longitude' => 4.402464,
                'nombre' => 'Antwerpen',
            ),
            369 => 
            array (
                'id' => 609,
                'latitude' => 51.054342,
                'longitude' => 3.717424,
                'nombre' => 'Gent',
            ),
            370 => 
            array (
                'id' => 610,
                'latitude' => 50.41081,
                'longitude' => 4.444643,
                'nombre' => 'Charleroi',
            ),
            371 => 
            array (
                'id' => 611,
                'latitude' => 50.632557,
                'longitude' => 5.579666,
                'nombre' => 'Liège',
            ),
            372 => 
            array (
                'id' => 612,
                'latitude' => 50.85034,
                'longitude' => 4.35171,
                'nombre' => 'Bruxelles [Brussel]',
            ),
            373 => 
            array (
                'id' => 613,
                'latitude' => 51.209348,
                'longitude' => 3.2247,
                'nombre' => 'Brugge',
            ),
            374 => 
            array (
                'id' => 614,
                'latitude' => 50.867416,
                'longitude' => 4.377298,
                'nombre' => 'Schaerbeek',
            ),
            375 => 
            array (
                'id' => 615,
                'latitude' => 50.467388,
                'longitude' => 4.871985,
                'nombre' => 'Namur',
            ),
            376 => 
            array (
                'id' => 616,
                'latitude' => 50.454241,
                'longitude' => 3.956659,
                'nombre' => 'Mons',
            ),
            377 => 
            array (
                'id' => 617,
                'latitude' => 17.504566,
                'longitude' => -88.196213,
                'nombre' => 'Belize City',
            ),
            378 => 
            array (
                'id' => 618,
                'latitude' => 17.251011,
                'longitude' => -88.75902,
                'nombre' => 'Belmopan',
            ),
            379 => 
            array (
                'id' => 619,
                'latitude' => 6.370293,
                'longitude' => 2.391236,
                'nombre' => 'Cotonou',
            ),
            380 => 
            array (
                'id' => 620,
                'latitude' => 6.496857,
                'longitude' => 2.628852,
                'nombre' => 'Porto-Novo',
            ),
            381 => 
            array (
                'id' => 621,
                'latitude' => 9.708092,
                'longitude' => 1.666352,
                'nombre' => 'Djougou',
            ),
            382 => 
            array (
                'id' => 622,
                'latitude' => 9.346682,
                'longitude' => 2.609004,
                'nombre' => 'Parakou',
            ),
            383 => 
            array (
                'id' => 623,
                'latitude' => 37.096528,
                'longitude' => -113.568416,
                'nombre' => 'Saint George',
            ),
            384 => 
            array (
                'id' => 624,
                'latitude' => 39.399501,
                'longitude' => -84.561335,
                'nombre' => 'Hamilton',
            ),
            385 => 
            array (
                'id' => 625,
                'latitude' => 27.472792,
                'longitude' => 89.639286,
                'nombre' => 'Thimphu',
            ),
            386 => 
            array (
                'id' => 626,
                'latitude' => -17.814582,
                'longitude' => -63.156085,
                'nombre' => 'Santa Cruz de la Sierra',
            ),
            387 => 
            array (
                'id' => 627,
                'latitude' => -16.489689,
                'longitude' => -68.119294,
                'nombre' => 'La Paz',
            ),
            388 => 
            array (
                'id' => 628,
                'latitude' => -16.500094,
                'longitude' => -68.214686,
                'nombre' => 'El Alto',
            ),
            389 => 
            array (
                'id' => 629,
                'latitude' => -17.413977,
                'longitude' => -66.165322,
                'nombre' => 'Cochabamba',
            ),
            390 => 
            array (
                'id' => 630,
                'latitude' => -17.964677,
                'longitude' => -67.106035,
                'nombre' => 'Oruro',
            ),
            391 => 
            array (
                'id' => 631,
                'latitude' => -19.019585,
                'longitude' => -65.261961,
                'nombre' => 'Sucre',
            ),
            392 => 
            array (
                'id' => 632,
                'latitude' => -19.57228,
                'longitude' => -65.755006,
                'nombre' => 'Potosí',
            ),
            393 => 
            array (
                'id' => 633,
                'latitude' => -21.521382,
                'longitude' => -64.728095,
                'nombre' => 'Tarija',
            ),
            394 => 
            array (
                'id' => 634,
                'latitude' => 43.856259,
                'longitude' => 18.413076,
                'nombre' => 'Sarajevo',
            ),
            395 => 
            array (
                'id' => 635,
                'latitude' => 44.772181,
                'longitude' => 17191.0,
                'nombre' => 'Banja Luka',
            ),
            396 => 
            array (
                'id' => 636,
                'latitude' => 44.203439,
                'longitude' => 17.907743,
                'nombre' => 'Zenica',
            ),
            397 => 
            array (
                'id' => 637,
                'latitude' => -24.628208,
                'longitude' => 25.923147,
                'nombre' => 'Gaborone',
            ),
            398 => 
            array (
                'id' => 638,
                'latitude' => -21.1661,
                'longitude' => 27.51436,
                'nombre' => 'Francistown',
            ),
            399 => 
            array (
                'id' => 639,
                'latitude' => -23.55052,
                'longitude' => -46.633309,
                'nombre' => 'São Paulo',
            ),
            400 => 
            array (
                'id' => 640,
                'latitude' => -22.906847,
                'longitude' => -43.172896,
                'nombre' => 'Rio de Janeiro',
            ),
            401 => 
            array (
                'id' => 641,
                'latitude' => 13.794185,
                'longitude' => -88.89653,
                'nombre' => 'Salvador',
            ),
            402 => 
            array (
                'id' => 642,
                'latitude' => -19.924502,
                'longitude' => -43.935238,
                'nombre' => 'Belo Horizonte',
            ),
            403 => 
            array (
                'id' => 643,
                'latitude' => -3.731862,
                'longitude' => -38.52667,
                'nombre' => 'Fortaleza',
            ),
            404 => 
            array (
                'id' => 644,
                'latitude' => -15.794229,
                'longitude' => -47.882166,
                'nombre' => 'Brasília',
            ),
            405 => 
            array (
                'id' => 645,
                'latitude' => -25.424429,
                'longitude' => -49.265382,
                'nombre' => 'Curitiba',
            ),
            406 => 
            array (
                'id' => 646,
                'latitude' => -8.047562,
                'longitude' => -34.876964,
                'nombre' => 'Recife',
            ),
            407 => 
            array (
                'id' => 647,
                'latitude' => -30.034647,
                'longitude' => -51.217658,
                'nombre' => 'Porto Alegre',
            ),
            408 => 
            array (
                'id' => 648,
                'latitude' => -3.119027,
                'longitude' => -60.021731,
                'nombre' => 'Manaus',
            ),
            409 => 
            array (
                'id' => 649,
                'latitude' => -1.455779,
                'longitude' => -48.490197,
                'nombre' => 'Belém',
            ),
            410 => 
            array (
                'id' => 650,
                'latitude' => -23.454315,
                'longitude' => -46.533652,
                'nombre' => 'Guarulhos',
            ),
            411 => 
            array (
                'id' => 651,
                'latitude' => -16.686882,
                'longitude' => -49.264789,
                'nombre' => 'Goiânia',
            ),
            412 => 
            array (
                'id' => 652,
                'latitude' => -22.909883,
                'longitude' => -47.062581,
                'nombre' => 'Campinas',
            ),
            413 => 
            array (
                'id' => 653,
                'latitude' => -22.827288,
                'longitude' => -43.063765,
                'nombre' => 'São Gonçalo',
            ),
            414 => 
            array (
                'id' => 654,
                'latitude' => -22.756132,
                'longitude' => -43.460742,
                'nombre' => 'Nova Iguaçu',
            ),
            415 => 
            array (
                'id' => 655,
                'latitude' => -2.53911,
                'longitude' => -44.282905,
                'nombre' => 'São Luís',
            ),
            416 => 
            array (
                'id' => 656,
                'latitude' => -9.649849,
                'longitude' => -35.708949,
                'nombre' => 'Maceió',
            ),
            417 => 
            array (
                'id' => 657,
                'latitude' => -22.786298,
                'longitude' => -43.305311,
                'nombre' => 'Duque de Caxias',
            ),
            418 => 
            array (
                'id' => 658,
                'latitude' => -23.689843,
                'longitude' => -46.564848,
                'nombre' => 'São Bernardo do Campo',
            ),
            419 => 
            array (
                'id' => 659,
                'latitude' => -5.092011,
                'longitude' => -42.80376,
                'nombre' => 'Teresina',
            ),
            420 => 
            array (
                'id' => 660,
                'latitude' => -5.779257,
                'longitude' => -35.200916,
                'nombre' => 'Natal',
            ),
            421 => 
            array (
                'id' => 661,
                'latitude' => -23.532887,
                'longitude' => -46.791998,
                'nombre' => 'Osasco',
            ),
            422 => 
            array (
                'id' => 662,
                'latitude' => -20.46971,
                'longitude' => -54.620121,
                'nombre' => 'Campo Grande',
            ),
            423 => 
            array (
                'id' => 663,
                'latitude' => -23.674223,
                'longitude' => -46.5436,
                'nombre' => 'Santo André',
            ),
            424 => 
            array (
                'id' => 664,
                'latitude' => -7.119496,
                'longitude' => -34.845012,
                'nombre' => 'João Pessoa',
            ),
            425 => 
            array (
                'id' => 665,
                'latitude' => -8.169381,
                'longitude' => -34.937059,
                'nombre' => 'Jaboatão dos Guararapes',
            ),
            426 => 
            array (
                'id' => 666,
                'latitude' => -19.916151,
                'longitude' => -44.080876,
                'nombre' => 'Contagem',
            ),
            427 => 
            array (
                'id' => 667,
                'latitude' => -23.223701,
                'longitude' => -45.900907,
                'nombre' => 'São José dos Campos',
            ),
            428 => 
            array (
                'id' => 668,
                'latitude' => -18.914608,
                'longitude' => -48.27538,
                'nombre' => 'Uberlândia',
            ),
            429 => 
            array (
                'id' => 669,
                'latitude' => -12.259727,
                'longitude' => -38.964661,
                'nombre' => 'Feira de Santana',
            ),
            430 => 
            array (
                'id' => 670,
                'latitude' => -21.170401,
                'longitude' => -47.810324,
                'nombre' => 'Ribeirão Preto',
            ),
            431 => 
            array (
                'id' => 671,
                'latitude' => -23.501534,
                'longitude' => -47.452594,
                'nombre' => 'Sorocaba',
            ),
            432 => 
            array (
                'id' => 672,
                'latitude' => -22.885897,
                'longitude' => -43.115221,
                'nombre' => 'Niterói',
            ),
            433 => 
            array (
                'id' => 673,
                'latitude' => -15.601411,
                'longitude' => -56.097892,
                'nombre' => 'Cuiabá',
            ),
            434 => 
            array (
                'id' => 674,
                'latitude' => -21.762424,
                'longitude' => -43.3434,
                'nombre' => 'Juiz de Fora',
            ),
            435 => 
            array (
                'id' => 675,
                'latitude' => -10.947247,
                'longitude' => -37.073082,
                'nombre' => 'Aracaju',
            ),
            436 => 
            array (
                'id' => 676,
                'latitude' => -22.790968,
                'longitude' => -43.369805,
                'nombre' => 'São João de Meriti',
            ),
            437 => 
            array (
                'id' => 677,
                'latitude' => -23.304452,
                'longitude' => -51.169582,
                'nombre' => 'Londrina',
            ),
            438 => 
            array (
                'id' => 678,
                'latitude' => -26.304408,
                'longitude' => -48.846383,
                'nombre' => 'Joinville',
            ),
            439 => 
            array (
                'id' => 679,
                'latitude' => -22.764539,
                'longitude' => -43.399626,
                'nombre' => 'Belford Roxo',
            ),
            440 => 
            array (
                'id' => 680,
                'latitude' => -23.967882,
                'longitude' => -46.328887,
                'nombre' => 'Santos',
            ),
            441 => 
            array (
                'id' => 681,
                'latitude' => -1.364272,
                'longitude' => -48.374721,
                'nombre' => 'Ananindeua',
            ),
            442 => 
            array (
                'id' => 682,
                'latitude' => -21.76269,
                'longitude' => -41.318488,
                'nombre' => 'Campos dos Goytacazes',
            ),
            443 => 
            array (
                'id' => 683,
                'latitude' => -23.668163,
                'longitude' => -46.461709,
                'nombre' => 'Mauá',
            ),
            444 => 
            array (
                'id' => 684,
                'latitude' => -23.523962,
                'longitude' => -46.841124,
                'nombre' => 'Carapicuíba',
            ),
            445 => 
            array (
                'id' => 685,
                'latitude' => -7.990806,
                'longitude' => -34.841629,
                'nombre' => 'Olinda',
            ),
            446 => 
            array (
                'id' => 686,
                'latitude' => -7.229075,
                'longitude' => -35.880834,
                'nombre' => 'Campina Grande',
            ),
            447 => 
            array (
                'id' => 687,
                'latitude' => -20.811761,
                'longitude' => -49.376227,
                'nombre' => 'São José do Rio Preto',
            ),
            448 => 
            array (
                'id' => 688,
                'latitude' => -29.163403,
                'longitude' => -51.179668,
                'nombre' => 'Caxias do Sul',
            ),
            449 => 
            array (
                'id' => 689,
                'latitude' => -23.521338,
                'longitude' => -46.185867,
                'nombre' => 'Moji das Cruzes',
            ),
            450 => 
            array (
                'id' => 690,
                'latitude' => -23.68184,
                'longitude' => -46.620967,
                'nombre' => 'Diadema',
            ),
            451 => 
            array (
                'id' => 691,
                'latitude' => -16.820257,
                'longitude' => -49.247304,
                'nombre' => 'Aparecida de Goiânia',
            ),
            452 => 
            array (
                'id' => 692,
                'latitude' => -22.734286,
                'longitude' => -47.648064,
                'nombre' => 'Piracicaba',
            ),
            453 => 
            array (
                'id' => 693,
                'latitude' => -20.264276,
                'longitude' => -40.420365,
                'nombre' => 'Cariacica',
            ),
            454 => 
            array (
                'id' => 694,
                'latitude' => -20.347782,
                'longitude' => -40.294953,
                'nombre' => 'Vila Velha',
            ),
            455 => 
            array (
                'id' => 695,
                'latitude' => -31.765399,
                'longitude' => -52.337589,
                'nombre' => 'Pelotas',
            ),
            456 => 
            array (
                'id' => 696,
                'latitude' => -22.314459,
                'longitude' => -49.058695,
                'nombre' => 'Bauru',
            ),
            457 => 
            array (
                'id' => 697,
                'latitude' => -8.76116,
                'longitude' => -63.90043,
                'nombre' => 'Porto Velho',
            ),
            458 => 
            array (
                'id' => 698,
                'latitude' => 32.825762,
                'longitude' => -117.104945,
                'nombre' => 'Serra',
            ),
            459 => 
            array (
                'id' => 699,
                'latitude' => -19.967308,
                'longitude' => -44.20119,
                'nombre' => 'Betim',
            ),
            460 => 
            array (
                'id' => 700,
                'latitude' => -23.185708,
                'longitude' => -46.897806,
                'nombre' => 'Jundíaí',
            ),
            461 => 
            array (
                'id' => 701,
                'latitude' => -29.913258,
                'longitude' => -51.186192,
                'nombre' => 'Canoas',
            ),
            462 => 
            array (
                'id' => 702,
                'latitude' => -20.539329,
                'longitude' => -47.401344,
                'nombre' => 'Franca',
            ),
            463 => 
            array (
                'id' => 703,
                'latitude' => 16.828007,
                'longitude' => -24.975418,
                'nombre' => 'São Vicente',
            ),
            464 => 
            array (
                'id' => 704,
                'latitude' => -23.420999,
                'longitude' => -51.933056,
                'nombre' => 'Maringá',
            ),
            465 => 
            array (
                'id' => 705,
                'latitude' => -16.728641,
                'longitude' => -43.858214,
                'nombre' => 'Montes Claros',
            ),
            466 => 
            array (
                'id' => 706,
                'latitude' => -16.328546,
                'longitude' => -48.953403,
                'nombre' => 'Anápolis',
            ),
            467 => 
            array (
                'id' => 707,
                'latitude' => -27.59487,
                'longitude' => -48.548219,
                'nombre' => 'Florianópolis',
            ),
            468 => 
            array (
                'id' => 708,
                'latitude' => -22.511264,
                'longitude' => -43.177914,
                'nombre' => 'Petrópolis',
            ),
            469 => 
            array (
                'id' => 709,
                'latitude' => -23.484946,
                'longitude' => -46.349483,
                'nombre' => 'Itaquaquecetuba',
            ),
            470 => 
            array (
                'id' => 710,
                'latitude' => -20.297618,
                'longitude' => -40.295777,
                'nombre' => 'Vitória',
            ),
            471 => 
            array (
                'id' => 711,
                'latitude' => -25.099362,
                'longitude' => -50.158451,
                'nombre' => 'Ponta Grossa',
            ),
            472 => 
            array (
                'id' => 712,
                'latitude' => -9.975384,
                'longitude' => -67.824918,
                'nombre' => 'Rio Branco',
            ),
            473 => 
            array (
                'id' => 713,
                'latitude' => -25.516336,
                'longitude' => -54.585376,
                'nombre' => 'Foz do Iguaçu',
            ),
            474 => 
            array (
                'id' => 714,
                'latitude' => 0.035574,
                'longitude' => -51.070535,
                'nombre' => 'Macapá',
            ),
            475 => 
            array (
                'id' => 715,
                'latitude' => -14.793505,
                'longitude' => -39.04638,
                'nombre' => 'Ilhéus',
            ),
            476 => 
            array (
                'id' => 716,
                'latitude' => -14.861924,
                'longitude' => -40.844535,
                'nombre' => 'Vitória da Conquista',
            ),
            477 => 
            array (
                'id' => 717,
                'latitude' => -19.747375,
                'longitude' => -47.939162,
                'nombre' => 'Uberaba',
            ),
            478 => 
            array (
                'id' => 718,
                'latitude' => -7.918455,
                'longitude' => -34.820956,
                'nombre' => 'Paulista',
            ),
            479 => 
            array (
                'id' => 719,
                'latitude' => -22.58365,
                'longitude' => -47.409833,
                'nombre' => 'Limeira',
            ),
            480 => 
            array (
                'id' => 720,
                'latitude' => -26.916579,
                'longitude' => -49.071733,
                'nombre' => 'Blumenau',
            ),
            481 => 
            array (
                'id' => 721,
                'latitude' => -8.284964,
                'longitude' => -35.970187,
                'nombre' => 'Caruaru',
            ),
            482 => 
            array (
                'id' => 722,
                'latitude' => 39.236669,
                'longitude' => -8.685994,
                'nombre' => 'Santarém',
            ),
            483 => 
            array (
                'id' => 723,
                'latitude' => -22.50776,
                'longitude' => -44.09473,
                'nombre' => 'Volta Redonda',
            ),
            484 => 
            array (
                'id' => 724,
                'latitude' => -29.691899,
                'longitude' => -51.12557,
                'nombre' => 'Novo Hamburgo',
            ),
            485 => 
            array (
                'id' => 725,
                'latitude' => -3.682405,
                'longitude' => -38.91323,
                'nombre' => 'Caucaia',
            ),
            486 => 
            array (
                'id' => 726,
                'latitude' => 34.953034,
                'longitude' => -120.435719,
                'nombre' => 'Santa Maria',
            ),
            487 => 
            array (
                'id' => 727,
                'latitude' => -24.957777,
                'longitude' => -53.459511,
                'nombre' => 'Cascavel',
            ),
            488 => 
            array (
                'id' => 728,
                'latitude' => -23.99491,
                'longitude' => -46.256876,
                'nombre' => 'Guarujá',
            ),
            489 => 
            array (
                'id' => 729,
                'latitude' => -19.761902,
                'longitude' => -44.085357,
                'nombre' => 'Ribeirão das Neves',
            ),
            490 => 
            array (
                'id' => 730,
                'latitude' => -18.854932,
                'longitude' => -41.955923,
                'nombre' => 'Governador Valadares',
            ),
            491 => 
            array (
                'id' => 731,
                'latitude' => -23.020456,
                'longitude' => -45.556355,
                'nombre' => 'Taubaté',
            ),
            492 => 
            array (
                'id' => 732,
                'latitude' => -5.520565,
                'longitude' => -47.471846,
                'nombre' => 'Imperatriz',
            ),
            493 => 
            array (
                'id' => 733,
                'latitude' => -29.942289,
                'longitude' => -50.990788,
                'nombre' => 'Gravataí',
            ),
            494 => 
            array (
                'id' => 734,
                'latitude' => -23.651508,
                'longitude' => -46.852186,
                'nombre' => 'Embu',
            ),
            495 => 
            array (
                'id' => 735,
                'latitude' => -5.184128,
                'longitude' => -37.34778,
                'nombre' => 'Mossoró',
            ),
            496 => 
            array (
                'id' => 736,
                'latitude' => -15.646248,
                'longitude' => -56.132713,
                'nombre' => 'Várzea Grande',
            ),
            497 => 
            array (
                'id' => 737,
                'latitude' => -9.389083,
                'longitude' => -40.503096,
                'nombre' => 'Petrolina',
            ),
            498 => 
            array (
                'id' => 738,
                'latitude' => -23.511369,
                'longitude' => -46.872942,
                'nombre' => 'Barueri',
            ),
            499 => 
            array (
                'id' => 739,
                'latitude' => -30.072216,
                'longitude' => -51.096957,
                'nombre' => 'Viamão',
            ),
        ));
        \DB::table('geo_ciudades')->insert(array (
            0 => 
            array (
                'id' => 740,
                'latitude' => -19.470762,
                'longitude' => -42.548013,
                'nombre' => 'Ipatinga',
            ),
            1 => 
            array (
                'id' => 741,
                'latitude' => -9.416798,
                'longitude' => -40.503516,
                'nombre' => 'Juazeiro',
            ),
            2 => 
            array (
                'id' => 742,
                'latitude' => -7.228473,
                'longitude' => -39.312123,
                'nombre' => 'Juazeiro do Norte',
            ),
            3 => 
            array (
                'id' => 743,
                'latitude' => -23.622876,
                'longitude' => -46.781665,
                'nombre' => 'Taboão da Serra',
            ),
            4 => 
            array (
                'id' => 744,
                'latitude' => -25.531835,
                'longitude' => -49.203572,
                'nombre' => 'São José dos Pinhais',
            ),
            5 => 
            array (
                'id' => 745,
                'latitude' => -22.656602,
                'longitude' => -43.039834,
                'nombre' => 'Magé',
            ),
            6 => 
            array (
                'id' => 746,
                'latitude' => -23.545321,
                'longitude' => -46.311625,
                'nombre' => 'Suzano',
            ),
            7 => 
            array (
                'id' => 747,
                'latitude' => -29.754994,
                'longitude' => -51.150283,
                'nombre' => 'São Leopoldo',
            ),
            8 => 
            array (
                'id' => 748,
                'latitude' => -22.2176,
                'longitude' => -49.95051,
                'nombre' => 'Marília',
            ),
            9 => 
            array (
                'id' => 749,
                'latitude' => -22.008708,
                'longitude' => -47.890926,
                'nombre' => 'São Carlos',
            ),
            10 => 
            array (
                'id' => 750,
                'latitude' => -22.820903,
                'longitude' => -47.273273,
                'nombre' => 'Sumaré',
            ),
            11 => 
            array (
                'id' => 751,
                'latitude' => -22.121114,
                'longitude' => -51.393025,
                'nombre' => 'Presidente Prudente',
            ),
            12 => 
            array (
                'id' => 752,
                'latitude' => -20.145126,
                'longitude' => -44.891645,
                'nombre' => 'Divinópolis',
            ),
            13 => 
            array (
                'id' => 753,
                'latitude' => -19.45738,
                'longitude' => -44.241669,
                'nombre' => 'Sete Lagoas',
            ),
            14 => 
            array (
                'id' => 754,
                'latitude' => -53.786037,
                'longitude' => -67.700224,
                'nombre' => 'Rio Grande',
            ),
            15 => 
            array (
                'id' => 755,
                'latitude' => -14.788033,
                'longitude' => -39.278418,
                'nombre' => 'Itabuna',
            ),
            16 => 
            array (
                'id' => 756,
                'latitude' => -13.859059,
                'longitude' => -40.083776,
                'nombre' => 'Jequié',
            ),
            17 => 
            array (
                'id' => 757,
                'latitude' => -9.755588,
                'longitude' => -36.663958,
                'nombre' => 'Arapiraca',
            ),
            18 => 
            array (
                'id' => 758,
                'latitude' => 6.927079,
                'longitude' => 79.861243,
                'nombre' => 'Colombo',
            ),
            19 => 
            array (
                'id' => 759,
                'latitude' => 34.14441,
                'longitude' => -118.256481,
                'nombre' => 'Americana',
            ),
            20 => 
            array (
                'id' => 760,
                'latitude' => -29.991901,
                'longitude' => -51.081368,
                'nombre' => 'Alvorada',
            ),
            21 => 
            array (
                'id' => 761,
                'latitude' => -21.784827,
                'longitude' => -48.178649,
                'nombre' => 'Araraquara',
            ),
            22 => 
            array (
                'id' => 762,
                'latitude' => -22.757002,
                'longitude' => -42.864317,
                'nombre' => 'Itaboraí',
            ),
            23 => 
            array (
                'id' => 763,
                'latitude' => -22.755742,
                'longitude' => -47.414759,
                'nombre' => 'Santa Bárbara d´Oeste',
            ),
            24 => 
            array (
                'id' => 764,
                'latitude' => -22.288726,
                'longitude' => -42.53408,
                'nombre' => 'Nova Friburgo',
            ),
            25 => 
            array (
                'id' => 765,
                'latitude' => -23.298783,
                'longitude' => -45.966254,
                'nombre' => 'Jacareí',
            ),
            26 => 
            array (
                'id' => 766,
                'latitude' => -21.202854,
                'longitude' => -50.453679,
                'nombre' => 'Araçatuba',
            ),
            27 => 
            array (
                'id' => 767,
                'latitude' => -22.540852,
                'longitude' => -44.17726,
                'nombre' => 'Barra Mansa',
            ),
            28 => 
            array (
                'id' => 768,
                'latitude' => -24.008842,
                'longitude' => -46.412462,
                'nombre' => 'Praia Grande',
            ),
            29 => 
            array (
                'id' => 769,
                'latitude' => -5.381133,
                'longitude' => -49.133105,
                'nombre' => 'Marabá',
            ),
            30 => 
            array (
                'id' => 770,
                'latitude' => -28.67277,
                'longitude' => -49.373377,
                'nombre' => 'Criciúma',
            ),
            31 => 
            array (
                'id' => 771,
                'latitude' => 2.82351,
                'longitude' => -60.675833,
                'nombre' => 'Boa Vista',
            ),
            32 => 
            array (
                'id' => 772,
                'latitude' => -28.258781,
                'longitude' => -52.416004,
                'nombre' => 'Passo Fundo',
            ),
            33 => 
            array (
                'id' => 773,
                'latitude' => -22.227203,
                'longitude' => -54.829126,
                'nombre' => 'Dourados',
            ),
            34 => 
            array (
                'id' => 774,
                'latitude' => 13.909444,
                'longitude' => -60.978893,
                'nombre' => 'Santa Luzia',
            ),
            35 => 
            array (
                'id' => 775,
                'latitude' => 5.58998,
                'longitude' => -75.86721,
                'nombre' => 'Rio Claro',
            ),
            36 => 
            array (
                'id' => 776,
                'latitude' => -3.867413,
                'longitude' => -38.626111,
                'nombre' => 'Maracanaú',
            ),
            37 => 
            array (
                'id' => 777,
                'latitude' => -25.390721,
                'longitude' => -51.46281,
                'nombre' => 'Guarapuava',
            ),
            38 => 
            array (
                'id' => 778,
                'latitude' => -16.465453,
                'longitude' => -54.638737,
                'nombre' => 'Rondonópolis',
            ),
            39 => 
            array (
                'id' => 779,
                'latitude' => -23.223701,
                'longitude' => -45.900907,
                'nombre' => 'São José',
            ),
            40 => 
            array (
                'id' => 780,
                'latitude' => -20.846705,
                'longitude' => -41.12022,
                'nombre' => 'Cachoeiro de Itapemirim',
            ),
            41 => 
            array (
                'id' => 781,
                'latitude' => -22.809816,
                'longitude' => -43.41941,
                'nombre' => 'Nilópolis',
            ),
            42 => 
            array (
                'id' => 782,
                'latitude' => -23.549265,
                'longitude' => -46.933196,
                'nombre' => 'Itapevi',
            ),
            43 => 
            array (
                'id' => 783,
                'latitude' => -8.27944,
                'longitude' => -35.030422,
                'nombre' => 'Cabo de Santo Agostinho',
            ),
            44 => 
            array (
                'id' => 784,
                'latitude' => -12.697178,
                'longitude' => -38.333198,
                'nombre' => 'Camaçari',
            ),
            45 => 
            array (
                'id' => 785,
                'latitude' => -3.689511,
                'longitude' => -40.34857,
                'nombre' => 'Sobral',
            ),
            46 => 
            array (
                'id' => 786,
                'latitude' => -26.910705,
                'longitude' => -48.670913,
                'nombre' => 'Itajaí',
            ),
            47 => 
            array (
                'id' => 787,
                'latitude' => -27.100934,
                'longitude' => -52.615699,
                'nombre' => 'Chapecó',
            ),
            48 => 
            array (
                'id' => 788,
                'latitude' => -23.602668,
                'longitude' => -46.919469,
                'nombre' => 'Cotia',
            ),
            49 => 
            array (
                'id' => 789,
                'latitude' => -27.815714,
                'longitude' => -50.326396,
                'nombre' => 'Lages',
            ),
            50 => 
            array (
                'id' => 790,
                'latitude' => -23.528958,
                'longitude' => -46.363582,
                'nombre' => 'Ferraz de Vasconcelos',
            ),
            51 => 
            array (
                'id' => 791,
                'latitude' => -23.08865,
                'longitude' => -47.208953,
                'nombre' => 'Indaiatuba',
            ),
            52 => 
            array (
                'id' => 792,
                'latitude' => -22.853341,
                'longitude' => -47.214708,
                'nombre' => 'Hortolândia',
            ),
            53 => 
            array (
                'id' => 793,
                'latitude' => -29.163403,
                'longitude' => -51.179668,
                'nombre' => 'Caxias',
            ),
            54 => 
            array (
                'id' => 794,
                'latitude' => -23.623362,
                'longitude' => -46.555243,
                'nombre' => 'São Caetano do Sul',
            ),
            55 => 
            array (
                'id' => 795,
                'latitude' => 37.388805,
                'longitude' => -121.930851,
                'nombre' => 'Itu',
            ),
            56 => 
            array (
                'id' => 796,
                'latitude' => -10.853164,
                'longitude' => -37.126979,
                'nombre' => 'Nossa Senhora do Socorro',
            ),
            57 => 
            array (
                'id' => 797,
                'latitude' => -2.905545,
                'longitude' => -41.773363,
                'nombre' => 'Parnaíba',
            ),
            58 => 
            array (
                'id' => 798,
                'latitude' => -21.785379,
                'longitude' => -46.56193,
                'nombre' => 'Poços de Caldas',
            ),
            59 => 
            array (
                'id' => 799,
                'latitude' => -22.416956,
                'longitude' => -42.975619,
                'nombre' => 'Teresópolis',
            ),
            60 => 
            array (
                'id' => 800,
                'latitude' => -12.147748,
                'longitude' => -44.995347,
                'nombre' => 'Barreiras',
            ),
            61 => 
            array (
                'id' => 801,
                'latitude' => -1.298329,
                'longitude' => -47.917162,
                'nombre' => 'Castanhal',
            ),
            62 => 
            array (
                'id' => 802,
                'latitude' => -12.133969,
                'longitude' => -38.421122,
                'nombre' => 'Alagoinhas',
            ),
            63 => 
            array (
                'id' => 803,
                'latitude' => -23.716627,
                'longitude' => -46.857642,
                'nombre' => 'Itapecerica da Serra',
            ),
            64 => 
            array (
                'id' => 804,
                'latitude' => -29.761912,
                'longitude' => -57.085843,
                'nombre' => 'Uruguaiana',
            ),
            65 => 
            array (
                'id' => 805,
                'latitude' => -25.516572,
                'longitude' => -48.522997,
                'nombre' => 'Paranaguá',
            ),
            66 => 
            array (
                'id' => 806,
                'latitude' => -20.025669,
                'longitude' => -44.057296,
                'nombre' => 'Ibirité',
            ),
            67 => 
            array (
                'id' => 807,
                'latitude' => -5.09808,
                'longitude' => -42.833301,
                'nombre' => 'Timon',
            ),
            68 => 
            array (
                'id' => 808,
                'latitude' => -16.251468,
                'longitude' => -47.917822,
                'nombre' => 'Luziânia',
            ),
            69 => 
            array (
                'id' => 809,
                'latitude' => -22.38369,
                'longitude' => -41.782789,
                'nombre' => 'Macaé',
            ),
            70 => 
            array (
                'id' => 810,
                'latitude' => -17.859997,
                'longitude' => -41.509076,
                'nombre' => 'Teófilo Otoni',
            ),
            71 => 
            array (
                'id' => 811,
                'latitude' => -22.368059,
                'longitude' => -46.943295,
                'nombre' => 'Moji-Guaçu',
            ),
            72 => 
            array (
                'id' => 812,
                'latitude' => -10.249091,
                'longitude' => -48.324286,
                'nombre' => 'Palmas',
            ),
            73 => 
            array (
                'id' => 813,
                'latitude' => -22.845071,
                'longitude' => -45.487487,
                'nombre' => 'Pindamonhangaba',
            ),
            74 => 
            array (
                'id' => 814,
                'latitude' => -23.279738,
                'longitude' => -46.745228,
                'nombre' => 'Francisco Morato',
            ),
            75 => 
            array (
                'id' => 815,
                'latitude' => -31.330175,
                'longitude' => -54.100471,
                'nombre' => 'Bagé',
            ),
            76 => 
            array (
                'id' => 816,
                'latitude' => -29.828796,
                'longitude' => -51.14418,
                'nombre' => 'Sapucaia do Sul',
            ),
            77 => 
            array (
                'id' => 817,
                'latitude' => -22.886751,
                'longitude' => -42.026254,
                'nombre' => 'Cabo Frio',
            ),
            78 => 
            array (
                'id' => 818,
                'latitude' => -23.639907,
                'longitude' => -48.159795,
                'nombre' => 'Itapetininga',
            ),
            79 => 
            array (
                'id' => 819,
                'latitude' => -18.587258,
                'longitude' => -46.514675,
                'nombre' => 'Patos de Minas',
            ),
            80 => 
            array (
                'id' => 820,
                'latitude' => -8.023921,
                'longitude' => -34.978467,
                'nombre' => 'Camaragibe',
            ),
            81 => 
            array (
                'id' => 821,
                'latitude' => -22.95317,
                'longitude' => -46.542324,
                'nombre' => 'Bragança Paulista',
            ),
            82 => 
            array (
                'id' => 822,
                'latitude' => -22.710668,
                'longitude' => -43.552226,
                'nombre' => 'Queimados',
            ),
            83 => 
            array (
                'id' => 823,
                'latitude' => -7.192773,
                'longitude' => -48.204827,
                'nombre' => 'Araguaína',
            ),
            84 => 
            array (
                'id' => 824,
                'latitude' => -8.882855,
                'longitude' => -36.496897,
                'nombre' => 'Garanhuns',
            ),
            85 => 
            array (
                'id' => 825,
                'latitude' => -8.128607,
                'longitude' => -35.297938,
                'nombre' => 'Vitória de Santo Antão',
            ),
            86 => 
            array (
                'id' => 826,
                'latitude' => 32.211885,
                'longitude' => -110.953551,
                'nombre' => 'Santa Rita',
            ),
            87 => 
            array (
                'id' => 827,
                'latitude' => -21.221934,
                'longitude' => -43.770681,
                'nombre' => 'Barbacena',
            ),
            88 => 
            array (
                'id' => 828,
                'latitude' => -1.722247,
                'longitude' => -48.879224,
                'nombre' => 'Abaetetuba',
            ),
            89 => 
            array (
                'id' => 829,
                'latitude' => -22.30275,
                'longitude' => -48.575549,
                'nombre' => 'Jaú',
            ),
            90 => 
            array (
                'id' => 830,
                'latitude' => -12.882057,
                'longitude' => -38.31482,
                'nombre' => 'Lauro de Freitas',
            ),
            91 => 
            array (
                'id' => 831,
                'latitude' => -23.323373,
                'longitude' => -46.729458,
                'nombre' => 'Franco da Rocha',
            ),
            92 => 
            array (
                'id' => 832,
                'latitude' => -17.540031,
                'longitude' => -39.742181,
                'nombre' => 'Teixeira de Freitas',
            ),
            93 => 
            array (
                'id' => 833,
                'latitude' => -21.556052,
                'longitude' => -45.436842,
                'nombre' => 'Varginha',
            ),
            94 => 
            array (
                'id' => 834,
                'latitude' => -23.707162,
                'longitude' => -46.40625,
                'nombre' => 'Ribeirão Pires',
            ),
            95 => 
            array (
                'id' => 835,
                'latitude' => -19.884526,
                'longitude' => -43.826722,
                'nombre' => 'Sabará',
            ),
            96 => 
            array (
                'id' => 836,
                'latitude' => -21.131855,
                'longitude' => -48.977473,
                'nombre' => 'Catanduva',
            ),
            97 => 
            array (
                'id' => 837,
                'latitude' => 21.927792,
                'longitude' => -99.985634,
                'nombre' => 'Rio Verde',
            ),
            98 => 
            array (
                'id' => 838,
                'latitude' => -22.884181,
                'longitude' => -48.444165,
                'nombre' => 'Botucatu',
            ),
            99 => 
            array (
                'id' => 839,
                'latitude' => -19.526263,
                'longitude' => -40.635118,
                'nombre' => 'Colatina',
            ),
            100 => 
            array (
                'id' => 840,
                'latitude' => -29.722516,
                'longitude' => -52.434838,
                'nombre' => 'Santa Cruz do Sul',
            ),
            101 => 
            array (
                'id' => 841,
                'latitude' => -19.394665,
                'longitude' => -40.065264,
                'nombre' => 'Linhares',
            ),
            102 => 
            array (
                'id' => 842,
                'latitude' => -23.550438,
                'longitude' => -51.463972,
                'nombre' => 'Apucarana',
            ),
            103 => 
            array (
                'id' => 843,
                'latitude' => -20.527959,
                'longitude' => -48.638888,
                'nombre' => 'Barretos',
            ),
            104 => 
            array (
                'id' => 844,
                'latitude' => -22.808024,
                'longitude' => -45.194219,
                'nombre' => 'Guaratinguetá',
            ),
            105 => 
            array (
                'id' => 845,
                'latitude' => -29.947723,
                'longitude' => -51.102117,
                'nombre' => 'Cachoeirinha',
            ),
            106 => 
            array (
                'id' => 846,
                'latitude' => -4.460556,
                'longitude' => -43.88945,
                'nombre' => 'Codó',
            ),
            107 => 
            array (
                'id' => 847,
                'latitude' => -26.482221,
                'longitude' => -49.073477,
                'nombre' => 'Jaraguá do Sul',
            ),
            108 => 
            array (
                'id' => 848,
                'latitude' => -23.891615,
                'longitude' => -46.424414,
                'nombre' => 'Cubatão',
            ),
            109 => 
            array (
                'id' => 849,
                'latitude' => -19.624417,
                'longitude' => -43.231636,
                'nombre' => 'Itabira',
            ),
            110 => 
            array (
                'id' => 850,
                'latitude' => -4.26707,
                'longitude' => -55.993117,
                'nombre' => 'Itaituba',
            ),
            111 => 
            array (
                'id' => 851,
                'latitude' => -22.360491,
                'longitude' => -47.379839,
                'nombre' => 'Araras',
            ),
            112 => 
            array (
                'id' => 852,
                'latitude' => -22.470962,
                'longitude' => -44.451329,
                'nombre' => 'Resende',
            ),
            113 => 
            array (
                'id' => 853,
                'latitude' => -23.117549,
                'longitude' => -46.556707,
                'nombre' => 'Atibaia',
            ),
            114 => 
            array (
                'id' => 854,
                'latitude' => -22.248037,
                'longitude' => -45.942012,
                'nombre' => 'Pouso Alegre',
            ),
            115 => 
            array (
                'id' => 855,
                'latitude' => 39.862832,
                'longitude' => -4.027323,
                'nombre' => 'Toledo',
            ),
            116 => 
            array (
                'id' => 856,
                'latitude' => 39.287674,
                'longitude' => -7.645655,
                'nombre' => 'Crato',
            ),
            117 => 
            array (
                'id' => 857,
                'latitude' => -20.722143,
                'longitude' => -46.613335,
                'nombre' => 'Passos',
            ),
            118 => 
            array (
                'id' => 858,
                'latitude' => -18.64604,
                'longitude' => -48.193856,
                'nombre' => 'Araguari',
            ),
            119 => 
            array (
                'id' => 859,
                'latitude' => -2.550385,
                'longitude' => -44.070196,
                'nombre' => 'São José de Ribamar',
            ),
            120 => 
            array (
                'id' => 860,
                'latitude' => -25.443441,
                'longitude' => -49.193145,
                'nombre' => 'Pinhais',
            ),
            121 => 
            array (
                'id' => 861,
                'latitude' => -21.137995,
                'longitude' => -47.990137,
                'nombre' => 'Sertãozinho',
            ),
            122 => 
            array (
                'id' => 862,
                'latitude' => -20.66393,
                'longitude' => -43.785023,
                'nombre' => 'Conselheiro Lafaiete',
            ),
            123 => 
            array (
                'id' => 863,
                'latitude' => -9.406125,
                'longitude' => -38.216372,
                'nombre' => 'Paulo Afonso',
            ),
            124 => 
            array (
                'id' => 864,
                'latitude' => -23.005804,
                'longitude' => -44.315791,
                'nombre' => 'Angra dos Reis',
            ),
            125 => 
            array (
                'id' => 865,
                'latitude' => -16.371994,
                'longitude' => -39.582512,
                'nombre' => 'Eunápolis',
            ),
            126 => 
            array (
                'id' => 866,
                'latitude' => -31.385499,
                'longitude' => -57.960079,
                'nombre' => 'Salto',
            ),
            127 => 
            array (
                'id' => 867,
                'latitude' => -22.979864,
                'longitude' => -49.869959,
                'nombre' => 'Ourinhos',
            ),
            128 => 
            array (
                'id' => 868,
                'latitude' => -5.911554,
                'longitude' => -35.271316,
                'nombre' => 'Parnamirim',
            ),
            129 => 
            array (
                'id' => 869,
                'latitude' => -11.181651,
                'longitude' => -40.51206,
                'nombre' => 'Jacobina',
            ),
            130 => 
            array (
                'id' => 870,
                'latitude' => -19.518997,
                'longitude' => -42.628205,
                'nombre' => 'Coronel Fabriciano',
            ),
            131 => 
            array (
                'id' => 871,
                'latitude' => -21.291505,
                'longitude' => -50.343631,
                'nombre' => 'Birigui',
            ),
            132 => 
            array (
                'id' => 872,
                'latitude' => -23.349219,
                'longitude' => -47.846576,
                'nombre' => 'Tatuí',
            ),
            133 => 
            array (
                'id' => 873,
                'latitude' => -10.878141,
                'longitude' => -61.932673,
                'nombre' => 'Ji-Paraná',
            ),
            134 => 
            array (
                'id' => 874,
                'latitude' => -4.222144,
                'longitude' => -44.785584,
                'nombre' => 'Bacabal',
            ),
            135 => 
            array (
                'id' => 875,
                'latitude' => -2.241489,
                'longitude' => -49.49848,
                'nombre' => 'Cametá',
            ),
            136 => 
            array (
                'id' => 876,
                'latitude' => -30.109092,
                'longitude' => -51.323827,
                'nombre' => 'Guaíba',
            ),
            137 => 
            array (
                'id' => 877,
                'latitude' => -8.007566,
                'longitude' => -35.022189,
                'nombre' => 'São Lourenço da Mata',
            ),
            138 => 
            array (
                'id' => 878,
                'latitude' => -30.877285,
                'longitude' => -55.53923,
                'nombre' => 'Santana do Livramento',
            ),
            139 => 
            array (
                'id' => 879,
                'latitude' => -23.540286,
                'longitude' => -47.444598,
                'nombre' => 'Votorantim',
            ),
            140 => 
            array (
                'id' => 880,
                'latitude' => -26.800414,
                'longitude' => -60.839132,
                'nombre' => 'Campo Largo',
            ),
            141 => 
            array (
                'id' => 881,
                'latitude' => -7.017833,
                'longitude' => -37.275037,
                'nombre' => 'Patos',
            ),
            142 => 
            array (
                'id' => 882,
                'latitude' => -18.977657,
                'longitude' => -49.464392,
                'nombre' => 'Ituiutaba',
            ),
            143 => 
            array (
                'id' => 883,
                'latitude' => -19.008169,
                'longitude' => -57.65155,
                'nombre' => 'Corumbá',
            ),
            144 => 
            array (
                'id' => 884,
                'latitude' => -27.64662,
                'longitude' => -48.670361,
                'nombre' => 'Palhoça',
            ),
            145 => 
            array (
                'id' => 885,
                'latitude' => -22.472026,
                'longitude' => -43.827337,
                'nombre' => 'Barra do Piraí',
            ),
            146 => 
            array (
                'id' => 886,
                'latitude' => -29.166709,
                'longitude' => -51.516986,
                'nombre' => 'Bento Gonçalves',
            ),
            147 => 
            array (
                'id' => 887,
                'latitude' => -23.533778,
                'longitude' => -46.347736,
                'nombre' => 'Poá',
            ),
            148 => 
            array (
                'id' => 888,
                'latitude' => -15.746036,
                'longitude' => -48.299098,
                'nombre' => 'Águas Lindas de Goiás',
            ),
            149 => 
            array (
                'id' => 889,
                'latitude' => 51.507351,
                'longitude' => -0.127758,
                'nombre' => 'London',
            ),
            150 => 
            array (
                'id' => 890,
                'latitude' => 52.486243,
                'longitude' => -1.890401,
                'nombre' => 'Birmingham',
            ),
            151 => 
            array (
                'id' => 891,
                'latitude' => 55.864237,
                'longitude' => -4.251806,
                'nombre' => 'Glasgow',
            ),
            152 => 
            array (
                'id' => 892,
                'latitude' => 43.106456,
                'longitude' => -76.217705,
                'nombre' => 'Liverpool',
            ),
            153 => 
            array (
                'id' => 893,
                'latitude' => 55.953252,
                'longitude' => -3.188267,
                'nombre' => 'Edinburgh',
            ),
            154 => 
            array (
                'id' => 894,
                'latitude' => 53.381129,
                'longitude' => -1.470085,
                'nombre' => 'Sheffield',
            ),
            155 => 
            array (
                'id' => 895,
                'latitude' => 53.480759,
                'longitude' => -2.242631,
                'nombre' => 'Manchester',
            ),
            156 => 
            array (
                'id' => 896,
                'latitude' => 53.800755,
                'longitude' => -1.549077,
                'nombre' => 'Leeds',
            ),
            157 => 
            array (
                'id' => 897,
                'latitude' => 51.454513,
                'longitude' => -2.58791,
                'nombre' => 'Bristol',
            ),
            158 => 
            array (
                'id' => 898,
                'latitude' => 51.481581,
                'longitude' => -3.17909,
                'nombre' => 'Cardiff',
            ),
            159 => 
            array (
                'id' => 899,
                'latitude' => 52.406822,
                'longitude' => -1.519693,
                'nombre' => 'Coventry',
            ),
            160 => 
            array (
                'id' => 900,
                'latitude' => 42.245926,
                'longitude' => -71.908684,
                'nombre' => 'Leicester',
            ),
            161 => 
            array (
                'id' => 901,
                'latitude' => 53.795984,
                'longitude' => -1.759398,
                'nombre' => 'Bradford',
            ),
            162 => 
            array (
                'id' => 902,
                'latitude' => 54.597285,
                'longitude' => -5.93012,
                'nombre' => 'Belfast',
            ),
            163 => 
            array (
                'id' => 903,
                'latitude' => 52.954783,
                'longitude' => -1.158109,
                'nombre' => 'Nottingham',
            ),
            164 => 
            array (
                'id' => 904,
                'latitude' => 53.745671,
                'longitude' => -0.336741,
                'nombre' => 'Kingston upon Hull',
            ),
            165 => 
            array (
                'id' => 905,
                'latitude' => 50.375457,
                'longitude' => -4.142656,
                'nombre' => 'Plymouth',
            ),
            166 => 
            array (
                'id' => 906,
                'latitude' => 53.002668,
                'longitude' => -2.179404,
                'nombre' => 'Stoke-on-Trent',
            ),
            167 => 
            array (
                'id' => 907,
                'latitude' => 52.586973,
                'longitude' => -2.12882,
                'nombre' => 'Wolverhampton',
            ),
            168 => 
            array (
                'id' => 908,
                'latitude' => 52.92253,
                'longitude' => -1.474619,
                'nombre' => 'Derby',
            ),
            169 => 
            array (
                'id' => 909,
                'latitude' => 51.62144,
                'longitude' => -3.943646,
                'nombre' => 'Swansea',
            ),
            170 => 
            array (
                'id' => 910,
                'latitude' => 50.9097,
                'longitude' => -1.404351,
                'nombre' => 'Southampton',
            ),
            171 => 
            array (
                'id' => 911,
                'latitude' => 57.149717,
                'longitude' => -2.094278,
                'nombre' => 'Aberdeen',
            ),
            172 => 
            array (
                'id' => 912,
                'latitude' => 52.240477,
                'longitude' => -0.902656,
                'nombre' => 'Northampton',
            ),
            173 => 
            array (
                'id' => 913,
                'latitude' => 42.043366,
                'longitude' => -71.927603,
                'nombre' => 'Dudley',
            ),
            174 => 
            array (
                'id' => 914,
                'latitude' => 50.819768,
                'longitude' => -1.087977,
                'nombre' => 'Portsmouth',
            ),
            175 => 
            array (
                'id' => 915,
                'latitude' => 54.978252,
                'longitude' => -1.61778,
                'nombre' => 'Newcastle upon Tyne',
            ),
            176 => 
            array (
                'id' => 916,
                'latitude' => 42.466373,
                'longitude' => -72.579511,
                'nombre' => 'Sunderland',
            ),
            177 => 
            array (
                'id' => 917,
                'latitude' => 51.878671,
                'longitude' => -0.420026,
                'nombre' => 'Luton',
            ),
            178 => 
            array (
                'id' => 918,
                'latitude' => 51.555774,
                'longitude' => -1.779718,
                'nombre' => 'Swindon',
            ),
            179 => 
            array (
                'id' => 919,
                'latitude' => 51.545927,
                'longitude' => 0.707712,
                'nombre' => 'Southend-on-Sea',
            ),
            180 => 
            array (
                'id' => 920,
                'latitude' => 52.586214,
                'longitude' => -1.982919,
                'nombre' => 'Walsall',
            ),
            181 => 
            array (
                'id' => 921,
                'latitude' => 50.719164,
                'longitude' => -1.880769,
                'nombre' => 'Bournemouth',
            ),
            182 => 
            array (
                'id' => 922,
                'latitude' => 52.569498,
                'longitude' => -0.24053,
                'nombre' => 'Peterborough',
            ),
            183 => 
            array (
                'id' => 923,
                'latitude' => 50.82253,
                'longitude' => -0.137163,
                'nombre' => 'Brighton',
            ),
            184 => 
            array (
                'id' => 924,
                'latitude' => 53.817505,
                'longitude' => -3.035675,
                'nombre' => 'Blackpool',
            ),
            185 => 
            array (
                'id' => 925,
                'latitude' => 56.462018,
                'longitude' => -2.970721,
                'nombre' => 'Dundee',
            ),
            186 => 
            array (
                'id' => 926,
                'latitude' => 52.517664,
                'longitude' => -1.995159,
                'nombre' => 'West Bromwich',
            ),
            187 => 
            array (
                'id' => 927,
                'latitude' => 40.335648,
                'longitude' => -75.926875,
                'nombre' => 'Reading',
            ),
            188 => 
            array (
                'id' => 928,
                'latitude' => 52.471067,
                'longitude' => -1.99668,
            'nombre' => 'Oldbury/Smethwick (Warley)',
            ),
            189 => 
            array (
                'id' => 929,
                'latitude' => 54.574227,
                'longitude' => -1.234956,
                'nombre' => 'Middlesbrough',
            ),
            190 => 
            array (
                'id' => 930,
                'latitude' => 53.645792,
                'longitude' => -1.785035,
                'nombre' => 'Huddersfield',
            ),
            191 => 
            array (
                'id' => 931,
                'latitude' => 51.754816,
                'longitude' => -1.254367,
                'nombre' => 'Oxford',
            ),
            192 => 
            array (
                'id' => 932,
                'latitude' => 50.71505,
                'longitude' => -1.987248,
                'nombre' => 'Poole',
            ),
            193 => 
            array (
                'id' => 933,
                'latitude' => 44.372648,
                'longitude' => -72.878762,
                'nombre' => 'Bolton',
            ),
            194 => 
            array (
                'id' => 934,
                'latitude' => 53.748575,
                'longitude' => -2.487529,
                'nombre' => 'Blackburn',
            ),
            195 => 
            array (
                'id' => 935,
                'latitude' => 41.490102,
                'longitude' => -71.312829,
                'nombre' => 'Newport',
            ),
            196 => 
            array (
                'id' => 936,
                'latitude' => 53.763201,
                'longitude' => -2.70309,
                'nombre' => 'Preston',
            ),
            197 => 
            array (
                'id' => 937,
                'latitude' => 53.39331,
                'longitude' => -2.126633,
                'nombre' => 'Stockport',
            ),
            198 => 
            array (
                'id' => 938,
                'latitude' => 52.630886,
                'longitude' => 1.297355,
                'nombre' => 'Norwich',
            ),
            199 => 
            array (
                'id' => 939,
                'latitude' => 53.432604,
                'longitude' => -1.363501,
                'nombre' => 'Rotherham',
            ),
            200 => 
            array (
                'id' => 940,
                'latitude' => 52.204267,
                'longitude' => 0.114908,
                'nombre' => 'Cambridge',
            ),
            201 => 
            array (
                'id' => 941,
                'latitude' => 51.656489,
                'longitude' => -0.39032,
                'nombre' => 'Watford',
            ),
            202 => 
            array (
                'id' => 942,
                'latitude' => 52.056736,
                'longitude' => 1.14822,
                'nombre' => 'Ipswich',
            ),
            203 => 
            array (
                'id' => 943,
                'latitude' => 51.510538,
                'longitude' => -0.595041,
                'nombre' => 'Slough',
            ),
            204 => 
            array (
                'id' => 944,
                'latitude' => 50.718412,
                'longitude' => -3.533899,
                'nombre' => 'Exeter',
            ),
            205 => 
            array (
                'id' => 945,
                'latitude' => 51.899386,
                'longitude' => -2.078253,
                'nombre' => 'Cheltenham',
            ),
            206 => 
            array (
                'id' => 946,
                'latitude' => 51.864245,
                'longitude' => -2.238156,
                'nombre' => 'Gloucester',
            ),
            207 => 
            array (
                'id' => 947,
                'latitude' => 46.191401,
                'longitude' => -122.195551,
                'nombre' => 'Saint Helens',
            ),
            208 => 
            array (
                'id' => 948,
                'latitude' => 52.570385,
                'longitude' => -1.824042,
                'nombre' => 'Sutton Coldfield',
            ),
            209 => 
            array (
                'id' => 949,
                'latitude' => 53.959965,
                'longitude' => -1.087298,
                'nombre' => 'York',
            ),
            210 => 
            array (
                'id' => 950,
                'latitude' => 53.54093,
                'longitude' => -2.111366,
                'nombre' => 'Oldham',
            ),
            211 => 
            array (
                'id' => 951,
                'latitude' => 51.576084,
                'longitude' => 0.488736,
                'nombre' => 'Basildon',
            ),
            212 => 
            array (
                'id' => 952,
                'latitude' => 50.81787,
                'longitude' => -0.372882,
                'nombre' => 'Worthing',
            ),
            213 => 
            array (
                'id' => 953,
                'latitude' => 51.735587,
                'longitude' => 0.46855,
                'nombre' => 'Chelmsford',
            ),
            214 => 
            array (
                'id' => 954,
                'latitude' => 51.895927,
                'longitude' => 0.891874,
                'nombre' => 'Colchester',
            ),
            215 => 
            array (
                'id' => 955,
                'latitude' => 51.10914,
                'longitude' => -0.187228,
                'nombre' => 'Crawley',
            ),
            216 => 
            array (
                'id' => 956,
                'latitude' => 51.386322,
                'longitude' => 0.551438,
                'nombre' => 'Gillingham',
            ),
            217 => 
            array (
                'id' => 957,
                'latitude' => 52.411811,
                'longitude' => -1.77761,
                'nombre' => 'Solihull',
            ),
            218 => 
            array (
                'id' => 958,
                'latitude' => 53.609714,
                'longitude' => -2.1561,
                'nombre' => 'Rochdale',
            ),
            219 => 
            array (
                'id' => 959,
                'latitude' => 53.389991,
                'longitude' => -3.023009,
                'nombre' => 'Birkenhead',
            ),
            220 => 
            array (
                'id' => 960,
                'latitude' => 42.262593,
                'longitude' => -71.802293,
                'nombre' => 'Worcester',
            ),
            221 => 
            array (
                'id' => 961,
                'latitude' => 54.691745,
                'longitude' => -1.212926,
                'nombre' => 'Hartlepool',
            ),
            222 => 
            array (
                'id' => 962,
                'latitude' => 44.648764,
                'longitude' => -63.575239,
                'nombre' => 'Halifax',
            ),
            223 => 
            array (
                'id' => 963,
                'latitude' => 51.340125,
                'longitude' => -0.471357,
                'nombre' => 'Woking/Byfleet',
            ),
            224 => 
            array (
                'id' => 964,
                'latitude' => 53.645708,
                'longitude' => -3.010113,
                'nombre' => 'Southport',
            ),
            225 => 
            array (
                'id' => 965,
                'latitude' => 51.270363,
                'longitude' => 0.522699,
                'nombre' => 'Maidstone',
            ),
            226 => 
            array (
                'id' => 966,
                'latitude' => 50.768035,
                'longitude' => 0.290472,
                'nombre' => 'Eastbourne',
            ),
            227 => 
            array (
                'id' => 967,
                'latitude' => 53.567471,
                'longitude' => -0.080784,
                'nombre' => 'Grimsby',
            ),
            228 => 
            array (
                'id' => 968,
                'latitude' => 49.180502,
                'longitude' => -2.103233,
                'nombre' => 'Saint Helier',
            ),
            229 => 
            array (
                'id' => 969,
                'latitude' => 33.729023,
                'longitude' => -84.731556,
                'nombre' => 'Douglas',
            ),
            230 => 
            array (
                'id' => 970,
                'latitude' => 18.428612,
                'longitude' => -64.618466,
                'nombre' => 'Road Town',
            ),
            231 => 
            array (
                'id' => 971,
                'latitude' => 4.903052,
                'longitude' => 114.939821,
                'nombre' => 'Bandar Seri Begawan',
            ),
            232 => 
            array (
                'id' => 972,
                'latitude' => 42.697708,
                'longitude' => 23.321868,
                'nombre' => 'Sofija',
            ),
            233 => 
            array (
                'id' => 973,
                'latitude' => 42.135408,
                'longitude' => 24.74529,
                'nombre' => 'Plovdiv',
            ),
            234 => 
            array (
                'id' => 974,
                'latitude' => 43.21405,
                'longitude' => 27.914733,
                'nombre' => 'Varna',
            ),
            235 => 
            array (
                'id' => 975,
                'latitude' => 42.504793,
                'longitude' => 27.462636,
                'nombre' => 'Burgas',
            ),
            236 => 
            array (
                'id' => 976,
                'latitude' => 43.835571,
                'longitude' => 25.965655,
                'nombre' => 'Ruse',
            ),
            237 => 
            array (
                'id' => 977,
                'latitude' => 42.425777,
                'longitude' => 25.634464,
                'nombre' => 'Stara Zagora',
            ),
            238 => 
            array (
                'id' => 978,
                'latitude' => 43.417042,
                'longitude' => 24.606685,
                'nombre' => 'Pleven',
            ),
            239 => 
            array (
                'id' => 979,
                'latitude' => 42.681654,
                'longitude' => 26.322869,
                'nombre' => 'Sliven',
            ),
            240 => 
            array (
                'id' => 980,
                'latitude' => 43.57259,
                'longitude' => 27.827261,
                'nombre' => 'Dobric',
            ),
            241 => 
            array (
                'id' => 981,
                'latitude' => 43.27124,
                'longitude' => 26.936129,
                'nombre' => 'Šumen',
            ),
            242 => 
            array (
                'id' => 982,
                'latitude' => 12.371428,
                'longitude' => -1.51966,
                'nombre' => 'Ouagadougou',
            ),
            243 => 
            array (
                'id' => 983,
                'latitude' => 11.164922,
                'longitude' => -4.305154,
                'nombre' => 'Bobo-Dioulasso',
            ),
            244 => 
            array (
                'id' => 984,
                'latitude' => 12.256218,
                'longitude' => -2.351753,
                'nombre' => 'Koudougou',
            ),
            245 => 
            array (
                'id' => 985,
                'latitude' => -3.361378,
                'longitude' => 29.359878,
                'nombre' => 'Bujumbura',
            ),
            246 => 
            array (
                'id' => 986,
                'latitude' => 19.286932,
                'longitude' => -81.367439,
                'nombre' => 'George Town',
            ),
            247 => 
            array (
                'id' => 987,
                'latitude' => -33.44889,
                'longitude' => -70.669265,
                'nombre' => 'Santiago de Chile',
            ),
            248 => 
            array (
                'id' => 988,
                'latitude' => -33.618608,
                'longitude' => -70.590606,
                'nombre' => 'Puente Alto',
            ),
            249 => 
            array (
                'id' => 989,
                'latitude' => -33.015348,
                'longitude' => -71.550028,
                'nombre' => 'Viña del Mar',
            ),
            250 => 
            array (
                'id' => 990,
                'latitude' => -33.047238,
                'longitude' => -71.612688,
                'nombre' => 'Valparaíso',
            ),
            251 => 
            array (
                'id' => 991,
                'latitude' => -36.724783,
                'longitude' => -73.116981,
                'nombre' => 'Talcahuano',
            ),
            252 => 
            array (
                'id' => 992,
                'latitude' => -23.650928,
                'longitude' => -70.397502,
                'nombre' => 'Antofagasta',
            ),
            253 => 
            array (
                'id' => 993,
                'latitude' => -33.585448,
                'longitude' => -70.698736,
                'nombre' => 'San Bernardo',
            ),
            254 => 
            array (
                'id' => 994,
                'latitude' => -38.735902,
                'longitude' => -72.590374,
                'nombre' => 'Temuco',
            ),
            255 => 
            array (
                'id' => 995,
                'latitude' => -36.820135,
                'longitude' => -73.04439,
                'nombre' => 'Concepción',
            ),
            256 => 
            array (
                'id' => 996,
                'latitude' => -34.170132,
                'longitude' => -70.740626,
                'nombre' => 'Rancagua',
            ),
            257 => 
            array (
                'id' => 997,
                'latitude' => -18.478253,
                'longitude' => -70.312599,
                'nombre' => 'Arica',
            ),
            258 => 
            array (
                'id' => 998,
                'latitude' => -35.423244,
                'longitude' => -71.64848,
                'nombre' => 'Talca',
            ),
            259 => 
            array (
                'id' => 999,
                'latitude' => -36.606262,
                'longitude' => -72.102335,
                'nombre' => 'Chillán',
            ),
            260 => 
            array (
                'id' => 1000,
                'latitude' => -20.230703,
                'longitude' => -70.135669,
                'nombre' => 'Iquique',
            ),
            261 => 
            array (
                'id' => 1001,
                'latitude' => 34.052234,
                'longitude' => -118.243685,
                'nombre' => 'Los Angeles',
            ),
            262 => 
            array (
                'id' => 1002,
                'latitude' => -41.468917,
                'longitude' => -72.941136,
                'nombre' => 'Puerto Montt',
            ),
            263 => 
            array (
                'id' => 1003,
                'latitude' => -29.959001,
                'longitude' => -71.338918,
                'nombre' => 'Coquimbo',
            ),
            264 => 
            array (
                'id' => 1004,
                'latitude' => -40.57619,
                'longitude' => -73.114947,
                'nombre' => 'Osorno',
            ),
            265 => 
            array (
                'id' => 1005,
                'latitude' => -29.902669,
                'longitude' => -71.251937,
                'nombre' => 'La Serena',
            ),
            266 => 
            array (
                'id' => 1006,
                'latitude' => -22.454392,
                'longitude' => -68.929382,
                'nombre' => 'Calama',
            ),
            267 => 
            array (
                'id' => 1007,
                'latitude' => -39.819586,
                'longitude' => -73.24521,
                'nombre' => 'Valdivia',
            ),
            268 => 
            array (
                'id' => 1008,
                'latitude' => -53.163833,
                'longitude' => -70.917068,
                'nombre' => 'Punta Arenas',
            ),
            269 => 
            array (
                'id' => 1009,
                'latitude' => -27.366576,
                'longitude' => -70.332159,
                'nombre' => 'Copiapó',
            ),
            270 => 
            array (
                'id' => 1010,
                'latitude' => -33.048271,
                'longitude' => -71.440875,
                'nombre' => 'Quilpué',
            ),
            271 => 
            array (
                'id' => 1011,
                'latitude' => -34.977985,
                'longitude' => -71.25288,
                'nombre' => 'Curicó',
            ),
            272 => 
            array (
                'id' => 1012,
                'latitude' => -30.604304,
                'longitude' => -71.196988,
                'nombre' => 'Ovalle',
            ),
            273 => 
            array (
                'id' => 1013,
                'latitude' => -37.034077,
                'longitude' => -73.140484,
                'nombre' => 'Coronel',
            ),
            274 => 
            array (
                'id' => 1014,
                'latitude' => -36.830535,
                'longitude' => -73.116737,
                'nombre' => 'San Pedro de la Paz',
            ),
            275 => 
            array (
                'id' => 1015,
                'latitude' => -33.686159,
                'longitude' => -71.216684,
                'nombre' => 'Melipilla',
            ),
            276 => 
            array (
                'id' => 1016,
                'latitude' => -21.212901,
                'longitude' => -159.782306,
                'nombre' => 'Avarua',
            ),
            277 => 
            array (
                'id' => 1017,
                'latitude' => 37.338208,
                'longitude' => -121.886329,
                'nombre' => 'San José',
            ),
            278 => 
            array (
                'id' => 1018,
                'latitude' => 11.825138,
                'longitude' => 42.590275,
                'nombre' => 'Djibouti',
            ),
            279 => 
            array (
                'id' => 1019,
                'latitude' => 15.309168,
                'longitude' => -61.379355,
                'nombre' => 'Roseau',
            ),
            280 => 
            array (
                'id' => 1020,
                'latitude' => 18.486058,
                'longitude' => -69.931212,
                'nombre' => 'Santo Domingo de Guzmán',
            ),
            281 => 
            array (
                'id' => 1021,
                'latitude' => 19.479196,
                'longitude' => -70.693057,
                'nombre' => 'Santiago de los Caballeros',
            ),
            282 => 
            array (
                'id' => 1022,
                'latitude' => 18.433865,
                'longitude' => -68.965882,
                'nombre' => 'La Romana',
            ),
            283 => 
            array (
                'id' => 1023,
                'latitude' => 18.47207,
                'longitude' => -69.299673,
                'nombre' => 'San Pedro de Macorís',
            ),
            284 => 
            array (
                'id' => 1024,
                'latitude' => 19.305026,
                'longitude' => -70.252738,
                'nombre' => 'San Francisco de Macorís',
            ),
            285 => 
            array (
                'id' => 1025,
                'latitude' => 19.780769,
                'longitude' => -70.687109,
                'nombre' => 'San Felipe de Puerto Plata',
            ),
            286 => 
            array (
                'id' => 1026,
                'latitude' => -2.170998,
                'longitude' => -79.922359,
                'nombre' => 'Guayaquil',
            ),
            287 => 
            array (
                'id' => 1027,
                'latitude' => -0.180653,
                'longitude' => -78.467838,
                'nombre' => 'Quito',
            ),
            288 => 
            array (
                'id' => 1028,
                'latitude' => 40.070393,
                'longitude' => -2.137416,
                'nombre' => 'Cuenca',
            ),
            289 => 
            array (
                'id' => 1029,
                'latitude' => -3.258111,
                'longitude' => -79.955392,
                'nombre' => 'Machala',
            ),
            290 => 
            array (
                'id' => 1030,
                'latitude' => -0.238904,
                'longitude' => -79.177427,
                'nombre' => 'Santo Domingo de los Colorados',
            ),
            291 => 
            array (
                'id' => 1031,
                'latitude' => -1.054723,
                'longitude' => -80.45249,
                'nombre' => 'Portoviejo',
            ),
            292 => 
            array (
                'id' => 1032,
                'latitude' => -1.254341,
                'longitude' => -78.62285,
                'nombre' => 'Ambato',
            ),
            293 => 
            array (
                'id' => 1033,
                'latitude' => -0.967653,
                'longitude' => -80.70891,
                'nombre' => 'Manta',
            ),
            294 => 
            array (
                'id' => 1034,
                'latitude' => -2.160609,
                'longitude' => -79.836215,
                'nombre' => 'Duran [Eloy Alfaro]',
            ),
            295 => 
            array (
                'id' => 1035,
                'latitude' => 0.339176,
                'longitude' => -78.122234,
                'nombre' => 'Ibarra',
            ),
            296 => 
            array (
                'id' => 1036,
                'latitude' => -1.022512,
                'longitude' => -79.460403,
                'nombre' => 'Quevedo',
            ),
            297 => 
            array (
                'id' => 1037,
                'latitude' => 34.938391,
                'longitude' => -105.239169,
                'nombre' => 'Milagro',
            ),
            298 => 
            array (
                'id' => 1038,
                'latitude' => -4.007891,
                'longitude' => -79.211277,
                'nombre' => 'Loja',
            ),
            299 => 
            array (
                'id' => 1039,
                'latitude' => -1.663551,
                'longitude' => -78.654646,
                'nombre' => 'Ríobamba',
            ),
            300 => 
            array (
                'id' => 1040,
                'latitude' => 0.968179,
                'longitude' => -79.65172,
                'nombre' => 'Esmeraldas',
            ),
            301 => 
            array (
                'id' => 1041,
                'latitude' => 30.04442,
                'longitude' => 31.235712,
                'nombre' => 'Cairo',
            ),
            302 => 
            array (
                'id' => 1042,
                'latitude' => 38.804836,
                'longitude' => -77.046921,
                'nombre' => 'Alexandria',
            ),
            303 => 
            array (
                'id' => 1043,
                'latitude' => 30.013056,
                'longitude' => 31.208853,
                'nombre' => 'Giza',
            ),
            304 => 
            array (
                'id' => 1044,
                'latitude' => 30.123385,
                'longitude' => 31.260929,
                'nombre' => 'Shubra al-Khayma',
            ),
            305 => 
            array (
                'id' => 1045,
                'latitude' => 31.265289,
                'longitude' => 32.301866,
                'nombre' => 'Port Said',
            ),
            306 => 
            array (
                'id' => 1046,
                'latitude' => 29.966834,
                'longitude' => 32.549807,
                'nombre' => 'Suez',
            ),
            307 => 
            array (
                'id' => 1047,
                'latitude' => 30.969671,
                'longitude' => 31.168083,
                'nombre' => 'al-Mahallat al-Kubra',
            ),
            308 => 
            array (
                'id' => 1048,
                'latitude' => 30.786509,
                'longitude' => 31.000376,
                'nombre' => 'Tanta',
            ),
            309 => 
            array (
                'id' => 1049,
                'latitude' => 31.040948,
                'longitude' => 31.37847,
                'nombre' => 'al-Mansura',
            ),
            310 => 
            array (
                'id' => 1050,
                'latitude' => 36.09551,
                'longitude' => -115.176067,
                'nombre' => 'Luxor',
            ),
            311 => 
            array (
                'id' => 1051,
                'latitude' => 27.178312,
                'longitude' => 31.185926,
                'nombre' => 'Asyut',
            ),
            312 => 
            array (
                'id' => 1052,
                'latitude' => 30.136686,
                'longitude' => 31.274481,
                'nombre' => 'Bahtim',
            ),
            313 => 
            array (
                'id' => 1053,
                'latitude' => 30.576538,
                'longitude' => 31.504066,
                'nombre' => 'Zagazig',
            ),
            314 => 
            array (
                'id' => 1054,
                'latitude' => 29.308402,
                'longitude' => 30.84285,
                'nombre' => 'al-Faiyum',
            ),
            315 => 
            array (
                'id' => 1055,
                'latitude' => 30.596492,
                'longitude' => 32.271459,
                'nombre' => 'Ismailia',
            ),
            316 => 
            array (
                'id' => 1056,
                'latitude' => 31.135665,
                'longitude' => 30.132781,
                'nombre' => 'Kafr al-Dawwar',
            ),
            317 => 
            array (
                'id' => 1057,
                'latitude' => 24.088938,
                'longitude' => 32.899829,
                'nombre' => 'Assuan',
            ),
            318 => 
            array (
                'id' => 1058,
                'latitude' => 31.042457,
                'longitude' => 30.47275,
                'nombre' => 'Damanhur',
            ),
            319 => 
            array (
                'id' => 1059,
                'latitude' => 28.087097,
                'longitude' => 30.76184,
                'nombre' => 'al-Minya',
            ),
            320 => 
            array (
                'id' => 1060,
                'latitude' => 29.066127,
                'longitude' => 31.099385,
                'nombre' => 'Bani Suwayf',
            ),
            321 => 
            array (
                'id' => 1061,
                'latitude' => 26.155061,
                'longitude' => 32.716012,
                'nombre' => 'Qina',
            ),
            322 => 
            array (
                'id' => 1062,
                'latitude' => 26.501348,
                'longitude' => 31.765136,
                'nombre' => 'Sawhaj',
            ),
            323 => 
            array (
                'id' => 1063,
                'latitude' => 30.560456,
                'longitude' => 31.007948,
                'nombre' => 'Shibin al-Kawm',
            ),
            324 => 
            array (
                'id' => 1064,
                'latitude' => 30.037814,
                'longitude' => 31.189566,
                'nombre' => 'Bulaq al-Dakrur',
            ),
            325 => 
            array (
                'id' => 1065,
                'latitude' => 30.465993,
                'longitude' => 31.184831,
                'nombre' => 'Banha',
            ),
            326 => 
            array (
                'id' => 1066,
                'latitude' => 30.103509,
                'longitude' => 31.211168,
                'nombre' => 'Warraq al-Arab',
            ),
            327 => 
            array (
                'id' => 1067,
                'latitude' => 31.10632,
                'longitude' => 30.941975,
                'nombre' => 'Kafr al-Shaykh',
            ),
            328 => 
            array (
                'id' => 1068,
                'latitude' => 27.73276,
                'longitude' => 30.83966,
                'nombre' => 'Mallawi',
            ),
            329 => 
            array (
                'id' => 1069,
                'latitude' => 30.415838,
                'longitude' => 31.562118,
                'nombre' => 'Bilbays',
            ),
            330 => 
            array (
                'id' => 1070,
                'latitude' => 30.714857,
                'longitude' => 31.260773,
                'nombre' => 'Mit Ghamr',
            ),
            331 => 
            array (
                'id' => 1071,
                'latitude' => 31.132093,
                'longitude' => 33.803276,
                'nombre' => 'al-Arish',
            ),
            332 => 
            array (
                'id' => 1072,
                'latitude' => 31.054915,
                'longitude' => 31.380243,
                'nombre' => 'Talkha',
            ),
            333 => 
            array (
                'id' => 1073,
                'latitude' => 30.17629,
                'longitude' => 31.206785,
                'nombre' => 'Qalyub',
            ),
            334 => 
            array (
                'id' => 1074,
                'latitude' => 26.341876,
                'longitude' => 31.887568,
                'nombre' => 'Jirja',
            ),
            335 => 
            array (
                'id' => 1075,
                'latitude' => 24.978548,
                'longitude' => 32.87582,
                'nombre' => 'Idfu',
            ),
            336 => 
            array (
                'id' => 1076,
                'latitude' => 34.715382,
                'longitude' => 35.95755,
                'nombre' => 'al-Hawamidiya',
            ),
            337 => 
            array (
                'id' => 1077,
                'latitude' => 31.134096,
                'longitude' => 30.646038,
                'nombre' => 'Disuq',
            ),
            338 => 
            array (
                'id' => 1078,
                'latitude' => 13.69294,
                'longitude' => -89.218191,
                'nombre' => 'San Salvador',
            ),
            339 => 
            array (
                'id' => 1079,
                'latitude' => 33.745473,
                'longitude' => -117.867653,
                'nombre' => 'Santa Ana',
            ),
            340 => 
            array (
                'id' => 1080,
                'latitude' => 13.733464,
                'longitude' => -89.213434,
                'nombre' => 'Mejicanos',
            ),
            341 => 
            array (
                'id' => 1081,
                'latitude' => 13.710045,
                'longitude' => -89.137253,
                'nombre' => 'Soyapango',
            ),
            342 => 
            array (
                'id' => 1082,
                'latitude' => 13.675784,
                'longitude' => -89.289473,
                'nombre' => 'Nueva San Salvador',
            ),
            343 => 
            array (
                'id' => 1083,
                'latitude' => 13.808674,
                'longitude' => -89.180122,
                'nombre' => 'Apopa',
            ),
            344 => 
            array (
                'id' => 1084,
                'latitude' => 15.322877,
                'longitude' => 38.925052,
                'nombre' => 'Asmara',
            ),
            345 => 
            array (
                'id' => 1085,
                'latitude' => 40.416775,
                'longitude' => -3.70379,
                'nombre' => 'Madrid',
            ),
            346 => 
            array (
                'id' => 1086,
                'latitude' => 41.385064,
                'longitude' => 2.173403,
                'nombre' => 'Barcelona',
            ),
            347 => 
            array (
                'id' => 1087,
                'latitude' => 39.469908,
                'longitude' => -0.376288,
                'nombre' => 'Valencia',
            ),
            348 => 
            array (
                'id' => 1088,
                'latitude' => 37.389092,
                'longitude' => -5.984459,
                'nombre' => 'Sevilla',
            ),
            349 => 
            array (
                'id' => 1089,
                'latitude' => 41.648823,
                'longitude' => -0.889085,
                'nombre' => 'Zaragoza',
            ),
            350 => 
            array (
                'id' => 1090,
                'latitude' => 36.721274,
                'longitude' => -4.421399,
                'nombre' => 'Málaga',
            ),
            351 => 
            array (
                'id' => 1091,
                'latitude' => 43.263013,
                'longitude' => -2.934985,
                'nombre' => 'Bilbao',
            ),
            352 => 
            array (
                'id' => 1092,
                'latitude' => 28.123546,
                'longitude' => -15.436257,
                'nombre' => 'Las Palmas de Gran Canaria',
            ),
            353 => 
            array (
                'id' => 1093,
                'latitude' => 37.99224,
                'longitude' => -1.130654,
                'nombre' => 'Murcia',
            ),
            354 => 
            array (
                'id' => 1094,
                'latitude' => 39.569601,
                'longitude' => 2.65016,
                'nombre' => 'Palma de Mallorca',
            ),
            355 => 
            array (
                'id' => 1095,
                'latitude' => 41.652251,
                'longitude' => -4.724532,
                'nombre' => 'Valladolid',
            ),
            356 => 
            array (
                'id' => 1096,
                'latitude' => 42.240599,
                'longitude' => -8.720727,
                'nombre' => 'Vigo',
            ),
            357 => 
            array (
                'id' => 1097,
                'latitude' => 38.345996,
                'longitude' => -0.490686,
                'nombre' => 'Alicante [Alacant]',
            ),
            358 => 
            array (
                'id' => 1098,
                'latitude' => 43.532202,
                'longitude' => -5.66112,
                'nombre' => 'Gijón',
            ),
            359 => 
            array (
                'id' => 1099,
                'latitude' => 41.366187,
                'longitude' => 2.116494,
                'nombre' => 'L´Hospitalet de Llobregat',
            ),
            360 => 
            array (
                'id' => 1100,
                'latitude' => 37.177336,
                'longitude' => -3.598557,
                'nombre' => 'Granada',
            ),
            361 => 
            array (
                'id' => 1101,
                'latitude' => 43.362344,
                'longitude' => -8.41154,
            'nombre' => 'A Coruña (La Coruña)',
            ),
            362 => 
            array (
                'id' => 1102,
                'latitude' => 42.859134,
                'longitude' => -2.681861,
                'nombre' => 'Vitoria-Gasteiz',
            ),
            363 => 
            array (
                'id' => 1103,
                'latitude' => 28.46363,
                'longitude' => -16.251847,
                'nombre' => 'Santa Cruz de Tenerife',
            ),
            364 => 
            array (
                'id' => 1104,
                'latitude' => 41.446988,
                'longitude' => 2.245032,
                'nombre' => 'Badalona',
            ),
            365 => 
            array (
                'id' => 1105,
                'latitude' => 43.361915,
                'longitude' => -5.849389,
                'nombre' => 'Oviedo',
            ),
            366 => 
            array (
                'id' => 1106,
                'latitude' => 40.323213,
                'longitude' => -3.867629,
                'nombre' => 'Móstoles',
            ),
            367 => 
            array (
                'id' => 1107,
                'latitude' => 38.269933,
                'longitude' => -0.712561,
                'nombre' => 'Elche [Elx]',
            ),
            368 => 
            array (
                'id' => 1108,
                'latitude' => 41.546275,
                'longitude' => 2.108613,
                'nombre' => 'Sabadell',
            ),
            369 => 
            array (
                'id' => 1109,
                'latitude' => 29.085219,
                'longitude' => -110.971392,
                'nombre' => 'Santander',
            ),
            370 => 
            array (
                'id' => 1110,
                'latitude' => 36.685006,
                'longitude' => -6.126074,
                'nombre' => 'Jerez de la Frontera',
            ),
            371 => 
            array (
                'id' => 1111,
                'latitude' => 42.812526,
                'longitude' => -1.645775,
                'nombre' => 'Pamplona [Iruña]',
            ),
            372 => 
            array (
                'id' => 1112,
                'latitude' => 43.318334,
                'longitude' => -1.981231,
                'nombre' => 'Donostia-San Sebastián',
            ),
            373 => 
            array (
                'id' => 1113,
                'latitude' => 10.391049,
                'longitude' => -75.479426,
                'nombre' => 'Cartagena',
            ),
            374 => 
            array (
                'id' => 1114,
                'latitude' => 40.331951,
                'longitude' => -3.768655,
                'nombre' => 'Leganés',
            ),
            375 => 
            array (
                'id' => 1115,
                'latitude' => 40.290206,
                'longitude' => -3.803548,
                'nombre' => 'Fuenlabrada',
            ),
            376 => 
            array (
                'id' => 1116,
                'latitude' => 36.834047,
                'longitude' => -2.463714,
                'nombre' => 'Almería',
            ),
            377 => 
            array (
                'id' => 1117,
                'latitude' => 41.563211,
                'longitude' => 2.008875,
                'nombre' => 'Terrassa',
            ),
            378 => 
            array (
                'id' => 1118,
                'latitude' => 40.481979,
                'longitude' => -3.363542,
                'nombre' => 'Alcalá de Henares',
            ),
            379 => 
            array (
                'id' => 1119,
                'latitude' => 42.343993,
                'longitude' => -3.696906,
                'nombre' => 'Burgos',
            ),
            380 => 
            array (
                'id' => 1120,
                'latitude' => 40.970104,
                'longitude' => -5.66354,
                'nombre' => 'Salamanca',
            ),
            381 => 
            array (
                'id' => 1121,
                'latitude' => 38.994349,
                'longitude' => -1.858542,
                'nombre' => 'Albacete',
            ),
            382 => 
            array (
                'id' => 1122,
                'latitude' => 40.30825,
                'longitude' => -3.732393,
                'nombre' => 'Getafe',
            ),
            383 => 
            array (
                'id' => 1123,
                'latitude' => 36.527061,
                'longitude' => -6.288596,
                'nombre' => 'Cádiz',
            ),
            384 => 
            array (
                'id' => 1124,
                'latitude' => 40.346845,
                'longitude' => -3.827844,
                'nombre' => 'Alcorcón',
            ),
            385 => 
            array (
                'id' => 1125,
                'latitude' => 37.261421,
                'longitude' => -6.944722,
                'nombre' => 'Huelva',
            ),
            386 => 
            array (
                'id' => 1126,
                'latitude' => 42.598726,
                'longitude' => -5.567096,
                'nombre' => 'León',
            ),
            387 => 
            array (
                'id' => 1127,
                'latitude' => 40.035018,
                'longitude' => -0.005066,
                'nombre' => 'Castellón de la Plana [Castell]',
            ),
            388 => 
            array (
                'id' => 1128,
                'latitude' => 38.87945,
                'longitude' => -6.970654,
                'nombre' => 'Badajoz',
            ),
            389 => 
            array (
                'id' => 1129,
                'latitude' => 28.487401,
                'longitude' => -16.315906,
                'nombre' => '[San Cristóbal de] la Laguna',
            ),
            390 => 
            array (
                'id' => 1130,
                'latitude' => 42.46272,
                'longitude' => -2.444985,
                'nombre' => 'Logroño',
            ),
            391 => 
            array (
                'id' => 1131,
                'latitude' => 41.444588,
                'longitude' => 2.210322,
                'nombre' => 'Santa Coloma de Gramenet',
            ),
            392 => 
            array (
                'id' => 1132,
                'latitude' => 41.118883,
                'longitude' => 1.244491,
                'nombre' => 'Tarragona',
            ),
            393 => 
            array (
                'id' => 1133,
                'latitude' => 41.61759,
                'longitude' => 0.620015,
            'nombre' => 'Lleida (Lérida)',
            ),
            394 => 
            array (
                'id' => 1134,
                'latitude' => 37.779594,
                'longitude' => -3.784906,
                'nombre' => 'Jaén',
            ),
            395 => 
            array (
                'id' => 1135,
                'latitude' => 42.335789,
                'longitude' => -7.863881,
            'nombre' => 'Ourense (Orense)',
            ),
            396 => 
            array (
                'id' => 1136,
                'latitude' => 41.538112,
                'longitude' => 2.444741,
                'nombre' => 'Mataró',
            ),
            397 => 
            array (
                'id' => 1137,
                'latitude' => 36.140759,
                'longitude' => -5.456233,
                'nombre' => 'Algeciras',
            ),
            398 => 
            array (
                'id' => 1138,
                'latitude' => 36.510071,
                'longitude' => -4.882447,
                'nombre' => 'Marbella',
            ),
            399 => 
            array (
                'id' => 1139,
                'latitude' => 43.296988,
                'longitude' => -2.986203,
                'nombre' => 'Barakaldo',
            ),
            400 => 
            array (
                'id' => 1140,
                'latitude' => 37.28658,
                'longitude' => -5.924239,
                'nombre' => 'Dos Hermanas',
            ),
            401 => 
            array (
                'id' => 1141,
                'latitude' => 42.878213,
                'longitude' => -8.544844,
                'nombre' => 'Santiago de Compostela',
            ),
            402 => 
            array (
                'id' => 1142,
                'latitude' => 40.456755,
                'longitude' => -3.475497,
                'nombre' => 'Torrejón de Ardoz',
            ),
            403 => 
            array (
                'id' => 1143,
                'latitude' => -33.924868,
                'longitude' => 18.424055,
                'nombre' => 'Cape Town',
            ),
            404 => 
            array (
                'id' => 1144,
                'latitude' => -26.248538,
                'longitude' => 27.854032,
                'nombre' => 'Soweto',
            ),
            405 => 
            array (
                'id' => 1145,
                'latitude' => -26.204103,
                'longitude' => 28.047305,
                'nombre' => 'Johannesburg',
            ),
            406 => 
            array (
                'id' => 1146,
                'latitude' => -33.713925,
                'longitude' => 25.520736,
                'nombre' => 'Port Elizabeth',
            ),
            407 => 
            array (
                'id' => 1147,
                'latitude' => -25.747868,
                'longitude' => 28.229271,
                'nombre' => 'Pretoria',
            ),
            408 => 
            array (
                'id' => 1148,
                'latitude' => -29.698267,
                'longitude' => 30.954029,
                'nombre' => 'Inanda',
            ),
            409 => 
            array (
                'id' => 1149,
                'latitude' => -29.85868,
                'longitude' => 31.02184,
                'nombre' => 'Durban',
            ),
            410 => 
            array (
                'id' => 1150,
                'latitude' => -26.70342,
                'longitude' => 27.807696,
                'nombre' => 'Vanderbijlpark',
            ),
            411 => 
            array (
                'id' => 1151,
                'latitude' => -26.094408,
                'longitude' => 28.229271,
                'nombre' => 'Kempton Park',
            ),
            412 => 
            array (
                'id' => 1152,
                'latitude' => -26.322394,
                'longitude' => 28.123972,
                'nombre' => 'Alberton',
            ),
            413 => 
            array (
                'id' => 1153,
                'latitude' => -29.834502,
                'longitude' => 30.838409,
                'nombre' => 'Pinetown',
            ),
            414 => 
            array (
                'id' => 1154,
                'latitude' => -29.600607,
                'longitude' => 30.379412,
                'nombre' => 'Pietermaritzburg',
            ),
            415 => 
            array (
                'id' => 1155,
                'latitude' => -26.151085,
                'longitude' => 28.36957,
                'nombre' => 'Benoni',
            ),
            416 => 
            array (
                'id' => 1156,
                'latitude' => -26.14384,
                'longitude' => 27.995186,
                'nombre' => 'Randburg',
            ),
            417 => 
            array (
                'id' => 1157,
                'latitude' => -29.96875,
                'longitude' => 30.884343,
                'nombre' => 'Umlazi',
            ),
            418 => 
            array (
                'id' => 1158,
                'latitude' => -29.085214,
                'longitude' => 26.159576,
                'nombre' => 'Bloemfontein',
            ),
            419 => 
            array (
                'id' => 1159,
                'latitude' => -26.596931,
                'longitude' => 27.901465,
                'nombre' => 'Vereeniging',
            ),
            420 => 
            array (
                'id' => 1160,
                'latitude' => -25.691076,
                'longitude' => 28.202952,
                'nombre' => 'Wonderboom',
            ),
            421 => 
            array (
                'id' => 1161,
                'latitude' => -26.120135,
                'longitude' => 27.901465,
                'nombre' => 'Roodepoort',
            ),
            422 => 
            array (
                'id' => 1162,
                'latitude' => -26.23259,
                'longitude' => 28.240967,
                'nombre' => 'Boksburg',
            ),
            423 => 
            array (
                'id' => 1163,
                'latitude' => -26.859822,
                'longitude' => 26.631751,
                'nombre' => 'Klerksdorp',
            ),
            424 => 
            array (
                'id' => 1164,
                'latitude' => -25.483403,
                'longitude' => 28.106827,
                'nombre' => 'Soshanguve',
            ),
            425 => 
            array (
                'id' => 1165,
                'latitude' => -33.029158,
                'longitude' => 27.854587,
                'nombre' => 'East London',
            ),
            426 => 
            array (
                'id' => 1166,
                'latitude' => -28.004565,
                'longitude' => 26.773216,
                'nombre' => 'Welkom',
            ),
            427 => 
            array (
                'id' => 1167,
                'latitude' => -28.728238,
                'longitude' => 24.749911,
                'nombre' => 'Kimberley',
            ),
            428 => 
            array (
                'id' => 1168,
                'latitude' => -33.768717,
                'longitude' => 25.414119,
                'nombre' => 'Uitenhage',
            ),
            429 => 
            array (
                'id' => 1169,
                'latitude' => 34.250636,
                'longitude' => -118.61481,
                'nombre' => 'Chatsworth',
            ),
            430 => 
            array (
                'id' => 1170,
                'latitude' => -32.945965,
                'longitude' => 27.725608,
                'nombre' => 'Mdantsane',
            ),
            431 => 
            array (
                'id' => 1171,
                'latitude' => -26.096322,
                'longitude' => 27.807696,
                'nombre' => 'Krugersdorp',
            ),
            432 => 
            array (
                'id' => 1172,
                'latitude' => -29.267273,
                'longitude' => 26.726071,
                'nombre' => 'Botshabelo',
            ),
            433 => 
            array (
                'id' => 1173,
                'latitude' => -26.290811,
                'longitude' => 28.322817,
                'nombre' => 'Brakpan',
            ),
            434 => 
            array (
                'id' => 1174,
                'latitude' => -25.872782,
                'longitude' => 29.255323,
                'nombre' => 'Witbank',
            ),
            435 => 
            array (
                'id' => 1175,
                'latitude' => -26.348465,
                'longitude' => 27.383681,
                'nombre' => 'Oberholzer',
            ),
            436 => 
            array (
                'id' => 1176,
                'latitude' => -26.225873,
                'longitude' => 28.170779,
                'nombre' => 'Germiston',
            ),
            437 => 
            array (
                'id' => 1177,
                'latitude' => -26.260724,
                'longitude' => 28.463038,
                'nombre' => 'Springs',
            ),
            438 => 
            array (
                'id' => 1178,
                'latitude' => -26.317808,
                'longitude' => 27.650537,
                'nombre' => 'Westonaria',
            ),
            439 => 
            array (
                'id' => 1179,
                'latitude' => -26.19915,
                'longitude' => 27.678685,
                'nombre' => 'Randfontein',
            ),
            440 => 
            array (
                'id' => 1180,
                'latitude' => -33.73423,
                'longitude' => 18.962109,
                'nombre' => 'Paarl',
            ),
            441 => 
            array (
                'id' => 1181,
                'latitude' => -26.71453,
                'longitude' => 27.097048,
                'nombre' => 'Potchefstroom',
            ),
            442 => 
            array (
                'id' => 1182,
                'latitude' => -25.654448,
                'longitude' => 27.255854,
                'nombre' => 'Rustenburg',
            ),
            443 => 
            array (
                'id' => 1183,
                'latitude' => -26.422752,
                'longitude' => 28.478612,
                'nombre' => 'Nigel',
            ),
            444 => 
            array (
                'id' => 1184,
                'latitude' => -33.988128,
                'longitude' => 22.452988,
                'nombre' => 'George',
            ),
            445 => 
            array (
                'id' => 1185,
                'latitude' => -28.559671,
                'longitude' => 29.780789,
                'nombre' => 'Ladysmith',
            ),
            446 => 
            array (
                'id' => 1186,
                'latitude' => 8.980603,
                'longitude' => 38.757761,
                'nombre' => 'Addis Abeba',
            ),
            447 => 
            array (
                'id' => 1187,
                'latitude' => 9.600875,
                'longitude' => 41.850142,
                'nombre' => 'Dire Dawa',
            ),
            448 => 
            array (
                'id' => 1188,
                'latitude' => 8.526349,
                'longitude' => 39.258329,
                'nombre' => 'Nazret',
            ),
            449 => 
            array (
                'id' => 1189,
                'latitude' => 12.603018,
                'longitude' => 37.452132,
                'nombre' => 'Gonder',
            ),
            450 => 
            array (
                'id' => 1190,
                'latitude' => 11.12704,
                'longitude' => 39.636331,
                'nombre' => 'Dese',
            ),
            451 => 
            array (
                'id' => 1191,
                'latitude' => 13.49355,
                'longitude' => 39.465738,
                'nombre' => 'Mekele',
            ),
            452 => 
            array (
                'id' => 1192,
                'latitude' => 11.574209,
                'longitude' => 37.361353,
                'nombre' => 'Bahir Dar',
            ),
            453 => 
            array (
                'id' => 1193,
                'latitude' => 44.338626,
                'longitude' => -100.800005,
                'nombre' => 'Stanley',
            ),
            454 => 
            array (
                'id' => 1194,
                'latitude' => -18.124809,
                'longitude' => 178.450079,
                'nombre' => 'Suva',
            ),
            455 => 
            array (
                'id' => 1195,
                'latitude' => 14.676041,
                'longitude' => 121.0437,
                'nombre' => 'Quezon',
            ),
            456 => 
            array (
                'id' => 1196,
                'latitude' => 14.599512,
                'longitude' => 120.98422,
                'nombre' => 'Manila',
            ),
            457 => 
            array (
                'id' => 1197,
                'latitude' => 14.756578,
                'longitude' => 121.044977,
                'nombre' => 'Kalookan',
            ),
            458 => 
            array (
                'id' => 1198,
                'latitude' => 7.190708,
                'longitude' => 125.455341,
                'nombre' => 'Davao',
            ),
            459 => 
            array (
                'id' => 1199,
                'latitude' => 10.315699,
                'longitude' => 123.885437,
                'nombre' => 'Cebu',
            ),
            460 => 
            array (
                'id' => 1200,
                'latitude' => 6.921442,
                'longitude' => 122.079027,
                'nombre' => 'Zamboanga',
            ),
            461 => 
            array (
                'id' => 1201,
                'latitude' => 14.576377,
                'longitude' => 121.08511,
                'nombre' => 'Pasig',
            ),
            462 => 
            array (
                'id' => 1202,
                'latitude' => 14.701056,
                'longitude' => 120.983023,
                'nombre' => 'Valenzuela',
            ),
            463 => 
            array (
                'id' => 1203,
                'latitude' => 14.444546,
                'longitude' => 120.993874,
                'nombre' => 'Las Piñas',
            ),
            464 => 
            array (
                'id' => 1204,
                'latitude' => 14.625483,
                'longitude' => 121.124485,
                'nombre' => 'Antipolo',
            ),
            465 => 
            array (
                'id' => 1205,
                'latitude' => 14.517618,
                'longitude' => 121.050864,
                'nombre' => 'Taguig',
            ),
            466 => 
            array (
                'id' => 1206,
                'latitude' => 8.454236,
                'longitude' => 124.631898,
                'nombre' => 'Cagayan de Oro',
            ),
            467 => 
            array (
                'id' => 1207,
                'latitude' => 14.47931,
                'longitude' => 121.019823,
                'nombre' => 'Parañaque',
            ),
            468 => 
            array (
                'id' => 1208,
                'latitude' => 14.554729,
                'longitude' => 121.024445,
                'nombre' => 'Makati',
            ),
            469 => 
            array (
                'id' => 1209,
                'latitude' => 10.640739,
                'longitude' => 122.968956,
                'nombre' => 'Bacolod',
            ),
            470 => 
            array (
                'id' => 1210,
                'latitude' => 6.116386,
                'longitude' => 125.171618,
                'nombre' => 'General Santos',
            ),
            471 => 
            array (
                'id' => 1211,
                'latitude' => 14.65073,
                'longitude' => 121.102855,
                'nombre' => 'Marikina',
            ),
            472 => 
            array (
                'id' => 1212,
                'latitude' => 14.299018,
                'longitude' => 120.95897,
                'nombre' => 'Dasmariñas',
            ),
            473 => 
            array (
                'id' => 1213,
                'latitude' => 14.408133,
                'longitude' => 121.041467,
                'nombre' => 'Muntinlupa',
            ),
            474 => 
            array (
                'id' => 1214,
                'latitude' => 10.72015,
                'longitude' => 122.562106,
                'nombre' => 'Iloilo',
            ),
            475 => 
            array (
                'id' => 1215,
                'latitude' => 14.537752,
                'longitude' => 121.001379,
                'nombre' => 'Pasay',
            ),
            476 => 
            array (
                'id' => 1216,
                'latitude' => 14.668075,
                'longitude' => 120.965845,
                'nombre' => 'Malabon',
            ),
            477 => 
            array (
                'id' => 1217,
                'latitude' => 14.820568,
                'longitude' => 121.102294,
                'nombre' => 'San José del Monte',
            ),
            478 => 
            array (
                'id' => 1218,
                'latitude' => 14.412993,
                'longitude' => 120.973679,
                'nombre' => 'Bacoor',
            ),
            479 => 
            array (
                'id' => 1219,
                'latitude' => 8.228021,
                'longitude' => 124.245242,
                'nombre' => 'Iligan',
            ),
            480 => 
            array (
                'id' => 1220,
                'latitude' => 14.187671,
                'longitude' => 121.125082,
                'nombre' => 'Calamba',
            ),
            481 => 
            array (
                'id' => 1221,
                'latitude' => 14.579444,
                'longitude' => 121.035917,
                'nombre' => 'Mandaluyong',
            ),
            482 => 
            array (
                'id' => 1222,
                'latitude' => 8.947538,
                'longitude' => 125.540623,
                'nombre' => 'Butuan',
            ),
            483 => 
            array (
                'id' => 1223,
                'latitude' => 15.144985,
                'longitude' => 120.588703,
                'nombre' => 'Angeles',
            ),
            484 => 
            array (
                'id' => 1224,
                'latitude' => 15.447035,
                'longitude' => 120.469642,
                'nombre' => 'Tarlac',
            ),
            485 => 
            array (
                'id' => 1225,
                'latitude' => 10.340262,
                'longitude' => 123.941552,
                'nombre' => 'Mandaue',
            ),
            486 => 
            array (
                'id' => 1226,
                'latitude' => 16.402333,
                'longitude' => 120.596007,
                'nombre' => 'Baguio',
            ),
            487 => 
            array (
                'id' => 1227,
                'latitude' => 13.756465,
                'longitude' => 121.058308,
                'nombre' => 'Batangas',
            ),
            488 => 
            array (
                'id' => 1228,
                'latitude' => 14.586484,
                'longitude' => 121.114876,
                'nombre' => 'Cainta',
            ),
            489 => 
            array (
                'id' => 1229,
                'latitude' => 33.736062,
                'longitude' => -118.292246,
                'nombre' => 'San Pedro',
            ),
            490 => 
            array (
                'id' => 1230,
                'latitude' => 14.67149,
                'longitude' => 120.939847,
                'nombre' => 'Navotas',
            ),
            491 => 
            array (
                'id' => 1231,
                'latitude' => 15.486505,
                'longitude' => 120.973393,
                'nombre' => 'Cabanatuan',
            ),
            492 => 
            array (
                'id' => 1232,
                'latitude' => 40.728787,
                'longitude' => -73.619235,
                'nombre' => 'Lipa',
            ),
            493 => 
            array (
                'id' => 1233,
                'latitude' => 10.266182,
                'longitude' => 123.997295,
                'nombre' => 'Lapu-Lapu',
            ),
            494 => 
            array (
                'id' => 1234,
                'latitude' => 44.953703,
                'longitude' => -93.089958,
                'nombre' => 'San Pablo',
            ),
            495 => 
            array (
                'id' => 1235,
                'latitude' => 14.303635,
                'longitude' => 121.078149,
                'nombre' => 'Biñan',
            ),
            496 => 
            array (
                'id' => 1236,
                'latitude' => 14.558555,
                'longitude' => 121.136082,
                'nombre' => 'Taytay',
            ),
            497 => 
            array (
                'id' => 1237,
                'latitude' => 37.412933,
                'longitude' => -4.496101,
                'nombre' => 'Lucena',
            ),
            498 => 
            array (
                'id' => 1238,
                'latitude' => 37.358849,
                'longitude' => -5.98698,
                'nombre' => 'Imus',
            ),
            499 => 
            array (
                'id' => 1239,
                'latitude' => 14.83863,
                'longitude' => 120.284202,
                'nombre' => 'Olongapo',
            ),
        ));
        \DB::table('geo_ciudades')->insert(array (
            0 => 
            array (
                'id' => 1240,
                'latitude' => 14.476548,
                'longitude' => 121.195743,
                'nombre' => 'Binangonan',
            ),
            1 => 
            array (
                'id' => 1241,
                'latitude' => 38.440429,
                'longitude' => -122.714055,
                'nombre' => 'Santa Rosa',
            ),
            2 => 
            array (
                'id' => 1242,
                'latitude' => -12.04334,
                'longitude' => -77.072662,
                'nombre' => 'Tagum',
            ),
            3 => 
            array (
                'id' => 1243,
                'latitude' => 11.254339,
                'longitude' => 124.961687,
                'nombre' => 'Tacloban',
            ),
            4 => 
            array (
                'id' => 1244,
                'latitude' => 14.852739,
                'longitude' => 120.816038,
                'nombre' => 'Malolos',
            ),
            5 => 
            array (
                'id' => 1245,
                'latitude' => 15.222871,
                'longitude' => 120.574439,
                'nombre' => 'Mabalacat',
            ),
            6 => 
            array (
                'id' => 1246,
                'latitude' => 7.204667,
                'longitude' => 124.231044,
                'nombre' => 'Cotabato',
            ),
            7 => 
            array (
                'id' => 1247,
                'latitude' => 14.749886,
                'longitude' => 120.973929,
                'nombre' => 'Meycauayan',
            ),
            8 => 
            array (
                'id' => 1248,
                'latitude' => 9.967216,
                'longitude' => 118.78551,
                'nombre' => 'Puerto Princesa',
            ),
            9 => 
            array (
                'id' => 1249,
                'latitude' => 43.052357,
                'longitude' => -2.331514,
                'nombre' => 'Legazpi',
            ),
            10 => 
            array (
                'id' => 1250,
                'latitude' => 14.218309,
                'longitude' => 120.972854,
                'nombre' => 'Silang',
            ),
            11 => 
            array (
                'id' => 1251,
                'latitude' => 11.038428,
                'longitude' => 124.61927,
                'nombre' => 'Ormoc',
            ),
            12 => 
            array (
                'id' => 1252,
                'latitude' => 9.659895,
                'longitude' => -68.58129,
                'nombre' => 'San Carlos',
            ),
            13 => 
            array (
                'id' => 1253,
                'latitude' => 9.913412,
                'longitude' => 122.853576,
                'nombre' => 'Kabankalan',
            ),
        ));
        
        
    }
}