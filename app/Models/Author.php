<?php

namespace App\Models;

/**
 * Model for an author
 */

class Author 
{ 

    // =============================================================== 
    // Properties
    // =============================================================== 

    public $name;


    // ===============================================================
    // CONSTRUCT
    // =============================================================== 

    /**
     * Function construct to create an object author
     * 
     * @param [string] $name    Name of the author 
     * 
     */
    public function __construct($_name) 
    {
        $this->name = $_name;
    }


}
