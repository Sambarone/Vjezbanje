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
