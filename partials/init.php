<?php

require_once __DIR__ . "/functions.php";

$password_length = isset($_GET['password-parameter']) ? (int) $_GET['password-parameter'] : 7;

$form_sent = !empty($_GET);

if ($form_sent) {

    $new_password = create_password($password_length);
    header("Location: ./result.php");
}
