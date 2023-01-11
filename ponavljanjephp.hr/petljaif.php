<?php

$var=true;

if($var)
{
    echo 'istina je', '<br>';
}

$i=10;

if($i>0)
{
    echo 'broj je pozitivan','<br>';
}

//logički operatori
$i=5;
$j=6.0;

if ($i===5 & $j===6)
{
    echo 'uvijet je zadovoljen', '<br>';
}
else 
{
    echo 'uvijet nije zadovoljen','<br>';
}
//napomena kad imamo == provjerava jednakost vrijednosti no ne i tip, kad imamo === provjerava i tip i vrijednosti
// jedan && provjerava samo prvu i ako uvijet nije zadovoljen ne ide na drugu

$godine=19;

if($godine>=18){
    echo 'punoljetan si','<br>';
    if($godine>65)
    {
        echo 'za mirovinu si','<br>';
    }
}

//jednostavniji oblik if naredbe, teže za čitati
echo $godine>=19?'punojetan si':'nisi punoljetan', '<br>';


if(isset($_GET['broj'])){
    echo 'varijabla b postoji', '<br>';;
}
else {
    echo 'postavite vrijednost varijabli broj','<br>';
}

//skraćeni oblik
echo isset($_GET['broj'])?$_GET['broj']:0, '<br>';