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


echo '<hr>';


$input = fopen("datoteka.txt", "r"); //otvaranje datoteke i čitanje
  
    // Display a line of the file until the end 
    while(!feof($input)) {
  
        // Display each line
        echo fgets($input). "<br>";
    }

/// druga verzija
echo '<hr>';

$ukupno=0;
$najveci=0;

$daototeka='datoteka.txt';          //keriranje varijable koja daje poveznicu na datoteku ili nešto slično
if(file_exists($daototeka)){            //ako datoteka postoji 
    $dat=fopen($daototeka, 'r');            //otvori ju i čitaj
    while (($line = fgets($dat))!==false){      //dok ima nešto u datoteci
        $i=(int)$line;
        if($i!==0){
            $ukupno+=$i;
        }
        else {
            $ukupno=0;
        }
        if($najveci<$ukupno){
            $najveci=$ukupno;
        }
    }
    fclose($dat);
}
echo $najveci;

// strlen ($line) vraća dužinu linije 