<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\DoCoMo;

/**
 * Test of SMB\Pemojine\Structure\Vendor\DoCoMo
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class DoCoMoTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var DoCoMo
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new DoCoMo();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'DoCoMo';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            DoCoMo\SmileysEmotion::class,
            DoCoMo\PeopleBody::class,
            DoCoMo\AnimalsNature::class,
            DoCoMo\FoodDrink::class,
            DoCoMo\TravelPlaces::class,
            DoCoMo\Activities::class,
            DoCoMo\Objects::class,
            DoCoMo\Symbols::class,
            DoCoMo\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = DoCoMo\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
