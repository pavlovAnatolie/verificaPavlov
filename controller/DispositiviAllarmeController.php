<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once "Impianto.php";
include_once "DispositivoAllarme.php";

 Class DispositiviAllarmeController{

    function disp(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new DispositivoAllarme(33,000);
        $b = new DispositivoAllarme(30,111);
        $imp->addAllarme($a);
        $imp->addAllarme($b);
        $s=array();
        $count = 0;
   
        
        $response->getBody()->write(json_encode($imp->getAllarme()));
        return $response;
    }

    function single(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new DispositivoAllarme(33,000);
        $b = new DispositivoAllarme(30,111);
        $imp->addAllarme($a);
        $imp->addAllarme($b);

        foreach ($imp->getAllarme() as $value) {
           if($value->getId() == intval($args["id"])){
            $response->getBody()->write(json_encode($value));
            return $response;
           }
        }
        $response->getBody()->write("dispositivo non presente");
            return $response;
        
    }
 }
