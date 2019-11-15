<?php

interface ITransmission{
    function getType();
    function getNumberOfGears();
}

class FiveGearManualTransmission implements ITransmission{  //program ne dozvoljava da naziv klase pocne
    function getType(){                                     //brojem, pa sam stavio rijec
        return "Manuelni menjač";
    }
    function getNumberOfGears(){
        return "5 brzina";
    }
}

class SixGearManualTransmission implements ITransmission{
    function getType(){
        return "Manuelni menjač";
    }
    function getNumberOfGears(){
        return "6 brzina";
    }
}

class FiveGearAutomaticTransmission implements ITransmission{
    function getType(){
        return "Automatski menjač";
    }
    function getNumberOfGears(){
        return "5 brzina";
    }
}

class SixGearAutomaticTransmission implements ITransmission{
    function getType(){
        return "Automatski menjač";
    }
    function getNumberOfGears(){
        return "6 brzina";
    }
}

class SevenGearAutomaticTransmission implements ITransmission{
    function getType(){
        return "Automatski menjač";
    }
    function getNumberOfGears(){
        return "7 brzina";
    }
}