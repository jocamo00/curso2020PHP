<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conector = new mysqli("localhost", "root", "", "cursos");
        if ($conector->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conector->connect_errno . ") " . $conector->connect_error;
        }else{
            $resultado = $conector->query("SELECT * FROM curso");
            if(!$resultado){
                echo "error";
            }else{
                foreach($resultado as $fila){
                    $resultadoEspecialidad = $conector->query("SELECT * FROM especialidad WHERE id=".$fila["id_especialidad"]);
                    $filaEspecialidad=$resultadoEspecialidad->fetch_assoc();
                    echo "<h1>titulo: ".$fila["titulo"]."</h1>";
                    echo "<p>".$filaEspecialidad["nombre"]."</p>";
                }
            }
            echo "<br>---------------------";
            //Segunda forma
            $resultado = $conector->query("SELECT curso.titulo, especialidad.nombre 
                                            FROM curso INNER JOIN 
                                            especialidad ON curso.id_especialidad = especialidad.id;");
            if(!$resultado){
                echo "error";
            }else{
                foreach($resultado as $fila){
                    print_r($fila);
                }
            }           
        }
    ?>
</body>
</html>