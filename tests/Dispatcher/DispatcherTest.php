<?php

namespace SMB\Pemojine\Tests\Dispatcher;

use SMB\Pemojine\Dispatcher\Dispatcher;

/**
 * Test of SMB\Pemojine\Dispatcher\Dispatcher
 * 
 * @group Pemojine
 * @group Dispatcher
 */
class DispatcherTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var Dispatcher
     */
    private $target;

    /**
     * setUp
     */
    protected function setUp()
    {
        parent::setUp();

        $this->target = new Dispatcher();
    }

    /**
     * @test
     */
    public function it_can_dispatch()
    {
        $listener = new TestListener();
        $this->target->addListener('test', $listener);

        $actual = $this->target->dispatch('test', 'callableMethod');

        $this->assertSame('callable', $actual);
    }

    /**
     * @test
     */
    public function it_can_multiple_dispatch()
    {
        $listener = new TestListener();
        $this->target->addListener('test', $listener);

        $listener2 = new TestListener2();
        $this->target->addListener('test2', $listener2);

        $actual  = $this->target->dispatch('test', 'callableMethod');
        $actual2 = $this->target->dispatch('test2', 'callableMethod', ['args' => 'callable2']);

        $this->assertSame('callable', $actual);
        $this->assertSame('callable2', $actual2);
    }

    /**
     * @test
     * @dataProvider provider_for_exception_test
     */
    public function it_throws_an_exception_when_an_object_that_is_not_listenableIs_set(
        $errorMessage,
        $name,
        $listener,
        $listenerName,
        $methodName
    )
    {
        $expectedErrorMessage = "Listener not found: '{$errorMessage}'";

        $this->setExpectedException(
            '\SMB\Pemojine\Exception\ListenerNotFound', $expectedErrorMessage
        );

        $this->target->addListener($name, $listener);

        $this->target->dispatch($listenerName, $methodName);
    }

    /**
     * 
     * @return array
     */
    public function provider_for_exception_test()
    {
        $listener  = new TestListener();

        $std = new \stdClass();
        $std->notCallableMethod = function () {};

        return [
            ['test->notCallableMethod()', 'test', $listener, 'test',  'notCallableMethod'],
            ['test->notExistsMethod()',   'test', $listener, 'test',  'notExistsMethod'],
            ['test2->notSetMethod()',     'test', $listener, 'test2', 'notSetMethod'],
            ['test->notObject()',         'test', 'string',  'test',  'notObject'],
            ['test->notCallableMethod()', 'test', $std,      'test',  'notCallableMethod'],
       ];
    }
}

/**
 * 
 */
class TestListener
{
    public function callableMethod()
    {
        return 'callable';
    }

    protected function notCallableMethod()
    {
        return 'not callable';
    }
}

/**
 * 
 */
class TestListener2
{
    public function callableMethod($args)
    {
        return $args;
    }
}