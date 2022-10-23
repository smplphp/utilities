<?php
declare(strict_types=1);

namespace Smpl\Utils\Comparators;

/**
 * Callable Comparator
 *
 * This comparator wraps a callable and runs it as a comparator.
 *
 * @template V of mixed
 * @extends \Smpl\Utils\Comparators\BaseComparator<V>
 */
final class CallableComparator extends BaseComparator
{
    /**
     * @var callable(V, V): int<-1,1>
     */
    private $callable;

    /**
     * @param callable(V, V): int<-1,1> $callable
     */
    public function __construct(callable $callable)
    {
        $this->callable = $callable;
    }

    /**
     * @param V $a
     * @param V $b
     *
     * @return int<-1, 1>
     *
     * @psalm-pure
     * @phpstan-pure
     *
     * @psalm-suppress ImpurePropertyFetch
     * @psalm-suppress ImpureVariable
     * @psalm-suppress ImpureFunctionCall
     */
    public function compare(mixed $a, mixed $b): int
    {
        $callable = $this->callable;

        return $callable($a, $b);
    }
}