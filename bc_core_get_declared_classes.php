<?php
class Test
{
    public function getTest()
    {
        return new class() { public function __invoke() { return 'TEST'; } };
    }
}
$declared = get_declared_classes();
echo wordwrap(implode(' : ', $declared), 120) . "\n";


