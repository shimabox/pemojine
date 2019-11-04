<?php

namespace SMB\Pemojine\Tests\Helper;

use SMB\Pemojine\Helper\Emoji;

/**
 * Test of SMB\Pemojine\Helper\Emoji
 * 
 * @group Pemojine
 * @group Helper
 */
class EmojiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provider_for_byUnicode
     */
    public function it_can_handle_byUnicode($unicode, $useUtf8String, $expected)
    {
        $actual = Emoji::byUnicode($unicode, $useUtf8String);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_byUnicode()
    {
        return [
            ['U+1F601',   false, '😁'],
            ['u+1f601',   false, '😁'],
            ['\u{1F601}', true,  '😁'],
            ['\U{1f601}', true,  '😁'],
            ['U+1F3F3 U+FE0F U+200D U+1F308',         false, '🏳️‍🌈'],
            ['u+1f3f3 u+fe0f u+200d u+1f308',         false, '🏳️‍🌈'],
            ['U+1F3F3U+FE0FU+200DU+1F308',            false, '🏳️‍🌈'],
            ['u+1f3f3u+fe0fu+200du+1f308',            false, '🏳️‍🌈'],
            ['\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}', true,  '🏳️‍🌈'],
            ['\U{1f3f3} \U{fe0f} \U{200d} \U{1f308}', true,  '🏳️‍🌈'],
            ['\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}',    true,  '🏳️‍🌈'],
            ['\U{1f3f3}\U{fe0f}\U{200d}\U{1f308}',    true,  '🏳️‍🌈'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_htmlByUnicode
     */
    public function it_can_handle_htmlByUnicode($unicode, $useUtf8String, $expected)
    {
        $actual = Emoji::htmlByUnicode($unicode, $useUtf8String);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_htmlByUnicode()
    {
        return [
            ['U+1F601',   false, '&#x1F601;'],
            ['u+1f601',   false, '&#x1F601;'],
            ['\u{1F601}', true,  '&#x1F601;'],
            ['\U{1f601}', true,  '&#x1F601;'],
            ['U+1F3F3 U+FE0F U+200D U+1F308',         false, '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['u+1f3f3 u+fe0f u+200d u+1f308',         false, '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['U+1F3F3U+FE0FU+200DU+1F308',            false, '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['u+1f3f3u+fe0fu+200du+1f308',            false, '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}', true,  '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\U{1f3f3} \U{fe0f} \U{200d} \U{1f308}', true,  '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}',    true,  '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\U{1f3f3}\U{fe0f}\U{200d}\U{1f308}',    true,  '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_output_emoji_byShortName
     */
    public function it_can_output_emoji_byShortName($shortName, $expected)
    {
        $actual = Emoji::byShortName($shortName);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_output_emoji_byShortName()
    {
        return [
            ['grinning face with big eyes',   '😃'],
            ['|grinning face with big eyes|', '😃'],
            [':smiley:',                      '😃'],
            ['|:smiley:|',                    '😃'],
            [':-D',                           '😃'],
            ['=D',                            '😃'],
            [':D',                            '😄'], // grinning face with smiling eyes
            ['|:D|',                          '😄'],
            ['flag: Japan',                   '🇯🇵'],
            ['|flag: Japan|',                 '🇯🇵'],
            [':flag_jp:',                     '🇯🇵'],
            [':jp:',                          '🇯🇵'],
            ['',                              ''],
            [0,                               ''],
            [null,                            ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_output_emoji_htmlByShortName
     */
    public function it_can_output_emoji_htmlByShortName($shortName, $expected)
    {
        $actual = Emoji::htmlByShortName($shortName);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_output_emoji_htmlByShortName()
    {
        return [
            ['grinning squinting face',   '&#x1F606;'],
            ['|grinning squinting face|', '&#x1F606;'],
            [':laughing:',                '&#x1F606;'],
            ['|:laughing:|',              '&#x1F606;'],
            [':satisfied:',               '&#x1F606;'],
            ['>:)',                       '&#x1F606;'],
            ['|>:)|',                     '&#x1F606;'],
            [':\')',                      '&#x1F602;'],
            ['flag: Japan',               '&#x1F1EF;&#x1F1F5;'],
            ['|flag: Japan|',             '&#x1F1EF;&#x1F1F5;'],
            [':flag_jp:',                 '&#x1F1EF;&#x1F1F5;'],
            [':jp:',                      '&#x1F1EF;&#x1F1F5;'],
            ['',                          ''],
            [0,                           ''],
            [null,                        ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_getSupportVendorByShortName
     */
    public function it_can_getSupportVendorByShortName($shortName, $expected)
    {
        $actual = Emoji::getSupportVendorByShortName($shortName);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_getSupportVendorByShortName()
    {
        return [
            ['grinning face with big eyes',   ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['|grinning face with big eyes|', ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            [':smiley:',                      ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['|:smiley:|',                    ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            [':D',                            ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank']],
            ['|:D|',                          ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank']],
            [':-D',                           ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['=D',                            ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            [':\')',                          ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'KDDI']],
            ['grinning squinting face',       ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            [':laughing:',                    ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            [':satisfied:',                   ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            ['>:)',                           ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            ['pirate flag',                   ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows']],
            ['',                              []],
            [0,                               []],
            [null,                            []],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_getOtherSupportVendor
     */
    public function it_can_getOtherSupportVendor($specifiedVendorName, $shortName, $expected)
    {
        $actual = Emoji::getOtherSupportVendor($specifiedVendorName, $shortName);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_getOtherSupportVendor()
    {
        return [
            ['Apple',    'grinning face with big eyes',   ['Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['Apple',    '|grinning face with big eyes|', ['Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['Google',   ':smiley:',                      ['Apple', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['Google',   '|:smiley:|',                    ['Apple', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI']],
            ['Twitter',  ':D',                            ['Apple', 'Google', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank']],
            ['Twitter',  '|:D|',                          ['Apple', 'Google', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank']],
            ['KDDI',     ':-D',                           ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo']],
            ['DoCoMo',   '=D',                            ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'KDDI']],
            ['Apple',    'grinning squinting face',       ['Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            ['Google',   ':laughing:',                    ['Apple', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            ['Twitter',  ':satisfied:',                   ['Apple', 'Google', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo']],
            ['SoftBank', ':\')',                          ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'KDDI']],
            ['GMail',    '>:)',                           ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'DoCoMo']],
            ['JoyPixels', 'pirate flag',                   ['Apple', 'Google', 'Twitter', 'Facebook', 'Samsung', 'Windows']],
            ['GMail',    'pirate flag',                   ['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows']],
            ['Apple',    '',                              []],
            ['Google',   0,                               []],
            ['Twitter',  null,                            []],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_isSupportVendor
     */
    public function it_can_handle_isSupportVendor($specifiedVendorNames, $shortName, $expected)
    {
        foreach ($specifiedVendorNames as $specifiedVendorName) {
            $actual = Emoji::isSupportVendor($specifiedVendorName, $shortName);
            $this->assertSame($expected, $actual);
        }
    }

    /**
     * 
     * @return array
     */
    public function provider_for_isSupportVendor()
    {
        return [
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI'], 'grinning face with big eyes', true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI'], ':smiley:',                    true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank'],                   ':D',                          true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI'], ':-D',                         true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'DoCoMo', 'KDDI'], '=D',                          true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'SoftBank', 'KDDI'],           ':\')',                        true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo'],                     'grinning squinting face',     true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo'],                     ':laughing:',                  true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo'],                     ':satisfied:',                 true],
            [['Apple', 'Google', 'Twitter', 'JoyPixels', 'Facebook', 'Samsung', 'Windows', 'GMail', 'DoCoMo'],                     '>:)',                         true],
            [['Google', 'Twitter', 'JoyPixels', 'Windows'],                                                                        'pirate flag',                 true],
            [['hoge', '', 0, null],                                                                                               'grinning face with big eyes', false],
            [['hoge', '', 0, null],                                                                                               'grinning squinting face',     false],
            [['hoge', '', 0, null],                                                                                               'pirate flag',                 false],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_emojiToUnicode
     */
    public function it_can_emojiToUnicode($emoji, $removeBlank, $expected)
    {
        $actual = Emoji::emojiToUnicode($emoji, $removeBlank);
        $this->assertSame($expected, $actual);
    }

    /**
     * @return array
     */
    public function provider_for_emojiToUnicode()
    {
        return [
            ['😁', true,  'U+1F601'], // beaming face with smiling eyes
            ['😁', false, 'U+1F601'],
            ['🇯🇵', true,  'U+1F1EFU+1F1F5'], // flag: Japan
            ['🇯🇵', false, 'U+1F1EF U+1F1F5'],
            ['🏳️‍🌈', true,  'U+1F3F3U+FE0FU+200DU+1F308'], // rainbow flag
            ['🏳️‍🌈', false, 'U+1F3F3 U+FE0F U+200D U+1F308'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_emojiToHtml
     */
    public function it_can_emojiToHtml($emoji, $expected)
    {
        $actual = Emoji::emojiToHtml($emoji);
        $this->assertSame($expected, $actual);
    }

    /**
     * @return array
     */
    public function provider_for_emojiToHtml()
    {
        return [
            ['😁', '&#x1F601;'], // beaming face with smiling eyes
            ['🇯🇵', '&#x1F1EF;&#x1F1F5;'], // flag: Japan
            ['🏳️‍🌈', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'], // rainbow flag
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_emojiToUtf8String
     */
    public function it_can_emojiToUtf8String($emoji, $removeBlank, $expected)
    {
        $actual = Emoji::emojiToUtf8String($emoji, $removeBlank);
        $this->assertSame($expected, $actual);
    }

    /**
     * @return array
     */
    public function provider_for_emojiToUtf8String()
    {
        return [
            ['😁', true,  '\u{1F601}'], // beaming face with smiling eyes
            ['😁', false, '\u{1F601}'],
            ['🇯🇵', true,  '\u{1F1EF}\u{1F1F5}'], // flag: Japan
            ['🇯🇵', false, '\u{1F1EF} \u{1F1F5}'],
            ['🏳️‍🌈', true,  '\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}'], // rainbow flag
            ['🏳️‍🌈', false, '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_unicodeToShortNames
     */
    public function it_can_unicodeToShortNames($unicode, $expected)
    {
        $actual = Emoji::unicodeToShortNames($unicode);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_unicodeToShortNames()
    {
        return [
            ['U+1F601',             ['beaming face with smiling eyes', ':grin:']],
            ['u+1f601',             ['beaming face with smiling eyes', ':grin:']],
            ['\u{1F601}',           ['beaming face with smiling eyes', ':grin:']],
            ['\U{1f601}',           ['beaming face with smiling eyes', ':grin:']],
            ['u+1F970',             ['smiling face with hearts', ':smiling_face_with_3_hearts:']],
            ['\U{1F970}',           ['smiling face with hearts', ':smiling_face_with_3_hearts:']],
            ['U+1F1EF U+1F1F5',     ['flag: Japan', ':flag_jp:', ':jp:']],
            ['u+1f1ef u+1f1f5',     ['flag: Japan', ':flag_jp:', ':jp:']],
            ['\u{1F1EF} \u{1F1F5}', ['flag: Japan', ':flag_jp:', ':jp:']],
            ['\U{1f1ef} \U{1f1f5}', ['flag: Japan', ':flag_jp:', ':jp:']],
            ['U+1F1EFU+1F1F5',      ['flag: Japan', ':flag_jp:', ':jp:']],
            ['u+1f1efu+1f1f5',      ['flag: Japan', ':flag_jp:', ':jp:']],
            ['\u{1F1EF}\u{1F1F5}',  ['flag: Japan', ':flag_jp:', ':jp:']],
            ['\U{1f1ef}\U{1f1f5}',  ['flag: Japan', ':flag_jp:', ':jp:']],
            ['U+',                  []],
            ['u+',                  []],
            ['\u',                  []],
            ['\U',                  []],
            ['U+ u+',               []],
            ['\u \U',               []],
            ['',                    []],
            [0,                     []],
            [null,                  []],
        ];
    }
}
