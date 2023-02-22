<?php


class Autoloader{

    //méthode prédéfinies de chargement des classes , dès que new  est rencontré

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }


    static function autoload($class){
        require $class.".class.php";
    }


}