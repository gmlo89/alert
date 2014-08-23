Alert
=========

Alert is a package for Laravel 4, provider a beatifull and simple way to display error messages.

For now this show the errors with structure for bootstrap, like this:

![Bootstrap alerts](http://innsoft.mx/packages/alert/bootstrap-alerts.jpg)

Based on this [tutorial](http://www.cristalab.com/tutoriales/poo-inyeccion-de-dependencias-en-laravel-iv-c113305l/ "Tutorial") of [@sileence](https://twitter.com/Sileence)




Version
----

0.1

Installation
--------------

Require innsoft/alert in composer.json and run composer update.


    {
        "require": {
            "laravel/framework": "4.0.*",
            ...
            "innsoft/alert": "dev-master"
        }
        ...
    }

Composer will download the package. After the package is downloaded, open `app/config/app.php` and add the service provider:

    'providers' => array(
        ...
        'Innsoft\Alert\AlertServiceProvider',
    ),

License
----

MIT

Author
----
Giovanni Lopez

[@gmlo_89](https://twitter.com/gmlo_89)