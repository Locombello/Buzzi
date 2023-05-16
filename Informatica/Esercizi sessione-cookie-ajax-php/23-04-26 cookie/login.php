<?php
include "config.php";

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$result = $conn->query("SELECT * FROM user WHERE mail = '$mail' AND password = '$pass'");

if ($result->num_rows == 1){
    setcookie("statoLogin", "true", time()+60*2);
    $row = $result->fetch_assoc();
    setcookie("id_utente", $row['id'], time()+60*2);
    header('Location: protected.php');
} else {
    echo "Username o password errati. ";
    echo "Torna al <a href='index.html'>Login</a>";
    die();
}