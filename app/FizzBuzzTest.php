<?php

namespace FizzBuzzTest;

/**
 * Class FizzBuzz
 * @package FizzBuzzTest
 */
class FizzBuzz
{
    /**
     * This method is responsible for taking a min and max ranged input
     * and returning an iterable object containing the results of a
     * modulo condition to that matches the classes "Fizz Buzz" test.
     *
     * @param int $max
     * @param int $min
     * @return \Generator
     */
    public function getFizzBuzzResult(int $max, int $min = 1) : \Generator
    {
        // Anonymous function that switches over conditions to
        // then yield the result of the modulo.
        $mapNumber = function (int $numberToMod) : \Generator {
            switch (true) {
                case 0 === ($numberToMod % 3):
                    yield 'Fizz';
                    break;
                case 0 === ($numberToMod % 5):
                    yield 'Buzz';
                    break;
                default:
                    yield $numberToMod;
            }
        };

        // Iterate over a range between min and max.
        foreach (range($min, $max) as $number) {
            // Loop over yielded result of the mapNumber method.
            foreach ($mapNumber($number) as $result) {
                // Output yielded result to console.
                yield $result . ':' . $number;
            }
        }
    }
}
