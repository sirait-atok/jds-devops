FROM siraitatok/jds-base:php7.3-apache2

WORKDIR  /var/www/html/
ADD . /var/www/html/

CMD /usr/sbin/httpd -D FOREGROUND