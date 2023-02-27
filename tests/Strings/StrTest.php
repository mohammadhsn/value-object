<?php

namespace Tests\Strings;

use Closure;
use PHPUnit\Framework\TestCase;
use Values\Strings\Str;

class StrTest extends TestCase
{
    public function test_concat()    
    {
        $this->assertTrue(
            Str::new('foo')->concat(new Str('bar'))->is(new Str('foobar'))
        );
    }

    public function test_join()
    {
        $this->assertTrue(
            Str::new('foo')->join(new Str(' '), new Str('bar'), new Str('baz'))
                ->is(new Str('foo bar baz'))
        );
    }

    public function test_split()
    {
        $this->assertEquals(
            Str::new('hi there')->split(),
            [Str::new('hi'), Str::new('there')]
        );
    }

    public function test_quote()
    {
        $str = Str::new("Hello, World!")->quote();

        $this->assertTrue(
            $str->is(Str::new('"Hello, World!"'))
        );
    }

    public function test_start_with()
    {
        $this->assertTrue(
            Str::new('apologize')->startsWith(Str::new('apo'))
        );
    }

    public function test_end_with()
    {
        $this->assertTrue(
            Str::new('apologize')->endsWith(Str::new('ize'))
        );
    }

    public function test_remove()
    {
        $this->assertTrue(
            Str::new('hello world')->remove(Str::new(' '))->is(Str::new('helloworld'))
        );
    }

    public function test_replace()
    {
        $str = Str::new('hello-world')->replace(Str::new('-'), Str::new(' '));
        
        $this->assertTrue(
            $str->is(Str::new('hello world'))
        );
    }
    
    public function test_is_alpha()
    {
        $this->assertTrue(Str::new('thanks')->isAlpha());
        $this->assertFalse(Str::new('thanks1')->isAlpha());
    }

    public function test_is_numeric()
    {
        $this->assertTrue(Str::new('123')->isNumeric());
    }

    public function test_is_upper()
    {
        $this->assertTrue(Str::new('FOUR')->isUpper());
    }

    public function test_is_lower()
    {
        $this->assertTrue(Str::new('four')->isLower());
    }
}
