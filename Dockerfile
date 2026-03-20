# Usando PHP com Apache para facilitar o servidor web
FROM php:8.2-apache

# Instala e habilita a extensão mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copia os arquivos do seu projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Ajusta as permissões
RUN chown -R www-data:www-data /var/www/html