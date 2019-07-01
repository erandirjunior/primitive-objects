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

        var_dump($function(...$arguments));
        var_dump($arguments);
        var_dump(is_bool(false));
        var_dump(call_user_func_array($function, $arguments));
        return call_user_func_array($function, $arguments);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}