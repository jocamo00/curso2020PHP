<?php
function conexion(){
    $conector = new mysqli("localhost", "root", "", "db_platos");
    return $conector;
}

function getplatos($conector){
    $resultado =$conector->query("SELECT id,titulo FROM platos");
    return $resultado;
}

function getPlato($conector,$id){
    $resultadoObj = $conector->query("SELECT * FROM platos WHERE id=$id");
    if($resultadoObj ==false){
        header('Location: index.php?msg=noId');
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

?>