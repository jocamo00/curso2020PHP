<?php
    require_once "./lib/db.php";
    $conn=conexion();
    $cursos=getCursos($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Proyecto ejemplo</title>
</head>
<body>
    <?php include "./template/head.php"?>
    <div class="container">
        <h1>Listado de cursos</h1>
        <div class="row">
            <div class="col s1 m1">
                <a href="nuevoCurso.php" class="waves-effect waves-light btn">Nuevo Curso</a>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($cursos as $curso){
                    ?>
                    <div class="col s4 m6">
                        <div class="card blue-grey darken-1">;
                            <div class="card-content white-text">
                                <span class="card-title"><?=$curso["titulo"]?></span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="detalle.php?id=<?=$curso["id"]?>">Detalle del curso</a>
                            </div>
                        </div>
                    </div>
                    <?php
                } 
            ?>
        </div>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>