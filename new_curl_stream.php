<?php
// Create a cURL handle
$ch = curl_init('http://localhost/dump_files_superglobal.php');

// Create a CURLFile object
$source = __DIR__ . '/test.txt';
//$source = 'https://php-cl.com/img/doug_in_office_800px.png';
$cfile = new CURLFile($source,'image/jpeg','test_name');

// Assign POST data
$data = array('test_file' => $cfile);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_NOPROGRESS, TRUE);

// Execute the handle
$response = curl_exec($ch);
echo $response;
