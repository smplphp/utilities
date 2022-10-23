<?php
declare(strict_types=1);

namespace Smpl\Utils\Predicates;

/**
 * @template V of object
 * @extends \Smpl\Utils\Predicates\BasePredicate<V>
 */
final class InstanceOfPredicate extends BasePredicate
{
    /**
     * @var class-string<V>
     */
    private string $className;

    /**
     * @param class-string<V> $className
     */
    public function __construct(string $className)
    {
        $this->className = $className;
    }

    /**
     * @param V $value
     *
     * @return bool
     */
    public function test(mixed $value): bool
    {
        return $value instanceof $this->className;
    }
}