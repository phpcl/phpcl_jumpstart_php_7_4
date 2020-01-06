<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

// nested ternary now needs ()
echo "\nNested Ternary **********************\n";
$a = 'ABC';
$b = 'DEF';
$c = 'GHI';
// (should) print the largest of $a, $b, $c:
echo $a >= $b ? $a : $b >= $c ? $b : $c;
echo PHP_EOL;

// {} array syntax
echo "\n{} array syntax ***********************\n";
$arr = ['A' => 1, 'B' => 2, 'C' => 3];
echo "\nThis is deprecated: " . $arr{'B'} . "\n";
echo "\nThis is OK: " . $arr['B'] . "\n";
echo PHP_EOL;

// "real" type: replace with "float"
echo "\nReal Type **********************\n";
$int = 12345;
$real = (real) $int;
echo (is_real($real)) ? 'REAL' : 'UNREAL';
echo PHP_EOL;

// *magic_quote* functions deprecated
echo "\n Magic Quotes **********************\n";
echo 'Magic Quotes Are: ';
echo (get_magic_quotes_gpc()) ? 'ON' : 'OFF';
echo PHP_EOL;

// array_key_exists() on objects deprecated
echo "\n array_key_exists() **********************\n";
class Test 
{ 
    public $id   = 111;
    public $name = 'Andrew';
    public $city = 'Quebec City';
}
$obj = new Test();
echo (array_key_exists('name', $obj)) ? $obj->name : 'Unknown';
echo PHP_EOL;

// the "FILTER_SANITIZE_MAGIC_QUOTES" filter is aliased to move away
// from magic quotes terminology
echo "\nFILTER_SANITIZE_MAGIC_QUOTES ***************\n";
$str = <<<EOT
This is "a string" with some 'quotes'.
EOT;
echo filter_var($str, FILTER_SANITIZE_MAGIC_QUOTES);
echo PHP_EOL;
// use this instead:
echo filter_var($str, FILTER_SANITIZE_ADD_SLASHES);
echo PHP_EOL;

// Reflection*::export() deprecated: use __toString() instead
echo "\nReflection::export() *************************\n";
$reflect = new ReflectionClass('Test');
echo Reflection::export($reflect);
echo $reflect;

// implode() used to take arguments in either order (!)
echo "\nimplode() ************************************\n";
$arr = ['A','B','C','D','E','F'];
// bad syntax: allowed in versions prior to PHP 7.4
echo implode($arr, ':');
echo PHP_EOL;
// good syntax: follows same syntax as "explode()"
echo implode(':', $arr);
echo PHP_EOL;

// unbinding $this for non-static anonymous functions
echo "\n$this bindTo ********************************\n";
$anon = new class() extends Test {
    public function getName() 
    { 
        $func = function () { return $this->name ?? 'Unknown'; }; 
        $func->bindTo(NULL);
        return $func;
    }
};
echo $anon->getName()();
echo PHP_EOL;

// money_format() is deprecated 
echo "\nmoney_format() *********************************\n";
$number = 1234567.89;
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n";
setlocale(LC_MONETARY, 'fr_FR');
echo money_format('%i', $number) . "\n";
// NumberFormatter::formatCurrency
$fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY );
echo $fmt->formatCurrency($number, 'USD') . "\n";
$fmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY );
echo $fmt->formatCurrency($number, 'EUR') . "\n";

