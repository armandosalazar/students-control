<!doctype html>
<html lang="es">
<?php require_once 'layouts/head.php'; ?>
<body>
<?php require_once 'layouts/header.php'; ?>
<main>
    <form id="form-register" class="form">
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
</main>

</body>
<script>
    document.getElementById('form-register').addEventListener('submit', function (evt) {
        evt.preventDefault();
        const client = new XMLHttpRequest();
        client.open('POST', 'api/auth.php', true);
        client.send(new FormData(evt.target));
        client.onload = function () {
            console.log(this.response);
        }
    });
</script>

</html>