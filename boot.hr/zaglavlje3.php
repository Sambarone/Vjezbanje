<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
    <a href="index2.php" class="link-light" hreflang="ar"> <img src="pozadina.png" width="38" height="30" class="me-3" alt="Bootstrap"></a>
    <a href="index.php" class="link-light" hreflang="ar" style="text-decoration:none;">  Karte.hr</a>
    </h1> 
    <a href="login.php" class="ms-auto link-light" hreflang="ar">
        <div class="dropdown text-end">
          <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <?php 
          
          echo $_SESSION['email'];?> <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Moj profil</a></li>
            <li><a class="dropdown-item" href="#">Moje kupnje</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="odjava.php">Odjava</a></li>
          </ul>
        </div></a>
 

  </div>
</header>