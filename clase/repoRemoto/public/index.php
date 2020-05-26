<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

use Geeks\Model\DB; //require "../src/Model/DB.php";

//Añadir un unico container para toda la aplicación
//$container= new DI\Container();
//AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});
$app->get('/articulos/{id}', function (Request $request, Response $response, $args) {
    $id=$request->getAttribute('id');
    $articulos=["id"=>$id];
    $data=json_encode($articulos);
    $response->getBody()->write($data);
    return $response
    ->withHeader('Content-Type', 'application/json');
});

$app->get('/api/platos', function (Request $request, Response $response, $args) {

    $consulta = 'SELECT * FROM platos';

    try {
        // Instancia Base de Datos
        $db = new DB();

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

//$app->get('/contactar', 'Geeks\Controller\HomeController:contactar');

$app->run();