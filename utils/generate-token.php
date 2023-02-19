<?php
include_once '../db.php';
function generateToken($email)
{
    return md5($email);
}

function validateToken($token)
{
    $isValid = false;
    $connection = getConnection();
    $result = $connection->query("SELECT * FROM `users`");
    while ($row = $result->fetch_assoc()) {
        if ($token == generateToken($row['email'])) {
            $isValid = true;
            break;
        }
    }
    return $isValid;
}

