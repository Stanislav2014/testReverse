<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 22.12.18
 * Time: 19:01
 */

namespace App\Tests;

use App\Src\ReversePunctuations as r;
use \PHPUnit\Framework\TestCase;

class ReversePunctuationsTest extends TestCase
{
    /**
     * @dataProvider additionProvider
    */

    public function testReverseWithDataSet($expected, $actual)
    {
        $this->assertEquals($expected, r::reverse($actual));
    }
    public function additionProvider()
    {
        return [
            ["Привет? Как твои дела!", "Привет! Как твои дела?"],
            ["В чем дело Док!?", "В чем дело Док?!"],
            ["тест! тест* И еще раз Тест*!,", "тест, тест! И еще раз Тест**!"]
        ];

    }
}
