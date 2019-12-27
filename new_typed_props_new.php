<?php
// new approach
class User
{
     public int $id;
     public string $name;
}

// property typing will catch type errors
try {
    $old = new User();
    $old->id = 'ABC';
} catch (Error $e) {
    echo "\nProperty typing will catch type errors:\n";
    echo $e->getMessage() . "\n";
}

// property typing will prevent data type change
class Problem extends User
{
     public function setId(int $id)
     {
         $this->id = md5($id);
     }
}

echo "\nProperty typing will prevent runtime changes:\n";
$old = new Problem();
$old->setId(12345);
var_dump($old->id);
echo PHP_EOL;

