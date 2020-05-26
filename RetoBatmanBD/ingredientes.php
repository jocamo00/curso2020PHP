<?php
    require_once "./lib/db_conexion.php";
    $conn=conexion();
    $ingredientes=getIngredientes($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Proyecto</title>
</head>
<body>
<?php include "./template/head.php"?>
    <div class="container">
        <h1>Listado de ingredientes</h1>
        <div class="row">
            <div class="col s1 m1">
                <a href="nuevoIngrediente.php" class="waves-effect waves-light btn">Nuevo</a>
            </div>

            <table>
        <thead>
          <tr>
              <th>Name</th>
          </tr>
        </thead>

        <tbody>
            <?php
                foreach ($ingredientes as $ingrediente){
                    ?>
                <tr>
                    <td><?=$ingrediente["nombre"]?></td>
                </tr>
            <?php
                } 
            ?>
        </tbody>
      </table>

        </div>
    </div>
    
</body>
</html>