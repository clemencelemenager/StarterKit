<?php

namespace App\Controllers;


class ErrorController extends CoreController 
{
    /**
     * Method for error page 404
     *
     * @return void
     */
    public function err404() {
        header('HTTP/1.0 404 Not Found');

        $this->show('error/err404');
    }
}