<?php

namespace Smpl\Utils\Contracts;

/**
 * @template E of object
 */
interface Comparable
{
    /**
     * Compare this object against the provided value.
     *
     * This method should compare the provided value $other against $this,
     * returning a negative integer if $this is less than $other, a zero if $this
     * is equal to $other, and a positive integer if $this is more than $other.
     *
     * Implementations must return an integer in the range of -1 => 1. There
     * are constants in {@see \Smpl\Utils\Helpers\ComparisonHelper} class
     * as well as a {@see \Smpl\Utils\Helpers\ComparisonHelper::signum()}
     * function.
     *
     * @param E $other
     *
     * @return int<-1,1>
     *
     * @see \Smpl\Utils\Contracts\Comparator::compare()
     *
     * @psalm-pure
     * @phpstan-pure
     */
    public function compareTo(mixed $other): int;

    /**
     * Checks if this object is equal to the provided value.
     *
     * This method is will compare $this against $other in an identical manner
     * to {@see \Smpl\Utils\Contracts\Comparable::compareTo()}, except that it
     * will return true if the values are equal
     * (0 {@see \Smpl\Utils\Helpers\ComparisonHelper::EQUAL_TO}), and false otherwise.
     *
     * @param E $other
     *
     * @return bool
     *
     * @see \Smpl\Utils\Contracts\Comparator::areEqual()
     *
     * @psalm-pure
     * @phpstan-pure
     */
    public function equalTo(mixed $other): bool;
}