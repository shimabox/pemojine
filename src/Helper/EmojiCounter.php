<?php

namespace SMB\Pemojine\Helper;

use SMB\Pemojine\Config\EmojiCount as ConfigEmojiCount;
use SMB\Pemojine\Repository\Gettable as Repository;

/**
 * 
 */
class EmojiCounter
{
    /**
     * 
     * @return int
     */
    public static function getBigGroupCount()
    {
        return ConfigEmojiCount::BIG_GROUP;
    }

    /**
     * 
     * @return int
     */
    public static function getMediumGroupCount()
    {
        return ConfigEmojiCount::MEDIUM_GROUP;
    }

    /**
     * 
     * @return int
     */
    public static function getGroupCount()
    {
        return ConfigEmojiCount::GROUP;
    }

    /**
     * 
     * @param Repository $repository
     * 
     * @return \stdClass formula-> xx / xx(string), value->coverage rate(float)
     */
    public static function getCoverageOfBigGroup(Repository $repository)
    {
        return static::getCoverage($repository->countOfBigGroups(), ConfigEmojiCount::BIG_GROUP);
    }

    /**
     * 
     * @param Repository $repository
     * 
     * @return \stdClass formula-> xx / xx(string), value->coverage rate(float)
     */
    public static function getCoverageOfMediumGroup(Repository $repository)
    {
        return static::getCoverage($repository->countOfMediumGroups(), ConfigEmojiCount::MEDIUM_GROUP);
    }

    /**
     * 
     * @param Repository $repository
     * 
     * @return \stdClass formula-> xx / xx(string), value->coverage rate(float)
     */
    public static function getCoverageOfGroup(Repository $repository)
    {
        return static::getCoverage($repository->countOfGroups(), ConfigEmojiCount::GROUP);
    }

    /**
     * 
     * @param int $count
     * @param int $total
     * 
     * @return \stdClass formula-> xx / xx(string), value->coverage rate(float|int)
     */
    private static function getCoverage($count, $total)
    {
        $ret = new \stdClass();
        $ret->formula = $count . ' / ' . $total;

        $coverage = round(($count / $total) * 100, 1);
        $ret->value = strlen($coverage) <= 3 ? (int)$coverage : $coverage;

        return $ret;
    }
}
