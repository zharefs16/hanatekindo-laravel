FROM php:7.4.33-apache

# Set Timezone
ENV TZ=Asia/Jakarta

# Install cron
RUN apt-get update && apt-get -y install cron

# [Microsoft][ODBC Driver 17 for SQL Server]SSL Provider: SSL routines:ssl_choose_client_version:unsupported protocol
RUN sed -i 's/TLSv1.2/TLSv1.0/g' /etc/ssl/openssl.cnf
RUN sed -i 's/SECLEVEL=2/SECLEVEL=1/g' /etc/ssl/openssl.cnf

RUN sed -i 's/Timeout 300/Timeout 3000/g' /etc/apache2/apache2.conf

# Install MSSQL Drivers
ENV ACCEPT_EULA=Y

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install apt-utils libxml2-dev gnupg apt-transport-https
    # && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install MS ODBC Driver for SQL Server
#RUN apt-get update
#RUN apt-get install -y gnupg2
#RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
#    && curl https://packages.microsoft.com/config/debian/9/prod.list > /etc/apt/sources.list.d/mssql-release.list \
#    && apt-get update \
#    && apt-get -y --no-install-recommends install msodbcsql17 unixodbc-dev \
#    && pecl install sqlsrv \
#    && pecl install pdo_sqlsrv \
#    && echo "extension=pdo_sqlsrv.so" >> ?~A| ?~@?php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"?~@??~A| /30-pdo_sqlsrv.ini \
#    && echo "extension=sqlsrv.so" >> ?~A| ?~@?php --ini | grep "Scan for additional .ini files" | sed -e "s|.*:\s*||"?~@??~A| /30-sqlsrv.ini
    # && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Copy php.ini
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

# Update timeout
RUN sed -i 's/default_socket_timeout = 60/default_socket_timeout = 600/g' /usr/local/etc/php/php.ini
RUN sed -i 's/max_execution_time = 30/max_execution_time = 600/g' /usr/local/etc/php/php.ini
RUN sed -i 's/max_input_time = 60/max_input_time = 600/g' /usr/local/etc/php/php.ini

# Additional tools
RUN apt-get update && apt-get install -y \
    iputils-ping \
    telnet \
    vim \
    zlib1g-dev \
    libzip-dev

# Lib for gd
RUN apt-get install -y build-essential libssl-dev libpng-dev libjpeg-dev libfreetype6-dev libpq-dev

# Fix MSSQL SSL Error
RUN apt-get update \
    && apt-get install openssl \
    && apt-get install ca-certificates

# Install php gd
#RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#    && docker-php-ext-install gd

# Install required extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql zip pgsql pdo_pgsql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Clean repos
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Laravel setup
COPY . /app
COPY _deploy/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /app \
    && a2enmod rewrite

# Change dir and composer install
WORKDIR /app
RUN composer update
#RUN chmod +x _deploy/entrypoint.sh


EXPOSE 80