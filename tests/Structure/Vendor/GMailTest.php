<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\GMail;

/**
 * Test of SMB\Pemojine\Structure\Vendor\GMail
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class GMailTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var GMail
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new GMail();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'GMail';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            GMail\SmileysEmotion::class,
            GMail\PeopleBody::class,
            GMail\AnimalsNature::class,
            GMail\FoodDrink::class,
            GMail\TravelPlaces::class,
            GMail\Activities::class,
            GMail\Objects::class,
            GMail\Symbols::class,
            GMail\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = GMail\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
