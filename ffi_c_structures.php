<?php
$struct = <<<EOT
struct Bad  {   
	char c;      
	double d;       
	int i;     
}; 
struct Good {   
	double d;     
	int i; 
	char c;          
};
EOT;
$ffi = FFI::cdef($struct);
$bad = $ffi->new("struct Bad");
$good = $ffi->new("struct Good");

echo "\nBad Alignment:\t" . FFI::alignof($bad);
echo "\nBad Size:\t" . FFI::sizeof($bad);
echo "\nGood Alignment:\t" . FFI::alignof($good);
echo "\nGood Size:\t" . FFI::sizeof($good);
