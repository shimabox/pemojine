<?php

namespace SMB\Pemojine;

use SMB\Pemojine\Dispatcher\Dispatcher;
use SMB\Pemojine\Outputter\Outputter;
use SMB\Pemojine\Repository\Pemojine;
use SMB\Pemojine\Entity;
use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 * Instantiation of Pemojine repository.
 */
class Container
{
    /**
     *
     * @var array [\SMB\Pemojine\Repository\Gettable]
     */
    private static $repositories = [];

    /**
     * 
     * @param Configurable $vendor
     * 
     * @return \SMB\Pemojine\Repository\Gettable
     */
    public static function make(Configurable $vendor)
    {
        $vendorName = $vendor->getVendorName();

        if (isset(static::$repositories[$vendorName])) {
            return static::$repositories[$vendorName];
        }

        $pemojine = self::makePemojine($vendor, $vendorName);

        static::$repositories[$vendorName] = $pemojine;

        return $pemojine;
    }

    /**
     * 
     * @param Configurable $vendor
     * @param string $vendorName
     * 
     * @return \SMB\Pemojine\Repository\Gettable
     */
    private static function makePemojine(Configurable $vendor, $vendorName)
    {
        // Repository
        $pemojine = new Pemojine();
        $pemojine->setVendorName($vendorName);

        // Dispatcher
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('pemojine', $pemojine);

        // Vendor's Emoji
        $classNameOfEmojiTable = $vendor->getClassNameOfEmojiTable();

        // Outputter
        $outputter = new Outputter(new $classNameOfEmojiTable());

        $structure = $vendor->getClassNameListOfStructure();
        foreach ($structure as $class) {
            $structureInstance = new $class;

            $_groups = static::makeGroup(
                $pemojine,
                $dispatcher,
                $outputter, 
                $structureInstance->getGroups()
            );

            $_mediumGroups = static::makeMediumGroup(
                $pemojine,
                $dispatcher,
                $structureInstance->getMediumGroups(),
                $_groups
            );

            static::makeBigGroup(
                $pemojine,
                $dispatcher,
                $structureInstance->getBigGroup(),
                $_mediumGroups
            );
        }

        return $pemojine;
    }

    /**
     * 
     * @param Pemojine $pemojine
     * @param Dispatcher $dispatcher
     * @param Outputter $outputter
     * @param array $group SMB\Pemojine\Structure\Interfaces\Gettable::getGroups()
     * 
     * @return array ['groupName' => true,,] For group-to-mediumGroup relationship
     */
    private static function makeGroup(
        Pemojine $pemojine,
        Dispatcher $dispatcher,
        Outputter $outputter, 
        array $group
    )
    {
        $ret = [];
        foreach ($group as $name => $value) {

            $g = new Entity\Group(
                $name,
                $value['parent'],
                $value['aliases'],
                $dispatcher,
                $outputter
            );
            $pemojine->addGroup($name, $g);

            foreach ($value['aliases'] as $alias) {
                $pemojine->addGroupAliase($alias, $name);
            }

            // For group-to-mediumGroup relationship
            $ret[$name] = true;
        }

        return $ret;
    }

    /**
     * 
     * @param Pemojine $pemojine
     * @param Dispatcher $dispatcher
     * @param array $mediumGroup SMB\Pemojine\Structure\Interfaces\Gettable::getMediumGroups()
     * @param array $group group-to-mediumGroup relationship
     * 
     * @return array ['mediumGroupName' => true,,] For mediumGroup-to-bigGroup relationship
     */
    private static function makeMediumGroup(
        Pemojine $pemojine,
        Dispatcher $dispatcher,
        array $mediumGroup, 
        array $group
    )
    {
        $ret = [];
        foreach ($mediumGroup as $name => $value) {

            $g = new Entity\MediumGroup(
                $name,
                $value['parent'],
                $dispatcher
            );

            foreach ($value['children'] as $childName) {
                if (isset($group[$childName])) {
                    $g->addChildName($childName);
                }
            }

            $pemojine->addMediumGroup($name, $g);

            // For mediumGroup-to-bigGroup relationship
            $ret[$name] = true;
        }

        return $ret;
    }

    /**
     * 
     * @param Pemojine $pemojine
     * @param Dispatcher $dispatcher
     * @param array $bigGroup SMB\Pemojine\Structure\Interfaces\Gettable::getBigGroup()
     * @param array $mediumGroup mediumGroup-to-bigGroup relationship
     * 
     * @return void
     */
    private static function makeBigGroup(
        Pemojine $pemojine,
        Dispatcher $dispatcher,
        array $bigGroup,
        array $mediumGroup
    )
    {
        foreach ($bigGroup as $name => $value) {

            $g = new Entity\BigGroup($name, $dispatcher);

            foreach ($value['children'] as $childName) {
                if (isset($mediumGroup[$childName])) {
                    $g->addChildName($childName);
                }
            }

            $pemojine->addBigGroup($name, $g);
        }
    }

    /**
     * This class should not be instantiated.
     */
    private function __construct() {}
}
