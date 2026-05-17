<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serenova_db";


$conn = mysqli_connect("localhost", "root", "", "serenova_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
