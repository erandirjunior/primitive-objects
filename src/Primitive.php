<?php

namespace Primitive;

class Primitive
{
    protected static $staticMethods;

    protected $objectMethods;

    protected $value;

    public static function __callStatic($name, $arguments)
    {
        if (!isset(static::$staticMethods[$name])) {
            throw new \Exception("Function `{$name}` not found");
        }

        $function = static::$staticMethods[$name];

        return $function(...$arguments);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}