<?php

include_once 'Pomocno.php';

class Start{

    public function __construct(){
                $this->pozdravnaPoruka();
                echo '---------------------------------'.PHP_EOL;
                $this->glavniIzbornik();

    }

    private function pozdravnaPoruka(){

        echo 'Dobrodošli u Edunova terminal APP '.PHP_EOL;
    }


    private function glavniIzbornik(){
        echo 'Glavni izbornik'.PHP_EOL;
        echo '1. Smjerovi'.PHP_EOL;
        echo '2. Grupe'.PHP_EOL;
        echo '3. Smjerovi'.PHP_EOL;
        echo '4. Predavači'.PHP_EOL;
        echo '5. Izlaz iz programa'.PHP_EOL;
            $this-odabirOpcije();
    }

    private function odabirOpcije(){
            switch (Pomocno:rasponBroja('Odaberite opciju: ',1,5))
            {
                case 1:
            }

    }
}

new Start();