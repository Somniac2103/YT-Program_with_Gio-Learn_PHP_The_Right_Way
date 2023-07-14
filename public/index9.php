<?php
//LESSON 9: ARRAY DATA TYPE

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo $programmingLanguages[1];

$programmingLanguages[1] = 'C++';

echo $programmingLanguages[1];

var_dump($programmingLanguages);

$programmingLanguages[] = 'Javascript';
array_push($programmingLanguages, 'C#', 'C', 'Go');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);

$programmingLanguages = [
  'php' => '8.0',
  'python' => '3.9',

];


echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php'];

$newLanguage = 'bing';
$programmingLanguages[$newLanguage] = '1.15';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages[$newLanguage] = '1.15';

echo array_pop($programmingLanguages);
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo array_shift($programmingLanguages);
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages = ['PHP', 'Java', 'Python'];
unset($programmingLanguages[2], $programmingLanguages[0]);
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

