<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;
use function Hexlet\Phpunit\Utils\returnSomeString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
    public function testSomeString(): void
    {
        $this->assertEquals('', returnSomeString());
    }
}