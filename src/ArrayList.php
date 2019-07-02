<?php

namespace Primitive;

/**
 * Class ArrayList
 * @package Primitive
 *
 * @method int add($value)
 * @method int remove()
 * @method int addFirst($values)
 * @method int removeFirst()
 * @method array filter(callable $callback, $flag = 0)
 * @method int length()
 * @method mixed firstKey()
 * @method mixed lastKey()
 */
class ArrayList extends Primitive
{
    /**
     * @var array
     */
    protected $objectMethods = [
        'add'           => 'array_push',
        'remove'        => 'array_pop',
        'addFirst'      => 'array_unshift',
        'removeFirst'   => 'array_shift',
        'filter'        => 'array_filter',
        'length'        => 'count',
        'firstKey'      => 'array_key_first',
        'lastKey'       => 'array_last_first'
    ];

    /**
     * ArrayList constructor.
     */
    public function __construct()
    {
        $this->value = [];
    }

    /**
     * Checks if the given key or index exists in the array.
     *
     * @param $key mixed
     * @return bool
     */
    public function hasKeys($key): bool
    {
        return array_key_exists($key, $this->value);
    }

    /**
     * Add value in array with key.
     *
     * @param $key
     * @param $value
     * @return ArrayList
     */
    public function addWithKey($key, $value): ArrayList
    {
        $this->value[$key] = $value;

        return $this;
    }

    /**
     * Remove value by key.
     *
     * @param $key
     * @return ArrayList
     */
    public function removeByKey($key): ArrayList
    {
        unset($this->value[$key]);

        return $this;
    }

    /**
     * Searches the array for a given value and returns the first corresponding key if successful.
     *
     * @param $value
     * @return int
     */
    public function search($value): int
    {
        return array_search($value, $this->value);
    }

    /**
     * Applies the callback to the elements of the given array.
     *
     * @param callable $callback
     * @return array
     */
    public function map(callable $callback)
    {
        return array_map($callback, $this->value);
    }
}