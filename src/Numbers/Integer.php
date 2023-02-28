<?php

namespace Values\Numbers;

class Integer
{
    public function __construct(public int $value)
    {
    }

    public static function zero(): self
    {
        return new static(0);
    }

    public static function new(int $value): self
    {
        return new static($value);
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

    public function isDividableTo(Integer $with): bool
    {
        return ($this->value % $with->value) === 0;
    }
}
