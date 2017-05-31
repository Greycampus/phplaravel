# <p align="center"> Configuring nginx web server on ubuntu</p>

In this guide, we will discuss how to configure Nginx as web server on ubuntu.

### Install the Backend Components

The first thing that we need to do to get started with Laravel is install the stack that will support it. We can do this through Ubuntu's default repositories.

First, we need to update our local package index to make sure we have a fresh list of the available packages. Then we can install the necessary components:
```
sudo apt-get update
sudo apt-get install nginx php5-fpm php5-cli php5-mcrypt git
```
This will install Nginx as our web server along with the PHP tools needed to actually run the Laravel code. We also install git because the composer tool, the dependency manager for PHP that we will use to install Laravel, will use it to pull down packages.

### Modify the PHP Configuration

Now that we have our components installed, we can start to configure them. 

The first thing that we need to do is open the main PHP configuration file for the PHP-fpm processor that Nginx uses. Open this with sudo privileges in your text editor:

```sudo nano /etc/php5/fpm/php.ini```

We only need to modify one value in this file. Search for the cgi.fix_pathinfo parameter. This will be commented out and set to "1". We need to uncomment this and set it to "0":

```cgi.fix_pathinfo=0```

This tells PHP not to try to execute a similar named script if the requested file name cannot be found. This is very important because allowing this type of behavior could allow an attacker to craft a specially designed request to try to trick PHP into executing code that it should not.

When you are finished, save and close the file.

Now, we can restart the php5-fpm service in order to implement the changes that we have made

```sudo service php5-fpm restart```

Our PHP is now completely configured and we can move on.

### Configure Nginx and the Web Root

In the path /etc/nginx/sites-enabled, you can find a file domain.conf, open the file using the command.
```
$ cd path /etc/nginx/sites-enabled
$ sudo vi domain.conf
```

Now, change the root to your project path,

```root /home/system/sample/public```

and change the server_name to your domain name

When you are finished, save and close the file.

Now test the nginx, using the command

```sudo nginx -t```

Because we modified the default server block file, which is already enabled, we simply need to restart Nginx for our configuration changes to be picked up:

```sudo service nginx restart```

![output](https://github.com/Greycampus/phplaravel/blob/master/Images/nginx1.png)

Now go to the browser and type your domain name

Your output may look like this

![output](https://github.com/Greycampus/phplaravel/blob/master/Images/nginx.png)






