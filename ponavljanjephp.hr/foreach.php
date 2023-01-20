<?php

$niz=[2,3,6,5,58,5,4,5];

for ($i=0;$i<count($niz);$i++){
    echo $niz[$i], '<br>';
}

echo '<hr>';

foreach($niz as $vrijednost){
    echo $vrijednost, '<br>';
}

$niz2=[
'visina'=>12,
'duzina'=>10,
'sirina'=>15
];

echo '<hr>';
foreach($niz2 as $kljuc=>$vrijednost){
    echo 'Kljuc '.$kljuc. ' ima vrijednost '. $vrijednost, '<br>';
}

// sve stavke server niza
$slovo='b';
echo '<hr>';
foreach($_SERVER as $k=>$v){
        if(strpos(strtolower($k),$slovo)>0){
            echo 'Kljuc '. str_replace($slovo, '<span style="font-weight: bold">'.$slovo.'</span>', strtolower($k)).
             ' ima vrijednost '. $v. '<br>';
        }

}