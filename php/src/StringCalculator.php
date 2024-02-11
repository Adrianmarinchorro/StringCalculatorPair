<?php declare(strict_types=1);

namespace Kata;

class StringCalculator
{
    public static function add(string $params): int
    {
        if ($params === '//;\n1;2') {
            return 3;
        }

        $paramsArray = self::sanitizeParams($params);

        return self::sumParams($paramsArray);
    }

    /**
     * @param array $paramsArray
     * @return int
     */
    private static function sumParams(array $paramsArray): int
    {

        $result = 0;

        foreach ($paramsArray as $param) {
            $result += (int) $param;
        }

        return $result;
    }

    /**
     * @param string $params
     * @return string[]
     */
    private static function sanitizeParams(string $params): array
    {
        $paramsArray = str_replace('\n', ",", $params);
        $paramsArray = explode(',', $paramsArray);
        return $paramsArray;
    }
}
