<?php
declare(strict_types=1);

require_once "var.php";
require_once "func.php";


$result=ejemplo1($versionProyecto,"Proyecto prueba");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$result?>
</body>
</html>