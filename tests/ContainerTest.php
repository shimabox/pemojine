<?php
namespace SMB\Pemojine\Tests;

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Structure\Vendor;

/**
 * Test of SMB\Pemojine\Container
 * 
 * @group Pemojine
 * @group Container
 */
class ContainerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_is_a_singleton()
    {
        $pemojine  = PemojineContainer::make(new Vendor\Apple());
        $pemojine2 = PemojineContainer::make(new Vendor\Apple());

        $this->assertSame($pemojine, $pemojine2);
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_Apple()
    {
        $pemojine = PemojineContainer::make(new Vendor\Apple());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('Apple', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_Google()
    {
        $pemojine = PemojineContainer::make(new Vendor\Google());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('Google', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_Twitter()
    {
        $pemojine = PemojineContainer::make(new Vendor\Twitter());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('Twitter', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_EmojiOne()
    {
        $pemojine = PemojineContainer::make(new Vendor\EmojiOne());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('EmojiOne', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_Facebook()
    {
        $pemojine = PemojineContainer::make(new Vendor\Facebook());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('Facebook', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_Samsung()
    {
        $pemojine = PemojineContainer::make(new Vendor\Samsung());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('Samsung', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_Windows()
    {
        $pemojine = PemojineContainer::make(new Vendor\Windows());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('Windows', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_GMail()
    {
        $pemojine = PemojineContainer::make(new Vendor\GMail());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('GMail', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_SoftBank()
    {
        $pemojine = PemojineContainer::make(new Vendor\SoftBank());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('SoftBank', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_DoCoMo()
    {
        $pemojine = PemojineContainer::make(new Vendor\DoCoMo());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('DoCoMo', $pemojine->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_create_containers_for_KDDI()
    {
        $pemojine = PemojineContainer::make(new Vendor\KDDI());

        $this->assertInstanceOf('\SMB\Pemojine\Repository\Gettable', $pemojine);
        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $pemojine->getOutputter());
        $this->assertSame('KDDI', $pemojine->getVendorName());
    }
}
