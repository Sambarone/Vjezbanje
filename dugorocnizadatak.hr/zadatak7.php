<?php


$n=isset($_POST['redak'])?(int)$_POST['redak']:5;
$m=isset($_POST['stupac'])?(int)$_POST['stupac']:5;



$matrica=[];

$brojac=1;
for($i=($n-1);$i>=0;$i--){
    for($j=($m-1);$j>=0;$j--){
        $matrica[$i][$j]=$brojac;
        $brojac++;
    }
}








echo '<table>';
for ($k=0;$k<$n;$k++){
    echo '<tr>';
    for ($z=0;$z<$m;$z++) {
        echo '<td style="text-align:right; padding: 10px;">' . $matrica[$k][$z]. '</td> ';
         }
     echo '</tr>';
     }
 echo '</table>';

