
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conector=new mysqli("localhost", "root", "", "cursos");
        $cursos = $conector->query("SELECT id,titulo FROM curso");
        foreach($cursos as $curso){
    ?>
            <a href="detalle.php?id=<?=$curso["id"]?>"><?=$curso["titulo"]?></a>
    <?php
        }
    ?>
</body>
</html>