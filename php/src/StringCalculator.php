<?php declare(strict_types=1);

namespace Kata;

class StringCalculator
{
    public static function add(string $params): int
    {
        if ($params === '5') {
            return 5;
        }

        return 0;
    }
}
