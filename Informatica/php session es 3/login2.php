<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	$u = $_POST['username'];
	$p = $_POST['password'];
	// isset serve per capire se una variabile è stata valorizzata in tal caso è true sennò è false
	// verifica il nome utente e la password
	if ($u == 'admin' && $p == 'password') {
		echo "Login effettuato correttamente";
		echo "<a href=\"area_riservata1.php\">Accedi all'area riservata 1</a>";
		echo "<a href=\"area_riservata2.php\">Accedi all'area riservata 2</a>";
		//header("Location: welcome.php");
		$_SESSION["id_utente"] = $u;
		
		
	} else {
		echo "Nome utente o password non validi. Si prega di riprovare.";
		echo "<a href=\"indice2.php\">Torna alla pagina di login</a>";
	}
}
?>