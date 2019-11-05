<?php

$a = 800;
$b = 2200;
echo "Prestupne godine u zadatom intervalu su: <br/><br/>";
for($i=$a;$i<=$b;$i++){
    if($i%4==0 && ($i%100!=0 || $i%400==0)){
        echo $i.", ";
    }
}
echo ".";

?>