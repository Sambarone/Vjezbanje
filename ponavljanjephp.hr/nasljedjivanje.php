<?php

include_once 'Pomocno.php';


class Osoba{
    private $ime;
    protected $status;//ovo vide sve klase koje nasljede klasu osoba

    
    public function __construct($ime=''){
            $this->ime=$ime;
           

    }

    public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}

    
}

class Polaznik extends Osoba
{
        private $brUgovora;

        public function __construct($ime='', $brUgovora){
            parrent::__constrct($ime);
            // ime se može i ovako postaviti
            //$this->ime=$ime;
            $this->getBrUgovora=$brUgovora;
            $this->status=1;
           

    }

        public function getBrUgovora(){
            return $this->brUgovora;
        }
    
        public function setBrUgovora($brUgovora){
            $this->brUgovora = $brUgovora;
        }



}

class Predavac extends Osoba
{
        private $iban;

        public function __construct($ime='', $iban){
            parrent::__constrct($ime);
            // ime se može i ovako postaviti
            //$this->ime=$ime;
            $this->getBrUgovora=$iban;
            $this->status=2;
           

    }
    public function getIban(){
        return $this->brUgovora;
    }

    public function setIban($iban){
        $this->iban = $iban;
    }



}


