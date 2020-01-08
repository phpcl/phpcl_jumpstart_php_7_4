<?php
function show($label, $item)
{
    return $label . ":\t" . $item . "\n";
}

echo show('PASSWORD_DEFAULT', PASSWORD_DEFAULT);
echo show('PASSWORD_BCRYPT', PASSWORD_BCRYPT);
echo show('PASSWORD_ARGON2I', PASSWORD_ARGON2I);    // PHP 7.2+
echo show('PASSWORD_ARGON2ID', PASSWORD_ARGON2ID);  // PHP 7.3+

// works OK
$password = 'password';
$hash     = password_hash($password, PASSWORD_DEFAULT);
echo show('Using Constant', $hash);
var_dump(password_get_info($hash));

// works in PHP 7.4 but not recommended
$hash     = password_hash($password, 1);
echo show('Hard-Coded', $hash);
var_dump(password_get_info($hash));
