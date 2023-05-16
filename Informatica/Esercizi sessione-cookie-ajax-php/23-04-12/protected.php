<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Benvenuto ID: " . $_SESSION['user'];?>
    <a href="destroy_session.php">Logout</a>
    <?php
} else {
    session_destroy();
    echo "Sessione scaduta. Ritorna al <a href='index.html'>Login</a>";
}