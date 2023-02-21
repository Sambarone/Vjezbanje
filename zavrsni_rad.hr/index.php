<?php
session_start();
$email=isset($_GET['email'])?$_GET['email']:(isset($_COOKIE['email'])?$_COOKIE['email']:'');
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
      
      <p style="padding-left: 30px;"><strong>Prijava postojećih korisnika korisnika</strong></p>

      <form data-abide novalidate action="autorizacija.php" method="post">
        <div class="grid-x grid-margin-x">
          <div class="cell">
            <div data-abide-error style="display: none; color:red; padding-left: 30px;">
              <p><i class="fi-alert"></i> Unjeli ste pogrešno ime ili lozinku</p>
            </div>
          </div>
        </div>
        <div class="grid-x grid-margin-x">

          <div class="cell small-12" style="padding-left: 30px;">
            <label for="email">E-mail adresa 
              <input type="email" name='email' id='lozinka' value="<?=$email?>" placeholder="Unesite svoju e mail adresu!" aria-describedby="exampleHelpTextNothing" required>
              </label>
          </div>
          <div class="cell small-12" style="padding-left: 30px;">
            <label for='lozinka'>Lozinka
              <input type="password" id="lozinka" name='lozinka' placeholder="Unesite lozinku!" aria-describedby="exampleHelpTextPassword" required>
              <a href="#0">Zaboravili ste lozinku?</a>
              <span class="form-error">
                Obavezan unos lozinke
              </span>
              <p></p>
            </label>
          </div>

        </div>


        <div class="grid-x grid-margin-x">
          <fieldset class="cell medium-6" style="padding-left: 30px;">
          <input type="submit" value="Potvrdi" class="button">
            </fieldset>
          
        </div>
      </form>


    </div>



    <hr>
    <?php include_once 'podnozje.php' ?>

  </div>

  <?php include_once 'skripte.php' ?>
</body>

</html>