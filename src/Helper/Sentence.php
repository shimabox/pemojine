<?php

namespace SMB\Pemojine\Helper;

use SMB\Pemojine\Outputter\Outputtable;

/**
 * Create sentences.
 */
class Sentence
{
    /**
     *
     * @var string
     */
    private static $pattern = '/(\|[^\|]+\||:[^:]+:)|((U\+([0-9A-Fa-f])+)+|(\\\u\{[0-9A-Fa-f]+\})+)/i';

    /**
     *
     * @var Outputtable
     */
    private $outputter;

    /**
     * 
     * @param Outputtable $outputter
     */
    public function __construct(Outputtable $outputter)
    {
        $this->outputter = $outputter;
    }

    /**
     * Create.
     * 
     * @param string $sentence
     * 
     * @return string
     * 
     * @see static::output()
     */
    public function create($sentence)
    {
        return static::output($this->outputter, $sentence);
    }

    /**
     * Create statically.
     * 
     * @param Outputtable $outputter
     * @param string $sentence
     * 
     * @return string
     * 
     * @see static::output()
     */
    public static function createStatically(Outputtable $outputter, $sentence)
    {
        return static::output($outputter, $sentence);
    }

    /**
     * Convert characters
     * 
     * - Surrounded by : or |
     * - Unicode literal
     * 
     * to emoji.
     * 
     * If the short name is not enclosed in a colon(:), enclose it in a pipe(|).
     * (ShortNameがコロン(:) で囲まれていない場合は、パイプ(|) で囲んでください)
     * 
     * For surrogates, please enter without entering blanks.
     * (サロゲート文字の場合、空白を入力せずに入力してください)
     * 
     * e.g.) flag: Japan<br>
     * Good. $sentence = 'U+1F1EFU+1F1F5';<br>
     * Bad.  $sentence = 'U+1F1EF U+1F1F5';
     * 
     * e.g.)
     * - 'Hello U+1F601 :grin:!!' => 'Hello 😁 😁!!'
     * - 'Hello :grin:!!' or 'Hello |beaming face with smiling eyes|!!' => 'Hello 😁!!'
     * - 'Hello U+1F1EFU+1F1F5 U+1F601 \u{1F1EF}\u{1F1F5} \u{1F601}!!' => 'Hello 🇯🇵 😁 🇯🇵 😁!!'
     * 
     * Also, nesting is supported to some extent.
     * (ネストもある程度対応しています)
     * - ':|OK hand: light skin tone|:' => ':👌🏻:'
     * - ': |:\'(| |grinning face with smiling eyes| :' => ': 😢 😄 :'
     * - '| :smile::baby: |' => '| 😄👶 |'
     * - '||grinning face||' => '|😀|'
     * - '::smile::' => ':😄:'
     * - 'foo ||grinning face with big eyes|| |bar|face with tears of joy|baz|' => 'foo |😃| |bar😂baz|'
     * - 'foo ::heart:: :bar:cinema:baz:' => 'foo :❤: :bar🎦baz:'
     * 
     * Caution.<br>
     * However, complicated nesting is not supported.
     * (ただし、複雑すぎる入れ子には対応出来ていません)
     * 
     * @param Outputtable $outputter
     * @param string $sentence
     * 
     * @return string
     */
    private static function output(Outputtable $outputter, $sentence)
    {
        // First, process the enclosing character.
        $_sentence = static::handlingOfEnclosingCharacters($outputter, $sentence);

        // Perform other conversion processing.
        return preg_replace_callback(static::$pattern, function ($matches) use ($outputter) {
            $target = $matches[0];

            $target = static::processWhenUnicode($outputter, $target);
            $target = static::processWhenUnicodeliteral($outputter, $target);

            /*
             |------------------------------------------------------------------
             | Process the remaining enclosing characters.
             |------------------------------------------------------------------
             */
            $resultOfColon = static::processWhenEnclosingCharacterIsColon($outputter, $target);
            if ($resultOfColon !== '') {
                return $resultOfColon;
            }

            $resultOfPipe = static::processWhenEnclosingCharacterIsPipe($outputter, $target);
            if ($resultOfPipe !== '') {
                return $resultOfPipe;
            }

            return $target;

        }, $_sentence);
    }

    /**
     * Process the enclosing character.
     * 
     * First, replace the character surrounded by pipe and colon.
     * 
     * e.g.)
     * - '||grinning face||' => '|😀|'
     * - '::smile::' => ':😄:'
     * - 'foo ||grinning face with big eyes|| |bar|face with tears of joy|baz|' => 'foo |😃| |bar😂baz|'
     * - 'foo ::heart:: :bar:cinema:baz:' => 'foo :❤: :bar🎦baz:'
     * 
     * @param Outputtable $outputter
     * @param string $sentence
     * @return string
     */
    private static function handlingOfEnclosingCharacters(Outputtable $outputter, $sentence)
    {
        // First, a process corresponding to a pattern including a character string enclosed 
        // by a pipe is executed in a character string surrounded by a colon.
        // In case of ':|OK hand: light skin tone|:', the target is '|OK hand: light skin tone|' 
        // And that target becomes :👌🏻:.
        $_sentence = preg_replace_callback('/(\|.*?\|)/', function ($matches) use ($outputter) {
            $target = $matches[0];

            $resultOfPipe = static::processWhenEnclosingCharacterIsPipe($outputter, $target);
            if ($resultOfPipe !== '') {
                return $resultOfPipe;
            }

            return $target;

        }, $sentence);

        return preg_replace_callback('/(:.*?:)/', function ($matches) use ($outputter) {
            $target = $matches[0];

            $resultOfColon = static::processWhenEnclosingCharacterIsColon($outputter, $target);
            if ($resultOfColon !== '') {
                return $resultOfColon;
            }

            return $target;

        }, $_sentence);
    }

    /**
     * Target of '|xxxxx|'.
     * 
     * e.g.)
     * - |grinning face with smiling eyes| => 😄
     * - |OK hand: light skin tone| => 👌🏻
     * - |:smile:| => Not target.
     * 
     * @param Outputtable $outputter
     * @param string $target
     * 
     * @return string
     */
    private static function processWhenEnclosingCharacterIsPipe(Outputtable $outputter, $target)
    {
        // |:smile:| => Not target.
        $after = preg_replace_callback('/^(?!.*:.+?:).*/', function ($matches) use ($outputter) {
            $_target = $matches[0];

            $output = $outputter->output(trim($_target, '|'));

            if ($output === '') {
                return $_target;
            }

            return $output;

        }, $target);

        if ($target !== $after) {
            return str_replace($target, $after, $target);
        }

        return '';
    }

    /**
     * Target of ':xxxxx:'.
     * 
     * @param Outputtable $outputter
     * @param string $target
     * 
     * @return string
     */
    private static function processWhenEnclosingCharacterIsColon(Outputtable $outputter, $target)
    {
        $after = preg_replace_callback('/(:[^:]+:)/', function ($matches) use ($outputter) {
            $_target = $matches[0];

            $output = $outputter->output($_target);

            if ($output === '') {
                return $_target;
            }

            return $output;

        }, $target);

        if ($target !== $after) {
            return str_replace($target, $after, $target);
        }

        return '';
    }

    /**
     * Target of 'U+xxxxx', 'U+xxxxxU+xxxxx'.
     * 
     * @param Outputtable $outputter
     * @param string $target
     * 
     * @return string
     */
    private static function processWhenUnicode(Outputtable $outputter, $target)
    {
        return preg_replace_callback('/U\+([0-9A-Fa-fU\+])+/i', function ($matches) use ($outputter) {
            $_target = $matches[0];

            $output = $outputter->outputByUnicode($_target);

            if ($output === '') {
                return $_target;
            }

            return $output;

        }, $target);
    }

    /**
     * Target of '\u{xxxxx}', '\u{xxxxx}\u{xxxxx}'.
     * 
     * @param Outputtable $outputter
     * @param string $target
     * 
     * @return string
     */
    private static function processWhenUnicodeliteral(Outputtable $outputter, $target)
    {
        return preg_replace_callback('/(\\\u\{([0-9A-Fa-f\\\u\{\}])+\})+/i', function ($matches) use ($outputter) {
           $_target = $matches[0];

            $output = $outputter->outputByUnicode($_target);

            if ($output === '') {
                return $_target;
            }

            return $output;

        }, $target);
    }
}
