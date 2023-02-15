<?php
function login($email, $password)
{
    $mysqli = new mysqli("127.0.0.1", "root", "root", "school", 8889);
    $result = $mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function register($name, $lastname, $motherlastname, $register, $career, $email, $password)
{
    $mysqli = new mysqli("127.0.0.1", "root", "root", "school", 8889);
    $result = $mysqli->query("INSERT INTO users (name, lastname, motherlastname, register, career, email, password) VALUES ('$name', '$lastname', '$motherlastname', '$register', '$career', '$email', '$password')");
    var_dump($mysqli->affected_rows);
    var_dump($result);
    $mysqli->close();
    if ($result) {
        return true;
    } else {
        return false;
    }
}
