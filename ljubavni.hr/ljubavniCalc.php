<?php


$musko=isset($_POST['men'])?$_POST['men']:"Marko";
$zensko=isset($_POST['women'])?$_POST['women']:"Maja";


$niz=[];



//prebacivanje u jedan string i mala slova radi lakšeg brojanja
$imena=strtolower($musko.$zensko);
$imena=str_replace(' ','',$imena);




///prebacivanje stringova u brojeve

for($i=0;$i<strlen($imena);$i++){
    $brojac=1;
    
    if($imena[$i]==(int)$imena[$i]){
        continue;
    }
    for($j=$i+1;$j<strlen($imena);$j++){
      if($imena[$i]===$imena[$j]){
        $brojac++;
      }
    }
      $imena=str_replace($imena[$i],$brojac,$imena);
}



//
$proba=[];

for ($m=0;$m<strlen($imena);$m++){
  $proba[$m]=(int)$imena[$m];

}
echo '<pre>';
print_r($proba);
echo '</pre>';

$pom=[];
$duzina=strlen($imena);


do{
$brojac=0;
for ($i=0;$i<($duzina/2);$i++){
  $pom[$brojac]=$proba[$i];
  $proba[$i]=0;
  $pom[$brojac]+=$proba[$duzina-1-$i];
  $proba[$duzina-1-$i]=0;
if($pom[$brojac]>=10){
  $pom[$brojac+1]=$pom[$brojac]%10;
  $pom[$brojac]=(int)($pom[$brojac]/10);
  $brojac++;
}
$brojac++;
}
$duzina=$brojac;
$proba=[];
$proba=$pom;
$pom=[];
}while ($duzina>2);

echo $brojac;

echo '<pre>';
print_r($proba);
echo '</pre>';


$rez=$proba[0].$proba[1];
