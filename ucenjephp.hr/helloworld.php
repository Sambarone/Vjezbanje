<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php      include_once 'head.php';       ?>
  </head>
<body>

    <div class="grid-container">
            <!-- pročitati require vs include -->
    <?php   require_once 'izbornik.php';  ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class='callout' id='tijelo'>
            <?php

            // pročitati PHP standard recomendation
            echo 'hello world<br>', PHP_EOL; //pod jednostrukim navodnicima ne koristimo escape naredbe
            echo "Edunova\n";// pod dvostrukim možemo
            
            //nadoljepljivanje
            echo '<p>' . 3 . '</p>';
            // pročitati echo vs print
            print '<p>Osijek</p>';

            echo '<p>O\'Neal</p>';

            echo '<p style="color:red;">X</p>';
            ?>

          </div>
        </div>
      </div>

      
    </div>
    <?php include_once 'podnozje.php'; ?>


    <?php     include_once 'skripte.php';     ?>
  </body>
</html>
