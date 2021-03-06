# Manual Setup
Source Code for PHP-CL PHP 7.4 JumpStart Course

## VM
* Install `docker`
  * CentOS: https://docs.docker.com/install/linux/docker-ce/centos/#install-docker-ce
  * Debian: https://docs.docker.com/install/linux/docker-ce/debian/
  * Fedora: https://docs.docker.com/install/linux/docker-ce/fedora/
  * Ubuntu: https://docs.docker.com/install/linux/docker-ce/ubuntu/
  * Windows: https://docs.docker.com/docker-for-windows/install/
  * Mac: https://docs.docker.com/docker-for-mac/install/
### Set up a container for PHP 7.4
* Pull `Linux for PHP` images for PHP 7.4:
  * See: https://hub.docker.com/r/asclinux/linuxforphp-8.2-ultimate/tags/
  * Example:
```
docker pull asclinux/linuxforphp-8.2-ultimate:7.4-nts
```
* Make a note of the image and tag (hereafter referred to as `IMAGE` and `TAG`)
* Create a volume `jumpstart_php74`
```
docker volume create jumpstart_php74
```
* Run PHP 7.4 image and mount the volume.  Replace `IMAGE` and `TAG` with the values recorded above.
```
docker run -dit --name jumpstart_php74 -v ${PWD}/:/srv/www -p 8484:80 -p 10444:443 -p 2224:22 --mount source=jumpstart_php74,target=/srv/jumpstart IMAGE:TAG lfphp
```
* From a terminal window/command line prompt open a shell to PHP 7.4:
```
docker exec -it jumpstart_php74 /bin/bash
```
* Restore files from repo for course
```
cd /srv/jumpstart
git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4
```
* Change `php.ini` settings for maximum error reporting
```
cp /srv/jumpstart/phpcl_jumpstart_php_7_4/php.ini.74 /etc/php.ini
```
* Connect repo to container web server
```
ln -s /srv/jumpstart/phpcl_jumpstart_php_7_4 /srv/www/phpcl_jumpstart_php_7_4
```
* Access container web site from your browser
```
http://localhost:8484/phpcl_jumpstart_php_7_4
```
### Set up a container for PHP 7.3
* Pull `Linux for PHP` images for PHP 7.3:
  * See: https://hub.docker.com/r/asclinux/linuxforphp-8.2-ultimate/tags/
  * Example:
```
docker pull asclinux/linuxforphp-8.2-ultimate:7.3-nts
```
* Create a volume `jumpstart_php73`
```
docker volume create jumpstart_php73
```
* Run the PHP 7.3 PHP for Linux image:
```
docker run -dit --name jumpstart_php73 -v ${PWD}/:/srv/www -p 8383:80 -p 10433:443 -p 2223:22 --mount source=jumpstart_php73,target=/srv/jumpstart asclinux/linuxforphp-8.2-ultimate:7.3-nts lfphp
```
* From a terminal window/command line prompt open a shell to PHP 7.3:
```
docker exec -it jumpstart_php73 /bin/bash
```
* Restore files from repo for course
```
cd /srv/jumpstart
git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4
```
* Change `php.ini` settings for maximum error reporting
```
cp /srv/jumpstart/phpcl_jumpstart_php_7_4/php.ini.73 /etc/php.ini
```
* Connect repo to container web server
```
ln -s /srv/jumpstart/phpcl_jumpstart_php_7_4 /srv/www/phpcl_jumpstart_php_7_4
```
* Access container web site from your browser
```
http://localhost:8383/phpcl_jumpstart_php_7_4
```

## Run examples side-by-side
* Install PHP on your host computer
* Clone the repository into your home directory (`/home/your_home`)
```
cd
git clone https://github.com/phpcl/phpcl_jumpstart_php_7_4
```
* Run the PHP built-in web server
```
cd phpcl_jumpstart_php_7_4
php -S localhost:8888
```
* Access from your browser: `http://localhost:8888/`

## Preloading Demos
* Create a user `test`
```
useradd test
```
* Change ownership of preload demo files to the `test` user
```
chown preload* test
```

### OPCache Preloading Demo
* Copy the `php.ini` file configured for the demo
```
cp php.ini.opcache /etc/php.ini
```
* Restart `php-fpm`
```
/etc/rc.d/init.d/php-fpm restart
```
* Run the demo program
```
php new_opcache_preload.php
```

### FFI Preloading Demo
NOTE: as of 2019-12-28 this demo does not work on a LfPHP container running PHP 7.4.0
* Copy the `php.ini` file configured for the demo
```
cp php.ini.ffi /etc/php.ini
```
* Restart `php-fpm`
```
/etc/rc.d/init.d/php-fpm restart
```
* Run the demo program
```
php ffi_preload.php
```
