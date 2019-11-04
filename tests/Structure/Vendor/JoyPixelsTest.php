<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\JoyPixels;

/**
 * Test of SMB\Pemojine\Structure\Vendor\JoyPixels
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class JoyPixelsTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var JoyPixels
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new JoyPixels();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'JoyPixels';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            JoyPixels\SmileysEmotion::class,
            JoyPixels\PeopleBody::class,
            JoyPixels\Component::class,
            JoyPixels\AnimalsNature::class,
            JoyPixels\FoodDrink::class,
            JoyPixels\TravelPlaces::class,
            JoyPixels\Activities::class,
            JoyPixels\Objects::class,
            JoyPixels\Symbols::class,
            JoyPixels\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = JoyPixels\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
