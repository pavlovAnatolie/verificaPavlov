<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once "Impianto.php";
include_once "Rilevatore.php";
include_once "RilevatorePressione.php";

 Class RilevatoriDiPressioneCotroller{

    function disp(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new RilevatorePressione(11,2222,3333,"acqua");
        $b = new RilevatorePressione(5,44444,3333,"terra");
        $imp->addRilevatorePressione($a);
        $imp->addRilevatorePressione($b);
        $response->getBody()->write(json_encode($imp->getRilevatoriPressione()));
        return $response;
    }

    function single(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new RilevatorePressione(11,2222,3333,"acqua");
        $b = new RilevatorePressione(5,44444,3333,"terra");
        $imp->addRilevatorePressione($a);
        $imp->addRilevatorePressione($b);

        foreach ($imp->getRilevatoriPressione() as $value) {
           if($value->getId() == intval($args["id"])){
            $response->getBody()->write(json_encode($value));
            return $response;
           }
        }
        $response->getBody()->write("dispositivo non presente");
            return $response;
        
    }

    function misurazioni(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new RilevatorePressione(11,2222,3333,"acqua");
        $b = new RilevatorePressione(5,44444,3333,"terra");
        $imp->addRilevatorePressione($a);
        $imp->addRilevatorePressione($b);

        foreach ($imp->getRilevatoriPressione() as $value) {
           if($value->getId() == intval($args["id"])){
            $response->getBody()->write($value->getMisurazioni);
            return $response;
           }
        }
        $response->getBody()->write("dispositivo non presente");
            return $response;
        
    }

    function misurazioniMagg(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new RilevatorePressione(11,2222,3333,"acqua");
        $b = new RilevatorePressione(5,44444,3333,"terra");
        $imp->addRilevatorePressione($a);
        $imp->addRilevatorePressione($b);
        $arr = array();
        foreach ($imp->getRilevatoriPressione() as $value) {

           if($value->getId() == intval($args["id"])){
            $arr = $value->getMisurazioni();    
           }
        
        }
        $fin= array();
        foreach ($arr as $value) {
            if($value > intval($args["valore_minimo"])){
                array_push($fin, $value);
        }
        $response->getBody()->write($fin);
            return $response;
        
    }

    }
 }
