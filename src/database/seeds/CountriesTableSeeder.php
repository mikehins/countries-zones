<?php

namespace mikehins\CountriesZones\database\seeds;

use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		\Schema::disableForeignKeyConstraints();
		
		DB::table('countries')->truncate();
		$countries = [
			[
				'id'         => 1,
				'name'       => 'Afghanistan',
				'iso_code_2' => 'AF',
				'iso_code_3' => 'AFG',
			],
			[
				'id'         => 2,
				'name'       => 'Albania',
				'iso_code_2' => 'AL',
				'iso_code_3' => 'ALB',
			],
			[
				'id'         => 3,
				'name'       => 'Algeria',
				'iso_code_2' => 'DZ',
				'iso_code_3' => 'DZA',
			],
			[
				'id'         => 4,
				'name'       => 'American Samoa',
				'iso_code_2' => 'AS',
				'iso_code_3' => 'ASM',
			],
			[
				'id'         => 5,
				'name'       => 'Andorra',
				'iso_code_2' => 'AD',
				'iso_code_3' => 'AND',
			],
			[
				'id'         => 6,
				'name'       => 'Angola',
				'iso_code_2' => 'AO',
				'iso_code_3' => 'AGO',
			],
			[
				'id'         => 7,
				'name'       => 'Anguilla',
				'iso_code_2' => 'AI',
				'iso_code_3' => 'AIA',
			],
			[
				'id'         => 8,
				'name'       => 'Antarctica',
				'iso_code_2' => 'AQ',
				'iso_code_3' => 'ATA',
			],
			[
				'id'         => 9,
				'name'       => 'Antigua and Barbuda',
				'iso_code_2' => 'AG',
				'iso_code_3' => 'ATG',
			],
			[
				'id'         => 10,
				'name'       => 'Argentina',
				'iso_code_2' => 'AR',
				'iso_code_3' => 'ARG',
			],
			[
				'id'         => 11,
				'name'       => 'Armenia',
				'iso_code_2' => 'AM',
				'iso_code_3' => 'ARM',
			],
			[
				'id'         => 12,
				'name'       => 'Aruba',
				'iso_code_2' => 'AW',
				'iso_code_3' => 'ABW',
			],
			[
				'id'         => 13,
				'name'       => 'Australia',
				'iso_code_2' => 'AU',
				'iso_code_3' => 'AUS',
			],
			[
				'id'         => 14,
				'name'       => 'Austria',
				'iso_code_2' => 'AT',
				'iso_code_3' => 'AUT',
			],
			[
				'id'         => 15,
				'name'       => 'Azerbaijan',
				'iso_code_2' => 'AZ',
				'iso_code_3' => 'AZE',
			],
			[
				'id'         => 16,
				'name'       => 'Bahamas',
				'iso_code_2' => 'BS',
				'iso_code_3' => 'BHS',
			],
			[
				'id'         => 17,
				'name'       => 'Bahrain',
				'iso_code_2' => 'BH',
				'iso_code_3' => 'BHR',
			],
			[
				'id'         => 18,
				'name'       => 'Bangladesh',
				'iso_code_2' => 'BD',
				'iso_code_3' => 'BGD',
			],
			[
				'id'         => 19,
				'name'       => 'Barbados',
				'iso_code_2' => 'BB',
				'iso_code_3' => 'BRB',
			],
			[
				'id'         => 20,
				'name'       => 'Belarus',
				'iso_code_2' => 'BY',
				'iso_code_3' => 'BLR',
			],
			[
				'id'         => 21,
				'name'       => 'Belgium',
				'iso_code_2' => 'BE',
				'iso_code_3' => 'BEL',
			],
			[
				'id'         => 22,
				'name'       => 'Belize',
				'iso_code_2' => 'BZ',
				'iso_code_3' => 'BLZ',
			],
			[
				'id'         => 23,
				'name'       => 'Benin',
				'iso_code_2' => 'BJ',
				'iso_code_3' => 'BEN',
			],
			[
				'id'         => 24,
				'name'       => 'Bermuda',
				'iso_code_2' => 'BM',
				'iso_code_3' => 'BMU',
			],
			[
				'id'         => 25,
				'name'       => 'Bhutan',
				'iso_code_2' => 'BT',
				'iso_code_3' => 'BTN',
			],
			[
				'id'         => 26,
				'name'       => 'Bolivia',
				'iso_code_2' => 'BO',
				'iso_code_3' => 'BOL',
			],
			[
				'id'         => 27,
				'name'       => 'Bosnia and Herzegovina',
				'iso_code_2' => 'BA',
				'iso_code_3' => 'BIH',
			],
			[
				'id'         => 28,
				'name'       => 'Botswana',
				'iso_code_2' => 'BW',
				'iso_code_3' => 'BWA',
			],
			[
				'id'         => 29,
				'name'       => 'Bouvet Island',
				'iso_code_2' => 'BV',
				'iso_code_3' => 'BVT',
			],
			[
				'id'         => 30,
				'name'       => 'Brazil',
				'iso_code_2' => 'BR',
				'iso_code_3' => 'BRA',
			],
			[
				'id'         => 31,
				'name'       => 'British Indian Ocean Territory',
				'iso_code_2' => 'IO',
				'iso_code_3' => 'IOT',
			],
			[
				'id'         => 32,
				'name'       => 'Brunei Darussalam',
				'iso_code_2' => 'BN',
				'iso_code_3' => 'BRN',
			],
			[
				'id'         => 33,
				'name'       => 'Bulgaria',
				'iso_code_2' => 'BG',
				'iso_code_3' => 'BGR',
			],
			[
				'id'         => 34,
				'name'       => 'Burkina Faso',
				'iso_code_2' => 'BF',
				'iso_code_3' => 'BFA',
			],
			[
				'id'         => 35,
				'name'       => 'Burundi',
				'iso_code_2' => 'BI',
				'iso_code_3' => 'BDI',
			],
			[
				'id'         => 36,
				'name'       => 'Cambodia',
				'iso_code_2' => 'KH',
				'iso_code_3' => 'KHM',
			],
			[
				'id'         => 37,
				'name'       => 'Cameroon',
				'iso_code_2' => 'CM',
				'iso_code_3' => 'CMR',
			],
			[
				'id'         => 38,
				'name'       => 'Canada',
				'iso_code_2' => 'CA',
				'iso_code_3' => 'CAN',
			],
			[
				'id'         => 39,
				'name'       => 'Cape Verde',
				'iso_code_2' => 'CV',
				'iso_code_3' => 'CPV',
			],
			[
				'id'         => 40,
				'name'       => 'Cayman Islands',
				'iso_code_2' => 'KY',
				'iso_code_3' => 'CYM',
			],
			[
				'id'         => 41,
				'name'       => 'Central African Republic',
				'iso_code_2' => 'CF',
				'iso_code_3' => 'CAF',
			],
			[
				'id'         => 42,
				'name'       => 'Chad',
				'iso_code_2' => 'TD',
				'iso_code_3' => 'TCD',
			],
			[
				'id'         => 43,
				'name'       => 'Chile',
				'iso_code_2' => 'CL',
				'iso_code_3' => 'CHL',
			],
			[
				'id'         => 44,
				'name'       => 'China',
				'iso_code_2' => 'CN',
				'iso_code_3' => 'CHN',
			],
			[
				'id'         => 45,
				'name'       => 'Christmas Island',
				'iso_code_2' => 'CX',
				'iso_code_3' => 'CXR',
			],
			[
				'id'         => 46,
				'name'       => 'Cocos (Keeling) Islands',
				'iso_code_2' => 'CC',
				'iso_code_3' => 'CCK',
			],
			[
				'id'         => 47,
				'name'       => 'Colombia',
				'iso_code_2' => 'CO',
				'iso_code_3' => 'COL',
			],
			[
				'id'         => 48,
				'name'       => 'Comoros',
				'iso_code_2' => 'KM',
				'iso_code_3' => 'COM',
			],
			[
				'id'         => 49,
				'name'       => 'Congo',
				'iso_code_2' => 'CG',
				'iso_code_3' => 'COG',
			],
			[
				'id'         => 50,
				'name'       => 'Cook Islands',
				'iso_code_2' => 'CK',
				'iso_code_3' => 'COK',
			],
			[
				'id'         => 51,
				'name'       => 'Costa Rica',
				'iso_code_2' => 'CR',
				'iso_code_3' => 'CRI',
			],
			[
				'id'         => 52,
				'name'       => 'Cote D\'Ivoire',
				'iso_code_2' => 'CI',
				'iso_code_3' => 'CIV',
			],
			[
				'id'         => 53,
				'name'       => 'Croatia',
				'iso_code_2' => 'HR',
				'iso_code_3' => 'HRV',
			],
			[
				'id'         => 54,
				'name'       => 'Cuba',
				'iso_code_2' => 'CU',
				'iso_code_3' => 'CUB',
			],
			[
				'id'         => 55,
				'name'       => 'Cyprus',
				'iso_code_2' => 'CY',
				'iso_code_3' => 'CYP',
			],
			[
				'id'         => 56,
				'name'       => 'Czech Republic',
				'iso_code_2' => 'CZ',
				'iso_code_3' => 'CZE',
			],
			[
				'id'         => 57,
				'name'       => 'Denmark',
				'iso_code_2' => 'DK',
				'iso_code_3' => 'DNK',
			],
			[
				'id'         => 58,
				'name'       => 'Djibouti',
				'iso_code_2' => 'DJ',
				'iso_code_3' => 'DJI',
			],
			[
				'id'         => 59,
				'name'       => 'Dominica',
				'iso_code_2' => 'DM',
				'iso_code_3' => 'DMA',
			],
			[
				'id'         => 60,
				'name'       => 'Dominican Republic',
				'iso_code_2' => 'DO',
				'iso_code_3' => 'DOM',
			],
			[
				'id'         => 61,
				'name'       => 'East Timor',
				'iso_code_2' => 'TL',
				'iso_code_3' => 'TLS',
			],
			[
				'id'         => 62,
				'name'       => 'Ecuador',
				'iso_code_2' => 'EC',
				'iso_code_3' => 'ECU',
			],
			[
				'id'         => 63,
				'name'       => 'Egypt',
				'iso_code_2' => 'EG',
				'iso_code_3' => 'EGY',
			],
			[
				'id'         => 64,
				'name'       => 'El Salvador',
				'iso_code_2' => 'SV',
				'iso_code_3' => 'SLV',
			],
			[
				'id'         => 65,
				'name'       => 'Equatorial Guinea',
				'iso_code_2' => 'GQ',
				'iso_code_3' => 'GNQ',
			],
			[
				'id'         => 66,
				'name'       => 'Eritrea',
				'iso_code_2' => 'ER',
				'iso_code_3' => 'ERI',
			],
			[
				'id'         => 67,
				'name'       => 'Estonia',
				'iso_code_2' => 'EE',
				'iso_code_3' => 'EST',
			],
			[
				'id'         => 68,
				'name'       => 'Ethiopia',
				'iso_code_2' => 'ET',
				'iso_code_3' => 'ETH',
			],
			[
				'id'         => 69,
				'name'       => 'Falkland Islands(Malvinas)',
				'iso_code_2' => 'FK',
				'iso_code_3' => 'FLK',
			],
			[
				'id'         => 70,
				'name'       => 'Faroe Islands',
				'iso_code_2' => 'FO',
				'iso_code_3' => 'FRO',
			],
			[
				'id'         => 71,
				'name'       => 'Fiji',
				'iso_code_2' => 'FJ',
				'iso_code_3' => 'FJI',
			],
			[
				'id'         => 72,
				'name'       => 'Finland',
				'iso_code_2' => 'FI',
				'iso_code_3' => 'FIN',
			],
			[
				'id'         => 74,
				'name'       => 'France, Metropolitan',
				'iso_code_2' => 'FR',
				'iso_code_3' => 'FRA',
			],
			[
				'id'         => 75,
				'name'       => 'French Guiana',
				'iso_code_2' => 'GF',
				'iso_code_3' => 'GUF',
			],
			[
				'id'         => 76,
				'name'       => 'French Polynesia',
				'iso_code_2' => 'PF',
				'iso_code_3' => 'PYF',
			],
			[
				'id'         => 77,
				'name'       => 'French Southern Territories',
				'iso_code_2' => 'TF',
				'iso_code_3' => 'ATF',
			],
			[
				'id'         => 78,
				'name'       => 'Gabon',
				'iso_code_2' => 'GA',
				'iso_code_3' => 'GAB',
			],
			[
				'id'         => 79,
				'name'       => 'Gambia',
				'iso_code_2' => 'GM',
				'iso_code_3' => 'GMB',
			],
			[
				'id'         => 80,
				'name'       => 'Georgia',
				'iso_code_2' => 'GE',
				'iso_code_3' => 'GEO',
			],
			[
				'id'         => 81,
				'name'       => 'Germany',
				'iso_code_2' => 'DE',
				'iso_code_3' => 'DEU',
			],
			[
				'id'         => 82,
				'name'       => 'Ghana',
				'iso_code_2' => 'GH',
				'iso_code_3' => 'GHA',
			],
			[
				'id'         => 83,
				'name'       => 'Gibraltar',
				'iso_code_2' => 'GI',
				'iso_code_3' => 'GIB',
			],
			[
				'id'         => 84,
				'name'       => 'Greece',
				'iso_code_2' => 'GR',
				'iso_code_3' => 'GRC',
			],
			[
				'id'         => 85,
				'name'       => 'Greenland',
				'iso_code_2' => 'GL',
				'iso_code_3' => 'GRL',
			],
			[
				'id'         => 86,
				'name'       => 'Grenada',
				'iso_code_2' => 'GD',
				'iso_code_3' => 'GRD',
			],
			[
				'id'         => 87,
				'name'       => 'Guadeloupe',
				'iso_code_2' => 'GP',
				'iso_code_3' => 'GLP',
			],
			[
				'id'         => 88,
				'name'       => 'Guam',
				'iso_code_2' => 'GU',
				'iso_code_3' => 'GUM',
			],
			[
				'id'         => 89,
				'name'       => 'Guatemala',
				'iso_code_2' => 'GT',
				'iso_code_3' => 'GTM',
			],
			[
				'id'         => 90,
				'name'       => 'Guinea',
				'iso_code_2' => 'GN',
				'iso_code_3' => 'GIN',
			],
			[
				'id'         => 91,
				'name'       => 'Guinea - Bissau',
				'iso_code_2' => 'GW',
				'iso_code_3' => 'GNB',
			],
			[
				'id'         => 92,
				'name'       => 'Guyana',
				'iso_code_2' => 'GY',
				'iso_code_3' => 'GUY',
			],
			[
				'id'         => 93,
				'name'       => 'Haiti',
				'iso_code_2' => 'HT',
				'iso_code_3' => 'HTI',
			],
			[
				'id'         => 94,
				'name'       => 'Heard and Mc Donald Islands',
				'iso_code_2' => 'HM',
				'iso_code_3' => 'HMD',
			],
			[
				'id'         => 95,
				'name'       => 'Honduras',
				'iso_code_2' => 'HN',
				'iso_code_3' => 'HND',
			],
			[
				'id'         => 96,
				'name'       => 'Hong Kong',
				'iso_code_2' => 'HK',
				'iso_code_3' => 'HKG',
			],
			[
				'id'         => 97,
				'name'       => 'Hungary',
				'iso_code_2' => 'HU',
				'iso_code_3' => 'HUN',
			],
			[
				'id'         => 98,
				'name'       => 'Iceland',
				'iso_code_2' => 'IS',
				'iso_code_3' => 'ISL',
			],
			[
				'id'         => 99,
				'name'       => 'India',
				'iso_code_2' => 'IN',
				'iso_code_3' => 'IND',
			],
			[
				'id'         => 100,
				'name'       => 'Indonesia',
				'iso_code_2' => 'ID',
				'iso_code_3' => 'IDN',
			],
			[
				'id'         => 101,
				'name'       => 'Iran(Islamic Republic of)',
				'iso_code_2' => 'IR',
				'iso_code_3' => 'IRN',
			],
			[
				'id'         => 102,
				'name'       => 'Iraq',
				'iso_code_2' => 'IQ',
				'iso_code_3' => 'IRQ',
			],
			[
				'id'         => 103,
				'name'       => 'Ireland',
				'iso_code_2' => 'IE',
				'iso_code_3' => 'IRL',
			],
			[
				'id'         => 104,
				'name'       => 'Israel',
				'iso_code_2' => 'IL',
				'iso_code_3' => 'ISR',
			],
			[
				'id'         => 105,
				'name'       => 'Italy',
				'iso_code_2' => 'IT',
				'iso_code_3' => 'ITA',
			],
			[
				'id'         => 106,
				'name'       => 'Jamaica',
				'iso_code_2' => 'JM',
				'iso_code_3' => 'JAM',
			],
			[
				'id'         => 107,
				'name'       => 'Japan',
				'iso_code_2' => 'JP',
				'iso_code_3' => 'JPN',
			],
			[
				'id'         => 108,
				'name'       => 'Jordan',
				'iso_code_2' => 'JO',
				'iso_code_3' => 'JOR',
			],
			[
				'id'         => 109,
				'name'       => 'Kazakhstan',
				'iso_code_2' => 'KZ',
				'iso_code_3' => 'KAZ',
			],
			[
				'id'         => 110,
				'name'       => 'Kenya',
				'iso_code_2' => 'KE',
				'iso_code_3' => 'KEN',
			],
			[
				'id'         => 111,
				'name'       => 'Kiribati',
				'iso_code_2' => 'KI',
				'iso_code_3' => 'KIR',
			],
			[
				'id'         => 112,
				'name'       => 'North Korea',
				'iso_code_2' => 'KP',
				'iso_code_3' => 'PRK',
			],
			[
				'id'         => 113,
				'name'       => 'Korea, Republic of',
				'iso_code_2' => 'KR',
				'iso_code_3' => 'KOR',
			],
			[
				'id'         => 114,
				'name'       => 'Kuwait',
				'iso_code_2' => 'KW',
				'iso_code_3' => 'KWT',
			],
			[
				'id'         => 115,
				'name'       => 'Kyrgyzstan',
				'iso_code_2' => 'KG',
				'iso_code_3' => 'KGZ',
			],
			[
				'id'         => 116,
				'name'       => 'Lao People\'s Democratic Republic',
				'iso_code_2' => 'LA',
				'iso_code_3' => 'LAO',
			],
			[
				'id'         => 117,
				'name'       => 'Latvia',
				'iso_code_2' => 'LV',
				'iso_code_3' => 'LVA',
			],
			[
				'id'         => 118,
				'name'       => 'Lebanon',
				'iso_code_2' => 'LB',
				'iso_code_3' => 'LBN',
			],
			[
				'id'         => 119,
				'name'       => 'Lesotho',
				'iso_code_2' => 'LS',
				'iso_code_3' => 'LSO',
			],
			[
				'id'         => 120,
				'name'       => 'Liberia',
				'iso_code_2' => 'LR',
				'iso_code_3' => 'LBR',
			],
			[
				'id'         => 121,
				'name'       => 'Libyan Arab Jamahiriya',
				'iso_code_2' => 'LY',
				'iso_code_3' => 'LBY',
			],
			[
				'id'         => 122,
				'name'       => 'Liechtenstein',
				'iso_code_2' => 'LI',
				'iso_code_3' => 'LIE',
			],
			[
				'id'         => 123,
				'name'       => 'Lithuania',
				'iso_code_2' => 'LT',
				'iso_code_3' => 'LTU',
			],
			[
				'id'         => 124,
				'name'       => 'Luxembourg',
				'iso_code_2' => 'LU',
				'iso_code_3' => 'LUX',
			],
			[
				'id'         => 125,
				'name'       => 'Macau',
				'iso_code_2' => 'MO',
				'iso_code_3' => 'MAC',
			],
			[
				'id'         => 126,
				'name'       => 'FYROM',
				'iso_code_2' => 'MK',
				'iso_code_3' => 'MKD',
			],
			[
				'id'         => 127,
				'name'       => 'Madagascar',
				'iso_code_2' => 'MG',
				'iso_code_3' => 'MDG',
			],
			[
				'id'         => 128,
				'name'       => 'Malawi',
				'iso_code_2' => 'MW',
				'iso_code_3' => 'MWI',
			],
			[
				'id'         => 129,
				'name'       => 'Malaysia',
				'iso_code_2' => 'MY',
				'iso_code_3' => 'MYS',
			],
			[
				'id'         => 130,
				'name'       => 'Maldives',
				'iso_code_2' => 'MV',
				'iso_code_3' => 'MDV',
			],
			[
				'id'         => 131,
				'name'       => 'Mali',
				'iso_code_2' => 'ML',
				'iso_code_3' => 'MLI',
			],
			[
				'id'         => 132,
				'name'       => 'Malta',
				'iso_code_2' => 'MT',
				'iso_code_3' => 'MLT',
			],
			[
				'id'         => 133,
				'name'       => 'Marshall Islands',
				'iso_code_2' => 'MH',
				'iso_code_3' => 'MHL',
			],
			[
				'id'         => 134,
				'name'       => 'Martinique',
				'iso_code_2' => 'MQ',
				'iso_code_3' => 'MTQ',
			],
			[
				'id'         => 135,
				'name'       => 'Mauritania',
				'iso_code_2' => 'MR',
				'iso_code_3' => 'MRT',
			],
			[
				'id'         => 136,
				'name'       => 'Mauritius',
				'iso_code_2' => 'MU',
				'iso_code_3' => 'MUS',
			],
			[
				'id'         => 137,
				'name'       => 'Mayotte',
				'iso_code_2' => 'YT',
				'iso_code_3' => 'MYT',
			],
			[
				'id'         => 138,
				'name'       => 'Mexico',
				'iso_code_2' => 'MX',
				'iso_code_3' => 'MEX',
			],
			[
				'id'         => 139,
				'name'       => 'Micronesia, Federated States of',
				'iso_code_2' => 'FM',
				'iso_code_3' => 'FSM',
			],
			[
				'id'         => 140,
				'name'       => 'Moldova, Republic of',
				'iso_code_2' => 'MD',
				'iso_code_3' => 'MDA',
			],
			[
				'id'         => 141,
				'name'       => 'Monaco',
				'iso_code_2' => 'MC',
				'iso_code_3' => 'MCO',
			],
			[
				'id'         => 142,
				'name'       => 'Mongolia',
				'iso_code_2' => 'MN',
				'iso_code_3' => 'MNG',
			],
			[
				'id'         => 143,
				'name'       => 'Montserrat',
				'iso_code_2' => 'MS',
				'iso_code_3' => 'MSR',
			],
			[
				'id'         => 144,
				'name'       => 'Morocco',
				'iso_code_2' => 'MA',
				'iso_code_3' => 'MAR',
			],
			[
				'id'         => 145,
				'name'       => 'Mozambique',
				'iso_code_2' => 'MZ',
				'iso_code_3' => 'MOZ',
			],
			[
				'id'         => 146,
				'name'       => 'Myanmar',
				'iso_code_2' => 'MM',
				'iso_code_3' => 'MMR',
			],
			[
				'id'         => 147,
				'name'       => 'Namibia',
				'iso_code_2' => 'NA',
				'iso_code_3' => 'NAM',
			],
			[
				'id'         => 148,
				'name'       => 'Nauru',
				'iso_code_2' => 'NR',
				'iso_code_3' => 'NRU',
			],
			[
				'id'         => 149,
				'name'       => 'Nepal',
				'iso_code_2' => 'NP',
				'iso_code_3' => 'NPL',
			],
			[
				'id'         => 150,
				'name'       => 'Netherlands',
				'iso_code_2' => 'NL',
				'iso_code_3' => 'NLD',
			],
			[
				'id'         => 151,
				'name'       => 'Netherlands Antilles',
				'iso_code_2' => 'AN',
				'iso_code_3' => 'ANT',
			],
			[
				'id'         => 152,
				'name'       => 'New Caledonia',
				'iso_code_2' => 'NC',
				'iso_code_3' => 'NCL',
			],
			[
				'id'         => 153,
				'name'       => 'New Zealand',
				'iso_code_2' => 'NZ',
				'iso_code_3' => 'NZL',
			],
			[
				'id'         => 154,
				'name'       => 'Nicaragua',
				'iso_code_2' => 'NI',
				'iso_code_3' => 'NIC',
			],
			[
				'id'         => 155,
				'name'       => 'Niger',
				'iso_code_2' => 'NE',
				'iso_code_3' => 'NER',
			],
			[
				'id'         => 156,
				'name'       => 'Nigeria',
				'iso_code_2' => 'NG',
				'iso_code_3' => 'NGA',
			],
			[
				'id'         => 157,
				'name'       => 'Niue',
				'iso_code_2' => 'NU',
				'iso_code_3' => 'NIU',
			],
			[
				'id'         => 158,
				'name'       => 'Norfolk Island',
				'iso_code_2' => 'NF',
				'iso_code_3' => 'NFK',
			],
			[
				'id'         => 159,
				'name'       => 'Northern Mariana Islands',
				'iso_code_2' => 'MP',
				'iso_code_3' => 'MNP',
			],
			[
				'id'         => 160,
				'name'       => 'Norway',
				'iso_code_2' => 'NO',
				'iso_code_3' => 'NOR',
			],
			[
				'id'         => 161,
				'name'       => 'Oman',
				'iso_code_2' => 'OM',
				'iso_code_3' => 'OMN',
			],
			[
				'id'         => 162,
				'name'       => 'Pakistan',
				'iso_code_2' => 'PK',
				'iso_code_3' => 'PAK',
			],
			[
				'id'         => 163,
				'name'       => 'Palau',
				'iso_code_2' => 'PW',
				'iso_code_3' => 'PLW',
			],
			[
				'id'         => 164,
				'name'       => 'Panama',
				'iso_code_2' => 'PA',
				'iso_code_3' => 'PAN',
			],
			[
				'id'         => 165,
				'name'       => 'Papua New Guinea',
				'iso_code_2' => 'PG',
				'iso_code_3' => 'PNG',
			],
			[
				'id'         => 166,
				'name'       => 'Paraguay',
				'iso_code_2' => 'PY',
				'iso_code_3' => 'PRY',
			],
			[
				'id'         => 167,
				'name'       => 'Peru',
				'iso_code_2' => 'PE',
				'iso_code_3' => 'PER',
			],
			[
				'id'         => 168,
				'name'       => 'Philippines',
				'iso_code_2' => 'PH',
				'iso_code_3' => 'PHL',
			],
			[
				'id'         => 169,
				'name'       => 'Pitcairn',
				'iso_code_2' => 'PN',
				'iso_code_3' => 'PCN',
			],
			[
				'id'         => 170,
				'name'       => 'Poland',
				'iso_code_2' => 'PL',
				'iso_code_3' => 'POL',
			],
			[
				'id'         => 171,
				'name'       => 'Portugal',
				'iso_code_2' => 'PT',
				'iso_code_3' => 'PRT',
			],
			[
				'id'         => 172,
				'name'       => 'Puerto Rico',
				'iso_code_2' => 'PR',
				'iso_code_3' => 'PRI',
			],
			[
				'id'         => 173,
				'name'       => 'Qatar',
				'iso_code_2' => 'QA',
				'iso_code_3' => 'QAT',
			],
			[
				'id'         => 174,
				'name'       => 'Reunion',
				'iso_code_2' => 'RE',
				'iso_code_3' => 'REU',
			],
			[
				'id'         => 175,
				'name'       => 'Romania',
				'iso_code_2' => 'RO',
				'iso_code_3' => 'ROM',
			],
			[
				'id'         => 176,
				'name'       => 'Russian Federation',
				'iso_code_2' => 'RU',
				'iso_code_3' => 'RUS',
			],
			[
				'id'         => 177,
				'name'       => 'Rwanda',
				'iso_code_2' => 'RW',
				'iso_code_3' => 'RWA',
			],
			[
				'id'         => 178,
				'name'       => 'Saint Kitts and Nevis',
				'iso_code_2' => 'KN',
				'iso_code_3' => 'KNA',
			],
			[
				'id'         => 179,
				'name'       => 'Saint Lucia',
				'iso_code_2' => 'LC',
				'iso_code_3' => 'LCA',
			],
			[
				'id'         => 180,
				'name'       => 'Saint Vincent and the Grenadines',
				'iso_code_2' => 'VC',
				'iso_code_3' => 'VCT',
			],
			[
				'id'         => 181,
				'name'       => 'Samoa',
				'iso_code_2' => 'WS',
				'iso_code_3' => 'WSM',
			],
			[
				'id'         => 182,
				'name'       => 'San Marino',
				'iso_code_2' => 'SM',
				'iso_code_3' => 'SMR',
			],
			[
				'id'         => 183,
				'name'       => 'Sao Tome and Principe',
				'iso_code_2' => 'ST',
				'iso_code_3' => 'STP',
			],
			[
				'id'         => 184,
				'name'       => 'Saudi Arabia',
				'iso_code_2' => 'SA',
				'iso_code_3' => 'SAU',
			],
			[
				'id'         => 185,
				'name'       => 'Senegal',
				'iso_code_2' => 'SN',
				'iso_code_3' => 'SEN',
			],
			[
				'id'         => 186,
				'name'       => 'Seychelles',
				'iso_code_2' => 'SC',
				'iso_code_3' => 'SYC',
			],
			[
				'id'         => 187,
				'name'       => 'Sierra Leone',
				'iso_code_2' => 'SL',
				'iso_code_3' => 'SLE',
			],
			[
				'id'         => 188,
				'name'       => 'Singapore',
				'iso_code_2' => 'SG',
				'iso_code_3' => 'SGP',
			],
			[
				'id'         => 189,
				'name'       => 'Slovak Republic',
				'iso_code_2' => 'SK',
				'iso_code_3' => 'SVK',
			],
			[
				'id'         => 190,
				'name'       => 'Slovenia',
				'iso_code_2' => 'SI',
				'iso_code_3' => 'SVN',
			],
			[
				'id'         => 191,
				'name'       => 'Solomon Islands',
				'iso_code_2' => 'SB',
				'iso_code_3' => 'SLB',
			],
			[
				'id'         => 192,
				'name'       => 'Somalia',
				'iso_code_2' => 'SO',
				'iso_code_3' => 'SOM',
			],
			[
				'id'         => 193,
				'name'       => 'South Africa',
				'iso_code_2' => 'ZA',
				'iso_code_3' => 'ZAF',
			],
			[
				'id'         => 194,
				'name'       => 'South Georgia & amp; South Sandwich Islands',
				'iso_code_2' => 'GS',
				'iso_code_3' => 'SGS',
			],
			[
				'id'         => 195,
				'name'       => 'Spain',
				'iso_code_2' => 'ES',
				'iso_code_3' => 'ESP',
			],
			[
				'id'         => 196,
				'name'       => 'Sri Lanka',
				'iso_code_2' => 'LK',
				'iso_code_3' => 'LKA',
			],
			[
				'id'         => 197,
				'name'       => 'St . Helena',
				'iso_code_2' => 'SH',
				'iso_code_3' => 'SHN',
			],
			[
				'id'         => 198,
				'name'       => 'St . Pierre and Miquelon',
				'iso_code_2' => 'PM',
				'iso_code_3' => 'SPM',
			],
			[
				'id'         => 199,
				'name'       => 'Sudan',
				'iso_code_2' => 'SD',
				'iso_code_3' => 'SDN',
			],
			[
				'id'         => 200,
				'name'       => 'Suriname',
				'iso_code_2' => 'SR',
				'iso_code_3' => 'SUR',
			],
			[
				'id'         => 201,
				'name'       => 'Svalbard and Jan Mayen Islands',
				'iso_code_2' => 'SJ',
				'iso_code_3' => 'SJM',
			],
			[
				'id'         => 202,
				'name'       => 'Swaziland',
				'iso_code_2' => 'SZ',
				'iso_code_3' => 'SWZ',
			],
			[
				'id'         => 203,
				'name'       => 'Sweden',
				'iso_code_2' => 'SE',
				'iso_code_3' => 'SWE',
			],
			[
				'id'         => 204,
				'name'       => 'Switzerland',
				'iso_code_2' => 'CH',
				'iso_code_3' => 'CHE',
			],
			[
				'id'         => 205,
				'name'       => 'Syrian Arab Republic',
				'iso_code_2' => 'SY',
				'iso_code_3' => 'SYR',
			],
			[
				'id'         => 206,
				'name'       => 'Taiwan',
				'iso_code_2' => 'TW',
				'iso_code_3' => 'TWN',
			],
			[
				'id'         => 207,
				'name'       => 'Tajikistan',
				'iso_code_2' => 'TJ',
				'iso_code_3' => 'TJK',
			],
			[
				'id'         => 208,
				'name'       => 'Tanzania, United Republic of',
				'iso_code_2' => 'TZ',
				'iso_code_3' => 'TZA',
			],
			[
				'id'         => 209,
				'name'       => 'Thailand',
				'iso_code_2' => 'TH',
				'iso_code_3' => 'THA',
			],
			[
				'id'         => 210,
				'name'       => 'Togo',
				'iso_code_2' => 'TG',
				'iso_code_3' => 'TGO',
			],
			[
				'id'         => 211,
				'name'       => 'Tokelau',
				'iso_code_2' => 'TK',
				'iso_code_3' => 'TKL',
			],
			[
				'id'         => 212,
				'name'       => 'Tonga',
				'iso_code_2' => 'TO',
				'iso_code_3' => 'TON',
			],
			[
				'id'         => 213,
				'name'       => 'Trinidad and Tobago',
				'iso_code_2' => 'TT',
				'iso_code_3' => 'TTO',
			],
			[
				'id'         => 214,
				'name'       => 'Tunisia',
				'iso_code_2' => 'TN',
				'iso_code_3' => 'TUN',
			],
			[
				'id'         => 215,
				'name'       => 'Turkey',
				'iso_code_2' => 'TR',
				'iso_code_3' => 'TUR',
			],
			[
				'id'         => 216,
				'name'       => 'Turkmenistan',
				'iso_code_2' => 'TM',
				'iso_code_3' => 'TKM',
			],
			[
				'id'         => 217,
				'name'       => 'Turks and Caicos Islands',
				'iso_code_2' => 'TC',
				'iso_code_3' => 'TCA',
			],
			[
				'id'         => 218,
				'name'       => 'Tuvalu',
				'iso_code_2' => 'TV',
				'iso_code_3' => 'TUV',
			],
			[
				'id'         => 219,
				'name'       => 'Uganda',
				'iso_code_2' => 'UG',
				'iso_code_3' => 'UGA',
			],
			[
				'id'         => 220,
				'name'       => 'Ukraine',
				'iso_code_2' => 'UA',
				'iso_code_3' => 'UKR',
			],
			[
				'id'         => 221,
				'name'       => 'United Arab Emirates',
				'iso_code_2' => 'AE',
				'iso_code_3' => 'ARE',
			],
			[
				'id'         => 222,
				'name'       => 'United Kingdom',
				'iso_code_2' => 'GB',
				'iso_code_3' => 'GBR',
			],
			[
				'id'         => 223,
				'name'       => 'United States',
				'iso_code_2' => 'US',
				'iso_code_3' => 'USA',
			],
			[
				'id'         => 224,
				'name'       => 'United States Minor Outlying Islands',
				'iso_code_2' => 'UM',
				'iso_code_3' => 'UMI',
			],
			[
				'id'         => 225,
				'name'       => 'Uruguay',
				'iso_code_2' => 'UY',
				'iso_code_3' => 'URY',
			],
			[
				'id'         => 226,
				'name'       => 'Uzbekistan',
				'iso_code_2' => 'UZ',
				'iso_code_3' => 'UZB',
			],
			[
				'id'         => 227,
				'name'       => 'Vanuatu',
				'iso_code_2' => 'VU',
				'iso_code_3' => 'VUT',
			],
			[
				'id'         => 228,
				'name'       => 'Vatican City State(Holy See)',
				'iso_code_2' => 'VA',
				'iso_code_3' => 'VAT',
			],
			[
				'id'         => 229,
				'name'       => 'Venezuela',
				'iso_code_2' => 'VE',
				'iso_code_3' => 'VEN',
			],
			[
				'id'         => 230,
				'name'       => 'Viet Nam',
				'iso_code_2' => 'VN',
				'iso_code_3' => 'VNM',
			],
			[
				'id'         => 231,
				'name'       => 'Virgin Islands(British)',
				'iso_code_2' => 'VG',
				'iso_code_3' => 'VGB',
			],
			[
				'id'         => 232,
				'name'       => 'Virgin Islands(U . S .)',
				'iso_code_2' => 'VI',
				'iso_code_3' => 'VIR',
			],
			[
				'id'         => 233,
				'name'       => 'Wallis and Futuna Islands',
				'iso_code_2' => 'WF',
				'iso_code_3' => 'WLF',
			],
			[
				'id'         => 234,
				'name'       => 'Western Sahara',
				'iso_code_2' => 'EH',
				'iso_code_3' => 'ESH',
			],
			[
				'id'         => 235,
				'name'       => 'Yemen',
				'iso_code_2' => 'YE',
				'iso_code_3' => 'YEM',
			],
			[
				'id'         => 237,
				'name'       => 'Democratic Republic of Congo',
				'iso_code_2' => 'CD',
				'iso_code_3' => 'COD',
			],
			[
				'id'         => 238,
				'name'       => 'Zambia',
				'iso_code_2' => 'ZM',
				'iso_code_3' => 'ZMB',
			],
			[
				'id'         => 239,
				'name'       => 'Zimbabwe',
				'iso_code_2' => 'ZW',
				'iso_code_3' => 'ZWE',
			],
			[
				'id'         => 242,
				'name'       => 'Montenegro',
				'iso_code_2' => 'ME',
				'iso_code_3' => 'MNE',
			],
			[
				'id'         => 243,
				'name'       => 'Serbia',
				'iso_code_2' => 'RS',
				'iso_code_3' => 'SRB',
			],
			[
				'id'         => 244,
				'name'       => 'Aaland Islands',
				'iso_code_2' => 'AX',
				'iso_code_3' => 'ALA',
			],
			[
				'id'         => 245,
				'name'       => 'Bonaire, Sint Eustatius and Saba',
				'iso_code_2' => 'BQ',
				'iso_code_3' => 'BES',
			],
			[
				'id'         => 246,
				'name'       => 'Curacao',
				'iso_code_2' => 'CW',
				'iso_code_3' => 'CUW',
			],
			[
				'id'         => 247,
				'name'       => 'Palestinian Territory, Occupied',
				'iso_code_2' => 'PS',
				'iso_code_3' => 'PSE',
			],
			[
				'id'         => 248,
				'name'       => 'South Sudan',
				'iso_code_2' => 'SS',
				'iso_code_3' => 'SSD',
			],
			[
				'id'         => 249,
				'name'       => 'St . Barthelemy',
				'iso_code_2' => 'BL',
				'iso_code_3' => 'BLM',
			],
			[
				'id'         => 250,
				'name'       => 'St . Martin(French part)',
				'iso_code_2' => 'MF',
				'iso_code_3' => 'MAF',
			],
			[
				'id'         => 251,
				'name'       => 'Canary Islands',
				'iso_code_2' => 'IC',
				'iso_code_3' => 'ICA',
			],
			[
				'id'         => 252,
				'name'       => 'Ascension Island(British)',
				'iso_code_2' => 'AC',
				'iso_code_3' => 'ASC',
			],
			[
				'id'         => 253,
				'name'       => 'Kosovo, Republic of',
				'iso_code_2' => 'XK',
				'iso_code_3' => 'UNK',
			],
			[
				'id'         => 254,
				'name'       => 'Isle of Man',
				'iso_code_2' => 'IM',
				'iso_code_3' => 'IMN',
			],
			[
				'id'         => 255,
				'name'       => 'Tristan da Cunha',
				'iso_code_2' => 'TA',
				'iso_code_3' => 'SHN',
			],
			[
				'id'         => 256,
				'name'       => 'Guernsey',
				'iso_code_2' => 'GG',
				'iso_code_3' => 'GGY',
			],
			[
				'id'         => 257,
				'name'       => 'Jersey',
				'iso_code_2' => 'JE',
				'iso_code_3' => 'JEY',
			]
		];
		
		
		DB::table('countries')->insert($countries);
		
		\Schema::enableForeignKeyConstraints();
	}
}
