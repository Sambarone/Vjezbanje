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
echo '<hr>';

$br='99014026113';


echo Pomocno::validOib($br)? 'OK':'NO';

// prijedlog javnog PHP repozitorija na gitu
// generiranje n OIB valjanih brojeva prem https://regos.hr/app/uploads/2018/07/KONTROLA-OIB-a.pdf