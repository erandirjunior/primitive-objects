<?php

namespace Primitive;

/**
 * Class Boolean
 * @package Primitive
 *
 * @method static bool isBoolean(bool $boolean)
 */
class Boolean extends Primitive
{
    protected static $staticMethods = [
        'isBoolean' => 'is_bool'
    ];

    /**
     * Return if value is truth or falsy.
     *
     * @param $value
     * @return bool
     */
    public static function BooleanOf($value): bool
    {
        return !!$value;
    }
}