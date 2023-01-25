<?php

echo 'Generiranje OIB-a <hr>';

$b=rand(0,9);
$brojac=0;

do{
if($brojac>0){
    $b=rand(0,9);
}
echo $b, '   ' ;
if($brojac<1){
$c=$b+10;}
else {
$c=$b+$f;
}
echo $c, '   ';
if($c%10===0)
{$d=10;}
else 
{$d=$c%10;}
echo $d, '  ';
$e=$d*2;
echo $e, '  ';
$f=$e%11;
echo $f, '   ';
$brojac++;
echo '<hr>';
if ($brojac===10){
    echo $f, '<br>';
    if ($f===1){
        $f=0;
    }
    else{
        $f=11-$f;
    }
    echo $f, '<br>';
}

}while ($brojac<10);