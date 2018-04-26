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
     * @expectedExceptionCode 500
     * @expectedExceptionMessage "Arguments must be of type integer only."
     */
    public function testMethodAcceptsOnlyIntegers()
    {

    }

    /**
     * @expectedExceptionCode 500
     * @expectedExceptionMessage "Output must be of type integer or string only."
     */
    public function testMethodOutputsIntegerOrString()
    {

    }

    /**
     * Asserts inputs mod 3 print "Fizz".
     */
    public function testDivisibleByThreePrintsFizz()
    {

    }

    /**
     * Asserts inputs mod 3 print "Buzz".
     */
    public function testDivisibleByFivePrintsBuzz()
    {

    }

    /**
     * Asserts inputs mod 3 and 5 print "Fizz Buzz".
     */
    public function testDivisibleByThreeAndFivePrintsFizzBuzz()
    {

    }

    /**
     * Asserts inputs not of mod 3 and 5 print each integer.
     */
    public function testNonDivisibleByThreeOrFivePrintsTheInputInteger()
    {

    }

    /**
     * Assert "Fizz", "Buzz", "Integer" with a data set.
     * @dataProvider fizzBuzzTestDataProvider
     */
    public function testFizzBuzzIntegerRangeWithDataSet(int $value, $expected)
    {
        $this->assertEquals($expected, $value);
    }

    public function fizzBuzzTestDataProvider() : array
    {
        return [
        ];
    }
}
