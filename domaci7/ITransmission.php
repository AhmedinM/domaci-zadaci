<?php

interface ITransmission{
    function getType();
    function getNumberOfGears();
}

class FiveGearManualTransmission implements ITransmission{  //program ne dozvoljava da naziv klase pocne
    function getType(){                                     //brojem, pa sam stavio rijec
        return "Manuelni <br/> menjač";
    }
    function getNumberOfGears(){
        return "5";
    }
}

class SixGearManualTransmission implements ITransmission{
    function getType(){
        return "Manuelni <br/> menjač";
    }
    function getNumberOfGears(){
        return "6";
    }
}

class FiveGearAutomaticTransmission implements ITransmission{
    function getType(){
        return "Automatski <br/> menjač";
    }
    function getNumberOfGears(){
        return "5";
    }
}

class SixGearAutomaticTransmission implements ITransmission{
    function getType(){
        return "Automatski <br/> menjač";
    }
    function getNumberOfGears(){
        return "6";
    }
}

class SevenGearAutomaticTransmission implements ITransmission{
    function getType(){
        return "Automatski <br/> menjač";
    }
    function getNumberOfGears(){
        return "7";
    }
}