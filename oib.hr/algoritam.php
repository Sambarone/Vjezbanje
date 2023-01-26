<?php

require_once 'Pomocno.php';


$string=[];
$n=0;
if($_SERVER['REQUEST_METHOD']==='POST'){
$n=(int)$_POST['OIB'];
if($n===0){
    echo 'Unesi broj veći od 0 <br>';
}

}
for ($i=0;$i<$n;$i++){

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

echo '<table>';
echo '<tr>';
$i=0;
foreach($string as $v){
        if($i%6===0){
        echo '<tr> </tr>';
    }
    echo '<td style="border-left:5px solid gray; border-right:5px solid gray; padding-right: 10px; padding-left: 10px;">'. $v. '</td>';
    $i++;
}
echo '</tr>';
echo '</table>';
?>


