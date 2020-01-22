<?php
$obj = new ArrayObject(['A','B','C']);

// doesn't work in PHP 7.4
echo "\n\nUsing current() and next():\n";
while ($item = current($obj)) {
    var_dump($item);
    next($obj);
}

// works OK
echo "\n\nUsing Iteration Methods:\n";
$it = $obj->getIterator();
while ($item = $it->current()) {
    var_dump($item);
    $it->next();
}


