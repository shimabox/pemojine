<?php

namespace SMB\Pemojine\Entity;

use SMB\Pemojine\Dispatcher\Dispatchable;
use SMB\Pemojine\Outputter\Outputtable;

/**
 * 
 */
class Group
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
     * @var array
     */
    private $aliasesOfName = [];

    /**
     *
     * @var Dispatchable
     */
    private $dispatcher;

    /**
     *
     * @var Outputtable
     */
    private $outputter;

    /**
     * 
     * @param string $name
     * @param string $parentName
     * @param array $aliasesOfName
     * @param Dispatchable $dispatcher
     * @param Outputtable $outputter
     */
    public function __construct(
        $name, 
        $parentName, 
        array $aliasesOfName, 
        Dispatchable $dispatcher, 
        Outputtable $outputter
    )
    {
        $this->name          = $name;
        $this->parentName    = $parentName;
        $this->aliasesOfName = $aliasesOfName;
        $this->dispatcher    = $dispatcher;
        $this->outputter     = $outputter;
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
     * Alias for getName()
     * 
     * @return string
     */
    public function getShortName()
    {
        return $this->getName();
    }

    /**
     * Output aliases of name.<br>
     * Note: Not converting to HTML entity.
     * 
     * @return array
     */
    public function getAliasesOfName()
    {
        return $this->aliasesOfName;
    }

    /**
     * Alias for getAliasesOfName()
     * 
     * @return array
     */
    public function getAliasesOfShortName()
    {
        return $this->getAliasesOfName();
    }

    /**
     * 
     * @return Outputtable
     */
    public function getOutputter()
    {
        return $this->outputter;
    }

    /**
     * 
     * @return MediumGroup
     */
    public function findParentGroup()
    {
        return $this->dispatcher->dispatch(
            'pemojine',
            'selectMediumGroup',
            [$this->parentName]
        );
    }

    /**
     * 
     * @return string
     */
    public function output()
    {
        return $this->outputter->output($this->name);
    }

    /**
     * Output HTML reference character.<br>
     * Note: Not converting to HTML entity.
     * 
     * @return string
     */
    public function outputHtml()
    {
        return $this->outputter->outputHtml($this->name);
    }

    /**
     * 
     * @return string e.g) 'U+1F600', 'U+1F1EF U+1F1F5'
     */
    public function getUnicode()
    {
        return $this->outputter->getUnicode($this->name);
    }

    /**
     * 
     * @return string e.g) 'U+1F600', 'U+1F1EFU+1F1F5'
     */
    public function getUnicodeWithRemovedBlank()
    {
        return $this->outputter->getUnicodeWithRemovedBlank($this->name);
    }

    /**
     * 
     * @return string e.g) '\u{1F600}', '\u{1F1EF} \u{1F1F5}'
     */
    public function getUtf8String()
    {
        return $this->outputter->getUtf8String($this->name);
    }

    /**
     * 
     * @return string e.g) '\u{1F600}', '\u{1F1EF}\u{1F1F5}'
     */
    public function getUtf8StringWithRemovedBlank()
    {
        return $this->outputter->getUtf8StringWithRemovedBlank($this->name);
    }
}
