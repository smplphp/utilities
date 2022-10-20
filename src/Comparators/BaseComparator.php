<?php
declare(strict_types=1);

namespace Smpl\Utils\Comparators;

use Smpl\Utils\Contracts\Comparator;

/**
 * Base Comparator
 *
 * This abstract class serves as the base for comparators, providing the
 * __invoke implementation that maps to {@see \Smpl\Utils\Contracts\Comparator::compare()}.
 *
 * @template V of mixed
 * @implements \Smpl\Utils\Contracts\Comparator<V>
 */
abstract class BaseComparator implements Comparator
{
    /**
     * @param V $a
     * @param V $b
     *
     * @return int<-1, 1>
     */
    public function __invoke(mixed $a, mixed $b): int
    {
        return $this->compare($a, $b);
    }
}