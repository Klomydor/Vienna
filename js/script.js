function getText(){
    return document.getElementById("szovegmezo").value;
};
function kiirat(){
    alert(getText());
};
function kidob(){
    location.replace("index.php");
}
function regisztral(){
    location.replace("reg.php");
}