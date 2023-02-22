<?php

class DVDDB extends DVD{
    private $_db; //recevra $cnx de l'index
    private $_array = array(); //retourner le result set

    public function __construct($cnx){
        $this->_db = $cnx;
        var_dump($cnx);
    }

    public function getAlldvd(){
        try{
            $query = "SELECT * FROM produit";
            $res = $this->_db->prepare($query);
            $res->execute();
            while($data = $res->fetch()){
                $_array[]=new Fleur($data);
            }
            if(empty($_array)){
                return null;
            }
            else{
                return $_array;
            }
        }
        catch(PDOException $e){
            echo '<br>Echec de la connection : '.$e->getMessage();
        }
    }

}