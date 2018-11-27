<?php

namespace SMB\Pemojine\Entity;

use SMB\Pemojine\Dispatcher\Dispatchable;

/**
 * 
 */
class BigGroup implements \ArrayAccess, \IteratorAggregate
{
    /**
     *
     * @var string
     */
    private $name = '';

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
     * @param Dispatchable $dispatcher
     */
    public function __construct($name, Dispatchable $dispatcher)
    {
        $this->name       = $name;
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
            yield $name => $this->selectMediumGroup($name);
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
     * @param string $name
     * 
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return MediumGroup
     */
    public function selectMediumGroup($name)
    {
        return $this->dispatcher->dispatch(
            'pemojine',
            'selectMediumGroup',
            [$name]
        );
    }

    /**
     * 
     * @return Group|null
     */
    public function getGroupAtRandom()
    {
        $mediumGroup = $this->selectMediumGroupAtRandom();

        if ($mediumGroup === null) {
            return null;
        }

        return $mediumGroup->getGroupAtRandom();
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
     * @throws \SMB\Pemojine\Exception\GroupNotFound
     * 
     * @return MediumGroup
     */
    public function offsetGet($name)
    {
        return $this->selectMediumGroup($name);
    }

    /**
     * 
     * @param string $name
     * @param MediumGroup $mediumGroup
     * 
     * @return void
     */
    public function offsetSet($name, $mediumGroup)
    {
        $this->addChildName($name);

        $this->dispatcher->dispatch(
            'pemojine',
            'addMediumGroup',
            [$name, $mediumGroup]
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
            'removeMediumGroup',
            [$name]
        );
    }

    /**
     * 
     * @return MediumGroup|null
     */
    private function selectMediumGroupAtRandom()
    {
        if (count($this->children) === 0) {
            return null;
        }

        $name = array_rand($this->children, 1);
        return $this->selectMediumGroup($name);
    }
}
