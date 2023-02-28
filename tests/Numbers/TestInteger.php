<?php

namespace Tests\Integer;

use PHPUnit\Framework\TestCase;
use Values\Numbers\Integer;

class TestInteger extends TestCase
{
    public function test_add()    
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->add(new Integer(5))->is(new Integer(15))
        );
    }

    public function test_minus()
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->minus(new Integer(5))->is(new Integer(5))
        );
    }

    public function test_division()
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->division(new Integer(2))->is(new Integer(5))
        );
    }

    public function test_multiply()
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->multiply(new Integer(2))->is(new Integer(20))
        );
    }

    public function test_is_dividable()
    {
        $this->assertTrue(Integer::new(10)->isDividableTo(Integer::new(2)));
        $this->assertFalse(Integer::new(10)->isDividableTo(Integer::new(3)));
    }
}
