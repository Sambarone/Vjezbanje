<?php
include_once 'Pomocno.php';

//klasa je opisnik objekta
class Osoba {
    
public $ime;
public $prezime;

public function imePrezime(){
    return $this->ime. ' '.$this->prezime;
}

}

//objekt je insatnca, pojavnost klase
//Osoba je klasa
//$o je instanca
$o=new Osoba();

// s znakom -> pristupamo metodama i svojstvima klase
$o->ime='Pero';
$o->prezime='Kartaš';

//ovo od 8.2 nije moguće, deklaritati svojstvo mimo klase
$o->srednjeIme='KKKK';


Pomocno::log($o->ime);

// PHP je interpreter i nama ne treba klasa
$o=new stdClass();
$o->ime='Pero';
Pomocno::log($o->ime);



