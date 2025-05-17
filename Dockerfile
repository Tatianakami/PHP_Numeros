# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia todo o conteúdo do projeto para a pasta padrão do Apache
COPY . /var/www/html/

# Expõe a porta 80
EXPOSE 80
