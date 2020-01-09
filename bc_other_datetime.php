<?php
// see also: https://bugs.php.net/bug.php?id=68406
$tz1 = new DateTimeZone('Asia/Bangkok');
$tz2 = new DateTimeZone('Asia/Bangkok');
$d = new DateTime('2020-01-01 01:01:01', $tz1);

$reflect = new ReflectionObject($d);
$str1 = $reflect->__toString();

// in previous versions of PHP accessible props were left behind after
// var_dump()
var_dump($d->getTimezone(), $tz2);
echo ($tz2 == $d->getTimezone()) ? 'YES' : 'NO'; 
echo "\n"; 

$reflect = new ReflectionObject($d);
$str2 = $reflect->__toString();

// results
echo "\nReflection before and after results: ";
echo ($str1 == $str2) ? 'SAME' : 'DIFFERENT';
echo "\n"; 

echo "\nBefore:\n$str1\n";
echo "\nAfter:\n$str2\n";
