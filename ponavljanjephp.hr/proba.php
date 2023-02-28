<?php

//prvo je potrebno učuitati autloading
//ova datoteka će definirati temeljne preduvjete

//konstanta
define('BP', __DIR__.DIRECTORY_SEPARATOR);
define('BP_APP', BP.'aplikacija'.DIRECTORY_SEPARATOR);

$zaAutoLoad=[
    BP_APP.'controller',
    BP_APP.'core',
    BP_APP.'model'
]; //view ne ide u autoload, u njemu se php datoteke

$putanje=implode(PATH_SEPARATOR,$zaAutoLoad);

echo '<pre>';
print_r($putanje);
echo '</pre>';