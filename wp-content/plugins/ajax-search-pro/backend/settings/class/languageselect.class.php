<?php
if (!class_exists("wpdreamsLanguageSelect")) {
    /**
     * Class wpdreamsLanguageSelect
     *
     * Displays a language select box.
     *
     * @package  WPDreams/OptionsFramework/Classes
     * @category Class
     * @author Ernest Marcinko <ernest.marcinko@wp-dreams.com>
     * @link http://wp-dreams.com, http://codecanyon.net/user/anago/portfolio
     * @copyright Copyright (c) 2014, Ernest Marcinko
     */
    class wpdreamsLanguageSelect extends wpdreamsType {
        private $languages = array(
            'ab' => 'Abkhazian',
            'aa' => 'Afar',
            'af' => 'Afrikaans',
            'ak' => 'Akan',
            'sq' => 'Albanian',
            'am' => 'Amharic',
            'ar' => 'Arabic',
            'an' => 'Aragonese',
            'hy' => 'Armenian',
            'as' => 'Assamese',
            'av' => 'Avaric',
            'ae' => 'Avestan',
            'ay' => 'Aymara',
            'az' => 'Azerbaijani',
            'bm' => 'Bambara',
            'ba' => 'Bashkir',
            'eu' => 'Basque',
            'be' => 'Belarusian',
            'bn' => 'Bengali',
            'bh' => 'Bihari',
            'bi' => 'Bislama',
            'nb' => 'Bokmal',
            'bs' => 'Bosnian',
            'br' => 'Breton',
            'bg' => 'Bulgarian',
            'my' => 'Burmese',
            'ca' => 'Catalan',
            'km' => 'Central Khmer',
            'ch' => 'Chamorro',
            'ce' => 'Chechen',
            'ny' => 'Chewa',
            'zh' => 'Chinese',
            'cu' => 'Church Slavic',
            'cv' => 'Chuvash',
            'kw' => 'Cornish',
            'co' => 'Corsican',
            'cr' => 'Cree',
            'hr' => 'Croatian',
            'cs' => 'Czech',
            'da' => 'Danish',
            'dv' => 'Dhivehi',
            'nl' => 'Dutch',
            'dz' => 'Dzongkha',
            'en' => 'English',
            'eo' => 'Esperanto',
            'et' => 'Estonian',
            'ee' => 'Ewe',
            'fo' => 'Faroese',
            'fj' => 'Fijian',
            'fi' => 'Finnish',
            'fr' => 'French',
            'ff' => 'Fulah',
            'gd' => 'Gaelic',
            'gl' => 'Galician',
            'lg' => 'Ganda',
            'ka' => 'Georgian',
            'de' => 'German',
            'ki' => 'Gikuyu',
            'el' => 'Greek',
            'kl' => 'Greenlandic',
            'gn' => 'Guarani',
            'gu' => 'Gujarati',
            'ht' => 'Haitian',
            'ha' => 'Hausa',
            'he' => 'Hebrew',
            'hz' => 'Herero',
            'hi' => 'Hindi',
            'ho' => 'Hiri Motu',
            'hu' => 'Hungarian',
            'is' => 'Icelandic',
            'io' => 'Ido',
            'ig' => 'Igbo',
            'id' => 'Indonesian',
            'ia' => 'Interlingua',
            'iu' => 'Inuktitut',
            'ik' => 'Inupiaq',
            'ga' => 'Irish',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'jv' => 'Javanese',
            'kn' => 'Kannada',
            'kr' => 'Kanuri',
            'ks' => 'Kashmiri',
            'kk' => 'Kazakh',
            'rw' => 'Kinyarwanda',
            'kv' => 'Komi',
            'kg' => 'Kongo',
            'ko' => 'Korean',
            'ku' => 'Kurdish',
            'kj' => 'Kwanyama',
            'ky' => 'Kyrgyz',
            'lo' => 'Lao',
            'la' => 'Latin',
            'lv' => 'Latvian',
            'lb' => 'Letzeburgesch',
            'li' => 'Limburgan',
            'ln' => 'Lingala',
            'lt' => 'Lithuanian',
            'lu' => 'Luba-Katanga',
            'mk' => 'Macedonian',
            'mg' => 'Malagasy',
            'ms' => 'Malay',
            'ml' => 'Malayalam',
            'mt' => 'Maltese',
            'gv' => 'Manx',
            'mi' => 'Maori',
            'mr' => 'Marathi',
            'mh' => 'Marshallese',
            'mn' => 'Mongolian',
            'na' => 'Nauru',
            'nv' => 'Navajo',
            'ng' => 'Ndonga',
            'ne' => 'Nepali',
            'nd' => 'North Ndebele',
            'se' => 'Northern Sami',
            'no' => 'Norwegian',
            'nn' => 'Norwegian Nynorsk',
            'ie' => 'Occidental',
            'oc' => 'Occitan',
            'oj' => 'Ojibwa',
            'or' => 'Oriya',
            'om' => 'Oromo',
            'os' => 'Ossetian',
            'pi' => 'Pali',
            'fa' => 'Persian',
            'pl' => 'Polish',
            'pt' => 'Portuguese',
            'pa' => 'Punjabi',
            'ps' => 'Pushto',
            'qu' => 'Quechua',
            'ro' => 'Romanian',
            'rm' => 'Romansh',
            'rn' => 'Rundi',
            'ru' => 'Russian',
            'sm' => 'Samoan',
            'sg' => 'Sango',
            'sa' => 'Sanskrit',
            'sc' => 'Sardinian',
            'sr' => 'Serbian',
            'sn' => 'Shona',
            'ii' => 'Sichuan Yi',
            'sd' => 'Sindhi',
            'si' => 'Sinhalese',
            'sk' => 'Slovak',
            'sl' => 'Slovenian',
            'so' => 'Somali',
            'st' => 'Southern Sotho',
            'nr' => 'South Ndebele',
            'es' => 'Spanish',
            'su' => 'Sundanese',
            'sw' => 'Swahili',
            'ss' => 'Swati',
            'sv' => 'Swedish',
            'tl' => 'Tagalog',
            'ty' => 'Tahitian',
            'tg' => 'Tajik',
            'ta' => 'Tamil',
            'tt' => 'Tatar',
            'te' => 'Telugu',
            'th' => 'Thai',
            'bo' => 'Tibetan',
            'ti' => 'Tigrinya',
            'to' => 'Tonga',
            'ts' => 'Tsonga',
            'tn' => 'Tswana',
            'tr' => 'Turkish',
            'tk' => 'Turkmen',
            'tw' => 'Twi',
            'uk' => 'Ukrainian',
            'ur' => 'Urdu',
            'ug' => 'Uyghur',
            'uz' => 'Uzbek',
            've' => 'Venda',
            'vi' => 'Vietnamese',
            'vo' => 'VolapA1k',
            'wa' => 'Walloon',
            'cy' => 'Welsh',
            'fy' => 'Western Frisian',
            'wo' => 'Wolof',
            'xh' => 'Xhosa',
            'yi' => 'Yiddish',
            'yo' => 'Yoruba',
            'za' => 'Zhuang',
            'zu' => 'Zulu'
        );
        function getType() {
            parent::getType();

            echo "<div class='wpdreamsLanguageSelect'>";
            echo "<label for='wpdreamslanguageselect_" . self::$_instancenumber . "'>" . $this->label . "</label>";
            echo "<select class='wpdreamsselect' id='wpdreamsselect_" . self::$_instancenumber . "' name='" . $this->name . "'>";
            foreach ($this->languages as $k => $v) {
                if ($k == $this->data)
                    echo "<option value='" . $k . "' selected='selected'>" . $v . "</option>";
                else
                    echo "<option value='" . $k . "'>" . $v . "</option>";
            }
            echo "</select>";
            echo "</div>";
        }

        final function getData() {
            return $this->data;
        }
    }
}