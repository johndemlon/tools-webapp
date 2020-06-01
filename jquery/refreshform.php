<?php
$servername = "localhost";
$username = "id13511218_demlon";
$password = "QWer1243@0x1badb002";
$dbname = "id13511218_solfoh";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$contact2=$_POST['contact1'];
$gender2=$_POST['gender1'];
$msg2=$_POST['msg1'];
$sql = "insert into form_element(name, email, contact, gender, message) values ('$name2','$email2','$contact2','$gender2','$msg2')";
if ($conn->query($sql) === TRUE) {
echo "good";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>