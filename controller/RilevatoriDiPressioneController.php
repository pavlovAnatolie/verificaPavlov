<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once "Impianto.php";
include_once "Rilevatore.php";
include_once "RilevatorePressione.php";

 Class RilevatoriDiPressioneCotroller{

    function disp(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new RilevatoreUmidita(11,2222,3333,55);
        $b = new RilevatoreUmidita(5,44444,3333,44);
        $imp->addRilevatoreUmidita($a);
        $imp->addRilevatoreUmidita($b);
        $response->getBody()->write(json_encode($imp->getRilevatoriUmidita()));
        return $response;
    }

    function single(Request $request, Response $response, $args){
        $imp = new Impianto("prova",100,200);
        $a = new RilevatoreUmidita(11,2222,3333,"acqua");
        $b = new RilevatoreUmidita(5,44444,3333,"terra");
        $imp->addRilevatoreUmidita($a);
        $imp->addRilevatoreUmidita($b);

        foreach ($imp->getRilevatoriUmidita() as $value) {
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
        $a = new RilevatoreUmidita(11,2222,3333,"acqua");
        $b = new RilevatoreUmidita(5,44444,3333,"terra");
        $imp->addRilevatoreUmidita($a);
        $imp->addRilevatoreUmidita($b);

        foreach ($imp->getRilevatoriUmidita() as $value) {
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
        $a = new RilevatoreUmidita(11,2222,3333,"acqua");
        $b = new RilevatoreUmidita(5,44444,3333,"terra");
        $imp->addRilevatoreUmidita($a);
        $imp->addRilevatoreUmidita($b);
        $arr = array();
        foreach ($imp->getRilevatoriUmidita() as $value) {

           if($value->getId() == intval($args["id"])){
            $arr = $value->getMisurazioni();    
           }
        
        }
        $response->getBody()->write("dispositivo non presente");
            return $response;
        
    }
 }
