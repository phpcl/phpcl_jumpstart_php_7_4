<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$contents = file_get_contents(__DIR__ . '/test_for_htmlentities.txt');

function showResults($contents, $actual)
{
    $encoded = mb_convert_encoding($contents, $actual);
    echo "\nLength in Bytes: " . strlen($encoded) . "\n";
    echo "\nActual Encoding: $actual";
    echo "\nEncoding Detected: " . mb_detect_encoding($encoded) . "\n";
    echo htmlentities($encoded, ENT_SUBSTITUTE);
}

// UTF 8
showResults($contents, 'UTF-8');
// UTF 16
showResults($contents, 'UTF-16');
// ISO-8859-7
showResults($contents, 'ISO-8859-7');

