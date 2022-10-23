<?php
declare(strict_types=1);

namespace Smpl\Utils\Support;

use Smpl\Utils\Comparators\DefaultComparator;
use Smpl\Utils\Comparators\EqualityComparator;
use Smpl\Utils\Comparators\IdenticalityComparator;

/**
 *
 */
final class Comparators
{
    /**
     * @return \Smpl\Utils\Comparators\DefaultComparator
     */
    public static function default(): DefaultComparator
    {
        return new DefaultComparator();
    }

    /**
     * @return \Smpl\Utils\Comparators\EqualityComparator
     */
    public static function equality(): EqualityComparator
    {
        return new EqualityComparator();
    }

    /**
     * @return \Smpl\Utils\Comparators\IdenticalityComparator
     */
    public static function identicality(): IdenticalityComparator
    {
        return new IdenticalityComparator();
    }
}