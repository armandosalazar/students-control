<!doctype html>
<html lang="es">

<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Students Control</title>-->
<!--    <link rel="stylesheet" href="static/css/main.css">-->
<!--</head>-->
<?php require_once 'layouts/head.php'; ?>
<body>
<?php require_once 'layouts/header.php'; ?>
<main>
    <form id="form-login" class="form">
        <h2>Iniciar sesión</h2>
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Iniciar sesión">
    </form>
    <!--    <div class="alert">-->
    <!--        <h2>¡Bienvenido!</h2>-->
    <!--        <p>Este sitio web es para uso exclusivo de alumnos de la Universidad Tecnológica de la Mixteca.</p>-->
    <!--    </div>-->
</main>

</body>
<script>
    document.getElementById('form-login').addEventListener('submit', function (evt) {
        evt.preventDefault();
        const client = new XMLHttpRequest();
        client.open('POST', 'api/auth.php', true);
        client.send(new FormData(evt.target));
        client.onload = function () {
            console.log(this.response);
            if (this.status === 200) {
                const token = JSON.parse(this.response).token;
                document.cookie = `token=${token}`;
                window.location = 'home.php'
            } else {
                alert('Error');
            }
            // if (this.status === 200) {
            //     console.log(this.status);
            //     // window.location = 'home.php'
            // } else {
            //     alert('Error');
            // }
            // 242 | 302
        }
    });
</script>

</html>