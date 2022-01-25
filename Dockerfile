FROM siraitatok/jds-base:php7.3-apache2

RUN apk add --no-cache git tzdata php5-mysqli php5-mysql \
        && cp /usr/share/zoneinfo/Asia/Jakarta /etc/localtime \
        && echo "Asia/Jakarta" >  /etc/timezone

WORKDIR  /var/www/html/
ADD . /var/www/html/

CMD /usr/sbin/httpd -D FOREGROUND