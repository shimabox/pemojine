<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Apple;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Apple
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class AppleTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Apple
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Apple();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Apple';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Apple\SmileysEmotion::class,
            Apple\PeopleBody::class,
            Apple\Component::class,
            Apple\AnimalsNature::class,
            Apple\FoodDrink::class,
            Apple\TravelPlaces::class,
            Apple\Activities::class,
            Apple\Objects::class,
            Apple\Symbols::class,
            Apple\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Apple\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
