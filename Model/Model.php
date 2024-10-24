<?php
class Model {
    
    //Chaine de connexion mysql
    public function connectMySQL() {
        $sql_dns ="mysql:Server=localhost;dbname=Sitecr7";
        $sql_username ="root";
        $sql_password="";

        try{
            $cnx = new PDO($sql_dns, $sql_username, $sql_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")  );
        }
        catch (Exception $e){
            echo ($e->getMessage());
        }
        return $cnx;
    }
    
}