<?php

$musko="Marija Magdalena";
$zensko="Milan";
$niz=[];

echo $musko. ' + '.$zensko. '<br>';

$imena=strtolower($musko.$zensko);
$imena=str_replace(' ','',$imena);
echo $imena, 'ima znakova ', strlen($imena), '<br>';





for($i=0;$i<strlen($imena);$i++){
    $brojac=1;
    echo '<span style="color:red;">'.$imena[$i].'</span> <br>';
    if($imena[$i]==(int)$imena[$i]){
        continue;
    }
    for($j=$i+1;$j<strlen($imena);$j++){
      if($imena[$i]===$imena[$j]){
        $brojac++;
      }
    }
      echo $brojac;
      $imena=str_replace($imena[$i],$brojac,$imena);
      echo '<br>';
}



echo $imena, 'ima znakova ', strlen($imena), '<br>';

