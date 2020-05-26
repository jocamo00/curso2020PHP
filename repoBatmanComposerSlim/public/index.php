<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require '../src/config/db.php';
use Geeks\config\db; 


$app = AppFactory::create();
//$app = new \Slim\App;


/*$app->get('/platos', function (Request $request, Response $response, $args) {
    $db=new DB();
    $data=json_encode($db->getPlatosTipo());
    $response->getBody()->write($data);
    return $response
    ->withHeader('Content-Type', 'application/json');
});

$app->get('/platito/{id}', function (Request $request, Response $response, $args) {
    $db=new DB();
    $data=json_encode($db->getPlatosConIngredientes(id));
    $response->getBody()->write($data);
    return $response
    ->withHeader('Content-Type', 'application/json');
});*/


// Crear las rutas para los platos
require "../src/routes/platos.php";
$app->run();