<?php

$uvijet=true;
$i=1;

while($uvijet){
$i++;

    if($i>10){
        $uvijet=false;
    }
    echo $i, '<br>';
}


echo '<hr>';

while ($i>5){

    $i--;
    echo $i, '<br>';
}


echo '<hr>';




$broj=isset($_GET['prvi'])?$_GET['prvi']:5555;
$brojac=0;
while($broj>0){
    $broj=(int)($broj/10);
    echo $broj, '<br>';
    $brojac++;
}

echo $brojac;


$input = fopen("datoteka.txt", "r"); //otvaranje datoteke i čitanje
  
    // Display a line of the file until the end 
    while(!feof($input)) {
  
        // Display each line
        echo fgets($input). "<br>";
    }