Installation
==========

Requirements:
* Webserver (Apache2, Nginx, ...)
* PHP 5 with pgsql module enabled
* PostgreSQL 9.1 with Postgis 2.0

Linux Introduction:
* http://www.sumedh.info/articles/install-apache-php-postgres-linux.html

Where to store the website on Apache
*	/var/www

Edit php:
change the php.ini in the PHP-installation folder:
```short_open_tag = Off``` 
to
```short_open_tag = On```

Setup procedure:
* Create a spatial database and run Geosoftdatenbank.sql to create database structure
* Copy config.inc.sample.php to config.inc.php and add your Cosm api key (it's free!) and database credentials
* Set up cron jobs
	Example: Run data collection every 3 minutes
	```*/3 * * * * (cd /var/www/eggtracker/cron && php fetch_historic_data.php) > /var/www/eggtracker/log/log.txt```
