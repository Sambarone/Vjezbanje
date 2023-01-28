<?php


$n=isset($_POST['redak'])?(int)$_POST['redak']:5;
$m=isset($_POST['stupac'])?(int)$_POST['stupac']:5;



$matrica=[];


$brojac=1;

for($i=0;$i<$n;$i++){
    $red=[];
    for($j=0;$j<$m;$j++){
        $red[]=$brojac;
        $brojac++;
    }
    $matrica[]=$red;
  
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

