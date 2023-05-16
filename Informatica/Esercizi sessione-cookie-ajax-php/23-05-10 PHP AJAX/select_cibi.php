<?php
include "config.php";

$result = $conn->query("SELECT id, nome FROM cibo");

echo '<select class="form-select" name="cibo" onchange="showIngredients(this.value)">';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
    }
}

echo '</select>';

$conn->close();