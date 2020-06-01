<?php
$servername = "localhost";
$username = "id13511218_demlon";
$password = "QWer1243@0x1badb002";
$dbname = "id13511218_solfoh";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM p";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["p"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>