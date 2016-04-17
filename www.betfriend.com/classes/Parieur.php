<?php

class Parieur {
    
    private $id;
    private $email;
    private $password;
    private $pseudo;
    
    public function __construct($id='', $email='', $password='', $pseudo='')
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->pseudo = $pseudo;
    }
    
    public function recuperer($id) {
        
        Bdd::getInstance()
        
        return $this;
    }
    
     public function sauvegarder() {
        
        
    }
}