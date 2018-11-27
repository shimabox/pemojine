<?php

namespace SMB\Pemojine\Dispatcher;

/**
 * Interface of Dispatcher
 */
interface Dispatchable
{
    /**
     * addListener
     * 
     * @param string $name Listener name.
     * @param object $listener A listenable object.
     * 
     * @return void
     */
    public function addListener($name, $listener);

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
    public function dispatch($listenerName, $methodName, array $params=[]);
}
