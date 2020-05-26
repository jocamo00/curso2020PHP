<?php 
    require_once "./lib/db_conexion.php";
    $conn=conexion();
    $ingredientes=getIngredientes($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
</head>
<body>
    <?php
        var_dump($_POST);
        nuevoIngrediente($conn,$_POST['nombre']);
    ?>
</body>
</html>