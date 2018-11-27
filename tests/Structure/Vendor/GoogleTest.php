<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Google;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Google
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class GoogleTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Google
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Google();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Google';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Google\SmileysEmotion::class,
            Google\PeopleBody::class,
            Google\Component::class,
            Google\AnimalsNature::class,
            Google\FoodDrink::class,
            Google\TravelPlaces::class,
            Google\Activities::class,
            Google\Objects::class,
            Google\Symbols::class,
            Google\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Google\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
