<?php
// PHP produced serialized string
$test = new stdClass();
$test->num = 12345;
$save = serialize($test);
echo $save;
echo PHP_EOL;

// custom formatted string
$new1 = 'O:8:"stdClass":1:{s:3:"num";i:12345;}';
$num1 = unserialize($new1);
var_dump($num1);

// custom formatted string
$new2 = 'o:8:"stdClass":1:{s:3:"num";i:12345;}';
$num2 = unserialize($new2);
var_dump($num2);

