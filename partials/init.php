<?php

require_once __DIR__ . "/functions.php";

$password_length = isset($_GET['password-parameter']) ? (int) $_GET['password-parameter'] : 7;

$form_sent = !empty($_GET);

if ($form_sent) {

    session_start();

    $_SESSION["new-password"] = create_password($password_length);

    header("Location: ./result.php");
}
