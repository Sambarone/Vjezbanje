<?php

//ne prima parametre i ne vraća vrijednost

phpinfo();

echo '<hr>';

//prima parametre i ne vraća vrijednost
print_r($_GET);

echo '<hr>';

//ne prima parametre i vraća vrijednost

$t=time();
echo $t, '<hr>';

// prima parametre i vraća vrijednost

if(!isset($_GET['IME'])){
    echo 'ime nije postavljeno', '<hr>';
}


