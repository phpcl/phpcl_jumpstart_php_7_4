# phpcl_jumpstart_php_7_4
Source Code for PHP-CL PHP 7.4 JumpStart Course

## VM
* Install `docker`
  * CentOS: https://docs.docker.com/install/linux/docker-ce/centos/#install-docker-ce
  * Debian: https://docs.docker.com/install/linux/docker-ce/debian/
  * Fedora: https://docs.docker.com/install/linux/docker-ce/fedora/
  * Ubuntu: https://docs.docker.com/install/linux/docker-ce/ubuntu/
  * Windows: https://docs.docker.com/docker-for-windows/install/
  * Mac: https://docs.docker.com/docker-for-mac/install/
* Set up a container for PHP 7.4
    * Pull `Linux for PHP` images for PHP 7.4:
      * See: https://hub.docker.com/r/asclinux/linuxforphp-8.1-ultimate/tags/
```
docker pull asclinux/linuxforphp-8.1-ultimate:7.4-nts
```
    * Create a volume `jumpstart_php74`
```
docker volume create jumpstart_php74
```
    * Run the PHP 7.4 PHP for Linux image:
```
docker run -dit --name jumpstart_php74 -v ${PWD}/:/srv/www -p 8484:80 -p 10444:443 -p 2224:22 --mount source=jumpstart_php74,target=/srv/jumpstart asclinux/linuxforphp-8.1-ultimate:7.4-nts lfphp
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
    * Connect repo to container web server
```
ln -s /srv/jumpstart/phpcl_jumpstart_doctrine /srv/www/jumpstart
```
    * Access container web site from your browser
```
http://localhost:8484/jumpstart
```
* Set up a container for PHP 7.4
    * Pull `Linux for PHP` images for PHP 7.3:
      * See: https://hub.docker.com/r/asclinux/linuxforphp-8.1-ultimate/tags/
```
docker pull asclinux/linuxforphp-8.1-ultimate:7.3-nts
```
    * Create a volume `jumpstart_php74`
```
docker volume create jumpstart_php74
```
    * Run the PHP 7.4 PHP for Linux image:
```
docker run -dit --name jumpstart_php74 -v ${PWD}/:/srv/www -p 8484:80 -p 10443:443 -p 2224:22 --mount source=jumpstart_php73,target=/srv/jumpstart asclinux/linuxforphp-8.1-ultimate:7.3-nts lfphp
```
    * From a terminal window/command line prompt open a shell to PHP 7.3:
```
docker exec -it jumpstart_php73 /bin/bash
```
    * Restore files from repo for course
```
cd /srv/jumpstart
git clone https://github.com/phpcl/phpcl_jumpstart_php_7_3
```
    * Connect repo to container web server
```
ln -s /srv/jumpstart/phpcl_jumpstart_doctrine /srv/www/jumpstart
```
    * Access container web site from your browser
```
http://localhost:8383/jumpstart
```
