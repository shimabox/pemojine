<?php

namespace SMB\Pemojine\Tests\Helper;

use SMB\Pemojine\Helper\EmojiCounter;

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Structure\Vendor;

/**
 * Test of SMB\Pemojine\Helper\EmojiCounter
 * 
 * @group Pemojine
 * @group Helper
 */
class EmojiCounterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_can_handle_getBigGroupCount()
    {
        $actual = EmojiCounter::getBigGroupCount();
        $this->assertSame(10, $actual);
    }

    /**
     * @test
     */
    public function it_can_handle_getMediumGroupCount()
    {
        $actual = EmojiCounter::getMediumGroupCount();
        $this->assertSame(97, $actual);
    }

    /**
     * @test
     */
    public function it_can_handle_getGroupCount()
    {
        $actual = EmojiCounter::getGroupCount();
        $this->assertSame(2789, $actual);
    }

    /**
     * @test
     */
    public function it_can_handle_getCoverageOfBigGroup()
    {
        $kddi = PemojineContainer::make(new Vendor\KDDI());
        $actual = EmojiCounter::getCoverageOfBigGroup($kddi);

        $this->assertSame('9 / 10', $actual->formula);
        $this->assertSame(90, $actual->value);
    }

    /**
     * @test
     */
    public function it_can_handle_getCoverageOfMediumGroup()
    {
        $google = PemojineContainer::make(new Vendor\Google());
        $actual = EmojiCounter::getCoverageOfMediumGroup($google);

        $this->assertSame('97 / 97', $actual->formula);
        $this->assertSame(100, $actual->value);
    }

    /**
     * @test
     */
    public function it_can_handle_getCoverageOfGroup()
    {
        $gmail = PemojineContainer::make(new Vendor\GMail());
        $actual = EmojiCounter::getCoverageOfGroup($gmail);

        $this->assertSame('713 / 2789', $actual->formula);
        $this->assertSame(25.6, $actual->value);
    }
}
