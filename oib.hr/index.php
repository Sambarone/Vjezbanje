<?php

echo 'Generiranje OIB-a <hr>';
require_once 'Pomocno.php';



$string=[];

for ($i=0;$i<10;$i++){

$brojac=0;
$niz5=[];


do{
$b=rand(0,9);
$niz5[$brojac]=$b;

if($brojac<1){
$c=$b+10;}
else {
$c=$b+$f;
}

if($c%10===0)
{$d=10;}
else 
{$d=$c%10;}

$e=$d*2;

$f=$e%11;

$brojac++;

if ($brojac===10){
    if ($f===1){
        $f=0;
    }
    else{
        $f=11-$f;
    }
    $niz5[$brojac]=$f;
}

}while ($brojac<10);





$string[$i]="";
foreach($niz5 as $k=>$v){
    $string[$i]=$string[$i].$v;
}

}


foreach($string as $v){
    echo $v;
    echo '<br>';
    
}

