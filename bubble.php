<?php
// FFI preload example
final class Bubble
{
    private static $ffi = null;
    public function __construct() {
        if (is_null(self::$ffi)) {
            self::$ffi = FFI::scope("BUBBLE");
        }
    }
    public function sort(&$array, $max) {
       $ffi->bubble_sort($array, $max);
       return TRUE;
    }
    public function show($array)
    {
        $count = 3;
        $output = '| ';
        for ($i = 0; $i < count($array); $i++) {
            $output .= sprintf("%02d : %4d | \t", $i, $array[$i]);
            if ($count-- === 0) {
                $count = 3;
                $output .= PHP_EOL . '| ';
            }
        }
        return substr($output,0,-2) . PHP_EOL;
    }
}
