# Package StarterKit 

Project to practice what I learned in web developpement courses  (CSS, HTML, JAVASCRIPT, PHP, etc.). It can be a template as a work basis for other projects.

Be careful it's a "noob" project ;), please make comments and share advices for improvements !

## Getting started

### 1 - Install Composer on the project's root folder

Composants specified in composer.json will be deployed (Altorouter, Var_dumper)

```shell
$ composer install
```

### 2 - Init your database access

Duplicate config.ini.dist in config.ini with your own values.

## More informations about the code

### MVC Structure - Model / View / Controller

All files are organized in an app/ folder with no access from client.
Client files are organized in public/ folder.

- Controllers - Management of the page to display (template and content) from unique entrance index.php.

- Models - Properties, construct and methods to manipulate datas

- Views - Templates of page to require through controllers.

### Router

Use of the Altorouter composant to make routing.

- Install Altorouter in project with Composer :

```shell
$ composer require altorouter/altorouter
```

- Init Altorouter() with set up of the basepath 
- Map routes
- Match() & dispatcher

Completed with Alto-dispatcher composant to make dispatch easier : https://packagist.org/packages/benoclock/alto-dispatcher

### Autoloading files

Altorouter is also used to autoload our classes when vendor/autoload.php is required. Configuration as following : 

- Set namespaces for our classes with correct synthax for psr-4 (example : app\controllers\MainController)
- Complete the file composer.json :

```js
{
    "require": {
        "altorouter/altorouter": "^2.0"
    },
    "autoload" : {
        "psr-4": {"App\\": "app/"}
    }
}
```

- Update Altorouter autoload file with this command :

```shell
$ composer dump-autoload
```

## CSS

- Integration made with #Bootstrap.
- Others stylesheets are proposed as examples : normalize.css, reboot.css, reset.css
  
