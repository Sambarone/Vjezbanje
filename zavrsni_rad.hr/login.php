
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'zaglavlje.php'?>
  </head>
<body>

    <div class="grid-container">
      
        
      <div class="callout clearfix">
            <h3 style="color:black;">KARTE.HR</h3>
            <h6>Najveći online distributer ulaznica na području Hrvatske</h6>
            <a href="login.php" class="button float-right">Prijava</a>
              <a href="registracija.php" class="button float-right" >Registracija</a>
      </div>
      <?php  include_once 'izbornik.php' ?>
      <br>
        <div class="regis">
            <p style="padding-left: 30px;"><strong>Prijava postojećih korisnika korisnika</strong></p>

            <form data-abide novalidate>
  <div class="grid-x grid-margin-x">
    <div class="cell">
      <div data-abide-error style="display: none; color:red; padding-left: 30px;">
        <p><i class="fi-alert"></i> Unjeli ste pogrešno ime ili lozinku</p>
      </div>
    </div>
  </div>
  <div class="grid-x grid-margin-x">
    
    <div class="cell small-12" style="padding-left: 30px;">
      <label>E-mail adresa
        <input type="email" placeholder="Unesite svoju e mail adresu!" aria-describedby="exampleHelpTextNothing" required>
      </label>
      </div>
    <div class="cell small-12" style="padding-left: 30px;">
      <label>Lozinka
        <input type="password" id="password" placeholder="Unesite lozinku!" aria-describedby="exampleHelpTextPassword" required >
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
      <button class="button" type="submit" value="Submit"><a href="korisnik.php?ime=Ivan&prezime=Sambol">Potvrdi</a></button>
    </fieldset>
    <fieldset class="cell medium-6">
      <button class="button" type="reset" value="Reset">Poništi</button>
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
