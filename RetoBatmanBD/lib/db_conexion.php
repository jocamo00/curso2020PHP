<?php
function conexion(){
    $conector = new mysqli("localhost", "root", "", "db_platos");
    return $conector;
}

function getplatos($conector){
    $resultado =$conector->query("SELECT id,titulo FROM platos");
    return $resultado;
}

function getTipos($conector){
    $resultado = $conector->query("SELECT id,nombre FROM tipo_plato");
    return $resultado;
}

function getPlato($conector,$id){
    $resultadoObj = $conector->query("SELECT * FROM platos WHERE id=$id");
    if($resultadoObj ==false){
        header('Location: index.php?msg=noId');
        header('location:404.php');
    }
    $resultado=$resultadoObj->fetch_assoc();
    return $resultado;
}

function getPlatosIdConTipoPlato($conector,$id){
    $resultadoObj = $conector->query("SELECT platos.titulo, platos.comensales, tipo_plato.nombre, platos.id 
    FROM platos 
    INNER JOIN tipo_plato 
    ON platos.id_tipoplato = tipo_plato.id
    WHERE platos.id=$id");
    if($resultadoObj ==false){
        header('Location: index.php?msg=noId');
        header('location:404.php');
    }
    $resultado=$resultadoObj->fetch_assoc();
    return $resultado;
}

function getPlatosConTipoPlato($conector){
    $resultado = $conector->query("SELECT platos.titulo, platos.comensales, tipo_plato.nombre, platos.id 
    FROM platos INNER JOIN 
    tipo_plato ON platos.id_tipoplato = tipo_plato.id;");
    return $resultado;
}

function nuevoPlato($conector,$titulo,$comensales){
    $consulta="INSERT INTO `platos` (`id`, `titulo`, `comensales`, `id_tipoplato`) VALUES (NULL, '$titulo', '$comensales', '2');";
    $resultado = $conector->query($consulta);

    header('location:index.php');
}

function nuevoIngrediente($conector,$nombre){
    $consulta="INSERT INTO `ingrediente` (`id`, `nombre`) VALUES (NULL, '$nombre')";
    $resultado = $conector->query($consulta);

    header('location:ingredientes.php');
}

function getIngredientes($conector){
    $resultado =$conector->query("SELECT * FROM ingrediente");
    return $resultado;
}

function getPlatosConIngredientes($conector, $id){
    $query=" SELECT platos.titulo, ingrediente.nombre 
       FROM platos 
       INNER JOIN plato_ingrediente ON (platos.id = plato_ingrediente.id_plato)
       INNER JOIN ingrediente ON (ingrediente.id = plato_ingrediente.id_ingrediente)
       WHERE platos.id=$id";
    $resultado = $conector->query($query);
    return $resultado;
}


?>

