<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
  $redak=(int)$_POST['redak'];
  $stupac=(int)$_POST['stupac'];
  if($redak===0){
    $redak=0;
  }
  if($stupac===0){
    $stupac=0;
  }
}
else{
  $redak=' ';
  $stupac=' ';
}


$redak=isset($_POST['redak'])?(int)$_POST['redak']:5;
$stupac=isset($_POST['stupac'])?(int)$_POST['stupac']:5;

?>



<!doctype html>
<html lang="en">
  <head>
    

    <?php include_once 'head.php'?>

    
   
  </head>
  <body class="bg-light">

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      
        <span class="fs-4">Ciklična tablica</span>
     

      
    </header>
    






    <div class="container">
  <main>
    

    <div class="row g-5">
      
      <div class="col-md-7 col-lg-8">
        <form method="POST" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="redak" class="form-label">Redaka</label>
              <input type="text" class="form-control" name="redak" value="<?=$redak?>"  min="1" max="10" required>
              <div class="invalid-feedback">
                Unesi broj redaka između 1 i 10
              </div>
            </div>

            <div class="col-sm-6">
              <label for="stupac" class="form-label">Stupaca</label>
              <input type="text" class="form-control" name="stupac" value="<?=$stupac?>"  min="1" max="10" required>
              <div class="invalid-feedback">
                Unesi broj stupaca između 1 i 10
              </div>
            </div>

            <?php
$redak=isset($_POST['redak'])?(int)$_POST['redak']:5;
$stupac=isset($_POST['stupac'])?(int)$_POST['stupac']:5;



$matrica=[];

if($redak>$stupac){
$broj_prolaza=$stupac*2;
}
else {
    $broj_prolaza=($redak*2)-1;
}
$broj=1;

$redci=$redak-1;
$stupci=$stupac-1;
$i=0;
$j=0;
$upis=0;


for($prolaz=1;$prolaz<=$broj_prolaza;$prolaz++){
if($prolaz%4===1){
    $upis=0;;
    for(;$i<$stupac;){
        $matrica[$redak-1][$stupac-1]=$broj;
        $broj++;
        $stupac--;
        $upis++;
    }
    $stupac=$i;
    $i++;
    
    
}
else if($prolaz%4===2){
    $upis=0;;
    for(;$j<$redak-1;){
    $matrica[$redak-2][$stupac]=$broj;
        $broj++;
        $redak--;
        $upis++;}
        
        $redak=$j;
        $j++;
        
}
else if($prolaz%4===3){
    $upis=0;
    
   for($stupac;$stupac<$stupci;$stupac++){
        $matrica[$redak][$stupac+1]=$broj;
        $broj++;
        $upis++;
    }
    
    $stupci--;
    

}
else if($prolaz%4===0){
    $upis=0;
    $redci--;
for ($redak;$redak<$redci;$redak++){
$matrica[$redak+1][$stupac]=$broj;
        $broj++;
        $upis++;
        
}

$redak++;

}

  
}

$redak=isset($_POST['redak'])?(int)$_POST['redak']:5;
$stupac=isset($_POST['stupac'])?(int)$_POST['stupac']:5;
echo '<table>';
for ($k=0;$k<$redak;$k++){
    echo '<tr>';
    for ($z=0;$z<$stupac;$z++) {
        echo '<td style="text-align:right; padding: 10px;">' . $matrica[$k][$z]. '</td> ';
         }
     echo '</tr>';
     }
 echo '</table>';

 ?>
            
            
            
          </div>
          
           
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Prikaži tablicu</button>
        </form>
      </div>
    </div>
  </main>

  
</div>


    <?php include_once 'skripte.php'?>
  </body>
</html>
