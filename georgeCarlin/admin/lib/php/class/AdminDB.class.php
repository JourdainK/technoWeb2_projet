<?php

class adminDB extends Admin{
    private $_db; //recevra $cnx de l'index
    private $_array = array(); //retourner le result set

    public function __construct($cnx){
        $this->_db = $cnx;
        var_dump($cnx);

    }

    public function isAdmin($login, $password){
        try{
            //var_dump($this->_db);
            $query = "SELECT getAdmin(:login, :password)";
            $res = $this->_db->prepare($query);
            $res->bindValue(':login',$login);
            $res->bindValue(':password',$password);
            $res->execute();
            $data = $res->fetch();
            var_dump($data);

        }catch(PDOException $e){
            echo '<br>Echec : '.$e->getMessage();
        }
    }

    public function getAdmin($login, $password){
        try{
            //var_dump($this->_db);
            $query = "SELECT * FROM admin WHERE login=:login and password=:password";
            $res = $this->_db->prepare($query);
            $res->bindValue(':login',$login);
            $res->bindValue(':password',$password);
            $res->execute();
            $data = $res->fetch();
            //var_dump($data);
            if(!empty($data)){
              $array[]=new Admin($data);
                return $array;
            }
            else{
                return null;
            }


        }catch(PDOException $e){
            echo '<br>Echec : '.$e->getMessage();
        }
    }


}