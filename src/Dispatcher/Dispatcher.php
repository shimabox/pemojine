<?php

namespace SMB\Pemojine\Dispatcher;

use SMB\Pemojine\Exception\Exception;

/**
 * Dispatcher
 */
class Dispatcher implements Dispatchable
{
    /**
     * listeners
     * 
     * @var array
     */
    private $listeners;

    /**
     * 
     */
    public function __construct(){}

    /**
     * addListener
     * 
     * @param string $name Listener name.
     * @param object $listener A listenable object.
     * 
     * @return void
     */
    public function addListener($name, $listener)
    {
        $this->listeners[$name] = $listener;
    }

    /**
     * dispatch
     * 
     * @param string $listenerName Listener object name.
     * @param string $methodName
     * @param array  $params
     * 
     * @throws \SMB\Pemojine\Exception\ListenerNotFound
     * 
     * @return mixed
     */
    public function dispatch($listenerName, $methodName, array $params=[])
    {
        if (
            !isset($this->listeners[$listenerName])
            || !is_object($this->listeners[$listenerName])
            || !is_callable([$this->listeners[$listenerName], $methodName])
        ) {
            throw Exception::listenerNotFound($listenerName, $methodName);
        }

        $listener = $this->listeners[$listenerName];
        return call_user_func_array([$listener, $methodName], $params);
    }
}
