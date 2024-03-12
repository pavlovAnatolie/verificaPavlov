<?php

class RilevatoreUmidita extends Rilevatore implements JsonSerializable{
        private $posizione;

        function __construct($id,$codiceSeriale,$sogliaDiAllarme,$posizione){
            parent::__construct($id,"%",$codiceSeriale,$sogliaDiAllarme);
            $this->posizione = $posizione;
        }

    function jsonSerialize(){
        return ["id"=>parent::getId(),"unitaDiMisura"=>parent::getUnitaDiMisura(),"codiceSeriale"=>parent::getCodiceSeriale(),"sogliaDiAllarme"=>parent::getSogliaDiAllarme(),"posizone"=>$this->posizione];
    }
}