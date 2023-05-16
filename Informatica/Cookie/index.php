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
        if (isset($_COOKIE["user_email"])) {
            echo '<h1>Bentornato ' . $_COOKIE["user_email"] . '</h1><hr />';
            exit ('<a href="logout.php"><button class="btn btn-primary btn-block mb-4">Logout</button></a>');
        }
    ?>
    <div class="text-center">
        <h1 class="mb-5">Login</h1><hr />
    </div>

    <form method="POST" action="login.php">
        <label for="email"></label><input type="email" id="email" name="email" class="form-control" placeholder="Email" required/>
        <label for="password"></label><input type="password" id="password" name="password" class="form-control" placeholder="Password" required/>
        <input type="submit" class="btn btn-primary mt-4" value="Login">
    </form>
</body>
</html>
