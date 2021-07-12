<?php
declare(strict_types=1);

namespace Tests\LeapYear;


use App\LeapYear\Year;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{

    public function test_4の倍数じゃない年は平年(): void
    {
        $year = new Year(2021);
        self::assertFalse($year->isLeap());
    }
}
