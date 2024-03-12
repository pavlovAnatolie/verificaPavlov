<?php

class RilevatoreUmidita extends Rilevatore{
        private $unitaDiMisura;
        private $codiceSeriale;
        private $sogliaDiAllarme;

    function __construct($nome, $log, $lat,$id,$codiceSeriale,$sogliaDiAllarme){
        parent::__construct($nome, $log, $lat,$id);
        $this->unitaDiMisura = "%";
        $this->codiceSeriale = $codiceSeriale;
        $this->sogliaDiAllarme = $sogliaDiAllarme;
    }


    function getcodiceSeriale(){
        return $this->codiceSeriale;
    }

    function getSogliaDiAllarme(){
        return $this->sogliaDiAllarme;
    }
}