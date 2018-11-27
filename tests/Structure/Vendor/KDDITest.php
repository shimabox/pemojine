<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\KDDI;

/**
 * Test of SMB\Pemojine\Structure\Vendor\KDDI
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class KDDITest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var KDDI
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new KDDI();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'KDDI';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            KDDI\SmileysEmotion::class,
            KDDI\PeopleBody::class,
            KDDI\AnimalsNature::class,
            KDDI\FoodDrink::class,
            KDDI\TravelPlaces::class,
            KDDI\Activities::class,
            KDDI\Objects::class,
            KDDI\Symbols::class,
            KDDI\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = KDDI\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
