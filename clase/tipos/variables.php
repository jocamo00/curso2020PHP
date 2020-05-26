<?php
        $edad=45;
        $nombre='Paco';
        $titulo='La web de Paco';
        $frase="$nombre tiene $edad años";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
</head>
<body>
    <?php
        $edad=45.7;
        var_dump($edad);
    ?>
    <br>
    <?=$edad;?>
    <br>
    <?php echo $frase;?>
</body>
</html>