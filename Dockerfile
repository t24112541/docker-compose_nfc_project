FROM php:7.0-apache
COPY . /var/www/html
RUN docker-php-ext-install mysqli
EXPOSE 8100

# ENV production true
# ENV db_host "192.168.1.254:9906"
# ENV db_user "cv_nfc"
# ENV db_pass MYSQL_ROOT_PASSWORD


