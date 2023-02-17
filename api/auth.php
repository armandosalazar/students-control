<?php
header('Content-Type: application/json');
include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $email = $_GET['email'];
    $password = $_GET['password'];
    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM `users` WHERE `email` = ? AND `password` = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $result = $stmt->execute();
        if ($result) {
            header("HTTP/1.1 200 OK");
            echo json_encode(['message' => 'User found']);
        } else {
            header("HTTP/1.1 404 Not Found");
            echo json_encode(['message' => 'User not found']);
        }
    } else {
        header("HTTP/1.1 404 Not Found");
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
} else {
    header('HTTP/1.1 404 Not Found');
}
