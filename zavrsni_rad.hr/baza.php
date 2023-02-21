<?php

try
{
    $dsn='mysql:host=localhost;dbname=aplikacija;charset=utf8mb4';
    $parametri=[
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
    ];

    $veza=new PDO ($dsn,'root','',$parametri);
    $izraz=$veza->prepare('select *from kupac;');

}
catch (Exeption $e){
switch($e->getCode()){
    case 1045:
        echo 'Provjerite korisnika i lozinku na bazi';
                break;
    case 2002:
        echo 'Provjerite naziv računala ili domene gdje se nalazi baza';
                break;
    case 1049:
        echo 'Provjerite ime baze podataka';
                break;
    default:
        echo 'Dogodio se problem, kontaktirajte nas na XXXX';
                break;



}





}