<?php

    include 'conexion.php';

    $sql = "SELECT * FROM libros";

    $resultado = $mbd->prepare($sql);

    $resultado->execute();


?>