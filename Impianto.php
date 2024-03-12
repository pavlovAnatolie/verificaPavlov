<?php

class Impianto implements JsonSerializable{
    private $nome;
    private $log;
    private $lat;
    private $rilevaotri;
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

    function addRilevatore($rilevaotre){
        array_push($this->rilevaotri, $rilevaotre);
    }

    function addAllarme($allarme){
        array_push($this->Allarme, $allarme);
    }

    function getAllarme(){
        return $this->Allarme;
    }

    function getRilevatori(){
        return $this->rilevaotri;
    }

    function jsonSerialize(){
        return ["nome"=>$this->nome,
                "longitudine"=>$this->log,
                "latitudine"=>$this->lat];
    }


}