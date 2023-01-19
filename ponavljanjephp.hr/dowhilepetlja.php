<?php

$i=false;

do{

echo "Osijek". '<br>';


} while($i);

echo '<hr>';
//beskonačna petlja
do{
//ovo će se izvesti
    break;
//ovo se neće izvesti
}while(true);

$najveci=0;
$daototeka='datoteka.txt';
if(file_exists($daototeka)){
    $dat=fopen($daototeka, 'r');    
    while (($line = fgets($dat))!==false){
        $i=(int)$line;
        echo $line, '<br>';
    }
    fclose($dat);
}

echo $najveci;