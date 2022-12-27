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
            //operator dodjele
            $i='2';
            //operator provjere vrijednosti
            echo $i==2, '<hr>';

            //operator provjere vrijednosti i tipa
            echo $i===2, '<hr>';        // false se ne ispisuje

            //ostali operatori usporedbe
            echo $i<1, '<hr>';
            echo $i>1, '<hr>';
            echo $i<=1, '<hr>';
            echo $i>=1, '<hr>';

            echo $i!=1, '<hr>'; //različito

            



         ?>
          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>
