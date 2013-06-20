<?php

/**
 * CountrySelectorWidget
 *
 * @author   Vladimir Galajda <galajda@gmail.com>
 **/
class CountrySelectorWidget extends CWidget
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    /**
     * @var boolean
     */
    public $useCountryCode = true;

    /**
     * @var boolean
     */
    public $firstEmpty = true;

    /**
     * @var string
     */
    public $firstText;


    /**
     * @var string
     */
    public $defaultValue = NULL;



    public function init()
    {
        parent::init();

        if (empty($this->value)) {
            $this->value = $this->defaultValue;
        }

        $this->firstText = Yii::t('application', '(please select a country)');
    }

    public function run()
    {
        $content = "<select name=\"{$this->name}\" id=\"{$this->id}\">";

        if ($this->firstEmpty) {
            $content .= "<option value=\"\">{$this->firstText}</option>";
        }

        $content .= $this->countriesForSelect();
        $content .= "</select>";

        echo $content;
    }

    public function countriesForSelect()
    {
        $ret = '';

        foreach (CountrySelectorWidget::getCountries() as $code => $name) {
            $value = $this->useCountryCode ? $code : $name;
            $selected = $this->value == $value ? ' selected="selected"' : '';
            $ret .= '<option value="'.$value.'"'.$selected.'>'.$name.'</option>';
        }

        return $ret;
    }

    public static function getCountries() {
        return  array(
            'AF' => Yii::t('application', "Afghanistan"),
            'AL' => Yii::t('application', "Albania"),
            'DZ' => Yii::t('application', "Algeria"),
            'AS' => Yii::t('application', "American Samoa"),
            'AD' => Yii::t('application', "Andorra"),
            'AO' => Yii::t('application', "Angola"),
            'AI' => Yii::t('application', "Anguilla"),
            'AQ' => Yii::t('application', "Antarctica"),
            'AG' => Yii::t('application', "Antigua and Barbuda"),
            'AR' => Yii::t('application', "Argentina"),
            'AM' => Yii::t('application', "Armenia"),
            'AW' => Yii::t('application', "Aruba"),
            'AU' => Yii::t('application', "Australia"),
            'AT' => Yii::t('application', "Austria"),
            'AZ' => Yii::t('application', "Azerbaijan"),
            'BS' => Yii::t('application', "Bahamas"),
            'BH' => Yii::t('application', "Bahrain"),
            'BD' => Yii::t('application', "Bangladesh"),
            'BB' => Yii::t('application', "Barbados"),
            'BY' => Yii::t('application', "Belarus"),
            'BE' => Yii::t('application', "Belgium"),
            'BZ' => Yii::t('application', "Belize"),
            'BJ' => Yii::t('application', "Benin"),
            'BM' => Yii::t('application', "Bermuda"),
            'BT' => Yii::t('application', "Bhutan"),
            'BO' => Yii::t('application', "Bolivia"),
            'BA' => Yii::t('application', "Bosnia and Herzegowina"),
            'BW' => Yii::t('application', "Botswana"),
            'BV' => Yii::t('application', "Bouvet Island"),
            'BR' => Yii::t('application', "Brazil"),
            'IO' => Yii::t('application', "British Indian Ocean Territory"),
            'BN' => Yii::t('application', "Brunei Darussalam"),
            'BG' => Yii::t('application', "Bulgaria"),
            'BF' => Yii::t('application', "Burkina Faso"),
            'BI' => Yii::t('application', "Burundi"),
            'KH' => Yii::t('application', "Cambodia"),
            'CM' => Yii::t('application', "Cameroon"),
            'CA' => Yii::t('application', "Canada"),
            'CV' => Yii::t('application', "Cape Verde"),
            'KY' => Yii::t('application', "Cayman Islands"),
            'CF' => Yii::t('application', "Central African Republic"),
            'TD' => Yii::t('application', "Chad"),
            'CL' => Yii::t('application', "Chile"),
            'CN' => Yii::t('application', "China"),
            'CX' => Yii::t('application', "Christmas Island"),
            'CC' => Yii::t('application', "Cocos (Keeling) Islands"),
            'CO' => Yii::t('application', "Colombia"),
            'KM' => Yii::t('application', "Comoros"),
            'CG' => Yii::t('application', "Congo"),
            'CD' => Yii::t('application', "Congo, the Democratic Republic of the"),
            'CK' => Yii::t('application', "Cook Islands"),
            'CR' => Yii::t('application', "Costa Rica"),
            'CI' => Yii::t('application', "Cote d'Ivoire"),
            'HR' => Yii::t('application', "Croatia (Hrvatska)"),
            'CU' => Yii::t('application', "Cuba"),
            'CY' => Yii::t('application', "Cyprus"),
            'CZ' => Yii::t('application', "Czech Republic"),
            'DK' => Yii::t('application', "Denmark"),
            'DJ' => Yii::t('application', "Djibouti"),
            'DM' => Yii::t('application', "Dominica"),
            'DO' => Yii::t('application', "Dominican Republic"),
            'TP' => Yii::t('application', "East Timor"),
            'EC' => Yii::t('application', "Ecuador"),
            'EG' => Yii::t('application', "Egypt"),
            'SV' => Yii::t('application', "El Salvador"),
            'GQ' => Yii::t('application', "Equatorial Guinea"),
            'ER' => Yii::t('application', "Eritrea"),
            'EE' => Yii::t('application', "Estonia"),
            'ET' => Yii::t('application', "Ethiopia"),
            'FK' => Yii::t('application', "Falkland Islands (Malvinas)"),
            'FO' => Yii::t('application', "Faroe Islands"),
            'FJ' => Yii::t('application', "Fiji"),
            'FI' => Yii::t('application', "Finland"),
            'FR' => Yii::t('application', "France"),
            'FX' => Yii::t('application', "France, Metropolitan"),
            'GF' => Yii::t('application', "French Guiana"),
            'PF' => Yii::t('application', "French Polynesia"),
            'TF' => Yii::t('application', "French Southern Territories"),
            'GA' => Yii::t('application', "Gabon"),
            'GM' => Yii::t('application', "Gambia"),
            'GE' => Yii::t('application', "Georgia"),
            'DE' => Yii::t('application', "Germany"),
            'GH' => Yii::t('application', "Ghana"),
            'GI' => Yii::t('application', "Gibraltar"),
            'GR' => Yii::t('application', "Greece"),
            'GL' => Yii::t('application', "Greenland"),
            'GD' => Yii::t('application', "Grenada"),
            'GP' => Yii::t('application', "Guadeloupe"),
            'GU' => Yii::t('application', "Guam"),
            'GT' => Yii::t('application', "Guatemala"),
            'GN' => Yii::t('application', "Guinea"),
            'GW' => Yii::t('application', "Guinea-Bissau"),
            'GY' => Yii::t('application', "Guyana"),
            'HT' => Yii::t('application', "Haiti"),
            'HM' => Yii::t('application', "Heard and Mc Donald Islands"),
            'VA' => Yii::t('application', "Holy See (Vatican City State)"),
            'HN' => Yii::t('application', "Honduras"),
            'HK' => Yii::t('application', "Hong Kong"),
            'HU' => Yii::t('application', "Hungary"),
            'IS' => Yii::t('application', "Iceland"),
            'IN' => Yii::t('application', "India"),
            'ID' => Yii::t('application', "Indonesia"),
            'IR' => Yii::t('application', "Iran (Islamic Republic of)"),
            'IQ' => Yii::t('application', "Iraq"),
            'IE' => Yii::t('application', "Ireland"),
            'IL' => Yii::t('application', "Israel"),
            'IT' => Yii::t('application', "Italy"),
            'JM' => Yii::t('application', "Jamaica"),
            'JP' => Yii::t('application', "Japan"),
            'JO' => Yii::t('application', "Jordan"),
            'KZ' => Yii::t('application', "Kazakhstan"),
            'KE' => Yii::t('application', "Kenya"),
            'KI' => Yii::t('application', "Kiribati"),
            'KP' => Yii::t('application', "Korea, Democratic People's Republic of"),
            'KR' => Yii::t('application', "Korea, Republic of"),
            'KW' => Yii::t('application', "Kuwait"),
            'KG' => Yii::t('application', "Kyrgyzstan"),
            'LA' => Yii::t('application', "Lao People's Democratic Republic"),
            'LV' => Yii::t('application', "Latvia"),
            'LB' => Yii::t('application', "Lebanon"),
            'LS' => Yii::t('application', "Lesotho"),
            'LR' => Yii::t('application', "Liberia"),
            'LY' => Yii::t('application', "Libyan Arab Jamahiriya"),
            'LI' => Yii::t('application', "Liechtenstein"),
            'LT' => Yii::t('application', "Lithuania"),
            'LU' => Yii::t('application', "Luxembourg"),
            'MO' => Yii::t('application', "Macau"),
            'MK' => Yii::t('application', "Macedonia, The Former Yugoslav Republic of"),
            'MG' => Yii::t('application', "Madagascar"),
            'MW' => Yii::t('application', "Malawi"),
            'MY' => Yii::t('application', "Malaysia"),
            'MV' => Yii::t('application', "Maldives"),
            'ML' => Yii::t('application', "Mali"),
            'MT' => Yii::t('application', "Malta"),
            'MH' => Yii::t('application', "Marshall Islands"),
            'MQ' => Yii::t('application', "Martinique"),
            'MR' => Yii::t('application', "Mauritania"),
            'MU' => Yii::t('application', "Mauritius"),
            'YT' => Yii::t('application', "Mayotte"),
            'MX' => Yii::t('application', "Mexico"),
            'FM' => Yii::t('application', "Micronesia, Federated States of"),
            'MD' => Yii::t('application', "Moldova, Republic of"),
            'MC' => Yii::t('application', "Monaco"),
            'MN' => Yii::t('application', "Mongolia"),
            'MS' => Yii::t('application', "Montserrat"),
            'MA' => Yii::t('application', "Morocco"),
            'MZ' => Yii::t('application', "Mozambique"),
            'MM' => Yii::t('application', "Myanmar"),
            'NA' => Yii::t('application', "Namibia"),
            'NR' => Yii::t('application', "Nauru"),
            'NP' => Yii::t('application', "Nepal"),
            'NL' => Yii::t('application', "Netherlands"),
            'AN' => Yii::t('application', "Netherlands Antilles"),
            'NC' => Yii::t('application', "New Caledonia"),
            'NZ' => Yii::t('application', "New Zealand"),
            'NI' => Yii::t('application', "Nicaragua"),
            'NE' => Yii::t('application', "Niger"),
            'NG' => Yii::t('application', "Nigeria"),
            'NU' => Yii::t('application', "Niue"),
            'NF' => Yii::t('application', "Norfolk Island"),
            'MP' => Yii::t('application', "Northern Mariana Islands"),
            'NO' => Yii::t('application', "Norway"),
            'OM' => Yii::t('application', "Oman"),
            'PK' => Yii::t('application', "Pakistan"),
            'PW' => Yii::t('application', "Palau"),
            'PA' => Yii::t('application', "Panama"),
            'PG' => Yii::t('application', "Papua New Guinea"),
            'PY' => Yii::t('application', "Paraguay"),
            'PE' => Yii::t('application', "Peru"),
            'PH' => Yii::t('application', "Philippines"),
            'PN' => Yii::t('application', "Pitcairn"),
            'PL' => Yii::t('application', "Poland"),
            'PT' => Yii::t('application', "Portugal"),
            'PR' => Yii::t('application', "Puerto Rico"),
            'QA' => Yii::t('application', "Qatar"),
            'RE' => Yii::t('application', "Reunion"),
            'RO' => Yii::t('application', "Romania"),
            'RU' => Yii::t('application', "Russian Federation"),
            'RW' => Yii::t('application', "Rwanda"),
            'KN' => Yii::t('application', "Saint Kitts and Nevis"),
            'LC' => Yii::t('application', "Saint LUCIA"),
            'VC' => Yii::t('application', "Saint Vincent and the Grenadines"),
            'WS' => Yii::t('application', "Samoa"),
            'SM' => Yii::t('application', "San Marino"),
            'ST' => Yii::t('application', "Sao Tome and Principe"),
            'SA' => Yii::t('application', "Saudi Arabia"),
            'SN' => Yii::t('application', "Senegal"),
            'SC' => Yii::t('application', "Seychelles"),
            'SL' => Yii::t('application', "Sierra Leone"),
            'SG' => Yii::t('application', "Singapore"),
            'SK' => Yii::t('application', "Slovakia (Slovak Republic)"),
            'SI' => Yii::t('application', "Slovenia"),
            'SB' => Yii::t('application', "Solomon Islands"),
            'SO' => Yii::t('application', "Somalia"),
            'ZA' => Yii::t('application', "South Africa"),
            'GS' => Yii::t('application', "South Georgia and the South Sandwich Islands"),
            'ES' => Yii::t('application', "Spain"),
            'LK' => Yii::t('application', "Sri Lanka"),
            'SH' => Yii::t('application', "St. Helena"),
            'PM' => Yii::t('application', "St. Pierre and Miquelon"),
            'SD' => Yii::t('application', "Sudan"),
            'SR' => Yii::t('application', "Suriname"),
            'SJ' => Yii::t('application', "Svalbard and Jan Mayen Islands"),
            'SZ' => Yii::t('application', "Swaziland"),
            'SE' => Yii::t('application', "Sweden"),
            'CH' => Yii::t('application', "Switzerland"),
            'SY' => Yii::t('application', "Syrian Arab Republic"),
            'TW' => Yii::t('application', "Taiwan, Province of China"),
            'TJ' => Yii::t('application', "Tajikistan"),
            'TZ' => Yii::t('application', "Tanzania, United Republic of"),
            'TH' => Yii::t('application', "Thailand"),
            'TG' => Yii::t('application', "Togo"),
            'TK' => Yii::t('application', "Tokelau"),
            'TO' => Yii::t('application', "Tonga"),
            'TT' => Yii::t('application', "Trinidad and Tobago"),
            'TN' => Yii::t('application', "Tunisia"),
            'TR' => Yii::t('application', "Turkey"),
            'TM' => Yii::t('application', "Turkmenistan"),
            'TC' => Yii::t('application', "Turks and Caicos Islands"),
            'TV' => Yii::t('application', "Tuvalu"),
            'UG' => Yii::t('application', "Uganda"),
            'UA' => Yii::t('application', "Ukraine"),
            'AE' => Yii::t('application', "United Arab Emirates"),
            'GB' => Yii::t('application', "United Kingdom"),
            'US' => Yii::t('application', "United States"),
            'UM' => Yii::t('application', "United States Minor Outlying Islands"),
            'UY' => Yii::t('application', "Uruguay"),
            'UZ' => Yii::t('application', "Uzbekistan"),
            'VU' => Yii::t('application', "Vanuatu"),
            'VE' => Yii::t('application', "Venezuela"),
            'VN' => Yii::t('application', "Viet Nam"),
            'VG' => Yii::t('application', "Virgin Islands (British)"),
            'VI' => Yii::t('application', "Virgin Islands (U.S.)"),
            'WF' => Yii::t('application', "Wallis and Futuna Islands"),
            'EH' => Yii::t('application', "Western Sahara"),
            'YE' => Yii::t('application', "Yemen"),
            'YU' => Yii::t('application', "Yugoslavia"),
            'ZM' => Yii::t('application', "Zambia"),
            'ZW' => Yii::t('application', "Zimbabwe"),
        );
    }
}