<?php

$suma=0;

foreach ($_GET as $k=>$v){
    if((int)$v!=$v){
        continue;
    }
    
    $suma+=$v;


}

echo $suma;