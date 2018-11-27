<?php

namespace SMB\Pemojine\Entity;

use SMB\Pemojine\Dispatcher\Dispatchable;

/**
 * 
 */
class MediumGroup implements \ArrayAccess, \IteratorAggregate
{
    /**
     *
     * @var string
     */
    private $name = '';

    /**
     *
     * @var string
     */
    private $parentName = '';

    /**
     *
     * @var Dispatchable
     */
    private $dispatcher;

    /**
     *
     * @var array
     */
    private $children = [];

    /**
     * 
     * @param string $name
     * @param string $parentName
     * @param Dispatchable $dispatcher
     */
    public function __construct($name, $parentName, Dispatchable $dispatcher)
    {
        $this->name       = $name;
        $this->parentName = $parentName;
        $this->dispatcher = $dispatcher;
    }

    /**
     * 
     * @return string
     */
    public function getVendorName()
    {
        return $this->dispatcher->dispatch(
            'pemojine',
            'getVendorName'
        );
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     * 
     * @return void
     */
    public function addChildName($name)
    {
        $this->children[$name] = true;
    }

    /**
     * 
     * @return \Generator
     */
    public function getChildren()
    {
        foreach (array_keys($this->children) as $name) {
            yield $name => $this->selectGroup($name);
        }
    }

    /**
     * 
     * @return \Generator
     */
    public function getIterator()
    {
        return $this->getChildren();
    }

    /**
     * 
     * @return Group|null
     */
    public function getGroupAtRandom()
    {
        return $this->selectGroupAtRandom();
    }

    /**
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return BigGroup
     */
    public function findParentGroup()
    {
        return $this->dispatcher->dispatch(
            'pemojine',
            'selectBigGroup',
            [$this->parentName]
        );
    }

    /**
     * 
     * @param string $name
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return Group
     */
    public function selectGroup($name)
    {
        return $this->dispatcher->dispatch(
            'pemojine',
            'selectGroup',
            [$name]
        );
    }

    /**
     * 
     * @param string $name
     * 
     * @return boolean
     */
    public function offsetExists($name)
    {
        return isset($this->children[$name]);
    }

    /**
     * 
     * @param string $name
     * 
     * @return Group
     */
    public function offsetGet($name)
    {
        return $this->selectGroup($name);
    }

    /**
     * 
     * @param string $name
     * @param Group $group
     * 
     * @return void
     */
    public function offsetSet($name, $group)
    {
        $this->addChildName($name);

        $this->dispatcher->dispatch(
            'pemojine',
            'addGroup',
            [$name, $group]
        );
    }

    /**
     * 
     * @param string $name
     * 
     * @return void
     */
    public function offsetUnset($name)
    {
        unset($this->children[$name]);

        $this->dispatcher->dispatch(
            'pemojine',
            'removeGroup',
            [$name]
        );
    }

    /**
     * 
     * @return Group|null
     */
    private function selectGroupAtRandom()
    {
        if (count($this->children) === 0) {
            return null;
        }

        $name = array_rand($this->children, 1);
        return $this->selectGroup($name);
    }
}
