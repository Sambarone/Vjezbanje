<?php


//Ovo je stari način rada s funkcijama,
// kada su funkcije deklarirane u php datoteci
// koja se učita i koriste se funkcije na način
// da se samo pozovu imenom



//ne prima parametre i ne vraća vrijednost
function pozdravSvijetu(){
    echo '<hr> Hello world';
    echo '<br>';
    echo 'Pozdrav svijetu';
    echo '<hr>';
}

pozdravSvijetu();
echo '22';
pozdravSvijetu();


// prima parametre i ne vraća vrijednost
function l($v){
echo '<pre>';
print_r($v);
echo '</pre>';
echo '<hr>';


}
l([2,3,4]);
$niz=[2,2,3,4];
l($niz);
l('Pero');


//ne prima parametre, vraća vrijednost

function slucajniBroj(){
    $prvi=rand(1,10);
    $drugi=rand(-10,-1);
    return abs($prvi+$drugi);

}

$s=0;
for($i=0;$i<100;$i++){
    $s+=slucajniBroj();
}

l($s);

//prima parametre, vraća vrijednost

function primBroj($broj){
    for($i=2;$i<$broj;$i++){
        if($broj%$i===0){
            return false;
        }
    }
    return true;
}

$brojac=0;
$suma=0;
for ($i=2;$brojac<13;$i++){
    if(primBroj($i)){
        $suma+=$i;
        $brojac++;
    }

}

l($suma);
l($brojac);

// varijable su žive samo unutar funkcije

$i=2;

function funkcija ($broj){

    // return $broj+$i; javit će grešku, ne pozna vrijednost varijable $i
        return $broj;

}

l(funkcija($i+5));