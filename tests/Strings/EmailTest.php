<?php

namespace Tests\Strings;

use Values\Strings\Email;
use Values\Errors\ValueError;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function test_email()
    {
        $this->assertInstanceOf(Email::class, new Email('foobar@email.io'));
    }

    public function test_invalid_email()
    {
        $this->expectException(ValueError::class);
        new Email('foobar');
    }
}
