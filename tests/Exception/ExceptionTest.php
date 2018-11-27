<?php

namespace SMB\Pemojine\Tests\Exception;

use SMB\Pemojine\Exception\Exception;

/**
 * Test of SMB\Pemojine\Exception\Exception
 * 
 * @group Pemojine
 * @group Exception
 */
class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_can_handle_GroupNotFound()
    {
        $expectedErrorMessage = "Group not found: 'Apple->hoge'";

        $this->setExpectedException(
            '\SMB\Pemojine\Exception\GroupNotFound', $expectedErrorMessage
        );

        Exception::groupNotFound('Apple', 'hoge');
    }

    /**
     * @test
     */
    public function it_can_handle_ListenerNotFound()
    {
        $expectedErrorMessage = "Listener not found: 'Hoge->piyo()'";

        $this->setExpectedException(
            '\SMB\Pemojine\Exception\ListenerNotFound', $expectedErrorMessage
        );

        Exception::listenerNotFound('Hoge', 'piyo');
    }
}