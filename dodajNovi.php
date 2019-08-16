<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
</head>
  <body>
    <div class="grid-container">

     
        <form action="dodaj.php" method="post">
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
                        <input type="text" name="ime">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Prezime
                        <input type="text" name="prezime">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Adresa
                        <input type="text" name="adresa">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Grad 
                        <input type="text" name="grad">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Država
                        <input type="text" name="drzava">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>Mobitel
                        <input type="number" name="kontakt">
                        </label>
                    </div>

                    <div class="large-12 cell">
                        <input type="submit" value="Dodaj" 
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
