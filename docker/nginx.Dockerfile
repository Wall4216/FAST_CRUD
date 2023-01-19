FROM nginx

ADD docker/conf/nginx.conf /etc/nginx/conf.d/default

WORKDIR /var/www/laravel-docker
