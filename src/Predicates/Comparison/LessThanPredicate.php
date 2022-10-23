<?php
declare(strict_types=1);

namespace Smpl\Utils\Predicates\Comparison;

use Smpl\Utils\Predicates\BasePredicate;

/**
 * @extends \Smpl\Utils\Predicates\BasePredicate<int|float>
 */
final class LessThanPredicate extends BasePredicate
{
    /**
     * @var int|float|string
     */
    private int|float|string $target;

    /**
     * @param int|float|string $target
     */
    public function __construct(int|float|string $target)
    {
        $this->target = $target;
    }

    /**
     * @param int|float|string $value
     *
     * @return bool
     */
    public function test(mixed $value): bool
    {
        return $value < $this->target;
    }
}