<?php
    require_once "./lib/db.php";
    $conn=conexion();
    $cursos=getCursos($conn);
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
        nuevoCurso($conn,$_POST['titulo'],$_POST['descripcion'],$_POST['id_especialidad']);
    ?>
</body>
</html>