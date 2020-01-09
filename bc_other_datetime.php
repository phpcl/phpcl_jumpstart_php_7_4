<?php
// see also: https://bugs.php.net/bug.php?id=68406
$tz1 = new DateTimeZone('Asia/Bangkok');
$tz2 = new DateTimeZone('Asia/Bangkok');
$d = new DateTime('2020-01-01 01:01:01', $tz1);

echo "\nBefore:\n";
$reflect = new ReflectionObject($d);
echo $reflect . "\n";

// in previous versions of PHP accessible props were left behind after
// var_dump()
var_dump($d->getTimezone(), $tz2);
echo ($tz2 == $d->getTimezone()) ? 'YES' : 'NO'; 

echo "\nAfter:\n";
$reflect = new ReflectionObject($d);
echo $reflect . "\n";
