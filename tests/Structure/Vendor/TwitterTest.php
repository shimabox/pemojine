<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Twitter;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Twitter
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class TwitterTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Twitter
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Twitter();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Twitter';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Twitter\SmileysEmotion::class,
            Twitter\PeopleBody::class,
            Twitter\Component::class,
            Twitter\AnimalsNature::class,
            Twitter\FoodDrink::class,
            Twitter\TravelPlaces::class,
            Twitter\Activities::class,
            Twitter\Objects::class,
            Twitter\Symbols::class,
            Twitter\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Twitter\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
