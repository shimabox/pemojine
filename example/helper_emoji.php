<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Helper\Emoji;

// Output by Unicode.
$output_1 = Emoji::byUnicode('U+1F3F3 U+FE0F U+200D U+1F308');
assert('🏳️‍🌈' === $output_1);
echo $output_1, $br;

// Output by Utf8String.
$output_2 = Emoji::byUnicode('\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}', $useUtf8String=true);
assert('🏳️‍🌈' === $output_2);
echo $output_2, $br;

// Convert from Unicode to HTML reference string.
$output_3 = Emoji::htmlByUnicode('U+1F3F3 U+FE0F U+200D U+1F308');
assert('&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;' === $output_3);
echo $output_3, $br;

// Convert from Unicode to HTML reference string.
$output_4 = Emoji::htmlByUnicode('\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}', $useUtf8String=true);
assert('&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;' === $output_4);
echo $output_4, $br;

// Output by ShortName.
$output_5 = Emoji::byShortName('grinning face with big eyes');
assert('😃' === $output_5);
echo $output_5, $br;

$output_6 = Emoji::byShortName('|grinning face with big eyes|');
assert('😃' === $output_6);
echo $output_6, $br;

$output_7 = Emoji::byShortName(':flag_jp:');
assert('🇯🇵' === $output_7);
echo $output_7, $br;

// Convert ShortName to HTML reference character.
$output_8 = Emoji::htmlByShortName('grinning squinting face');
assert('&#x1F606;' === $output_8);
echo $output_8, $br;

$output_9 = Emoji::htmlByShortName('|grinning squinting face|');
assert('&#x1F606;' === $output_9);
echo $output_9, $br;

$output_10 = Emoji::htmlByShortName(':flag_jp:');
assert('&#x1F1EF;&#x1F1F5;' === $output_10);
echo $output_10, $br;

// Get supported vendor by shortname.
$output_11 = Emoji::getSupportVendorByShortName('pirate flag');
assert(['Apple', 'Google', 'Twitter', 'EmojiOne', 'Facebook', 'Samsung', 'Windows'] === $output_11);
var_dump($output_11);

$output_12 = Emoji::getSupportVendorByShortName('|pirate flag|');
assert(['Apple', 'Google', 'Twitter', 'EmojiOne', 'Facebook', 'Samsung', 'Windows'] === $output_12);
var_dump($output_12);

// Get other supported vendor.
$output_13 = Emoji::getOtherSupportVendor('EmojiOne', 'pirate flag');
assert(['Apple', 'Google', 'Twitter', 'Facebook', 'Samsung', 'Windows'] === $output_13);
var_dump($output_13);

$output_14 = Emoji::getOtherSupportVendor('EmojiOne', '|pirate flag|');
assert(['Apple', 'Google', 'Twitter', 'Facebook', 'Samsung', 'Windows'] === $output_14);
var_dump($output_14);

// Confirm whether a specific vendor supports it.
$output_15 = Emoji::isSupportVendor('GMail', 'grinning face with big eyes');
assert(true === $output_15);
var_dump($output_15);

$output_16 = Emoji::isSupportVendor('GMail', '|grinning face with big eyes|');
assert(true === $output_16);
var_dump($output_16);

$output_17 = Emoji::isSupportVendor('GMail', 'pirate flag');
assert(false === $output_17);
var_dump($output_17);

// Convert emoji to Unicode.
$output_18 = Emoji::emojiToUnicode('🇯🇵');
assert('U+1F1EFU+1F1F5' === $output_18);
echo $output_18, $br;

$output_19 = Emoji::emojiToUnicode('🇯🇵', $removeBlank=false);
assert('U+1F1EF U+1F1F5' === $output_19);
echo $output_19, $br;

// Convert emoji to HTML reference character.
$output_20 = Emoji::emojiToHTML('🇯🇵');
assert('&#x1F1EF;&#x1F1F5;' === $output_20);
echo $output_20, $br;

// Convert emoji to characters encoded as UTF-8 strings.
$output_21 = Emoji::emojiToUtf8String('🇯🇵');
assert('\u{1F1EF}\u{1F1F5}' === $output_21);
echo $output_21, $br;

$output_22 = Emoji::emojiToUtf8String('🇯🇵', $removeBlank=false);
assert('\u{1F1EF} \u{1F1F5}' === $output_22);
echo $output_22, $br;

// Convert from Unicode to short name.
$output_23 = Emoji::unicodeToShortNames('U+1F1EF U+1F1F5'); // flag: Japan
assert(['flag: Japan', ':flag_jp:', ':jp:'] === $output_23);
var_dump($output_23);

$output_24 = Emoji::unicodeToShortNames('U+1F607'); // smiling face with halo
assert(['smiling face with halo', ':innocent:', 'O:-)', '0:-3','0:3', '0:-)', '0:)', '0;^)', 'O:)', 'O;-)', 'O=)', '0;-)', 'O:-3', 'O:3',] === $output_24);
var_dump($output_24);
