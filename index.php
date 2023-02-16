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
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post" class="form">
        <label for="user">Correo electrónico</label>
        <input type="text" name="user" id="user">
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Iniciar sesión">
    </form>
    <a href="form-register.php">Register</a>
    <h2>Registrarse</h2>
    <form action="register.php" method="post" class="form">
        <label for="username">Nombre</label>
        <input type="text" name="username" id="username">
        <label for="lastname">Apellido paterno</label>
        <input type="text" name="lastname" id="lastname">
        <label for="mother-lastname">Apellido materno</label>
        <input type="text" name="mother-lastname" id="mother-lastname">
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