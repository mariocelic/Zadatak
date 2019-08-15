<?php include_once "head.php" ?>

    
<?php include_once "konfiguracija.php" ?>


<a href="kontakt.php">Kontakt</a>

<div class="grid-x grid-margin-x">
<div class="small-8 large-4 cell">
<form action="autoriziraj.php" method="post">
<label>E-mail
    <input type="email" name="email"  />
</label>

<label>Lozinka
    <input type="password" name="lozinka" />
    
</label>
    </div>
</div>

<input type="submit" value="Autoriziraj">

</form>

</html>

<?php
if(isset($_GET["g"])){
    echo $poruke[$_GET["g"]];
}
