<?php
class Test extends ArrayObject
{
    public $id = 12345;
    public $name = 'Cal Evans';
    public function getVars()
    {
        // in PHP 7.4 this returns both internal props + formulated storage array
        return array_merge(
            get_object_vars($this),
            $this->getArrayCopy()
        );
    }
}

$test = new Test(['A' => 1,'B' => 2,'C' => 3]);
var_dump($test->getVars());
