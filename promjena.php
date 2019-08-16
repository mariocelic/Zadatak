<?php 
require_once "baza.php";

$izraz=$veza->prepare("select * from kupac where sifra=:sifra");
$izraz->execute($_GET);
$kupac = $izraz->fetch(PDO::FETCH_OBJ);

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
</head>
  <body>
    <div class="grid-container">

     
        <form action="promjeni.php" method="post">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">

                    <div class="large-12 cell">
                        <a href="hotel.php"
                            class="alert button expanded">
                        Odustani
                        </a>                        
                    </div>

                    <div class="large-6 cell">
                        <label>Ime
                        <input type="text" name="ime" 
                        value="<?php echo $kupac->ime; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Prezime
                        <input type="text" name="prezime"
                        value="<?php echo $kupac->prezime; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Adresa
                        <input type="text" name="adresa"
                        value="<?php echo $kupac->adresa; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Grad
                        <input type="text" name="grad" 
                        value="<?php echo $kupac->grad; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Država
                        <input type="text" name="drzava" 
                        value="<?php echo $kupac->drzava; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Kontakt
                        <input type="text" name="kontakt" 
                        value="<?php echo $kupac->kontakt; ?>">
                        </label>
                    </div>



                    <div class="large-12 cell">
                        <input type="hidden" name="sifra" value="<?php echo $kupac->sifra ?>" />
                        <input type="submit" value="Promjeni" 
                            class="success button expanded" />                        
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
