<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Welcome</title>
</head>
<body class="container mt-5">
    <?php
        if(!isset($_COOKIE["login_state"])){
            die('<h1>Area riservata - Effettuare il login</h1><hr /><a href="index.php"><button class="btn btn-primary btn-block mb-4">Back</button></a>');
        }
    ?>
    <h1>Benvenuto <?php echo $_COOKIE["user_email"] ?></h1><hr />
    <div class="row justify-content-md-center">
        <div class="col col-lg-2"><a href="index.php"><button class="btn btn-primary btn-block mb-4">Back</button></a></div>
        <div class="col col-lg-2"><a href="logout.php"><button class="btn btn-primary btn-block mb-4">Logout</button></a></div>
    </div>
</body>
</html>
