<?php

//all files that must be included in index
if(file_exists('./lib/php/pgConnect.php')){
    //on est dan la partie admin
    require './lib/php/pgConnect.php';
    require './lib/php/class/Autoloader.class.php';

}else if(file_exists('admin/lib/php/pgConnect.php')){
    require 'admin/lib/php/pgConnect.php';
    require 'admin/lib/php/class/Autoloader.class.php';
}
Autoloader::register();
$cnx = Connexion::getInstance($dsn,$user,$pass);
