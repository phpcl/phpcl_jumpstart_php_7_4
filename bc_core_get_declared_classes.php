<?php
class Test
{
    public function getTest()
    {
        return new class() { public function __invoke() { return 'TEST'; } };
    }
}
$declared = get_declared_classes();
$count = 4;
foreach ($declared as $class) {
    echo $class;
    if ($count--) {
        echo ' : ';
    } else {
        $count = 4;
        echo PHP_EOL;
    }
}
