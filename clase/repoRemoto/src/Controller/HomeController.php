<?php
namespace Geeks\Controller;

use Psr\Container\ContainerInterface;

class HomeController
{
   protected $container;

   // constructor receives container instance
   public function __construct(ContainerInterface $container) {
       $this->container = $container;
   }


   public function contactar($request, $response, $args) {
        $response->getBody()->write("CONTACTO!!!!!!");
        return $response;
   }
}