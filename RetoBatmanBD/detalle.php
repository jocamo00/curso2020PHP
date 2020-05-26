<?php
require_once "./lib/db_conexion.php";
$conn=conexion();
$ingredientes=getPlatosConIngredientes($conn,$_GET["id"]);
$plato=getPlatosIdConTipoPlato($conn,$_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Proyecto</title>
</head>
<body>
    <?php include "./template/head.php"?>
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">;
            <div class="card-content white-text">
                <span class="card-title center-align"><?=$plato["titulo"]?></span>
            </div>
            <div class="card-action white-text center-align">
                <span class="card-title">Tipo:</span>
                <span class="card-title"><?=$plato["nombre"]?></span>
            </div>
            <div class="card-action white-text center-align">
                <span class="card-title">Comensales:</span>
                <span class="card-title"><?=$plato["comensales"]?></span>
            </div>
            <div class="card-action white-text center-align">
                <span class="card-title">Ingredientes:</span>
            </div>
            <?php
                foreach ($ingredientes as $ingrediente){
                    ?>
            <div class="card-action white-text center-align">
                <span class="card-title"><?=$ingrediente["nombre"]?></span>
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