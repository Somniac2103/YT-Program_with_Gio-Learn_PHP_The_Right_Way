<?php
$firstName = 'Barry';

echo $firstName;

$firstName = 'Keith';

echo $firstName;

define('firstName', 'Salmon');

echo firstName;

const NICKNAME = 'Berfie';

echo NICKNAME;

//built in constant
echo PHP_VERSION;

//magic constant
echo __LINE__;

//variable variables

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar;
