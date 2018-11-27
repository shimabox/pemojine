<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\EmojiOne;

/**
 * Test of SMB\Pemojine\Structure\Vendor\EmojiOne
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class EmojiOneTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var EmojiOne
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new EmojiOne();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'EmojiOne';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            EmojiOne\SmileysEmotion::class,
            EmojiOne\PeopleBody::class,
            EmojiOne\Component::class,
            EmojiOne\AnimalsNature::class,
            EmojiOne\FoodDrink::class,
            EmojiOne\TravelPlaces::class,
            EmojiOne\Activities::class,
            EmojiOne\Objects::class,
            EmojiOne\Symbols::class,
            EmojiOne\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = EmojiOne\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
