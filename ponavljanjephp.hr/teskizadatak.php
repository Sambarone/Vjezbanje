<?php

$t='s';
$g='<span style="color:red" >s</span>';
$kljuc=[];
$vrijednost=[];

$niz='pxxSxx';
if(str_contains($niz,'p')){
   echo 'ima  ga <hr>';
}
else{
   echo 'nema ga <hr> ';
}


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


foreach ($_SERVER as $k=>$v){
echo $k. 'ima vrijednost '. $v. ' <br> ';
}
