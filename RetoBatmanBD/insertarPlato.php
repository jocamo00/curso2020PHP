<?php 
    require_once "./lib/db_conexion.php";
    $conn=conexion();
    $platos=getPlatos($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_POST);
        nuevoPlato($conn,$_POST['titulo'],$_POST['comensales']);
    ?>
</body>
</html>