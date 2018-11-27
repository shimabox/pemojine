<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Common;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Common
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class CommonTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Common
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Common();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Common';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Common\SmileysEmotion::class,
            Common\PeopleBody::class,
            Common\AnimalsNature::class,
            Common\FoodDrink::class,
            Common\TravelPlaces::class,
            Common\Activities::class,
            Common\Objects::class,
            Common\Symbols::class,
            Common\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Common\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
