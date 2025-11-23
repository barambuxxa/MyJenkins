#---------------------------------------------------------------------------
# Dockefile to build Docker Image of Apache WebServer running on Ubuntu
#
# Made by Gurenich Andrey  26-October-2025
#---------------------------------------------------------------------------

FROM php:7.4-apache

COPY index.php /var/www/html/

EXPOSE 80
