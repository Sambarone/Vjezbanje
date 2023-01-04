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
            <span style="padding-left:5px; margin-right: 10px; color:green;"><a href="index.php">Odjava</a></span>
            <span style="padding-left:5px; margin-right: 10px; color:green;"><a href="#0">Moji podaci</a></span>

            <span style="padding-left:5px; margin-right: 10px; ">
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
