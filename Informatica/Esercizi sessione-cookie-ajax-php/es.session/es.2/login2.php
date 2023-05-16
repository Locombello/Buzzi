<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	// verifica il nome utente e la password
	if ($username === 'admin' && $password === 'password') {
        $_SESSION['statoLogin'] = true;
        $_SESSION['nomeUtente'] = $username;

		header("Location: welcome.php");
		//exit();
	} else {
		echo "Nome utente o password non validi. Si prega di riprovare.";
	}
}
?>