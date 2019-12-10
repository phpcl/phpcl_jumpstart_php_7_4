<?php
class Test extends ArrayObject
{
    public $alpha = ['A','B','C'];
    public $num   = 12345;
}
$obj = new Test();
$vars = new ReflectionObject($obj);
var_dump($vars->getProperties());
