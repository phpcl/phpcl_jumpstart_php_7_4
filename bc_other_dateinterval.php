<?php
// DateInterval Comparisons
$di1 = new DateInterval('P90D');
$di2 = new DateInterval('P2W');
$di3 = new DateInterval('P2W');
echo ($di1 == $di2) ? 'Not PHP 7.4' : 'PHP 7.4';
echo "\n";
echo ($di2 == $di3) ? 'Not PHP 7.4' : 'PHP 7.4';
echo "\n";
