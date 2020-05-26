<?php
require_once "vars.php";
require_once "config.php";

$alumnos[]="Paco";
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
        addAlumno($alumnos,"Sebastian");
        print_r($alumnos);
        addAlumno($alumnos);
        print_r($alumnos);
    ?>
</body>
</html>