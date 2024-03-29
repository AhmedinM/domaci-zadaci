<?php

interface IEngine{
    function getFuelType();
    function getLiters();
    function getNumberOfCylinders();
    function getHorsePower();
}

class V6TDIEngine implements IEngine{
    public function getFuelType(){
        return "Dizel";
    }
    public function getNumberOfCylinders(){
        return "6";
    }
    public function getLiters(){
        return "3";
    }
    public function getHorsePower(){
        return "237";   
    }
}

class V8TDIEngine implements IEngine{
    public function getFuelType(){
        return "Dizel";
    }
    public function getNumberOfCylinders(){
        return "8";
    }
    public function getLiters(){
        return "4.2";
    }
    public function getHorsePower(){
        return "345";   
    }
}

class V6FSIEngine implements IEngine{
    public function getFuelType(){
        return "Benzin";
    }
    public function getNumberOfCylinders(){
        return "6";
    }
    public function getLiters(){
        return "3";
    }
    public function getHorsePower(){
        return "286";   
    }
}

class V8FSIEngine implements IEngine{
    public function getFuelType(){
        return "Benzin";
    }
    public function getNumberOfCylinders(){
        return "8";
    }
    public function getLiters(){
        return "4.2";
    }
    public function getHorsePower(){
        return "367";   
    }
}