<?php

try {
    //data source name
  $dsn='mysql:host=localhost;dbname=edunovapp26;charset=utf8';
  //želim objekt umjesto asocijativnog niza
  $parametri=[
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
  ];
  $veza=new PDO ($dsn,'root','', $parametri);
    $izraz=$veza->prepare('select *from smjer');

   
  }catch (Exception $e){
    switch ($e->getCode()){
            case 1049:
                echo 'Provjerite ime baze podataka';
                break;
            case 2002:
                echo 'Provjerite naziv računala ili domene gdje se nalazi baza';
                break;
            case 1045:
                echo 'Provjerite korisnika i lozinku na bazi';
                break;
            default:
                echo 'Dogodio se problem, kontaktirajte nas na XXXX';
                break;




    }

}