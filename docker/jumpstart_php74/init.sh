#!/bin/bash
if [ -d /srv/jumpstart/phpcl_jumpstart_php_7_4 ]
then
    cd /srv/jumpstart/phpcl_jumpstart_php_7_4
    git pull
else
    git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4 /srv/jumpstart/phpcl_jumpstart_php_7_4
fi
cp -v /srv/jumpstart/phpcl_jumpstart_php_7_4/php.ini.74 /etc/php.ini
rm /srv/www/phpcl_jumpstart_php_7_4
ln -s /srv/jumpstart/phpcl_jumpstart_php_7_4 /srv/www/phpcl_jumpstart_php_7_4
