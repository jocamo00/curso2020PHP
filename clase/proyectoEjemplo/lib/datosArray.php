<?php
//Definiriamos nuestros arrays
$curso=[];
$grupos=[];
$alumnos=[];
//Definimos el curso
$curso=[
    "titulo"=>"curso PHP",
    "fecha_ini"=>"19/05/2020",
    "fecha_fin"=>"03/06/2020",
    "grupos"=>[]
];
//Definimos dos grupos
$grupo1=[
    "numero"=>10,
    "alumnos"=>[]
];
$grupo2=[
    "numero"=>5,
    "alumnos"=>[]
];
//Definimos alumnos
$alumno1=[
    "nombre"=>"Paco",
    "apellidos"=>"Gomez Arnal",
    "email"=>"paco.gomez.arnal@gmail.com"
];
$alumno2=[
    "nombre"=>"Luis",
    "apellidos"=>"Piedraita",
    "email"=>"luis.piedra@gmail.com"
];
$alumno3=[
    "nombre"=>"Marta",
    "apellidos"=>"Gonzalez",
    "email"=>"marta.gonz@gmail.com"
];
//Anyadimos todos los elementos
$curso["grupos"][]=$grupo1;
$curso["grupos"][]=$grupo2;
$curso["grupos"][0]["alumnos"][]=$alumno1;
$curso["grupos"][0]["alumnos"][]=$alumno2;
$curso["grupos"][1]["alumnos"][]=$alumno3;
?>