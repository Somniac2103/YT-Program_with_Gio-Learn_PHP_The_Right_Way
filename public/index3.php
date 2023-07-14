<?php

declare(strict_types=1);

$completed = true;

$score = 75;

$price = 0.99;

$greeting = "Hello, Barry";

echo $completed . '<br />';
echo $score . '<br />';
echo $price . '<br />';
echo $greeting . '<br />';

echo gettype($completed) . '<br/>';
var_dump($completed);

$x = (int) '5';
var_dump($x);
