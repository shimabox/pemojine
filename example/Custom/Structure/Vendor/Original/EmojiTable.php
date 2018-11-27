<?php

namespace SMB\Pemojine\Example\Custom\Structure\Vendor\Original;

use SMB\Pemojine\Structure\Interfaces\EmojiTable\Gettable;
use SMB\Pemojine\Structure\Traits\EmojiTableTrait;

/**
 * Custom
 */
class EmojiTable implements Gettable
{
    use EmojiTableTrait;

    /**
     *
     * @var array
     */
    private static $table = [
        'unicorn face' => 'U+1F984',
        'dragon face' => 'U+1F432',
        'dragon' => 'U+1F409',
        'sauropod' => 'U+1F995',
        'T-Rex' => 'U+1F996',
        'gambling' => 'U+1F3B0 U+1F3B2 U+1F0CF U+1F004 U+1F3B4 U+1F911 U+1F4B8' // Original.
    ];

    /**
     *
     * @var array
     */
    public static $mappingOfShortName = [
        ':unicorn:' => 'unicorn face',
        ':unicorn_face:' => 'unicorn face',
        ':u:' => 'unicorn face', // Original.
        ':dragon_face:' => 'dragon face',
        ':dragon:' => 'dragon',
        ':sauropod:' => 'sauropod',
        ':t_rex:' => 'T-Rex',
    ];
}
