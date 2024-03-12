<?php

class Rilevatore extends Impianto{
        private $id;
        private $misurazioni;

    function __construct($nome, $log, $lat,$id){
        parent::__construct($nome, $log, $lat);
        $this->id = $id;
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
}