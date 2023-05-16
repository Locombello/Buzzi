<!DOCTYPE html>
<html>
<head>
	<title>Benvenuto</title>
</head>
<body>
<?php
    if(!isset($_COOKIE["statoLogin"])){
        die("Area riservata - Devi effettuare il login");
    }
?>
	<h2>Benvenuto</h2>
	<p>Accesso riuscito!</p>
	<a href="logout.php">Logout</a>
</body>
</html>