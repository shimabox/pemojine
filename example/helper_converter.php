<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Helper\Converter;

// Convert from Unicode to Emoji.
$output_1 = Converter::toEmojiByUnicode('U+1F3F3 U+FE0F U+200D U+1F308'); // rainbow flag
assert('🏳️‍🌈' === $output_1);
echo $output_1, $br;

// Convert from Unicode to HTML reference character.
$output_2 = Converter::toHtmlByUnicode('U+1F3F3 U+FE0F U+200D U+1F308'); // rainbow flag
assert('&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;' === $output_2);
echo $output_2, $br;

// Convert from Utf8String to Emoji.
$output_3 = Converter::toEmojiByUtf8String('\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'); // rainbow flag
assert('🏳️‍🌈' === $output_3);
echo $output_3, $br;

// Convert from Utf8String to HTML reference string.
$output_4 = Converter::toHtmlByUtf8String('\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'); // rainbow flag
assert('&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;' === $output_4);
echo $output_4, $br;

// Convert from Unicode to Utf8String.
$output_5 = Converter::toUtf8StringFromUnicode('U+1F3F3 U+FE0F U+200D U+1F308'); // rainbow flag
assert('\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}' === $output_5);
echo $output_5, $br;
