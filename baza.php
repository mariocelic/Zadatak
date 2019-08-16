<?php

switch ($_SERVER["REMOTE_ADDR"]) {
    case '127.0.0.1': //moj lokalni razvoj
        $server="localhost";
        $baza="hotel";
        $korisnik="mario";
        $lozinka="mario";
        break;
    
    case '31.147.185.242': //edunova shared hosting
        $server="localhost";
        $baza="tanatos_edunovapp19";
        $korisnik="tanatos_edunova";
        $lozinka="edunova";
        break;
}


$veza = new PDO("mysql:dbname=" . $baza . ";host=" . $server,
$korisnik,$lozinka,[PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"]);
