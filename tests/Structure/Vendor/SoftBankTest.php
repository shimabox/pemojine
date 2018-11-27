<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\SoftBank;

/**
 * Test of SMB\Pemojine\Structure\Vendor\SoftBank
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class SoftBankTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var SoftBank
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new SoftBank();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'SoftBank';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            SoftBank\SmileysEmotion::class,
            SoftBank\PeopleBody::class,
            SoftBank\AnimalsNature::class,
            SoftBank\FoodDrink::class,
            SoftBank\TravelPlaces::class,
            SoftBank\Activities::class,
            SoftBank\Objects::class,
            SoftBank\Symbols::class,
            SoftBank\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = SoftBank\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
