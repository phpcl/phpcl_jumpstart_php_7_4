<?php
$obj = new ArrayObject(['A' => 1,'B' => 2,'C' => 3]);

// works for PHP 7.x
var_dump($obj->getArrayCopy());

// doesn't work in PHP 7.4
var_dump(get_object_vars($obj));
