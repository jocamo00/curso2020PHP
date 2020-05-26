<?php 
    require_once "./lib/db_conexion.php";
    $conn=conexion();
    $platos=getTipos($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <?php include "./template/head.php"?>
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="insertarPlato.php">
            <h2>EDITAR ELEMENTOS</h2>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Titulo" id="titulo" name="titulo" type="text" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Comensales" id="comensales" name="comensales" type="text" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Elige tipo de plato</option>
                        <option value="1">Entrante</option>
                        <option value="2">Primero</option>
                        <option value="3">Segundo</option>
                    </select>
                    <label>Materialize Select</label>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                </button>
            </div>
            </form>
        </div>

    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>     
</body>
</html>