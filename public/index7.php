<?php

//LESSON 7: STRING DATA TYPE

$firstName = 'Will';
$lastName = "${firstName} Smith";

echo $lastName;

$name = $firstName . ' ' . $lastName;

echo $name . '<br/>';

$name[-2] = 'I';

echo $name;


//Heredoc
$text = <<<TEXT
line 1
Line 2
line 3
TEXT;

echo $text;


//Nowdoc

$text = <<<'TEXT'
line 1
Line 2
line 3
TEXT;

echo $text;
