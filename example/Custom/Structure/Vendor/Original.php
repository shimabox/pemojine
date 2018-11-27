<?php

namespace SMB\Pemojine\Example\Custom\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 * Custom
 */
class Original implements Configurable
{
    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return 'Original';
    }

    /**
     * 
     * @return array
     */
    public function getClassNameListOfStructure()
    {
        return [
            Original\Animals::class,
            Original\Gambling::class,
        ];
    }

    /**
     * 
     * @return string
     */
    public function getClassNameOfEmojiTable()
    {
        return Original\EmojiTable::class;
    }
}
