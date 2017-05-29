#!/bin/bash
echo "updating local packages"
apt-get update;
apt-get install software-properties-common;
apt-get install python-software-properties;
echo "installing PHP"
add-apt-repository ppa:ondrej/php;
apt-get update;
apt-get install -y php5.6 php5.6-mcrypt php5.6-gd;
echo "installing apache2"
apt-get install apache2 libapache2-mod-php5;
echo "installing mysql"
apt-get install mysql-server php5.6-mysql;
echo "installing other modules of PHP"
apt-get install php5.6-mbstring php5.6-dom;
echo "installing composer"
curl -sS https://getcomposer.org/installer | php5.6;
mv composer.phar /usr/local/bin/composer;
chmod +x /usr/local/bin/composer;
echo "installing laravel using github"
cd /var/www;
apt-get install git;
git clone https://github.com/laravel/laravel.git;
cd /var/www/laravel;
composer install;
chown -R www-data.www-data /var/www/laravel;
chmod -R 755 /var/www/laravel;
echo "starting local development server"
php artisan serve;
