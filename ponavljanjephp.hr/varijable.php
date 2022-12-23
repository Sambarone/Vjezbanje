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
            //tipovi podataka u PHP-u
            
            $varijabla='vrijednost';

            echo $varijabla, ' ', gettype($varijabla), '<hr>' ;

            $varijabla=3.14;
            echo $varijabla, ' ', gettype($varijabla), '<hr>' ;

            $varijabla=3;
            echo $varijabla, ' ', gettype($varijabla), '<hr>' ;

            $varijabla=true;
            echo $varijabla, ' ', gettype($varijabla), '<hr>' ;

            $varijabla=[];
            echo gettype($varijabla), '<hr>' ;

            $varijabla=new stdClass();
            echo gettype($varijabla), '<hr>' ;

            //deklaracija varijabli i ispis varijabli
            $i=2; $j=3;

            echo "i=$i, j=$j", '<hr>';

            echo 'i=$i, j=$j', '<hr>';

            echo 'i='. $i . ' j='. $j, '<hr>';


          ?>
          

          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>
