<?php

namespace SMB\Pemojine\Structure\Interfaces\EmojiTable;

/**
 *
 */
interface Gettable
{
    /**
     * 
     * @param string $name
     * 
     * @return string
     */
    public function getUnicodeByName($name);

    /**
     * 
     * @param string $unicode
     * 
     * @return string
     */
    public function getNameByUnicode($unicode);
}
