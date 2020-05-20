<?php

        $carta = [];

        $plato1 = [
                           "titulo" => "Paella Valenciana",
                    "numComensales" => 5,
                             "tipo" => "primero",
                     "ingredientes" => [
                                           "nombre" => "Arroz",
                                         "cantidad" => "500g"
                                       ]  
                  ];

        $plato2 = [
                           "titulo" => "Pollo Asado",
                    "numComensales" => 6,
                             "tipo" => "segundo",
                     "ingredientes" => [
                                           "nombre" => "Pollo",
                                         "cantidad" => 2
                                       ]
                  ];

        $plato3 = [
                           "titulo" => "Ensaladilla Rusa",
                    "numComensales" => 6,
                             "tipo" => "entrante",
                     "ingredientes" => [
                                           "nombre" => "Patata",
                                         "cantidad" => "600g"
                                       ]
                  ];

        $carta[] = $plato1; 
        $carta[] = $plato2; 
        $carta[] = $plato3; 
    
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto Batman</title>
</head>
<body>

    <?php
        foreach ($carta as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if($key2==="ingredientes"){
                    foreach ($value2 as $key3 => $value3) {
                        echo "$value3<br>";
                    }
                }
                error_reporting(0);
                echo "$value2<br>";
            }
        }
    ?>
    
</body>
</html>

