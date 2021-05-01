<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="grid">
            <div class="col fejlec"></div>
          
            <div class="col tartalom">
           <form action="loginolt.php" method="POST">
            <label for="uname">Felhasználónév<br></label>
            <input type="text" id="uname" name="uname"><br><br>
            <label for="pwd">Jelszó<br></label>
            <input type="password" id="pwd" name="pwd"><br><br>
            <input type="submit" value="Belépés">
            <button type="button" value="Regisztráció" onclick="regisztral()">Regisztráció</button>
           </form>
               
            </div>
            <div class="col lablec">lablec</div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>

