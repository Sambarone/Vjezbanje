<?php
include_once 'Pomocno.php';

class  Osoba{
    //učahurivanje - klasa sakrije svojstva, 
    //učinih ih dostupnima putem javnih get/set metoda

    private $ime;
    private $prezime;

    //private skrivena svojstva

    //metode su javne

    public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}

	public function getPrezime(){
		return $this->prezime;
	}

	public function setPrezime($prezime){
		$this->prezime = $prezime;
	}



}

$o= new Osoba();
$o->setIme('Pero');

Pomocno::log($o->getIme());