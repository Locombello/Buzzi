<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
if (isset ($_SESSION ["id_utente"])) {
	echo "<a href=\"logout.php\">Clicca qui per effettuare il logout</a>";
	exit ("Login già effettuato, effettuare il logout per riautenticarsi");
	
}

?>

	<h2>Login</h2>
	<form method="POST" action="login2.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<input type="submit" value="Login">
	</form>
</body>
</html>
