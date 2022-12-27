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
                //nadoljepljivanje
                
                echo 'prvo ' . ' drugo', '<hr>';

                $a=[2,4,5];
                echo 'prvo '. $a[1], '<hr>';

                //ostatak cjelobrojnog dijeljenja modulo %

                echo  9%5, '<hr>';

                //pretvaranje varijable u drugi tip
                echo (int) (9/5), '<hr>';




                ?>
          

          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>
