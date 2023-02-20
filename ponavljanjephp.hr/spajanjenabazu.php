
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

          //data source name
          $dsn='mysql:host=localhost;dbname=edunovapp26;charset=utf8';
          
          $veza=new PDO ($dsn,'root','');
            $izraz=$veza->prepare('select *from smjer');

            $izraz->execute();
            //rezultati 
            $rs=$izraz->fetchAll();

            foreach ($rs as $red):
                ?>
                
                <h1><?=$red['naziv'] ?>, <?=$red['trajanje'] ?></h1>
                
                
                <h1><?=$red[1] ?></h1>
            
                
                <?php
            endforeach;


          ?>

          <pre>
            <?php print_r($rs);

            
            ?>
          </pre>
          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>
