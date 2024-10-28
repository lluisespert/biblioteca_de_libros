<!DOCTYPE html>

<html lang="es">

    <head>

        <title>Listado de Libros</title>

        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <meta name="description" content="Gestión de libros personales"/>

        <meta name="author" content="Lluís Espert Cuquerella"/>

        <meta charset="UTF-8"/>

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../modelo/funciones.js"></script>

        <link rel="stylesheet" href="../modelo/estilos.css">

    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-info"></nav>

        <div class="row">

            <div class="col-lg-4"></div>

            <div class="col-lg-5">

                <table class="table">

                    <tr>

                        <td>Id</td>

                        <td>Nombre del libro</td>

                        <td>Autor del libro</td>

                        <td>Tematica del libro</td>

                    </tr>

                <?php

                    include '../controlador/consultalibros.php';

                        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
                    
                            ?>

                                <tr>

                                    <td><?php echo $fila["id"]?></td>

                                    <td><?php echo $fila["nombrelibro"]?></td>

                                    <td><?php echo $fila["autor"]?></td>

                                    <td><?php echo $fila["tematica"]?><td>

                                </tr>

                            <?php
                        
                    }

            ?>

        </table>


            </div>

        </div>

        
    </body>

</html>