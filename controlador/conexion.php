<?php
    $usuario = "lluisespert";

    $pass = "Andillaa1b2c3d4!";

    try{

        $mbd =  new PDO('mysql:host=localhost; dbname=biblioteca', $usuario, $pass);

    }catch (PDOException $e){

        print "¡Error!: ".$e->getMessage()."<br>";
        die();

    }

?>