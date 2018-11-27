<?php

namespace SMB\Pemojine\Outputter;

/**
 * 
 */
interface Outputtable
{
    /**
     *
     * @param string $name
     *
     * @return string
     */
    public function output($name);

    /**
     * Output HTML reference character.<br>
     * Note: Not converting to HTML entity.
     *
     * @param string $name
     *
     * @return string
     */
    public function outputHtml($name);

    /**
     *
     * @param string $unicode
     *
     * @return string
     */
    public function outputByUnicode($unicode);

    /**
     *
     * @param string $unicode
     *
     * @return string
     */
    public function outputHtmlByUnicode($unicode);

    /**
     *
     * @param string $name
     *
     * @return string
     */
    public function getUnicode($name);

    /**
     *
     * @param string $name
     *
     * @return string
     */
    public function getUnicodeWithRemovedBlank($name);

    /**
     *
     * @param string $name
     *
     * @return string
     */
    public function getUtf8String($name);

    /**
     *
     * @param string $name
     *
     * @return string
     */
    public function getUtf8StringWithRemovedBlank($name);
}
