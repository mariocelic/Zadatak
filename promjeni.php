<?php
require_once "baza.php";

$izraz=$veza->prepare("update kupac 
 set ime=:ime,
 prezime=:prezime,
 adresa=:adresa,
 grad=:grad,
 drzava=:drzava,
 kontakt=:kontakt  
 where sifra=:sifra");
$izraz->execute($_POST);

header("location: hotel.php");

