<?php
class ArrFactory implements Factory {
    protected array $data;
    public function make($data): ArrayObject
    {
        $this->data = $data;
        return new ArrayObject($this->data);
    }
}
