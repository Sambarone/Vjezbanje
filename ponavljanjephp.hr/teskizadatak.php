<?php

$tmp='A';
$tmp2='a';

foreach($_SERVER as $k=>$v){
   if(strpos($k,$tmp)>0){
    echo str_replace($tmp,'<span style="font-weight:bold; color:red">'.$tmp.'</span>',$k). ' ima vrijednost '. 
    str_replace($tmp,'<span style="font-weight:bold; color:red">'.$tmp.'</span>',$v) . '<br>';
   }
   

    
}