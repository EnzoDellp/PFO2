FROM php:7.4-apache
#Extensiones
RUN docker-php-ext-install mysqli
#Copiar archivos
COPY . /var/www/html/