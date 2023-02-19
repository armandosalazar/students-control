<?php
//header('Content-Type: application/json');
//include_once '../db.php';
//
//// var_dump($_REQUEST);
//// var_dump($_SERVER);
//
//if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//    $sql = "SELECT * FROM `users`";
//    $result = $connection->query($sql);
//    var_dump($result->fetch_assoc());
//    echo json_encode($_SERVER['REQUEST_METHOD']);
//} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $user = $_POST['user'];
//    $pass = $_POST['pass'];
//    if (!empty($user) && !empty($pass)) {
//        $sql = "SELECT * FROM `users` WHERE `email` = ? AND `password` = ?";
//        $stmt = $connection->prepare($sql);
//        $stmt->bind_param("ss", $user, $pass);
//        $result = $stmt->execute();
//        if ($result) {
//            header("HTTP/1.1 200 OK");
//            echo json_encode(['message' => 'User found']);
//        } else {
//            header("HTTP/1.1 404 Not Found");
//            echo json_encode(['message' => 'User not found']);
//        }
//    } else {
//        header("HTTP/1.1 404 Not Found");
//    }
//} else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
//    echo json_encode(['name' => 'Armando']);
//} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
//    echo json_encode(['name' => 'Armando']);
//} else {
//    header('HTTP/1.1 404 Not Found');
//}
