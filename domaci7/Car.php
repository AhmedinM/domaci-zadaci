<?php

require_once "IEngine.php";
require_once "ITransmission.php";

class Car{
    private $manufacturer;
    private $model;
    private $engine;
    private $transmission;

    function __construct($manufacturer,$model,IEngine $engine,ITransmission $transmission){
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->engine = $engine;
        $this->transmission = $transmission;
    }

    public function setManufacturer($manufacturer){
        $this->manufacturer = $manufacturer;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function setEnigine(IEngine $engine){
        $this->engine = $engine;
    }
    public function setTransmission(ITransmission $transmission){
        $this->transmission = $transmission;
    }
    public function getManufacturer(){
        return $this->manufacturer;
    }
    public function getModel(){
        return $this->model;
    }
    public function getEngine(){
        return $this->engine;
    }
    public function getTransmission(){
        return $this->transmission;
    }

    public function toString(){
        return $this->manufacturer."<br/>".$this->model;
    }
}