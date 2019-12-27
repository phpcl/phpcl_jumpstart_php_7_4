<?php
// old approach
class User
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

// type hinting in the constructor will catch type errors
try {
    $old = new User();
    $old->setId('ABC');
} catch (Error $e) {
    echo "\nType hinting in the constructor will catch type errors:\n";
    echo $e->getMessage() . "\n";
}

// data type change is "setId()" is not prevented
class Problem extends User
{
     public function setId(int $id)
     {
         $this->id = md5($id);
     }
}

// however, method level type hinting does not prevent runtime changes
try {
    $old = new Problem();
    $old->setId(12345);
} catch (Error $e) {
    echo "\nHowever, method level type hinting does not prevent runtime changes:\n";
    echo $e->getMessage() . "\n";
}
echo "\nHowever, method level type hinting does not prevent runtime changes:\n";
var_dump($old->getId());
echo PHP_EOL;

