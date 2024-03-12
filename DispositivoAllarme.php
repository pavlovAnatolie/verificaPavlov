<?php

class DispositivoAllarme extends Impianto{
    private $id;
    private $tel;

    function __construct($nome, $log, $lat,$id,$tel){
        parent::__construct($nome, $log, $lat);
        $this->id = $id;
        $this->tel = $tel;
    }

    function getId(){
        return $this->id;
    }

    function getTel(){
        return $this->tel;
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