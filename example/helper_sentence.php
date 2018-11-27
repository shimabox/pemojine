<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Helper\Sentence;
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

// Create a Sentence instance.
$sentence = new Sentence($outputter);

// Sentence 1
$output_1 = $sentence->create('Hello U+1F1EFU+1F1F5 \u{1F601}:grin:|beaming face with smiling eyes|!!');
assert('Hello 🇯🇵 😁😁😁!!' === $output_1);
echo $output_1, $br;

// Sentence 2
$output_2 = $sentence->create('foo ::heart:: :bar:cinema:baz:');
assert('foo :❤: :bar🎦baz:' === $output_2);
echo $output_2, $br;

// Sentence 3
$output_3 = $sentence->create('foo ||grinning face with big eyes|| |bar|face with tears of joy|baz|');
assert('foo |😃| |bar😂baz|' === $output_3);
echo $output_3, $br;

// It can also be used statically.
$output_4 = Sentence::createStatically($outputter, 'Hello U+1F601:grin:|beaming face with smiling eyes|!!');
assert('Hello 😁😁😁!!' === $output_4);
echo $output_4, $br;

// Sentence 5 Unsupported characters are output as is.
$gmail = SMB\Pemojine\Container::make(new SMB\Pemojine\Structure\Vendor\GMail());
$gmailOutputter = $gmail->getOutputter();
$output_5 = Sentence::createStatically($gmailOutputter, '|⊛ hippopotamus|');
assert('|⊛ hippopotamus|' === $output_5);
echo $output_5, $br;

$output_6 = $sentence->create('|⊛ hippopotamus|');
assert('🦛' === $output_6);
echo $output_6, $br;
