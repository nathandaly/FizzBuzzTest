<?php

declare(strict_types=1);

namespace FizzBuzzTest\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest
 */
class FizzBuzzTest extends TestCase
{
    /**
     * @var \FizzBuzzTest\FizzBuzz
     */
    protected $fizzbuzz;

    public function setUp()
    {
        $this->fizzbuzz = new \FizzBuzzTest\FizzBuzz();
    }

    public function testMethodReturnGenerator()
    {
        $this->assertInstanceOf('Generator', $this->fizzbuzz->getFizzBuzzResult(100, 1));
    }

    public function testDivisibleByThreePrintsFizz()
    {
        $this->expectOutputString('Fizz:12');

        foreach ($this->fizzbuzz->getFizzBuzzResult(12, 12) as $value) {
            echo $value;
        }
    }

    public function testDivisibleByFiveMustNotPrintFizz()
    {
        $this->expectOutputString('Fizz:12');

        foreach ($this->fizzbuzz->getFizzBuzzResult(12, 12) as $value) {
            echo $value;
        }
    }

    public function testDivisibleByThreeMustNotPrintFizz()
    {
        $this->expectOutputString('Buzz:50');

        foreach ($this->fizzbuzz->getFizzBuzzResult(50, 50) as $value) {
            echo $value;
        }
    }

    public function testNonDivisibleByThreeOrFivePrintsTheInputInteger()
    {
        $this->expectOutputString('98:98');

        foreach ($this->fizzbuzz->getFizzBuzzResult(98, 98) as $value) {
            echo $value;
        }
    }
}
