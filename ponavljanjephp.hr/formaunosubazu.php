
<?php
if(isset($_POST['naziv'])){
require_once 'baza.php';

$izraz=$veza->prepare('
insert into smjer (naziv, trajanje, certificiran)
values(:naziv, :trajanje, :certificiran);


');
$izraz->execute($_POST);

}

?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
   <?php include_once 'head.php' ?>
  </head>
<body>

    <div class="grid-container">

    <?php require_once 'izbornik.php' ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class='callout' id='tijelo'>
          
          <form action="" method="post">
            <label for="naziv">Naziv</label>
            <input type="text" name="naziv" id="naziv">
            <br>
            <label for="trajanje">Trajanje</label>
            <input type="text" name="trajanje" id="trajanje">
            <br>
            <label for="certificiran">Ceritficiran</label>
            <select name="certificiran" id="certificiran">
                <option value=1>Da</option>
                <option value=0>Ne</option>
            </select>

            

            <input type="submit" class="succes button expanded" value="Unesi">
          </form>
          </div>

        </div>

        <?php include_once 'podnozje.php' ?>
      </div>

      
    </div>
    <?php include_once 'skripte.php' ?>
    </body>
</html>
