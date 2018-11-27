<?php

namespace SMB\Pemojine\Tests\Helper;

use SMB\Pemojine\Helper\Formatter;

/**
 * Test of SMB\Pemojine\Helper\Formatter
 * 
 * @group Pemojine
 * @group Helper
 */
class FormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provider_for_formatUnicode
     */
    public function it_can_handle_formatUnicode($unicode, $expected)
    {
        $actual = Formatter::formatUnicode($unicode);
        $this->assertSame($expected, $actual);
    }

    /**
     * @return array
     */
    public function provider_for_formatUnicode()
    {
        return [
            ['U+1F601', 'U+1F601'], // beaming face with smiling eyes
            ['u+1F601', 'U+1F601'],
            ['U+1F1EF U+1F1F5', 'U+1F1EF U+1F1F5'], // flag: Japan
            ['u+1F1EF u+1F1F5', 'U+1F1EF U+1F1F5'],
            ['U+1F1EF u+1F1F5', 'U+1F1EF U+1F1F5'],
            ['u+1F1EF U+1F1F5', 'U+1F1EF U+1F1F5'],
            ['U+1F1EFU+1F1F5',  'U+1F1EF U+1F1F5'],
            ['u+1F1EFu+1F1F5',  'U+1F1EF U+1F1F5'],
            ['U+1F3F4U+E0067 U+E0062U+E0077 U+E006C U+E0073U+E007F', 'U+1F3F4 U+E0067 U+E0062 U+E0077 U+E006C U+E0073 U+E007F'], // flag: Wales
            ['\u{1F601}', 'U+1F601'], // beaming face with smiling eyes
            ['\U{1F601}', 'U+1F601'],
            ['\u{1F1EF} \u{1F1F5}', 'U+1F1EF U+1F1F5'], // flag: Japan
            ['\U{1F1EF} \U{1F1F5}', 'U+1F1EF U+1F1F5'],
            ['\U{1F1EF} \u{1F1F5}', 'U+1F1EF U+1F1F5'],
            ['\u{1F1EF} \U{1F1F5}', 'U+1F1EF U+1F1F5'],
            ['\u{1F1EF}\u{1F1F5}',  'U+1F1EF U+1F1F5'],
            ['\U{1F1EF}\U{1F1F5}',  'U+1F1EF U+1F1F5'],
            ['\u{1F3F4}\u{E0067} \u{E0062}\u{E0077} \u{E006C} \u{E0073}\u{E007F}', 'U+1F3F4 U+E0067 U+E0062 U+E0077 U+E006C U+E0073 U+E007F'], // flag: Wales
            ['U+ a u+1F1EF b U+1F1F5 c', 'U+1F1EF U+1F1F5'],
            ['a \u b \U{1F1EF} c \u{1F1F5}', 'U+1F1EF U+1F1F5'],
            ['U+',   ''],
            ['u+',   ''],
            ['\u{',  ''],
            ['\u{}', ''],
            ['\U{',  ''],
            ['\U{}', ''],
            ['',     ''],
            [null,   ''],
        ];
    }
}
