<?php
// "php-cl.com" transliterated into Thai
$unicode = 'พีเอ๊ะชพี-สี่เอล.com';
$ascii   = idn_to_ascii($unicode);
$reverse = idn_to_utf8($ascii);
echo "\nUnicode: $unicode\n";
echo "\nASCII: $ascii\n";
echo "\nReversed: $reverse\n";
