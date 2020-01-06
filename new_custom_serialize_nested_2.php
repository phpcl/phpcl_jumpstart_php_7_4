<?php
class A {
    private $prop = 'AAA';
    public function __serialize(): array {
        return ["prop" => $this->prop];
    }
    public function __unserialize(array $data) {
        $this->prop = $data["prop"];
    }
}
class B extends A {
    private $prop = 'BBB';
    public function __serialize(): array {
        return [
            "prop" => $this->prop,
            "parent_data" => parent::__serialize(),
        ];
    }
    public function __unserialize(array $data) {
        parent::__unserialize($data["parent_data"]);
        $this->prop = $data["prop"];
    }
}
$b = new B();
var_dump($b);
$str = serialize($b);
$b2  = unserialize($str);
var_dump($b2);

