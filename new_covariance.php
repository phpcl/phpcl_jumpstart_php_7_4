<?php
class ArrFactory implements Factory {
    protected array $data;
    public function make($data): ArrayObject
    {
        $this->data = $data;
        return new ArrayObject($this->data);
    }
}

$factory = new ArrFactory();
$obj1 = $factory->make([1,2,3]);
$obj2 = $factory->make(['A','B','C']);
var_dump($obj1, $obj2); 
