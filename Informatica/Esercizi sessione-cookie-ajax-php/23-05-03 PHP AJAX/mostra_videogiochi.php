<?php
include "config.php";

$name = $_GET["q"];

$result = $conn->query("SELECT * FROM videogiochi WHERE titolo = '$name'");

if($result){
    if ($result->num_rows > 0){
        echo "<h2>Videogiochi Moschella</h2><br /><table class='table table-bordered table-hover'><thead><tr><th>Id</th><th>Titolo</th><th>Genere</th><th>Piattaforma</th><th>Prezzo</th><th>Disponibilità</th><th>Funzioni</th></tr></thead><tbody>";
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $titolo = $row['titolo'];
            $genere = $row['genere'];
            $piattaforma = $row['piattaforma'];
            $prezzo = $row['prezzo'];
            $disponibilita = $row['disponibilita'];

            echo "<tr><td>$id</td><td>$titolo</td><td>$genere</td><td>$piattaforma</td><td>$prezzo</td><td>$disponibilita</td></tr>";
        }
        echo "</tbody></table></div>";
    }

}else {
    echo "Connessione col database non riuscita";
}

$conn->close();