<?php
include_once 'users.php';

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$motherlastname = $_POST['motherlastname'];
$register = $_POST['register'];
$career = $_POST['career'];
$email = $_POST['email'];
$password = $_POST['password'];

$mysqli = new mysqli("127.0.0.1", "root", "root", "school", 8889);
$result = $mysqli->query("INSERT INTO users (name, lastname, motherlastname, register, career, email, password) VALUES ('$_POST[username]', '$_POST[lastname]', '$_POST[motherlastname]', '$_POST[register]', '$_POST[career]', '$_POST[email]', '$_POST[password]')");
var_dump($mysqli->affected_rows);

if (register($username, $lastname, $motherlastname, $register, $career, $email, $password)) {
    echo "Registered";
} else {
    echo "Error";
}
