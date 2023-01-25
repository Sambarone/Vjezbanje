<?php
//korištenje na stari način
require_once 'mojefunkcije.php';

l([5,4,3]);

require_once 'mojefunkcije.php'; //kad se jednom pozove na once ovo se uopće ne izvodi

l([5,7,3]);


wtf(54);

// korištenje na OOP način

require_once 'Pomocno.php';

// pozivam metodu na samoj klasi
// takva metoda mora biti static

Pomocno::log([2,5,4]);

// ovo neće raditi jer ovo znači da pozivam metodu na instanci klase
// takva metoda neće biti static

$p=new Pomocno();
$p->setIme('Pero');
//sleep(5);
$p->ispis(2);