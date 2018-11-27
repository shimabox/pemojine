<?php

namespace SMB\Pemojine\Outputter;

use SMB\Pemojine\Helper\Converter;
use SMB\Pemojine\Helper\Formatter;
use SMB\Pemojine\Outputter\Outputtable;
use SMB\Pemojine\Structure\Interfaces\EmojiTable\Gettable as EmojiTable;

/**
 * 
 */
class Outputter implements Outputtable
{
    /**
     * EmojiTable
     * @var EmojiTable
     */
    private $emojiTable;

    /**
     * 
     * @param EmojiTable $emojiTable
     */
    public function __construct(EmojiTable $emojiTable)
    {
        $this->emojiTable = $emojiTable;
    }

    /**
     * 
     * @param string $name
     * 
     * @return string
     */
    public function output($name)
    {
        $unicode = $this->emojiTable->getUnicodeByName($name);

        if ($unicode === '') {
            return '';
        }

        return Converter::toEmojiByUnicode($unicode);
    }

    /**
     * Output HTML reference character.<br>
     * Note: Not converting to HTML entity.
     * 
     * @param string $name
     * 
     * @return string
     */
    public function outputHtml($name)
    {
        $unicode = $this->emojiTable->getUnicodeByName($name);

        if ($unicode === '') {
            return '';
        }

        return Converter::toHtmlByUnicode($unicode);
    }

    /**
     * 
     * @param string $unicode
     * 
     * @return string
     */
    public function outputByUnicode($unicode)
    {
        $name = $this->getNameByUnicode($unicode);
        if ($name === '') {
            return '';
        }

        return $this->output($name);
    }

    /**
     * 
     * @param string $unicode
     * 
     * @return string
     */
    public function outputHtmlByUnicode($unicode)
    {
        $name = $this->getNameByUnicode($unicode);
        if ($name === '') {
            return '';
        }

        return $this->outputHtml($name);
    }

    /**
     *
     * @param string $name
     *
     * @return string e.g) 'U+1F600', 'U+1F1EF U+1F1F5'
     */
    public function getUnicode($name)
    {
        return $this->emojiTable->getUnicodeByName($name);
    }

    /**
     *
     * @param string $name
     *
     * @return string e.g) 'U+1F600', 'U+1F1EFU+1F1F5'
     */
    public function getUnicodeWithRemovedBlank($name)
    {
        $unicode = $this->getUnicode($name);
        return str_replace(array(' ', '　'), '', $unicode);
    }

    /**
     *
     * @param string $name
     *
     * @return string e.g) '\u{1F600}', '\u{1F1EF} \u{1F1F5}'
     */
    public function getUtf8String($name)
    {
        $unicode = $this->emojiTable->getUnicodeByName($name);
        return Converter::toUtf8StringFromUnicode($unicode);
    }

    /**
     *
     * @param string $name
     *
     * @return string e.g) '\u{1F600}', '\u{1F1EF}\u{1F1F5}'
     */
    public function getUtf8StringWithRemovedBlank($name)
    {
        $utf8String = $this->getUtf8String($name);
        return str_replace(array(' ', '　'), '', $utf8String);
    }

    /**
     * 
     * @param string $unicode
     * 
     * @return $string
     */
    private function getNameByUnicode($unicode)
    {
        $_u = Formatter::formatUnicode($unicode);
        return $this->emojiTable->getNameByUnicode($_u);
    }
}
