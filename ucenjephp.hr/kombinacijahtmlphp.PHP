
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php      include_once 'head.php';       ?>
  </head>
<body <?php 
//dobra praksa je otvoriti i zatvoriti PHP unutar atributa elemena
echo 'style="background-color:grey"';

?>
>

    <div class="grid-container">

    <?php   require_once 'izbornik.php';  ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <!-- doba praksa je otvoriti i zaatvoriti php unutar vrijednosti atributa-->
          <div class="<?php ='callout'; ?> id='tijelo'>
            
          <!-- doba praksa je otvoriti i zatvoriti PHP unutar istog elemena-->
          <?php echo 'PHP unutar istog elementa' ?>
        
        </div>
        </div>
      </div>

      
    </div>
    <?php include_once 'podnozje.php'; ?>


    <?php     include_once 'skripte.php';     ?>
  </body>
</html>
