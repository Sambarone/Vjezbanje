
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
            <p><strong>Prijava postojećih korisnika korisnika</strong></p>

            <form data-abide novalidate>
  <div class="grid-x grid-margin-x">
    <div class="cell">
      <div data-abide-error class="alert callout" style="display: none;">
        <p><i class="fi-alert"></i> There are some errors in your form.</p>
      </div>
    </div>
  </div>
  <div class="grid-x grid-margin-x">
    
    <div class="cell small-12">
      <label>E-mai adresa
        <input type="email" placeholder="Unesite svoj e mail adresu!" aria-describedby="exampleHelpTextNothing" required>
      </label>
      <p class="help-text" id="exampleHelpTextNothing">This input is ignored by Abide using `data-abide-ignore`</p>
    </div>
    <div class="cell small-12">
      <label>Lozinka
        <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="exampleHelpTextPassword" required >
        <span class="form-error">
          I'm required!
        </span>
      <p class="help-text" id="exampleHelpTextPassword">Enter a password please.</p>
      </label>
    </div>
    
  </div>
  
  
  <div class="grid-x grid-margin-x">
    <fieldset class="cell medium-6">
      <button class="button" type="submit" value="Submit">Submit</button>
    </fieldset>
    <fieldset class="cell medium-6">
      <button class="button" type="reset" value="Reset">Reset</button>
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
