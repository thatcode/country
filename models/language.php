<?php
class Language extends CountryAppModel {

    var $name = 'Language';

    var $hasAndBelongsToMany = array(
        'Country' => array(
            'className' => 'Country.Country'
        )
    );

    var $records = array(
    array(
        'id' => 1,
        'language' => 'ca',
    ),
    array(
        'id' => 2,
        'language' => 'fr-AD',
    ),
    array(
        'id' => 3,
        'language' => 'pt',
    ),
    array(
        'id' => 4,
        'language' => 'ar-AE',
    ),
    array(
        'id' => 5,
        'language' => 'fa',
    ),
    array(
        'id' => 6,
        'language' => 'en',
    ),
    array(
        'id' => 7,
        'language' => 'hi',
    ),
    array(
        'id' => 8,
        'language' => 'ur',
    ),
    array(
        'id' => 9,
        'language' => 'fa-AF',
    ),
    array(
        'id' => 10,
        'language' => 'ps',
    ),
    array(
        'id' => 11,
        'language' => 'uz-AF',
    ),
    array(
        'id' => 12,
        'language' => 'tk',
    ),
    array(
        'id' => 13,
        'language' => 'en-AG',
    ),
    array(
        'id' => 14,
        'language' => 'en-AI',
    ),
    array(
        'id' => 15,
        'language' => 'sq',
    ),
    array(
        'id' => 16,
        'language' => 'el',
    ),
    array(
        'id' => 17,
        'language' => 'hy',
    ),
    array(
        'id' => 18,
        'language' => 'nl-AN',
    ),
    array(
        'id' => 19,
        'language' => 'es',
    ),
    array(
        'id' => 20,
        'language' => 'pt-AO',
    ),
    array(
        'id' => 21,
        'language' => '',
    ),
    array(
        'id' => 22,
        'language' => 'es-AR',
    ),
    array(
        'id' => 23,
        'language' => 'it',
    ),
    array(
        'id' => 24,
        'language' => 'de',
    ),
    array(
        'id' => 25,
        'language' => 'fr',
    ),
    array(
        'id' => 26,
        'language' => 'en-AS',
    ),
    array(
        'id' => 27,
        'language' => 'sm',
    ),
    array(
        'id' => 28,
        'language' => 'to',
    ),
    array(
        'id' => 29,
        'language' => 'de-AT',
    ),
    array(
        'id' => 30,
        'language' => 'hr',
    ),
    array(
        'id' => 31,
        'language' => 'hu',
    ),
    array(
        'id' => 32,
        'language' => 'sl',
    ),
    array(
        'id' => 33,
        'language' => 'en-AU',
    ),
    array(
        'id' => 34,
        'language' => 'nl-AW',
    ),
    array(
        'id' => 35,
        'language' => 'sv-AX',
    ),
    array(
        'id' => 36,
        'language' => 'az',
    ),
    array(
        'id' => 37,
        'language' => 'ru',
    ),
    array(
        'id' => 38,
        'language' => 'bs',
    ),
    array(
        'id' => 39,
        'language' => 'hr-BA',
    ),
    array(
        'id' => 40,
        'language' => 'sr-BA',
    ),
    array(
        'id' => 41,
        'language' => 'en-BB',
    ),
    array(
        'id' => 42,
        'language' => 'bn-BD',
    ),
    array(
        'id' => 43,
        'language' => 'nl-BE',
    ),
    array(
        'id' => 44,
        'language' => 'fr-BE',
    ),
    array(
        'id' => 45,
        'language' => 'de-BE',
    ),
    array(
        'id' => 46,
        'language' => 'fr-BF',
    ),
    array(
        'id' => 47,
        'language' => 'bg',
    ),
    array(
        'id' => 48,
        'language' => 'tr-BG',
    ),
    array(
        'id' => 49,
        'language' => 'ar-BH',
    ),
    array(
        'id' => 50,
        'language' => 'fr-BI',
    ),
    array(
        'id' => 51,
        'language' => 'rn',
    ),
    array(
        'id' => 52,
        'language' => 'fr-BJ',
    ),
    array(
        'id' => 53,
        'language' => 'en-BM',
    ),
    array(
        'id' => 54,
        'language' => 'ms-BN',
    ),
    array(
        'id' => 55,
        'language' => 'en-BN',
    ),
    array(
        'id' => 56,
        'language' => 'es-BO',
    ),
    array(
        'id' => 57,
        'language' => 'qu',
    ),
    array(
        'id' => 58,
        'language' => 'ay',
    ),
    array(
        'id' => 59,
        'language' => 'pt-BR',
    ),
    array(
        'id' => 60,
        'language' => 'en-BS',
    ),
    array(
        'id' => 61,
        'language' => 'dz',
    ),
    array(
        'id' => 62,
        'language' => 'en-BW',
    ),
    array(
        'id' => 63,
        'language' => 'tn-BW',
    ),
    array(
        'id' => 64,
        'language' => 'be',
    ),
    array(
        'id' => 65,
        'language' => 'cru',
    ),
    array(
        'id' => 66,
        'language' => 'en-BZ',
    ),
    array(
        'id' => 67,
        'language' => 'en-CA',
    ),
    array(
        'id' => 68,
        'language' => 'fr-CA',
    ),
    array(
        'id' => 69,
        'language' => 'ms-CC',
    ),
    array(
        'id' => 70,
        'language' => 'fr-CD',
    ),
    array(
        'id' => 71,
        'language' => 'ln',
    ),
    array(
        'id' => 72,
        'language' => 'kg',
    ),
    array(
        'id' => 73,
        'language' => 'fr-CF',
    ),
    array(
        'id' => 74,
        'language' => 'fr-CG',
    ),
    array(
        'id' => 75,
        'language' => 'ln-CG',
    ),
    array(
        'id' => 76,
        'language' => 'de-CH',
    ),
    array(
        'id' => 77,
        'language' => 'fr-CH',
    ),
    array(
        'id' => 78,
        'language' => 'it-CH',
    ),
    array(
        'id' => 79,
        'language' => 'rm',
    ),
    array(
        'id' => 80,
        'language' => 'fr-CI',
    ),
    array(
        'id' => 81,
        'language' => 'en-CK',
    ),
    array(
        'id' => 82,
        'language' => 'mi',
    ),
    array(
        'id' => 83,
        'language' => 'es-CL',
    ),
    array(
        'id' => 84,
        'language' => 'en-CM',
    ),
    array(
        'id' => 85,
        'language' => 'fr-CM',
    ),
    array(
        'id' => 86,
        'language' => 'zh-CN',
    ),
    array(
        'id' => 87,
        'language' => 'yue',
    ),
    array(
        'id' => 88,
        'language' => 'wuu',
    ),
    array(
        'id' => 89,
        'language' => 'es-CO',
    ),
    array(
        'id' => 90,
        'language' => 'es-CR',
    ),
    array(
        'id' => 91,
        'language' => 'es-CU',
    ),
    array(
        'id' => 92,
        'language' => 'pt-CV',
    ),
    array(
        'id' => 93,
        'language' => 'zh',
    ),
    array(
        'id' => 94,
        'language' => 'el-CY',
    ),
    array(
        'id' => 95,
        'language' => 'tr-CY',
    ),
    array(
        'id' => 96,
        'language' => 'cs',
    ),
    array(
        'id' => 97,
        'language' => 'sk',
    ),
    array(
        'id' => 98,
        'language' => 'fr-DJ',
    ),
    array(
        'id' => 99,
        'language' => 'ar',
    ),
    array(
        'id' => 100,
        'language' => 'so-DJ',
    ),
    array(
        'id' => 101,
        'language' => 'aa',
    ),
    array(
        'id' => 102,
        'language' => 'da-DK',
    ),
    array(
        'id' => 103,
        'language' => 'fo',
    ),
    array(
        'id' => 104,
        'language' => 'de-DK',
    ),
    array(
        'id' => 105,
        'language' => 'en-DM',
    ),
    array(
        'id' => 106,
        'language' => 'es-DO',
    ),
    array(
        'id' => 107,
        'language' => 'ar-DZ',
    ),
    array(
        'id' => 108,
        'language' => 'es-EC',
    ),
    array(
        'id' => 109,
        'language' => 'et',
    ),
    array(
        'id' => 110,
        'language' => 'ar-EG',
    ),
    array(
        'id' => 111,
        'language' => 'mey',
    ),
    array(
        'id' => 112,
        'language' => 'aa-ER',
    ),
    array(
        'id' => 113,
        'language' => 'tig',
    ),
    array(
        'id' => 114,
        'language' => 'kun',
    ),
    array(
        'id' => 115,
        'language' => 'ti-ER',
    ),
    array(
        'id' => 116,
        'language' => 'es-ES',
    ),
    array(
        'id' => 117,
        'language' => 'gl',
    ),
    array(
        'id' => 118,
        'language' => 'eu',
    ),
    array(
        'id' => 119,
        'language' => 'am',
    ),
    array(
        'id' => 120,
        'language' => 'en-ET',
    ),
    array(
        'id' => 121,
        'language' => 'om-ET',
    ),
    array(
        'id' => 122,
        'language' => 'ti-ET',
    ),
    array(
        'id' => 123,
        'language' => 'so-ET',
    ),
    array(
        'id' => 124,
        'language' => 'sid',
    ),
    array(
        'id' => 125,
        'language' => 'fi-FI',
    ),
    array(
        'id' => 126,
        'language' => 'sv-FI',
    ),
    array(
        'id' => 127,
        'language' => 'smn',
    ),
    array(
        'id' => 128,
        'language' => 'en-FJ',
    ),
    array(
        'id' => 129,
        'language' => 'fj',
    ),
    array(
        'id' => 130,
        'language' => 'en-FK',
    ),
    array(
        'id' => 131,
        'language' => 'en-FM',
    ),
    array(
        'id' => 132,
        'language' => 'chk',
    ),
    array(
        'id' => 133,
        'language' => 'pon',
    ),
    array(
        'id' => 134,
        'language' => 'yap',
    ),
    array(
        'id' => 135,
        'language' => 'kos',
    ),
    array(
        'id' => 136,
        'language' => 'uli',
    ),
    array(
        'id' => 137,
        'language' => 'woe',
    ),
    array(
        'id' => 138,
        'language' => 'nkr',
    ),
    array(
        'id' => 139,
        'language' => 'kpg',
    ),
    array(
        'id' => 140,
        'language' => 'da-FO',
    ),
    array(
        'id' => 141,
        'language' => 'fr-FR',
    ),
    array(
        'id' => 142,
        'language' => 'frp',
    ),
    array(
        'id' => 143,
        'language' => 'br',
    ),
    array(
        'id' => 144,
        'language' => 'co',
    ),
    array(
        'id' => 145,
        'language' => 'fr-GA',
    ),
    array(
        'id' => 146,
        'language' => 'en-GB',
    ),
    array(
        'id' => 147,
        'language' => 'cy-GB',
    ),
    array(
        'id' => 148,
        'language' => 'gd',
    ),
    array(
        'id' => 149,
        'language' => 'en-GD',
    ),
    array(
        'id' => 150,
        'language' => 'ka',
    ),
    array(
        'id' => 151,
        'language' => 'fr-GF',
    ),
    array(
        'id' => 152,
        'language' => 'en-GH',
    ),
    array(
        'id' => 153,
        'language' => 'ak',
    ),
    array(
        'id' => 154,
        'language' => 'ee',
    ),
    array(
        'id' => 155,
        'language' => 'tw',
    ),
    array(
        'id' => 156,
        'language' => 'en-GI',
    ),
    array(
        'id' => 157,
        'language' => 'kl',
    ),
    array(
        'id' => 158,
        'language' => 'da-GL',
    ),
    array(
        'id' => 159,
        'language' => 'en-GM',
    ),
    array(
        'id' => 160,
        'language' => 'mnk',
    ),
    array(
        'id' => 161,
        'language' => 'wof',
    ),
    array(
        'id' => 162,
        'language' => 'wo',
    ),
    array(
        'id' => 163,
        'language' => 'ff',
    ),
    array(
        'id' => 164,
        'language' => 'fr-GN',
    ),
    array(
        'id' => 165,
        'language' => 'fr-GP',
    ),
    array(
        'id' => 166,
        'language' => 'es-GQ',
    ),
    array(
        'id' => 167,
        'language' => 'el-GR',
    ),
    array(
        'id' => 168,
        'language' => 'es-GT',
    ),
    array(
        'id' => 169,
        'language' => 'en-GU',
    ),
    array(
        'id' => 170,
        'language' => 'ch-GU',
    ),
    array(
        'id' => 171,
        'language' => 'pt-GW',
    ),
    array(
        'id' => 172,
        'language' => 'pov',
    ),
    array(
        'id' => 173,
        'language' => 'en-GY',
    ),
    array(
        'id' => 174,
        'language' => 'zh-HK',
    ),
    array(
        'id' => 175,
        'language' => 'es-HN',
    ),
    array(
        'id' => 176,
        'language' => 'hr-HR',
    ),
    array(
        'id' => 177,
        'language' => 'sr',
    ),
    array(
        'id' => 178,
        'language' => 'ht',
    ),
    array(
        'id' => 179,
        'language' => 'fr-HT',
    ),
    array(
        'id' => 180,
        'language' => 'hu-HU',
    ),
    array(
        'id' => 181,
        'language' => 'id',
    ),
    array(
        'id' => 182,
        'language' => 'nl',
    ),
    array(
        'id' => 183,
        'language' => 'jv',
    ),
    array(
        'id' => 184,
        'language' => 'en-IE',
    ),
    array(
        'id' => 185,
        'language' => 'ga-IE',
    ),
    array(
        'id' => 186,
        'language' => 'he',
    ),
    array(
        'id' => 187,
        'language' => 'ar-IL',
    ),
    array(
        'id' => 188,
        'language' => 'en-IL',
    ),
    array(
        'id' => 189,
        'language' => 'gv',
    ),
    array(
        'id' => 190,
        'language' => 'en-IN',
    ),
    array(
        'id' => 191,
        'language' => 'bn',
    ),
    array(
        'id' => 192,
        'language' => 'te',
    ),
    array(
        'id' => 193,
        'language' => 'mr',
    ),
    array(
        'id' => 194,
        'language' => 'ta',
    ),
    array(
        'id' => 195,
        'language' => 'gu',
    ),
    array(
        'id' => 196,
        'language' => 'ml',
    ),
    array(
        'id' => 197,
        'language' => 'kn',
    ),
    array(
        'id' => 198,
        'language' => 'or',
    ),
    array(
        'id' => 199,
        'language' => 'pa',
    ),
    array(
        'id' => 200,
        'language' => 'as',
    ),
    array(
        'id' => 201,
        'language' => 'ks',
    ),
    array(
        'id' => 202,
        'language' => 'sd',
    ),
    array(
        'id' => 203,
        'language' => 'sa',
    ),
    array(
        'id' => 204,
        'language' => 'ur-IN',
    ),
    array(
        'id' => 205,
        'language' => 'en-IO',
    ),
    array(
        'id' => 206,
        'language' => 'ar-IQ',
    ),
    array(
        'id' => 207,
        'language' => 'ku',
    ),
    array(
        'id' => 208,
        'language' => 'fa-IR',
    ),
    array(
        'id' => 209,
        'language' => 'is',
    ),
    array(
        'id' => 210,
        'language' => 'da',
    ),
    array(
        'id' => 211,
        'language' => 'sv',
    ),
    array(
        'id' => 212,
        'language' => 'no',
    ),
    array(
        'id' => 213,
        'language' => 'it-IT',
    ),
    array(
        'id' => 214,
        'language' => 'de-IT',
    ),
    array(
        'id' => 215,
        'language' => 'fr-IT',
    ),
    array(
        'id' => 216,
        'language' => 'en-JM',
    ),
    array(
        'id' => 217,
        'language' => 'ar-JO',
    ),
    array(
        'id' => 218,
        'language' => 'ja',
    ),
    array(
        'id' => 219,
        'language' => 'en-KE',
    ),
    array(
        'id' => 220,
        'language' => 'sw-KE',
    ),
    array(
        'id' => 221,
        'language' => 'ky',
    ),
    array(
        'id' => 222,
        'language' => 'uz',
    ),
    array(
        'id' => 223,
        'language' => 'km',
    ),
    array(
        'id' => 224,
        'language' => 'en-KI',
    ),
    array(
        'id' => 225,
        'language' => 'gil',
    ),
    array(
        'id' => 226,
        'language' => 'fr-KM',
    ),
    array(
        'id' => 227,
        'language' => 'en-KN',
    ),
    array(
        'id' => 228,
        'language' => 'ko-KP',
    ),
    array(
        'id' => 229,
        'language' => 'ko-KR',
    ),
    array(
        'id' => 230,
        'language' => 'ar-KW',
    ),
    array(
        'id' => 231,
        'language' => 'en-KY',
    ),
    array(
        'id' => 232,
        'language' => 'kk',
    ),
    array(
        'id' => 233,
        'language' => 'lo',
    ),
    array(
        'id' => 234,
        'language' => 'ar-LB',
    ),
    array(
        'id' => 235,
        'language' => 'fr-LB',
    ),
    array(
        'id' => 236,
        'language' => 'en-LC',
    ),
    array(
        'id' => 237,
        'language' => 'de-LI',
    ),
    array(
        'id' => 238,
        'language' => 'si',
    ),
    array(
        'id' => 239,
        'language' => 'en-LR',
    ),
    array(
        'id' => 240,
        'language' => 'en-LS',
    ),
    array(
        'id' => 241,
        'language' => 'st',
    ),
    array(
        'id' => 242,
        'language' => 'zu',
    ),
    array(
        'id' => 243,
        'language' => 'xh',
    ),
    array(
        'id' => 244,
        'language' => 'lt',
    ),
    array(
        'id' => 245,
        'language' => 'pl',
    ),
    array(
        'id' => 246,
        'language' => 'lb',
    ),
    array(
        'id' => 247,
        'language' => 'de-LU',
    ),
    array(
        'id' => 248,
        'language' => 'fr-LU',
    ),
    array(
        'id' => 249,
        'language' => 'lv',
    ),
    array(
        'id' => 250,
        'language' => 'ar-LY',
    ),
    array(
        'id' => 251,
        'language' => 'ar-MA',
    ),
    array(
        'id' => 252,
        'language' => 'fr-MC',
    ),
    array(
        'id' => 253,
        'language' => 'mo',
    ),
    array(
        'id' => 254,
        'language' => 'ro',
    ),
    array(
        'id' => 255,
        'language' => 'gag',
    ),
    array(
        'id' => 256,
        'language' => 'tr',
    ),
    array(
        'id' => 257,
        'language' => 'rom',
    ),
    array(
        'id' => 258,
        'language' => 'fr-MG',
    ),
    array(
        'id' => 259,
        'language' => 'mg',
    ),
    array(
        'id' => 260,
        'language' => 'mh',
    ),
    array(
        'id' => 261,
        'language' => 'en-MH',
    ),
    array(
        'id' => 262,
        'language' => 'mk',
    ),
    array(
        'id' => 263,
        'language' => 'rmm',
    ),
    array(
        'id' => 264,
        'language' => 'fr-ML',
    ),
    array(
        'id' => 265,
        'language' => 'bm',
    ),
    array(
        'id' => 266,
        'language' => 'my',
    ),
    array(
        'id' => 267,
        'language' => 'mn',
    ),
    array(
        'id' => 268,
        'language' => 'zh-MO',
    ),
    array(
        'id' => 269,
        'language' => 'fil',
    ),
    array(
        'id' => 270,
        'language' => 'tl',
    ),
    array(
        'id' => 271,
        'language' => 'ch-MP',
    ),
    array(
        'id' => 272,
        'language' => 'en-MP',
    ),
    array(
        'id' => 273,
        'language' => 'fr-MQ',
    ),
    array(
        'id' => 274,
        'language' => 'ar-MR',
    ),
    array(
        'id' => 275,
        'language' => 'fuc',
    ),
    array(
        'id' => 276,
        'language' => 'snk',
    ),
    array(
        'id' => 277,
        'language' => 'en-MS',
    ),
    array(
        'id' => 278,
        'language' => 'mt',
    ),
    array(
        'id' => 279,
        'language' => 'en-MT',
    ),
    array(
        'id' => 280,
        'language' => 'en-MU',
    ),
    array(
        'id' => 281,
        'language' => 'bho',
    ),
    array(
        'id' => 282,
        'language' => 'dv',
    ),
    array(
        'id' => 283,
        'language' => 'ny',
    ),
    array(
        'id' => 284,
        'language' => 'yao',
    ),
    array(
        'id' => 285,
        'language' => 'tum',
    ),
    array(
        'id' => 286,
        'language' => 'swk',
    ),
    array(
        'id' => 287,
        'language' => 'es-MX',
    ),
    array(
        'id' => 288,
        'language' => 'ms-MY',
    ),
    array(
        'id' => 289,
        'language' => 'th',
    ),
    array(
        'id' => 290,
        'language' => 'pt-MZ',
    ),
    array(
        'id' => 291,
        'language' => 'vmw',
    ),
    array(
        'id' => 292,
        'language' => 'en-NA',
    ),
    array(
        'id' => 293,
        'language' => 'af',
    ),
    array(
        'id' => 294,
        'language' => 'hz',
    ),
    array(
        'id' => 295,
        'language' => 'naq',
    ),
    array(
        'id' => 296,
        'language' => 'fr-NC',
    ),
    array(
        'id' => 297,
        'language' => 'fr-NE',
    ),
    array(
        'id' => 298,
        'language' => 'ha',
    ),
    array(
        'id' => 299,
        'language' => 'kr',
    ),
    array(
        'id' => 300,
        'language' => 'dje',
    ),
    array(
        'id' => 301,
        'language' => 'en-NF',
    ),
    array(
        'id' => 302,
        'language' => 'en-NG',
    ),
    array(
        'id' => 303,
        'language' => 'yo',
    ),
    array(
        'id' => 304,
        'language' => 'ig',
    ),
    array(
        'id' => 305,
        'language' => 'es-NI',
    ),
    array(
        'id' => 306,
        'language' => 'nl-NL',
    ),
    array(
        'id' => 307,
        'language' => 'fy-NL',
    ),
    array(
        'id' => 308,
        'language' => 'nb',
    ),
    array(
        'id' => 309,
        'language' => 'nn',
    ),
    array(
        'id' => 310,
        'language' => 'ne',
    ),
    array(
        'id' => 311,
        'language' => 'na',
    ),
    array(
        'id' => 312,
        'language' => 'en-NR',
    ),
    array(
        'id' => 313,
        'language' => 'niu',
    ),
    array(
        'id' => 314,
        'language' => 'en-NU',
    ),
    array(
        'id' => 315,
        'language' => 'en-NZ',
    ),
    array(
        'id' => 316,
        'language' => 'ar-OM',
    ),
    array(
        'id' => 317,
        'language' => 'bal',
    ),
    array(
        'id' => 318,
        'language' => 'es-PA',
    ),
    array(
        'id' => 319,
        'language' => 'es-PE',
    ),
    array(
        'id' => 320,
        'language' => 'fr-PF',
    ),
    array(
        'id' => 321,
        'language' => 'ty',
    ),
    array(
        'id' => 322,
        'language' => 'en-PG',
    ),
    array(
        'id' => 323,
        'language' => 'ho',
    ),
    array(
        'id' => 324,
        'language' => 'meu',
    ),
    array(
        'id' => 325,
        'language' => 'tpi',
    ),
    array(
        'id' => 326,
        'language' => 'en-PH',
    ),
    array(
        'id' => 327,
        'language' => 'ur-PK',
    ),
    array(
        'id' => 328,
        'language' => 'en-PK',
    ),
    array(
        'id' => 329,
        'language' => 'brh',
    ),
    array(
        'id' => 330,
        'language' => 'fr-PM',
    ),
    array(
        'id' => 331,
        'language' => 'en-PN',
    ),
    array(
        'id' => 332,
        'language' => 'en-PR',
    ),
    array(
        'id' => 333,
        'language' => 'es-PR',
    ),
    array(
        'id' => 334,
        'language' => 'ar-PS',
    ),
    array(
        'id' => 335,
        'language' => 'pt-PT',
    ),
    array(
        'id' => 336,
        'language' => 'mwl',
    ),
    array(
        'id' => 337,
        'language' => 'pau',
    ),
    array(
        'id' => 338,
        'language' => 'sov',
    ),
    array(
        'id' => 339,
        'language' => 'en-PW',
    ),
    array(
        'id' => 340,
        'language' => 'tox',
    ),
    array(
        'id' => 341,
        'language' => 'es-PY',
    ),
    array(
        'id' => 342,
        'language' => 'gn',
    ),
    array(
        'id' => 343,
        'language' => 'ar-QA',
    ),
    array(
        'id' => 344,
        'language' => 'fr-RE',
    ),
    array(
        'id' => 345,
        'language' => 'ru-RU',
    ),
    array(
        'id' => 346,
        'language' => 'rw',
    ),
    array(
        'id' => 347,
        'language' => 'en-RW',
    ),
    array(
        'id' => 348,
        'language' => 'fr-RW',
    ),
    array(
        'id' => 349,
        'language' => 'sw',
    ),
    array(
        'id' => 350,
        'language' => 'ar-SA',
    ),
    array(
        'id' => 351,
        'language' => 'en-SB',
    ),
    array(
        'id' => 352,
        'language' => 'en-SC',
    ),
    array(
        'id' => 353,
        'language' => 'fr-SC',
    ),
    array(
        'id' => 354,
        'language' => 'ar-SD',
    ),
    array(
        'id' => 355,
        'language' => 'fia',
    ),
    array(
        'id' => 356,
        'language' => 'sv-SE',
    ),
    array(
        'id' => 357,
        'language' => 'se',
    ),
    array(
        'id' => 358,
        'language' => 'sma',
    ),
    array(
        'id' => 359,
        'language' => 'fi-SE',
    ),
    array(
        'id' => 360,
        'language' => 'cmn',
    ),
    array(
        'id' => 361,
        'language' => 'en-SG',
    ),
    array(
        'id' => 362,
        'language' => 'ms-SG',
    ),
    array(
        'id' => 363,
        'language' => 'ta-SG',
    ),
    array(
        'id' => 364,
        'language' => 'zh-SG',
    ),
    array(
        'id' => 365,
        'language' => 'en-SH',
    ),
    array(
        'id' => 366,
        'language' => 'sh',
    ),
    array(
        'id' => 367,
        'language' => 'en-SL',
    ),
    array(
        'id' => 368,
        'language' => 'men',
    ),
    array(
        'id' => 369,
        'language' => 'tem',
    ),
    array(
        'id' => 370,
        'language' => 'it-SM',
    ),
    array(
        'id' => 371,
        'language' => 'fr-SN',
    ),
    array(
        'id' => 372,
        'language' => 'so-SO',
    ),
    array(
        'id' => 373,
        'language' => 'ar-SO',
    ),
    array(
        'id' => 374,
        'language' => 'en-SO',
    ),
    array(
        'id' => 375,
        'language' => 'nl-SR',
    ),
    array(
        'id' => 376,
        'language' => 'srn',
    ),
    array(
        'id' => 377,
        'language' => 'hns',
    ),
    array(
        'id' => 378,
        'language' => 'pt-ST',
    ),
    array(
        'id' => 379,
        'language' => 'es-SV',
    ),
    array(
        'id' => 380,
        'language' => 'ar-SY',
    ),
    array(
        'id' => 381,
        'language' => 'arc',
    ),
    array(
        'id' => 382,
        'language' => 'en-SZ',
    ),
    array(
        'id' => 383,
        'language' => 'ss-SZ',
    ),
    array(
        'id' => 384,
        'language' => 'en-TC',
    ),
    array(
        'id' => 385,
        'language' => 'fr-TD',
    ),
    array(
        'id' => 386,
        'language' => 'ar-TD',
    ),
    array(
        'id' => 387,
        'language' => 'sre',
    ),
    array(
        'id' => 388,
        'language' => 'fr-TG',
    ),
    array(
        'id' => 389,
        'language' => 'hna',
    ),
    array(
        'id' => 390,
        'language' => 'kbp',
    ),
    array(
        'id' => 391,
        'language' => 'dag',
    ),
    array(
        'id' => 392,
        'language' => 'tg',
    ),
    array(
        'id' => 393,
        'language' => 'tkl',
    ),
    array(
        'id' => 394,
        'language' => 'en-TK',
    ),
    array(
        'id' => 395,
        'language' => 'tet',
    ),
    array(
        'id' => 396,
        'language' => 'pt-TL',
    ),
    array(
        'id' => 397,
        'language' => 'ar-TN',
    ),
    array(
        'id' => 398,
        'language' => 'en-TO',
    ),
    array(
        'id' => 399,
        'language' => 'tr-TR',
    ),
    array(
        'id' => 400,
        'language' => 'diq',
    ),
    array(
        'id' => 401,
        'language' => 'av',
    ),
    array(
        'id' => 402,
        'language' => 'en-TT',
    ),
    array(
        'id' => 403,
        'language' => 'tvl',
    ),
    array(
        'id' => 404,
        'language' => 'zh-TW',
    ),
    array(
        'id' => 405,
        'language' => 'nan',
    ),
    array(
        'id' => 406,
        'language' => 'hak',
    ),
    array(
        'id' => 407,
        'language' => 'sw-TZ',
    ),
    array(
        'id' => 408,
        'language' => 'uk',
    ),
    array(
        'id' => 409,
        'language' => 'ru-UA',
    ),
    array(
        'id' => 410,
        'language' => 'en-UG',
    ),
    array(
        'id' => 411,
        'language' => 'lg',
    ),
    array(
        'id' => 412,
        'language' => 'en-UM',
    ),
    array(
        'id' => 413,
        'language' => 'en-US',
    ),
    array(
        'id' => 414,
        'language' => 'es-US',
    ),
    array(
        'id' => 415,
        'language' => 'haw',
    ),
    array(
        'id' => 416,
        'language' => 'es-UY',
    ),
    array(
        'id' => 417,
        'language' => 'la',
    ),
    array(
        'id' => 418,
        'language' => 'en-VC',
    ),
    array(
        'id' => 419,
        'language' => 'es-VE',
    ),
    array(
        'id' => 420,
        'language' => 'en-VG',
    ),
    array(
        'id' => 421,
        'language' => 'en-VI',
    ),
    array(
        'id' => 422,
        'language' => 'vi',
    ),
    array(
        'id' => 423,
        'language' => 'bi',
    ),
    array(
        'id' => 424,
        'language' => 'en-VU',
    ),
    array(
        'id' => 425,
        'language' => 'fr-VU',
    ),
    array(
        'id' => 426,
        'language' => 'wls',
    ),
    array(
        'id' => 427,
        'language' => 'fud',
    ),
    array(
        'id' => 428,
        'language' => 'fr-WF',
    ),
    array(
        'id' => 429,
        'language' => 'en-WS',
    ),
    array(
        'id' => 430,
        'language' => 'ar-YE',
    ),
    array(
        'id' => 431,
        'language' => 'fr-YT',
    ),
    array(
        'id' => 432,
        'language' => 'nso',
    ),
    array(
        'id' => 433,
        'language' => 'en-ZA',
    ),
    array(
        'id' => 434,
        'language' => 'tn',
    ),
    array(
        'id' => 435,
        'language' => 'ts',
    ),
    array(
        'id' => 436,
        'language' => 'en-ZM',
    ),
    array(
        'id' => 437,
        'language' => 'bem',
    ),
    array(
        'id' => 438,
        'language' => 'loz',
    ),
    array(
        'id' => 439,
        'language' => 'lun',
    ),
    array(
        'id' => 440,
        'language' => 'lue',
    ),
    array(
        'id' => 441,
        'language' => 'toi',
    ),
    array(
        'id' => 442,
        'language' => 'en-ZW',
    ),
    array(
        'id' => 443,
        'language' => 'sn',
    ),
    array(
        'id' => 444,
        'language' => 'nr',
    ),
    array(
        'id' => 445,
        'language' => 'nd',
    ),
    array(
        'id' => 446,
        'language' => 'cu',
    ),
);

}
