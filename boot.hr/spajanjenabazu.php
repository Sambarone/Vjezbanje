<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'head.php'?>
   
  </head>
  <body class="bg-light">
  

        <?php include_once 'zaglavlje.php'?>

          <?php include_once 'bocna.php'?>

            <div class="bd-cheatsheet container-fluid bg-body">

            
  
                    <article class="my-3" id="navbar">
                        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                         </div>
                           <?php include_once 'naslovnaslika.php'?>

                        <div>
                           <div class="bd-example-snippet bd-code-snippet">
                              <div class="bd-example">
                                <form action="" method="post">
                                <label for="kategorija">Naziv kategorije</label>
                                <input type="text" name="Kategorija" id="kategorija">
                                <input type="submit" value="Unesi">
                                
                            </form>
                            <?php
                                $dsn='mysql:host=localhost;dbname=aplikacija;charest=utf8mb4';
                                $veza=new PDO($dsn,'root','');
                                //prepare metoda u kombinaciji s execute nas šiti od sql injection
                                $izraz=$veza->prepare('select *from kategorija;');
                                $izraz->execute();
                                
                                $rs=$izraz->fetchAll();


                                
                                ?>
                                <pre>
                                    <?php

                                    foreach ($rs as $red):
                                      ?>
                                        <h1><?= $red['naziv'];?>, <?= $red['sifra'];?></h1>
                                      <?php
                                      endforeach;

                                    print_r($rs); //ispis baze
                                    ?>
                                </pre>
                              
                              <?php include_once 'dno.php' ?>

                              </div>
                            </div>
                          </div>
              
                    </article>


            </div>
        

  <?php  include_once 'skripte.php' ?>
  </body>
</html>
