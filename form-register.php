<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Control</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include_once 'db.php';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    $mysqli->query("CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    motherlastname VARCHAR(30) NOT NULL,
    register INT(6) UNSIGNED NOT NULL
    career VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)");
    $mysqli->query("CREATE TABLE IF NOT EXISTS courses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    teacher VARCHAR(30) NOT NULL,
    period VARCHAR(30) NOT NULL,
    partials INT(6) UNSIGNED NOT NULL,
)");
    ?>
    <h2>Registrarse</h2>
    <form action="register.php" method="post" class="form">
        <label for="username">Nombre</label>
        <input type="text" name="username" id="username">
        <label for="lastname">Apellido paterno</label>
        <input type="text" name="lastname" id="lastname">
        <label for="motherlastname">Apellido materno</label>
        <input type="text" name="motherlastname" id="motherlastname">
        <label for="register">Matrícula</label>
        <input type="text" name="register" id="register">
        <label for="career">Carrera</label>
        <input type="text" name="career" id="career">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Registrarse">
    </form>
</body>

</html>