<?php

session_start();

if($_POST['email']==='ivan.sambol@skole.hr'&& $_POST['lozinka']==='123456'){
 
    $_SESSION['auth']=true;
    $_SESSION['email']=$_POST['email'];
    header('location: index3.php');

}
else
{
   header('location: login.php');
}

?>