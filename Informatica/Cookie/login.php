<?php
include "connection.php";
global $conn;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $psw = $_POST['password'];

    $sql = 'SELECT email, password FROM utente';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] === $email && $row['password'] === $psw) {
                setcookie("login_state", "true", time() + (86400 * 60));
                setcookie("user_email", $email, time() + (86400 * 60));
                header("location: welcome.php");
                break;
            }
        }
        echo '<h1>Credenziali Errate</h1><hr />';
    } else {
        echo '<h1>Non Registrato</h1><hr />';
    }
    echo '<a href="index.php"><button class="btn btn-primary btn-block mb-4">Back</button></a>';
}
?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body class="container mt-5">
    <?php
        if(!isset($_COOKIE["login_state"])){
            die('<h1>Area riservata - Effettuare il login</h1><hr /><a href="index.php"><button class="btn btn-primary btn-block mb-4">Back</button></a>');
        }
    ?>
</body>
</html>
