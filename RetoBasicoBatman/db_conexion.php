<?php
function conexion(){
    $conector = new mysqli("localhost", "root", "", "db_platos");
    return $conector;
}

function getplatos(){
    $resultado =$conector->query("SELECT * FROM platos");
    return $resultado;
}


function getPlatosConTipoPlato($conector){
    $resultado = $conector->query("SELECT platos.titulo, tipo_plato.nombre 
    FROM curso INNER JOIN 
    especialidad ON platos.id_tipoplato = tipo_plato.id;");
    return $resultado;
}

?>