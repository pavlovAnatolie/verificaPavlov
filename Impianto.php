<?php

class Impianto implements JsonSerializable{
    private $nome;
    private $log;
    private $lat;
    private $rilevatoriPressione;
    private $rilevatoriUmidita;

    private $Allarme;

    function __construct($nome, $log, $lat){
        $this->nome = $nome;
        $this->log = $log;
        $this->lat = $lat;
        $this ->rilevaotri = array();
        $this->Allarme = array();
    }

    function getNome(){
        return $this->nome;
    }

    

    function getLog(){
        return $this->log;
    }

    function getLat(){
        return $this->lat;
    }

    function addRilevatorePressione($rilevatore){
        array_push($this->rilevatoriPressione, $rilevatore);
    }

    function addRilevatoreUmidita($rilevatore){
        array_push($this->rilevatoriUmidita, $rilevatore);
    }

    function addAllarme($allarme){
        array_push($this->Allarme, $allarme);
    }

    function getAllarme(){
        return $this->Allarme;
    }

    function getRilevatoriPressione(){
        return $this->rilevatoriPressione;
    }

    function getRilevatoriUmidita(){
        return $this->rilevatoriUmidita;
    }


    function jsonSerialize(){
        return ["nome"=>$this->nome,
                "longitudine"=>$this->log,
                "latitudine"=>$this->lat];
    }


}