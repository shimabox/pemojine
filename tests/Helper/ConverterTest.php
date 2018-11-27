<?php

namespace SMB\Pemojine\Tests\Helper;

use SMB\Pemojine\Helper\Converter;

/**
 * Test of SMB\Pemojine\Helper\Converter
 * 
 * @group Pemojine
 * @group Helper
 */
class ConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provider_for_toEmojiByUnicode
     */
    public function it_can_handle_toEmojiByUnicode($unicode, $expected)
    {
        $actual = Converter::toEmojiByUtf8String($unicode);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_toEmojiByUnicode()
    {
        return [
            ['U+1F601', '😁'],
            ['u+1f601', '😁'],
            ['U+1F3F3 U+FE0F U+200D U+1F308', '🏳️‍🌈'],
            ['u+1f3f3 u+fe0f u+200d u+1f308', '🏳️‍🌈'],
            ['U+1F3F3U+FE0FU+200DU+1F308', '🏳️‍🌈'],
            ['u+1f3f3u+fe0fu+200du+1f308', '🏳️‍🌈'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_toHtmlByUnicode
     */
    public function it_can_handle_toHtmlByUnicode($unicode, $expected)
    {
        $actual = Converter::toHtmlByUtf8String($unicode);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_toHtmlByUnicode()
    {
        return [
            ['U+1F601', '&#x1F601;'],
            ['u+1f601', '&#x1F601;'],
            ['U+1F3F3 U+FE0F U+200D U+1F308', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['u+1f3f3 u+fe0f u+200d u+1f308', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['U+1F3F3U+FE0FU+200DU+1F308', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['u+1f3f3u+fe0fu+200du+1f308', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_toEmojiByUtf8String
     */
    public function it_can_handle_toEmojiByUtf8String($utf8String, $expected)
    {
        $actual = Converter::toEmojiByUtf8String($utf8String);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_toEmojiByUtf8String()
    {
        return [
            ['\u{1F601}', '😁'],
            ['\U{1f601}', '😁'],
            ['\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}', '🏳️‍🌈'],
            ['\U{1f3f3} \U{fe0f} \U{200d} \U{1f308}', '🏳️‍🌈'],
            ['\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}', '🏳️‍🌈'],
            ['\U{1f3f3}\U{fe0f}\U{200d}\U{1f308}', '🏳️‍🌈'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_toHtmlByUtf8String
     */
    public function it_can_handle_toHtmlByUtf8String($utf8String, $expected)
    {
        $actual = Converter::toHtmlByUtf8String($utf8String);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_toHtmlByUtf8String()
    {
        return [
            ['\u{1F601}', '&#x1F601;'],
            ['\U{1f601}', '&#x1F601;'],
            ['\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\U{1f3f3} \U{fe0f} \U{200d} \U{1f308}', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
            ['\U{1f3f3}\U{fe0f}\U{200d}\U{1f308}', '&#x1F3F3;&#xFE0F;&#x200D;&#x1F308;'],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_toUtf8StringFromUnicode
     */
    public function it_can_handle_toUtf8StringFromUnicode($unicode, $expected)
    {
        $actual = Converter::toUtf8StringFromUnicode($unicode);
        $this->assertSame($expected, $actual);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_toUtf8StringFromUnicode()
    {
        return [
            ['U+1F601', '\u{1F601}'],
            ['u+1f601', '\u{1F601}'],
            ['U+1F3F3 U+FE0F U+200D U+1F308', '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'],
            ['u+1f3f3 u+fe0f u+200d u+1f308', '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'],
            ['U+1F3F3U+FE0FU+200DU+1F308', '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'],
            ['u+1f3f3u+fe0fu+200du+1f308', '\u{1F3F3} \u{FE0F} \u{200D} \u{1F308}'],
            ['\u{1F601}', '\u{1F601}'],
            ['\U{1f601}', '\U{1f601}'],
            ['U+ a u+1F1EF b U+1F1F5 c', '\u{1F1EF} \u{1F1F5}'],
            ['a \u b \U{1F1EF} c \u{1F1F5}', 'a \u b \U{1F1EF} c \u{1F1F5}'],
            ['U+', 'U+'],
            ['u+', 'u+'],
            ['', ''],
            [0, 0],
            [null, null],
        ];
    }
}
