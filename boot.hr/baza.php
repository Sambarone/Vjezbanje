<?php

try{
    $dsn='mysql:host=localhost;dbname=aplikacija;charest=utf8mb4';
    $parametri=[
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
    ];
$veza=new PDO($dsn,'root','',$parametri);
}catch (Exception $e){
 // echo '<pre>';
 // print_r($e);
 // echo '</pre>';
    switch($e->getCode()){
            case 1049:
                echo 'Provjerite naziv baze podataka';
                break;
             case 2002:
                    echo 'Provjerite naziv računala ili domene baze podataka';
                    break;
            case 1045:
                    echo 'Provjerite ime korisnika ili lozinku';
                        break;
            default:
            echo 'Dogodio se problem, kontaktirajte nas na XXXXXX';
                        break;
            
        


    }
    
}
