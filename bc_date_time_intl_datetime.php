<?php
// taken from: https://bugs.php.net/bug.php?id=68406

$tz1 = new DateTimeZone('Asia/Bangkok');
$tz2 = new DateTimeZone('Asia/Bangkok');

$d = new DateTime('2020-01-01 01:01:01', $tz1);
var_dump($d, $tz1, $tz2);

echo ($tz2 == $d->getTimezone()) ? 'yes' : 'no';

