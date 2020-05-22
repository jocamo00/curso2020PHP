<?php
require_once "./lib/db_conexion.php";
$conn=conexion();
//$platos=getplatos($conn);
$platos=getPlatosConTipoPlato($conn);
//$platos=getPlatos($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Proyecto</title>
    <?php include "./template/head.php"?>
    <div class="container">
        <h1>Listado de platos</h1>
        <div class="row">
            <?php
                foreach ($platos as $plato){
                    ?>
                    <div class="col s4 m6">
                        <div class="card blue-grey darken-1">;
                            <div class="card-content white-text">
                                <span class="card-title"><?=$plato["titulo"]?></span>
                            </div>
                            <div class="card-content white-text">
                                <span class="card-title"><?=$plato["nombre"]?></span>
                                <span class="card-title"><?=$plato["comensales"]?></span>
                            </div>
                            <div class="card-action">
                                <a href="detalle.php?id=<?=$plato["id"]?>">Detalle del plato</a>
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
