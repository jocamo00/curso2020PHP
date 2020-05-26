<?php
    require_once "Usuario.php";

    //Generamos un nuevo objeto
    //$usuario=new Usuario();
    /*
    $usuario1=new Usuario();
    $usuario2=new Usuario();
    ...
    $usuario10=new Usuario();
    */
    for($i=1;$i<11;$i++){
        $usuarios[$i]=new Usuario();
        $usuarios[$i]->nombre="Usuario numero ".$i;
    }
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
        foreach($usuarios as $usuario){
            echo $usuario->mostrarNombre();
        }
    ?>
</body>
</html>