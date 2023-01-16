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
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Redaka</label>
              <input type="number" class="form-control" id="firstName" placeholder="" value="0" required>
              <div class="invalid-feedback">
                Unesi broj redaka
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Stupaca</label>
              <input type="number" class="form-control" id="lastName" placeholder="" value="0" required>
              <div class="invalid-feedback">
                Unesi broj stupaca
              </div>
            </div>

            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
   
      
    <?php include_once 'zadatak5.php'?>
    

   
  </div>

            
  
  

            

            

            

            
          </div>

          

         


          
   
            

            

           
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  
</div>


    <?php include_once 'skripte.php'?>
  </body>
</html>
