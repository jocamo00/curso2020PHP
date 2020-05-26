<?php
    //Definir variables
    $edad=45;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($edad> 50) {
            echo "Abuelo";
        } elseif ($edad == 18) {
            echo "En el limite";
        } else {
            echo "No se sabe";
        }
    ?>
    Ejemplo de Estructuras de control
</body>
</html>