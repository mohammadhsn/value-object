<?php

namespace Values\Numbers;

class Integer
{
    public function __construct(public int $value)
    {
    }

    public function is(self $other): bool
    {
        return $other->value === $this->value;
    }

    public function add(Integer $with): self
    {
        return new self($this->value + $with->value);
    }

    public function minus(Integer $with): self
    {
        return new self($this->value - $with->value);
    }

    public function multiply(Integer $with): self
    {
        return new self($this->value * $with->value);
    }

    public function division(Integer $with): self
    {
        return new self($this->value / $with->value);
    }
}
