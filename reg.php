<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="grid">
            <div class="col fejlec"></div>
          
            <div class="col tartalom">
           <form action="" method="POST">
            <label for="veznev">Vezetéknév<br></label>
            <input type="text" id="veznev" name="veznev"><br><br>
            <label for="text">Keresztnév<br></label>
            <input type="text" id="kernev" name="kernev"><br><br>
            <label for="veznev">Szem.ig szám<br></label>
            <input type="text" id="szig" name="szig"><br><br>
            <label for="text">E-mail cím<br></label>
            <input type="email" id="mail" name="mail"><br><br>
            <label for="text">Felhasználónév<br></label>
            <input type="text" id="felh" name="felh"><br><br>
            <label for="text">Jelszó<br></label>
            <input type="password" id="pwd" name="pwd"><br><br>
            
            <input type="submit" value="Regisztrál">
            <button type="button" onclick="kidob()">Mégse</button>
        
           </form>
               
            </div>
            <div class="col lablec">
                <?php
                include "regjovahagy.php";
                ?>
            </div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>

