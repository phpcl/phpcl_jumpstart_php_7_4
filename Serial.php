<?php
class SerialA implements Serializable {
    private $prop;
    public function __construct()
    {
         $this->prop = new DateTime();
    }
    public function serialize() {
        return serialize($this->prop);
    }
    public function unserialize($payload) {
        $this->prop = unserialize($payload);
    }
}
class SerialB extends SerialA {
    private $prop;
    public function serialize() {
        return serialize([$this->prop, parent::serialize()]);
    }
    public function unserialize($payload) {
        [$prop, $parent] = unserialize($payload);
        parent::unserialize($parent);
        $this->prop = $prop;
    }
}
