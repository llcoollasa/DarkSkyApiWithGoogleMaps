Dark Sky Api With Google Maps Implementation
============================================

Pre-requisites
--------------

**PHP 5 or Greater**

**Web Server (Apache)**

**MYSQL**

Installation
------------

Install the source files

    Copy the source files to your local document root which is your Documentroot

You need point the document root of your virtual host to /path_to/dark_sky_api_with_google_map/

This is an example of VirtualHost:

    <VirtualHost *:80>
        DocumentRoot /path_to/dark_sky_api_with_google_map
        DirectoryIndex index.php
        ServerName local.darkskyapi.com
        <Directory "/path_to/dark_sky_api_with_google_map">
            Options Indexes FollowSymLinks
            Order Allow,Deny
            Allow from all
            AllowOverride all
            <IfModule mod_php5.c>
                php_admin_flag engine on
                php_admin_flag safe_mode off
                php_admin_value open_basedir none
            </ifModule>
        </Directory>
    </VirtualHost>


Install Database
---------------------

import the sql file from /path_to/dark_sky_api_with_google_map/db/slskymap.sql into mysql server using one of given method

Method 1

    Open up mysql workbench.Create database called `slskymap` inside mysql. open the above slskymap.sql file and execute all the sql statements

Method 2

    Create database called `slskymap` inside mysql
    mysqldump -hlocalhost -u[MYSQLUSERNAME] -p[MYSQLPASSWORD]  slskymap < /path_to/dark_sky_api_with_google_map/db/db.sql


Modify the configurations Files

    Navigate to /path_to/dark_sky_api_with_google_map/application/config/database.php and change the below settings according to Mysql User and Password

    $db['default'] = array(
    	'dsn'	=> '',
    	'hostname' => 'localhost',
    	'username' => 'root',
    	'password' => 'root',
    	'database' => 'slskymap',
    	'dbdriver' => 'mysqli',
    	'dbprefix' => '',
    	'pconnect' => FALSE,
    	'db_debug' => (ENVIRONMENT !== 'production'),
    	'cache_on' => FALSE,
    	'cachedir' => '',
    	'char_set' => 'utf8',
    	'dbcollat' => 'utf8_general_ci',
    	'swap_pre' => '',
    	'encrypt' => FALSE,
    	'compress' => FALSE,
    	'stricton' => FALSE,
    	'failover' => array(),
    	'save_queries' => TRUE
    );

    Navigate to /path_to/dark_sky_api_with_google_map/application/config/database.php and change the below settings according to Mysql User and Password

    /*
    |--------------------------------------------------------------------------
    | Base Site URL
    |--------------------------------------------------------------------------
    |
    | URL to your CodeIgniter root. Typically this will be your base URL,
    | WITH a trailing slash:
    |
    |	http://example.com/
    |
    | WARNING: You MUST set this value!
    |
    | If it is not set, then CodeIgniter will try guess the protocol and path
    | your installation, but due to security concerns the hostname will be set
    | to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
    | The auto-detection mechanism exists only for convenience during
    | development and MUST NOT be used in production!
    |
    | If you need to allow multiple domains, remember that this file is still
    | a PHP script and you can easily do that on your own.
    |
    */

    $config['base_url'] = 'local.darkskyapi.com';
    /*
    |--------------------------------------------------------------------------
    | precipintensity Level
    |--------------------------------------------------------------------------
    |
    | Google Map will show the points greater than this value
    |
    */
    $config['precipintensity_level'] = '0.1';

    /*
    |--------------------------------------------------------------------------
    | Dark Sky API Key
    |--------------------------------------------------------------------------
    |
    | Dark Sky API Key
    |
    */
    $config['dark_sky_api_key'] = '18b6075a28611750af65334daff96144';

Update the Location table with Dark Sky Response by running below command in CLI in source directory

    $/path_to/dark_sky_api_with_google_map> php index.php welcome processDarksky


**This is it!** Now access with your favorite web browser with local.darkskyapi.com.