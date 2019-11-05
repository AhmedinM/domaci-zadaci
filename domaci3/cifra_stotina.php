<?php

$a = 4647;

for($i=0;$i<3;$i++){
    $c = $a%10;
    $a = $a/10;
    if($i==2){
        echo "Cifra stotina datog broja je: ".$c.".";
    }
}

?>