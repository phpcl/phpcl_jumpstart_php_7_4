<?php
$obj = new ArrayObject([1,2,3]);
$mangled = get_mangled_object_vars($obj);
$algos = password_algos();

echo "\nget_mangled_object_vars()\n";
var_dump($mangled);

echo "\npassword_algos()\n";
var_dump($algos);

// other new functions:
/*
* sapi_windows_set_ctrl_handler()
* openssl_x509_verify()
* pcntl_unshare()
* SQLite3::backup()
* SQLite3Stmt::getSQL()
*/
