<?php

namespace app\models;

/**
 * Model for article in a blog
 */

class Article 
{

    // =============================================================== 
    // Properties
    // =============================================================== 

    protected $title;          // Title of the article
    protected $content;        // Content (text) of the article
    protected $author_id;      // Author ID of the article
    protected $author;         // Author of the article
    protected $date;           // Date of the article (aaaa-mm-jj)
    protected $category_id;    // Category ID of the article
    protected $category;       // Category of the article



    // ===============================================================
    // CONSTRUCT
    // =============================================================== 

    /**
     * Function construct to create an article object.
     * 
     * @param string $_title    Title
     * @param string $_content  Content
     * @param string $_author   Author
     * @param string $_date     Date
     * @param string $_category Category
     * 
     */
    public function __construct($_title = null, $_content = null, $_author_id = null, $_author = null, $_date = null, $_category_id=null, $_category = null )
    {
        $this->title        = $_title;
        $this->content      = $_content;
        $this->author_id    = $_author_id;
        $this->author       = $_author;
        $this->date         = $_date;
        $this->category_id  = $_category_id;
        $this->category     = $_category;
    }


    // ===============================================================
    // Methods
    // =============================================================== 

    /**
     * Function to display date of the article in french format 
     * Ex : 10 avril 2018
     * 
     * @return string   Date in french format (jj mois aaaa)
     * 
     */
    public function getDateFr()
    {
        setlocale(LC_TIME, "fr_FR");
        $dateFr = strftime("%d/%m/%Y", strtotime($this->date));
        
        return $dateFr;
    }


    // ===============================================================
    // Getters
    // =============================================================== 

    public function getName()           {return $this->name;}
    public function getContent()        {return $this->content;}
    public function getAuthor()         {return $this->author;}
    public function getAuthorID()       {return $this->author_id;}
    public function getCategory()       {return $this->category;}
    public function getCategoryID()     {return $this->category_id;}
    public function getDate()           {return $this->date;}


    
    // ===============================================================
    // Setters
    // =============================================================== 

    public function setName($p_name)                {$this->name        = $p_name;}
    public function setContent($p_content)          {$this->content     = $p_content;}
    public function setAuthor($p_author)            {$this->author      = $p_author;}
    public function setAuthorID($p_authorID)        {$this->author_id   = $p_authorID;}
    public function setCategory($p_category)        {$this->category    = $p_category;}
    public function setCategoryID($p_categoryID)    {$this->category_id = $p_categoryID;}
    public function setDate($p_date)                {$this->date        = $p_date;}



}

