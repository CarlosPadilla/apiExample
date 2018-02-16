FROM php:7.2-apache-stretch

ENV SERVER "docker"

WORKDIR /tmp

RUN a2enmod rewrite
RUN apt-get update && apt-get -y install git wget libpq-dev sendmail libpng-dev zlib1g-dev


RUN docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install zip

RUN docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN echo "" > /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/sites-available/000-default.conf
RUN echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	ServerName api1.localhost" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	DocumentRoot /var/www/src/api1/web" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	ErrorLog ${APACHE_LOG_DIR}/error.log" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	CustomLog ${APACHE_LOG_DIR}/access.log combined" >> /etc/apache2/sites-available/000-default.conf
RUN echo "</VirtualHost>" >> /etc/apache2/sites-available/000-default.conf
RUN echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	ServerName api2.localhost" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	DocumentRoot /var/www/src/api2/web" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	ErrorLog ${APACHE_LOG_DIR}/error.log" >> /etc/apache2/sites-available/000-default.conf
RUN echo "	CustomLog ${APACHE_LOG_DIR}/access.log combined" >> /etc/apache2/sites-available/000-default.conf
RUN echo "</VirtualHost>" >> /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www
RUN chown www-data:www-data -R /var/www
RUN chmod 777 -R /var/www
RUN rm -fr /var/www/html
# USER www-data
RUN mkdir -p /var/www/src/api1/web





