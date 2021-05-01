<?php
try{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "regisztracio";
    if(isset($_POST["felh"])){
        $felh=$_POST["felh"];
        $jel=$_POST["pwd"];
        $veznev=$_POST["veznev"];
        $kernev=$_POST["kernev"];
        $szig=$_POST["szig"];
        $mail=$_POST["mail"];
        $felh=$_POST["felh"];
        $jel=$_POST["pwd"];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $szam=0;
        if ($conn->connect_error) {
            die("Nincs kapcsolat az adatbázissal <br>" . $conn->connect_error);
            }
      
            $sql = "INSERT INTO felhasznalo (veznev,kernev,szig,email,felh,jel) VALUES ('$veznev','$kernev','$szig','$mail','$felh','$jel');";
            echo($sql);
            if(isset($felh)){
                if ($conn->query($sql) === TRUE) {
                   
                    $conn->close();
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $sql = "SELECT userid FROM felhasznalo WHERE szig='$szig'";
                    $result = $conn->query($sql);
                    if (!empty($result) && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            $szam=$row["userid"];
                        }
                     
                        mkdir("img/$szam");
                    }
                  
                    $conn->close();
                    header("Location: index.php");
                  } else {
                    echo "Hiba: " . $sql . "<br>" . $conn->error;
                  }
            }  
    }
   
         

}
catch(Exception $e){
    $echo($e);
}


?>