<?php

namespace App\Models;

/**
 * Model for a category
 */

class Category 
{ 
  
    // =============================================================== 
    // Properties
    // =============================================================== 

    public $name;


    // ===============================================================
    // CONSTRUCT
    // =============================================================== 

    /**
     * Function construct to create an object category
     * 
     * @param [string] $name    Name of the category 
     * 
     */
    public function __construct($_name) 
    {
        $this->name = $_name;
    }

}


