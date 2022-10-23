<?php
declare(strict_types=1);

namespace Smpl\Utils\Predicates;

use Smpl\Utils\Contracts\Predicate;
use Smpl\Utils\Predicates\Logical\NotPredicate;

/**
 * Base Predicate
 *
 * This abstract class serves as the base for predicates, providing the
 * __invoke implementation that maps to {@see \Smpl\Utils\Contracts\Predicate::test()},
 * and logical chaining.
 *
 * @template V of mixed
 * @implements \Smpl\Utils\Contracts\Predicate<V>
 */
abstract class BasePredicate implements Predicate
{
    /**
     * @param V $value
     *
     * @return bool
     */
    public function __invoke(mixed $value): bool
    {
        return $this->test($value);
    }

    /**
     * @return \Smpl\Utils\Contracts\Predicate<V>
     */
    public function negate(): Predicate
    {
        return new NotPredicate($this);
    }
}