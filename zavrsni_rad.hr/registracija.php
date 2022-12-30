
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
              <a class="button float-right">Prijava</a>
              <a class="button float-right">Registracija</a>
      </div>
    
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

<form>
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
          <input type="text" placeholder="...">
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
          <input type="text" placeholder="...">
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
          <input type="text" placeholder="...">
        </label>
      </div>
    </div>
  </div>
</form>



        </div>



     <hr>


    </div>
    <?php include_once 'podnozje.php' ?>
    <?php include_once 'skripte.php' ?>
  </body>
</html>
