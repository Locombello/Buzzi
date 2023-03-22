<?php

include "connection.php";
global $conn;

$sql = "SELECT * FROM videogiochi";

$result= $conn->query($sql);

if ($result) {
    echo "<h2>Videogiochi pronti per essere prenotati</h2>";

    echo    '<table style="border: 1px solid; width: 100%;">
                <tr style="background-color: darkgray">
                    <th style="border: 1px solid">Titolo</th>
                    <th style="border: 1px solid">Genere</th>
                    <th style="border: 1px solid">Piattaforma</th>
                    <th style="border: 1px solid">Prezzo</th>
                </tr>';
    while ($record = $result->fetch_assoc()) {
        if ($record['disponibilita'] != 1) {
            echo '<tr style="background: crimson">';
        } else {
            echo '<tr style="background: chartreuse">';
        }
        echo   '<td style="border: 1px solid">'. $record['titolo'] .'</td>
                <td style="border: 1px solid">'. $record['genere'] .'</td>
                <td style="border: 1px solid">'. $record['piattaforma'] .'</td>
                <td style="border: 1px solid">'. $record['prezzo'] .'</td>
            </tr>';
    }
    echo '</table>';
} else {
    echo "Error: " . $conn->error;
}

$conn->close();