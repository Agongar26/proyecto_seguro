FROM php:8.2-apache

# Instalar la extensión PDO MySQL necesaria para que PHP hable con MariaDB
RUN docker-php-ext-install pdo pdo_mysql

# Crear un usuario del sistema sin privilegios
RUN useradd -m agongar2601

# Cambiar el propietario del directorio web al nuevo usuario
RUN chown -R agongar2601:agongar2601 /var/www/html

# Indicar a Docker que use este usuario para ejecutar los procesos
USER agongar2601
