<?php declare(strict_types=1);

namespace KataTests;

use Kata\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{

    public static function simpleCalculator()
    {
        return [
            "given_an_empty_param_then_return_0" => [ "params" => "", "result" => 0],
            "given_an_only_param_then_return_the_value_param" => [ "params" => "5", "result" => 5],
            "given_1_and_3_then_return_4" => [ "params" => "1,3", "result" => 4],
            "given_2_and_3_then_return_5" => [ "params" => "2,3", "result" => 5],
            "given_3_3_3_then_return_9" => [ "params" => "3,3,3", "result" => 9],
            "given_many_numbers_then_return_their_sum" => [ "params" => "1,2,3,4,5,6,7,8,9", "result" => 45],
        ];
    }

    public static function simpleCalculatorWithNewLines()
    {
        return [
            "given_1_n2_3_with_newlines_then_return_6" => [ "params" => '1\n2,3', "result" => 6],
            "given_1_n2_3_n5_with_newlines_then_return_11" => [ "params" => '1\n2,3\n5', "result" => 11],
        ];
    }

    /**
     * @dataProvider simpleCalculator
     * @dataProvider simpleCalculatorWithNewLines
     * @test
     */
    public function given_any_params_then_return_the_sum_of_params(string $params, int $result)
    {
        $this->assertEquals($result, StringCalculator::add($params));
    }


    /** @test */
    public function given_1_2_with_personalized_separator_then_return_3()
    {
        $params = '//;\n1;2';

        $this->assertEquals(3, StringCalculator::add($params));
    }

    /** @test */
    public function given_1_3_with_personalized_separator_then_return_4()
    {
        $params = '//_\n1_3';

        $this->assertEquals(4, StringCalculator::add($params));
    }
}
