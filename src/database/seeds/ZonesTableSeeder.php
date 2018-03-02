<?php

namespace mikehins\CountriesZones\database\seeds;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ZonesTableSeeder extends \Illuminate\Database\Seeder
{
	public function run()
	{
		Schema::disableForeignKeyConstraints();
		
		DB::table('zones')->truncate();
		
		$zones = [
			[
				'id'         => 1,
				'country_id' => 1,
				'name'       => 'Badakhshan',
				'code'       => 'BDS'
			],
			[
				'id'         => 2,
				'country_id' => 1,
				'name'       => 'Badghis',
				'code'       => 'BDG'
			],
			[
				'id'         => 3,
				'country_id' => 1,
				'name'       => 'Baghlan',
				'code'       => 'BGL'
			],
			[
				'id'         => 4,
				'country_id' => 1,
				'name'       => 'Balkh',
				'code'       => 'BAL'
			],
			[
				'id'         => 5,
				'country_id' => 1,
				'name'       => 'Bamian',
				'code'       => 'BAM'
			],
			[
				'id'         => 6,
				'country_id' => 1,
				'name'       => 'Farah',
				'code'       => 'FRA'
			],
			[
				'id'         => 7,
				'country_id' => 1,
				'name'       => 'Faryab',
				'code'       => 'FYB'
			],
			[
				'id'         => 8,
				'country_id' => 1,
				'name'       => 'Ghazni',
				'code'       => 'GHA'
			],
			[
				'id'         => 9,
				'country_id' => 1,
				'name'       => 'Ghowr',
				'code'       => 'GHO'
			],
			[
				'id'         => 10,
				'country_id' => 1,
				'name'       => 'Helmand',
				'code'       => 'HEL'
			],
			[
				'id'         => 11,
				'country_id' => 1,
				'name'       => 'Herat',
				'code'       => 'HER'
			],
			[
				'id'         => 12,
				'country_id' => 1,
				'name'       => 'Jowzjan',
				'code'       => 'JOW'
			],
			[
				'id'         => 13,
				'country_id' => 1,
				'name'       => 'Kabul',
				'code'       => 'KAB'
			],
			[
				'id'         => 14,
				'country_id' => 1,
				'name'       => 'Kandahar',
				'code'       => 'KAN'
			],
			[
				'id'         => 15,
				'country_id' => 1,
				'name'       => 'Kapisa',
				'code'       => 'KAP'
			],
			[
				'id'         => 16,
				'country_id' => 1,
				'name'       => 'Khost',
				'code'       => 'KHO'
			],
			[
				'id'         => 17,
				'country_id' => 1,
				'name'       => 'Konar',
				'code'       => 'KNR'
			],
			[
				'id'         => 18,
				'country_id' => 1,
				'name'       => 'Kondoz',
				'code'       => 'KDZ'
			],
			[
				'id'         => 19,
				'country_id' => 1,
				'name'       => 'Laghman',
				'code'       => 'LAG'
			],
			[
				'id'         => 20,
				'country_id' => 1,
				'name'       => 'Lowgar',
				'code'       => 'LOW'
			],
			[
				'id'         => 21,
				'country_id' => 1,
				'name'       => 'Nangrahar',
				'code'       => 'NAN'
			],
			[
				'id'         => 22,
				'country_id' => 1,
				'name'       => 'Nimruz',
				'code'       => 'NIM'
			],
			[
				'id'         => 23,
				'country_id' => 1,
				'name'       => 'Nurestan',
				'code'       => 'NUR'
			],
			[
				'id'         => 24,
				'country_id' => 1,
				'name'       => 'Oruzgan',
				'code'       => 'ORU'
			],
			[
				'id'         => 25,
				'country_id' => 1,
				'name'       => 'Paktia',
				'code'       => 'PIA'
			],
			[
				'id'         => 26,
				'country_id' => 1,
				'name'       => 'Paktika',
				'code'       => 'PKA'
			],
			[
				'id'         => 27,
				'country_id' => 1,
				'name'       => 'Parwan',
				'code'       => 'PAR'
			],
			[
				'id'         => 28,
				'country_id' => 1,
				'name'       => 'Samangan',
				'code'       => 'SAM'
			],
			[
				'id'         => 29,
				'country_id' => 1,
				'name'       => 'Sar-e Pol',
				'code'       => 'SAR'
			],
			[
				'id'         => 30,
				'country_id' => 1,
				'name'       => 'Takhar',
				'code'       => 'TAK'
			],
			[
				'id'         => 31,
				'country_id' => 1,
				'name'       => 'Wardak',
				'code'       => 'WAR'
			],
			[
				'id'         => 32,
				'country_id' => 1,
				'name'       => 'Zabol',
				'code'       => 'ZAB'
			],
			[
				'id'         => 33,
				'country_id' => 2,
				'name'       => 'Berat',
				'code'       => 'BR'
			],
			[
				'id'         => 34,
				'country_id' => 2,
				'name'       => 'Bulqize',
				'code'       => 'BU'
			],
			[
				'id'         => 35,
				'country_id' => 2,
				'name'       => 'Delvine',
				'code'       => 'DL'
			],
			[
				'id'         => 36,
				'country_id' => 2,
				'name'       => 'Devoll',
				'code'       => 'DV'
			],
			[
				'id'         => 37,
				'country_id' => 2,
				'name'       => 'Diber',
				'code'       => 'DI'
			],
			[
				'id'         => 38,
				'country_id' => 2,
				'name'       => 'Durres',
				'code'       => 'DR'
			],
			[
				'id'         => 39,
				'country_id' => 2,
				'name'       => 'Elbasan',
				'code'       => 'EL'
			],
			[
				'id'         => 40,
				'country_id' => 2,
				'name'       => 'Kolonje',
				'code'       => 'ER'
			],
			[
				'id'         => 41,
				'country_id' => 2,
				'name'       => 'Fier',
				'code'       => 'FR'
			],
			[
				'id'         => 42,
				'country_id' => 2,
				'name'       => 'Gjirokaster',
				'code'       => 'GJ'
			],
			[
				'id'         => 43,
				'country_id' => 2,
				'name'       => 'Gramsh',
				'code'       => 'GR'
			],
			[
				'id'         => 44,
				'country_id' => 2,
				'name'       => 'Has',
				'code'       => 'HA'
			],
			[
				'id'         => 45,
				'country_id' => 2,
				'name'       => 'Kavaje',
				'code'       => 'KA'
			],
			[
				'id'         => 46,
				'country_id' => 2,
				'name'       => 'Kurbin',
				'code'       => 'KB'
			],
			[
				'id'         => 47,
				'country_id' => 2,
				'name'       => 'Kucove',
				'code'       => 'KC'
			],
			[
				'id'         => 48,
				'country_id' => 2,
				'name'       => 'Korce',
				'code'       => 'KO'
			],
			[
				'id'         => 49,
				'country_id' => 2,
				'name'       => 'Kruje',
				'code'       => 'KR'
			],
			[
				'id'         => 50,
				'country_id' => 2,
				'name'       => 'Kukes',
				'code'       => 'KU'
			],
			[
				'id'         => 51,
				'country_id' => 2,
				'name'       => 'Librazhd',
				'code'       => 'LB'
			],
			[
				'id'         => 52,
				'country_id' => 2,
				'name'       => 'Lezhe',
				'code'       => 'LE'
			],
			[
				'id'         => 53,
				'country_id' => 2,
				'name'       => 'Lushnje',
				'code'       => 'LU'
			],
			[
				'id'         => 54,
				'country_id' => 2,
				'name'       => 'Malesi e Madhe',
				'code'       => 'MM'
			],
			[
				'id'         => 55,
				'country_id' => 2,
				'name'       => 'Mallakaster',
				'code'       => 'MK'
			],
			[
				'id'         => 56,
				'country_id' => 2,
				'name'       => 'Mat',
				'code'       => 'MT'
			],
			[
				'id'         => 57,
				'country_id' => 2,
				'name'       => 'Mirdite',
				'code'       => 'MR'
			],
			[
				'id'         => 58,
				'country_id' => 2,
				'name'       => 'Peqin',
				'code'       => 'PQ'
			],
			[
				'id'         => 59,
				'country_id' => 2,
				'name'       => 'Permet',
				'code'       => 'PR'
			],
			[
				'id'         => 60,
				'country_id' => 2,
				'name'       => 'Pogradec',
				'code'       => 'PG'
			],
			[
				'id'         => 61,
				'country_id' => 2,
				'name'       => 'Puke',
				'code'       => 'PU'
			],
			[
				'id'         => 62,
				'country_id' => 2,
				'name'       => 'Shkoder',
				'code'       => 'SH'
			],
			[
				'id'         => 63,
				'country_id' => 2,
				'name'       => 'Skrapar',
				'code'       => 'SK'
			],
			[
				'id'         => 64,
				'country_id' => 2,
				'name'       => 'Sarande',
				'code'       => 'SR'
			],
			[
				'id'         => 65,
				'country_id' => 2,
				'name'       => 'Tepelene',
				'code'       => 'TE'
			],
			[
				'id'         => 66,
				'country_id' => 2,
				'name'       => 'Tropoje',
				'code'       => 'TP'
			],
			[
				'id'         => 67,
				'country_id' => 2,
				'name'       => 'Tirane',
				'code'       => 'TR'
			],
			[
				'id'         => 68,
				'country_id' => 2,
				'name'       => 'Vlore',
				'code'       => 'VL'
			],
			[
				'id'         => 69,
				'country_id' => 3,
				'name'       => 'Adrar',
				'code'       => 'ADR'
			],
			[
				'id'         => 70,
				'country_id' => 3,
				'name'       => 'Ain Defla',
				'code'       => 'ADE'
			],
			[
				'id'         => 71,
				'country_id' => 3,
				'name'       => 'Ain Temouchent',
				'code'       => 'ATE'
			],
			[
				'id'         => 72,
				'country_id' => 3,
				'name'       => 'Alger',
				'code'       => 'ALG'
			],
			[
				'id'         => 73,
				'country_id' => 3,
				'name'       => 'Annaba',
				'code'       => 'ANN'
			],
			[
				'id'         => 74,
				'country_id' => 3,
				'name'       => 'Batna',
				'code'       => 'BAT'
			],
			[
				'id'         => 75,
				'country_id' => 3,
				'name'       => 'Bechar',
				'code'       => 'BEC'
			],
			[
				'id'         => 76,
				'country_id' => 3,
				'name'       => 'Bejaia',
				'code'       => 'BEJ'
			],
			[
				'id'         => 77,
				'country_id' => 3,
				'name'       => 'Biskra',
				'code'       => 'BIS'
			],
			[
				'id'         => 78,
				'country_id' => 3,
				'name'       => 'Blida',
				'code'       => 'BLI'
			],
			[
				'id'         => 79,
				'country_id' => 3,
				'name'       => 'Bordj Bou Arreridj',
				'code'       => 'BBA'
			],
			[
				'id'         => 80,
				'country_id' => 3,
				'name'       => 'Bouira',
				'code'       => 'BOA'
			],
			[
				'id'         => 81,
				'country_id' => 3,
				'name'       => 'Boumerdes',
				'code'       => 'BMD'
			],
			[
				'id'         => 82,
				'country_id' => 3,
				'name'       => 'Chlef',
				'code'       => 'CHL'
			],
			[
				'id'         => 83,
				'country_id' => 3,
				'name'       => 'Constantine',
				'code'       => 'CON'
			],
			[
				'id'         => 84,
				'country_id' => 3,
				'name'       => 'Djelfa',
				'code'       => 'DJE'
			],
			[
				'id'         => 85,
				'country_id' => 3,
				'name'       => 'El Bayadh',
				'code'       => 'EBA'
			],
			[
				'id'         => 86,
				'country_id' => 3,
				'name'       => 'El Oued',
				'code'       => 'EOU'
			],
			[
				'id'         => 87,
				'country_id' => 3,
				'name'       => 'El Tarf',
				'code'       => 'ETA'
			],
			[
				'id'         => 88,
				'country_id' => 3,
				'name'       => 'Ghardaia',
				'code'       => 'GHA'
			],
			[
				'id'         => 89,
				'country_id' => 3,
				'name'       => 'Guelma',
				'code'       => 'GUE'
			],
			[
				'id'         => 90,
				'country_id' => 3,
				'name'       => 'Illizi',
				'code'       => 'ILL'
			],
			[
				'id'         => 91,
				'country_id' => 3,
				'name'       => 'Jijel',
				'code'       => 'JIJ'
			],
			[
				'id'         => 92,
				'country_id' => 3,
				'name'       => 'Khenchela',
				'code'       => 'KHE'
			],
			[
				'id'         => 93,
				'country_id' => 3,
				'name'       => 'Laghouat',
				'code'       => 'LAG'
			],
			[
				'id'         => 94,
				'country_id' => 3,
				'name'       => 'Muaskar',
				'code'       => 'MUA'
			],
			[
				'id'         => 95,
				'country_id' => 3,
				'name'       => 'Medea',
				'code'       => 'MED'
			],
			[
				'id'         => 96,
				'country_id' => 3,
				'name'       => 'Mila',
				'code'       => 'MIL'
			],
			[
				'id'         => 97,
				'country_id' => 3,
				'name'       => 'Mostaganem',
				'code'       => 'MOS'
			],
			[
				'id'         => 98,
				'country_id' => 3,
				'name'       => 'M\'Sila',
				'code'       => 'MSI'
			],
			[
				'id'         => 99,
				'country_id' => 3,
				'name'       => 'Naama',
				'code'       => 'NAA'
			],
			[
				'id'         => 100,
				'country_id' => 3,
				'name'       => 'Oran',
				'code'       => 'ORA'
			],
			[
				'id'         => 101,
				'country_id' => 3,
				'name'       => 'Ouargla',
				'code'       => 'OUA'
			],
			[
				'id'         => 102,
				'country_id' => 3,
				'name'       => 'Oum el-Bouaghi',
				'code'       => 'OEB'
			],
			[
				'id'         => 103,
				'country_id' => 3,
				'name'       => 'Relizane',
				'code'       => 'REL'
			],
			[
				'id'         => 104,
				'country_id' => 3,
				'name'       => 'Saida',
				'code'       => 'SAI'
			],
			[
				'id'         => 105,
				'country_id' => 3,
				'name'       => 'Setif',
				'code'       => 'SET'
			],
			[
				'id'         => 106,
				'country_id' => 3,
				'name'       => 'Sidi Bel Abbes',
				'code'       => 'SBA'
			],
			[
				'id'         => 107,
				'country_id' => 3,
				'name'       => 'Skikda',
				'code'       => 'SKI'
			],
			[
				'id'         => 108,
				'country_id' => 3,
				'name'       => 'Souk Ahras',
				'code'       => 'SAH'
			],
			[
				'id'         => 109,
				'country_id' => 3,
				'name'       => 'Tamanghasset',
				'code'       => 'TAM'
			],
			[
				'id'         => 110,
				'country_id' => 3,
				'name'       => 'Tebessa',
				'code'       => 'TEB'
			],
			[
				'id'         => 111,
				'country_id' => 3,
				'name'       => 'Tiaret',
				'code'       => 'TIA'
			],
			[
				'id'         => 112,
				'country_id' => 3,
				'name'       => 'Tindouf',
				'code'       => 'TIN'
			],
			[
				'id'         => 113,
				'country_id' => 3,
				'name'       => 'Tipaza',
				'code'       => 'TIP'
			],
			[
				'id'         => 114,
				'country_id' => 3,
				'name'       => 'Tissemsilt',
				'code'       => 'TIS'
			],
			[
				'id'         => 115,
				'country_id' => 3,
				'name'       => 'Tizi Ouzou',
				'code'       => 'TOU'
			],
			[
				'id'         => 116,
				'country_id' => 3,
				'name'       => 'Tlemcen',
				'code'       => 'TLE'
			],
			[
				'id'         => 117,
				'country_id' => 4,
				'name'       => 'Eastern',
				'code'       => 'E'
			],
			[
				'id'         => 118,
				'country_id' => 4,
				'name'       => 'Manu\'a',
				'code'       => 'M'
			],
			[
				'id'         => 119,
				'country_id' => 4,
				'name'       => 'Rose Island',
				'code'       => 'R'
			],
			[
				'id'         => 120,
				'country_id' => 4,
				'name'       => 'Swains Island',
				'code'       => 'S'
			],
			[
				'id'         => 121,
				'country_id' => 4,
				'name'       => 'Western',
				'code'       => 'W'
			],
			[
				'id'         => 122,
				'country_id' => 5,
				'name'       => 'Andorra la Vella',
				'code'       => 'ALV'
			],
			[
				'id'         => 123,
				'country_id' => 5,
				'name'       => 'Canillo',
				'code'       => 'CAN'
			],
			[
				'id'         => 124,
				'country_id' => 5,
				'name'       => 'Encamp',
				'code'       => 'ENC'
			],
			[
				'id'         => 125,
				'country_id' => 5,
				'name'       => 'Escaldes-Engordany',
				'code'       => 'ESE'
			],
			[
				'id'         => 126,
				'country_id' => 5,
				'name'       => 'La Massana',
				'code'       => 'LMA'
			],
			[
				'id'         => 127,
				'country_id' => 5,
				'name'       => 'Ordino',
				'code'       => 'ORD'
			],
			[
				'id'         => 128,
				'country_id' => 5,
				'name'       => 'Sant Julia de Loria',
				'code'       => 'SJL'
			],
			[
				'id'         => 129,
				'country_id' => 6,
				'name'       => 'Bengo',
				'code'       => 'BGO'
			],
			[
				'id'         => 130,
				'country_id' => 6,
				'name'       => 'Benguela',
				'code'       => 'BGU'
			],
			[
				'id'         => 131,
				'country_id' => 6,
				'name'       => 'Bie',
				'code'       => 'BIE'
			],
			[
				'id'         => 132,
				'country_id' => 6,
				'name'       => 'Cabinda',
				'code'       => 'CAB'
			],
			[
				'id'         => 133,
				'country_id' => 6,
				'name'       => 'Cuando-Cubango',
				'code'       => 'CCU'
			],
			[
				'id'         => 134,
				'country_id' => 6,
				'name'       => 'Cuanza Norte',
				'code'       => 'CNO'
			],
			[
				'id'         => 135,
				'country_id' => 6,
				'name'       => 'Cuanza Sul',
				'code'       => 'CUS'
			],
			[
				'id'         => 136,
				'country_id' => 6,
				'name'       => 'Cunene',
				'code'       => 'CNN'
			],
			[
				'id'         => 137,
				'country_id' => 6,
				'name'       => 'Huambo',
				'code'       => 'HUA'
			],
			[
				'id'         => 138,
				'country_id' => 6,
				'name'       => 'Huila',
				'code'       => 'HUI'
			],
			[
				'id'         => 139,
				'country_id' => 6,
				'name'       => 'Luanda',
				'code'       => 'LUA'
			],
			[
				'id'         => 140,
				'country_id' => 6,
				'name'       => 'Lunda Norte',
				'code'       => 'LNO'
			],
			[
				'id'         => 141,
				'country_id' => 6,
				'name'       => 'Lunda Sul',
				'code'       => 'LSU'
			],
			[
				'id'         => 142,
				'country_id' => 6,
				'name'       => 'Malange',
				'code'       => 'MAL'
			],
			[
				'id'         => 143,
				'country_id' => 6,
				'name'       => 'Moxico',
				'code'       => 'MOX'
			],
			[
				'id'         => 144,
				'country_id' => 6,
				'name'       => 'Namibe',
				'code'       => 'NAM'
			],
			[
				'id'         => 145,
				'country_id' => 6,
				'name'       => 'Uige',
				'code'       => 'UIG'
			],
			[
				'id'         => 146,
				'country_id' => 6,
				'name'       => 'Zaire',
				'code'       => 'ZAI'
			],
			[
				'id'         => 147,
				'country_id' => 9,
				'name'       => 'Saint George',
				'code'       => 'ASG'
			],
			[
				'id'         => 148,
				'country_id' => 9,
				'name'       => 'Saint John',
				'code'       => 'ASJ'
			],
			[
				'id'         => 149,
				'country_id' => 9,
				'name'       => 'Saint Mary',
				'code'       => 'ASM'
			],
			[
				'id'         => 150,
				'country_id' => 9,
				'name'       => 'Saint Paul',
				'code'       => 'ASL'
			],
			[
				'id'         => 151,
				'country_id' => 9,
				'name'       => 'Saint Peter',
				'code'       => 'ASR'
			],
			[
				'id'         => 152,
				'country_id' => 9,
				'name'       => 'Saint Philip',
				'code'       => 'ASH'
			],
			[
				'id'         => 153,
				'country_id' => 9,
				'name'       => 'Barbuda',
				'code'       => 'BAR'
			],
			[
				'id'         => 154,
				'country_id' => 9,
				'name'       => 'Redonda',
				'code'       => 'RED'
			],
			[
				'id'         => 155,
				'country_id' => 10,
				'name'       => 'Antartida e Islas del Atlantico',
				'code'       => 'AN'
			],
			[
				'id'         => 156,
				'country_id' => 10,
				'name'       => 'Buenos Aires',
				'code'       => 'BA'
			],
			[
				'id'         => 157,
				'country_id' => 10,
				'name'       => 'Catamarca',
				'code'       => 'CA'
			],
			[
				'id'         => 158,
				'country_id' => 10,
				'name'       => 'Chaco',
				'code'       => 'CH'
			],
			[
				'id'         => 159,
				'country_id' => 10,
				'name'       => 'Chubut',
				'code'       => 'CU'
			],
			[
				'id'         => 160,
				'country_id' => 10,
				'name'       => 'Cordoba',
				'code'       => 'CO'
			],
			[
				'id'         => 161,
				'country_id' => 10,
				'name'       => 'Corrientes',
				'code'       => 'CR'
			],
			[
				'id'         => 162,
				'country_id' => 10,
				'name'       => 'Distrito Federal',
				'code'       => 'DF'
			],
			[
				'id'         => 163,
				'country_id' => 10,
				'name'       => 'Entre Rios',
				'code'       => 'ER'
			],
			[
				'id'         => 164,
				'country_id' => 10,
				'name'       => 'Formosa',
				'code'       => 'FO'
			],
			[
				'id'         => 165,
				'country_id' => 10,
				'name'       => 'Jujuy',
				'code'       => 'JU'
			],
			[
				'id'         => 166,
				'country_id' => 10,
				'name'       => 'La Pampa',
				'code'       => 'LP'
			],
			[
				'id'         => 167,
				'country_id' => 10,
				'name'       => 'La Rioja',
				'code'       => 'LR'
			],
			[
				'id'         => 168,
				'country_id' => 10,
				'name'       => 'Mendoza',
				'code'       => 'ME'
			],
			[
				'id'         => 169,
				'country_id' => 10,
				'name'       => 'Misiones',
				'code'       => 'MI'
			],
			[
				'id'         => 170,
				'country_id' => 10,
				'name'       => 'Neuquen',
				'code'       => 'NE'
			],
			[
				'id'         => 171,
				'country_id' => 10,
				'name'       => 'Rio Negro',
				'code'       => 'RN'
			],
			[
				'id'         => 172,
				'country_id' => 10,
				'name'       => 'Salta',
				'code'       => 'SA'
			],
			[
				'id'         => 173,
				'country_id' => 10,
				'name'       => 'San Juan',
				'code'       => 'SJ'
			],
			[
				'id'         => 174,
				'country_id' => 10,
				'name'       => 'San Luis',
				'code'       => 'SL'
			],
			[
				'id'         => 175,
				'country_id' => 10,
				'name'       => 'Santa Cruz',
				'code'       => 'SC'
			],
			[
				'id'         => 176,
				'country_id' => 10,
				'name'       => 'Santa Fe',
				'code'       => 'SF'
			],
			[
				'id'         => 177,
				'country_id' => 10,
				'name'       => 'Santiago del Estero',
				'code'       => 'SD'
			],
			[
				'id'         => 178,
				'country_id' => 10,
				'name'       => 'Tierra del Fuego',
				'code'       => 'TF'
			],
			[
				'id'         => 179,
				'country_id' => 10,
				'name'       => 'Tucuman',
				'code'       => 'TU'
			],
			[
				'id'         => 180,
				'country_id' => 11,
				'name'       => 'Aragatsotn',
				'code'       => 'AGT'
			],
			[
				'id'         => 181,
				'country_id' => 11,
				'name'       => 'Ararat',
				'code'       => 'ARR'
			],
			[
				'id'         => 182,
				'country_id' => 11,
				'name'       => 'Armavir',
				'code'       => 'ARM'
			],
			[
				'id'         => 183,
				'country_id' => 11,
				'name'       => 'Geghark\'unik\'',
				'code'       => 'GEG'
			],
			[
				'id'         => 184,
				'country_id' => 11,
				'name'       => 'Kotayk\'',
				'code'       => 'KOT'
			],
			[
				'id'         => 185,
				'country_id' => 11,
				'name'       => 'Lorri',
				'code'       => 'LOR'
			],
			[
				'id'         => 186,
				'country_id' => 11,
				'name'       => 'Shirak',
				'code'       => 'SHI'
			],
			[
				'id'         => 187,
				'country_id' => 11,
				'name'       => 'Syunik\'',
				'code'       => 'SYU'
			],
			[
				'id'         => 188,
				'country_id' => 11,
				'name'       => 'Tavush',
				'code'       => 'TAV'
			],
			[
				'id'         => 189,
				'country_id' => 11,
				'name'       => 'Vayots\' Dzor',
				'code'       => 'VAY'
			],
			[
				'id'         => 190,
				'country_id' => 11,
				'name'       => 'Yerevan',
				'code'       => 'YER'
			],
			[
				'id'         => 191,
				'country_id' => 13,
				'name'       => 'Australian Capital Territory',
				'code'       => 'ACT'
			],
			[
				'id'         => 192,
				'country_id' => 13,
				'name'       => 'New South Wales',
				'code'       => 'NSW'
			],
			[
				'id'         => 193,
				'country_id' => 13,
				'name'       => 'Northern Territory',
				'code'       => 'NT'
			],
			[
				'id'         => 194,
				'country_id' => 13,
				'name'       => 'Queensland',
				'code'       => 'QLD'
			],
			[
				'id'         => 195,
				'country_id' => 13,
				'name'       => 'South Australia',
				'code'       => 'SA'
			],
			[
				'id'         => 196,
				'country_id' => 13,
				'name'       => 'Tasmania',
				'code'       => 'TAS'
			],
			[
				'id'         => 197,
				'country_id' => 13,
				'name'       => 'Victoria',
				'code'       => 'VIC'
			],
			[
				'id'         => 198,
				'country_id' => 13,
				'name'       => 'Western Australia',
				'code'       => 'WA'
			],
			[
				'id'         => 199,
				'country_id' => 14,
				'name'       => 'Burgenland',
				'code'       => 'BUR'
			],
			[
				'id'         => 200,
				'country_id' => 14,
				'name'       => 'Kärnten',
				'code'       => 'KAR'
			],
			[
				'id'         => 201,
				'country_id' => 14,
				'name'       => 'Niederösterreich',
				'code'       => 'NOS'
			],
			[
				'id'         => 202,
				'country_id' => 14,
				'name'       => 'Oberösterreich',
				'code'       => 'OOS'
			],
			[
				'id'         => 203,
				'country_id' => 14,
				'name'       => 'Salzburg',
				'code'       => 'SAL'
			],
			[
				'id'         => 204,
				'country_id' => 14,
				'name'       => 'Steiermark',
				'code'       => 'STE'
			],
			[
				'id'         => 205,
				'country_id' => 14,
				'name'       => 'Tirol',
				'code'       => 'TIR'
			],
			[
				'id'         => 206,
				'country_id' => 14,
				'name'       => 'Vorarlberg',
				'code'       => 'VOR'
			],
			[
				'id'         => 207,
				'country_id' => 14,
				'name'       => 'Wien',
				'code'       => 'WIE'
			],
			[
				'id'         => 208,
				'country_id' => 15,
				'name'       => 'Ali Bayramli',
				'code'       => 'AB'
			],
			[
				'id'         => 209,
				'country_id' => 15,
				'name'       => 'Abseron',
				'code'       => 'ABS'
			],
			[
				'id'         => 210,
				'country_id' => 15,
				'name'       => 'AgcabAdi',
				'code'       => 'AGC'
			],
			[
				'id'         => 211,
				'country_id' => 15,
				'name'       => 'Agdam',
				'code'       => 'AGM'
			],
			[
				'id'         => 212,
				'country_id' => 15,
				'name'       => 'Agdas',
				'code'       => 'AGS'
			],
			[
				'id'         => 213,
				'country_id' => 15,
				'name'       => 'Agstafa',
				'code'       => 'AGA'
			],
			[
				'id'         => 214,
				'country_id' => 15,
				'name'       => 'Agsu',
				'code'       => 'AGU'
			],
			[
				'id'         => 215,
				'country_id' => 15,
				'name'       => 'Astara',
				'code'       => 'AST'
			],
			[
				'id'         => 216,
				'country_id' => 15,
				'name'       => 'Baki',
				'code'       => 'BA'
			],
			[
				'id'         => 217,
				'country_id' => 15,
				'name'       => 'BabAk',
				'code'       => 'BAB'
			],
			[
				'id'         => 218,
				'country_id' => 15,
				'name'       => 'BalakAn',
				'code'       => 'BAL'
			],
			[
				'id'         => 219,
				'country_id' => 15,
				'name'       => 'BArdA',
				'code'       => 'BAR'
			],
			[
				'id'         => 220,
				'country_id' => 15,
				'name'       => 'Beylaqan',
				'code'       => 'BEY'
			],
			[
				'id'         => 221,
				'country_id' => 15,
				'name'       => 'Bilasuvar',
				'code'       => 'BIL'
			],
			[
				'id'         => 222,
				'country_id' => 15,
				'name'       => 'Cabrayil',
				'code'       => 'CAB'
			],
			[
				'id'         => 223,
				'country_id' => 15,
				'name'       => 'Calilabab',
				'code'       => 'CAL'
			],
			[
				'id'         => 224,
				'country_id' => 15,
				'name'       => 'Culfa',
				'code'       => 'CUL'
			],
			[
				'id'         => 225,
				'country_id' => 15,
				'name'       => 'Daskasan',
				'code'       => 'DAS'
			],
			[
				'id'         => 226,
				'country_id' => 15,
				'name'       => 'Davaci',
				'code'       => 'DAV'
			],
			[
				'id'         => 227,
				'country_id' => 15,
				'name'       => 'Fuzuli',
				'code'       => 'FUZ'
			],
			[
				'id'         => 228,
				'country_id' => 15,
				'name'       => 'Ganca',
				'code'       => 'GA'
			],
			[
				'id'         => 229,
				'country_id' => 15,
				'name'       => 'Gadabay',
				'code'       => 'GAD'
			],
			[
				'id'         => 230,
				'country_id' => 15,
				'name'       => 'Goranboy',
				'code'       => 'GOR'
			],
			[
				'id'         => 231,
				'country_id' => 15,
				'name'       => 'Goycay',
				'code'       => 'GOY'
			],
			[
				'id'         => 232,
				'country_id' => 15,
				'name'       => 'Haciqabul',
				'code'       => 'HAC'
			],
			[
				'id'         => 233,
				'country_id' => 15,
				'name'       => 'Imisli',
				'code'       => 'IMI'
			],
			[
				'id'         => 234,
				'country_id' => 15,
				'name'       => 'Ismayilli',
				'code'       => 'ISM'
			],
			[
				'id'         => 235,
				'country_id' => 15,
				'name'       => 'Kalbacar',
				'code'       => 'KAL'
			],
			[
				'id'         => 236,
				'country_id' => 15,
				'name'       => 'Kurdamir',
				'code'       => 'KUR'
			],
			[
				'id'         => 237,
				'country_id' => 15,
				'name'       => 'Lankaran',
				'code'       => 'LA'
			],
			[
				'id'         => 238,
				'country_id' => 15,
				'name'       => 'Lacin',
				'code'       => 'LAC'
			],
			[
				'id'         => 239,
				'country_id' => 15,
				'name'       => 'Lankaran',
				'code'       => 'LAN'
			],
			[
				'id'         => 240,
				'country_id' => 15,
				'name'       => 'Lerik',
				'code'       => 'LER'
			],
			[
				'id'         => 241,
				'country_id' => 15,
				'name'       => 'Masalli',
				'code'       => 'MAS'
			],
			[
				'id'         => 242,
				'country_id' => 15,
				'name'       => 'Mingacevir',
				'code'       => 'MI'
			],
			[
				'id'         => 243,
				'country_id' => 15,
				'name'       => 'Naftalan',
				'code'       => 'NA'
			],
			[
				'id'         => 244,
				'country_id' => 15,
				'name'       => 'Neftcala',
				'code'       => 'NEF'
			],
			[
				'id'         => 245,
				'country_id' => 15,
				'name'       => 'Oguz',
				'code'       => 'OGU'
			],
			[
				'id'         => 246,
				'country_id' => 15,
				'name'       => 'Ordubad',
				'code'       => 'ORD'
			],
			[
				'id'         => 247,
				'country_id' => 15,
				'name'       => 'Qabala',
				'code'       => 'QAB'
			],
			[
				'id'         => 248,
				'country_id' => 15,
				'name'       => 'Qax',
				'code'       => 'QAX'
			],
			[
				'id'         => 249,
				'country_id' => 15,
				'name'       => 'Qazax',
				'code'       => 'QAZ'
			],
			[
				'id'         => 250,
				'country_id' => 15,
				'name'       => 'Qobustan',
				'code'       => 'QOB'
			],
			[
				'id'         => 251,
				'country_id' => 15,
				'name'       => 'Quba',
				'code'       => 'QBA'
			],
			[
				'id'         => 252,
				'country_id' => 15,
				'name'       => 'Qubadli',
				'code'       => 'QBI'
			],
			[
				'id'         => 253,
				'country_id' => 15,
				'name'       => 'Qusar',
				'code'       => 'QUS'
			],
			[
				'id'         => 254,
				'country_id' => 15,
				'name'       => 'Saki',
				'code'       => 'SA'
			],
			[
				'id'         => 255,
				'country_id' => 15,
				'name'       => 'Saatli',
				'code'       => 'SAT'
			],
			[
				'id'         => 256,
				'country_id' => 15,
				'name'       => 'Sabirabad',
				'code'       => 'SAB'
			],
			[
				'id'         => 257,
				'country_id' => 15,
				'name'       => 'Sadarak',
				'code'       => 'SAD'
			],
			[
				'id'         => 258,
				'country_id' => 15,
				'name'       => 'Sahbuz',
				'code'       => 'SAH'
			],
			[
				'id'         => 259,
				'country_id' => 15,
				'name'       => 'Saki',
				'code'       => 'SAK'
			],
			[
				'id'         => 260,
				'country_id' => 15,
				'name'       => 'Salyan',
				'code'       => 'SAL'
			],
			[
				'id'         => 261,
				'country_id' => 15,
				'name'       => 'Sumqayit',
				'code'       => 'SM'
			],
			[
				'id'         => 262,
				'country_id' => 15,
				'name'       => 'Samaxi',
				'code'       => 'SMI'
			],
			[
				'id'         => 263,
				'country_id' => 15,
				'name'       => 'Samkir',
				'code'       => 'SKR'
			],
			[
				'id'         => 264,
				'country_id' => 15,
				'name'       => 'Samux',
				'code'       => 'SMX'
			],
			[
				'id'         => 265,
				'country_id' => 15,
				'name'       => 'Sarur',
				'code'       => 'SAR'
			],
			[
				'id'         => 266,
				'country_id' => 15,
				'name'       => 'Siyazan',
				'code'       => 'SIY'
			],
			[
				'id'         => 267,
				'country_id' => 15,
				'name'       => 'Susa',
				'code'       => 'SS'
			],
			[
				'id'         => 268,
				'country_id' => 15,
				'name'       => 'Susa',
				'code'       => 'SUS'
			],
			[
				'id'         => 269,
				'country_id' => 15,
				'name'       => 'Tartar',
				'code'       => 'TAR'
			],
			[
				'id'         => 270,
				'country_id' => 15,
				'name'       => 'Tovuz',
				'code'       => 'TOV'
			],
			[
				'id'         => 271,
				'country_id' => 15,
				'name'       => 'Ucar',
				'code'       => 'UCA'
			],
			[
				'id'         => 272,
				'country_id' => 15,
				'name'       => 'Xankandi',
				'code'       => 'XA'
			],
			[
				'id'         => 273,
				'country_id' => 15,
				'name'       => 'Xacmaz',
				'code'       => 'XAC'
			],
			[
				'id'         => 274,
				'country_id' => 15,
				'name'       => 'Xanlar',
				'code'       => 'XAN'
			],
			[
				'id'         => 275,
				'country_id' => 15,
				'name'       => 'Xizi',
				'code'       => 'XIZ'
			],
			[
				'id'         => 276,
				'country_id' => 15,
				'name'       => 'Xocali',
				'code'       => 'XCI'
			],
			[
				'id'         => 277,
				'country_id' => 15,
				'name'       => 'Xocavand',
				'code'       => 'XVD'
			],
			[
				'id'         => 278,
				'country_id' => 15,
				'name'       => 'Yardimli',
				'code'       => 'YAR'
			],
			[
				'id'         => 279,
				'country_id' => 15,
				'name'       => 'Yevlax',
				'code'       => 'YEV'
			],
			[
				'id'         => 280,
				'country_id' => 15,
				'name'       => 'Zangilan',
				'code'       => 'ZAN'
			],
			[
				'id'         => 281,
				'country_id' => 15,
				'name'       => 'Zaqatala',
				'code'       => 'ZAQ'
			],
			[
				'id'         => 282,
				'country_id' => 15,
				'name'       => 'Zardab',
				'code'       => 'ZAR'
			],
			[
				'id'         => 283,
				'country_id' => 15,
				'name'       => 'Naxcivan',
				'code'       => 'NX'
			],
			[
				'id'         => 284,
				'country_id' => 16,
				'name'       => 'Acklins',
				'code'       => 'ACK'
			],
			[
				'id'         => 285,
				'country_id' => 16,
				'name'       => 'Berry Islands',
				'code'       => 'BER'
			],
			[
				'id'         => 286,
				'country_id' => 16,
				'name'       => 'Bimini',
				'code'       => 'BIM'
			],
			[
				'id'         => 287,
				'country_id' => 16,
				'name'       => 'Black Point',
				'code'       => 'BLK'
			],
			[
				'id'         => 288,
				'country_id' => 16,
				'name'       => 'Cat Island',
				'code'       => 'CAT'
			],
			[
				'id'         => 289,
				'country_id' => 16,
				'name'       => 'Central Abaco',
				'code'       => 'CAB'
			],
			[
				'id'         => 290,
				'country_id' => 16,
				'name'       => 'Central Andros',
				'code'       => 'CAN'
			],
			[
				'id'         => 291,
				'country_id' => 16,
				'name'       => 'Central Eleuthera',
				'code'       => 'CEL'
			],
			[
				'id'         => 292,
				'country_id' => 16,
				'name'       => 'City of Freeport',
				'code'       => 'FRE'
			],
			[
				'id'         => 293,
				'country_id' => 16,
				'name'       => 'Crooked Island',
				'code'       => 'CRO'
			],
			[
				'id'         => 294,
				'country_id' => 16,
				'name'       => 'East Grand Bahama',
				'code'       => 'EGB'
			],
			[
				'id'         => 295,
				'country_id' => 16,
				'name'       => 'Exuma',
				'code'       => 'EXU'
			],
			[
				'id'         => 296,
				'country_id' => 16,
				'name'       => 'Grand Cay',
				'code'       => 'GRD'
			],
			[
				'id'         => 297,
				'country_id' => 16,
				'name'       => 'Harbour Island',
				'code'       => 'HAR'
			],
			[
				'id'         => 298,
				'country_id' => 16,
				'name'       => 'Hope Town',
				'code'       => 'HOP'
			],
			[
				'id'         => 299,
				'country_id' => 16,
				'name'       => 'Inagua',
				'code'       => 'INA'
			],
			[
				'id'         => 300,
				'country_id' => 16,
				'name'       => 'Long Island',
				'code'       => 'LNG'
			],
			[
				'id'         => 301,
				'country_id' => 16,
				'name'       => 'Mangrove Cay',
				'code'       => 'MAN'
			],
			[
				'id'         => 302,
				'country_id' => 16,
				'name'       => 'Mayaguana',
				'code'       => 'MAY'
			],
			[
				'id'         => 303,
				'country_id' => 16,
				'name'       => 'Moore\'s Island',
				'code'       => 'MOO'
			],
			[
				'id'         => 304,
				'country_id' => 16,
				'name'       => 'North Abaco',
				'code'       => 'NAB'
			],
			[
				'id'         => 305,
				'country_id' => 16,
				'name'       => 'North Andros',
				'code'       => 'NAN'
			],
			[
				'id'         => 306,
				'country_id' => 16,
				'name'       => 'North Eleuthera',
				'code'       => 'NEL'
			],
			[
				'id'         => 307,
				'country_id' => 16,
				'name'       => 'Ragged Island',
				'code'       => 'RAG'
			],
			[
				'id'         => 308,
				'country_id' => 16,
				'name'       => 'Rum Cay',
				'code'       => 'RUM'
			],
			[
				'id'         => 309,
				'country_id' => 16,
				'name'       => 'San Salvador',
				'code'       => 'SAL'
			],
			[
				'id'         => 310,
				'country_id' => 16,
				'name'       => 'South Abaco',
				'code'       => 'SAB'
			],
			[
				'id'         => 311,
				'country_id' => 16,
				'name'       => 'South Andros',
				'code'       => 'SAN'
			],
			[
				'id'         => 312,
				'country_id' => 16,
				'name'       => 'South Eleuthera',
				'code'       => 'SEL'
			],
			[
				'id'         => 313,
				'country_id' => 16,
				'name'       => 'Spanish Wells',
				'code'       => 'SWE'
			],
			[
				'id'         => 314,
				'country_id' => 16,
				'name'       => 'West Grand Bahama',
				'code'       => 'WGB'
			],
			[
				'id'         => 315,
				'country_id' => 17,
				'name'       => 'Capital',
				'code'       => 'CAP'
			],
			[
				'id'         => 316,
				'country_id' => 17,
				'name'       => 'Central',
				'code'       => 'CEN'
			],
			[
				'id'         => 317,
				'country_id' => 17,
				'name'       => 'Muharraq',
				'code'       => 'MUH'
			],
			[
				'id'         => 318,
				'country_id' => 17,
				'name'       => 'Northern',
				'code'       => 'NOR'
			],
			[
				'id'         => 319,
				'country_id' => 17,
				'name'       => 'Southern',
				'code'       => 'SOU'
			],
			[
				'id'         => 320,
				'country_id' => 18,
				'name'       => 'Barisal',
				'code'       => 'BAR'
			],
			[
				'id'         => 321,
				'country_id' => 18,
				'name'       => 'Chittagong',
				'code'       => 'CHI'
			],
			[
				'id'         => 322,
				'country_id' => 18,
				'name'       => 'Dhaka',
				'code'       => 'DHA'
			],
			[
				'id'         => 323,
				'country_id' => 18,
				'name'       => 'Khulna',
				'code'       => 'KHU'
			],
			[
				'id'         => 324,
				'country_id' => 18,
				'name'       => 'Rajshahi',
				'code'       => 'RAJ'
			],
			[
				'id'         => 325,
				'country_id' => 18,
				'name'       => 'Sylhet',
				'code'       => 'SYL'
			],
			[
				'id'         => 326,
				'country_id' => 19,
				'name'       => 'Christ Church',
				'code'       => 'CC'
			],
			[
				'id'         => 327,
				'country_id' => 19,
				'name'       => 'Saint Andrew',
				'code'       => 'AND'
			],
			[
				'id'         => 328,
				'country_id' => 19,
				'name'       => 'Saint George',
				'code'       => 'GEO'
			],
			[
				'id'         => 329,
				'country_id' => 19,
				'name'       => 'Saint James',
				'code'       => 'JAM'
			],
			[
				'id'         => 330,
				'country_id' => 19,
				'name'       => 'Saint John',
				'code'       => 'JOH'
			],
			[
				'id'         => 331,
				'country_id' => 19,
				'name'       => 'Saint Joseph',
				'code'       => 'JOS'
			],
			[
				'id'         => 332,
				'country_id' => 19,
				'name'       => 'Saint Lucy',
				'code'       => 'LUC'
			],
			[
				'id'         => 333,
				'country_id' => 19,
				'name'       => 'Saint Michael',
				'code'       => 'MIC'
			],
			[
				'id'         => 334,
				'country_id' => 19,
				'name'       => 'Saint Peter',
				'code'       => 'PET'
			],
			[
				'id'         => 335,
				'country_id' => 19,
				'name'       => 'Saint Philip',
				'code'       => 'PHI'
			],
			[
				'id'         => 336,
				'country_id' => 19,
				'name'       => 'Saint Thomas',
				'code'       => 'THO'
			],
			[
				'id'         => 337,
				'country_id' => 20,
				'name'       => 'Brestskaya (Brest)',
				'code'       => 'BR'
			],
			[
				'id'         => 338,
				'country_id' => 20,
				'name'       => 'Homyel\'skaya (Homyel\')',
				'code'       => 'HO'
			],
			[
				'id'         => 339,
				'country_id' => 20,
				'name'       => 'Horad Minsk',
				'code'       => 'HM'
			],
			[
				'id'         => 340,
				'country_id' => 20,
				'name'       => 'Hrodzyenskaya (Hrodna)',
				'code'       => 'HR'
			],
			[
				'id'         => 341,
				'country_id' => 20,
				'name'       => 'Mahilyowskaya (Mahilyow)',
				'code'       => 'MA'
			],
			[
				'id'         => 342,
				'country_id' => 20,
				'name'       => 'Minskaya',
				'code'       => 'MI'
			],
			[
				'id'         => 343,
				'country_id' => 20,
				'name'       => 'Vitsyebskaya (Vitsyebsk)',
				'code'       => 'VI'
			],
			[
				'id'         => 344,
				'country_id' => 21,
				'name'       => 'Antwerpen',
				'code'       => 'VAN'
			],
			[
				'id'         => 345,
				'country_id' => 21,
				'name'       => 'Brabant Wallon',
				'code'       => 'WBR'
			],
			[
				'id'         => 346,
				'country_id' => 21,
				'name'       => 'Hainaut',
				'code'       => 'WHT'
			],
			[
				'id'         => 347,
				'country_id' => 21,
				'name'       => 'Liège',
				'code'       => 'WLG'
			],
			[
				'id'         => 348,
				'country_id' => 21,
				'name'       => 'Limburg',
				'code'       => 'VLI'
			],
			[
				'id'         => 349,
				'country_id' => 21,
				'name'       => 'Luxembourg',
				'code'       => 'WLX'
			],
			[
				'id'         => 350,
				'country_id' => 21,
				'name'       => 'Namur',
				'code'       => 'WNA'
			],
			[
				'id'         => 351,
				'country_id' => 21,
				'name'       => 'Oost-Vlaanderen',
				'code'       => 'VOV'
			],
			[
				'id'         => 352,
				'country_id' => 21,
				'name'       => 'Vlaams Brabant',
				'code'       => 'VBR'
			],
			[
				'id'         => 353,
				'country_id' => 21,
				'name'       => 'West-Vlaanderen',
				'code'       => 'VWV'
			],
			[
				'id'         => 354,
				'country_id' => 22,
				'name'       => 'Belize',
				'code'       => 'BZ'
			],
			[
				'id'         => 355,
				'country_id' => 22,
				'name'       => 'Cayo',
				'code'       => 'CY'
			],
			[
				'id'         => 356,
				'country_id' => 22,
				'name'       => 'Corozal',
				'code'       => 'CR'
			],
			[
				'id'         => 357,
				'country_id' => 22,
				'name'       => 'Orange Walk',
				'code'       => 'OW'
			],
			[
				'id'         => 358,
				'country_id' => 22,
				'name'       => 'Stann Creek',
				'code'       => 'SC'
			],
			[
				'id'         => 359,
				'country_id' => 22,
				'name'       => 'Toledo',
				'code'       => 'TO'
			],
			[
				'id'         => 360,
				'country_id' => 23,
				'name'       => 'Alibori',
				'code'       => 'AL'
			],
			[
				'id'         => 361,
				'country_id' => 23,
				'name'       => 'Atakora',
				'code'       => 'AK'
			],
			[
				'id'         => 362,
				'country_id' => 23,
				'name'       => 'Atlantique',
				'code'       => 'AQ'
			],
			[
				'id'         => 363,
				'country_id' => 23,
				'name'       => 'Borgou',
				'code'       => 'BO'
			],
			[
				'id'         => 364,
				'country_id' => 23,
				'name'       => 'Collines',
				'code'       => 'CO'
			],
			[
				'id'         => 365,
				'country_id' => 23,
				'name'       => 'Donga',
				'code'       => 'DO'
			],
			[
				'id'         => 366,
				'country_id' => 23,
				'name'       => 'Kouffo',
				'code'       => 'KO'
			],
			[
				'id'         => 367,
				'country_id' => 23,
				'name'       => 'Littoral',
				'code'       => 'LI'
			],
			[
				'id'         => 368,
				'country_id' => 23,
				'name'       => 'Mono',
				'code'       => 'MO'
			],
			[
				'id'         => 369,
				'country_id' => 23,
				'name'       => 'Oueme',
				'code'       => 'OU'
			],
			[
				'id'         => 370,
				'country_id' => 23,
				'name'       => 'Plateau',
				'code'       => 'PL'
			],
			[
				'id'         => 371,
				'country_id' => 23,
				'name'       => 'Zou',
				'code'       => 'ZO'
			],
			[
				'id'         => 372,
				'country_id' => 24,
				'name'       => 'Devonshire',
				'code'       => 'DS'
			],
			[
				'id'         => 373,
				'country_id' => 24,
				'name'       => 'Hamilton City',
				'code'       => 'HC'
			],
			[
				'id'         => 374,
				'country_id' => 24,
				'name'       => 'Hamilton',
				'code'       => 'HA'
			],
			[
				'id'         => 375,
				'country_id' => 24,
				'name'       => 'Paget',
				'code'       => 'PG'
			],
			[
				'id'         => 376,
				'country_id' => 24,
				'name'       => 'Pembroke',
				'code'       => 'PB'
			],
			[
				'id'         => 377,
				'country_id' => 24,
				'name'       => 'Saint George City',
				'code'       => 'GC'
			],
			[
				'id'         => 378,
				'country_id' => 24,
				'name'       => 'Saint George\'s',
				'code'       => 'SG'
			],
			[
				'id'         => 379,
				'country_id' => 24,
				'name'       => 'Sandys',
				'code'       => 'SA'
			],
			[
				'id'         => 380,
				'country_id' => 24,
				'name'       => 'Smith\'s',
				'code'       => 'SM'
			],
			[
				'id'         => 381,
				'country_id' => 24,
				'name'       => 'Southampton',
				'code'       => 'SH'
			],
			[
				'id'         => 382,
				'country_id' => 24,
				'name'       => 'Warwick',
				'code'       => 'WA'
			],
			[
				'id'         => 383,
				'country_id' => 25,
				'name'       => 'Bumthang',
				'code'       => 'BUM'
			],
			[
				'id'         => 384,
				'country_id' => 25,
				'name'       => 'Chukha',
				'code'       => 'CHU'
			],
			[
				'id'         => 385,
				'country_id' => 25,
				'name'       => 'Dagana',
				'code'       => 'DAG'
			],
			[
				'id'         => 386,
				'country_id' => 25,
				'name'       => 'Gasa',
				'code'       => 'GAS'
			],
			[
				'id'         => 387,
				'country_id' => 25,
				'name'       => 'Haa',
				'code'       => 'HAA'
			],
			[
				'id'         => 388,
				'country_id' => 25,
				'name'       => 'Lhuntse',
				'code'       => 'LHU'
			],
			[
				'id'         => 389,
				'country_id' => 25,
				'name'       => 'Mongar',
				'code'       => 'MON'
			],
			[
				'id'         => 390,
				'country_id' => 25,
				'name'       => 'Paro',
				'code'       => 'PAR'
			],
			[
				'id'         => 391,
				'country_id' => 25,
				'name'       => 'Pemagatshel',
				'code'       => 'PEM'
			],
			[
				'id'         => 392,
				'country_id' => 25,
				'name'       => 'Punakha',
				'code'       => 'PUN'
			],
			[
				'id'         => 393,
				'country_id' => 25,
				'name'       => 'Samdrup Jongkhar',
				'code'       => 'SJO'
			],
			[
				'id'         => 394,
				'country_id' => 25,
				'name'       => 'Samtse',
				'code'       => 'SAT'
			],
			[
				'id'         => 395,
				'country_id' => 25,
				'name'       => 'Sarpang',
				'code'       => 'SAR'
			],
			[
				'id'         => 396,
				'country_id' => 25,
				'name'       => 'Thimphu',
				'code'       => 'THI'
			],
			[
				'id'         => 397,
				'country_id' => 25,
				'name'       => 'Trashigang',
				'code'       => 'TRG'
			],
			[
				'id'         => 398,
				'country_id' => 25,
				'name'       => 'Trashiyangste',
				'code'       => 'TRY'
			],
			[
				'id'         => 399,
				'country_id' => 25,
				'name'       => 'Trongsa',
				'code'       => 'TRO'
			],
			[
				'id'         => 400,
				'country_id' => 25,
				'name'       => 'Tsirang',
				'code'       => 'TSI'
			],
			[
				'id'         => 401,
				'country_id' => 25,
				'name'       => 'Wangdue Phodrang',
				'code'       => 'WPH'
			],
			[
				'id'         => 402,
				'country_id' => 25,
				'name'       => 'Zhemgang',
				'code'       => 'ZHE'
			],
			[
				'id'         => 403,
				'country_id' => 26,
				'name'       => 'Beni',
				'code'       => 'BEN'
			],
			[
				'id'         => 404,
				'country_id' => 26,
				'name'       => 'Chuquisaca',
				'code'       => 'CHU'
			],
			[
				'id'         => 405,
				'country_id' => 26,
				'name'       => 'Cochabamba',
				'code'       => 'COC'
			],
			[
				'id'         => 406,
				'country_id' => 26,
				'name'       => 'La Paz',
				'code'       => 'LPZ'
			],
			[
				'id'         => 407,
				'country_id' => 26,
				'name'       => 'Oruro',
				'code'       => 'ORU'
			],
			[
				'id'         => 408,
				'country_id' => 26,
				'name'       => 'Pando',
				'code'       => 'PAN'
			],
			[
				'id'         => 409,
				'country_id' => 26,
				'name'       => 'Potosi',
				'code'       => 'POT'
			],
			[
				'id'         => 410,
				'country_id' => 26,
				'name'       => 'Santa Cruz',
				'code'       => 'SCZ'
			],
			[
				'id'         => 411,
				'country_id' => 26,
				'name'       => 'Tarija',
				'code'       => 'TAR'
			],
			[
				'id'         => 412,
				'country_id' => 27,
				'name'       => 'Brcko district',
				'code'       => 'BRO'
			],
			[
				'id'         => 413,
				'country_id' => 27,
				'name'       => 'Unsko-Sanski Kanton',
				'code'       => 'FUS'
			],
			[
				'id'         => 414,
				'country_id' => 27,
				'name'       => 'Posavski Kanton',
				'code'       => 'FPO'
			],
			[
				'id'         => 415,
				'country_id' => 27,
				'name'       => 'Tuzlanski Kanton',
				'code'       => 'FTU'
			],
			[
				'id'         => 416,
				'country_id' => 27,
				'name'       => 'Zenicko-Dobojski Kanton',
				'code'       => 'FZE'
			],
			[
				'id'         => 417,
				'country_id' => 27,
				'name'       => 'Bosanskopodrinjski Kanton',
				'code'       => 'FBP'
			],
			[
				'id'         => 418,
				'country_id' => 27,
				'name'       => 'Srednjebosanski Kanton',
				'code'       => 'FSB'
			],
			[
				'id'         => 419,
				'country_id' => 27,
				'name'       => 'Hercegovacko-neretvanski Kanton',
				'code'       => 'FHN'
			],
			[
				'id'         => 420,
				'country_id' => 27,
				'name'       => 'Zapadnohercegovacka Zupanija',
				'code'       => 'FZH'
			],
			[
				'id'         => 421,
				'country_id' => 27,
				'name'       => 'Kanton Sarajevo',
				'code'       => 'FSA'
			],
			[
				'id'         => 422,
				'country_id' => 27,
				'name'       => 'Zapadnobosanska',
				'code'       => 'FZA'
			],
			[
				'id'         => 423,
				'country_id' => 27,
				'name'       => 'Banja Luka',
				'code'       => 'SBL'
			],
			[
				'id'         => 424,
				'country_id' => 27,
				'name'       => 'Doboj',
				'code'       => 'SDO'
			],
			[
				'id'         => 425,
				'country_id' => 27,
				'name'       => 'Bijeljina',
				'code'       => 'SBI'
			],
			[
				'id'         => 426,
				'country_id' => 27,
				'name'       => 'Vlasenica',
				'code'       => 'SVL'
			],
			[
				'id'         => 427,
				'country_id' => 27,
				'name'       => 'Sarajevo-Romanija or Sokolac',
				'code'       => 'SSR'
			],
			[
				'id'         => 428,
				'country_id' => 27,
				'name'       => 'Foca',
				'code'       => 'SFO'
			],
			[
				'id'         => 429,
				'country_id' => 27,
				'name'       => 'Trebinje',
				'code'       => 'STR'
			],
			[
				'id'         => 430,
				'country_id' => 28,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 431,
				'country_id' => 28,
				'name'       => 'Ghanzi',
				'code'       => 'GH'
			],
			[
				'id'         => 432,
				'country_id' => 28,
				'name'       => 'Kgalagadi',
				'code'       => 'KD'
			],
			[
				'id'         => 433,
				'country_id' => 28,
				'name'       => 'Kgatleng',
				'code'       => 'KT'
			],
			[
				'id'         => 434,
				'country_id' => 28,
				'name'       => 'Kweneng',
				'code'       => 'KW'
			],
			[
				'id'         => 435,
				'country_id' => 28,
				'name'       => 'Ngamiland',
				'code'       => 'NG'
			],
			[
				'id'         => 436,
				'country_id' => 28,
				'name'       => 'North East',
				'code'       => 'NE'
			],
			[
				'id'         => 437,
				'country_id' => 28,
				'name'       => 'North West',
				'code'       => 'NW'
			],
			[
				'id'         => 438,
				'country_id' => 28,
				'name'       => 'South East',
				'code'       => 'SE'
			],
			[
				'id'         => 439,
				'country_id' => 28,
				'name'       => 'Southern',
				'code'       => 'SO'
			],
			[
				'id'         => 440,
				'country_id' => 30,
				'name'       => 'Acre',
				'code'       => 'AC'
			],
			[
				'id'         => 441,
				'country_id' => 30,
				'name'       => 'Alagoas',
				'code'       => 'AL'
			],
			[
				'id'         => 442,
				'country_id' => 30,
				'name'       => 'Amapá',
				'code'       => 'AP'
			],
			[
				'id'         => 443,
				'country_id' => 30,
				'name'       => 'Amazonas',
				'code'       => 'AM'
			],
			[
				'id'         => 444,
				'country_id' => 30,
				'name'       => 'Bahia',
				'code'       => 'BA'
			],
			[
				'id'         => 445,
				'country_id' => 30,
				'name'       => 'Ceará',
				'code'       => 'CE'
			],
			[
				'id'         => 446,
				'country_id' => 30,
				'name'       => 'Distrito Federal',
				'code'       => 'DF'
			],
			[
				'id'         => 447,
				'country_id' => 30,
				'name'       => 'Espírito Santo',
				'code'       => 'ES'
			],
			[
				'id'         => 448,
				'country_id' => 30,
				'name'       => 'Goiás',
				'code'       => 'GO'
			],
			[
				'id'         => 449,
				'country_id' => 30,
				'name'       => 'Maranhão',
				'code'       => 'MA'
			],
			[
				'id'         => 450,
				'country_id' => 30,
				'name'       => 'Mato Grosso',
				'code'       => 'MT'
			],
			[
				'id'         => 451,
				'country_id' => 30,
				'name'       => 'Mato Grosso do Sul',
				'code'       => 'MS'
			],
			[
				'id'         => 452,
				'country_id' => 30,
				'name'       => 'Minas Gerais',
				'code'       => 'MG'
			],
			[
				'id'         => 453,
				'country_id' => 30,
				'name'       => 'Pará',
				'code'       => 'PA'
			],
			[
				'id'         => 454,
				'country_id' => 30,
				'name'       => 'Paraíba',
				'code'       => 'PB'
			],
			[
				'id'         => 455,
				'country_id' => 30,
				'name'       => 'Paraná',
				'code'       => 'PR'
			],
			[
				'id'         => 456,
				'country_id' => 30,
				'name'       => 'Pernambuco',
				'code'       => 'PE'
			],
			[
				'id'         => 457,
				'country_id' => 30,
				'name'       => 'Piauí',
				'code'       => 'PI'
			],
			[
				'id'         => 458,
				'country_id' => 30,
				'name'       => 'Rio de Janeiro',
				'code'       => 'RJ'
			],
			[
				'id'         => 459,
				'country_id' => 30,
				'name'       => 'Rio Grande do Norte',
				'code'       => 'RN'
			],
			[
				'id'         => 460,
				'country_id' => 30,
				'name'       => 'Rio Grande do Sul',
				'code'       => 'RS'
			],
			[
				'id'         => 461,
				'country_id' => 30,
				'name'       => 'Rondônia',
				'code'       => 'RO'
			],
			[
				'id'         => 462,
				'country_id' => 30,
				'name'       => 'Roraima',
				'code'       => 'RR'
			],
			[
				'id'         => 463,
				'country_id' => 30,
				'name'       => 'Santa Catarina',
				'code'       => 'SC'
			],
			[
				'id'         => 464,
				'country_id' => 30,
				'name'       => 'São Paulo',
				'code'       => 'SP'
			],
			[
				'id'         => 465,
				'country_id' => 30,
				'name'       => 'Sergipe',
				'code'       => 'SE'
			],
			[
				'id'         => 466,
				'country_id' => 30,
				'name'       => 'Tocantins',
				'code'       => 'TO'
			],
			[
				'id'         => 467,
				'country_id' => 31,
				'name'       => 'Peros Banhos',
				'code'       => 'PB'
			],
			[
				'id'         => 468,
				'country_id' => 31,
				'name'       => 'Salomon Islands',
				'code'       => 'SI'
			],
			[
				'id'         => 469,
				'country_id' => 31,
				'name'       => 'Nelsons Island',
				'code'       => 'NI'
			],
			[
				'id'         => 470,
				'country_id' => 31,
				'name'       => 'Three Brothers',
				'code'       => 'TB'
			],
			[
				'id'         => 471,
				'country_id' => 31,
				'name'       => 'Eagle Islands',
				'code'       => 'EA'
			],
			[
				'id'         => 472,
				'country_id' => 31,
				'name'       => 'Danger Island',
				'code'       => 'DI'
			],
			[
				'id'         => 473,
				'country_id' => 31,
				'name'       => 'Egmont Islands',
				'code'       => 'EG'
			],
			[
				'id'         => 474,
				'country_id' => 31,
				'name'       => 'Diego Garcia',
				'code'       => 'DG'
			],
			[
				'id'         => 475,
				'country_id' => 32,
				'name'       => 'Belait',
				'code'       => 'BEL'
			],
			[
				'id'         => 476,
				'country_id' => 32,
				'name'       => 'Brunei and Muara',
				'code'       => 'BRM'
			],
			[
				'id'         => 477,
				'country_id' => 32,
				'name'       => 'Temburong',
				'code'       => 'TEM'
			],
			[
				'id'         => 478,
				'country_id' => 32,
				'name'       => 'Tutong',
				'code'       => 'TUT'
			],
			[
				'id'         => 479,
				'country_id' => 33,
				'name'       => 'Blagoevgrad',
				'code'       => null
			],
			[
				'id'         => 480,
				'country_id' => 33,
				'name'       => 'Burgas',
				'code'       => null
			],
			[
				'id'         => 481,
				'country_id' => 33,
				'name'       => 'Dobrich',
				'code'       => null
			],
			[
				'id'         => 482,
				'country_id' => 33,
				'name'       => 'Gabrovo',
				'code'       => null
			],
			[
				'id'         => 483,
				'country_id' => 33,
				'name'       => 'Haskovo',
				'code'       => null
			],
			[
				'id'         => 484,
				'country_id' => 33,
				'name'       => 'Kardjali',
				'code'       => null
			],
			[
				'id'         => 485,
				'country_id' => 33,
				'name'       => 'Kyustendil',
				'code'       => null
			],
			[
				'id'         => 486,
				'country_id' => 33,
				'name'       => 'Lovech',
				'code'       => null
			],
			[
				'id'         => 487,
				'country_id' => 33,
				'name'       => 'Montana',
				'code'       => null
			],
			[
				'id'         => 488,
				'country_id' => 33,
				'name'       => 'Pazardjik',
				'code'       => null
			],
			[
				'id'         => 489,
				'country_id' => 33,
				'name'       => 'Pernik',
				'code'       => null
			],
			[
				'id'         => 490,
				'country_id' => 33,
				'name'       => 'Pleven',
				'code'       => null
			],
			[
				'id'         => 491,
				'country_id' => 33,
				'name'       => 'Plovdiv',
				'code'       => null
			],
			[
				'id'         => 492,
				'country_id' => 33,
				'name'       => 'Razgrad',
				'code'       => null
			],
			[
				'id'         => 493,
				'country_id' => 33,
				'name'       => 'Shumen',
				'code'       => null
			],
			[
				'id'         => 494,
				'country_id' => 33,
				'name'       => 'Silistra',
				'code'       => null
			],
			[
				'id'         => 495,
				'country_id' => 33,
				'name'       => 'Sliven',
				'code'       => null
			],
			[
				'id'         => 496,
				'country_id' => 33,
				'name'       => 'Smolyan',
				'code'       => null
			],
			[
				'id'         => 497,
				'country_id' => 33,
				'name'       => 'Sofia',
				'code'       => null
			],
			[
				'id'         => 498,
				'country_id' => 33,
				'name'       => 'Sofia - town',
				'code'       => null
			],
			[
				'id'         => 499,
				'country_id' => 33,
				'name'       => 'Stara Zagora',
				'code'       => null
			],
			[
				'id'         => 500,
				'country_id' => 33,
				'name'       => 'Targovishte',
				'code'       => null
			],
			[
				'id'         => 501,
				'country_id' => 33,
				'name'       => 'Varna',
				'code'       => null
			],
			[
				'id'         => 502,
				'country_id' => 33,
				'name'       => 'Veliko Tarnovo',
				'code'       => null
			],
			[
				'id'         => 503,
				'country_id' => 33,
				'name'       => 'Vidin',
				'code'       => null
			],
			[
				'id'         => 504,
				'country_id' => 33,
				'name'       => 'Vratza',
				'code'       => null
			],
			[
				'id'         => 505,
				'country_id' => 33,
				'name'       => 'Yambol',
				'code'       => null
			],
			[
				'id'         => 506,
				'country_id' => 34,
				'name'       => 'Bale',
				'code'       => 'BAL'
			],
			[
				'id'         => 507,
				'country_id' => 34,
				'name'       => 'Bam',
				'code'       => 'BAM'
			],
			[
				'id'         => 508,
				'country_id' => 34,
				'name'       => 'Banwa',
				'code'       => 'BAN'
			],
			[
				'id'         => 509,
				'country_id' => 34,
				'name'       => 'Bazega',
				'code'       => 'BAZ'
			],
			[
				'id'         => 510,
				'country_id' => 34,
				'name'       => 'Bougouriba',
				'code'       => 'BOR'
			],
			[
				'id'         => 511,
				'country_id' => 34,
				'name'       => 'Boulgou',
				'code'       => 'BLG'
			],
			[
				'id'         => 512,
				'country_id' => 34,
				'name'       => 'Boulkiemde',
				'code'       => 'BOK'
			],
			[
				'id'         => 513,
				'country_id' => 34,
				'name'       => 'Comoe',
				'code'       => 'COM'
			],
			[
				'id'         => 514,
				'country_id' => 34,
				'name'       => 'Ganzourgou',
				'code'       => 'GAN'
			],
			[
				'id'         => 515,
				'country_id' => 34,
				'name'       => 'Gnagna',
				'code'       => 'GNA'
			],
			[
				'id'         => 516,
				'country_id' => 34,
				'name'       => 'Gourma',
				'code'       => 'GOU'
			],
			[
				'id'         => 517,
				'country_id' => 34,
				'name'       => 'Houet',
				'code'       => 'HOU'
			],
			[
				'id'         => 518,
				'country_id' => 34,
				'name'       => 'Ioba',
				'code'       => 'IOA'
			],
			[
				'id'         => 519,
				'country_id' => 34,
				'name'       => 'Kadiogo',
				'code'       => 'KAD'
			],
			[
				'id'         => 520,
				'country_id' => 34,
				'name'       => 'Kenedougou',
				'code'       => 'KEN'
			],
			[
				'id'         => 521,
				'country_id' => 34,
				'name'       => 'Komondjari',
				'code'       => 'KOD'
			],
			[
				'id'         => 522,
				'country_id' => 34,
				'name'       => 'Kompienga',
				'code'       => 'KOP'
			],
			[
				'id'         => 523,
				'country_id' => 34,
				'name'       => 'Kossi',
				'code'       => 'KOS'
			],
			[
				'id'         => 524,
				'country_id' => 34,
				'name'       => 'Koulpelogo',
				'code'       => 'KOL'
			],
			[
				'id'         => 525,
				'country_id' => 34,
				'name'       => 'Kouritenga',
				'code'       => 'KOT'
			],
			[
				'id'         => 526,
				'country_id' => 34,
				'name'       => 'Kourweogo',
				'code'       => 'KOW'
			],
			[
				'id'         => 527,
				'country_id' => 34,
				'name'       => 'Leraba',
				'code'       => 'LER'
			],
			[
				'id'         => 528,
				'country_id' => 34,
				'name'       => 'Loroum',
				'code'       => 'LOR'
			],
			[
				'id'         => 529,
				'country_id' => 34,
				'name'       => 'Mouhoun',
				'code'       => 'MOU'
			],
			[
				'id'         => 530,
				'country_id' => 34,
				'name'       => 'Nahouri',
				'code'       => 'NAH'
			],
			[
				'id'         => 531,
				'country_id' => 34,
				'name'       => 'Namentenga',
				'code'       => 'NAM'
			],
			[
				'id'         => 532,
				'country_id' => 34,
				'name'       => 'Nayala',
				'code'       => 'NAY'
			],
			[
				'id'         => 533,
				'country_id' => 34,
				'name'       => 'Noumbiel',
				'code'       => 'NOU'
			],
			[
				'id'         => 534,
				'country_id' => 34,
				'name'       => 'Oubritenga',
				'code'       => 'OUB'
			],
			[
				'id'         => 535,
				'country_id' => 34,
				'name'       => 'Oudalan',
				'code'       => 'OUD'
			],
			[
				'id'         => 536,
				'country_id' => 34,
				'name'       => 'Passore',
				'code'       => 'PAS'
			],
			[
				'id'         => 537,
				'country_id' => 34,
				'name'       => 'Poni',
				'code'       => 'PON'
			],
			[
				'id'         => 538,
				'country_id' => 34,
				'name'       => 'Sanguie',
				'code'       => 'SAG'
			],
			[
				'id'         => 539,
				'country_id' => 34,
				'name'       => 'Sanmatenga',
				'code'       => 'SAM'
			],
			[
				'id'         => 540,
				'country_id' => 34,
				'name'       => 'Seno',
				'code'       => 'SEN'
			],
			[
				'id'         => 541,
				'country_id' => 34,
				'name'       => 'Sissili',
				'code'       => 'SIS'
			],
			[
				'id'         => 542,
				'country_id' => 34,
				'name'       => 'Soum',
				'code'       => 'SOM'
			],
			[
				'id'         => 543,
				'country_id' => 34,
				'name'       => 'Sourou',
				'code'       => 'SOR'
			],
			[
				'id'         => 544,
				'country_id' => 34,
				'name'       => 'Tapoa',
				'code'       => 'TAP'
			],
			[
				'id'         => 545,
				'country_id' => 34,
				'name'       => 'Tuy',
				'code'       => 'TUY'
			],
			[
				'id'         => 546,
				'country_id' => 34,
				'name'       => 'Yagha',
				'code'       => 'YAG'
			],
			[
				'id'         => 547,
				'country_id' => 34,
				'name'       => 'Yatenga',
				'code'       => 'YAT'
			],
			[
				'id'         => 548,
				'country_id' => 34,
				'name'       => 'Ziro',
				'code'       => 'ZIR'
			],
			[
				'id'         => 549,
				'country_id' => 34,
				'name'       => 'Zondoma',
				'code'       => 'ZOD'
			],
			[
				'id'         => 550,
				'country_id' => 34,
				'name'       => 'Zoundweogo',
				'code'       => 'ZOW'
			],
			[
				'id'         => 551,
				'country_id' => 35,
				'name'       => 'Bubanza',
				'code'       => 'BB'
			],
			[
				'id'         => 552,
				'country_id' => 35,
				'name'       => 'Bujumbura',
				'code'       => 'BJ'
			],
			[
				'id'         => 553,
				'country_id' => 35,
				'name'       => 'Bururi',
				'code'       => 'BR'
			],
			[
				'id'         => 554,
				'country_id' => 35,
				'name'       => 'Cankuzo',
				'code'       => 'CA'
			],
			[
				'id'         => 555,
				'country_id' => 35,
				'name'       => 'Cibitoke',
				'code'       => 'CI'
			],
			[
				'id'         => 556,
				'country_id' => 35,
				'name'       => 'Gitega',
				'code'       => 'GI'
			],
			[
				'id'         => 557,
				'country_id' => 35,
				'name'       => 'Karuzi',
				'code'       => 'KR'
			],
			[
				'id'         => 558,
				'country_id' => 35,
				'name'       => 'Kayanza',
				'code'       => 'KY'
			],
			[
				'id'         => 559,
				'country_id' => 35,
				'name'       => 'Kirundo',
				'code'       => 'KI'
			],
			[
				'id'         => 560,
				'country_id' => 35,
				'name'       => 'Makamba',
				'code'       => 'MA'
			],
			[
				'id'         => 561,
				'country_id' => 35,
				'name'       => 'Muramvya',
				'code'       => 'MU'
			],
			[
				'id'         => 562,
				'country_id' => 35,
				'name'       => 'Muyinga',
				'code'       => 'MY'
			],
			[
				'id'         => 563,
				'country_id' => 35,
				'name'       => 'Mwaro',
				'code'       => 'MW'
			],
			[
				'id'         => 564,
				'country_id' => 35,
				'name'       => 'Ngozi',
				'code'       => 'NG'
			],
			[
				'id'         => 565,
				'country_id' => 35,
				'name'       => 'Rutana',
				'code'       => 'RT'
			],
			[
				'id'         => 566,
				'country_id' => 35,
				'name'       => 'Ruyigi',
				'code'       => 'RY'
			],
			[
				'id'         => 567,
				'country_id' => 36,
				'name'       => 'Phnom Penh',
				'code'       => 'PP'
			],
			[
				'id'         => 568,
				'country_id' => 36,
				'name'       => 'Preah Seihanu (Kompong Som or Sihanoukville)',
				'code'       => 'PS'
			],
			[
				'id'         => 569,
				'country_id' => 36,
				'name'       => 'Pailin',
				'code'       => 'PA'
			],
			[
				'id'         => 570,
				'country_id' => 36,
				'name'       => 'Keb',
				'code'       => 'KB'
			],
			[
				'id'         => 571,
				'country_id' => 36,
				'name'       => 'Banteay Meanchey',
				'code'       => 'BM'
			],
			[
				'id'         => 572,
				'country_id' => 36,
				'name'       => 'Battambang',
				'code'       => 'BA'
			],
			[
				'id'         => 573,
				'country_id' => 36,
				'name'       => 'Kampong Cham',
				'code'       => 'KM'
			],
			[
				'id'         => 574,
				'country_id' => 36,
				'name'       => 'Kampong Chhnang',
				'code'       => 'KN'
			],
			[
				'id'         => 575,
				'country_id' => 36,
				'name'       => 'Kampong Speu',
				'code'       => 'KU'
			],
			[
				'id'         => 576,
				'country_id' => 36,
				'name'       => 'Kampong Som',
				'code'       => 'KO'
			],
			[
				'id'         => 577,
				'country_id' => 36,
				'name'       => 'Kampong Thom',
				'code'       => 'KT'
			],
			[
				'id'         => 578,
				'country_id' => 36,
				'name'       => 'Kampot',
				'code'       => 'KP'
			],
			[
				'id'         => 579,
				'country_id' => 36,
				'name'       => 'Kandal',
				'code'       => 'KL'
			],
			[
				'id'         => 580,
				'country_id' => 36,
				'name'       => 'Kaoh Kong',
				'code'       => 'KK'
			],
			[
				'id'         => 581,
				'country_id' => 36,
				'name'       => 'Kratie',
				'code'       => 'KR'
			],
			[
				'id'         => 582,
				'country_id' => 36,
				'name'       => 'Mondul Kiri',
				'code'       => 'MK'
			],
			[
				'id'         => 583,
				'country_id' => 36,
				'name'       => 'Oddar Meancheay',
				'code'       => 'OM'
			],
			[
				'id'         => 584,
				'country_id' => 36,
				'name'       => 'Pursat',
				'code'       => 'PU'
			],
			[
				'id'         => 585,
				'country_id' => 36,
				'name'       => 'Preah Vihear',
				'code'       => 'PR'
			],
			[
				'id'         => 586,
				'country_id' => 36,
				'name'       => 'Prey Veng',
				'code'       => 'PG'
			],
			[
				'id'         => 587,
				'country_id' => 36,
				'name'       => 'Ratanak Kiri',
				'code'       => 'RK'
			],
			[
				'id'         => 588,
				'country_id' => 36,
				'name'       => 'Siemreap',
				'code'       => 'SI'
			],
			[
				'id'         => 589,
				'country_id' => 36,
				'name'       => 'Stung Treng',
				'code'       => 'ST'
			],
			[
				'id'         => 590,
				'country_id' => 36,
				'name'       => 'Svay Rieng',
				'code'       => 'SR'
			],
			[
				'id'         => 591,
				'country_id' => 36,
				'name'       => 'Takeo',
				'code'       => 'TK'
			],
			[
				'id'         => 592,
				'country_id' => 37,
				'name'       => 'Adamawa (Adamaoua)',
				'code'       => 'ADA'
			],
			[
				'id'         => 593,
				'country_id' => 37,
				'name'       => 'Centre',
				'code'       => 'CEN'
			],
			[
				'id'         => 594,
				'country_id' => 37,
				'name'       => 'East (Est)',
				'code'       => 'EST'
			],
			[
				'id'         => 595,
				'country_id' => 37,
				'name'       => 'Extreme North (Extreme-Nord)',
				'code'       => 'EXN'
			],
			[
				'id'         => 596,
				'country_id' => 37,
				'name'       => 'Littoral',
				'code'       => 'LIT'
			],
			[
				'id'         => 597,
				'country_id' => 37,
				'name'       => 'North (Nord)',
				'code'       => 'NOR'
			],
			[
				'id'         => 598,
				'country_id' => 37,
				'name'       => 'Northwest (Nord-Ouest)',
				'code'       => 'NOT'
			],
			[
				'id'         => 599,
				'country_id' => 37,
				'name'       => 'West (Ouest)',
				'code'       => 'OUE'
			],
			[
				'id'         => 600,
				'country_id' => 37,
				'name'       => 'South (Sud)',
				'code'       => 'SUD'
			],
			[
				'id'         => 601,
				'country_id' => 37,
				'name'       => 'Southwest (Sud-Ouest).',
				'code'       => 'SOU'
			],
			[
				'id'         => 602,
				'country_id' => 38,
				'name'       => 'Alberta',
				'code'       => 'AB'
			],
			[
				'id'         => 603,
				'country_id' => 38,
				'name'       => 'British Columbia',
				'code'       => 'BC'
			],
			[
				'id'         => 604,
				'country_id' => 38,
				'name'       => 'Manitoba',
				'code'       => 'MB'
			],
			[
				'id'         => 605,
				'country_id' => 38,
				'name'       => 'New Brunswick',
				'code'       => 'NB'
			],
			[
				'id'         => 606,
				'country_id' => 38,
				'name'       => 'Newfoundland and Labrador',
				'code'       => 'NL'
			],
			[
				'id'         => 607,
				'country_id' => 38,
				'name'       => 'Northwest Territories',
				'code'       => 'NT'
			],
			[
				'id'         => 608,
				'country_id' => 38,
				'name'       => 'Nova Scotia',
				'code'       => 'NS'
			],
			[
				'id'         => 609,
				'country_id' => 38,
				'name'       => 'Nunavut',
				'code'       => 'NU'
			],
			[
				'id'         => 610,
				'country_id' => 38,
				'name'       => 'Ontario',
				'code'       => 'ON'
			],
			[
				'id'         => 611,
				'country_id' => 38,
				'name'       => 'Prince Edward Island',
				'code'       => 'PE'
			],
			[
				'id'         => 612,
				'country_id' => 38,
				'name'       => 'Québec',
				'code'       => 'QC'
			],
			[
				'id'         => 613,
				'country_id' => 38,
				'name'       => 'Saskatchewan',
				'code'       => 'SK'
			],
			[
				'id'         => 614,
				'country_id' => 38,
				'name'       => 'Yukon Territory',
				'code'       => 'YT'
			],
			[
				'id'         => 615,
				'country_id' => 39,
				'name'       => 'Boa Vista',
				'code'       => 'BV'
			],
			[
				'id'         => 616,
				'country_id' => 39,
				'name'       => 'Brava',
				'code'       => 'BR'
			],
			[
				'id'         => 617,
				'country_id' => 39,
				'name'       => 'Calheta de Sao Miguel',
				'code'       => 'CS'
			],
			[
				'id'         => 618,
				'country_id' => 39,
				'name'       => 'Maio',
				'code'       => 'MA'
			],
			[
				'id'         => 619,
				'country_id' => 39,
				'name'       => 'Mosteiros',
				'code'       => 'MO'
			],
			[
				'id'         => 620,
				'country_id' => 39,
				'name'       => 'Paul',
				'code'       => 'PA'
			],
			[
				'id'         => 621,
				'country_id' => 39,
				'name'       => 'Porto Novo',
				'code'       => 'PN'
			],
			[
				'id'         => 622,
				'country_id' => 39,
				'name'       => 'Praia',
				'code'       => 'PR'
			],
			[
				'id'         => 623,
				'country_id' => 39,
				'name'       => 'Ribeira Grande',
				'code'       => 'RG'
			],
			[
				'id'         => 624,
				'country_id' => 39,
				'name'       => 'Sal',
				'code'       => 'SL'
			],
			[
				'id'         => 625,
				'country_id' => 39,
				'name'       => 'Santa Catarina',
				'code'       => 'CA'
			],
			[
				'id'         => 626,
				'country_id' => 39,
				'name'       => 'Santa Cruz',
				'code'       => 'CR'
			],
			[
				'id'         => 627,
				'country_id' => 39,
				'name'       => 'Sao Domingos',
				'code'       => 'SD'
			],
			[
				'id'         => 628,
				'country_id' => 39,
				'name'       => 'Sao Filipe',
				'code'       => 'SF'
			],
			[
				'id'         => 629,
				'country_id' => 39,
				'name'       => 'Sao Nicolau',
				'code'       => 'SN'
			],
			[
				'id'         => 630,
				'country_id' => 39,
				'name'       => 'Sao Vicente',
				'code'       => 'SV'
			],
			[
				'id'         => 631,
				'country_id' => 39,
				'name'       => 'Tarrafal',
				'code'       => 'TA'
			],
			[
				'id'         => 632,
				'country_id' => 40,
				'name'       => 'Creek',
				'code'       => 'CR'
			],
			[
				'id'         => 633,
				'country_id' => 40,
				'name'       => 'Eastern',
				'code'       => 'EA'
			],
			[
				'id'         => 634,
				'country_id' => 40,
				'name'       => 'Midland',
				'code'       => 'ML'
			],
			[
				'id'         => 635,
				'country_id' => 40,
				'name'       => 'South Town',
				'code'       => 'ST'
			],
			[
				'id'         => 636,
				'country_id' => 40,
				'name'       => 'Spot Bay',
				'code'       => 'SP'
			],
			[
				'id'         => 637,
				'country_id' => 40,
				'name'       => 'Stake Bay',
				'code'       => 'SK'
			],
			[
				'id'         => 638,
				'country_id' => 40,
				'name'       => 'West End',
				'code'       => 'WD'
			],
			[
				'id'         => 639,
				'country_id' => 40,
				'name'       => 'Western',
				'code'       => 'WN'
			],
			[
				'id'         => 640,
				'country_id' => 41,
				'name'       => 'Bamingui-Bangoran',
				'code'       => 'BBA'
			],
			[
				'id'         => 641,
				'country_id' => 41,
				'name'       => 'Basse-Kotto',
				'code'       => 'BKO'
			],
			[
				'id'         => 642,
				'country_id' => 41,
				'name'       => 'Haute-Kotto',
				'code'       => 'HKO'
			],
			[
				'id'         => 643,
				'country_id' => 41,
				'name'       => 'Haut-Mbomou',
				'code'       => 'HMB'
			],
			[
				'id'         => 644,
				'country_id' => 41,
				'name'       => 'Kemo',
				'code'       => 'KEM'
			],
			[
				'id'         => 645,
				'country_id' => 41,
				'name'       => 'Lobaye',
				'code'       => 'LOB'
			],
			[
				'id'         => 646,
				'country_id' => 41,
				'name'       => 'Mambere-KadeÔ',
				'code'       => 'MKD'
			],
			[
				'id'         => 647,
				'country_id' => 41,
				'name'       => 'Mbomou',
				'code'       => 'MBO'
			],
			[
				'id'         => 648,
				'country_id' => 41,
				'name'       => 'Nana-Mambere',
				'code'       => 'NMM'
			],
			[
				'id'         => 649,
				'country_id' => 41,
				'name'       => 'Ombella-M\'Poko',
				'code'       => 'OMP'
			],
			[
				'id'         => 650,
				'country_id' => 41,
				'name'       => 'Ouaka',
				'code'       => 'OUK'
			],
			[
				'id'         => 651,
				'country_id' => 41,
				'name'       => 'Ouham',
				'code'       => 'OUH'
			],
			[
				'id'         => 652,
				'country_id' => 41,
				'name'       => 'Ouham-Pende',
				'code'       => 'OPE'
			],
			[
				'id'         => 653,
				'country_id' => 41,
				'name'       => 'Vakaga',
				'code'       => 'VAK'
			],
			[
				'id'         => 654,
				'country_id' => 41,
				'name'       => 'Nana-Grebizi',
				'code'       => 'NGR'
			],
			[
				'id'         => 655,
				'country_id' => 41,
				'name'       => 'Sangha-Mbaere',
				'code'       => 'SMB'
			],
			[
				'id'         => 656,
				'country_id' => 41,
				'name'       => 'Bangui',
				'code'       => 'BAN'
			],
			[
				'id'         => 657,
				'country_id' => 42,
				'name'       => 'Batha',
				'code'       => 'BA'
			],
			[
				'id'         => 658,
				'country_id' => 42,
				'name'       => 'Biltine',
				'code'       => 'BI'
			],
			[
				'id'         => 659,
				'country_id' => 42,
				'name'       => 'Borkou-Ennedi-Tibesti',
				'code'       => 'BE'
			],
			[
				'id'         => 660,
				'country_id' => 42,
				'name'       => 'Chari-Baguirmi',
				'code'       => 'CB'
			],
			[
				'id'         => 661,
				'country_id' => 42,
				'name'       => 'Guera',
				'code'       => 'GU'
			],
			[
				'id'         => 662,
				'country_id' => 42,
				'name'       => 'Kanem',
				'code'       => 'KA'
			],
			[
				'id'         => 663,
				'country_id' => 42,
				'name'       => 'Lac',
				'code'       => 'LA'
			],
			[
				'id'         => 664,
				'country_id' => 42,
				'name'       => 'Logone Occidental',
				'code'       => 'LC'
			],
			[
				'id'         => 665,
				'country_id' => 42,
				'name'       => 'Logone Oriental',
				'code'       => 'LR'
			],
			[
				'id'         => 666,
				'country_id' => 42,
				'name'       => 'Mayo-Kebbi',
				'code'       => 'MK'
			],
			[
				'id'         => 667,
				'country_id' => 42,
				'name'       => 'Moyen-Chari',
				'code'       => 'MC'
			],
			[
				'id'         => 668,
				'country_id' => 42,
				'name'       => 'Ouaddai',
				'code'       => 'OU'
			],
			[
				'id'         => 669,
				'country_id' => 42,
				'name'       => 'Salamat',
				'code'       => 'SA'
			],
			[
				'id'         => 670,
				'country_id' => 42,
				'name'       => 'Tandjile',
				'code'       => 'TA'
			],
			[
				'id'         => 671,
				'country_id' => 43,
				'name'       => 'Aisen del General Carlos Ibanez',
				'code'       => 'AI'
			],
			[
				'id'         => 672,
				'country_id' => 43,
				'name'       => 'Antofagasta',
				'code'       => 'AN'
			],
			[
				'id'         => 673,
				'country_id' => 43,
				'name'       => 'Araucania',
				'code'       => 'AR'
			],
			[
				'id'         => 674,
				'country_id' => 43,
				'name'       => 'Atacama',
				'code'       => 'AT'
			],
			[
				'id'         => 675,
				'country_id' => 43,
				'name'       => 'Bio-Bio',
				'code'       => 'BI'
			],
			[
				'id'         => 676,
				'country_id' => 43,
				'name'       => 'Coquimbo',
				'code'       => 'CO'
			],
			[
				'id'         => 677,
				'country_id' => 43,
				'name'       => 'Libertador General Bernardo O\'Higgins',
				'code'       => 'LI'
			],
			[
				'id'         => 678,
				'country_id' => 43,
				'name'       => 'Los Lagos',
				'code'       => 'LL'
			],
			[
				'id'         => 679,
				'country_id' => 43,
				'name'       => 'Magallanes y de la Antartica Chilena',
				'code'       => 'MA'
			],
			[
				'id'         => 680,
				'country_id' => 43,
				'name'       => 'Maule',
				'code'       => 'ML'
			],
			[
				'id'         => 681,
				'country_id' => 43,
				'name'       => 'Region Metropolitana',
				'code'       => 'RM'
			],
			[
				'id'         => 682,
				'country_id' => 43,
				'name'       => 'Tarapaca',
				'code'       => 'TA'
			],
			[
				'id'         => 683,
				'country_id' => 43,
				'name'       => 'Valparaiso',
				'code'       => 'VS'
			],
			[
				'id'         => 684,
				'country_id' => 44,
				'name'       => 'Anhui',
				'code'       => 'AN'
			],
			[
				'id'         => 685,
				'country_id' => 44,
				'name'       => 'Beijing',
				'code'       => 'BE'
			],
			[
				'id'         => 686,
				'country_id' => 44,
				'name'       => 'Chongqing',
				'code'       => 'CH'
			],
			[
				'id'         => 687,
				'country_id' => 44,
				'name'       => 'Fujian',
				'code'       => 'FU'
			],
			[
				'id'         => 688,
				'country_id' => 44,
				'name'       => 'Gansu',
				'code'       => 'GA'
			],
			[
				'id'         => 689,
				'country_id' => 44,
				'name'       => 'Guangdong',
				'code'       => 'GU'
			],
			[
				'id'         => 690,
				'country_id' => 44,
				'name'       => 'Guangxi',
				'code'       => 'GX'
			],
			[
				'id'         => 691,
				'country_id' => 44,
				'name'       => 'Guizhou',
				'code'       => 'GZ'
			],
			[
				'id'         => 692,
				'country_id' => 44,
				'name'       => 'Hainan',
				'code'       => 'HA'
			],
			[
				'id'         => 693,
				'country_id' => 44,
				'name'       => 'Hebei',
				'code'       => 'HB'
			],
			[
				'id'         => 694,
				'country_id' => 44,
				'name'       => 'Heilongjiang',
				'code'       => 'HL'
			],
			[
				'id'         => 695,
				'country_id' => 44,
				'name'       => 'Henan',
				'code'       => 'HE'
			],
			[
				'id'         => 696,
				'country_id' => 44,
				'name'       => 'Hong Kong',
				'code'       => 'HK'
			],
			[
				'id'         => 697,
				'country_id' => 44,
				'name'       => 'Hubei',
				'code'       => 'HU'
			],
			[
				'id'         => 698,
				'country_id' => 44,
				'name'       => 'Hunan',
				'code'       => 'HN'
			],
			[
				'id'         => 699,
				'country_id' => 44,
				'name'       => 'Inner Mongolia',
				'code'       => 'IM'
			],
			[
				'id'         => 700,
				'country_id' => 44,
				'name'       => 'Jiangsu',
				'code'       => 'JI'
			],
			[
				'id'         => 701,
				'country_id' => 44,
				'name'       => 'Jiangxi',
				'code'       => 'JX'
			],
			[
				'id'         => 702,
				'country_id' => 44,
				'name'       => 'Jilin',
				'code'       => 'JL'
			],
			[
				'id'         => 703,
				'country_id' => 44,
				'name'       => 'Liaoning',
				'code'       => 'LI'
			],
			[
				'id'         => 704,
				'country_id' => 44,
				'name'       => 'Macau',
				'code'       => 'MA'
			],
			[
				'id'         => 705,
				'country_id' => 44,
				'name'       => 'Ningxia',
				'code'       => 'NI'
			],
			[
				'id'         => 706,
				'country_id' => 44,
				'name'       => 'Shaanxi',
				'code'       => 'SH'
			],
			[
				'id'         => 707,
				'country_id' => 44,
				'name'       => 'Shandong',
				'code'       => 'SA'
			],
			[
				'id'         => 708,
				'country_id' => 44,
				'name'       => 'Shanghai',
				'code'       => 'SG'
			],
			[
				'id'         => 709,
				'country_id' => 44,
				'name'       => 'Shanxi',
				'code'       => 'SX'
			],
			[
				'id'         => 710,
				'country_id' => 44,
				'name'       => 'Sichuan',
				'code'       => 'SI'
			],
			[
				'id'         => 711,
				'country_id' => 44,
				'name'       => 'Tianjin',
				'code'       => 'TI'
			],
			[
				'id'         => 712,
				'country_id' => 44,
				'name'       => 'Xinjiang',
				'code'       => 'XI'
			],
			[
				'id'         => 713,
				'country_id' => 44,
				'name'       => 'Yunnan',
				'code'       => 'YU'
			],
			[
				'id'         => 714,
				'country_id' => 44,
				'name'       => 'Zhejiang',
				'code'       => 'ZH'
			],
			[
				'id'         => 715,
				'country_id' => 46,
				'name'       => 'Direction Island',
				'code'       => 'D'
			],
			[
				'id'         => 716,
				'country_id' => 46,
				'name'       => 'Home Island',
				'code'       => 'H'
			],
			[
				'id'         => 717,
				'country_id' => 46,
				'name'       => 'Horsburgh Island',
				'code'       => 'O'
			],
			[
				'id'         => 718,
				'country_id' => 46,
				'name'       => 'South Island',
				'code'       => 'S'
			],
			[
				'id'         => 719,
				'country_id' => 46,
				'name'       => 'West Island',
				'code'       => 'W'
			],
			[
				'id'         => 720,
				'country_id' => 47,
				'name'       => 'Amazonas',
				'code'       => 'AMZ'
			],
			[
				'id'         => 721,
				'country_id' => 47,
				'name'       => 'Antioquia',
				'code'       => 'ANT'
			],
			[
				'id'         => 722,
				'country_id' => 47,
				'name'       => 'Arauca',
				'code'       => 'ARA'
			],
			[
				'id'         => 723,
				'country_id' => 47,
				'name'       => 'Atlantico',
				'code'       => 'ATL'
			],
			[
				'id'         => 724,
				'country_id' => 47,
				'name'       => 'Bogota D.C.',
				'code'       => 'BDC'
			],
			[
				'id'         => 725,
				'country_id' => 47,
				'name'       => 'Bolivar',
				'code'       => 'BOL'
			],
			[
				'id'         => 726,
				'country_id' => 47,
				'name'       => 'Boyaca',
				'code'       => 'BOY'
			],
			[
				'id'         => 727,
				'country_id' => 47,
				'name'       => 'Caldas',
				'code'       => 'CAL'
			],
			[
				'id'         => 728,
				'country_id' => 47,
				'name'       => 'Caqueta',
				'code'       => 'CAQ'
			],
			[
				'id'         => 729,
				'country_id' => 47,
				'name'       => 'Casanare',
				'code'       => 'CAS'
			],
			[
				'id'         => 730,
				'country_id' => 47,
				'name'       => 'Cauca',
				'code'       => 'CAU'
			],
			[
				'id'         => 731,
				'country_id' => 47,
				'name'       => 'Cesar',
				'code'       => 'CES'
			],
			[
				'id'         => 732,
				'country_id' => 47,
				'name'       => 'Choco',
				'code'       => 'CHO'
			],
			[
				'id'         => 733,
				'country_id' => 47,
				'name'       => 'Cordoba',
				'code'       => 'COR'
			],
			[
				'id'         => 734,
				'country_id' => 47,
				'name'       => 'Cundinamarca',
				'code'       => 'CAM'
			],
			[
				'id'         => 735,
				'country_id' => 47,
				'name'       => 'Guainia',
				'code'       => 'GNA'
			],
			[
				'id'         => 736,
				'country_id' => 47,
				'name'       => 'Guajira',
				'code'       => 'GJR'
			],
			[
				'id'         => 737,
				'country_id' => 47,
				'name'       => 'Guaviare',
				'code'       => 'GVR'
			],
			[
				'id'         => 738,
				'country_id' => 47,
				'name'       => 'Huila',
				'code'       => 'HUI'
			],
			[
				'id'         => 739,
				'country_id' => 47,
				'name'       => 'Magdalena',
				'code'       => 'MAG'
			],
			[
				'id'         => 740,
				'country_id' => 47,
				'name'       => 'Meta',
				'code'       => 'MET'
			],
			[
				'id'         => 741,
				'country_id' => 47,
				'name'       => 'Narino',
				'code'       => 'NAR'
			],
			[
				'id'         => 742,
				'country_id' => 47,
				'name'       => 'Norte de Santander',
				'code'       => 'NDS'
			],
			[
				'id'         => 743,
				'country_id' => 47,
				'name'       => 'Putumayo',
				'code'       => 'PUT'
			],
			[
				'id'         => 744,
				'country_id' => 47,
				'name'       => 'Quindio',
				'code'       => 'QUI'
			],
			[
				'id'         => 745,
				'country_id' => 47,
				'name'       => 'Risaralda',
				'code'       => 'RIS'
			],
			[
				'id'         => 746,
				'country_id' => 47,
				'name'       => 'San Andres y Providencia',
				'code'       => 'SAP'
			],
			[
				'id'         => 747,
				'country_id' => 47,
				'name'       => 'Santander',
				'code'       => 'SAN'
			],
			[
				'id'         => 748,
				'country_id' => 47,
				'name'       => 'Sucre',
				'code'       => 'SUC'
			],
			[
				'id'         => 749,
				'country_id' => 47,
				'name'       => 'Tolima',
				'code'       => 'TOL'
			],
			[
				'id'         => 750,
				'country_id' => 47,
				'name'       => 'Valle del Cauca',
				'code'       => 'VDC'
			],
			[
				'id'         => 751,
				'country_id' => 47,
				'name'       => 'Vaupes',
				'code'       => 'VAU'
			],
			[
				'id'         => 752,
				'country_id' => 47,
				'name'       => 'Vichada',
				'code'       => 'VIC'
			],
			[
				'id'         => 753,
				'country_id' => 48,
				'name'       => 'Grande Comore',
				'code'       => 'G'
			],
			[
				'id'         => 754,
				'country_id' => 48,
				'name'       => 'Anjouan',
				'code'       => 'A'
			],
			[
				'id'         => 755,
				'country_id' => 48,
				'name'       => 'Moheli',
				'code'       => 'M'
			],
			[
				'id'         => 756,
				'country_id' => 49,
				'name'       => 'Bouenza',
				'code'       => 'BO'
			],
			[
				'id'         => 757,
				'country_id' => 49,
				'name'       => 'Brazzaville',
				'code'       => 'BR'
			],
			[
				'id'         => 758,
				'country_id' => 49,
				'name'       => 'Cuvette',
				'code'       => 'CU'
			],
			[
				'id'         => 759,
				'country_id' => 49,
				'name'       => 'Cuvette-Ouest',
				'code'       => 'CO'
			],
			[
				'id'         => 760,
				'country_id' => 49,
				'name'       => 'Kouilou',
				'code'       => 'KO'
			],
			[
				'id'         => 761,
				'country_id' => 49,
				'name'       => 'Lekoumou',
				'code'       => 'LE'
			],
			[
				'id'         => 762,
				'country_id' => 49,
				'name'       => 'Likouala',
				'code'       => 'LI'
			],
			[
				'id'         => 763,
				'country_id' => 49,
				'name'       => 'Niari',
				'code'       => 'NI'
			],
			[
				'id'         => 764,
				'country_id' => 49,
				'name'       => 'Plateaux',
				'code'       => 'PL'
			],
			[
				'id'         => 765,
				'country_id' => 49,
				'name'       => 'Pool',
				'code'       => 'PO'
			],
			[
				'id'         => 766,
				'country_id' => 49,
				'name'       => 'Sangha',
				'code'       => 'SA'
			],
			[
				'id'         => 767,
				'country_id' => 50,
				'name'       => 'Pukapuka',
				'code'       => 'PU'
			],
			[
				'id'         => 768,
				'country_id' => 50,
				'name'       => 'Rakahanga',
				'code'       => 'RK'
			],
			[
				'id'         => 769,
				'country_id' => 50,
				'name'       => 'Manihiki',
				'code'       => 'MK'
			],
			[
				'id'         => 770,
				'country_id' => 50,
				'name'       => 'Penrhyn',
				'code'       => 'PE'
			],
			[
				'id'         => 771,
				'country_id' => 50,
				'name'       => 'Nassau Island',
				'code'       => 'NI'
			],
			[
				'id'         => 772,
				'country_id' => 50,
				'name'       => 'Surwarrow',
				'code'       => 'SU'
			],
			[
				'id'         => 773,
				'country_id' => 50,
				'name'       => 'Palmerston',
				'code'       => 'PA'
			],
			[
				'id'         => 774,
				'country_id' => 50,
				'name'       => 'Aitutaki',
				'code'       => 'AI'
			],
			[
				'id'         => 775,
				'country_id' => 50,
				'name'       => 'Manuae',
				'code'       => 'MA'
			],
			[
				'id'         => 776,
				'country_id' => 50,
				'name'       => 'Takutea',
				'code'       => 'TA'
			],
			[
				'id'         => 777,
				'country_id' => 50,
				'name'       => 'Mitiaro',
				'code'       => 'MT'
			],
			[
				'id'         => 778,
				'country_id' => 50,
				'name'       => 'Atiu',
				'code'       => 'AT'
			],
			[
				'id'         => 779,
				'country_id' => 50,
				'name'       => 'Mauke',
				'code'       => 'MU'
			],
			[
				'id'         => 780,
				'country_id' => 50,
				'name'       => 'Rarotonga',
				'code'       => 'RR'
			],
			[
				'id'         => 781,
				'country_id' => 50,
				'name'       => 'Mangaia',
				'code'       => 'MG'
			],
			[
				'id'         => 782,
				'country_id' => 51,
				'name'       => 'Alajuela',
				'code'       => 'AL'
			],
			[
				'id'         => 783,
				'country_id' => 51,
				'name'       => 'Cartago',
				'code'       => 'CA'
			],
			[
				'id'         => 784,
				'country_id' => 51,
				'name'       => 'Guanacaste',
				'code'       => 'GU'
			],
			[
				'id'         => 785,
				'country_id' => 51,
				'name'       => 'Heredia',
				'code'       => 'HE'
			],
			[
				'id'         => 786,
				'country_id' => 51,
				'name'       => 'Limon',
				'code'       => 'LI'
			],
			[
				'id'         => 787,
				'country_id' => 51,
				'name'       => 'Puntarenas',
				'code'       => 'PU'
			],
			[
				'id'         => 788,
				'country_id' => 51,
				'name'       => 'San Jose',
				'code'       => 'SJ'
			],
			[
				'id'         => 789,
				'country_id' => 52,
				'name'       => 'Abengourou',
				'code'       => 'ABE'
			],
			[
				'id'         => 790,
				'country_id' => 52,
				'name'       => 'Abidjan',
				'code'       => 'ABI'
			],
			[
				'id'         => 791,
				'country_id' => 52,
				'name'       => 'Aboisso',
				'code'       => 'ABO'
			],
			[
				'id'         => 792,
				'country_id' => 52,
				'name'       => 'Adiake',
				'code'       => 'ADI'
			],
			[
				'id'         => 793,
				'country_id' => 52,
				'name'       => 'Adzope',
				'code'       => 'ADZ'
			],
			[
				'id'         => 794,
				'country_id' => 52,
				'name'       => 'Agboville',
				'code'       => 'AGB'
			],
			[
				'id'         => 795,
				'country_id' => 52,
				'name'       => 'Agnibilekrou',
				'code'       => 'AGN'
			],
			[
				'id'         => 796,
				'country_id' => 52,
				'name'       => 'Alepe',
				'code'       => 'ALE'
			],
			[
				'id'         => 797,
				'country_id' => 52,
				'name'       => 'Bocanda',
				'code'       => 'BOC'
			],
			[
				'id'         => 798,
				'country_id' => 52,
				'name'       => 'Bangolo',
				'code'       => 'BAN'
			],
			[
				'id'         => 799,
				'country_id' => 52,
				'name'       => 'Beoumi',
				'code'       => 'BEO'
			],
			[
				'id'         => 800,
				'country_id' => 52,
				'name'       => 'Biankouma',
				'code'       => 'BIA'
			],
			[
				'id'         => 801,
				'country_id' => 52,
				'name'       => 'Bondoukou',
				'code'       => 'BDK'
			],
			[
				'id'         => 802,
				'country_id' => 52,
				'name'       => 'Bongouanou',
				'code'       => 'BGN'
			],
			[
				'id'         => 803,
				'country_id' => 52,
				'name'       => 'Bouafle',
				'code'       => 'BFL'
			],
			[
				'id'         => 804,
				'country_id' => 52,
				'name'       => 'Bouake',
				'code'       => 'BKE'
			],
			[
				'id'         => 805,
				'country_id' => 52,
				'name'       => 'Bouna',
				'code'       => 'BNA'
			],
			[
				'id'         => 806,
				'country_id' => 52,
				'name'       => 'Boundiali',
				'code'       => 'BDL'
			],
			[
				'id'         => 807,
				'country_id' => 52,
				'name'       => 'Dabakala',
				'code'       => 'DKL'
			],
			[
				'id'         => 808,
				'country_id' => 52,
				'name'       => 'Dabou',
				'code'       => 'DBU'
			],
			[
				'id'         => 809,
				'country_id' => 52,
				'name'       => 'Daloa',
				'code'       => 'DAL'
			],
			[
				'id'         => 810,
				'country_id' => 52,
				'name'       => 'Danane',
				'code'       => 'DAN'
			],
			[
				'id'         => 811,
				'country_id' => 52,
				'name'       => 'Daoukro',
				'code'       => 'DAO'
			],
			[
				'id'         => 812,
				'country_id' => 52,
				'name'       => 'Dimbokro',
				'code'       => 'DIM'
			],
			[
				'id'         => 813,
				'country_id' => 52,
				'name'       => 'Divo',
				'code'       => 'DIV'
			],
			[
				'id'         => 814,
				'country_id' => 52,
				'name'       => 'Duekoue',
				'code'       => 'DUE'
			],
			[
				'id'         => 815,
				'country_id' => 52,
				'name'       => 'Ferkessedougou',
				'code'       => 'FER'
			],
			[
				'id'         => 816,
				'country_id' => 52,
				'name'       => 'Gagnoa',
				'code'       => 'GAG'
			],
			[
				'id'         => 817,
				'country_id' => 52,
				'name'       => 'Grand-Bassam',
				'code'       => 'GBA'
			],
			[
				'id'         => 818,
				'country_id' => 52,
				'name'       => 'Grand-Lahou',
				'code'       => 'GLA'
			],
			[
				'id'         => 819,
				'country_id' => 52,
				'name'       => 'Guiglo',
				'code'       => 'GUI'
			],
			[
				'id'         => 820,
				'country_id' => 52,
				'name'       => 'Issia',
				'code'       => 'ISS'
			],
			[
				'id'         => 821,
				'country_id' => 52,
				'name'       => 'Jacqueville',
				'code'       => 'JAC'
			],
			[
				'id'         => 822,
				'country_id' => 52,
				'name'       => 'Katiola',
				'code'       => 'KAT'
			],
			[
				'id'         => 823,
				'country_id' => 52,
				'name'       => 'Korhogo',
				'code'       => 'KOR'
			],
			[
				'id'         => 824,
				'country_id' => 52,
				'name'       => 'Lakota',
				'code'       => 'LAK'
			],
			[
				'id'         => 825,
				'country_id' => 52,
				'name'       => 'Man',
				'code'       => 'MAN'
			],
			[
				'id'         => 826,
				'country_id' => 52,
				'name'       => 'Mankono',
				'code'       => 'MKN'
			],
			[
				'id'         => 827,
				'country_id' => 52,
				'name'       => 'Mbahiakro',
				'code'       => 'MBA'
			],
			[
				'id'         => 828,
				'country_id' => 52,
				'name'       => 'Odienne',
				'code'       => 'ODI'
			],
			[
				'id'         => 829,
				'country_id' => 52,
				'name'       => 'Oume',
				'code'       => 'OUM'
			],
			[
				'id'         => 830,
				'country_id' => 52,
				'name'       => 'Sakassou',
				'code'       => 'SAK'
			],
			[
				'id'         => 831,
				'country_id' => 52,
				'name'       => 'San-Pedro',
				'code'       => 'SPE'
			],
			[
				'id'         => 832,
				'country_id' => 52,
				'name'       => 'Sassandra',
				'code'       => 'SAS'
			],
			[
				'id'         => 833,
				'country_id' => 52,
				'name'       => 'Seguela',
				'code'       => 'SEG'
			],
			[
				'id'         => 834,
				'country_id' => 52,
				'name'       => 'Sinfra',
				'code'       => 'SIN'
			],
			[
				'id'         => 835,
				'country_id' => 52,
				'name'       => 'Soubre',
				'code'       => 'SOU'
			],
			[
				'id'         => 836,
				'country_id' => 52,
				'name'       => 'Tabou',
				'code'       => 'TAB'
			],
			[
				'id'         => 837,
				'country_id' => 52,
				'name'       => 'Tanda',
				'code'       => 'TAN'
			],
			[
				'id'         => 838,
				'country_id' => 52,
				'name'       => 'Tiebissou',
				'code'       => 'TIE'
			],
			[
				'id'         => 839,
				'country_id' => 52,
				'name'       => 'Tingrela',
				'code'       => 'TIN'
			],
			[
				'id'         => 840,
				'country_id' => 52,
				'name'       => 'Tiassale',
				'code'       => 'TIA'
			],
			[
				'id'         => 841,
				'country_id' => 52,
				'name'       => 'Touba',
				'code'       => 'TBA'
			],
			[
				'id'         => 842,
				'country_id' => 52,
				'name'       => 'Toulepleu',
				'code'       => 'TLP'
			],
			[
				'id'         => 843,
				'country_id' => 52,
				'name'       => 'Toumodi',
				'code'       => 'TMD'
			],
			[
				'id'         => 844,
				'country_id' => 52,
				'name'       => 'Vavoua',
				'code'       => 'VAV'
			],
			[
				'id'         => 845,
				'country_id' => 52,
				'name'       => 'Yamoussoukro',
				'code'       => 'YAM'
			],
			[
				'id'         => 846,
				'country_id' => 52,
				'name'       => 'Zuenoula',
				'code'       => 'ZUE'
			],
			[
				'id'         => 847,
				'country_id' => 53,
				'name'       => 'Bjelovarsko-bilogorska',
				'code'       => 'BB'
			],
			[
				'id'         => 848,
				'country_id' => 53,
				'name'       => 'Grad Zagreb',
				'code'       => 'GZ'
			],
			[
				'id'         => 849,
				'country_id' => 53,
				'name'       => 'Dubrovačko-neretvanska',
				'code'       => 'DN'
			],
			[
				'id'         => 850,
				'country_id' => 53,
				'name'       => 'Istarska',
				'code'       => 'IS'
			],
			[
				'id'         => 851,
				'country_id' => 53,
				'name'       => 'Karlovačka',
				'code'       => 'KA'
			],
			[
				'id'         => 852,
				'country_id' => 53,
				'name'       => 'Koprivničko-križevačka',
				'code'       => 'KK'
			],
			[
				'id'         => 853,
				'country_id' => 53,
				'name'       => 'Krapinsko-zagorska',
				'code'       => 'KZ'
			],
			[
				'id'         => 854,
				'country_id' => 53,
				'name'       => 'Ličko-senjska',
				'code'       => 'LS'
			],
			[
				'id'         => 855,
				'country_id' => 53,
				'name'       => 'Međimurska',
				'code'       => 'ME'
			],
			[
				'id'         => 856,
				'country_id' => 53,
				'name'       => 'Osječko-baranjska',
				'code'       => 'OB'
			],
			[
				'id'         => 857,
				'country_id' => 53,
				'name'       => 'Požeško-slavonska',
				'code'       => 'PS'
			],
			[
				'id'         => 858,
				'country_id' => 53,
				'name'       => 'Primorsko-goranska',
				'code'       => 'PG'
			],
			[
				'id'         => 859,
				'country_id' => 53,
				'name'       => 'Šibensko-kninska',
				'code'       => 'SK'
			],
			[
				'id'         => 860,
				'country_id' => 53,
				'name'       => 'Sisačko-moslavačka',
				'code'       => 'SM'
			],
			[
				'id'         => 861,
				'country_id' => 53,
				'name'       => 'Brodsko-posavska',
				'code'       => 'BP'
			],
			[
				'id'         => 862,
				'country_id' => 53,
				'name'       => 'Splitsko-dalmatinska',
				'code'       => 'SD'
			],
			[
				'id'         => 863,
				'country_id' => 53,
				'name'       => 'Varaždinska',
				'code'       => 'VA'
			],
			[
				'id'         => 864,
				'country_id' => 53,
				'name'       => 'Virovitičko-podravska',
				'code'       => 'VP'
			],
			[
				'id'         => 865,
				'country_id' => 53,
				'name'       => 'Vukovarsko-srijemska',
				'code'       => 'VS'
			],
			[
				'id'         => 866,
				'country_id' => 53,
				'name'       => 'Zadarska',
				'code'       => 'ZA'
			],
			[
				'id'         => 867,
				'country_id' => 53,
				'name'       => 'Zagrebačka',
				'code'       => 'ZG'
			],
			[
				'id'         => 868,
				'country_id' => 54,
				'name'       => 'Camaguey',
				'code'       => 'CA'
			],
			[
				'id'         => 869,
				'country_id' => 54,
				'name'       => 'Ciego de Avila',
				'code'       => 'CD'
			],
			[
				'id'         => 870,
				'country_id' => 54,
				'name'       => 'Cienfuegos',
				'code'       => 'CI'
			],
			[
				'id'         => 871,
				'country_id' => 54,
				'name'       => 'Ciudad de La Habana',
				'code'       => 'CH'
			],
			[
				'id'         => 872,
				'country_id' => 54,
				'name'       => 'Granma',
				'code'       => 'GR'
			],
			[
				'id'         => 873,
				'country_id' => 54,
				'name'       => 'Guantanamo',
				'code'       => 'GU'
			],
			[
				'id'         => 874,
				'country_id' => 54,
				'name'       => 'Holguin',
				'code'       => 'HO'
			],
			[
				'id'         => 875,
				'country_id' => 54,
				'name'       => 'Isla de la Juventud',
				'code'       => 'IJ'
			],
			[
				'id'         => 876,
				'country_id' => 54,
				'name'       => 'La Habana',
				'code'       => 'LH'
			],
			[
				'id'         => 877,
				'country_id' => 54,
				'name'       => 'Las Tunas',
				'code'       => 'LT'
			],
			[
				'id'         => 878,
				'country_id' => 54,
				'name'       => 'Matanzas',
				'code'       => 'MA'
			],
			[
				'id'         => 879,
				'country_id' => 54,
				'name'       => 'Pinar del Rio',
				'code'       => 'PR'
			],
			[
				'id'         => 880,
				'country_id' => 54,
				'name'       => 'Sancti Spiritus',
				'code'       => 'SS'
			],
			[
				'id'         => 881,
				'country_id' => 54,
				'name'       => 'Santiago de Cuba',
				'code'       => 'SC'
			],
			[
				'id'         => 882,
				'country_id' => 54,
				'name'       => 'Villa Clara',
				'code'       => 'VC'
			],
			[
				'id'         => 883,
				'country_id' => 55,
				'name'       => 'Famagusta',
				'code'       => 'F'
			],
			[
				'id'         => 884,
				'country_id' => 55,
				'name'       => 'Kyrenia',
				'code'       => 'K'
			],
			[
				'id'         => 885,
				'country_id' => 55,
				'name'       => 'Larnaca',
				'code'       => 'A'
			],
			[
				'id'         => 886,
				'country_id' => 55,
				'name'       => 'Limassol',
				'code'       => 'I'
			],
			[
				'id'         => 887,
				'country_id' => 55,
				'name'       => 'Nicosia',
				'code'       => 'N'
			],
			[
				'id'         => 888,
				'country_id' => 55,
				'name'       => 'Paphos',
				'code'       => 'P'
			],
			[
				'id'         => 889,
				'country_id' => 56,
				'name'       => 'Ústecký',
				'code'       => 'U'
			],
			[
				'id'         => 890,
				'country_id' => 56,
				'name'       => 'Jihočeský',
				'code'       => 'C'
			],
			[
				'id'         => 891,
				'country_id' => 56,
				'name'       => 'Jihomoravský',
				'code'       => 'B'
			],
			[
				'id'         => 892,
				'country_id' => 56,
				'name'       => 'Karlovarský',
				'code'       => 'K'
			],
			[
				'id'         => 893,
				'country_id' => 56,
				'name'       => 'Královehradecký',
				'code'       => 'H'
			],
			[
				'id'         => 894,
				'country_id' => 56,
				'name'       => 'Liberecký',
				'code'       => 'L'
			],
			[
				'id'         => 895,
				'country_id' => 56,
				'name'       => 'Moravskoslezský',
				'code'       => 'T'
			],
			[
				'id'         => 896,
				'country_id' => 56,
				'name'       => 'Olomoucký',
				'code'       => 'M'
			],
			[
				'id'         => 897,
				'country_id' => 56,
				'name'       => 'Pardubický',
				'code'       => 'E'
			],
			[
				'id'         => 898,
				'country_id' => 56,
				'name'       => 'Plzeňský',
				'code'       => 'P'
			],
			[
				'id'         => 899,
				'country_id' => 56,
				'name'       => 'Praha',
				'code'       => 'A'
			],
			[
				'id'         => 900,
				'country_id' => 56,
				'name'       => 'Středočeský',
				'code'       => 'S'
			],
			[
				'id'         => 901,
				'country_id' => 56,
				'name'       => 'Vysočina',
				'code'       => 'J'
			],
			[
				'id'         => 902,
				'country_id' => 56,
				'name'       => 'Zlínský',
				'code'       => 'Z'
			],
			[
				'id'         => 903,
				'country_id' => 57,
				'name'       => 'Arhus',
				'code'       => 'AR'
			],
			[
				'id'         => 904,
				'country_id' => 57,
				'name'       => 'Bornholm',
				'code'       => 'BH'
			],
			[
				'id'         => 905,
				'country_id' => 57,
				'name'       => 'Copenhagen',
				'code'       => 'CO'
			],
			[
				'id'         => 906,
				'country_id' => 57,
				'name'       => 'Faroe Islands',
				'code'       => 'FO'
			],
			[
				'id'         => 907,
				'country_id' => 57,
				'name'       => 'Frederiksborg',
				'code'       => 'FR'
			],
			[
				'id'         => 908,
				'country_id' => 57,
				'name'       => 'Fyn',
				'code'       => 'FY'
			],
			[
				'id'         => 909,
				'country_id' => 57,
				'name'       => 'Kobenhavn',
				'code'       => 'KO'
			],
			[
				'id'         => 910,
				'country_id' => 57,
				'name'       => 'Nordjylland',
				'code'       => 'NO'
			],
			[
				'id'         => 911,
				'country_id' => 57,
				'name'       => 'Ribe',
				'code'       => 'RI'
			],
			[
				'id'         => 912,
				'country_id' => 57,
				'name'       => 'Ringkobing',
				'code'       => 'RK'
			],
			[
				'id'         => 913,
				'country_id' => 57,
				'name'       => 'Roskilde',
				'code'       => 'RO'
			],
			[
				'id'         => 914,
				'country_id' => 57,
				'name'       => 'Sonderjylland',
				'code'       => 'SO'
			],
			[
				'id'         => 915,
				'country_id' => 57,
				'name'       => 'Storstrom',
				'code'       => 'ST'
			],
			[
				'id'         => 916,
				'country_id' => 57,
				'name'       => 'Vejle',
				'code'       => 'VK'
			],
			[
				'id'         => 917,
				'country_id' => 57,
				'name'       => 'Vestjælland',
				'code'       => 'VJ'
			],
			[
				'id'         => 918,
				'country_id' => 57,
				'name'       => 'Viborg',
				'code'       => 'VB'
			],
			[
				'id'         => 919,
				'country_id' => 58,
				'name'       => '\'Ali Sabih',
				'code'       => 'S'
			],
			[
				'id'         => 920,
				'country_id' => 58,
				'name'       => 'Dikhil',
				'code'       => 'K'
			],
			[
				'id'         => 921,
				'country_id' => 58,
				'name'       => 'Djibouti',
				'code'       => 'J'
			],
			[
				'id'         => 922,
				'country_id' => 58,
				'name'       => 'Obock',
				'code'       => 'O'
			],
			[
				'id'         => 923,
				'country_id' => 58,
				'name'       => 'Tadjoura',
				'code'       => 'T'
			],
			[
				'id'         => 924,
				'country_id' => 59,
				'name'       => 'Saint Andrew Parish',
				'code'       => 'AND'
			],
			[
				'id'         => 925,
				'country_id' => 59,
				'name'       => 'Saint David Parish',
				'code'       => 'DAV'
			],
			[
				'id'         => 926,
				'country_id' => 59,
				'name'       => 'Saint George Parish',
				'code'       => 'GEO'
			],
			[
				'id'         => 927,
				'country_id' => 59,
				'name'       => 'Saint John Parish',
				'code'       => 'JOH'
			],
			[
				'id'         => 928,
				'country_id' => 59,
				'name'       => 'Saint Joseph Parish',
				'code'       => 'JOS'
			],
			[
				'id'         => 929,
				'country_id' => 59,
				'name'       => 'Saint Luke Parish',
				'code'       => 'LUK'
			],
			[
				'id'         => 930,
				'country_id' => 59,
				'name'       => 'Saint Mark Parish',
				'code'       => 'MAR'
			],
			[
				'id'         => 931,
				'country_id' => 59,
				'name'       => 'Saint Patrick Parish',
				'code'       => 'PAT'
			],
			[
				'id'         => 932,
				'country_id' => 59,
				'name'       => 'Saint Paul Parish',
				'code'       => 'PAU'
			],
			[
				'id'         => 933,
				'country_id' => 59,
				'name'       => 'Saint Peter Parish',
				'code'       => 'PET'
			],
			[
				'id'         => 934,
				'country_id' => 60,
				'name'       => 'Distrito Nacional',
				'code'       => 'DN'
			],
			[
				'id'         => 935,
				'country_id' => 60,
				'name'       => 'Azua',
				'code'       => 'AZ'
			],
			[
				'id'         => 936,
				'country_id' => 60,
				'name'       => 'Baoruco',
				'code'       => 'BC'
			],
			[
				'id'         => 937,
				'country_id' => 60,
				'name'       => 'Barahona',
				'code'       => 'BH'
			],
			[
				'id'         => 938,
				'country_id' => 60,
				'name'       => 'Dajabon',
				'code'       => 'DJ'
			],
			[
				'id'         => 939,
				'country_id' => 60,
				'name'       => 'Duarte',
				'code'       => 'DU'
			],
			[
				'id'         => 940,
				'country_id' => 60,
				'name'       => 'Elias Pina',
				'code'       => 'EL'
			],
			[
				'id'         => 941,
				'country_id' => 60,
				'name'       => 'El Seybo',
				'code'       => 'SY'
			],
			[
				'id'         => 942,
				'country_id' => 60,
				'name'       => 'Espaillat',
				'code'       => 'ET'
			],
			[
				'id'         => 943,
				'country_id' => 60,
				'name'       => 'Hato Mayor',
				'code'       => 'HM'
			],
			[
				'id'         => 944,
				'country_id' => 60,
				'name'       => 'Independencia',
				'code'       => 'IN'
			],
			[
				'id'         => 945,
				'country_id' => 60,
				'name'       => 'La Altagracia',
				'code'       => 'AL'
			],
			[
				'id'         => 946,
				'country_id' => 60,
				'name'       => 'La Romana',
				'code'       => 'RO'
			],
			[
				'id'         => 947,
				'country_id' => 60,
				'name'       => 'La Vega',
				'code'       => 'VE'
			],
			[
				'id'         => 948,
				'country_id' => 60,
				'name'       => 'Maria Trinidad Sanchez',
				'code'       => 'MT'
			],
			[
				'id'         => 949,
				'country_id' => 60,
				'name'       => 'Monsenor Nouel',
				'code'       => 'MN'
			],
			[
				'id'         => 950,
				'country_id' => 60,
				'name'       => 'Monte Cristi',
				'code'       => 'MC'
			],
			[
				'id'         => 951,
				'country_id' => 60,
				'name'       => 'Monte Plata',
				'code'       => 'MP'
			],
			[
				'id'         => 952,
				'country_id' => 60,
				'name'       => 'Pedernales',
				'code'       => 'PD'
			],
			[
				'id'         => 953,
				'country_id' => 60,
				'name'       => 'Peravia (Bani)',
				'code'       => 'PR'
			],
			[
				'id'         => 954,
				'country_id' => 60,
				'name'       => 'Puerto Plata',
				'code'       => 'PP'
			],
			[
				'id'         => 955,
				'country_id' => 60,
				'name'       => 'Salcedo',
				'code'       => 'SL'
			],
			[
				'id'         => 956,
				'country_id' => 60,
				'name'       => 'Samana',
				'code'       => 'SM'
			],
			[
				'id'         => 957,
				'country_id' => 60,
				'name'       => 'Sanchez Ramirez',
				'code'       => 'SH'
			],
			[
				'id'         => 958,
				'country_id' => 60,
				'name'       => 'San Cristobal',
				'code'       => 'SC'
			],
			[
				'id'         => 959,
				'country_id' => 60,
				'name'       => 'San Jose de Ocoa',
				'code'       => 'JO'
			],
			[
				'id'         => 960,
				'country_id' => 60,
				'name'       => 'San Juan',
				'code'       => 'SJ'
			],
			[
				'id'         => 961,
				'country_id' => 60,
				'name'       => 'San Pedro de Macoris',
				'code'       => 'PM'
			],
			[
				'id'         => 962,
				'country_id' => 60,
				'name'       => 'Santiago',
				'code'       => 'SA'
			],
			[
				'id'         => 963,
				'country_id' => 60,
				'name'       => 'Santiago Rodriguez',
				'code'       => 'ST'
			],
			[
				'id'         => 964,
				'country_id' => 60,
				'name'       => 'Santo Domingo',
				'code'       => 'SD'
			],
			[
				'id'         => 965,
				'country_id' => 60,
				'name'       => 'Valverde',
				'code'       => 'VA'
			],
			[
				'id'         => 966,
				'country_id' => 61,
				'name'       => 'Aileu',
				'code'       => 'AL'
			],
			[
				'id'         => 967,
				'country_id' => 61,
				'name'       => 'Ainaro',
				'code'       => 'AN'
			],
			[
				'id'         => 968,
				'country_id' => 61,
				'name'       => 'Baucau',
				'code'       => 'BA'
			],
			[
				'id'         => 969,
				'country_id' => 61,
				'name'       => 'Bobonaro',
				'code'       => 'BO'
			],
			[
				'id'         => 970,
				'country_id' => 61,
				'name'       => 'Cova Lima',
				'code'       => 'CO'
			],
			[
				'id'         => 971,
				'country_id' => 61,
				'name'       => 'Dili',
				'code'       => 'DI'
			],
			[
				'id'         => 972,
				'country_id' => 61,
				'name'       => 'Ermera',
				'code'       => 'ER'
			],
			[
				'id'         => 973,
				'country_id' => 61,
				'name'       => 'Lautem',
				'code'       => 'LA'
			],
			[
				'id'         => 974,
				'country_id' => 61,
				'name'       => 'Liquica',
				'code'       => 'LI'
			],
			[
				'id'         => 975,
				'country_id' => 61,
				'name'       => 'Manatuto',
				'code'       => 'MT'
			],
			[
				'id'         => 976,
				'country_id' => 61,
				'name'       => 'Manufahi',
				'code'       => 'MF'
			],
			[
				'id'         => 977,
				'country_id' => 61,
				'name'       => 'Oecussi',
				'code'       => 'OE'
			],
			[
				'id'         => 978,
				'country_id' => 61,
				'name'       => 'Viqueque',
				'code'       => 'VI'
			],
			[
				'id'         => 979,
				'country_id' => 62,
				'name'       => 'Azuay',
				'code'       => 'AZU'
			],
			[
				'id'         => 980,
				'country_id' => 62,
				'name'       => 'Bolivar',
				'code'       => 'BOL'
			],
			[
				'id'         => 981,
				'country_id' => 62,
				'name'       => 'Cañar',
				'code'       => 'CAN'
			],
			[
				'id'         => 982,
				'country_id' => 62,
				'name'       => 'Carchi',
				'code'       => 'CAR'
			],
			[
				'id'         => 983,
				'country_id' => 62,
				'name'       => 'Chimborazo',
				'code'       => 'CHI'
			],
			[
				'id'         => 984,
				'country_id' => 62,
				'name'       => 'Cotopaxi',
				'code'       => 'COT'
			],
			[
				'id'         => 985,
				'country_id' => 62,
				'name'       => 'El Oro',
				'code'       => 'EOR'
			],
			[
				'id'         => 986,
				'country_id' => 62,
				'name'       => 'Esmeraldas',
				'code'       => 'ESM'
			],
			[
				'id'         => 987,
				'country_id' => 62,
				'name'       => 'Galápagos',
				'code'       => 'GPS'
			],
			[
				'id'         => 988,
				'country_id' => 62,
				'name'       => 'Guayas',
				'code'       => 'GUA'
			],
			[
				'id'         => 989,
				'country_id' => 62,
				'name'       => 'Imbabura',
				'code'       => 'IMB'
			],
			[
				'id'         => 990,
				'country_id' => 62,
				'name'       => 'Loja',
				'code'       => 'LOJ'
			],
			[
				'id'         => 991,
				'country_id' => 62,
				'name'       => 'Los Rios',
				'code'       => 'LRO'
			],
			[
				'id'         => 992,
				'country_id' => 62,
				'name'       => 'Manabí',
				'code'       => 'MAN'
			],
			[
				'id'         => 993,
				'country_id' => 62,
				'name'       => 'Morona Santiago',
				'code'       => 'MSA'
			],
			[
				'id'         => 994,
				'country_id' => 62,
				'name'       => 'Napo',
				'code'       => 'NAP'
			],
			[
				'id'         => 995,
				'country_id' => 62,
				'name'       => 'Orellana',
				'code'       => 'ORE'
			],
			[
				'id'         => 996,
				'country_id' => 62,
				'name'       => 'Pastaza',
				'code'       => 'PAS'
			],
			[
				'id'         => 997,
				'country_id' => 62,
				'name'       => 'Pichincha',
				'code'       => 'PIC'
			],
			[
				'id'         => 998,
				'country_id' => 62,
				'name'       => 'Sucumbíos',
				'code'       => 'SUC'
			],
			[
				'id'         => 999,
				'country_id' => 62,
				'name'       => 'Tungurahua',
				'code'       => 'TUN'
			],
			[
				'id'         => 1000,
				'country_id' => 62,
				'name'       => 'Zamora Chinchipe',
				'code'       => 'ZCH'
			],
			[
				'id'         => 1001,
				'country_id' => 63,
				'name'       => 'Ad Daqahliyah',
				'code'       => 'DHY'
			],
			[
				'id'         => 1002,
				'country_id' => 63,
				'name'       => 'Al Bahr al Ahmar',
				'code'       => 'BAM'
			],
			[
				'id'         => 1003,
				'country_id' => 63,
				'name'       => 'Al Buhayrah',
				'code'       => 'BHY'
			],
			[
				'id'         => 1004,
				'country_id' => 63,
				'name'       => 'Al Fayyum',
				'code'       => 'FYM'
			],
			[
				'id'         => 1005,
				'country_id' => 63,
				'name'       => 'Al Gharbiyah',
				'code'       => 'GBY'
			],
			[
				'id'         => 1006,
				'country_id' => 63,
				'name'       => 'Al Iskandariyah',
				'code'       => 'IDR'
			],
			[
				'id'         => 1007,
				'country_id' => 63,
				'name'       => 'Al Isma\'iliyah',
				'code'       => 'IML'
			],
			[
				'id'         => 1008,
				'country_id' => 63,
				'name'       => 'Al Jizah',
				'code'       => 'JZH'
			],
			[
				'id'         => 1009,
				'country_id' => 63,
				'name'       => 'Al Minufiyah',
				'code'       => 'MFY'
			],
			[
				'id'         => 1010,
				'country_id' => 63,
				'name'       => 'Al Minya',
				'code'       => 'MNY'
			],
			[
				'id'         => 1011,
				'country_id' => 63,
				'name'       => 'Al Qahirah',
				'code'       => 'QHR'
			],
			[
				'id'         => 1012,
				'country_id' => 63,
				'name'       => 'Al Qalyubiyah',
				'code'       => 'QLY'
			],
			[
				'id'         => 1013,
				'country_id' => 63,
				'name'       => 'Al Wadi al Jadid',
				'code'       => 'WJD'
			],
			[
				'id'         => 1014,
				'country_id' => 63,
				'name'       => 'Ash Sharqiyah',
				'code'       => 'SHQ'
			],
			[
				'id'         => 1015,
				'country_id' => 63,
				'name'       => 'As Suways',
				'code'       => 'SWY'
			],
			[
				'id'         => 1016,
				'country_id' => 63,
				'name'       => 'Aswan',
				'code'       => 'ASW'
			],
			[
				'id'         => 1017,
				'country_id' => 63,
				'name'       => 'Asyut',
				'code'       => 'ASY'
			],
			[
				'id'         => 1018,
				'country_id' => 63,
				'name'       => 'Bani Suwayf',
				'code'       => 'BSW'
			],
			[
				'id'         => 1019,
				'country_id' => 63,
				'name'       => 'Bur Sa\'id',
				'code'       => 'BSD'
			],
			[
				'id'         => 1020,
				'country_id' => 63,
				'name'       => 'Dumyat',
				'code'       => 'DMY'
			],
			[
				'id'         => 1021,
				'country_id' => 63,
				'name'       => 'Janub Sina\'',
				'code'       => 'JNS'
			],
			[
				'id'         => 1022,
				'country_id' => 63,
				'name'       => 'Kafr ash Shaykh',
				'code'       => 'KSH'
			],
			[
				'id'         => 1023,
				'country_id' => 63,
				'name'       => 'Matruh',
				'code'       => 'MAT'
			],
			[
				'id'         => 1024,
				'country_id' => 63,
				'name'       => 'Qina',
				'code'       => 'QIN'
			],
			[
				'id'         => 1025,
				'country_id' => 63,
				'name'       => 'Shamal Sina\'',
				'code'       => 'SHS'
			],
			[
				'id'         => 1026,
				'country_id' => 63,
				'name'       => 'Suhaj',
				'code'       => 'SUH'
			],
			[
				'id'         => 1027,
				'country_id' => 64,
				'name'       => 'Ahuachapan',
				'code'       => 'AH'
			],
			[
				'id'         => 1028,
				'country_id' => 64,
				'name'       => 'Cabanas',
				'code'       => 'CA'
			],
			[
				'id'         => 1029,
				'country_id' => 64,
				'name'       => 'Chalatenango',
				'code'       => 'CH'
			],
			[
				'id'         => 1030,
				'country_id' => 64,
				'name'       => 'Cuscatlan',
				'code'       => 'CU'
			],
			[
				'id'         => 1031,
				'country_id' => 64,
				'name'       => 'La Libertad',
				'code'       => 'LB'
			],
			[
				'id'         => 1032,
				'country_id' => 64,
				'name'       => 'La Paz',
				'code'       => 'PZ'
			],
			[
				'id'         => 1033,
				'country_id' => 64,
				'name'       => 'La Union',
				'code'       => 'UN'
			],
			[
				'id'         => 1034,
				'country_id' => 64,
				'name'       => 'Morazan',
				'code'       => 'MO'
			],
			[
				'id'         => 1035,
				'country_id' => 64,
				'name'       => 'San Miguel',
				'code'       => 'SM'
			],
			[
				'id'         => 1036,
				'country_id' => 64,
				'name'       => 'San Salvador',
				'code'       => 'SS'
			],
			[
				'id'         => 1037,
				'country_id' => 64,
				'name'       => 'San Vicente',
				'code'       => 'SV'
			],
			[
				'id'         => 1038,
				'country_id' => 64,
				'name'       => 'Santa Ana',
				'code'       => 'SA'
			],
			[
				'id'         => 1039,
				'country_id' => 64,
				'name'       => 'Sonsonate',
				'code'       => 'SO'
			],
			[
				'id'         => 1040,
				'country_id' => 64,
				'name'       => 'Usulutan',
				'code'       => 'US'
			],
			[
				'id'         => 1041,
				'country_id' => 65,
				'name'       => 'Provincia Annobon',
				'code'       => 'AN'
			],
			[
				'id'         => 1042,
				'country_id' => 65,
				'name'       => 'Provincia Bioko Norte',
				'code'       => 'BN'
			],
			[
				'id'         => 1043,
				'country_id' => 65,
				'name'       => 'Provincia Bioko Sur',
				'code'       => 'BS'
			],
			[
				'id'         => 1044,
				'country_id' => 65,
				'name'       => 'Provincia Centro Sur',
				'code'       => 'CS'
			],
			[
				'id'         => 1045,
				'country_id' => 65,
				'name'       => 'Provincia Kie-Ntem',
				'code'       => 'KN'
			],
			[
				'id'         => 1046,
				'country_id' => 65,
				'name'       => 'Provincia Litoral',
				'code'       => 'LI'
			],
			[
				'id'         => 1047,
				'country_id' => 65,
				'name'       => 'Provincia Wele-Nzas',
				'code'       => 'WN'
			],
			[
				'id'         => 1048,
				'country_id' => 66,
				'name'       => 'Central (Maekel)',
				'code'       => 'MA'
			],
			[
				'id'         => 1049,
				'country_id' => 66,
				'name'       => 'Anseba (Keren)',
				'code'       => 'KE'
			],
			[
				'id'         => 1050,
				'country_id' => 66,
				'name'       => 'Southern Red Sea (Debub-Keih-Bahri)',
				'code'       => 'DK'
			],
			[
				'id'         => 1051,
				'country_id' => 66,
				'name'       => 'Northern Red Sea (Semien-Keih-Bahri)',
				'code'       => 'SK'
			],
			[
				'id'         => 1052,
				'country_id' => 66,
				'name'       => 'Southern (Debub)',
				'code'       => 'DE'
			],
			[
				'id'         => 1053,
				'country_id' => 66,
				'name'       => 'Gash-Barka (Barentu)',
				'code'       => 'BR'
			],
			[
				'id'         => 1054,
				'country_id' => 67,
				'name'       => 'Harjumaa (Tallinn)',
				'code'       => 'HA'
			],
			[
				'id'         => 1055,
				'country_id' => 67,
				'name'       => 'Hiiumaa (Kardla)',
				'code'       => 'HI'
			],
			[
				'id'         => 1056,
				'country_id' => 67,
				'name'       => 'Ida-Virumaa (Johvi)',
				'code'       => 'IV'
			],
			[
				'id'         => 1057,
				'country_id' => 67,
				'name'       => 'Jarvamaa (Paide)',
				'code'       => 'JA'
			],
			[
				'id'         => 1058,
				'country_id' => 67,
				'name'       => 'Jogevamaa (Jogeva)',
				'code'       => 'JO'
			],
			[
				'id'         => 1059,
				'country_id' => 67,
				'name'       => 'Laane-Virumaa (Rakvere)',
				'code'       => 'LV'
			],
			[
				'id'         => 1060,
				'country_id' => 67,
				'name'       => 'Laanemaa (Haapsalu)',
				'code'       => 'LA'
			],
			[
				'id'         => 1061,
				'country_id' => 67,
				'name'       => 'Parnumaa (Parnu)',
				'code'       => 'PA'
			],
			[
				'id'         => 1062,
				'country_id' => 67,
				'name'       => 'Polvamaa (Polva)',
				'code'       => 'PO'
			],
			[
				'id'         => 1063,
				'country_id' => 67,
				'name'       => 'Raplamaa (Rapla)',
				'code'       => 'RA'
			],
			[
				'id'         => 1064,
				'country_id' => 67,
				'name'       => 'Saaremaa (Kuessaare)',
				'code'       => 'SA'
			],
			[
				'id'         => 1065,
				'country_id' => 67,
				'name'       => 'Tartumaa (Tartu)',
				'code'       => 'TA'
			],
			[
				'id'         => 1066,
				'country_id' => 67,
				'name'       => 'Valgamaa (Valga)',
				'code'       => 'VA'
			],
			[
				'id'         => 1067,
				'country_id' => 67,
				'name'       => 'Viljandimaa (Viljandi)',
				'code'       => 'VI'
			],
			[
				'id'         => 1068,
				'country_id' => 67,
				'name'       => 'Vorumaa (Voru)',
				'code'       => 'VO'
			],
			[
				'id'         => 1069,
				'country_id' => 68,
				'name'       => 'Afar',
				'code'       => 'AF'
			],
			[
				'id'         => 1070,
				'country_id' => 68,
				'name'       => 'Amhara',
				'code'       => 'AH'
			],
			[
				'id'         => 1071,
				'country_id' => 68,
				'name'       => 'Benishangul-Gumaz',
				'code'       => 'BG'
			],
			[
				'id'         => 1072,
				'country_id' => 68,
				'name'       => 'Gambela',
				'code'       => 'GB'
			],
			[
				'id'         => 1073,
				'country_id' => 68,
				'name'       => 'Hariai',
				'code'       => 'HR'
			],
			[
				'id'         => 1074,
				'country_id' => 68,
				'name'       => 'Oromia',
				'code'       => 'OR'
			],
			[
				'id'         => 1075,
				'country_id' => 68,
				'name'       => 'Somali',
				'code'       => 'SM'
			],
			[
				'id'         => 1076,
				'country_id' => 68,
				'name'       => 'Southern Nations - Nationalities and Peoples Region',
				'code'       => 'SN'
			],
			[
				'id'         => 1077,
				'country_id' => 68,
				'name'       => 'Tigray',
				'code'       => 'TG'
			],
			[
				'id'         => 1078,
				'country_id' => 68,
				'name'       => 'Addis Ababa',
				'code'       => 'AA'
			],
			[
				'id'         => 1079,
				'country_id' => 68,
				'name'       => 'Dire Dawa',
				'code'       => 'DD'
			],
			[
				'id'         => 1080,
				'country_id' => 71,
				'name'       => 'Central Division',
				'code'       => 'C'
			],
			[
				'id'         => 1081,
				'country_id' => 71,
				'name'       => 'Northern Division',
				'code'       => 'N'
			],
			[
				'id'         => 1082,
				'country_id' => 71,
				'name'       => 'Eastern Division',
				'code'       => 'E'
			],
			[
				'id'         => 1083,
				'country_id' => 71,
				'name'       => 'Western Division',
				'code'       => 'W'
			],
			[
				'id'         => 1084,
				'country_id' => 71,
				'name'       => 'Rotuma',
				'code'       => 'R'
			],
			[
				'id'         => 1085,
				'country_id' => 72,
				'name'       => 'Ahvenanmaan lääni',
				'code'       => 'AL'
			],
			[
				'id'         => 1086,
				'country_id' => 72,
				'name'       => 'Etelä-Suomen lääni',
				'code'       => 'ES'
			],
			[
				'id'         => 1087,
				'country_id' => 72,
				'name'       => 'Itä-Suomen lääni',
				'code'       => 'IS'
			],
			[
				'id'         => 1088,
				'country_id' => 72,
				'name'       => 'Länsi-Suomen lääni',
				'code'       => 'LS'
			],
			[
				'id'         => 1089,
				'country_id' => 72,
				'name'       => 'Lapin lääni',
				'code'       => 'LA'
			],
			[
				'id'         => 1090,
				'country_id' => 72,
				'name'       => 'Oulun lääni',
				'code'       => 'OU'
			],
			[
				'id'         => 1114,
				'country_id' => 74,
				'name'       => 'Ain',
				'code'       => '01'
			],
			[
				'id'         => 1115,
				'country_id' => 74,
				'name'       => 'Aisne',
				'code'       => '02'
			],
			[
				'id'         => 1116,
				'country_id' => 74,
				'name'       => 'Allier',
				'code'       => '03'
			],
			[
				'id'         => 1117,
				'country_id' => 74,
				'name'       => 'Alpes de Haute Provence',
				'code'       => '04'
			],
			[
				'id'         => 1118,
				'country_id' => 74,
				'name'       => 'Hautes-Alpes',
				'code'       => '05'
			],
			[
				'id'         => 1119,
				'country_id' => 74,
				'name'       => 'Alpes Maritimes',
				'code'       => '06'
			],
			[
				'id'         => 1120,
				'country_id' => 74,
				'name'       => 'Ardèche',
				'code'       => '07'
			],
			[
				'id'         => 1121,
				'country_id' => 74,
				'name'       => 'Ardennes',
				'code'       => '08'
			],
			[
				'id'         => 1122,
				'country_id' => 74,
				'name'       => 'Ariège',
				'code'       => '09'
			],
			[
				'id'         => 1123,
				'country_id' => 74,
				'name'       => 'Aube',
				'code'       => '10'
			],
			[
				'id'         => 1124,
				'country_id' => 74,
				'name'       => 'Aude',
				'code'       => '11'
			],
			[
				'id'         => 1125,
				'country_id' => 74,
				'name'       => 'Aveyron',
				'code'       => '12'
			],
			[
				'id'         => 1126,
				'country_id' => 74,
				'name'       => 'Bouches du Rhône',
				'code'       => '13'
			],
			[
				'id'         => 1127,
				'country_id' => 74,
				'name'       => 'Calvados',
				'code'       => '14'
			],
			[
				'id'         => 1128,
				'country_id' => 74,
				'name'       => 'Cantal',
				'code'       => '15'
			],
			[
				'id'         => 1129,
				'country_id' => 74,
				'name'       => 'Charente',
				'code'       => '16'
			],
			[
				'id'         => 1130,
				'country_id' => 74,
				'name'       => 'Charente Maritime',
				'code'       => '17'
			],
			[
				'id'         => 1131,
				'country_id' => 74,
				'name'       => 'Cher',
				'code'       => '18'
			],
			[
				'id'         => 1132,
				'country_id' => 74,
				'name'       => 'Corrèze',
				'code'       => '19'
			],
			[
				'id'         => 1133,
				'country_id' => 74,
				'name'       => 'Corse du Sud',
				'code'       => '2A'
			],
			[
				'id'         => 1134,
				'country_id' => 74,
				'name'       => 'Haute Corse',
				'code'       => '2B'
			],
			[
				'id'         => 1135,
				'country_id' => 74,
				'name'       => 'Côte d\'or',
				'code'       => '21'
			],
			[
				'id'         => 1136,
				'country_id' => 74,
				'name'       => 'Côtes d\'Armor',
				'code'       => '22'
			],
			[
				'id'         => 1137,
				'country_id' => 74,
				'name'       => 'Creuse',
				'code'       => '23'
			],
			[
				'id'         => 1138,
				'country_id' => 74,
				'name'       => 'Dordogne',
				'code'       => '24'
			],
			[
				'id'         => 1139,
				'country_id' => 74,
				'name'       => 'Doubs',
				'code'       => '25'
			],
			[
				'id'         => 1140,
				'country_id' => 74,
				'name'       => 'Drôme',
				'code'       => '26'
			],
			[
				'id'         => 1141,
				'country_id' => 74,
				'name'       => 'Eure',
				'code'       => '27'
			],
			[
				'id'         => 1142,
				'country_id' => 74,
				'name'       => 'Eure et Loir',
				'code'       => '28'
			],
			[
				'id'         => 1143,
				'country_id' => 74,
				'name'       => 'Finistère',
				'code'       => '29'
			],
			[
				'id'         => 1144,
				'country_id' => 74,
				'name'       => 'Gard',
				'code'       => '30'
			],
			[
				'id'         => 1145,
				'country_id' => 74,
				'name'       => 'Haute Garonne',
				'code'       => '31'
			],
			[
				'id'         => 1146,
				'country_id' => 74,
				'name'       => 'Gers',
				'code'       => '32'
			],
			[
				'id'         => 1147,
				'country_id' => 74,
				'name'       => 'Gironde',
				'code'       => '33'
			],
			[
				'id'         => 1148,
				'country_id' => 74,
				'name'       => 'Hérault',
				'code'       => '34'
			],
			[
				'id'         => 1149,
				'country_id' => 74,
				'name'       => 'Ille et Vilaine',
				'code'       => '35'
			],
			[
				'id'         => 1150,
				'country_id' => 74,
				'name'       => 'Indre',
				'code'       => '36'
			],
			[
				'id'         => 1151,
				'country_id' => 74,
				'name'       => 'Indre et Loire',
				'code'       => '37'
			],
			[
				'id'         => 1152,
				'country_id' => 74,
				'name'       => 'Isére',
				'code'       => '38'
			],
			[
				'id'         => 1153,
				'country_id' => 74,
				'name'       => 'Jura',
				'code'       => '39'
			],
			[
				'id'         => 1154,
				'country_id' => 74,
				'name'       => 'Landes',
				'code'       => '40'
			],
			[
				'id'         => 1155,
				'country_id' => 74,
				'name'       => 'Loir et Cher',
				'code'       => '41'
			],
			[
				'id'         => 1156,
				'country_id' => 74,
				'name'       => 'Loire',
				'code'       => '42'
			],
			[
				'id'         => 1157,
				'country_id' => 74,
				'name'       => 'Haute Loire',
				'code'       => '43'
			],
			[
				'id'         => 1158,
				'country_id' => 74,
				'name'       => 'Loire Atlantique',
				'code'       => '44'
			],
			[
				'id'         => 1159,
				'country_id' => 74,
				'name'       => 'Loiret',
				'code'       => '45'
			],
			[
				'id'         => 1160,
				'country_id' => 74,
				'name'       => 'Lot',
				'code'       => '46'
			],
			[
				'id'         => 1161,
				'country_id' => 74,
				'name'       => 'Lot et Garonne',
				'code'       => '47'
			],
			[
				'id'         => 1162,
				'country_id' => 74,
				'name'       => 'Lozère',
				'code'       => '48'
			],
			[
				'id'         => 1163,
				'country_id' => 74,
				'name'       => 'Maine et Loire',
				'code'       => '49'
			],
			[
				'id'         => 1164,
				'country_id' => 74,
				'name'       => 'Manche',
				'code'       => '50'
			],
			[
				'id'         => 1165,
				'country_id' => 74,
				'name'       => 'Marne',
				'code'       => '51'
			],
			[
				'id'         => 1166,
				'country_id' => 74,
				'name'       => 'Haute Marne',
				'code'       => '52'
			],
			[
				'id'         => 1167,
				'country_id' => 74,
				'name'       => 'Mayenne',
				'code'       => '53'
			],
			[
				'id'         => 1168,
				'country_id' => 74,
				'name'       => 'Meurthe et Moselle',
				'code'       => '54'
			],
			[
				'id'         => 1169,
				'country_id' => 74,
				'name'       => 'Meuse',
				'code'       => '55'
			],
			[
				'id'         => 1170,
				'country_id' => 74,
				'name'       => 'Morbihan',
				'code'       => '56'
			],
			[
				'id'         => 1171,
				'country_id' => 74,
				'name'       => 'Moselle',
				'code'       => '57'
			],
			[
				'id'         => 1172,
				'country_id' => 74,
				'name'       => 'Nièvre',
				'code'       => '58'
			],
			[
				'id'         => 1173,
				'country_id' => 74,
				'name'       => 'Nord',
				'code'       => '59'
			],
			[
				'id'         => 1174,
				'country_id' => 74,
				'name'       => 'Oise',
				'code'       => '60'
			],
			[
				'id'         => 1175,
				'country_id' => 74,
				'name'       => 'Orne',
				'code'       => '61'
			],
			[
				'id'         => 1176,
				'country_id' => 74,
				'name'       => 'Pas de Calais',
				'code'       => '62'
			],
			[
				'id'         => 1177,
				'country_id' => 74,
				'name'       => 'Puy de Dôme',
				'code'       => '63'
			],
			[
				'id'         => 1178,
				'country_id' => 74,
				'name'       => 'Pyrénées Atlantiques',
				'code'       => '64'
			],
			[
				'id'         => 1179,
				'country_id' => 74,
				'name'       => 'Hautes Pyrénées',
				'code'       => '65'
			],
			[
				'id'         => 1180,
				'country_id' => 74,
				'name'       => 'Pyrénées Orientales',
				'code'       => '66'
			],
			[
				'id'         => 1181,
				'country_id' => 74,
				'name'       => 'Bas Rhin',
				'code'       => '67'
			],
			[
				'id'         => 1182,
				'country_id' => 74,
				'name'       => 'Haut Rhin',
				'code'       => '68'
			],
			[
				'id'         => 1183,
				'country_id' => 74,
				'name'       => 'Rhône',
				'code'       => '69'
			],
			[
				'id'         => 1184,
				'country_id' => 74,
				'name'       => 'Haute Saône',
				'code'       => '70'
			],
			[
				'id'         => 1185,
				'country_id' => 74,
				'name'       => 'Saône et Loire',
				'code'       => '71'
			],
			[
				'id'         => 1186,
				'country_id' => 74,
				'name'       => 'Sarthe',
				'code'       => '72'
			],
			[
				'id'         => 1187,
				'country_id' => 74,
				'name'       => 'Savoie',
				'code'       => '73'
			],
			[
				'id'         => 1188,
				'country_id' => 74,
				'name'       => 'Haute Savoie',
				'code'       => '74'
			],
			[
				'id'         => 1189,
				'country_id' => 74,
				'name'       => 'Paris',
				'code'       => '75'
			],
			[
				'id'         => 1190,
				'country_id' => 74,
				'name'       => 'Seine Maritime',
				'code'       => '76'
			],
			[
				'id'         => 1191,
				'country_id' => 74,
				'name'       => 'Seine et Marne',
				'code'       => '77'
			],
			[
				'id'         => 1192,
				'country_id' => 74,
				'name'       => 'Yvelines',
				'code'       => '78'
			],
			[
				'id'         => 1193,
				'country_id' => 74,
				'name'       => 'Deux Sèvres',
				'code'       => '79'
			],
			[
				'id'         => 1194,
				'country_id' => 74,
				'name'       => 'Somme',
				'code'       => '80'
			],
			[
				'id'         => 1195,
				'country_id' => 74,
				'name'       => 'Tarn',
				'code'       => '81'
			],
			[
				'id'         => 1196,
				'country_id' => 74,
				'name'       => 'Tarn et Garonne',
				'code'       => '82'
			],
			[
				'id'         => 1197,
				'country_id' => 74,
				'name'       => 'Var',
				'code'       => '83'
			],
			[
				'id'         => 1198,
				'country_id' => 74,
				'name'       => 'Vaucluse',
				'code'       => '84'
			],
			[
				'id'         => 1199,
				'country_id' => 74,
				'name'       => 'Vendée',
				'code'       => '85'
			],
			[
				'id'         => 1200,
				'country_id' => 74,
				'name'       => 'Vienne',
				'code'       => '86'
			],
			[
				'id'         => 1201,
				'country_id' => 74,
				'name'       => 'Haute Vienne',
				'code'       => '87'
			],
			[
				'id'         => 1202,
				'country_id' => 74,
				'name'       => 'Vosges',
				'code'       => '88'
			],
			[
				'id'         => 1203,
				'country_id' => 74,
				'name'       => 'Yonne',
				'code'       => '89'
			],
			[
				'id'         => 1204,
				'country_id' => 74,
				'name'       => 'Territoire de Belfort',
				'code'       => '90'
			],
			[
				'id'         => 1205,
				'country_id' => 74,
				'name'       => 'Essonne',
				'code'       => '91'
			],
			[
				'id'         => 1206,
				'country_id' => 74,
				'name'       => 'Hauts de Seine',
				'code'       => '92'
			],
			[
				'id'         => 1207,
				'country_id' => 74,
				'name'       => 'Seine St-Denis',
				'code'       => '93'
			],
			[
				'id'         => 1208,
				'country_id' => 74,
				'name'       => 'Val de Marne',
				'code'       => '94'
			],
			[
				'id'         => 1209,
				'country_id' => 74,
				'name'       => 'Val d\'Oise',
				'code'       => '95'
			],
			[
				'id'         => 1210,
				'country_id' => 76,
				'name'       => 'Archipel des Marquises',
				'code'       => 'M'
			],
			[
				'id'         => 1211,
				'country_id' => 76,
				'name'       => 'Archipel des Tuamotu',
				'code'       => 'T'
			],
			[
				'id'         => 1212,
				'country_id' => 76,
				'name'       => 'Archipel des Tubuai',
				'code'       => 'I'
			],
			[
				'id'         => 1213,
				'country_id' => 76,
				'name'       => 'Iles du Vent',
				'code'       => 'V'
			],
			[
				'id'         => 1214,
				'country_id' => 76,
				'name'       => 'Iles Sous-le-Vent',
				'code'       => 'S'
			],
			[
				'id'         => 1215,
				'country_id' => 77,
				'name'       => 'Iles Crozet',
				'code'       => 'C'
			],
			[
				'id'         => 1216,
				'country_id' => 77,
				'name'       => 'Iles Kerguelen',
				'code'       => 'K'
			],
			[
				'id'         => 1217,
				'country_id' => 77,
				'name'       => 'Ile Amsterdam',
				'code'       => 'A'
			],
			[
				'id'         => 1218,
				'country_id' => 77,
				'name'       => 'Ile Saint-Paul',
				'code'       => 'P'
			],
			[
				'id'         => 1219,
				'country_id' => 77,
				'name'       => 'Adelie Land',
				'code'       => 'D'
			],
			[
				'id'         => 1220,
				'country_id' => 78,
				'name'       => 'Estuaire',
				'code'       => 'ES'
			],
			[
				'id'         => 1221,
				'country_id' => 78,
				'name'       => 'Haut-Ogooue',
				'code'       => 'HO'
			],
			[
				'id'         => 1222,
				'country_id' => 78,
				'name'       => 'Moyen-Ogooue',
				'code'       => 'MO'
			],
			[
				'id'         => 1223,
				'country_id' => 78,
				'name'       => 'Ngounie',
				'code'       => 'NG'
			],
			[
				'id'         => 1224,
				'country_id' => 78,
				'name'       => 'Nyanga',
				'code'       => 'NY'
			],
			[
				'id'         => 1225,
				'country_id' => 78,
				'name'       => 'Ogooue-Ivindo',
				'code'       => 'OI'
			],
			[
				'id'         => 1226,
				'country_id' => 78,
				'name'       => 'Ogooue-Lolo',
				'code'       => 'OL'
			],
			[
				'id'         => 1227,
				'country_id' => 78,
				'name'       => 'Ogooue-Maritime',
				'code'       => 'OM'
			],
			[
				'id'         => 1228,
				'country_id' => 78,
				'name'       => 'Woleu-Ntem',
				'code'       => 'WN'
			],
			[
				'id'         => 1229,
				'country_id' => 79,
				'name'       => 'Banjul',
				'code'       => 'BJ'
			],
			[
				'id'         => 1230,
				'country_id' => 79,
				'name'       => 'Basse',
				'code'       => 'BS'
			],
			[
				'id'         => 1231,
				'country_id' => 79,
				'name'       => 'Brikama',
				'code'       => 'BR'
			],
			[
				'id'         => 1232,
				'country_id' => 79,
				'name'       => 'Janjangbure',
				'code'       => 'JA'
			],
			[
				'id'         => 1233,
				'country_id' => 79,
				'name'       => 'Kanifeng',
				'code'       => 'KA'
			],
			[
				'id'         => 1234,
				'country_id' => 79,
				'name'       => 'Kerewan',
				'code'       => 'KE'
			],
			[
				'id'         => 1235,
				'country_id' => 79,
				'name'       => 'Kuntaur',
				'code'       => 'KU'
			],
			[
				'id'         => 1236,
				'country_id' => 79,
				'name'       => 'Mansakonko',
				'code'       => 'MA'
			],
			[
				'id'         => 1237,
				'country_id' => 79,
				'name'       => 'Lower River',
				'code'       => 'LR'
			],
			[
				'id'         => 1238,
				'country_id' => 79,
				'name'       => 'Central River',
				'code'       => 'CR'
			],
			[
				'id'         => 1239,
				'country_id' => 79,
				'name'       => 'North Bank',
				'code'       => 'NB'
			],
			[
				'id'         => 1240,
				'country_id' => 79,
				'name'       => 'Upper River',
				'code'       => 'UR'
			],
			[
				'id'         => 1241,
				'country_id' => 79,
				'name'       => 'Western',
				'code'       => 'WE'
			],
			[
				'id'         => 1242,
				'country_id' => 80,
				'name'       => 'Abkhazia',
				'code'       => 'AB'
			],
			[
				'id'         => 1243,
				'country_id' => 80,
				'name'       => 'Ajaria',
				'code'       => 'AJ'
			],
			[
				'id'         => 1244,
				'country_id' => 80,
				'name'       => 'Tbilisi',
				'code'       => 'TB'
			],
			[
				'id'         => 1245,
				'country_id' => 80,
				'name'       => 'Guria',
				'code'       => 'GU'
			],
			[
				'id'         => 1246,
				'country_id' => 80,
				'name'       => 'Imereti',
				'code'       => 'IM'
			],
			[
				'id'         => 1247,
				'country_id' => 80,
				'name'       => 'Kakheti',
				'code'       => 'KA'
			],
			[
				'id'         => 1248,
				'country_id' => 80,
				'name'       => 'Kvemo Kartli',
				'code'       => 'KK'
			],
			[
				'id'         => 1249,
				'country_id' => 80,
				'name'       => 'Mtskheta-Mtianeti',
				'code'       => 'MM'
			],
			[
				'id'         => 1250,
				'country_id' => 80,
				'name'       => 'Racha Lechkhumi and Kvemo Svanet',
				'code'       => 'RL'
			],
			[
				'id'         => 1251,
				'country_id' => 80,
				'name'       => 'Samegrelo-Zemo Svaneti',
				'code'       => 'SZ'
			],
			[
				'id'         => 1252,
				'country_id' => 80,
				'name'       => 'Samtskhe-Javakheti',
				'code'       => 'SJ'
			],
			[
				'id'         => 1253,
				'country_id' => 80,
				'name'       => 'Shida Kartli',
				'code'       => 'SK'
			],
			[
				'id'         => 1254,
				'country_id' => 81,
				'name'       => 'Baden-Württemberg',
				'code'       => 'BAW'
			],
			[
				'id'         => 1255,
				'country_id' => 81,
				'name'       => 'Bayern',
				'code'       => 'BAY'
			],
			[
				'id'         => 1256,
				'country_id' => 81,
				'name'       => 'Berlin',
				'code'       => 'BER'
			],
			[
				'id'         => 1257,
				'country_id' => 81,
				'name'       => 'Brandenburg',
				'code'       => 'BRG'
			],
			[
				'id'         => 1258,
				'country_id' => 81,
				'name'       => 'Bremen',
				'code'       => 'BRE'
			],
			[
				'id'         => 1259,
				'country_id' => 81,
				'name'       => 'Hamburg',
				'code'       => 'HAM'
			],
			[
				'id'         => 1260,
				'country_id' => 81,
				'name'       => 'Hessen',
				'code'       => 'HES'
			],
			[
				'id'         => 1261,
				'country_id' => 81,
				'name'       => 'Mecklenburg-Vorpommern',
				'code'       => 'MEC'
			],
			[
				'id'         => 1262,
				'country_id' => 81,
				'name'       => 'Niedersachsen',
				'code'       => 'NDS'
			],
			[
				'id'         => 1263,
				'country_id' => 81,
				'name'       => 'Nordrhein-Westfalen',
				'code'       => 'NRW'
			],
			[
				'id'         => 1264,
				'country_id' => 81,
				'name'       => 'Rheinland-Pfalz',
				'code'       => 'RHE'
			],
			[
				'id'         => 1265,
				'country_id' => 81,
				'name'       => 'Saarland',
				'code'       => 'SAR'
			],
			[
				'id'         => 1266,
				'country_id' => 81,
				'name'       => 'Sachsen',
				'code'       => 'SAS'
			],
			[
				'id'         => 1267,
				'country_id' => 81,
				'name'       => 'Sachsen-Anhalt',
				'code'       => 'SAC'
			],
			[
				'id'         => 1268,
				'country_id' => 81,
				'name'       => 'Schleswig-Holstein',
				'code'       => 'SCN'
			],
			[
				'id'         => 1269,
				'country_id' => 81,
				'name'       => 'Thüringen',
				'code'       => 'THE'
			],
			[
				'id'         => 1270,
				'country_id' => 82,
				'name'       => 'Ashanti Region',
				'code'       => 'AS'
			],
			[
				'id'         => 1271,
				'country_id' => 82,
				'name'       => 'Brong-Ahafo Region',
				'code'       => 'BA'
			],
			[
				'id'         => 1272,
				'country_id' => 82,
				'name'       => 'Central Region',
				'code'       => 'CE'
			],
			[
				'id'         => 1273,
				'country_id' => 82,
				'name'       => 'Eastern Region',
				'code'       => 'EA'
			],
			[
				'id'         => 1274,
				'country_id' => 82,
				'name'       => 'Greater Accra Region',
				'code'       => 'GA'
			],
			[
				'id'         => 1275,
				'country_id' => 82,
				'name'       => 'Northern Region',
				'code'       => 'NO'
			],
			[
				'id'         => 1276,
				'country_id' => 82,
				'name'       => 'Upper East Region',
				'code'       => 'UE'
			],
			[
				'id'         => 1277,
				'country_id' => 82,
				'name'       => 'Upper West Region',
				'code'       => 'UW'
			],
			[
				'id'         => 1278,
				'country_id' => 82,
				'name'       => 'Volta Region',
				'code'       => 'VO'
			],
			[
				'id'         => 1279,
				'country_id' => 82,
				'name'       => 'Western Region',
				'code'       => 'WE'
			],
			[
				'id'         => 1280,
				'country_id' => 84,
				'name'       => 'Attica',
				'code'       => 'AT'
			],
			[
				'id'         => 1281,
				'country_id' => 84,
				'name'       => 'Central Greece',
				'code'       => 'CN'
			],
			[
				'id'         => 1282,
				'country_id' => 84,
				'name'       => 'Central Macedonia',
				'code'       => 'CM'
			],
			[
				'id'         => 1283,
				'country_id' => 84,
				'name'       => 'Crete',
				'code'       => 'CR'
			],
			[
				'id'         => 1284,
				'country_id' => 84,
				'name'       => 'East Macedonia and Thrace',
				'code'       => 'EM'
			],
			[
				'id'         => 1285,
				'country_id' => 84,
				'name'       => 'Epirus',
				'code'       => 'EP'
			],
			[
				'id'         => 1286,
				'country_id' => 84,
				'name'       => 'Ionian Islands',
				'code'       => 'II'
			],
			[
				'id'         => 1287,
				'country_id' => 84,
				'name'       => 'North Aegean',
				'code'       => 'NA'
			],
			[
				'id'         => 1288,
				'country_id' => 84,
				'name'       => 'Peloponnesos',
				'code'       => 'PP'
			],
			[
				'id'         => 1289,
				'country_id' => 84,
				'name'       => 'South Aegean',
				'code'       => 'SA'
			],
			[
				'id'         => 1290,
				'country_id' => 84,
				'name'       => 'Thessaly',
				'code'       => 'TH'
			],
			[
				'id'         => 1291,
				'country_id' => 84,
				'name'       => 'West Greece',
				'code'       => 'WG'
			],
			[
				'id'         => 1292,
				'country_id' => 84,
				'name'       => 'West Macedonia',
				'code'       => 'WM'
			],
			[
				'id'         => 1293,
				'country_id' => 85,
				'name'       => 'Avannaa',
				'code'       => 'A'
			],
			[
				'id'         => 1294,
				'country_id' => 85,
				'name'       => 'Tunu',
				'code'       => 'T'
			],
			[
				'id'         => 1295,
				'country_id' => 85,
				'name'       => 'Kitaa',
				'code'       => 'K'
			],
			[
				'id'         => 1296,
				'country_id' => 86,
				'name'       => 'Saint Andrew',
				'code'       => 'A'
			],
			[
				'id'         => 1297,
				'country_id' => 86,
				'name'       => 'Saint David',
				'code'       => 'D'
			],
			[
				'id'         => 1298,
				'country_id' => 86,
				'name'       => 'Saint George',
				'code'       => 'G'
			],
			[
				'id'         => 1299,
				'country_id' => 86,
				'name'       => 'Saint John',
				'code'       => 'J'
			],
			[
				'id'         => 1300,
				'country_id' => 86,
				'name'       => 'Saint Mark',
				'code'       => 'M'
			],
			[
				'id'         => 1301,
				'country_id' => 86,
				'name'       => 'Saint Patrick',
				'code'       => 'P'
			],
			[
				'id'         => 1302,
				'country_id' => 86,
				'name'       => 'Carriacou',
				'code'       => 'C'
			],
			[
				'id'         => 1303,
				'country_id' => 86,
				'name'       => 'Petit Martinique',
				'code'       => 'Q'
			],
			[
				'id'         => 1304,
				'country_id' => 89,
				'name'       => 'Alta Verapaz',
				'code'       => 'AV'
			],
			[
				'id'         => 1305,
				'country_id' => 89,
				'name'       => 'Baja Verapaz',
				'code'       => 'BV'
			],
			[
				'id'         => 1306,
				'country_id' => 89,
				'name'       => 'Chimaltenango',
				'code'       => 'CM'
			],
			[
				'id'         => 1307,
				'country_id' => 89,
				'name'       => 'Chiquimula',
				'code'       => 'CQ'
			],
			[
				'id'         => 1308,
				'country_id' => 89,
				'name'       => 'El Peten',
				'code'       => 'PE'
			],
			[
				'id'         => 1309,
				'country_id' => 89,
				'name'       => 'El Progreso',
				'code'       => 'PR'
			],
			[
				'id'         => 1310,
				'country_id' => 89,
				'name'       => 'El Quiche',
				'code'       => 'QC'
			],
			[
				'id'         => 1311,
				'country_id' => 89,
				'name'       => 'Escuintla',
				'code'       => 'ES'
			],
			[
				'id'         => 1312,
				'country_id' => 89,
				'name'       => 'Guatemala',
				'code'       => 'GU'
			],
			[
				'id'         => 1313,
				'country_id' => 89,
				'name'       => 'Huehuetenango',
				'code'       => 'HU'
			],
			[
				'id'         => 1314,
				'country_id' => 89,
				'name'       => 'Izabal',
				'code'       => 'IZ'
			],
			[
				'id'         => 1315,
				'country_id' => 89,
				'name'       => 'Jalapa',
				'code'       => 'JA'
			],
			[
				'id'         => 1316,
				'country_id' => 89,
				'name'       => 'Jutiapa',
				'code'       => 'JU'
			],
			[
				'id'         => 1317,
				'country_id' => 89,
				'name'       => 'Quetzaltenango',
				'code'       => 'QZ'
			],
			[
				'id'         => 1318,
				'country_id' => 89,
				'name'       => 'Retalhuleu',
				'code'       => 'RE'
			],
			[
				'id'         => 1319,
				'country_id' => 89,
				'name'       => 'Sacatepequez',
				'code'       => 'ST'
			],
			[
				'id'         => 1320,
				'country_id' => 89,
				'name'       => 'San Marcos',
				'code'       => 'SM'
			],
			[
				'id'         => 1321,
				'country_id' => 89,
				'name'       => 'Santa Rosa',
				'code'       => 'SR'
			],
			[
				'id'         => 1322,
				'country_id' => 89,
				'name'       => 'Solola',
				'code'       => 'SO'
			],
			[
				'id'         => 1323,
				'country_id' => 89,
				'name'       => 'Suchitepequez',
				'code'       => 'SU'
			],
			[
				'id'         => 1324,
				'country_id' => 89,
				'name'       => 'Totonicapan',
				'code'       => 'TO'
			],
			[
				'id'         => 1325,
				'country_id' => 89,
				'name'       => 'Zacapa',
				'code'       => 'ZA'
			],
			[
				'id'         => 1326,
				'country_id' => 90,
				'name'       => 'Conakry',
				'code'       => 'CNK'
			],
			[
				'id'         => 1327,
				'country_id' => 90,
				'name'       => 'Beyla',
				'code'       => 'BYL'
			],
			[
				'id'         => 1328,
				'country_id' => 90,
				'name'       => 'Boffa',
				'code'       => 'BFA'
			],
			[
				'id'         => 1329,
				'country_id' => 90,
				'name'       => 'Boke',
				'code'       => 'BOK'
			],
			[
				'id'         => 1330,
				'country_id' => 90,
				'name'       => 'Coyah',
				'code'       => 'COY'
			],
			[
				'id'         => 1331,
				'country_id' => 90,
				'name'       => 'Dabola',
				'code'       => 'DBL'
			],
			[
				'id'         => 1332,
				'country_id' => 90,
				'name'       => 'Dalaba',
				'code'       => 'DLB'
			],
			[
				'id'         => 1333,
				'country_id' => 90,
				'name'       => 'Dinguiraye',
				'code'       => 'DGR'
			],
			[
				'id'         => 1334,
				'country_id' => 90,
				'name'       => 'Dubreka',
				'code'       => 'DBR'
			],
			[
				'id'         => 1335,
				'country_id' => 90,
				'name'       => 'Faranah',
				'code'       => 'FRN'
			],
			[
				'id'         => 1336,
				'country_id' => 90,
				'name'       => 'Forecariah',
				'code'       => 'FRC'
			],
			[
				'id'         => 1337,
				'country_id' => 90,
				'name'       => 'Fria',
				'code'       => 'FRI'
			],
			[
				'id'         => 1338,
				'country_id' => 90,
				'name'       => 'Gaoual',
				'code'       => 'GAO'
			],
			[
				'id'         => 1339,
				'country_id' => 90,
				'name'       => 'Gueckedou',
				'code'       => 'GCD'
			],
			[
				'id'         => 1340,
				'country_id' => 90,
				'name'       => 'Kankan',
				'code'       => 'KNK'
			],
			[
				'id'         => 1341,
				'country_id' => 90,
				'name'       => 'Kerouane',
				'code'       => 'KRN'
			],
			[
				'id'         => 1342,
				'country_id' => 90,
				'name'       => 'Kindia',
				'code'       => 'KND'
			],
			[
				'id'         => 1343,
				'country_id' => 90,
				'name'       => 'Kissidougou',
				'code'       => 'KSD'
			],
			[
				'id'         => 1344,
				'country_id' => 90,
				'name'       => 'Koubia',
				'code'       => 'KBA'
			],
			[
				'id'         => 1345,
				'country_id' => 90,
				'name'       => 'Koundara',
				'code'       => 'KDA'
			],
			[
				'id'         => 1346,
				'country_id' => 90,
				'name'       => 'Kouroussa',
				'code'       => 'KRA'
			],
			[
				'id'         => 1347,
				'country_id' => 90,
				'name'       => 'Labe',
				'code'       => 'LAB'
			],
			[
				'id'         => 1348,
				'country_id' => 90,
				'name'       => 'Lelouma',
				'code'       => 'LLM'
			],
			[
				'id'         => 1349,
				'country_id' => 90,
				'name'       => 'Lola',
				'code'       => 'LOL'
			],
			[
				'id'         => 1350,
				'country_id' => 90,
				'name'       => 'Macenta',
				'code'       => 'MCT'
			],
			[
				'id'         => 1351,
				'country_id' => 90,
				'name'       => 'Mali',
				'code'       => 'MAL'
			],
			[
				'id'         => 1352,
				'country_id' => 90,
				'name'       => 'Mamou',
				'code'       => 'MAM'
			],
			[
				'id'         => 1353,
				'country_id' => 90,
				'name'       => 'Mandiana',
				'code'       => 'MAN'
			],
			[
				'id'         => 1354,
				'country_id' => 90,
				'name'       => 'Nzerekore',
				'code'       => 'NZR'
			],
			[
				'id'         => 1355,
				'country_id' => 90,
				'name'       => 'Pita',
				'code'       => 'PIT'
			],
			[
				'id'         => 1356,
				'country_id' => 90,
				'name'       => 'Siguiri',
				'code'       => 'SIG'
			],
			[
				'id'         => 1357,
				'country_id' => 90,
				'name'       => 'Telimele',
				'code'       => 'TLM'
			],
			[
				'id'         => 1358,
				'country_id' => 90,
				'name'       => 'Tougue',
				'code'       => 'TOG'
			],
			[
				'id'         => 1359,
				'country_id' => 90,
				'name'       => 'Yomou',
				'code'       => 'YOM'
			],
			[
				'id'         => 1360,
				'country_id' => 91,
				'name'       => 'Bafata Region',
				'code'       => 'BF'
			],
			[
				'id'         => 1361,
				'country_id' => 91,
				'name'       => 'Biombo Region',
				'code'       => 'BB'
			],
			[
				'id'         => 1362,
				'country_id' => 91,
				'name'       => 'Bissau Region',
				'code'       => 'BS'
			],
			[
				'id'         => 1363,
				'country_id' => 91,
				'name'       => 'Bolama Region',
				'code'       => 'BL'
			],
			[
				'id'         => 1364,
				'country_id' => 91,
				'name'       => 'Cacheu Region',
				'code'       => 'CA'
			],
			[
				'id'         => 1365,
				'country_id' => 91,
				'name'       => 'Gabu Region',
				'code'       => 'GA'
			],
			[
				'id'         => 1366,
				'country_id' => 91,
				'name'       => 'Oio Region',
				'code'       => 'OI'
			],
			[
				'id'         => 1367,
				'country_id' => 91,
				'name'       => 'Quinara Region',
				'code'       => 'QU'
			],
			[
				'id'         => 1368,
				'country_id' => 91,
				'name'       => 'Tombali Region',
				'code'       => 'TO'
			],
			[
				'id'         => 1369,
				'country_id' => 92,
				'name'       => 'Barima-Waini',
				'code'       => 'BW'
			],
			[
				'id'         => 1370,
				'country_id' => 92,
				'name'       => 'Cuyuni-Mazaruni',
				'code'       => 'CM'
			],
			[
				'id'         => 1371,
				'country_id' => 92,
				'name'       => 'Demerara-Mahaica',
				'code'       => 'DM'
			],
			[
				'id'         => 1372,
				'country_id' => 92,
				'name'       => 'East Berbice-Corentyne',
				'code'       => 'EC'
			],
			[
				'id'         => 1373,
				'country_id' => 92,
				'name'       => 'Essequibo Islands-West Demerara',
				'code'       => 'EW'
			],
			[
				'id'         => 1374,
				'country_id' => 92,
				'name'       => 'Mahaica-Berbice',
				'code'       => 'MB'
			],
			[
				'id'         => 1375,
				'country_id' => 92,
				'name'       => 'Pomeroon-Supenaam',
				'code'       => 'PM'
			],
			[
				'id'         => 1376,
				'country_id' => 92,
				'name'       => 'Potaro-Siparuni',
				'code'       => 'PI'
			],
			[
				'id'         => 1377,
				'country_id' => 92,
				'name'       => 'Upper Demerara-Berbice',
				'code'       => 'UD'
			],
			[
				'id'         => 1378,
				'country_id' => 92,
				'name'       => 'Upper Takutu-Upper Essequibo',
				'code'       => 'UT'
			],
			[
				'id'         => 1379,
				'country_id' => 93,
				'name'       => 'Artibonite',
				'code'       => 'AR'
			],
			[
				'id'         => 1380,
				'country_id' => 93,
				'name'       => 'Centre',
				'code'       => 'CE'
			],
			[
				'id'         => 1381,
				'country_id' => 93,
				'name'       => 'Grand\'Anse',
				'code'       => 'GA'
			],
			[
				'id'         => 1382,
				'country_id' => 93,
				'name'       => 'Nord',
				'code'       => 'ND'
			],
			[
				'id'         => 1383,
				'country_id' => 93,
				'name'       => 'Nord-Est',
				'code'       => 'NE'
			],
			[
				'id'         => 1384,
				'country_id' => 93,
				'name'       => 'Nord-Ouest',
				'code'       => 'NO'
			],
			[
				'id'         => 1385,
				'country_id' => 93,
				'name'       => 'Ouest',
				'code'       => 'OU'
			],
			[
				'id'         => 1386,
				'country_id' => 93,
				'name'       => 'Sud',
				'code'       => 'SD'
			],
			[
				'id'         => 1387,
				'country_id' => 93,
				'name'       => 'Sud-Est',
				'code'       => 'SE'
			],
			[
				'id'         => 1388,
				'country_id' => 94,
				'name'       => 'Flat Island',
				'code'       => 'F'
			],
			[
				'id'         => 1389,
				'country_id' => 94,
				'name'       => 'McDonald Island',
				'code'       => 'M'
			],
			[
				'id'         => 1390,
				'country_id' => 94,
				'name'       => 'Shag Island',
				'code'       => 'S'
			],
			[
				'id'         => 1391,
				'country_id' => 94,
				'name'       => 'Heard Island',
				'code'       => 'H'
			],
			[
				'id'         => 1392,
				'country_id' => 95,
				'name'       => 'Atlantida',
				'code'       => 'AT'
			],
			[
				'id'         => 1393,
				'country_id' => 95,
				'name'       => 'Choluteca',
				'code'       => 'CH'
			],
			[
				'id'         => 1394,
				'country_id' => 95,
				'name'       => 'Colon',
				'code'       => 'CL'
			],
			[
				'id'         => 1395,
				'country_id' => 95,
				'name'       => 'Comayagua',
				'code'       => 'CM'
			],
			[
				'id'         => 1396,
				'country_id' => 95,
				'name'       => 'Copan',
				'code'       => 'CP'
			],
			[
				'id'         => 1397,
				'country_id' => 95,
				'name'       => 'Cortes',
				'code'       => 'CR'
			],
			[
				'id'         => 1398,
				'country_id' => 95,
				'name'       => 'El Paraiso',
				'code'       => 'PA'
			],
			[
				'id'         => 1399,
				'country_id' => 95,
				'name'       => 'Francisco Morazan',
				'code'       => 'FM'
			],
			[
				'id'         => 1400,
				'country_id' => 95,
				'name'       => 'Gracias a Dios',
				'code'       => 'GD'
			],
			[
				'id'         => 1401,
				'country_id' => 95,
				'name'       => 'Intibuca',
				'code'       => 'IN'
			],
			[
				'id'         => 1402,
				'country_id' => 95,
				'name'       => 'Islas de la Bahia (Bay Islands)',
				'code'       => 'IB'
			],
			[
				'id'         => 1403,
				'country_id' => 95,
				'name'       => 'La Paz',
				'code'       => 'PZ'
			],
			[
				'id'         => 1404,
				'country_id' => 95,
				'name'       => 'Lempira',
				'code'       => 'LE'
			],
			[
				'id'         => 1405,
				'country_id' => 95,
				'name'       => 'Ocotepeque',
				'code'       => 'OC'
			],
			[
				'id'         => 1406,
				'country_id' => 95,
				'name'       => 'Olancho',
				'code'       => 'OL'
			],
			[
				'id'         => 1407,
				'country_id' => 95,
				'name'       => 'Santa Barbara',
				'code'       => 'SB'
			],
			[
				'id'         => 1408,
				'country_id' => 95,
				'name'       => 'Valle',
				'code'       => 'VA'
			],
			[
				'id'         => 1409,
				'country_id' => 95,
				'name'       => 'Yoro',
				'code'       => 'YO'
			],
			[
				'id'         => 1410,
				'country_id' => 96,
				'name'       => 'Central and Western Hong Kong Island',
				'code'       => 'HCW'
			],
			[
				'id'         => 1411,
				'country_id' => 96,
				'name'       => 'Eastern Hong Kong Island',
				'code'       => 'HEA'
			],
			[
				'id'         => 1412,
				'country_id' => 96,
				'name'       => 'Southern Hong Kong Island',
				'code'       => 'HSO'
			],
			[
				'id'         => 1413,
				'country_id' => 96,
				'name'       => 'Wan Chai Hong Kong Island',
				'code'       => 'HWC'
			],
			[
				'id'         => 1414,
				'country_id' => 96,
				'name'       => 'Kowloon City Kowloon',
				'code'       => 'KKC'
			],
			[
				'id'         => 1415,
				'country_id' => 96,
				'name'       => 'Kwun Tong Kowloon',
				'code'       => 'KKT'
			],
			[
				'id'         => 1416,
				'country_id' => 96,
				'name'       => 'Sham Shui Po Kowloon',
				'code'       => 'KSS'
			],
			[
				'id'         => 1417,
				'country_id' => 96,
				'name'       => 'Wong Tai Sin Kowloon',
				'code'       => 'KWT'
			],
			[
				'id'         => 1418,
				'country_id' => 96,
				'name'       => 'Yau Tsim Mong Kowloon',
				'code'       => 'KYT'
			],
			[
				'id'         => 1419,
				'country_id' => 96,
				'name'       => 'Islands New Territories',
				'code'       => 'NIS'
			],
			[
				'id'         => 1420,
				'country_id' => 96,
				'name'       => 'Kwai Tsing New Territories',
				'code'       => 'NKT'
			],
			[
				'id'         => 1421,
				'country_id' => 96,
				'name'       => 'North New Territories',
				'code'       => 'NNO'
			],
			[
				'id'         => 1422,
				'country_id' => 96,
				'name'       => 'Sai Kung New Territories',
				'code'       => 'NSK'
			],
			[
				'id'         => 1423,
				'country_id' => 96,
				'name'       => 'Sha Tin New Territories',
				'code'       => 'NST'
			],
			[
				'id'         => 1424,
				'country_id' => 96,
				'name'       => 'Tai Po New Territories',
				'code'       => 'NTP'
			],
			[
				'id'         => 1425,
				'country_id' => 96,
				'name'       => 'Tsuen Wan New Territories',
				'code'       => 'NTW'
			],
			[
				'id'         => 1426,
				'country_id' => 96,
				'name'       => 'Tuen Mun New Territories',
				'code'       => 'NTM'
			],
			[
				'id'         => 1427,
				'country_id' => 96,
				'name'       => 'Yuen Long New Territories',
				'code'       => 'NYL'
			],
			[
				'id'         => 1467,
				'country_id' => 98,
				'name'       => 'Austurland',
				'code'       => 'AL'
			],
			[
				'id'         => 1468,
				'country_id' => 98,
				'name'       => 'Hofuoborgarsvaeoi',
				'code'       => 'HF'
			],
			[
				'id'         => 1469,
				'country_id' => 98,
				'name'       => 'Norourland eystra',
				'code'       => 'NE'
			],
			[
				'id'         => 1470,
				'country_id' => 98,
				'name'       => 'Norourland vestra',
				'code'       => 'NV'
			],
			[
				'id'         => 1471,
				'country_id' => 98,
				'name'       => 'Suourland',
				'code'       => 'SL'
			],
			[
				'id'         => 1472,
				'country_id' => 98,
				'name'       => 'Suournes',
				'code'       => 'SN'
			],
			[
				'id'         => 1473,
				'country_id' => 98,
				'name'       => 'Vestfiroir',
				'code'       => 'VF'
			],
			[
				'id'         => 1474,
				'country_id' => 98,
				'name'       => 'Vesturland',
				'code'       => 'VL'
			],
			[
				'id'         => 1475,
				'country_id' => 99,
				'name'       => 'Andaman and Nicobar Islands',
				'code'       => 'AN'
			],
			[
				'id'         => 1476,
				'country_id' => 99,
				'name'       => 'Andhra Pradesh',
				'code'       => 'AP'
			],
			[
				'id'         => 1477,
				'country_id' => 99,
				'name'       => 'Arunachal Pradesh',
				'code'       => 'AR'
			],
			[
				'id'         => 1478,
				'country_id' => 99,
				'name'       => 'Assam',
				'code'       => 'AS'
			],
			[
				'id'         => 1479,
				'country_id' => 99,
				'name'       => 'Bihar',
				'code'       => 'BI'
			],
			[
				'id'         => 1480,
				'country_id' => 99,
				'name'       => 'Chandigarh',
				'code'       => 'CH'
			],
			[
				'id'         => 1481,
				'country_id' => 99,
				'name'       => 'Dadra and Nagar Haveli',
				'code'       => 'DA'
			],
			[
				'id'         => 1482,
				'country_id' => 99,
				'name'       => 'Daman and Diu',
				'code'       => 'DM'
			],
			[
				'id'         => 1483,
				'country_id' => 99,
				'name'       => 'Delhi',
				'code'       => 'DE'
			],
			[
				'id'         => 1484,
				'country_id' => 99,
				'name'       => 'Goa',
				'code'       => 'GO'
			],
			[
				'id'         => 1485,
				'country_id' => 99,
				'name'       => 'Gujarat',
				'code'       => 'GU'
			],
			[
				'id'         => 1486,
				'country_id' => 99,
				'name'       => 'Haryana',
				'code'       => 'HA'
			],
			[
				'id'         => 1487,
				'country_id' => 99,
				'name'       => 'Himachal Pradesh',
				'code'       => 'HP'
			],
			[
				'id'         => 1488,
				'country_id' => 99,
				'name'       => 'Jammu and Kashmir',
				'code'       => 'JA'
			],
			[
				'id'         => 1489,
				'country_id' => 99,
				'name'       => 'Karnataka',
				'code'       => 'KA'
			],
			[
				'id'         => 1490,
				'country_id' => 99,
				'name'       => 'Kerala',
				'code'       => 'KE'
			],
			[
				'id'         => 1491,
				'country_id' => 99,
				'name'       => 'Lakshadweep Islands',
				'code'       => 'LI'
			],
			[
				'id'         => 1492,
				'country_id' => 99,
				'name'       => 'Madhya Pradesh',
				'code'       => 'MP'
			],
			[
				'id'         => 1493,
				'country_id' => 99,
				'name'       => 'Maharashtra',
				'code'       => 'MA'
			],
			[
				'id'         => 1494,
				'country_id' => 99,
				'name'       => 'Manipur',
				'code'       => 'MN'
			],
			[
				'id'         => 1495,
				'country_id' => 99,
				'name'       => 'Meghalaya',
				'code'       => 'ME'
			],
			[
				'id'         => 1496,
				'country_id' => 99,
				'name'       => 'Mizoram',
				'code'       => 'MI'
			],
			[
				'id'         => 1497,
				'country_id' => 99,
				'name'       => 'Nagaland',
				'code'       => 'NA'
			],
			[
				'id'         => 1498,
				'country_id' => 99,
				'name'       => 'Orissa',
				'code'       => 'OR'
			],
			[
				'id'         => 1499,
				'country_id' => 99,
				'name'       => 'Pondicherry',
				'code'       => 'PO'
			],
			[
				'id'         => 1500,
				'country_id' => 99,
				'name'       => 'Punjab',
				'code'       => 'PU'
			],
			[
				'id'         => 1501,
				'country_id' => 99,
				'name'       => 'Rajasthan',
				'code'       => 'RA'
			],
			[
				'id'         => 1502,
				'country_id' => 99,
				'name'       => 'Sikkim',
				'code'       => 'SI'
			],
			[
				'id'         => 1503,
				'country_id' => 99,
				'name'       => 'Tamil Nadu',
				'code'       => 'TN'
			],
			[
				'id'         => 1504,
				'country_id' => 99,
				'name'       => 'Tripura',
				'code'       => 'TR'
			],
			[
				'id'         => 1505,
				'country_id' => 99,
				'name'       => 'Uttar Pradesh',
				'code'       => 'UP'
			],
			[
				'id'         => 1506,
				'country_id' => 99,
				'name'       => 'West Bengal',
				'code'       => 'WB'
			],
			[
				'id'         => 1507,
				'country_id' => 100,
				'name'       => 'Aceh',
				'code'       => 'AC'
			],
			[
				'id'         => 1508,
				'country_id' => 100,
				'name'       => 'Bali',
				'code'       => 'BA'
			],
			[
				'id'         => 1509,
				'country_id' => 100,
				'name'       => 'Banten',
				'code'       => 'BT'
			],
			[
				'id'         => 1510,
				'country_id' => 100,
				'name'       => 'Bengkulu',
				'code'       => 'BE'
			],
			[
				'id'         => 1511,
				'country_id' => 100,
				'name'       => 'BoDeTaBek',
				'code'       => 'BD'
			],
			[
				'id'         => 1512,
				'country_id' => 100,
				'name'       => 'Gorontalo',
				'code'       => 'GO'
			],
			[
				'id'         => 1513,
				'country_id' => 100,
				'name'       => 'Jakarta Raya',
				'code'       => 'JK'
			],
			[
				'id'         => 1514,
				'country_id' => 100,
				'name'       => 'Jambi',
				'code'       => 'JA'
			],
			[
				'id'         => 1515,
				'country_id' => 100,
				'name'       => 'Jawa Barat',
				'code'       => 'JB'
			],
			[
				'id'         => 1516,
				'country_id' => 100,
				'name'       => 'Jawa Tengah',
				'code'       => 'JT'
			],
			[
				'id'         => 1517,
				'country_id' => 100,
				'name'       => 'Jawa Timur',
				'code'       => 'JI'
			],
			[
				'id'         => 1518,
				'country_id' => 100,
				'name'       => 'Kalimantan Barat',
				'code'       => 'KB'
			],
			[
				'id'         => 1519,
				'country_id' => 100,
				'name'       => 'Kalimantan Selatan',
				'code'       => 'KS'
			],
			[
				'id'         => 1520,
				'country_id' => 100,
				'name'       => 'Kalimantan Tengah',
				'code'       => 'KT'
			],
			[
				'id'         => 1521,
				'country_id' => 100,
				'name'       => 'Kalimantan Timur',
				'code'       => 'KI'
			],
			[
				'id'         => 1522,
				'country_id' => 100,
				'name'       => 'Kepulauan Bangka Belitung',
				'code'       => 'BB'
			],
			[
				'id'         => 1523,
				'country_id' => 100,
				'name'       => 'Lampung',
				'code'       => 'LA'
			],
			[
				'id'         => 1524,
				'country_id' => 100,
				'name'       => 'Maluku',
				'code'       => 'MA'
			],
			[
				'id'         => 1525,
				'country_id' => 100,
				'name'       => 'Maluku Utara',
				'code'       => 'MU'
			],
			[
				'id'         => 1526,
				'country_id' => 100,
				'name'       => 'Nusa Tenggara Barat',
				'code'       => 'NB'
			],
			[
				'id'         => 1527,
				'country_id' => 100,
				'name'       => 'Nusa Tenggara Timur',
				'code'       => 'NT'
			],
			[
				'id'         => 1528,
				'country_id' => 100,
				'name'       => 'Papua',
				'code'       => 'PA'
			],
			[
				'id'         => 1529,
				'country_id' => 100,
				'name'       => 'Riau',
				'code'       => 'RI'
			],
			[
				'id'         => 1530,
				'country_id' => 100,
				'name'       => 'Sulawesi Selatan',
				'code'       => 'SN'
			],
			[
				'id'         => 1531,
				'country_id' => 100,
				'name'       => 'Sulawesi Tengah',
				'code'       => 'ST'
			],
			[
				'id'         => 1532,
				'country_id' => 100,
				'name'       => 'Sulawesi Tenggara',
				'code'       => 'SG'
			],
			[
				'id'         => 1533,
				'country_id' => 100,
				'name'       => 'Sulawesi Utara',
				'code'       => 'SA'
			],
			[
				'id'         => 1534,
				'country_id' => 100,
				'name'       => 'Sumatera Barat',
				'code'       => 'SB'
			],
			[
				'id'         => 1535,
				'country_id' => 100,
				'name'       => 'Sumatera Selatan',
				'code'       => 'SS'
			],
			[
				'id'         => 1536,
				'country_id' => 100,
				'name'       => 'Sumatera Utara',
				'code'       => 'SU'
			],
			[
				'id'         => 1537,
				'country_id' => 100,
				'name'       => 'Yogyakarta',
				'code'       => 'YO'
			],
			[
				'id'         => 1538,
				'country_id' => 101,
				'name'       => 'Tehran',
				'code'       => 'TEH'
			],
			[
				'id'         => 1539,
				'country_id' => 101,
				'name'       => 'Qom',
				'code'       => 'QOM'
			],
			[
				'id'         => 1540,
				'country_id' => 101,
				'name'       => 'Markazi',
				'code'       => 'MKZ'
			],
			[
				'id'         => 1541,
				'country_id' => 101,
				'name'       => 'Qazvin',
				'code'       => 'QAZ'
			],
			[
				'id'         => 1542,
				'country_id' => 101,
				'name'       => 'Gilan',
				'code'       => 'GIL'
			],
			[
				'id'         => 1543,
				'country_id' => 101,
				'name'       => 'Ardabil',
				'code'       => 'ARD'
			],
			[
				'id'         => 1544,
				'country_id' => 101,
				'name'       => 'Zanjan',
				'code'       => 'ZAN'
			],
			[
				'id'         => 1545,
				'country_id' => 101,
				'name'       => 'East Azarbaijan',
				'code'       => 'EAZ'
			],
			[
				'id'         => 1546,
				'country_id' => 101,
				'name'       => 'West Azarbaijan',
				'code'       => 'WEZ'
			],
			[
				'id'         => 1547,
				'country_id' => 101,
				'name'       => 'Kurdistan',
				'code'       => 'KRD'
			],
			[
				'id'         => 1548,
				'country_id' => 101,
				'name'       => 'Hamadan',
				'code'       => 'HMD'
			],
			[
				'id'         => 1549,
				'country_id' => 101,
				'name'       => 'Kermanshah',
				'code'       => 'KRM'
			],
			[
				'id'         => 1550,
				'country_id' => 101,
				'name'       => 'Ilam',
				'code'       => 'ILM'
			],
			[
				'id'         => 1551,
				'country_id' => 101,
				'name'       => 'Lorestan',
				'code'       => 'LRS'
			],
			[
				'id'         => 1552,
				'country_id' => 101,
				'name'       => 'Khuzestan',
				'code'       => 'KZT'
			],
			[
				'id'         => 1553,
				'country_id' => 101,
				'name'       => 'Chahar Mahaal and Bakhtiari',
				'code'       => 'CMB'
			],
			[
				'id'         => 1554,
				'country_id' => 101,
				'name'       => 'Kohkiluyeh and Buyer Ahmad',
				'code'       => 'KBA'
			],
			[
				'id'         => 1555,
				'country_id' => 101,
				'name'       => 'Bushehr',
				'code'       => 'BSH'
			],
			[
				'id'         => 1556,
				'country_id' => 101,
				'name'       => 'Fars',
				'code'       => 'FAR'
			],
			[
				'id'         => 1557,
				'country_id' => 101,
				'name'       => 'Hormozgan',
				'code'       => 'HRM'
			],
			[
				'id'         => 1558,
				'country_id' => 101,
				'name'       => 'Sistan and Baluchistan',
				'code'       => 'SBL'
			],
			[
				'id'         => 1559,
				'country_id' => 101,
				'name'       => 'Kerman',
				'code'       => 'KRB'
			],
			[
				'id'         => 1560,
				'country_id' => 101,
				'name'       => 'Yazd',
				'code'       => 'YZD'
			],
			[
				'id'         => 1561,
				'country_id' => 101,
				'name'       => 'Esfahan',
				'code'       => 'EFH'
			],
			[
				'id'         => 1562,
				'country_id' => 101,
				'name'       => 'Semnan',
				'code'       => 'SMN'
			],
			[
				'id'         => 1563,
				'country_id' => 101,
				'name'       => 'Mazandaran',
				'code'       => 'MZD'
			],
			[
				'id'         => 1564,
				'country_id' => 101,
				'name'       => 'Golestan',
				'code'       => 'GLS'
			],
			[
				'id'         => 1565,
				'country_id' => 101,
				'name'       => 'North Khorasan',
				'code'       => 'NKH'
			],
			[
				'id'         => 1566,
				'country_id' => 101,
				'name'       => 'Razavi Khorasan',
				'code'       => 'RKH'
			],
			[
				'id'         => 1567,
				'country_id' => 101,
				'name'       => 'South Khorasan',
				'code'       => 'SKH'
			],
			[
				'id'         => 1568,
				'country_id' => 102,
				'name'       => 'Baghdad',
				'code'       => 'BD'
			],
			[
				'id'         => 1569,
				'country_id' => 102,
				'name'       => 'Salah ad Din',
				'code'       => 'SD'
			],
			[
				'id'         => 1570,
				'country_id' => 102,
				'name'       => 'Diyala',
				'code'       => 'DY'
			],
			[
				'id'         => 1571,
				'country_id' => 102,
				'name'       => 'Wasit',
				'code'       => 'WS'
			],
			[
				'id'         => 1572,
				'country_id' => 102,
				'name'       => 'Maysan',
				'code'       => 'MY'
			],
			[
				'id'         => 1573,
				'country_id' => 102,
				'name'       => 'Al Basrah',
				'code'       => 'BA'
			],
			[
				'id'         => 1574,
				'country_id' => 102,
				'name'       => 'Dhi Qar',
				'code'       => 'DQ'
			],
			[
				'id'         => 1575,
				'country_id' => 102,
				'name'       => 'Al Muthanna',
				'code'       => 'MU'
			],
			[
				'id'         => 1576,
				'country_id' => 102,
				'name'       => 'Al Qadisyah',
				'code'       => 'QA'
			],
			[
				'id'         => 1577,
				'country_id' => 102,
				'name'       => 'Babil',
				'code'       => 'BB'
			],
			[
				'id'         => 1578,
				'country_id' => 102,
				'name'       => 'Al Karbala',
				'code'       => 'KB'
			],
			[
				'id'         => 1579,
				'country_id' => 102,
				'name'       => 'An Najaf',
				'code'       => 'NJ'
			],
			[
				'id'         => 1580,
				'country_id' => 102,
				'name'       => 'Al Anbar',
				'code'       => 'AB'
			],
			[
				'id'         => 1581,
				'country_id' => 102,
				'name'       => 'Ninawa',
				'code'       => 'NN'
			],
			[
				'id'         => 1582,
				'country_id' => 102,
				'name'       => 'Dahuk',
				'code'       => 'DH'
			],
			[
				'id'         => 1583,
				'country_id' => 102,
				'name'       => 'Arbil',
				'code'       => 'AL'
			],
			[
				'id'         => 1584,
				'country_id' => 102,
				'name'       => 'At Ta\'mim',
				'code'       => 'TM'
			],
			[
				'id'         => 1585,
				'country_id' => 102,
				'name'       => 'As Sulaymaniyah',
				'code'       => 'SL'
			],
			[
				'id'         => 1586,
				'country_id' => 103,
				'name'       => 'Carlow',
				'code'       => 'CA'
			],
			[
				'id'         => 1587,
				'country_id' => 103,
				'name'       => 'Cavan',
				'code'       => 'CV'
			],
			[
				'id'         => 1588,
				'country_id' => 103,
				'name'       => 'Clare',
				'code'       => 'CL'
			],
			[
				'id'         => 1589,
				'country_id' => 103,
				'name'       => 'Cork',
				'code'       => 'CO'
			],
			[
				'id'         => 1590,
				'country_id' => 103,
				'name'       => 'Donegal',
				'code'       => 'DO'
			],
			[
				'id'         => 1591,
				'country_id' => 103,
				'name'       => 'Dublin',
				'code'       => 'DU'
			],
			[
				'id'         => 1592,
				'country_id' => 103,
				'name'       => 'Galway',
				'code'       => 'GA'
			],
			[
				'id'         => 1593,
				'country_id' => 103,
				'name'       => 'Kerry',
				'code'       => 'KE'
			],
			[
				'id'         => 1594,
				'country_id' => 103,
				'name'       => 'Kildare',
				'code'       => 'KI'
			],
			[
				'id'         => 1595,
				'country_id' => 103,
				'name'       => 'Kilkenny',
				'code'       => 'KL'
			],
			[
				'id'         => 1596,
				'country_id' => 103,
				'name'       => 'Laois',
				'code'       => 'LA'
			],
			[
				'id'         => 1597,
				'country_id' => 103,
				'name'       => 'Leitrim',
				'code'       => 'LE'
			],
			[
				'id'         => 1598,
				'country_id' => 103,
				'name'       => 'Limerick',
				'code'       => 'LI'
			],
			[
				'id'         => 1599,
				'country_id' => 103,
				'name'       => 'Longford',
				'code'       => 'LO'
			],
			[
				'id'         => 1600,
				'country_id' => 103,
				'name'       => 'Louth',
				'code'       => 'LU'
			],
			[
				'id'         => 1601,
				'country_id' => 103,
				'name'       => 'Mayo',
				'code'       => 'MA'
			],
			[
				'id'         => 1602,
				'country_id' => 103,
				'name'       => 'Meath',
				'code'       => 'ME'
			],
			[
				'id'         => 1603,
				'country_id' => 103,
				'name'       => 'Monaghan',
				'code'       => 'MO'
			],
			[
				'id'         => 1604,
				'country_id' => 103,
				'name'       => 'Offaly',
				'code'       => 'OF'
			],
			[
				'id'         => 1605,
				'country_id' => 103,
				'name'       => 'Roscommon',
				'code'       => 'RO'
			],
			[
				'id'         => 1606,
				'country_id' => 103,
				'name'       => 'Sligo',
				'code'       => 'SL'
			],
			[
				'id'         => 1607,
				'country_id' => 103,
				'name'       => 'Tipperary',
				'code'       => 'TI'
			],
			[
				'id'         => 1608,
				'country_id' => 103,
				'name'       => 'Waterford',
				'code'       => 'WA'
			],
			[
				'id'         => 1609,
				'country_id' => 103,
				'name'       => 'Westmeath',
				'code'       => 'WE'
			],
			[
				'id'         => 1610,
				'country_id' => 103,
				'name'       => 'Wexford',
				'code'       => 'WX'
			],
			[
				'id'         => 1611,
				'country_id' => 103,
				'name'       => 'Wicklow',
				'code'       => 'WI'
			],
			[
				'id'         => 1612,
				'country_id' => 104,
				'name'       => 'Be\'er Sheva',
				'code'       => 'BS'
			],
			[
				'id'         => 1613,
				'country_id' => 104,
				'name'       => 'Bika\'at Hayarden',
				'code'       => 'BH'
			],
			[
				'id'         => 1614,
				'country_id' => 104,
				'name'       => 'Eilat and Arava',
				'code'       => 'EA'
			],
			[
				'id'         => 1615,
				'country_id' => 104,
				'name'       => 'Galil',
				'code'       => 'GA'
			],
			[
				'id'         => 1616,
				'country_id' => 104,
				'name'       => 'Haifa',
				'code'       => 'HA'
			],
			[
				'id'         => 1617,
				'country_id' => 104,
				'name'       => 'Jehuda Mountains',
				'code'       => 'JM'
			],
			[
				'id'         => 1618,
				'country_id' => 104,
				'name'       => 'Jerusalem',
				'code'       => 'JE'
			],
			[
				'id'         => 1619,
				'country_id' => 104,
				'name'       => 'Negev',
				'code'       => 'NE'
			],
			[
				'id'         => 1620,
				'country_id' => 104,
				'name'       => 'Semaria',
				'code'       => 'SE'
			],
			[
				'id'         => 1621,
				'country_id' => 104,
				'name'       => 'Sharon',
				'code'       => 'SH'
			],
			[
				'id'         => 1622,
				'country_id' => 104,
				'name'       => 'Tel Aviv (Gosh Dan)',
				'code'       => 'TA'
			],
			[
				'id'         => 3860,
				'country_id' => 105,
				'name'       => 'Caltanissetta',
				'code'       => 'CL'
			],
			[
				'id'         => 3842,
				'country_id' => 105,
				'name'       => 'Agrigento',
				'code'       => 'AG'
			],
			[
				'id'         => 3843,
				'country_id' => 105,
				'name'       => 'Alessandria',
				'code'       => 'AL'
			],
			[
				'id'         => 3844,
				'country_id' => 105,
				'name'       => 'Ancona',
				'code'       => 'AN'
			],
			[
				'id'         => 3845,
				'country_id' => 105,
				'name'       => 'Aosta',
				'code'       => 'AO'
			],
			[
				'id'         => 3846,
				'country_id' => 105,
				'name'       => 'Arezzo',
				'code'       => 'AR'
			],
			[
				'id'         => 3847,
				'country_id' => 105,
				'name'       => 'Ascoli Piceno',
				'code'       => 'AP'
			],
			[
				'id'         => 3848,
				'country_id' => 105,
				'name'       => 'Asti',
				'code'       => 'AT'
			],
			[
				'id'         => 3849,
				'country_id' => 105,
				'name'       => 'Avellino',
				'code'       => 'AV'
			],
			[
				'id'         => 3850,
				'country_id' => 105,
				'name'       => 'Bari',
				'code'       => 'BA'
			],
			[
				'id'         => 3851,
				'country_id' => 105,
				'name'       => 'Belluno',
				'code'       => 'BL'
			],
			[
				'id'         => 3852,
				'country_id' => 105,
				'name'       => 'Benevento',
				'code'       => 'BN'
			],
			[
				'id'         => 3853,
				'country_id' => 105,
				'name'       => 'Bergamo',
				'code'       => 'BG'
			],
			[
				'id'         => 3854,
				'country_id' => 105,
				'name'       => 'Biella',
				'code'       => 'BI'
			],
			[
				'id'         => 3855,
				'country_id' => 105,
				'name'       => 'Bologna',
				'code'       => 'BO'
			],
			[
				'id'         => 3856,
				'country_id' => 105,
				'name'       => 'Bolzano',
				'code'       => 'BZ'
			],
			[
				'id'         => 3857,
				'country_id' => 105,
				'name'       => 'Brescia',
				'code'       => 'BS'
			],
			[
				'id'         => 3858,
				'country_id' => 105,
				'name'       => 'Brindisi',
				'code'       => 'BR'
			],
			[
				'id'         => 3859,
				'country_id' => 105,
				'name'       => 'Cagliari',
				'code'       => 'CA'
			],
			[
				'id'         => 1643,
				'country_id' => 106,
				'name'       => 'Clarendon Parish',
				'code'       => 'CLA'
			],
			[
				'id'         => 1644,
				'country_id' => 106,
				'name'       => 'Hanover Parish',
				'code'       => 'HAN'
			],
			[
				'id'         => 1645,
				'country_id' => 106,
				'name'       => 'Kingston Parish',
				'code'       => 'KIN'
			],
			[
				'id'         => 1646,
				'country_id' => 106,
				'name'       => 'Manchester Parish',
				'code'       => 'MAN'
			],
			[
				'id'         => 1647,
				'country_id' => 106,
				'name'       => 'Portland Parish',
				'code'       => 'POR'
			],
			[
				'id'         => 1648,
				'country_id' => 106,
				'name'       => 'Saint Andrew Parish',
				'code'       => 'AND'
			],
			[
				'id'         => 1649,
				'country_id' => 106,
				'name'       => 'Saint Ann Parish',
				'code'       => 'ANN'
			],
			[
				'id'         => 1650,
				'country_id' => 106,
				'name'       => 'Saint Catherine Parish',
				'code'       => 'CAT'
			],
			[
				'id'         => 1651,
				'country_id' => 106,
				'name'       => 'Saint Elizabeth Parish',
				'code'       => 'ELI'
			],
			[
				'id'         => 1652,
				'country_id' => 106,
				'name'       => 'Saint James Parish',
				'code'       => 'JAM'
			],
			[
				'id'         => 1653,
				'country_id' => 106,
				'name'       => 'Saint Mary Parish',
				'code'       => 'MAR'
			],
			[
				'id'         => 1654,
				'country_id' => 106,
				'name'       => 'Saint Thomas Parish',
				'code'       => 'THO'
			],
			[
				'id'         => 1655,
				'country_id' => 106,
				'name'       => 'Trelawny Parish',
				'code'       => 'TRL'
			],
			[
				'id'         => 1656,
				'country_id' => 106,
				'name'       => 'Westmoreland Parish',
				'code'       => 'WML'
			],
			[
				'id'         => 1657,
				'country_id' => 107,
				'name'       => 'Aichi',
				'code'       => 'AI'
			],
			[
				'id'         => 1658,
				'country_id' => 107,
				'name'       => 'Akita',
				'code'       => 'AK'
			],
			[
				'id'         => 1659,
				'country_id' => 107,
				'name'       => 'Aomori',
				'code'       => 'AO'
			],
			[
				'id'         => 1660,
				'country_id' => 107,
				'name'       => 'Chiba',
				'code'       => 'CH'
			],
			[
				'id'         => 1661,
				'country_id' => 107,
				'name'       => 'Ehime',
				'code'       => 'EH'
			],
			[
				'id'         => 1662,
				'country_id' => 107,
				'name'       => 'Fukui',
				'code'       => 'FK'
			],
			[
				'id'         => 1663,
				'country_id' => 107,
				'name'       => 'Fukuoka',
				'code'       => 'FU'
			],
			[
				'id'         => 1664,
				'country_id' => 107,
				'name'       => 'Fukushima',
				'code'       => 'FS'
			],
			[
				'id'         => 1665,
				'country_id' => 107,
				'name'       => 'Gifu',
				'code'       => 'GI'
			],
			[
				'id'         => 1666,
				'country_id' => 107,
				'name'       => 'Gumma',
				'code'       => 'GU'
			],
			[
				'id'         => 1667,
				'country_id' => 107,
				'name'       => 'Hiroshima',
				'code'       => 'HI'
			],
			[
				'id'         => 1668,
				'country_id' => 107,
				'name'       => 'Hokkaido',
				'code'       => 'HO'
			],
			[
				'id'         => 1669,
				'country_id' => 107,
				'name'       => 'Hyogo',
				'code'       => 'HY'
			],
			[
				'id'         => 1670,
				'country_id' => 107,
				'name'       => 'Ibaraki',
				'code'       => 'IB'
			],
			[
				'id'         => 1671,
				'country_id' => 107,
				'name'       => 'Ishikawa',
				'code'       => 'IS'
			],
			[
				'id'         => 1672,
				'country_id' => 107,
				'name'       => 'Iwate',
				'code'       => 'IW'
			],
			[
				'id'         => 1673,
				'country_id' => 107,
				'name'       => 'Kagawa',
				'code'       => 'KA'
			],
			[
				'id'         => 1674,
				'country_id' => 107,
				'name'       => 'Kagoshima',
				'code'       => 'KG'
			],
			[
				'id'         => 1675,
				'country_id' => 107,
				'name'       => 'Kanagawa',
				'code'       => 'KN'
			],
			[
				'id'         => 1676,
				'country_id' => 107,
				'name'       => 'Kochi',
				'code'       => 'KO'
			],
			[
				'id'         => 1677,
				'country_id' => 107,
				'name'       => 'Kumamoto',
				'code'       => 'KU'
			],
			[
				'id'         => 1678,
				'country_id' => 107,
				'name'       => 'Kyoto',
				'code'       => 'KY'
			],
			[
				'id'         => 1679,
				'country_id' => 107,
				'name'       => 'Mie',
				'code'       => 'MI'
			],
			[
				'id'         => 1680,
				'country_id' => 107,
				'name'       => 'Miyagi',
				'code'       => 'MY'
			],
			[
				'id'         => 1681,
				'country_id' => 107,
				'name'       => 'Miyazaki',
				'code'       => 'MZ'
			],
			[
				'id'         => 1682,
				'country_id' => 107,
				'name'       => 'Nagano',
				'code'       => 'NA'
			],
			[
				'id'         => 1683,
				'country_id' => 107,
				'name'       => 'Nagasaki',
				'code'       => 'NG'
			],
			[
				'id'         => 1684,
				'country_id' => 107,
				'name'       => 'Nara',
				'code'       => 'NR'
			],
			[
				'id'         => 1685,
				'country_id' => 107,
				'name'       => 'Niigata',
				'code'       => 'NI'
			],
			[
				'id'         => 1686,
				'country_id' => 107,
				'name'       => 'Oita',
				'code'       => 'OI'
			],
			[
				'id'         => 1687,
				'country_id' => 107,
				'name'       => 'Okayama',
				'code'       => 'OK'
			],
			[
				'id'         => 1688,
				'country_id' => 107,
				'name'       => 'Okinawa',
				'code'       => 'ON'
			],
			[
				'id'         => 1689,
				'country_id' => 107,
				'name'       => 'Osaka',
				'code'       => 'OS'
			],
			[
				'id'         => 1690,
				'country_id' => 107,
				'name'       => 'Saga',
				'code'       => 'SA'
			],
			[
				'id'         => 1691,
				'country_id' => 107,
				'name'       => 'Saitama',
				'code'       => 'SI'
			],
			[
				'id'         => 1692,
				'country_id' => 107,
				'name'       => 'Shiga',
				'code'       => 'SH'
			],
			[
				'id'         => 1693,
				'country_id' => 107,
				'name'       => 'Shimane',
				'code'       => 'SM'
			],
			[
				'id'         => 1694,
				'country_id' => 107,
				'name'       => 'Shizuoka',
				'code'       => 'SZ'
			],
			[
				'id'         => 1695,
				'country_id' => 107,
				'name'       => 'Tochigi',
				'code'       => 'TO'
			],
			[
				'id'         => 1696,
				'country_id' => 107,
				'name'       => 'Tokushima',
				'code'       => 'TS'
			],
			[
				'id'         => 1697,
				'country_id' => 107,
				'name'       => 'Tokyo',
				'code'       => 'TK'
			],
			[
				'id'         => 1698,
				'country_id' => 107,
				'name'       => 'Tottori',
				'code'       => 'TT'
			],
			[
				'id'         => 1699,
				'country_id' => 107,
				'name'       => 'Toyama',
				'code'       => 'TY'
			],
			[
				'id'         => 1700,
				'country_id' => 107,
				'name'       => 'Wakayama',
				'code'       => 'WA'
			],
			[
				'id'         => 1701,
				'country_id' => 107,
				'name'       => 'Yamagata',
				'code'       => 'YA'
			],
			[
				'id'         => 1702,
				'country_id' => 107,
				'name'       => 'Yamaguchi',
				'code'       => 'YM'
			],
			[
				'id'         => 1703,
				'country_id' => 107,
				'name'       => 'Yamanashi',
				'code'       => 'YN'
			],
			[
				'id'         => 1704,
				'country_id' => 108,
				'name'       => '\'Amman',
				'code'       => 'AM'
			],
			[
				'id'         => 1705,
				'country_id' => 108,
				'name'       => 'Ajlun',
				'code'       => 'AJ'
			],
			[
				'id'         => 1706,
				'country_id' => 108,
				'name'       => 'Al \'Aqabah',
				'code'       => 'AA'
			],
			[
				'id'         => 1707,
				'country_id' => 108,
				'name'       => 'Al Balqa\'',
				'code'       => 'AB'
			],
			[
				'id'         => 1708,
				'country_id' => 108,
				'name'       => 'Al Karak',
				'code'       => 'AK'
			],
			[
				'id'         => 1709,
				'country_id' => 108,
				'name'       => 'Al Mafraq',
				'code'       => 'AL'
			],
			[
				'id'         => 1710,
				'country_id' => 108,
				'name'       => 'At Tafilah',
				'code'       => 'AT'
			],
			[
				'id'         => 1711,
				'country_id' => 108,
				'name'       => 'Az Zarqa\'',
				'code'       => 'AZ'
			],
			[
				'id'         => 1712,
				'country_id' => 108,
				'name'       => 'Irbid',
				'code'       => 'IR'
			],
			[
				'id'         => 1713,
				'country_id' => 108,
				'name'       => 'Jarash',
				'code'       => 'JA'
			],
			[
				'id'         => 1714,
				'country_id' => 108,
				'name'       => 'Ma\'an',
				'code'       => 'MA'
			],
			[
				'id'         => 1715,
				'country_id' => 108,
				'name'       => 'Madaba',
				'code'       => 'MD'
			],
			[
				'id'         => 1716,
				'country_id' => 109,
				'name'       => 'Almaty',
				'code'       => 'AL'
			],
			[
				'id'         => 1717,
				'country_id' => 109,
				'name'       => 'Almaty City',
				'code'       => 'AC'
			],
			[
				'id'         => 1718,
				'country_id' => 109,
				'name'       => 'Aqmola',
				'code'       => 'AM'
			],
			[
				'id'         => 1719,
				'country_id' => 109,
				'name'       => 'Aqtobe',
				'code'       => 'AQ'
			],
			[
				'id'         => 1720,
				'country_id' => 109,
				'name'       => 'Astana City',
				'code'       => 'AS'
			],
			[
				'id'         => 1721,
				'country_id' => 109,
				'name'       => 'Atyrau',
				'code'       => 'AT'
			],
			[
				'id'         => 1722,
				'country_id' => 109,
				'name'       => 'Batys Qazaqstan',
				'code'       => 'BA'
			],
			[
				'id'         => 1723,
				'country_id' => 109,
				'name'       => 'Bayqongyr City',
				'code'       => 'BY'
			],
			[
				'id'         => 1724,
				'country_id' => 109,
				'name'       => 'Mangghystau',
				'code'       => 'MA'
			],
			[
				'id'         => 1725,
				'country_id' => 109,
				'name'       => 'Ongtustik Qazaqstan',
				'code'       => 'ON'
			],
			[
				'id'         => 1726,
				'country_id' => 109,
				'name'       => 'Pavlodar',
				'code'       => 'PA'
			],
			[
				'id'         => 1727,
				'country_id' => 109,
				'name'       => 'Qaraghandy',
				'code'       => 'QA'
			],
			[
				'id'         => 1728,
				'country_id' => 109,
				'name'       => 'Qostanay',
				'code'       => 'QO'
			],
			[
				'id'         => 1729,
				'country_id' => 109,
				'name'       => 'Qyzylorda',
				'code'       => 'QY'
			],
			[
				'id'         => 1730,
				'country_id' => 109,
				'name'       => 'Shyghys Qazaqstan',
				'code'       => 'SH'
			],
			[
				'id'         => 1731,
				'country_id' => 109,
				'name'       => 'Soltustik Qazaqstan',
				'code'       => 'SO'
			],
			[
				'id'         => 1732,
				'country_id' => 109,
				'name'       => 'Zhambyl',
				'code'       => 'ZH'
			],
			[
				'id'         => 1733,
				'country_id' => 110,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 1734,
				'country_id' => 110,
				'name'       => 'Coast',
				'code'       => 'CO'
			],
			[
				'id'         => 1735,
				'country_id' => 110,
				'name'       => 'Eastern',
				'code'       => 'EA'
			],
			[
				'id'         => 1736,
				'country_id' => 110,
				'name'       => 'Nairobi Area',
				'code'       => 'NA'
			],
			[
				'id'         => 1737,
				'country_id' => 110,
				'name'       => 'North Eastern',
				'code'       => 'NE'
			],
			[
				'id'         => 1738,
				'country_id' => 110,
				'name'       => 'Nyanza',
				'code'       => 'NY'
			],
			[
				'id'         => 1739,
				'country_id' => 110,
				'name'       => 'Rift Valley',
				'code'       => 'RV'
			],
			[
				'id'         => 1740,
				'country_id' => 110,
				'name'       => 'Western',
				'code'       => 'WE'
			],
			[
				'id'         => 1741,
				'country_id' => 111,
				'name'       => 'Abaiang',
				'code'       => 'AG'
			],
			[
				'id'         => 1742,
				'country_id' => 111,
				'name'       => 'Abemama',
				'code'       => 'AM'
			],
			[
				'id'         => 1743,
				'country_id' => 111,
				'name'       => 'Aranuka',
				'code'       => 'AK'
			],
			[
				'id'         => 1744,
				'country_id' => 111,
				'name'       => 'Arorae',
				'code'       => 'AO'
			],
			[
				'id'         => 1745,
				'country_id' => 111,
				'name'       => 'Banaba',
				'code'       => 'BA'
			],
			[
				'id'         => 1746,
				'country_id' => 111,
				'name'       => 'Beru',
				'code'       => 'BE'
			],
			[
				'id'         => 1747,
				'country_id' => 111,
				'name'       => 'Butaritari',
				'code'       => 'bT'
			],
			[
				'id'         => 1748,
				'country_id' => 111,
				'name'       => 'Kanton',
				'code'       => 'KA'
			],
			[
				'id'         => 1749,
				'country_id' => 111,
				'name'       => 'Kiritimati',
				'code'       => 'KR'
			],
			[
				'id'         => 1750,
				'country_id' => 111,
				'name'       => 'Kuria',
				'code'       => 'KU'
			],
			[
				'id'         => 1751,
				'country_id' => 111,
				'name'       => 'Maiana',
				'code'       => 'MI'
			],
			[
				'id'         => 1752,
				'country_id' => 111,
				'name'       => 'Makin',
				'code'       => 'MN'
			],
			[
				'id'         => 1753,
				'country_id' => 111,
				'name'       => 'Marakei',
				'code'       => 'ME'
			],
			[
				'id'         => 1754,
				'country_id' => 111,
				'name'       => 'Nikunau',
				'code'       => 'NI'
			],
			[
				'id'         => 1755,
				'country_id' => 111,
				'name'       => 'Nonouti',
				'code'       => 'NO'
			],
			[
				'id'         => 1756,
				'country_id' => 111,
				'name'       => 'Onotoa',
				'code'       => 'ON'
			],
			[
				'id'         => 1757,
				'country_id' => 111,
				'name'       => 'Tabiteuea',
				'code'       => 'TT'
			],
			[
				'id'         => 1758,
				'country_id' => 111,
				'name'       => 'Tabuaeran',
				'code'       => 'TR'
			],
			[
				'id'         => 1759,
				'country_id' => 111,
				'name'       => 'Tamana',
				'code'       => 'TM'
			],
			[
				'id'         => 1760,
				'country_id' => 111,
				'name'       => 'Tarawa',
				'code'       => 'TW'
			],
			[
				'id'         => 1761,
				'country_id' => 111,
				'name'       => 'Teraina',
				'code'       => 'TE'
			],
			[
				'id'         => 1762,
				'country_id' => 112,
				'name'       => 'Chagang-do',
				'code'       => 'CHA'
			],
			[
				'id'         => 1763,
				'country_id' => 112,
				'name'       => 'Hamgyong-bukto',
				'code'       => 'HAB'
			],
			[
				'id'         => 1764,
				'country_id' => 112,
				'name'       => 'Hamgyong-namdo',
				'code'       => 'HAN'
			],
			[
				'id'         => 1765,
				'country_id' => 112,
				'name'       => 'Hwanghae-bukto',
				'code'       => 'HWB'
			],
			[
				'id'         => 1766,
				'country_id' => 112,
				'name'       => 'Hwanghae-namdo',
				'code'       => 'HWN'
			],
			[
				'id'         => 1767,
				'country_id' => 112,
				'name'       => 'Kangwon-do',
				'code'       => 'KAN'
			],
			[
				'id'         => 1768,
				'country_id' => 112,
				'name'       => 'P\'yongan-bukto',
				'code'       => 'PYB'
			],
			[
				'id'         => 1769,
				'country_id' => 112,
				'name'       => 'P\'yongan-namdo',
				'code'       => 'PYN'
			],
			[
				'id'         => 1770,
				'country_id' => 112,
				'name'       => 'Ryanggang-do (Yanggang-do)',
				'code'       => 'YAN'
			],
			[
				'id'         => 1771,
				'country_id' => 112,
				'name'       => 'Rason Directly Governed City',
				'code'       => 'NAJ'
			],
			[
				'id'         => 1772,
				'country_id' => 112,
				'name'       => 'P\'yongyang Special City',
				'code'       => 'PYO'
			],
			[
				'id'         => 1773,
				'country_id' => 113,
				'name'       => 'Ch\'ungch\'ong-bukto',
				'code'       => 'CO'
			],
			[
				'id'         => 1774,
				'country_id' => 113,
				'name'       => 'Ch\'ungch\'ong-namdo',
				'code'       => 'CH'
			],
			[
				'id'         => 1775,
				'country_id' => 113,
				'name'       => 'Cheju-do',
				'code'       => 'CD'
			],
			[
				'id'         => 1776,
				'country_id' => 113,
				'name'       => 'Cholla-bukto',
				'code'       => 'CB'
			],
			[
				'id'         => 1777,
				'country_id' => 113,
				'name'       => 'Cholla-namdo',
				'code'       => 'CN'
			],
			[
				'id'         => 1778,
				'country_id' => 113,
				'name'       => 'Inch\'on-gwangyoksi',
				'code'       => 'IG'
			],
			[
				'id'         => 1779,
				'country_id' => 113,
				'name'       => 'Kangwon-do',
				'code'       => 'KA'
			],
			[
				'id'         => 1780,
				'country_id' => 113,
				'name'       => 'Kwangju-gwangyoksi',
				'code'       => 'KG'
			],
			[
				'id'         => 1781,
				'country_id' => 113,
				'name'       => 'Kyonggi-do',
				'code'       => 'KD'
			],
			[
				'id'         => 1782,
				'country_id' => 113,
				'name'       => 'Kyongsang-bukto',
				'code'       => 'KB'
			],
			[
				'id'         => 1783,
				'country_id' => 113,
				'name'       => 'Kyongsang-namdo',
				'code'       => 'KN'
			],
			[
				'id'         => 1784,
				'country_id' => 113,
				'name'       => 'Pusan-gwangyoksi',
				'code'       => 'PG'
			],
			[
				'id'         => 1785,
				'country_id' => 113,
				'name'       => 'Soul-t\'ukpyolsi',
				'code'       => 'SO'
			],
			[
				'id'         => 1786,
				'country_id' => 113,
				'name'       => 'Taegu-gwangyoksi',
				'code'       => 'TA'
			],
			[
				'id'         => 1787,
				'country_id' => 113,
				'name'       => 'Taejon-gwangyoksi',
				'code'       => 'TG'
			],
			[
				'id'         => 1788,
				'country_id' => 114,
				'name'       => 'Al \'Asimah',
				'code'       => 'AL'
			],
			[
				'id'         => 1789,
				'country_id' => 114,
				'name'       => 'Al Ahmadi',
				'code'       => 'AA'
			],
			[
				'id'         => 1790,
				'country_id' => 114,
				'name'       => 'Al Farwaniyah',
				'code'       => 'AF'
			],
			[
				'id'         => 1791,
				'country_id' => 114,
				'name'       => 'Al Jahra\'',
				'code'       => 'AJ'
			],
			[
				'id'         => 1792,
				'country_id' => 114,
				'name'       => 'Hawalli',
				'code'       => 'HA'
			],
			[
				'id'         => 1793,
				'country_id' => 115,
				'name'       => 'Bishkek',
				'code'       => 'GB'
			],
			[
				'id'         => 1794,
				'country_id' => 115,
				'name'       => 'Batken',
				'code'       => 'B'
			],
			[
				'id'         => 1795,
				'country_id' => 115,
				'name'       => 'Chu',
				'code'       => 'C'
			],
			[
				'id'         => 1796,
				'country_id' => 115,
				'name'       => 'Jalal-Abad',
				'code'       => 'J'
			],
			[
				'id'         => 1797,
				'country_id' => 115,
				'name'       => 'Naryn',
				'code'       => 'N'
			],
			[
				'id'         => 1798,
				'country_id' => 115,
				'name'       => 'Osh',
				'code'       => 'O'
			],
			[
				'id'         => 1799,
				'country_id' => 115,
				'name'       => 'Talas',
				'code'       => 'T'
			],
			[
				'id'         => 1800,
				'country_id' => 115,
				'name'       => 'Ysyk-Kol',
				'code'       => 'Y'
			],
			[
				'id'         => 1801,
				'country_id' => 116,
				'name'       => 'Vientiane',
				'code'       => 'VT'
			],
			[
				'id'         => 1802,
				'country_id' => 116,
				'name'       => 'Attapu',
				'code'       => 'AT'
			],
			[
				'id'         => 1803,
				'country_id' => 116,
				'name'       => 'Bokeo',
				'code'       => 'BK'
			],
			[
				'id'         => 1804,
				'country_id' => 116,
				'name'       => 'Bolikhamxai',
				'code'       => 'BL'
			],
			[
				'id'         => 1805,
				'country_id' => 116,
				'name'       => 'Champasak',
				'code'       => 'CH'
			],
			[
				'id'         => 1806,
				'country_id' => 116,
				'name'       => 'Houaphan',
				'code'       => 'HO'
			],
			[
				'id'         => 1807,
				'country_id' => 116,
				'name'       => 'Khammouan',
				'code'       => 'KH'
			],
			[
				'id'         => 1808,
				'country_id' => 116,
				'name'       => 'Louang Namtha',
				'code'       => 'LM'
			],
			[
				'id'         => 1809,
				'country_id' => 116,
				'name'       => 'Louangphabang',
				'code'       => 'LP'
			],
			[
				'id'         => 1810,
				'country_id' => 116,
				'name'       => 'Oudomxai',
				'code'       => 'OU'
			],
			[
				'id'         => 1811,
				'country_id' => 116,
				'name'       => 'Phongsali',
				'code'       => 'PH'
			],
			[
				'id'         => 1812,
				'country_id' => 116,
				'name'       => 'Salavan',
				'code'       => 'SL'
			],
			[
				'id'         => 1813,
				'country_id' => 116,
				'name'       => 'Savannakhet',
				'code'       => 'SV'
			],
			[
				'id'         => 1814,
				'country_id' => 116,
				'name'       => 'Vientiane',
				'code'       => 'VI'
			],
			[
				'id'         => 1815,
				'country_id' => 116,
				'name'       => 'Xaignabouli',
				'code'       => 'XA'
			],
			[
				'id'         => 1816,
				'country_id' => 116,
				'name'       => 'Xekong',
				'code'       => 'XE'
			],
			[
				'id'         => 1817,
				'country_id' => 116,
				'name'       => 'Xiangkhoang',
				'code'       => 'XI'
			],
			[
				'id'         => 1818,
				'country_id' => 116,
				'name'       => 'Xaisomboun',
				'code'       => 'XN'
			],
			[
				'id'         => 1852,
				'country_id' => 119,
				'name'       => 'Berea',
				'code'       => 'BE'
			],
			[
				'id'         => 1853,
				'country_id' => 119,
				'name'       => 'Butha-Buthe',
				'code'       => 'BB'
			],
			[
				'id'         => 1854,
				'country_id' => 119,
				'name'       => 'Leribe',
				'code'       => 'LE'
			],
			[
				'id'         => 1855,
				'country_id' => 119,
				'name'       => 'Mafeteng',
				'code'       => 'MF'
			],
			[
				'id'         => 1856,
				'country_id' => 119,
				'name'       => 'Maseru',
				'code'       => 'MS'
			],
			[
				'id'         => 1857,
				'country_id' => 119,
				'name'       => 'Mohale\'s Hoek',
				'code'       => 'MH'
			],
			[
				'id'         => 1858,
				'country_id' => 119,
				'name'       => 'Mokhotlong',
				'code'       => 'MK'
			],
			[
				'id'         => 1859,
				'country_id' => 119,
				'name'       => 'Qacha\'s Nek',
				'code'       => 'QN'
			],
			[
				'id'         => 1860,
				'country_id' => 119,
				'name'       => 'Quthing',
				'code'       => 'QT'
			],
			[
				'id'         => 1861,
				'country_id' => 119,
				'name'       => 'Thaba-Tseka',
				'code'       => 'TT'
			],
			[
				'id'         => 1862,
				'country_id' => 120,
				'name'       => 'Bomi',
				'code'       => 'BI'
			],
			[
				'id'         => 1863,
				'country_id' => 120,
				'name'       => 'Bong',
				'code'       => 'BG'
			],
			[
				'id'         => 1864,
				'country_id' => 120,
				'name'       => 'Grand Bassa',
				'code'       => 'GB'
			],
			[
				'id'         => 1865,
				'country_id' => 120,
				'name'       => 'Grand Cape Mount',
				'code'       => 'CM'
			],
			[
				'id'         => 1866,
				'country_id' => 120,
				'name'       => 'Grand Gedeh',
				'code'       => 'GG'
			],
			[
				'id'         => 1867,
				'country_id' => 120,
				'name'       => 'Grand Kru',
				'code'       => 'GK'
			],
			[
				'id'         => 1868,
				'country_id' => 120,
				'name'       => 'Lofa',
				'code'       => 'LO'
			],
			[
				'id'         => 1869,
				'country_id' => 120,
				'name'       => 'Margibi',
				'code'       => 'MG'
			],
			[
				'id'         => 1870,
				'country_id' => 120,
				'name'       => 'Maryland',
				'code'       => 'ML'
			],
			[
				'id'         => 1871,
				'country_id' => 120,
				'name'       => 'Montserrado',
				'code'       => 'MS'
			],
			[
				'id'         => 1872,
				'country_id' => 120,
				'name'       => 'Nimba',
				'code'       => 'NB'
			],
			[
				'id'         => 1873,
				'country_id' => 120,
				'name'       => 'River Cess',
				'code'       => 'RC'
			],
			[
				'id'         => 1874,
				'country_id' => 120,
				'name'       => 'Sinoe',
				'code'       => 'SN'
			],
			[
				'id'         => 1875,
				'country_id' => 121,
				'name'       => 'Ajdabiya',
				'code'       => 'AJ'
			],
			[
				'id'         => 1876,
				'country_id' => 121,
				'name'       => 'Al \'Aziziyah',
				'code'       => 'AZ'
			],
			[
				'id'         => 1877,
				'country_id' => 121,
				'name'       => 'Al Fatih',
				'code'       => 'FA'
			],
			[
				'id'         => 1878,
				'country_id' => 121,
				'name'       => 'Al Jabal al Akhdar',
				'code'       => 'JA'
			],
			[
				'id'         => 1879,
				'country_id' => 121,
				'name'       => 'Al Jufrah',
				'code'       => 'JU'
			],
			[
				'id'         => 1880,
				'country_id' => 121,
				'name'       => 'Al Khums',
				'code'       => 'KH'
			],
			[
				'id'         => 1881,
				'country_id' => 121,
				'name'       => 'Al Kufrah',
				'code'       => 'KU'
			],
			[
				'id'         => 1882,
				'country_id' => 121,
				'name'       => 'An Nuqat al Khams',
				'code'       => 'NK'
			],
			[
				'id'         => 1883,
				'country_id' => 121,
				'name'       => 'Ash Shati\'',
				'code'       => 'AS'
			],
			[
				'id'         => 1884,
				'country_id' => 121,
				'name'       => 'Awbari',
				'code'       => 'AW'
			],
			[
				'id'         => 1885,
				'country_id' => 121,
				'name'       => 'Az Zawiyah',
				'code'       => 'ZA'
			],
			[
				'id'         => 1886,
				'country_id' => 121,
				'name'       => 'Banghazi',
				'code'       => 'BA'
			],
			[
				'id'         => 1887,
				'country_id' => 121,
				'name'       => 'Darnah',
				'code'       => 'DA'
			],
			[
				'id'         => 1888,
				'country_id' => 121,
				'name'       => 'Ghadamis',
				'code'       => 'GD'
			],
			[
				'id'         => 1889,
				'country_id' => 121,
				'name'       => 'Gharyan',
				'code'       => 'GY'
			],
			[
				'id'         => 1890,
				'country_id' => 121,
				'name'       => 'Misratah',
				'code'       => 'MI'
			],
			[
				'id'         => 1891,
				'country_id' => 121,
				'name'       => 'Murzuq',
				'code'       => 'MZ'
			],
			[
				'id'         => 1892,
				'country_id' => 121,
				'name'       => 'Sabha',
				'code'       => 'SB'
			],
			[
				'id'         => 1893,
				'country_id' => 121,
				'name'       => 'Sawfajjin',
				'code'       => 'SW'
			],
			[
				'id'         => 1894,
				'country_id' => 121,
				'name'       => 'Surt',
				'code'       => 'SU'
			],
			[
				'id'         => 1895,
				'country_id' => 121,
				'name'       => 'Tarabulus (Tripoli)',
				'code'       => 'TL'
			],
			[
				'id'         => 1896,
				'country_id' => 121,
				'name'       => 'Tarhunah',
				'code'       => 'TH'
			],
			[
				'id'         => 1897,
				'country_id' => 121,
				'name'       => 'Tubruq',
				'code'       => 'TU'
			],
			[
				'id'         => 1898,
				'country_id' => 121,
				'name'       => 'Yafran',
				'code'       => 'YA'
			],
			[
				'id'         => 1899,
				'country_id' => 121,
				'name'       => 'Zlitan',
				'code'       => 'ZL'
			],
			[
				'id'         => 1900,
				'country_id' => 122,
				'name'       => 'Vaduz',
				'code'       => 'V'
			],
			[
				'id'         => 1901,
				'country_id' => 122,
				'name'       => 'Schaan',
				'code'       => 'A'
			],
			[
				'id'         => 1902,
				'country_id' => 122,
				'name'       => 'Balzers',
				'code'       => 'B'
			],
			[
				'id'         => 1903,
				'country_id' => 122,
				'name'       => 'Triesen',
				'code'       => 'N'
			],
			[
				'id'         => 1904,
				'country_id' => 122,
				'name'       => 'Eschen',
				'code'       => 'E'
			],
			[
				'id'         => 1905,
				'country_id' => 122,
				'name'       => 'Mauren',
				'code'       => 'M'
			],
			[
				'id'         => 1906,
				'country_id' => 122,
				'name'       => 'Triesenberg',
				'code'       => 'T'
			],
			[
				'id'         => 1907,
				'country_id' => 122,
				'name'       => 'Ruggell',
				'code'       => 'R'
			],
			[
				'id'         => 1908,
				'country_id' => 122,
				'name'       => 'Gamprin',
				'code'       => 'G'
			],
			[
				'id'         => 1909,
				'country_id' => 122,
				'name'       => 'Schellenberg',
				'code'       => 'L'
			],
			[
				'id'         => 1910,
				'country_id' => 122,
				'name'       => 'Planken',
				'code'       => 'P'
			],
			[
				'id'         => 1911,
				'country_id' => 123,
				'name'       => 'Alytus',
				'code'       => 'AL'
			],
			[
				'id'         => 1912,
				'country_id' => 123,
				'name'       => 'Kaunas',
				'code'       => 'KA'
			],
			[
				'id'         => 1913,
				'country_id' => 123,
				'name'       => 'Klaipeda',
				'code'       => 'KL'
			],
			[
				'id'         => 1914,
				'country_id' => 123,
				'name'       => 'Marijampole',
				'code'       => 'MA'
			],
			[
				'id'         => 1915,
				'country_id' => 123,
				'name'       => 'Panevezys',
				'code'       => 'PA'
			],
			[
				'id'         => 1916,
				'country_id' => 123,
				'name'       => 'Siauliai',
				'code'       => 'SI'
			],
			[
				'id'         => 1917,
				'country_id' => 123,
				'name'       => 'Taurage',
				'code'       => 'TA'
			],
			[
				'id'         => 1918,
				'country_id' => 123,
				'name'       => 'Telsiai',
				'code'       => 'TE'
			],
			[
				'id'         => 1919,
				'country_id' => 123,
				'name'       => 'Utena',
				'code'       => 'UT'
			],
			[
				'id'         => 1920,
				'country_id' => 123,
				'name'       => 'Vilnius',
				'code'       => 'VI'
			],
			[
				'id'         => 1921,
				'country_id' => 124,
				'name'       => 'Diekirch',
				'code'       => 'DD'
			],
			[
				'id'         => 1922,
				'country_id' => 124,
				'name'       => 'Clervaux',
				'code'       => 'DC'
			],
			[
				'id'         => 1923,
				'country_id' => 124,
				'name'       => 'Redange',
				'code'       => 'DR'
			],
			[
				'id'         => 1924,
				'country_id' => 124,
				'name'       => 'Vianden',
				'code'       => 'DV'
			],
			[
				'id'         => 1925,
				'country_id' => 124,
				'name'       => 'Wiltz',
				'code'       => 'DW'
			],
			[
				'id'         => 1926,
				'country_id' => 124,
				'name'       => 'Grevenmacher',
				'code'       => 'GG'
			],
			[
				'id'         => 1927,
				'country_id' => 124,
				'name'       => 'Echternach',
				'code'       => 'GE'
			],
			[
				'id'         => 1928,
				'country_id' => 124,
				'name'       => 'Remich',
				'code'       => 'GR'
			],
			[
				'id'         => 1929,
				'country_id' => 124,
				'name'       => 'Luxembourg',
				'code'       => 'LL'
			],
			[
				'id'         => 1930,
				'country_id' => 124,
				'name'       => 'Capellen',
				'code'       => 'LC'
			],
			[
				'id'         => 1931,
				'country_id' => 124,
				'name'       => 'Esch-sur-Alzette',
				'code'       => 'LE'
			],
			[
				'id'         => 1932,
				'country_id' => 124,
				'name'       => 'Mersch',
				'code'       => 'LM'
			],
			[
				'id'         => 1933,
				'country_id' => 125,
				'name'       => 'Our Lady Fatima Parish',
				'code'       => 'OLF'
			],
			[
				'id'         => 1934,
				'country_id' => 125,
				'name'       => 'St. Anthony Parish',
				'code'       => 'ANT'
			],
			[
				'id'         => 1935,
				'country_id' => 125,
				'name'       => 'St. Lazarus Parish',
				'code'       => 'LAZ'
			],
			[
				'id'         => 1936,
				'country_id' => 125,
				'name'       => 'Cathedral Parish',
				'code'       => 'CAT'
			],
			[
				'id'         => 1937,
				'country_id' => 125,
				'name'       => 'St. Lawrence Parish',
				'code'       => 'LAW'
			],
			[
				'id'         => 1938,
				'country_id' => 127,
				'name'       => 'Antananarivo',
				'code'       => 'AN'
			],
			[
				'id'         => 1939,
				'country_id' => 127,
				'name'       => 'Antsiranana',
				'code'       => 'AS'
			],
			[
				'id'         => 1940,
				'country_id' => 127,
				'name'       => 'Fianarantsoa',
				'code'       => 'FN'
			],
			[
				'id'         => 1941,
				'country_id' => 127,
				'name'       => 'Mahajanga',
				'code'       => 'MJ'
			],
			[
				'id'         => 1942,
				'country_id' => 127,
				'name'       => 'Toamasina',
				'code'       => 'TM'
			],
			[
				'id'         => 1943,
				'country_id' => 127,
				'name'       => 'Toliara',
				'code'       => 'TL'
			],
			[
				'id'         => 1944,
				'country_id' => 128,
				'name'       => 'Balaka',
				'code'       => 'BLK'
			],
			[
				'id'         => 1945,
				'country_id' => 128,
				'name'       => 'Blantyre',
				'code'       => 'BLT'
			],
			[
				'id'         => 1946,
				'country_id' => 128,
				'name'       => 'Chikwawa',
				'code'       => 'CKW'
			],
			[
				'id'         => 1947,
				'country_id' => 128,
				'name'       => 'Chiradzulu',
				'code'       => 'CRD'
			],
			[
				'id'         => 1948,
				'country_id' => 128,
				'name'       => 'Chitipa',
				'code'       => 'CTP'
			],
			[
				'id'         => 1949,
				'country_id' => 128,
				'name'       => 'Dedza',
				'code'       => 'DDZ'
			],
			[
				'id'         => 1950,
				'country_id' => 128,
				'name'       => 'Dowa',
				'code'       => 'DWA'
			],
			[
				'id'         => 1951,
				'country_id' => 128,
				'name'       => 'Karonga',
				'code'       => 'KRG'
			],
			[
				'id'         => 1952,
				'country_id' => 128,
				'name'       => 'Kasungu',
				'code'       => 'KSG'
			],
			[
				'id'         => 1953,
				'country_id' => 128,
				'name'       => 'Likoma',
				'code'       => 'LKM'
			],
			[
				'id'         => 1954,
				'country_id' => 128,
				'name'       => 'Lilongwe',
				'code'       => 'LLG'
			],
			[
				'id'         => 1955,
				'country_id' => 128,
				'name'       => 'Machinga',
				'code'       => 'MCG'
			],
			[
				'id'         => 1956,
				'country_id' => 128,
				'name'       => 'Mangochi',
				'code'       => 'MGC'
			],
			[
				'id'         => 1957,
				'country_id' => 128,
				'name'       => 'Mchinji',
				'code'       => 'MCH'
			],
			[
				'id'         => 1958,
				'country_id' => 128,
				'name'       => 'Mulanje',
				'code'       => 'MLJ'
			],
			[
				'id'         => 1959,
				'country_id' => 128,
				'name'       => 'Mwanza',
				'code'       => 'MWZ'
			],
			[
				'id'         => 1960,
				'country_id' => 128,
				'name'       => 'Mzimba',
				'code'       => 'MZM'
			],
			[
				'id'         => 1961,
				'country_id' => 128,
				'name'       => 'Ntcheu',
				'code'       => 'NTU'
			],
			[
				'id'         => 1962,
				'country_id' => 128,
				'name'       => 'Nkhata Bay',
				'code'       => 'NKB'
			],
			[
				'id'         => 1963,
				'country_id' => 128,
				'name'       => 'Nkhotakota',
				'code'       => 'NKH'
			],
			[
				'id'         => 1964,
				'country_id' => 128,
				'name'       => 'Nsanje',
				'code'       => 'NSJ'
			],
			[
				'id'         => 1965,
				'country_id' => 128,
				'name'       => 'Ntchisi',
				'code'       => 'NTI'
			],
			[
				'id'         => 1966,
				'country_id' => 128,
				'name'       => 'Phalombe',
				'code'       => 'PHL'
			],
			[
				'id'         => 1967,
				'country_id' => 128,
				'name'       => 'Rumphi',
				'code'       => 'RMP'
			],
			[
				'id'         => 1968,
				'country_id' => 128,
				'name'       => 'Salima',
				'code'       => 'SLM'
			],
			[
				'id'         => 1969,
				'country_id' => 128,
				'name'       => 'Thyolo',
				'code'       => 'THY'
			],
			[
				'id'         => 1970,
				'country_id' => 128,
				'name'       => 'Zomba',
				'code'       => 'ZBA'
			],
			[
				'id'         => 1971,
				'country_id' => 129,
				'name'       => 'Johor',
				'code'       => 'MY-01'
			],
			[
				'id'         => 1972,
				'country_id' => 129,
				'name'       => 'Kedah',
				'code'       => 'MY-02'
			],
			[
				'id'         => 1973,
				'country_id' => 129,
				'name'       => 'Kelantan',
				'code'       => 'MY-03'
			],
			[
				'id'         => 1974,
				'country_id' => 129,
				'name'       => 'Labuan',
				'code'       => 'MY-15'
			],
			[
				'id'         => 1975,
				'country_id' => 129,
				'name'       => 'Melaka',
				'code'       => 'MY-04'
			],
			[
				'id'         => 1976,
				'country_id' => 129,
				'name'       => 'Negeri Sembilan',
				'code'       => 'MY-05'
			],
			[
				'id'         => 1977,
				'country_id' => 129,
				'name'       => 'Pahang',
				'code'       => 'MY-06'
			],
			[
				'id'         => 1978,
				'country_id' => 129,
				'name'       => 'Perak',
				'code'       => 'MY-08'
			],
			[
				'id'         => 1979,
				'country_id' => 129,
				'name'       => 'Perlis',
				'code'       => 'MY-09'
			],
			[
				'id'         => 1980,
				'country_id' => 129,
				'name'       => 'Pulau Pinang',
				'code'       => 'MY-07'
			],
			[
				'id'         => 1981,
				'country_id' => 129,
				'name'       => 'Sabah',
				'code'       => 'MY-12'
			],
			[
				'id'         => 1982,
				'country_id' => 129,
				'name'       => 'Sarawak',
				'code'       => 'MY-13'
			],
			[
				'id'         => 1983,
				'country_id' => 129,
				'name'       => 'Selangor',
				'code'       => 'MY-10'
			],
			[
				'id'         => 1984,
				'country_id' => 129,
				'name'       => 'Terengganu',
				'code'       => 'MY-11'
			],
			[
				'id'         => 1985,
				'country_id' => 129,
				'name'       => 'Kuala Lumpur',
				'code'       => 'MY-14'
			],
			[
				'id'         => 4035,
				'country_id' => 129,
				'name'       => 'Putrajaya',
				'code'       => 'MY-16'
			],
			[
				'id'         => 1986,
				'country_id' => 130,
				'name'       => 'Thiladhunmathi Uthuru',
				'code'       => 'THU'
			],
			[
				'id'         => 1987,
				'country_id' => 130,
				'name'       => 'Thiladhunmathi Dhekunu',
				'code'       => 'THD'
			],
			[
				'id'         => 1988,
				'country_id' => 130,
				'name'       => 'Miladhunmadulu Uthuru',
				'code'       => 'MLU'
			],
			[
				'id'         => 1989,
				'country_id' => 130,
				'name'       => 'Miladhunmadulu Dhekunu',
				'code'       => 'MLD'
			],
			[
				'id'         => 1990,
				'country_id' => 130,
				'name'       => 'Maalhosmadulu Uthuru',
				'code'       => 'MAU'
			],
			[
				'id'         => 1991,
				'country_id' => 130,
				'name'       => 'Maalhosmadulu Dhekunu',
				'code'       => 'MAD'
			],
			[
				'id'         => 1992,
				'country_id' => 130,
				'name'       => 'Faadhippolhu',
				'code'       => 'FAA'
			],
			[
				'id'         => 1993,
				'country_id' => 130,
				'name'       => 'Male Atoll',
				'code'       => 'MAA'
			],
			[
				'id'         => 1994,
				'country_id' => 130,
				'name'       => 'Ari Atoll Uthuru',
				'code'       => 'AAU'
			],
			[
				'id'         => 1995,
				'country_id' => 130,
				'name'       => 'Ari Atoll Dheknu',
				'code'       => 'AAD'
			],
			[
				'id'         => 1996,
				'country_id' => 130,
				'name'       => 'Felidhe Atoll',
				'code'       => 'FEA'
			],
			[
				'id'         => 1997,
				'country_id' => 130,
				'name'       => 'Mulaku Atoll',
				'code'       => 'MUA'
			],
			[
				'id'         => 1998,
				'country_id' => 130,
				'name'       => 'Nilandhe Atoll Uthuru',
				'code'       => 'NAU'
			],
			[
				'id'         => 1999,
				'country_id' => 130,
				'name'       => 'Nilandhe Atoll Dhekunu',
				'code'       => 'NAD'
			],
			[
				'id'         => 2000,
				'country_id' => 130,
				'name'       => 'Kolhumadulu',
				'code'       => 'KLH'
			],
			[
				'id'         => 2001,
				'country_id' => 130,
				'name'       => 'Hadhdhunmathi',
				'code'       => 'HDH'
			],
			[
				'id'         => 2002,
				'country_id' => 130,
				'name'       => 'Huvadhu Atoll Uthuru',
				'code'       => 'HAU'
			],
			[
				'id'         => 2003,
				'country_id' => 130,
				'name'       => 'Huvadhu Atoll Dhekunu',
				'code'       => 'HAD'
			],
			[
				'id'         => 2004,
				'country_id' => 130,
				'name'       => 'Fua Mulaku',
				'code'       => 'FMU'
			],
			[
				'id'         => 2005,
				'country_id' => 130,
				'name'       => 'Addu',
				'code'       => 'ADD'
			],
			[
				'id'         => 2006,
				'country_id' => 131,
				'name'       => 'Gao',
				'code'       => 'GA'
			],
			[
				'id'         => 2007,
				'country_id' => 131,
				'name'       => 'Kayes',
				'code'       => 'KY'
			],
			[
				'id'         => 2008,
				'country_id' => 131,
				'name'       => 'Kidal',
				'code'       => 'KD'
			],
			[
				'id'         => 2009,
				'country_id' => 131,
				'name'       => 'Koulikoro',
				'code'       => 'KL'
			],
			[
				'id'         => 2010,
				'country_id' => 131,
				'name'       => 'Mopti',
				'code'       => 'MP'
			],
			[
				'id'         => 2011,
				'country_id' => 131,
				'name'       => 'Segou',
				'code'       => 'SG'
			],
			[
				'id'         => 2012,
				'country_id' => 131,
				'name'       => 'Sikasso',
				'code'       => 'SK'
			],
			[
				'id'         => 2013,
				'country_id' => 131,
				'name'       => 'Tombouctou',
				'code'       => 'TB'
			],
			[
				'id'         => 2014,
				'country_id' => 131,
				'name'       => 'Bamako Capital District',
				'code'       => 'CD'
			],
			[
				'id'         => 2015,
				'country_id' => 132,
				'name'       => 'Attard',
				'code'       => 'ATT'
			],
			[
				'id'         => 2016,
				'country_id' => 132,
				'name'       => 'Balzan',
				'code'       => 'BAL'
			],
			[
				'id'         => 2017,
				'country_id' => 132,
				'name'       => 'Birgu',
				'code'       => 'BGU'
			],
			[
				'id'         => 2018,
				'country_id' => 132,
				'name'       => 'Birkirkara',
				'code'       => 'BKK'
			],
			[
				'id'         => 2019,
				'country_id' => 132,
				'name'       => 'Birzebbuga',
				'code'       => 'BRZ'
			],
			[
				'id'         => 2020,
				'country_id' => 132,
				'name'       => 'Bormla',
				'code'       => 'BOR'
			],
			[
				'id'         => 2021,
				'country_id' => 132,
				'name'       => 'Dingli',
				'code'       => 'DIN'
			],
			[
				'id'         => 2022,
				'country_id' => 132,
				'name'       => 'Fgura',
				'code'       => 'FGU'
			],
			[
				'id'         => 2023,
				'country_id' => 132,
				'name'       => 'Floriana',
				'code'       => 'FLO'
			],
			[
				'id'         => 2024,
				'country_id' => 132,
				'name'       => 'Gudja',
				'code'       => 'GDJ'
			],
			[
				'id'         => 2025,
				'country_id' => 132,
				'name'       => 'Gzira',
				'code'       => 'GZR'
			],
			[
				'id'         => 2026,
				'country_id' => 132,
				'name'       => 'Gargur',
				'code'       => 'GRG'
			],
			[
				'id'         => 2027,
				'country_id' => 132,
				'name'       => 'Gaxaq',
				'code'       => 'GXQ'
			],
			[
				'id'         => 2028,
				'country_id' => 132,
				'name'       => 'Hamrun',
				'code'       => 'HMR'
			],
			[
				'id'         => 2029,
				'country_id' => 132,
				'name'       => 'Iklin',
				'code'       => 'IKL'
			],
			[
				'id'         => 2030,
				'country_id' => 132,
				'name'       => 'Isla',
				'code'       => 'ISL'
			],
			[
				'id'         => 2031,
				'country_id' => 132,
				'name'       => 'Kalkara',
				'code'       => 'KLK'
			],
			[
				'id'         => 2032,
				'country_id' => 132,
				'name'       => 'Kirkop',
				'code'       => 'KRK'
			],
			[
				'id'         => 2033,
				'country_id' => 132,
				'name'       => 'Lija',
				'code'       => 'LIJ'
			],
			[
				'id'         => 2034,
				'country_id' => 132,
				'name'       => 'Luqa',
				'code'       => 'LUQ'
			],
			[
				'id'         => 2035,
				'country_id' => 132,
				'name'       => 'Marsa',
				'code'       => 'MRS'
			],
			[
				'id'         => 2036,
				'country_id' => 132,
				'name'       => 'Marsaskala',
				'code'       => 'MKL'
			],
			[
				'id'         => 2037,
				'country_id' => 132,
				'name'       => 'Marsaxlokk',
				'code'       => 'MXL'
			],
			[
				'id'         => 2038,
				'country_id' => 132,
				'name'       => 'Mdina',
				'code'       => 'MDN'
			],
			[
				'id'         => 2039,
				'country_id' => 132,
				'name'       => 'Melliea',
				'code'       => 'MEL'
			],
			[
				'id'         => 2040,
				'country_id' => 132,
				'name'       => 'Mgarr',
				'code'       => 'MGR'
			],
			[
				'id'         => 2041,
				'country_id' => 132,
				'name'       => 'Mosta',
				'code'       => 'MST'
			],
			[
				'id'         => 2042,
				'country_id' => 132,
				'name'       => 'Mqabba',
				'code'       => 'MQA'
			],
			[
				'id'         => 2043,
				'country_id' => 132,
				'name'       => 'Msida',
				'code'       => 'MSI'
			],
			[
				'id'         => 2044,
				'country_id' => 132,
				'name'       => 'Mtarfa',
				'code'       => 'MTF'
			],
			[
				'id'         => 2045,
				'country_id' => 132,
				'name'       => 'Naxxar',
				'code'       => 'NAX'
			],
			[
				'id'         => 2046,
				'country_id' => 132,
				'name'       => 'Paola',
				'code'       => 'PAO'
			],
			[
				'id'         => 2047,
				'country_id' => 132,
				'name'       => 'Pembroke',
				'code'       => 'PEM'
			],
			[
				'id'         => 2048,
				'country_id' => 132,
				'name'       => 'Pieta',
				'code'       => 'PIE'
			],
			[
				'id'         => 2049,
				'country_id' => 132,
				'name'       => 'Qormi',
				'code'       => 'QOR'
			],
			[
				'id'         => 2050,
				'country_id' => 132,
				'name'       => 'Qrendi',
				'code'       => 'QRE'
			],
			[
				'id'         => 2051,
				'country_id' => 132,
				'name'       => 'Rabat',
				'code'       => 'RAB'
			],
			[
				'id'         => 2052,
				'country_id' => 132,
				'name'       => 'Safi',
				'code'       => 'SAF'
			],
			[
				'id'         => 2053,
				'country_id' => 132,
				'name'       => 'San Giljan',
				'code'       => 'SGI'
			],
			[
				'id'         => 2054,
				'country_id' => 132,
				'name'       => 'Santa Lucija',
				'code'       => 'SLU'
			],
			[
				'id'         => 2055,
				'country_id' => 132,
				'name'       => 'San Pawl il-Bahar',
				'code'       => 'SPB'
			],
			[
				'id'         => 2056,
				'country_id' => 132,
				'name'       => 'San Gwann',
				'code'       => 'SGW'
			],
			[
				'id'         => 2057,
				'country_id' => 132,
				'name'       => 'Santa Venera',
				'code'       => 'SVE'
			],
			[
				'id'         => 2058,
				'country_id' => 132,
				'name'       => 'Siggiewi',
				'code'       => 'SIG'
			],
			[
				'id'         => 2059,
				'country_id' => 132,
				'name'       => 'Sliema',
				'code'       => 'SLM'
			],
			[
				'id'         => 2060,
				'country_id' => 132,
				'name'       => 'Swieqi',
				'code'       => 'SWQ'
			],
			[
				'id'         => 2061,
				'country_id' => 132,
				'name'       => 'Ta Xbiex',
				'code'       => 'TXB'
			],
			[
				'id'         => 2062,
				'country_id' => 132,
				'name'       => 'Tarxien',
				'code'       => 'TRX'
			],
			[
				'id'         => 2063,
				'country_id' => 132,
				'name'       => 'Valletta',
				'code'       => 'VLT'
			],
			[
				'id'         => 2064,
				'country_id' => 132,
				'name'       => 'Xgajra',
				'code'       => 'XGJ'
			],
			[
				'id'         => 2065,
				'country_id' => 132,
				'name'       => 'Zabbar',
				'code'       => 'ZBR'
			],
			[
				'id'         => 2066,
				'country_id' => 132,
				'name'       => 'Zebbug',
				'code'       => 'ZBG'
			],
			[
				'id'         => 2067,
				'country_id' => 132,
				'name'       => 'Zejtun',
				'code'       => 'ZJT'
			],
			[
				'id'         => 2068,
				'country_id' => 132,
				'name'       => 'Zurrieq',
				'code'       => 'ZRQ'
			],
			[
				'id'         => 2069,
				'country_id' => 132,
				'name'       => 'Fontana',
				'code'       => 'FNT'
			],
			[
				'id'         => 2070,
				'country_id' => 132,
				'name'       => 'Ghajnsielem',
				'code'       => 'GHJ'
			],
			[
				'id'         => 2071,
				'country_id' => 132,
				'name'       => 'Gharb',
				'code'       => 'GHR'
			],
			[
				'id'         => 2072,
				'country_id' => 132,
				'name'       => 'Ghasri',
				'code'       => 'GHS'
			],
			[
				'id'         => 2073,
				'country_id' => 132,
				'name'       => 'Kercem',
				'code'       => 'KRC'
			],
			[
				'id'         => 2074,
				'country_id' => 132,
				'name'       => 'Munxar',
				'code'       => 'MUN'
			],
			[
				'id'         => 2075,
				'country_id' => 132,
				'name'       => 'Nadur',
				'code'       => 'NAD'
			],
			[
				'id'         => 2076,
				'country_id' => 132,
				'name'       => 'Qala',
				'code'       => 'QAL'
			],
			[
				'id'         => 2077,
				'country_id' => 132,
				'name'       => 'Victoria',
				'code'       => 'VIC'
			],
			[
				'id'         => 2078,
				'country_id' => 132,
				'name'       => 'San Lawrenz',
				'code'       => 'SLA'
			],
			[
				'id'         => 2079,
				'country_id' => 132,
				'name'       => 'Sannat',
				'code'       => 'SNT'
			],
			[
				'id'         => 2080,
				'country_id' => 132,
				'name'       => 'Xagra',
				'code'       => 'ZAG'
			],
			[
				'id'         => 2081,
				'country_id' => 132,
				'name'       => 'Xewkija',
				'code'       => 'XEW'
			],
			[
				'id'         => 2082,
				'country_id' => 132,
				'name'       => 'Zebbug',
				'code'       => 'ZEB'
			],
			[
				'id'         => 2083,
				'country_id' => 133,
				'name'       => 'Ailinginae',
				'code'       => 'ALG'
			],
			[
				'id'         => 2084,
				'country_id' => 133,
				'name'       => 'Ailinglaplap',
				'code'       => 'ALL'
			],
			[
				'id'         => 2085,
				'country_id' => 133,
				'name'       => 'Ailuk',
				'code'       => 'ALK'
			],
			[
				'id'         => 2086,
				'country_id' => 133,
				'name'       => 'Arno',
				'code'       => 'ARN'
			],
			[
				'id'         => 2087,
				'country_id' => 133,
				'name'       => 'Aur',
				'code'       => 'AUR'
			],
			[
				'id'         => 2088,
				'country_id' => 133,
				'name'       => 'Bikar',
				'code'       => 'BKR'
			],
			[
				'id'         => 2089,
				'country_id' => 133,
				'name'       => 'Bikini',
				'code'       => 'BKN'
			],
			[
				'id'         => 2090,
				'country_id' => 133,
				'name'       => 'Bokak',
				'code'       => 'BKK'
			],
			[
				'id'         => 2091,
				'country_id' => 133,
				'name'       => 'Ebon',
				'code'       => 'EBN'
			],
			[
				'id'         => 2092,
				'country_id' => 133,
				'name'       => 'Enewetak',
				'code'       => 'ENT'
			],
			[
				'id'         => 2093,
				'country_id' => 133,
				'name'       => 'Erikub',
				'code'       => 'EKB'
			],
			[
				'id'         => 2094,
				'country_id' => 133,
				'name'       => 'Jabat',
				'code'       => 'JBT'
			],
			[
				'id'         => 2095,
				'country_id' => 133,
				'name'       => 'Jaluit',
				'code'       => 'JLT'
			],
			[
				'id'         => 2096,
				'country_id' => 133,
				'name'       => 'Jemo',
				'code'       => 'JEM'
			],
			[
				'id'         => 2097,
				'country_id' => 133,
				'name'       => 'Kili',
				'code'       => 'KIL'
			],
			[
				'id'         => 2098,
				'country_id' => 133,
				'name'       => 'Kwajalein',
				'code'       => 'KWJ'
			],
			[
				'id'         => 2099,
				'country_id' => 133,
				'name'       => 'Lae',
				'code'       => 'LAE'
			],
			[
				'id'         => 2100,
				'country_id' => 133,
				'name'       => 'Lib',
				'code'       => 'LIB'
			],
			[
				'id'         => 2101,
				'country_id' => 133,
				'name'       => 'Likiep',
				'code'       => 'LKP'
			],
			[
				'id'         => 2102,
				'country_id' => 133,
				'name'       => 'Majuro',
				'code'       => 'MJR'
			],
			[
				'id'         => 2103,
				'country_id' => 133,
				'name'       => 'Maloelap',
				'code'       => 'MLP'
			],
			[
				'id'         => 2104,
				'country_id' => 133,
				'name'       => 'Mejit',
				'code'       => 'MJT'
			],
			[
				'id'         => 2105,
				'country_id' => 133,
				'name'       => 'Mili',
				'code'       => 'MIL'
			],
			[
				'id'         => 2106,
				'country_id' => 133,
				'name'       => 'Namorik',
				'code'       => 'NMK'
			],
			[
				'id'         => 2107,
				'country_id' => 133,
				'name'       => 'Namu',
				'code'       => 'NAM'
			],
			[
				'id'         => 2108,
				'country_id' => 133,
				'name'       => 'Rongelap',
				'code'       => 'RGL'
			],
			[
				'id'         => 2109,
				'country_id' => 133,
				'name'       => 'Rongrik',
				'code'       => 'RGK'
			],
			[
				'id'         => 2110,
				'country_id' => 133,
				'name'       => 'Toke',
				'code'       => 'TOK'
			],
			[
				'id'         => 2111,
				'country_id' => 133,
				'name'       => 'Ujae',
				'code'       => 'UJA'
			],
			[
				'id'         => 2112,
				'country_id' => 133,
				'name'       => 'Ujelang',
				'code'       => 'UJL'
			],
			[
				'id'         => 2113,
				'country_id' => 133,
				'name'       => 'Utirik',
				'code'       => 'UTK'
			],
			[
				'id'         => 2114,
				'country_id' => 133,
				'name'       => 'Wotho',
				'code'       => 'WTH'
			],
			[
				'id'         => 2115,
				'country_id' => 133,
				'name'       => 'Wotje',
				'code'       => 'WTJ'
			],
			[
				'id'         => 2116,
				'country_id' => 135,
				'name'       => 'Adrar',
				'code'       => 'AD'
			],
			[
				'id'         => 2117,
				'country_id' => 135,
				'name'       => 'Assaba',
				'code'       => 'AS'
			],
			[
				'id'         => 2118,
				'country_id' => 135,
				'name'       => 'Brakna',
				'code'       => 'BR'
			],
			[
				'id'         => 2119,
				'country_id' => 135,
				'name'       => 'Dakhlet Nouadhibou',
				'code'       => 'DN'
			],
			[
				'id'         => 2120,
				'country_id' => 135,
				'name'       => 'Gorgol',
				'code'       => 'GO'
			],
			[
				'id'         => 2121,
				'country_id' => 135,
				'name'       => 'Guidimaka',
				'code'       => 'GM'
			],
			[
				'id'         => 2122,
				'country_id' => 135,
				'name'       => 'Hodh Ech Chargui',
				'code'       => 'HC'
			],
			[
				'id'         => 2123,
				'country_id' => 135,
				'name'       => 'Hodh El Gharbi',
				'code'       => 'HG'
			],
			[
				'id'         => 2124,
				'country_id' => 135,
				'name'       => 'Inchiri',
				'code'       => 'IN'
			],
			[
				'id'         => 2125,
				'country_id' => 135,
				'name'       => 'Tagant',
				'code'       => 'TA'
			],
			[
				'id'         => 2126,
				'country_id' => 135,
				'name'       => 'Tiris Zemmour',
				'code'       => 'TZ'
			],
			[
				'id'         => 2127,
				'country_id' => 135,
				'name'       => 'Trarza',
				'code'       => 'TR'
			],
			[
				'id'         => 2128,
				'country_id' => 135,
				'name'       => 'Nouakchott',
				'code'       => 'NO'
			],
			[
				'id'         => 2129,
				'country_id' => 136,
				'name'       => 'Beau Bassin-Rose Hill',
				'code'       => 'BR'
			],
			[
				'id'         => 2130,
				'country_id' => 136,
				'name'       => 'Curepipe',
				'code'       => 'CU'
			],
			[
				'id'         => 2131,
				'country_id' => 136,
				'name'       => 'Port Louis',
				'code'       => 'PU'
			],
			[
				'id'         => 2132,
				'country_id' => 136,
				'name'       => 'Quatre Bornes',
				'code'       => 'QB'
			],
			[
				'id'         => 2133,
				'country_id' => 136,
				'name'       => 'Vacoas-Phoenix',
				'code'       => 'VP'
			],
			[
				'id'         => 2134,
				'country_id' => 136,
				'name'       => 'Agalega Islands',
				'code'       => 'AG'
			],
			[
				'id'         => 2135,
				'country_id' => 136,
				'name'       => 'Cargados Carajos Shoals (Saint Brandon Islands)',
				'code'       => 'CC'
			],
			[
				'id'         => 2136,
				'country_id' => 136,
				'name'       => 'Rodrigues',
				'code'       => 'RO'
			],
			[
				'id'         => 2137,
				'country_id' => 136,
				'name'       => 'Black River',
				'code'       => 'BL'
			],
			[
				'id'         => 2138,
				'country_id' => 136,
				'name'       => 'Flacq',
				'code'       => 'FL'
			],
			[
				'id'         => 2139,
				'country_id' => 136,
				'name'       => 'Grand Port',
				'code'       => 'GP'
			],
			[
				'id'         => 2140,
				'country_id' => 136,
				'name'       => 'Moka',
				'code'       => 'MO'
			],
			[
				'id'         => 2141,
				'country_id' => 136,
				'name'       => 'Pamplemousses',
				'code'       => 'PA'
			],
			[
				'id'         => 2142,
				'country_id' => 136,
				'name'       => 'Plaines Wilhems',
				'code'       => 'PW'
			],
			[
				'id'         => 2143,
				'country_id' => 136,
				'name'       => 'Port Louis',
				'code'       => 'PL'
			],
			[
				'id'         => 2144,
				'country_id' => 136,
				'name'       => 'Riviere du Rempart',
				'code'       => 'RR'
			],
			[
				'id'         => 2145,
				'country_id' => 136,
				'name'       => 'Savanne',
				'code'       => 'SA'
			],
			[
				'id'         => 2146,
				'country_id' => 138,
				'name'       => 'Baja California Norte',
				'code'       => 'BN'
			],
			[
				'id'         => 2147,
				'country_id' => 138,
				'name'       => 'Baja California Sur',
				'code'       => 'BS'
			],
			[
				'id'         => 2148,
				'country_id' => 138,
				'name'       => 'Campeche',
				'code'       => 'CA'
			],
			[
				'id'         => 2149,
				'country_id' => 138,
				'name'       => 'Chiapas',
				'code'       => 'CI'
			],
			[
				'id'         => 2150,
				'country_id' => 138,
				'name'       => 'Chihuahua',
				'code'       => 'CH'
			],
			[
				'id'         => 2151,
				'country_id' => 138,
				'name'       => 'Coahuila de Zaragoza',
				'code'       => 'CZ'
			],
			[
				'id'         => 2152,
				'country_id' => 138,
				'name'       => 'Colima',
				'code'       => 'CL'
			],
			[
				'id'         => 2153,
				'country_id' => 138,
				'name'       => 'Distrito Federal',
				'code'       => 'DF'
			],
			[
				'id'         => 2154,
				'country_id' => 138,
				'name'       => 'Durango',
				'code'       => 'DU'
			],
			[
				'id'         => 2155,
				'country_id' => 138,
				'name'       => 'Guanajuato',
				'code'       => 'GA'
			],
			[
				'id'         => 2156,
				'country_id' => 138,
				'name'       => 'Guerrero',
				'code'       => 'GE'
			],
			[
				'id'         => 2157,
				'country_id' => 138,
				'name'       => 'Hidalgo',
				'code'       => 'HI'
			],
			[
				'id'         => 2158,
				'country_id' => 138,
				'name'       => 'Jalisco',
				'code'       => 'JA'
			],
			[
				'id'         => 2159,
				'country_id' => 138,
				'name'       => 'Mexico',
				'code'       => 'ME'
			],
			[
				'id'         => 2160,
				'country_id' => 138,
				'name'       => 'Michoacan de Ocampo',
				'code'       => 'MI'
			],
			[
				'id'         => 2161,
				'country_id' => 138,
				'name'       => 'Morelos',
				'code'       => 'MO'
			],
			[
				'id'         => 2162,
				'country_id' => 138,
				'name'       => 'Nayarit',
				'code'       => 'NA'
			],
			[
				'id'         => 2163,
				'country_id' => 138,
				'name'       => 'Nuevo Leon',
				'code'       => 'NL'
			],
			[
				'id'         => 2164,
				'country_id' => 138,
				'name'       => 'Oaxaca',
				'code'       => 'OA'
			],
			[
				'id'         => 2165,
				'country_id' => 138,
				'name'       => 'Puebla',
				'code'       => 'PU'
			],
			[
				'id'         => 2166,
				'country_id' => 138,
				'name'       => 'Queretaro de Arteaga',
				'code'       => 'QA'
			],
			[
				'id'         => 2167,
				'country_id' => 138,
				'name'       => 'Quintana Roo',
				'code'       => 'QR'
			],
			[
				'id'         => 2168,
				'country_id' => 138,
				'name'       => 'San Luis Potosi',
				'code'       => 'SA'
			],
			[
				'id'         => 2169,
				'country_id' => 138,
				'name'       => 'Sinaloa',
				'code'       => 'SI'
			],
			[
				'id'         => 2170,
				'country_id' => 138,
				'name'       => 'Sonora',
				'code'       => 'SO'
			],
			[
				'id'         => 2171,
				'country_id' => 138,
				'name'       => 'Tabasco',
				'code'       => 'TB'
			],
			[
				'id'         => 2172,
				'country_id' => 138,
				'name'       => 'Tamaulipas',
				'code'       => 'TM'
			],
			[
				'id'         => 2173,
				'country_id' => 138,
				'name'       => 'Tlaxcala',
				'code'       => 'TL'
			],
			[
				'id'         => 2174,
				'country_id' => 138,
				'name'       => 'Veracruz-Llave',
				'code'       => 'VE'
			],
			[
				'id'         => 2175,
				'country_id' => 138,
				'name'       => 'Yucatan',
				'code'       => 'YU'
			],
			[
				'id'         => 2176,
				'country_id' => 138,
				'name'       => 'Zacatecas',
				'code'       => 'ZA'
			],
			[
				'id'         => 2177,
				'country_id' => 139,
				'name'       => 'Chuuk',
				'code'       => 'C'
			],
			[
				'id'         => 2178,
				'country_id' => 139,
				'name'       => 'Kosrae',
				'code'       => 'K'
			],
			[
				'id'         => 2179,
				'country_id' => 139,
				'name'       => 'Pohnpei',
				'code'       => 'P'
			],
			[
				'id'         => 2180,
				'country_id' => 139,
				'name'       => 'Yap',
				'code'       => 'Y'
			],
			[
				'id'         => 2181,
				'country_id' => 140,
				'name'       => 'Gagauzia',
				'code'       => 'GA'
			],
			[
				'id'         => 2182,
				'country_id' => 140,
				'name'       => 'Chisinau',
				'code'       => 'CU'
			],
			[
				'id'         => 2183,
				'country_id' => 140,
				'name'       => 'Balti',
				'code'       => 'BA'
			],
			[
				'id'         => 2184,
				'country_id' => 140,
				'name'       => 'Cahul',
				'code'       => 'CA'
			],
			[
				'id'         => 2185,
				'country_id' => 140,
				'name'       => 'Edinet',
				'code'       => 'ED'
			],
			[
				'id'         => 2186,
				'country_id' => 140,
				'name'       => 'Lapusna',
				'code'       => 'LA'
			],
			[
				'id'         => 2187,
				'country_id' => 140,
				'name'       => 'Orhei',
				'code'       => 'OR'
			],
			[
				'id'         => 2188,
				'country_id' => 140,
				'name'       => 'Soroca',
				'code'       => 'SO'
			],
			[
				'id'         => 2189,
				'country_id' => 140,
				'name'       => 'Tighina',
				'code'       => 'TI'
			],
			[
				'id'         => 2190,
				'country_id' => 140,
				'name'       => 'Ungheni',
				'code'       => 'UN'
			],
			[
				'id'         => 2191,
				'country_id' => 140,
				'name'       => 'St‚nga Nistrului',
				'code'       => 'SN'
			],
			[
				'id'         => 2192,
				'country_id' => 141,
				'name'       => 'Fontvieille',
				'code'       => 'FV'
			],
			[
				'id'         => 2193,
				'country_id' => 141,
				'name'       => 'La Condamine',
				'code'       => 'LC'
			],
			[
				'id'         => 2194,
				'country_id' => 141,
				'name'       => 'Monaco-Ville',
				'code'       => 'MV'
			],
			[
				'id'         => 2195,
				'country_id' => 141,
				'name'       => 'Monte-Carlo',
				'code'       => 'MC'
			],
			[
				'id'         => 2196,
				'country_id' => 142,
				'name'       => 'Ulanbaatar',
				'code'       => '1'
			],
			[
				'id'         => 2197,
				'country_id' => 142,
				'name'       => 'Orhon',
				'code'       => '035'
			],
			[
				'id'         => 2198,
				'country_id' => 142,
				'name'       => 'Darhan uul',
				'code'       => '037'
			],
			[
				'id'         => 2199,
				'country_id' => 142,
				'name'       => 'Hentiy',
				'code'       => '039'
			],
			[
				'id'         => 2200,
				'country_id' => 142,
				'name'       => 'Hovsgol',
				'code'       => '041'
			],
			[
				'id'         => 2201,
				'country_id' => 142,
				'name'       => 'Hovd',
				'code'       => '043'
			],
			[
				'id'         => 2202,
				'country_id' => 142,
				'name'       => 'Uvs',
				'code'       => '046'
			],
			[
				'id'         => 2203,
				'country_id' => 142,
				'name'       => 'Tov',
				'code'       => '047'
			],
			[
				'id'         => 2204,
				'country_id' => 142,
				'name'       => 'Selenge',
				'code'       => '049'
			],
			[
				'id'         => 2205,
				'country_id' => 142,
				'name'       => 'Suhbaatar',
				'code'       => '051'
			],
			[
				'id'         => 2206,
				'country_id' => 142,
				'name'       => 'Omnogovi',
				'code'       => '053'
			],
			[
				'id'         => 2207,
				'country_id' => 142,
				'name'       => 'Ovorhangay',
				'code'       => '055'
			],
			[
				'id'         => 2208,
				'country_id' => 142,
				'name'       => 'Dzavhan',
				'code'       => '057'
			],
			[
				'id'         => 2209,
				'country_id' => 142,
				'name'       => 'DundgovL',
				'code'       => '059'
			],
			[
				'id'         => 2210,
				'country_id' => 142,
				'name'       => 'Dornod',
				'code'       => '061'
			],
			[
				'id'         => 2211,
				'country_id' => 142,
				'name'       => 'Dornogov',
				'code'       => '063'
			],
			[
				'id'         => 2212,
				'country_id' => 142,
				'name'       => 'Govi-Sumber',
				'code'       => '064'
			],
			[
				'id'         => 2213,
				'country_id' => 142,
				'name'       => 'Govi-Altay',
				'code'       => '065'
			],
			[
				'id'         => 2214,
				'country_id' => 142,
				'name'       => 'Bulgan',
				'code'       => '067'
			],
			[
				'id'         => 2215,
				'country_id' => 142,
				'name'       => 'Bayanhongor',
				'code'       => '069'
			],
			[
				'id'         => 2216,
				'country_id' => 142,
				'name'       => 'Bayan-Olgiy',
				'code'       => '071'
			],
			[
				'id'         => 2217,
				'country_id' => 142,
				'name'       => 'Arhangay',
				'code'       => '073'
			],
			[
				'id'         => 2218,
				'country_id' => 143,
				'name'       => 'Saint Anthony',
				'code'       => 'A'
			],
			[
				'id'         => 2219,
				'country_id' => 143,
				'name'       => 'Saint Georges',
				'code'       => 'G'
			],
			[
				'id'         => 2220,
				'country_id' => 143,
				'name'       => 'Saint Peter',
				'code'       => 'P'
			],
			[
				'id'         => 2221,
				'country_id' => 144,
				'name'       => 'Agadir',
				'code'       => 'AGD'
			],
			[
				'id'         => 2222,
				'country_id' => 144,
				'name'       => 'Al Hoceima',
				'code'       => 'HOC'
			],
			[
				'id'         => 2223,
				'country_id' => 144,
				'name'       => 'Azilal',
				'code'       => 'AZI'
			],
			[
				'id'         => 2224,
				'country_id' => 144,
				'name'       => 'Beni Mellal',
				'code'       => 'BME'
			],
			[
				'id'         => 2225,
				'country_id' => 144,
				'name'       => 'Ben Slimane',
				'code'       => 'BSL'
			],
			[
				'id'         => 2226,
				'country_id' => 144,
				'name'       => 'Boulemane',
				'code'       => 'BLM'
			],
			[
				'id'         => 2227,
				'country_id' => 144,
				'name'       => 'Casablanca',
				'code'       => 'CBL'
			],
			[
				'id'         => 2228,
				'country_id' => 144,
				'name'       => 'Chaouen',
				'code'       => 'CHA'
			],
			[
				'id'         => 2229,
				'country_id' => 144,
				'name'       => 'El Jadida',
				'code'       => 'EJA'
			],
			[
				'id'         => 2230,
				'country_id' => 144,
				'name'       => 'El Kelaa des Sraghna',
				'code'       => 'EKS'
			],
			[
				'id'         => 2231,
				'country_id' => 144,
				'name'       => 'Er Rachidia',
				'code'       => 'ERA'
			],
			[
				'id'         => 2232,
				'country_id' => 144,
				'name'       => 'Essaouira',
				'code'       => 'ESS'
			],
			[
				'id'         => 2233,
				'country_id' => 144,
				'name'       => 'Fes',
				'code'       => 'FES'
			],
			[
				'id'         => 2234,
				'country_id' => 144,
				'name'       => 'Figuig',
				'code'       => 'FIG'
			],
			[
				'id'         => 2235,
				'country_id' => 144,
				'name'       => 'Guelmim',
				'code'       => 'GLM'
			],
			[
				'id'         => 2236,
				'country_id' => 144,
				'name'       => 'Ifrane',
				'code'       => 'IFR'
			],
			[
				'id'         => 2237,
				'country_id' => 144,
				'name'       => 'Kenitra',
				'code'       => 'KEN'
			],
			[
				'id'         => 2238,
				'country_id' => 144,
				'name'       => 'Khemisset',
				'code'       => 'KHM'
			],
			[
				'id'         => 2239,
				'country_id' => 144,
				'name'       => 'Khenifra',
				'code'       => 'KHN'
			],
			[
				'id'         => 2240,
				'country_id' => 144,
				'name'       => 'Khouribga',
				'code'       => 'KHO'
			],
			[
				'id'         => 2241,
				'country_id' => 144,
				'name'       => 'Laayoune',
				'code'       => 'LYN'
			],
			[
				'id'         => 2242,
				'country_id' => 144,
				'name'       => 'Larache',
				'code'       => 'LAR'
			],
			[
				'id'         => 2243,
				'country_id' => 144,
				'name'       => 'Marrakech',
				'code'       => 'MRK'
			],
			[
				'id'         => 2244,
				'country_id' => 144,
				'name'       => 'Meknes',
				'code'       => 'MKN'
			],
			[
				'id'         => 2245,
				'country_id' => 144,
				'name'       => 'Nador',
				'code'       => 'NAD'
			],
			[
				'id'         => 2246,
				'country_id' => 144,
				'name'       => 'Ouarzazate',
				'code'       => 'ORZ'
			],
			[
				'id'         => 2247,
				'country_id' => 144,
				'name'       => 'Oujda',
				'code'       => 'OUJ'
			],
			[
				'id'         => 2248,
				'country_id' => 144,
				'name'       => 'Rabat-Sale',
				'code'       => 'RSA'
			],
			[
				'id'         => 2249,
				'country_id' => 144,
				'name'       => 'Safi',
				'code'       => 'SAF'
			],
			[
				'id'         => 2250,
				'country_id' => 144,
				'name'       => 'Settat',
				'code'       => 'SET'
			],
			[
				'id'         => 2251,
				'country_id' => 144,
				'name'       => 'Sidi Kacem',
				'code'       => 'SKA'
			],
			[
				'id'         => 2252,
				'country_id' => 144,
				'name'       => 'Tangier',
				'code'       => 'TGR'
			],
			[
				'id'         => 2253,
				'country_id' => 144,
				'name'       => 'Tan-Tan',
				'code'       => 'TAN'
			],
			[
				'id'         => 2254,
				'country_id' => 144,
				'name'       => 'Taounate',
				'code'       => 'TAO'
			],
			[
				'id'         => 2255,
				'country_id' => 144,
				'name'       => 'Taroudannt',
				'code'       => 'TRD'
			],
			[
				'id'         => 2256,
				'country_id' => 144,
				'name'       => 'Tata',
				'code'       => 'TAT'
			],
			[
				'id'         => 2257,
				'country_id' => 144,
				'name'       => 'Taza',
				'code'       => 'TAZ'
			],
			[
				'id'         => 2258,
				'country_id' => 144,
				'name'       => 'Tetouan',
				'code'       => 'TET'
			],
			[
				'id'         => 2259,
				'country_id' => 144,
				'name'       => 'Tiznit',
				'code'       => 'TIZ'
			],
			[
				'id'         => 2260,
				'country_id' => 144,
				'name'       => 'Ad Dakhla',
				'code'       => 'ADK'
			],
			[
				'id'         => 2261,
				'country_id' => 144,
				'name'       => 'Boujdour',
				'code'       => 'BJD'
			],
			[
				'id'         => 2262,
				'country_id' => 144,
				'name'       => 'Es Smara',
				'code'       => 'ESM'
			],
			[
				'id'         => 2263,
				'country_id' => 145,
				'name'       => 'Cabo Delgado',
				'code'       => 'CD'
			],
			[
				'id'         => 2264,
				'country_id' => 145,
				'name'       => 'Gaza',
				'code'       => 'GZ'
			],
			[
				'id'         => 2265,
				'country_id' => 145,
				'name'       => 'Inhambane',
				'code'       => 'IN'
			],
			[
				'id'         => 2266,
				'country_id' => 145,
				'name'       => 'Manica',
				'code'       => 'MN'
			],
			[
				'id'         => 2267,
				'country_id' => 145,
				'name'       => 'Maputo (city)',
				'code'       => 'MC'
			],
			[
				'id'         => 2268,
				'country_id' => 145,
				'name'       => 'Maputo',
				'code'       => 'MP'
			],
			[
				'id'         => 2269,
				'country_id' => 145,
				'name'       => 'Nampula',
				'code'       => 'NA'
			],
			[
				'id'         => 2270,
				'country_id' => 145,
				'name'       => 'Niassa',
				'code'       => 'NI'
			],
			[
				'id'         => 2271,
				'country_id' => 145,
				'name'       => 'Sofala',
				'code'       => 'SO'
			],
			[
				'id'         => 2272,
				'country_id' => 145,
				'name'       => 'Tete',
				'code'       => 'TE'
			],
			[
				'id'         => 2273,
				'country_id' => 145,
				'name'       => 'Zambezia',
				'code'       => 'ZA'
			],
			[
				'id'         => 2274,
				'country_id' => 146,
				'name'       => 'Ayeyarwady',
				'code'       => 'AY'
			],
			[
				'id'         => 2275,
				'country_id' => 146,
				'name'       => 'Bago',
				'code'       => 'BG'
			],
			[
				'id'         => 2276,
				'country_id' => 146,
				'name'       => 'Magway',
				'code'       => 'MG'
			],
			[
				'id'         => 2277,
				'country_id' => 146,
				'name'       => 'Mandalay',
				'code'       => 'MD'
			],
			[
				'id'         => 2278,
				'country_id' => 146,
				'name'       => 'Sagaing',
				'code'       => 'SG'
			],
			[
				'id'         => 2279,
				'country_id' => 146,
				'name'       => 'Tanintharyi',
				'code'       => 'TN'
			],
			[
				'id'         => 2280,
				'country_id' => 146,
				'name'       => 'Yangon',
				'code'       => 'YG'
			],
			[
				'id'         => 2281,
				'country_id' => 146,
				'name'       => 'Chin State',
				'code'       => 'CH'
			],
			[
				'id'         => 2282,
				'country_id' => 146,
				'name'       => 'Kachin State',
				'code'       => 'KC'
			],
			[
				'id'         => 2283,
				'country_id' => 146,
				'name'       => 'Kayah State',
				'code'       => 'KH'
			],
			[
				'id'         => 2284,
				'country_id' => 146,
				'name'       => 'Kayin State',
				'code'       => 'KN'
			],
			[
				'id'         => 2285,
				'country_id' => 146,
				'name'       => 'Mon State',
				'code'       => 'MN'
			],
			[
				'id'         => 2286,
				'country_id' => 146,
				'name'       => 'Rakhine State',
				'code'       => 'RK'
			],
			[
				'id'         => 2287,
				'country_id' => 146,
				'name'       => 'Shan State',
				'code'       => 'SH'
			],
			[
				'id'         => 2288,
				'country_id' => 147,
				'name'       => 'Caprivi',
				'code'       => 'CA'
			],
			[
				'id'         => 2289,
				'country_id' => 147,
				'name'       => 'Erongo',
				'code'       => 'ER'
			],
			[
				'id'         => 2290,
				'country_id' => 147,
				'name'       => 'Hardap',
				'code'       => 'HA'
			],
			[
				'id'         => 2291,
				'country_id' => 147,
				'name'       => 'Karas',
				'code'       => 'KR'
			],
			[
				'id'         => 2292,
				'country_id' => 147,
				'name'       => 'Kavango',
				'code'       => 'KV'
			],
			[
				'id'         => 2293,
				'country_id' => 147,
				'name'       => 'Khomas',
				'code'       => 'KH'
			],
			[
				'id'         => 2294,
				'country_id' => 147,
				'name'       => 'Kunene',
				'code'       => 'KU'
			],
			[
				'id'         => 2295,
				'country_id' => 147,
				'name'       => 'Ohangwena',
				'code'       => 'OW'
			],
			[
				'id'         => 2296,
				'country_id' => 147,
				'name'       => 'Omaheke',
				'code'       => 'OK'
			],
			[
				'id'         => 2297,
				'country_id' => 147,
				'name'       => 'Omusati',
				'code'       => 'OT'
			],
			[
				'id'         => 2298,
				'country_id' => 147,
				'name'       => 'Oshana',
				'code'       => 'ON'
			],
			[
				'id'         => 2299,
				'country_id' => 147,
				'name'       => 'Oshikoto',
				'code'       => 'OO'
			],
			[
				'id'         => 2300,
				'country_id' => 147,
				'name'       => 'Otjozondjupa',
				'code'       => 'OJ'
			],
			[
				'id'         => 2301,
				'country_id' => 148,
				'name'       => 'Aiwo',
				'code'       => 'AO'
			],
			[
				'id'         => 2302,
				'country_id' => 148,
				'name'       => 'Anabar',
				'code'       => 'AA'
			],
			[
				'id'         => 2303,
				'country_id' => 148,
				'name'       => 'Anetan',
				'code'       => 'AT'
			],
			[
				'id'         => 2304,
				'country_id' => 148,
				'name'       => 'Anibare',
				'code'       => 'AI'
			],
			[
				'id'         => 2305,
				'country_id' => 148,
				'name'       => 'Baiti',
				'code'       => 'BA'
			],
			[
				'id'         => 2306,
				'country_id' => 148,
				'name'       => 'Boe',
				'code'       => 'BO'
			],
			[
				'id'         => 2307,
				'country_id' => 148,
				'name'       => 'Buada',
				'code'       => 'BU'
			],
			[
				'id'         => 2308,
				'country_id' => 148,
				'name'       => 'Denigomodu',
				'code'       => 'DE'
			],
			[
				'id'         => 2309,
				'country_id' => 148,
				'name'       => 'Ewa',
				'code'       => 'EW'
			],
			[
				'id'         => 2310,
				'country_id' => 148,
				'name'       => 'Ijuw',
				'code'       => 'IJ'
			],
			[
				'id'         => 2311,
				'country_id' => 148,
				'name'       => 'Meneng',
				'code'       => 'ME'
			],
			[
				'id'         => 2312,
				'country_id' => 148,
				'name'       => 'Nibok',
				'code'       => 'NI'
			],
			[
				'id'         => 2313,
				'country_id' => 148,
				'name'       => 'Uaboe',
				'code'       => 'UA'
			],
			[
				'id'         => 2314,
				'country_id' => 148,
				'name'       => 'Yaren',
				'code'       => 'YA'
			],
			[
				'id'         => 2315,
				'country_id' => 149,
				'name'       => 'Bagmati',
				'code'       => 'BA'
			],
			[
				'id'         => 2316,
				'country_id' => 149,
				'name'       => 'Bheri',
				'code'       => 'BH'
			],
			[
				'id'         => 2317,
				'country_id' => 149,
				'name'       => 'Dhawalagiri',
				'code'       => 'DH'
			],
			[
				'id'         => 2318,
				'country_id' => 149,
				'name'       => 'Gandaki',
				'code'       => 'GA'
			],
			[
				'id'         => 2319,
				'country_id' => 149,
				'name'       => 'Janakpur',
				'code'       => 'JA'
			],
			[
				'id'         => 2320,
				'country_id' => 149,
				'name'       => 'Karnali',
				'code'       => 'KA'
			],
			[
				'id'         => 2321,
				'country_id' => 149,
				'name'       => 'Kosi',
				'code'       => 'KO'
			],
			[
				'id'         => 2322,
				'country_id' => 149,
				'name'       => 'Lumbini',
				'code'       => 'LU'
			],
			[
				'id'         => 2323,
				'country_id' => 149,
				'name'       => 'Mahakali',
				'code'       => 'MA'
			],
			[
				'id'         => 2324,
				'country_id' => 149,
				'name'       => 'Mechi',
				'code'       => 'ME'
			],
			[
				'id'         => 2325,
				'country_id' => 149,
				'name'       => 'Narayani',
				'code'       => 'NA'
			],
			[
				'id'         => 2326,
				'country_id' => 149,
				'name'       => 'Rapti',
				'code'       => 'RA'
			],
			[
				'id'         => 2327,
				'country_id' => 149,
				'name'       => 'Sagarmatha',
				'code'       => 'SA'
			],
			[
				'id'         => 2328,
				'country_id' => 149,
				'name'       => 'Seti',
				'code'       => 'SE'
			],
			[
				'id'         => 2329,
				'country_id' => 150,
				'name'       => 'Drenthe',
				'code'       => 'DR'
			],
			[
				'id'         => 2330,
				'country_id' => 150,
				'name'       => 'Flevoland',
				'code'       => 'FL'
			],
			[
				'id'         => 2331,
				'country_id' => 150,
				'name'       => 'Friesland',
				'code'       => 'FR'
			],
			[
				'id'         => 2332,
				'country_id' => 150,
				'name'       => 'Gelderland',
				'code'       => 'GE'
			],
			[
				'id'         => 2333,
				'country_id' => 150,
				'name'       => 'Groningen',
				'code'       => 'GR'
			],
			[
				'id'         => 2334,
				'country_id' => 150,
				'name'       => 'Limburg',
				'code'       => 'LI'
			],
			[
				'id'         => 2335,
				'country_id' => 150,
				'name'       => 'Noord Brabant',
				'code'       => 'NB'
			],
			[
				'id'         => 2336,
				'country_id' => 150,
				'name'       => 'Noord Holland',
				'code'       => 'NH'
			],
			[
				'id'         => 2337,
				'country_id' => 150,
				'name'       => 'Overijssel',
				'code'       => 'OV'
			],
			[
				'id'         => 2338,
				'country_id' => 150,
				'name'       => 'Utrecht',
				'code'       => 'UT'
			],
			[
				'id'         => 2339,
				'country_id' => 150,
				'name'       => 'Zeeland',
				'code'       => 'ZE'
			],
			[
				'id'         => 2340,
				'country_id' => 150,
				'name'       => 'Zuid Holland',
				'code'       => 'ZH'
			],
			[
				'id'         => 2341,
				'country_id' => 152,
				'name'       => 'Iles Loyaute',
				'code'       => 'L'
			],
			[
				'id'         => 2342,
				'country_id' => 152,
				'name'       => 'Nord',
				'code'       => 'N'
			],
			[
				'id'         => 2343,
				'country_id' => 152,
				'name'       => 'Sud',
				'code'       => 'S'
			],
			[
				'id'         => 2344,
				'country_id' => 153,
				'name'       => 'Auckland',
				'code'       => 'AUK'
			],
			[
				'id'         => 2345,
				'country_id' => 153,
				'name'       => 'Bay of Plenty',
				'code'       => 'BOP'
			],
			[
				'id'         => 2346,
				'country_id' => 153,
				'name'       => 'Canterbury',
				'code'       => 'CAN'
			],
			[
				'id'         => 2347,
				'country_id' => 153,
				'name'       => 'Coromandel',
				'code'       => 'COR'
			],
			[
				'id'         => 2348,
				'country_id' => 153,
				'name'       => 'Gisborne',
				'code'       => 'GIS'
			],
			[
				'id'         => 2349,
				'country_id' => 153,
				'name'       => 'Fiordland',
				'code'       => 'FIO'
			],
			[
				'id'         => 2350,
				'country_id' => 153,
				'name'       => 'Hawke\'s Bay',
				'code'       => 'HKB'
			],
			[
				'id'         => 2351,
				'country_id' => 153,
				'name'       => 'Marlborough',
				'code'       => 'MBH'
			],
			[
				'id'         => 2352,
				'country_id' => 153,
				'name'       => 'Manawatu-Wanganui',
				'code'       => 'MWT'
			],
			[
				'id'         => 2353,
				'country_id' => 153,
				'name'       => 'Mt Cook-Mackenzie',
				'code'       => 'MCM'
			],
			[
				'id'         => 2354,
				'country_id' => 153,
				'name'       => 'Nelson',
				'code'       => 'NSN'
			],
			[
				'id'         => 2355,
				'country_id' => 153,
				'name'       => 'Northland',
				'code'       => 'NTL'
			],
			[
				'id'         => 2356,
				'country_id' => 153,
				'name'       => 'Otago',
				'code'       => 'OTA'
			],
			[
				'id'         => 2357,
				'country_id' => 153,
				'name'       => 'Southland',
				'code'       => 'STL'
			],
			[
				'id'         => 2358,
				'country_id' => 153,
				'name'       => 'Taranaki',
				'code'       => 'TKI'
			],
			[
				'id'         => 2359,
				'country_id' => 153,
				'name'       => 'Wellington',
				'code'       => 'WGN'
			],
			[
				'id'         => 2360,
				'country_id' => 153,
				'name'       => 'Waikato',
				'code'       => 'WKO'
			],
			[
				'id'         => 2361,
				'country_id' => 153,
				'name'       => 'Wairarapa',
				'code'       => 'WAI'
			],
			[
				'id'         => 2362,
				'country_id' => 153,
				'name'       => 'West Coast',
				'code'       => 'WTC'
			],
			[
				'id'         => 2363,
				'country_id' => 154,
				'name'       => 'Atlantico Norte',
				'code'       => 'AN'
			],
			[
				'id'         => 2364,
				'country_id' => 154,
				'name'       => 'Atlantico Sur',
				'code'       => 'AS'
			],
			[
				'id'         => 2365,
				'country_id' => 154,
				'name'       => 'Boaco',
				'code'       => 'BO'
			],
			[
				'id'         => 2366,
				'country_id' => 154,
				'name'       => 'Carazo',
				'code'       => 'CA'
			],
			[
				'id'         => 2367,
				'country_id' => 154,
				'name'       => 'Chinandega',
				'code'       => 'CI'
			],
			[
				'id'         => 2368,
				'country_id' => 154,
				'name'       => 'Chontales',
				'code'       => 'CO'
			],
			[
				'id'         => 2369,
				'country_id' => 154,
				'name'       => 'Esteli',
				'code'       => 'ES'
			],
			[
				'id'         => 2370,
				'country_id' => 154,
				'name'       => 'Granada',
				'code'       => 'GR'
			],
			[
				'id'         => 2371,
				'country_id' => 154,
				'name'       => 'Jinotega',
				'code'       => 'JI'
			],
			[
				'id'         => 2372,
				'country_id' => 154,
				'name'       => 'Leon',
				'code'       => 'LE'
			],
			[
				'id'         => 2373,
				'country_id' => 154,
				'name'       => 'Madriz',
				'code'       => 'MD'
			],
			[
				'id'         => 2374,
				'country_id' => 154,
				'name'       => 'Managua',
				'code'       => 'MN'
			],
			[
				'id'         => 2375,
				'country_id' => 154,
				'name'       => 'Masaya',
				'code'       => 'MS'
			],
			[
				'id'         => 2376,
				'country_id' => 154,
				'name'       => 'Matagalpa',
				'code'       => 'MT'
			],
			[
				'id'         => 2377,
				'country_id' => 154,
				'name'       => 'Nuevo Segovia',
				'code'       => 'NS'
			],
			[
				'id'         => 2378,
				'country_id' => 154,
				'name'       => 'Rio San Juan',
				'code'       => 'RS'
			],
			[
				'id'         => 2379,
				'country_id' => 154,
				'name'       => 'Rivas',
				'code'       => 'RI'
			],
			[
				'id'         => 2380,
				'country_id' => 155,
				'name'       => 'Agadez',
				'code'       => 'AG'
			],
			[
				'id'         => 2381,
				'country_id' => 155,
				'name'       => 'Diffa',
				'code'       => 'DF'
			],
			[
				'id'         => 2382,
				'country_id' => 155,
				'name'       => 'Dosso',
				'code'       => 'DS'
			],
			[
				'id'         => 2383,
				'country_id' => 155,
				'name'       => 'Maradi',
				'code'       => 'MA'
			],
			[
				'id'         => 2384,
				'country_id' => 155,
				'name'       => 'Niamey',
				'code'       => 'NM'
			],
			[
				'id'         => 2385,
				'country_id' => 155,
				'name'       => 'Tahoua',
				'code'       => 'TH'
			],
			[
				'id'         => 2386,
				'country_id' => 155,
				'name'       => 'Tillaberi',
				'code'       => 'TL'
			],
			[
				'id'         => 2387,
				'country_id' => 155,
				'name'       => 'Zinder',
				'code'       => 'ZD'
			],
			[
				'id'         => 2388,
				'country_id' => 156,
				'name'       => 'Abia',
				'code'       => 'AB'
			],
			[
				'id'         => 2389,
				'country_id' => 156,
				'name'       => 'Abuja Federal Capital Territory',
				'code'       => 'CT'
			],
			[
				'id'         => 2390,
				'country_id' => 156,
				'name'       => 'Adamawa',
				'code'       => 'AD'
			],
			[
				'id'         => 2391,
				'country_id' => 156,
				'name'       => 'Akwa Ibom',
				'code'       => 'AK'
			],
			[
				'id'         => 2392,
				'country_id' => 156,
				'name'       => 'Anambra',
				'code'       => 'AN'
			],
			[
				'id'         => 2393,
				'country_id' => 156,
				'name'       => 'Bauchi',
				'code'       => 'BC'
			],
			[
				'id'         => 2394,
				'country_id' => 156,
				'name'       => 'Bayelsa',
				'code'       => 'BY'
			],
			[
				'id'         => 2395,
				'country_id' => 156,
				'name'       => 'Benue',
				'code'       => 'BN'
			],
			[
				'id'         => 2396,
				'country_id' => 156,
				'name'       => 'Borno',
				'code'       => 'BO'
			],
			[
				'id'         => 2397,
				'country_id' => 156,
				'name'       => 'Cross River',
				'code'       => 'CR'
			],
			[
				'id'         => 2398,
				'country_id' => 156,
				'name'       => 'Delta',
				'code'       => 'DE'
			],
			[
				'id'         => 2399,
				'country_id' => 156,
				'name'       => 'Ebonyi',
				'code'       => 'EB'
			],
			[
				'id'         => 2400,
				'country_id' => 156,
				'name'       => 'Edo',
				'code'       => 'ED'
			],
			[
				'id'         => 2401,
				'country_id' => 156,
				'name'       => 'Ekiti',
				'code'       => 'EK'
			],
			[
				'id'         => 2402,
				'country_id' => 156,
				'name'       => 'Enugu',
				'code'       => 'EN'
			],
			[
				'id'         => 2403,
				'country_id' => 156,
				'name'       => 'Gombe',
				'code'       => 'GO'
			],
			[
				'id'         => 2404,
				'country_id' => 156,
				'name'       => 'Imo',
				'code'       => 'IM'
			],
			[
				'id'         => 2405,
				'country_id' => 156,
				'name'       => 'Jigawa',
				'code'       => 'JI'
			],
			[
				'id'         => 2406,
				'country_id' => 156,
				'name'       => 'Kaduna',
				'code'       => 'KD'
			],
			[
				'id'         => 2407,
				'country_id' => 156,
				'name'       => 'Kano',
				'code'       => 'KN'
			],
			[
				'id'         => 2408,
				'country_id' => 156,
				'name'       => 'Katsina',
				'code'       => 'KT'
			],
			[
				'id'         => 2409,
				'country_id' => 156,
				'name'       => 'Kebbi',
				'code'       => 'KE'
			],
			[
				'id'         => 2410,
				'country_id' => 156,
				'name'       => 'Kogi',
				'code'       => 'KO'
			],
			[
				'id'         => 2411,
				'country_id' => 156,
				'name'       => 'Kwara',
				'code'       => 'KW'
			],
			[
				'id'         => 2412,
				'country_id' => 156,
				'name'       => 'Lagos',
				'code'       => 'LA'
			],
			[
				'id'         => 2413,
				'country_id' => 156,
				'name'       => 'Nassarawa',
				'code'       => 'NA'
			],
			[
				'id'         => 2414,
				'country_id' => 156,
				'name'       => 'Niger',
				'code'       => 'NI'
			],
			[
				'id'         => 2415,
				'country_id' => 156,
				'name'       => 'Ogun',
				'code'       => 'OG'
			],
			[
				'id'         => 2416,
				'country_id' => 156,
				'name'       => 'Ondo',
				'code'       => 'ONG'
			],
			[
				'id'         => 2417,
				'country_id' => 156,
				'name'       => 'Osun',
				'code'       => 'OS'
			],
			[
				'id'         => 2418,
				'country_id' => 156,
				'name'       => 'Oyo',
				'code'       => 'OY'
			],
			[
				'id'         => 2419,
				'country_id' => 156,
				'name'       => 'Plateau',
				'code'       => 'PL'
			],
			[
				'id'         => 2420,
				'country_id' => 156,
				'name'       => 'Rivers',
				'code'       => 'RI'
			],
			[
				'id'         => 2421,
				'country_id' => 156,
				'name'       => 'Sokoto',
				'code'       => 'SO'
			],
			[
				'id'         => 2422,
				'country_id' => 156,
				'name'       => 'Taraba',
				'code'       => 'TA'
			],
			[
				'id'         => 2423,
				'country_id' => 156,
				'name'       => 'Yobe',
				'code'       => 'YO'
			],
			[
				'id'         => 2424,
				'country_id' => 156,
				'name'       => 'Zamfara',
				'code'       => 'ZA'
			],
			[
				'id'         => 2425,
				'country_id' => 159,
				'name'       => 'Northern Islands',
				'code'       => 'N'
			],
			[
				'id'         => 2426,
				'country_id' => 159,
				'name'       => 'Rota',
				'code'       => 'R'
			],
			[
				'id'         => 2427,
				'country_id' => 159,
				'name'       => 'Saipan',
				'code'       => 'S'
			],
			[
				'id'         => 2428,
				'country_id' => 159,
				'name'       => 'Tinian',
				'code'       => 'T'
			],
			[
				'id'         => 2429,
				'country_id' => 160,
				'name'       => 'Akershus',
				'code'       => 'AK'
			],
			[
				'id'         => 2430,
				'country_id' => 160,
				'name'       => 'Aust-Agder',
				'code'       => 'AA'
			],
			[
				'id'         => 2431,
				'country_id' => 160,
				'name'       => 'Buskerud',
				'code'       => 'BU'
			],
			[
				'id'         => 2432,
				'country_id' => 160,
				'name'       => 'Finnmark',
				'code'       => 'FM'
			],
			[
				'id'         => 2433,
				'country_id' => 160,
				'name'       => 'Hedmark',
				'code'       => 'HM'
			],
			[
				'id'         => 2434,
				'country_id' => 160,
				'name'       => 'Hordaland',
				'code'       => 'HL'
			],
			[
				'id'         => 2435,
				'country_id' => 160,
				'name'       => 'More og Romdal',
				'code'       => 'MR'
			],
			[
				'id'         => 2436,
				'country_id' => 160,
				'name'       => 'Nord-Trondelag',
				'code'       => 'NT'
			],
			[
				'id'         => 2437,
				'country_id' => 160,
				'name'       => 'Nordland',
				'code'       => 'NL'
			],
			[
				'id'         => 2438,
				'country_id' => 160,
				'name'       => 'Ostfold',
				'code'       => 'OF'
			],
			[
				'id'         => 2439,
				'country_id' => 160,
				'name'       => 'Oppland',
				'code'       => 'OP'
			],
			[
				'id'         => 2440,
				'country_id' => 160,
				'name'       => 'Oslo',
				'code'       => 'OL'
			],
			[
				'id'         => 2441,
				'country_id' => 160,
				'name'       => 'Rogaland',
				'code'       => 'RL'
			],
			[
				'id'         => 2442,
				'country_id' => 160,
				'name'       => 'Sor-Trondelag',
				'code'       => 'ST'
			],
			[
				'id'         => 2443,
				'country_id' => 160,
				'name'       => 'Sogn og Fjordane',
				'code'       => 'SJ'
			],
			[
				'id'         => 2444,
				'country_id' => 160,
				'name'       => 'Svalbard',
				'code'       => 'SV'
			],
			[
				'id'         => 2445,
				'country_id' => 160,
				'name'       => 'Telemark',
				'code'       => 'TM'
			],
			[
				'id'         => 2446,
				'country_id' => 160,
				'name'       => 'Troms',
				'code'       => 'TR'
			],
			[
				'id'         => 2447,
				'country_id' => 160,
				'name'       => 'Vest-Agder',
				'code'       => 'VA'
			],
			[
				'id'         => 2448,
				'country_id' => 160,
				'name'       => 'Vestfold',
				'code'       => 'VF'
			],
			[
				'id'         => 2449,
				'country_id' => 161,
				'name'       => 'Ad Dakhiliyah',
				'code'       => 'DA'
			],
			[
				'id'         => 2450,
				'country_id' => 161,
				'name'       => 'Al Batinah',
				'code'       => 'BA'
			],
			[
				'id'         => 2451,
				'country_id' => 161,
				'name'       => 'Al Wusta',
				'code'       => 'WU'
			],
			[
				'id'         => 2452,
				'country_id' => 161,
				'name'       => 'Ash Sharqiyah',
				'code'       => 'SH'
			],
			[
				'id'         => 2453,
				'country_id' => 161,
				'name'       => 'Az Zahirah',
				'code'       => 'ZA'
			],
			[
				'id'         => 2454,
				'country_id' => 161,
				'name'       => 'Masqat',
				'code'       => 'MA'
			],
			[
				'id'         => 2455,
				'country_id' => 161,
				'name'       => 'Musandam',
				'code'       => 'MU'
			],
			[
				'id'         => 2456,
				'country_id' => 161,
				'name'       => 'Zufar',
				'code'       => 'ZU'
			],
			[
				'id'         => 2457,
				'country_id' => 162,
				'name'       => 'Balochistan',
				'code'       => 'B'
			],
			[
				'id'         => 2458,
				'country_id' => 162,
				'name'       => 'Federally Administered Tribal Areas',
				'code'       => 'T'
			],
			[
				'id'         => 2459,
				'country_id' => 162,
				'name'       => 'Islamabad Capital Territory',
				'code'       => 'I'
			],
			[
				'id'         => 2460,
				'country_id' => 162,
				'name'       => 'North-West Frontier',
				'code'       => 'N'
			],
			[
				'id'         => 2461,
				'country_id' => 162,
				'name'       => 'Punjab',
				'code'       => 'P'
			],
			[
				'id'         => 2462,
				'country_id' => 162,
				'name'       => 'Sindh',
				'code'       => 'S'
			],
			[
				'id'         => 2463,
				'country_id' => 163,
				'name'       => 'Aimeliik',
				'code'       => 'AM'
			],
			[
				'id'         => 2464,
				'country_id' => 163,
				'name'       => 'Airai',
				'code'       => 'AR'
			],
			[
				'id'         => 2465,
				'country_id' => 163,
				'name'       => 'Angaur',
				'code'       => 'AN'
			],
			[
				'id'         => 2466,
				'country_id' => 163,
				'name'       => 'Hatohobei',
				'code'       => 'HA'
			],
			[
				'id'         => 2467,
				'country_id' => 163,
				'name'       => 'Kayangel',
				'code'       => 'KA'
			],
			[
				'id'         => 2468,
				'country_id' => 163,
				'name'       => 'Koror',
				'code'       => 'KO'
			],
			[
				'id'         => 2469,
				'country_id' => 163,
				'name'       => 'Melekeok',
				'code'       => 'ME'
			],
			[
				'id'         => 2470,
				'country_id' => 163,
				'name'       => 'Ngaraard',
				'code'       => 'NA'
			],
			[
				'id'         => 2471,
				'country_id' => 163,
				'name'       => 'Ngarchelong',
				'code'       => 'NG'
			],
			[
				'id'         => 2472,
				'country_id' => 163,
				'name'       => 'Ngardmau',
				'code'       => 'ND'
			],
			[
				'id'         => 2473,
				'country_id' => 163,
				'name'       => 'Ngatpang',
				'code'       => 'NT'
			],
			[
				'id'         => 2474,
				'country_id' => 163,
				'name'       => 'Ngchesar',
				'code'       => 'NC'
			],
			[
				'id'         => 2475,
				'country_id' => 163,
				'name'       => 'Ngeremlengui',
				'code'       => 'NR'
			],
			[
				'id'         => 2476,
				'country_id' => 163,
				'name'       => 'Ngiwal',
				'code'       => 'NW'
			],
			[
				'id'         => 2477,
				'country_id' => 163,
				'name'       => 'Peleliu',
				'code'       => 'PE'
			],
			[
				'id'         => 2478,
				'country_id' => 163,
				'name'       => 'Sonsorol',
				'code'       => 'SO'
			],
			[
				'id'         => 2479,
				'country_id' => 164,
				'name'       => 'Bocas del Toro',
				'code'       => 'BT'
			],
			[
				'id'         => 2480,
				'country_id' => 164,
				'name'       => 'Chiriqui',
				'code'       => 'CH'
			],
			[
				'id'         => 2481,
				'country_id' => 164,
				'name'       => 'Cocle',
				'code'       => 'CC'
			],
			[
				'id'         => 2482,
				'country_id' => 164,
				'name'       => 'Colon',
				'code'       => 'CL'
			],
			[
				'id'         => 2483,
				'country_id' => 164,
				'name'       => 'Darien',
				'code'       => 'DA'
			],
			[
				'id'         => 2484,
				'country_id' => 164,
				'name'       => 'Herrera',
				'code'       => 'HE'
			],
			[
				'id'         => 2485,
				'country_id' => 164,
				'name'       => 'Los Santos',
				'code'       => 'LS'
			],
			[
				'id'         => 2486,
				'country_id' => 164,
				'name'       => 'Panama',
				'code'       => 'PA'
			],
			[
				'id'         => 2487,
				'country_id' => 164,
				'name'       => 'San Blas',
				'code'       => 'SB'
			],
			[
				'id'         => 2488,
				'country_id' => 164,
				'name'       => 'Veraguas',
				'code'       => 'VG'
			],
			[
				'id'         => 2489,
				'country_id' => 165,
				'name'       => 'Bougainville',
				'code'       => 'BV'
			],
			[
				'id'         => 2490,
				'country_id' => 165,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 2491,
				'country_id' => 165,
				'name'       => 'Chimbu',
				'code'       => 'CH'
			],
			[
				'id'         => 2492,
				'country_id' => 165,
				'name'       => 'Eastern Highlands',
				'code'       => 'EH'
			],
			[
				'id'         => 2493,
				'country_id' => 165,
				'name'       => 'East New Britain',
				'code'       => 'EB'
			],
			[
				'id'         => 2494,
				'country_id' => 165,
				'name'       => 'East Sepik',
				'code'       => 'ES'
			],
			[
				'id'         => 2495,
				'country_id' => 165,
				'name'       => 'Enga',
				'code'       => 'EN'
			],
			[
				'id'         => 2496,
				'country_id' => 165,
				'name'       => 'Gulf',
				'code'       => 'GU'
			],
			[
				'id'         => 2497,
				'country_id' => 165,
				'name'       => 'Madang',
				'code'       => 'MD'
			],
			[
				'id'         => 2498,
				'country_id' => 165,
				'name'       => 'Manus',
				'code'       => 'MN'
			],
			[
				'id'         => 2499,
				'country_id' => 165,
				'name'       => 'Milne Bay',
				'code'       => 'MB'
			],
			[
				'id'         => 2500,
				'country_id' => 165,
				'name'       => 'Morobe',
				'code'       => 'MR'
			],
			[
				'id'         => 2501,
				'country_id' => 165,
				'name'       => 'National Capital',
				'code'       => 'NC'
			],
			[
				'id'         => 2502,
				'country_id' => 165,
				'name'       => 'New Ireland',
				'code'       => 'NI'
			],
			[
				'id'         => 2503,
				'country_id' => 165,
				'name'       => 'Northern',
				'code'       => 'NO'
			],
			[
				'id'         => 2504,
				'country_id' => 165,
				'name'       => 'Sandaun',
				'code'       => 'SA'
			],
			[
				'id'         => 2505,
				'country_id' => 165,
				'name'       => 'Southern Highlands',
				'code'       => 'SH'
			],
			[
				'id'         => 2506,
				'country_id' => 165,
				'name'       => 'Western',
				'code'       => 'WE'
			],
			[
				'id'         => 2507,
				'country_id' => 165,
				'name'       => 'Western Highlands',
				'code'       => 'WH'
			],
			[
				'id'         => 2508,
				'country_id' => 165,
				'name'       => 'West New Britain',
				'code'       => 'WB'
			],
			[
				'id'         => 2509,
				'country_id' => 166,
				'name'       => 'Alto Paraguay',
				'code'       => 'AG'
			],
			[
				'id'         => 2510,
				'country_id' => 166,
				'name'       => 'Alto Parana',
				'code'       => 'AN'
			],
			[
				'id'         => 2511,
				'country_id' => 166,
				'name'       => 'Amambay',
				'code'       => 'AM'
			],
			[
				'id'         => 2512,
				'country_id' => 166,
				'name'       => 'Asuncion',
				'code'       => 'AS'
			],
			[
				'id'         => 2513,
				'country_id' => 166,
				'name'       => 'Boqueron',
				'code'       => 'BO'
			],
			[
				'id'         => 2514,
				'country_id' => 166,
				'name'       => 'Caaguazu',
				'code'       => 'CG'
			],
			[
				'id'         => 2515,
				'country_id' => 166,
				'name'       => 'Caazapa',
				'code'       => 'CZ'
			],
			[
				'id'         => 2516,
				'country_id' => 166,
				'name'       => 'Canindeyu',
				'code'       => 'CN'
			],
			[
				'id'         => 2517,
				'country_id' => 166,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 2518,
				'country_id' => 166,
				'name'       => 'Concepcion',
				'code'       => 'CC'
			],
			[
				'id'         => 2519,
				'country_id' => 166,
				'name'       => 'Cordillera',
				'code'       => 'CD'
			],
			[
				'id'         => 2520,
				'country_id' => 166,
				'name'       => 'Guaira',
				'code'       => 'GU'
			],
			[
				'id'         => 2521,
				'country_id' => 166,
				'name'       => 'Itapua',
				'code'       => 'IT'
			],
			[
				'id'         => 2522,
				'country_id' => 166,
				'name'       => 'Misiones',
				'code'       => 'MI'
			],
			[
				'id'         => 2523,
				'country_id' => 166,
				'name'       => 'Neembucu',
				'code'       => 'NE'
			],
			[
				'id'         => 2524,
				'country_id' => 166,
				'name'       => 'Paraguari',
				'code'       => 'PA'
			],
			[
				'id'         => 2525,
				'country_id' => 166,
				'name'       => 'Presidente Hayes',
				'code'       => 'PH'
			],
			[
				'id'         => 2526,
				'country_id' => 166,
				'name'       => 'San Pedro',
				'code'       => 'SP'
			],
			[
				'id'         => 2527,
				'country_id' => 167,
				'name'       => 'Amazonas',
				'code'       => 'AM'
			],
			[
				'id'         => 2528,
				'country_id' => 167,
				'name'       => 'Ancash',
				'code'       => 'AN'
			],
			[
				'id'         => 2529,
				'country_id' => 167,
				'name'       => 'Apurimac',
				'code'       => 'AP'
			],
			[
				'id'         => 2530,
				'country_id' => 167,
				'name'       => 'Arequipa',
				'code'       => 'AR'
			],
			[
				'id'         => 2531,
				'country_id' => 167,
				'name'       => 'Ayacucho',
				'code'       => 'AY'
			],
			[
				'id'         => 2532,
				'country_id' => 167,
				'name'       => 'Cajamarca',
				'code'       => 'CJ'
			],
			[
				'id'         => 2533,
				'country_id' => 167,
				'name'       => 'Callao',
				'code'       => 'CL'
			],
			[
				'id'         => 2534,
				'country_id' => 167,
				'name'       => 'Cusco',
				'code'       => 'CU'
			],
			[
				'id'         => 2535,
				'country_id' => 167,
				'name'       => 'Huancavelica',
				'code'       => 'HV'
			],
			[
				'id'         => 2536,
				'country_id' => 167,
				'name'       => 'Huanuco',
				'code'       => 'HO'
			],
			[
				'id'         => 2537,
				'country_id' => 167,
				'name'       => 'Ica',
				'code'       => 'IC'
			],
			[
				'id'         => 2538,
				'country_id' => 167,
				'name'       => 'Junin',
				'code'       => 'JU'
			],
			[
				'id'         => 2539,
				'country_id' => 167,
				'name'       => 'La Libertad',
				'code'       => 'LD'
			],
			[
				'id'         => 2540,
				'country_id' => 167,
				'name'       => 'Lambayeque',
				'code'       => 'LY'
			],
			[
				'id'         => 2541,
				'country_id' => 167,
				'name'       => 'Lima',
				'code'       => 'LI'
			],
			[
				'id'         => 2542,
				'country_id' => 167,
				'name'       => 'Loreto',
				'code'       => 'LO'
			],
			[
				'id'         => 2543,
				'country_id' => 167,
				'name'       => 'Madre de Dios',
				'code'       => 'MD'
			],
			[
				'id'         => 2544,
				'country_id' => 167,
				'name'       => 'Moquegua',
				'code'       => 'MO'
			],
			[
				'id'         => 2545,
				'country_id' => 167,
				'name'       => 'Pasco',
				'code'       => 'PA'
			],
			[
				'id'         => 2546,
				'country_id' => 167,
				'name'       => 'Piura',
				'code'       => 'PI'
			],
			[
				'id'         => 2547,
				'country_id' => 167,
				'name'       => 'Puno',
				'code'       => 'PU'
			],
			[
				'id'         => 2548,
				'country_id' => 167,
				'name'       => 'San Martin',
				'code'       => 'SM'
			],
			[
				'id'         => 2549,
				'country_id' => 167,
				'name'       => 'Tacna',
				'code'       => 'TA'
			],
			[
				'id'         => 2550,
				'country_id' => 167,
				'name'       => 'Tumbes',
				'code'       => 'TU'
			],
			[
				'id'         => 2551,
				'country_id' => 167,
				'name'       => 'Ucayali',
				'code'       => 'UC'
			],
			[
				'id'         => 2552,
				'country_id' => 168,
				'name'       => 'Abra',
				'code'       => 'ABR'
			],
			[
				'id'         => 2553,
				'country_id' => 168,
				'name'       => 'Agusan del Norte',
				'code'       => 'ANO'
			],
			[
				'id'         => 2554,
				'country_id' => 168,
				'name'       => 'Agusan del Sur',
				'code'       => 'ASU'
			],
			[
				'id'         => 2555,
				'country_id' => 168,
				'name'       => 'Aklan',
				'code'       => 'AKL'
			],
			[
				'id'         => 2556,
				'country_id' => 168,
				'name'       => 'Albay',
				'code'       => 'ALB'
			],
			[
				'id'         => 2557,
				'country_id' => 168,
				'name'       => 'Antique',
				'code'       => 'ANT'
			],
			[
				'id'         => 2558,
				'country_id' => 168,
				'name'       => 'Apayao',
				'code'       => 'APY'
			],
			[
				'id'         => 2559,
				'country_id' => 168,
				'name'       => 'Aurora',
				'code'       => 'AUR'
			],
			[
				'id'         => 2560,
				'country_id' => 168,
				'name'       => 'Basilan',
				'code'       => 'BAS'
			],
			[
				'id'         => 2561,
				'country_id' => 168,
				'name'       => 'Bataan',
				'code'       => 'BTA'
			],
			[
				'id'         => 2562,
				'country_id' => 168,
				'name'       => 'Batanes',
				'code'       => 'BTE'
			],
			[
				'id'         => 2563,
				'country_id' => 168,
				'name'       => 'Batangas',
				'code'       => 'BTG'
			],
			[
				'id'         => 2564,
				'country_id' => 168,
				'name'       => 'Biliran',
				'code'       => 'BLR'
			],
			[
				'id'         => 2565,
				'country_id' => 168,
				'name'       => 'Benguet',
				'code'       => 'BEN'
			],
			[
				'id'         => 2566,
				'country_id' => 168,
				'name'       => 'Bohol',
				'code'       => 'BOL'
			],
			[
				'id'         => 2567,
				'country_id' => 168,
				'name'       => 'Bukidnon',
				'code'       => 'BUK'
			],
			[
				'id'         => 2568,
				'country_id' => 168,
				'name'       => 'Bulacan',
				'code'       => 'BUL'
			],
			[
				'id'         => 2569,
				'country_id' => 168,
				'name'       => 'Cagayan',
				'code'       => 'CAG'
			],
			[
				'id'         => 2570,
				'country_id' => 168,
				'name'       => 'Camarines Norte',
				'code'       => 'CNO'
			],
			[
				'id'         => 2571,
				'country_id' => 168,
				'name'       => 'Camarines Sur',
				'code'       => 'CSU'
			],
			[
				'id'         => 2572,
				'country_id' => 168,
				'name'       => 'Camiguin',
				'code'       => 'CAM'
			],
			[
				'id'         => 2573,
				'country_id' => 168,
				'name'       => 'Capiz',
				'code'       => 'CAP'
			],
			[
				'id'         => 2574,
				'country_id' => 168,
				'name'       => 'Catanduanes',
				'code'       => 'CAT'
			],
			[
				'id'         => 2575,
				'country_id' => 168,
				'name'       => 'Cavite',
				'code'       => 'CAV'
			],
			[
				'id'         => 2576,
				'country_id' => 168,
				'name'       => 'Cebu',
				'code'       => 'CEB'
			],
			[
				'id'         => 2577,
				'country_id' => 168,
				'name'       => 'Compostela',
				'code'       => 'CMP'
			],
			[
				'id'         => 2578,
				'country_id' => 168,
				'name'       => 'Davao del Norte',
				'code'       => 'DNO'
			],
			[
				'id'         => 2579,
				'country_id' => 168,
				'name'       => 'Davao del Sur',
				'code'       => 'DSU'
			],
			[
				'id'         => 2580,
				'country_id' => 168,
				'name'       => 'Davao Oriental',
				'code'       => 'DOR'
			],
			[
				'id'         => 2581,
				'country_id' => 168,
				'name'       => 'Eastern Samar',
				'code'       => 'ESA'
			],
			[
				'id'         => 2582,
				'country_id' => 168,
				'name'       => 'Guimaras',
				'code'       => 'GUI'
			],
			[
				'id'         => 2583,
				'country_id' => 168,
				'name'       => 'Ifugao',
				'code'       => 'IFU'
			],
			[
				'id'         => 2584,
				'country_id' => 168,
				'name'       => 'Ilocos Norte',
				'code'       => 'INO'
			],
			[
				'id'         => 2585,
				'country_id' => 168,
				'name'       => 'Ilocos Sur',
				'code'       => 'ISU'
			],
			[
				'id'         => 2586,
				'country_id' => 168,
				'name'       => 'Iloilo',
				'code'       => 'ILO'
			],
			[
				'id'         => 2587,
				'country_id' => 168,
				'name'       => 'Isabela',
				'code'       => 'ISA'
			],
			[
				'id'         => 2588,
				'country_id' => 168,
				'name'       => 'Kalinga',
				'code'       => 'KAL'
			],
			[
				'id'         => 2589,
				'country_id' => 168,
				'name'       => 'Laguna',
				'code'       => 'LAG'
			],
			[
				'id'         => 2590,
				'country_id' => 168,
				'name'       => 'Lanao del Norte',
				'code'       => 'LNO'
			],
			[
				'id'         => 2591,
				'country_id' => 168,
				'name'       => 'Lanao del Sur',
				'code'       => 'LSU'
			],
			[
				'id'         => 2592,
				'country_id' => 168,
				'name'       => 'La Union',
				'code'       => 'UNI'
			],
			[
				'id'         => 2593,
				'country_id' => 168,
				'name'       => 'Leyte',
				'code'       => 'LEY'
			],
			[
				'id'         => 2594,
				'country_id' => 168,
				'name'       => 'Maguindanao',
				'code'       => 'MAG'
			],
			[
				'id'         => 2595,
				'country_id' => 168,
				'name'       => 'Marinduque',
				'code'       => 'MRN'
			],
			[
				'id'         => 2596,
				'country_id' => 168,
				'name'       => 'Masbate',
				'code'       => 'MSB'
			],
			[
				'id'         => 2597,
				'country_id' => 168,
				'name'       => 'Mindoro Occidental',
				'code'       => 'MIC'
			],
			[
				'id'         => 2598,
				'country_id' => 168,
				'name'       => 'Mindoro Oriental',
				'code'       => 'MIR'
			],
			[
				'id'         => 2599,
				'country_id' => 168,
				'name'       => 'Misamis Occidental',
				'code'       => 'MSC'
			],
			[
				'id'         => 2600,
				'country_id' => 168,
				'name'       => 'Misamis Oriental',
				'code'       => 'MOR'
			],
			[
				'id'         => 2601,
				'country_id' => 168,
				'name'       => 'Mountain',
				'code'       => 'MOP'
			],
			[
				'id'         => 2602,
				'country_id' => 168,
				'name'       => 'Negros Occidental',
				'code'       => 'NOC'
			],
			[
				'id'         => 2603,
				'country_id' => 168,
				'name'       => 'Negros Oriental',
				'code'       => 'NOR'
			],
			[
				'id'         => 2604,
				'country_id' => 168,
				'name'       => 'North Cotabato',
				'code'       => 'NCT'
			],
			[
				'id'         => 2605,
				'country_id' => 168,
				'name'       => 'Northern Samar',
				'code'       => 'NSM'
			],
			[
				'id'         => 2606,
				'country_id' => 168,
				'name'       => 'Nueva Ecija',
				'code'       => 'NEC'
			],
			[
				'id'         => 2607,
				'country_id' => 168,
				'name'       => 'Nueva Vizcaya',
				'code'       => 'NVZ'
			],
			[
				'id'         => 2608,
				'country_id' => 168,
				'name'       => 'Palawan',
				'code'       => 'PLW'
			],
			[
				'id'         => 2609,
				'country_id' => 168,
				'name'       => 'Pampanga',
				'code'       => 'PMP'
			],
			[
				'id'         => 2610,
				'country_id' => 168,
				'name'       => 'Pangasinan',
				'code'       => 'PNG'
			],
			[
				'id'         => 2611,
				'country_id' => 168,
				'name'       => 'Quezon',
				'code'       => 'QZN'
			],
			[
				'id'         => 2612,
				'country_id' => 168,
				'name'       => 'Quirino',
				'code'       => 'QRN'
			],
			[
				'id'         => 2613,
				'country_id' => 168,
				'name'       => 'Rizal',
				'code'       => 'RIZ'
			],
			[
				'id'         => 2614,
				'country_id' => 168,
				'name'       => 'Romblon',
				'code'       => 'ROM'
			],
			[
				'id'         => 2615,
				'country_id' => 168,
				'name'       => 'Samar',
				'code'       => 'SMR'
			],
			[
				'id'         => 2616,
				'country_id' => 168,
				'name'       => 'Sarangani',
				'code'       => 'SRG'
			],
			[
				'id'         => 2617,
				'country_id' => 168,
				'name'       => 'Siquijor',
				'code'       => 'SQJ'
			],
			[
				'id'         => 2618,
				'country_id' => 168,
				'name'       => 'Sorsogon',
				'code'       => 'SRS'
			],
			[
				'id'         => 2619,
				'country_id' => 168,
				'name'       => 'South Cotabato',
				'code'       => 'SCO'
			],
			[
				'id'         => 2620,
				'country_id' => 168,
				'name'       => 'Southern Leyte',
				'code'       => 'SLE'
			],
			[
				'id'         => 2621,
				'country_id' => 168,
				'name'       => 'Sultan Kudarat',
				'code'       => 'SKU'
			],
			[
				'id'         => 2622,
				'country_id' => 168,
				'name'       => 'Sulu',
				'code'       => 'SLU'
			],
			[
				'id'         => 2623,
				'country_id' => 168,
				'name'       => 'Surigao del Norte',
				'code'       => 'SNO'
			],
			[
				'id'         => 2624,
				'country_id' => 168,
				'name'       => 'Surigao del Sur',
				'code'       => 'SSU'
			],
			[
				'id'         => 2625,
				'country_id' => 168,
				'name'       => 'Tarlac',
				'code'       => 'TAR'
			],
			[
				'id'         => 2626,
				'country_id' => 168,
				'name'       => 'Tawi-Tawi',
				'code'       => 'TAW'
			],
			[
				'id'         => 2627,
				'country_id' => 168,
				'name'       => 'Zambales',
				'code'       => 'ZBL'
			],
			[
				'id'         => 2628,
				'country_id' => 168,
				'name'       => 'Zamboanga del Norte',
				'code'       => 'ZNO'
			],
			[
				'id'         => 2629,
				'country_id' => 168,
				'name'       => 'Zamboanga del Sur',
				'code'       => 'ZSU'
			],
			[
				'id'         => 2630,
				'country_id' => 168,
				'name'       => 'Zamboanga Sibugay',
				'code'       => 'ZSI'
			],
			[
				'id'         => 2631,
				'country_id' => 170,
				'name'       => 'Dolnoslaskie',
				'code'       => 'DO'
			],
			[
				'id'         => 2632,
				'country_id' => 170,
				'name'       => 'Kujawsko-Pomorskie',
				'code'       => 'KP'
			],
			[
				'id'         => 2633,
				'country_id' => 170,
				'name'       => 'Lodzkie',
				'code'       => 'LO'
			],
			[
				'id'         => 2634,
				'country_id' => 170,
				'name'       => 'Lubelskie',
				'code'       => 'LL'
			],
			[
				'id'         => 2635,
				'country_id' => 170,
				'name'       => 'Lubuskie',
				'code'       => 'LU'
			],
			[
				'id'         => 2636,
				'country_id' => 170,
				'name'       => 'Malopolskie',
				'code'       => 'ML'
			],
			[
				'id'         => 2637,
				'country_id' => 170,
				'name'       => 'Mazowieckie',
				'code'       => 'MZ'
			],
			[
				'id'         => 2638,
				'country_id' => 170,
				'name'       => 'Opolskie',
				'code'       => 'OP'
			],
			[
				'id'         => 2639,
				'country_id' => 170,
				'name'       => 'Podkarpackie',
				'code'       => 'PP'
			],
			[
				'id'         => 2640,
				'country_id' => 170,
				'name'       => 'Podlaskie',
				'code'       => 'PL'
			],
			[
				'id'         => 2641,
				'country_id' => 170,
				'name'       => 'Pomorskie',
				'code'       => 'PM'
			],
			[
				'id'         => 2642,
				'country_id' => 170,
				'name'       => 'Slaskie',
				'code'       => 'SL'
			],
			[
				'id'         => 2643,
				'country_id' => 170,
				'name'       => 'Swietokrzyskie',
				'code'       => 'SW'
			],
			[
				'id'         => 2644,
				'country_id' => 170,
				'name'       => 'Warminsko-Mazurskie',
				'code'       => 'WM'
			],
			[
				'id'         => 2645,
				'country_id' => 170,
				'name'       => 'Wielkopolskie',
				'code'       => 'WP'
			],
			[
				'id'         => 2646,
				'country_id' => 170,
				'name'       => 'Zachodniopomorskie',
				'code'       => 'ZA'
			],
			[
				'id'         => 2647,
				'country_id' => 198,
				'name'       => 'Saint Pierre',
				'code'       => 'P'
			],
			[
				'id'         => 2648,
				'country_id' => 198,
				'name'       => 'Miquelon',
				'code'       => 'M'
			],
			[
				'id'         => 2649,
				'country_id' => 171,
				'name'       => 'Açores',
				'code'       => 'AC'
			],
			[
				'id'         => 2650,
				'country_id' => 171,
				'name'       => 'Aveiro',
				'code'       => 'AV'
			],
			[
				'id'         => 2651,
				'country_id' => 171,
				'name'       => 'Beja',
				'code'       => 'BE'
			],
			[
				'id'         => 2652,
				'country_id' => 171,
				'name'       => 'Braga',
				'code'       => 'BR'
			],
			[
				'id'         => 2653,
				'country_id' => 171,
				'name'       => 'Bragança',
				'code'       => 'BA'
			],
			[
				'id'         => 2654,
				'country_id' => 171,
				'name'       => 'Castelo Branco',
				'code'       => 'CB'
			],
			[
				'id'         => 2655,
				'country_id' => 171,
				'name'       => 'Coimbra',
				'code'       => 'CO'
			],
			[
				'id'         => 2656,
				'country_id' => 171,
				'name'       => 'Évora',
				'code'       => 'EV'
			],
			[
				'id'         => 2657,
				'country_id' => 171,
				'name'       => 'Faro',
				'code'       => 'FA'
			],
			[
				'id'         => 2658,
				'country_id' => 171,
				'name'       => 'Guarda',
				'code'       => 'GU'
			],
			[
				'id'         => 2659,
				'country_id' => 171,
				'name'       => 'Leiria',
				'code'       => 'LE'
			],
			[
				'id'         => 2660,
				'country_id' => 171,
				'name'       => 'Lisboa',
				'code'       => 'LI'
			],
			[
				'id'         => 2661,
				'country_id' => 171,
				'name'       => 'Madeira',
				'code'       => 'ME'
			],
			[
				'id'         => 2662,
				'country_id' => 171,
				'name'       => 'Portalegre',
				'code'       => 'PO'
			],
			[
				'id'         => 2663,
				'country_id' => 171,
				'name'       => 'Porto',
				'code'       => 'PR'
			],
			[
				'id'         => 2664,
				'country_id' => 171,
				'name'       => 'Santarém',
				'code'       => 'SA'
			],
			[
				'id'         => 2665,
				'country_id' => 171,
				'name'       => 'Setùbal',
				'code'       => 'SE'
			],
			[
				'id'         => 2666,
				'country_id' => 171,
				'name'       => 'Viana do Castelo',
				'code'       => 'VC'
			],
			[
				'id'         => 2667,
				'country_id' => 171,
				'name'       => 'Vila Real',
				'code'       => 'VR'
			],
			[
				'id'         => 2668,
				'country_id' => 171,
				'name'       => 'Viseu',
				'code'       => 'VI'
			],
			[
				'id'         => 2669,
				'country_id' => 173,
				'name'       => 'Ad Dawhah',
				'code'       => 'DW'
			],
			[
				'id'         => 2670,
				'country_id' => 173,
				'name'       => 'Al Ghuwayriyah',
				'code'       => 'GW'
			],
			[
				'id'         => 2671,
				'country_id' => 173,
				'name'       => 'Al Jumayliyah',
				'code'       => 'JM'
			],
			[
				'id'         => 2672,
				'country_id' => 173,
				'name'       => 'Al Khawr',
				'code'       => 'KR'
			],
			[
				'id'         => 2673,
				'country_id' => 173,
				'name'       => 'Al Wakrah',
				'code'       => 'WK'
			],
			[
				'id'         => 2674,
				'country_id' => 173,
				'name'       => 'Ar Rayyan',
				'code'       => 'RN'
			],
			[
				'id'         => 2675,
				'country_id' => 173,
				'name'       => 'Jarayan al Batinah',
				'code'       => 'JB'
			],
			[
				'id'         => 2676,
				'country_id' => 173,
				'name'       => 'Madinat ash Shamal',
				'code'       => 'MS'
			],
			[
				'id'         => 2677,
				'country_id' => 173,
				'name'       => 'Umm Sa\'id',
				'code'       => 'UD'
			],
			[
				'id'         => 2678,
				'country_id' => 173,
				'name'       => 'Umm Salal',
				'code'       => 'UL'
			],
			[
				'id'         => 2679,
				'country_id' => 175,
				'name'       => 'Alba',
				'code'       => 'AB'
			],
			[
				'id'         => 2680,
				'country_id' => 175,
				'name'       => 'Arad',
				'code'       => 'AR'
			],
			[
				'id'         => 2681,
				'country_id' => 175,
				'name'       => 'Arges',
				'code'       => 'AG'
			],
			[
				'id'         => 2682,
				'country_id' => 175,
				'name'       => 'Bacau',
				'code'       => 'BC'
			],
			[
				'id'         => 2683,
				'country_id' => 175,
				'name'       => 'Bihor',
				'code'       => 'BH'
			],
			[
				'id'         => 2684,
				'country_id' => 175,
				'name'       => 'Bistrita-Nasaud',
				'code'       => 'BN'
			],
			[
				'id'         => 2685,
				'country_id' => 175,
				'name'       => 'Botosani',
				'code'       => 'BT'
			],
			[
				'id'         => 2686,
				'country_id' => 175,
				'name'       => 'Brasov',
				'code'       => 'BV'
			],
			[
				'id'         => 2687,
				'country_id' => 175,
				'name'       => 'Braila',
				'code'       => 'BR'
			],
			[
				'id'         => 2688,
				'country_id' => 175,
				'name'       => 'Bucuresti',
				'code'       => 'B'
			],
			[
				'id'         => 2689,
				'country_id' => 175,
				'name'       => 'Buzau',
				'code'       => 'BZ'
			],
			[
				'id'         => 2690,
				'country_id' => 175,
				'name'       => 'Caras-Severin',
				'code'       => 'CS'
			],
			[
				'id'         => 2691,
				'country_id' => 175,
				'name'       => 'Calarasi',
				'code'       => 'CL'
			],
			[
				'id'         => 2692,
				'country_id' => 175,
				'name'       => 'Cluj',
				'code'       => 'CJ'
			],
			[
				'id'         => 2693,
				'country_id' => 175,
				'name'       => 'Constanta',
				'code'       => 'CT'
			],
			[
				'id'         => 2694,
				'country_id' => 175,
				'name'       => 'Covasna',
				'code'       => 'CV'
			],
			[
				'id'         => 2695,
				'country_id' => 175,
				'name'       => 'Dimbovita',
				'code'       => 'DB'
			],
			[
				'id'         => 2696,
				'country_id' => 175,
				'name'       => 'Dolj',
				'code'       => 'DJ'
			],
			[
				'id'         => 2697,
				'country_id' => 175,
				'name'       => 'Galati',
				'code'       => 'GL'
			],
			[
				'id'         => 2698,
				'country_id' => 175,
				'name'       => 'Giurgiu',
				'code'       => 'GR'
			],
			[
				'id'         => 2699,
				'country_id' => 175,
				'name'       => 'Gorj',
				'code'       => 'GJ'
			],
			[
				'id'         => 2700,
				'country_id' => 175,
				'name'       => 'Harghita',
				'code'       => 'HR'
			],
			[
				'id'         => 2701,
				'country_id' => 175,
				'name'       => 'Hunedoara',
				'code'       => 'HD'
			],
			[
				'id'         => 2702,
				'country_id' => 175,
				'name'       => 'Ialomita',
				'code'       => 'IL'
			],
			[
				'id'         => 2703,
				'country_id' => 175,
				'name'       => 'Iasi',
				'code'       => 'IS'
			],
			[
				'id'         => 2704,
				'country_id' => 175,
				'name'       => 'Ilfov',
				'code'       => 'IF'
			],
			[
				'id'         => 2705,
				'country_id' => 175,
				'name'       => 'Maramures',
				'code'       => 'MM'
			],
			[
				'id'         => 2706,
				'country_id' => 175,
				'name'       => 'Mehedinti',
				'code'       => 'MH'
			],
			[
				'id'         => 2707,
				'country_id' => 175,
				'name'       => 'Mures',
				'code'       => 'MS'
			],
			[
				'id'         => 2708,
				'country_id' => 175,
				'name'       => 'Neamt',
				'code'       => 'NT'
			],
			[
				'id'         => 2709,
				'country_id' => 175,
				'name'       => 'Olt',
				'code'       => 'OT'
			],
			[
				'id'         => 2710,
				'country_id' => 175,
				'name'       => 'Prahova',
				'code'       => 'PH'
			],
			[
				'id'         => 2711,
				'country_id' => 175,
				'name'       => 'Satu-Mare',
				'code'       => 'SM'
			],
			[
				'id'         => 2712,
				'country_id' => 175,
				'name'       => 'Salaj',
				'code'       => 'SJ'
			],
			[
				'id'         => 2713,
				'country_id' => 175,
				'name'       => 'Sibiu',
				'code'       => 'SB'
			],
			[
				'id'         => 2714,
				'country_id' => 175,
				'name'       => 'Suceava',
				'code'       => 'SV'
			],
			[
				'id'         => 2715,
				'country_id' => 175,
				'name'       => 'Teleorman',
				'code'       => 'TR'
			],
			[
				'id'         => 2716,
				'country_id' => 175,
				'name'       => 'Timis',
				'code'       => 'TM'
			],
			[
				'id'         => 2717,
				'country_id' => 175,
				'name'       => 'Tulcea',
				'code'       => 'TL'
			],
			[
				'id'         => 2718,
				'country_id' => 175,
				'name'       => 'Vaslui',
				'code'       => 'VS'
			],
			[
				'id'         => 2719,
				'country_id' => 175,
				'name'       => 'Valcea',
				'code'       => 'VL'
			],
			[
				'id'         => 2720,
				'country_id' => 175,
				'name'       => 'Vrancea',
				'code'       => 'VN'
			],
			[
				'id'         => 2721,
				'country_id' => 176,
				'name'       => 'Abakan',
				'code'       => 'AB'
			],
			[
				'id'         => 2722,
				'country_id' => 176,
				'name'       => 'Aginskoye',
				'code'       => 'AG'
			],
			[
				'id'         => 2723,
				'country_id' => 176,
				'name'       => 'Anadyr',
				'code'       => 'AN'
			],
			[
				'id'         => 2724,
				'country_id' => 176,
				'name'       => 'Arkahangelsk',
				'code'       => 'AR'
			],
			[
				'id'         => 2725,
				'country_id' => 176,
				'name'       => 'Astrakhan',
				'code'       => 'AS'
			],
			[
				'id'         => 2726,
				'country_id' => 176,
				'name'       => 'Barnaul',
				'code'       => 'BA'
			],
			[
				'id'         => 2727,
				'country_id' => 176,
				'name'       => 'Belgorod',
				'code'       => 'BE'
			],
			[
				'id'         => 2728,
				'country_id' => 176,
				'name'       => 'Birobidzhan',
				'code'       => 'BI'
			],
			[
				'id'         => 2729,
				'country_id' => 176,
				'name'       => 'Blagoveshchensk',
				'code'       => 'BL'
			],
			[
				'id'         => 2730,
				'country_id' => 176,
				'name'       => 'Bryansk',
				'code'       => 'BR'
			],
			[
				'id'         => 2731,
				'country_id' => 176,
				'name'       => 'Cheboksary',
				'code'       => 'CH'
			],
			[
				'id'         => 2732,
				'country_id' => 176,
				'name'       => 'Chelyabinsk',
				'code'       => 'CL'
			],
			[
				'id'         => 2733,
				'country_id' => 176,
				'name'       => 'Cherkessk',
				'code'       => 'CR'
			],
			[
				'id'         => 2734,
				'country_id' => 176,
				'name'       => 'Chita',
				'code'       => 'CI'
			],
			[
				'id'         => 2735,
				'country_id' => 176,
				'name'       => 'Dudinka',
				'code'       => 'DU'
			],
			[
				'id'         => 2736,
				'country_id' => 176,
				'name'       => 'Elista',
				'code'       => 'EL'
			],
			[
				'id'         => 2737,
				'country_id' => 176,
				'name'       => 'Gomo-Altaysk',
				'code'       => 'GO'
			],
			[
				'id'         => 2738,
				'country_id' => 176,
				'name'       => 'Gorno-Altaysk',
				'code'       => 'GA'
			],
			[
				'id'         => 2739,
				'country_id' => 176,
				'name'       => 'Groznyy',
				'code'       => 'GR'
			],
			[
				'id'         => 2740,
				'country_id' => 176,
				'name'       => 'Irkutsk',
				'code'       => 'IR'
			],
			[
				'id'         => 2741,
				'country_id' => 176,
				'name'       => 'Ivanovo',
				'code'       => 'IV'
			],
			[
				'id'         => 2742,
				'country_id' => 176,
				'name'       => 'Izhevsk',
				'code'       => 'IZ'
			],
			[
				'id'         => 2743,
				'country_id' => 176,
				'name'       => 'Kalinigrad',
				'code'       => 'KA'
			],
			[
				'id'         => 2744,
				'country_id' => 176,
				'name'       => 'Kaluga',
				'code'       => 'KL'
			],
			[
				'id'         => 2745,
				'country_id' => 176,
				'name'       => 'Kasnodar',
				'code'       => 'KS'
			],
			[
				'id'         => 2746,
				'country_id' => 176,
				'name'       => 'Kazan',
				'code'       => 'KZ'
			],
			[
				'id'         => 2747,
				'country_id' => 176,
				'name'       => 'Kemerovo',
				'code'       => 'KE'
			],
			[
				'id'         => 2748,
				'country_id' => 176,
				'name'       => 'Khabarovsk',
				'code'       => 'KH'
			],
			[
				'id'         => 2749,
				'country_id' => 176,
				'name'       => 'Khanty-Mansiysk',
				'code'       => 'KM'
			],
			[
				'id'         => 2750,
				'country_id' => 176,
				'name'       => 'Kostroma',
				'code'       => 'KO'
			],
			[
				'id'         => 2751,
				'country_id' => 176,
				'name'       => 'Krasnodar',
				'code'       => 'KR'
			],
			[
				'id'         => 2752,
				'country_id' => 176,
				'name'       => 'Krasnoyarsk',
				'code'       => 'KN'
			],
			[
				'id'         => 2753,
				'country_id' => 176,
				'name'       => 'Kudymkar',
				'code'       => 'KU'
			],
			[
				'id'         => 2754,
				'country_id' => 176,
				'name'       => 'Kurgan',
				'code'       => 'KG'
			],
			[
				'id'         => 2755,
				'country_id' => 176,
				'name'       => 'Kursk',
				'code'       => 'KK'
			],
			[
				'id'         => 2756,
				'country_id' => 176,
				'name'       => 'Kyzyl',
				'code'       => 'KY'
			],
			[
				'id'         => 2757,
				'country_id' => 176,
				'name'       => 'Lipetsk',
				'code'       => 'LI'
			],
			[
				'id'         => 2758,
				'country_id' => 176,
				'name'       => 'Magadan',
				'code'       => 'MA'
			],
			[
				'id'         => 2759,
				'country_id' => 176,
				'name'       => 'Makhachkala',
				'code'       => 'MK'
			],
			[
				'id'         => 2760,
				'country_id' => 176,
				'name'       => 'Maykop',
				'code'       => 'MY'
			],
			[
				'id'         => 2761,
				'country_id' => 176,
				'name'       => 'Moscow',
				'code'       => 'MO'
			],
			[
				'id'         => 2762,
				'country_id' => 176,
				'name'       => 'Murmansk',
				'code'       => 'MU'
			],
			[
				'id'         => 2763,
				'country_id' => 176,
				'name'       => 'Nalchik',
				'code'       => 'NA'
			],
			[
				'id'         => 2764,
				'country_id' => 176,
				'name'       => 'Naryan Mar',
				'code'       => 'NR'
			],
			[
				'id'         => 2765,
				'country_id' => 176,
				'name'       => 'Nazran',
				'code'       => 'NZ'
			],
			[
				'id'         => 2766,
				'country_id' => 176,
				'name'       => 'Nizhniy Novgorod',
				'code'       => 'NI'
			],
			[
				'id'         => 2767,
				'country_id' => 176,
				'name'       => 'Novgorod',
				'code'       => 'NO'
			],
			[
				'id'         => 2768,
				'country_id' => 176,
				'name'       => 'Novosibirsk',
				'code'       => 'NV'
			],
			[
				'id'         => 2769,
				'country_id' => 176,
				'name'       => 'Omsk',
				'code'       => 'OM'
			],
			[
				'id'         => 2770,
				'country_id' => 176,
				'name'       => 'Orel',
				'code'       => 'OR'
			],
			[
				'id'         => 2771,
				'country_id' => 176,
				'name'       => 'Orenburg',
				'code'       => 'OE'
			],
			[
				'id'         => 2772,
				'country_id' => 176,
				'name'       => 'Palana',
				'code'       => 'PA'
			],
			[
				'id'         => 2773,
				'country_id' => 176,
				'name'       => 'Penza',
				'code'       => 'PE'
			],
			[
				'id'         => 2774,
				'country_id' => 176,
				'name'       => 'Perm',
				'code'       => 'PR'
			],
			[
				'id'         => 2775,
				'country_id' => 176,
				'name'       => 'Petropavlovsk-Kamchatskiy',
				'code'       => 'PK'
			],
			[
				'id'         => 2776,
				'country_id' => 176,
				'name'       => 'Petrozavodsk',
				'code'       => 'PT'
			],
			[
				'id'         => 2777,
				'country_id' => 176,
				'name'       => 'Pskov',
				'code'       => 'PS'
			],
			[
				'id'         => 2778,
				'country_id' => 176,
				'name'       => 'Rostov-na-Donu',
				'code'       => 'RO'
			],
			[
				'id'         => 2779,
				'country_id' => 176,
				'name'       => 'Ryazan',
				'code'       => 'RY'
			],
			[
				'id'         => 2780,
				'country_id' => 176,
				'name'       => 'Salekhard',
				'code'       => 'SL'
			],
			[
				'id'         => 2781,
				'country_id' => 176,
				'name'       => 'Samara',
				'code'       => 'SA'
			],
			[
				'id'         => 2782,
				'country_id' => 176,
				'name'       => 'Saransk',
				'code'       => 'SR'
			],
			[
				'id'         => 2783,
				'country_id' => 176,
				'name'       => 'Saratov',
				'code'       => 'SV'
			],
			[
				'id'         => 2784,
				'country_id' => 176,
				'name'       => 'Smolensk',
				'code'       => 'SM'
			],
			[
				'id'         => 2785,
				'country_id' => 176,
				'name'       => 'St. Petersburg',
				'code'       => 'SP'
			],
			[
				'id'         => 2786,
				'country_id' => 176,
				'name'       => 'Stavropol',
				'code'       => 'ST'
			],
			[
				'id'         => 2787,
				'country_id' => 176,
				'name'       => 'Syktyvkar',
				'code'       => 'SY'
			],
			[
				'id'         => 2788,
				'country_id' => 176,
				'name'       => 'Tambov',
				'code'       => 'TA'
			],
			[
				'id'         => 2789,
				'country_id' => 176,
				'name'       => 'Tomsk',
				'code'       => 'TO'
			],
			[
				'id'         => 2790,
				'country_id' => 176,
				'name'       => 'Tula',
				'code'       => 'TU'
			],
			[
				'id'         => 2791,
				'country_id' => 176,
				'name'       => 'Tura',
				'code'       => 'TR'
			],
			[
				'id'         => 2792,
				'country_id' => 176,
				'name'       => 'Tver',
				'code'       => 'TV'
			],
			[
				'id'         => 2793,
				'country_id' => 176,
				'name'       => 'Tyumen',
				'code'       => 'TY'
			],
			[
				'id'         => 2794,
				'country_id' => 176,
				'name'       => 'Ufa',
				'code'       => 'UF'
			],
			[
				'id'         => 2795,
				'country_id' => 176,
				'name'       => 'Ul\'yanovsk',
				'code'       => 'UL'
			],
			[
				'id'         => 2796,
				'country_id' => 176,
				'name'       => 'Ulan-Ude',
				'code'       => 'UU'
			],
			[
				'id'         => 2797,
				'country_id' => 176,
				'name'       => 'Ust\'-Ordynskiy',
				'code'       => 'US'
			],
			[
				'id'         => 2798,
				'country_id' => 176,
				'name'       => 'Vladikavkaz',
				'code'       => 'VL'
			],
			[
				'id'         => 2799,
				'country_id' => 176,
				'name'       => 'Vladimir',
				'code'       => 'VA'
			],
			[
				'id'         => 2800,
				'country_id' => 176,
				'name'       => 'Vladivostok',
				'code'       => 'VV'
			],
			[
				'id'         => 2801,
				'country_id' => 176,
				'name'       => 'Volgograd',
				'code'       => 'VG'
			],
			[
				'id'         => 2802,
				'country_id' => 176,
				'name'       => 'Vologda',
				'code'       => 'VD'
			],
			[
				'id'         => 2803,
				'country_id' => 176,
				'name'       => 'Voronezh',
				'code'       => 'VO'
			],
			[
				'id'         => 2804,
				'country_id' => 176,
				'name'       => 'Vyatka',
				'code'       => 'VY'
			],
			[
				'id'         => 2805,
				'country_id' => 176,
				'name'       => 'Yakutsk',
				'code'       => 'YA'
			],
			[
				'id'         => 2806,
				'country_id' => 176,
				'name'       => 'Yaroslavl',
				'code'       => 'YR'
			],
			[
				'id'         => 2807,
				'country_id' => 176,
				'name'       => 'Yekaterinburg',
				'code'       => 'YE'
			],
			[
				'id'         => 2808,
				'country_id' => 176,
				'name'       => 'Yoshkar-Ola',
				'code'       => 'YO'
			],
			[
				'id'         => 2809,
				'country_id' => 177,
				'name'       => 'Butare',
				'code'       => 'BU'
			],
			[
				'id'         => 2810,
				'country_id' => 177,
				'name'       => 'Byumba',
				'code'       => 'BY'
			],
			[
				'id'         => 2811,
				'country_id' => 177,
				'name'       => 'Cyangugu',
				'code'       => 'CY'
			],
			[
				'id'         => 2812,
				'country_id' => 177,
				'name'       => 'Gikongoro',
				'code'       => 'GK'
			],
			[
				'id'         => 2813,
				'country_id' => 177,
				'name'       => 'Gisenyi',
				'code'       => 'GS'
			],
			[
				'id'         => 2814,
				'country_id' => 177,
				'name'       => 'Gitarama',
				'code'       => 'GT'
			],
			[
				'id'         => 2815,
				'country_id' => 177,
				'name'       => 'Kibungo',
				'code'       => 'KG'
			],
			[
				'id'         => 2816,
				'country_id' => 177,
				'name'       => 'Kibuye',
				'code'       => 'KY'
			],
			[
				'id'         => 2817,
				'country_id' => 177,
				'name'       => 'Kigali Rurale',
				'code'       => 'KR'
			],
			[
				'id'         => 2818,
				'country_id' => 177,
				'name'       => 'Kigali-ville',
				'code'       => 'KV'
			],
			[
				'id'         => 2819,
				'country_id' => 177,
				'name'       => 'Ruhengeri',
				'code'       => 'RU'
			],
			[
				'id'         => 2820,
				'country_id' => 177,
				'name'       => 'Umutara',
				'code'       => 'UM'
			],
			[
				'id'         => 2821,
				'country_id' => 178,
				'name'       => 'Christ Church Nichola Town',
				'code'       => 'CCN'
			],
			[
				'id'         => 2822,
				'country_id' => 178,
				'name'       => 'Saint Anne Sandy Point',
				'code'       => 'SAS'
			],
			[
				'id'         => 2823,
				'country_id' => 178,
				'name'       => 'Saint George Basseterre',
				'code'       => 'SGB'
			],
			[
				'id'         => 2824,
				'country_id' => 178,
				'name'       => 'Saint George Gingerland',
				'code'       => 'SGG'
			],
			[
				'id'         => 2825,
				'country_id' => 178,
				'name'       => 'Saint James Windward',
				'code'       => 'SJW'
			],
			[
				'id'         => 2826,
				'country_id' => 178,
				'name'       => 'Saint John Capesterre',
				'code'       => 'SJC'
			],
			[
				'id'         => 2827,
				'country_id' => 178,
				'name'       => 'Saint John Figtree',
				'code'       => 'SJF'
			],
			[
				'id'         => 2828,
				'country_id' => 178,
				'name'       => 'Saint Mary Cayon',
				'code'       => 'SMC'
			],
			[
				'id'         => 2829,
				'country_id' => 178,
				'name'       => 'Saint Paul Capesterre',
				'code'       => 'CAP'
			],
			[
				'id'         => 2830,
				'country_id' => 178,
				'name'       => 'Saint Paul Charlestown',
				'code'       => 'CHA'
			],
			[
				'id'         => 2831,
				'country_id' => 178,
				'name'       => 'Saint Peter Basseterre',
				'code'       => 'SPB'
			],
			[
				'id'         => 2832,
				'country_id' => 178,
				'name'       => 'Saint Thomas Lowland',
				'code'       => 'STL'
			],
			[
				'id'         => 2833,
				'country_id' => 178,
				'name'       => 'Saint Thomas Middle Island',
				'code'       => 'STM'
			],
			[
				'id'         => 2834,
				'country_id' => 178,
				'name'       => 'Trinity Palmetto Point',
				'code'       => 'TPP'
			],
			[
				'id'         => 2835,
				'country_id' => 179,
				'name'       => 'Anse-la-Raye',
				'code'       => 'AR'
			],
			[
				'id'         => 2836,
				'country_id' => 179,
				'name'       => 'Castries',
				'code'       => 'CA'
			],
			[
				'id'         => 2837,
				'country_id' => 179,
				'name'       => 'Choiseul',
				'code'       => 'CH'
			],
			[
				'id'         => 2838,
				'country_id' => 179,
				'name'       => 'Dauphin',
				'code'       => 'DA'
			],
			[
				'id'         => 2839,
				'country_id' => 179,
				'name'       => 'Dennery',
				'code'       => 'DE'
			],
			[
				'id'         => 2840,
				'country_id' => 179,
				'name'       => 'Gros-Islet',
				'code'       => 'GI'
			],
			[
				'id'         => 2841,
				'country_id' => 179,
				'name'       => 'Laborie',
				'code'       => 'LA'
			],
			[
				'id'         => 2842,
				'country_id' => 179,
				'name'       => 'Micoud',
				'code'       => 'MI'
			],
			[
				'id'         => 2843,
				'country_id' => 179,
				'name'       => 'Praslin',
				'code'       => 'PR'
			],
			[
				'id'         => 2844,
				'country_id' => 179,
				'name'       => 'Soufriere',
				'code'       => 'SO'
			],
			[
				'id'         => 2845,
				'country_id' => 179,
				'name'       => 'Vieux-Fort',
				'code'       => 'VF'
			],
			[
				'id'         => 2846,
				'country_id' => 180,
				'name'       => 'Charlotte',
				'code'       => 'C'
			],
			[
				'id'         => 2847,
				'country_id' => 180,
				'name'       => 'Grenadines',
				'code'       => 'R'
			],
			[
				'id'         => 2848,
				'country_id' => 180,
				'name'       => 'Saint Andrew',
				'code'       => 'A'
			],
			[
				'id'         => 2849,
				'country_id' => 180,
				'name'       => 'Saint David',
				'code'       => 'D'
			],
			[
				'id'         => 2850,
				'country_id' => 180,
				'name'       => 'Saint George',
				'code'       => 'G'
			],
			[
				'id'         => 2851,
				'country_id' => 180,
				'name'       => 'Saint Patrick',
				'code'       => 'P'
			],
			[
				'id'         => 2852,
				'country_id' => 181,
				'name'       => 'A\'ana',
				'code'       => 'AN'
			],
			[
				'id'         => 2853,
				'country_id' => 181,
				'name'       => 'Aiga-i-le-Tai',
				'code'       => 'AI'
			],
			[
				'id'         => 2854,
				'country_id' => 181,
				'name'       => 'Atua',
				'code'       => 'AT'
			],
			[
				'id'         => 2855,
				'country_id' => 181,
				'name'       => 'Fa\'asaleleaga',
				'code'       => 'FA'
			],
			[
				'id'         => 2856,
				'country_id' => 181,
				'name'       => 'Gaga\'emauga',
				'code'       => 'GE'
			],
			[
				'id'         => 2857,
				'country_id' => 181,
				'name'       => 'Gagaifomauga',
				'code'       => 'GF'
			],
			[
				'id'         => 2858,
				'country_id' => 181,
				'name'       => 'Palauli',
				'code'       => 'PA'
			],
			[
				'id'         => 2859,
				'country_id' => 181,
				'name'       => 'Satupa\'itea',
				'code'       => 'SA'
			],
			[
				'id'         => 2860,
				'country_id' => 181,
				'name'       => 'Tuamasaga',
				'code'       => 'TU'
			],
			[
				'id'         => 2861,
				'country_id' => 181,
				'name'       => 'Va\'a-o-Fonoti',
				'code'       => 'VF'
			],
			[
				'id'         => 2862,
				'country_id' => 181,
				'name'       => 'Vaisigano',
				'code'       => 'VS'
			],
			[
				'id'         => 2863,
				'country_id' => 182,
				'name'       => 'Acquaviva',
				'code'       => 'AC'
			],
			[
				'id'         => 2864,
				'country_id' => 182,
				'name'       => 'Borgo Maggiore',
				'code'       => 'BM'
			],
			[
				'id'         => 2865,
				'country_id' => 182,
				'name'       => 'Chiesanuova',
				'code'       => 'CH'
			],
			[
				'id'         => 2866,
				'country_id' => 182,
				'name'       => 'Domagnano',
				'code'       => 'DO'
			],
			[
				'id'         => 2867,
				'country_id' => 182,
				'name'       => 'Faetano',
				'code'       => 'FA'
			],
			[
				'id'         => 2868,
				'country_id' => 182,
				'name'       => 'Fiorentino',
				'code'       => 'FI'
			],
			[
				'id'         => 2869,
				'country_id' => 182,
				'name'       => 'Montegiardino',
				'code'       => 'MO'
			],
			[
				'id'         => 2870,
				'country_id' => 182,
				'name'       => 'Citta di San Marino',
				'code'       => 'SM'
			],
			[
				'id'         => 2871,
				'country_id' => 182,
				'name'       => 'Serravalle',
				'code'       => 'SE'
			],
			[
				'id'         => 2872,
				'country_id' => 183,
				'name'       => 'Sao Tome',
				'code'       => 'S'
			],
			[
				'id'         => 2873,
				'country_id' => 183,
				'name'       => 'Principe',
				'code'       => 'P'
			],
			[
				'id'         => 2874,
				'country_id' => 184,
				'name'       => 'Al Bahah',
				'code'       => 'BH'
			],
			[
				'id'         => 2875,
				'country_id' => 184,
				'name'       => 'Al Hudud ash Shamaliyah',
				'code'       => 'HS'
			],
			[
				'id'         => 2876,
				'country_id' => 184,
				'name'       => 'Al Jawf',
				'code'       => 'JF'
			],
			[
				'id'         => 2877,
				'country_id' => 184,
				'name'       => 'Al Madinah',
				'code'       => 'MD'
			],
			[
				'id'         => 2878,
				'country_id' => 184,
				'name'       => 'Al Qasim',
				'code'       => 'QS'
			],
			[
				'id'         => 2879,
				'country_id' => 184,
				'name'       => 'Ar Riyad',
				'code'       => 'RD'
			],
			[
				'id'         => 2880,
				'country_id' => 184,
				'name'       => 'Ash Sharqiyah (Eastern)',
				'code'       => 'AQ'
			],
			[
				'id'         => 2881,
				'country_id' => 184,
				'name'       => '\'Asir',
				'code'       => 'AS'
			],
			[
				'id'         => 2882,
				'country_id' => 184,
				'name'       => 'Ha\'il',
				'code'       => 'HL'
			],
			[
				'id'         => 2883,
				'country_id' => 184,
				'name'       => 'Jizan',
				'code'       => 'JZ'
			],
			[
				'id'         => 2884,
				'country_id' => 184,
				'name'       => 'Makkah',
				'code'       => 'ML'
			],
			[
				'id'         => 2885,
				'country_id' => 184,
				'name'       => 'Najran',
				'code'       => 'NR'
			],
			[
				'id'         => 2886,
				'country_id' => 184,
				'name'       => 'Tabuk',
				'code'       => 'TB'
			],
			[
				'id'         => 2887,
				'country_id' => 185,
				'name'       => 'Dakar',
				'code'       => 'DA'
			],
			[
				'id'         => 2888,
				'country_id' => 185,
				'name'       => 'Diourbel',
				'code'       => 'DI'
			],
			[
				'id'         => 2889,
				'country_id' => 185,
				'name'       => 'Fatick',
				'code'       => 'FA'
			],
			[
				'id'         => 2890,
				'country_id' => 185,
				'name'       => 'Kaolack',
				'code'       => 'KA'
			],
			[
				'id'         => 2891,
				'country_id' => 185,
				'name'       => 'Kolda',
				'code'       => 'KO'
			],
			[
				'id'         => 2892,
				'country_id' => 185,
				'name'       => 'Louga',
				'code'       => 'LO'
			],
			[
				'id'         => 2893,
				'country_id' => 185,
				'name'       => 'Matam',
				'code'       => 'MA'
			],
			[
				'id'         => 2894,
				'country_id' => 185,
				'name'       => 'Saint-Louis',
				'code'       => 'SL'
			],
			[
				'id'         => 2895,
				'country_id' => 185,
				'name'       => 'Tambacounda',
				'code'       => 'TA'
			],
			[
				'id'         => 2896,
				'country_id' => 185,
				'name'       => 'Thies',
				'code'       => 'TH'
			],
			[
				'id'         => 2897,
				'country_id' => 185,
				'name'       => 'Ziguinchor',
				'code'       => 'ZI'
			],
			[
				'id'         => 2898,
				'country_id' => 186,
				'name'       => 'Anse aux Pins',
				'code'       => 'AP'
			],
			[
				'id'         => 2899,
				'country_id' => 186,
				'name'       => 'Anse Boileau',
				'code'       => 'AB'
			],
			[
				'id'         => 2900,
				'country_id' => 186,
				'name'       => 'Anse Etoile',
				'code'       => 'AE'
			],
			[
				'id'         => 2901,
				'country_id' => 186,
				'name'       => 'Anse Louis',
				'code'       => 'AL'
			],
			[
				'id'         => 2902,
				'country_id' => 186,
				'name'       => 'Anse Royale',
				'code'       => 'AR'
			],
			[
				'id'         => 2903,
				'country_id' => 186,
				'name'       => 'Baie Lazare',
				'code'       => 'BL'
			],
			[
				'id'         => 2904,
				'country_id' => 186,
				'name'       => 'Baie Sainte Anne',
				'code'       => 'BS'
			],
			[
				'id'         => 2905,
				'country_id' => 186,
				'name'       => 'Beau Vallon',
				'code'       => 'BV'
			],
			[
				'id'         => 2906,
				'country_id' => 186,
				'name'       => 'Bel Air',
				'code'       => 'BA'
			],
			[
				'id'         => 2907,
				'country_id' => 186,
				'name'       => 'Bel Ombre',
				'code'       => 'BO'
			],
			[
				'id'         => 2908,
				'country_id' => 186,
				'name'       => 'Cascade',
				'code'       => 'CA'
			],
			[
				'id'         => 2909,
				'country_id' => 186,
				'name'       => 'Glacis',
				'code'       => 'GL'
			],
			[
				'id'         => 2910,
				'country_id' => 186,
				'name'       => 'Grand\' Anse (on Mahe)',
				'code'       => 'GM'
			],
			[
				'id'         => 2911,
				'country_id' => 186,
				'name'       => 'Grand\' Anse (on Praslin)',
				'code'       => 'GP'
			],
			[
				'id'         => 2912,
				'country_id' => 186,
				'name'       => 'La Digue',
				'code'       => 'DG'
			],
			[
				'id'         => 2913,
				'country_id' => 186,
				'name'       => 'La Riviere Anglaise',
				'code'       => 'RA'
			],
			[
				'id'         => 2914,
				'country_id' => 186,
				'name'       => 'Mont Buxton',
				'code'       => 'MB'
			],
			[
				'id'         => 2915,
				'country_id' => 186,
				'name'       => 'Mont Fleuri',
				'code'       => 'MF'
			],
			[
				'id'         => 2916,
				'country_id' => 186,
				'name'       => 'Plaisance',
				'code'       => 'PL'
			],
			[
				'id'         => 2917,
				'country_id' => 186,
				'name'       => 'Pointe La Rue',
				'code'       => 'PR'
			],
			[
				'id'         => 2918,
				'country_id' => 186,
				'name'       => 'Port Glaud',
				'code'       => 'PG'
			],
			[
				'id'         => 2919,
				'country_id' => 186,
				'name'       => 'Saint Louis',
				'code'       => 'SL'
			],
			[
				'id'         => 2920,
				'country_id' => 186,
				'name'       => 'Takamaka',
				'code'       => 'TA'
			],
			[
				'id'         => 2921,
				'country_id' => 187,
				'name'       => 'Eastern',
				'code'       => 'E'
			],
			[
				'id'         => 2922,
				'country_id' => 187,
				'name'       => 'Northern',
				'code'       => 'N'
			],
			[
				'id'         => 2923,
				'country_id' => 187,
				'name'       => 'Southern',
				'code'       => 'S'
			],
			[
				'id'         => 2924,
				'country_id' => 187,
				'name'       => 'Western',
				'code'       => 'W'
			],
			[
				'id'         => 2925,
				'country_id' => 189,
				'name'       => 'Banskobystrický',
				'code'       => 'BA'
			],
			[
				'id'         => 2926,
				'country_id' => 189,
				'name'       => 'Bratislavský',
				'code'       => 'BR'
			],
			[
				'id'         => 2927,
				'country_id' => 189,
				'name'       => 'Košický',
				'code'       => 'KO'
			],
			[
				'id'         => 2928,
				'country_id' => 189,
				'name'       => 'Nitriansky',
				'code'       => 'NI'
			],
			[
				'id'         => 2929,
				'country_id' => 189,
				'name'       => 'Prešovský',
				'code'       => 'PR'
			],
			[
				'id'         => 2930,
				'country_id' => 189,
				'name'       => 'Trenčiansky',
				'code'       => 'TC'
			],
			[
				'id'         => 2931,
				'country_id' => 189,
				'name'       => 'Trnavský',
				'code'       => 'TV'
			],
			[
				'id'         => 2932,
				'country_id' => 189,
				'name'       => 'Žilinský',
				'code'       => 'ZI'
			],
			[
				'id'         => 2933,
				'country_id' => 191,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 2934,
				'country_id' => 191,
				'name'       => 'Choiseul',
				'code'       => 'CH'
			],
			[
				'id'         => 2935,
				'country_id' => 191,
				'name'       => 'Guadalcanal',
				'code'       => 'GC'
			],
			[
				'id'         => 2936,
				'country_id' => 191,
				'name'       => 'Honiara',
				'code'       => 'HO'
			],
			[
				'id'         => 2937,
				'country_id' => 191,
				'name'       => 'Isabel',
				'code'       => 'IS'
			],
			[
				'id'         => 2938,
				'country_id' => 191,
				'name'       => 'Makira',
				'code'       => 'MK'
			],
			[
				'id'         => 2939,
				'country_id' => 191,
				'name'       => 'Malaita',
				'code'       => 'ML'
			],
			[
				'id'         => 2940,
				'country_id' => 191,
				'name'       => 'Rennell and Bellona',
				'code'       => 'RB'
			],
			[
				'id'         => 2941,
				'country_id' => 191,
				'name'       => 'Temotu',
				'code'       => 'TM'
			],
			[
				'id'         => 2942,
				'country_id' => 191,
				'name'       => 'Western',
				'code'       => 'WE'
			],
			[
				'id'         => 2943,
				'country_id' => 192,
				'name'       => 'Awdal',
				'code'       => 'AW'
			],
			[
				'id'         => 2944,
				'country_id' => 192,
				'name'       => 'Bakool',
				'code'       => 'BK'
			],
			[
				'id'         => 2945,
				'country_id' => 192,
				'name'       => 'Banaadir',
				'code'       => 'BN'
			],
			[
				'id'         => 2946,
				'country_id' => 192,
				'name'       => 'Bari',
				'code'       => 'BR'
			],
			[
				'id'         => 2947,
				'country_id' => 192,
				'name'       => 'Bay',
				'code'       => 'BY'
			],
			[
				'id'         => 2948,
				'country_id' => 192,
				'name'       => 'Galguduud',
				'code'       => 'GA'
			],
			[
				'id'         => 2949,
				'country_id' => 192,
				'name'       => 'Gedo',
				'code'       => 'GE'
			],
			[
				'id'         => 2950,
				'country_id' => 192,
				'name'       => 'Hiiraan',
				'code'       => 'HI'
			],
			[
				'id'         => 2951,
				'country_id' => 192,
				'name'       => 'Jubbada Dhexe',
				'code'       => 'JD'
			],
			[
				'id'         => 2952,
				'country_id' => 192,
				'name'       => 'Jubbada Hoose',
				'code'       => 'JH'
			],
			[
				'id'         => 2953,
				'country_id' => 192,
				'name'       => 'Mudug',
				'code'       => 'MU'
			],
			[
				'id'         => 2954,
				'country_id' => 192,
				'name'       => 'Nugaal',
				'code'       => 'NU'
			],
			[
				'id'         => 2955,
				'country_id' => 192,
				'name'       => 'Sanaag',
				'code'       => 'SA'
			],
			[
				'id'         => 2956,
				'country_id' => 192,
				'name'       => 'Shabeellaha Dhexe',
				'code'       => 'SD'
			],
			[
				'id'         => 2957,
				'country_id' => 192,
				'name'       => 'Shabeellaha Hoose',
				'code'       => 'SH'
			],
			[
				'id'         => 2958,
				'country_id' => 192,
				'name'       => 'Sool',
				'code'       => 'SL'
			],
			[
				'id'         => 2959,
				'country_id' => 192,
				'name'       => 'Togdheer',
				'code'       => 'TO'
			],
			[
				'id'         => 2960,
				'country_id' => 192,
				'name'       => 'Woqooyi Galbeed',
				'code'       => 'WG'
			],
			[
				'id'         => 2961,
				'country_id' => 193,
				'name'       => 'Eastern Cape',
				'code'       => 'EC'
			],
			[
				'id'         => 2962,
				'country_id' => 193,
				'name'       => 'Free State',
				'code'       => 'FS'
			],
			[
				'id'         => 2963,
				'country_id' => 193,
				'name'       => 'Gauteng',
				'code'       => 'GT'
			],
			[
				'id'         => 2964,
				'country_id' => 193,
				'name'       => 'KwaZulu-Natal',
				'code'       => 'KN'
			],
			[
				'id'         => 2965,
				'country_id' => 193,
				'name'       => 'Limpopo',
				'code'       => 'LP'
			],
			[
				'id'         => 2966,
				'country_id' => 193,
				'name'       => 'Mpumalanga',
				'code'       => 'MP'
			],
			[
				'id'         => 2967,
				'country_id' => 193,
				'name'       => 'North West',
				'code'       => 'NW'
			],
			[
				'id'         => 2968,
				'country_id' => 193,
				'name'       => 'Northern Cape',
				'code'       => 'NC'
			],
			[
				'id'         => 2969,
				'country_id' => 193,
				'name'       => 'Western Cape',
				'code'       => 'WC'
			],
			[
				'id'         => 2970,
				'country_id' => 195,
				'name'       => 'La Coruña',
				'code'       => 'CA'
			],
			[
				'id'         => 2971,
				'country_id' => 195,
				'name'       => 'Álava',
				'code'       => 'AL'
			],
			[
				'id'         => 2972,
				'country_id' => 195,
				'name'       => 'Albacete',
				'code'       => 'AB'
			],
			[
				'id'         => 2973,
				'country_id' => 195,
				'name'       => 'Alicante',
				'code'       => 'AC'
			],
			[
				'id'         => 2974,
				'country_id' => 195,
				'name'       => 'Almeria',
				'code'       => 'AM'
			],
			[
				'id'         => 2975,
				'country_id' => 195,
				'name'       => 'Asturias',
				'code'       => 'AS'
			],
			[
				'id'         => 2976,
				'country_id' => 195,
				'name'       => 'Ávila',
				'code'       => 'AV'
			],
			[
				'id'         => 2977,
				'country_id' => 195,
				'name'       => 'Badajoz',
				'code'       => 'BJ'
			],
			[
				'id'         => 2978,
				'country_id' => 195,
				'name'       => 'Baleares',
				'code'       => 'IB'
			],
			[
				'id'         => 2979,
				'country_id' => 195,
				'name'       => 'Barcelona',
				'code'       => 'BA'
			],
			[
				'id'         => 2980,
				'country_id' => 195,
				'name'       => 'Burgos',
				'code'       => 'BU'
			],
			[
				'id'         => 2981,
				'country_id' => 195,
				'name'       => 'Cáceres',
				'code'       => 'CC'
			],
			[
				'id'         => 2982,
				'country_id' => 195,
				'name'       => 'Cádiz',
				'code'       => 'CZ'
			],
			[
				'id'         => 2983,
				'country_id' => 195,
				'name'       => 'Cantabria',
				'code'       => 'CT'
			],
			[
				'id'         => 2984,
				'country_id' => 195,
				'name'       => 'Castellón',
				'code'       => 'CL'
			],
			[
				'id'         => 2985,
				'country_id' => 195,
				'name'       => 'Ceuta',
				'code'       => 'CE'
			],
			[
				'id'         => 2986,
				'country_id' => 195,
				'name'       => 'Ciudad Real',
				'code'       => 'CR'
			],
			[
				'id'         => 2987,
				'country_id' => 195,
				'name'       => 'Córdoba',
				'code'       => 'CD'
			],
			[
				'id'         => 2988,
				'country_id' => 195,
				'name'       => 'Cuenca',
				'code'       => 'CU'
			],
			[
				'id'         => 2989,
				'country_id' => 195,
				'name'       => 'Girona',
				'code'       => 'GI'
			],
			[
				'id'         => 2990,
				'country_id' => 195,
				'name'       => 'Granada',
				'code'       => 'GD'
			],
			[
				'id'         => 2991,
				'country_id' => 195,
				'name'       => 'Guadalajara',
				'code'       => 'GJ'
			],
			[
				'id'         => 2992,
				'country_id' => 195,
				'name'       => 'Guipùzcoa',
				'code'       => 'GP'
			],
			[
				'id'         => 2993,
				'country_id' => 195,
				'name'       => 'Huelva',
				'code'       => 'HL'
			],
			[
				'id'         => 2994,
				'country_id' => 195,
				'name'       => 'Huesca',
				'code'       => 'HS'
			],
			[
				'id'         => 2995,
				'country_id' => 195,
				'name'       => 'Jaén',
				'code'       => 'JN'
			],
			[
				'id'         => 2996,
				'country_id' => 195,
				'name'       => 'La Rioja',
				'code'       => 'RJ'
			],
			[
				'id'         => 2997,
				'country_id' => 195,
				'name'       => 'Las Palmas',
				'code'       => 'PM'
			],
			[
				'id'         => 2998,
				'country_id' => 195,
				'name'       => 'Leon',
				'code'       => 'LE'
			],
			[
				'id'         => 2999,
				'country_id' => 195,
				'name'       => 'Lleida',
				'code'       => 'LL'
			],
			[
				'id'         => 3000,
				'country_id' => 195,
				'name'       => 'Lugo',
				'code'       => 'LG'
			],
			[
				'id'         => 3001,
				'country_id' => 195,
				'name'       => 'Madrid',
				'code'       => 'MD'
			],
			[
				'id'         => 3002,
				'country_id' => 195,
				'name'       => 'Malaga',
				'code'       => 'MA'
			],
			[
				'id'         => 3003,
				'country_id' => 195,
				'name'       => 'Melilla',
				'code'       => 'ML'
			],
			[
				'id'         => 3004,
				'country_id' => 195,
				'name'       => 'Murcia',
				'code'       => 'MU'
			],
			[
				'id'         => 3005,
				'country_id' => 195,
				'name'       => 'Navarra',
				'code'       => 'NV'
			],
			[
				'id'         => 3006,
				'country_id' => 195,
				'name'       => 'Ourense',
				'code'       => 'OU'
			],
			[
				'id'         => 3007,
				'country_id' => 195,
				'name'       => 'Palencia',
				'code'       => 'PL'
			],
			[
				'id'         => 3008,
				'country_id' => 195,
				'name'       => 'Pontevedra',
				'code'       => 'PO'
			],
			[
				'id'         => 3009,
				'country_id' => 195,
				'name'       => 'Salamanca',
				'code'       => 'SL'
			],
			[
				'id'         => 3010,
				'country_id' => 195,
				'name'       => 'Santa Cruz de Tenerife',
				'code'       => 'SC'
			],
			[
				'id'         => 3011,
				'country_id' => 195,
				'name'       => 'Segovia',
				'code'       => 'SG'
			],
			[
				'id'         => 3012,
				'country_id' => 195,
				'name'       => 'Sevilla',
				'code'       => 'SV'
			],
			[
				'id'         => 3013,
				'country_id' => 195,
				'name'       => 'Soria',
				'code'       => 'SO'
			],
			[
				'id'         => 3014,
				'country_id' => 195,
				'name'       => 'Tarragona',
				'code'       => 'TA'
			],
			[
				'id'         => 3015,
				'country_id' => 195,
				'name'       => 'Teruel',
				'code'       => 'TE'
			],
			[
				'id'         => 3016,
				'country_id' => 195,
				'name'       => 'Toledo',
				'code'       => 'TO'
			],
			[
				'id'         => 3017,
				'country_id' => 195,
				'name'       => 'Valencia',
				'code'       => 'VC'
			],
			[
				'id'         => 3018,
				'country_id' => 195,
				'name'       => 'Valladolid',
				'code'       => 'VD'
			],
			[
				'id'         => 3019,
				'country_id' => 195,
				'name'       => 'Vizcaya',
				'code'       => 'VZ'
			],
			[
				'id'         => 3020,
				'country_id' => 195,
				'name'       => 'Zamora',
				'code'       => 'ZM'
			],
			[
				'id'         => 3021,
				'country_id' => 195,
				'name'       => 'Zaragoza',
				'code'       => 'ZR'
			],
			[
				'id'         => 3022,
				'country_id' => 196,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 3023,
				'country_id' => 196,
				'name'       => 'Eastern',
				'code'       => 'EA'
			],
			[
				'id'         => 3024,
				'country_id' => 196,
				'name'       => 'North Central',
				'code'       => 'NC'
			],
			[
				'id'         => 3025,
				'country_id' => 196,
				'name'       => 'Northern',
				'code'       => 'NO'
			],
			[
				'id'         => 3026,
				'country_id' => 196,
				'name'       => 'North Western',
				'code'       => 'NW'
			],
			[
				'id'         => 3027,
				'country_id' => 196,
				'name'       => 'Sabaragamuwa',
				'code'       => 'SA'
			],
			[
				'id'         => 3028,
				'country_id' => 196,
				'name'       => 'Southern',
				'code'       => 'SO'
			],
			[
				'id'         => 3029,
				'country_id' => 196,
				'name'       => 'Uva',
				'code'       => 'UV'
			],
			[
				'id'         => 3030,
				'country_id' => 196,
				'name'       => 'Western',
				'code'       => 'WE'
			],
			[
				'id'         => 3032,
				'country_id' => 197,
				'name'       => 'Saint Helena',
				'code'       => 'S'
			],
			[
				'id'         => 3034,
				'country_id' => 199,
				'name'       => 'A\'ali an Nil',
				'code'       => 'ANL'
			],
			[
				'id'         => 3035,
				'country_id' => 199,
				'name'       => 'Al Bahr al Ahmar',
				'code'       => 'BAM'
			],
			[
				'id'         => 3036,
				'country_id' => 199,
				'name'       => 'Al Buhayrat',
				'code'       => 'BRT'
			],
			[
				'id'         => 3037,
				'country_id' => 199,
				'name'       => 'Al Jazirah',
				'code'       => 'JZR'
			],
			[
				'id'         => 3038,
				'country_id' => 199,
				'name'       => 'Al Khartum',
				'code'       => 'KRT'
			],
			[
				'id'         => 3039,
				'country_id' => 199,
				'name'       => 'Al Qadarif',
				'code'       => 'QDR'
			],
			[
				'id'         => 3040,
				'country_id' => 199,
				'name'       => 'Al Wahdah',
				'code'       => 'WDH'
			],
			[
				'id'         => 3041,
				'country_id' => 199,
				'name'       => 'An Nil al Abyad',
				'code'       => 'ANB'
			],
			[
				'id'         => 3042,
				'country_id' => 199,
				'name'       => 'An Nil al Azraq',
				'code'       => 'ANZ'
			],
			[
				'id'         => 3043,
				'country_id' => 199,
				'name'       => 'Ash Shamaliyah',
				'code'       => 'ASH'
			],
			[
				'id'         => 3044,
				'country_id' => 199,
				'name'       => 'Bahr al Jabal',
				'code'       => 'BJA'
			],
			[
				'id'         => 3045,
				'country_id' => 199,
				'name'       => 'Gharb al Istiwa\'iyah',
				'code'       => 'GIS'
			],
			[
				'id'         => 3046,
				'country_id' => 199,
				'name'       => 'Gharb Bahr al Ghazal',
				'code'       => 'GBG'
			],
			[
				'id'         => 3047,
				'country_id' => 199,
				'name'       => 'Gharb Darfur',
				'code'       => 'GDA'
			],
			[
				'id'         => 3048,
				'country_id' => 199,
				'name'       => 'Gharb Kurdufan',
				'code'       => 'GKU'
			],
			[
				'id'         => 3049,
				'country_id' => 199,
				'name'       => 'Janub Darfur',
				'code'       => 'JDA'
			],
			[
				'id'         => 3050,
				'country_id' => 199,
				'name'       => 'Janub Kurdufan',
				'code'       => 'JKU'
			],
			[
				'id'         => 3051,
				'country_id' => 199,
				'name'       => 'Junqali',
				'code'       => 'JQL'
			],
			[
				'id'         => 3052,
				'country_id' => 199,
				'name'       => 'Kassala',
				'code'       => 'KSL'
			],
			[
				'id'         => 3053,
				'country_id' => 199,
				'name'       => 'Nahr an Nil',
				'code'       => 'NNL'
			],
			[
				'id'         => 3054,
				'country_id' => 199,
				'name'       => 'Shamal Bahr al Ghazal',
				'code'       => 'SBG'
			],
			[
				'id'         => 3055,
				'country_id' => 199,
				'name'       => 'Shamal Darfur',
				'code'       => 'SDA'
			],
			[
				'id'         => 3056,
				'country_id' => 199,
				'name'       => 'Shamal Kurdufan',
				'code'       => 'SKU'
			],
			[
				'id'         => 3057,
				'country_id' => 199,
				'name'       => 'Sharq al Istiwa\'iyah',
				'code'       => 'SIS'
			],
			[
				'id'         => 3058,
				'country_id' => 199,
				'name'       => 'Sinnar',
				'code'       => 'SNR'
			],
			[
				'id'         => 3059,
				'country_id' => 199,
				'name'       => 'Warab',
				'code'       => 'WRB'
			],
			[
				'id'         => 3060,
				'country_id' => 200,
				'name'       => 'Brokopondo',
				'code'       => 'BR'
			],
			[
				'id'         => 3061,
				'country_id' => 200,
				'name'       => 'Commewijne',
				'code'       => 'CM'
			],
			[
				'id'         => 3062,
				'country_id' => 200,
				'name'       => 'Coronie',
				'code'       => 'CR'
			],
			[
				'id'         => 3063,
				'country_id' => 200,
				'name'       => 'Marowijne',
				'code'       => 'MA'
			],
			[
				'id'         => 3064,
				'country_id' => 200,
				'name'       => 'Nickerie',
				'code'       => 'NI'
			],
			[
				'id'         => 3065,
				'country_id' => 200,
				'name'       => 'Para',
				'code'       => 'PA'
			],
			[
				'id'         => 3066,
				'country_id' => 200,
				'name'       => 'Paramaribo',
				'code'       => 'PM'
			],
			[
				'id'         => 3067,
				'country_id' => 200,
				'name'       => 'Saramacca',
				'code'       => 'SA'
			],
			[
				'id'         => 3068,
				'country_id' => 200,
				'name'       => 'Sipaliwini',
				'code'       => 'SI'
			],
			[
				'id'         => 3069,
				'country_id' => 200,
				'name'       => 'Wanica',
				'code'       => 'WA'
			],
			[
				'id'         => 3070,
				'country_id' => 202,
				'name'       => 'Hhohho',
				'code'       => 'H'
			],
			[
				'id'         => 3071,
				'country_id' => 202,
				'name'       => 'Lubombo',
				'code'       => 'L'
			],
			[
				'id'         => 3072,
				'country_id' => 202,
				'name'       => 'Manzini',
				'code'       => 'M'
			],
			[
				'id'         => 3073,
				'country_id' => 202,
				'name'       => 'Shishelweni',
				'code'       => 'S'
			],
			[
				'id'         => 3074,
				'country_id' => 203,
				'name'       => 'Blekinge',
				'code'       => 'K'
			],
			[
				'id'         => 3075,
				'country_id' => 203,
				'name'       => 'Dalarna',
				'code'       => 'W'
			],
			[
				'id'         => 3076,
				'country_id' => 203,
				'name'       => 'Gävleborg',
				'code'       => 'X'
			],
			[
				'id'         => 3077,
				'country_id' => 203,
				'name'       => 'Gotland',
				'code'       => 'I'
			],
			[
				'id'         => 3078,
				'country_id' => 203,
				'name'       => 'Halland',
				'code'       => 'N'
			],
			[
				'id'         => 3079,
				'country_id' => 203,
				'name'       => 'Jämtland',
				'code'       => 'Z'
			],
			[
				'id'         => 3080,
				'country_id' => 203,
				'name'       => 'Jönköping',
				'code'       => 'F'
			],
			[
				'id'         => 3081,
				'country_id' => 203,
				'name'       => 'Kalmar',
				'code'       => 'H'
			],
			[
				'id'         => 3082,
				'country_id' => 203,
				'name'       => 'Kronoberg',
				'code'       => 'G'
			],
			[
				'id'         => 3083,
				'country_id' => 203,
				'name'       => 'Norrbotten',
				'code'       => 'BD'
			],
			[
				'id'         => 3084,
				'country_id' => 203,
				'name'       => 'Örebro',
				'code'       => 'T'
			],
			[
				'id'         => 3085,
				'country_id' => 203,
				'name'       => 'Östergötland',
				'code'       => 'E'
			],
			[
				'id'         => 3086,
				'country_id' => 203,
				'name'       => 'Skåne',
				'code'       => 'M'
			],
			[
				'id'         => 3087,
				'country_id' => 203,
				'name'       => 'Södermanland',
				'code'       => 'D'
			],
			[
				'id'         => 3088,
				'country_id' => 203,
				'name'       => 'Stockholm',
				'code'       => 'AB'
			],
			[
				'id'         => 3089,
				'country_id' => 203,
				'name'       => 'Uppsala',
				'code'       => 'C'
			],
			[
				'id'         => 3090,
				'country_id' => 203,
				'name'       => 'Värmland',
				'code'       => 'S'
			],
			[
				'id'         => 3091,
				'country_id' => 203,
				'name'       => 'Västerbotten',
				'code'       => 'AC'
			],
			[
				'id'         => 3092,
				'country_id' => 203,
				'name'       => 'Västernorrland',
				'code'       => 'Y'
			],
			[
				'id'         => 3093,
				'country_id' => 203,
				'name'       => 'Västmanland',
				'code'       => 'U'
			],
			[
				'id'         => 3094,
				'country_id' => 203,
				'name'       => 'Västra Götaland',
				'code'       => 'O'
			],
			[
				'id'         => 3095,
				'country_id' => 204,
				'name'       => 'Aargau',
				'code'       => 'AG'
			],
			[
				'id'         => 3096,
				'country_id' => 204,
				'name'       => 'Appenzell Ausserrhoden',
				'code'       => 'AR'
			],
			[
				'id'         => 3097,
				'country_id' => 204,
				'name'       => 'Appenzell Innerrhoden',
				'code'       => 'AI'
			],
			[
				'id'         => 3098,
				'country_id' => 204,
				'name'       => 'Basel-Stadt',
				'code'       => 'BS'
			],
			[
				'id'         => 3099,
				'country_id' => 204,
				'name'       => 'Basel-Landschaft',
				'code'       => 'BL'
			],
			[
				'id'         => 3100,
				'country_id' => 204,
				'name'       => 'Bern',
				'code'       => 'BE'
			],
			[
				'id'         => 3101,
				'country_id' => 204,
				'name'       => 'Fribourg',
				'code'       => 'FR'
			],
			[
				'id'         => 3102,
				'country_id' => 204,
				'name'       => 'Genève',
				'code'       => 'GE'
			],
			[
				'id'         => 3103,
				'country_id' => 204,
				'name'       => 'Glarus',
				'code'       => 'GL'
			],
			[
				'id'         => 3104,
				'country_id' => 204,
				'name'       => 'Graubünden',
				'code'       => 'GR'
			],
			[
				'id'         => 3105,
				'country_id' => 204,
				'name'       => 'Jura',
				'code'       => 'JU'
			],
			[
				'id'         => 3106,
				'country_id' => 204,
				'name'       => 'Luzern',
				'code'       => 'LU'
			],
			[
				'id'         => 3107,
				'country_id' => 204,
				'name'       => 'Neuchâtel',
				'code'       => 'NE'
			],
			[
				'id'         => 3108,
				'country_id' => 204,
				'name'       => 'Nidwald',
				'code'       => 'NW'
			],
			[
				'id'         => 3109,
				'country_id' => 204,
				'name'       => 'Obwald',
				'code'       => 'OW'
			],
			[
				'id'         => 3110,
				'country_id' => 204,
				'name'       => 'St. Gallen',
				'code'       => 'SG'
			],
			[
				'id'         => 3111,
				'country_id' => 204,
				'name'       => 'Schaffhausen',
				'code'       => 'SH'
			],
			[
				'id'         => 3112,
				'country_id' => 204,
				'name'       => 'Schwyz',
				'code'       => 'SZ'
			],
			[
				'id'         => 3113,
				'country_id' => 204,
				'name'       => 'Solothurn',
				'code'       => 'SO'
			],
			[
				'id'         => 3114,
				'country_id' => 204,
				'name'       => 'Thurgau',
				'code'       => 'TG'
			],
			[
				'id'         => 3115,
				'country_id' => 204,
				'name'       => 'Ticino',
				'code'       => 'TI'
			],
			[
				'id'         => 3116,
				'country_id' => 204,
				'name'       => 'Uri',
				'code'       => 'UR'
			],
			[
				'id'         => 3117,
				'country_id' => 204,
				'name'       => 'Valais',
				'code'       => 'VS'
			],
			[
				'id'         => 3118,
				'country_id' => 204,
				'name'       => 'Vaud',
				'code'       => 'VD'
			],
			[
				'id'         => 3119,
				'country_id' => 204,
				'name'       => 'Zug',
				'code'       => 'ZG'
			],
			[
				'id'         => 3120,
				'country_id' => 204,
				'name'       => 'Zürich',
				'code'       => 'ZH'
			],
			[
				'id'         => 3121,
				'country_id' => 205,
				'name'       => 'Al Hasakah',
				'code'       => 'HA'
			],
			[
				'id'         => 3122,
				'country_id' => 205,
				'name'       => 'Al Ladhiqiyah',
				'code'       => 'LA'
			],
			[
				'id'         => 3123,
				'country_id' => 205,
				'name'       => 'Al Qunaytirah',
				'code'       => 'QU'
			],
			[
				'id'         => 3124,
				'country_id' => 205,
				'name'       => 'Ar Raqqah',
				'code'       => 'RQ'
			],
			[
				'id'         => 3125,
				'country_id' => 205,
				'name'       => 'As Suwayda',
				'code'       => 'SU'
			],
			[
				'id'         => 3126,
				'country_id' => 205,
				'name'       => 'Dara',
				'code'       => 'DA'
			],
			[
				'id'         => 3127,
				'country_id' => 205,
				'name'       => 'Dayr az Zawr',
				'code'       => 'DZ'
			],
			[
				'id'         => 3128,
				'country_id' => 205,
				'name'       => 'Dimashq',
				'code'       => 'DI'
			],
			[
				'id'         => 3129,
				'country_id' => 205,
				'name'       => 'Halab',
				'code'       => 'HL'
			],
			[
				'id'         => 3130,
				'country_id' => 205,
				'name'       => 'Hamah',
				'code'       => 'HM'
			],
			[
				'id'         => 3131,
				'country_id' => 205,
				'name'       => 'Hims',
				'code'       => 'HI'
			],
			[
				'id'         => 3132,
				'country_id' => 205,
				'name'       => 'Idlib',
				'code'       => 'ID'
			],
			[
				'id'         => 3133,
				'country_id' => 205,
				'name'       => 'Rif Dimashq',
				'code'       => 'RD'
			],
			[
				'id'         => 3134,
				'country_id' => 205,
				'name'       => 'Tartus',
				'code'       => 'TA'
			],
			[
				'id'         => 3135,
				'country_id' => 206,
				'name'       => 'Chang-hua',
				'code'       => 'CH'
			],
			[
				'id'         => 3136,
				'country_id' => 206,
				'name'       => 'Chia-i',
				'code'       => 'CI'
			],
			[
				'id'         => 3137,
				'country_id' => 206,
				'name'       => 'Hsin-chu',
				'code'       => 'HS'
			],
			[
				'id'         => 3138,
				'country_id' => 206,
				'name'       => 'Hua-lien',
				'code'       => 'HL'
			],
			[
				'id'         => 3139,
				'country_id' => 206,
				'name'       => 'I-lan',
				'code'       => 'IL'
			],
			[
				'id'         => 3140,
				'country_id' => 206,
				'name'       => 'Kao-hsiung county',
				'code'       => 'KH'
			],
			[
				'id'         => 3141,
				'country_id' => 206,
				'name'       => 'Kin-men',
				'code'       => 'KM'
			],
			[
				'id'         => 3142,
				'country_id' => 206,
				'name'       => 'Lien-chiang',
				'code'       => 'LC'
			],
			[
				'id'         => 3143,
				'country_id' => 206,
				'name'       => 'Miao-li',
				'code'       => 'ML'
			],
			[
				'id'         => 3144,
				'country_id' => 206,
				'name'       => 'Nan-t\'ou',
				'code'       => 'NT'
			],
			[
				'id'         => 3145,
				'country_id' => 206,
				'name'       => 'P\'eng-hu',
				'code'       => 'PH'
			],
			[
				'id'         => 3146,
				'country_id' => 206,
				'name'       => 'P\'ing-tung',
				'code'       => 'PT'
			],
			[
				'id'         => 3147,
				'country_id' => 206,
				'name'       => 'T\'ai-chung',
				'code'       => 'TG'
			],
			[
				'id'         => 3148,
				'country_id' => 206,
				'name'       => 'T\'ai-nan',
				'code'       => 'TA'
			],
			[
				'id'         => 3149,
				'country_id' => 206,
				'name'       => 'T\'ai-pei county',
				'code'       => 'TP'
			],
			[
				'id'         => 3150,
				'country_id' => 206,
				'name'       => 'T\'ai-tung',
				'code'       => 'TT'
			],
			[
				'id'         => 3151,
				'country_id' => 206,
				'name'       => 'T\'ao-yuan',
				'code'       => 'TY'
			],
			[
				'id'         => 3152,
				'country_id' => 206,
				'name'       => 'Yun-lin',
				'code'       => 'YL'
			],
			[
				'id'         => 3153,
				'country_id' => 206,
				'name'       => 'Chia-i city',
				'code'       => 'CC'
			],
			[
				'id'         => 3154,
				'country_id' => 206,
				'name'       => 'Chi-lung',
				'code'       => 'CL'
			],
			[
				'id'         => 3155,
				'country_id' => 206,
				'name'       => 'Hsin-chu',
				'code'       => 'HC'
			],
			[
				'id'         => 3156,
				'country_id' => 206,
				'name'       => 'T\'ai-chung',
				'code'       => 'TH'
			],
			[
				'id'         => 3157,
				'country_id' => 206,
				'name'       => 'T\'ai-nan',
				'code'       => 'TN'
			],
			[
				'id'         => 3158,
				'country_id' => 206,
				'name'       => 'Kao-hsiung city',
				'code'       => 'KC'
			],
			[
				'id'         => 3159,
				'country_id' => 206,
				'name'       => 'T\'ai-pei city',
				'code'       => 'TC'
			],
			[
				'id'         => 3160,
				'country_id' => 207,
				'name'       => 'Gorno-Badakhstan',
				'code'       => 'GB'
			],
			[
				'id'         => 3161,
				'country_id' => 207,
				'name'       => 'Khatlon',
				'code'       => 'KT'
			],
			[
				'id'         => 3162,
				'country_id' => 207,
				'name'       => 'Sughd',
				'code'       => 'SU'
			],
			[
				'id'         => 3163,
				'country_id' => 208,
				'name'       => 'Arusha',
				'code'       => 'AR'
			],
			[
				'id'         => 3164,
				'country_id' => 208,
				'name'       => 'Dar es Salaam',
				'code'       => 'DS'
			],
			[
				'id'         => 3165,
				'country_id' => 208,
				'name'       => 'Dodoma',
				'code'       => 'DO'
			],
			[
				'id'         => 3166,
				'country_id' => 208,
				'name'       => 'Iringa',
				'code'       => 'IR'
			],
			[
				'id'         => 3167,
				'country_id' => 208,
				'name'       => 'Kagera',
				'code'       => 'KA'
			],
			[
				'id'         => 3168,
				'country_id' => 208,
				'name'       => 'Kigoma',
				'code'       => 'KI'
			],
			[
				'id'         => 3169,
				'country_id' => 208,
				'name'       => 'Kilimanjaro',
				'code'       => 'KJ'
			],
			[
				'id'         => 3170,
				'country_id' => 208,
				'name'       => 'Lindi',
				'code'       => 'LN'
			],
			[
				'id'         => 3171,
				'country_id' => 208,
				'name'       => 'Manyara',
				'code'       => 'MY'
			],
			[
				'id'         => 3172,
				'country_id' => 208,
				'name'       => 'Mara',
				'code'       => 'MR'
			],
			[
				'id'         => 3173,
				'country_id' => 208,
				'name'       => 'Mbeya',
				'code'       => 'MB'
			],
			[
				'id'         => 3174,
				'country_id' => 208,
				'name'       => 'Morogoro',
				'code'       => 'MO'
			],
			[
				'id'         => 3175,
				'country_id' => 208,
				'name'       => 'Mtwara',
				'code'       => 'MT'
			],
			[
				'id'         => 3176,
				'country_id' => 208,
				'name'       => 'Mwanza',
				'code'       => 'MW'
			],
			[
				'id'         => 3177,
				'country_id' => 208,
				'name'       => 'Pemba North',
				'code'       => 'PN'
			],
			[
				'id'         => 3178,
				'country_id' => 208,
				'name'       => 'Pemba South',
				'code'       => 'PS'
			],
			[
				'id'         => 3179,
				'country_id' => 208,
				'name'       => 'Pwani',
				'code'       => 'PW'
			],
			[
				'id'         => 3180,
				'country_id' => 208,
				'name'       => 'Rukwa',
				'code'       => 'RK'
			],
			[
				'id'         => 3181,
				'country_id' => 208,
				'name'       => 'Ruvuma',
				'code'       => 'RV'
			],
			[
				'id'         => 3182,
				'country_id' => 208,
				'name'       => 'Shinyanga',
				'code'       => 'SH'
			],
			[
				'id'         => 3183,
				'country_id' => 208,
				'name'       => 'Singida',
				'code'       => 'SI'
			],
			[
				'id'         => 3184,
				'country_id' => 208,
				'name'       => 'Tabora',
				'code'       => 'TB'
			],
			[
				'id'         => 3185,
				'country_id' => 208,
				'name'       => 'Tanga',
				'code'       => 'TN'
			],
			[
				'id'         => 3186,
				'country_id' => 208,
				'name'       => 'Zanzibar Central\/South',
				'code'       => 'ZC'
			],
			[
				'id'         => 3187,
				'country_id' => 208,
				'name'       => 'Zanzibar North',
				'code'       => 'ZN'
			],
			[
				'id'         => 3188,
				'country_id' => 208,
				'name'       => 'Zanzibar Urban\/West',
				'code'       => 'ZU'
			],
			[
				'id'         => 3189,
				'country_id' => 209,
				'name'       => 'Amnat Charoen',
				'code'       => 'Amnat Charoen'
			],
			[
				'id'         => 3190,
				'country_id' => 209,
				'name'       => 'Ang Thong',
				'code'       => 'Ang Thong'
			],
			[
				'id'         => 3191,
				'country_id' => 209,
				'name'       => 'Ayutthaya',
				'code'       => 'Ayutthaya'
			],
			[
				'id'         => 3192,
				'country_id' => 209,
				'name'       => 'Bangkok',
				'code'       => 'Bangkok'
			],
			[
				'id'         => 3193,
				'country_id' => 209,
				'name'       => 'Buriram',
				'code'       => 'Buriram'
			],
			[
				'id'         => 3194,
				'country_id' => 209,
				'name'       => 'Chachoengsao',
				'code'       => 'Chachoengsao'
			],
			[
				'id'         => 3195,
				'country_id' => 209,
				'name'       => 'Chai Nat',
				'code'       => 'Chai Nat'
			],
			[
				'id'         => 3196,
				'country_id' => 209,
				'name'       => 'Chaiyaphum',
				'code'       => 'Chaiyaphum'
			],
			[
				'id'         => 3197,
				'country_id' => 209,
				'name'       => 'Chanthaburi',
				'code'       => 'Chanthaburi'
			],
			[
				'id'         => 3198,
				'country_id' => 209,
				'name'       => 'Chiang Mai',
				'code'       => 'Chiang Mai'
			],
			[
				'id'         => 3199,
				'country_id' => 209,
				'name'       => 'Chiang Rai',
				'code'       => 'Chiang Rai'
			],
			[
				'id'         => 3200,
				'country_id' => 209,
				'name'       => 'Chon Buri',
				'code'       => 'Chon Buri'
			],
			[
				'id'         => 3201,
				'country_id' => 209,
				'name'       => 'Chumphon',
				'code'       => 'Chumphon'
			],
			[
				'id'         => 3202,
				'country_id' => 209,
				'name'       => 'Kalasin',
				'code'       => 'Kalasin'
			],
			[
				'id'         => 3203,
				'country_id' => 209,
				'name'       => 'Kamphaeng Phet',
				'code'       => 'Kamphaeng Phet'
			],
			[
				'id'         => 3204,
				'country_id' => 209,
				'name'       => 'Kanchanaburi',
				'code'       => 'Kanchanaburi'
			],
			[
				'id'         => 3205,
				'country_id' => 209,
				'name'       => 'Khon Kaen',
				'code'       => 'Khon Kaen'
			],
			[
				'id'         => 3206,
				'country_id' => 209,
				'name'       => 'Krabi',
				'code'       => 'Krabi'
			],
			[
				'id'         => 3207,
				'country_id' => 209,
				'name'       => 'Lampang',
				'code'       => 'Lampang'
			],
			[
				'id'         => 3208,
				'country_id' => 209,
				'name'       => 'Lamphun',
				'code'       => 'Lamphun'
			],
			[
				'id'         => 3209,
				'country_id' => 209,
				'name'       => 'Loei',
				'code'       => 'Loei'
			],
			[
				'id'         => 3210,
				'country_id' => 209,
				'name'       => 'Lop Buri',
				'code'       => 'Lop Buri'
			],
			[
				'id'         => 3211,
				'country_id' => 209,
				'name'       => 'Mae Hong Son',
				'code'       => 'Mae Hong Son'
			],
			[
				'id'         => 3212,
				'country_id' => 209,
				'name'       => 'Maha Sarakham',
				'code'       => 'Maha Sarakham'
			],
			[
				'id'         => 3213,
				'country_id' => 209,
				'name'       => 'Mukdahan',
				'code'       => 'Mukdahan'
			],
			[
				'id'         => 3214,
				'country_id' => 209,
				'name'       => 'Nakhon Nayok',
				'code'       => 'Nakhon Nayok'
			],
			[
				'id'         => 3215,
				'country_id' => 209,
				'name'       => 'Nakhon Pathom',
				'code'       => 'Nakhon Pathom'
			],
			[
				'id'         => 3216,
				'country_id' => 209,
				'name'       => 'Nakhon Phanom',
				'code'       => 'Nakhon Phanom'
			],
			[
				'id'         => 3217,
				'country_id' => 209,
				'name'       => 'Nakhon Ratchasima',
				'code'       => 'Nakhon Ratchasima'
			],
			[
				'id'         => 3218,
				'country_id' => 209,
				'name'       => 'Nakhon Sawan',
				'code'       => 'Nakhon Sawan'
			],
			[
				'id'         => 3219,
				'country_id' => 209,
				'name'       => 'Nakhon Si Thammarat',
				'code'       => 'Nakhon Si Thammarat'
			],
			[
				'id'         => 3220,
				'country_id' => 209,
				'name'       => 'Nan',
				'code'       => 'Nan'
			],
			[
				'id'         => 3221,
				'country_id' => 209,
				'name'       => 'Narathiwat',
				'code'       => 'Narathiwat'
			],
			[
				'id'         => 3222,
				'country_id' => 209,
				'name'       => 'Nong Bua Lamphu',
				'code'       => 'Nong Bua Lamphu'
			],
			[
				'id'         => 3223,
				'country_id' => 209,
				'name'       => 'Nong Khai',
				'code'       => 'Nong Khai'
			],
			[
				'id'         => 3224,
				'country_id' => 209,
				'name'       => 'Nonthaburi',
				'code'       => 'Nonthaburi'
			],
			[
				'id'         => 3225,
				'country_id' => 209,
				'name'       => 'Pathum Thani',
				'code'       => 'Pathum Thani'
			],
			[
				'id'         => 3226,
				'country_id' => 209,
				'name'       => 'Pattani',
				'code'       => 'Pattani'
			],
			[
				'id'         => 3227,
				'country_id' => 209,
				'name'       => 'Phangnga',
				'code'       => 'Phangnga'
			],
			[
				'id'         => 3228,
				'country_id' => 209,
				'name'       => 'Phatthalung',
				'code'       => 'Phatthalung'
			],
			[
				'id'         => 3229,
				'country_id' => 209,
				'name'       => 'Phayao',
				'code'       => 'Phayao'
			],
			[
				'id'         => 3230,
				'country_id' => 209,
				'name'       => 'Phetchabun',
				'code'       => 'Phetchabun'
			],
			[
				'id'         => 3231,
				'country_id' => 209,
				'name'       => 'Phetchaburi',
				'code'       => 'Phetchaburi'
			],
			[
				'id'         => 3232,
				'country_id' => 209,
				'name'       => 'Phichit',
				'code'       => 'Phichit'
			],
			[
				'id'         => 3233,
				'country_id' => 209,
				'name'       => 'Phitsanulok',
				'code'       => 'Phitsanulok'
			],
			[
				'id'         => 3234,
				'country_id' => 209,
				'name'       => 'Phrae',
				'code'       => 'Phrae'
			],
			[
				'id'         => 3235,
				'country_id' => 209,
				'name'       => 'Phuket',
				'code'       => 'Phuket'
			],
			[
				'id'         => 3236,
				'country_id' => 209,
				'name'       => 'Prachin Buri',
				'code'       => 'Prachin Buri'
			],
			[
				'id'         => 3237,
				'country_id' => 209,
				'name'       => 'Prachuap Khiri Khan',
				'code'       => 'Prachuap Khiri Khan'
			],
			[
				'id'         => 3238,
				'country_id' => 209,
				'name'       => 'Ranong',
				'code'       => 'Ranong'
			],
			[
				'id'         => 3239,
				'country_id' => 209,
				'name'       => 'Ratchaburi',
				'code'       => 'Ratchaburi'
			],
			[
				'id'         => 3240,
				'country_id' => 209,
				'name'       => 'Rayong',
				'code'       => 'Rayong'
			],
			[
				'id'         => 3241,
				'country_id' => 209,
				'name'       => 'Roi Et',
				'code'       => 'Roi Et'
			],
			[
				'id'         => 3242,
				'country_id' => 209,
				'name'       => 'Sa Kaeo',
				'code'       => 'Sa Kaeo'
			],
			[
				'id'         => 3243,
				'country_id' => 209,
				'name'       => 'Sakon Nakhon',
				'code'       => 'Sakon Nakhon'
			],
			[
				'id'         => 3244,
				'country_id' => 209,
				'name'       => 'Samut Prakan',
				'code'       => 'Samut Prakan'
			],
			[
				'id'         => 3245,
				'country_id' => 209,
				'name'       => 'Samut Sakhon',
				'code'       => 'Samut Sakhon'
			],
			[
				'id'         => 3246,
				'country_id' => 209,
				'name'       => 'Samut Songkhram',
				'code'       => 'Samut Songkhram'
			],
			[
				'id'         => 3247,
				'country_id' => 209,
				'name'       => 'Sara Buri',
				'code'       => 'Sara Buri'
			],
			[
				'id'         => 3248,
				'country_id' => 209,
				'name'       => 'Satun',
				'code'       => 'Satun'
			],
			[
				'id'         => 3249,
				'country_id' => 209,
				'name'       => 'Sing Buri',
				'code'       => 'Sing Buri'
			],
			[
				'id'         => 3250,
				'country_id' => 209,
				'name'       => 'Sisaket',
				'code'       => 'Sisaket'
			],
			[
				'id'         => 3251,
				'country_id' => 209,
				'name'       => 'Songkhla',
				'code'       => 'Songkhla'
			],
			[
				'id'         => 3252,
				'country_id' => 209,
				'name'       => 'Sukhothai',
				'code'       => 'Sukhothai'
			],
			[
				'id'         => 3253,
				'country_id' => 209,
				'name'       => 'Suphan Buri',
				'code'       => 'Suphan Buri'
			],
			[
				'id'         => 3254,
				'country_id' => 209,
				'name'       => 'Surat Thani',
				'code'       => 'Surat Thani'
			],
			[
				'id'         => 3255,
				'country_id' => 209,
				'name'       => 'Surin',
				'code'       => 'Surin'
			],
			[
				'id'         => 3256,
				'country_id' => 209,
				'name'       => 'Tak',
				'code'       => 'Tak'
			],
			[
				'id'         => 3257,
				'country_id' => 209,
				'name'       => 'Trang',
				'code'       => 'Trang'
			],
			[
				'id'         => 3258,
				'country_id' => 209,
				'name'       => 'Trat',
				'code'       => 'Trat'
			],
			[
				'id'         => 3259,
				'country_id' => 209,
				'name'       => 'Ubon Ratchathani',
				'code'       => 'Ubon Ratchathani'
			],
			[
				'id'         => 3260,
				'country_id' => 209,
				'name'       => 'Udon Thani',
				'code'       => 'Udon Thani'
			],
			[
				'id'         => 3261,
				'country_id' => 209,
				'name'       => 'Uthai Thani',
				'code'       => 'Uthai Thani'
			],
			[
				'id'         => 3262,
				'country_id' => 209,
				'name'       => 'Uttaradit',
				'code'       => 'Uttaradit'
			],
			[
				'id'         => 3263,
				'country_id' => 209,
				'name'       => 'Yala',
				'code'       => 'Yala'
			],
			[
				'id'         => 3264,
				'country_id' => 209,
				'name'       => 'Yasothon',
				'code'       => 'Yasothon'
			],
			[
				'id'         => 3265,
				'country_id' => 210,
				'name'       => 'Kara',
				'code'       => 'K'
			],
			[
				'id'         => 3266,
				'country_id' => 210,
				'name'       => 'Plateaux',
				'code'       => 'P'
			],
			[
				'id'         => 3267,
				'country_id' => 210,
				'name'       => 'Savanes',
				'code'       => 'S'
			],
			[
				'id'         => 3268,
				'country_id' => 210,
				'name'       => 'Centrale',
				'code'       => 'C'
			],
			[
				'id'         => 3269,
				'country_id' => 210,
				'name'       => 'Maritime',
				'code'       => 'M'
			],
			[
				'id'         => 3270,
				'country_id' => 211,
				'name'       => 'Atafu',
				'code'       => 'A'
			],
			[
				'id'         => 3271,
				'country_id' => 211,
				'name'       => 'Fakaofo',
				'code'       => 'F'
			],
			[
				'id'         => 3272,
				'country_id' => 211,
				'name'       => 'Nukunonu',
				'code'       => 'N'
			],
			[
				'id'         => 3273,
				'country_id' => 212,
				'name'       => 'Ha\'apai',
				'code'       => 'H'
			],
			[
				'id'         => 3274,
				'country_id' => 212,
				'name'       => 'Tongatapu',
				'code'       => 'T'
			],
			[
				'id'         => 3275,
				'country_id' => 212,
				'name'       => 'Vava\'u',
				'code'       => 'V'
			],
			[
				'id'         => 3276,
				'country_id' => 213,
				'name'       => 'Couva\/Tabaquite\/Talparo',
				'code'       => 'CT'
			],
			[
				'id'         => 3277,
				'country_id' => 213,
				'name'       => 'Diego Martin',
				'code'       => 'DM'
			],
			[
				'id'         => 3278,
				'country_id' => 213,
				'name'       => 'Mayaro\/Rio Claro',
				'code'       => 'MR'
			],
			[
				'id'         => 3279,
				'country_id' => 213,
				'name'       => 'Penal\/Debe',
				'code'       => 'PD'
			],
			[
				'id'         => 3280,
				'country_id' => 213,
				'name'       => 'Princes Town',
				'code'       => 'PT'
			],
			[
				'id'         => 3281,
				'country_id' => 213,
				'name'       => 'Sangre Grande',
				'code'       => 'SG'
			],
			[
				'id'         => 3282,
				'country_id' => 213,
				'name'       => 'San Juan\/Laventille',
				'code'       => 'SL'
			],
			[
				'id'         => 3283,
				'country_id' => 213,
				'name'       => 'Siparia',
				'code'       => 'SI'
			],
			[
				'id'         => 3284,
				'country_id' => 213,
				'name'       => 'Tunapuna\/Piarco',
				'code'       => 'TP'
			],
			[
				'id'         => 3285,
				'country_id' => 213,
				'name'       => 'Port of Spain',
				'code'       => 'PS'
			],
			[
				'id'         => 3286,
				'country_id' => 213,
				'name'       => 'San Fernando',
				'code'       => 'SF'
			],
			[
				'id'         => 3287,
				'country_id' => 213,
				'name'       => 'Arima',
				'code'       => 'AR'
			],
			[
				'id'         => 3288,
				'country_id' => 213,
				'name'       => 'Point Fortin',
				'code'       => 'PF'
			],
			[
				'id'         => 3289,
				'country_id' => 213,
				'name'       => 'Chaguanas',
				'code'       => 'CH'
			],
			[
				'id'         => 3290,
				'country_id' => 213,
				'name'       => 'Tobago',
				'code'       => 'TO'
			],
			[
				'id'         => 3291,
				'country_id' => 214,
				'name'       => 'Ariana',
				'code'       => 'AR'
			],
			[
				'id'         => 3292,
				'country_id' => 214,
				'name'       => 'Beja',
				'code'       => 'BJ'
			],
			[
				'id'         => 3293,
				'country_id' => 214,
				'name'       => 'Ben Arous',
				'code'       => 'BA'
			],
			[
				'id'         => 3294,
				'country_id' => 214,
				'name'       => 'Bizerte',
				'code'       => 'BI'
			],
			[
				'id'         => 3295,
				'country_id' => 214,
				'name'       => 'Gabes',
				'code'       => 'GB'
			],
			[
				'id'         => 3296,
				'country_id' => 214,
				'name'       => 'Gafsa',
				'code'       => 'GF'
			],
			[
				'id'         => 3297,
				'country_id' => 214,
				'name'       => 'Jendouba',
				'code'       => 'JE'
			],
			[
				'id'         => 3298,
				'country_id' => 214,
				'name'       => 'Kairouan',
				'code'       => 'KR'
			],
			[
				'id'         => 3299,
				'country_id' => 214,
				'name'       => 'Kasserine',
				'code'       => 'KS'
			],
			[
				'id'         => 3300,
				'country_id' => 214,
				'name'       => 'Kebili',
				'code'       => 'KB'
			],
			[
				'id'         => 3301,
				'country_id' => 214,
				'name'       => 'Kef',
				'code'       => 'KF'
			],
			[
				'id'         => 3302,
				'country_id' => 214,
				'name'       => 'Mahdia',
				'code'       => 'MH'
			],
			[
				'id'         => 3303,
				'country_id' => 214,
				'name'       => 'Manouba',
				'code'       => 'MN'
			],
			[
				'id'         => 3304,
				'country_id' => 214,
				'name'       => 'Medenine',
				'code'       => 'ME'
			],
			[
				'id'         => 3305,
				'country_id' => 214,
				'name'       => 'Monastir',
				'code'       => 'MO'
			],
			[
				'id'         => 3306,
				'country_id' => 214,
				'name'       => 'Nabeul',
				'code'       => 'NA'
			],
			[
				'id'         => 3307,
				'country_id' => 214,
				'name'       => 'Sfax',
				'code'       => 'SF'
			],
			[
				'id'         => 3308,
				'country_id' => 214,
				'name'       => 'Sidi',
				'code'       => 'SD'
			],
			[
				'id'         => 3309,
				'country_id' => 214,
				'name'       => 'Siliana',
				'code'       => 'SL'
			],
			[
				'id'         => 3310,
				'country_id' => 214,
				'name'       => 'Sousse',
				'code'       => 'SO'
			],
			[
				'id'         => 3311,
				'country_id' => 214,
				'name'       => 'Tataouine',
				'code'       => 'TA'
			],
			[
				'id'         => 3312,
				'country_id' => 214,
				'name'       => 'Tozeur',
				'code'       => 'TO'
			],
			[
				'id'         => 3313,
				'country_id' => 214,
				'name'       => 'Tunis',
				'code'       => 'TU'
			],
			[
				'id'         => 3314,
				'country_id' => 214,
				'name'       => 'Zaghouan',
				'code'       => 'ZA'
			],
			[
				'id'         => 3315,
				'country_id' => 215,
				'name'       => 'Adana',
				'code'       => 'ADA'
			],
			[
				'id'         => 3316,
				'country_id' => 215,
				'name'       => 'Adıyaman',
				'code'       => 'ADI'
			],
			[
				'id'         => 3317,
				'country_id' => 215,
				'name'       => 'Afyonkarahisar',
				'code'       => 'AFY'
			],
			[
				'id'         => 3318,
				'country_id' => 215,
				'name'       => 'Ağrı',
				'code'       => 'AGR'
			],
			[
				'id'         => 3319,
				'country_id' => 215,
				'name'       => 'Aksaray',
				'code'       => 'AKS'
			],
			[
				'id'         => 3320,
				'country_id' => 215,
				'name'       => 'Amasya',
				'code'       => 'AMA'
			],
			[
				'id'         => 3321,
				'country_id' => 215,
				'name'       => 'Ankara',
				'code'       => 'ANK'
			],
			[
				'id'         => 3322,
				'country_id' => 215,
				'name'       => 'Antalya',
				'code'       => 'ANT'
			],
			[
				'id'         => 3323,
				'country_id' => 215,
				'name'       => 'Ardahan',
				'code'       => 'ARD'
			],
			[
				'id'         => 3324,
				'country_id' => 215,
				'name'       => 'Artvin',
				'code'       => 'ART'
			],
			[
				'id'         => 3325,
				'country_id' => 215,
				'name'       => 'Aydın',
				'code'       => 'AYI'
			],
			[
				'id'         => 3326,
				'country_id' => 215,
				'name'       => 'Balıkesir',
				'code'       => 'BAL'
			],
			[
				'id'         => 3327,
				'country_id' => 215,
				'name'       => 'Bartın',
				'code'       => 'BAR'
			],
			[
				'id'         => 3328,
				'country_id' => 215,
				'name'       => 'Batman',
				'code'       => 'BAT'
			],
			[
				'id'         => 3329,
				'country_id' => 215,
				'name'       => 'Bayburt',
				'code'       => 'BAY'
			],
			[
				'id'         => 3330,
				'country_id' => 215,
				'name'       => 'Bilecik',
				'code'       => 'BIL'
			],
			[
				'id'         => 3331,
				'country_id' => 215,
				'name'       => 'Bingöl',
				'code'       => 'BIN'
			],
			[
				'id'         => 3332,
				'country_id' => 215,
				'name'       => 'Bitlis',
				'code'       => 'BIT'
			],
			[
				'id'         => 3333,
				'country_id' => 215,
				'name'       => 'Bolu',
				'code'       => 'BOL'
			],
			[
				'id'         => 3334,
				'country_id' => 215,
				'name'       => 'Burdur',
				'code'       => 'BRD'
			],
			[
				'id'         => 3335,
				'country_id' => 215,
				'name'       => 'Bursa',
				'code'       => 'BRS'
			],
			[
				'id'         => 3336,
				'country_id' => 215,
				'name'       => 'Çanakkale',
				'code'       => 'CKL'
			],
			[
				'id'         => 3337,
				'country_id' => 215,
				'name'       => 'Çankırı',
				'code'       => 'CKR'
			],
			[
				'id'         => 3338,
				'country_id' => 215,
				'name'       => 'Çorum',
				'code'       => 'COR'
			],
			[
				'id'         => 3339,
				'country_id' => 215,
				'name'       => 'Denizli',
				'code'       => 'DEN'
			],
			[
				'id'         => 3340,
				'country_id' => 215,
				'name'       => 'Diyarbakır',
				'code'       => 'DIY'
			],
			[
				'id'         => 3341,
				'country_id' => 215,
				'name'       => 'Düzce',
				'code'       => 'DUZ'
			],
			[
				'id'         => 3342,
				'country_id' => 215,
				'name'       => 'Edirne',
				'code'       => 'EDI'
			],
			[
				'id'         => 3343,
				'country_id' => 215,
				'name'       => 'Elazığ',
				'code'       => 'ELA'
			],
			[
				'id'         => 3344,
				'country_id' => 215,
				'name'       => 'Erzincan',
				'code'       => 'EZC'
			],
			[
				'id'         => 3345,
				'country_id' => 215,
				'name'       => 'Erzurum',
				'code'       => 'EZR'
			],
			[
				'id'         => 3346,
				'country_id' => 215,
				'name'       => 'Eskişehir',
				'code'       => 'ESK'
			],
			[
				'id'         => 3347,
				'country_id' => 215,
				'name'       => 'Gaziantep',
				'code'       => 'GAZ'
			],
			[
				'id'         => 3348,
				'country_id' => 215,
				'name'       => 'Giresun',
				'code'       => 'GIR'
			],
			[
				'id'         => 3349,
				'country_id' => 215,
				'name'       => 'Gümüşhane',
				'code'       => 'GMS'
			],
			[
				'id'         => 3350,
				'country_id' => 215,
				'name'       => 'Hakkari',
				'code'       => 'HKR'
			],
			[
				'id'         => 3351,
				'country_id' => 215,
				'name'       => 'Hatay',
				'code'       => 'HTY'
			],
			[
				'id'         => 3352,
				'country_id' => 215,
				'name'       => 'Iğdır',
				'code'       => 'IGD'
			],
			[
				'id'         => 3353,
				'country_id' => 215,
				'name'       => 'Isparta',
				'code'       => 'ISP'
			],
			[
				'id'         => 3354,
				'country_id' => 215,
				'name'       => 'İstanbul',
				'code'       => 'IST'
			],
			[
				'id'         => 3355,
				'country_id' => 215,
				'name'       => 'İzmir',
				'code'       => 'IZM'
			],
			[
				'id'         => 3356,
				'country_id' => 215,
				'name'       => 'Kahramanmaraş',
				'code'       => 'KAH'
			],
			[
				'id'         => 3357,
				'country_id' => 215,
				'name'       => 'Karabük',
				'code'       => 'KRB'
			],
			[
				'id'         => 3358,
				'country_id' => 215,
				'name'       => 'Karaman',
				'code'       => 'KRM'
			],
			[
				'id'         => 3359,
				'country_id' => 215,
				'name'       => 'Kars',
				'code'       => 'KRS'
			],
			[
				'id'         => 3360,
				'country_id' => 215,
				'name'       => 'Kastamonu',
				'code'       => 'KAS'
			],
			[
				'id'         => 3361,
				'country_id' => 215,
				'name'       => 'Kayseri',
				'code'       => 'KAY'
			],
			[
				'id'         => 3362,
				'country_id' => 215,
				'name'       => 'Kilis',
				'code'       => 'KLS'
			],
			[
				'id'         => 3363,
				'country_id' => 215,
				'name'       => 'Kırıkkale',
				'code'       => 'KRK'
			],
			[
				'id'         => 3364,
				'country_id' => 215,
				'name'       => 'Kırklareli',
				'code'       => 'KLR'
			],
			[
				'id'         => 3365,
				'country_id' => 215,
				'name'       => 'Kırşehir',
				'code'       => 'KRH'
			],
			[
				'id'         => 3366,
				'country_id' => 215,
				'name'       => 'Kocaeli',
				'code'       => 'KOC'
			],
			[
				'id'         => 3367,
				'country_id' => 215,
				'name'       => 'Konya',
				'code'       => 'KON'
			],
			[
				'id'         => 3368,
				'country_id' => 215,
				'name'       => 'Kütahya',
				'code'       => 'KUT'
			],
			[
				'id'         => 3369,
				'country_id' => 215,
				'name'       => 'Malatya',
				'code'       => 'MAL'
			],
			[
				'id'         => 3370,
				'country_id' => 215,
				'name'       => 'Manisa',
				'code'       => 'MAN'
			],
			[
				'id'         => 3371,
				'country_id' => 215,
				'name'       => 'Mardin',
				'code'       => 'MAR'
			],
			[
				'id'         => 3372,
				'country_id' => 215,
				'name'       => 'Mersin',
				'code'       => 'MER'
			],
			[
				'id'         => 3373,
				'country_id' => 215,
				'name'       => 'Muğla',
				'code'       => 'MUG'
			],
			[
				'id'         => 3374,
				'country_id' => 215,
				'name'       => 'Muş',
				'code'       => 'MUS'
			],
			[
				'id'         => 3375,
				'country_id' => 215,
				'name'       => 'Nevşehir',
				'code'       => 'NEV'
			],
			[
				'id'         => 3376,
				'country_id' => 215,
				'name'       => 'Niğde',
				'code'       => 'NIG'
			],
			[
				'id'         => 3377,
				'country_id' => 215,
				'name'       => 'Ordu',
				'code'       => 'ORD'
			],
			[
				'id'         => 3378,
				'country_id' => 215,
				'name'       => 'Osmaniye',
				'code'       => 'OSM'
			],
			[
				'id'         => 3379,
				'country_id' => 215,
				'name'       => 'Rize',
				'code'       => 'RIZ'
			],
			[
				'id'         => 3380,
				'country_id' => 215,
				'name'       => 'Sakarya',
				'code'       => 'SAK'
			],
			[
				'id'         => 3381,
				'country_id' => 215,
				'name'       => 'Samsun',
				'code'       => 'SAM'
			],
			[
				'id'         => 3382,
				'country_id' => 215,
				'name'       => 'Şanlıurfa',
				'code'       => 'SAN'
			],
			[
				'id'         => 3383,
				'country_id' => 215,
				'name'       => 'Siirt',
				'code'       => 'SII'
			],
			[
				'id'         => 3384,
				'country_id' => 215,
				'name'       => 'Sinop',
				'code'       => 'SIN'
			],
			[
				'id'         => 3385,
				'country_id' => 215,
				'name'       => 'Şırnak',
				'code'       => 'SIR'
			],
			[
				'id'         => 3386,
				'country_id' => 215,
				'name'       => 'Sivas',
				'code'       => 'SIV'
			],
			[
				'id'         => 3387,
				'country_id' => 215,
				'name'       => 'Tekirdağ',
				'code'       => 'TEL'
			],
			[
				'id'         => 3388,
				'country_id' => 215,
				'name'       => 'Tokat',
				'code'       => 'TOK'
			],
			[
				'id'         => 3389,
				'country_id' => 215,
				'name'       => 'Trabzon',
				'code'       => 'TRA'
			],
			[
				'id'         => 3390,
				'country_id' => 215,
				'name'       => 'Tunceli',
				'code'       => 'TUN'
			],
			[
				'id'         => 3391,
				'country_id' => 215,
				'name'       => 'Uşak',
				'code'       => 'USK'
			],
			[
				'id'         => 3392,
				'country_id' => 215,
				'name'       => 'Van',
				'code'       => 'VAN'
			],
			[
				'id'         => 3393,
				'country_id' => 215,
				'name'       => 'Yalova',
				'code'       => 'YAL'
			],
			[
				'id'         => 3394,
				'country_id' => 215,
				'name'       => 'Yozgat',
				'code'       => 'YOZ'
			],
			[
				'id'         => 3395,
				'country_id' => 215,
				'name'       => 'Zonguldak',
				'code'       => 'ZON'
			],
			[
				'id'         => 3396,
				'country_id' => 216,
				'name'       => 'Ahal Welayaty',
				'code'       => 'A'
			],
			[
				'id'         => 3397,
				'country_id' => 216,
				'name'       => 'Balkan Welayaty',
				'code'       => 'B'
			],
			[
				'id'         => 3398,
				'country_id' => 216,
				'name'       => 'Dashhowuz Welayaty',
				'code'       => 'D'
			],
			[
				'id'         => 3399,
				'country_id' => 216,
				'name'       => 'Lebap Welayaty',
				'code'       => 'L'
			],
			[
				'id'         => 3400,
				'country_id' => 216,
				'name'       => 'Mary Welayaty',
				'code'       => 'M'
			],
			[
				'id'         => 3401,
				'country_id' => 217,
				'name'       => 'Ambergris Cays',
				'code'       => 'AC'
			],
			[
				'id'         => 3402,
				'country_id' => 217,
				'name'       => 'Dellis Cay',
				'code'       => 'DC'
			],
			[
				'id'         => 3403,
				'country_id' => 217,
				'name'       => 'French Cay',
				'code'       => 'FC'
			],
			[
				'id'         => 3404,
				'country_id' => 217,
				'name'       => 'Little Water Cay',
				'code'       => 'LW'
			],
			[
				'id'         => 3405,
				'country_id' => 217,
				'name'       => 'Parrot Cay',
				'code'       => 'RC'
			],
			[
				'id'         => 3406,
				'country_id' => 217,
				'name'       => 'Pine Cay',
				'code'       => 'PN'
			],
			[
				'id'         => 3407,
				'country_id' => 217,
				'name'       => 'Salt Cay',
				'code'       => 'SL'
			],
			[
				'id'         => 3408,
				'country_id' => 217,
				'name'       => 'Grand Turk',
				'code'       => 'GT'
			],
			[
				'id'         => 3409,
				'country_id' => 217,
				'name'       => 'South Caicos',
				'code'       => 'SC'
			],
			[
				'id'         => 3410,
				'country_id' => 217,
				'name'       => 'East Caicos',
				'code'       => 'EC'
			],
			[
				'id'         => 3411,
				'country_id' => 217,
				'name'       => 'Middle Caicos',
				'code'       => 'MC'
			],
			[
				'id'         => 3412,
				'country_id' => 217,
				'name'       => 'North Caicos',
				'code'       => 'NC'
			],
			[
				'id'         => 3413,
				'country_id' => 217,
				'name'       => 'Providenciales',
				'code'       => 'PR'
			],
			[
				'id'         => 3414,
				'country_id' => 217,
				'name'       => 'West Caicos',
				'code'       => 'WC'
			],
			[
				'id'         => 3415,
				'country_id' => 218,
				'name'       => 'Nanumanga',
				'code'       => 'NMG'
			],
			[
				'id'         => 3416,
				'country_id' => 218,
				'name'       => 'Niulakita',
				'code'       => 'NLK'
			],
			[
				'id'         => 3417,
				'country_id' => 218,
				'name'       => 'Niutao',
				'code'       => 'NTO'
			],
			[
				'id'         => 3418,
				'country_id' => 218,
				'name'       => 'Funafuti',
				'code'       => 'FUN'
			],
			[
				'id'         => 3419,
				'country_id' => 218,
				'name'       => 'Nanumea',
				'code'       => 'NME'
			],
			[
				'id'         => 3420,
				'country_id' => 218,
				'name'       => 'Nui',
				'code'       => 'NUI'
			],
			[
				'id'         => 3421,
				'country_id' => 218,
				'name'       => 'Nukufetau',
				'code'       => 'NFT'
			],
			[
				'id'         => 3422,
				'country_id' => 218,
				'name'       => 'Nukulaelae',
				'code'       => 'NLL'
			],
			[
				'id'         => 3423,
				'country_id' => 218,
				'name'       => 'Vaitupu',
				'code'       => 'VAI'
			],
			[
				'id'         => 3424,
				'country_id' => 219,
				'name'       => 'Kalangala',
				'code'       => 'KAL'
			],
			[
				'id'         => 3425,
				'country_id' => 219,
				'name'       => 'Kampala',
				'code'       => 'KMP'
			],
			[
				'id'         => 3426,
				'country_id' => 219,
				'name'       => 'Kayunga',
				'code'       => 'KAY'
			],
			[
				'id'         => 3427,
				'country_id' => 219,
				'name'       => 'Kiboga',
				'code'       => 'KIB'
			],
			[
				'id'         => 3428,
				'country_id' => 219,
				'name'       => 'Luwero',
				'code'       => 'LUW'
			],
			[
				'id'         => 3429,
				'country_id' => 219,
				'name'       => 'Masaka',
				'code'       => 'MAS'
			],
			[
				'id'         => 3430,
				'country_id' => 219,
				'name'       => 'Mpigi',
				'code'       => 'MPI'
			],
			[
				'id'         => 3431,
				'country_id' => 219,
				'name'       => 'Mubende',
				'code'       => 'MUB'
			],
			[
				'id'         => 3432,
				'country_id' => 219,
				'name'       => 'Mukono',
				'code'       => 'MUK'
			],
			[
				'id'         => 3433,
				'country_id' => 219,
				'name'       => 'Nakasongola',
				'code'       => 'NKS'
			],
			[
				'id'         => 3434,
				'country_id' => 219,
				'name'       => 'Rakai',
				'code'       => 'RAK'
			],
			[
				'id'         => 3435,
				'country_id' => 219,
				'name'       => 'Sembabule',
				'code'       => 'SEM'
			],
			[
				'id'         => 3436,
				'country_id' => 219,
				'name'       => 'Wakiso',
				'code'       => 'WAK'
			],
			[
				'id'         => 3437,
				'country_id' => 219,
				'name'       => 'Bugiri',
				'code'       => 'BUG'
			],
			[
				'id'         => 3438,
				'country_id' => 219,
				'name'       => 'Busia',
				'code'       => 'BUS'
			],
			[
				'id'         => 3439,
				'country_id' => 219,
				'name'       => 'Iganga',
				'code'       => 'IGA'
			],
			[
				'id'         => 3440,
				'country_id' => 219,
				'name'       => 'Jinja',
				'code'       => 'JIN'
			],
			[
				'id'         => 3441,
				'country_id' => 219,
				'name'       => 'Kaberamaido',
				'code'       => 'KAB'
			],
			[
				'id'         => 3442,
				'country_id' => 219,
				'name'       => 'Kamuli',
				'code'       => 'KML'
			],
			[
				'id'         => 3443,
				'country_id' => 219,
				'name'       => 'Kapchorwa',
				'code'       => 'KPC'
			],
			[
				'id'         => 3444,
				'country_id' => 219,
				'name'       => 'Katakwi',
				'code'       => 'KTK'
			],
			[
				'id'         => 3445,
				'country_id' => 219,
				'name'       => 'Kumi',
				'code'       => 'KUM'
			],
			[
				'id'         => 3446,
				'country_id' => 219,
				'name'       => 'Mayuge',
				'code'       => 'MAY'
			],
			[
				'id'         => 3447,
				'country_id' => 219,
				'name'       => 'Mbale',
				'code'       => 'MBA'
			],
			[
				'id'         => 3448,
				'country_id' => 219,
				'name'       => 'Pallisa',
				'code'       => 'PAL'
			],
			[
				'id'         => 3449,
				'country_id' => 219,
				'name'       => 'Sironko',
				'code'       => 'SIR'
			],
			[
				'id'         => 3450,
				'country_id' => 219,
				'name'       => 'Soroti',
				'code'       => 'SOR'
			],
			[
				'id'         => 3451,
				'country_id' => 219,
				'name'       => 'Tororo',
				'code'       => 'TOR'
			],
			[
				'id'         => 3452,
				'country_id' => 219,
				'name'       => 'Adjumani',
				'code'       => 'ADJ'
			],
			[
				'id'         => 3453,
				'country_id' => 219,
				'name'       => 'Apac',
				'code'       => 'APC'
			],
			[
				'id'         => 3454,
				'country_id' => 219,
				'name'       => 'Arua',
				'code'       => 'ARU'
			],
			[
				'id'         => 3455,
				'country_id' => 219,
				'name'       => 'Gulu',
				'code'       => 'GUL'
			],
			[
				'id'         => 3456,
				'country_id' => 219,
				'name'       => 'Kitgum',
				'code'       => 'KIT'
			],
			[
				'id'         => 3457,
				'country_id' => 219,
				'name'       => 'Kotido',
				'code'       => 'KOT'
			],
			[
				'id'         => 3458,
				'country_id' => 219,
				'name'       => 'Lira',
				'code'       => 'LIR'
			],
			[
				'id'         => 3459,
				'country_id' => 219,
				'name'       => 'Moroto',
				'code'       => 'MRT'
			],
			[
				'id'         => 3460,
				'country_id' => 219,
				'name'       => 'Moyo',
				'code'       => 'MOY'
			],
			[
				'id'         => 3461,
				'country_id' => 219,
				'name'       => 'Nakapiripirit',
				'code'       => 'NAK'
			],
			[
				'id'         => 3462,
				'country_id' => 219,
				'name'       => 'Nebbi',
				'code'       => 'NEB'
			],
			[
				'id'         => 3463,
				'country_id' => 219,
				'name'       => 'Pader',
				'code'       => 'PAD'
			],
			[
				'id'         => 3464,
				'country_id' => 219,
				'name'       => 'Yumbe',
				'code'       => 'YUM'
			],
			[
				'id'         => 3465,
				'country_id' => 219,
				'name'       => 'Bundibugyo',
				'code'       => 'BUN'
			],
			[
				'id'         => 3466,
				'country_id' => 219,
				'name'       => 'Bushenyi',
				'code'       => 'BSH'
			],
			[
				'id'         => 3467,
				'country_id' => 219,
				'name'       => 'Hoima',
				'code'       => 'HOI'
			],
			[
				'id'         => 3468,
				'country_id' => 219,
				'name'       => 'Kabale',
				'code'       => 'KBL'
			],
			[
				'id'         => 3469,
				'country_id' => 219,
				'name'       => 'Kabarole',
				'code'       => 'KAR'
			],
			[
				'id'         => 3470,
				'country_id' => 219,
				'name'       => 'Kamwenge',
				'code'       => 'KAM'
			],
			[
				'id'         => 3471,
				'country_id' => 219,
				'name'       => 'Kanungu',
				'code'       => 'KAN'
			],
			[
				'id'         => 3472,
				'country_id' => 219,
				'name'       => 'Kasese',
				'code'       => 'KAS'
			],
			[
				'id'         => 3473,
				'country_id' => 219,
				'name'       => 'Kibaale',
				'code'       => 'KBA'
			],
			[
				'id'         => 3474,
				'country_id' => 219,
				'name'       => 'Kisoro',
				'code'       => 'KIS'
			],
			[
				'id'         => 3475,
				'country_id' => 219,
				'name'       => 'Kyenjojo',
				'code'       => 'KYE'
			],
			[
				'id'         => 3476,
				'country_id' => 219,
				'name'       => 'Masindi',
				'code'       => 'MSN'
			],
			[
				'id'         => 3477,
				'country_id' => 219,
				'name'       => 'Mbarara',
				'code'       => 'MBR'
			],
			[
				'id'         => 3478,
				'country_id' => 219,
				'name'       => 'Ntungamo',
				'code'       => 'NTU'
			],
			[
				'id'         => 3479,
				'country_id' => 219,
				'name'       => 'Rukungiri',
				'code'       => 'RUK'
			],
			[
				'id'         => 3480,
				'country_id' => 220,
				'name'       => 'Cherkas\'ka Oblast\'',
				'code'       => '71'
			],
			[
				'id'         => 3481,
				'country_id' => 220,
				'name'       => 'Chernihivs\'ka Oblast\'',
				'code'       => '74'
			],
			[
				'id'         => 3482,
				'country_id' => 220,
				'name'       => 'Chernivets\'ka Oblast\'',
				'code'       => '77'
			],
			[
				'id'         => 3483,
				'country_id' => 220,
				'name'       => 'Crimea',
				'code'       => '43'
			],
			[
				'id'         => 3484,
				'country_id' => 220,
				'name'       => 'Dnipropetrovs\'ka Oblast\'',
				'code'       => '12'
			],
			[
				'id'         => 3485,
				'country_id' => 220,
				'name'       => 'Donets\'ka Oblast\'',
				'code'       => '14'
			],
			[
				'id'         => 3486,
				'country_id' => 220,
				'name'       => 'Ivano-Frankivs\'ka Oblast\'',
				'code'       => '26'
			],
			[
				'id'         => 3487,
				'country_id' => 220,
				'name'       => 'Khersons\'ka Oblast\'',
				'code'       => '65'
			],
			[
				'id'         => 3488,
				'country_id' => 220,
				'name'       => 'Khmel\'nyts\'ka Oblast\'',
				'code'       => '68'
			],
			[
				'id'         => 3489,
				'country_id' => 220,
				'name'       => 'Kirovohrads\'ka Oblast\'',
				'code'       => '35'
			],
			[
				'id'         => 3490,
				'country_id' => 220,
				'name'       => 'Kyiv',
				'code'       => '30'
			],
			[
				'id'         => 3491,
				'country_id' => 220,
				'name'       => 'Kyivs\'ka Oblast\'',
				'code'       => '32'
			],
			[
				'id'         => 3492,
				'country_id' => 220,
				'name'       => 'Luhans\'ka Oblast\'',
				'code'       => '09'
			],
			[
				'id'         => 3493,
				'country_id' => 220,
				'name'       => 'L\'vivs\'ka Oblast\'',
				'code'       => '46'
			],
			[
				'id'         => 3494,
				'country_id' => 220,
				'name'       => 'Mykolayivs\'ka Oblast\'',
				'code'       => '48'
			],
			[
				'id'         => 3495,
				'country_id' => 220,
				'name'       => 'Odes\'ka Oblast\'',
				'code'       => '51'
			],
			[
				'id'         => 3496,
				'country_id' => 220,
				'name'       => 'Poltavs\'ka Oblast\'',
				'code'       => '53'
			],
			[
				'id'         => 3497,
				'country_id' => 220,
				'name'       => 'Rivnens\'ka Oblast\'',
				'code'       => '56'
			],
			[
				'id'         => 3498,
				'country_id' => 220,
				'name'       => 'Sevastopol\'',
				'code'       => '40'
			],
			[
				'id'         => 3499,
				'country_id' => 220,
				'name'       => 'Sums\'ka Oblast\'',
				'code'       => '59'
			],
			[
				'id'         => 3500,
				'country_id' => 220,
				'name'       => 'Ternopil\'s\'ka Oblast\'',
				'code'       => '61'
			],
			[
				'id'         => 3501,
				'country_id' => 220,
				'name'       => 'Vinnyts\'ka Oblast\'',
				'code'       => '05'
			],
			[
				'id'         => 3502,
				'country_id' => 220,
				'name'       => 'Volyns\'ka Oblast\'',
				'code'       => '07'
			],
			[
				'id'         => 3503,
				'country_id' => 220,
				'name'       => 'Zakarpats\'ka Oblast\'',
				'code'       => '21'
			],
			[
				'id'         => 3504,
				'country_id' => 220,
				'name'       => 'Zaporiz\'ka Oblast\'',
				'code'       => '23'
			],
			[
				'id'         => 3505,
				'country_id' => 220,
				'name'       => 'Zhytomyrs\'ka oblast\'',
				'code'       => '18'
			],
			[
				'id'         => 3506,
				'country_id' => 221,
				'name'       => 'Abu Dhabi',
				'code'       => 'ADH'
			],
			[
				'id'         => 3507,
				'country_id' => 221,
				'name'       => '\'Ajman',
				'code'       => 'AJ'
			],
			[
				'id'         => 3508,
				'country_id' => 221,
				'name'       => 'Al Fujayrah',
				'code'       => 'FU'
			],
			[
				'id'         => 3509,
				'country_id' => 221,
				'name'       => 'Ash Shariqah',
				'code'       => 'SH'
			],
			[
				'id'         => 3510,
				'country_id' => 221,
				'name'       => 'Dubai',
				'code'       => 'DU'
			],
			[
				'id'         => 3511,
				'country_id' => 221,
				'name'       => 'R\'as al Khaymah',
				'code'       => 'RK'
			],
			[
				'id'         => 3512,
				'country_id' => 221,
				'name'       => 'Umm al Qaywayn',
				'code'       => 'UQ'
			],
			[
				'id'         => 3513,
				'country_id' => 222,
				'name'       => 'Aberdeen',
				'code'       => 'ABN'
			],
			[
				'id'         => 3514,
				'country_id' => 222,
				'name'       => 'Aberdeenshire',
				'code'       => 'ABNS'
			],
			[
				'id'         => 3515,
				'country_id' => 222,
				'name'       => 'Anglesey',
				'code'       => 'ANG'
			],
			[
				'id'         => 3516,
				'country_id' => 222,
				'name'       => 'Angus',
				'code'       => 'AGS'
			],
			[
				'id'         => 3517,
				'country_id' => 222,
				'name'       => 'Argyll and Bute',
				'code'       => 'ARY'
			],
			[
				'id'         => 3518,
				'country_id' => 222,
				'name'       => 'Bedfordshire',
				'code'       => 'BEDS'
			],
			[
				'id'         => 3519,
				'country_id' => 222,
				'name'       => 'Berkshire',
				'code'       => 'BERKS'
			],
			[
				'id'         => 3520,
				'country_id' => 222,
				'name'       => 'Blaenau Gwent',
				'code'       => 'BLA'
			],
			[
				'id'         => 3521,
				'country_id' => 222,
				'name'       => 'Bridgend',
				'code'       => 'BRI'
			],
			[
				'id'         => 3522,
				'country_id' => 222,
				'name'       => 'Bristol',
				'code'       => 'BSTL'
			],
			[
				'id'         => 3523,
				'country_id' => 222,
				'name'       => 'Buckinghamshire',
				'code'       => 'BUCKS'
			],
			[
				'id'         => 3524,
				'country_id' => 222,
				'name'       => 'Caerphilly',
				'code'       => 'CAE'
			],
			[
				'id'         => 3525,
				'country_id' => 222,
				'name'       => 'Cambridgeshire',
				'code'       => 'CAMBS'
			],
			[
				'id'         => 3526,
				'country_id' => 222,
				'name'       => 'Cardiff',
				'code'       => 'CDF'
			],
			[
				'id'         => 3527,
				'country_id' => 222,
				'name'       => 'Carmarthenshire',
				'code'       => 'CARM'
			],
			[
				'id'         => 3528,
				'country_id' => 222,
				'name'       => 'Ceredigion',
				'code'       => 'CDGN'
			],
			[
				'id'         => 3529,
				'country_id' => 222,
				'name'       => 'Cheshire',
				'code'       => 'CHES'
			],
			[
				'id'         => 3530,
				'country_id' => 222,
				'name'       => 'Clackmannanshire',
				'code'       => 'CLACK'
			],
			[
				'id'         => 3531,
				'country_id' => 222,
				'name'       => 'Conwy',
				'code'       => 'CON'
			],
			[
				'id'         => 3532,
				'country_id' => 222,
				'name'       => 'Cornwall',
				'code'       => 'CORN'
			],
			[
				'id'         => 3533,
				'country_id' => 222,
				'name'       => 'Denbighshire',
				'code'       => 'DNBG'
			],
			[
				'id'         => 3534,
				'country_id' => 222,
				'name'       => 'Derbyshire',
				'code'       => 'DERBY'
			],
			[
				'id'         => 3535,
				'country_id' => 222,
				'name'       => 'Devon',
				'code'       => 'DVN'
			],
			[
				'id'         => 3536,
				'country_id' => 222,
				'name'       => 'Dorset',
				'code'       => 'DOR'
			],
			[
				'id'         => 3537,
				'country_id' => 222,
				'name'       => 'Dumfries and Galloway',
				'code'       => 'DGL'
			],
			[
				'id'         => 3538,
				'country_id' => 222,
				'name'       => 'Dundee',
				'code'       => 'DUND'
			],
			[
				'id'         => 3539,
				'country_id' => 222,
				'name'       => 'Durham',
				'code'       => 'DHM'
			],
			[
				'id'         => 3540,
				'country_id' => 222,
				'name'       => 'East Ayrshire',
				'code'       => 'ARYE'
			],
			[
				'id'         => 3541,
				'country_id' => 222,
				'name'       => 'East Dunbartonshire',
				'code'       => 'DUNBE'
			],
			[
				'id'         => 3542,
				'country_id' => 222,
				'name'       => 'East Lothian',
				'code'       => 'LOTE'
			],
			[
				'id'         => 3543,
				'country_id' => 222,
				'name'       => 'East Renfrewshire',
				'code'       => 'RENE'
			],
			[
				'id'         => 3544,
				'country_id' => 222,
				'name'       => 'East Riding of Yorkshire',
				'code'       => 'ERYS'
			],
			[
				'id'         => 3545,
				'country_id' => 222,
				'name'       => 'East Sussex',
				'code'       => 'SXE'
			],
			[
				'id'         => 3546,
				'country_id' => 222,
				'name'       => 'Edinburgh',
				'code'       => 'EDIN'
			],
			[
				'id'         => 3547,
				'country_id' => 222,
				'name'       => 'Essex',
				'code'       => 'ESX'
			],
			[
				'id'         => 3548,
				'country_id' => 222,
				'name'       => 'Falkirk',
				'code'       => 'FALK'
			],
			[
				'id'         => 3549,
				'country_id' => 222,
				'name'       => 'Fife',
				'code'       => 'FFE'
			],
			[
				'id'         => 3550,
				'country_id' => 222,
				'name'       => 'Flintshire',
				'code'       => 'FLINT'
			],
			[
				'id'         => 3551,
				'country_id' => 222,
				'name'       => 'Glasgow',
				'code'       => 'GLAS'
			],
			[
				'id'         => 3552,
				'country_id' => 222,
				'name'       => 'Gloucestershire',
				'code'       => 'GLOS'
			],
			[
				'id'         => 3553,
				'country_id' => 222,
				'name'       => 'Greater London',
				'code'       => 'LDN'
			],
			[
				'id'         => 3554,
				'country_id' => 222,
				'name'       => 'Greater Manchester',
				'code'       => 'MCH'
			],
			[
				'id'         => 3555,
				'country_id' => 222,
				'name'       => 'Gwynedd',
				'code'       => 'GDD'
			],
			[
				'id'         => 3556,
				'country_id' => 222,
				'name'       => 'Hampshire',
				'code'       => 'HANTS'
			],
			[
				'id'         => 3557,
				'country_id' => 222,
				'name'       => 'Herefordshire',
				'code'       => 'HWR'
			],
			[
				'id'         => 3558,
				'country_id' => 222,
				'name'       => 'Hertfordshire',
				'code'       => 'HERTS'
			],
			[
				'id'         => 3559,
				'country_id' => 222,
				'name'       => 'Highlands',
				'code'       => 'HLD'
			],
			[
				'id'         => 3560,
				'country_id' => 222,
				'name'       => 'Inverclyde',
				'code'       => 'IVER'
			],
			[
				'id'         => 3561,
				'country_id' => 222,
				'name'       => 'Isle of Wight',
				'code'       => 'IOW'
			],
			[
				'id'         => 3562,
				'country_id' => 222,
				'name'       => 'Kent',
				'code'       => 'KNT'
			],
			[
				'id'         => 3563,
				'country_id' => 222,
				'name'       => 'Lancashire',
				'code'       => 'LANCS'
			],
			[
				'id'         => 3564,
				'country_id' => 222,
				'name'       => 'Leicestershire',
				'code'       => 'LEICS'
			],
			[
				'id'         => 3565,
				'country_id' => 222,
				'name'       => 'Lincolnshire',
				'code'       => 'LINCS'
			],
			[
				'id'         => 3566,
				'country_id' => 222,
				'name'       => 'Merseyside',
				'code'       => 'MSY'
			],
			[
				'id'         => 3567,
				'country_id' => 222,
				'name'       => 'Merthyr Tydfil',
				'code'       => 'MERT'
			],
			[
				'id'         => 3568,
				'country_id' => 222,
				'name'       => 'Midlothian',
				'code'       => 'MLOT'
			],
			[
				'id'         => 3569,
				'country_id' => 222,
				'name'       => 'Monmouthshire',
				'code'       => 'MMOUTH'
			],
			[
				'id'         => 3570,
				'country_id' => 222,
				'name'       => 'Moray',
				'code'       => 'MORAY'
			],
			[
				'id'         => 3571,
				'country_id' => 222,
				'name'       => 'Neath Port Talbot',
				'code'       => 'NPRTAL'
			],
			[
				'id'         => 3572,
				'country_id' => 222,
				'name'       => 'Newport',
				'code'       => 'NEWPT'
			],
			[
				'id'         => 3573,
				'country_id' => 222,
				'name'       => 'Norfolk',
				'code'       => 'NOR'
			],
			[
				'id'         => 3574,
				'country_id' => 222,
				'name'       => 'North Ayrshire',
				'code'       => 'ARYN'
			],
			[
				'id'         => 3575,
				'country_id' => 222,
				'name'       => 'North Lanarkshire',
				'code'       => 'LANN'
			],
			[
				'id'         => 3576,
				'country_id' => 222,
				'name'       => 'North Yorkshire',
				'code'       => 'YSN'
			],
			[
				'id'         => 3577,
				'country_id' => 222,
				'name'       => 'Northamptonshire',
				'code'       => 'NHM'
			],
			[
				'id'         => 3578,
				'country_id' => 222,
				'name'       => 'Northumberland',
				'code'       => 'NLD'
			],
			[
				'id'         => 3579,
				'country_id' => 222,
				'name'       => 'Nottinghamshire',
				'code'       => 'NOT'
			],
			[
				'id'         => 3580,
				'country_id' => 222,
				'name'       => 'Orkney Islands',
				'code'       => 'ORK'
			],
			[
				'id'         => 3581,
				'country_id' => 222,
				'name'       => 'Oxfordshire',
				'code'       => 'OFE'
			],
			[
				'id'         => 3582,
				'country_id' => 222,
				'name'       => 'Pembrokeshire',
				'code'       => 'PEM'
			],
			[
				'id'         => 3583,
				'country_id' => 222,
				'name'       => 'Perth and Kinross',
				'code'       => 'PERTH'
			],
			[
				'id'         => 3584,
				'country_id' => 222,
				'name'       => 'Powys',
				'code'       => 'PWS'
			],
			[
				'id'         => 3585,
				'country_id' => 222,
				'name'       => 'Renfrewshire',
				'code'       => 'REN'
			],
			[
				'id'         => 3586,
				'country_id' => 222,
				'name'       => 'Rhondda Cynon Taff',
				'code'       => 'RHON'
			],
			[
				'id'         => 3587,
				'country_id' => 222,
				'name'       => 'Rutland',
				'code'       => 'RUT'
			],
			[
				'id'         => 3588,
				'country_id' => 222,
				'name'       => 'Scottish Borders',
				'code'       => 'BOR'
			],
			[
				'id'         => 3589,
				'country_id' => 222,
				'name'       => 'Shetland Islands',
				'code'       => 'SHET'
			],
			[
				'id'         => 3590,
				'country_id' => 222,
				'name'       => 'Shropshire',
				'code'       => 'SPE'
			],
			[
				'id'         => 3591,
				'country_id' => 222,
				'name'       => 'Somerset',
				'code'       => 'SOM'
			],
			[
				'id'         => 3592,
				'country_id' => 222,
				'name'       => 'South Ayrshire',
				'code'       => 'ARYS'
			],
			[
				'id'         => 3593,
				'country_id' => 222,
				'name'       => 'South Lanarkshire',
				'code'       => 'LANS'
			],
			[
				'id'         => 3594,
				'country_id' => 222,
				'name'       => 'South Yorkshire',
				'code'       => 'YSS'
			],
			[
				'id'         => 3595,
				'country_id' => 222,
				'name'       => 'Staffordshire',
				'code'       => 'SFD'
			],
			[
				'id'         => 3596,
				'country_id' => 222,
				'name'       => 'Stirling',
				'code'       => 'STIR'
			],
			[
				'id'         => 3597,
				'country_id' => 222,
				'name'       => 'Suffolk',
				'code'       => 'SFK'
			],
			[
				'id'         => 3598,
				'country_id' => 222,
				'name'       => 'Surrey',
				'code'       => 'SRY'
			],
			[
				'id'         => 3599,
				'country_id' => 222,
				'name'       => 'Swansea',
				'code'       => 'SWAN'
			],
			[
				'id'         => 3600,
				'country_id' => 222,
				'name'       => 'Torfaen',
				'code'       => 'TORF'
			],
			[
				'id'         => 3601,
				'country_id' => 222,
				'name'       => 'Tyne and Wear',
				'code'       => 'TWR'
			],
			[
				'id'         => 3602,
				'country_id' => 222,
				'name'       => 'Vale of Glamorgan',
				'code'       => 'VGLAM'
			],
			[
				'id'         => 3603,
				'country_id' => 222,
				'name'       => 'Warwickshire',
				'code'       => 'WARKS'
			],
			[
				'id'         => 3604,
				'country_id' => 222,
				'name'       => 'West Dunbartonshire',
				'code'       => 'WDUN'
			],
			[
				'id'         => 3605,
				'country_id' => 222,
				'name'       => 'West Lothian',
				'code'       => 'WLOT'
			],
			[
				'id'         => 3606,
				'country_id' => 222,
				'name'       => 'West Midlands',
				'code'       => 'WMD'
			],
			[
				'id'         => 3607,
				'country_id' => 222,
				'name'       => 'West Sussex',
				'code'       => 'SXW'
			],
			[
				'id'         => 3608,
				'country_id' => 222,
				'name'       => 'West Yorkshire',
				'code'       => 'YSW'
			],
			[
				'id'         => 3609,
				'country_id' => 222,
				'name'       => 'Western Isles',
				'code'       => 'WIL'
			],
			[
				'id'         => 3610,
				'country_id' => 222,
				'name'       => 'Wiltshire',
				'code'       => 'WLT'
			],
			[
				'id'         => 3611,
				'country_id' => 222,
				'name'       => 'Worcestershire',
				'code'       => 'WORCS'
			],
			[
				'id'         => 3612,
				'country_id' => 222,
				'name'       => 'Wrexham',
				'code'       => 'WRX'
			],
			[
				'id'         => 3613,
				'country_id' => 223,
				'name'       => 'Alabama',
				'code'       => 'AL'
			],
			[
				'id'         => 3614,
				'country_id' => 223,
				'name'       => 'Alaska',
				'code'       => 'AK'
			],
			[
				'id'         => 3615,
				'country_id' => 223,
				'name'       => 'American Samoa',
				'code'       => 'AS'
			],
			[
				'id'         => 3616,
				'country_id' => 223,
				'name'       => 'Arizona',
				'code'       => 'AZ'
			],
			[
				'id'         => 3617,
				'country_id' => 223,
				'name'       => 'Arkansas',
				'code'       => 'AR'
			],
			[
				'id'         => 3618,
				'country_id' => 223,
				'name'       => 'Armed Forces Africa',
				'code'       => 'AF'
			],
			[
				'id'         => 3619,
				'country_id' => 223,
				'name'       => 'Armed Forces Americas',
				'code'       => 'AA'
			],
			[
				'id'         => 3620,
				'country_id' => 223,
				'name'       => 'Armed Forces Canada',
				'code'       => 'AC'
			],
			[
				'id'         => 3621,
				'country_id' => 223,
				'name'       => 'Armed Forces Europe',
				'code'       => 'AE'
			],
			[
				'id'         => 3622,
				'country_id' => 223,
				'name'       => 'Armed Forces Middle East',
				'code'       => 'AM'
			],
			[
				'id'         => 3623,
				'country_id' => 223,
				'name'       => 'Armed Forces Pacific',
				'code'       => 'AP'
			],
			[
				'id'         => 3624,
				'country_id' => 223,
				'name'       => 'California',
				'code'       => 'CA'
			],
			[
				'id'         => 3625,
				'country_id' => 223,
				'name'       => 'Colorado',
				'code'       => 'CO'
			],
			[
				'id'         => 3626,
				'country_id' => 223,
				'name'       => 'Connecticut',
				'code'       => 'CT'
			],
			[
				'id'         => 3627,
				'country_id' => 223,
				'name'       => 'Delaware',
				'code'       => 'DE'
			],
			[
				'id'         => 3628,
				'country_id' => 223,
				'name'       => 'District of Columbia',
				'code'       => 'DC'
			],
			[
				'id'         => 3629,
				'country_id' => 223,
				'name'       => 'Federated States Of Micronesia',
				'code'       => 'FM'
			],
			[
				'id'         => 3630,
				'country_id' => 223,
				'name'       => 'Florida',
				'code'       => 'FL'
			],
			[
				'id'         => 3631,
				'country_id' => 223,
				'name'       => 'Georgia',
				'code'       => 'GA'
			],
			[
				'id'         => 3632,
				'country_id' => 223,
				'name'       => 'Guam',
				'code'       => 'GU'
			],
			[
				'id'         => 3633,
				'country_id' => 223,
				'name'       => 'Hawaii',
				'code'       => 'HI'
			],
			[
				'id'         => 3634,
				'country_id' => 223,
				'name'       => 'Idaho',
				'code'       => 'ID'
			],
			[
				'id'         => 3635,
				'country_id' => 223,
				'name'       => 'Illinois',
				'code'       => 'IL'
			],
			[
				'id'         => 3636,
				'country_id' => 223,
				'name'       => 'Indiana',
				'code'       => 'IN'
			],
			[
				'id'         => 3637,
				'country_id' => 223,
				'name'       => 'Iowa',
				'code'       => 'IA'
			],
			[
				'id'         => 3638,
				'country_id' => 223,
				'name'       => 'Kansas',
				'code'       => 'KS'
			],
			[
				'id'         => 3639,
				'country_id' => 223,
				'name'       => 'Kentucky',
				'code'       => 'KY'
			],
			[
				'id'         => 3640,
				'country_id' => 223,
				'name'       => 'Louisiana',
				'code'       => 'LA'
			],
			[
				'id'         => 3641,
				'country_id' => 223,
				'name'       => 'Maine',
				'code'       => 'ME'
			],
			[
				'id'         => 3642,
				'country_id' => 223,
				'name'       => 'Marshall Islands',
				'code'       => 'MH'
			],
			[
				'id'         => 3643,
				'country_id' => 223,
				'name'       => 'Maryland',
				'code'       => 'MD'
			],
			[
				'id'         => 3644,
				'country_id' => 223,
				'name'       => 'Massachusetts',
				'code'       => 'MA'
			],
			[
				'id'         => 3645,
				'country_id' => 223,
				'name'       => 'Michigan',
				'code'       => 'MI'
			],
			[
				'id'         => 3646,
				'country_id' => 223,
				'name'       => 'Minnesota',
				'code'       => 'MN'
			],
			[
				'id'         => 3647,
				'country_id' => 223,
				'name'       => 'Mississippi',
				'code'       => 'MS'
			],
			[
				'id'         => 3648,
				'country_id' => 223,
				'name'       => 'Missouri',
				'code'       => 'MO'
			],
			[
				'id'         => 3649,
				'country_id' => 223,
				'name'       => 'Montana',
				'code'       => 'MT'
			],
			[
				'id'         => 3650,
				'country_id' => 223,
				'name'       => 'Nebraska',
				'code'       => 'NE'
			],
			[
				'id'         => 3651,
				'country_id' => 223,
				'name'       => 'Nevada',
				'code'       => 'NV'
			],
			[
				'id'         => 3652,
				'country_id' => 223,
				'name'       => 'New Hampshire',
				'code'       => 'NH'
			],
			[
				'id'         => 3653,
				'country_id' => 223,
				'name'       => 'New Jersey',
				'code'       => 'NJ'
			],
			[
				'id'         => 3654,
				'country_id' => 223,
				'name'       => 'New Mexico',
				'code'       => 'NM'
			],
			[
				'id'         => 3655,
				'country_id' => 223,
				'name'       => 'New York',
				'code'       => 'NY'
			],
			[
				'id'         => 3656,
				'country_id' => 223,
				'name'       => 'North Carolina',
				'code'       => 'NC'
			],
			[
				'id'         => 3657,
				'country_id' => 223,
				'name'       => 'North Dakota',
				'code'       => 'ND'
			],
			[
				'id'         => 3658,
				'country_id' => 223,
				'name'       => 'Northern Mariana Islands',
				'code'       => 'MP'
			],
			[
				'id'         => 3659,
				'country_id' => 223,
				'name'       => 'Ohio',
				'code'       => 'OH'
			],
			[
				'id'         => 3660,
				'country_id' => 223,
				'name'       => 'Oklahoma',
				'code'       => 'OK'
			],
			[
				'id'         => 3661,
				'country_id' => 223,
				'name'       => 'Oregon',
				'code'       => 'OR'
			],
			[
				'id'         => 3662,
				'country_id' => 223,
				'name'       => 'Palau',
				'code'       => 'PW'
			],
			[
				'id'         => 3663,
				'country_id' => 223,
				'name'       => 'Pennsylvania',
				'code'       => 'PA'
			],
			[
				'id'         => 3664,
				'country_id' => 223,
				'name'       => 'Puerto Rico',
				'code'       => 'PR'
			],
			[
				'id'         => 3665,
				'country_id' => 223,
				'name'       => 'Rhode Island',
				'code'       => 'RI'
			],
			[
				'id'         => 3666,
				'country_id' => 223,
				'name'       => 'South Carolina',
				'code'       => 'SC'
			],
			[
				'id'         => 3667,
				'country_id' => 223,
				'name'       => 'South Dakota',
				'code'       => 'SD'
			],
			[
				'id'         => 3668,
				'country_id' => 223,
				'name'       => 'Tennessee',
				'code'       => 'TN'
			],
			[
				'id'         => 3669,
				'country_id' => 223,
				'name'       => 'Texas',
				'code'       => 'TX'
			],
			[
				'id'         => 3670,
				'country_id' => 223,
				'name'       => 'Utah',
				'code'       => 'UT'
			],
			[
				'id'         => 3671,
				'country_id' => 223,
				'name'       => 'Vermont',
				'code'       => 'VT'
			],
			[
				'id'         => 3672,
				'country_id' => 223,
				'name'       => 'Virgin Islands',
				'code'       => 'VI'
			],
			[
				'id'         => 3673,
				'country_id' => 223,
				'name'       => 'Virginia',
				'code'       => 'VA'
			],
			[
				'id'         => 3674,
				'country_id' => 223,
				'name'       => 'Washington',
				'code'       => 'WA'
			],
			[
				'id'         => 3675,
				'country_id' => 223,
				'name'       => 'West Virginia',
				'code'       => 'WV'
			],
			[
				'id'         => 3676,
				'country_id' => 223,
				'name'       => 'Wisconsin',
				'code'       => 'WI'
			],
			[
				'id'         => 3677,
				'country_id' => 223,
				'name'       => 'Wyoming',
				'code'       => 'WY'
			],
			[
				'id'         => 3678,
				'country_id' => 224,
				'name'       => 'Baker Island',
				'code'       => 'BI'
			],
			[
				'id'         => 3679,
				'country_id' => 224,
				'name'       => 'Howland Island',
				'code'       => 'HI'
			],
			[
				'id'         => 3680,
				'country_id' => 224,
				'name'       => 'Jarvis Island',
				'code'       => 'JI'
			],
			[
				'id'         => 3681,
				'country_id' => 224,
				'name'       => 'Johnston Atoll',
				'code'       => 'JA'
			],
			[
				'id'         => 3682,
				'country_id' => 224,
				'name'       => 'Kingman Reef',
				'code'       => 'KR'
			],
			[
				'id'         => 3683,
				'country_id' => 224,
				'name'       => 'Midway Atoll',
				'code'       => 'MA'
			],
			[
				'id'         => 3684,
				'country_id' => 224,
				'name'       => 'Navassa Island',
				'code'       => 'NI'
			],
			[
				'id'         => 3685,
				'country_id' => 224,
				'name'       => 'Palmyra Atoll',
				'code'       => 'PA'
			],
			[
				'id'         => 3686,
				'country_id' => 224,
				'name'       => 'Wake Island',
				'code'       => 'WI'
			],
			[
				'id'         => 3687,
				'country_id' => 225,
				'name'       => 'Artigas',
				'code'       => 'AR'
			],
			[
				'id'         => 3688,
				'country_id' => 225,
				'name'       => 'Canelones',
				'code'       => 'CA'
			],
			[
				'id'         => 3689,
				'country_id' => 225,
				'name'       => 'Cerro Largo',
				'code'       => 'CL'
			],
			[
				'id'         => 3690,
				'country_id' => 225,
				'name'       => 'Colonia',
				'code'       => 'CO'
			],
			[
				'id'         => 3691,
				'country_id' => 225,
				'name'       => 'Durazno',
				'code'       => 'DU'
			],
			[
				'id'         => 3692,
				'country_id' => 225,
				'name'       => 'Flores',
				'code'       => 'FS'
			],
			[
				'id'         => 3693,
				'country_id' => 225,
				'name'       => 'Florida',
				'code'       => 'FA'
			],
			[
				'id'         => 3694,
				'country_id' => 225,
				'name'       => 'Lavalleja',
				'code'       => 'LA'
			],
			[
				'id'         => 3695,
				'country_id' => 225,
				'name'       => 'Maldonado',
				'code'       => 'MA'
			],
			[
				'id'         => 3696,
				'country_id' => 225,
				'name'       => 'Montevideo',
				'code'       => 'MO'
			],
			[
				'id'         => 3697,
				'country_id' => 225,
				'name'       => 'Paysandu',
				'code'       => 'PA'
			],
			[
				'id'         => 3698,
				'country_id' => 225,
				'name'       => 'Rio Negro',
				'code'       => 'RN'
			],
			[
				'id'         => 3699,
				'country_id' => 225,
				'name'       => 'Rivera',
				'code'       => 'RV'
			],
			[
				'id'         => 3700,
				'country_id' => 225,
				'name'       => 'Rocha',
				'code'       => 'RO'
			],
			[
				'id'         => 3701,
				'country_id' => 225,
				'name'       => 'Salto',
				'code'       => 'SL'
			],
			[
				'id'         => 3702,
				'country_id' => 225,
				'name'       => 'San Jose',
				'code'       => 'SJ'
			],
			[
				'id'         => 3703,
				'country_id' => 225,
				'name'       => 'Soriano',
				'code'       => 'SO'
			],
			[
				'id'         => 3704,
				'country_id' => 225,
				'name'       => 'Tacuarembo',
				'code'       => 'TA'
			],
			[
				'id'         => 3705,
				'country_id' => 225,
				'name'       => 'Treinta y Tres',
				'code'       => 'TT'
			],
			[
				'id'         => 3706,
				'country_id' => 226,
				'name'       => 'Andijon',
				'code'       => 'AN'
			],
			[
				'id'         => 3707,
				'country_id' => 226,
				'name'       => 'Buxoro',
				'code'       => 'BU'
			],
			[
				'id'         => 3708,
				'country_id' => 226,
				'name'       => 'Farg\'ona',
				'code'       => 'FA'
			],
			[
				'id'         => 3709,
				'country_id' => 226,
				'name'       => 'Jizzax',
				'code'       => 'JI'
			],
			[
				'id'         => 3710,
				'country_id' => 226,
				'name'       => 'Namangan',
				'code'       => 'NG'
			],
			[
				'id'         => 3711,
				'country_id' => 226,
				'name'       => 'Navoiy',
				'code'       => 'NW'
			],
			[
				'id'         => 3712,
				'country_id' => 226,
				'name'       => 'Qashqadaryo',
				'code'       => 'QA'
			],
			[
				'id'         => 3713,
				'country_id' => 226,
				'name'       => 'Qoraqalpog\'iston Republikasi',
				'code'       => 'QR'
			],
			[
				'id'         => 3714,
				'country_id' => 226,
				'name'       => 'Samarqand',
				'code'       => 'SA'
			],
			[
				'id'         => 3715,
				'country_id' => 226,
				'name'       => 'Sirdaryo',
				'code'       => 'SI'
			],
			[
				'id'         => 3716,
				'country_id' => 226,
				'name'       => 'Surxondaryo',
				'code'       => 'SU'
			],
			[
				'id'         => 3717,
				'country_id' => 226,
				'name'       => 'Toshkent City',
				'code'       => 'TK'
			],
			[
				'id'         => 3718,
				'country_id' => 226,
				'name'       => 'Toshkent Region',
				'code'       => 'TO'
			],
			[
				'id'         => 3719,
				'country_id' => 226,
				'name'       => 'Xorazm',
				'code'       => 'XO'
			],
			[
				'id'         => 3720,
				'country_id' => 227,
				'name'       => 'Malampa',
				'code'       => 'MA'
			],
			[
				'id'         => 3721,
				'country_id' => 227,
				'name'       => 'Penama',
				'code'       => 'PE'
			],
			[
				'id'         => 3722,
				'country_id' => 227,
				'name'       => 'Sanma',
				'code'       => 'SA'
			],
			[
				'id'         => 3723,
				'country_id' => 227,
				'name'       => 'Shefa',
				'code'       => 'SH'
			],
			[
				'id'         => 3724,
				'country_id' => 227,
				'name'       => 'Tafea',
				'code'       => 'TA'
			],
			[
				'id'         => 3725,
				'country_id' => 227,
				'name'       => 'Torba',
				'code'       => 'TO'
			],
			[
				'id'         => 3726,
				'country_id' => 229,
				'name'       => 'Amazonas',
				'code'       => 'AM'
			],
			[
				'id'         => 3727,
				'country_id' => 229,
				'name'       => 'Anzoategui',
				'code'       => 'AN'
			],
			[
				'id'         => 3728,
				'country_id' => 229,
				'name'       => 'Apure',
				'code'       => 'AP'
			],
			[
				'id'         => 3729,
				'country_id' => 229,
				'name'       => 'Aragua',
				'code'       => 'AR'
			],
			[
				'id'         => 3730,
				'country_id' => 229,
				'name'       => 'Barinas',
				'code'       => 'BA'
			],
			[
				'id'         => 3731,
				'country_id' => 229,
				'name'       => 'Bolivar',
				'code'       => 'BO'
			],
			[
				'id'         => 3732,
				'country_id' => 229,
				'name'       => 'Carabobo',
				'code'       => 'CA'
			],
			[
				'id'         => 3733,
				'country_id' => 229,
				'name'       => 'Cojedes',
				'code'       => 'CO'
			],
			[
				'id'         => 3734,
				'country_id' => 229,
				'name'       => 'Delta Amacuro',
				'code'       => 'DA'
			],
			[
				'id'         => 3735,
				'country_id' => 229,
				'name'       => 'Dependencias Federales',
				'code'       => 'DF'
			],
			[
				'id'         => 3736,
				'country_id' => 229,
				'name'       => 'Distrito Federal',
				'code'       => 'DI'
			],
			[
				'id'         => 3737,
				'country_id' => 229,
				'name'       => 'Falcon',
				'code'       => 'FA'
			],
			[
				'id'         => 3738,
				'country_id' => 229,
				'name'       => 'Guarico',
				'code'       => 'GU'
			],
			[
				'id'         => 3739,
				'country_id' => 229,
				'name'       => 'Lara',
				'code'       => 'LA'
			],
			[
				'id'         => 3740,
				'country_id' => 229,
				'name'       => 'Merida',
				'code'       => 'ME'
			],
			[
				'id'         => 3741,
				'country_id' => 229,
				'name'       => 'Miranda',
				'code'       => 'MI'
			],
			[
				'id'         => 3742,
				'country_id' => 229,
				'name'       => 'Monagas',
				'code'       => 'MO'
			],
			[
				'id'         => 3743,
				'country_id' => 229,
				'name'       => 'Nueva Esparta',
				'code'       => 'NE'
			],
			[
				'id'         => 3744,
				'country_id' => 229,
				'name'       => 'Portuguesa',
				'code'       => 'PO'
			],
			[
				'id'         => 3745,
				'country_id' => 229,
				'name'       => 'Sucre',
				'code'       => 'SU'
			],
			[
				'id'         => 3746,
				'country_id' => 229,
				'name'       => 'Tachira',
				'code'       => 'TA'
			],
			[
				'id'         => 3747,
				'country_id' => 229,
				'name'       => 'Trujillo',
				'code'       => 'TR'
			],
			[
				'id'         => 3748,
				'country_id' => 229,
				'name'       => 'Vargas',
				'code'       => 'VA'
			],
			[
				'id'         => 3749,
				'country_id' => 229,
				'name'       => 'Yaracuy',
				'code'       => 'YA'
			],
			[
				'id'         => 3750,
				'country_id' => 229,
				'name'       => 'Zulia',
				'code'       => 'ZU'
			],
			[
				'id'         => 3751,
				'country_id' => 230,
				'name'       => 'An Giang',
				'code'       => 'AG'
			],
			[
				'id'         => 3752,
				'country_id' => 230,
				'name'       => 'Bac Giang',
				'code'       => 'BG'
			],
			[
				'id'         => 3753,
				'country_id' => 230,
				'name'       => 'Bac Kan',
				'code'       => 'BK'
			],
			[
				'id'         => 3754,
				'country_id' => 230,
				'name'       => 'Bac Lieu',
				'code'       => 'BL'
			],
			[
				'id'         => 3755,
				'country_id' => 230,
				'name'       => 'Bac Ninh',
				'code'       => 'BC'
			],
			[
				'id'         => 3756,
				'country_id' => 230,
				'name'       => 'Ba Ria-Vung Tau',
				'code'       => 'BR'
			],
			[
				'id'         => 3757,
				'country_id' => 230,
				'name'       => 'Ben Tre',
				'code'       => 'BN'
			],
			[
				'id'         => 3758,
				'country_id' => 230,
				'name'       => 'Binh Dinh',
				'code'       => 'BH'
			],
			[
				'id'         => 3759,
				'country_id' => 230,
				'name'       => 'Binh Duong',
				'code'       => 'BU'
			],
			[
				'id'         => 3760,
				'country_id' => 230,
				'name'       => 'Binh Phuoc',
				'code'       => 'BP'
			],
			[
				'id'         => 3761,
				'country_id' => 230,
				'name'       => 'Binh Thuan',
				'code'       => 'BT'
			],
			[
				'id'         => 3762,
				'country_id' => 230,
				'name'       => 'Ca Mau',
				'code'       => 'CM'
			],
			[
				'id'         => 3763,
				'country_id' => 230,
				'name'       => 'Can Tho',
				'code'       => 'CT'
			],
			[
				'id'         => 3764,
				'country_id' => 230,
				'name'       => 'Cao Bang',
				'code'       => 'CB'
			],
			[
				'id'         => 3765,
				'country_id' => 230,
				'name'       => 'Dak Lak',
				'code'       => 'DL'
			],
			[
				'id'         => 3766,
				'country_id' => 230,
				'name'       => 'Dak Nong',
				'code'       => 'DG'
			],
			[
				'id'         => 3767,
				'country_id' => 230,
				'name'       => 'Da Nang',
				'code'       => 'DN'
			],
			[
				'id'         => 3768,
				'country_id' => 230,
				'name'       => 'Dien Bien',
				'code'       => 'DB'
			],
			[
				'id'         => 3769,
				'country_id' => 230,
				'name'       => 'Dong Nai',
				'code'       => 'DI'
			],
			[
				'id'         => 3770,
				'country_id' => 230,
				'name'       => 'Dong Thap',
				'code'       => 'DT'
			],
			[
				'id'         => 3771,
				'country_id' => 230,
				'name'       => 'Gia Lai',
				'code'       => 'GL'
			],
			[
				'id'         => 3772,
				'country_id' => 230,
				'name'       => 'Ha Giang',
				'code'       => 'HG'
			],
			[
				'id'         => 3773,
				'country_id' => 230,
				'name'       => 'Hai Duong',
				'code'       => 'HD'
			],
			[
				'id'         => 3774,
				'country_id' => 230,
				'name'       => 'Hai Phong',
				'code'       => 'HP'
			],
			[
				'id'         => 3775,
				'country_id' => 230,
				'name'       => 'Ha Nam',
				'code'       => 'HM'
			],
			[
				'id'         => 3776,
				'country_id' => 230,
				'name'       => 'Ha Noi',
				'code'       => 'HI'
			],
			[
				'id'         => 3777,
				'country_id' => 230,
				'name'       => 'Ha Tay',
				'code'       => 'HT'
			],
			[
				'id'         => 3778,
				'country_id' => 230,
				'name'       => 'Ha Tinh',
				'code'       => 'HH'
			],
			[
				'id'         => 3779,
				'country_id' => 230,
				'name'       => 'Hoa Binh',
				'code'       => 'HB'
			],
			[
				'id'         => 3780,
				'country_id' => 230,
				'name'       => 'Ho Chi Minh City',
				'code'       => 'HC'
			],
			[
				'id'         => 3781,
				'country_id' => 230,
				'name'       => 'Hau Giang',
				'code'       => 'HU'
			],
			[
				'id'         => 3782,
				'country_id' => 230,
				'name'       => 'Hung Yen',
				'code'       => 'HY'
			],
			[
				'id'         => 3783,
				'country_id' => 232,
				'name'       => 'Saint Croix',
				'code'       => 'C'
			],
			[
				'id'         => 3784,
				'country_id' => 232,
				'name'       => 'Saint John',
				'code'       => 'J'
			],
			[
				'id'         => 3785,
				'country_id' => 232,
				'name'       => 'Saint Thomas',
				'code'       => 'T'
			],
			[
				'id'         => 3786,
				'country_id' => 233,
				'name'       => 'Alo',
				'code'       => 'A'
			],
			[
				'id'         => 3787,
				'country_id' => 233,
				'name'       => 'Sigave',
				'code'       => 'S'
			],
			[
				'id'         => 3788,
				'country_id' => 233,
				'name'       => 'Wallis',
				'code'       => 'W'
			],
			[
				'id'         => 3789,
				'country_id' => 235,
				'name'       => 'Abyan',
				'code'       => 'AB'
			],
			[
				'id'         => 3790,
				'country_id' => 235,
				'name'       => 'Adan',
				'code'       => 'AD'
			],
			[
				'id'         => 3791,
				'country_id' => 235,
				'name'       => 'Amran',
				'code'       => 'AM'
			],
			[
				'id'         => 3792,
				'country_id' => 235,
				'name'       => 'Al Bayda',
				'code'       => 'BA'
			],
			[
				'id'         => 3793,
				'country_id' => 235,
				'name'       => 'Ad Dali',
				'code'       => 'DA'
			],
			[
				'id'         => 3794,
				'country_id' => 235,
				'name'       => 'Dhamar',
				'code'       => 'DH'
			],
			[
				'id'         => 3795,
				'country_id' => 235,
				'name'       => 'Hadramawt',
				'code'       => 'HD'
			],
			[
				'id'         => 3796,
				'country_id' => 235,
				'name'       => 'Hajjah',
				'code'       => 'HJ'
			],
			[
				'id'         => 3797,
				'country_id' => 235,
				'name'       => 'Al Hudaydah',
				'code'       => 'HU'
			],
			[
				'id'         => 3798,
				'country_id' => 235,
				'name'       => 'Ibb',
				'code'       => 'IB'
			],
			[
				'id'         => 3799,
				'country_id' => 235,
				'name'       => 'Al Jawf',
				'code'       => 'JA'
			],
			[
				'id'         => 3800,
				'country_id' => 235,
				'name'       => 'Lahij',
				'code'       => 'LA'
			],
			[
				'id'         => 3801,
				'country_id' => 235,
				'name'       => 'Ma\'rib',
				'code'       => 'MA'
			],
			[
				'id'         => 3802,
				'country_id' => 235,
				'name'       => 'Al Mahrah',
				'code'       => 'MR'
			],
			[
				'id'         => 3803,
				'country_id' => 235,
				'name'       => 'Al Mahwit',
				'code'       => 'MW'
			],
			[
				'id'         => 3804,
				'country_id' => 235,
				'name'       => 'Sa\'dah',
				'code'       => 'SD'
			],
			[
				'id'         => 3805,
				'country_id' => 235,
				'name'       => 'San\'a',
				'code'       => 'SN'
			],
			[
				'id'         => 3806,
				'country_id' => 235,
				'name'       => 'Shabwah',
				'code'       => 'SH'
			],
			[
				'id'         => 3807,
				'country_id' => 235,
				'name'       => 'Ta\'izz',
				'code'       => 'TA'
			],
			[
				'id'         => 3812,
				'country_id' => 237,
				'name'       => 'Bas-Congo',
				'code'       => 'BC'
			],
			[
				'id'         => 3813,
				'country_id' => 237,
				'name'       => 'Bandundu',
				'code'       => 'BN'
			],
			[
				'id'         => 3814,
				'country_id' => 237,
				'name'       => 'Equateur',
				'code'       => 'EQ'
			],
			[
				'id'         => 3815,
				'country_id' => 237,
				'name'       => 'Katanga',
				'code'       => 'KA'
			],
			[
				'id'         => 3816,
				'country_id' => 237,
				'name'       => 'Kasai-Oriental',
				'code'       => 'KE'
			],
			[
				'id'         => 3817,
				'country_id' => 237,
				'name'       => 'Kinshasa',
				'code'       => 'KN'
			],
			[
				'id'         => 3818,
				'country_id' => 237,
				'name'       => 'Kasai-Occidental',
				'code'       => 'KW'
			],
			[
				'id'         => 3819,
				'country_id' => 237,
				'name'       => 'Maniema',
				'code'       => 'MA'
			],
			[
				'id'         => 3820,
				'country_id' => 237,
				'name'       => 'Nord-Kivu',
				'code'       => 'NK'
			],
			[
				'id'         => 3821,
				'country_id' => 237,
				'name'       => 'Orientale',
				'code'       => 'OR'
			],
			[
				'id'         => 3822,
				'country_id' => 237,
				'name'       => 'Sud-Kivu',
				'code'       => 'SK'
			],
			[
				'id'         => 3823,
				'country_id' => 238,
				'name'       => 'Central',
				'code'       => 'CE'
			],
			[
				'id'         => 3824,
				'country_id' => 238,
				'name'       => 'Copperbelt',
				'code'       => 'CB'
			],
			[
				'id'         => 3825,
				'country_id' => 238,
				'name'       => 'Eastern',
				'code'       => 'EA'
			],
			[
				'id'         => 3826,
				'country_id' => 238,
				'name'       => 'Luapula',
				'code'       => 'LP'
			],
			[
				'id'         => 3827,
				'country_id' => 238,
				'name'       => 'Lusaka',
				'code'       => 'LK'
			],
			[
				'id'         => 3828,
				'country_id' => 238,
				'name'       => 'Northern',
				'code'       => 'NO'
			],
			[
				'id'         => 3829,
				'country_id' => 238,
				'name'       => 'North-Western',
				'code'       => 'NW'
			],
			[
				'id'         => 3830,
				'country_id' => 238,
				'name'       => 'Southern',
				'code'       => 'SO'
			],
			[
				'id'         => 3831,
				'country_id' => 238,
				'name'       => 'Western',
				'code'       => 'WE'
			],
			[
				'id'         => 3832,
				'country_id' => 239,
				'name'       => 'Bulawayo',
				'code'       => 'BU'
			],
			[
				'id'         => 3833,
				'country_id' => 239,
				'name'       => 'Harare',
				'code'       => 'HA'
			],
			[
				'id'         => 3834,
				'country_id' => 239,
				'name'       => 'Manicaland',
				'code'       => 'ML'
			],
			[
				'id'         => 3835,
				'country_id' => 239,
				'name'       => 'Mashonaland Central',
				'code'       => 'MC'
			],
			[
				'id'         => 3836,
				'country_id' => 239,
				'name'       => 'Mashonaland East',
				'code'       => 'ME'
			],
			[
				'id'         => 3837,
				'country_id' => 239,
				'name'       => 'Mashonaland West',
				'code'       => 'MW'
			],
			[
				'id'         => 3838,
				'country_id' => 239,
				'name'       => 'Masvingo',
				'code'       => 'MV'
			],
			[
				'id'         => 3839,
				'country_id' => 239,
				'name'       => 'Matabeleland North',
				'code'       => 'MN'
			],
			[
				'id'         => 3840,
				'country_id' => 239,
				'name'       => 'Matabeleland South',
				'code'       => 'MS'
			],
			[
				'id'         => 3841,
				'country_id' => 239,
				'name'       => 'Midlands',
				'code'       => 'MD'
			],
			[
				'id'         => 3861,
				'country_id' => 105,
				'name'       => 'Campobasso',
				'code'       => 'CB'
			],
			[
				'id'         => 3862,
				'country_id' => 105,
				'name'       => 'Carbonia-Iglesias',
				'code'       => 'CI'
			],
			[
				'id'         => 3863,
				'country_id' => 105,
				'name'       => 'Caserta',
				'code'       => 'CE'
			],
			[
				'id'         => 3864,
				'country_id' => 105,
				'name'       => 'Catania',
				'code'       => 'CT'
			],
			[
				'id'         => 3865,
				'country_id' => 105,
				'name'       => 'Catanzaro',
				'code'       => 'CZ'
			],
			[
				'id'         => 3866,
				'country_id' => 105,
				'name'       => 'Chieti',
				'code'       => 'CH'
			],
			[
				'id'         => 3867,
				'country_id' => 105,
				'name'       => 'Como',
				'code'       => 'CO'
			],
			[
				'id'         => 3868,
				'country_id' => 105,
				'name'       => 'Cosenza',
				'code'       => 'CS'
			],
			[
				'id'         => 3869,
				'country_id' => 105,
				'name'       => 'Cremona',
				'code'       => 'CR'
			],
			[
				'id'         => 3870,
				'country_id' => 105,
				'name'       => 'Crotone',
				'code'       => 'KR'
			],
			[
				'id'         => 3871,
				'country_id' => 105,
				'name'       => 'Cuneo',
				'code'       => 'CN'
			],
			[
				'id'         => 3872,
				'country_id' => 105,
				'name'       => 'Enna',
				'code'       => 'EN'
			],
			[
				'id'         => 3873,
				'country_id' => 105,
				'name'       => 'Ferrara',
				'code'       => 'FE'
			],
			[
				'id'         => 3874,
				'country_id' => 105,
				'name'       => 'Firenze',
				'code'       => 'FI'
			],
			[
				'id'         => 3875,
				'country_id' => 105,
				'name'       => 'Foggia',
				'code'       => 'FG'
			],
			[
				'id'         => 3876,
				'country_id' => 105,
				'name'       => 'Forli-Cesena',
				'code'       => 'FC'
			],
			[
				'id'         => 3877,
				'country_id' => 105,
				'name'       => 'Frosinone',
				'code'       => 'FR'
			],
			[
				'id'         => 3878,
				'country_id' => 105,
				'name'       => 'Genova',
				'code'       => 'GE'
			],
			[
				'id'         => 3879,
				'country_id' => 105,
				'name'       => 'Gorizia',
				'code'       => 'GO'
			],
			[
				'id'         => 3880,
				'country_id' => 105,
				'name'       => 'Grosseto',
				'code'       => 'GR'
			],
			[
				'id'         => 3881,
				'country_id' => 105,
				'name'       => 'Imperia',
				'code'       => 'IM'
			],
			[
				'id'         => 3882,
				'country_id' => 105,
				'name'       => 'Isernia',
				'code'       => 'IS'
			],
			[
				'id'         => 3883,
				'country_id' => 105,
				'name'       => 'L\'Aquila',
				'code'       => 'AQ'
			],
			[
				'id'         => 3884,
				'country_id' => 105,
				'name'       => 'La Spezia',
				'code'       => 'SP'
			],
			[
				'id'         => 3885,
				'country_id' => 105,
				'name'       => 'Latina',
				'code'       => 'LT'
			],
			[
				'id'         => 3886,
				'country_id' => 105,
				'name'       => 'Lecce',
				'code'       => 'LE'
			],
			[
				'id'         => 3887,
				'country_id' => 105,
				'name'       => 'Lecco',
				'code'       => 'LC'
			],
			[
				'id'         => 3888,
				'country_id' => 105,
				'name'       => 'Livorno',
				'code'       => 'LI'
			],
			[
				'id'         => 3889,
				'country_id' => 105,
				'name'       => 'Lodi',
				'code'       => 'LO'
			],
			[
				'id'         => 3890,
				'country_id' => 105,
				'name'       => 'Lucca',
				'code'       => 'LU'
			],
			[
				'id'         => 3891,
				'country_id' => 105,
				'name'       => 'Macerata',
				'code'       => 'MC'
			],
			[
				'id'         => 3892,
				'country_id' => 105,
				'name'       => 'Mantova',
				'code'       => 'MN'
			],
			[
				'id'         => 3893,
				'country_id' => 105,
				'name'       => 'Massa-Carrara',
				'code'       => 'MS'
			],
			[
				'id'         => 3894,
				'country_id' => 105,
				'name'       => 'Matera',
				'code'       => 'MT'
			],
			[
				'id'         => 3895,
				'country_id' => 105,
				'name'       => 'Medio Campidano',
				'code'       => 'VS'
			],
			[
				'id'         => 3896,
				'country_id' => 105,
				'name'       => 'Messina',
				'code'       => 'ME'
			],
			[
				'id'         => 3897,
				'country_id' => 105,
				'name'       => 'Milano',
				'code'       => 'MI'
			],
			[
				'id'         => 3898,
				'country_id' => 105,
				'name'       => 'Modena',
				'code'       => 'MO'
			],
			[
				'id'         => 3899,
				'country_id' => 105,
				'name'       => 'Napoli',
				'code'       => 'NA'
			],
			[
				'id'         => 3900,
				'country_id' => 105,
				'name'       => 'Novara',
				'code'       => 'NO'
			],
			[
				'id'         => 3901,
				'country_id' => 105,
				'name'       => 'Nuoro',
				'code'       => 'NU'
			],
			[
				'id'         => 3902,
				'country_id' => 105,
				'name'       => 'Ogliastra',
				'code'       => 'OG'
			],
			[
				'id'         => 3903,
				'country_id' => 105,
				'name'       => 'Olbia-Tempio',
				'code'       => 'OT'
			],
			[
				'id'         => 3904,
				'country_id' => 105,
				'name'       => 'Oristano',
				'code'       => 'OR'
			],
			[
				'id'         => 3905,
				'country_id' => 105,
				'name'       => 'Padova',
				'code'       => 'PD'
			],
			[
				'id'         => 3906,
				'country_id' => 105,
				'name'       => 'Palermo',
				'code'       => 'PA'
			],
			[
				'id'         => 3907,
				'country_id' => 105,
				'name'       => 'Parma',
				'code'       => 'PR'
			],
			[
				'id'         => 3908,
				'country_id' => 105,
				'name'       => 'Pavia',
				'code'       => 'PV'
			],
			[
				'id'         => 3909,
				'country_id' => 105,
				'name'       => 'Perugia',
				'code'       => 'PG'
			],
			[
				'id'         => 3910,
				'country_id' => 105,
				'name'       => 'Pesaro e Urbino',
				'code'       => 'PU'
			],
			[
				'id'         => 3911,
				'country_id' => 105,
				'name'       => 'Pescara',
				'code'       => 'PE'
			],
			[
				'id'         => 3912,
				'country_id' => 105,
				'name'       => 'Piacenza',
				'code'       => 'PC'
			],
			[
				'id'         => 3913,
				'country_id' => 105,
				'name'       => 'Pisa',
				'code'       => 'PI'
			],
			[
				'id'         => 3914,
				'country_id' => 105,
				'name'       => 'Pistoia',
				'code'       => 'PT'
			],
			[
				'id'         => 3915,
				'country_id' => 105,
				'name'       => 'Pordenone',
				'code'       => 'PN'
			],
			[
				'id'         => 3916,
				'country_id' => 105,
				'name'       => 'Potenza',
				'code'       => 'PZ'
			],
			[
				'id'         => 3917,
				'country_id' => 105,
				'name'       => 'Prato',
				'code'       => 'PO'
			],
			[
				'id'         => 3918,
				'country_id' => 105,
				'name'       => 'Ragusa',
				'code'       => 'RG'
			],
			[
				'id'         => 3919,
				'country_id' => 105,
				'name'       => 'Ravenna',
				'code'       => 'RA'
			],
			[
				'id'         => 3920,
				'country_id' => 105,
				'name'       => 'Reggio Calabria',
				'code'       => 'RC'
			],
			[
				'id'         => 3921,
				'country_id' => 105,
				'name'       => 'Reggio Emilia',
				'code'       => 'RE'
			],
			[
				'id'         => 3922,
				'country_id' => 105,
				'name'       => 'Rieti',
				'code'       => 'RI'
			],
			[
				'id'         => 3923,
				'country_id' => 105,
				'name'       => 'Rimini',
				'code'       => 'RN'
			],
			[
				'id'         => 3924,
				'country_id' => 105,
				'name'       => 'Roma',
				'code'       => 'RM'
			],
			[
				'id'         => 3925,
				'country_id' => 105,
				'name'       => 'Rovigo',
				'code'       => 'RO'
			],
			[
				'id'         => 3926,
				'country_id' => 105,
				'name'       => 'Salerno',
				'code'       => 'SA'
			],
			[
				'id'         => 3927,
				'country_id' => 105,
				'name'       => 'Sassari',
				'code'       => 'SS'
			],
			[
				'id'         => 3928,
				'country_id' => 105,
				'name'       => 'Savona',
				'code'       => 'SV'
			],
			[
				'id'         => 3929,
				'country_id' => 105,
				'name'       => 'Siena',
				'code'       => 'SI'
			],
			[
				'id'         => 3930,
				'country_id' => 105,
				'name'       => 'Siracusa',
				'code'       => 'SR'
			],
			[
				'id'         => 3931,
				'country_id' => 105,
				'name'       => 'Sondrio',
				'code'       => 'SO'
			],
			[
				'id'         => 3932,
				'country_id' => 105,
				'name'       => 'Taranto',
				'code'       => 'TA'
			],
			[
				'id'         => 3933,
				'country_id' => 105,
				'name'       => 'Teramo',
				'code'       => 'TE'
			],
			[
				'id'         => 3934,
				'country_id' => 105,
				'name'       => 'Terni',
				'code'       => 'TR'
			],
			[
				'id'         => 3935,
				'country_id' => 105,
				'name'       => 'Torino',
				'code'       => 'TO'
			],
			[
				'id'         => 3936,
				'country_id' => 105,
				'name'       => 'Trapani',
				'code'       => 'TP'
			],
			[
				'id'         => 3937,
				'country_id' => 105,
				'name'       => 'Trento',
				'code'       => 'TN'
			],
			[
				'id'         => 3938,
				'country_id' => 105,
				'name'       => 'Treviso',
				'code'       => 'TV'
			],
			[
				'id'         => 3939,
				'country_id' => 105,
				'name'       => 'Trieste',
				'code'       => 'TS'
			],
			[
				'id'         => 3940,
				'country_id' => 105,
				'name'       => 'Udine',
				'code'       => 'UD'
			],
			[
				'id'         => 3941,
				'country_id' => 105,
				'name'       => 'Varese',
				'code'       => 'VA'
			],
			[
				'id'         => 3942,
				'country_id' => 105,
				'name'       => 'Venezia',
				'code'       => 'VE'
			],
			[
				'id'         => 3943,
				'country_id' => 105,
				'name'       => 'Verbano-Cusio-Ossola',
				'code'       => 'VB'
			],
			[
				'id'         => 3944,
				'country_id' => 105,
				'name'       => 'Vercelli',
				'code'       => 'VC'
			],
			[
				'id'         => 3945,
				'country_id' => 105,
				'name'       => 'Verona',
				'code'       => 'VR'
			],
			[
				'id'         => 3946,
				'country_id' => 105,
				'name'       => 'Vibo Valentia',
				'code'       => 'VV'
			],
			[
				'id'         => 3947,
				'country_id' => 105,
				'name'       => 'Vicenza',
				'code'       => 'VI'
			],
			[
				'id'         => 3948,
				'country_id' => 105,
				'name'       => 'Viterbo',
				'code'       => 'VT'
			],
			[
				'id'         => 3949,
				'country_id' => 222,
				'name'       => 'County Antrim',
				'code'       => 'ANT'
			],
			[
				'id'         => 3950,
				'country_id' => 222,
				'name'       => 'County Armagh',
				'code'       => 'ARM'
			],
			[
				'id'         => 3951,
				'country_id' => 222,
				'name'       => 'County Down',
				'code'       => 'DOW'
			],
			[
				'id'         => 3952,
				'country_id' => 222,
				'name'       => 'County Fermanagh',
				'code'       => 'FER'
			],
			[
				'id'         => 3953,
				'country_id' => 222,
				'name'       => 'County Londonderry',
				'code'       => 'LDY'
			],
			[
				'id'         => 3954,
				'country_id' => 222,
				'name'       => 'County Tyrone',
				'code'       => 'TYR'
			],
			[
				'id'         => 3955,
				'country_id' => 222,
				'name'       => 'Cumbria',
				'code'       => 'CMA'
			],
			[
				'id'         => 3956,
				'country_id' => 190,
				'name'       => 'Pomurska',
				'code'       => '1'
			],
			[
				'id'         => 3957,
				'country_id' => 190,
				'name'       => 'Podravska',
				'code'       => '2'
			],
			[
				'id'         => 3958,
				'country_id' => 190,
				'name'       => 'Koroška',
				'code'       => '3'
			],
			[
				'id'         => 3959,
				'country_id' => 190,
				'name'       => 'Savinjska',
				'code'       => '4'
			],
			[
				'id'         => 3960,
				'country_id' => 190,
				'name'       => 'Zasavska',
				'code'       => '5'
			],
			[
				'id'         => 3961,
				'country_id' => 190,
				'name'       => 'Spodnjeposavska',
				'code'       => '6'
			],
			[
				'id'         => 3962,
				'country_id' => 190,
				'name'       => 'Jugovzhodna Slovenija',
				'code'       => '7'
			],
			[
				'id'         => 3963,
				'country_id' => 190,
				'name'       => 'Osrednjeslovenska',
				'code'       => '8'
			],
			[
				'id'         => 3964,
				'country_id' => 190,
				'name'       => 'Gorenjska',
				'code'       => '9'
			],
			[
				'id'         => 3965,
				'country_id' => 190,
				'name'       => 'Notranjsko-kraška',
				'code'       => '10'
			],
			[
				'id'         => 3966,
				'country_id' => 190,
				'name'       => 'Goriška',
				'code'       => '11'
			],
			[
				'id'         => 3967,
				'country_id' => 190,
				'name'       => 'Obalno-kraška',
				'code'       => '12'
			],
			[
				'id'         => 3968,
				'country_id' => 33,
				'name'       => 'Ruse',
				'code'       => null
			],
			[
				'id'         => 3969,
				'country_id' => 101,
				'name'       => 'Alborz',
				'code'       => 'ALB'
			],
			[
				'id'         => 3970,
				'country_id' => 21,
				'name'       => 'Brussels-Capital Region',
				'code'       => 'BRU'
			],
			[
				'id'         => 3971,
				'country_id' => 138,
				'name'       => 'Aguascalientes',
				'code'       => 'AG'
			],
			[
				'id'         => 3973,
				'country_id' => 242,
				'name'       => 'Andrijevica',
				'code'       => '01'
			],
			[
				'id'         => 3974,
				'country_id' => 242,
				'name'       => 'Bar',
				'code'       => '02'
			],
			[
				'id'         => 3975,
				'country_id' => 242,
				'name'       => 'Berane',
				'code'       => '03'
			],
			[
				'id'         => 3976,
				'country_id' => 242,
				'name'       => 'Bijelo Polje',
				'code'       => '04'
			],
			[
				'id'         => 3977,
				'country_id' => 242,
				'name'       => 'Budva',
				'code'       => '05'
			],
			[
				'id'         => 3978,
				'country_id' => 242,
				'name'       => 'Cetinje',
				'code'       => '06'
			],
			[
				'id'         => 3979,
				'country_id' => 242,
				'name'       => 'Danilovgrad',
				'code'       => '07'
			],
			[
				'id'         => 3980,
				'country_id' => 242,
				'name'       => 'Herceg-Novi',
				'code'       => '08'
			],
			[
				'id'         => 3981,
				'country_id' => 242,
				'name'       => 'Kolašin',
				'code'       => '09'
			],
			[
				'id'         => 3982,
				'country_id' => 242,
				'name'       => 'Kotor',
				'code'       => '10'
			],
			[
				'id'         => 3983,
				'country_id' => 242,
				'name'       => 'Mojkovac',
				'code'       => '11'
			],
			[
				'id'         => 3984,
				'country_id' => 242,
				'name'       => 'Nikšić',
				'code'       => '12'
			],
			[
				'id'         => 3985,
				'country_id' => 242,
				'name'       => 'Plav',
				'code'       => '13'
			],
			[
				'id'         => 3986,
				'country_id' => 242,
				'name'       => 'Pljevlja',
				'code'       => '14'
			],
			[
				'id'         => 3987,
				'country_id' => 242,
				'name'       => 'Plužine',
				'code'       => '15'
			],
			[
				'id'         => 3988,
				'country_id' => 242,
				'name'       => 'Podgorica',
				'code'       => '16'
			],
			[
				'id'         => 3989,
				'country_id' => 242,
				'name'       => 'Rožaje',
				'code'       => '17'
			],
			[
				'id'         => 3990,
				'country_id' => 242,
				'name'       => 'Šavnik',
				'code'       => '18'
			],
			[
				'id'         => 3991,
				'country_id' => 242,
				'name'       => 'Tivat',
				'code'       => '19'
			],
			[
				'id'         => 3992,
				'country_id' => 242,
				'name'       => 'Ulcinj',
				'code'       => '20'
			],
			[
				'id'         => 3993,
				'country_id' => 242,
				'name'       => 'Žabljak',
				'code'       => '21'
			],
			[
				'id'         => 3994,
				'country_id' => 243,
				'name'       => 'Belgrade',
				'code'       => '00'
			],
			[
				'id'         => 3995,
				'country_id' => 243,
				'name'       => 'North Bačka',
				'code'       => '01'
			],
			[
				'id'         => 3996,
				'country_id' => 243,
				'name'       => 'Central Banat',
				'code'       => '02'
			],
			[
				'id'         => 3997,
				'country_id' => 243,
				'name'       => 'North Banat',
				'code'       => '03'
			],
			[
				'id'         => 3998,
				'country_id' => 243,
				'name'       => 'South Banat',
				'code'       => '04'
			],
			[
				'id'         => 3999,
				'country_id' => 243,
				'name'       => 'West Bačka',
				'code'       => '05'
			],
			[
				'id'         => 4000,
				'country_id' => 243,
				'name'       => 'South Bačka',
				'code'       => '06'
			],
			[
				'id'         => 4001,
				'country_id' => 243,
				'name'       => 'Srem',
				'code'       => '07'
			],
			[
				'id'         => 4002,
				'country_id' => 243,
				'name'       => 'Mačva',
				'code'       => '08'
			],
			[
				'id'         => 4003,
				'country_id' => 243,
				'name'       => 'Kolubara',
				'code'       => '09'
			],
			[
				'id'         => 4004,
				'country_id' => 243,
				'name'       => 'Podunavlje',
				'code'       => '10'
			],
			[
				'id'         => 4005,
				'country_id' => 243,
				'name'       => 'Braničevo',
				'code'       => '11'
			],
			[
				'id'         => 4006,
				'country_id' => 243,
				'name'       => 'Šumadija',
				'code'       => '12'
			],
			[
				'id'         => 4007,
				'country_id' => 243,
				'name'       => 'Pomoravlje',
				'code'       => '13'
			],
			[
				'id'         => 4008,
				'country_id' => 243,
				'name'       => 'Bor',
				'code'       => '14'
			],
			[
				'id'         => 4009,
				'country_id' => 243,
				'name'       => 'Zaječar',
				'code'       => '15'
			],
			[
				'id'         => 4010,
				'country_id' => 243,
				'name'       => 'Zlatibor',
				'code'       => '16'
			],
			[
				'id'         => 4011,
				'country_id' => 243,
				'name'       => 'Moravica',
				'code'       => '17'
			],
			[
				'id'         => 4012,
				'country_id' => 243,
				'name'       => 'Raška',
				'code'       => '18'
			],
			[
				'id'         => 4013,
				'country_id' => 243,
				'name'       => 'Rasina',
				'code'       => '19'
			],
			[
				'id'         => 4014,
				'country_id' => 243,
				'name'       => 'Nišava',
				'code'       => '20'
			],
			[
				'id'         => 4015,
				'country_id' => 243,
				'name'       => 'Toplica',
				'code'       => '21'
			],
			[
				'id'         => 4016,
				'country_id' => 243,
				'name'       => 'Pirot',
				'code'       => '22'
			],
			[
				'id'         => 4017,
				'country_id' => 243,
				'name'       => 'Jablanica',
				'code'       => '23'
			],
			[
				'id'         => 4018,
				'country_id' => 243,
				'name'       => 'Pčinja',
				'code'       => '24'
			],
			[
				'id'         => 4020,
				'country_id' => 245,
				'name'       => 'Bonaire',
				'code'       => 'BO'
			],
			[
				'id'         => 4021,
				'country_id' => 245,
				'name'       => 'Saba',
				'code'       => 'SA'
			],
			[
				'id'         => 4022,
				'country_id' => 245,
				'name'       => 'Sint Eustatius',
				'code'       => 'SE'
			],
			[
				'id'         => 4023,
				'country_id' => 248,
				'name'       => 'Central Equatoria',
				'code'       => 'EC'
			],
			[
				'id'         => 4024,
				'country_id' => 248,
				'name'       => 'Eastern Equatoria',
				'code'       => 'EE'
			],
			[
				'id'         => 4025,
				'country_id' => 248,
				'name'       => 'Jonglei',
				'code'       => 'JG'
			],
			[
				'id'         => 4026,
				'country_id' => 248,
				'name'       => 'Lakes',
				'code'       => 'LK'
			],
			[
				'id'         => 4027,
				'country_id' => 248,
				'name'       => 'Northern Bahr el-Ghazal',
				'code'       => 'BN'
			],
			[
				'id'         => 4028,
				'country_id' => 248,
				'name'       => 'Unity',
				'code'       => 'UY'
			],
			[
				'id'         => 4029,
				'country_id' => 248,
				'name'       => 'Upper Nile',
				'code'       => 'NU'
			],
			[
				'id'         => 4030,
				'country_id' => 248,
				'name'       => 'Warrap',
				'code'       => 'WR'
			],
			[
				'id'         => 4031,
				'country_id' => 248,
				'name'       => 'Western Bahr el-Ghazal',
				'code'       => 'BW'
			],
			[
				'id'         => 4032,
				'country_id' => 248,
				'name'       => 'Western Equatoria',
				'code'       => 'EW'
			],
			[
				'id'         => 4036,
				'country_id' => 117,
				'name'       => 'Ainaži, Salacgrīvas novads',
				'code'       => '0661405'
			],
			[
				'id'         => 4037,
				'country_id' => 117,
				'name'       => 'Aizkraukle, Aizkraukles novads',
				'code'       => '0320201'
			],
			[
				'id'         => 4038,
				'country_id' => 117,
				'name'       => 'Aizkraukles novads',
				'code'       => '0320200'
			],
			[
				'id'         => 4039,
				'country_id' => 117,
				'name'       => 'Aizpute, Aizputes novads',
				'code'       => '0640605'
			],
			[
				'id'         => 4040,
				'country_id' => 117,
				'name'       => 'Aizputes novads',
				'code'       => '0640600'
			],
			[
				'id'         => 4041,
				'country_id' => 117,
				'name'       => 'Aknīste, Aknīstes novads',
				'code'       => '0560805'
			],
			[
				'id'         => 4042,
				'country_id' => 117,
				'name'       => 'Aknīstes novads',
				'code'       => '0560800'
			],
			[
				'id'         => 4043,
				'country_id' => 117,
				'name'       => 'Aloja, Alojas novads',
				'code'       => '0661007'
			],
			[
				'id'         => 4044,
				'country_id' => 117,
				'name'       => 'Alojas novads',
				'code'       => '0661000'
			],
			[
				'id'         => 4045,
				'country_id' => 117,
				'name'       => 'Alsungas novads',
				'code'       => '0624200'
			],
			[
				'id'         => 4046,
				'country_id' => 117,
				'name'       => 'Alūksne, Alūksnes novads',
				'code'       => '0360201'
			],
			[
				'id'         => 4047,
				'country_id' => 117,
				'name'       => 'Alūksnes novads',
				'code'       => '0360200'
			],
			[
				'id'         => 4048,
				'country_id' => 117,
				'name'       => 'Amatas novads',
				'code'       => '0424701'
			],
			[
				'id'         => 4049,
				'country_id' => 117,
				'name'       => 'Ape, Apes novads',
				'code'       => '0360805'
			],
			[
				'id'         => 4050,
				'country_id' => 117,
				'name'       => 'Apes novads',
				'code'       => '0360800'
			],
			[
				'id'         => 4051,
				'country_id' => 117,
				'name'       => 'Auce, Auces novads',
				'code'       => '0460805'
			],
			[
				'id'         => 4052,
				'country_id' => 117,
				'name'       => 'Auces novads',
				'code'       => '0460800'
			],
			[
				'id'         => 4053,
				'country_id' => 117,
				'name'       => 'Ādažu novads',
				'code'       => '0804400'
			],
			[
				'id'         => 4054,
				'country_id' => 117,
				'name'       => 'Babītes novads',
				'code'       => '0804900'
			],
			[
				'id'         => 4055,
				'country_id' => 117,
				'name'       => 'Baldone, Baldones novads',
				'code'       => '0800605'
			],
			[
				'id'         => 4056,
				'country_id' => 117,
				'name'       => 'Baldones novads',
				'code'       => '0800600'
			],
			[
				'id'         => 4057,
				'country_id' => 117,
				'name'       => 'Baloži, Ķekavas novads',
				'code'       => '0800807'
			],
			[
				'id'         => 4058,
				'country_id' => 117,
				'name'       => 'Baltinavas novads',
				'code'       => '0384400'
			],
			[
				'id'         => 4059,
				'country_id' => 117,
				'name'       => 'Balvi, Balvu novads',
				'code'       => '0380201'
			],
			[
				'id'         => 4060,
				'country_id' => 117,
				'name'       => 'Balvu novads',
				'code'       => '0380200'
			],
			[
				'id'         => 4061,
				'country_id' => 117,
				'name'       => 'Bauska, Bauskas novads',
				'code'       => '0400201'
			],
			[
				'id'         => 4062,
				'country_id' => 117,
				'name'       => 'Bauskas novads',
				'code'       => '0400200'
			],
			[
				'id'         => 4063,
				'country_id' => 117,
				'name'       => 'Beverīnas novads',
				'code'       => '0964700'
			],
			[
				'id'         => 4064,
				'country_id' => 117,
				'name'       => 'Brocēni, Brocēnu novads',
				'code'       => '0840605'
			],
			[
				'id'         => 4065,
				'country_id' => 117,
				'name'       => 'Brocēnu novads',
				'code'       => '0840601'
			],
			[
				'id'         => 4066,
				'country_id' => 117,
				'name'       => 'Burtnieku novads',
				'code'       => '0967101'
			],
			[
				'id'         => 4067,
				'country_id' => 117,
				'name'       => 'Carnikavas novads',
				'code'       => '0805200'
			],
			[
				'id'         => 4068,
				'country_id' => 117,
				'name'       => 'Cesvaine, Cesvaines novads',
				'code'       => '0700807'
			],
			[
				'id'         => 4069,
				'country_id' => 117,
				'name'       => 'Cesvaines novads',
				'code'       => '0700800'
			],
			[
				'id'         => 4070,
				'country_id' => 117,
				'name'       => 'Cēsis, Cēsu novads',
				'code'       => '0420201'
			],
			[
				'id'         => 4071,
				'country_id' => 117,
				'name'       => 'Cēsu novads',
				'code'       => '0420200'
			],
			[
				'id'         => 4072,
				'country_id' => 117,
				'name'       => 'Ciblas novads',
				'code'       => '0684901'
			],
			[
				'id'         => 4073,
				'country_id' => 117,
				'name'       => 'Dagda, Dagdas novads',
				'code'       => '0601009'
			],
			[
				'id'         => 4074,
				'country_id' => 117,
				'name'       => 'Dagdas novads',
				'code'       => '0601000'
			],
			[
				'id'         => 4075,
				'country_id' => 117,
				'name'       => 'Daugavpils',
				'code'       => '0050000'
			],
			[
				'id'         => 4076,
				'country_id' => 117,
				'name'       => 'Daugavpils novads',
				'code'       => '0440200'
			],
			[
				'id'         => 4077,
				'country_id' => 117,
				'name'       => 'Dobele, Dobeles novads',
				'code'       => '0460201'
			],
			[
				'id'         => 4078,
				'country_id' => 117,
				'name'       => 'Dobeles novads',
				'code'       => '0460200'
			],
			[
				'id'         => 4079,
				'country_id' => 117,
				'name'       => 'Dundagas novads',
				'code'       => '0885100'
			],
			[
				'id'         => 4080,
				'country_id' => 117,
				'name'       => 'Durbe, Durbes novads',
				'code'       => '0640807'
			],
			[
				'id'         => 4081,
				'country_id' => 117,
				'name'       => 'Durbes novads',
				'code'       => '0640801'
			],
			[
				'id'         => 4082,
				'country_id' => 117,
				'name'       => 'Engures novads',
				'code'       => '0905100'
			],
			[
				'id'         => 4083,
				'country_id' => 117,
				'name'       => 'Ērgļu novads',
				'code'       => '0705500'
			],
			[
				'id'         => 4084,
				'country_id' => 117,
				'name'       => 'Garkalnes novads',
				'code'       => '0806000'
			],
			[
				'id'         => 4085,
				'country_id' => 117,
				'name'       => 'Grobiņa, Grobiņas novads',
				'code'       => '0641009'
			],
			[
				'id'         => 4086,
				'country_id' => 117,
				'name'       => 'Grobiņas novads',
				'code'       => '0641000'
			],
			[
				'id'         => 4087,
				'country_id' => 117,
				'name'       => 'Gulbene, Gulbenes novads',
				'code'       => '0500201'
			],
			[
				'id'         => 4088,
				'country_id' => 117,
				'name'       => 'Gulbenes novads',
				'code'       => '0500200'
			],
			[
				'id'         => 4089,
				'country_id' => 117,
				'name'       => 'Iecavas novads',
				'code'       => '0406400'
			],
			[
				'id'         => 4090,
				'country_id' => 117,
				'name'       => 'Ikšķile, Ikšķiles novads',
				'code'       => '0740605'
			],
			[
				'id'         => 4091,
				'country_id' => 117,
				'name'       => 'Ikšķiles novads',
				'code'       => '0740600'
			],
			[
				'id'         => 4092,
				'country_id' => 117,
				'name'       => 'Ilūkste, Ilūkstes novads',
				'code'       => '0440807'
			],
			[
				'id'         => 4093,
				'country_id' => 117,
				'name'       => 'Ilūkstes novads',
				'code'       => '0440801'
			],
			[
				'id'         => 4094,
				'country_id' => 117,
				'name'       => 'Inčukalna novads',
				'code'       => '0801800'
			],
			[
				'id'         => 4095,
				'country_id' => 117,
				'name'       => 'Jaunjelgava, Jaunjelgavas novads',
				'code'       => '0321007'
			],
			[
				'id'         => 4096,
				'country_id' => 117,
				'name'       => 'Jaunjelgavas novads',
				'code'       => '0321000'
			],
			[
				'id'         => 4097,
				'country_id' => 117,
				'name'       => 'Jaunpiebalgas novads',
				'code'       => '0425700'
			],
			[
				'id'         => 4098,
				'country_id' => 117,
				'name'       => 'Jaunpils novads',
				'code'       => '0905700'
			],
			[
				'id'         => 4099,
				'country_id' => 117,
				'name'       => 'Jelgava',
				'code'       => '0090000'
			],
			[
				'id'         => 4100,
				'country_id' => 117,
				'name'       => 'Jelgavas novads',
				'code'       => '0540200'
			],
			[
				'id'         => 4101,
				'country_id' => 117,
				'name'       => 'Jēkabpils',
				'code'       => '0110000'
			],
			[
				'id'         => 4102,
				'country_id' => 117,
				'name'       => 'Jēkabpils novads',
				'code'       => '0560200'
			],
			[
				'id'         => 4103,
				'country_id' => 117,
				'name'       => 'Jūrmala',
				'code'       => '0130000'
			],
			[
				'id'         => 4104,
				'country_id' => 117,
				'name'       => 'Kalnciems, Jelgavas novads',
				'code'       => '0540211'
			],
			[
				'id'         => 4105,
				'country_id' => 117,
				'name'       => 'Kandava, Kandavas novads',
				'code'       => '0901211'
			],
			[
				'id'         => 4106,
				'country_id' => 117,
				'name'       => 'Kandavas novads',
				'code'       => '0901201'
			],
			[
				'id'         => 4107,
				'country_id' => 117,
				'name'       => 'Kārsava, Kārsavas novads',
				'code'       => '0681009'
			],
			[
				'id'         => 4108,
				'country_id' => 117,
				'name'       => 'Kārsavas novads',
				'code'       => '0681000'
			],
			[
				'id'         => 4109,
				'country_id' => 117,
				'name'       => 'Kocēnu novads ,bij. Valmieras)',
				'code'       => '0960200'
			],
			[
				'id'         => 4110,
				'country_id' => 117,
				'name'       => 'Kokneses novads',
				'code'       => '0326100'
			],
			[
				'id'         => 4111,
				'country_id' => 117,
				'name'       => 'Krāslava, Krāslavas novads',
				'code'       => '0600201'
			],
			[
				'id'         => 4112,
				'country_id' => 117,
				'name'       => 'Krāslavas novads',
				'code'       => '0600202'
			],
			[
				'id'         => 4113,
				'country_id' => 117,
				'name'       => 'Krimuldas novads',
				'code'       => '0806900'
			],
			[
				'id'         => 4114,
				'country_id' => 117,
				'name'       => 'Krustpils novads',
				'code'       => '0566900'
			],
			[
				'id'         => 4115,
				'country_id' => 117,
				'name'       => 'Kuldīga, Kuldīgas novads',
				'code'       => '0620201'
			],
			[
				'id'         => 4116,
				'country_id' => 117,
				'name'       => 'Kuldīgas novads',
				'code'       => '0620200'
			],
			[
				'id'         => 4117,
				'country_id' => 117,
				'name'       => 'Ķeguma novads',
				'code'       => '0741001'
			],
			[
				'id'         => 4118,
				'country_id' => 117,
				'name'       => 'Ķegums, Ķeguma novads',
				'code'       => '0741009'
			],
			[
				'id'         => 4119,
				'country_id' => 117,
				'name'       => 'Ķekavas novads',
				'code'       => '0800800'
			],
			[
				'id'         => 4120,
				'country_id' => 117,
				'name'       => 'Lielvārde, Lielvārdes novads',
				'code'       => '0741413'
			],
			[
				'id'         => 4121,
				'country_id' => 117,
				'name'       => 'Lielvārdes novads',
				'code'       => '0741401'
			],
			[
				'id'         => 4122,
				'country_id' => 117,
				'name'       => 'Liepāja',
				'code'       => '0170000'
			],
			[
				'id'         => 4123,
				'country_id' => 117,
				'name'       => 'Limbaži, Limbažu novads',
				'code'       => '0660201'
			],
			[
				'id'         => 4124,
				'country_id' => 117,
				'name'       => 'Limbažu novads',
				'code'       => '0660200'
			],
			[
				'id'         => 4125,
				'country_id' => 117,
				'name'       => 'Līgatne, Līgatnes novads',
				'code'       => '0421211'
			],
			[
				'id'         => 4126,
				'country_id' => 117,
				'name'       => 'Līgatnes novads',
				'code'       => '0421200'
			],
			[
				'id'         => 4127,
				'country_id' => 117,
				'name'       => 'Līvāni, Līvānu novads',
				'code'       => '0761211'
			],
			[
				'id'         => 4128,
				'country_id' => 117,
				'name'       => 'Līvānu novads',
				'code'       => '0761201'
			],
			[
				'id'         => 4129,
				'country_id' => 117,
				'name'       => 'Lubāna, Lubānas novads',
				'code'       => '0701413'
			],
			[
				'id'         => 4130,
				'country_id' => 117,
				'name'       => 'Lubānas novads',
				'code'       => '0701400'
			],
			[
				'id'         => 4131,
				'country_id' => 117,
				'name'       => 'Ludza, Ludzas novads',
				'code'       => '0680201'
			],
			[
				'id'         => 4132,
				'country_id' => 117,
				'name'       => 'Ludzas novads',
				'code'       => '0680200'
			],
			[
				'id'         => 4133,
				'country_id' => 117,
				'name'       => 'Madona, Madonas novads',
				'code'       => '0700201'
			],
			[
				'id'         => 4134,
				'country_id' => 117,
				'name'       => 'Madonas novads',
				'code'       => '0700200'
			],
			[
				'id'         => 4135,
				'country_id' => 117,
				'name'       => 'Mazsalaca, Mazsalacas novads',
				'code'       => '0961011'
			],
			[
				'id'         => 4136,
				'country_id' => 117,
				'name'       => 'Mazsalacas novads',
				'code'       => '0961000'
			],
			[
				'id'         => 4137,
				'country_id' => 117,
				'name'       => 'Mālpils novads',
				'code'       => '0807400'
			],
			[
				'id'         => 4138,
				'country_id' => 117,
				'name'       => 'Mārupes novads',
				'code'       => '0807600'
			],
			[
				'id'         => 4139,
				'country_id' => 117,
				'name'       => 'Mērsraga novads',
				'code'       => '0887600'
			],
			[
				'id'         => 4140,
				'country_id' => 117,
				'name'       => 'Naukšēnu novads',
				'code'       => '0967300'
			],
			[
				'id'         => 4141,
				'country_id' => 117,
				'name'       => 'Neretas novads',
				'code'       => '0327100'
			],
			[
				'id'         => 4142,
				'country_id' => 117,
				'name'       => 'Nīcas novads',
				'code'       => '0647900'
			],
			[
				'id'         => 4143,
				'country_id' => 117,
				'name'       => 'Ogre, Ogres novads',
				'code'       => '0740201'
			],
			[
				'id'         => 4144,
				'country_id' => 117,
				'name'       => 'Ogres novads',
				'code'       => '0740202'
			],
			[
				'id'         => 4145,
				'country_id' => 117,
				'name'       => 'Olaine, Olaines novads',
				'code'       => '0801009'
			],
			[
				'id'         => 4146,
				'country_id' => 117,
				'name'       => 'Olaines novads',
				'code'       => '0801000'
			],
			[
				'id'         => 4147,
				'country_id' => 117,
				'name'       => 'Ozolnieku novads',
				'code'       => '0546701'
			],
			[
				'id'         => 4148,
				'country_id' => 117,
				'name'       => 'Pārgaujas novads',
				'code'       => '0427500'
			],
			[
				'id'         => 4149,
				'country_id' => 117,
				'name'       => 'Pāvilosta, Pāvilostas novads',
				'code'       => '0641413'
			],
			[
				'id'         => 4150,
				'country_id' => 117,
				'name'       => 'Pāvilostas novads',
				'code'       => '0641401'
			],
			[
				'id'         => 4151,
				'country_id' => 117,
				'name'       => 'Piltene, Ventspils novads',
				'code'       => '0980213'
			],
			[
				'id'         => 4152,
				'country_id' => 117,
				'name'       => 'Pļaviņas, Pļaviņu novads',
				'code'       => '0321413'
			],
			[
				'id'         => 4153,
				'country_id' => 117,
				'name'       => 'Pļaviņu novads',
				'code'       => '0321400'
			],
			[
				'id'         => 4154,
				'country_id' => 117,
				'name'       => 'Preiļi, Preiļu novads',
				'code'       => '0760201'
			],
			[
				'id'         => 4155,
				'country_id' => 117,
				'name'       => 'Preiļu novads',
				'code'       => '0760202'
			],
			[
				'id'         => 4156,
				'country_id' => 117,
				'name'       => 'Priekule, Priekules novads',
				'code'       => '0641615'
			],
			[
				'id'         => 4157,
				'country_id' => 117,
				'name'       => 'Priekules novads',
				'code'       => '0641600'
			],
			[
				'id'         => 4158,
				'country_id' => 117,
				'name'       => 'Priekuļu novads',
				'code'       => '0427300'
			],
			[
				'id'         => 4159,
				'country_id' => 117,
				'name'       => 'Raunas novads',
				'code'       => '0427700'
			],
			[
				'id'         => 4160,
				'country_id' => 117,
				'name'       => 'Rēzekne',
				'code'       => '0210000'
			],
			[
				'id'         => 4161,
				'country_id' => 117,
				'name'       => 'Rēzeknes novads',
				'code'       => '0780200'
			],
			[
				'id'         => 4162,
				'country_id' => 117,
				'name'       => 'Riebiņu novads',
				'code'       => '0766300'
			],
			[
				'id'         => 4163,
				'country_id' => 117,
				'name'       => 'Rīga',
				'code'       => '0010000'
			],
			[
				'id'         => 4164,
				'country_id' => 117,
				'name'       => 'Rojas novads',
				'code'       => '0888300'
			],
			[
				'id'         => 4165,
				'country_id' => 117,
				'name'       => 'Ropažu novads',
				'code'       => '0808400'
			],
			[
				'id'         => 4166,
				'country_id' => 117,
				'name'       => 'Rucavas novads',
				'code'       => '0648500'
			],
			[
				'id'         => 4167,
				'country_id' => 117,
				'name'       => 'Rugāju novads',
				'code'       => '0387500'
			],
			[
				'id'         => 4168,
				'country_id' => 117,
				'name'       => 'Rundāles novads',
				'code'       => '0407700'
			],
			[
				'id'         => 4169,
				'country_id' => 117,
				'name'       => 'Rūjiena, Rūjienas novads',
				'code'       => '0961615'
			],
			[
				'id'         => 4170,
				'country_id' => 117,
				'name'       => 'Rūjienas novads',
				'code'       => '0961600'
			],
			[
				'id'         => 4171,
				'country_id' => 117,
				'name'       => 'Sabile, Talsu novads',
				'code'       => '0880213'
			],
			[
				'id'         => 4172,
				'country_id' => 117,
				'name'       => 'Salacgrīva, Salacgrīvas novads',
				'code'       => '0661415'
			],
			[
				'id'         => 4173,
				'country_id' => 117,
				'name'       => 'Salacgrīvas novads',
				'code'       => '0661400'
			],
			[
				'id'         => 4174,
				'country_id' => 117,
				'name'       => 'Salas novads',
				'code'       => '0568700'
			],
			[
				'id'         => 4175,
				'country_id' => 117,
				'name'       => 'Salaspils novads',
				'code'       => '0801200'
			],
			[
				'id'         => 4176,
				'country_id' => 117,
				'name'       => 'Salaspils, Salaspils novads',
				'code'       => '0801211'
			],
			[
				'id'         => 4177,
				'country_id' => 117,
				'name'       => 'Saldus novads',
				'code'       => '0840200'
			],
			[
				'id'         => 4178,
				'country_id' => 117,
				'name'       => 'Saldus, Saldus novads',
				'code'       => '0840201'
			],
			[
				'id'         => 4179,
				'country_id' => 117,
				'name'       => 'Saulkrasti, Saulkrastu novads',
				'code'       => '0801413'
			],
			[
				'id'         => 4180,
				'country_id' => 117,
				'name'       => 'Saulkrastu novads',
				'code'       => '0801400'
			],
			[
				'id'         => 4181,
				'country_id' => 117,
				'name'       => 'Seda, Strenču novads',
				'code'       => '0941813'
			],
			[
				'id'         => 4182,
				'country_id' => 117,
				'name'       => 'Sējas novads',
				'code'       => '0809200'
			],
			[
				'id'         => 4183,
				'country_id' => 117,
				'name'       => 'Sigulda, Siguldas novads',
				'code'       => '0801615'
			],
			[
				'id'         => 4184,
				'country_id' => 117,
				'name'       => 'Siguldas novads',
				'code'       => '0801601'
			],
			[
				'id'         => 4185,
				'country_id' => 117,
				'name'       => 'Skrīveru novads',
				'code'       => '0328200'
			],
			[
				'id'         => 4186,
				'country_id' => 117,
				'name'       => 'Skrunda, Skrundas novads',
				'code'       => '0621209'
			],
			[
				'id'         => 4187,
				'country_id' => 117,
				'name'       => 'Skrundas novads',
				'code'       => '0621200'
			],
			[
				'id'         => 4188,
				'country_id' => 117,
				'name'       => 'Smiltene, Smiltenes novads',
				'code'       => '0941615'
			],
			[
				'id'         => 4189,
				'country_id' => 117,
				'name'       => 'Smiltenes novads',
				'code'       => '0941600'
			],
			[
				'id'         => 4190,
				'country_id' => 117,
				'name'       => 'Staicele, Alojas novads',
				'code'       => '0661017'
			],
			[
				'id'         => 4191,
				'country_id' => 117,
				'name'       => 'Stende, Talsu novads',
				'code'       => '0880215'
			],
			[
				'id'         => 4192,
				'country_id' => 117,
				'name'       => 'Stopiņu novads',
				'code'       => '0809600'
			],
			[
				'id'         => 4193,
				'country_id' => 117,
				'name'       => 'Strenči, Strenču novads',
				'code'       => '0941817'
			],
			[
				'id'         => 4194,
				'country_id' => 117,
				'name'       => 'Strenču novads',
				'code'       => '0941800'
			],
			[
				'id'         => 4195,
				'country_id' => 117,
				'name'       => 'Subate, Ilūkstes novads',
				'code'       => '0440815'
			],
			[
				'id'         => 4196,
				'country_id' => 117,
				'name'       => 'Talsi, Talsu novads',
				'code'       => '0880201'
			],
			[
				'id'         => 4197,
				'country_id' => 117,
				'name'       => 'Talsu novads',
				'code'       => '0880200'
			],
			[
				'id'         => 4198,
				'country_id' => 117,
				'name'       => 'Tērvetes novads',
				'code'       => '0468900'
			],
			[
				'id'         => 4199,
				'country_id' => 117,
				'name'       => 'Tukuma novads',
				'code'       => '0900200'
			],
			[
				'id'         => 4200,
				'country_id' => 117,
				'name'       => 'Tukums, Tukuma novads',
				'code'       => '0900201'
			],
			[
				'id'         => 4201,
				'country_id' => 117,
				'name'       => 'Vaiņodes novads',
				'code'       => '0649300'
			],
			[
				'id'         => 4202,
				'country_id' => 117,
				'name'       => 'Valdemārpils, Talsu novads',
				'code'       => '0880217'
			],
			[
				'id'         => 4203,
				'country_id' => 117,
				'name'       => 'Valka, Valkas novads',
				'code'       => '0940201'
			],
			[
				'id'         => 4204,
				'country_id' => 117,
				'name'       => 'Valkas novads',
				'code'       => '0940200'
			],
			[
				'id'         => 4205,
				'country_id' => 117,
				'name'       => 'Valmiera',
				'code'       => '0250000'
			],
			[
				'id'         => 4206,
				'country_id' => 117,
				'name'       => 'Vangaži, Inčukalna novads',
				'code'       => '0801817'
			],
			[
				'id'         => 4207,
				'country_id' => 117,
				'name'       => 'Varakļāni, Varakļānu novads',
				'code'       => '0701817'
			],
			[
				'id'         => 4208,
				'country_id' => 117,
				'name'       => 'Varakļānu novads',
				'code'       => '0701800'
			],
			[
				'id'         => 4209,
				'country_id' => 117,
				'name'       => 'Vārkavas novads',
				'code'       => '0769101'
			],
			[
				'id'         => 4210,
				'country_id' => 117,
				'name'       => 'Vecpiebalgas novads',
				'code'       => '0429300'
			],
			[
				'id'         => 4211,
				'country_id' => 117,
				'name'       => 'Vecumnieku novads',
				'code'       => '0409500'
			],
			[
				'id'         => 4212,
				'country_id' => 117,
				'name'       => 'Ventspils',
				'code'       => '0270000'
			],
			[
				'id'         => 4213,
				'country_id' => 117,
				'name'       => 'Ventspils novads',
				'code'       => '0980200'
			],
			[
				'id'         => 4214,
				'country_id' => 117,
				'name'       => 'Viesīte, Viesītes novads',
				'code'       => '0561815'
			],
			[
				'id'         => 4215,
				'country_id' => 117,
				'name'       => 'Viesītes novads',
				'code'       => '0561800'
			],
			[
				'id'         => 4216,
				'country_id' => 117,
				'name'       => 'Viļaka, Viļakas novads',
				'code'       => '0381615'
			],
			[
				'id'         => 4217,
				'country_id' => 117,
				'name'       => 'Viļakas novads',
				'code'       => '0381600'
			],
			[
				'id'         => 4218,
				'country_id' => 117,
				'name'       => 'Viļāni, Viļānu novads',
				'code'       => '0781817'
			],
			[
				'id'         => 4219,
				'country_id' => 117,
				'name'       => 'Viļānu novads',
				'code'       => '0781800'
			],
			[
				'id'         => 4220,
				'country_id' => 117,
				'name'       => 'Zilupe, Zilupes novads',
				'code'       => '0681817'
			],
			[
				'id'         => 4221,
				'country_id' => 117,
				'name'       => 'Zilupes novads',
				'code'       => '0681801'
			],
			[
				'id'         => 4222,
				'country_id' => 43,
				'name'       => 'Arica y Parinacota',
				'code'       => 'AP'
			],
			[
				'id'         => 4223,
				'country_id' => 43,
				'name'       => 'Los Rios',
				'code'       => 'LR'
			],
			[
				'id'         => 4224,
				'country_id' => 220,
				'name'       => 'Kharkivs\'ka Oblast',
				'code'       => '63'
			],
			[
				'id'         => 4225,
				'country_id' => 118,
				'name'       => 'Beirut',
				'code'       => 'LB-BR'
			],
			[
				'id'         => 4226,
				'country_id' => 118,
				'name'       => 'Bekaa',
				'code'       => 'LB-BE'
			],
			[
				'id'         => 4227,
				'country_id' => 118,
				'name'       => 'Mount Lebanon',
				'code'       => 'LB-ML'
			],
			[
				'id'         => 4228,
				'country_id' => 118,
				'name'       => 'Nabatieh',
				'code'       => 'LB-NB'
			],
			[
				'id'         => 4229,
				'country_id' => 118,
				'name'       => 'North',
				'code'       => 'LB-NR'
			],
			[
				'id'         => 4230,
				'country_id' => 118,
				'name'       => 'South',
				'code'       => 'LB-ST'
			]
		];
		
		DB::table('zones')->insert($zones);
		
		\Schema::enableForeignKeyConstraints();
	}
}
