<?php
//classe métier

class Admin{

    private $_attributs = array();

    public function __construct(array $data){
        //data envoyé par la classe DAO
        $this->hydrate($data);
    }

    //hydrate donner des valeurs aux différents champs d'origine via SGBD
    public function hydrate($data){
        foreach ($data as $champ => $valeur){
            $this->$champ =$valeur;
            /*
             * In the code snippet you provided, "champ" is a variable name that is used as a key to access the corresponding
             *  value in the associative array $data using the arrow operator "->".
             *  The value of the key "champ" in the $data array is assigned to the property of the current object using the same arrow operator "->".
             * The "$" sign is necessary in this context to indicate that "champ" is a variable and not a string literal.
             */
        }
    }

    public function __set($champ, $valeur){
        $this->_attributs[$champ]= $valeur;
    }

    public function __get($champ){
        if(isset($this->_attributs[$champ])){
            return $this->_attributs[$champ];
        }
    }



}