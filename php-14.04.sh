#!/bin/bash
echo "updating local packages"
sudo apt-get update;
echo "installing PHP"
sudo add-apt-repository ppa:ondrej/php;
sudo apt-get update;
sudo apt-get install -y php5.6 php5.6-mcrypt php5.6-gd;
echo "installing apache2"
sudo apt-get install apache2 libapache2-mod-php5.6;
echo "installing mysql"
sudo apt-get install mysql-server php5.6-mysql;
echo "installing other modules of PHP"
sudo apt-get install php5.6-mbstring php5.6-dom;
echo "installing composer"
sudo curl -sS https://getcomposer.org/installer | php5.6;
sudo mv composer.phar /usr/local/bin/composer;
sudo chmod +x /usr/local/bin/composer;
echo "installing laravel using github"
cd /var/www;
sudo apt-get install git;
sudo git clone https://github.com/laravel/laravel.git;
cd /var/www/laravel;
sudo composer install;
sudo chown -R www-data.www-data /var/www/laravel;
sudo chmod -R 755 /var/www/laravel;
echo "starting local development server"
sudo php artisan serve;
