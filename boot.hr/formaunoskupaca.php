<?php
if (isset($_POST['ime'])){
    require_once 'baza.php';
    $izraz=$veza->prepare('
    insert into kupac (ime, prezime,datum_rodenja,e_mail,lozinka)
values (:ime, :prezime,:datum_rodenja,:e_mail,:lozinka);
       
    ');
    $izraz->execute($_POST);

}

?>



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
                                <form action="" method="post">
                                <input type="text" name="ime" id="ime">
                                <label for="ime">Ime</label>
                                <br>
                                <input type="text" name="prezime" id="prezime">
                                <label for="prezime">Prezime</label>
                                <br>
                                <br>
                                <input type="date" name="datum_rodenja" id="datum_rodenja">
                                <label for="datum_rodenja">Datum rođenja</label>
                                    <br>
                                    <br>
                                <input type="email" name="e_mail" id="e_mail">
                                <label for="e_mail">E-mail</label>

                                <input type="password" name="lozinka" id="lozinka">
                                <label for="lozinka">Lozinka</label>

                                <input type="submit" value="Unesi kupca u bazu">
                                </form>

                              
                              <?php include_once 'dno.php' ?>

                              </div>
                            </div>
                          </div>
              
                    </article>


            </div>
        

  <?php // include_once 'skripte.php' ?>
  </body>
</html>
