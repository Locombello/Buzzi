<?php
include "connection.php";
global $conn;

$id = $_GET['q'];
$result = $conn->query("SELECT ingredienti FROM ricetta WHERE id = $id");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ingredienti = explode("\n", $row['ingredienti']);

    $response = '<br /><h4>Ingredienti</h4>';
    $response .= '<ul class="list-group">';
    foreach ($ingredienti as $ingrediente) {
        $response .= '<li class="list-group-item">' . trim($ingrediente) . '</li>';
    }
    $response .= '</ul>';
    echo json_encode($response);
} else {
    echo json_encode('Cibo non trovato');
}

$conn->close();