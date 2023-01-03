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
            <span class="warning label"><a href="index.php">Odjava</a></span>
            <span class="success label" style="padding-left:5px; margin-right: 10px;">Moji podaci</span>

            <span class="success label" style="padding-left:5px; margin-right: 10px;">
                <?php echo $_GET['ime'].' '.$_GET['prezime'];?>
            </span>
            
      </div>
     
     <?php  include_once 'izbornik.php' ?>

     <?php  include_once 'slide.php' ?>

     <?php include_once 'dogadjaji.php' ?>

     <?php  include_once 'najava.php'?>

     <hr>

     




    </div>
    <?php include_once 'podnozje.php' ?>
    <?php include_once 'skripte.php' ?>
  </body>
</html>
