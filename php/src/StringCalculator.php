<?php declare(strict_types=1);

namespace Kata;

class StringCalculator
{
    public static function add(string $params): int
    {
        $paramsArray = explode(',',$params);

        return self::sumParams($paramsArray);
    }

    /**
     * @param array $paramsArray
     * @return int
     */
    public static function sumParams(array $paramsArray): int
    {
        $result = 0;

        foreach ($paramsArray as $param) {
            $result += (int) $param;
        }

        return $result;
    }
}
