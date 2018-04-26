<?php

require_once './vendor/autoload.php';

$fizzBuzzTest = new \FizzBuzzTest\FizzBuzz();

foreach ($fizzBuzzTest->getFizzBuzzResult(100) as $value) {
    echo $value . PHP_EOL;
}