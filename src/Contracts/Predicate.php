<?php

namespace Smpl\Utils\Contracts;

/**
 * Predicate Contract
 *
 * Predicates are classes that represent bool-valued functions, which can be used
 * to test values.
 *
 * @template V of mixed
 */
interface Predicate
{
    /**
     * Test the provided value.
     *
     * This method will test the provided value in a manner specific to the
     * implementation, returning true if it passes, and false otherwise.
     *
     * @param V $value
     *
     * @return bool
     */
    public function test(mixed $value): bool;

    /**
     * Invokable method.
     *
     * This method exists to make a predicate invokable, so there's no need to
     * explicitly call {@see \Smpl\Utils\Contracts\Predicate::test()}.
     *
     * @param V $value
     *
     * @return bool
     */
    public function __invoke(mixed $value): bool;

    /**
     * Create a new predicate as the logical negation of this.
     *
     * This method will return a new predicate instance that performs the
     * logical negation of the current predicate, effectively inverting the
     * result.
     *
     * @return \Smpl\Utils\Contracts\Predicate<V>
     */
    public function negate(): Predicate;
}