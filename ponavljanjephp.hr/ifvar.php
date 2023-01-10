<?php

$a=isset($_GET['prvi']) ? $_GET['prvi']:0;
$b=isset($_GET['drugi']) ? $_GET['drugi']:0;
$c=isset($_GET['treci']) ? $_GET['treci']:0;



if ($a>$b){
    if ($a>$c){
        echo $a;
    }
    else if ($a<$c)
    {
        echo $c;
    }
    else{
        echo $a,$c;
    }
}
else if ($b>$a){
    if ($b>$c){
        echo $b;
    }
    else if ($b<$c)
    {
        echo $c;
    }
    else{
        echo $b,$c;
    }
}
else if($a==$b){
    if ($a==$c){
        echo $a,$b,$c;
    }
    else if ($a<$c){
        echo $c;
    }
    else{
        echo $a,$b;
    }
}