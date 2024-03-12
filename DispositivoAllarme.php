<?php

class DispositivoAllarme implements JsonSerializable{
    private $id;
    private $tel;

    function __construct($id,$tel){
        $this->id = $id;
        $this->tel = $tel;
    }

    function getId(){
        return $this->id;
    }

    function getTel(){
        return $this->tel;
    }

    function jsonSerialize(){
        return ["id"=>$this->id,"telefono"=>$this->tel];
    }

}