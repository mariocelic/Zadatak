<?php include_once "head.php" ?>

<?php include_once "konfiguracija.php" ?>

<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kontakt</title>
</head>

<div class="grid-x grid-margin-x">
    <div class="small-8 large-4 cell">
    
    <form action="kontakt.php" method="post">    
    <label>Ime i prezime
        <input type="text" name="Ime"  />
    </label>    
                
    <label>Email
        <input type="email" name="email" />
    </label>
                
    <label>Poruka
        <textarea name="message"></textarea>
    </label>
                
    </div>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89226.40121928565!2d18.697840541213026!3d45.66437477031765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475cdb69395a73dd%3A0x153f912479587f19!2sHotel+Lug!5e0!3m2!1shr!2shr!4v1565432912891!5m2!1shr!2shr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<input id="submit" name="submit" type="submit" value="Pošalji" >
 
</form>
<br \>
<a href="index.php">Početna</a>

</div>

<?php
//var_dump($_SESSION);