<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
  $redak=(int)$_POST['redak'];
  $stupac=(int)$_POST['stupac'];
  if($redak===0){
    $redak=' ';
  }
  if($stupac===0){
    $stupac=' ';
  }


}
else{
  $redak='';
  $stupac='';
}



?>



<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'?>
  </head>
<body>

    <div class="grid-container">
    
    
    
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1>Ciklična tablica</h1>
        </div>
      </div>

      <div class="callout primary">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <input type="number" name="redak" id="redak" value="<?=$redak?>">
          <label for="redak">Redak</label>
          <br>
          <input type="number" name="stupac" id="stupac" value="<?=$stupac?>">
          <label for="stupac">Stupac</label>
          <br>
          
          <button class="button" type="submit" value="Submit">Izračunaj</button>

      </form>
    </div>

      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout">
            <?php include_once 'zadatak5.php'?>
          </div>
        </div>
      </div>

    </div>


    <?php include_once 'skripte.php'?>
  </body>
</html>
