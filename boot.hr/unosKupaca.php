<?php require_once 'baza.php';?>

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
                                <?php
                                    $sql='insert into kupac (ime, prezime,datum_rodenja,e_mail,lozinka)
                                    values';
                                  for ($i=0;$i<10;$i++){
                                    $sql.= "('Krešo', 'Jengić','1980-01-12','sokre@gamil.com','Budalaaaa12345'),";
                                 
                                    
                                  }
                                  $sql=substr($sql,0,strlen($sql)-1);
                                  $pocetak=microtime(true);
                                  $izraz=$veza->prepare($sql);
                                  $izraz->execute();
                                  $kraj=microtime(true);
                                  echo $kraj- $pocetak;

                                    ?>

                              
                              <?php include_once 'dno.php' ?>

                              </div>
                            </div>
                          </div>
              
                    </article>


            </div>
        

  <?php  include_once 'skripte.php' ?>
  </body>
</html>
