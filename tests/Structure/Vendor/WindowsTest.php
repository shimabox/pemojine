<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Windows;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Windows
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class WindowsTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Windows
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Windows();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Windows';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Windows\SmileysEmotion::class,
            Windows\PeopleBody::class,
            Windows\Component::class,
            Windows\AnimalsNature::class,
            Windows\FoodDrink::class,
            Windows\TravelPlaces::class,
            Windows\Activities::class,
            Windows\Objects::class,
            Windows\Symbols::class,
            Windows\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Windows\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
