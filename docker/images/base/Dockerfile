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

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs \
    && curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list \
    && apt-get update && apt-get install yarn

RUN set -xe \
    && apt-get -y install \
        apache2
