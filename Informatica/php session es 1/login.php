<?php
// Imposta l'array di credenziali di accesso
$users = array(
  "user1" => "password1",
  "user2" => "password2",
  "user3" => "password3"
);

// Leggi le credenziali di accesso inserite dall'utente
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica le credenziali di accesso
if (isset($users[$username]) && $users[$username] === $password) {
  // Accesso consentito
  session_start();
  $_SESSION['username'] = $username;
  header('Location: dashboard.php');
} else {
  // Accesso negato
  header('Location: indice.php');
}