<?php

namespace Values\Numbers;

class RangeFactory
{
    public function __construct(
        private readonly Integer $from,
        private readonly Integer $to,
        private readonly Integer $value,
    )
    {
    }
}
