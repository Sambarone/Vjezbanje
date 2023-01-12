<?php

$a=4;
$b="ne postoji ta ocijena";

switch ($a)
{
case 1;
echo 'nedovoljan', '<br>';
break;
case 2;
echo 'dovoljan', '<br>';
break;
case 3;
echo 'dobar', '<br>';
break;
case 4;
echo 'vrlo dobar', '<br>';
break;
case 5;
echo 'odličan', '<br>';
break;
default:
echo $b;

}

