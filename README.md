#Digital HR For Bussiness dan Governance

#Requirements#
Before starting installation, make sure, you have following things
Have a web hosting to store admin panel files and MySQL Database to run this admin panel, web hosting that you use must have the following requirements :
PHP Version 8.1 or above
Support MySQLi and PDO
Apache Server
Shared hosting cPanel with terminal access
Because this documentation using cpanel, a web hosting with cpanel is recommended. If you don’t have web hosting or domain, you can contact us at info@cninfotech.com if you want to buy a domain and need hosting service.

Now search terminal in cPanel.
Now type as follows:
cd public_html
composer install
php artisan migrate
php artisan passport:install
php artisan key:generate
php artisan storage:link
php artisan db:seed
composer dump-autoload
This is all you need to make DigitalHR fully working. Now you can access DigitalHR using your-domain-name.com.
