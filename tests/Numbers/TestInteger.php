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
            $a->add(new Integer(5))->eq(new Integer(15))
        );
    }

    public function test_minus()
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->minus(new Integer(5))->eq(new Integer(5))
        );
    }

    public function test_division()
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->division(new Integer(2))->eq(new Integer(5))
        );
    }

    public function test_multiply()
    {
        $a = new Integer(10);

        $this->assertTrue(
            $a->multiply(new Integer(2))->eq(new Integer(20))
        );
    }

    public function test_is_dividable()
    {
        $this->assertTrue(Integer::new(10)->isDividableTo(Integer::new(2)));
        $this->assertFalse(Integer::new(10)->isDividableTo(Integer::new(3)));
    }

    public function test_eq()
    {
        $this->assertTrue(Integer::new(10)->eq(Integer::new(10)));
        $this->assertFalse(Integer::new(10)->eq(Integer::new(9)));
    }

    public function test_lt()
    {
        $this->assertTrue(Integer::new(10)->lt(Integer::new(20)));
    }

    public function test_lte()
    {
        $this->assertTrue(Integer::new(10)->lte(Integer::new(11)));
        $this->assertTrue(Integer::new(10)->lte(Integer::new(10)));
    }

    public function test_gt()
    {
        $this->assertTrue(Integer::new(10)->gt(Integer::new(5)));
        $this->assertFalse(Integer::new(10)->gt(Integer::new(12)));
    }

    public function test_gte()
    {
        $this->assertTrue(Integer::new(10)->gt(Integer::new(5)));
        $this->assertFalse(Integer::new(10)->gt(Integer::new(10)));
    }
}
