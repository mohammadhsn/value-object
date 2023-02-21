<?php

namespace Values\Dates;

use DateTimeInterface;
use Values\Errors\ValueError;

class PeriodDatetime
{
    public function __construct(public readonly DateTimeInterface $from, public readonly DateTimeInterface $to)
    {
        if ($from >= $to) {
            throw new ValueError("From cannot be after to");
        }
    }

    public function is(self $other): bool
    {
        return $this->from == $other->from && $this->to == $other->to;
    }
}
