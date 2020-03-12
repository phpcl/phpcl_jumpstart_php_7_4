# Source Code for PHP-CL PHP 7.4 JumpStart Course

## Setup
Choose a setup method:
* Run the setup script `setup.sh`, OR
* Use `docker-compose`
  * See SETUP_USING_DOCKER_COMPOSE.md, OR
* Perform setup steps manually
  * See SETUP_MANUALLY.md

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
