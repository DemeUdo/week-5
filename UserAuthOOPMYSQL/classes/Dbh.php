<?php
function Dbh.php($hostname, $username, $password, $db) {
    $host = "localhost";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;
?>