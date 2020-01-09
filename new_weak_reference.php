<?php
$obj1 = new ArrayObject([1,2,3]);
$obj2 = $obj1;
$obj3 = new ArrayObject(['A','B','C']);

echo "\nStrong Reference\n";
// obj1 has a strong reference
$weakref = WeakReference::create($obj1);
var_dump($weakref->get());
unset($obj1);
var_dump($weakref->get());

echo "\nWeak Reference\n";
// obj3 only has a weak reference
$weakref = WeakReference::create($obj3);
var_dump($weakref->get());
unset($obj3);
var_dump($weakref->get());

