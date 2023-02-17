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
    <form action="login.php" id="form-login" class="form">
        <h2>Iniciar sesión</h2>
        <label for="email">Correo electrónico</label>
        <input type="text" name="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Iniciar sesión">
    </form>
    <form action="register.php" id="form-register" class="form">
        <h2>Registrarse</h2>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
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

    <button id="send-request">Send request</button>
</body>
<script>
    document.getElementById('form-login').addEventListener('submit', function(evt) {
        evt.preventDefault();
        const client = new XMLHttpRequest();
        client.open('GET', 'api/auth.php', true);
        client.send(new FormData(evt.target));
        client.onload = function() {
            console.log(this.response);
        }
    });
    document.getElementById('form-register').addEventListener('submit', function(evt) {
        evt.preventDefault();
        const client = new XMLHttpRequest();
        client.open('POST', 'api/auth.php', true);
        client.send(new FormData(evt.target));
        client.onload = function() {
            console.log(this.response);
        }
    });
</script>

</html>