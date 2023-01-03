
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
            <p><strong>Registracija novih korisnika</strong></p>

            <form>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Ime
          <input type="text" placeholder=".unesite svoje ime">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Prezime
          <input type="text" placeholder=".unesite svoje prezime">
        </label>
      </div>
    </div>
  </div>
</form>

<form data-abide novalidate>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Adresa
          <input type="text" placeholder=".unesite naziv svoje ulice">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Kućni broj
        <input type="number" name="age" id="age" min="1" max="500" step="1" />
        </label>
      </div>
    </div>
  </div>
</form>
<form>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Mjesto
          <input type="text">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Poštanski broj
        <input type="number" name="age" id="age" min="10000" max="99999" step="1" />
        </label>
      </div>
    </div>
  </div>
</form>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Država
          <input type="text">
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Telefon
        <input type="tel" id="tel" name="tel" />
        </label>
      </div>
    </div>
  </div>
</form>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>e-mail
        <input type="email" id="email" name="email" multiple />
        </label>
      </div>
      <div class="medium-6 cell">
        <label>lozinka
          <input type="password">
        </label>
      </div>
    </div>
  </div>

  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Datum rođenja
        <input type="date" name="time" id="time" />
        </label>
      </div>
      <div class="medium-6 cell">
        <label>Spol
        <fieldset class="cell medium-6">
      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Muško</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required><label for="pokemonBlue">Žensko</label>
      </fieldset>
        </label>
      </div>
    </div>

    <fieldset class="cell medium-6">
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Potvrđujem da imam 16 godina starosti i više te da se slažem s Uvjeti korištenja i Izjavom o zaštiti osobnih podataka 
        Karte.hr nije organizator ponuđenih događaja. Događaj vodi organizator, koji također izdaje ulaznice. 
        Karte.hr djeluje samo kao distributer za prodaju ulaznica u ime organizatora i stoga ne snosi nikakvu odgovornost u vezi 
        organizacije događaja i / ili njegovog održavanja.</label>
       </fieldset>
    
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
