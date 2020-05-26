<?php
/*namespace Geeks\Model;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DB{

    public $host="localhost";


    public function __construct()
    {
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(__DIR__.'/../../var/log/men.log', Logger::DEBUG));
        $log->info("Creo un nuevo modelo");
    }

    public function getPlatosTipo(){
        $conector = new \mysqli("localhost", "root", "", "db_platos");
        $resultado = $conector->query
            ("SELECT platos.titulo, platos.comensales, tipo_plato.nombre, platos.id
              FROM platos 
              INNER JOIN tipo_plato 
              ON platos.id_tipoplato = tipo_plato.id;")->fetch_all();
        return $resultado;
    }

    public function getPlatos($id){
        $conector = new \mysqli("localhost", "root", "", "db_platos");
        $resultado = $conector->query
            ("SELECT platos.titulo, platos.comensales, tipo_plato.nombre, platos.id
              FROM platos 
              INNER JOIN tipo_plato 
              ON platos.id_tipoplato = tipo_plato.id;")->fetch_all();
        return $resultado;
    }

}*/
