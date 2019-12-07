<?php
include __DIR__ .'/VariableStream.php';
stream_wrapper_register("var", "VariableStream")
    or die("Failed to register protocol");

$fp = fopen("var://myvar", "r+");
fwrite($fp, "line1\n");
fwrite($fp, "line2\n");
fwrite($fp, "line3\n");
rewind($fp);
while (!feof($fp)) echo fgets($fp);
fclose($fp);
