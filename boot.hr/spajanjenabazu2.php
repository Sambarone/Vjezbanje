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
                                try{
                                    $dsn='mysql:host=localhost;dbname=aplikacija;charest=utf8mb4';
                                $veza=new PDO($dsn,'root','');
                                //prepare metoda u kombinaciji s execute nas šiti od sql injection
                                $izraz=$veza->prepare('select *from kategorija;');
                                $izraz->execute();
                                
                                $rs=$izraz->fetchAll();
                                foreach ($rs as $red):
                                    ?>
                                      <h1><?= $red['naziv'];?>, <?= $red['sifra'];?></h1>
                                    <?php
                                    endforeach;



                                }catch (Exception $e){
                                    switch($e->getCode()){
                                            case 1049:
                                                echo 'Provjerite naziv baze podataka';
                                                break;
                                             case 2002:
                                                    echo 'Provjerite naziv računala ili domene baze podataka';
                                                    break;
                                            case 1045:
                                                    echo 'Provjerite ime korisnika ili lozinku';
                                                        break;
                                            default:
                                            echo 'Dogodio se problem, kontaktirajte nas na XXXXXX';
                                                        break;
                                            
                                        


                                    }
                                    
                                }


                                


                                
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
