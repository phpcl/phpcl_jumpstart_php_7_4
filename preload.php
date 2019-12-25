<?php
// FFI preload example
FFI::load(__DIR__ . "/bubble.h");
opcache_compile_file(__DIR__ . "/bubble.php");
