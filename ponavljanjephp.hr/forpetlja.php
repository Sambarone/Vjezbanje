<?php

for ($i=0;$i<10;$i++){
    echo $i, ' ';
}

echo '<br>';

for ($i=0;$i<10;$i++){
    echo $i+1, '.put <br>';
}

echo '<br>';
echo '<br>';
//ispis parnih brojeva do 20
for ($i=1;$i<=20;$i++)
{
    if($i%2===0)
    {echo $i, '<br>';
    }
}
echo '<br>';
echo '<br>';
//ispis zbroja prvih 100 brojeva
$suma=0;
for ($i=1;$i<=100;$i++)
{
    $suma=$suma+$i;
}
echo $suma;

echo '<br>';
echo '<br>';
//prim broj
$broj=25;
$prim=true;
for ($i=2;$i<$broj;$i++)
{
    echo 'provjera za '. $i. '. broj <br>';
    if ($broj%$i===0){
        $prim=false;
        break;
    }
}

echo $broj. ($prim? ' je ':' nije ') . ' prim broj';