<?php

namespace Tests\Strings;

use PHPUnit\Framework\TestCase;
use Values\Strings\Email;

class EmailTest extends TestCase
{
    public function test_email()
    {
        $this->assertInstanceOf(Email::class, new Email('foobar@email.io'));
    }
}
