<?php
$ch = curl_init('http://localhost/dump_files_superglobal.php');
$source = 'https://php-cl.com/img/doug_in_office_800px.png';
$cfile = new CURLFile($source,'image/jpeg','test_name');
// this throws an exception:
try {
    $string = serialize($cfile);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "\n";
