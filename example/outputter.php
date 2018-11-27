<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Outputter\Outputter;

// Create an EmojiTable instance of Apple.
$emojiTable = new \SMB\Pemojine\Structure\Vendor\Apple\EmojiTable();

// Create an Outputter instance.
$outputter = new Outputter($emojiTable);

// Other ways to get instances.
/*
    $pemojine = SMB\Pemojine\Container::make(new SMB\Pemojine\Structure\Vendor\Apple());
    $outputter = $pemojine->getOutputter();
*/

// e.g) baby(:baby:)
echo $outputter->output('baby'), $br; // => 👶
echo $outputter->outputHtml(':baby:'), $br; // => '&#x1F476;'
echo htmlspecialchars($outputter->outputHtml(':baby:'), ENT_QUOTES, 'UTF-8'), $br; // => '&#x1F476;'

// e.g) flag: Japan(:flag_jp:, :jp:)
echo $outputter->outputByUnicode('U+1F1EF U+1F1F5'), $br; // => 🇯🇵
echo $outputter->getUnicode('flag: Japan'), $br; // => 'U+1F1EF U+1F1F5'
echo $outputter->getUnicodeWithRemovedBlank('flag: Japan'), $br; // => 'U+1F1EFU+1F1F5'
echo $outputter->getUtf8String('flag: Japan'), $br; // => '\u{1F1EF} \u{U+1F1F5}'
echo $outputter->getUtf8StringWithRemovedBlank('flag: Japan'), $br; // => '\u{1F1EF}\u{U+1F1F5}'
