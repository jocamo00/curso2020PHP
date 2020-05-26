<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


$app = AppFactory::create();
//$app = new \Slim\App;

// Obtener todos los platos
$app->get('/api/platos', function(Request $request, Response $response){
    $consulta = 'SELECT * FROM platos';

    try {
        
        // Instancia Base de Datos
        $db = new db();

        // Conexión
        $db = $db->conectar();
        $ejecutar = $db->query($consulta);
        $platos = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null; // cierre de la base de datos

        // Exportar y mostrar JSON
        echo json_encode($platos);

    } catch (PDOException $e) {
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});


// Obtener plato por id
$app->get('/api/platos/{id}', function(Request $request, Response $response){

    $id = $request->getAttribute('id');

    $consulta = "SELECT * FROM platos WHERE id='$id'";

    try {
        
        // Instancia Base de Datos
        $db = new db();

        // Conexión
        $db = $db->conectar();
        $ejecutar = $db->query($consulta);
        $plato = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null; // cierre de la base de datos

        // Exportar y mostrar JSON un solo plato
        echo json_encode($plato);

    } catch (PDOException $e) {
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});


// Insertar un plato
$app->post('/api/platos/insertar', function(Request $request, Response $response){

    $titulo = $request->getParam('titulo');
    $comensales = $request->getParam('comensales');

    $id = $request->getAttribute('id');

    $consulta = "INSERT INTO platos (titulo, comensales) VALUES (:titulo, :comensales)";

    try {
        
        // Instancia Base de Datos
        $db = new db();

        // Conexión
        $db = $db->conectar();
        $stmt = $db->prepare($consulta);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':comensales', $comensales);
        $stmt->execute();
        echo '{"notice": {"text": "Plato agregado"}';

    } catch (PDOException $e) {
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});


// Actualizar plato
$app->put('/api/platos/actualizar/{id}', function(Request $request, Response $response){

    $id = $request->getAttribute('id');
    $titulo = $request->getParam('titulo');
    $comensales = $request->getParam('comensales');

    $id = $request->getAttribute('id');

    $consulta = "UPDATE platos SET titulo=:titulo, comensales=:comensales WHERE id = $id";

    try {
        
        // Instancia Base de Datos
        $db = new db();

        // Conexión
        $db = $db->conectar();
        $stmt = $db->prepare($consulta);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':comensales', $comensales);
        $stmt->execute();
        echo '{"notice": {"text": "Plato actualizado"}';

    } catch (PDOException $e) {
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});