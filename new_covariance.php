<?php
spl_autoload_register( function ($class) {
    $fn = __DIR__ . '/' . $class . '.php';
    include $fn;
});
$factory = new ArrFactory();
$obj1 = $factory->make([1,2,3]);
$obj2 = $factory->make(['A','B','C']);
var_dump($obj1, $obj2); 
