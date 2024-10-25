<?php
    $usuario = "root";

    $pass = " ";

    try{

        $mbd =  new PDO('mysql:host=localhost; dbname=biblioteca', $usuario, $pass);

    }catch (PDOException $e){

        print "¡Error!: ".$e->getMessage()."<br>";
        die();

    }

?>