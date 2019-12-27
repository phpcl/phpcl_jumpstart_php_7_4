<?php
class Test
{
    public $strategy;
    public function __construct()
    {
        $this->strategy = [
            'add' => fn($a, $b) => $a + $b,
            'sub' => fn($a, $b) => $a - $b,
            'mul' => fn($a, $b) => $a * $b,
            'div' => fn($a, $b) => $a / $b
        ];
    }
    public function do($strategy, $a, $b)
    {
        return $this->strategy[$strategy]($a, $b);
    }
}
$test = new Test();
$a = 7;
$b = 4;
foreach (array_keys($test->strategy) as $method) {
    echo ucfirst($method) 
         . "\t" . $a 
         . "\t" . $b 
         . "\t" . $test->do($method,$a,$b)
         . "\n";
}

