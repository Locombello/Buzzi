<?php

include "connection.php";
global $conn;

$year1 = isset( $_POST['year1'] ) ? $_POST['year1'] : '' ;
$year2 = isset( $_POST['year2'] ) ? $_POST['year2'] : '' ;
$city = isset( $_POST['city'] ) ? $_POST['city'] : '' ;

$sql = "select * from artwork where
                        made_in between '$year1' and '$year2'
                    and city = '$city'";

$result= $conn->query($sql);

if ($result) {
    echo '<h3>Opere realizzate tra gli anni '. $year1 .' e '. $year2 .' nella citta di '. $city .'</h3>';

    echo    '<table style="border: 1px solid; width: 100%;">
                <tr style="background-color: darkgray">
                    <th style="border: 1px solid">Title</th>
                    <th style="border: 1px solid">Category</th>
                    <th style="border: 1px solid">City</th>
                    <th style="border: 1px solid">Country</th>
                    <th style="border: 1px solid">Year</th>
                    <th style="border: 1px solid">Author</th>
                </tr>';
    while ($record = $result->fetch_assoc()) {
        $author_id = $record['author'];
        $query = "select name, surname from artist where id = '$author_id'";

        $result_author_name = $conn->query($query)->fetch_assoc();
        $author_name = $result_author_name['name'] . ' ' . $result_author_name['surname'];

        switch ($record['category']) {
            case 'quadro':
                echo   '<tr style="background: darkturquoise">';
                break;
            case 'scultura':
                echo   '<tr style="background: darkorange">';
                break;
            case 'architettura':
                echo   '<tr style="background: lightgreen">';
                break;
        }

        echo '<td style="border: 1px solid">'. $record['title'] .'</td>
                    <td style="border: 1px solid">'. $record['category'] .'</td>
                    <td style="border: 1px solid">'. $record['city'] .'</td>
                    <td style="border: 1px solid">'. $record['country'] .'</td>
                    <td style="border: 1px solid">'. $record['made_in'] .'</td>
                    <td style="border: 1px solid">'. $author_name .'</td>
                </tr>';
    }
    echo '</table>';
}
else {
    echo "Error: " . $conn->error;
}

$conn->close();
