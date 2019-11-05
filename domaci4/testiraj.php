<?php

function prestupna($g){
    $t = false;
    if($g%4==0 && ($g%100!=0 || $g%400==0)){
        $t = true;
    }
    return $t;
}

function poruka($p,$g){
    echo "<h1>Rezultat:</h1>";
    if($p==true){
        echo "Unijeta godina ".$g." je prestupna!";
    }else{
        echo "Unijeta godina ".$g." nije prestupna!";
    }
}

$god = $_POST["godina"]; //kupi poslanu vrijednost

$pr = prestupna($god); //provjerava da li je godina prestupna

poruka($pr,$god); //štampa poruku

?>