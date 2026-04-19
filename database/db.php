<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "eduplatform"

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Checking if connection works
if ($conn->connect_error) {
    die("Connection has failed:" . $conn->connect_erroe);
}
?>