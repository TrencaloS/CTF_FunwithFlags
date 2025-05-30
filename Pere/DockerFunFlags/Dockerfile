FROM php:7.4-apache


RUN apt-get update && apt-get install -y \
    sqlite3 libsqlite3-dev openssh-client \
    zip unzip openssh-server sshpass \
    git gcc make pkg-config libzip-dev sudo \
    && docker-php-ext-install pdo pdo_sqlite zip

RUN mkdir  /var/run/sshd

RUN useradd -m -s /bin/bash boladepell \
  && echo 'boladepell:Pere01122024' | chpasswd

COPY secret/ /home/boladepell/secret
RUN chown -R boladepell:boladepell /home/boladepell/secret

COPY src/ /var/www/html/
RUN sqlite3 /var/www/html/notes.db < /var/www/html/db/init.sql
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80 22
  
CMD ["/bin/bash", "-c", "service ssh start && apache2-foreground"]

