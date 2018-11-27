<?php

namespace SMB\Pemojine\Helper;

/**
 * 
 */
class Formatter
{
    /**
     * Format unicode.
     * 
     * @param string $unicode e.g) 'U+1F914' or 'u+1F914' or 'U+1F1EF U+1F1F5' or '\u{1F1EF} \u{1F1F5}'
     * 
     * @return string e.g) 'U+1F914' => 'U+1F914', 'u+1F914' => 'U+1F914', 'U+1F1EF U+1F1F5' => 'U+1F1EF U+1F1F5', '\u{1F1EF} \u{1F1F5}' => 'U+1F1EF U+1F1F5'
     */
    public static function formatUnicode($unicode)
    {
        $matches = [];
        preg_match_all('/(U\+([0-9A-Fa-f])+|(\\\u\{[0-9A-Fa-f]+\})+)/i', $unicode, $matches);
        if (count(array_filter($matches)) < 1) {
            return '';
        }

        $target = implode('', $matches[0]);

        $patternOfUnicode = preg_split('/U\+/i', $target);
        if (count($patternOfUnicode) > 1) {
            return mb_strtoupper(trim(preg_replace('/\s{2,}/', ' ', implode(' U+', $patternOfUnicode))));
        }

        preg_match_all('/\\\u\{(.+?)\}+?/i', $target, $patternOfUtf8String);
        return mb_strtoupper('U+' . implode(' U+', $patternOfUtf8String[1]));
    }
}
