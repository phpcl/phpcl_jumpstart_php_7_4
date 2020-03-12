#
# Builds container running PHP 7.3
#

# Pull base image.
FROM asclinux/linuxforphp-8.2-ultimate:7.3-nts

# Init git
COPY ./init.sh /srv/jumpstart
RUN chmod +x /srv/jumpstart/*.sh
RUN /srv/jumpstart/init.sh

# Set up script to stop web services
COPY ./no_svcs.sh /usr/bin
RUN chmod +x /usr/bin/no_svcs.sh

# Copy correct php.ini file for this version of PHP
RUN cp -v /srv/jumpstart/phpcl_jumpstart_php_7_4/php.ini.73 /etc/php.ini
