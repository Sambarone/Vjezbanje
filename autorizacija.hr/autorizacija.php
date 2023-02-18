<?php
//prvo će se odratiti kontrole, treba li uopće ići autorizirati

//ide autorizacija u bazo ali sada radim fiksno
if($_POST['email']==='edunova@edunova.hr' && 
    $_POST['lozinka']==='1234'){
    session_start();
    $_SESSION['auth']=true;
    header ('location: zasticeno.php');
}
else {
    header ('location: index.php');
}