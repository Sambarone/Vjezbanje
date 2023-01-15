<?php

for (;;){
    $i= readline('unesi broj');

    if(strlen($i)===0){
        echo 'nisi unio vrijednosti', PHP_EOL;
        continue;
    }
    $i=(int)$i;
        if($i===0){
            echo 'nisi unio broj veci ond nula', PHP_EOL;
            continue;
            }
    $brojevi[]=$i;

    if(readline('Unesi X za prekid')=='X'){
   break;
    }
    
}

echo 'Unio si '. (count($brojevi));

