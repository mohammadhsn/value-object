<?php

namespace Values\Strings;

use Generator;

class Str
{
    public function __construct(public string $value)
    {
    }

    public static function empty(): self
    {
        return new self('');
    }

    public static function new(string $value): self
    {
        return new self($value);
    }

    public function is(self $other): bool
    {
        return $this->value === $other->value;
    }

    public function concat(self $other): self
    {
        return new self($this->value . $other->value);
    }

    public function join(self $glue, self ...$args): self
    {
        if (empty($args)) {
            return $this;
        }

        $str = $this;

        foreach ($args as $c) {
            $str = $str->concat($glue)->concat($c);
        }

        return $str;
    }

    /** @return Str[] */
    public function toArray(): array
    {
        return array_map(
            fn (string $c) => static::new($c),
            str_split($this->value)
        );
    }

    public function replace(self $search, self $replace): self
    {
        return static::new(
            str_replace($search->value, $replace->value, $this->value)
        );
    }

    public function remove(self $search): self
    {
        return static::new(str_replace($search->value, '', $this->value));
    }

    public function upper(): self
    {
        return new self(strtoupper($this->value));
    }

    public function lower(): self
    {
        return new self(strtolower($this->value));
    }

    public function title(): self
    {
        return new self(ucwords($this->value));
    }

    public function split(self $separator = new self(' '))
    {
        return array_map([$this, 'new'], explode($separator->value, $this->value));
    }

    public function matchesWithPattern(string $pattern): bool
    {
        return preg_match("$pattern", $this->value);
    }

    public function quote(): self
    {
        return static::new('"')->concat($this)->concat(static::new('"'));
    }

    public function startsWith(self $str): bool
    {
        return str_starts_with($this->value, $str->value);
    }

    public function endsWith(self $str): bool
    {
        return str_ends_with($this->value, $str->value);
    }

    public function isAlpha(bool $ignoreWhitespace = false): bool
    {
        $str = $this;

        if ($ignoreWhitespace) {
            $str->replace(static::new(' '), static::empty());
        }

        return ctype_alpha($str->value);
    }

    public function isNumeric(bool $ignoreWhitespace = false): bool
    {
        $str = $this;

        if ($ignoreWhitespace) {
            $str->replace(static::new(' '), static::empty());
        }

        return ctype_alnum($str->value);
    }

    public function isUpper(): bool
    {
        return ctype_upper($this->value);
    }

    public function isLower(): bool
    {
        return ctype_lower($this->value);
    }
}
