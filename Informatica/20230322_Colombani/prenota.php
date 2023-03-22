<?php

include "connection.php";
global $conn;

$nome = isset( $_POST['nome'] ) ? $_POST['nome'] : die("Il nome è richiesto") ;
$cognome = isset( $_POST['cognome'] ) ? $_POST['cognome'] : die("Il cognome è richiesto") ;
$email = isset( $_POST['email'] ) ? $_POST['email'] : die("L'email è richiesta") ;
$tel = isset( $_POST['tel'] ) ? $_POST['tel'] : die("Il numero di telefono è richiesto") ;
$titolo = isset( $_POST['titolo'] ) ? $_POST['titolo'] : die("Il titolo del videogioco è richiesto") ;
$data_inizio = isset( $_POST['data_inizio'] ) ? $_POST['data_inizio'] : die("La data di inizio è richiesta") ;
$data_fine = "0000-01-01";

$query = "SELECT id, disponibilita FROM videogiochi
          WHERE titolo = '$titolo'";
$id = $conn->query($query)->fetch_assoc()['id'];
$disp = $conn->query($query)->fetch_assoc()['disponibilita'];

if (!$disp) {
    echo "<h2>Gioco non disponibile</h2>";
    exit;
}

$sql = "INSERT INTO prenotazioni(id_videogioco, nome, cognome, email, telefono, data_inizio, data_fine)
            VALUES ($id,'$nome','$cognome','$email','$tel','$data_inizio','$data_fine')";

$result= $conn->query($sql);

if ($result) {
    echo "<h2>Inserimento riuscito</h2>";
    $update = "UPDATE videogiochi
               SET disponibilita = 0
               WHERE id = '$id'";
    $conn->query($update);
} else {
    echo "Error: " . $conn->error;
}

$conn->close();