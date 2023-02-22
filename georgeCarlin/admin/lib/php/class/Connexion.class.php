<?php

class Connexion{
    private static $_instance = null;
    //$_ > variable de type privée

    public static function getInstance($dsn,$user,$pass){
        if(!self::$_instance){
            //self => objet lui même
            // :: > pour accéder à une méthode ou une variable static
            try{
                self::$_instance = new PDO ($dsn,$user,$pass);
                //print "<br>connecté";
            }catch (PDOException $e){
                print 'Echec : '.$e->getMessage();
            }
        }
        return self::$_instance;
    }
}




