<?php
// old approach
class UserOld
{
     protected $id;
     protected $name;
     public function setId(int $id)
     {
         $this->id = $id;
     }
     public function setName(string $name)
     {
         $this->name = $name;
     }
     public function getId()
     {
         return $this->id;
     }
     public function getName()
     {
         return $this->name;
     }
}

// data type change is "setId()" is not prevented
class OldProblem extends UserOld
{
     public function setId(int $id)
     {
         $this->id = md5($id);
     }
}


// new approach
class UserNew
{
     public int $id;
     public string $name;
}

// data type change is "setId()" is prevented
class OldProblem extends UserNew
{
     public function setId($id)
     {
         $this->id = md5($id);
     }
}

