<?php

//declarare variabila
$famPricope=4;
echo $famPricope. "<br>";

//verificam daca valoarea variabilei este >10 si afisam mesajul aferent
if($famPricope>10){
    echo 'Familia Pricope are peste 10 membri!';
}
else{
    echo 'Familia Pricope are mai putin de 10 membri!', "<br>";
}

//declarare constanta
define("Pricope", "Familia Pricope are 4 membri!");
echo Pricope, "<br>";

//functie pentru afisarea dublul numarului declarat
function dublu($numar){
    return $numar*2;
}
$numar=24;
$dubluNumar=dublu($numar);
echo "Dublu lui $numar este $dubluNumar!", "<br>";

//functie anonima
$calculAriedreptunghi=function($lungime, $latime){
    return $lungime*$latime;
};
//afisarea functiei
$lungime=10;
$latime=5;
$aria=$calculAriedreptunghi($lungime, $latime);
echo "Aria dreptunghiului este $aria", "<br>";


//declararea unui array + afisare
$produseprotectialemnului=array("Grunduri", "Vopsea","Email","Lac","Bait");
echo $produseprotectialemnului[0]. ",";
echo $produseprotectialemnului[1]. ",";
echo $produseprotectialemnului[2]. ",";
echo $produseprotectialemnului[3]. ",";
echo $produseprotectialemnului[4]. "<br>";

//afisare cu foreach
foreach($produseprotectialemnului as $produs){
    echo $produs. " ";
};
echo "<br>";

//adaugarea unui element la sfarsitul array-ului
$produseprotectialemnului[]="Lazura";
foreach($produseprotectialemnului as $produs){
    echo $produs. " ";
};
echo "<br>";

//functie pentru afisare numarului de produse din array
function numarProduse($produseprotectialemnului){
    $numarProduse=count($produseprotectialemnului);
    return $numarProduse;
};
$rezultat=numarProduse($produseprotectialemnului);
echo "Numarul de produse disponibil in gama noastra este $rezultat!!!", "<br>";

//functia array_map
function adaugaMarca($element){
    return $element. "-Kober";
};
$produsMarca=array_map("adaugaMarca",$produseprotectialemnului);
$produsMarcaText = implode(', ', $produsMarca);
echo $produsMarcaText,"<br>";

//declarare+afisare sir de caractere
$fraza="   Aceasta este o fraza in care spun ca mi se pare foarte interesant sa fac programare php, pot spune ca imi place mai mult decat HTML si CSS!!!    ";
echo $fraza,"<br>";

//afisare lungimea sirului de mai sus
$lungimeSir=strlen($fraza);
echo "Fraza are o lungime de $lungimeSir caractere!<br>";

//concatenare a doua siruri
$fraza2="Imi place atat de mult!!!";
$concateneaza=$fraza." " .$fraza2;
echo $concateneaza,"<br>";

//verificare daca adresa de mail declarata este valida
$email="fam.pricope2021@yahoo.com";
$expresieRegulara = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
if (preg_match($expresieRegulara, $email)) {
    echo "Adresa de e-mail este corecta.";
} else {
    echo "Adresa de e-mail  este incorecta. <br>";
};
echo "<br>";

//functie care transforma caracterele mici in mari
function conversieLitere($fraza){
    $frazaMajuscule=strtoupper($fraza);
    return $frazaMajuscule;
}
$frazaliteremici="Eu sunt in momentul de fata inginer chimist dar imi doresc sa devin un backend progamator!";
$frazaliteremari=conversieLitere($frazaliteremici);
echo $frazaliteremari, "<br>";


//validare adresa de mail cu filter_var
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "E-mail corect";
}
else {
    echo "E-mail incorect";
};
echo "<br>";

//declarare + afisare matrice asociativa
$angajat=array(
    "numeprenume" => "Pricope Dan",
    "departament" => "Cercetare dezvoltare",
    "functie" => "Ing. chimist",
    "sectia" => "Produse pt protectia lemnului cu reticulare UV",
);
echo "Nume/Prenume: " . $angajat["numeprenume"], "<br>";
echo "Departament: " .$angajat["departament"],"<br>";
echo "Functie: " .$angajat["functie"],"<br>";
echo "Sectia: " . $angajat["sectia"], "<br>";

//functie ce primeste un array asociativ si returneaza toate cheile acesteia
function returarraykey($matrice){
    $keys=array_keys($matrice);
    return $keys;
};
$keyangajat=returarraykey($angajat);
foreach($keyangajat as $key){
    echo $key . "<br>";
};


//verificare existenta cheie in array

$findkey="functie";
if (array_key_exists($findkey,$angajat)){
    echo "Cheia exista!";
}
else{
    echo "Cheia nu exista!";
};
echo "<br>";

//declarare constanta si utilizarea instructiunii switch
$mancare="gogosi";
switch($mancare){
    case "ciorba+felul2":
        echo "Acesta este pranzul!";
    case "sandwich":
        echo "Acesta este micul-dejun!";
    case "mar":
        echo "Aceasta este o gustare!";
    case "gogosi":
        echo "Acesta este desertul!";
};
echo "<br>";

//functie cu 3 argumente si afisarea sumei acestora
function adunare($num1, $num2,$num3){
    $suma=$num1+$num2+$num3;
    return $suma;
};
$num1=20;
$num2=30;
$num3=40;
$rezultat=adunare($num1, $num2,$num3);
echo "Rezultatul este $rezultat! <br>";

//functie care verifica daca numarul este par sau impar
function verificaParImpar($numar){
    if ($numar % 2 == 0){
        return "numar par!";
    }
    else{
        return "numar impar!";
    };
};

$numar=24;
$raspuns=verificaParImpar($numar);
echo "$numar este $raspuns!";
echo "<br>";

//array_filter
$numere=[23,42,33,45,44,10,21,20,8,6,54,102];
function numerePare($numar){
    return ($numar % 2 == 0);
};
$numPare=array_filter($numere, "numerePare");
echo "Numere pare:";
foreach($numPare as $numar){
    echo $numar, " ";
};
echo "<br>";

//verificare subsir intr-un sir 
$subsir="php";
if(strstr($fraza,$subsir)){
    echo "Subsirul - $subsir - se afla in fraza!";
}
else{
    echo "Subsirul - $subsir - nu se afla in fraza!<br>";
};
echo "<br>";

//eliminarea spatiilor albe
function noWhiteSpace($fraza) {
    $frazaFaraSpatiiAlbe = trim($fraza);
    return $frazaFaraSpatiiAlbe;
}
$frazaFaraSpatiiAlbe = noWhiteSpace($fraza);
echo "Fraza fara spatii albe: '" . $frazaFaraSpatiiAlbe . "'";
echo "<br>";

//verificare daca numarul este intreg sau zecimal
$pricopeDan=35.5;
if (is_integer($pricopeDan)){
    echo "$pricopeDan este numar intreg! ";
}
else{
    echo "$pricopeDan este numar zecimal!";
}
echo "<br>";

//functie cu returnare valoare absoluta a unui numar
function valoareAbsoluta($numar){
    $absvalue=abs($numar);
    return $absvalue;
}
$varsta=35;
$arataAbsValue=valoareAbsoluta($varsta);
echo $arataAbsValue;
echo "<br>";

//utilizare array_reduce
$suma = array_reduce($numere, function ($acumulator, $element) {
    return $acumulator + $element;
}, 0);

echo $suma;    //aici chiar nu am inteles logica, inca incerc sa imi dau seama. Am cautat exemplu pe net dar tot nu l-am inteles
echo "<br>";

//functie ce inverseaza textul
$frazaInversata=strrev($frazaliteremari);
echo $frazaInversata;








?>