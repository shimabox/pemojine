<?php

namespace SMB\Pemojine\Tests\Exception;

use SMB\Pemojine\Exception\Exception;

/**
 * Test of SMB\Pemojine\Exception\Exception
 * 
 * @group Pemojine
 * @group Exception
 */
class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_can_handle_GroupNotFound()
    {
        $expectedErrorMessage = "Group not found: 'Apple->hoge'";

        $this->expectException('\SMB\Pemojine\Exception\GroupNotFound');
        $this->expectExceptionMessage($expectedErrorMessage);

        Exception::groupNotFound('Apple', 'hoge');
    }

    /**
     * @test
     */
    public function it_can_handle_ListenerNotFound()
    {
        $expectedErrorMessage = "Listener not found: 'Hoge->piyo()'";

        $this->expectException('\SMB\Pemojine\Exception\ListenerNotFound');
        $this->expectExceptionMessage($expectedErrorMessage);

        Exception::listenerNotFound('Hoge', 'piyo');
    }
}