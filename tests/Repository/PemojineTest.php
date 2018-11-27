<?php

namespace SMB\Pemojine\Tests\Repository;

use SMB\Pemojine\Repository\Pemojine;
use SMB\Pemojine\Entity;

/**
 * Test of SMB\Pemojine\Repository\Pemojine
 * 
 * @group Pemojine
 * @group Repository
 */
class PemojineTest extends \PHPUnit_Framework_TestCase
{
    use \SMB\Pemojine\Tests\Util\CreateMockTrait;

    /**
     *
     * @var Pemojine
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Pemojine();
    }

    /**
     * @test
     */
    public function it_can_be_handled_in_the_initial_state()
    {
        $this->assertSame('', $this->target->getVendorName());

        $this->assertSame(0, $this->target->countOfBigGroups());
        $this->assertNull($this->target->randomFromBigGroup());

        $this->assertSame(0, $this->target->countOfMediumGroups());
        $this->assertNull($this->target->randomFromMediumGroup());

        $this->assertSame(0, $this->target->countOfGroups());
        $this->assertNull($this->target->randomFromGroup());

        $this->assertNull($this->target->getOutputter());
    }

    /**
     * @test
     */
    public function it_can_handle_vendorName()
    {
        $this->target->setVendorName('vendor');

        $this->assertSame('vendor', $this->target->getVendorName());
    }

    /**
     * @test
     */
    public function it_can_handle_getAllBigGroups()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1     = 'bigGroup_1';
        $bigGroup_1 = new Entity\BigGroup($name_1, $dispatcher);

        $name_2     = 'bigGroup_2';
        $bigGroup_2 = new Entity\BigGroup($name_2, $dispatcher);

        $this->target->addBigGroup($name_1, $bigGroup_1);
        $this->target->addBigGroup($name_2, $bigGroup_2);

        $this->assertSame(2, $this->target->countOfBigGroups());

        $index = 1;
        foreach ($this->target->getAllBigGroups() as $name => $group) {
            $this->assertSame(${"name_$index"},     $name);
            $this->assertSame(${"bigGroup_$index"}, $group);
            $index++;
        }
    }

    /**
     * @test
     */
    public function it_can_handle_getAllMediumGroups()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1        = 'mediumGroup_1';
        $mediumGroup_1 = new Entity\MediumGroup($name_1, 'bigGroup', $dispatcher);

        $name_2        = 'mediumGroup_2';
        $mediumGroup_2 = new Entity\MediumGroup($name_2, 'bigGroup', $dispatcher);

        $this->target->addMediumGroup($name_1, $mediumGroup_1);
        $this->target->addMediumGroup($name_2, $mediumGroup_2);

        $this->assertSame(2, $this->target->countOfMediumGroups());

        $index = 1;
        foreach ($this->target->getAllMediumGroups() as $name => $group) {
            $this->assertSame(${"name_$index"},        $name);
            $this->assertSame(${"mediumGroup_$index"}, $group);
            $index++;
        }
    }

    /**
     * @test
     */
    public function it_can_handle_getAllGroups()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'group_1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2           = 'group_2';
        $aliasesOfName_2  = ':group_2:';
        $group_2          = new Entity\Group($name_2, 'mediumGroup', [$aliasesOfName_2], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);
        $this->target->addGroupAliase($aliasesOfName_2, $name_2);

        $this->assertSame(2, $this->target->countOfGroups());

        $index = 1;
        foreach ($this->target->getAllGroups() as $name => $group) {
            $this->assertSame(${"name_$index"},  $name);
            $this->assertSame(${"group_$index"}, $group);
            $index++;
        }
    }

    /**
     * @test
     */
    public function it_can_handle_getOutputter()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'group_1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2  = 'group_2';
        $group_2 = new Entity\Group($name_2, 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);

        $this->assertInstanceOf('\SMB\Pemojine\Outputter\Outputtable', $this->target->getOutputter());
        $this->assertSame($outputter, $this->target->getOutputter());
    }

    /**
     * @test
     */
    public function it_can_handle_selectBigGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1     = 'They\'re BigGroup 1';
        $bigGroup_1 = new Entity\BigGroup($name_1, $dispatcher);

        $name_2     = 'They\'re BigGroup 2';
        $bigGroup_2 = new Entity\BigGroup($name_2, $dispatcher);

        $this->target->addBigGroup($name_1, $bigGroup_1);
        $this->target->addBigGroup($name_2, $bigGroup_2);

        $this->assertSame($bigGroup_1, $this->target->selectBigGroup('They\'re BigGroup 1'));
        $this->assertSame($bigGroup_2, $this->target->selectBigGroup('They\'re BigGroup 2'));
    }

    /**
     * @test
     */
    public function it_can_handle_selectMediumGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1     = 'They\'re MediumGroup 1';
        $mediumGroup_1 = new Entity\MediumGroup($name_1, 'bigGroup', $dispatcher);

        $name_2     = 'They\'re MediumGroup 2';
        $mediumGroup_2 = new Entity\MediumGroup($name_1, 'bigGroup', $dispatcher);

        $this->target->addMediumGroup($name_1, $mediumGroup_1);
        $this->target->addMediumGroup($name_2, $mediumGroup_2);

        $this->assertSame($mediumGroup_1, $this->target->selectMediumGroup('They\'re MediumGroup 1'));
        $this->assertSame($mediumGroup_2, $this->target->selectMediumGroup('They\'re MediumGroup 2'));
    }

    /**
     * @test
     */
    public function it_can_handle_selectGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'They\'re Group 1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2             = 'They\'re Group 2';
        $aliasesOfName_2_1  = ':They\'re Group 2_1:';
        $aliasesOfName_2_2  = ':group_2_2:';
        $group_2            = new Entity\Group($name_2, 'mediumGroup', [$aliasesOfName_2_1, $aliasesOfName_2_2], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);
        $this->target->addGroupAliase($aliasesOfName_2_1, $name_2);
        $this->target->addGroupAliase($aliasesOfName_2_2, $name_2);

        $this->assertSame($group_1, $this->target->selectGroup('They\'re Group 1'));
        $this->assertSame($group_2, $this->target->selectGroup('They\'re Group 2'));
        $this->assertSame($group_2, $this->target->selectGroup(':They\'re Group 2_1:'));
        $this->assertSame($group_2, $this->target->selectGroup(':group_2_2:'));
    }

    /**
     * @test
     */
    public function it_throws_an_exception_when_a_not_exist_bigGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name     = 'bigGroup';
        $bigGroup = new Entity\BigGroup($name, $dispatcher);

        $this->target->addBigGroup($name, $bigGroup);

        $expectedErrorMessage = "Group not found: '->hoge'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $this->target->selectBigGroup('hoge');
    }

    /**
     * @test
     */
    public function it_throws_an_exception_when_a_not_exist_mediumGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name        = 'mediumGroup';
        $mediumGroup = new Entity\MediumGroup($name, 'bigGroup', $dispatcher);

        $this->target->addMediumGroup($name, $mediumGroup);

        $expectedErrorMessage = "Group not found: '->hoge'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $this->target->selectMediumGroup('hoge');
    }

    /**
     * @test
     */
    public function it_throws_an_exception_when_a_not_exist_group()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'group_1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2           = 'group_2';
        $aliasesOfName_2  = ':group_2:';
        $group_2          = new Entity\Group($name_2, 'mediumGroup', [$aliasesOfName_2], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);
        $this->target->addGroupAliase($aliasesOfName_2, 'not exists'); // Do not associate.

        $expectedErrorMessage = "Group not found: '->" . $aliasesOfName_2 . "'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $this->target->selectGroup($aliasesOfName_2);
    }

    /**
     * @test
     */
    public function it_can_handle_removeBigGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1     = 'They\'re BigGroup 1';
        $bigGroup_1 = new Entity\BigGroup($name_1, $dispatcher);

        $name_2     = 'They\'re BigGroup 2';
        $bigGroup_2 = new Entity\BigGroup($name_2, $dispatcher);

        $this->target->addBigGroup($name_1, $bigGroup_1);
        $this->target->addBigGroup($name_2, $bigGroup_2);

        $this->assertSame(2, $this->target->countOfBigGroups());

        $this->target->removeBigGroup('They\'re BigGroup 1');
        $this->assertSame(1, $this->target->countOfBigGroups());

        $this->target->removeBigGroup('They\'re BigGroup 2');
        $this->assertSame(0, $this->target->countOfBigGroups());

        // Do nothing.
        $this->target->removeBigGroup('bigGroup 3');
    }

    /**
     * @test
     */
    public function it_can_handle_removeMediumGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1     = 'They\'re MediumGroup 1';
        $mediumGroup_1 = new Entity\MediumGroup($name_1, 'bigGroup', $dispatcher);

        $name_2     = 'They\'re MediumGroup 2';
        $mediumGroup_2 = new Entity\MediumGroup($name_1, 'bigGroup', $dispatcher);

        $this->target->addMediumGroup($name_1, $mediumGroup_1);
        $this->target->addMediumGroup($name_2, $mediumGroup_2);

        $this->assertSame(2, $this->target->countOfMediumGroups());

        $this->target->removeMediumGroup('They\'re MediumGroup 1');
        $this->assertSame(1, $this->target->countOfMediumGroups());

        $this->target->removeMediumGroup('They\'re MediumGroup 2');
        $this->assertSame(0, $this->target->countOfMediumGroups());

        // Do nothing.
        $this->target->removeMediumGroup('mediumGroup 3');
    }

    /**
     * @test
     */
    public function it_can_handle_removeGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'They\'re Group 1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2             = 'They\'re Group 2';
        $aliasesOfName_2_1  = ':They\'re Group 2_1:';
        $aliasesOfName_2_2  = ':group_2_2:';
        $group_2            = new Entity\Group($name_2, 'mediumGroup', [$aliasesOfName_2_1, $aliasesOfName_2_2], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);
        $this->target->addGroupAliase($aliasesOfName_2_1, $name_2);
        $this->target->addGroupAliase($aliasesOfName_2_2, $name_2);

        $this->assertSame(2, $this->target->countOfGroups());

        $this->target->removeGroup('They\'re Group 1');
        $this->assertSame(1, $this->target->countOfGroups());

        $this->target->removeGroup('They\'re Group 2');
        $this->assertSame(0, $this->target->countOfGroups());

        // Do nothing.
        $this->target->removeGroup('group 3');

        // This throws an exception.
        $expectedErrorMessage = "Group not found: '->" . $aliasesOfName_2_1 . "'";
        $this->setExpectedException('\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage);

        $this->target->selectGroup($aliasesOfName_2_1);
    }

    /**
     * @test
     */
    public function it_can_handle_randomFromBigGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1     = 'bigGroup_1';
        $bigGroup_1 = new Entity\BigGroup($name_1, $dispatcher);

        $name_2     = 'bigGroup_2';
        $bigGroup_2 = new Entity\BigGroup($name_2, $dispatcher);

        $this->target->addBigGroup($name_1, $bigGroup_1);
        $this->target->addBigGroup($name_2, $bigGroup_2);

        $this->assertContains($this->target->randomFromBigGroup(), [$bigGroup_1, $bigGroup_2]);
    }

    /**
     * @test
     */
    public function it_can_handle_randomFromMediumGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name_1        = 'mediumGroup_1';
        $mediumGroup_1 = new Entity\MediumGroup($name_1, 'bigGroup', $dispatcher);

        $name_2        = 'mediumGroup_2';
        $mediumGroup_2 = new Entity\MediumGroup($name_2, 'bigGroup', $dispatcher);

        $this->target->addMediumGroup($name_1, $mediumGroup_1);
        $this->target->addMediumGroup($name_2, $mediumGroup_2);

        $this->assertContains($this->target->randomFromMediumGroup(), [$mediumGroup_1, $mediumGroup_2]);
    }

    /**
     * @test
     */
    public function it_can_handle_randomFromGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'group_1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2  = 'group_2';
        $group_2 = new Entity\Group($name_2, 'mediumGroup', [], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);

        $this->assertContains($this->target->randomFromGroup(), [$group_1, $group_2]);
    }

    /**
     * @test
     */
    public function it_can_handle_hasBigGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name     = 'big & Group';
        $bigGroup = new Entity\BigGroup($name, $dispatcher);

        $this->target->addBigGroup($name, $bigGroup);

        $this->assertTrue($this->target->hasBigGroup('big & Group'));
        $this->assertFalse($this->target->hasBigGroup('big &amp; Group'));
    }

    /**
     * @test
     */
    public function it_can_handle_hasMediumGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();

        $name     = 'medium & Group';
        $mediumGroup = new Entity\MediumGroup($name, 'bigGroup', $dispatcher);

        $this->target->addMediumGroup($name, $mediumGroup);

        $this->assertTrue($this->target->hasMediumGroup('medium & Group'));
        $this->assertFalse($this->target->hasBigGroup('medium &amp; Group'));
    }

    /**
     * @test
     */
    public function it_can_handle_hasGroup()
    {
        $dispatcher = $this->create_mock_for_dispatcher();
        $outputter  = $this->create_mock_for_outputter();

        $name_1  = 'group & 1';
        $group_1 = new Entity\Group($name_1, 'mediumGroup', [], $dispatcher, $outputter);

        $name_2             = 'group & 2';
        $aliasesOfName_2_1  = ':group & 2_1:';
        $aliasesOfName_2_2  = ':group_2_2:';
        $group_2            = new Entity\Group($name_2, 'mediumGroup', [$aliasesOfName_2_1, $aliasesOfName_2_2], $dispatcher, $outputter);

        $this->target->addGroup($name_1, $group_1);
        $this->target->addGroup($name_2, $group_2);
        $this->target->addGroupAliase($aliasesOfName_2_1, $name_2);
        $this->target->addGroupAliase($aliasesOfName_2_2, $name_2);

        $this->assertTrue($this->target->hasGroup('group & 1'));
        $this->assertTrue($this->target->hasGroup('group & 2'));
        $this->assertTrue($this->target->hasGroup(':group & 2_1:'));
        $this->assertTrue($this->target->hasGroup(':group_2_2:'));

        $this->assertFalse($this->target->hasGroup('group &amp; 1'));
        $this->assertFalse($this->target->hasGroup(':group &amp; 2:'));
        $this->assertFalse($this->target->hasGroup('group_2'));
    }
}
