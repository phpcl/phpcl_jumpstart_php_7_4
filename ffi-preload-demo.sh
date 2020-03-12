#!/bin/bash
cp php.ini.ffi /etc/php.ini
/etc/rc.d/init.d/php-fpm restart
