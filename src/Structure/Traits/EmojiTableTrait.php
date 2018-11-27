<?php

namespace SMB\Pemojine\Structure\Traits;

/**
 * Trait of EmojiTable
 */
trait EmojiTableTrait
{
    /**
     * 
     * @param string $name
     * 
     * @return string
     */
    public function getUnicodeByName($name)
    {
        if (isset(static::$table[$name])) {
            return static::$table[$name];
        }

        if (
            isset(static::$mappingOfShortName[$name])
            && isset(static::$table[static::$mappingOfShortName[$name]])
        ) {
            return static::$table[static::$mappingOfShortName[$name]];
        }

        return '';
    }

    /**
     * 
     * @param string $unicode
     * 
     * @return string
     */
    public function getNameByUnicode($unicode)
    {
        $fliped = array_flip(static::$table);
        if (isset($fliped[$unicode])) {
            return $fliped[$unicode];
        }

        return '';
    }
}
