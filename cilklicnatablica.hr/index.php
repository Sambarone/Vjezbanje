<!doctype html>
<html lang="en">
  <head>
    

    <?php include_once 'head.php'?>

    
   
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    

    <div class="row g-5">
      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Ciklična tablica</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Redaka</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Stupaca</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            

            

           

            

            

            

            
          </div>

          <hr class="my-4">

         


          

          
            

            

           
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
