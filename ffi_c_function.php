<?php
$func = <<<EOT
#include <stdio.h>
void bubble_sort(long list[], long n);
void bubble_sort(long list[], long n) 
{
  long c, d, t;
  for (c = 0 ; c < n - 1; c++) {
    for (d = 0 ; d < n - c - 1; d++) {
      if (list[d] > list[d+1]) {
        /* Swapping */
        t         = list[d];
        list[d]   = list[d+1];
        list[d+1] = t;
      }
    }
  }
}
EOT;
$ffi = FFI::cdef($func);
$array = FFI::new("long[1024]");
// create array with random numbers
for ($i = 0; $i < 10; $i++) $array[$i] = rand(0,9999);
// display current state
for ($i = 0; $i < count($array); $i++) echo $array[$i] . ',';
