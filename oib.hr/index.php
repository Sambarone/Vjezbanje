<?php

echo 'Generiranje OIB-a <hr>';


$brojac=0;
$niz=[];


do{
$b=rand(0,9);
$niz[$brojac]=$b;

echo $b, '  je  niz '. $niz[$brojac]. '    ' ;
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
    $niz[$brojac]=$f;
}

}while ($brojac<10);

echo '<hr>';

echo '<pre>';
print_r($niz);
echo '</pre>';

echo $niz[0];