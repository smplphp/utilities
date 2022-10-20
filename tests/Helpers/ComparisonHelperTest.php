<?php
declare(strict_types=1);

namespace Smpl\Utils\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Smpl\Utils\Helpers\ComparisonHelper;
use function Smpl\Utils\does_sign_match;
use function Smpl\Utils\get_sign;

/**
 * @group helpers
 * @group comparison
 */
class ComparisonHelperTest extends TestCase
{
    public function signumProvider(): array
    {
        return [
            '-1'    => [-1, -1],
            '-38'   => [-38, -1],
            '0'     => [0, 0],
            '48879' => [48879, 1],
            '1'     => [1, 1],
        ];
    }

    /**
     * @test
     * @dataProvider signumProvider
     */
    public function signumFunction(int $number, int $result): void
    {
        self::assertEquals($result, ComparisonHelper::signum($number));
    }

    /**
     * @test
     * @dataProvider signumProvider
     */
    public function getSignFunction(int $number, int $result): void
    {
        self::assertEquals($result, get_sign($number));
    }

    /**
     * @test
     * @dataProvider signumProvider
     */
    public function doesSignMatchFunction(int $number, int $result): void
    {
        self::assertTrue(does_sign_match($number, $result));
    }

    public function flipProvider(): array
    {
        return [
            '-1'    => [-1, 1],
            '-38'   => [-38, 1],
            '0'     => [0, 0],
            '48879' => [48879, -1],
            '1'     => [1, -1],
        ];
    }

    /**
     * @test
     * @dataProvider flipProvider
     */
    public function flipFunction(int $number, int $result): void
    {
        self::assertEquals($result, ComparisonHelper::flip($number));
    }
}