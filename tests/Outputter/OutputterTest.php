<?php

namespace SMB\Pemojine\Tests\Outputter;

use SMB\Pemojine\Outputter\Outputter;

/**
 * Test of SMB\Pemojine\Outputter\Outputter
 * 
 * @group Pemojine
 * @group Outputter
 */
class OutputterTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Outputter
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        // Create an EmojiTable instance of Apple.
        $emojiTable = new \SMB\Pemojine\Structure\Vendor\Apple\EmojiTable();

        $this->target = new Outputter($emojiTable);
    }

    /**
     * @test
     * @dataProvider provider_for_output
     */
    public function it_can_handle_output($name, $expected)
    {
        $this->assertSame($expected, $this->target->output($name));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_output()
    {
        return [
            ['flag: Japan',              '🇯🇵'],
            [':wales:',                  '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['grinning face with sweat', '😅'],
            [':sweat_smile:',            '😅'],
            ['\':)',                     '😅'],
            ['hoge',                     ''],
            ['',                         ''],
            [0,                          ''],
            [null,                       ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_outputHtml
     */
    public function it_can_handle_outputHtml($name, $expected)
    {
        $this->assertSame($expected, $this->target->outputHtml($name));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_outputHtml()
    {
        return [
            ['flag: Japan',              '&#x1F1EF;&#x1F1F5;'],
            [':wales:',                  '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['grinning face with sweat', '&#x1F605;'],
            [':sweat_smile:',            '&#x1F605;'],
            ['\':)',                     '&#x1F605;'],
            ['hoge',                     ''],
            ['',                         ''],
            [0,                          ''],
            [null,                       ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_outputByUnicode
     */
    public function it_can_handle_outputByUnicode($unicode, $expected)
    {
        $this->assertSame($expected, $this->target->outputByUnicode($unicode));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_outputByUnicode()
    {
        return [
            ['U+1F605',   '😅'], // grinning face with sweat
            ['u+1F605',   '😅'],
            ['\u{1F605}', '😅'],
            ['\U{1F605}', '😅'],
            ['U+1F1EF U+1F1F5',     '🇯🇵'], // flag: Japan
            ['U+1F1EFU+1F1F5',      '🇯🇵'],
            ['u+1F1EF u+1F1F5',     '🇯🇵'],
            ['u+1F1EFu+1F1F5',      '🇯🇵'],
            ['\u{1F1EF} \u{1F1F5}', '🇯🇵'],
            ['\u{1F1EF}\u{1F1F5}',  '🇯🇵'],
            ['\U{1F1EF} \U{1F1F5}', '🇯🇵'],
            ['\U{1F1EF}\U{1F1F5}',  '🇯🇵'],
            ['U+1F3F4 U+E0067 U+E0062 U+E0077 U+E006C U+E0073 U+E007F',               '🏴󠁧󠁢󠁷󠁬󠁳󠁿'], // flag: Wales
            ['u+1f3f4 u+e0067 u+e0062 u+e0077 u+e006c u+e0073 u+e007f',               '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['U+1F3F4U+E0067U+E0062U+E0077U+E006CU+E0073U+E007F',                     '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['u+1f3f4u+e0067u+e0062u+e0077u+e006cu+e0073u+e007f',                     '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['\u{1F3F4} \u{E0067} \u{e0062} \u{e0077} \u{e006C} \u{e0073} \u{e007F}', '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['\u{1F3F4}\u{E0067}\u{e0062}\u{e0077}\u{e006C}\u{e0073}\u{e007F}',       '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['\U{1F3F4} \U{E0067} \U{E0062} \U{E0077} \U{E006C} \U{E0073} \U{E007F}', '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['\U{1F3F4}\U{E0067}\U{E0062}\U{E0077}\U{E006C}\U{E0073}\U{E007F}',       '🏴󠁧󠁢󠁷󠁬󠁳󠁿'],
            ['hoge', ''],
            ['',     ''],
            [0,      ''],
            [null,   ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_outputHtmlByUnicode
     */
    public function it_can_handle_outputHtmlByUnicode($unicode, $expected)
    {
        $this->assertSame($expected, $this->target->outputHtmlByUnicode($unicode));
    }

    /**
     * 
     * @return array
     */
    public function provider_for_outputHtmlByUnicode()
    {
        return [
            ['U+1F605',   '&#x1F605;'], // grinning face with sweat
            ['u+1F605',   '&#x1F605;'],
            ['\u{1F605}', '&#x1F605;'],
            ['\U{1F605}', '&#x1F605;'],
            ['U+1F1EF U+1F1F5',     '&#x1F1EF;&#x1F1F5;'], // flag: Japan
            ['U+1F1EFU+1F1F5',      '&#x1F1EF;&#x1F1F5;'],
            ['u+1F1EF u+1F1F5',     '&#x1F1EF;&#x1F1F5;'],
            ['u+1F1EFu+1F1F5',      '&#x1F1EF;&#x1F1F5;'],
            ['\u{1F1EF} \u{1F1F5}', '&#x1F1EF;&#x1F1F5;'],
            ['\u{1F1EF}\u{1F1F5}',  '&#x1F1EF;&#x1F1F5;'],
            ['\U{1F1EF} \U{1F1F5}', '&#x1F1EF;&#x1F1F5;'],
            ['\U{1F1EF}\U{1F1F5}',  '&#x1F1EF;&#x1F1F5;'],
            ['U+1F3F4 U+E0067 U+E0062 U+E0077 U+E006C U+E0073 U+E007F',               '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'], // flag: Wales
            ['u+1f3f4 u+e0067 u+e0062 u+e0077 u+e006c u+e0073 u+e007f',               '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['U+1F3F4U+E0067U+E0062U+E0077U+E006CU+E0073U+E007F',                     '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['u+1f3f4u+e0067u+e0062u+e0077u+e006cu+e0073u+e007f',                     '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['\u{1F3F4} \u{E0067} \u{e0062} \u{e0077} \u{e006C} \u{e0073} \u{e007F}', '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['\u{1F3F4}\u{E0067}\u{e0062}\u{e0077}\u{e006C}\u{e0073}\u{e007F}',       '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['\U{1F3F4} \U{E0067} \U{E0062} \U{E0077} \U{E006C} \U{E0073} \U{E007F}', '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['\U{1F3F4}\U{E0067}\U{E0062}\U{E0077}\U{E006C}\U{E0073}\U{E007F}',       '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;'],
            ['hoge', ''],
            ['',     ''],
            [0,      ''],
            [null,   ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_getUnicode
     */
    public function it_can_handle_getUnicode($name, $expected)
    {
        $this->assertSame($expected, $this->target->getUnicode($name));
    }

    /**
     *
     * @return array
     */
    public function provider_for_getUnicode()
    {
        return [
            ['flag: Japan',              'U+1F1EF U+1F1F5'],
            [':wales:',                  'U+1F3F4 U+E0067 U+E0062 U+E0077 U+E006C U+E0073 U+E007F'],
            ['grinning face with sweat', 'U+1F605'],
            [':sweat_smile:',            'U+1F605'],
            ['\':)',                     'U+1F605'],
            ['hoge',                     ''],
            ['',                         ''],
            [0,                          ''],
            [null,                       ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_getUnicodeWithRemovedBlank
     */
    public function it_can_handle_getUnicodeWithRemovedBlank($name, $expected)
    {
        $this->assertSame($expected, $this->target->getUnicodeWithRemovedBlank($name));
    }

    /**
     *
     * @return array
     */
    public function provider_for_getUnicodeWithRemovedBlank()
    {
        return [
            ['flag: Japan',              'U+1F1EFU+1F1F5'],
            [':wales:',                  'U+1F3F4U+E0067U+E0062U+E0077U+E006CU+E0073U+E007F'],
            ['grinning face with sweat', 'U+1F605'],
            [':sweat_smile:',            'U+1F605'],
            ['\':)',                     'U+1F605'],
            ['hoge',                     ''],
            ['',                         ''],
            [0,                          ''],
            [null,                       ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_getUtf8String
     */
    public function it_can_handle_getUtf8String($name, $expected)
    {
        $this->assertSame($expected, $this->target->getUtf8String($name));
    }

    /**
     *
     * @return array
     */
    public function provider_for_getUtf8String()
    {
        return [
            ['flag: Japan',              '\u{1F1EF} \u{1F1F5}'],
            [':wales:',                  '\u{1F3F4} \u{E0067} \u{E0062} \u{E0077} \u{E006C} \u{E0073} \u{E007F}'],
            ['grinning face with sweat', '\u{1F605}'],
            [':sweat_smile:',            '\u{1F605}'],
            ['\':)',                     '\u{1F605}'],
            ['hoge',                     ''],
            ['',                         ''],
            [0,                          ''],
            [null,                       ''],
        ];
    }

    /**
     * @test
     * @dataProvider provider_for_getUtf8StringWithRemovedBlank
     */
    public function it_can_handle_getUtf8StringWithRemovedBlank($name, $expected)
    {
        $this->assertSame($expected, $this->target->getUtf8StringWithRemovedBlank($name));
    }

    /**
     *
     * @return array
     */
    public function provider_for_getUtf8StringWithRemovedBlank()
    {
        return [
            ['flag: Japan',              '\u{1F1EF}\u{1F1F5}'],
            [':wales:',                  '\u{1F3F4}\u{E0067}\u{E0062}\u{E0077}\u{E006C}\u{E0073}\u{E007F}'],
            ['grinning face with sweat', '\u{1F605}'],
            [':sweat_smile:',            '\u{1F605}'],
            ['\':)',                     '\u{1F605}'],
            ['hoge',                     ''],
            ['',                         ''],
            [0,                          ''],
            [null,                       ''],
        ];
    }
}
