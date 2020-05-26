<?php
$alumnos = array(
    1 => "Rafael",
    "segundo" => "Carlos",
    3=>"Giovanni",
    "numero"=>13
);
$provincias_fase_0=["Madrid","Cataluña","Castilla Leon"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($alumnos)?>
    <div><?=$alumnos[1] ?></div>
    <?php var_dump($provincias_fase_0)?>
    <div><?=$provincias_fase_0[0]?></div>
    
</body>
</html>