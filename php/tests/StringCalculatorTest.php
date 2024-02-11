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
}
