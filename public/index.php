<?php
// #DEBUG - Display of all errors
error_reporting(E_ALL);


// ===============================================================
// AUTOLOAD FILES
// ===============================================================

require __DIR__ . "/../vendor/autoload.php";


// ===============================================================
// INIT ROUTER
// ===============================================================

$router = new AltoRouter();

/* Set of the basepath for my router (subfile in localhost) */
$baseURL = $_SERVER['BASE_URI'];
$router->setBasePath($baseURL);

$currentURL = $_GET['_url'] ?? "/";


// ===============================================================
// MAPPING ROUTES
// ===============================================================

$router->map( 
    'GET', '/', [
        "controller"   => "app\controllers\MainController",
        "method"       => "home"],   
    'main-home'             
);
$router->map( 
    'GET', '/register',[
        "controller"   => "app\controllers\MainController",
        "method"       => "register"],   
    'main-register'             
);
$router->map( 
    'GET','/store',[
        "controller"   => "app\controllers\CatalogController",
        "method"       => "store"],   
    'catalog-store'             
);
$router->map( 
    'GET','/blog',  [
        "controller"   => "app\controllers\MainController",
        "method"       => "blog"],   
    'main-blog'             
);
$router->map( 
    'GET','/contact',  [
        "controller"   => "app\controllers\MainController",
        "method"       => "contact"],   
    'main-contact'             
);
$router->map( 
    'GET','/about',  [
        "controller"   => "app\controllers\MainController",
        "method"       => "about"],   
    'main-about'             
);


// ===============================================================
// MATCH
// ===============================================================

$match = $router->match();


// ===============================================================
// DISPATCHER
// ===============================================================

/* if url matches with a route, call controller & method set in mapping */
if($match)
{
    $methodToCall = $match["target"]["method"];
    $controllerToCall = $match['target']['controller'];

    $controller = new $controllerToCall();
    $controller->$methodToCall($match["params"]);
}
/* else display a 404 page */
else
{
    exit( "404 Not Found" );
}



/* Init of variables that will be used in methods */
$viewVars = [];