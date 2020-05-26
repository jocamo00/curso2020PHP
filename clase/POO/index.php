<?php
    require_once "Usuario.php";

    //Generamos un nuevo objeto
    $usuario=new Usuario();

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
    //Mostrar la constante
    echo $usuario::NOMBRE_DEF;
    //Estamos utilizando una propiedad
    echo $usuario->mostrarNombre();
    $usuario->nombre="Lucia";
    echo $usuario->mostrarNombre();
    // echo $usuario->dni; Da un error de acceso a propiedad privada
    echo $usuario->mostrarDni();
    //$usuario->dni="88345978A"; Da un error
    $usuario->modificarDni("88345978A");
    echo $usuario->mostrarDni();
    //Estamos utilizando u metodo
    $usuario->mostrarNombre();
    //$this->...  Me envía a mi correo de Paco un mensaje con vuestra dirección, y yo voy con un lanzallamas 
    //Edad
    echo "Edad del usuario: ".$usuario->mostrarEdad();
    $usuario->modificarEdad(25);
    echo "Edad del usuario: ".$usuario->mostrarEdad();
    ?>
</body>
</html>