<?php

$n=6;
$m=5;

$matrica=[];
for ($i=1;$i<=$n;$i++){

    $red=[];
    for ($j=1;$j<=$m;$j++){
        $red[]=0;
    
    }
    $matrica[]=$red;

}

for ($i=0;$i<$n;$i++){
   for ($j=0;$j<$m;$j++) {
       echo $matrica[$i][$j]. ' ';
        }
    echo '<br>';
    }

$broj_prolaza=$m*2;

$broj=1;

$redci=$n-1;
$stupci=$m-1;
$i=0;
$j=0;
$upis=0;


for($prolaz=1;$prolaz<=$broj_prolaza;$prolaz++){
if($prolaz%4===1){
    $upis=0;;
    for(;$i<$m;){
        $matrica[$n-1][$m-1]=$broj;
        $broj++;
        $m--;
        $upis++;
    }
    $m=$i;
    $i++;
    echo $upis, '<br>';
    
}
else if($prolaz%4===2){
    $upis=0;;
    for(;$j<$n-1;){
    $matrica[$n-2][$m]=$broj;
        $broj++;
        $n--;
        $upis++;}
        echo $upis, '<br>';
        $n=$j;
        $j++;
        
}
else if($prolaz%4===3){
    $upis=0;
    
   for($m;$m<$stupci;$m++){
        $matrica[$n][$m+1]=$broj;
        $broj++;
        $upis++;
    }
    echo $upis, '<br>';
    $stupci--;
    

}
else if($prolaz%4===0){
    $upis=0;
    $redci--;
for ($n;$n<$redci;$n++){
$matrica[$n+1][$m]=$broj;
        $broj++;
        $upis++;
        
}
echo $upis, '<br>';
$n++;

}

  
}

$n=5;
$m=4;
for ($k=0;$k<$n;$k++){
    for ($z=0;$z<$m;$z++) {
        echo $matrica[$k][$z]. ' ';
         }
     echo '<br>';
     }
 