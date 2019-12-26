<?php
// demonstrates typed properties
include __DIR__ . '/Users.php';
try {
    // type hinting in the constructor will catch type errors
    $old = new UserOld(12345, 'Andrew Caya');
    // however nothing stops the program from later modifying the type
    var_dump($old->getId());
    // type hinting in the constructor will catch type errors
    $new = new UserNew(12345, 'Andrew Caya');
    // property level type hints will stop any change of type 
    var_dump($new->getId());
} catch (Error $e) {
    echo $e->getMessage();
}
echo PHP_EOL;
