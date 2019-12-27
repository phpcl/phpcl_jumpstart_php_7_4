<?php
// demonstrates opcache preload
class OpUser1
{
    public int $id;
    public string $name = 'Andrew';
    public function talkToMe()
    {
        return '"Hello, my name is ' . $this->name;
    }
}

