<?php
$username = $_POST['user'];
$password = $_POST['pass'];

echo "Username: $username";
echo "Password: $password";

include_once 'users.php';

if (login($username, $password)) {
    echo "Logged in";
} else {
    echo "Wrong username or password";
}
