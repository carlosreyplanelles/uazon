<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ciudades')->delete();
        
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Kabul',
                'fk_paises' => 1,
                'region' => 'Kabol',
                'latitude' => 34.555349,
                'longitude' => 69.207486,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Qandahar',
                'fk_paises' => 1,
                'region' => 'Qandahar',
                'latitude' => 31.628871,
                'longitude' => 65.737175,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Herat',
                'fk_paises' => 1,
                'region' => 'Herat',
                'latitude' => 34.352865,
                'longitude' => 62.204029,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Mazar-e-Sharif',
                'fk_paises' => 1,
                'region' => 'Balkh',
                'latitude' => 36.692617,
                'longitude' => 67.117951,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Amsterdam',
                'fk_paises' => 159,
                'region' => 'Noord-Holland',
                'latitude' => 52.370216,
                'longitude' => 4.895168,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Rotterdam',
                'fk_paises' => 159,
                'region' => 'Zuid-Holland',
                'latitude' => 51.92442,
                'longitude' => 4.477733,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Haag',
                'fk_paises' => 159,
                'region' => 'Zuid-Holland',
                'latitude' => 52.070498,
                'longitude' => 4.3007,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Utrecht',
                'fk_paises' => 159,
                'region' => 'Utrecht',
                'latitude' => 52.090737,
                'longitude' => 5.12142,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Eindhoven',
                'fk_paises' => 159,
                'region' => 'Noord-Brabant',
                'latitude' => 51.441642,
                'longitude' => 5.469722,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Tilburg',
                'fk_paises' => 159,
                'region' => 'Noord-Brabant',
                'latitude' => 51.585253,
                'longitude' => 5.056375,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Groningen',
                'fk_paises' => 159,
                'region' => 'Groningen',
                'latitude' => 53.219384,
                'longitude' => 6.566502,
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Breda',
                'fk_paises' => 159,
                'region' => 'Noord-Brabant',
                'latitude' => 51.571915,
                'longitude' => 4.768323,
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'Apeldoorn',
                'fk_paises' => 159,
                'region' => 'Gelderland',
                'latitude' => 52.211157,
                'longitude' => 5.969923,
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Nijmegen',
                'fk_paises' => 159,
                'region' => 'Gelderland',
                'latitude' => 51.812563,
                'longitude' => 5.837226,
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Enschede',
                'fk_paises' => 159,
                'region' => 'Overijssel',
                'latitude' => 52.221537,
                'longitude' => 6.893662,
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Haarlem',
                'fk_paises' => 159,
                'region' => 'Noord-Holland',
                'latitude' => 52.387388,
                'longitude' => 4.646219,
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Almere',
                'fk_paises' => 159,
                'region' => 'Flevoland',
                'latitude' => 52.350785,
                'longitude' => 5.264702,
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Arnhem',
                'fk_paises' => 159,
                'region' => 'Gelderland',
                'latitude' => 51.985103,
                'longitude' => 5.89873,
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Zaanstad',
                'fk_paises' => 159,
                'region' => 'Noord-Holland',
                'latitude' => 52.457966,
                'longitude' => 4.751043,
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => '´s-Hertogenbosch',
                'fk_paises' => 159,
                'region' => 'Noord-Brabant',
                'latitude' => 51.697816,
                'longitude' => 5.303675,
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Amersfoort',
                'fk_paises' => 159,
                'region' => 'Utrecht',
                'latitude' => 52.156111,
                'longitude' => 5.387827,
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'Maastricht',
                'fk_paises' => 159,
                'region' => 'Limburg',
                'latitude' => 50.851368,
                'longitude' => 5.690973,
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'Dordrecht',
                'fk_paises' => 159,
                'region' => 'Zuid-Holland',
                'latitude' => 51.813298,
                'longitude' => 4.690093,
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'Leiden',
                'fk_paises' => 159,
                'region' => 'Zuid-Holland',
                'latitude' => 52.160114,
                'longitude' => 4.49701,
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'Haarlemmermeer',
                'fk_paises' => 159,
                'region' => 'Noord-Holland',
                'latitude' => 52.300378,
                'longitude' => 4.674359,
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'Zoetermeer',
                'fk_paises' => 159,
                'region' => 'Zuid-Holland',
                'latitude' => 52.060669,
                'longitude' => 4.494025,
            ),
            26 => 
            array (
                'id' => 27,
                'nombre' => 'Emmen',
                'fk_paises' => 159,
                'region' => 'Drenthe',
                'latitude' => 52.713237,
                'longitude' => 6.955777,
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'Zwolle',
                'fk_paises' => 159,
                'region' => 'Overijssel',
                'latitude' => 52.516775,
                'longitude' => 6.083022,
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'Ede',
                'fk_paises' => 159,
                'region' => 'Gelderland',
                'latitude' => 43.260317,
                'longitude' => -2.942062,
            ),
            29 => 
            array (
                'id' => 30,
                'nombre' => 'Delft',
                'fk_paises' => 159,
                'region' => 'Zuid-Holland',
                'latitude' => 52.011577,
                'longitude' => 4.357068,
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'Heerlen',
                'fk_paises' => 159,
                'region' => 'Limburg',
                'latitude' => 50.888174,
                'longitude' => 5.979499,
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'Alkmaar',
                'fk_paises' => 159,
                'region' => 'Noord-Holland',
                'latitude' => 52.632381,
                'longitude' => 4.753375,
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => 'Willemstad',
                'fk_paises' => 7,
                'region' => 'Curaçao',
                'latitude' => 12.122422,
                'longitude' => -68.882423,
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => 'Tirana',
                'fk_paises' => 5,
                'region' => 'Tirana',
                'latitude' => 41.327546,
                'longitude' => 19.818698,
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => 'Alger',
                'fk_paises' => 62,
                'region' => 'Alger',
                'latitude' => 36.753768,
                'longitude' => 3.058756,
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => 'Oran',
                'fk_paises' => 62,
                'region' => 'Oran',
                'latitude' => 35.69707,
                'longitude' => -0.630799,
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => 'Constantine',
                'fk_paises' => 62,
                'region' => 'Constantine',
                'latitude' => 41.84116,
                'longitude' => -85.668603,
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => 'Annaba',
                'fk_paises' => 62,
                'region' => 'Annaba',
                'latitude' => 36.926458,
                'longitude' => 7.752535,
            ),
            38 => 
            array (
                'id' => 39,
                'nombre' => 'Batna',
                'fk_paises' => 62,
                'region' => 'Batna',
                'latitude' => 35.561022,
                'longitude' => 6.173912,
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => 'Sétif',
                'fk_paises' => 62,
                'region' => 'Sétif',
                'latitude' => 36.196903,
                'longitude' => 5.415087,
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => 'Sidi Bel Abbès',
                'fk_paises' => 62,
                'region' => 'Sidi Bel Abbès',
                'latitude' => 35.202225,
                'longitude' => -0.629892,
            ),
            41 => 
            array (
                'id' => 42,
                'nombre' => 'Skikda',
                'fk_paises' => 62,
                'region' => 'Skikda',
                'latitude' => 36.87152,
                'longitude' => 6.910181,
            ),
            42 => 
            array (
                'id' => 43,
                'nombre' => 'Biskra',
                'fk_paises' => 62,
                'region' => 'Biskra',
                'latitude' => 34.837035,
                'longitude' => 5.751048,
            ),
            43 => 
            array (
                'id' => 44,
            'nombre' => 'Blida (el-Boulaida)',
                'fk_paises' => 62,
                'region' => 'Blida',
                'latitude' => 36.475793,
                'longitude' => 2.829758,
            ),
            44 => 
            array (
                'id' => 45,
                'nombre' => 'Béjaïa',
                'fk_paises' => 62,
                'region' => 'Béjaïa',
                'latitude' => 36.75089,
                'longitude' => 5.056733,
            ),
            45 => 
            array (
                'id' => 46,
                'nombre' => 'Mostaganem',
                'fk_paises' => 62,
                'region' => 'Mostaganem',
                'latitude' => 36.013124,
                'longitude' => 0.140138,
            ),
            46 => 
            array (
                'id' => 47,
                'nombre' => 'Tébessa',
                'fk_paises' => 62,
                'region' => 'Tébessa',
                'latitude' => 35.414249,
                'longitude' => 8.101092,
            ),
            47 => 
            array (
                'id' => 48,
            'nombre' => 'Tlemcen (Tilimsen)',
                'fk_paises' => 62,
                'region' => 'Tlemcen',
                'latitude' => 34.888406,
                'longitude' => -1.318004,
            ),
            48 => 
            array (
                'id' => 49,
                'nombre' => 'Béchar',
                'fk_paises' => 62,
                'region' => 'Béchar',
                'latitude' => 31.616703,
                'longitude' => -2.219486,
            ),
            49 => 
            array (
                'id' => 50,
                'nombre' => 'Tiaret',
                'fk_paises' => 62,
                'region' => 'Tiaret',
                'latitude' => 35.367355,
                'longitude' => 1.322032,
            ),
            50 => 
            array (
                'id' => 51,
            'nombre' => 'Ech-Chleff (el-Asnam)',
                'fk_paises' => 62,
                'region' => 'Chlef',
                'latitude' => 0.0,
                'longitude' => 0.0,
            ),
            51 => 
            array (
                'id' => 52,
                'nombre' => 'Ghardaïa',
                'fk_paises' => 62,
                'region' => 'Ghardaïa',
                'latitude' => 32.490225,
                'longitude' => 3.673841,
            ),
            52 => 
            array (
                'id' => 53,
                'nombre' => 'Tafuna',
                'fk_paises' => 11,
                'region' => 'Tutuila',
                'latitude' => -14.331296,
                'longitude' => -170.726985,
            ),
            53 => 
            array (
                'id' => 54,
                'nombre' => 'Fagatogo',
                'fk_paises' => 11,
                'region' => 'Tutuila',
                'latitude' => -14.279568,
                'longitude' => -170.692331,
            ),
            54 => 
            array (
                'id' => 55,
                'nombre' => 'Andorra la Vella',
                'fk_paises' => 6,
                'region' => 'Andorra la Vella',
                'latitude' => 42.506317,
                'longitude' => 1.521835,
            ),
            55 => 
            array (
                'id' => 56,
                'nombre' => 'Luanda',
                'fk_paises' => 3,
                'region' => 'Luanda',
                'latitude' => -8.839988,
                'longitude' => 13.289437,
            ),
            56 => 
            array (
                'id' => 57,
                'nombre' => 'Huambo',
                'fk_paises' => 3,
                'region' => 'Huambo',
                'latitude' => -12.773976,
                'longitude' => 15.746854,
            ),
            57 => 
            array (
                'id' => 58,
                'nombre' => 'Lobito',
                'fk_paises' => 3,
                'region' => 'Benguela',
                'latitude' => -12.375729,
                'longitude' => 13.561045,
            ),
            58 => 
            array (
                'id' => 59,
                'nombre' => 'Benguela',
                'fk_paises' => 3,
                'region' => 'Benguela',
                'latitude' => -12.590516,
                'longitude' => 13.416501,
            ),
            59 => 
            array (
                'id' => 60,
                'nombre' => 'Namibe',
                'fk_paises' => 3,
                'region' => 'Namibe',
                'latitude' => -15.197832,
                'longitude' => 12.157554,
            ),
            60 => 
            array (
                'id' => 61,
                'nombre' => 'South Hill',
                'fk_paises' => 4,
                'region' => '–',
                'latitude' => 36.726532,
                'longitude' => -78.128886,
            ),
            61 => 
            array (
                'id' => 62,
                'nombre' => 'The Valley',
                'fk_paises' => 4,
                'region' => '–',
                'latitude' => 40.45065,
                'longitude' => -3.693904,
            ),
            62 => 
            array (
                'id' => 63,
                'nombre' => 'Saint John´s',
                'fk_paises' => 14,
                'region' => 'St John',
                'latitude' => 17.12741,
                'longitude' => -61.846772,
            ),
            63 => 
            array (
                'id' => 64,
                'nombre' => 'Dubai',
                'fk_paises' => 8,
                'region' => 'Dubai',
                'latitude' => 25.204849,
                'longitude' => 55.270783,
            ),
            64 => 
            array (
                'id' => 65,
                'nombre' => 'Abu Dhabi',
                'fk_paises' => 8,
                'region' => 'Abu Dhabi',
                'latitude' => 24.453884,
                'longitude' => 54.377344,
            ),
            65 => 
            array (
                'id' => 66,
                'nombre' => 'Sharja',
                'fk_paises' => 8,
                'region' => 'Sharja',
                'latitude' => 25.346255,
                'longitude' => 55.420932,
            ),
            66 => 
            array (
                'id' => 67,
                'nombre' => 'al-Ayn',
                'fk_paises' => 8,
                'region' => 'Abu Dhabi',
                'latitude' => 24.130162,
                'longitude' => 55.802312,
            ),
            67 => 
            array (
                'id' => 68,
                'nombre' => 'Ajman',
                'fk_paises' => 8,
                'region' => 'Ajman',
                'latitude' => 25.405217,
                'longitude' => 55.513643,
            ),
            68 => 
            array (
                'id' => 69,
                'nombre' => 'Buenos Aires',
                'fk_paises' => 9,
                'region' => 'Distrito Federal',
                'latitude' => -34.603684,
                'longitude' => -58.381559,
            ),
            69 => 
            array (
                'id' => 70,
                'nombre' => 'La Matanza',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.786248,
                'longitude' => -58.622966,
            ),
            70 => 
            array (
                'id' => 71,
                'nombre' => 'Córdoba',
                'fk_paises' => 9,
                'region' => 'Córdoba',
                'latitude' => 37.888175,
                'longitude' => -4.779383,
            ),
            71 => 
            array (
                'id' => 72,
                'nombre' => 'Rosario',
                'fk_paises' => 9,
                'region' => 'Santa Fé',
                'latitude' => -32.944243,
                'longitude' => -60.650539,
            ),
            72 => 
            array (
                'id' => 73,
                'nombre' => 'Lomas de Zamora',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.761182,
                'longitude' => -58.430248,
            ),
            73 => 
            array (
                'id' => 74,
                'nombre' => 'Quilmes',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.720634,
                'longitude' => -58.254605,
            ),
            74 => 
            array (
                'id' => 75,
                'nombre' => 'Almirante Brown',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.840061,
                'longitude' => -58.394511,
            ),
            75 => 
            array (
                'id' => 76,
                'nombre' => 'La Plata',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.920495,
                'longitude' => -57.953566,
            ),
            76 => 
            array (
                'id' => 77,
                'nombre' => 'Mar del Plata',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -38.005477,
                'longitude' => -57.542611,
            ),
            77 => 
            array (
                'id' => 78,
                'nombre' => 'San Miguel de Tucumán',
                'fk_paises' => 9,
                'region' => 'Tucumán',
                'latitude' => -26.808285,
                'longitude' => -65.21759,
            ),
            78 => 
            array (
                'id' => 79,
                'nombre' => 'Lanús',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.699479,
                'longitude' => -58.39208,
            ),
            79 => 
            array (
                'id' => 80,
                'nombre' => 'Merlo',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.6685,
                'longitude' => -58.728248,
            ),
            80 => 
            array (
                'id' => 81,
                'nombre' => 'General San Martín',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.560506,
                'longitude' => -58.56581,
            ),
            81 => 
            array (
                'id' => 82,
                'nombre' => 'Salta',
                'fk_paises' => 9,
                'region' => 'Salta',
                'latitude' => -24.782127,
                'longitude' => -65.423198,
            ),
            82 => 
            array (
                'id' => 83,
                'nombre' => 'Moreno',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.63401,
                'longitude' => -58.791382,
            ),
            83 => 
            array (
                'id' => 84,
                'nombre' => 'Santa Fé',
                'fk_paises' => 9,
                'region' => 'Santa Fé',
                'latitude' => 35.686975,
                'longitude' => -105.937799,
            ),
            84 => 
            array (
                'id' => 85,
                'nombre' => 'Avellaneda',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.661076,
                'longitude' => -58.366974,
            ),
            85 => 
            array (
                'id' => 86,
                'nombre' => 'Tres de Febrero',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.613848,
                'longitude' => -58.542955,
            ),
            86 => 
            array (
                'id' => 87,
                'nombre' => 'Morón',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.655861,
                'longitude' => -58.616721,
            ),
            87 => 
            array (
                'id' => 88,
                'nombre' => 'Florencio Varela',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.796581,
                'longitude' => -58.276012,
            ),
            88 => 
            array (
                'id' => 89,
                'nombre' => 'San Isidro',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.470829,
                'longitude' => -58.52861,
            ),
            89 => 
            array (
                'id' => 90,
                'nombre' => 'Tigre',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.425087,
                'longitude' => -58.579658,
            ),
            90 => 
            array (
                'id' => 91,
                'nombre' => 'Malvinas Argentinas',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.479665,
                'longitude' => -58.703033,
            ),
            91 => 
            array (
                'id' => 92,
                'nombre' => 'Vicente López',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.520947,
                'longitude' => -58.49726,
            ),
            92 => 
            array (
                'id' => 93,
                'nombre' => 'Berazategui',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.762001,
                'longitude' => -58.211296,
            ),
            93 => 
            array (
                'id' => 94,
                'nombre' => 'Corrientes',
                'fk_paises' => 9,
                'region' => 'Corrientes',
                'latitude' => -27.50485,
                'longitude' => -58.780434,
            ),
            94 => 
            array (
                'id' => 95,
                'nombre' => 'San Miguel',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => 20.914449,
                'longitude' => -100.745235,
            ),
            95 => 
            array (
                'id' => 96,
                'nombre' => 'Bahía Blanca',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -38.718318,
                'longitude' => -62.266348,
            ),
            96 => 
            array (
                'id' => 97,
                'nombre' => 'Esteban Echeverría',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.872986,
                'longitude' => -58.474916,
            ),
            97 => 
            array (
                'id' => 98,
                'nombre' => 'Resistencia',
                'fk_paises' => 9,
                'region' => 'Chaco',
                'latitude' => -27.451862,
                'longitude' => -58.985555,
            ),
            98 => 
            array (
                'id' => 99,
                'nombre' => 'José C. Paz',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.515105,
                'longitude' => -58.766246,
            ),
            99 => 
            array (
                'id' => 100,
                'nombre' => 'Paraná',
                'fk_paises' => 9,
                'region' => 'Entre Rios',
                'latitude' => -31.74132,
                'longitude' => -60.511547,
            ),
            100 => 
            array (
                'id' => 101,
                'nombre' => 'Godoy Cruz',
                'fk_paises' => 9,
                'region' => 'Mendoza',
                'latitude' => -32.913867,
                'longitude' => -68.850044,
            ),
            101 => 
            array (
                'id' => 102,
                'nombre' => 'Posadas',
                'fk_paises' => 9,
                'region' => 'Misiones',
                'latitude' => -27.362137,
                'longitude' => -55.900875,
            ),
            102 => 
            array (
                'id' => 103,
                'nombre' => 'Guaymallén',
                'fk_paises' => 9,
                'region' => 'Mendoza',
                'latitude' => -32.885004,
                'longitude' => -68.739345,
            ),
            103 => 
            array (
                'id' => 104,
                'nombre' => 'Santiago del Estero',
                'fk_paises' => 9,
                'region' => 'Santiago del Estero',
                'latitude' => -27.791039,
                'longitude' => -64.273442,
            ),
            104 => 
            array (
                'id' => 105,
                'nombre' => 'San Salvador de Jujuy',
                'fk_paises' => 9,
                'region' => 'Jujuy',
                'latitude' => -24.185786,
                'longitude' => -65.299477,
            ),
            105 => 
            array (
                'id' => 106,
                'nombre' => 'Hurlingham',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.589571,
                'longitude' => -58.62755,
            ),
            106 => 
            array (
                'id' => 107,
                'nombre' => 'Neuquén',
                'fk_paises' => 9,
                'region' => 'Neuquén',
                'latitude' => -38.94587,
                'longitude' => -68.073093,
            ),
            107 => 
            array (
                'id' => 108,
                'nombre' => 'Ituzaingó',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.657024,
                'longitude' => -58.675398,
            ),
            108 => 
            array (
                'id' => 109,
                'nombre' => 'San Fernando',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => 36.471865,
                'longitude' => -6.196595,
            ),
            109 => 
            array (
                'id' => 110,
                'nombre' => 'Formosa',
                'fk_paises' => 9,
                'region' => 'Formosa',
                'latitude' => -26.18948,
                'longitude' => -58.224281,
            ),
            110 => 
            array (
                'id' => 111,
                'nombre' => 'Las Heras',
                'fk_paises' => 9,
                'region' => 'Mendoza',
                'latitude' => -32.850297,
                'longitude' => -68.840594,
            ),
            111 => 
            array (
                'id' => 112,
                'nombre' => 'La Rioja',
                'fk_paises' => 9,
                'region' => 'La Rioja',
                'latitude' => 42.287073,
                'longitude' => -2.539603,
            ),
            112 => 
            array (
                'id' => 113,
                'nombre' => 'San Fernando del Valle de Cata',
                'fk_paises' => 9,
                'region' => 'Catamarca',
                'latitude' => 0.0,
                'longitude' => 0.0,
            ),
            113 => 
            array (
                'id' => 114,
                'nombre' => 'Río Cuarto',
                'fk_paises' => 9,
                'region' => 'Córdoba',
                'latitude' => -33.123159,
                'longitude' => -64.349344,
            ),
            114 => 
            array (
                'id' => 115,
                'nombre' => 'Comodoro Rivadavia',
                'fk_paises' => 9,
                'region' => 'Chubut',
                'latitude' => -45.865615,
                'longitude' => -67.482243,
            ),
            115 => 
            array (
                'id' => 116,
                'nombre' => 'Mendoza',
                'fk_paises' => 9,
                'region' => 'Mendoza',
                'latitude' => -32.889459,
                'longitude' => -68.845839,
            ),
            116 => 
            array (
                'id' => 117,
                'nombre' => 'San Nicolás de los Arroyos',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -33.333467,
                'longitude' => -60.211049,
            ),
            117 => 
            array (
                'id' => 118,
                'nombre' => 'San Juan',
                'fk_paises' => 9,
                'region' => 'San Juan',
                'latitude' => 37.463416,
                'longitude' => -109.759167,
            ),
            118 => 
            array (
                'id' => 119,
                'nombre' => 'Escobar',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.340252,
                'longitude' => -58.784943,
            ),
            119 => 
            array (
                'id' => 120,
                'nombre' => 'Concordia',
                'fk_paises' => 9,
                'region' => 'Entre Rios',
                'latitude' => -31.391392,
                'longitude' => -58.017434,
            ),
            120 => 
            array (
                'id' => 121,
                'nombre' => 'Pilar',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.477862,
                'longitude' => -58.909167,
            ),
            121 => 
            array (
                'id' => 122,
                'nombre' => 'San Luis',
                'fk_paises' => 9,
                'region' => 'San Luis',
                'latitude' => -33.296204,
                'longitude' => -66.329495,
            ),
            122 => 
            array (
                'id' => 123,
                'nombre' => 'Ezeiza',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -34.853733,
                'longitude' => -58.522862,
            ),
            123 => 
            array (
                'id' => 124,
                'nombre' => 'San Rafael',
                'fk_paises' => 9,
                'region' => 'Mendoza',
                'latitude' => 37.973535,
                'longitude' => -122.531087,
            ),
            124 => 
            array (
                'id' => 125,
                'nombre' => 'Tandil',
                'fk_paises' => 9,
                'region' => 'Buenos Aires',
                'latitude' => -37.3288,
                'longitude' => -59.136717,
            ),
            125 => 
            array (
                'id' => 126,
                'nombre' => 'Yerevan',
                'fk_paises' => 10,
                'region' => 'Yerevan',
                'latitude' => 40.179186,
                'longitude' => 44.499103,
            ),
            126 => 
            array (
                'id' => 127,
                'nombre' => 'Gjumri',
                'fk_paises' => 10,
                'region' => 'Širak',
                'latitude' => 40.792903,
                'longitude' => 43.846497,
            ),
            127 => 
            array (
                'id' => 128,
                'nombre' => 'Vanadzor',
                'fk_paises' => 10,
                'region' => 'Lori',
                'latitude' => 40.807399,
                'longitude' => 44.497027,
            ),
            128 => 
            array (
                'id' => 129,
                'nombre' => 'Oranjestad',
                'fk_paises' => 2,
                'region' => '–',
                'latitude' => 12.509204,
                'longitude' => -70.008631,
            ),
            129 => 
            array (
                'id' => 130,
                'nombre' => 'Sydney',
                'fk_paises' => 15,
                'region' => 'New South Wales',
                'latitude' => -33.86882,
                'longitude' => 151.209296,
            ),
            130 => 
            array (
                'id' => 131,
                'nombre' => 'Melbourne',
                'fk_paises' => 15,
                'region' => 'Victoria',
                'latitude' => -37.813628,
                'longitude' => 144.963058,
            ),
            131 => 
            array (
                'id' => 132,
                'nombre' => 'Brisbane',
                'fk_paises' => 15,
                'region' => 'Queensland',
                'latitude' => -27.469771,
                'longitude' => 153.025124,
            ),
            132 => 
            array (
                'id' => 133,
                'nombre' => 'Perth',
                'fk_paises' => 15,
                'region' => 'West Australia',
                'latitude' => -31.950527,
                'longitude' => 115.860457,
            ),
            133 => 
            array (
                'id' => 134,
                'nombre' => 'Adelaide',
                'fk_paises' => 15,
                'region' => 'South Australia',
                'latitude' => -34.928499,
                'longitude' => 138.600746,
            ),
            134 => 
            array (
                'id' => 135,
                'nombre' => 'Canberra',
                'fk_paises' => 15,
                'region' => 'Capital Region',
                'latitude' => -35.280937,
                'longitude' => 149.130009,
            ),
            135 => 
            array (
                'id' => 136,
                'nombre' => 'Gold Coast',
                'fk_paises' => 15,
                'region' => 'Queensland',
                'latitude' => -28.016667,
                'longitude' => 153.4,
            ),
            136 => 
            array (
                'id' => 137,
                'nombre' => 'Newcastle',
                'fk_paises' => 15,
                'region' => 'New South Wales',
                'latitude' => 47.538989,
                'longitude' => -122.155677,
            ),
            137 => 
            array (
                'id' => 138,
                'nombre' => 'Central Coast',
                'fk_paises' => 15,
                'region' => 'New South Wales',
                'latitude' => -33.320841,
                'longitude' => 151.233559,
            ),
            138 => 
            array (
                'id' => 139,
                'nombre' => 'Wollongong',
                'fk_paises' => 15,
                'region' => 'New South Wales',
                'latitude' => -34.427812,
                'longitude' => 150.893061,
            ),
            139 => 
            array (
                'id' => 140,
                'nombre' => 'Hobart',
                'fk_paises' => 15,
                'region' => 'Tasmania',
                'latitude' => 41.532259,
                'longitude' => -87.255035,
            ),
            140 => 
            array (
                'id' => 141,
                'nombre' => 'Geelong',
                'fk_paises' => 15,
                'region' => 'Victoria',
                'latitude' => -38.149918,
                'longitude' => 144.361719,
            ),
            141 => 
            array (
                'id' => 142,
                'nombre' => 'Townsville',
                'fk_paises' => 15,
                'region' => 'Queensland',
                'latitude' => -19.258963,
                'longitude' => 146.816948,
            ),
            142 => 
            array (
                'id' => 143,
                'nombre' => 'Cairns',
                'fk_paises' => 15,
                'region' => 'Queensland',
                'latitude' => -16.918551,
                'longitude' => 145.778055,
            ),
            143 => 
            array (
                'id' => 144,
                'nombre' => 'Baku',
                'fk_paises' => 17,
                'region' => 'Baki',
                'latitude' => 40.409262,
                'longitude' => 49.867092,
            ),
            144 => 
            array (
                'id' => 145,
                'nombre' => 'Gäncä',
                'fk_paises' => 17,
                'region' => 'Gäncä',
                'latitude' => 40.687858,
                'longitude' => 46.372331,
            ),
            145 => 
            array (
                'id' => 146,
                'nombre' => 'Sumqayit',
                'fk_paises' => 17,
                'region' => 'Sumqayit',
                'latitude' => 40.585477,
                'longitude' => 49.631741,
            ),
            146 => 
            array (
                'id' => 147,
                'nombre' => 'Mingäçevir',
                'fk_paises' => 17,
                'region' => 'Mingäçevir',
                'latitude' => 40.770256,
                'longitude' => 47.049601,
            ),
            147 => 
            array (
                'id' => 148,
                'nombre' => 'Nassau',
                'fk_paises' => 25,
                'region' => 'New Providence',
                'latitude' => 25.047984,
                'longitude' => -77.355413,
            ),
            148 => 
            array (
                'id' => 149,
                'nombre' => 'al-Manama',
                'fk_paises' => 24,
                'region' => 'al-Manama',
                'latitude' => 25.33019,
                'longitude' => 55.997133,
            ),
            149 => 
            array (
                'id' => 150,
                'nombre' => 'Dhaka',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 23.810332,
                'longitude' => 90.412518,
            ),
            150 => 
            array (
                'id' => 151,
                'nombre' => 'Chittagong',
                'fk_paises' => 22,
                'region' => 'Chittagong',
                'latitude' => 22.347537,
                'longitude' => 91.812332,
            ),
            151 => 
            array (
                'id' => 152,
                'nombre' => 'Khulna',
                'fk_paises' => 22,
                'region' => 'Khulna',
                'latitude' => 22.845641,
                'longitude' => 89.540328,
            ),
            152 => 
            array (
                'id' => 153,
                'nombre' => 'Rajshahi',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 24.363589,
                'longitude' => 88.624135,
            ),
            153 => 
            array (
                'id' => 154,
                'nombre' => 'Narayanganj',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 23.62264,
                'longitude' => 90.499797,
            ),
            154 => 
            array (
                'id' => 155,
                'nombre' => 'Rangpur',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 25.848339,
                'longitude' => 88.941387,
            ),
            155 => 
            array (
                'id' => 156,
                'nombre' => 'Mymensingh',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 24.743448,
                'longitude' => 90.398383,
            ),
            156 => 
            array (
                'id' => 157,
                'nombre' => 'Barisal',
                'fk_paises' => 22,
                'region' => 'Barisal',
                'latitude' => 22.702921,
                'longitude' => 90.346597,
            ),
            157 => 
            array (
                'id' => 158,
                'nombre' => 'Tungi',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 24.801572,
                'longitude' => 85.318791,
            ),
            158 => 
            array (
                'id' => 159,
                'nombre' => 'Jessore',
                'fk_paises' => 22,
                'region' => 'Khulna',
                'latitude' => 23.163401,
                'longitude' => 89.218166,
            ),
            159 => 
            array (
                'id' => 160,
                'nombre' => 'Comilla',
                'fk_paises' => 22,
                'region' => 'Chittagong',
                'latitude' => 23.46188,
                'longitude' => 91.186911,
            ),
            160 => 
            array (
                'id' => 161,
                'nombre' => 'Nawabganj',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 28.540537,
                'longitude' => 79.63056,
            ),
            161 => 
            array (
                'id' => 162,
                'nombre' => 'Dinajpur',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 25.627912,
                'longitude' => 88.633176,
            ),
            162 => 
            array (
                'id' => 163,
                'nombre' => 'Bogra',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 24.843559,
                'longitude' => 89.370108,
            ),
            163 => 
            array (
                'id' => 164,
                'nombre' => 'Sylhet',
                'fk_paises' => 22,
                'region' => 'Sylhet',
                'latitude' => 24.904539,
                'longitude' => 91.861101,
            ),
            164 => 
            array (
                'id' => 165,
                'nombre' => 'Brahmanbaria',
                'fk_paises' => 22,
                'region' => 'Chittagong',
                'latitude' => 23.960818,
                'longitude' => 91.111501,
            ),
            165 => 
            array (
                'id' => 166,
                'nombre' => 'Tangail',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 24.391743,
                'longitude' => 89.994826,
            ),
            166 => 
            array (
                'id' => 167,
                'nombre' => 'Jamalpur',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 25.312717,
                'longitude' => 86.490609,
            ),
            167 => 
            array (
                'id' => 168,
                'nombre' => 'Pabna',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 24.011326,
                'longitude' => 89.256224,
            ),
            168 => 
            array (
                'id' => 169,
                'nombre' => 'Naogaon',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 24.91316,
                'longitude' => 88.753095,
            ),
            169 => 
            array (
                'id' => 170,
                'nombre' => 'Sirajganj',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 24.314112,
                'longitude' => 89.569961,
            ),
            170 => 
            array (
                'id' => 171,
                'nombre' => 'Narsinghdi',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 23.919267,
                'longitude' => 90.717649,
            ),
            171 => 
            array (
                'id' => 172,
                'nombre' => 'Saidpur',
                'fk_paises' => 22,
                'region' => 'Rajshahi',
                'latitude' => 25.782954,
                'longitude' => 88.898267,
            ),
            172 => 
            array (
                'id' => 173,
                'nombre' => 'Gazipur',
                'fk_paises' => 22,
                'region' => 'Dhaka',
                'latitude' => 24.095817,
                'longitude' => 90.412518,
            ),
            173 => 
            array (
                'id' => 174,
                'nombre' => 'Bridgetown',
                'fk_paises' => 32,
                'region' => 'St Michael',
                'latitude' => 13.096851,
                'longitude' => -59.614482,
            ),
            174 => 
            array (
                'id' => 175,
                'nombre' => 'Antwerpen',
                'fk_paises' => 19,
                'region' => 'Antwerpen',
                'latitude' => 51.219448,
                'longitude' => 4.402464,
            ),
            175 => 
            array (
                'id' => 176,
                'nombre' => 'Gent',
                'fk_paises' => 19,
                'region' => 'East Flanderi',
                'latitude' => 51.054342,
                'longitude' => 3.717424,
            ),
            176 => 
            array (
                'id' => 177,
                'nombre' => 'Charleroi',
                'fk_paises' => 19,
                'region' => 'Hainaut',
                'latitude' => 50.41081,
                'longitude' => 4.444643,
            ),
            177 => 
            array (
                'id' => 178,
                'nombre' => 'Liège',
                'fk_paises' => 19,
                'region' => 'Liège',
                'latitude' => 50.632557,
                'longitude' => 5.579666,
            ),
            178 => 
            array (
                'id' => 179,
                'nombre' => 'Bruxelles [Brussel]',
                'fk_paises' => 19,
                'region' => 'Bryssel',
                'latitude' => 50.85034,
                'longitude' => 4.35171,
            ),
            179 => 
            array (
                'id' => 180,
                'nombre' => 'Brugge',
                'fk_paises' => 19,
                'region' => 'West Flanderi',
                'latitude' => 51.209348,
                'longitude' => 3.2247,
            ),
            180 => 
            array (
                'id' => 181,
                'nombre' => 'Schaerbeek',
                'fk_paises' => 19,
                'region' => 'Bryssel',
                'latitude' => 50.867416,
                'longitude' => 4.377298,
            ),
            181 => 
            array (
                'id' => 182,
                'nombre' => 'Namur',
                'fk_paises' => 19,
                'region' => 'Namur',
                'latitude' => 50.467388,
                'longitude' => 4.871985,
            ),
            182 => 
            array (
                'id' => 183,
                'nombre' => 'Mons',
                'fk_paises' => 19,
                'region' => 'Hainaut',
                'latitude' => 50.454241,
                'longitude' => 3.956659,
            ),
            183 => 
            array (
                'id' => 184,
                'nombre' => 'Belize City',
                'fk_paises' => 28,
                'region' => 'Belize City',
                'latitude' => 17.504566,
                'longitude' => -88.196213,
            ),
            184 => 
            array (
                'id' => 185,
                'nombre' => 'Belmopan',
                'fk_paises' => 28,
                'region' => 'Cayo',
                'latitude' => 17.251011,
                'longitude' => -88.75902,
            ),
            185 => 
            array (
                'id' => 186,
                'nombre' => 'Cotonou',
                'fk_paises' => 20,
                'region' => 'Atlantique',
                'latitude' => 6.370293,
                'longitude' => 2.391236,
            ),
            186 => 
            array (
                'id' => 187,
                'nombre' => 'Porto-Novo',
                'fk_paises' => 20,
                'region' => 'Ouémé',
                'latitude' => 6.496857,
                'longitude' => 2.628852,
            ),
            187 => 
            array (
                'id' => 188,
                'nombre' => 'Djougou',
                'fk_paises' => 20,
                'region' => 'Atacora',
                'latitude' => 9.708092,
                'longitude' => 1.666352,
            ),
            188 => 
            array (
                'id' => 189,
                'nombre' => 'Parakou',
                'fk_paises' => 20,
                'region' => 'Borgou',
                'latitude' => 9.346682,
                'longitude' => 2.609004,
            ),
            189 => 
            array (
                'id' => 190,
                'nombre' => 'Saint George',
                'fk_paises' => 29,
                'region' => 'Saint George´s',
                'latitude' => 37.096528,
                'longitude' => -113.568416,
            ),
            190 => 
            array (
                'id' => 191,
                'nombre' => 'Hamilton',
                'fk_paises' => 29,
                'region' => 'Hamilton',
                'latitude' => 39.399501,
                'longitude' => -84.561335,
            ),
            191 => 
            array (
                'id' => 192,
                'nombre' => 'Thimphu',
                'fk_paises' => 34,
                'region' => 'Thimphu',
                'latitude' => 27.472792,
                'longitude' => 89.639286,
            ),
            192 => 
            array (
                'id' => 193,
                'nombre' => 'Santa Cruz de la Sierra',
                'fk_paises' => 30,
                'region' => 'Santa Cruz',
                'latitude' => -17.814582,
                'longitude' => -63.156085,
            ),
            193 => 
            array (
                'id' => 194,
                'nombre' => 'La Paz',
                'fk_paises' => 30,
                'region' => 'La Paz',
                'latitude' => -16.489689,
                'longitude' => -68.119294,
            ),
            194 => 
            array (
                'id' => 195,
                'nombre' => 'El Alto',
                'fk_paises' => 30,
                'region' => 'La Paz',
                'latitude' => -16.500094,
                'longitude' => -68.214686,
            ),
            195 => 
            array (
                'id' => 196,
                'nombre' => 'Cochabamba',
                'fk_paises' => 30,
                'region' => 'Cochabamba',
                'latitude' => -17.413977,
                'longitude' => -66.165322,
            ),
            196 => 
            array (
                'id' => 197,
                'nombre' => 'Oruro',
                'fk_paises' => 30,
                'region' => 'Oruro',
                'latitude' => -17.964677,
                'longitude' => -67.106035,
            ),
            197 => 
            array (
                'id' => 198,
                'nombre' => 'Sucre',
                'fk_paises' => 30,
                'region' => 'Chuquisaca',
                'latitude' => -19.019585,
                'longitude' => -65.261961,
            ),
            198 => 
            array (
                'id' => 199,
                'nombre' => 'Potosí',
                'fk_paises' => 30,
                'region' => 'Potosí',
                'latitude' => -19.57228,
                'longitude' => -65.755006,
            ),
            199 => 
            array (
                'id' => 200,
                'nombre' => 'Tarija',
                'fk_paises' => 30,
                'region' => 'Tarija',
                'latitude' => -21.521382,
                'longitude' => -64.728095,
            ),
            200 => 
            array (
                'id' => 201,
                'nombre' => 'Sarajevo',
                'fk_paises' => 26,
                'region' => 'Federaatio',
                'latitude' => 43.856259,
                'longitude' => 18.413076,
            ),
            201 => 
            array (
                'id' => 202,
                'nombre' => 'Banja Luka',
                'fk_paises' => 26,
                'region' => 'Republika Srpska',
                'latitude' => 44.772181,
                'longitude' => 17191.0,
            ),
            202 => 
            array (
                'id' => 203,
                'nombre' => 'Zenica',
                'fk_paises' => 26,
                'region' => 'Federaatio',
                'latitude' => 44.203439,
                'longitude' => 17.907743,
            ),
            203 => 
            array (
                'id' => 204,
                'nombre' => 'Gaborone',
                'fk_paises' => 36,
                'region' => 'Gaborone',
                'latitude' => -24.628208,
                'longitude' => 25.923147,
            ),
            204 => 
            array (
                'id' => 205,
                'nombre' => 'Francistown',
                'fk_paises' => 36,
                'region' => 'Francistown',
                'latitude' => -21.1661,
                'longitude' => 27.51436,
            ),
            205 => 
            array (
                'id' => 206,
                'nombre' => 'São Paulo',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.55052,
                'longitude' => -46.633309,
            ),
            206 => 
            array (
                'id' => 207,
                'nombre' => 'Rio de Janeiro',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.906847,
                'longitude' => -43.172896,
            ),
            207 => 
            array (
                'id' => 208,
                'nombre' => 'Salvador',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => 13.794185,
                'longitude' => -88.89653,
            ),
            208 => 
            array (
                'id' => 209,
                'nombre' => 'Belo Horizonte',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.924502,
                'longitude' => -43.935238,
            ),
            209 => 
            array (
                'id' => 210,
                'nombre' => 'Fortaleza',
                'fk_paises' => 31,
                'region' => 'Ceará',
                'latitude' => -3.731862,
                'longitude' => -38.52667,
            ),
            210 => 
            array (
                'id' => 211,
                'nombre' => 'Brasília',
                'fk_paises' => 31,
                'region' => 'Distrito Federal',
                'latitude' => -15.794229,
                'longitude' => -47.882166,
            ),
            211 => 
            array (
                'id' => 212,
                'nombre' => 'Curitiba',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.424429,
                'longitude' => -49.265382,
            ),
            212 => 
            array (
                'id' => 213,
                'nombre' => 'Recife',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.047562,
                'longitude' => -34.876964,
            ),
            213 => 
            array (
                'id' => 214,
                'nombre' => 'Porto Alegre',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -30.034647,
                'longitude' => -51.217658,
            ),
            214 => 
            array (
                'id' => 215,
                'nombre' => 'Manaus',
                'fk_paises' => 31,
                'region' => 'Amazonas',
                'latitude' => -3.119027,
                'longitude' => -60.021731,
            ),
            215 => 
            array (
                'id' => 216,
                'nombre' => 'Belém',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -1.455779,
                'longitude' => -48.490197,
            ),
            216 => 
            array (
                'id' => 217,
                'nombre' => 'Guarulhos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.454315,
                'longitude' => -46.533652,
            ),
            217 => 
            array (
                'id' => 218,
                'nombre' => 'Goiânia',
                'fk_paises' => 31,
                'region' => 'Goiás',
                'latitude' => -16.686882,
                'longitude' => -49.264789,
            ),
            218 => 
            array (
                'id' => 219,
                'nombre' => 'Campinas',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.909883,
                'longitude' => -47.062581,
            ),
            219 => 
            array (
                'id' => 220,
                'nombre' => 'São Gonçalo',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.827288,
                'longitude' => -43.063765,
            ),
            220 => 
            array (
                'id' => 221,
                'nombre' => 'Nova Iguaçu',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.756132,
                'longitude' => -43.460742,
            ),
            221 => 
            array (
                'id' => 222,
                'nombre' => 'São Luís',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -2.53911,
                'longitude' => -44.282905,
            ),
            222 => 
            array (
                'id' => 223,
                'nombre' => 'Maceió',
                'fk_paises' => 31,
                'region' => 'Alagoas',
                'latitude' => -9.649849,
                'longitude' => -35.708949,
            ),
            223 => 
            array (
                'id' => 224,
                'nombre' => 'Duque de Caxias',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.786298,
                'longitude' => -43.305311,
            ),
            224 => 
            array (
                'id' => 225,
                'nombre' => 'São Bernardo do Campo',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.689843,
                'longitude' => -46.564848,
            ),
            225 => 
            array (
                'id' => 226,
                'nombre' => 'Teresina',
                'fk_paises' => 31,
                'region' => 'Piauí',
                'latitude' => -5.092011,
                'longitude' => -42.80376,
            ),
            226 => 
            array (
                'id' => 227,
                'nombre' => 'Natal',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Norte',
                'latitude' => -5.779257,
                'longitude' => -35.200916,
            ),
            227 => 
            array (
                'id' => 228,
                'nombre' => 'Osasco',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.532887,
                'longitude' => -46.791998,
            ),
            228 => 
            array (
                'id' => 229,
                'nombre' => 'Campo Grande',
                'fk_paises' => 31,
                'region' => 'Mato Grosso do Sul',
                'latitude' => -20.46971,
                'longitude' => -54.620121,
            ),
            229 => 
            array (
                'id' => 230,
                'nombre' => 'Santo André',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.674223,
                'longitude' => -46.5436,
            ),
            230 => 
            array (
                'id' => 231,
                'nombre' => 'João Pessoa',
                'fk_paises' => 31,
                'region' => 'Paraíba',
                'latitude' => -7.119496,
                'longitude' => -34.845012,
            ),
            231 => 
            array (
                'id' => 232,
                'nombre' => 'Jaboatão dos Guararapes',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.169381,
                'longitude' => -34.937059,
            ),
            232 => 
            array (
                'id' => 233,
                'nombre' => 'Contagem',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.916151,
                'longitude' => -44.080876,
            ),
            233 => 
            array (
                'id' => 234,
                'nombre' => 'São José dos Campos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.223701,
                'longitude' => -45.900907,
            ),
            234 => 
            array (
                'id' => 235,
                'nombre' => 'Uberlândia',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -18.914608,
                'longitude' => -48.27538,
            ),
            235 => 
            array (
                'id' => 236,
                'nombre' => 'Feira de Santana',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -12.259727,
                'longitude' => -38.964661,
            ),
            236 => 
            array (
                'id' => 237,
                'nombre' => 'Ribeirão Preto',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -21.170401,
                'longitude' => -47.810324,
            ),
            237 => 
            array (
                'id' => 238,
                'nombre' => 'Sorocaba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.501534,
                'longitude' => -47.452594,
            ),
            238 => 
            array (
                'id' => 239,
                'nombre' => 'Niterói',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.885897,
                'longitude' => -43.115221,
            ),
            239 => 
            array (
                'id' => 240,
                'nombre' => 'Cuiabá',
                'fk_paises' => 31,
                'region' => 'Mato Grosso',
                'latitude' => -15.601411,
                'longitude' => -56.097892,
            ),
            240 => 
            array (
                'id' => 241,
                'nombre' => 'Juiz de Fora',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -21.762424,
                'longitude' => -43.3434,
            ),
            241 => 
            array (
                'id' => 242,
                'nombre' => 'Aracaju',
                'fk_paises' => 31,
                'region' => 'Sergipe',
                'latitude' => -10.947247,
                'longitude' => -37.073082,
            ),
            242 => 
            array (
                'id' => 243,
                'nombre' => 'São João de Meriti',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.790968,
                'longitude' => -43.369805,
            ),
            243 => 
            array (
                'id' => 244,
                'nombre' => 'Londrina',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -23.304452,
                'longitude' => -51.169582,
            ),
            244 => 
            array (
                'id' => 245,
                'nombre' => 'Joinville',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -26.304408,
                'longitude' => -48.846383,
            ),
            245 => 
            array (
                'id' => 246,
                'nombre' => 'Belford Roxo',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.764539,
                'longitude' => -43.399626,
            ),
            246 => 
            array (
                'id' => 247,
                'nombre' => 'Santos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.967882,
                'longitude' => -46.328887,
            ),
            247 => 
            array (
                'id' => 248,
                'nombre' => 'Ananindeua',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -1.364272,
                'longitude' => -48.374721,
            ),
            248 => 
            array (
                'id' => 249,
                'nombre' => 'Campos dos Goytacazes',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -21.76269,
                'longitude' => -41.318488,
            ),
            249 => 
            array (
                'id' => 250,
                'nombre' => 'Mauá',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.668163,
                'longitude' => -46.461709,
            ),
            250 => 
            array (
                'id' => 251,
                'nombre' => 'Carapicuíba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.523962,
                'longitude' => -46.841124,
            ),
            251 => 
            array (
                'id' => 252,
                'nombre' => 'Olinda',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -7.990806,
                'longitude' => -34.841629,
            ),
            252 => 
            array (
                'id' => 253,
                'nombre' => 'Campina Grande',
                'fk_paises' => 31,
                'region' => 'Paraíba',
                'latitude' => -7.229075,
                'longitude' => -35.880834,
            ),
            253 => 
            array (
                'id' => 254,
                'nombre' => 'São José do Rio Preto',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -20.811761,
                'longitude' => -49.376227,
            ),
            254 => 
            array (
                'id' => 255,
                'nombre' => 'Caxias do Sul',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.163403,
                'longitude' => -51.179668,
            ),
            255 => 
            array (
                'id' => 256,
                'nombre' => 'Moji das Cruzes',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.521338,
                'longitude' => -46.185867,
            ),
            256 => 
            array (
                'id' => 257,
                'nombre' => 'Diadema',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.68184,
                'longitude' => -46.620967,
            ),
            257 => 
            array (
                'id' => 258,
                'nombre' => 'Aparecida de Goiânia',
                'fk_paises' => 31,
                'region' => 'Goiás',
                'latitude' => -16.820257,
                'longitude' => -49.247304,
            ),
            258 => 
            array (
                'id' => 259,
                'nombre' => 'Piracicaba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.734286,
                'longitude' => -47.648064,
            ),
            259 => 
            array (
                'id' => 260,
                'nombre' => 'Cariacica',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => -20.264276,
                'longitude' => -40.420365,
            ),
            260 => 
            array (
                'id' => 261,
                'nombre' => 'Vila Velha',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => -20.347782,
                'longitude' => -40.294953,
            ),
            261 => 
            array (
                'id' => 262,
                'nombre' => 'Pelotas',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -31.765399,
                'longitude' => -52.337589,
            ),
            262 => 
            array (
                'id' => 263,
                'nombre' => 'Bauru',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.314459,
                'longitude' => -49.058695,
            ),
            263 => 
            array (
                'id' => 264,
                'nombre' => 'Porto Velho',
                'fk_paises' => 31,
                'region' => 'Rondônia',
                'latitude' => -8.76116,
                'longitude' => -63.90043,
            ),
            264 => 
            array (
                'id' => 265,
                'nombre' => 'Serra',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => 32.825762,
                'longitude' => -117.104945,
            ),
            265 => 
            array (
                'id' => 266,
                'nombre' => 'Betim',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.967308,
                'longitude' => -44.20119,
            ),
            266 => 
            array (
                'id' => 267,
                'nombre' => 'Jundíaí',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.185708,
                'longitude' => -46.897806,
            ),
            267 => 
            array (
                'id' => 268,
                'nombre' => 'Canoas',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.913258,
                'longitude' => -51.186192,
            ),
            268 => 
            array (
                'id' => 269,
                'nombre' => 'Franca',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -20.539329,
                'longitude' => -47.401344,
            ),
            269 => 
            array (
                'id' => 270,
                'nombre' => 'São Vicente',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => 16.828007,
                'longitude' => -24.975418,
            ),
            270 => 
            array (
                'id' => 271,
                'nombre' => 'Maringá',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -23.420999,
                'longitude' => -51.933056,
            ),
            271 => 
            array (
                'id' => 272,
                'nombre' => 'Montes Claros',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -16.728641,
                'longitude' => -43.858214,
            ),
            272 => 
            array (
                'id' => 273,
                'nombre' => 'Anápolis',
                'fk_paises' => 31,
                'region' => 'Goiás',
                'latitude' => -16.328546,
                'longitude' => -48.953403,
            ),
            273 => 
            array (
                'id' => 274,
                'nombre' => 'Florianópolis',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -27.59487,
                'longitude' => -48.548219,
            ),
            274 => 
            array (
                'id' => 275,
                'nombre' => 'Petrópolis',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.511264,
                'longitude' => -43.177914,
            ),
            275 => 
            array (
                'id' => 276,
                'nombre' => 'Itaquaquecetuba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.484946,
                'longitude' => -46.349483,
            ),
            276 => 
            array (
                'id' => 277,
                'nombre' => 'Vitória',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => -20.297618,
                'longitude' => -40.295777,
            ),
            277 => 
            array (
                'id' => 278,
                'nombre' => 'Ponta Grossa',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.099362,
                'longitude' => -50.158451,
            ),
            278 => 
            array (
                'id' => 279,
                'nombre' => 'Rio Branco',
                'fk_paises' => 31,
                'region' => 'Acre',
                'latitude' => -9.975384,
                'longitude' => -67.824918,
            ),
            279 => 
            array (
                'id' => 280,
                'nombre' => 'Foz do Iguaçu',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.516336,
                'longitude' => -54.585376,
            ),
            280 => 
            array (
                'id' => 281,
                'nombre' => 'Macapá',
                'fk_paises' => 31,
                'region' => 'Amapá',
                'latitude' => 0.035574,
                'longitude' => -51.070535,
            ),
            281 => 
            array (
                'id' => 282,
                'nombre' => 'Ilhéus',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -14.793505,
                'longitude' => -39.04638,
            ),
            282 => 
            array (
                'id' => 283,
                'nombre' => 'Vitória da Conquista',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -14.861924,
                'longitude' => -40.844535,
            ),
            283 => 
            array (
                'id' => 284,
                'nombre' => 'Uberaba',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.747375,
                'longitude' => -47.939162,
            ),
            284 => 
            array (
                'id' => 285,
                'nombre' => 'Paulista',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -7.918455,
                'longitude' => -34.820956,
            ),
            285 => 
            array (
                'id' => 286,
                'nombre' => 'Limeira',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.58365,
                'longitude' => -47.409833,
            ),
            286 => 
            array (
                'id' => 287,
                'nombre' => 'Blumenau',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -26.916579,
                'longitude' => -49.071733,
            ),
            287 => 
            array (
                'id' => 288,
                'nombre' => 'Caruaru',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.284964,
                'longitude' => -35.970187,
            ),
            288 => 
            array (
                'id' => 289,
                'nombre' => 'Santarém',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => 39.236669,
                'longitude' => -8.685994,
            ),
            289 => 
            array (
                'id' => 290,
                'nombre' => 'Volta Redonda',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.50776,
                'longitude' => -44.09473,
            ),
            290 => 
            array (
                'id' => 291,
                'nombre' => 'Novo Hamburgo',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.691899,
                'longitude' => -51.12557,
            ),
            291 => 
            array (
                'id' => 292,
                'nombre' => 'Caucaia',
                'fk_paises' => 31,
                'region' => 'Ceará',
                'latitude' => -3.682405,
                'longitude' => -38.91323,
            ),
            292 => 
            array (
                'id' => 293,
                'nombre' => 'Santa Maria',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => 34.953034,
                'longitude' => -120.435719,
            ),
            293 => 
            array (
                'id' => 294,
                'nombre' => 'Cascavel',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -24.957777,
                'longitude' => -53.459511,
            ),
            294 => 
            array (
                'id' => 295,
                'nombre' => 'Guarujá',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.99491,
                'longitude' => -46.256876,
            ),
            295 => 
            array (
                'id' => 296,
                'nombre' => 'Ribeirão das Neves',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.761902,
                'longitude' => -44.085357,
            ),
            296 => 
            array (
                'id' => 297,
                'nombre' => 'Governador Valadares',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -18.854932,
                'longitude' => -41.955923,
            ),
            297 => 
            array (
                'id' => 298,
                'nombre' => 'Taubaté',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.020456,
                'longitude' => -45.556355,
            ),
            298 => 
            array (
                'id' => 299,
                'nombre' => 'Imperatriz',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -5.520565,
                'longitude' => -47.471846,
            ),
            299 => 
            array (
                'id' => 300,
                'nombre' => 'Gravataí',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.942289,
                'longitude' => -50.990788,
            ),
            300 => 
            array (
                'id' => 301,
                'nombre' => 'Embu',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.651508,
                'longitude' => -46.852186,
            ),
            301 => 
            array (
                'id' => 302,
                'nombre' => 'Mossoró',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Norte',
                'latitude' => -5.184128,
                'longitude' => -37.34778,
            ),
            302 => 
            array (
                'id' => 303,
                'nombre' => 'Várzea Grande',
                'fk_paises' => 31,
                'region' => 'Mato Grosso',
                'latitude' => -15.646248,
                'longitude' => -56.132713,
            ),
            303 => 
            array (
                'id' => 304,
                'nombre' => 'Petrolina',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -9.389083,
                'longitude' => -40.503096,
            ),
            304 => 
            array (
                'id' => 305,
                'nombre' => 'Barueri',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.511369,
                'longitude' => -46.872942,
            ),
            305 => 
            array (
                'id' => 306,
                'nombre' => 'Viamão',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -30.072216,
                'longitude' => -51.096957,
            ),
            306 => 
            array (
                'id' => 307,
                'nombre' => 'Ipatinga',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.470762,
                'longitude' => -42.548013,
            ),
            307 => 
            array (
                'id' => 308,
                'nombre' => 'Juazeiro',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -9.416798,
                'longitude' => -40.503516,
            ),
            308 => 
            array (
                'id' => 309,
                'nombre' => 'Juazeiro do Norte',
                'fk_paises' => 31,
                'region' => 'Ceará',
                'latitude' => -7.228473,
                'longitude' => -39.312123,
            ),
            309 => 
            array (
                'id' => 310,
                'nombre' => 'Taboão da Serra',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.622876,
                'longitude' => -46.781665,
            ),
            310 => 
            array (
                'id' => 311,
                'nombre' => 'São José dos Pinhais',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.531835,
                'longitude' => -49.203572,
            ),
            311 => 
            array (
                'id' => 312,
                'nombre' => 'Magé',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.656602,
                'longitude' => -43.039834,
            ),
            312 => 
            array (
                'id' => 313,
                'nombre' => 'Suzano',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.545321,
                'longitude' => -46.311625,
            ),
            313 => 
            array (
                'id' => 314,
                'nombre' => 'São Leopoldo',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.754994,
                'longitude' => -51.150283,
            ),
            314 => 
            array (
                'id' => 315,
                'nombre' => 'Marília',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.2176,
                'longitude' => -49.95051,
            ),
            315 => 
            array (
                'id' => 316,
                'nombre' => 'São Carlos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.008708,
                'longitude' => -47.890926,
            ),
            316 => 
            array (
                'id' => 317,
                'nombre' => 'Sumaré',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.820903,
                'longitude' => -47.273273,
            ),
            317 => 
            array (
                'id' => 318,
                'nombre' => 'Presidente Prudente',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.121114,
                'longitude' => -51.393025,
            ),
            318 => 
            array (
                'id' => 319,
                'nombre' => 'Divinópolis',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -20.145126,
                'longitude' => -44.891645,
            ),
            319 => 
            array (
                'id' => 320,
                'nombre' => 'Sete Lagoas',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.45738,
                'longitude' => -44.241669,
            ),
            320 => 
            array (
                'id' => 321,
                'nombre' => 'Rio Grande',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -53.786037,
                'longitude' => -67.700224,
            ),
            321 => 
            array (
                'id' => 322,
                'nombre' => 'Itabuna',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -14.788033,
                'longitude' => -39.278418,
            ),
            322 => 
            array (
                'id' => 323,
                'nombre' => 'Jequié',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -13.859059,
                'longitude' => -40.083776,
            ),
            323 => 
            array (
                'id' => 324,
                'nombre' => 'Arapiraca',
                'fk_paises' => 31,
                'region' => 'Alagoas',
                'latitude' => -9.755588,
                'longitude' => -36.663958,
            ),
            324 => 
            array (
                'id' => 325,
                'nombre' => 'Colombo',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => 6.927079,
                'longitude' => 79.861243,
            ),
            325 => 
            array (
                'id' => 326,
                'nombre' => 'Americana',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => 34.14441,
                'longitude' => -118.256481,
            ),
            326 => 
            array (
                'id' => 327,
                'nombre' => 'Alvorada',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.991901,
                'longitude' => -51.081368,
            ),
            327 => 
            array (
                'id' => 328,
                'nombre' => 'Araraquara',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -21.784827,
                'longitude' => -48.178649,
            ),
            328 => 
            array (
                'id' => 329,
                'nombre' => 'Itaboraí',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.757002,
                'longitude' => -42.864317,
            ),
            329 => 
            array (
                'id' => 330,
                'nombre' => 'Santa Bárbara d´Oeste',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.755742,
                'longitude' => -47.414759,
            ),
            330 => 
            array (
                'id' => 331,
                'nombre' => 'Nova Friburgo',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.288726,
                'longitude' => -42.53408,
            ),
            331 => 
            array (
                'id' => 332,
                'nombre' => 'Jacareí',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.298783,
                'longitude' => -45.966254,
            ),
            332 => 
            array (
                'id' => 333,
                'nombre' => 'Araçatuba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -21.202854,
                'longitude' => -50.453679,
            ),
            333 => 
            array (
                'id' => 334,
                'nombre' => 'Barra Mansa',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.540852,
                'longitude' => -44.17726,
            ),
            334 => 
            array (
                'id' => 335,
                'nombre' => 'Praia Grande',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -24.008842,
                'longitude' => -46.412462,
            ),
            335 => 
            array (
                'id' => 336,
                'nombre' => 'Marabá',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -5.381133,
                'longitude' => -49.133105,
            ),
            336 => 
            array (
                'id' => 337,
                'nombre' => 'Criciúma',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -28.67277,
                'longitude' => -49.373377,
            ),
            337 => 
            array (
                'id' => 338,
                'nombre' => 'Boa Vista',
                'fk_paises' => 31,
                'region' => 'Roraima',
                'latitude' => 2.82351,
                'longitude' => -60.675833,
            ),
            338 => 
            array (
                'id' => 339,
                'nombre' => 'Passo Fundo',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -28.258781,
                'longitude' => -52.416004,
            ),
            339 => 
            array (
                'id' => 340,
                'nombre' => 'Dourados',
                'fk_paises' => 31,
                'region' => 'Mato Grosso do Sul',
                'latitude' => -22.227203,
                'longitude' => -54.829126,
            ),
            340 => 
            array (
                'id' => 341,
                'nombre' => 'Santa Luzia',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => 13.909444,
                'longitude' => -60.978893,
            ),
            341 => 
            array (
                'id' => 342,
                'nombre' => 'Rio Claro',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => 5.58998,
                'longitude' => -75.86721,
            ),
            342 => 
            array (
                'id' => 343,
                'nombre' => 'Maracanaú',
                'fk_paises' => 31,
                'region' => 'Ceará',
                'latitude' => -3.867413,
                'longitude' => -38.626111,
            ),
            343 => 
            array (
                'id' => 344,
                'nombre' => 'Guarapuava',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.390721,
                'longitude' => -51.46281,
            ),
            344 => 
            array (
                'id' => 345,
                'nombre' => 'Rondonópolis',
                'fk_paises' => 31,
                'region' => 'Mato Grosso',
                'latitude' => -16.465453,
                'longitude' => -54.638737,
            ),
            345 => 
            array (
                'id' => 346,
                'nombre' => 'São José',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -23.223701,
                'longitude' => -45.900907,
            ),
            346 => 
            array (
                'id' => 347,
                'nombre' => 'Cachoeiro de Itapemirim',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => -20.846705,
                'longitude' => -41.12022,
            ),
            347 => 
            array (
                'id' => 348,
                'nombre' => 'Nilópolis',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.809816,
                'longitude' => -43.41941,
            ),
            348 => 
            array (
                'id' => 349,
                'nombre' => 'Itapevi',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.549265,
                'longitude' => -46.933196,
            ),
            349 => 
            array (
                'id' => 350,
                'nombre' => 'Cabo de Santo Agostinho',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.27944,
                'longitude' => -35.030422,
            ),
            350 => 
            array (
                'id' => 351,
                'nombre' => 'Camaçari',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -12.697178,
                'longitude' => -38.333198,
            ),
            351 => 
            array (
                'id' => 352,
                'nombre' => 'Sobral',
                'fk_paises' => 31,
                'region' => 'Ceará',
                'latitude' => -3.689511,
                'longitude' => -40.34857,
            ),
            352 => 
            array (
                'id' => 353,
                'nombre' => 'Itajaí',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -26.910705,
                'longitude' => -48.670913,
            ),
            353 => 
            array (
                'id' => 354,
                'nombre' => 'Chapecó',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -27.100934,
                'longitude' => -52.615699,
            ),
            354 => 
            array (
                'id' => 355,
                'nombre' => 'Cotia',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.602668,
                'longitude' => -46.919469,
            ),
            355 => 
            array (
                'id' => 356,
                'nombre' => 'Lages',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -27.815714,
                'longitude' => -50.326396,
            ),
            356 => 
            array (
                'id' => 357,
                'nombre' => 'Ferraz de Vasconcelos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.528958,
                'longitude' => -46.363582,
            ),
            357 => 
            array (
                'id' => 358,
                'nombre' => 'Indaiatuba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.08865,
                'longitude' => -47.208953,
            ),
            358 => 
            array (
                'id' => 359,
                'nombre' => 'Hortolândia',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.853341,
                'longitude' => -47.214708,
            ),
            359 => 
            array (
                'id' => 360,
                'nombre' => 'Caxias',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -29.163403,
                'longitude' => -51.179668,
            ),
            360 => 
            array (
                'id' => 361,
                'nombre' => 'São Caetano do Sul',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.623362,
                'longitude' => -46.555243,
            ),
            361 => 
            array (
                'id' => 362,
                'nombre' => 'Itu',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => 37.388805,
                'longitude' => -121.930851,
            ),
            362 => 
            array (
                'id' => 363,
                'nombre' => 'Nossa Senhora do Socorro',
                'fk_paises' => 31,
                'region' => 'Sergipe',
                'latitude' => -10.853164,
                'longitude' => -37.126979,
            ),
            363 => 
            array (
                'id' => 364,
                'nombre' => 'Parnaíba',
                'fk_paises' => 31,
                'region' => 'Piauí',
                'latitude' => -2.905545,
                'longitude' => -41.773363,
            ),
            364 => 
            array (
                'id' => 365,
                'nombre' => 'Poços de Caldas',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -21.785379,
                'longitude' => -46.56193,
            ),
            365 => 
            array (
                'id' => 366,
                'nombre' => 'Teresópolis',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.416956,
                'longitude' => -42.975619,
            ),
            366 => 
            array (
                'id' => 367,
                'nombre' => 'Barreiras',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -12.147748,
                'longitude' => -44.995347,
            ),
            367 => 
            array (
                'id' => 368,
                'nombre' => 'Castanhal',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -1.298329,
                'longitude' => -47.917162,
            ),
            368 => 
            array (
                'id' => 369,
                'nombre' => 'Alagoinhas',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -12.133969,
                'longitude' => -38.421122,
            ),
            369 => 
            array (
                'id' => 370,
                'nombre' => 'Itapecerica da Serra',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.716627,
                'longitude' => -46.857642,
            ),
            370 => 
            array (
                'id' => 371,
                'nombre' => 'Uruguaiana',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.761912,
                'longitude' => -57.085843,
            ),
            371 => 
            array (
                'id' => 372,
                'nombre' => 'Paranaguá',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.516572,
                'longitude' => -48.522997,
            ),
            372 => 
            array (
                'id' => 373,
                'nombre' => 'Ibirité',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -20.025669,
                'longitude' => -44.057296,
            ),
            373 => 
            array (
                'id' => 374,
                'nombre' => 'Timon',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -5.09808,
                'longitude' => -42.833301,
            ),
            374 => 
            array (
                'id' => 375,
                'nombre' => 'Luziânia',
                'fk_paises' => 31,
                'region' => 'Goiás',
                'latitude' => -16.251468,
                'longitude' => -47.917822,
            ),
            375 => 
            array (
                'id' => 376,
                'nombre' => 'Macaé',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.38369,
                'longitude' => -41.782789,
            ),
            376 => 
            array (
                'id' => 377,
                'nombre' => 'Teófilo Otoni',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -17.859997,
                'longitude' => -41.509076,
            ),
            377 => 
            array (
                'id' => 378,
                'nombre' => 'Moji-Guaçu',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.368059,
                'longitude' => -46.943295,
            ),
            378 => 
            array (
                'id' => 379,
                'nombre' => 'Palmas',
                'fk_paises' => 31,
                'region' => 'Tocantins',
                'latitude' => -10.249091,
                'longitude' => -48.324286,
            ),
            379 => 
            array (
                'id' => 380,
                'nombre' => 'Pindamonhangaba',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.845071,
                'longitude' => -45.487487,
            ),
            380 => 
            array (
                'id' => 381,
                'nombre' => 'Francisco Morato',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.279738,
                'longitude' => -46.745228,
            ),
            381 => 
            array (
                'id' => 382,
                'nombre' => 'Bagé',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -31.330175,
                'longitude' => -54.100471,
            ),
            382 => 
            array (
                'id' => 383,
                'nombre' => 'Sapucaia do Sul',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.828796,
                'longitude' => -51.14418,
            ),
            383 => 
            array (
                'id' => 384,
                'nombre' => 'Cabo Frio',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.886751,
                'longitude' => -42.026254,
            ),
            384 => 
            array (
                'id' => 385,
                'nombre' => 'Itapetininga',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.639907,
                'longitude' => -48.159795,
            ),
            385 => 
            array (
                'id' => 386,
                'nombre' => 'Patos de Minas',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -18.587258,
                'longitude' => -46.514675,
            ),
            386 => 
            array (
                'id' => 387,
                'nombre' => 'Camaragibe',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.023921,
                'longitude' => -34.978467,
            ),
            387 => 
            array (
                'id' => 388,
                'nombre' => 'Bragança Paulista',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.95317,
                'longitude' => -46.542324,
            ),
            388 => 
            array (
                'id' => 389,
                'nombre' => 'Queimados',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.710668,
                'longitude' => -43.552226,
            ),
            389 => 
            array (
                'id' => 390,
                'nombre' => 'Araguaína',
                'fk_paises' => 31,
                'region' => 'Tocantins',
                'latitude' => -7.192773,
                'longitude' => -48.204827,
            ),
            390 => 
            array (
                'id' => 391,
                'nombre' => 'Garanhuns',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.882855,
                'longitude' => -36.496897,
            ),
            391 => 
            array (
                'id' => 392,
                'nombre' => 'Vitória de Santo Antão',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.128607,
                'longitude' => -35.297938,
            ),
            392 => 
            array (
                'id' => 393,
                'nombre' => 'Santa Rita',
                'fk_paises' => 31,
                'region' => 'Paraíba',
                'latitude' => 32.211885,
                'longitude' => -110.953551,
            ),
            393 => 
            array (
                'id' => 394,
                'nombre' => 'Barbacena',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -21.221934,
                'longitude' => -43.770681,
            ),
            394 => 
            array (
                'id' => 395,
                'nombre' => 'Abaetetuba',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -1.722247,
                'longitude' => -48.879224,
            ),
            395 => 
            array (
                'id' => 396,
                'nombre' => 'Jaú',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.30275,
                'longitude' => -48.575549,
            ),
            396 => 
            array (
                'id' => 397,
                'nombre' => 'Lauro de Freitas',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -12.882057,
                'longitude' => -38.31482,
            ),
            397 => 
            array (
                'id' => 398,
                'nombre' => 'Franco da Rocha',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.323373,
                'longitude' => -46.729458,
            ),
            398 => 
            array (
                'id' => 399,
                'nombre' => 'Teixeira de Freitas',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -17.540031,
                'longitude' => -39.742181,
            ),
            399 => 
            array (
                'id' => 400,
                'nombre' => 'Varginha',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -21.556052,
                'longitude' => -45.436842,
            ),
            400 => 
            array (
                'id' => 401,
                'nombre' => 'Ribeirão Pires',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.707162,
                'longitude' => -46.40625,
            ),
            401 => 
            array (
                'id' => 402,
                'nombre' => 'Sabará',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.884526,
                'longitude' => -43.826722,
            ),
            402 => 
            array (
                'id' => 403,
                'nombre' => 'Catanduva',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -21.131855,
                'longitude' => -48.977473,
            ),
            403 => 
            array (
                'id' => 404,
                'nombre' => 'Rio Verde',
                'fk_paises' => 31,
                'region' => 'Goiás',
                'latitude' => 21.927792,
                'longitude' => -99.985634,
            ),
            404 => 
            array (
                'id' => 405,
                'nombre' => 'Botucatu',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.884181,
                'longitude' => -48.444165,
            ),
            405 => 
            array (
                'id' => 406,
                'nombre' => 'Colatina',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => -19.526263,
                'longitude' => -40.635118,
            ),
            406 => 
            array (
                'id' => 407,
                'nombre' => 'Santa Cruz do Sul',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.722516,
                'longitude' => -52.434838,
            ),
            407 => 
            array (
                'id' => 408,
                'nombre' => 'Linhares',
                'fk_paises' => 31,
                'region' => 'Espírito Santo',
                'latitude' => -19.394665,
                'longitude' => -40.065264,
            ),
            408 => 
            array (
                'id' => 409,
                'nombre' => 'Apucarana',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -23.550438,
                'longitude' => -51.463972,
            ),
            409 => 
            array (
                'id' => 410,
                'nombre' => 'Barretos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -20.527959,
                'longitude' => -48.638888,
            ),
            410 => 
            array (
                'id' => 411,
                'nombre' => 'Guaratinguetá',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.808024,
                'longitude' => -45.194219,
            ),
            411 => 
            array (
                'id' => 412,
                'nombre' => 'Cachoeirinha',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.947723,
                'longitude' => -51.102117,
            ),
            412 => 
            array (
                'id' => 413,
                'nombre' => 'Codó',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -4.460556,
                'longitude' => -43.88945,
            ),
            413 => 
            array (
                'id' => 414,
                'nombre' => 'Jaraguá do Sul',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -26.482221,
                'longitude' => -49.073477,
            ),
            414 => 
            array (
                'id' => 415,
                'nombre' => 'Cubatão',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.891615,
                'longitude' => -46.424414,
            ),
            415 => 
            array (
                'id' => 416,
                'nombre' => 'Itabira',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.624417,
                'longitude' => -43.231636,
            ),
            416 => 
            array (
                'id' => 417,
                'nombre' => 'Itaituba',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -4.26707,
                'longitude' => -55.993117,
            ),
            417 => 
            array (
                'id' => 418,
                'nombre' => 'Araras',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.360491,
                'longitude' => -47.379839,
            ),
            418 => 
            array (
                'id' => 419,
                'nombre' => 'Resende',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.470962,
                'longitude' => -44.451329,
            ),
            419 => 
            array (
                'id' => 420,
                'nombre' => 'Atibaia',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.117549,
                'longitude' => -46.556707,
            ),
            420 => 
            array (
                'id' => 421,
                'nombre' => 'Pouso Alegre',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -22.248037,
                'longitude' => -45.942012,
            ),
            421 => 
            array (
                'id' => 422,
                'nombre' => 'Toledo',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => 39.862832,
                'longitude' => -4.027323,
            ),
            422 => 
            array (
                'id' => 423,
                'nombre' => 'Crato',
                'fk_paises' => 31,
                'region' => 'Ceará',
                'latitude' => 39.287674,
                'longitude' => -7.645655,
            ),
            423 => 
            array (
                'id' => 424,
                'nombre' => 'Passos',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -20.722143,
                'longitude' => -46.613335,
            ),
            424 => 
            array (
                'id' => 425,
                'nombre' => 'Araguari',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -18.64604,
                'longitude' => -48.193856,
            ),
            425 => 
            array (
                'id' => 426,
                'nombre' => 'São José de Ribamar',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -2.550385,
                'longitude' => -44.070196,
            ),
            426 => 
            array (
                'id' => 427,
                'nombre' => 'Pinhais',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -25.443441,
                'longitude' => -49.193145,
            ),
            427 => 
            array (
                'id' => 428,
                'nombre' => 'Sertãozinho',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -21.137995,
                'longitude' => -47.990137,
            ),
            428 => 
            array (
                'id' => 429,
                'nombre' => 'Conselheiro Lafaiete',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -20.66393,
                'longitude' => -43.785023,
            ),
            429 => 
            array (
                'id' => 430,
                'nombre' => 'Paulo Afonso',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -9.406125,
                'longitude' => -38.216372,
            ),
            430 => 
            array (
                'id' => 431,
                'nombre' => 'Angra dos Reis',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -23.005804,
                'longitude' => -44.315791,
            ),
            431 => 
            array (
                'id' => 432,
                'nombre' => 'Eunápolis',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -16.371994,
                'longitude' => -39.582512,
            ),
            432 => 
            array (
                'id' => 433,
                'nombre' => 'Salto',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -31.385499,
                'longitude' => -57.960079,
            ),
            433 => 
            array (
                'id' => 434,
                'nombre' => 'Ourinhos',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -22.979864,
                'longitude' => -49.869959,
            ),
            434 => 
            array (
                'id' => 435,
                'nombre' => 'Parnamirim',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Norte',
                'latitude' => -5.911554,
                'longitude' => -35.271316,
            ),
            435 => 
            array (
                'id' => 436,
                'nombre' => 'Jacobina',
                'fk_paises' => 31,
                'region' => 'Bahia',
                'latitude' => -11.181651,
                'longitude' => -40.51206,
            ),
            436 => 
            array (
                'id' => 437,
                'nombre' => 'Coronel Fabriciano',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -19.518997,
                'longitude' => -42.628205,
            ),
            437 => 
            array (
                'id' => 438,
                'nombre' => 'Birigui',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -21.291505,
                'longitude' => -50.343631,
            ),
            438 => 
            array (
                'id' => 439,
                'nombre' => 'Tatuí',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.349219,
                'longitude' => -47.846576,
            ),
            439 => 
            array (
                'id' => 440,
                'nombre' => 'Ji-Paraná',
                'fk_paises' => 31,
                'region' => 'Rondônia',
                'latitude' => -10.878141,
                'longitude' => -61.932673,
            ),
            440 => 
            array (
                'id' => 441,
                'nombre' => 'Bacabal',
                'fk_paises' => 31,
                'region' => 'Maranhão',
                'latitude' => -4.222144,
                'longitude' => -44.785584,
            ),
            441 => 
            array (
                'id' => 442,
                'nombre' => 'Cametá',
                'fk_paises' => 31,
                'region' => 'Pará',
                'latitude' => -2.241489,
                'longitude' => -49.49848,
            ),
            442 => 
            array (
                'id' => 443,
                'nombre' => 'Guaíba',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -30.109092,
                'longitude' => -51.323827,
            ),
            443 => 
            array (
                'id' => 444,
                'nombre' => 'São Lourenço da Mata',
                'fk_paises' => 31,
                'region' => 'Pernambuco',
                'latitude' => -8.007566,
                'longitude' => -35.022189,
            ),
            444 => 
            array (
                'id' => 445,
                'nombre' => 'Santana do Livramento',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -30.877285,
                'longitude' => -55.53923,
            ),
            445 => 
            array (
                'id' => 446,
                'nombre' => 'Votorantim',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.540286,
                'longitude' => -47.444598,
            ),
            446 => 
            array (
                'id' => 447,
                'nombre' => 'Campo Largo',
                'fk_paises' => 31,
                'region' => 'Paraná',
                'latitude' => -26.800414,
                'longitude' => -60.839132,
            ),
            447 => 
            array (
                'id' => 448,
                'nombre' => 'Patos',
                'fk_paises' => 31,
                'region' => 'Paraíba',
                'latitude' => -7.017833,
                'longitude' => -37.275037,
            ),
            448 => 
            array (
                'id' => 449,
                'nombre' => 'Ituiutaba',
                'fk_paises' => 31,
                'region' => 'Minas Gerais',
                'latitude' => -18.977657,
                'longitude' => -49.464392,
            ),
            449 => 
            array (
                'id' => 450,
                'nombre' => 'Corumbá',
                'fk_paises' => 31,
                'region' => 'Mato Grosso do Sul',
                'latitude' => -19.008169,
                'longitude' => -57.65155,
            ),
            450 => 
            array (
                'id' => 451,
                'nombre' => 'Palhoça',
                'fk_paises' => 31,
                'region' => 'Santa Catarina',
                'latitude' => -27.64662,
                'longitude' => -48.670361,
            ),
            451 => 
            array (
                'id' => 452,
                'nombre' => 'Barra do Piraí',
                'fk_paises' => 31,
                'region' => 'Rio de Janeiro',
                'latitude' => -22.472026,
                'longitude' => -43.827337,
            ),
            452 => 
            array (
                'id' => 453,
                'nombre' => 'Bento Gonçalves',
                'fk_paises' => 31,
                'region' => 'Rio Grande do Sul',
                'latitude' => -29.166709,
                'longitude' => -51.516986,
            ),
            453 => 
            array (
                'id' => 454,
                'nombre' => 'Poá',
                'fk_paises' => 31,
                'region' => 'São Paulo',
                'latitude' => -23.533778,
                'longitude' => -46.347736,
            ),
            454 => 
            array (
                'id' => 455,
                'nombre' => 'Águas Lindas de Goiás',
                'fk_paises' => 31,
                'region' => 'Goiás',
                'latitude' => -15.746036,
                'longitude' => -48.299098,
            ),
            455 => 
            array (
                'id' => 456,
                'nombre' => 'London',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.507351,
                'longitude' => -0.127758,
            ),
            456 => 
            array (
                'id' => 457,
                'nombre' => 'Birmingham',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.486243,
                'longitude' => -1.890401,
            ),
            457 => 
            array (
                'id' => 458,
                'nombre' => 'Glasgow',
                'fk_paises' => 77,
                'region' => 'Scotland',
                'latitude' => 55.864237,
                'longitude' => -4.251806,
            ),
            458 => 
            array (
                'id' => 459,
                'nombre' => 'Liverpool',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 43.106456,
                'longitude' => -76.217705,
            ),
            459 => 
            array (
                'id' => 460,
                'nombre' => 'Edinburgh',
                'fk_paises' => 77,
                'region' => 'Scotland',
                'latitude' => 55.953252,
                'longitude' => -3.188267,
            ),
            460 => 
            array (
                'id' => 461,
                'nombre' => 'Sheffield',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.381129,
                'longitude' => -1.470085,
            ),
            461 => 
            array (
                'id' => 462,
                'nombre' => 'Manchester',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.480759,
                'longitude' => -2.242631,
            ),
            462 => 
            array (
                'id' => 463,
                'nombre' => 'Leeds',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.800755,
                'longitude' => -1.549077,
            ),
            463 => 
            array (
                'id' => 464,
                'nombre' => 'Bristol',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.454513,
                'longitude' => -2.58791,
            ),
            464 => 
            array (
                'id' => 465,
                'nombre' => 'Cardiff',
                'fk_paises' => 77,
                'region' => 'Wales',
                'latitude' => 51.481581,
                'longitude' => -3.17909,
            ),
            465 => 
            array (
                'id' => 466,
                'nombre' => 'Coventry',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.406822,
                'longitude' => -1.519693,
            ),
            466 => 
            array (
                'id' => 467,
                'nombre' => 'Leicester',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 42.245926,
                'longitude' => -71.908684,
            ),
            467 => 
            array (
                'id' => 468,
                'nombre' => 'Bradford',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.795984,
                'longitude' => -1.759398,
            ),
            468 => 
            array (
                'id' => 469,
                'nombre' => 'Belfast',
                'fk_paises' => 77,
                'region' => 'North Ireland',
                'latitude' => 54.597285,
                'longitude' => -5.93012,
            ),
            469 => 
            array (
                'id' => 470,
                'nombre' => 'Nottingham',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.954783,
                'longitude' => -1.158109,
            ),
            470 => 
            array (
                'id' => 471,
                'nombre' => 'Kingston upon Hull',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.745671,
                'longitude' => -0.336741,
            ),
            471 => 
            array (
                'id' => 472,
                'nombre' => 'Plymouth',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.375457,
                'longitude' => -4.142656,
            ),
            472 => 
            array (
                'id' => 473,
                'nombre' => 'Stoke-on-Trent',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.002668,
                'longitude' => -2.179404,
            ),
            473 => 
            array (
                'id' => 474,
                'nombre' => 'Wolverhampton',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.586973,
                'longitude' => -2.12882,
            ),
            474 => 
            array (
                'id' => 475,
                'nombre' => 'Derby',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.92253,
                'longitude' => -1.474619,
            ),
            475 => 
            array (
                'id' => 476,
                'nombre' => 'Swansea',
                'fk_paises' => 77,
                'region' => 'Wales',
                'latitude' => 51.62144,
                'longitude' => -3.943646,
            ),
            476 => 
            array (
                'id' => 477,
                'nombre' => 'Southampton',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.9097,
                'longitude' => -1.404351,
            ),
            477 => 
            array (
                'id' => 478,
                'nombre' => 'Aberdeen',
                'fk_paises' => 77,
                'region' => 'Scotland',
                'latitude' => 57.149717,
                'longitude' => -2.094278,
            ),
            478 => 
            array (
                'id' => 479,
                'nombre' => 'Northampton',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.240477,
                'longitude' => -0.902656,
            ),
            479 => 
            array (
                'id' => 480,
                'nombre' => 'Dudley',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 42.043366,
                'longitude' => -71.927603,
            ),
            480 => 
            array (
                'id' => 481,
                'nombre' => 'Portsmouth',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.819768,
                'longitude' => -1.087977,
            ),
            481 => 
            array (
                'id' => 482,
                'nombre' => 'Newcastle upon Tyne',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 54.978252,
                'longitude' => -1.61778,
            ),
            482 => 
            array (
                'id' => 483,
                'nombre' => 'Sunderland',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 42.466373,
                'longitude' => -72.579511,
            ),
            483 => 
            array (
                'id' => 484,
                'nombre' => 'Luton',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.878671,
                'longitude' => -0.420026,
            ),
            484 => 
            array (
                'id' => 485,
                'nombre' => 'Swindon',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.555774,
                'longitude' => -1.779718,
            ),
            485 => 
            array (
                'id' => 486,
                'nombre' => 'Southend-on-Sea',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.545927,
                'longitude' => 0.707712,
            ),
            486 => 
            array (
                'id' => 487,
                'nombre' => 'Walsall',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.586214,
                'longitude' => -1.982919,
            ),
            487 => 
            array (
                'id' => 488,
                'nombre' => 'Bournemouth',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.719164,
                'longitude' => -1.880769,
            ),
            488 => 
            array (
                'id' => 489,
                'nombre' => 'Peterborough',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.569498,
                'longitude' => -0.24053,
            ),
            489 => 
            array (
                'id' => 490,
                'nombre' => 'Brighton',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.82253,
                'longitude' => -0.137163,
            ),
            490 => 
            array (
                'id' => 491,
                'nombre' => 'Blackpool',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.817505,
                'longitude' => -3.035675,
            ),
            491 => 
            array (
                'id' => 492,
                'nombre' => 'Dundee',
                'fk_paises' => 77,
                'region' => 'Scotland',
                'latitude' => 56.462018,
                'longitude' => -2.970721,
            ),
            492 => 
            array (
                'id' => 493,
                'nombre' => 'West Bromwich',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.517664,
                'longitude' => -1.995159,
            ),
            493 => 
            array (
                'id' => 494,
                'nombre' => 'Reading',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 40.335648,
                'longitude' => -75.926875,
            ),
            494 => 
            array (
                'id' => 495,
            'nombre' => 'Oldbury/Smethwick (Warley)',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.471067,
                'longitude' => -1.99668,
            ),
            495 => 
            array (
                'id' => 496,
                'nombre' => 'Middlesbrough',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 54.574227,
                'longitude' => -1.234956,
            ),
            496 => 
            array (
                'id' => 497,
                'nombre' => 'Huddersfield',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.645792,
                'longitude' => -1.785035,
            ),
            497 => 
            array (
                'id' => 498,
                'nombre' => 'Oxford',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.754816,
                'longitude' => -1.254367,
            ),
            498 => 
            array (
                'id' => 499,
                'nombre' => 'Poole',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.71505,
                'longitude' => -1.987248,
            ),
            499 => 
            array (
                'id' => 500,
                'nombre' => 'Bolton',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 44.372648,
                'longitude' => -72.878762,
            ),
        ));
        \DB::table('ciudades')->insert(array (
            0 => 
            array (
                'id' => 501,
                'nombre' => 'Blackburn',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.748575,
                'longitude' => -2.487529,
            ),
            1 => 
            array (
                'id' => 502,
                'nombre' => 'Newport',
                'fk_paises' => 77,
                'region' => 'Wales',
                'latitude' => 41.490102,
                'longitude' => -71.312829,
            ),
            2 => 
            array (
                'id' => 503,
                'nombre' => 'Preston',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.763201,
                'longitude' => -2.70309,
            ),
            3 => 
            array (
                'id' => 504,
                'nombre' => 'Stockport',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.39331,
                'longitude' => -2.126633,
            ),
            4 => 
            array (
                'id' => 505,
                'nombre' => 'Norwich',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.630886,
                'longitude' => 1.297355,
            ),
            5 => 
            array (
                'id' => 506,
                'nombre' => 'Rotherham',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.432604,
                'longitude' => -1.363501,
            ),
            6 => 
            array (
                'id' => 507,
                'nombre' => 'Cambridge',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.204267,
                'longitude' => 0.114908,
            ),
            7 => 
            array (
                'id' => 508,
                'nombre' => 'Watford',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.656489,
                'longitude' => -0.39032,
            ),
            8 => 
            array (
                'id' => 509,
                'nombre' => 'Ipswich',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.056736,
                'longitude' => 1.14822,
            ),
            9 => 
            array (
                'id' => 510,
                'nombre' => 'Slough',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.510538,
                'longitude' => -0.595041,
            ),
            10 => 
            array (
                'id' => 511,
                'nombre' => 'Exeter',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.718412,
                'longitude' => -3.533899,
            ),
            11 => 
            array (
                'id' => 512,
                'nombre' => 'Cheltenham',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.899386,
                'longitude' => -2.078253,
            ),
            12 => 
            array (
                'id' => 513,
                'nombre' => 'Gloucester',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.864245,
                'longitude' => -2.238156,
            ),
            13 => 
            array (
                'id' => 514,
                'nombre' => 'Saint Helens',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 46.191401,
                'longitude' => -122.195551,
            ),
            14 => 
            array (
                'id' => 515,
                'nombre' => 'Sutton Coldfield',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.570385,
                'longitude' => -1.824042,
            ),
            15 => 
            array (
                'id' => 516,
                'nombre' => 'York',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.959965,
                'longitude' => -1.087298,
            ),
            16 => 
            array (
                'id' => 517,
                'nombre' => 'Oldham',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.54093,
                'longitude' => -2.111366,
            ),
            17 => 
            array (
                'id' => 518,
                'nombre' => 'Basildon',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.576084,
                'longitude' => 0.488736,
            ),
            18 => 
            array (
                'id' => 519,
                'nombre' => 'Worthing',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.81787,
                'longitude' => -0.372882,
            ),
            19 => 
            array (
                'id' => 520,
                'nombre' => 'Chelmsford',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.735587,
                'longitude' => 0.46855,
            ),
            20 => 
            array (
                'id' => 521,
                'nombre' => 'Colchester',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.895927,
                'longitude' => 0.891874,
            ),
            21 => 
            array (
                'id' => 522,
                'nombre' => 'Crawley',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.10914,
                'longitude' => -0.187228,
            ),
            22 => 
            array (
                'id' => 523,
                'nombre' => 'Gillingham',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.386322,
                'longitude' => 0.551438,
            ),
            23 => 
            array (
                'id' => 524,
                'nombre' => 'Solihull',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 52.411811,
                'longitude' => -1.77761,
            ),
            24 => 
            array (
                'id' => 525,
                'nombre' => 'Rochdale',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.609714,
                'longitude' => -2.1561,
            ),
            25 => 
            array (
                'id' => 526,
                'nombre' => 'Birkenhead',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.389991,
                'longitude' => -3.023009,
            ),
            26 => 
            array (
                'id' => 527,
                'nombre' => 'Worcester',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 42.262593,
                'longitude' => -71.802293,
            ),
            27 => 
            array (
                'id' => 528,
                'nombre' => 'Hartlepool',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 54.691745,
                'longitude' => -1.212926,
            ),
            28 => 
            array (
                'id' => 529,
                'nombre' => 'Halifax',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 44.648764,
                'longitude' => -63.575239,
            ),
            29 => 
            array (
                'id' => 530,
                'nombre' => 'Woking/Byfleet',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.340125,
                'longitude' => -0.471357,
            ),
            30 => 
            array (
                'id' => 531,
                'nombre' => 'Southport',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.645708,
                'longitude' => -3.010113,
            ),
            31 => 
            array (
                'id' => 532,
                'nombre' => 'Maidstone',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 51.270363,
                'longitude' => 0.522699,
            ),
            32 => 
            array (
                'id' => 533,
                'nombre' => 'Eastbourne',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 50.768035,
                'longitude' => 0.290472,
            ),
            33 => 
            array (
                'id' => 534,
                'nombre' => 'Grimsby',
                'fk_paises' => 77,
                'region' => 'England',
                'latitude' => 53.567471,
                'longitude' => -0.080784,
            ),
            34 => 
            array (
                'id' => 535,
                'nombre' => 'Saint Helier',
                'fk_paises' => 77,
                'region' => 'Jersey',
                'latitude' => 49.180502,
                'longitude' => -2.103233,
            ),
            35 => 
            array (
                'id' => 536,
                'nombre' => 'Douglas',
                'fk_paises' => 77,
                'region' => '–',
                'latitude' => 33.729023,
                'longitude' => -84.731556,
            ),
            36 => 
            array (
                'id' => 537,
                'nombre' => 'Road Town',
                'fk_paises' => 229,
                'region' => 'Tortola',
                'latitude' => 18.428612,
                'longitude' => -64.618466,
            ),
            37 => 
            array (
                'id' => 538,
                'nombre' => 'Bandar Seri Begawan',
                'fk_paises' => 33,
                'region' => 'Brunei and Muara',
                'latitude' => 4.903052,
                'longitude' => 114.939821,
            ),
            38 => 
            array (
                'id' => 539,
                'nombre' => 'Sofija',
                'fk_paises' => 23,
                'region' => 'Grad Sofija',
                'latitude' => 42.697708,
                'longitude' => 23.321868,
            ),
            39 => 
            array (
                'id' => 540,
                'nombre' => 'Plovdiv',
                'fk_paises' => 23,
                'region' => 'Plovdiv',
                'latitude' => 42.135408,
                'longitude' => 24.74529,
            ),
            40 => 
            array (
                'id' => 541,
                'nombre' => 'Varna',
                'fk_paises' => 23,
                'region' => 'Varna',
                'latitude' => 43.21405,
                'longitude' => 27.914733,
            ),
            41 => 
            array (
                'id' => 542,
                'nombre' => 'Burgas',
                'fk_paises' => 23,
                'region' => 'Burgas',
                'latitude' => 42.504793,
                'longitude' => 27.462636,
            ),
            42 => 
            array (
                'id' => 543,
                'nombre' => 'Ruse',
                'fk_paises' => 23,
                'region' => 'Ruse',
                'latitude' => 43.835571,
                'longitude' => 25.965655,
            ),
            43 => 
            array (
                'id' => 544,
                'nombre' => 'Stara Zagora',
                'fk_paises' => 23,
                'region' => 'Haskovo',
                'latitude' => 42.425777,
                'longitude' => 25.634464,
            ),
            44 => 
            array (
                'id' => 545,
                'nombre' => 'Pleven',
                'fk_paises' => 23,
                'region' => 'Lovec',
                'latitude' => 43.417042,
                'longitude' => 24.606685,
            ),
            45 => 
            array (
                'id' => 546,
                'nombre' => 'Sliven',
                'fk_paises' => 23,
                'region' => 'Burgas',
                'latitude' => 42.681654,
                'longitude' => 26.322869,
            ),
            46 => 
            array (
                'id' => 547,
                'nombre' => 'Dobric',
                'fk_paises' => 23,
                'region' => 'Varna',
                'latitude' => 43.57259,
                'longitude' => 27.827261,
            ),
            47 => 
            array (
                'id' => 548,
                'nombre' => 'Šumen',
                'fk_paises' => 23,
                'region' => 'Varna',
                'latitude' => 43.27124,
                'longitude' => 26.936129,
            ),
            48 => 
            array (
                'id' => 549,
                'nombre' => 'Ouagadougou',
                'fk_paises' => 21,
                'region' => 'Kadiogo',
                'latitude' => 12.371428,
                'longitude' => -1.51966,
            ),
            49 => 
            array (
                'id' => 550,
                'nombre' => 'Bobo-Dioulasso',
                'fk_paises' => 21,
                'region' => 'Houet',
                'latitude' => 11.164922,
                'longitude' => -4.305154,
            ),
            50 => 
            array (
                'id' => 551,
                'nombre' => 'Koudougou',
                'fk_paises' => 21,
                'region' => 'Boulkiemdé',
                'latitude' => 12.256218,
                'longitude' => -2.351753,
            ),
            51 => 
            array (
                'id' => 552,
                'nombre' => 'Bujumbura',
                'fk_paises' => 18,
                'region' => 'Bujumbura',
                'latitude' => -3.361378,
                'longitude' => 29.359878,
            ),
            52 => 
            array (
                'id' => 553,
                'nombre' => 'George Town',
                'fk_paises' => 54,
                'region' => 'Grand Cayman',
                'latitude' => 19.286932,
                'longitude' => -81.367439,
            ),
            53 => 
            array (
                'id' => 554,
                'nombre' => 'Santiago de Chile',
                'fk_paises' => 41,
                'region' => 'Santiago',
                'latitude' => -33.44889,
                'longitude' => -70.669265,
            ),
            54 => 
            array (
                'id' => 555,
                'nombre' => 'Puente Alto',
                'fk_paises' => 41,
                'region' => 'Santiago',
                'latitude' => -33.618608,
                'longitude' => -70.590606,
            ),
            55 => 
            array (
                'id' => 556,
                'nombre' => 'Viña del Mar',
                'fk_paises' => 41,
                'region' => 'Valparaíso',
                'latitude' => -33.015348,
                'longitude' => -71.550028,
            ),
            56 => 
            array (
                'id' => 557,
                'nombre' => 'Valparaíso',
                'fk_paises' => 41,
                'region' => 'Valparaíso',
                'latitude' => -33.047238,
                'longitude' => -71.612688,
            ),
            57 => 
            array (
                'id' => 558,
                'nombre' => 'Talcahuano',
                'fk_paises' => 41,
                'region' => 'Bíobío',
                'latitude' => -36.724783,
                'longitude' => -73.116981,
            ),
            58 => 
            array (
                'id' => 559,
                'nombre' => 'Antofagasta',
                'fk_paises' => 41,
                'region' => 'Antofagasta',
                'latitude' => -23.650928,
                'longitude' => -70.397502,
            ),
            59 => 
            array (
                'id' => 560,
                'nombre' => 'San Bernardo',
                'fk_paises' => 41,
                'region' => 'Santiago',
                'latitude' => -33.585448,
                'longitude' => -70.698736,
            ),
            60 => 
            array (
                'id' => 561,
                'nombre' => 'Temuco',
                'fk_paises' => 41,
                'region' => 'La Araucanía',
                'latitude' => -38.735902,
                'longitude' => -72.590374,
            ),
            61 => 
            array (
                'id' => 562,
                'nombre' => 'Concepción',
                'fk_paises' => 41,
                'region' => 'Bíobío',
                'latitude' => -36.820135,
                'longitude' => -73.04439,
            ),
            62 => 
            array (
                'id' => 563,
                'nombre' => 'Rancagua',
                'fk_paises' => 41,
                'region' => 'O´Higgins',
                'latitude' => -34.170132,
                'longitude' => -70.740626,
            ),
            63 => 
            array (
                'id' => 564,
                'nombre' => 'Arica',
                'fk_paises' => 41,
                'region' => 'Tarapacá',
                'latitude' => -18.478253,
                'longitude' => -70.312599,
            ),
            64 => 
            array (
                'id' => 565,
                'nombre' => 'Talca',
                'fk_paises' => 41,
                'region' => 'Maule',
                'latitude' => -35.423244,
                'longitude' => -71.64848,
            ),
            65 => 
            array (
                'id' => 566,
                'nombre' => 'Chillán',
                'fk_paises' => 41,
                'region' => 'Bíobío',
                'latitude' => -36.606262,
                'longitude' => -72.102335,
            ),
            66 => 
            array (
                'id' => 567,
                'nombre' => 'Iquique',
                'fk_paises' => 41,
                'region' => 'Tarapacá',
                'latitude' => -20.230703,
                'longitude' => -70.135669,
            ),
            67 => 
            array (
                'id' => 568,
                'nombre' => 'Los Angeles',
                'fk_paises' => 41,
                'region' => 'Bíobío',
                'latitude' => 34.052234,
                'longitude' => -118.243685,
            ),
            68 => 
            array (
                'id' => 569,
                'nombre' => 'Puerto Montt',
                'fk_paises' => 41,
                'region' => 'Los Lagos',
                'latitude' => -41.468917,
                'longitude' => -72.941136,
            ),
            69 => 
            array (
                'id' => 570,
                'nombre' => 'Coquimbo',
                'fk_paises' => 41,
                'region' => 'Coquimbo',
                'latitude' => -29.959001,
                'longitude' => -71.338918,
            ),
            70 => 
            array (
                'id' => 571,
                'nombre' => 'Osorno',
                'fk_paises' => 41,
                'region' => 'Los Lagos',
                'latitude' => -40.57619,
                'longitude' => -73.114947,
            ),
            71 => 
            array (
                'id' => 572,
                'nombre' => 'La Serena',
                'fk_paises' => 41,
                'region' => 'Coquimbo',
                'latitude' => -29.902669,
                'longitude' => -71.251937,
            ),
            72 => 
            array (
                'id' => 573,
                'nombre' => 'Calama',
                'fk_paises' => 41,
                'region' => 'Antofagasta',
                'latitude' => -22.454392,
                'longitude' => -68.929382,
            ),
            73 => 
            array (
                'id' => 574,
                'nombre' => 'Valdivia',
                'fk_paises' => 41,
                'region' => 'Los Lagos',
                'latitude' => -39.819586,
                'longitude' => -73.24521,
            ),
            74 => 
            array (
                'id' => 575,
                'nombre' => 'Punta Arenas',
                'fk_paises' => 41,
                'region' => 'Magallanes',
                'latitude' => -53.163833,
                'longitude' => -70.917068,
            ),
            75 => 
            array (
                'id' => 576,
                'nombre' => 'Copiapó',
                'fk_paises' => 41,
                'region' => 'Atacama',
                'latitude' => -27.366576,
                'longitude' => -70.332159,
            ),
            76 => 
            array (
                'id' => 577,
                'nombre' => 'Quilpué',
                'fk_paises' => 41,
                'region' => 'Valparaíso',
                'latitude' => -33.048271,
                'longitude' => -71.440875,
            ),
            77 => 
            array (
                'id' => 578,
                'nombre' => 'Curicó',
                'fk_paises' => 41,
                'region' => 'Maule',
                'latitude' => -34.977985,
                'longitude' => -71.25288,
            ),
            78 => 
            array (
                'id' => 579,
                'nombre' => 'Ovalle',
                'fk_paises' => 41,
                'region' => 'Coquimbo',
                'latitude' => -30.604304,
                'longitude' => -71.196988,
            ),
            79 => 
            array (
                'id' => 580,
                'nombre' => 'Coronel',
                'fk_paises' => 41,
                'region' => 'Bíobío',
                'latitude' => -37.034077,
                'longitude' => -73.140484,
            ),
            80 => 
            array (
                'id' => 581,
                'nombre' => 'San Pedro de la Paz',
                'fk_paises' => 41,
                'region' => 'Bíobío',
                'latitude' => -36.830535,
                'longitude' => -73.116737,
            ),
            81 => 
            array (
                'id' => 582,
                'nombre' => 'Melipilla',
                'fk_paises' => 41,
                'region' => 'Santiago',
                'latitude' => -33.686159,
                'longitude' => -71.216684,
            ),
            82 => 
            array (
                'id' => 583,
                'nombre' => 'Avarua',
                'fk_paises' => 47,
                'region' => 'Rarotonga',
                'latitude' => -21.212901,
                'longitude' => -159.782306,
            ),
            83 => 
            array (
                'id' => 584,
                'nombre' => 'San José',
                'fk_paises' => 51,
                'region' => 'San José',
                'latitude' => 37.338208,
                'longitude' => -121.886329,
            ),
            84 => 
            array (
                'id' => 585,
                'nombre' => 'Djibouti',
                'fk_paises' => 58,
                'region' => 'Djibouti',
                'latitude' => 11.825138,
                'longitude' => 42.590275,
            ),
            85 => 
            array (
                'id' => 586,
                'nombre' => 'Roseau',
                'fk_paises' => 59,
                'region' => 'St George',
                'latitude' => 15.309168,
                'longitude' => -61.379355,
            ),
            86 => 
            array (
                'id' => 587,
                'nombre' => 'Santo Domingo de Guzmán',
                'fk_paises' => 61,
                'region' => 'Distrito Nacional',
                'latitude' => 18.486058,
                'longitude' => -69.931212,
            ),
            87 => 
            array (
                'id' => 588,
                'nombre' => 'Santiago de los Caballeros',
                'fk_paises' => 61,
                'region' => 'Santiago',
                'latitude' => 19.479196,
                'longitude' => -70.693057,
            ),
            88 => 
            array (
                'id' => 589,
                'nombre' => 'La Romana',
                'fk_paises' => 61,
                'region' => 'La Romana',
                'latitude' => 18.433865,
                'longitude' => -68.965882,
            ),
            89 => 
            array (
                'id' => 590,
                'nombre' => 'San Pedro de Macorís',
                'fk_paises' => 61,
                'region' => 'San Pedro de Macorís',
                'latitude' => 18.47207,
                'longitude' => -69.299673,
            ),
            90 => 
            array (
                'id' => 591,
                'nombre' => 'San Francisco de Macorís',
                'fk_paises' => 61,
                'region' => 'Duarte',
                'latitude' => 19.305026,
                'longitude' => -70.252738,
            ),
            91 => 
            array (
                'id' => 592,
                'nombre' => 'San Felipe de Puerto Plata',
                'fk_paises' => 61,
                'region' => 'Puerto Plata',
                'latitude' => 19.780769,
                'longitude' => -70.687109,
            ),
            92 => 
            array (
                'id' => 593,
                'nombre' => 'Guayaquil',
                'fk_paises' => 63,
                'region' => 'Guayas',
                'latitude' => -2.170998,
                'longitude' => -79.922359,
            ),
            93 => 
            array (
                'id' => 594,
                'nombre' => 'Quito',
                'fk_paises' => 63,
                'region' => 'Pichincha',
                'latitude' => -0.180653,
                'longitude' => -78.467838,
            ),
            94 => 
            array (
                'id' => 595,
                'nombre' => 'Cuenca',
                'fk_paises' => 63,
                'region' => 'Azuay',
                'latitude' => 40.070393,
                'longitude' => -2.137416,
            ),
            95 => 
            array (
                'id' => 596,
                'nombre' => 'Machala',
                'fk_paises' => 63,
                'region' => 'El Oro',
                'latitude' => -3.258111,
                'longitude' => -79.955392,
            ),
            96 => 
            array (
                'id' => 597,
                'nombre' => 'Santo Domingo de los Colorados',
                'fk_paises' => 63,
                'region' => 'Pichincha',
                'latitude' => -0.238904,
                'longitude' => -79.177427,
            ),
            97 => 
            array (
                'id' => 598,
                'nombre' => 'Portoviejo',
                'fk_paises' => 63,
                'region' => 'Manabí',
                'latitude' => -1.054723,
                'longitude' => -80.45249,
            ),
            98 => 
            array (
                'id' => 599,
                'nombre' => 'Ambato',
                'fk_paises' => 63,
                'region' => 'Tungurahua',
                'latitude' => -1.254341,
                'longitude' => -78.62285,
            ),
            99 => 
            array (
                'id' => 600,
                'nombre' => 'Manta',
                'fk_paises' => 63,
                'region' => 'Manabí',
                'latitude' => -0.967653,
                'longitude' => -80.70891,
            ),
            100 => 
            array (
                'id' => 601,
                'nombre' => 'Duran [Eloy Alfaro]',
                'fk_paises' => 63,
                'region' => 'Guayas',
                'latitude' => -2.160609,
                'longitude' => -79.836215,
            ),
            101 => 
            array (
                'id' => 602,
                'nombre' => 'Ibarra',
                'fk_paises' => 63,
                'region' => 'Imbabura',
                'latitude' => 0.339176,
                'longitude' => -78.122234,
            ),
            102 => 
            array (
                'id' => 603,
                'nombre' => 'Quevedo',
                'fk_paises' => 63,
                'region' => 'Los Ríos',
                'latitude' => -1.022512,
                'longitude' => -79.460403,
            ),
            103 => 
            array (
                'id' => 604,
                'nombre' => 'Milagro',
                'fk_paises' => 63,
                'region' => 'Guayas',
                'latitude' => 34.938391,
                'longitude' => -105.239169,
            ),
            104 => 
            array (
                'id' => 605,
                'nombre' => 'Loja',
                'fk_paises' => 63,
                'region' => 'Loja',
                'latitude' => -4.007891,
                'longitude' => -79.211277,
            ),
            105 => 
            array (
                'id' => 606,
                'nombre' => 'Ríobamba',
                'fk_paises' => 63,
                'region' => 'Chimborazo',
                'latitude' => -1.663551,
                'longitude' => -78.654646,
            ),
            106 => 
            array (
                'id' => 607,
                'nombre' => 'Esmeraldas',
                'fk_paises' => 63,
                'region' => 'Esmeraldas',
                'latitude' => 0.968179,
                'longitude' => -79.65172,
            ),
            107 => 
            array (
                'id' => 608,
                'nombre' => 'Cairo',
                'fk_paises' => 64,
                'region' => 'Kairo',
                'latitude' => 30.04442,
                'longitude' => 31.235712,
            ),
            108 => 
            array (
                'id' => 609,
                'nombre' => 'Alexandria',
                'fk_paises' => 64,
                'region' => 'Aleksandria',
                'latitude' => 38.804836,
                'longitude' => -77.046921,
            ),
            109 => 
            array (
                'id' => 610,
                'nombre' => 'Giza',
                'fk_paises' => 64,
                'region' => 'Giza',
                'latitude' => 30.013056,
                'longitude' => 31.208853,
            ),
            110 => 
            array (
                'id' => 611,
                'nombre' => 'Shubra al-Khayma',
                'fk_paises' => 64,
                'region' => 'al-Qalyubiya',
                'latitude' => 30.123385,
                'longitude' => 31.260929,
            ),
            111 => 
            array (
                'id' => 612,
                'nombre' => 'Port Said',
                'fk_paises' => 64,
                'region' => 'Port Said',
                'latitude' => 31.265289,
                'longitude' => 32.301866,
            ),
            112 => 
            array (
                'id' => 613,
                'nombre' => 'Suez',
                'fk_paises' => 64,
                'region' => 'Suez',
                'latitude' => 29.966834,
                'longitude' => 32.549807,
            ),
            113 => 
            array (
                'id' => 614,
                'nombre' => 'al-Mahallat al-Kubra',
                'fk_paises' => 64,
                'region' => 'al-Gharbiya',
                'latitude' => 30.969671,
                'longitude' => 31.168083,
            ),
            114 => 
            array (
                'id' => 615,
                'nombre' => 'Tanta',
                'fk_paises' => 64,
                'region' => 'al-Gharbiya',
                'latitude' => 30.786509,
                'longitude' => 31.000376,
            ),
            115 => 
            array (
                'id' => 616,
                'nombre' => 'al-Mansura',
                'fk_paises' => 64,
                'region' => 'al-Daqahliya',
                'latitude' => 31.040948,
                'longitude' => 31.37847,
            ),
            116 => 
            array (
                'id' => 617,
                'nombre' => 'Luxor',
                'fk_paises' => 64,
                'region' => 'Luxor',
                'latitude' => 36.09551,
                'longitude' => -115.176067,
            ),
            117 => 
            array (
                'id' => 618,
                'nombre' => 'Asyut',
                'fk_paises' => 64,
                'region' => 'Asyut',
                'latitude' => 27.178312,
                'longitude' => 31.185926,
            ),
            118 => 
            array (
                'id' => 619,
                'nombre' => 'Bahtim',
                'fk_paises' => 64,
                'region' => 'al-Qalyubiya',
                'latitude' => 30.136686,
                'longitude' => 31.274481,
            ),
            119 => 
            array (
                'id' => 620,
                'nombre' => 'Zagazig',
                'fk_paises' => 64,
                'region' => 'al-Sharqiya',
                'latitude' => 30.576538,
                'longitude' => 31.504066,
            ),
            120 => 
            array (
                'id' => 621,
                'nombre' => 'al-Faiyum',
                'fk_paises' => 64,
                'region' => 'al-Faiyum',
                'latitude' => 29.308402,
                'longitude' => 30.84285,
            ),
            121 => 
            array (
                'id' => 622,
                'nombre' => 'Ismailia',
                'fk_paises' => 64,
                'region' => 'Ismailia',
                'latitude' => 30.596492,
                'longitude' => 32.271459,
            ),
            122 => 
            array (
                'id' => 623,
                'nombre' => 'Kafr al-Dawwar',
                'fk_paises' => 64,
                'region' => 'al-Buhayra',
                'latitude' => 31.135665,
                'longitude' => 30.132781,
            ),
            123 => 
            array (
                'id' => 624,
                'nombre' => 'Assuan',
                'fk_paises' => 64,
                'region' => 'Assuan',
                'latitude' => 24.088938,
                'longitude' => 32.899829,
            ),
            124 => 
            array (
                'id' => 625,
                'nombre' => 'Damanhur',
                'fk_paises' => 64,
                'region' => 'al-Buhayra',
                'latitude' => 31.042457,
                'longitude' => 30.47275,
            ),
            125 => 
            array (
                'id' => 626,
                'nombre' => 'al-Minya',
                'fk_paises' => 64,
                'region' => 'al-Minya',
                'latitude' => 28.087097,
                'longitude' => 30.76184,
            ),
            126 => 
            array (
                'id' => 627,
                'nombre' => 'Bani Suwayf',
                'fk_paises' => 64,
                'region' => 'Bani Suwayf',
                'latitude' => 29.066127,
                'longitude' => 31.099385,
            ),
            127 => 
            array (
                'id' => 628,
                'nombre' => 'Qina',
                'fk_paises' => 64,
                'region' => 'Qina',
                'latitude' => 26.155061,
                'longitude' => 32.716012,
            ),
            128 => 
            array (
                'id' => 629,
                'nombre' => 'Sawhaj',
                'fk_paises' => 64,
                'region' => 'Sawhaj',
                'latitude' => 26.501348,
                'longitude' => 31.765136,
            ),
            129 => 
            array (
                'id' => 630,
                'nombre' => 'Shibin al-Kawm',
                'fk_paises' => 64,
                'region' => 'al-Minufiya',
                'latitude' => 30.560456,
                'longitude' => 31.007948,
            ),
            130 => 
            array (
                'id' => 631,
                'nombre' => 'Bulaq al-Dakrur',
                'fk_paises' => 64,
                'region' => 'Giza',
                'latitude' => 30.037814,
                'longitude' => 31.189566,
            ),
            131 => 
            array (
                'id' => 632,
                'nombre' => 'Banha',
                'fk_paises' => 64,
                'region' => 'al-Qalyubiya',
                'latitude' => 30.465993,
                'longitude' => 31.184831,
            ),
            132 => 
            array (
                'id' => 633,
                'nombre' => 'Warraq al-Arab',
                'fk_paises' => 64,
                'region' => 'Giza',
                'latitude' => 30.103509,
                'longitude' => 31.211168,
            ),
            133 => 
            array (
                'id' => 634,
                'nombre' => 'Kafr al-Shaykh',
                'fk_paises' => 64,
                'region' => 'Kafr al-Shaykh',
                'latitude' => 31.10632,
                'longitude' => 30.941975,
            ),
            134 => 
            array (
                'id' => 635,
                'nombre' => 'Mallawi',
                'fk_paises' => 64,
                'region' => 'al-Minya',
                'latitude' => 27.73276,
                'longitude' => 30.83966,
            ),
            135 => 
            array (
                'id' => 636,
                'nombre' => 'Bilbays',
                'fk_paises' => 64,
                'region' => 'al-Sharqiya',
                'latitude' => 30.415838,
                'longitude' => 31.562118,
            ),
            136 => 
            array (
                'id' => 637,
                'nombre' => 'Mit Ghamr',
                'fk_paises' => 64,
                'region' => 'al-Daqahliya',
                'latitude' => 30.714857,
                'longitude' => 31.260773,
            ),
            137 => 
            array (
                'id' => 638,
                'nombre' => 'al-Arish',
                'fk_paises' => 64,
                'region' => 'Shamal Sina',
                'latitude' => 31.132093,
                'longitude' => 33.803276,
            ),
            138 => 
            array (
                'id' => 639,
                'nombre' => 'Talkha',
                'fk_paises' => 64,
                'region' => 'al-Daqahliya',
                'latitude' => 31.054915,
                'longitude' => 31.380243,
            ),
            139 => 
            array (
                'id' => 640,
                'nombre' => 'Qalyub',
                'fk_paises' => 64,
                'region' => 'al-Qalyubiya',
                'latitude' => 30.17629,
                'longitude' => 31.206785,
            ),
            140 => 
            array (
                'id' => 641,
                'nombre' => 'Jirja',
                'fk_paises' => 64,
                'region' => 'Sawhaj',
                'latitude' => 26.341876,
                'longitude' => 31.887568,
            ),
            141 => 
            array (
                'id' => 642,
                'nombre' => 'Idfu',
                'fk_paises' => 64,
                'region' => 'Qina',
                'latitude' => 24.978548,
                'longitude' => 32.87582,
            ),
            142 => 
            array (
                'id' => 643,
                'nombre' => 'al-Hawamidiya',
                'fk_paises' => 64,
                'region' => 'Giza',
                'latitude' => 34.715382,
                'longitude' => 35.95755,
            ),
            143 => 
            array (
                'id' => 644,
                'nombre' => 'Disuq',
                'fk_paises' => 64,
                'region' => 'Kafr al-Shaykh',
                'latitude' => 31.134096,
                'longitude' => 30.646038,
            ),
            144 => 
            array (
                'id' => 645,
                'nombre' => 'San Salvador',
                'fk_paises' => 193,
                'region' => 'San Salvador',
                'latitude' => 13.69294,
                'longitude' => -89.218191,
            ),
            145 => 
            array (
                'id' => 646,
                'nombre' => 'Santa Ana',
                'fk_paises' => 193,
                'region' => 'Santa Ana',
                'latitude' => 33.745473,
                'longitude' => -117.867653,
            ),
            146 => 
            array (
                'id' => 647,
                'nombre' => 'Mejicanos',
                'fk_paises' => 193,
                'region' => 'San Salvador',
                'latitude' => 13.733464,
                'longitude' => -89.213434,
            ),
            147 => 
            array (
                'id' => 648,
                'nombre' => 'Soyapango',
                'fk_paises' => 193,
                'region' => 'San Salvador',
                'latitude' => 13.710045,
                'longitude' => -89.137253,
            ),
            148 => 
            array (
                'id' => 649,
                'nombre' => 'San Miguel',
                'fk_paises' => 193,
                'region' => 'San Miguel',
                'latitude' => 20.914449,
                'longitude' => -100.745235,
            ),
            149 => 
            array (
                'id' => 650,
                'nombre' => 'Nueva San Salvador',
                'fk_paises' => 193,
                'region' => 'La Libertad',
                'latitude' => 13.675784,
                'longitude' => -89.289473,
            ),
            150 => 
            array (
                'id' => 651,
                'nombre' => 'Apopa',
                'fk_paises' => 193,
                'region' => 'San Salvador',
                'latitude' => 13.808674,
                'longitude' => -89.180122,
            ),
            151 => 
            array (
                'id' => 652,
                'nombre' => 'Asmara',
                'fk_paises' => 65,
                'region' => 'Maekel',
                'latitude' => 15.322877,
                'longitude' => 38.925052,
            ),
            152 => 
            array (
                'id' => 653,
                'nombre' => 'Madrid',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.416775,
                'longitude' => -3.70379,
            ),
            153 => 
            array (
                'id' => 654,
                'nombre' => 'Barcelona',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.385064,
                'longitude' => 2.173403,
            ),
            154 => 
            array (
                'id' => 655,
                'nombre' => 'Valencia',
                'fk_paises' => 67,
                'region' => 'Valencia',
                'latitude' => 39.469908,
                'longitude' => -0.376288,
            ),
            155 => 
            array (
                'id' => 656,
                'nombre' => 'Sevilla',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 37.389092,
                'longitude' => -5.984459,
            ),
            156 => 
            array (
                'id' => 657,
                'nombre' => 'Zaragoza',
                'fk_paises' => 67,
                'region' => 'Aragonia',
                'latitude' => 41.648823,
                'longitude' => -0.889085,
            ),
            157 => 
            array (
                'id' => 658,
                'nombre' => 'Málaga',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 36.721274,
                'longitude' => -4.421399,
            ),
            158 => 
            array (
                'id' => 659,
                'nombre' => 'Bilbao',
                'fk_paises' => 67,
                'region' => 'Baskimaa',
                'latitude' => 43.263013,
                'longitude' => -2.934985,
            ),
            159 => 
            array (
                'id' => 660,
                'nombre' => 'Las Palmas de Gran Canaria',
                'fk_paises' => 67,
                'region' => 'Canary Islands',
                'latitude' => 28.123546,
                'longitude' => -15.436257,
            ),
            160 => 
            array (
                'id' => 661,
                'nombre' => 'Murcia',
                'fk_paises' => 67,
                'region' => 'Murcia',
                'latitude' => 37.99224,
                'longitude' => -1.130654,
            ),
            161 => 
            array (
                'id' => 662,
                'nombre' => 'Palma de Mallorca',
                'fk_paises' => 67,
                'region' => 'Balears',
                'latitude' => 39.569601,
                'longitude' => 2.65016,
            ),
            162 => 
            array (
                'id' => 663,
                'nombre' => 'Valladolid',
                'fk_paises' => 67,
                'region' => 'Castilla and León',
                'latitude' => 41.652251,
                'longitude' => -4.724532,
            ),
            163 => 
            array (
                'id' => 664,
                'nombre' => 'Córdoba',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 37.888175,
                'longitude' => -4.779383,
            ),
            164 => 
            array (
                'id' => 665,
                'nombre' => 'Vigo',
                'fk_paises' => 67,
                'region' => 'Galicia',
                'latitude' => 42.240599,
                'longitude' => -8.720727,
            ),
            165 => 
            array (
                'id' => 666,
                'nombre' => 'Alicante [Alacant]',
                'fk_paises' => 67,
                'region' => 'Valencia',
                'latitude' => 38.345996,
                'longitude' => -0.490686,
            ),
            166 => 
            array (
                'id' => 667,
                'nombre' => 'Gijón',
                'fk_paises' => 67,
                'region' => 'Asturia',
                'latitude' => 43.532202,
                'longitude' => -5.66112,
            ),
            167 => 
            array (
                'id' => 668,
                'nombre' => 'L´Hospitalet de Llobregat',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.366187,
                'longitude' => 2.116494,
            ),
            168 => 
            array (
                'id' => 669,
                'nombre' => 'Granada',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 37.177336,
                'longitude' => -3.598557,
            ),
            169 => 
            array (
                'id' => 670,
            'nombre' => 'A Coruña (La Coruña)',
                'fk_paises' => 67,
                'region' => 'Galicia',
                'latitude' => 43.362344,
                'longitude' => -8.41154,
            ),
            170 => 
            array (
                'id' => 671,
                'nombre' => 'Vitoria-Gasteiz',
                'fk_paises' => 67,
                'region' => 'Baskimaa',
                'latitude' => 42.859134,
                'longitude' => -2.681861,
            ),
            171 => 
            array (
                'id' => 672,
                'nombre' => 'Santa Cruz de Tenerife',
                'fk_paises' => 67,
                'region' => 'Canary Islands',
                'latitude' => 28.46363,
                'longitude' => -16.251847,
            ),
            172 => 
            array (
                'id' => 673,
                'nombre' => 'Badalona',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.446988,
                'longitude' => 2.245032,
            ),
            173 => 
            array (
                'id' => 674,
                'nombre' => 'Oviedo',
                'fk_paises' => 67,
                'region' => 'Asturia',
                'latitude' => 43.361915,
                'longitude' => -5.849389,
            ),
            174 => 
            array (
                'id' => 675,
                'nombre' => 'Móstoles',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.323213,
                'longitude' => -3.867629,
            ),
            175 => 
            array (
                'id' => 676,
                'nombre' => 'Elche [Elx]',
                'fk_paises' => 67,
                'region' => 'Valencia',
                'latitude' => 38.269933,
                'longitude' => -0.712561,
            ),
            176 => 
            array (
                'id' => 677,
                'nombre' => 'Sabadell',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.546275,
                'longitude' => 2.108613,
            ),
            177 => 
            array (
                'id' => 678,
                'nombre' => 'Santander',
                'fk_paises' => 67,
                'region' => 'Cantabria',
                'latitude' => 29.085219,
                'longitude' => -110.971392,
            ),
            178 => 
            array (
                'id' => 679,
                'nombre' => 'Jerez de la Frontera',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 36.685006,
                'longitude' => -6.126074,
            ),
            179 => 
            array (
                'id' => 680,
                'nombre' => 'Pamplona [Iruña]',
                'fk_paises' => 67,
                'region' => 'Navarra',
                'latitude' => 42.812526,
                'longitude' => -1.645775,
            ),
            180 => 
            array (
                'id' => 681,
                'nombre' => 'Donostia-San Sebastián',
                'fk_paises' => 67,
                'region' => 'Baskimaa',
                'latitude' => 43.318334,
                'longitude' => -1.981231,
            ),
            181 => 
            array (
                'id' => 682,
                'nombre' => 'Cartagena',
                'fk_paises' => 67,
                'region' => 'Murcia',
                'latitude' => 10.391049,
                'longitude' => -75.479426,
            ),
            182 => 
            array (
                'id' => 683,
                'nombre' => 'Leganés',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.331951,
                'longitude' => -3.768655,
            ),
            183 => 
            array (
                'id' => 684,
                'nombre' => 'Fuenlabrada',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.290206,
                'longitude' => -3.803548,
            ),
            184 => 
            array (
                'id' => 685,
                'nombre' => 'Almería',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 36.834047,
                'longitude' => -2.463714,
            ),
            185 => 
            array (
                'id' => 686,
                'nombre' => 'Terrassa',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.563211,
                'longitude' => 2.008875,
            ),
            186 => 
            array (
                'id' => 687,
                'nombre' => 'Alcalá de Henares',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.481979,
                'longitude' => -3.363542,
            ),
            187 => 
            array (
                'id' => 688,
                'nombre' => 'Burgos',
                'fk_paises' => 67,
                'region' => 'Castilla and León',
                'latitude' => 42.343993,
                'longitude' => -3.696906,
            ),
            188 => 
            array (
                'id' => 689,
                'nombre' => 'Salamanca',
                'fk_paises' => 67,
                'region' => 'Castilla and León',
                'latitude' => 40.970104,
                'longitude' => -5.66354,
            ),
            189 => 
            array (
                'id' => 690,
                'nombre' => 'Albacete',
                'fk_paises' => 67,
                'region' => 'Kastilia-La Mancha',
                'latitude' => 38.994349,
                'longitude' => -1.858542,
            ),
            190 => 
            array (
                'id' => 691,
                'nombre' => 'Getafe',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.30825,
                'longitude' => -3.732393,
            ),
            191 => 
            array (
                'id' => 692,
                'nombre' => 'Cádiz',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 36.527061,
                'longitude' => -6.288596,
            ),
            192 => 
            array (
                'id' => 693,
                'nombre' => 'Alcorcón',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.346845,
                'longitude' => -3.827844,
            ),
            193 => 
            array (
                'id' => 694,
                'nombre' => 'Huelva',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 37.261421,
                'longitude' => -6.944722,
            ),
            194 => 
            array (
                'id' => 695,
                'nombre' => 'León',
                'fk_paises' => 67,
                'region' => 'Castilla and León',
                'latitude' => 42.598726,
                'longitude' => -5.567096,
            ),
            195 => 
            array (
                'id' => 696,
                'nombre' => 'Castellón de la Plana [Castell',
                'fk_paises' => 67,
                'region' => 'Valencia',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'nombre' => 'Badajoz',
                'fk_paises' => 67,
                'region' => 'Extremadura',
                'latitude' => 38.87945,
                'longitude' => -6.970654,
            ),
            197 => 
            array (
                'id' => 698,
                'nombre' => '[San Cristóbal de] la Laguna',
                'fk_paises' => 67,
                'region' => 'Canary Islands',
                'latitude' => 28.487401,
                'longitude' => -16.315906,
            ),
            198 => 
            array (
                'id' => 699,
                'nombre' => 'Logroño',
                'fk_paises' => 67,
                'region' => 'La Rioja',
                'latitude' => 42.46272,
                'longitude' => -2.444985,
            ),
            199 => 
            array (
                'id' => 700,
                'nombre' => 'Santa Coloma de Gramenet',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.444588,
                'longitude' => 2.210322,
            ),
            200 => 
            array (
                'id' => 701,
                'nombre' => 'Tarragona',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.118883,
                'longitude' => 1.244491,
            ),
            201 => 
            array (
                'id' => 702,
            'nombre' => 'Lleida (Lérida)',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.61759,
                'longitude' => 0.620015,
            ),
            202 => 
            array (
                'id' => 703,
                'nombre' => 'Jaén',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 37.779594,
                'longitude' => -3.784906,
            ),
            203 => 
            array (
                'id' => 704,
            'nombre' => 'Ourense (Orense)',
                'fk_paises' => 67,
                'region' => 'Galicia',
                'latitude' => 42.335789,
                'longitude' => -7.863881,
            ),
            204 => 
            array (
                'id' => 705,
                'nombre' => 'Mataró',
                'fk_paises' => 67,
                'region' => 'Katalonia',
                'latitude' => 41.538112,
                'longitude' => 2.444741,
            ),
            205 => 
            array (
                'id' => 706,
                'nombre' => 'Algeciras',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 36.140759,
                'longitude' => -5.456233,
            ),
            206 => 
            array (
                'id' => 707,
                'nombre' => 'Marbella',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 36.510071,
                'longitude' => -4.882447,
            ),
            207 => 
            array (
                'id' => 708,
                'nombre' => 'Barakaldo',
                'fk_paises' => 67,
                'region' => 'Baskimaa',
                'latitude' => 43.296988,
                'longitude' => -2.986203,
            ),
            208 => 
            array (
                'id' => 709,
                'nombre' => 'Dos Hermanas',
                'fk_paises' => 67,
                'region' => 'Andalusia',
                'latitude' => 37.28658,
                'longitude' => -5.924239,
            ),
            209 => 
            array (
                'id' => 710,
                'nombre' => 'Santiago de Compostela',
                'fk_paises' => 67,
                'region' => 'Galicia',
                'latitude' => 42.878213,
                'longitude' => -8.544844,
            ),
            210 => 
            array (
                'id' => 711,
                'nombre' => 'Torrejón de Ardoz',
                'fk_paises' => 67,
                'region' => 'Madrid',
                'latitude' => 40.456755,
                'longitude' => -3.475497,
            ),
            211 => 
            array (
                'id' => 712,
                'nombre' => 'Cape Town',
                'fk_paises' => 237,
                'region' => 'Western Cape',
                'latitude' => -33.924868,
                'longitude' => 18.424055,
            ),
            212 => 
            array (
                'id' => 713,
                'nombre' => 'Soweto',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.248538,
                'longitude' => 27.854032,
            ),
            213 => 
            array (
                'id' => 714,
                'nombre' => 'Johannesburg',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.204103,
                'longitude' => 28.047305,
            ),
            214 => 
            array (
                'id' => 715,
                'nombre' => 'Port Elizabeth',
                'fk_paises' => 237,
                'region' => 'Eastern Cape',
                'latitude' => -33.713925,
                'longitude' => 25.520736,
            ),
            215 => 
            array (
                'id' => 716,
                'nombre' => 'Pretoria',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -25.747868,
                'longitude' => 28.229271,
            ),
            216 => 
            array (
                'id' => 717,
                'nombre' => 'Inanda',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => -29.698267,
                'longitude' => 30.954029,
            ),
            217 => 
            array (
                'id' => 718,
                'nombre' => 'Durban',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => -29.85868,
                'longitude' => 31.02184,
            ),
            218 => 
            array (
                'id' => 719,
                'nombre' => 'Vanderbijlpark',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.70342,
                'longitude' => 27.807696,
            ),
            219 => 
            array (
                'id' => 720,
                'nombre' => 'Kempton Park',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.094408,
                'longitude' => 28.229271,
            ),
            220 => 
            array (
                'id' => 721,
                'nombre' => 'Alberton',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.322394,
                'longitude' => 28.123972,
            ),
            221 => 
            array (
                'id' => 722,
                'nombre' => 'Pinetown',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => -29.834502,
                'longitude' => 30.838409,
            ),
            222 => 
            array (
                'id' => 723,
                'nombre' => 'Pietermaritzburg',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => -29.600607,
                'longitude' => 30.379412,
            ),
            223 => 
            array (
                'id' => 724,
                'nombre' => 'Benoni',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.151085,
                'longitude' => 28.36957,
            ),
            224 => 
            array (
                'id' => 725,
                'nombre' => 'Randburg',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.14384,
                'longitude' => 27.995186,
            ),
            225 => 
            array (
                'id' => 726,
                'nombre' => 'Umlazi',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => -29.96875,
                'longitude' => 30.884343,
            ),
            226 => 
            array (
                'id' => 727,
                'nombre' => 'Bloemfontein',
                'fk_paises' => 237,
                'region' => 'Free State',
                'latitude' => -29.085214,
                'longitude' => 26.159576,
            ),
            227 => 
            array (
                'id' => 728,
                'nombre' => 'Vereeniging',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.596931,
                'longitude' => 27.901465,
            ),
            228 => 
            array (
                'id' => 729,
                'nombre' => 'Wonderboom',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -25.691076,
                'longitude' => 28.202952,
            ),
            229 => 
            array (
                'id' => 730,
                'nombre' => 'Roodepoort',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.120135,
                'longitude' => 27.901465,
            ),
            230 => 
            array (
                'id' => 731,
                'nombre' => 'Boksburg',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.23259,
                'longitude' => 28.240967,
            ),
            231 => 
            array (
                'id' => 732,
                'nombre' => 'Klerksdorp',
                'fk_paises' => 237,
                'region' => 'North West',
                'latitude' => -26.859822,
                'longitude' => 26.631751,
            ),
            232 => 
            array (
                'id' => 733,
                'nombre' => 'Soshanguve',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -25.483403,
                'longitude' => 28.106827,
            ),
            233 => 
            array (
                'id' => 734,
                'nombre' => 'Newcastle',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => 47.538989,
                'longitude' => -122.155677,
            ),
            234 => 
            array (
                'id' => 735,
                'nombre' => 'East London',
                'fk_paises' => 237,
                'region' => 'Eastern Cape',
                'latitude' => -33.029158,
                'longitude' => 27.854587,
            ),
            235 => 
            array (
                'id' => 736,
                'nombre' => 'Welkom',
                'fk_paises' => 237,
                'region' => 'Free State',
                'latitude' => -28.004565,
                'longitude' => 26.773216,
            ),
            236 => 
            array (
                'id' => 737,
                'nombre' => 'Kimberley',
                'fk_paises' => 237,
                'region' => 'Northern Cape',
                'latitude' => -28.728238,
                'longitude' => 24.749911,
            ),
            237 => 
            array (
                'id' => 738,
                'nombre' => 'Uitenhage',
                'fk_paises' => 237,
                'region' => 'Eastern Cape',
                'latitude' => -33.768717,
                'longitude' => 25.414119,
            ),
            238 => 
            array (
                'id' => 739,
                'nombre' => 'Chatsworth',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => 34.250636,
                'longitude' => -118.61481,
            ),
            239 => 
            array (
                'id' => 740,
                'nombre' => 'Mdantsane',
                'fk_paises' => 237,
                'region' => 'Eastern Cape',
                'latitude' => -32.945965,
                'longitude' => 27.725608,
            ),
            240 => 
            array (
                'id' => 741,
                'nombre' => 'Krugersdorp',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.096322,
                'longitude' => 27.807696,
            ),
            241 => 
            array (
                'id' => 742,
                'nombre' => 'Botshabelo',
                'fk_paises' => 237,
                'region' => 'Free State',
                'latitude' => -29.267273,
                'longitude' => 26.726071,
            ),
            242 => 
            array (
                'id' => 743,
                'nombre' => 'Brakpan',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.290811,
                'longitude' => 28.322817,
            ),
            243 => 
            array (
                'id' => 744,
                'nombre' => 'Witbank',
                'fk_paises' => 237,
                'region' => 'Mpumalanga',
                'latitude' => -25.872782,
                'longitude' => 29.255323,
            ),
            244 => 
            array (
                'id' => 745,
                'nombre' => 'Oberholzer',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.348465,
                'longitude' => 27.383681,
            ),
            245 => 
            array (
                'id' => 746,
                'nombre' => 'Germiston',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.225873,
                'longitude' => 28.170779,
            ),
            246 => 
            array (
                'id' => 747,
                'nombre' => 'Springs',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.260724,
                'longitude' => 28.463038,
            ),
            247 => 
            array (
                'id' => 748,
                'nombre' => 'Westonaria',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.317808,
                'longitude' => 27.650537,
            ),
            248 => 
            array (
                'id' => 749,
                'nombre' => 'Randfontein',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.19915,
                'longitude' => 27.678685,
            ),
            249 => 
            array (
                'id' => 750,
                'nombre' => 'Paarl',
                'fk_paises' => 237,
                'region' => 'Western Cape',
                'latitude' => -33.73423,
                'longitude' => 18.962109,
            ),
            250 => 
            array (
                'id' => 751,
                'nombre' => 'Potchefstroom',
                'fk_paises' => 237,
                'region' => 'North West',
                'latitude' => -26.71453,
                'longitude' => 27.097048,
            ),
            251 => 
            array (
                'id' => 752,
                'nombre' => 'Rustenburg',
                'fk_paises' => 237,
                'region' => 'North West',
                'latitude' => -25.654448,
                'longitude' => 27.255854,
            ),
            252 => 
            array (
                'id' => 753,
                'nombre' => 'Nigel',
                'fk_paises' => 237,
                'region' => 'Gauteng',
                'latitude' => -26.422752,
                'longitude' => 28.478612,
            ),
            253 => 
            array (
                'id' => 754,
                'nombre' => 'George',
                'fk_paises' => 237,
                'region' => 'Western Cape',
                'latitude' => -33.988128,
                'longitude' => 22.452988,
            ),
            254 => 
            array (
                'id' => 755,
                'nombre' => 'Ladysmith',
                'fk_paises' => 237,
                'region' => 'KwaZulu-Natal',
                'latitude' => -28.559671,
                'longitude' => 29.780789,
            ),
            255 => 
            array (
                'id' => 756,
                'nombre' => 'Addis Abeba',
                'fk_paises' => 69,
                'region' => 'Addis Abeba',
                'latitude' => 8.980603,
                'longitude' => 38.757761,
            ),
            256 => 
            array (
                'id' => 757,
                'nombre' => 'Dire Dawa',
                'fk_paises' => 69,
                'region' => 'Dire Dawa',
                'latitude' => 9.600875,
                'longitude' => 41.850142,
            ),
            257 => 
            array (
                'id' => 758,
                'nombre' => 'Nazret',
                'fk_paises' => 69,
                'region' => 'Oromia',
                'latitude' => 8.526349,
                'longitude' => 39.258329,
            ),
            258 => 
            array (
                'id' => 759,
                'nombre' => 'Gonder',
                'fk_paises' => 69,
                'region' => 'Amhara',
                'latitude' => 12.603018,
                'longitude' => 37.452132,
            ),
            259 => 
            array (
                'id' => 760,
                'nombre' => 'Dese',
                'fk_paises' => 69,
                'region' => 'Amhara',
                'latitude' => 11.12704,
                'longitude' => 39.636331,
            ),
            260 => 
            array (
                'id' => 761,
                'nombre' => 'Mekele',
                'fk_paises' => 69,
                'region' => 'Tigray',
                'latitude' => 13.49355,
                'longitude' => 39.465738,
            ),
            261 => 
            array (
                'id' => 762,
                'nombre' => 'Bahir Dar',
                'fk_paises' => 69,
                'region' => 'Amhara',
                'latitude' => 11.574209,
                'longitude' => 37.361353,
            ),
            262 => 
            array (
                'id' => 763,
                'nombre' => 'Stanley',
                'fk_paises' => 72,
                'region' => 'East Falkland',
                'latitude' => 44.338626,
                'longitude' => -100.800005,
            ),
            263 => 
            array (
                'id' => 764,
                'nombre' => 'Suva',
                'fk_paises' => 71,
                'region' => 'Central',
                'latitude' => -18.124809,
                'longitude' => 178.450079,
            ),
            264 => 
            array (
                'id' => 765,
                'nombre' => 'Quezon',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.676041,
                'longitude' => 121.0437,
            ),
            265 => 
            array (
                'id' => 766,
                'nombre' => 'Manila',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.599512,
                'longitude' => 120.98422,
            ),
            266 => 
            array (
                'id' => 767,
                'nombre' => 'Kalookan',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.756578,
                'longitude' => 121.044977,
            ),
            267 => 
            array (
                'id' => 768,
                'nombre' => 'Davao',
                'fk_paises' => 169,
                'region' => 'Southern Mindanao',
                'latitude' => 7.190708,
                'longitude' => 125.455341,
            ),
            268 => 
            array (
                'id' => 769,
                'nombre' => 'Cebu',
                'fk_paises' => 169,
                'region' => 'Central Visayas',
                'latitude' => 10.315699,
                'longitude' => 123.885437,
            ),
            269 => 
            array (
                'id' => 770,
                'nombre' => 'Zamboanga',
                'fk_paises' => 169,
                'region' => 'Western Mindanao',
                'latitude' => 6.921442,
                'longitude' => 122.079027,
            ),
            270 => 
            array (
                'id' => 771,
                'nombre' => 'Pasig',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.576377,
                'longitude' => 121.08511,
            ),
            271 => 
            array (
                'id' => 772,
                'nombre' => 'Valenzuela',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.701056,
                'longitude' => 120.983023,
            ),
            272 => 
            array (
                'id' => 773,
                'nombre' => 'Las Piñas',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.444546,
                'longitude' => 120.993874,
            ),
            273 => 
            array (
                'id' => 774,
                'nombre' => 'Antipolo',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.625483,
                'longitude' => 121.124485,
            ),
            274 => 
            array (
                'id' => 775,
                'nombre' => 'Taguig',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.517618,
                'longitude' => 121.050864,
            ),
            275 => 
            array (
                'id' => 776,
                'nombre' => 'Cagayan de Oro',
                'fk_paises' => 169,
                'region' => 'Northern Mindanao',
                'latitude' => 8.454236,
                'longitude' => 124.631898,
            ),
            276 => 
            array (
                'id' => 777,
                'nombre' => 'Parañaque',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.47931,
                'longitude' => 121.019823,
            ),
            277 => 
            array (
                'id' => 778,
                'nombre' => 'Makati',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.554729,
                'longitude' => 121.024445,
            ),
            278 => 
            array (
                'id' => 779,
                'nombre' => 'Bacolod',
                'fk_paises' => 169,
                'region' => 'Western Visayas',
                'latitude' => 10.640739,
                'longitude' => 122.968956,
            ),
            279 => 
            array (
                'id' => 780,
                'nombre' => 'General Santos',
                'fk_paises' => 169,
                'region' => 'Southern Mindanao',
                'latitude' => 6.116386,
                'longitude' => 125.171618,
            ),
            280 => 
            array (
                'id' => 781,
                'nombre' => 'Marikina',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.65073,
                'longitude' => 121.102855,
            ),
            281 => 
            array (
                'id' => 782,
                'nombre' => 'Dasmariñas',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.299018,
                'longitude' => 120.95897,
            ),
            282 => 
            array (
                'id' => 783,
                'nombre' => 'Muntinlupa',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.408133,
                'longitude' => 121.041467,
            ),
            283 => 
            array (
                'id' => 784,
                'nombre' => 'Iloilo',
                'fk_paises' => 169,
                'region' => 'Western Visayas',
                'latitude' => 10.72015,
                'longitude' => 122.562106,
            ),
            284 => 
            array (
                'id' => 785,
                'nombre' => 'Pasay',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.537752,
                'longitude' => 121.001379,
            ),
            285 => 
            array (
                'id' => 786,
                'nombre' => 'Malabon',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.668075,
                'longitude' => 120.965845,
            ),
            286 => 
            array (
                'id' => 787,
                'nombre' => 'San José del Monte',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 14.820568,
                'longitude' => 121.102294,
            ),
            287 => 
            array (
                'id' => 788,
                'nombre' => 'Bacoor',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.412993,
                'longitude' => 120.973679,
            ),
            288 => 
            array (
                'id' => 789,
                'nombre' => 'Iligan',
                'fk_paises' => 169,
                'region' => 'Central Mindanao',
                'latitude' => 8.228021,
                'longitude' => 124.245242,
            ),
            289 => 
            array (
                'id' => 790,
                'nombre' => 'Calamba',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.187671,
                'longitude' => 121.125082,
            ),
            290 => 
            array (
                'id' => 791,
                'nombre' => 'Mandaluyong',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.579444,
                'longitude' => 121.035917,
            ),
            291 => 
            array (
                'id' => 792,
                'nombre' => 'Butuan',
                'fk_paises' => 169,
                'region' => 'Caraga',
                'latitude' => 8.947538,
                'longitude' => 125.540623,
            ),
            292 => 
            array (
                'id' => 793,
                'nombre' => 'Angeles',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 15.144985,
                'longitude' => 120.588703,
            ),
            293 => 
            array (
                'id' => 794,
                'nombre' => 'Tarlac',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 15.447035,
                'longitude' => 120.469642,
            ),
            294 => 
            array (
                'id' => 795,
                'nombre' => 'Mandaue',
                'fk_paises' => 169,
                'region' => 'Central Visayas',
                'latitude' => 10.340262,
                'longitude' => 123.941552,
            ),
            295 => 
            array (
                'id' => 796,
                'nombre' => 'Baguio',
                'fk_paises' => 169,
                'region' => 'CAR',
                'latitude' => 16.402333,
                'longitude' => 120.596007,
            ),
            296 => 
            array (
                'id' => 797,
                'nombre' => 'Batangas',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 13.756465,
                'longitude' => 121.058308,
            ),
            297 => 
            array (
                'id' => 798,
                'nombre' => 'Cainta',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.586484,
                'longitude' => 121.114876,
            ),
            298 => 
            array (
                'id' => 799,
                'nombre' => 'San Pedro',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 33.736062,
                'longitude' => -118.292246,
            ),
            299 => 
            array (
                'id' => 800,
                'nombre' => 'Navotas',
                'fk_paises' => 169,
                'region' => 'National Capital Reg',
                'latitude' => 14.67149,
                'longitude' => 120.939847,
            ),
            300 => 
            array (
                'id' => 801,
                'nombre' => 'Cabanatuan',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 15.486505,
                'longitude' => 120.973393,
            ),
            301 => 
            array (
                'id' => 802,
                'nombre' => 'San Fernando',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 36.471865,
                'longitude' => -6.196595,
            ),
            302 => 
            array (
                'id' => 803,
                'nombre' => 'Lipa',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 40.728787,
                'longitude' => -73.619235,
            ),
            303 => 
            array (
                'id' => 804,
                'nombre' => 'Lapu-Lapu',
                'fk_paises' => 169,
                'region' => 'Central Visayas',
                'latitude' => 10.266182,
                'longitude' => 123.997295,
            ),
            304 => 
            array (
                'id' => 805,
                'nombre' => 'San Pablo',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 44.953703,
                'longitude' => -93.089958,
            ),
            305 => 
            array (
                'id' => 806,
                'nombre' => 'Biñan',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.303635,
                'longitude' => 121.078149,
            ),
            306 => 
            array (
                'id' => 807,
                'nombre' => 'Taytay',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.558555,
                'longitude' => 121.136082,
            ),
            307 => 
            array (
                'id' => 808,
                'nombre' => 'Lucena',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 37.412933,
                'longitude' => -4.496101,
            ),
            308 => 
            array (
                'id' => 809,
                'nombre' => 'Imus',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 37.358849,
                'longitude' => -5.98698,
            ),
            309 => 
            array (
                'id' => 810,
                'nombre' => 'Olongapo',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 14.83863,
                'longitude' => 120.284202,
            ),
            310 => 
            array (
                'id' => 811,
                'nombre' => 'Binangonan',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.476548,
                'longitude' => 121.195743,
            ),
            311 => 
            array (
                'id' => 812,
                'nombre' => 'Santa Rosa',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 38.440429,
                'longitude' => -122.714055,
            ),
            312 => 
            array (
                'id' => 813,
                'nombre' => 'Tagum',
                'fk_paises' => 169,
                'region' => 'Southern Mindanao',
                'latitude' => -12.04334,
                'longitude' => -77.072662,
            ),
            313 => 
            array (
                'id' => 814,
                'nombre' => 'Tacloban',
                'fk_paises' => 169,
                'region' => 'Eastern Visayas',
                'latitude' => 11.254339,
                'longitude' => 124.961687,
            ),
            314 => 
            array (
                'id' => 815,
                'nombre' => 'Malolos',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 14.852739,
                'longitude' => 120.816038,
            ),
            315 => 
            array (
                'id' => 816,
                'nombre' => 'Mabalacat',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 15.222871,
                'longitude' => 120.574439,
            ),
            316 => 
            array (
                'id' => 817,
                'nombre' => 'Cotabato',
                'fk_paises' => 169,
                'region' => 'Central Mindanao',
                'latitude' => 7.204667,
                'longitude' => 124.231044,
            ),
            317 => 
            array (
                'id' => 818,
                'nombre' => 'Meycauayan',
                'fk_paises' => 169,
                'region' => 'Central Luzon',
                'latitude' => 14.749886,
                'longitude' => 120.973929,
            ),
            318 => 
            array (
                'id' => 819,
                'nombre' => 'Puerto Princesa',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 9.967216,
                'longitude' => 118.78551,
            ),
            319 => 
            array (
                'id' => 820,
                'nombre' => 'Legazpi',
                'fk_paises' => 169,
                'region' => 'Bicol',
                'latitude' => 43.052357,
                'longitude' => -2.331514,
            ),
            320 => 
            array (
                'id' => 821,
                'nombre' => 'Silang',
                'fk_paises' => 169,
                'region' => 'Southern Tagalog',
                'latitude' => 14.218309,
                'longitude' => 120.972854,
            ),
            321 => 
            array (
                'id' => 822,
                'nombre' => 'Ormoc',
                'fk_paises' => 169,
                'region' => 'Eastern Visayas',
                'latitude' => 11.038428,
                'longitude' => 124.61927,
            ),
            322 => 
            array (
                'id' => 823,
                'nombre' => 'San Carlos',
                'fk_paises' => 169,
                'region' => 'Ilocos',
                'latitude' => 9.659895,
                'longitude' => -68.58129,
            ),
            323 => 
            array (
                'id' => 824,
                'nombre' => 'Kabankalan',
                'fk_paises' => 169,
                'region' => 'Western Visayas',
                'latitude' => 9.913412,
                'longitude' => 122.853576,
            ),
        ));
        
        
    }
}