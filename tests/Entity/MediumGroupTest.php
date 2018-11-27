<?php

namespace SMB\Pemojine\Tests\Entity;

use SMB\Pemojine\Entity\MediumGroup;

use SMB\Pemojine\Dispatcher\Dispatcher;
use SMB\Pemojine\Repository\Pemojine;
use SMB\Pemojine\Entity\BigGroup;
use SMB\Pemojine\Entity\Group;

/**
 * Test of SMB\Pemojine\Entity\MediumGroup
 * 
 * @group Pemojine
 * @group Entity
 */
class MediumGroupTest extends \PHPUnit_Framework_TestCase
{
    use \SMB\Pemojine\Tests\Util\CreateMockTrait;

    /**
     *
     * @var MediumGroup
     */
    private $target;

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Google';

        $dispatcher = $this->create_mock_for_dispatcher();

        $map = [
            ['pemojine', 'getVendorName', [], $expected],
        ];

        $dispatcher->expects($this->once())
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new MediumGroup('mediumGroup', 'bigGroup', $dispatcher);

        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getName()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $this->target = new MediumGroup('arts & crafts', 'bigGroup', $dispatcher);

        $this->assertSame('arts & crafts', $this->target->getName());
    }

    /**
     * @test
     */
    public function it_can_handle_getChildren()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $expected_1 = new Group('They\'re Group 1', 'mediumGroup', [], $dispatcher, $outputter);
        $expected_2 = new Group('They\'re Group 2', 'mediumGroup', [], $dispatcher, $outputter);
        $expected_3 = new Group('group_3', 'mediumGroup', [], $dispatcher, $outputter);

        $map = [
            ['pemojine', 'selectGroup', ['They\'re Group 1'], $expected_1],
            ['pemojine', 'selectGroup', ['They\'re Group 2'], $expected_2],
            ['pemojine', 'selectGroup', ['group_3'], $expected_3], // This is not called.
        ];

        $dispatcher->expects($this->exactly(2))
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new MediumGroup('mediumGroup', 'bigGroup', $dispatcher);
        $this->target->addChildName('They\'re Group 1');
        $this->target->addChildName('They\'re Group 2');

        $index = 1;
        foreach ($this->target->getChildren() as $name => $group) {
            $this->assertSame('They\'re Group ' . $index, $name);
            $this->assertSame(${"expected_$index"}, $group);
            $index++;
        }
    }

    /**
     * @test
     */
    public function it_can_handle_getIterator()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $expected_1 = new Group('They\'re Group 1', 'mediumGroup', [], $dispatcher, $outputter);
        $expected_2 = new Group('They\'re Group 2', 'mediumGroup', [], $dispatcher, $outputter);
        $expected_3 = new Group('group_3', 'mediumGroup', [], $dispatcher, $outputter);

        $map = [
            ['pemojine', 'selectGroup', ['They\'re Group 1'], $expected_1],
            ['pemojine', 'selectGroup', ['They\'re Group 2'], $expected_2],
            ['pemojine', 'selectGroup', ['group_3'], $expected_3], // This is not called.
        ];

        $dispatcher->expects($this->exactly(2))
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new MediumGroup('mediumGroup', 'bigGroup', $dispatcher);
        $this->target->addChildName('They\'re Group 1');
        $this->target->addChildName('They\'re Group 2');

        // getIterator
        $index = 1;
        foreach ($this->target as $name => $group) {
            $this->assertSame('They\'re Group ' . $index, $name);
            $this->assertSame(${"expected_$index"}, $group);
            $index++;
        }
    }

    /**
     * @test
     */
    public function it_can_handle_getGroupAtRandom()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $expected_1 = new Group('They\'re Group 1', 'mediumGroup', [], $dispatcher, $outputter);
        $expected_2 = new Group('They\'re Group 2', 'mediumGroup', [], $dispatcher, $outputter);

        $map = [
            ['pemojine', 'selectGroup', ['They\'re Group 1'], $expected_1],
            ['pemojine', 'selectGroup', ['They\'re Group 2'], $expected_2],
        ];

        $dispatcher->expects($this->exactly(1))
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new MediumGroup('mediumGroup', 'bigGroup', $dispatcher);

        // It is null before completing the relation.
        $this->assertNull($this->target->getGroupAtRandom());

        // Complete the relation.
        $this->target->addChildName('They\'re Group 1');
        $this->target->addChildName('They\'re Group 2');

        $this->assertContains($this->target->getGroupAtRandom(), [$expected_1, $expected_2]);
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

        $bigGroup_1 = new BigGroup('Animals & Nature', $dispatcher);
        $bigGroup_2 = new BigGroup('People', $dispatcher);

        $pemojine->addBigGroup('Animals & Nature', $bigGroup_1);
        $pemojine->addBigGroup('People', $bigGroup_2);

        $this->target = new MediumGroup('mediumGroup', 'Animals & Nature', $dispatcher);

        $this->assertSame($bigGroup_1, $this->target->findParentGroup());

        // This throws an exception.
        $expectedErrorMessage = "Group not found: '->Smileys'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $target_2 = new MediumGroup('mediumGroup_2', 'Smileys', $dispatcher);
        $target_2->findParentGroup();
    }

    /**
     * @test
     */
    public function it_can_handle_ArrayAccess()
    {
        // Repository
        $pemojine = new Pemojine();

        // Dispatcher
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('pemojine', $pemojine);

        $outputter  = $this->create_mock_for_outputter();

        $this->target = new MediumGroup('mediumGroup', 'bigGroup', $dispatcher);

        $expected_1 = new Group('They\'re Group 1', 'mediumGroup', [], $dispatcher, $outputter);
        $expected_2 = new Group('They\'re Group 2', 'mediumGroup', [], $dispatcher, $outputter);

        // offsetSet
        $this->target['They\'re Group 1'] = $expected_1;
        $this->target['They\'re Group 2']     = $expected_2;

        // offsetExists
        $this->assertTrue(isset($this->target['They\'re Group 1']));
        $this->assertTrue(isset($this->target['They\'re Group 2']));
        $this->assertFalse(isset($this->target['group_3']));

        // offsetGet
        $this->assertSame($expected_1, $this->target['They\'re Group 1']);
        $this->assertSame($expected_2, $this->target['They\'re Group 2']);

        $this->assertFalse(empty($this->target['They\'re Group 1']));
        $this->assertFalse(empty($this->target['They\'re Group 2']));
        $this->assertTrue(empty($this->target['group_3']));

        // offsetUnset
        unset($this->target['They\'re Group 2']);
        $this->assertFalse(isset($this->target['They\'re Group 2']));
        $this->assertTrue(empty($this->target['They\'re Group 2']));

        // offsetGet
        $this->assertSame($expected_1, $this->target['They\'re Group 1']);

        // This throws an exception.
        $expectedErrorMessage = "Group not found: '->They're Group 2'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $this->target['They\'re Group 2'];
    }
}
