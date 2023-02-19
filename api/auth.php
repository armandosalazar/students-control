<?php
header('Content-Type: application/json');
include_once '../db.php';
include_once '../utils/generate-token.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $connection = getConnection();
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            header("HTTP/1.1 200 OK");
            echo json_encode(['status' => 'ok', 'token' => generateToken($email), 'verify' => validateToken(generateToken($email))]);
        } else {
            header("HTTP/1.1 404 Not Found");
            echo json_encode(['status' => 'error']);
        }
    } else {
        header("HTTP/1.1 404 Not Found");
    }
}