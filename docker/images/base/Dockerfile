FROM ubuntu

ARG SYSTEM_TZ

RUN ln -snf /usr/share/zoneinfo/$SYSTEM_TZ /etc/localtime && echo $SYSTEM_TZ > /etc/timezone

RUN set -xe \
    && apt-get update \
    && apt-get -y install \
        php \
        php-cli \
        php-json \
        php-mysql \
        php-zip \
        php-gd \
        php-mbstring \
        php-curl \
        php-xml \
        php-pear \
        php-bcmath \
        zip \
        unzip \
        curl \
        wget \
        aptitude \
        nano \
    && apt-get -y upgrade

RUN set -xe \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer && chmod +x /usr/local/bin/composer

RUN set -xe \
    && apt-get -y install \
        apache2
