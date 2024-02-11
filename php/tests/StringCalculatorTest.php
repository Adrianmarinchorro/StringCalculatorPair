<?php declare(strict_types=1);

namespace KataTests;

use Kata\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /** @test */
    public function given_an_empty_param_then_return_0(): void
    {
        $result = StringCalculator::add("");

        self::assertEquals(0, $result);
    }

    /** @test */
    public function given_an_only_param_then_return_the_value_param(): void
    {
        $result = StringCalculator::add("5");

        self::assertEquals(5, $result);
    }

    /** @test */
    public function given_1_and_3_then_return_4(): void
    {
        $result = StringCalculator::add("1,3");

        self::assertEquals(4, $result);
    }

    /** @test */
    public function given_3_and_3_then_return_6(): void
    {
        $result = StringCalculator::add("3,3");

        self::assertEquals(6, $result);
    }

    /** @test */
    public function given_3_3_3_then_return_9(): void
    {
        $result = StringCalculator::add("3,3,3");

        self::assertEquals(9, $result);
    }
}
