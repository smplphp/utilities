<?php
declare(strict_types=1);

namespace Smpl\Utils\Predicates\Logical;

use Smpl\Utils\Predicates\BasePredicate;

/**
 * @template V of mixed
 * @extends \Smpl\Utils\Predicates\BasePredicate<V>
 */
final class OrPredicate extends BasePredicate
{
    /**
     * @var \Smpl\Utils\Contracts\Predicate<V>[]
     */
    private array $predicates;

    /**
     * @param \Smpl\Utils\Contracts\Predicate<V>[] $predicate
     */
    public function __construct(array $predicate)
    {
        $this->predicates = $predicate;
    }

    /**
     * @param V $value
     *
     * @return bool
     */
    public function test(mixed $value): bool
    {
        foreach ($this->predicates as $predicate) {
            if ($predicate->test($value)) {
                return true;
            }
        }

        return false;
    }
}