<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// verifica il nome utente e la password
	if ($username === 'admin' && $password === 'password') {
        $_SESSION['login_status'] = true;
        $_SESSION['username'] = $username;
		header("Location: welcome.php");
		exit();
	} else {
		echo "Nome utente o password non validi. Si prega di riprovare.";
	}
}