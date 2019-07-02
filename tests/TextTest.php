<?php

namespace Primitive\Test;

use PHPUnit\Framework\TestCase;
use Primitive\Text;

class TextTest extends TestCase
{
	/**
	 * @var Text
	 */
	private $text;

	protected function setUp(): void
	{
		$this->text = new Text('Text');
	}

	public function testLength()
	{
		$this->assertEquals(4, $this->text->length());
	}

	public function testToArray()
	{
		$expected = ['Te', 't'];
		$this->assertEquals($expected, $this->text->toArray('x'));
	}

	public function testExplode()
	{
		$expected = ['Te', 't'];
		$this->assertEquals($expected, Text::explode('x', 'Text'));
	}

	/**
	 * @testQueryExcept
	 * @runInSeparateProcess
	 **/
	public function testException()
	{
		$this->expectException(\Exception::class);

		$textError = new Text(function(){});
	}
}