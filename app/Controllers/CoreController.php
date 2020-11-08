<?php

namespace App\Controllers;

class CoreController
{
    /**
     * Function to construct the requested page with needed informations
     *
     * @param string $viewName  Name of the template to display
     * @param array $viewVars   Set of informations used for page content
     */
    public function show($viewName, $viewVars=[])
    {
        /* Fix part of the url for #URL-REWRITING */
        $viewVars['baseURL'] = $_SERVER["BASE_URI"];
        /* Dynamic part of the url - to customize css class depending on current page */
        $viewVars['currentURL'] = $_GET['_url'] ?? "/" ;
        
        require_once __DIR__.'/../Views/header.tpl.php';
        require_once __DIR__.'/../Views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../Views/footer.tpl.php';
    }
}