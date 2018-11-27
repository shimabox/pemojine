<?php

namespace SMB\Pemojine\Tests\Structure\Vendor;

use SMB\Pemojine\Structure\Vendor\Facebook;

/**
 * Test of SMB\Pemojine\Structure\Vendor\Facebook
 * 
 * @group Pemojine
 * @group Structure
 * @group Vendor
 */
class FacebookTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Facebook
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Facebook();
    }

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Facebook';
        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameListOfStructure()
    {
        $expected = [
            Facebook\SmileysEmotion::class,
            Facebook\PeopleBody::class,
            Facebook\Component::class,
            Facebook\AnimalsNature::class,
            Facebook\FoodDrink::class,
            Facebook\TravelPlaces::class,
            Facebook\Activities::class,
            Facebook\Objects::class,
            Facebook\Symbols::class,
            Facebook\Flags::class,
        ];

        $this->assertSame($expected, $this->target->getClassNameListOfStructure());
    }

    /**
     * @test
     */
    public function it_can_handle_getClassNameOfEmojiTable()
    {
        $expected = Facebook\EmojiTable::class;
        $this->assertSame($expected, $this->target->getClassNameOfEmojiTable());
    }
}
