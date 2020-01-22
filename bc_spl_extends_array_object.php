<?php
class Test extends ArrayObject
{
    public $id = 12345;
    public $name = 'Cal Evans';
    public function getVars()
    {
        return get_object_vars($this);
    }
}

$test = new Test(['A' => 1,'B' => 2,'C' => 3]);

// using `get_object_vars()` doesn't work in PHP 7.4
var_dump($test->getVars());

// using `getArrayCopy()` works OK
var_dump($test->getArrayCopy());

// introspecting object
var_dump($test);

