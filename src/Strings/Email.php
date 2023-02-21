<?php

namespace Values\Strings;

use Values\Errors\ValueError;

class Email
{
    private string $value;

    public function __construct(string $value)
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new ValueError("Invalid email {$value}");
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function is(self $other): bool
    {
        return $this->value == $other->value;
    }

    public function provider(): string
    {
        return explode('@', $this->value)[1];
    }

    public function username(): string
    {
        return explode('@', $this->value)[0];
    }
}
