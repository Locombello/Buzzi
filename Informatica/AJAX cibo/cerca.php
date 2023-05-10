<?php

include "connection.php";
global $conn;

$sql = "SELECT id, nome FROM ricetta";
$result = $conn->query($sql);

echo '<select id="select" onchange="showIngredients(this.value)">';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="'. $row['id'] .'">'. $row['nome'] .'<option>';
    }
}
echo '</select>';

$conn->close();