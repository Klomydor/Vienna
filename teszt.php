<?php
include 'adatbaziskezelo.php'; 
$felh;
$jel;
$frissitve=FALSE;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regisztracio";


$_SESSION['kivFellh']="";

$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION['s']=$servername;
$_SESSION['u']=$username;
$_SESSION['p']=$password;
$_SESSION['d']=$dbname;



    if(isset($_POST["uname"]))
    {
        $felh=$_POST["uname"];
        $jel=$_POST["pwd"];
        $_SESSION["felh"]=$felh;
        $_SESSION["jel"]=$jel;
    }
    else{
        
        
    }
    
    
    
    
    if ($conn->connect_error) {
    die("Nincs kapcsolat az adatbázissal <br>" . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM felhasznalo";
    $result = $conn->query($sql);
    $kivalasztottFelh;
    if ($result->num_rows > 0) {
    $van=false;
    $nev="";
    while($row = $result->fetch_assoc()) {
    if($row["felh"]==$_SESSION["felh"]&&$row["jel"]==$_SESSION["jel"]){
    $van=true;
    $kivalasztottFelh=$row;
    $_SESSION['kivFelh']=$kivalasztottFelh;
    if($van){
    $nev=$row["kernev"];
    }
    }
    
    
    }
    if ($van){
    
            bejegyzesLekerdez();   
            echo("<script>
            document.getElementById(\"logout\").style.display=\"inline\";
            </script>");
    
    echo "<script type=\"text/javascript\">
    
    document.getElementById(\"blog\").style.visibility=\"visible\";
    
    </script>";
    
    }	
    else {
    echo "Hibás felhasználó vagy jelszó";
    echo "<script type=\"text/javascript\">
    
    document.getElementById(\"blog\").style.visibility=\"hidden\";
    
    </script>";
    }	
    
    
    } 




//$conn->close();
?>