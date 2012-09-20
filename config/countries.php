<?php
// This is inspired from many of the other systems eg. Drupal
/*
 *  Default Country Code -> Name Mapping
 */
if(!function_exists("getCountryList")) {
	define("LANGUAGE_RTL","left-to-right");
	function getCountryList() {
		return array(
			'AD' => 'Andorra',
			'AE' => 'United Arab Emirates',
			'AF' => 'Afghanistan',
			'AG' => 'Antigua and Barbuda',
			'AI' => 'Anguilla',
			'AL' => 'Albania',
			'AM' => 'Armenia',
			'AN' => 'Netherlands Antilles',
			'AO' => 'Angola',
			'AQ' => 'Antarctica',
			'AR' => 'Argentina',
			'AS' => 'American Samoa',
			'AT' => 'Austria',
			'AU' => 'Australia',
			'AW' => 'Aruba',
			'AX' => 'Aland Islands',
			'AZ' => 'Azerbaijan',
			'BA' => 'Bosnia and Herzegovina',
			'BB' => 'Barbados',
			'BD' => 'Bangladesh',
			'BE' => 'Belgium',
			'BF' => 'Burkina Faso',
			'BG' => 'Bulgaria',
			'BH' => 'Bahrain',
			'BI' => 'Burundi',
			'BJ' => 'Benin',
			'BL' => 'Saint Barthélemy',
			'BM' => 'Bermuda',
			'BN' => 'Brunei',
			'BO' => 'Bolivia',
			'BR' => 'Brazil',
			'BS' => 'Bahamas',
			'BT' => 'Bhutan',
			'BV' => 'Bouvet Island',
			'BW' => 'Botswana',
			'BY' => 'Belarus',
			'BZ' => 'Belize',
			'CA' => 'Canada',
			'CC' => 'Cocos (Keeling Islands)',
			'CD' => 'Congo (Kinshasa)',
			'CF' => 'Central African Republic',
			'CG' => 'Congo (Brazzaville)',
			'CH' => 'Switzerland',
			'CI' => 'Ivory Coast',
			'CK' => 'Cook Islands',
			'CL' => 'Chile',
			'CM' => 'Cameroon',
			'CN' => 'China',
			'CO' => 'Colombia',
			'CR' => 'Costa Rica',
			'CU' => 'Cuba',
			'CV' => 'Cape Verde',
			'CX' => 'Christmas Island',
			'CY' => 'Cyprus',
			'CZ' => 'Czech Republic',
			'DE' => 'Germany',
			'DJ' => 'Djibouti',
			'DK' => 'Denmark',
			'DM' => 'Dominica',
			'DO' => 'Dominican Republic',
			'DZ' => 'Algeria',
			'EC' => 'Ecuador',
			'EE' => 'Estonia',
			'EG' => 'Egypt',
			'EH' => 'Western Sahara',
			'ER' => 'Eritrea',
			'ES' => 'Spain',
			'ET' => 'Ethiopia',
			'FI' => 'Finland',
			'FJ' => 'Fiji',
			'FK' => 'Falkland Islands',
			'FM' => 'Micronesia',
			'FO' => 'Faroe Islands',
			'FR' => 'France',
			'GA' => 'Gabon',
			'GB' => 'United Kingdom',			
			'GD' => 'Grenada',
			'GE' => 'Georgia',
			'GF' => 'French Guiana',
			'GG' => 'Guernsey',
			'GH' => 'Ghana',
			'GI' => 'Gibraltar',
			'GL' => 'Greenland',
			'GM' => 'Gambia',
			'GN' => 'Guinea',
			'GP' => 'Guadeloupe',
			'GQ' => 'Equatorial Guinea',
			'GR' => 'Greece',
			'GS' => 'South Georgia and The South Sandwich Islands',
			'GT' => 'Guatemala',
			'GU' => 'Guam',
			'GW' => 'Guinea-Bissau',
			'GY' => 'Guyana',
			'HK' => 'Hong Kong S.A.R., China',
			'HM' => 'Heard Island and McDonald Islands',
			'HN' => 'Honduras',
			'HR' => 'Croatia',
			'HT' => 'Haiti',
			'HU' => 'Hungary',
			'ID' => 'Indonesia',
			'IE' => 'Ireland',
			'IL' => 'Israel',
			'IM' => 'Isle of Man',
			'IN' => 'India',
			'IO' => 'British Indian Ocean Territory',
			'IQ' => 'Iraq',
			'IR' => 'Iran',
			'IS' => 'Iceland',
			'IT' => 'Italy',
			'JE' => 'Jersey',
			'JM' => 'Jamaica',
			'JO' => 'Jordan',
			'JP' => 'Japan',
			'KE' => 'Kenya',
			'KG' => 'Kyrgyzstan',
			'KH' => 'Cambodia',
			'KI' => 'Kiribati',
			'KM' => 'Comoros',
			'KN' => 'Saint Kitts and Nevis',
			'KP' => 'North Korea',
			'KR' => 'South Korea',
			'KW' => 'Kuwait',
			'KY' => 'Cayman Islands',
			'KZ' => 'Kazakhstan',
			'LA' => 'Laos',
			'LB' => 'Lebanon',
			'LC' => 'Saint Lucia',
			'LI' => 'Liechtenstein',
			'LK' => 'Sri Lanka',
			'LR' => 'Liberia',
			'LS' => 'Lesotho',
			'LT' => 'Lithuania',
			'LU' => 'Luxembourg',
			'LV' => 'Latvia',
			'LY' => 'Libya',
			'MA' => 'Morocco',
			'MC' => 'Monaco',
			'MD' => 'Moldova',
			'ME' => 'Montenegro',
			'MF' => 'Saint Martin (French part)',
			'MG' => 'Madagascar',
			'MH' => 'Marshall Islands',
			'MK' => 'Macedonia',
			'ML' => 'Mali',
			'MM' => 'Myanmar',
			'MN' => 'Mongolia',
			'MO' => 'Macao S.A.R., China',
			'MP' => 'Northern Mariana Islands',
			'MQ' => 'Martinique',
			'MR' => 'Mauritania',
			'MS' => 'Montserrat',
			'MT' => 'Malta',
			'MU' => 'Mauritius',
			'MV' => 'Maldives',
			'MW' => 'Malawi',
			'MX' => 'Mexico',
			'MY' => 'Malaysia',
			'MZ' => 'Mozambique',
			'NA' => 'Namibia',
			'NC' => 'New Caledonia',
			'NE' => 'Niger',
			'NF' => 'Norfolk Island',
			'NG' => 'Nigeria',
			'NI' => 'Nicaragua',
			'NL' => 'Netherlands',
			'NO' => 'Norway',
			'NP' => 'Nepal',
			'NR' => 'Nauru',
			'NU' => 'Niue',
			'NZ' => 'New Zealand',
			'OM' => 'Oman',
			'PA' => 'Panama',
			'PE' => 'Peru',
			'PF' => 'French Polynesia',
			'PG' => 'Papua New Guinea',
			'PH' => 'Philippines',
			'PK' => 'Pakistan',
			'PL' => 'Poland',
			'PM' => 'Saint Pierre and Miquelon',
			'PN' => 'Pitcairn',
			'PR' => 'Puerto Rico',
			'PS' => 'Palestinian Territory',
			'PT' => 'Portugal',
			'PW' => 'Palau',
			'PY' => 'Paraguay',
			'QA' => 'Qatar',
			'RE' => 'Reunion',
			'RO' => 'Romania',
			'RS' => 'Serbia',
			'RU' => 'Russia',
			'RW' => 'Rwanda',
			'SA' => 'Saudi Arabia',
			'SB' => 'Solomon Islands',
			'SC' => 'Seychelles',
			'SD' => 'Sudan',
			'SE' => 'Sweden',
			'SG' => 'Singapore',
			'SH' => 'Saint Helena',
			'SI' => 'Slovenia',
			'SJ' => 'Svalbard and Jan Mayen',
			'SK' => 'Slovakia',
			'SL' => 'Sierra Leone',
			'SM' => 'San Marino',
			'SN' => 'Senegal',
			'SO' => 'Somalia',
			'SR' => 'Suriname',
			'ST' => 'Sao Tome and Principe',
			'SV' => 'El Salvador',
			'SY' => 'Syria',
			'SZ' => 'Swaziland',
			'TC' => 'Turks and Caicos Islands',
			'TD' => 'Chad',
			'TF' => 'French Southern Territories',
			'TG' => 'Togo',
			'TH' => 'Thailand',
			'TJ' => 'Tajikistan',
			'TK' => 'Tokelau',
			'TL' => 'Timor-Leste',
			'TM' => 'Turkmenistan',
			'TN' => 'Tunisia',
			'TO' => 'Tonga',
			'TR' => 'Turkey',
			'TT' => 'Trinidad and Tobago',
			'TV' => 'Tuvalu',
			'TW' => 'Taiwan',
			'TZ' => 'Tanzania',
			'UA' => 'Ukraine',
			'UG' => 'Uganda',
			'UM' => 'United States Minor Outlying Islands',
			'US' => 'United States',
			'UY' => 'Uruguay',
			'UZ' => 'Uzbekistan',
			'VA' => 'Vatican',
			'VC' => 'Saint Vincent and the Grenadines',
			'VE' => 'Venezuela',
			'VG' => 'British Virgin Islands',
			'VI' => 'U.S. Virgin Islands',
			'VN' => 'Vietnam',
			'VU' => 'Vanuatu',
			'WF' => 'Wallis and Futuna',
			'WS' => 'Samoa',
			'YE' => 'Yemen',
			'YT' => 'Mayotte',
			'ZA' => 'South Africa',
			'ZM' => 'Zambia',
			'ZW' => 'Zimbabwe',
		);
	}
	function getLocaleList() {
		return array(
			'aa' => array('Afar'),
			'ab' => array('Abkhazian', 'аҧсуа бызшәа'),
			'ae' => array('Avestan'),
			'af' => array('Afrikaans'),
			'ak' => array('Akan'),
			'am' => array('Amharic', 'አማርኛ'),
			'ar' => array('Arabic', /* Left-to-right marker "‭" */ 'العربية', LANGUAGE_RTL),
			'as' => array('Assamese'),
			'ast' => array('Asturian'),
			'av' => array('Avar'),
			'ay' => array('Aymara'),
			'az' => array('Azerbaijani', 'azərbaycan'),
			'ba' => array('Bashkir'),
			'be' => array('Belarusian', 'Беларуская'),
			'bg' => array('Bulgarian', 'Български'),
			'bh' => array('Bihari'),
			'bi' => array('Bislama'),
			'bm' => array('Bambara', 'Bamanankan'),
			'bn' => array('Bengali'),
			'bo' => array('Tibetan'),
			'br' => array('Breton'),
			'bs' => array('Bosnian', 'Bosanski'),
			'ca' => array('Catalan', 'Català'),
			'ce' => array('Chechen'),
			'ch' => array('Chamorro'),
			'co' => array('Corsican'),
			'cr' => array('Cree'),
			'cs' => array('Czech', 'Čeština'),
			'cu' => array('Old Slavonic'),
			'cv' => array('Chuvash'),
			'cy' => array('Welsh', 'Cymraeg'),
			'da' => array('Danish', 'Dansk'),
			'de' => array('German', 'Deutsch'),
			'dv' => array('Maldivian'),
			'dz' => array('Bhutani'),
			'ee' => array('Ewe', 'Ɛʋɛ'),
			'el' => array('Greek', 'Ελληνικά'),
			'en' => array('English'),
			'en-gb' => array('English, British'),
			'eo' => array('Esperanto'),
			'es' => array('Spanish', 'Español'),
			'et' => array('Estonian', 'Eesti'),
			'eu' => array('Basque', 'Euskera'),
			'fa' => array('Persian', /* Left-to-right marker "‭" */ 'فارسی', LANGUAGE_RTL),
			'ff' => array('Fulah', 'Fulfulde'),
			'fi' => array('Finnish', 'Suomi'),
			'fil' => array('Filipino'),
			'fj' => array('Fiji'),
			'fo' => array('Faeroese'),
			'fr' => array('French', 'Français'),
			'fy' => array('Frisian', 'Frysk'),
			'ga' => array('Irish', 'Gaeilge'),
			'gd' => array('Scots Gaelic'),
			'gl' => array('Galician', 'Galego'),
			'gn' => array('Guarani'),
			'gsw-berne' => array('Swiss German'),
			'gu' => array('Gujarati'),
			'gv' => array('Manx'),
			'ha' => array('Hausa'),
			'he' => array('Hebrew', /* Left-to-right marker "‭" */ 'עברית', LANGUAGE_RTL),
			'hi' => array('Hindi', 'हिन्दी'),
			'ho' => array('Hiri Motu'),
			'hr' => array('Croatian', 'Hrvatski'),
			'ht' => array('Haitian Creole'),
			'hu' => array('Hungarian', 'Magyar'),
			'hy' => array('Armenian', 'Հայերեն'),
			'hz' => array('Herero'),
			'ia' => array('Interlingua'),
			'id' => array('Indonesian', 'Bahasa Indonesia'),
			'ie' => array('Interlingue'),
			'ig' => array('Igbo'),
			'ik' => array('Inupiak'),
			'is' => array('Icelandic', 'Íslenska'),
			'it' => array('Italian', 'Italiano'),
			'iu' => array('Inuktitut'),
			'ja' => array('Japanese', '日本語'),
			'jv' => array('Javanese'),
			'ka' => array('Georgian'),
			'kg' => array('Kongo'),
			'ki' => array('Kikuyu'),
			'kj' => array('Kwanyama'),
			'kk' => array('Kazakh', 'Қазақ'),
			'kl' => array('Greenlandic'),
			'km' => array('Cambodian'),
			'kn' => array('Kannada', 'ಕನ್ನಡ'),
			'ko' => array('Korean', '한국어'),
			'kr' => array('Kanuri'),
			'ks' => array('Kashmiri'),
			'ku' => array('Kurdish', 'Kurdî'),
			'kv' => array('Komi'),
			'kw' => array('Cornish'),
			'ky' => array('Kyrgyz', 'Кыргызча'),
			'la' => array('Latin', 'Latina'),
			'lb' => array('Luxembourgish'),
			'lg' => array('Luganda'),
			'ln' => array('Lingala'),
			'lo' => array('Laothian'),
			'lt' => array('Lithuanian', 'Lietuvių'),
			'lv' => array('Latvian', 'Latviešu'),
			'mg' => array('Malagasy'),
			'mh' => array('Marshallese'),
			'mi' => array('Māori'),
			'mk' => array('Macedonian', 'Македонски'),
			'ml' => array('Malayalam', 'മലയാളം'),
			'mn' => array('Mongolian'),
			'mo' => array('Moldavian'),
			'mr' => array('Marathi'),
			'ms' => array('Malay', 'Bahasa Melayu'),
			'mt' => array('Maltese', 'Malti'),
			'my' => array('Burmese'),
			'na' => array('Nauru'),
			'nd' => array('North Ndebele'),
			'ne' => array('Nepali'),
			'ng' => array('Ndonga'),
			'nl' => array('Dutch', 'Nederlands'),
			'nb' => array('Norwegian Bokmål', 'Bokmål'),
			'nn' => array('Norwegian Nynorsk', 'Nynorsk'),
			'nr' => array('South Ndebele'),
			'nv' => array('Navajo'),
			'ny' => array('Chichewa'),
			'oc' => array('Occitan'),
			'om' => array('Oromo'),
			'or' => array('Oriya'),
			'os' => array('Ossetian'),
			'pa' => array('Punjabi'),
			'pi' => array('Pali'),
			'pl' => array('Polish', 'Polski'),
			'ps' => array('Pashto', /* Left-to-right marker "‭" */ 'پښتو', LANGUAGE_RTL),
			'pt' => array('Portuguese, International'),
			'pt-pt' => array('Portuguese, Portugal', 'Português'),
			'pt-br' => array('Portuguese, Brazil', 'Português'),
			'qu' => array('Quechua'),
			'rm' => array('Rhaeto-Romance'),
			'rn' => array('Kirundi'),
			'ro' => array('Romanian', 'Română'),
			'ru' => array('Russian', 'Русский'),
			'rw' => array('Kinyarwanda'),
			'sa' => array('Sanskrit'),
			'sc' => array('Sardinian'),
			'sco' => array('Scots'),
			'sd' => array('Sindhi'),
			'se' => array('Northern Sami'),
			'sg' => array('Sango'),
			'sh' => array('Serbo-Croatian'),
			'si' => array('Sinhala', 'සිංහල'),
			'sk' => array('Slovak', 'Slovenčina'),
			'sl' => array('Slovenian', 'Slovenščina'),
			'sm' => array('Samoan'),
			'sn' => array('Shona'),
			'so' => array('Somali'),
			'sq' => array('Albanian', 'Shqip'),
			'sr' => array('Serbian', 'Српски'),
			'ss' => array('Siswati'),
			'st' => array('Sesotho'),
			'su' => array('Sudanese'),
			'sv' => array('Swedish', 'Svenska'),
			'sw' => array('Swahili', 'Kiswahili'),
			'ta' => array('Tamil', 'தமிழ்'),
			'te' => array('Telugu', 'తెలుగు'),
			'tg' => array('Tajik'),
			'th' => array('Thai', 'ภาษาไทย'),
			'ti' => array('Tigrinya'),
			'tk' => array('Turkmen'),
			'tl' => array('Tagalog'),
			'tn' => array('Setswana'),
			'to' => array('Tonga'),
			'tr' => array('Turkish', 'Türkçe'),
			'ts' => array('Tsonga'),
			'tt' => array('Tatar', 'Tatarça'),
			'tw' => array('Twi'),
			'ty' => array('Tahitian'),
			'ug' => array('Uighur'),
			'uk' => array('Ukrainian', 'Українська'),
			'ur' => array('Urdu', /* Left-to-right marker "‭" */ 'اردو', LANGUAGE_RTL),
			'uz' => array('Uzbek', "o'zbek"),
			've' => array('Venda'),
			'vi' => array('Vietnamese', 'Tiếng Việt'),
			'wo' => array('Wolof'),
			'xh' => array('Xhosa', 'isiXhosa'),
			'xx-lolspeak' => array('Lolspeak'),
			'yi' => array('Yiddish'),
			'yo' => array('Yoruba', 'Yorùbá'),
			'za' => array('Zhuang'),
			'zh-hans' => array('Chinese, Simplified', '简体中文'),
			'zh-hant' => array('Chinese, Traditional', '繁體中文'),
			'zu' => array('Zulu', 'isiZulu'),
		);
	}
	function getFlagList($flagPath='media/flags/') {
		return array(
			'AD'=>"$flagPath/ad.gif",
			'AE'=>"$flagPath/ae.gif",
			'AF'=>"$flagPath/af.gif",
			'AG'=>"$flagPath/ag.gif",
			'AI'=>"$flagPath/ai.gif",
			'AL'=>"$flagPath/al.gif",
			'AM'=>"$flagPath/am.gif",
			'AN'=>"$flagPath/an.gif",
			'AO'=>"$flagPath/ao.gif",
			'AQ'=>"$flagPath/aq.gif",
			'AR'=>"$flagPath/ar.gif",
			'AS'=>"$flagPath/as.gif",
			'AT'=>"$flagPath/at.gif",
			'AU'=>"$flagPath/au.gif",
			'AW'=>"$flagPath/aw.gif",
			'AX'=>"$flagPath/ax.gif",
			'AZ'=>"$flagPath/az.gif",
			'BA'=>"$flagPath/ba.gif",
			'BB'=>"$flagPath/bb.gif",
			'BD'=>"$flagPath/bd.gif",
			'BE'=>"$flagPath/be.gif",
			'BF'=>"$flagPath/bf.gif",
			'BG'=>"$flagPath/bg.gif",
			'BH'=>"$flagPath/bh.gif",
			'BI'=>"$flagPath/bi.gif",
			'BJ'=>"$flagPath/bj.gif",
			'BL'=>"$flagPath/bl.gif",
			'BM'=>"$flagPath/bm.gif",
			'BN'=>"$flagPath/bn.gif",
			'BO'=>"$flagPath/bo.gif",
			'BR'=>"$flagPath/br.gif",
			'BS'=>"$flagPath/bs.gif",
			'BT'=>"$flagPath/bt.gif",
			'BV'=>"$flagPath/bv.gif",
			'BW'=>"$flagPath/bw.gif",
			'BY'=>"$flagPath/by.gif",
			'BZ'=>"$flagPath/bz.gif",
			'CA'=>"$flagPath/ca.gif",
			'CC'=>"$flagPath/cc.gif",
			'CD'=>"$flagPath/cd.gif",
			'CF'=>"$flagPath/cf.gif",
			'CG'=>"$flagPath/cg.gif",
			'CH'=>"$flagPath/ch.gif",
			'CI'=>"$flagPath/ci.gif",
			'CK'=>"$flagPath/ck.gif",
			'CL'=>"$flagPath/cl.gif",
			'CM'=>"$flagPath/cm.gif",
			'CN'=>"$flagPath/cn.gif",
			'CO'=>"$flagPath/co.gif",
			'CR'=>"$flagPath/cr.gif",
			'CU'=>"$flagPath/cu.gif",
			'CV'=>"$flagPath/cv.gif",
			'CX'=>"$flagPath/cx.gif",
			'CY'=>"$flagPath/cy.gif",
			'CZ'=>"$flagPath/cz.gif",
			'DE'=>"$flagPath/de.gif",
			'DJ'=>"$flagPath/dj.gif",
			'DK'=>"$flagPath/dk.gif",
			'DM'=>"$flagPath/dm.gif",
			'DO'=>"$flagPath/do.gif",
			'DZ'=>"$flagPath/dz.gif",
			'EC'=>"$flagPath/ec.gif",
			'EE'=>"$flagPath/ee.gif",
			'EG'=>"$flagPath/eg.gif",
			'EH'=>"$flagPath/eh.gif",
			'ER'=>"$flagPath/er.gif",
			'ES'=>"$flagPath/es.gif",
			'ET'=>"$flagPath/et.gif",
			'FI'=>"$flagPath/fi.gif",
			'FJ'=>"$flagPath/fj.gif",
			'FK'=>"$flagPath/fk.gif",
			'FM'=>"$flagPath/fm.gif",
			'FO'=>"$flagPath/fo.gif",
			'FR'=>"$flagPath/fr.gif",
			'GA'=>"$flagPath/ga.gif",
			'GB'=>"$flagPath/gb.gif",
			'GD'=>"$flagPath/gd.gif",
			'GE'=>"$flagPath/ge.gif",
			'GF'=>"$flagPath/gf.gif",
			'GG'=>"$flagPath/gg.gif",
			'GH'=>"$flagPath/gh.gif",
			'GI'=>"$flagPath/gi.gif",
			'GL'=>"$flagPath/gl.gif",
			'GM'=>"$flagPath/gm.gif",
			'GN'=>"$flagPath/gn.gif",
			'GP'=>"$flagPath/gp.gif",
			'GQ'=>"$flagPath/gq.gif",
			'GR'=>"$flagPath/gr.gif",
			'GS'=>"$flagPath/gs.gif",
			'GT'=>"$flagPath/gt.gif",
			'GU'=>"$flagPath/gu.gif",
			'GW'=>"$flagPath/gw.gif",
			'GY'=>"$flagPath/gy.gif",
			'HK'=>"$flagPath/hk.gif",
			'HM'=>"$flagPath/hm.gif",
			'HN'=>"$flagPath/hn.gif",
			'HR'=>"$flagPath/hr.gif",
			'HT'=>"$flagPath/ht.gif",
			'HU'=>"$flagPath/hu.gif",
			'ID'=>"$flagPath/id.gif",
			'IE'=>"$flagPath/ie.gif",
			'IL'=>"$flagPath/il.gif",
			'IM'=>"$flagPath/im.gif",
			'IN'=>"$flagPath/in.gif",
			'IO'=>"$flagPath/io.gif",
			'IQ'=>"$flagPath/iq.gif",
			'IR'=>"$flagPath/ir.gif",
			'IS'=>"$flagPath/is.gif",
			'IT'=>"$flagPath/it.gif",
			'JE'=>"$flagPath/je.gif",
			'JM'=>"$flagPath/jm.gif",
			'JO'=>"$flagPath/jo.gif",
			'JP'=>"$flagPath/jp.gif",
			'KE'=>"$flagPath/ke.gif",
			'KG'=>"$flagPath/kg.gif",
			'KH'=>"$flagPath/kh.gif",
			'KI'=>"$flagPath/ki.gif",
			'KM'=>"$flagPath/km.gif",
			'KN'=>"$flagPath/kn.gif",
			'KP'=>"$flagPath/kp.gif",
			'KR'=>"$flagPath/kr.gif",
			'KW'=>"$flagPath/kw.gif",
			'KY'=>"$flagPath/ky.gif",
			'KZ'=>"$flagPath/kz.gif",
			'LA'=>"$flagPath/la.gif",
			'LB'=>"$flagPath/lb.gif",
			'LC'=>"$flagPath/lc.gif",
			'LI'=>"$flagPath/li.gif",
			'LK'=>"$flagPath/lk.gif",
			'LR'=>"$flagPath/lr.gif",
			'LS'=>"$flagPath/ls.gif",
			'LT'=>"$flagPath/lt.gif",
			'LU'=>"$flagPath/lu.gif",
			'LV'=>"$flagPath/lv.gif",
			'LY'=>"$flagPath/ly.gif",
			'MA'=>"$flagPath/ma.gif",
			'MC'=>"$flagPath/mc.gif",
			'MD'=>"$flagPath/md.gif",
			'ME'=>"$flagPath/me.gif",
			'MF'=>"$flagPath/mf.gif",
			'MG'=>"$flagPath/mg.gif",
			'MH'=>"$flagPath/mh.gif",
			'MK'=>"$flagPath/mk.gif",
			'ML'=>"$flagPath/ml.gif",
			'MM'=>"$flagPath/mm.gif",
			'MN'=>"$flagPath/mn.gif",
			'MO'=>"$flagPath/mo.gif",
			'MP'=>"$flagPath/mp.gif",
			'MQ'=>"$flagPath/mq.gif",
			'MR'=>"$flagPath/mr.gif",
			'MS'=>"$flagPath/ms.gif",
			'MT'=>"$flagPath/mt.gif",
			'MU'=>"$flagPath/mu.gif",
			'MV'=>"$flagPath/mv.gif",
			'MW'=>"$flagPath/mw.gif",
			'MX'=>"$flagPath/mx.gif",
			'MY'=>"$flagPath/my.gif",
			'MZ'=>"$flagPath/mz.gif",
			'NA'=>"$flagPath/na.gif",
			'NC'=>"$flagPath/nc.gif",
			'NE'=>"$flagPath/ne.gif",
			'NF'=>"$flagPath/nf.gif",
			'NG'=>"$flagPath/ng.gif",
			'NI'=>"$flagPath/ni.gif",
			'NL'=>"$flagPath/nl.gif",
			'NO'=>"$flagPath/no.gif",
			'NP'=>"$flagPath/np.gif",
			'NR'=>"$flagPath/nr.gif",
			'NU'=>"$flagPath/nu.gif",
			'NZ'=>"$flagPath/nz.gif",
			'OM'=>"$flagPath/om.gif",
			'PA'=>"$flagPath/pa.gif",
			'PE'=>"$flagPath/pe.gif",
			'PF'=>"$flagPath/pf.gif",
			'PG'=>"$flagPath/pg.gif",
			'PH'=>"$flagPath/ph.gif",
			'PK'=>"$flagPath/pk.gif",
			'PL'=>"$flagPath/pl.gif",
			'PM'=>"$flagPath/pm.gif",
			'PN'=>"$flagPath/pn.gif",
			'PR'=>"$flagPath/pr.gif",
			'PS'=>"$flagPath/ps.gif",
			'PT'=>"$flagPath/pt.gif",
			'PW'=>"$flagPath/pw.gif",
			'PY'=>"$flagPath/py.gif",
			'QA'=>"$flagPath/qa.gif",
			'RE'=>"$flagPath/re.gif",
			'RO'=>"$flagPath/ro.gif",
			'RS'=>"$flagPath/rs.gif",
			'RU'=>"$flagPath/ru.gif",
			'RW'=>"$flagPath/rw.gif",
			'SA'=>"$flagPath/sa.gif",
			'SB'=>"$flagPath/sb.gif",
			'SC'=>"$flagPath/sc.gif",
			'SD'=>"$flagPath/sd.gif",
			'SE'=>"$flagPath/se.gif",
			'SG'=>"$flagPath/sg.gif",
			'SH'=>"$flagPath/sh.gif",
			'SI'=>"$flagPath/si.gif",
			'SJ'=>"$flagPath/sj.gif",
			'SK'=>"$flagPath/sk.gif",
			'SL'=>"$flagPath/sl.gif",
			'SM'=>"$flagPath/sm.gif",
			'SN'=>"$flagPath/sn.gif",
			'SO'=>"$flagPath/so.gif",
			'SR'=>"$flagPath/sr.gif",
			'ST'=>"$flagPath/st.gif",
			'SV'=>"$flagPath/sv.gif",
			'SY'=>"$flagPath/sy.gif",
			'SZ'=>"$flagPath/sz.gif",
			'TC'=>"$flagPath/tc.gif",
			'TD'=>"$flagPath/td.gif",
			'TF'=>"$flagPath/tf.gif",
			'TG'=>"$flagPath/tg.gif",
			'TH'=>"$flagPath/th.gif",
			'TJ'=>"$flagPath/tj.gif",
			'TK'=>"$flagPath/tk.gif",
			'TL'=>"$flagPath/tl.gif",
			'TM'=>"$flagPath/tm.gif",
			'TN'=>"$flagPath/tn.gif",
			'TO'=>"$flagPath/to.gif",
			'TR'=>"$flagPath/tr.gif",
			'TT'=>"$flagPath/tt.gif",
			'TV'=>"$flagPath/tv.gif",
			'TW'=>"$flagPath/tw.gif",
			'TZ'=>"$flagPath/tz.gif",
			'UA'=>"$flagPath/ua.gif",
			'UG'=>"$flagPath/ug.gif",
			'UM'=>"$flagPath/um.gif",
			'US'=>"$flagPath/us.gif",
			'UY'=>"$flagPath/uy.gif",
			'UZ'=>"$flagPath/uz.gif",
			'VA'=>"$flagPath/va.gif",
			'VC'=>"$flagPath/vc.gif",
			'VE'=>"$flagPath/ve.gif",
			'VG'=>"$flagPath/vg.gif",
			'VI'=>"$flagPath/vi.gif",
			'VN'=>"$flagPath/vn.gif",
			'VU'=>"$flagPath/vu.gif",
			'WF'=>"$flagPath/wf.gif",
			'WS'=>"$flagPath/ws.gif",
			'YE'=>"$flagPath/ye.gif",
			'YT'=>"$flagPath/yt.gif",
			'ZA'=>"$flagPath/za.gif",
			'ZM'=>"$flagPath/zm.gif",
			'ZW'=>"$flagPath/zw.gif",
		);
	}
	function getCountryUTC() {
		return array(
			'AD' =>'',
			'AE' =>'',
			'AF' =>'',
			'AG' =>'',
			'AI' =>'',
			'AL' =>'',
			'AM' =>'',
			'AN' =>'',
			'AO' =>'',
			'AQ' =>'',
			'AR' =>'',
			'AS' =>'',
			'AT' =>'',
			'AU' =>'',
			'AW' =>'',
			'AX' =>'',
			'AZ' =>'',
			'BA' =>'',
			'BB' =>'',
			'BD' =>'',
			'BE' =>'',
			'BF' =>'',
			'BG' =>'',
			'BH' =>'',
			'BI' =>'',
			'BJ' =>'',
			'BL' =>'',
			'BM' =>'',
			'BN' =>'',
			'BO' =>'',
			'BR' =>'',
			'BS' =>'',
			'BT' =>'',
			'BV' =>'',
			'BW' =>'',
			'BY' =>'',
			'BZ' =>'',
			'CA' =>'',
			'CC' =>'',
			'CD' =>'',
			'CF' =>'',
			'CG' =>'',
			'CH' =>'',
			'CI' =>'',
			'CK' =>'',
			'CL' =>'',
			'CM' =>'',
			'CN' =>'',
			'CO' =>'',
			'CR' =>'',
			'CU' =>'',
			'CV' =>'',
			'CX' =>'',
			'CY' =>'',
			'CZ' =>'',
			'DE' =>'',
			'DJ' =>'',
			'DK' =>'',
			'DM' =>'',
			'DO' =>'',
			'DZ' =>'',
			'EC' =>'',
			'EE' =>'',
			'EG' =>'',
			'EH' =>'',
			'ER' =>'',
			'ES' =>'',
			'ET' =>'',
			'FI' =>'',
			'FJ' =>'',
			'FK' =>'',
			'FM' =>'',
			'FO' =>'',
			'FR' =>'',
			'GA' =>'',
			'GB' =>'',
			'GD' =>'',
			'GE' =>'',
			'GF' =>'',
			'GG' =>'',
			'GH' =>'',
			'GI' =>'',
			'GL' =>'',
			'GM' =>'',
			'GN' =>'',
			'GP' =>'',
			'GQ' =>'',
			'GR' =>'',
			'GS' =>'',
			'GT' =>'',
			'GU' =>'',
			'GW' =>'',
			'GY' =>'',
			'HK' =>'',
			'HM' =>'',
			'HN' =>'',
			'HR' =>'',
			'HT' =>'',
			'HU' =>'',
			'ID' =>'',
			'IE' =>'',
			'IL' =>'',
			'IM' =>'',
			'IN' =>'',
			'IO' =>'',
			'IQ' =>'',
			'IR' =>'',
			'IS' =>'',
			'IT' =>'',
			'JE' =>'',
			'JM' =>'',
			'JO' =>'',
			'JP' =>'',
			'KE' =>'',
			'KG' =>'',
			'KH' =>'',
			'KI' =>'',
			'KM' =>'',
			'KN' =>'',
			'KP' =>'',
			'KR' =>'',
			'KW' =>'',
			'KY' =>'',
			'KZ' =>'',
			'LA' =>'',
			'LB' =>'',
			'LC' =>'',
			'LI' =>'',
			'LK' =>'',
			'LR' =>'',
			'LS' =>'',
			'LT' =>'',
			'LU' =>'',
			'LV' =>'',
			'LY' =>'',
			'MA' =>'',
			'MC' =>'',
			'MD' =>'',
			'ME' =>'',
			'MF' =>'',
			'MG' =>'',
			'MH' =>'',
			'MK' =>'',
			'ML' =>'',
			'MM' =>'',
			'MN' =>'',
			'MO' =>'',
			'MP' =>'',
			'MQ' =>'',
			'MR' =>'',
			'MS' =>'',
			'MT' =>'',
			'MU' =>'',
			'MV' =>'',
			'MW' =>'',
			'MX' =>'',
			'MY' =>'',
			'MZ' =>'',
			'NA' =>'',
			'NC' =>'',
			'NE' =>'',
			'NF' =>'',
			'NG' =>'',
			'NI' =>'',
			'NL' =>'',
			'NO' =>'',
			'NP' =>'',
			'NR' =>'',
			'NU' =>'',
			'NZ' =>'',
			'OM' =>'',
			'PA' =>'',
			'PE' =>'',
			'PF' =>'',
			'PG' =>'',
			'PH' =>'',
			'PK' =>'',
			'PL' =>'',
			'PM' =>'',
			'PN' =>'',
			'PR' =>'',
			'PS' =>'',
			'PT' =>'',
			'PW' =>'',
			'PY' =>'',
			'QA' =>'',
			'RE' =>'',
			'RO' =>'',
			'RS' =>'',
			'RU' =>'',
			'RW' =>'',
			'SA' =>'',
			'SB' =>'',
			'SC' =>'',
			'SD' =>'',
			'SE' =>'',
			'SG' =>'',
			'SH' =>'',
			'SI' =>'',
			'SJ' =>'',
			'SK' =>'',
			'SL' =>'',
			'SM' =>'',
			'SN' =>'',
			'SO' =>'',
			'SR' =>'',
			'ST' =>'',
			'SV' =>'',
			'SY' =>'',
			'SZ' =>'',
			'TC' =>'',
			'TD' =>'',
			'TF' =>'',
			'TG' =>'',
			'TH' =>'',
			'TJ' =>'',
			'TK' =>'',
			'TL' =>'',
			'TM' =>'',
			'TN' =>'',
			'TO' =>'',
			'TR' =>'',
			'TT' =>'',
			'TV' =>'',
			'TW' =>'',
			'TZ' =>'',
			'UA' =>'',
			'UG' =>'',
			'UM' =>'',
			'US' =>'',
			'UY' =>'',
			'UZ' =>'',
			'VA' =>'',
			'VC' =>'',
			'VE' =>'',
			'VG' =>'',
			'VI' =>'',
			'VN' =>'',
			'VU' =>'',
			'WF' =>'',
			'WS' =>'',
			'YE' =>'',
			'YT' =>'',
			'ZA' =>'',
			'ZM' =>'',
			'ZW' =>'',
		);
	}
	
	function getFlagFor($country,$flagPath='media/flags/') {
		$arr=getCountryList();
		$country=strtolower($country);
		$fs="$flagPath/zzz.gif";
		foreach($arr as $a=>$b) {
			if(strtolower($b)==$country) {
				$flgs=getFlagList($flagPath);
				$fs=$flgs[$a];
				break;
			}
		}
		$fs=str_replace("//","/",$fs);
		return $fs;
	}
	
	function getCountrySelector($default="",$useShortCode=false) {
		$arr=getCountryList();
		$s="<option value=''></option>";
		foreach($arr as $a=>$b) {
			if($useShortCode) {
				if($b==$default) {
					$s.="<option value='$a' selected>$b</option>";
				} else {
					$s.="<option value='$a'>$b</option>";
				}
			} else {
				if($b==$default) {
					$s.="<option value='$b' selected>$b</option>";
				} else {
					$s.="<option value='$b'>$b</option>";
				}
			}
		}
		return $s;
	}
	function getLocaleSelector($default="") {
		$arr=getLocaleList();
		$s="<option value=''>None</option>";
		foreach($arr as $a=>$b) {
			foreach($b as $x=>$y) {
				if($default==$y) $s.="<option value='$a' selected>$y</option>";
				else if($default==$y) $s.="<option value='$a'>$y</option>";
			}
		}
		return $s;
	}
	function getUTCSelector($default="") {
		$arr=getCountryList();
		$utc=getCountryUTC();
		$s="<option value=''>None</option>";
		foreach($arr as $a=>$b) {
			$x=$utc[$a];
			if($b==$default) {
				$s.="<option value='$x' selected>$b</option>";
			} else {
				$s.="<option value='$x'>$b</option>";
			}
		}
		return $s;
	}
}
