symfony2-login-app
==================

Before start,

* Install php dependancies with [composer.phar install]
* Install javascript dependancies with [bower install]

1.Setting up Virtual Host:

Create new conf file under /etc/apache2/site-available/symfony.dev.conf and paste following code:
(Do not foget to change Document root to your web server document root)

<VirtualHost *:80>

        ServerName symfony.dev

        ServerAdmin duminda@localhost
        DocumentRoot /var/www/html/workspace/symfony/login-app/web

        <Directory /var/www/html/workspace/symfony/login-app/web/ >
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all

		<IfModule mod_rewrite.c>
            		Options -MultiViews
            		RewriteEngine On
            		RewriteCond %{REQUEST_FILENAME} !-f
            		RewriteRule ^(.*)$ app.php [QSA,L]
        	</IfModule>

         </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
      
</VirtualHost>

after creating your VHost execute command a2nsite <your.config>

2.Extract the zip in your document root.

3.Create a database called employee and import tables to your mysql server (employee.sql)
Note: Default mysql username password is set to root,root. You have to change the username password in your app/config/config.yml file.

4.To run unit tests, first install phpunit in your system, then go to the application directory (Ex:/var/www/html/workspace/symfony/login-app $) and run: 
phpunit -c app src/AppBundle/

5.If you successfully created your virtualhost visit http://symfony.dev to launch the site
 (or in dev environment http://symfony.dev/app_dev.php)

