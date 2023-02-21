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


<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php include_once 'zaglavlje.php' ?>
</head>

<body>

  <div class="grid-container">


    <div class="callout clearfix">
      <h3 style="color:black;">KARTE.HR</h3>
      <h6>Najveći online distributer ulaznica na području Hrvatske</h6>
      <a href="index.php" class="button float-right">Prijava</a>
      <a href="registracija.php" class="button float-right">Registracija</a>
    </div>
    <?php include_once 'izbornik.php' ?>
    <br>
    <div class="regis">
      <p><strong>Registracija novih korisnika</strong></p>

      <form action="" method="post">
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
              <label for='ime'>Ime
                <input type="text" id='ime' name='ime' placeholder=".unesite svoje ime">
              </label>
            </div>
            <div class="medium-6 cell">
              <label for='prezime'>Prezime
                <input type="text" id='prezime' name='prezime' placeholder=".unesite svoje prezime">
              </label>
            </div>
          </div>
        </div>
    
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-6 cell">
            <label for='e_mail' >e-mail
              <input type="email" id="e_mail" name="e_mail">
            </label>
          </div>
          <div class="medium-6 cell">
            <label for='lozinka'>lozinka
              <input type="password" id="lozinka" name="lozinka">
            </label>
          </div>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="medium-6 cell">
            <label for='datum_rodenja'>Datum rođenja
              <input type="date" name="datum_rodenja" id="datum_rodenja" />
            </label>
          </div>
          
        </div>

      <!--  <fieldset class="cell medium-6">
          <input id="checkbox1" type="checkbox" required><label for="checkbox1">Potvrđujem da imam 16 godina starosti i više te da se slažem s Uvjeti korištenja i Izjavom o zaštiti osobnih podataka
            Karte.hr nije organizator ponuđenih događaja. Događaj vodi organizator, koji također izdaje ulaznice.
            Karte.hr djeluje samo kao distributer za prodaju ulaznica u ime organizatora i stoga ne snosi nikakvu odgovornost u vezi
            organizacije događaja i / ili njegovog održavanja.</label>
        </fieldset>
-->

        <div class="grid-x grid-margin-x">
          <fieldset class="cell medium-6">
            <button class="button" type="submit" value="Submit">Potvrdi</button>
          </fieldset>
          <fieldset class="cell medium-6">
            <button class="button" type="reset" value="Reset">Poništi</button>
          </fieldset>
        </div>

      </div>
      </form>



    </div>



    <hr>
    <?php include_once 'podnozje.php' ?>

  </div>

  <?php include_once 'skripte.php' ?>
</body>

</html>