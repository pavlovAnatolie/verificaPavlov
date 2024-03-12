<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once "Impianto.php";

 Class impiantoController{

    function impianto(Request $request, Response $response, $args){

        $imp = new Impianto("prova",100,200);
        $response->getBody()->write(json_encode($imp));
        return $response;
    }
 }
