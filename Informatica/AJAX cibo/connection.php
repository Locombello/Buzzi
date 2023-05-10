<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomeDB="cibo_db";

$conn = new mysqli($servername, $username, $password, $nomeDB);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}