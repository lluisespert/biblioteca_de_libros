<?php

    include 'conexion.php';

    $titulo = $_POST['titulo'];

    $autor = $_POST['autor'];

    $tematica = $_POST['tematica'];

    $mbd ->query ($sql = "INSERT INTO  libros (nombrelibro, autor, tematica) VALUES ('$titulo', '$autor', '$tematica');");

?>

<script>

    window.open("../vista/libros.html", "_self");

</script>