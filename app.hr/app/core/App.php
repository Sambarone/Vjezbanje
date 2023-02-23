<?php

//ova metoda ima zadatak saznati što želiš i to pokrenuti
class App{


    public static function start(){
      //  echo '<pre>';
      //  print_r($_SERVER);
     //   echo '</pre>';

     $ruta=Request::getRuta();
     Log::info($ruta);

     $dijelovi=explode('/',substr($ruta,1));

     Log::info($dijelovi);

     //idem razaznati controler
     $controler='';
     if(!isset($dijelovi[0]) || $dijelovi[0]===''){
        $controler='IndexControler';
     }
     else {
        $controler=ucfirst($dijelovi[0]. 'Controler');

     }
     Log::info($controler);

     //idem razaznati metodu
     $metoda='';
     if(!isset($dijelovi[1]) || $dijelovi[1]===''){
        $metoda='index';
     }
     else {
        $metoda=$dijelovi[1];
     }

     Log::info($metoda);

     $instanca= new $controler();
        $instanca->$metoda();



     if((class_exists($controler) && method_exists($controler,$metoda))){
        //izvedi ju
        $instanca= new $controler();
        $instanca->$metoda();
     }
     else{
        echo 'Ne postoji '.$controler. '-&gt;'.$metoda;
     }
}

}