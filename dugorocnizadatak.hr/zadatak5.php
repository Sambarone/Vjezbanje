<?php


$n=isset($_POST['redak'])?(int)$_POST['redak']:5;
$m=isset($_POST['stupac'])?(int)$_POST['stupac']:5;



$matrica=[];

if($n>$m){
$broj_prolaza=$m*2;
}
else {
    $broj_prolaza=($n*2)-1;
}
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
    
    
}
else if($prolaz%4===2){
    $upis=0;;
    for(;$j<$n-1;){
    $matrica[$n-2][$m]=$broj;
        $broj++;
        $n--;
        $upis++;}
        
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

$n++;

}

  
}

$n=isset($_POST['redak'])?(int)$_POST['redak']:5;
$m=isset($_POST['stupac'])?(int)$_POST['stupac']:5;




echo '<table>';
for ($k=0;$k<$n;$k++){
    echo '<tr>';
    for ($z=0;$z<$m;$z++) {
        echo '<td style="text-align:right; padding: 10px;">' . $matrica[$k][$z]. '</td> ';
         }
     echo '</tr>';
     }
 echo '</table>';

