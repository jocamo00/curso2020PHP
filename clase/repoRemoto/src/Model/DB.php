<?php
namespace Geeks\Model;

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

    public function conectar(){
        $conector = new \mysqli("localhost", "root", "", "db_platos");
        return $conector;
    }

}