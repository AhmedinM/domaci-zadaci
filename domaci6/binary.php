<?php

function binary($n){
    if($n==0){
        return;
    }
    
    echo $n%2+binary(floor($n/2)); //radi, ali pojma nemam kako
}

$b = 23;
binary($b);