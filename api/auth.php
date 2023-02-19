<?php
header('Content-Type: application/json');
include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM `users` WHERE `email` = ? AND `password` = ?";
        if (!empty($connection)) {
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("ss", $email, $password);
            $result = $stmt->execute();
            if ($result) {
                header("HTTP/1.1 200 OK");
                echo json_encode(['status' => 'ok', 'token' => '123456789']);
            } else {
                header("HTTP/1.1 404 Not Found");
                echo json_encode(['status' => 'error']);
            }
        }
    } else {
        header("HTTP/1.1 404 Not Found");
    }
}