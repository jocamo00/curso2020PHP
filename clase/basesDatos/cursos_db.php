<?php
function conexion(){
        $conector = new mysqli("localhost", "root", "", "cursos");
        return $conector;
}
/*
Funcion que devuelve un mysqli_result con titulo de curso y nombre de especialidad
Si existe error devuelve FALSE
*/
function getCursosConEspecialidad($conector){
    $resultado = $conector->query("SELECT curso.titulo, especialidad.nombre 
    FROM curso INNER JOIN 
    especialidad ON curso.id_especialidad = especialidad.id;");
    return $resultado;
}