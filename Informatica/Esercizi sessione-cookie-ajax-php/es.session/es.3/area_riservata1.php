<?php 
session_start();

if (isset ($_SESSION ["id_utente"])) {
	echo "Area riservata 1<br>Ti eri loggato con questo username: ".$_SESSION ["id_utente"];
}
else 
	{ 
	echo "Pagina riservata, effettuare il login";
	echo "<a href=\"indice2.php\">Torna alla pagina di login</a>";
	
	}

?>
