# Package with some dev ressources

Project which centralizes most practices and ressources (CSS, HTML, JAVASCRIPT, PHP, etc.) used in formation in order to have a work basis for other projects

## MVC - Model View Controller

### Folder structure

All files MVC are organized in an app/ folder with no access from client.
Client files are organized in public/ folder.

### Controllers

Management of the page to display (template and content) from unique entrance index.php.

### Models

#PDO - Connect with DB, configuration and manipulation of datas in database

### Views

Templates of page to require through controllers.

## Router

Use of composant Altorouter with Composer. Requires .htaccess with correct config.

- Install Altorouter in project with Composer :

```
composer require altorouter/altorouter
```

- Init Altorouter() with set up of the basepath 
- Map routes
- Match() & dispatcher

### Autoloading files

Configuration of Altorouter to autoload also our classes when vendor/autoload.php is required.

- Set namespaces for our classes with correct synthax for psr-4 (example : app\controllers\MainController)
- Complete the file composer.json :

```js
{
    "require": {
        "altorouter/altorouter": "^2.0"
    },
    "autoload" : {
        "psr-4": {"app\\": "app/"}
    }
}

```
- Update Altorouter autoload file with this command : 
```
composer dump-autoload
```

## CSS

- Integration made with #Bootstrap.
- Others stylesheets are proposed as examples : normalize.css, reboot.css, reset.css
  
## DIVERS

- #DEBUG : some practices to facilitate debugging.