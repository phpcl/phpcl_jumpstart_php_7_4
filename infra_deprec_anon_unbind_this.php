<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Test { protected $name = 'Testy Tester'; }
class Fred { protected $name = 'Fred Flintstone'; }
$anon = new class() extends Test {
    public function getDump($obj = FALSE)
    {
        $func = function () { var_dump($this); };
        // deprecated:
        return ($obj !== FALSE) ? $func->bindTo($obj) : $func;
    }
};
echo $anon->getDump()() . "\n";
echo $anon->getDump(new Fred())() . "\n";
echo $anon->getDump(NULL)() . "\n";
