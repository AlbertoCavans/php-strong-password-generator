<?php

session_start();
if (!isset($_SESSION["new-password"]) || empty($_SESSION["new-password"])) {

    header("Location: ./index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">

    <div class="my-3 d-flex justify-content-center align-items-center">
        <h1>
            Password generator
        </h1>
    </div>
        <form class="row">
            <div class="col-4">
                <h3>Ecco la tua nuova password!</h3>
                <h5 class="text-success"><?= $_SESSION["new-password"] ?></h5>
            </div> 

        </form>

    </div>
    
</body>
</html>