<?php

namespace Arlo;

class Arrays {
	public static $arlo_timezone_system_names_to_php_tz_identifiers = [
		'New Zealand Standard Time' => 'Pacific/Auckland',
		'Cen. Australia Standard Time' => 'Australia/Adelaide',
		'AUS Central Standard Time' => 'Australia/Darwin',
		'E. Australia Standard Time' => 'Australia/Brisbane',
		'AUS Eastern Standard Time' => 'Australia/Sydney',
		'Tasmania Standard Time' => 'Australia/Hobart',
		'W. Australia Standard Time' => 'Australia/Perth',
		'Singapore Standard Time' => 'Asia/Singapore',
		'China Standard Time' => 'Asia/Urumqi',
		'GMT Standard Time' => 'Europe/London',
		'Hawaiian Standard Time' => 'Pacific/Honolulu',
		'Alaskan Standard Time' => 'America/Anchorage',
		'Pacific Standard Time (Mexico)' => 'America/Los_Angeles',
		'Pacific Standard Time' => 'America/Los_Angeles',
		'US Mountain Standard Time' => 'America/Denver',
		'Mountain Standard Time (Mexico)' => 'America/Mazatlan',
		'Mountain Standard Time' => 'America/Denver',
		'Central America Standard Time' => 'America/Chicago',
		'Central Standard Time' => 'America/Chicago',
		'Central Standard Time (Mexico)' => 'America/Monterrey',
		'Canada Central Standard Time' => 'America/Chicago',
		'SA Pacific Standard Time' => 'America/Lima',
		'Eastern Standard Time' => 'America/New_York',
		'US Eastern Standard Time' => 'America/New_York',
		'Venezuela Standard Time' => 'America/Caracas',
		'Paraguay Standard Time' => 'America/Asuncion',
		'Atlantic Standard Time' => 'Asia/Riyadh',
		'Central Brazilian Standard Time' => 'America/Cuiaba',
		'SA Western Standard Time' => 'America/Manaus',
		'Pacific SA Standard Time' => 'America/Santiago',
		'Newfoundland Standard Time' => 'America/St_Johns',
		'E. South America Standard Time' => 'America/Sao_Paulo',
		'Argentina Standard Time' => 'America/Buenos_Aires',
		'SA Eastern Standard Time' => 'America/Fortaleza',
		'Greenland Standard Time' => 'America/Godthab',
		'Montevideo Standard Time' => 'America/Montevideo',
		'Azores Standard Time' => 'Atlantic/Azores',
		'Cape Verde Standard Time' => 'Atlantic/Cape_Verde',
		'Morocco Standard Time' => 'Africa/Casablanca',
		'Greenwich Standard Time' => 'Atlantic/Reykjavik',
		'W. Europe Standard Time' => 'Europe/Vienna',
		'Central Europe Standard Time' => 'Europe/Prague',
		'Romance Standard Time' => 'Europe/Paris',
		'Central European Standard Time' => 'Europe/Zagreb',
		'W. Central Africa Standard Time' => 'Africa/Brazzaville',
		'Namibia Standard Time' => 'Africa/Windhoek',
		'Jordan Standard Time' => 'Asia/Amman',
		'GTB Standard Time' => 'Europe/Bucharest',
		'Middle East Standard Time' => 'Asia/Beirut',
		'Egypt Standard Time' => 'Africa/Cairo',
		'Syria Standard Time' => 'Asia/Damascus',
		'South Africa Standard Time' => 'Africa/Harare',
		'FLE Standard Time' => 'Europe/Vilnius',
		'Israel Standard Time' => 'Asia/Jerusalem',
		'E. Europe Standard Time' => 'Europe/Chisinau',
		'Arabic Standard Time' => 'Asia/Baghdad',
		'Arab Standard Time' => 'Asia/Riyadh',
		'Russian Standard Time' => 'Europe/Volgograd',
		'E. Africa Standard Time' => 'Africa/Nairobi',
		'Iran Standard Time' => 'Asia/Tehran',
		'Arabian Standard Time' => 'Asia/Muscat',
		'Azerbaijan Standard Time' => 'Asia/Baku',
		'Mauritius Standard Time' => 'Indian/Mauritius',
		'Georgian Standard Time' => 'Asia/Tbilisi',
		'Caucasus Standard Time' => 'Asia/Yerevan',
		'Afghanistan Standard Time' => 'Asia/Kabul',
		'Ekaterinburg Standard Time' => 'Asia/Yekaterinburg',
		'Pakistan Standard Time' => 'Asia/Karachi',
		'West Asia Standard Time' => 'Asia/Tashkent',
		'India Standard Time' => 'Asia/Kolkata',
		'Sri Lanka Standard Time' => 'Asia/Jerusalem',
		'Nepal Standard Time' => 'Asia/Kathmandu',
		'Central Asia Standard Time' => 'Asia/Almaty',
		'Bangladesh Standard Time' => 'Asia/Dhaka',
		'N. Central Asia Standard Time' => 'Asia/Novosibirsk',
		'Myanmar Standard Time' => 'Europe/Moscow',
		'SE Asia Standard Time' => 'Asia/Jakarta',
		'North Asia Standard Time' => 'Asia/Krasnoyarsk',
		'North Asia East Standard Time' => 'Asia/Irkutsk',
		'Taipei Standard Time' => 'Asia/Taipei',
		'Ulaanbaatar Standard Time' => 'Asia/Ulaanbaatar',
		'Tokyo Standard Time' => 'Asia/Tokyo',
		'Korea Standard Time' => 'Asia/Seoul',
		'Yakutsk Standard Time' => 'Asia/Yakutsk',
		'West Pacific Standard Time' => 'Pacific/Guam',
		'Vladivostok Standard Time' => 'Asia/Vladivostok',
		'Magadan Standard Time' => 'Asia/Magadan',
		'Central Pacific Standard Time' => 'Asia/Magadan',
		'Fiji Standard Time' => 'Pacific/Fiji',
		'Tonga Standard Time' => 'Pacific/Tongatapu',
		'Samoa Standard Time' => 'Pacific/Samoa',
		'Aleutian Standard Time' => 'America/Adak',
		'Marquesas Standard Time' => 'Pacific/Marquesas',
		'Easter Island Standard Time' => 'Chile/EasterIsland',
		'Eastern Standard Time (Mexico)' => 'America/New_York',
		'Haiti Standard Time' => 'America/New_York',
		'Cuba Standard Time' => 'America/Havana',
		'Turks And Caicos Standard Time' => 'Asia/Riyadh',
		'Tocantins Standard Time' => 'America/Araguaina',
		'Saint Pierre Standard Time' => 'America/Miquelon',
		'Bahia Standard Time' => 'America/El_Salvador',
		'West Bank Standard Time' => 'Asia/Hebron',
		'Turkey Standard Time' => 'Europe/Istanbul',
		'Kaliningrad Standard Time' => 'Europe/Kaliningrad',
		'Libya Standard Time' => 'Africa/Tripoli',
		'Belarus Standard Time' => 'Europe/Minsk',
		'Astrakhan Standard Time' => 'Europe/Ulyanovsk',
		'Russia Time Zone 3' => 'Europe/Samara',
		'Altai Standard Time' => 'Asia/Barnaul',
		'W. Mongolia Standard Time' => 'Asia/Hovd',
		'Tomsk Standard Time' => 'Asia/Tomsk',
		'North Korea Standard Time' => 'Asia/Pyongyang',
		'Aus Central W. Standard Time' => 'Australia/Eucla',
		'Transbaikal Standard Time' => 'Asia/Chita',
		'Lord Howe Standard Time' => 'Australia/Lord_Howe',
		'Bougainville Standard Time' => 'Europe/London',
		'Russia Time Zone 10' => 'Asia/Srednekolymsk',
		'Norfolk Standard Time' => 'Pacific/Norfolk',
		'Sakhalin Standard Time' => 'Asia/Sakhalin',
		'Russia Time Zone 11' => 'Asia/Anadyr',
		'Kamchatka Standard Time' => 'Asia/Kamchatka',
		'Chatham Islands Standard Time' => 'Pacific/Chatham',
		'Line Islands Standard Time' => 'Pacific/Kiritimati',
	];
}