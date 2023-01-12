<?php

$niz=[1,3,5,10,13,17,24,21,15,9,4,1];
echo count($niz);       //funkcija koja vraća veličinu niza

//zadnji element niza
echo '<br>';

echo $niz[count($niz)-1].'<br>';

//svi elementi
echo '<br>';
for ($i=0;$i<count($niz);$i++){
    echo $niz[$i].'  ';
}


//ispis niza
echo '<pre>';
print_r($niz);
echo '</pre>';


//asocijativni nizovi
$niz2 = [
'prvi'=>'vrijednost',
'id'=>2,
 4=>'Pero',

];

echo '<pre>';
print_r($niz2);
echo '</pre>';

echo $niz2['id'], '<br>';

//kombinacija indeksni i asocijativni
$niz3=[3,5,'broj'=>'glupost',4];

echo '<pre>';
print_r($niz3);
echo '</pre>';

//dvodimenzionalni nizovi
$niz4=[
    [0,1,2],
    [3,4,2],
    [5,4,3]
];

echo '<pre>';
print_r($niz4);
echo '</pre>';

// deifnirati niz i kasnije ga popuniti
$n=5;
$m=4;

$matrica=[];
for ($i=0;$i<$n;$i++){

    $red=[];
    for ($j=0;$j<$m;$j++){
        $red[]=$j*$i;
    
    }
    $matrica[]=$red;

}

for ($i=0;$i<$n;$i++){
   for ($j=0;$j<$m;$j++) {
       echo $matrica[$i][$j]. ' ';
        }
    echo '<br>';

}

