<?php
$alumnos=[];

function addAlumno(&$alumnos,$alumno=null){
    $alumnoTemp="";
    if(is_null($alumno)){
        global $alumnoPorDefecto;
        $alumnoTemp=$alumnoPorDefecto;
    }else{
        $alumnoTemp=$alumno;
    }
    $alumnos[]=$alumnoTemp;
}
?>