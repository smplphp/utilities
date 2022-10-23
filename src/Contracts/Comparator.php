<?php

namespace Smpl\Utils\Contracts;

/**
 * Comparator Contract
 *
 * Comparators are classes used to determine the comparison of two given values,
 * for the purpose of ordering, sorting or simply determining equality.
 *
 * Comparators require an implementation of '__invoke' which makes them
 * "functional", or "callable", allowing an instance to be treated as if it
 * were a function.
 *
 * @template V of mixed
 */
interface Comparator
{
    /**
     * Checks if value A is equal to value B.
     *
     * This method is will compare A against B in an identical manner to
     * {@see \Smpl\Utils\Contracts\Comparator::compare()}, except that it will
     * return true if the values are equal
     * (0 {@see \Smpl\Utils\Helpers\ComparisonHelper::EQUAL_TO}), and false otherwise.
     *
     * @param V $a
     * @param V $b
     *
     * @return bool
     *
     * @see \Smpl\Utils\Contracts\Comparator::compare()
     *
     * @psalm-pure
     * @phpstan-pure
     */
    public function areEqual(mixed $a, mixed $b): bool;

    /**
     * Compare value A against value B.
     *
     * This method should compare A against B, returning a negative integer
     * if A is less than B, a zero if A is equal to B, and a positive integer if
     * A is more than B.
     *
     * Implementations must return an integer in the range of -1 => 1. There
     * are constants in {@see \Smpl\Utils\Helpers\ComparisonHelper} class
     * as well as a {@see \Smpl\Utils\Helpers\ComparisonHelper::signum()}
     * function.
     *
     * @param V $a
     * @param V $b
     *
     * @return int<-1, 1>
     *
     * @see \Smpl\Utils\Helpers\ComparisonHelper::LESS_THAN
     * @see \Smpl\Utils\Helpers\ComparisonHelper::EQUAL_TO
     * @see \Smpl\Utils\Helpers\ComparisonHelper::MORE_THAN
     *
     * @psalm-pure
     * @phpstan-pure
     */
    public function compare(mixed $a, mixed $b): int;

    /**
     * Invokable Method
     *
     * This method exists so that a comparator instance is invokable as a
     * callable.
     *
     * @param V $a
     * @param V $b
     *
     * @return int<-1, 1>
     *
     * @psalm-pure
     * @phpstan-pure
     */
    public function __invoke(mixed $a, mixed $b): int;
}