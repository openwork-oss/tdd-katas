<?php
declare(strict_types=1);

namespace Tests\FizzBuzz;


use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_カウントが1の時に文字列1を返す(): void
    {
        $fizzBuzz = new FizzBuzz();
        self::assertSame('1', $fizzBuzz->convert(1));
    }
}
