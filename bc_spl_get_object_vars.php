<?php
$obj = new ArrayObject(['A','B','C']);

echo "\nResult of get_object_vars():\n";
var_dump(get_object_vars($obj));

echo "\n\nUsing reset(), current() and next():\n";
while ($item = current($obj)) {
    var_dump($item);
    next($obj);
}

echo "\nUsing (array) Cast:\n";
var_dump((array) $obj);

