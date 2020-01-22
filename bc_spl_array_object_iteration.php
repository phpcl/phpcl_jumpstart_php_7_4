<?php
$obj = new ArrayObject(['A','B','C']);

// doesn't work in PHP 7.4
echo "\n\nUsing current() and next():\n";
reset($obj);
while ($item = current($obj)) {
    echo $item . ' ';
    next($obj);
}

// works OK
echo "\n\nUsing Iteration Methods:\n";
$it = $obj->getIterator();
while ($item = $it->current()) {
    echo $item . ' ';
    $it->next();
}
echo "\n";

