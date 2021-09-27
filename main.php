<?php

 $arr = [];

 for($i = 0; $i < 6; $i++){
    $arr[$i] = rand(1,6);
    
    while(inArrayCustom($i,$arr[$i],$arr)){
        $arr[$i] = rand(1,6);

    } 
     
 }
 print_r($arr);
 function inArrayCustom($indice,$valor,$arr){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $valor && $i != $indice){
           echo'repetiu!<br>';
            return true;
        }
    }
    return false;
 }
 
?>