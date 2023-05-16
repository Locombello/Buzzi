<?php
session_start();
session_destroy();
//header("Location: indice2.php");
echo "Sessione cancellata <br>";

echo "<a href=\"indice2.php\">Vai alla pagina di login</a>";
?>

