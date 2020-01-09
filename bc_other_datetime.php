<?php
// taken from: https://bugs.php.net/bug.php?id=68406

$tz1 = new DateTimeZone('Asia/Bangkok');
$tz2 = new DateTimeZone('Asia/Bangkok');

$d = new DateTime('2020-01-01 01:01:01', $tz1);
var_dump($d, $tz1, $tz2);

echo ($tz2 == $d->getTimezone()) ? 'yes' : 'no';
var_dump($d);
echo "\n";

// DateInterval Comparisons
$di1 = new DateInterval('P90D');
$di2 = new DateInterval('P2W');
echo ($di1 == $di2) ? 'Not PHP 7.4' : 'PHP 7.4';
echo "\n";
