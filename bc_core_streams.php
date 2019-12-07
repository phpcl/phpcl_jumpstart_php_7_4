<?php
include __DIR__ .'/VariableStream.php';
stream_wrapper_register('var', 'VariableStream')
    or die('Failed to register protocol');

$fp = fopen('var://test', 'r+');
fwrite($fp, '<?php echo "TEST"; ?>' . PHP_EOL);
rewind($fp);
fpassthru($fp);
fclose($fp);
include 'var://test';