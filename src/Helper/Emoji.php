<?php

namespace SMB\Pemojine\Helper;

use SMB\Pemojine\Config\EmojiTable;

/**
 * Emoji's helper.
 */
class Emoji
{
    /**
     * Convert from Unicode to Emoji.
     *
     * @param string $unicode e.g) 'U+1F914' or 'U+1F3F3 U+FE0F U+200D U+1F308'
     * @param boolean $useUtf8String Default false.<br>
     * If true it will receive $unicode in encoded as UTF-8 strings.<br>
     * e.g) '\u{1F914}' or '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'
     * 
     * @return string
     */
    public static function byUnicode($unicode, $useUtf8String=false)
    {
        if ($useUtf8String === true) {
            return Converter::toEmojiByUtf8String($unicode);
        }

        return Converter::toEmojiByUnicode($unicode);
    }

    /**
     * Convert from Unicode to HTML reference string.
     *
     * @param string $unicode e.g) 'U+1F914' or 'U+1F3F3 U+FE0F U+200D U+1F308'
     * @param boolean $useUtf8String Default false.<br>
     * If true it will receive $unicode in encoded as UTF-8 strings.<br>
     * e.g) '\u{1F914}' or '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'
     * 
     * @return string e.g) &#x1F3F3;&#xFE0F;&#x200D;&#x1F308;
     */
    public static function htmlByUnicode($unicode, $useUtf8String=false)
    {
        if ($useUtf8String === true) {
            return Converter::toHtmlByUtf8String($unicode);
        }

        return Converter::toHtmlByUnicode($unicode);
    }

    /**
     * Convert ShortName to Emoji.
     *
     * @param string $shortName
     * 
     * @return string
     */
    public static function byShortName($shortName)
    {
        $sn = trim($shortName, '|');
        if (isset(EmojiTable::$all[$sn])) {
            return Converter::toEmojiByUnicode(EmojiTable::$all[$sn]['unicode']);
        }

        if (isset(EmojiTable::$mappingOfShortName[$sn])) {
            $name = EmojiTable::$mappingOfShortName[$sn];
            return Converter::toEmojiByUnicode(EmojiTable::$all[$name]['unicode']);
        }

        return '';
    }

    /**
     * Convert ShortName to HTML reference character.
     *
     * @param string $shortName
     * 
     * @return string e.g) &#x1F600;
     */
    public static function htmlByShortName($shortName)
    {
        $sn = trim($shortName, '|');
        if (isset(EmojiTable::$all[$sn])) {
            return Converter::toHtmlByUnicode(EmojiTable::$all[$sn]['unicode']);
        }

        if (isset(EmojiTable::$mappingOfShortName[$sn])) {
            $name = EmojiTable::$mappingOfShortName[$sn];
            return Converter::toHtmlByUnicode(EmojiTable::$all[$name]['unicode']);
        }

        return '';
    }

    /**
     * Get supported vendor by shortname.
     *
     * @param string $shortName
     * @return array e.g) ['Apple', 'Google', 'Twitter']
     */
    public static function getSupportVendorByShortName($shortName)
    {
        $sn = trim($shortName, '|');
        if (isset(EmojiTable::$all[$sn])) {
            return EmojiTable::$all[$sn]['supportVendor'];
        }

        if (isset(EmojiTable::$mappingOfShortName[$sn])) {
            $name = EmojiTable::$mappingOfShortName[$sn];
            return EmojiTable::$all[$name]['supportVendor'];
        }

        return [];
    }

    /**
     * Get other supported vendor.
     *
     * @param string $specifiedVendorName
     * @param string $shortName
     * 
     * @return array e.g) ['Google', 'Twitter']
     */
    public static function getOtherSupportVendor($specifiedVendorName, $shortName)
    {
        $ret =  array_filter(static::getSupportVendorByShortName($shortName), function ($vendor) use ($specifiedVendorName) {
            if ($vendor !== $specifiedVendorName) {
                return $vendor;
            }
        });

        return array_values($ret);
    }

    /**
     * Confirm whether a specific vendor supports it.
     *
     * @param string $specifiedVendorName
     * @param string $shortName
     * 
     * @return boolean
     */
    public static function isSupportVendor($specifiedVendorName, $shortName)
    {
        return in_array($specifiedVendorName, static::getSupportVendorByShortName($shortName), true);
    }

    /**
     * Convert emoji to Unicode.
     *
     * @param string $emoji
     * @param boolean $removeBlank Default true.
     * 
     * @return string e.g) 'U+1F914' If it were a surrogate pair, will return 'U+xxxx U+xxxx' or if $removeBlank true, return 'U+xxxxU+xxxx'.
     */
    public static function emojiToUnicode($emoji, $removeBlank=true)
    {
        $hex = bin2hex(mb_convert_encoding($emoji, 'UTF-32BE', 'UTF-8'));

        if (strlen($hex) === 8) {
            return 'U+' . mb_strtoupper(base_convert($hex, 16, 16));
        }

        // If it were a surrogate pair, will return 'U+xxxx U+xxxx'.
        $codes = [];
        foreach (str_split($hex, 8) as $code) {
            $codes[] = 'U+' . mb_strtoupper(base_convert($code, 16, 16));
        }

        $glue = $removeBlank === true ? '' : ' ';
        return implode($glue, $codes);
    }

    /**
     * Convert emoji to HTML reference character.
     *
     * @param string $emoji
     * 
     * @return string
     */
    public static function emojiToHTML($emoji)
    {
        $unicode = static::emojiToUnicode($emoji);
        return Converter::toHtmlByUnicode($unicode);
    }

    /**
     * Convert emoji to characters encoded as UTF-8 strings.
     *
     * @param string $emoji
     * @param boolean $removeBlank Default true.
     * 
     * @return string e.g) '\u{1F914}' If it were a surrogate pair, will return '\u{xxxx} \u{xxxx}' or if $removeBlank true, return '\u{xxxx}\u{xxxx}'.
     */
    public static function emojiToUtf8String($emoji, $removeBlank=true)
    {
        $hex = bin2hex(mb_convert_encoding($emoji, 'UTF-32BE', 'UTF-8'));

        if (strlen($hex) === 8) {
            return '\u{' . mb_strtoupper(base_convert($hex, 16, 16)) . '}';
        }

        // If it were a surrogate pair, will return '\u{xxxx} \u{xxxx}'.
        $chars = [];
        foreach (str_split($hex, 8) as $code) {
            $chars[] = '\u{' . mb_strtoupper(base_convert($code, 16, 16)) . '}';
        }

        $glue = $removeBlank === true ? '' : ' ';
        return implode($glue, $chars);
    }

    /**
     * Convert from Unicode to ShortNames.
     * 
     * @param string $unicode e.g) 'U+1F1EF U+1F1F5' or 'U+1F1EFU+1F1F5'
     * 
     * @return array
     */
    public static function unicodeToShortNames($unicode)
    {
        $_unicode = Formatter::formatUnicode($unicode);

        if ($_unicode !== '' && isset(EmojiTable::$unicodeToShortNames[$_unicode])) {
            return EmojiTable::$unicodeToShortNames[$_unicode];
        }

        return [];
    }
}
