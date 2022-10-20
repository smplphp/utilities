<?php
declare(strict_types=1);

namespace Smpl\Utils\Comparators;

use Smpl\Utils\Helpers\ComparisonHelper;

/**
 * Equality Comparator
 *
 * This comparator compares values to see if they're equal. Unlike many
 * other implementations, this will only return for equal to and less than, as
 * the concept of a value being more than equal to another value just doesn't
 * make sense.
 *
 * @template V of mixed
 * @extends \Smpl\Utils\Comparators\BaseComparator<V>
 */
final class EqualityComparator extends BaseComparator
{
    /**
     * @param V $a
     * @param V $b
     *
     * @return int<-1, 0>
     *
     * @psalm-pure
     * @phpstan-pure
     */
    public function compare(mixed $a, mixed $b): int
    {
        /** @noinspection TypeUnsafeComparisonInspection */
        if ($a == $b) {
            return ComparisonHelper::EQUAL_TO;
        }

        return ComparisonHelper::LESS_THAN;
    }
}