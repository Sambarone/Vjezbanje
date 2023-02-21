<?php

session_start();

if(!$_SESSION['auth']){
  header('location index.php');
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'?>
  </head>
<body>

    <div class="grid-container">
      
        
      <?php include_once 'zasticeno2.php'?>
     
     <?php  include_once 'izbornik.php' ?>

     <?php  include_once 'slide.php' ?>

     <?php include_once 'dogadjaji.php' ?>

     <?php  include_once 'najava.php'?>

     <hr>

     




    </div>
    <?php include_once 'podnozje.php' ?>
    <?php include_once 'skripte.php' ?>
  </body>
</html>
