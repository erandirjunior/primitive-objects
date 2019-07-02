<?php

namespace Primitive;

/**
 * Class Text
 * @package Primitive
 *
 * @method int length()
 * @method array explode($delimiter, $string, $limit = null)
 */
class Text extends Primitive
{
	protected $objectMethods = [
		'length' => 'strlen',
		'toArray' => 'explode',
	];

	protected static $staticMethods = [
		'explode' => 'explode',
		'join' => 'implode'
	];

    public function __construct($value)
    {
        if (!is_string($value)) {
            throw new \Exception('Error: value is not string');
        }

        $this->value = $value;
    }

	public function toArray($delimiter)
	{
		return explode($delimiter, $this->value);
    }
}