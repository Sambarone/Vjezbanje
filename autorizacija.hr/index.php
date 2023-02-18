<?php

// session_start(); index je javni i njemu ne treba ni session start




// $_SESSION['kljuc']='hello'; //ovo je asocijativni niz
$email=isset($_GET['email'])?$_GET['email']:(isset($_COOKIE['email'])?$_COOKIE['email']:'');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javno</title>
</head>
<body>
Javni dio   <br>
Autorizacija.hr <br>
Putem sesion 

<form action="autorizacija.php" method="post">
<input type="text" name="email" 
value="<?=$email?>"
placeholder="email" id="">
<input type="password" name="lozinka" id="">
<input type="submit" value="Autoriziraj se">


</form>
</body>
</html>