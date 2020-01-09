<?php
class A implements Serializable {
    private $prop = 'AAA';
    public function serialize() {
        return serialize($this->prop);
    }
    public function unserialize($payload) {
        $this->prop = unserialize($payload);
    }
}
class B extends A {
    private $prop = 'BBB';
    public function serialize() {
        return serialize([$this->prop, parent::serialize()]);
    }
    public function unserialize($payload) {
        [$prop, $parent] = unserialize($payload);
        parent::unserialize($parent);
        $this->prop = $prop;
    }
}
$b1 = new B();
var_dump($b1);
$str = serialize($b1);
echo $str . "\n";
$b2  = unserialize($str);
var_dump($b2);
