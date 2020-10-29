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

/* If working repository is a subfile  */
if( array_key_exists('BASE_URI', $_SERVER) ) 
{
    // Set of the basepath for my router  
    $router->setBasePath($_SERVER['BASE_URI']);
}
// else, base uri is default value
else {
    $_SERVER['BASE_URI'] = '/';
}


// ===============================================================
// MAPPING ROUTES
// ===============================================================

$router->map( 'GET'     , '/'           , 'App\Controllers\MainController::home'        , 'main-home'           );
$router->map( 'GET'     , '/register'   , 'App\Controllers\MainController::register'    , 'main-register'       );
$router->map( 'GET'     , '/blog'       , 'App\Controllers\MainController::blog'        , 'main-blog'           );
$router->map( 'GET'     , '/contact'    , 'App\Controllers\MainController::contact'     , 'main-contact'        );
$router->map( 'GET'     , '/about'      , 'App\Controllers\MainController::about'       , 'main-about'          );
$router->map( 'GET'     , '/store'      , 'App\Controllers\CatalogController::store'    , 'catalog-store'       );


// ===============================================================
// MATCH
// ===============================================================

$match = $router->match();


// ===============================================================
// DISPATCHER
// ===============================================================

/* if url matches with a route, call controller & method set in mapping.*/

/* Instance of Altodispatcher to make dispatch */
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
$dispatcher->dispatch();




/* Init of variables that will be used in methods */
$viewVars = [];