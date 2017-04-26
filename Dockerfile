FROM phusion/baseimage:0.9.21
RUN apt-update; 
RUN	apt-get install -y \ 
	php7.0-fpm \
	php7.0-mysql \
	php7.0-gd \
	php7.0-zip \
	wget \
	unzip \
	nginx;

# Configurar php.ini
RUN sed -i -e 's/upload_max_filesize = 2M/upload_max_filesize = 20M/' /etc/php/7.0/fpm/php.ini; \
	sed -i -e 's/; max_input_vars = 1000/max_input_vars = 2000/' /etc/php/7.0/fpm/php.ini;

# Prestashop
RUN cd /usr/share/nginx/html; \ 
	wget https://download.prestashop.com/download/releases/prestashop_1.6.1.13_es.zip; \
	unzip prestashop_1.6.1.13_es.zip \
	cd prestashop; \
	mv admin admin123;

# Nginx Virtualhost
COPY default-nginx.conf /etc/nginx/sites-enabled/default;

# Launch
service php7.0-fpm start
service nginx start
