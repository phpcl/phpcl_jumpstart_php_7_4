#!/bin/bash
useradd test
chown preload* test
cp php.ini.opcache /etc/php.ini
/etc/rc.d/init.d/php-fpm restart
