<!DOCTYPE html>
<?php
if (isset($_POST['pass'])){
$pass = $_POST["pass"];

if($pass == "main"){
    echo "<center><div><a href='http://solfoh.000webhostapp.com/send'>message</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/short'>short links (add short before letter)</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/jquery'>register</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/pop'>pop</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/socail'>mine social network</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/test'>test</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/popunder'>pop unders</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/ip'>get ip</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/shell'>shell</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/bigupload'>upload</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/hax'>hax</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/cam'>cam</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/search'>search engine</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/youtube'>youtube</a></div></center>";
    echo "<center><div><a href='http://solfoh.000webhostapp.com/store'>store</a></div></center>";
    
    
}
else{
    echo "<script>alert('ERROR');</script>";
}
}
?>
<html lang="en">
    <head>
        <title>DEMLON</title>
        <script>
            window.onload = () => {
                let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
                bannerNode.parentNode.removeChild(bannerNode);
                }
        </script>
	</head>
<body>
    <center><h1>ALFA</h1></center>
    <center><h1>PASSWORD :</h1></center>
    <form action="" method="POST">
    <center><input type="text" name="pass" autocomplete="off"></center>
    <center><button type="submit">SEND</button></center>
    </form>
</body>
</html>