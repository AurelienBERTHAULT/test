<?php

class Bdd {
    
    private $PDOInstance = null;
    
    const DEFAULT_SQL_USER = 'root';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = '';
    const DEFAULT_SQL_DTB = 'betfriend';
    
    private function __construct()
    {
      $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);    
    }
    
    public static function getInstance()
    {  
        if(is_null(self::$PDOInstance))
        {
          self::$PDOInstance = new Bdd();
        }
        return self::$PDOInstance;
    }
}
