<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Benvenuto</title>
</head>
<body>
    <?php if(!isset($_SESSION['statoLogin'])) die("Area riservata devi effetuare il <a href='indice2.php'>Login</a>"); ?>
	<h2>Benvenuto <?php echo $_SESSION['nomeUtente']; ?></h2>
	<p>Accesso riuscito!</p>
	<a href="logout.php">Logout</a>
</body>
</html>