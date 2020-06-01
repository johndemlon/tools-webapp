<?php
$servername = "localhost";
$username = "id13511218_demlon";
$password = "QWer1243@0x1badb002";
$dbname = "id13511218_solfoh";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$p=$_POST['pass'];

if($p == "D"){
$sql = "DELETE FROM p"; 
}
else{
$sql = "INSERT INTO p (p) VALUES ('$p')";
}
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>