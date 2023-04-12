<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<title>Benvenuto</title>
</head>
<body>
    <?php
        if (!isset($_SESSION['login_status']))
            die("Area riservata! Effettuare il login.")
    ?>
	<h2>Benvenuto <?php echo $_SESSION['username']; ?></h2>
	<a href="logout.php">Logout</a>
</body>
</html>