<?php

class RilevatorePressione extends Rilevatore implements JsonSerializable{

        private $tipologia;

        function __construct($id,$codiceSeriale,$sogliaDiAllarme,$tipologia){
            parent::__construct($id,"bar",$codiceSeriale,$sogliaDiAllarme);
            $this->tipologia = $tipologia;
        }

    

    function getcodiceSeriale(){
        return $this->codiceSeriale;
    }

    function addMisurazioni($misura, $data){
        parent::addMisurazioni($misura, $data);
    }

    function getSogliaDiAllarme(){
        return $this->sogliaDiAllarme;
    }

    function jsonSerialize(){
        return ["id"=>parent::getId(),"unitaDiMisura"=>parent::getUnitaDiMisura(),"codiceSeriale"=>parent::getCodiceSeriale(),"sogliaDiAllarme"=>parent::getSogliaDiAllarme(),"tipologia"=>$this->tipologia];
    }
}