
<?php include_once 'baza.php'?>

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
          <?php
        for($i=0;$i<10000;$i++){
            $izraz=$veza->prepare ('
            
            
            insert into smjer (naziv, trajanje, certificiran)
            values(\'Novi smjer'.$i.'\', 120,false);
            
            
            
            ');
            $izraz->execute();


        }
          ?>
          


          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>
