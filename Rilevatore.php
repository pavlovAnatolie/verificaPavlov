<?php

class Rilevatore{
        private $id;
        private $misurazioni;
        private $unitaDiMisura;
        private $codiceSeriale;
        private $sogliaDiAllarme;

    function __construct($id,$unitaDiMisura,$codiceSeriale, $sogliaDiAllarme){
        $this->id = $id;
        $this->unitaDiMisura = $unitaDiMisura;
        $this->codiceSeriale = $codiceSeriale;
        $this->sogliaDiAllarme = $sogliaDiAllarme;

        $this->misurazioni =array();
    }

    function addMisurazioni($misura,$data){
        $this->misurazioni["$data"] = $misura;
    }

    function getId(){
        return $this->id;
    }

    function getMisurazioni(){
        return $this->misurazioni;
    }

    function getUnitaDiMisura(){
        return $this->unitaDiMisura;
    }

    function getCodiceSeriale(){
        return $this->codiceSeriale;
    }

    function getSogliaDiAllarme(){
        return $this->sogliaDiAllarme;
    }

}