<?php

namespace SMB\Pemojine\Exception;

/**
 * 
 */
class Exception extends \Exception
{
    /**
     * Does not have a requested group.
     *
     * @param string $vendorName The vendor name.
     * @param string $name The group name.
     * 
     * @return GroupNotFound
     */
    public static function groupNotFound($vendorName, $name)
    {
        throw new GroupNotFound("Group not found: '{$vendorName}->{$name}'");
    }
    
    /**
     * Does not have a requested listener.
     *
     * @param string $listenerName The listener name.
     * @param string $methodName The method name.
     * 
     * @return ListenerNotFound
     */
    public static function listenerNotFound($listenerName, $methodName)
    {
        throw new ListenerNotFound("Listener not found: '{$listenerName}->{$methodName}()'");
    }
}
