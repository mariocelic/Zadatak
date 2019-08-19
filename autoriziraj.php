<?php
include_once "konfiguracija.php";

$korisnik1 = "edunova@edunova.hr";
$korisnik2 = "mariocelic@gmail.com";
$lozinka1 = "edunova";
$lozinka2 = "mario";

if(!$_POST || !isset($_POST["email"]) || !isset($_POST["lozinka"])){
    exit;
}

//uvdje će doći autorizacija na bazu
if (($_POST["email"]==$korisnik1) && ($_POST["lozinka"]==$lozinka1)){

    //autoriziran sam
    $_SESSION["autoriziran"]="edunova";
    header("location: privatno.php");

} else if(($_POST["email"]==$korisnik2) && ($_POST["lozinka"]==$lozinka2)){

    //autoriziran sam
    $_SESSION["autoriziran"]="mario";
    header("location: privatno.php");

} else {
    //nisam autoriziran
    header("location: index.php?g=1");

}
