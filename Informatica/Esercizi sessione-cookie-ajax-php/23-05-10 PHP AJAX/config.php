<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "gestione_cibi";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) die("Connesione fallita");
