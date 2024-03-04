<?php

function create_password($password_length) {

    $new_password = "";
    for ($i = 0; $i < $password_length; $i++) {
    $letters = implode("", range("a", "z"));
    $LETTERS = implode("", range("A", "Z"));
    $numbers = implode("", range("0", "9"));
    $simbols = "!#$%&'()*+,-./:;<=>?@[]^_`{|}~";
    $mix_chars = $letters . $LETTERS . $numbers . $simbols;

    $mix_chars_index = rand(0, strlen($mix_chars) - 1);
    $random_mix_chars = $mix_chars[$mix_chars_index];
    $new_password .= $random_mix_chars;
    }

    return $new_password;

};

