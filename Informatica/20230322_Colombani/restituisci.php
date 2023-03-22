<?php

include "connection.php";
global $conn;

$titolo = isset( $_POST['titolo'] ) ? $_POST['titolo'] : die("Il titolo del videogioco è richiesto") ;

$query = "SELECT id, disponibilita FROM videogiochi
          WHERE titolo = '$titolo'";
$id = $conn->query($query)->fetch_assoc()['id'];
$disp = $conn->query($query)->fetch_assoc()['disponibilita'];

if ($disp) {
    echo "<h2>Gioco già disponibile</h2>";
    exit;
}

$sql = "DELETE FROM prenotazioni
        WHERE id_videogioco = '$id'";

$result= $conn->query($sql);

if ($result) {
    echo "<h2>Gioco restituito</h2>";
    $update = "UPDATE videogiochi
               SET disponibilita = 1
               WHERE id = '$id'";
    $conn->query($update);
} else {
    echo "Error: " . $conn->error;
}

$conn->close();