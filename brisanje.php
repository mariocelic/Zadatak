<?php
require_once "baza.php";

$izraz=$veza->prepare("delete from kupac
 where sifra=:sifra");
$izraz->execute($_GET);

header("location: hotel.php");

