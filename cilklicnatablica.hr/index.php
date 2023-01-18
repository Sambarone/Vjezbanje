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
              <label for="firstName" class="form-label">Redaka</label>
              <input type="number" class="form-control" name="redak" placeholder="" value="<?php $n?>" min="1" max="10" required>
              <div class="invalid-feedback">
                Unesi broj redaka
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Stupaca</label>
              <input type="number" class="form-control" name="stupac" placeholder="" value="<?php $m?>" min="1" max="10" required>
              <div class="invalid-feedback">
                Unesi broj stupaca
              </div>
            </div>

            <?php
$n=isset($_POST['redak'])?$_POST['redak']:5;
$m=isset($_POST['stupac'])?$_POST['stupac']:5;



$matrica=[];

if($n>$m){
$broj_prolaza=$m*2;
}
else {
    $broj_prolaza=($n*2)-1;
}
$broj=1;

$redci=$n-1;
$stupci=$m-1;
$i=0;
$j=0;
$upis=0;


for($prolaz=1;$prolaz<=$broj_prolaza;$prolaz++){
if($prolaz%4===1){
    $upis=0;;
    for(;$i<$m;){
        $matrica[$n-1][$m-1]=$broj;
        $broj++;
        $m--;
        $upis++;
    }
    $m=$i;
    $i++;
    
    
}
else if($prolaz%4===2){
    $upis=0;;
    for(;$j<$n-1;){
    $matrica[$n-2][$m]=$broj;
        $broj++;
        $n--;
        $upis++;}
        
        $n=$j;
        $j++;
        
}
else if($prolaz%4===3){
    $upis=0;
    
   for($m;$m<$stupci;$m++){
        $matrica[$n][$m+1]=$broj;
        $broj++;
        $upis++;
    }
    
    $stupci--;
    

}
else if($prolaz%4===0){
    $upis=0;
    $redci--;
for ($n;$n<$redci;$n++){
$matrica[$n+1][$m]=$broj;
        $broj++;
        $upis++;
        
}

$n++;

}

  
}

$n=isset($_POST['redak'])?$_POST['redak']:5;
$m=isset($_POST['stupac'])?$_POST['stupac']:5;
echo '<table>';
for ($k=0;$k<$n;$k++){
    echo '<tr>';
    for ($z=0;$z<$m;$z++) {
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
