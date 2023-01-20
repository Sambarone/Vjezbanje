<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    $pb=$_POST['pb'];
    $db=$_POST['db'];
}
else{
    $pb=' ';
    $db=' ';
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