<?php

$carta = [];

        $plato1 = [
                           "Titulo" => "Paella Valenciana",
                       "Comensales" => 5,
                             "Tipo" => "primero",
                     "Ingredientes" => [
                                           "nombre" => "Arroz",
                                         "cantidad" => "500g"
                                       ]  
                  ];

        $plato2 = [
                           "Titulo" => "Pollo Asado",
                       "Comensales" => 6,
                             "Tipo" => "segundo",
                     "Ingredientes" => [
                                           "nombre" => "Pollo",
                                         "cantidad" => 2
                                       ]
                  ];

        $plato3 = [
                           "Titulo" => "Ensaladilla Rusa",
                       "Comensales" => 6,
                             "Tipo" => "entrante",
                     "Ingredientes" => [
                                           "nombre" => "Patata",
                                         "cantidad" => "600g"
                                       ]
                  ];

        $carta[] = $plato1; 
        $carta[] = $plato2; 
        $carta[] = $plato3; 
?>