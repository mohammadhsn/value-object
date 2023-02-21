<?php

namespace Tests\Dates;

use DateInterval;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Values\Dates\PeriodDatetime;
use Values\Errors\ValueError;

class PeriodDatetimeTest extends TestCase
{
    public function test_start_time_must_be_before_end_time() 
    {
        $d1 = new DateTimeImmutable('+3 days');
        $d2 = new DateTimeImmutable();

        $this->expectException(ValueError::class);

        $this->assertInstanceOf(PeriodDatetime::class, new PeriodDatetime($d1, $d2));
    }
}
