#!/bin/bash
# this script sets up your computer to run PHP-CL JumpStart: PHP 7.4 example code
# Pull docker image for PHP 7.4
docker pull asclinux/linuxforphp-8.2-ultimate:7.4-nts
# Create a volume `jumpstart_php74`
docker volume create jumpstart_php74
# Run PHP 7.4 image and mount the volume.  Replace `IMAGE` and `TAG` with the values recorded above.
docker run -dit --name jumpstart_php74 -v ${PWD}/:/srv/www -p 8484:80 -p 10444:443 -p 2224:22 --mount source=jumpstart_php74,target=/srv/jumpstart IMAGE:TAG lfphp
# Restore files from repo for course
docker exec jumpstart_php74 /bin/bash -c "git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4 /srv/jumpstart/phpcl_jumpstart_php_7_4"
# Change `php.ini` settings for maximum error reporting
docker exec jumpstart_php74 /bin/bash -c "cp /srv/jumpstart/phpcl_jumpstart_php_7_4/php.ini.74 /etc/php.ini"
# Connect repo to container web server
docker exec jumpstart_php74 /bin/bash -c "ln -s /srv/jumpstart/phpcl_jumpstart_php_7_4 /srv/www/phpcl_jumpstart_php_7_4"
# Set up a container for PHP 7.3
docker pull asclinux/linuxforphp-8.2-ultimate:7.3-nts
docker volume create jumpstart_php73
# Run the PHP 7.3 PHP for Linux image:
docker run -dit --name jumpstart_php73 -v ${PWD}/:/srv/www -p 8383:80 -p 10433:443 -p 2223:22 --mount source=jumpstart_php73,target=/srv/jumpstart asclinux/linuxforphp-8.2-ultimate:7.3-nts lfphp
# From a terminal window/command line prompt open a shell to PHP 7.3:
docker exec jumpstart_php73 /bin/bash -c "git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4 /srv/jumpstart/phpcl_jumpstart_php_7_4"
# Change `php.ini` settings for maximum error reporting
docker exec jumpstart_php73 /bin/bash -c "cp /srv/jumpstart/phpcl_jumpstart_php_7_4/php.ini.73 /etc/php.ini"
# Connect repo to container web server
docker exec jumpstart_php73 /bin/bash -c "ln -s /srv/jumpstart/phpcl_jumpstart_php_7_4 /srv/www/phpcl_jumpstart_php_7_4"
# Run examples side-by-side
# Clone the repository into your home directory (`/home/your_home`)
git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4
# Run the PHP built-in web server
cd phpcl_jumpstart_php_7_4
echo "Run examples side-by-side from your browser: http://localhost:8888/"
php -S localhost:8888
