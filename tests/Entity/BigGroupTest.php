<?php

namespace SMB\Pemojine\Tests\Entity;

use SMB\Pemojine\Entity\BigGroup;

use SMB\Pemojine\Dispatcher\Dispatcher;
use SMB\Pemojine\Repository\Pemojine;
use SMB\Pemojine\Entity\Group;
use SMB\Pemojine\Entity\MediumGroup;

/**
 * Test of SMB\Pemojine\Entity\BigGroup
 * 
 * @group Pemojine
 * @group Entity
 */
class BigGroupTest extends \PHPUnit_Framework_TestCase
{
    use \SMB\Pemojine\Tests\Util\CreateMockTrait;

    /**
     *
     * @var BigGroup
     */
    private $target;

    /**
     * @test
     */
    public function it_can_handle_getVendorName()
    {
        $expected = 'Apple';

        $dispatcher = $this->create_mock_for_dispatcher();

        $map = [
            ['pemojine', 'getVendorName', [], $expected],
        ];

        $dispatcher->expects($this->once())
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new BigGroup('bigGroup', $dispatcher);

        $this->assertSame($expected, $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getName()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $this->target = new BigGroup('Animals & Nature', $dispatcher);

        $this->assertSame('Animals & Nature', $this->target->getName());
    }

    /**
     * @test
     */
    public function it_can_handle_getChildren()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $expected_1 = new MediumGroup('They\'re MediumGroup 1', 'bigGroup', $dispatcher);
        $expected_2 = new MediumGroup('They\'re MediumGroup 2', 'bigGroup', $dispatcher);
        $expected_3 = new MediumGroup('mediumGroup_3', 'bigGroup', $dispatcher);

        $map = [
            ['pemojine', 'selectMediumGroup', ['They\'re MediumGroup 1'], $expected_1],
            ['pemojine', 'selectMediumGroup', ['They\'re MediumGroup 2'], $expected_2],
            ['pemojine', 'selectMediumGroup', ['mediumGroup_3'], $expected_3], // This is not called.
        ];

        $dispatcher->expects($this->exactly(2))
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new BigGroup('bigGroup', $dispatcher);
        $this->target->addChildName('They\'re MediumGroup 1');
        $this->target->addChildName('They\'re MediumGroup 2');

        $index = 1;
        foreach ($this->target->getChildren() as $name => $group) {
            $this->assertSame('They\'re MediumGroup ' . $index, $name);
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

        $expected_1 = new MediumGroup('They\'re MediumGroup 1', 'bigGroup', $dispatcher);
        $expected_2 = new MediumGroup('They\'re MediumGroup 2', 'bigGroup', $dispatcher);
        $expected_3 = new MediumGroup('mediumGroup_3', 'bigGroup', $dispatcher);

        $map = [
            ['pemojine', 'selectMediumGroup', ['They\'re MediumGroup 1'], $expected_1],
            ['pemojine', 'selectMediumGroup', ['They\'re MediumGroup 2'], $expected_2],
            ['pemojine', 'selectMediumGroup', ['mediumGroup_3'], $expected_3], // This is not called.
        ];

        $dispatcher->expects($this->exactly(2))
                   ->method('dispatch')
                   ->will($this->returnValueMap($map));

        $this->target = new BigGroup('bigGroup', $dispatcher);
        $this->target->addChildName('They\'re MediumGroup 1');
        $this->target->addChildName('They\'re MediumGroup 2');

        // getIterator
        $index = 1;
        foreach ($this->target as $name => $group) {
            $this->assertSame('They\'re MediumGroup ' . $index, $name);
            $this->assertSame(${"expected_$index"}, $group);
            $index++;
        }
    }

    /**
     * @test
     */
    public function it_can_handle_getGroupAtRandom()
    {
        // Repository
        $pemojine = new Pemojine();

        // Dispatcher
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('pemojine', $pemojine);

        // Outputter
        $outputter = $this->create_mock_for_outputter();

        $groupName_1     = 'group_1';
        $groupName_2     = 'group_2';
        $mediumGroupName = 'mediumGroup';
        $bigGroupName    = 'bigGroup';

        // Group
        $expected_1 = new Group($groupName_1, $mediumGroupName, [], $dispatcher, $outputter);
        $expected_2 = new Group($groupName_2, $mediumGroupName, [], $dispatcher, $outputter);

        $pemojine->addGroup($groupName_1, $expected_1);
        $pemojine->addGroup($groupName_2, $expected_2);

        // MediumGroup
        $mediumGroup = new MediumGroup($mediumGroupName, $bigGroupName, $dispatcher);
        $mediumGroup->addChildName($groupName_1);
        $mediumGroup->addChildName($groupName_2);

        $pemojine->addMediumGroup($mediumGroupName, $mediumGroup);

        $this->target = new BigGroup($bigGroupName, $dispatcher);

        // It is null before completing the relation.
        $this->assertNull($this->target->getGroupAtRandom());

        // Complete the relation.
        $this->target->addChildName($mediumGroupName);

        $this->assertContains($this->target->getGroupAtRandom(), [$expected_1, $expected_2]);
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

        $this->target = new BigGroup('bigGroup', $dispatcher);

        $expected_1 = new MediumGroup('They\'re MediumGroup 1', 'bigGroup', $dispatcher);
        $expected_2 = new MediumGroup('They\'re MediumGroup 2', 'bigGroup', $dispatcher);

        // offsetSet
        $this->target['They\'re MediumGroup 1'] = $expected_1;
        $this->target['They\'re MediumGroup 2'] = $expected_2;

        // offsetExists
        $this->assertTrue(isset($this->target['They\'re MediumGroup 1']));
        $this->assertTrue(isset($this->target['They\'re MediumGroup 2']));
        $this->assertFalse(isset($this->target['They\'re MediumGroup 3']));

        // offsetGet
        $this->assertSame($expected_1, $this->target['They\'re MediumGroup 1']);
        $this->assertSame($expected_2, $this->target['They\'re MediumGroup 2']);

        $this->assertFalse(empty($this->target['They\'re MediumGroup 1']));
        $this->assertFalse(empty($this->target['They\'re MediumGroup 2']));
        $this->assertTrue(empty($this->target['They\'re MediumGroup 3']));

        // offsetUnset
        unset($this->target['They\'re MediumGroup 2']);
        $this->assertFalse(isset($this->target['They\'re MediumGroup 2']));
        $this->assertTrue(empty($this->target['They\'re MediumGroup 2']));

        // offsetGet
        $this->assertSame($expected_1, $this->target['They\'re MediumGroup 1']);

        // This throws an exception.
        $expectedErrorMessage = "Group not found: '->They're MediumGroup 2'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $this->target['They\'re MediumGroup 2'];
    }
}
