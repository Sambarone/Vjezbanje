<?php

include_once 'Pomocno.php';

//apstraktna klasa je ona koja ne može imati instancu
//koristi se za nasljeđivanje drugih podklasa
abstract class Osoba{
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

    public function __toString(){
        return $this->ime;
    }

    
}

class Polaznik extends Osoba
{
        private $brUgovora;

        public function __construct($ime='', $brUgovora=''){
            parent::__construct($ime);
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
                //override
        public function setIme($ime){
            parent::setIme ( $ime . 'Pregaženo');
        }



}

class Predavac extends Osoba
{
        private $iban;

        public function __construct($ime='', $iban){
            parent::__construct($ime);
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

    public function __toString(){
        return $this->status. ': '. $this->getIme();
    }



}

class Ravnatelj extends Osoba{

    
}

$polaznik=new Polaznik('Pero', '12/2023');
$polaznik->setIme('Karlo');

Pomocno::log($polaznik->getIme());

$predavac=new Predavac('Marija', '12/2023');
$predavac->setIme('Zrinka');

Pomocno::log($predavac->getIme());

echo $predavac;
echo '<hr>';
echo $polaznik;