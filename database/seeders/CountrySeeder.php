<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = [
            ['iso' => 'US','iso3'=>'US','nicename'=> 'United States','name' => 'United States'],
            ['iso' => 'CA','iso3'=>'CA','nicename'=> 'Canada','name' => 'Canada'],
            ['iso' => 'AF','iso3'=>'AF','nicename'=> 'Afghanistan','name' => 'Afghanistan'],
            ['iso' => 'AL','iso3'=>'AL','nicename'=> 'Albania','name' => 'Albania'],
            ['iso' => 'DZ','iso3'=>'DZ','nicename'=> 'Algeria','name' => 'Algeria'],
            ['iso' => 'AS','iso3'=>'AS','nicename'=> 'American Samoa','name' => 'American Samoa'],
            ['iso' => 'AD','iso3'=>'AD','nicename'=> 'Andorra','name' => 'Andorra'],
            ['iso' => 'AO','iso3'=>'AO','nicename'=> 'Angola','name' => 'Angola'],
            ['iso' => 'AI','iso3'=>'AI','nicename'=> 'Anguilla','name' => 'Anguilla'],
            ['iso' => 'AQ','iso3'=>'AQ','nicename'=> 'Antarctica','name' => 'Antarctica'],
            ['iso' => 'AG','iso3'=>'AG','nicename'=> 'Antigua and/or Barbuda','name' => 'Antigua and/or Barbuda'],
            ['iso' => 'AR','iso3'=>'AR','nicename'=> 'Argentina','name' => 'Argentina'],
            ['iso' => 'AM','iso3'=>'AM','nicename'=> 'Armenia','name' => 'Armenia'],
            ['iso' => 'AW','iso3'=>'AW','nicename'=> 'Aruba','name' => 'Aruba'],
            ['iso' => 'AU','iso3'=>'AU','nicename'=> 'Australia','name' => 'Australia'],
            ['iso' => 'AT','iso3'=>'AT','nicename'=> 'Austria','name' => 'Austria'],
            ['iso' => 'AZ','iso3'=>'AZ','nicename'=> 'Azerbaijan','name' => 'Azerbaijan'],
            ['iso' => 'BS','iso3'=>'BS','nicename'=> 'Bahamas','name' => 'Bahamas'],
            ['iso' => 'BH','iso3'=>'BH','nicename'=> 'Bahrain','name' => 'Bahrain'],
            ['iso' => 'BD','iso3'=>'BD','nicename'=> 'Bangladesh','name' => 'Bangladesh'],
            ['iso' => 'BB','iso3'=>'BB','nicename'=> 'Barbados','name' => 'Barbados'],
            ['iso' => 'BY','iso3'=>'BY','nicename'=> 'Belarus','name' => 'Belarus'],
            ['iso' => 'BE','iso3'=>'BE','nicename'=> 'Belgium','name' => 'Belgium'],
            ['iso' => 'BZ','iso3'=>'BZ','nicename'=> 'Belize','name' => 'Belize'],
            ['iso' => 'BJ','iso3'=>'BJ','nicename'=> 'Benin','name' => 'Benin'],
            ['iso' => 'BM','iso3'=>'BM','nicename'=> 'Bermuda','name' => 'Bermuda'],
            ['iso' => 'BT','iso3'=>'BT','nicename'=> 'Bhutan','name' => 'Bhutan'],
            ['iso' => 'BO','iso3'=>'BO','nicename'=> 'Bolivia','name' => 'Bolivia'],
            ['iso' => 'BA','iso3'=>'BA','nicename'=> 'Bosnia and Herzegovina','name' => 'Bosnia and Herzegovina'],
            ['iso' => 'BW','iso3'=>'BW','nicename'=> 'Botswana','name' => 'Botswana'],
            ['iso' => 'BV','iso3'=>'BV','nicename'=> 'Bouvet Island','name' => 'Bouvet Island'],
            ['iso' => 'BR','iso3'=>'BR','nicename'=> 'Brazil','name' => 'Brazil'],
            ['iso' => 'IO','iso3'=>'IO','nicename'=> 'British lndian Ocean Territory','name' => 'British lndian Ocean Territory'],
            ['iso' => 'BN','iso3'=>'BN','nicename'=> 'Brunei Darussalam','name' => 'Brunei Darussalam'],
            ['iso' => 'BG','iso3'=>'BG','nicename'=> 'Bulgaria','name' => 'Bulgaria'],
            ['iso' => 'BF','iso3'=>'BF','nicename'=> 'Burkina Faso','name' => 'Burkina Faso'],
            ['iso' => 'BI','iso3'=>'BI','nicename'=> 'Burundi','name' => 'Burundi'],
            ['iso' => 'KH','iso3'=>'KH','nicename'=> 'Cambodia','name' => 'Cambodia'],
            ['iso' => 'CM','iso3'=>'CM','nicename'=> 'Cameroon','name' => 'Cameroon'],
            ['iso' => 'CV','iso3'=>'CV','nicename'=> 'Cape Verde','name' => 'Cape Verde'],
            ['iso' => 'KY','iso3'=>'KY','nicename'=> 'Cayman Islands','name' => 'Cayman Islands'],
            ['iso' => 'CF','iso3'=>'CF','nicename'=> 'Central African Republic','name' => 'Central African Republic'],
            ['iso' => 'TD','iso3'=>'TD','nicename'=> 'Chad','name' => 'Chad'],
            ['iso' => 'CL','iso3'=>'CL','nicename'=> 'Chile','name' => 'Chile'],
            ['iso' => 'CN','iso3'=>'CN','nicename'=> 'China','name' => 'China'],
            ['iso' => 'CX','iso3'=>'CX','nicename'=> 'Christmas Island','name' => 'Christmas Island'],
            ['iso' => 'CC','iso3'=>'CC','nicename'=> 'Cocos (Keeling) Islands','name' => 'Cocos (Keeling) Islands'],
            ['iso' => 'CO','iso3'=>'CO','nicename'=> 'Colombia','name' => 'Colombia'],
            ['iso' => 'KM','iso3'=>'KM','nicename'=> 'Comoros','name' => 'Comoros'],
            ['iso' => 'CG','iso3'=>'CG','nicename'=> 'Congo','name' => 'Congo'],
            ['iso' => 'CK','iso3'=>'CK','nicename'=> 'Cook Islands','name' => 'Cook Islands'],
            ['iso' => 'CR','iso3'=>'CR','nicename'=> 'Costa Rica','name' => 'Costa Rica'],
            ['iso' => 'HR','iso3'=>'HR','nicename'=> 'Croatia (Hrvatska)','name' => 'Croatia (Hrvatska)'],
            ['iso' => 'CU','iso3'=>'CU','nicename'=> 'Cuba','name' => 'Cuba'],
            ['iso' => 'CY','iso3'=>'CY','nicename'=> 'Cyprus','name' => 'Cyprus'],
            ['iso' => 'CZ','iso3'=>'CZ','nicename'=> 'Czech Republic','name' => 'Czech Republic'],
            ['iso' => 'CD','iso3'=>'CD','nicename'=> 'Democratic Republic of Congo','name' => 'Democratic Republic of Congo'],
            ['iso' => 'DK','iso3'=>'DK','nicename'=> 'Denmark','name' => 'Denmark'],
            ['iso' => 'DJ','iso3'=>'DJ','nicename'=> 'Djibouti','name' => 'Djibouti'],
            ['iso' => 'DM','iso3'=>'DM','nicename'=> 'Dominica','name' => 'Dominica'],
            ['iso' => 'DO','iso3'=>'DO','nicename'=> 'Dominican Republic','name' => 'Dominican Republic'],
            ['iso' => 'TP','iso3'=>'TP','nicename'=> 'East Timor','name' => 'East Timor'],
            ['iso' => 'EC','iso3'=>'EC','nicename'=> 'Ecudaor','name' => 'Ecudaor'],
            ['iso' => 'EG','iso3'=>'EG','nicename'=> 'Egypt','name' => 'Egypt'],
            ['iso' => 'SV','iso3'=>'SV','nicename'=> 'El Salvador','name' => 'El Salvador'],
            ['iso' => 'GQ','iso3'=>'GQ','nicename'=> 'Equatorial Guinea','name' => 'Equatorial Guinea'],
            ['iso' => 'ER','iso3'=>'ER','nicename'=> 'Eritrea','name' => 'Eritrea'],
            ['iso' => 'EE','iso3'=>'EE','nicename'=> 'Estonia','name' => 'Estonia'],
            ['iso' => 'ET','iso3'=>'ET','nicename'=> 'Ethiopia','name' => 'Ethiopia'],
            ['iso' => 'FK','iso3'=>'FK','nicename'=> 'Falkland Islands (Malvinas)','name' => 'Falkland Islands (Malvinas)'],
            ['iso' => 'FO','iso3'=>'FO','nicename'=> 'Faroe Islands','name' => 'Faroe Islands'],
            ['iso' => 'FJ','iso3'=>'FJ','nicename'=> 'Fiji','name' => 'Fiji'],
            ['iso' => 'FI','iso3'=>'FI','nicename'=> 'Finland','name' => 'Finland'],
            ['iso' => 'FR','iso3'=>'FR','nicename'=> 'France','name' => 'France'],
            ['iso' => 'FX','iso3'=>'FX','nicename'=> 'France, Metropolitan','name' => 'France, Metropolitan'],
            ['iso' => 'GF','iso3'=>'GF','nicename'=> 'French Guiana','name' => 'French Guiana'],
            ['iso' => 'PF','iso3'=>'PF','nicename'=> 'French Polynesia','name' => 'French Polynesia'],
            ['iso' => 'TF','iso3'=>'TF','nicename'=> 'French Southern Territories','name' => 'French Southern Territories'],
            ['iso' => 'GA','iso3'=>'GA','nicename'=> 'Gabon','name' => 'Gabon'],
            ['iso' => 'GM','iso3'=>'GM','nicename'=> 'Gambia','name' => 'Gambia'],
            ['iso' => 'GE','iso3'=>'GE','nicename'=> 'Georgia','name' => 'Georgia'],
            ['iso' => 'DE','iso3'=>'DE','nicename'=> 'Germany','name' => 'Germany'],
            ['iso' => 'GH','iso3'=>'GH','nicename'=> 'Ghana','name' => 'Ghana'],
            ['iso' => 'GI','iso3'=>'GI','nicename'=> 'Gibraltar','name' => 'Gibraltar'],
            ['iso' => 'GR','iso3'=>'GR','nicename'=> 'Greece','name' => 'Greece'],
            ['iso' => 'GL','iso3'=>'GL','nicename'=> 'Greenland','name' => 'Greenland'],
            ['iso' => 'GD','iso3'=>'GD','nicename'=> 'Grenada','name' => 'Grenada'],
            ['iso' => 'GP','iso3'=>'GP','nicename'=> 'Guadeloupe','name' => 'Guadeloupe'],
            ['iso' => 'GU','iso3'=>'GU','nicename'=> 'Guam','name' => 'Guam'],
            ['iso' => 'GT','iso3'=>'GT','nicename'=> 'Guatemala','name' => 'Guatemala'],
            ['iso' => 'GN','iso3'=>'GN','nicename'=> 'Guinea','name' => 'Guinea'],
            ['iso' => 'GW','iso3'=>'GW','nicename'=> 'Guinea-Bissau','name' => 'Guinea-Bissau'],
            ['iso' => 'GY','iso3'=>'GY','nicename'=> 'Guyana','name' => 'Guyana'],
            ['iso' => 'HT','iso3'=>'HT','nicename'=> 'Haiti','name' => 'Haiti'],
            ['iso' => 'HM','iso3'=>'HM','nicename'=> 'Heard and Mc Donald Islands','name' => 'Heard and Mc Donald Islands'],
            ['iso' => 'HN','iso3'=>'HN','nicename'=> 'Honduras','name' => 'Honduras'],
            ['iso' => 'HK','iso3'=>'HK','nicename'=> 'Hong Kong','name' => 'Hong Kong'],
            ['iso' => 'HU','iso3'=>'HU','nicename'=> 'Hungary','name' => 'Hungary'],
            ['iso' => 'IS','iso3'=>'IS','nicename'=> 'Iceland','name' => 'Iceland'],
            ['iso' => 'IN','iso3'=>'IN','nicename'=> 'India','name' => 'India'],
            ['iso' => 'ID','iso3'=>'ID','nicename'=> 'Indonesia','name' => 'Indonesia'],
            ['iso' => 'IR','iso3'=>'IR','nicename'=> 'Iran (Islamic Republic of)','name' => 'Iran (Islamic Republic of)'],
            ['iso' => 'IQ','iso3'=>'IQ','nicename'=> 'Iraq','name' => 'Iraq'],
            ['iso' => 'IE','iso3'=>'IE','nicename'=> 'Ireland','name' => 'Ireland'],
            ['iso' => 'IL','iso3'=>'IL','nicename'=> 'Israel','name' => 'Israel'],
            ['iso' => 'IT','iso3'=>'IT','nicename'=> 'Italy','name' => 'Italy'],
            ['iso' => 'CI','iso3'=>'CI','nicename'=> 'Ivory Coast','name' => 'Ivory Coast'],
            ['iso' => 'JM','iso3'=>'JM','nicename'=> 'Jamaica','name' => 'Jamaica'],
            ['iso' => 'JP','iso3'=>'JP','nicename'=> 'Japan','name' => 'Japan'],
            ['iso' => 'JO','iso3'=>'JO','nicename'=> 'Jordan','name' => 'Jordan'],
            ['iso' => 'KZ','iso3'=>'KZ','nicename'=> 'Kazakhstan','name' => 'Kazakhstan'],
            ['iso' => 'KE','iso3'=>'KE','nicename'=> 'Kenya','name' => 'Kenya'],
            ['iso' => 'KI','iso3'=>'KI','nicename'=> 'Kiribati','name' => 'Kiribati'],
            ['iso' => 'KP','iso3'=>'KP','nicename'=> 'Korea, Democratic People\'s Republ','name' => 'Korea, Democratic People\'s Republic of'],
            ['iso' => 'KR','iso3'=>'KR','nicename'=> 'Korea, Republic of','name' => 'Korea, Republic of'],
            ['iso' => 'KW','iso3'=>'KW','nicename'=> 'Kuwait','name' => 'Kuwait'],
            ['iso' => 'KG','iso3'=>'KG','nicename'=> 'Kyrgyzstan','name' => 'Kyrgyzstan'],
            ['iso' => 'LA','iso3'=>'LA','nicename'=> 'Lao People\'s Democratic Republic','name' => 'Lao People\'s Democratic Republic'],
            ['iso' => 'LV','iso3'=>'LV','nicename'=> 'Latvia','name' => 'Latvia'],
            ['iso' => 'LB','iso3'=>'LB','nicename'=> 'Lebanon','name' => 'Lebanon'],
            ['iso' => 'LS','iso3'=>'LS','nicename'=> 'Lesotho','name' => 'Lesotho'],
            ['iso' => 'LR','iso3'=>'LR','nicename'=> 'Liberia','name' => 'Liberia'],
            ['iso' => 'LY','iso3'=>'LY','nicename'=> 'Libyan Arab Jamahiriya','name' => 'Libyan Arab Jamahiriya'],
            ['iso' => 'LI','iso3'=>'LI','nicename'=> 'Liechtenstein','name' => 'Liechtenstein'],
            ['iso' => 'LT','iso3'=>'LT','nicename'=> 'Lithuania','name' => 'Lithuania'],
            ['iso' => 'LU','iso3'=>'LU','nicename'=> 'Luxembourg','name' => 'Luxembourg'],
            ['iso' => 'MO','iso3'=>'MO','nicename'=> 'Macau','name' => 'Macau'],
            ['iso' => 'MK','iso3'=>'MK','nicename'=> 'Macedonia','name' => 'Macedonia'],
            ['iso' => 'MG','iso3'=>'MG','nicename'=> 'Madagascar','name' => 'Madagascar'],
            ['iso' => 'MW','iso3'=>'MW','nicename'=> 'Malawi','name' => 'Malawi'],
            ['iso' => 'MY','iso3'=>'MY','nicename'=> 'Malaysia','name' => 'Malaysia'],
            ['iso' => 'MV','iso3'=>'MV','nicename'=> 'Maldives','name' => 'Maldives'],
            ['iso' => 'ML','iso3'=>'ML','nicename'=> 'Mali','name' => 'Mali'],
            ['iso' => 'MT','iso3'=>'MT','nicename'=> 'Malta','name' => 'Malta'],
            ['iso' => 'MH','iso3'=>'MH','nicename'=> 'Marshall Islands','name' => 'Marshall Islands'],
            ['iso' => 'MQ','iso3'=>'MQ','nicename'=> 'Martinique','name' => 'Martinique'],
            ['iso' => 'MR','iso3'=>'MR','nicename'=> 'Mauritania','name' => 'Mauritania'],
            ['iso' => 'MU','iso3'=>'MU','nicename'=> 'Mauritius','name' => 'Mauritius'],
            ['iso' => 'TY','iso3'=>'TY','nicename'=> 'Mayotte','name' => 'Mayotte'],
            ['iso' => 'MX','iso3'=>'MX','nicename'=> 'Mexico','name' => 'Mexico'],
            ['iso' => 'FM','iso3'=>'FM','nicename'=> 'Micronesia, Federated States of','name' => 'Micronesia, Federated States of'],
            ['iso' => 'MD','iso3'=>'MD','nicename'=> 'Moldova, Republic of','name' => 'Moldova, Republic of'],
            ['iso' => 'MC','iso3'=>'MC','nicename'=> 'Monaco','name' => 'Monaco'],
            ['iso' => 'MN','iso3'=>'MN','nicename'=> 'Mongolia','name' => 'Mongolia'],
            ['iso' => 'MS','iso3'=>'MS','nicename'=> 'Montserrat','name' => 'Montserrat'],
            ['iso' => 'MA','iso3'=>'MA','nicename'=> 'Morocco','name' => 'Morocco'],
            ['iso' => 'MZ','iso3'=>'MZ','nicename'=> 'Mozambique','name' => 'Mozambique'],
            ['iso' => 'MM','iso3'=>'MM','nicename'=> 'Myanmar','name' => 'Myanmar'],
            ['iso' => 'NA','iso3'=>'NA','nicename'=> 'Namibia','name' => 'Namibia'],
            ['iso' => 'NR','iso3'=>'NR','nicename'=> 'Nauru','name' => 'Nauru'],
            ['iso' => 'NP','iso3'=>'NP','nicename'=> 'Nepal','name' => 'Nepal'],
            ['iso' => 'NL','iso3'=>'NL','nicename'=> 'Netherlands','name' => 'Netherlands'],
            ['iso' => 'AN','iso3'=>'AN','nicename'=> 'Netherlands Antilles','name' => 'Netherlands Antilles'],
            ['iso' => 'NC','iso3'=>'NC','nicename'=> 'New Caledonia','name' => 'New Caledonia'],
            ['iso' => 'NZ','iso3'=>'NZ','nicename'=> 'New Zealand','name' => 'New Zealand'],
            ['iso' => 'NI','iso3'=>'NI','nicename'=> 'Nicaragua','name' => 'Nicaragua'],
            ['iso' => 'NE','iso3'=>'NE','nicename'=> 'Niger','name' => 'Niger'],
            ['iso' => 'NG','iso3'=>'NG','nicename'=> 'Nigeria','name' => 'Nigeria'],
            ['iso' => 'NU','iso3'=>'NU','nicename'=> 'Niue','name' => 'Niue'],
            ['iso' => 'NF','iso3'=>'NF','nicename'=> 'Norfork Island','name' => 'Norfork Island'],
            ['iso' => 'MP','iso3'=>'MP','nicename'=> 'Northern Mariana Islands','name' => 'Northern Mariana Islands'],
            ['iso' => 'NO','iso3'=>'NO','nicename'=> 'Norway','name' => 'Norway'],
            ['iso' => 'OM','iso3'=>'OM','nicename'=> 'Oman','name' => 'Oman'],
            ['iso' => 'PK','iso3'=>'PK','nicename'=> 'Pakistan','name' => 'Pakistan'],
            ['iso' => 'PW','iso3'=>'PW','nicename'=> 'Palau','name' => 'Palau'],
            ['iso' => 'PA','iso3'=>'PA','nicename'=> 'Panama','name' => 'Panama'],
            ['iso' => 'PG','iso3'=>'PG','nicename'=> 'Papua New Guinea','name' => 'Papua New Guinea'],
            ['iso' => 'PY','iso3'=>'PY','nicename'=> 'Paraguay','name' => 'Paraguay'],
            ['iso' => 'PE','iso3'=>'PE','nicename'=> 'Peru','name' => 'Peru'],
            ['iso' => 'PH','iso3'=>'PH','nicename'=> 'Philippines','name' => 'Philippines'],
            ['iso' => 'PN','iso3'=>'PN','nicename'=> 'Pitcairn','name' => 'Pitcairn'],
            ['iso' => 'PL','iso3'=>'PL','nicename'=> 'Poland','name' => 'Poland'],
            ['iso' => 'PT','iso3'=>'PT','nicename'=> 'Portugal','name' => 'Portugal'],
            ['iso' => 'PR','iso3'=>'PR','nicename'=> 'Puerto Rico','name' => 'Puerto Rico'],
            ['iso' => 'QA','iso3'=>'QA','nicename'=> 'Qatar','name' => 'Qatar'],
            ['iso' => 'SS','iso3'=>'SS','nicename'=> 'Republic of South Sudan','name' => 'Republic of South Sudan'],
            ['iso' => 'RE','iso3'=>'RE','nicename'=> 'Reunion','name' => 'Reunion'],
            ['iso' => 'RO','iso3'=>'RO','nicename'=> 'Romania','name' => 'Romania'],
            ['iso' => 'RU','iso3'=>'RU','nicename'=> 'Russian Federation','name' => 'Russian Federation'],
            ['iso' => 'RW','iso3'=>'RW','nicename'=> 'Rwanda','name' => 'Rwanda'],
            ['iso' => 'KN','iso3'=>'KN','nicename'=> 'Saint Kitts and Nevis','name' => 'Saint Kitts and Nevis'],
            ['iso' => 'LC','iso3'=>'LC','nicename'=> 'Saint Lucia','name' => 'Saint Lucia'],
            ['iso' => 'VC','iso3'=>'VC','nicename'=> 'Saint Vincent and the Grenadines','name' => 'Saint Vincent and the Grenadines'],
            ['iso' => 'WS','iso3'=>'WS','nicename'=> 'Samoa','name' => 'Samoa'],
            ['iso' => 'SM','iso3'=>'SM','nicename'=> 'San Marino','name' => 'San Marino'],
            ['iso' => 'ST','iso3'=>'ST','nicename'=> 'Sao Tome and Principe','name' => 'Sao Tome and Principe'],
            ['iso' => 'SA','iso3'=>'SA','nicename'=> 'Saudi Arabia','name' => 'Saudi Arabia'],
            ['iso' => 'SN','iso3'=>'SN','nicename'=> 'Senegal','name' => 'Senegal'],
            ['iso' => 'RS','iso3'=>'RS','nicename'=> 'Serbia','name' => 'Serbia'],
            ['iso' => 'SC','iso3'=>'SC','nicename'=> 'Seychelles','name' => 'Seychelles'],
            ['iso' => 'SL','iso3'=>'SL','nicename'=> 'Sierra Leone','name' => 'Sierra Leone'],
            ['iso' => 'SG','iso3'=>'SG','nicename'=> 'Singapore','name' => 'Singapore'],
            ['iso' => 'SK','iso3'=>'SK','nicename'=> 'Slovakia','name' => 'Slovakia'],
            ['iso' => 'SI','iso3'=>'SI','nicename'=> 'Slovenia','name' => 'Slovenia'],
            ['iso' => 'SB','iso3'=>'SB','nicename'=> 'Solomon Islands','name' => 'Solomon Islands'],
            ['iso' => 'SO','iso3'=>'SO','nicename'=> 'Somalia','name' => 'Somalia'],
            ['iso' => 'ZA','iso3'=>'ZA','nicename'=> 'South Africa','name' => 'South Africa'],
            ['iso' => 'GS','iso3'=>'GS','nicename'=> 'South Georgia South Sandwich Islands','name' => 'South Georgia South Sandwich Islands'],
            ['iso' => 'ES','iso3'=>'ES','nicename'=> 'Spain','name' => 'Spain'],
            ['iso' => 'LK','iso3'=>'LK','nicename'=> 'Sri Lanka','name' => 'Sri Lanka'],
            ['iso' => 'SH','iso3'=>'SH','nicename'=> 'St. Helena','name' => 'St. Helena'],
            ['iso' => 'PM','iso3'=>'PM','nicename'=> 'St. Pierre and Miquelon','name' => 'St. Pierre and Miquelon'],
            ['iso' => 'SD','iso3'=>'SD','nicename'=> 'Sudan','name' => 'Sudan'],
            ['iso' => 'SR','iso3'=>'SR','nicename'=> 'Suriname','name' => 'Suriname'],
            ['iso' => 'SJ','iso3'=>'SJ','nicename'=> 'Svalbarn and Jan Mayen Islands','name' => 'Svalbarn and Jan Mayen Islands'],
            ['iso' => 'SZ','iso3'=>'SZ','nicename'=> 'Swaziland','name' => 'Swaziland'],
            ['iso' => 'SE','iso3'=>'SE','nicename'=> 'Sweden','name' => 'Sweden'],
            ['iso' => 'CH','iso3'=>'CH','nicename'=> 'Switzerland','name' => 'Switzerland'],
            ['iso' => 'SY','iso3'=>'SY','nicename'=> 'Syrian Arab Republic','name' => 'Syrian Arab Republic'],
            ['iso' => 'TW','iso3'=>'TW','nicename'=> 'Taiwan','name' => 'Taiwan'],
            ['iso' => 'TJ','iso3'=>'TJ','nicename'=> 'Tajikistan','name' => 'Tajikistan'],
            ['iso' => 'TZ','iso3'=>'TZ','nicename'=> 'Tanzania, United Republic of','name' => 'Tanzania, United Republic of'],
            ['iso' => 'TH','iso3'=>'TH','nicename'=> 'Thailand','name' => 'Thailand'],
            ['iso' => 'TG','iso3'=>'TG','nicename'=> 'Togo','name' => 'Togo'],
            ['iso' => 'TK','iso3'=>'TK','nicename'=> 'Tokelau','name' => 'Tokelau'],
            ['iso' => 'TO','iso3'=>'TO','nicename'=> 'Tonga','name' => 'Tonga'],
            ['iso' => 'TT','iso3'=>'TT','nicename'=> 'Trinidad and Tobago','name' => 'Trinidad and Tobago'],
            ['iso' => 'TN','iso3'=>'TN','nicename'=> 'Tunisia','name' => 'Tunisia'],
            ['iso' => 'TR','iso3'=>'TR','nicename'=> 'Turkey','name' => 'Turkey'],
            ['iso' => 'TM','iso3'=>'TM','nicename'=> 'Turkmenistan','name' => 'Turkmenistan'],
            ['iso' => 'TC','iso3'=>'TC','nicename'=> 'Turks and Caicos Islands','name' => 'Turks and Caicos Islands'],
            ['iso' => 'TV','iso3'=>'TV','nicename'=> 'Tuvalu','name' => 'Tuvalu'],
            ['iso' => 'UG','iso3'=>'UG','nicename'=> 'Uganda','name' => 'Uganda'],
            ['iso' => 'UA','iso3'=>'UA','nicename'=> 'Ukraine','name' => 'Ukraine'],
            ['iso' => 'AE','iso3'=>'AE','nicename'=> 'United Arab Emirates','name' => 'United Arab Emirates'],
            ['iso' => 'GB','iso3'=>'GB','nicename'=> 'United Kingdom','name' => 'United Kingdom'],
            ['iso' => 'UM','iso3'=>'UM','nicename'=> 'United States minor outlying islands','name' => 'United States minor outlying islands'],
            ['iso' => 'UY','iso3'=>'UY','nicename'=> 'Uruguay','name' => 'Uruguay'],
            ['iso' => 'UZ','iso3'=>'UZ','nicename'=> 'Uzbekistan','name' => 'Uzbekistan'],
            ['iso' => 'VU','iso3'=>'VU','nicename'=> 'Vanuatu','name' => 'Vanuatu'],
            ['iso' => 'VA','iso3'=>'VA','nicename'=> 'Vatican City State','name' => 'Vatican City State'],
            ['iso' => 'VE','iso3'=>'VE','nicename'=> 'Venezuela','name' => 'Venezuela'],
            ['iso' => 'VN','iso3'=>'VN','nicename'=> 'Vietnam','name' => 'Vietnam'],
            ['iso' => 'VG','iso3'=>'VG','nicename'=> 'Virgin Islands (British)','name' => 'Virgin Islands (British)'],
            ['iso' => 'VI','iso3'=>'VI','nicename'=> 'Virgin Islands (U.S.)','name' => 'Virgin Islands (U.S.)'],
            ['iso' => 'WF','iso3'=>'WF','nicename'=> 'Wallis and Futuna Islands','name' => 'Wallis and Futuna Islands'],
            ['iso' => 'EH','iso3'=>'EH','nicename'=> 'Western Sahara','name' => 'Western Sahara'],
            ['iso' => 'YE','iso3'=>'YE','nicename'=> 'Yemen','name' => 'Yemen'],
            ['iso' => 'YU','iso3'=>'YU','nicename'=> 'Yugoslavia','name' => 'Yugoslavia'],
            ['iso' => 'ZR','iso3'=>'ZR','nicename'=> 'Zaire','name' => 'Zaire'],
            ['iso' => 'ZM','iso3'=>'ZM','nicename'=> 'Zambia','name' => 'Zambia'],
            ['iso' => 'ZW','iso3'=>'ZW','nicename'=> 'Zimbabwe','name' => 'Zimbabwe'],
        ];
        DB::table('countries')->insert($countries);
    }
}
