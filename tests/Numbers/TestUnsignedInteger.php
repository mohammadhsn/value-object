<?php

namespace Tests\Integer;

use PHPUnit\Framework\TestCase;
use Values\Errors\ValueError;
use Values\Numbers\UnsignedInteger;

class TestUnsignedInteger extends TestCase
{
    public function test_validate()    
    {
        $this->expectException(ValueError::class);
        new UnsignedInteger(-1);
    }
}
