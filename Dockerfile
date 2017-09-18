FROM quantumobject/docker-cakephp
RUN rm -rf /var/www
RUN mkdir /var/www

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"; \
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"; \
php composer-setup.php --filename=composer; \
php -r "unlink('composer-setup.php');"; \
mv composer /usr/local/bin/composer && \
apt-get update && apt-get install -y fontconfig libfontconfig1 libxrender1 libxext6 xvfb; \
curl -sL https://deb.nodesource.com/setup_4.x | bash -; \
apt-get install -y nodejs

RUN wget https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.4/wkhtmltox-0.12.4_linux-generic-amd64.tar.xz -P /tmp/; \
tar xvf /tmp/wkhtmltox-0.12.4_linux-generic-amd64.tar.xz -C /opt/; \
ln -s /opt/wkhtmltox/bin/wkhtmltopdf /usr/local/bin/wkhtmltopdf; \
rm -Rf /tmp/*;

COPY ./composer.lock /var/www/
COPY ./composer.json /var/www/
COPY ./package.json /var/www/
WORKDIR /var/www
ARG COMPOSER_INSTALL
ARG NPM_INSTALL
RUN chown www-data:www-data -R ./; chmod 775 -R ./; 
USER www-data
RUN composer install ${COMPOSER_INSTALL}; npm install ${NPM_INSTALL}

COPY . /var/www/
USER root

RUN chown www-data:www-data -R ./; chmod 775 -R ./; 
CMD /var/www/bin/cake migrations mark_migrated --target=20170802172811; /var/www/bin/cake migrations migrate; /sbin/my_init