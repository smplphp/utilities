<?php
declare(strict_types=1);

namespace Smpl\Utils\Support;

use Smpl\Utils\Contracts\Predicate;
use Smpl\Utils\Predicates\Comparison;
use Smpl\Utils\Predicates\Logical;

/**
 *
 */
final class Predicates
{
    /**
     * @template V of mixed
     *
     * @param \Smpl\Utils\Contracts\Predicate<V> $predicate
     *
     * @return \Smpl\Utils\Contracts\Predicate<V>
     */
    public static function negate(Predicate $predicate): Predicate
    {
        return $predicate->negate();
    }

    /**
     * @template V of mixed
     *
     * @param \Smpl\Utils\Contracts\Predicate<V> ...$predicates
     *
     * @return \Smpl\Utils\Predicates\Logical\OrPredicate<V>
     */
    public static function or(Predicate...$predicates): Logical\OrPredicate
    {
        return new Logical\OrPredicate($predicates);
    }

    /**
     * @template V of mixed
     *
     * @param \Smpl\Utils\Contracts\Predicate<V> ...$predicates
     *
     * @return \Smpl\Utils\Predicates\Logical\AndPredicate<V>
     */
    public static function and(Predicate...$predicates): Logical\AndPredicate
    {
        return new Logical\AndPredicate($predicates);
    }

    /**
     * @param int|float $value
     *
     * @return \Smpl\Utils\Predicates\Comparison\LessThanPredicate
     */
    public static function lt(int|float $value): Comparison\LessThanPredicate
    {
        return new Comparison\LessThanPredicate($value);
    }

    /**
     * @param int|float $value
     *
     * @return \Smpl\Utils\Predicates\Comparison\GreaterThanPredicate
     */
    public static function gt(int|float $value): Comparison\GreaterThanPredicate
    {
        return new Comparison\GreaterThanPredicate($value);
    }

    /**
     * @param int|float $value
     *
     * @return \Smpl\Utils\Predicates\Comparison\EqualToPredicate
     */
    public static function eq(int|float $value): Comparison\EqualToPredicate
    {
        return new Comparison\EqualToPredicate($value);
    }

    /**
     * @param int|float $value
     *
     * @return \Smpl\Utils\Predicates\Comparison\IdenticalToPredicate
     */
    public static function id(int|float $value): Comparison\IdenticalToPredicate
    {
        return new Comparison\IdenticalToPredicate($value);
    }

    /**
     * @param int|float $value
     *
     * @return \Smpl\Utils\Predicates\Logical\OrPredicate<int|float>
     */
    public static function gteq(int|float $value): Logical\OrPredicate
    {
        return self::or(
            self::gt($value),
            self::eq($value)
        );
    }

    /**
     * @param int|float $value
     *
     * @return \Smpl\Utils\Predicates\Logical\OrPredicate<int|float>
     */
    public static function lteq(int|float $value): Logical\OrPredicate
    {
        return self::or(
            self::lt($value),
            self::eq($value)
        );
    }
}