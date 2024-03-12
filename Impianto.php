<?php

class Impianto{
    private $nome;
    private $log;
    private $lat;

    function __construct($nome, $log, $lat){
        $this->nome = $nome;
        $this->log = $log;
        $this->lat = $lat;
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

    /*function toString(){
        return $this->cognome ." ".$this->nome." ". $this->eta;
    }

    function jsonSerialize(){
        return ["nome"=>$this->nome,
                "cognome"=>$this->cognome,
                "eta"=>$this->eta];
    }
*/

}