<?php


// ===============================================================
// MAPPING ROUTES
// ===============================================================

$router->map( 'GET'     , '/'           , 'App\Controllers\MainController::home'        , 'main-home'           );
$router->map( 'GET'     , '/register'   , 'App\Controllers\MainController::register'    , 'main-register'       );
$router->map( 'GET'     , '/blog'       , 'App\Controllers\MainController::blog'        , 'main-blog'           );
$router->map( 'GET'     , '/contact'    , 'App\Controllers\MainController::contact'     , 'main-contact'        );
$router->map( 'GET'     , '/about'      , 'App\Controllers\MainController::about'       , 'main-about'          );
$router->map( 'GET'     , '/store'      , 'App\Controllers\CatalogController::store'    , 'catalog-store'       );

