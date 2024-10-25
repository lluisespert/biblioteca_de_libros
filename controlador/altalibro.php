<?php

    include 'conexion.php';

    $titulo = $_POST['titulo'];

    $autor = $_POST['autor'];

    $tematica = $_POST['tematica'];

    $resumen = $_POST['resumen'];

    $mbd ->query ($sql = "INSERT INTO  libros (nombrelibro, autor, tematica, resumen) VALUES ('$titulo', '$autor', '$tematica', '$resumen');");

?>

<script>

    window.open("../vista/libros.html", "_self");

</script>