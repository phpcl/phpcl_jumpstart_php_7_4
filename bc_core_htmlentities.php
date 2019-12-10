<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$contents = file_get_contents(__DIR__ . '/encoded_using_utf16.txt');
echo htmlentities($contents);