<?php
//A lo bruto
/*
$platos=[
    0=>[
        "titulo"=>"Ensalada tomate",
        "numero"=>4,
        "tipo"=>"entrante",
        "ingredientes"=>[
                "nombre"=>"lechuga",
                "cantidad"=>"100gr"
                        ],[
                "nombre"=>"tomate",
                "cantidad"=>4                            
                        ]
        
    ],
    1=>[

    ]
]

*/
//Definicion de ingredientes
$ingredientes1=[
    "nombre"=>"lechuga",
    "cantidad"=>"100gr"
];
$ingredientes2=[
    "nombre"=>"tomate",
    "cantidad"=>4
];
$ingredientes3=[
    "nombre"=>"arroz",
    "cantidad"=>"500gr"
];
//Definicion de los platos
$plato1=[
    "titulo"=>"Ensalada tomate",
    "numero"=>4,
    "tipo"=>"entrante",
    "ingredientes"=>[]
];
$plato1["ingredientes"][]=$ingredientes1;
$plato1["ingredientes"][]=$ingredientes2;
$plato2=[
    "titulo"=>"Paella Valenciana",
    "numero"=>4,
    "tipo"=>"primero"
];
$plato2["ingredientes"][]=$ingredientes3;
//Añado los platos
$carta=[];
$carta[]=$plato1;
$carta[]=$plato2;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Paco</title>
</head>
<body>
    <?php
    foreach($carta as $plato){
        //Recorre todos los platos
        //Plato 1, Plato 2, ...
        foreach($plato as $clave => $valor){
            //Recorre todos los elementos de 1 plato
            //titulo, comensales
            if($clave==="ingredientes"){
                //Me tengo que parar en el array de ingredientes
                foreach($valor as $ingrediente){
                    //Recorro todos los ingredientes
                    //nombre, cantidad
                    echo "<div>";
                    echo $plato["titulo"]." ";
                    var_dump($ingrediente);
                    echo "</div>";
                }
            }else{
                //Muestra un elemento
            }
        }
    }
    ?>
</body>
</html>