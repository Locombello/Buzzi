<?php
include "config.php";

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$result = $conn->query("SELECT * FROM user WHERE mail = '$mail' AND password = '$pass'");

if ($result->num_rows == 1){
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row['id'];
    header('Location: protected.php');
} else {
    echo "Username o password errati. ";
    echo "Torna al <a href='index.html'>Login</a>";
    die();
}