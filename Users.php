<?php
// trait
trait IdTrait
{
    public function __construct(int $id, string $name)
    {
        $this->id = md5($id);
        $this->name = $name;
    }
    public function getId() 
    { 
        return $this->id; 
    }
}
// old style:
class UserOld
{
    use IdTrait;
    protected $id;
    protected $name;
}
// new style:
class UserNew 
{
    use IdTrait;
    protected int $id;
    protected string $name;
}

