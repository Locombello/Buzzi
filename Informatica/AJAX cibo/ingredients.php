<?php

include "connection.php";
global $conn;

$id = $_GET['q'];
$result = $conn->query("SELECT ingredienti FROM ricetta WHERE id = $id");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ingredienti = explode(',', $row['ingredienti']);
    echo '<ul>';
    foreach ($ingredienti as $ingrediente) {
        echo '<li>' . trim($ingrediente) . '</li>';
    }

    echo '</ul>';
} else {
    echo 'Cibo non trovato';
}

$conn->close();
