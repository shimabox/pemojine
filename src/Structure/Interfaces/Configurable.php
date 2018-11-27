<?php

namespace SMB\Pemojine\Structure\Interfaces;

/**
 *
 */
interface Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName();

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure();

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable();
}
