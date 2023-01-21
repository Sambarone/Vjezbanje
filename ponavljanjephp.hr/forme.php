<?php
$gradovi=['Osijek','Zagreb', 'Valpovo', 'Beli Manastir'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    $pb=(int)$_POST['pb'];
    $db=(int)$_POST['db'];

    if($pb===0){
      $pb=' ';
    }
    if($db===0){
      $db=' ';
    }
    if($pb!==' ' && $db!==' '){
      $rez=$pb+$db;
    }
    else{
      $rez=' ';
    }

    if(isset($_POST['Voce'])){
        $Voce=$_POST['Voce'];
    }
    else{
      $Voce=' ';
    }
    if(isset($_POST['povrce'])){
      $povrce=$_POST['povrce'];
    }
    else {
      $povrce=[];
    }
}
else{
    $pb=' ';
    $db=' ';
    $rez=' ';
    $Voce=' ';
    $povrce=[];
}



?>




<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
   <?php include_once 'head.php' ?>
  </head>
<body>

    <div class="grid-container">

    <?php require_once 'izbornik.php' ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class='callout' id='tijelo'>
         
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        
        <label>
            Prvi broj
            <input type="text" name="pb" id="pb" value="<?=$pb?>">
        </label>
        

        <label for="db">
            Drugi broj
            <input type="text" name="db" id="db" value="<?=$db?>">
        </label>
                                        
        <input type="radio" name="Voce" 
        <?php if($Voce==='Jabuka'):?>     
          checked="checked"
          <?php endif;?>

        
        
        
        id="Jabuka" 
        value="Jabuka">
        <label for="Jabuka">Jabuka</label> </br>
        
        <input type="radio" name="Voce" 
        <?php if($Voce==='Kruska'):?>     
          checked="checked"
          <?php endif;?>
        
        
        
        id="Kruska" 
        value="Kruska">
        <label for="Kruska">Kruška</label> <br>
        <br>
       <?=$Voce?>
            <hr>

            <input type="checkbox" name="povrce[]" 
            <?php if(in_array('kupus',$povrce)):?>     
          checked="checked"
          <?php endif;?>
            
            
            id="kupus" value="kupus">
            <label for="kupus">Kupus</label>
            <input type="checkbox" name="povrce[]" 
            <?php if(in_array('mrkva',$povrce)):?>     
          checked="checked"
          <?php endif;?>

            id="mrkva" value="mrkva">
            <label for="mrkva">Mrkva</label>

            <hr>
            <label for="Grad">Grad</label>
            <select name="grad" id="Osijek"></select>

    <h1><?=$rez?></h1>
        <input class="primary button expanded" type="submit" value="Izračunaj">

        </form>
          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>