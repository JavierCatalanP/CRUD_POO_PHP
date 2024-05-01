<?php  

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dname=crud","root","");
        return $bd;

    }


}

// host: localhost
// user: root
// pass: 
// db: crud