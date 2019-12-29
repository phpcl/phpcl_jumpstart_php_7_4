<?php
include __DIR__ . '/Serial.php';
include __DIR__ . '/SerialFixed.php';

function test($obj)
{
    echo get_class($obj);
    echo "\nBefore Serialization:\n";
    var_dump($obj);
    $test = serialize($obj);
    echo "\nSerialized: " . $test . "\n";
    echo "\nAfter Serialization:\n";
    var_dump(unserialize($test));
    echo "\n";
}

test(new SerialB());
test(new SerialFixedB());

