
<?php

$a= isset($_GET['prvi']) ? $_GET['prvi']:0;
$b= isset($_GET['drugi']) ? $_GET['drugi']:0;

if($a<$b){
    echo $a*$b;
}
else{
    echo $a-$b;
}

