<?php
function show($label, $item)
{
    return $label . ":\t" . $item . PHP_EOL;
}

echo show('PASSWORD_DEFAULT', PASSWORD_DEFAULT);
echo show('PASSWORD_BCRYPT', PASSWORD_BCRYPT);

// works OK
$password = 'password';
echo show('Using Constant', password_hash($password, PASSWORD_BCRYPT));

// doesn't work in PHP 7.4
echo show('Hard-Coded', password_hash($password, 1));

// these are now standard in PHP 7.4:
echo show('PASSWORD_ARGON2I', PASSWORD_ARGON2I);
echo show('PASSWORD_ARGON2ID', PASSWORD_ARGON2ID);
