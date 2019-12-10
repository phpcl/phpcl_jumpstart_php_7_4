<?php
$obj = new ArrayObject();
$obj['alpha'] = ['A','B','C'];
$obj['num']   = 12345;

echo "\nUsing (array) Cast:\n";
var_dump((array) $obj);

echo "\nResult of get_object_vars():\n";
$vars = get_object_vars($obj);
var_dump($vars);

echo "\nUsing reset(), current() and next():\n";
reset($vars);
while ($item = current($vars)) {
    var_dump($item);
    next($vars);
}
