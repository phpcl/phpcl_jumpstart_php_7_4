<?php
set_include_path(__DIR__ . PATH_SEPARATOR . get_include_path());
echo get_include_path();
$ffi = FFI::cdef(
    "void bubble_sort(long [], long);",
    "bubble_sort.o");
$array = FFI::new("long[1024]");
// create array with random numbers
for ($i = 0; $i < 10; $i++) $array[$i] = rand(0,9999);
// display current state
for ($i = 0; $i < count($array); $i++) echo $array[$i] . ',';

