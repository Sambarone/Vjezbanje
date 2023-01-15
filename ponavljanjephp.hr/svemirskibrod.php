<?php

$suma=0;

for($i=0;$i<=60;$i++){
    if($i%7===0)
    continue;
    $suma=$suma+($i*10);

}

echo $suma, '</br>';
echo ($suma>15000)?'uspjeh':'nesupjeh', '</br>';
