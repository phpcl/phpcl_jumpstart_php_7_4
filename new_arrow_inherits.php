<?php
// arrow functions inherit from the parent scope

$now = new DateTime();
$euroStyle = 'j F Y H:i:s';
$usaStyle  = 'F j, Y h:i:s a';

// old style
$old = function ($pattern) use ($now) { return $now->format($pattern) . "\n"; };
$new = fn($pattern) => $now->format($pattern) . "\n";

echo "Using Old Style:\n";
echo "Euro Style: " . $old($euroStyle);
echo "USA Style : " . $old($usaStyle);

echo "\nUsing New Style:\n";
echo "Euro Style: " . $new($euroStyle);
echo "USA Style : " . $new($usaStyle);

