<?php
require_once "cursos_db.php";
$conector=conexion();
$cursos=getCursosConEspecialidad($conector);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>Titulo</td>
            <td>especialidad</td>
        </tr>
        <?php
            foreach($cursos as $curso){
                ?>
        <tr>
            <td><?=$curso["titulo"]?></td>
            <td><?=$curso["nombre"]?></td>
        </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>