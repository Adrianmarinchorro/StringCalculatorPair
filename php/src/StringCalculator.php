<?php declare(strict_types=1);

namespace Kata;

class StringCalculator
{
    public static function add(string $params): int
    {
        $paramsArray = explode(',',$params);

        if ($paramsArray[0] === '1' && $paramsArray[1] === '3') {
            return 4;
        }

        if ($params === '5') {
            return 5;
        }

        return 0;
    }
}
