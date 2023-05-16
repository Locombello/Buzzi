<?php
if(!isset($_COOKIE["statoLogin"])){
    die("Non puoi fare il logout senza aver fatto il login");
}

setcookie("statoLogin", "", time()-3600);
setcookie("id_utente", "", time()-3600);

echo "Cookie cancellato <br>";

echo "<a href=\"index.html\">Vai alla pagina di login</a>";
?>

