<?php
// old style
$addOld = function ($a, $b) { return $a + $b; };

// new style
$addNew = fn($a, $b) => $a + $b;

echo "Old: " . $addOld(7, 4) . "\n";
echo "New: " . $addNew(7, 4) . "\n";
echo "\n";
