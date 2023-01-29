<?php

include_once 'mojefunkcije.php';


//ulaz $broj je onaj broj koji želimo zbrojiti
function zbroji ($broj){
    if($broj===1){
        return 1;
    }
    

    return $broj+zbroji($broj-1);

    //inline if
    //return $broj===1?1:($broj+zbroji($broj-1));
    // ako rekurzija nema uvijet prekida događa se stackowerflow

}

$br=100;
echo zbroji($br);