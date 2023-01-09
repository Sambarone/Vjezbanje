<?php

$i=isset($_GET['prvi']) ? $_GET['prvi']:0;
$j=isset($_GET['drugi']) ? $_GET['drugi']:0;
$k=isset($_GET['treci']) ? $_GET['treci']:0;



if (($i===$j)&&($i===$k)){
    echo 'jednaki su';
}
else if (($i>$j)&&($i>$k)){
    echo 'prvi';
}
else if (($j>$i)&&($j>$k)){
    echo 'drugi';
}
else {
    echo 'treci';
}