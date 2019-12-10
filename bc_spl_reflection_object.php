<?php
$obj = new ArrayObject();
$obj['alpha'] = ['A','B','C'];
$obj['num']   = 12345;
$vars = new ReflectionObject($obj);
var_dump($vars->getProperties());
