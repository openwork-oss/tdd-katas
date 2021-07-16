<?php
declare(strict_types=1);

namespace Tests\LeapYear;


use App\LeapYear\Year;
use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function test_2001年は平年(): void
    {
        $year = new Year(2001);
        self::assertFalse($year->isLeap());
    }
}
