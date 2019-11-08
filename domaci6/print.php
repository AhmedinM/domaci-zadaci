<?php

function print_array($arr,$i){
    if($i==count($arr)){
        return;
    }
    echo $arr[$i]." ";
    print_array($arr,$i+1);
}

$array = [1,2,3,4,5,6,7,8,9,0];
print_array($array,0);