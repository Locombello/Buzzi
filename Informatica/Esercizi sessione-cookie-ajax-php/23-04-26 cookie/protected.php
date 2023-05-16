<?php
session_start();
if (isset($_COOKIE["statoLogin"])) {
    echo "Benvenuto ID: " . $_COOKIE['id_utente'];?>
    <a href="logout.php">Logout</a>
    <?php
} else {
    session_destroy();
    echo "Sessione scaduta. Ritorna al <a href='index.html'>Login</a>";
}

if(!isset($_COOKIE["statoLogin"])){
    die("Area riservata - Devi effettuare il login");
}