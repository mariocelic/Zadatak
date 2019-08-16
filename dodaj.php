<?php
require_once "baza.php";

$izraz=$veza->prepare("insert into kupac 
(ime,prezime,adresa,grad,drzava,kontakt) values 
(:ime,:prezime,:adresa,:grad,:drzava,:kontakt)");
$izraz->execute($_POST);

header("location: hotel.php");

