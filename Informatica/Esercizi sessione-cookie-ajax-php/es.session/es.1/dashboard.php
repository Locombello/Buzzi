<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "Benvenuto, " . $_SESSION['username'];?>
  <a href="destroy_session.php">Logout</a>
<?php
} else {
  header('Location: indice.php');
}