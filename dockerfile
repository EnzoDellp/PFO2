#Imagen base con PHP y Apache
FROM php:7.4-apache
#Instalar Extensiones
RUN docker-php-ext-install mysqli
#Copiar archivos
COPY . /var/www/html/