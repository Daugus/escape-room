FROM webdevops/php-nginx:8.2-alpine

# Definimos la raiz de nuestro proyecto para que Nginx la encuentre
ENV WEB_DOCUMENT_ROOT=/app/public

# Requerimos algunas librerías
ENV PHP_DISMOD=bz2,calendar,exiif,ffi,intl,gettext,ldap,mysqli,imap,pdo_pgsql,pgsql,soap,sockets,sysvmsg,sysvsm,sysvshm,shmop,xsl,zip,gd,apcu,vips,yaml,imagick,mongodb,amqp

# Definimos el directorio de trabajo
WORKDIR /app

# Instalar composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar todo el contenido del Dockerfile
COPY . .

# Asegurar que todos los archivos le pertenecen al mismo usuario y grupo
RUN chown -R application:application .

# Finalmente compiamos los scripts que se ejecutarán tras arrancar el contenedor
COPY docker/php-nginx /opt/docker