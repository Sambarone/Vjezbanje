<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once 'head.php'?>
     
    
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">regos.hr</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Ostale usluge</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">O nama</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Kontakt</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Generiranje OIB-a</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
    <label for="OIB">Koliko OIB_a želiš?
    <input type="number" name="OIB" id="OIB">
    </label>

    <input class="primary button expanded" type="submit" value="Izvedi">


    </form>
    
    <?php include_once 'algoritam.php'?>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Sambarone</a>, by <a href="http://polaznik35.edunova.hr/" class="text-white">@samba</a>.</p>
  </footer>
</div>


    
  </body>
</html>
