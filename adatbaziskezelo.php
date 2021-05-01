
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
    </body>
    </html>
        <?php
        session_start();
        $text="";
        if(isset($_POST["szovegmezo"])){
            $text=$_POST["szovegmezo"];
           
        }

        $kivalasztottFelh;
        $s="";
        $u="";
        $p="";
        $d="";
        if(isset($_SESSION["kivFelh"])){
            $kivalasztottFelh=$_SESSION["kivFelh"];
        }
        if(isset($_SESSION['s'])){
            $s=$_SESSION['s'];
        }
        if(isset($_SESSION['u'])){
            $u=$_SESSION['u'];
        }
        if(isset($_SESSION['p'])){
            $p=$_SESSION['p'];
        }
        if(isset($_SESSION['d'])){
            $d=$_SESSION['d'];
        }
       
        
        if(strlen($text>0)){
            global $text;
            global $kivalasztottFelh;
           
            hozzaad();
          
            //hozzaad();
        }
        function bejegyzesLekerdez(){
            global $kivalasztottFelh;
            global $s;
            global $u;
            global $p;
            global $d;
            $conn=new mysqli($s,$u,$p,$d);
            $szigszam=$kivalasztottFelh["szig"];
            $kivalasztottfelhasznalo=$kivalasztottFelh["felh"];
           
            $sql = 'SELECT szoveg FROM bejegyzes WHERE szig=\''.$szigszam.'\' AND felh=\''.$kivalasztottfelhasznalo.'\'  ORDER BY id DESC';
           
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
               

                
  
                echo("<div class=\"alert alert-warning doboz\" role=\"alert\">
               ".$row["szoveg"] ."<p class=\"torol\"><a href=\"\">Komment törlése</a></p>
              </div>");
              
            }
        
        }
        function hozzaad(){
            global $text;
            global $kivalasztottFelh;
            global $s;
            global $u;
            global $p;
            global $d;
            $connect=new mysqli($s,$u,$p,$d);
            if ($connect->connect_error) {
                die("Nincs kapcsolat az adatbázissal <br>" . $conn->connect_error);
                }
                
            $szigszam=$kivalasztottFelh["szig"];
            $kivalasztottfelhasznalo=$kivalasztottFelh["felh"];
            $sql="INSERT INTO bejegyzes (szig,felh,szoveg) VALUES ('$szigszam','$kivalasztottfelhasznalo','$text')";
            echo("<script>
    document.getElementById(\"blog\").style.visibility = \"visible\";
    </script>");
            if($connect->query($sql)===TRUE){
                echo "<script>alert(\"Szöveg sikeresen hozzáadva\"</script>";
                $text="";
                bejegyzesLekerdez();
               // header("Location: loginolt.php");
    exit;
            }
            else{
                echo "<script>alert(\"Szöveget nem sikerült hozzáadni\"</script>";
            }
        }
    
        ?>
        


