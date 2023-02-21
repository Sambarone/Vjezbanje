<?php

if($_POST['email']==='ivan.sambol@skole.hr'
&& $_POST['lozinka']==='123456')
{
session_start();
$_SESSION['auth']=true;
setcookie('email', $_POST['email']);
header('location: zasticeno.php');
}
else
{
    header('location: index.php?email='.$_POST['email']);
}

