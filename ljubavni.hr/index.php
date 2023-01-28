<?php
$nacini=['Od gore', 'Od dolje', 'Spiralno'];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $redak=(int)$_POST['redak'];
  $stupac=(int)$_POST['stupac'];
  if($redak===0){
    $redak=' ';
    
  }
  if($stupac===0){
    $stupac=' ';
    
  }

  $nacin=$_POST['nacin'];

}
else{
  $redak=5;
  $stupac=5;
  $nacin=$nacini[0];
}

$poruka='Broj redaka mora biti veći od 0';
$poruka2='Broj stupaca mora biti veći od 0';

?>



<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'head.php'?>
  </head>
<body>

    <div class="grid-container">
    
    
    
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1>Ciklična tablica</h1>
        </div>
      </div>

      <div class="callout primary">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <input type="number" name="redak" id="redak" value="<?=$redak?>">
          <label for="redak">Redak</label>
          <?php if($redak<=0){echo $poruka;}?>
          <br>
          <input type="number" name="stupac" id="stupac" value="<?=$stupac?>">
          <label for="stupac">Stupac</label>
          <?php if($stupac<=0){echo $poruka2;}?>
          <br>
          <label for="nacin">Vrsta ispisa</label>
          <select name="nacin" id="nacin">
          <?php foreach($nacini as $n):?>
            <option 
            <?php if($n===$nacin):?>
              selected="selected"
              <?php endif;?>
                      
            value="<?=$n?>"><?=$n?></option>
          <?php endforeach; ?>
            </select>
          
          <button class="button" type="submit" value="Submit">Izračunaj</button>

      </form>
    </div>

      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout">
            <?php 
            
            if($nacin==='Od gore'){
            include_once 'zadatak6.php';
          }
            else if($nacin==='Od dolje'){

              include_once 'zadatak7.php';
            }
                 
            else {
              include_once 'zadatak5.php';
            }
            ?>


          </div>
        </div>
      </div>

    </div>


    <?php include_once 'skripte.php'?>
  </body>
</html>