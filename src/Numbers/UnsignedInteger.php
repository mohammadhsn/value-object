<?php

namespace Values\Numbers;

use Values\Errors\ValueError;

class UnsignedInteger extends Integer
{
    public function __construct(int $value)
    {
        if ($value < 0) {
            throw new ValueError('Unsigned integer cannot be ' . $value);
        }

        parent::__construct($value);
    }
}
