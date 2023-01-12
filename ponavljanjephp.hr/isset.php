<?php

$var='test';

var_dump(isset($var));  //ispisuje vrijednost isset naredbe, s obzirom da je ona tipa boolean vraća bool(true) ili bool(false)
echo '<br>';
var_dump($var);     //ispisuje 

echo '<br>';
echo '<br>';

$var2=NULL;
var_dump(isset($var2));
echo '<br>';
var_dump($var2);

echo '<pre>';
print_r($var);
echo '</pre>';

$var3=' ';
echo var_dump(isset($var3)), '<br>';  
var_dump($var3);

unset($var3);   //izbriši vrijednost i postojanje varijale $var3
echo '<pre>';
var_dump(isset($var3));
echo '</pre>';

$var4=4;

var_dump($var,$var4);
echo '<br>';

var_dump(isset($var,$var4));