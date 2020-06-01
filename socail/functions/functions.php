<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('localhost','id13511218_demlon','QWer1243@0x1badb002','id13511218_solfoh');
    }
    return $conn;
}

?>