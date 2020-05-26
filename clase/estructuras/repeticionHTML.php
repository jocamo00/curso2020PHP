<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        for ($i = 1; $i <= 10; $i++) {
    ?>
            <li><?=$i?></li>
    <?php
        }
    ?>  
    </ul>  
</body>
</html>