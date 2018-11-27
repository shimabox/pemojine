<?php

namespace SMB\Pemojine\Helper;

/**
 * Emoji Converter.
 */
class Converter
{
    /**
     * Convert from Unicode to Emoji.
     *
     * @param string $unicode e.g) 'U+1F914' or 'U+1F3F3 U+FE0F U+200D U+1F308'
     *
     * @return string
     */
    public static function toEmojiByUnicode($unicode)
    {
        $formatted = '';
        foreach (static::removeIdentifier($unicode) as $code) {
            $formatted .= sprintf("%08s", $code);
        }

        // Converts Unicode to hexadecimal notation, decodes and UTF-8 encodes.
        // (unicodeを16進表現に変換後デコードしたものをエンコード(UTF-8)して返す)
        return mb_convert_encoding(hex2bin($formatted), 'UTF-8', 'UTF-32BE');
    }

    /**
     * Convert from Unicode to HTML reference character.
     *
     * @param string $unicode e.g) 'U+1F914' or 'U+1F3F3 U+FE0F U+200D U+1F308'
     * 
     * @return string e.g) &#x1F3F3;&#xFE0F;&#x200D;&#x1F308;
     */
    public static function toHtmlByUnicode($unicode)
    {
        $formatted = '';
        foreach (static::removeIdentifier($unicode) as $code) {
            $formatted .= '&#x' . mb_strtoupper($code) . ';';
        }

        return $formatted;
    }

    /**
     * Convert from Utf8String to Emoji.
     *
     * @param string $utf8String e.g) '\u{1F914}' or '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'
     * 
     * @return string
     */
    public static function toEmojiByUtf8String($utf8String)
    {
        $unicode = Formatter::formatUnicode($utf8String);
        return static::toEmojiByUnicode($unicode);
    }

    /**
     * Convert from Utf8String to HTML reference string.
     *
     * @param string $utf8String e.g) '\u{1F914}' or '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'
     * 
     * @return string e.g) &#x1F3F3;&#xFE0F;&#x200D;&#x1F308;
     */
    public static function toHtmlByUtf8String($utf8String)
    {
        $unicode = Formatter::formatUnicode($utf8String);
        return static::toHtmlByUnicode($unicode);
    }

    /**
     * Convert from Unicode to Utf8String.
     *
     * @param string $unicode e.g) 'U+1F914' or 'U+1F3F3 U+FE0F U+200D U+1F308'
     * 
     * @return string e.g) '\u{1F914}' or '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'
     */
    public static function toUtf8StringFromUnicode($unicode)
    {
        $matches = [];
        preg_match_all('/(U\+([0-9A-Fa-f])+)/i', $unicode, $matches);
        if (count(array_filter($matches)) < 1) {
            return $unicode;
        }

        $target = implode('', $matches[0]);

        $patternOfUnicode = preg_split('/U\+/i', $target);
        $ret = array_map(function ($v) {
            if ($v === '') {
                return '';
            }
            return '\u{' . mb_strtoupper($v) . '}';
        }, $patternOfUnicode);

        return trim(implode(' ', $ret));
    }

    /**
     * Remove 'U+'
     * 
     * @param string $unicode e.g) 'U+1F914' or 'U+1F3F3 U+FE0F U+200D U+1F308'
     * 
     * @return \Generator e.g) ['1F3F3', 'FE0F', '200D', '1F308']
     */
    private static function removeIdentifier($unicode)
    {
        $_unicode = str_replace(array(' ', '　'), '', $unicode);
        foreach (explode(' ', ltrim(str_ireplace('U+', ' ', $_unicode))) as $code) {
            yield $code;
        }
    }
}
