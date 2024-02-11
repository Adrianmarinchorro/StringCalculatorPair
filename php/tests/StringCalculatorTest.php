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
    public function given_more_than_one_params_then_return_the_sum_of_the_params(): void
    {
        $result = StringCalculator::add("1,3");

        self::assertEquals(4, $result);
    }
}
