<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php      include_once 'head.php';       ?>
  </head>
<body>

    <div class="grid-container">

    <?php   require_once 'izbornik.php';  ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class='callout' id='tijelo' 
          style="background-color: <?=$_GET['boja']; ?>"> Boja panela je došla kao parametar na stranicu</div>
        </div>
      </div>

      
    </div>
    <?php include_once 'podnozje.php'; ?>


    <?php     include_once 'skripte.php';     ?>
  </body>
</html>
