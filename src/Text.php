<?php

namespace Primitive;

class Text extends Primitive
{
    public function __construct(string $value)
    {
        if (!is_string($value)) {
            throw new \Exception('Error: value is not string');
        }

        $this->value = $value;
    }

    public function length()
    {
        return strlen($this->value);
    }
}