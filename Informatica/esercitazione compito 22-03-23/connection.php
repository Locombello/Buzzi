<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomeDB="artwork_catalogue_db";

$conn = new mysqli($servername, $username, $password,$nomeDB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
