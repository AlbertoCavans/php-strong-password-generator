<?php

function create_password($password_length) {

    $new_password = "";
    for ($i = 0; $i < $password_length; $i++) {
    $letters = implode("", range("a", "z"));
    $letter_index = rand(0, strlen($letters) - 1);
    $random_letter = $letters[$letter_index];
    $new_password .= $random_letter;
    }

    return $new_password;

}

$password_length = isset($_GET['password-parameter']) ? (int) $_GET['password-parameter'] : 7;

$form_sent = !empty($_GET);

if ($form_sent) {

    $new_password = create_password($password_length);
    var_dump($new_password);
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
                <label for="password-parameter" class="form-label">
                    Numero caratteri
                </label>
                <input type="number" class="form-control" name="password-parameter" id="password-parameter" value="<?= $password_length ?>">
            </div> 
            <div class="col-1 d-flex">
            <button class="btn btn-primary align-self-end">
                Save 
            </button>
            </div>
        </form>

    </div>
    
</body>
</html>