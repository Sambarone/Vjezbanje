<?php

$t='S';
$g='X';
$t2='s';
$g2='x';
$kljuc=[];
$vrijednost=[];

$niz='SxxSxx';

if(str_contains($niz,$t) or str_contains($niz,$g)){
   $niz=str_replace($t,'s',$niz);
   echo $niz, '<br>';
   $niz=str_replace($g,'X',$niz);
   echo $niz;
}
else {
   echo 'nema ga';
}
echo '<br>';

$i=0;
foreach ($_SERVER as $k=>$v){
$kljuc[$i]=$k;
$vrijednost[$i]=$v;
$i++;
}

$j=0;
foreach ($kljuc as $n){
  if(str_contains($n,$t)){
   $kljuc[$j]=str_replace($t, $g, $kljuc[$j]);
}

   if(str_contains($n,$t2)){
      $kljuc[$j]=str_replace($t2, $g2,$kljuc[$j]);
      
      }
         
   $j++;
   }

   $k=0;
foreach ($vrijednost as $n){
  if(str_contains($n,$t)){
   $vrijednost[$k]=str_replace($t, $g, $vrijednost[$k]);
}

   if(str_contains($n,$t2)){
      $vrijednost[$k]=str_replace($t2, $g2,$vrijednost[$k]);
      
      }
         
   $k++;
   }

   $m=0;
   foreach($kljuc as $n){
      echo $kljuc[$m]. 'ima vrijednost '. $vrijednost[$m], '<br>';
      $m++;
   }