<?php
// FFI preload example
FFI::load("/srv/jumpstart/phpcl_jumpstart_php_7_4/bubble.h");
opcache_compile_file("/srv/jumpstart/phpcl_jumpstart_php_7_4/bubble.php");
