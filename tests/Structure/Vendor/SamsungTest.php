<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Samsung;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Samsung
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class SamsungTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Samsung
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Samsung();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Samsung';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Samsung\SmileysEmotion::class,
            Samsung\PeopleBody::class,
            Samsung\Component::class,
            Samsung\AnimalsNature::class,
            Samsung\FoodDrink::class,
            Samsung\TravelPlaces::class,
            Samsung\Activities::class,
            Samsung\Objects::class,
            Samsung\Symbols::class,
            Samsung\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Samsung\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
