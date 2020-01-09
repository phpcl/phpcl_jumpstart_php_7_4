<?php
echo "\nNull Coalesce Operator\n";
// existing use of null coalesce op
$params['xyz'] = $params['xyz'] ?? 'EXISTING';
// null coalesce assignment op
$params['abc'] ??= 'ASSIGNED';
var_dump($params);

echo "\nArray Unpacking\n";
// array unpacking
$arr1 = [1,2,3];
$arr2 = ['A','B','C'];
$full = [...$arr1, ...$arr2];
var_dump($full);

echo "\nNumeric Separator\n";
$num['float'] = 123_456.123_456;
$num['int']   = 123_456_789;
$num['hex']   = 0xFF_FE_FD_FC;
$num['bin']   = 0b0111_1011;
var_dump($num);

echo "\n__toString() Exception\n";
class Test {
    public function __toString() {
        throw new Exception('Usage Not Allowed');
    }
}
$test = new Test();
try {
    echo $test;
} catch (Exception $e) {
    echo get_class($e) . ':' . $e->getMessage() . "\n";
}

echo "\narray_merge()\n";
$test = array_merge();
var_dump($test);

