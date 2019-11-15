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
        return "6 ventila";
    }
    public function getLiters(){
        return "3L";
    }
    public function getHorsePower(){
        return "237 konjskih snaga";   
    }
}

class V8TDIEngine implements IEngine{
    public function getFuelType(){
        return "Dizel";
    }
    public function getNumberOfCylinders(){
        return "8 ventila";
    }
    public function getLiters(){
        return "4.2L";
    }
    public function getHorsePower(){
        return "345 konjskih snaga";   
    }
}

class V6FSIEngine implements IEngine{
    public function getFuelType(){
        return "Benzin";
    }
    public function getNumberOfCylinders(){
        return "6 ventila";
    }
    public function getLiters(){
        return "3L";
    }
    public function getHorsePower(){
        return "286 konjskih snaga";   
    }
}

class V8FSIEngine implements IEngine{
    public function getFuelType(){
        return "Benzin";
    }
    public function getNumberOfCylinders(){
        return "8 ventila";
    }
    public function getLiters(){
        return "4.2L";
    }
    public function getHorsePower(){
        return "367 konjskih snaga";   
    }
}