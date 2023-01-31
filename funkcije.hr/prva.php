<?php


if($_SERVER['REQUEST_METHOD']==='POST'){
$prvi=(int)$_POST['prvi'];
$drugi=(int)$_POST['drugi'];


 if($prvi===0){
    $prvi='';
}

if($drugi===0){
    $drugi='';
}
if($prvi>0 && $drugi>0)
{$rez=$prvi+$drugi;
}
else {
    $rez=' ';
}
if(isset($_POST['voce'])){
    $voce=$_POST['voce'];
}
else {
    $voce=' ';
}
}
else{
    $prvi='';
    $drugi='';
    $rez=' ';
    $voce=' ';

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcija</title>
</head>
<body>
    Prva funkcija
                <?php

                $suma=0;
                        foreach ($_GET as $k=>$v){
                            if(!(int)$v){
                                continue;
                            }
                            $suma+=$v;
                        }
                                echo $suma, '<br>';

                                
                 
                                    ?>

                                    <hr>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="text" name="prvi" id="prvi"value="<?php echo $prvi?>">
                <label for="prvi">Prvi broj</label>

                <br>
                <input type="text" name="drugi" id="drugi" 
                
                
                value="<?php echo $drugi?>">
                <label for="drugi">Drugi broj</label><hr>

                <input type="radio" name="voce" id="jabuka"
                <?php if($voce==='jabuka'):?>
                    checked="checked";
                <?php endif;?>
                value="jabuka">
                <label for="jabuka">Jabuka</label><br>
                <input type="radio" name="voce" id="kruska" 
                <?php if($voce==='kruska'):?>
                    checked="checked";
                <?php endif;?>
                
                value="kruska">
                <label for="kruska">Kruska</label><br>

                <input class="button" type="submit" value="Izračunaj">
                
                <?= $voce?>
                <h1><?= $rez ?>              
            
            </form>

</body>
</html>