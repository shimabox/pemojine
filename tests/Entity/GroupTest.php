<?php

namespace SMB\Pemojine\Tests\Entity;

use SMB\Pemojine\Entity\Group;

use SMB\Pemojine\Dispatcher\Dispatcher;
use SMB\Pemojine\Repository\Pemojine;
use SMB\Pemojine\Entity\MediumGroup;

/**
 * Test of SMB\Pemojine\Entity\Group
 * 
 * @group Pemojine
 * @group Entity
 */
class GroupTest extends \PHPUnit_Framework_TestCase
{
    use \SMB\Pemojine\Tests\Util\CreateMockTrait;

    /**
     *
     * @var Group
     */
    private $target;

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Google';

        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $map = [
            ['pemojine', 'getVendorName', [], $expected],
        ];

        $dispatcher->expects($this->once())
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new Group('group', 'mediumGroup', [], $dispatcher, $outputter);

        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getName()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->assertSame('flag: São Tomé & Príncipe', $this->target->getName());
        $this->assertSame('flag: São Tomé & Príncipe', $this->target->getShortName());
    }

    /**
     * @test
     */
    public function it_can_handle_getAliasesOfName()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $aliasesOfName = [
            ':sweat_smile:',
            '\':)',
        ];
        $this->target = new Group('grinning face with sweat', 'mediumGroup', $aliasesOfName, $dispatcher, $outputter);

        $expected = [
            ':sweat_smile:',
            '\':)',
        ];

        $this->assertSame($expected, $this->target->getAliasesOfName());
        $this->assertSame($expected, $this->target->getAliasesOfShortName());
    }

    /**
     * @test
     */
    public function it_can_handle_getOutputter()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $this->target = new Group('grinning face with sweat', 'mediumGroup', [], $dispatcher, $outputter);

        $this->assertSame($outputter, $this->target->getOutputter());
    }

    /**
     * @test
     */
    public function it_can_handle_findParentGroup()
    {
        // Repository
        $pemojine = new Pemojine();

        // Dispatcher
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('pemojine', $pemojine);

        $outputter  = $this->create_mock_for_outputter();

        $mediumGroup_1 = new MediumGroup('arts & crafts', 'bigGroup', $dispatcher);
        $mediumGroup_2 = new MediumGroup('mediumGroup', 'bigGroup', $dispatcher);

        $pemojine->addMediumGroup('arts & crafts', $mediumGroup_1);
        $pemojine->addMediumGroup('mediumGroup', $mediumGroup_2);

        $this->target = new Group('group', 'arts & crafts', [], $dispatcher, $outputter);

        $this->assertSame($mediumGroup_1, $this->target->findParentGroup());

        // This throws an exception.
        $expectedErrorMessage = "Group not found: '->event'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $target_2 = new Group('group_2', 'event', [], $dispatcher, $outputter);
        $target_2->findParentGroup();
    }

    /**
     * @test
     */
    public function it_can_handle_output()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $outputter = $this->create_mock_for_outputter();
        $outputter->expects($this->once())
                  ->method('output')
                  ->with($this->equalTo('flag: São Tomé & Príncipe'));

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->output();
    }

    /**
     * @test
     */
    public function it_can_handle_outputHtml()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $outputter = $this->create_mock_for_outputter();
        $outputter->expects($this->once())
                  ->method('outputHtml')
                  ->with($this->equalTo('flag: São Tomé & Príncipe'));

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->outputHtml();
    }

    /**
     * @test
     */
    public function it_can_handle_getUnicode()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $outputter = $this->create_mock_for_outputter();
        $outputter->expects($this->once())
                  ->method('getUnicode')
                  ->with($this->equalTo('flag: São Tomé & Príncipe'));

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->getUnicode();
    }

    /**
     * @test
     */
    public function it_can_handle_getUnicodeWithRemovedBlank()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $outputter = $this->create_mock_for_outputter();
        $outputter->expects($this->once())
                  ->method('getUnicodeWithRemovedBlank')
                  ->with($this->equalTo('flag: São Tomé & Príncipe'));

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->getUnicodeWithRemovedBlank();
    }

    /**
     * @test
     */
    public function it_can_handle_getUtf8String()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $outputter = $this->create_mock_for_outputter();
        $outputter->expects($this->once())
                  ->method('getUtf8String')
                  ->with($this->equalTo('flag: São Tomé & Príncipe'));

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->getUtf8String();
    }

    /**
     * @test
     */
    public function it_can_handle_getUtf8StringWithRemovedBlank()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $outputter = $this->create_mock_for_outputter();
        $outputter->expects($this->once())
                  ->method('getUtf8StringWithRemovedBlank')
                  ->with($this->equalTo('flag: São Tomé & Príncipe'));

        $this->target = new Group('flag: São Tomé & Príncipe', 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->getUtf8StringWithRemovedBlank();
    }
}
