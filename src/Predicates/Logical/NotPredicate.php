<?php
declare(strict_types=1);

namespace Smpl\Utils\Predicates\Logical;

use Smpl\Utils\Contracts\Predicate;
use Smpl\Utils\Predicates\BasePredicate;

/**
 * @template V of mixed
 * @extends \Smpl\Utils\Predicates\BasePredicate<V>
 */
final class NotPredicate extends BasePredicate
{
    /**
     * @var \Smpl\Utils\Contracts\Predicate<V>
     */
    private Predicate $predicate;

    /**
     * @param \Smpl\Utils\Contracts\Predicate<V> $predicate
     */
    public function __construct(Predicate $predicate)
    {
        $this->predicate = $predicate;
    }

    /**
     * @param V $value
     *
     * @return bool
     */
    public function test(mixed $value): bool
    {
        return ! $this->predicate->test($value);
    }

    /**
     * @return \Smpl\Utils\Contracts\Predicate<V>
     */
    public function negate(): Predicate
    {
        return $this->predicate;
    }
}