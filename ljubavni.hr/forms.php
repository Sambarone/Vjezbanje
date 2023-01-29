<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
<div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        
      <img src="https://uxwing.com/wp-content/themes/uxwing/download/relationship-love/romance-icon.svg" alt="ulaz" heigh="100px"; width="100px"; float="center">
       
      <?php include_once 'ljubav.php'?>
      <div class="modal-body p-5 pt-0">
      <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="on" name="on" value="<?= $musko?>" placeholder="Njegovo ime">
            <label for="on">Unesi njegovo ime</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="ona" name="ona" value="<?= $zensko?>" placeholder="Njezino ime">
            <label for="ona">Lozinka</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Izračunaj</button>
                   
          <p><?php if((int)$rez>0){
    echo $rez;
      }
    ?> </p>
                  </form>
      </div>
      
      
      
      
      
      
      
      
      
      
    
    
        
   
      </div>
    </div>
  </div>
</div>