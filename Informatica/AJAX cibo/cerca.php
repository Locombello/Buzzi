<?php
include "connection.php";
global $conn;

$sql = "SELECT id, nome FROM ricetta";
$result = $conn->query($sql);

echo '<select class="form-select" id="select" name="select" onchange="showIngredients(this.value)">';
echo '<option value="0" selected disabled hidden>Cerca una ricetta</option>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
    }
}
echo '</select>';

$conn->close();