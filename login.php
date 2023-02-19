<!doctype html>
<html lang="es">
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
    <div id="modal">
        <div class="modal-alert modal-alert-error">
            <h2><span>¡Verifica tus credenciales!</span><span id="close">&times;</span></h2>
            <p>Inicio de sesión incorrecto verifica tus credenciales</p>
        </div>
    </div>
</main>

</body>
<script>
    document.getElementById('close').addEventListener('click', function (evt) {
        document.getElementById('modal').style.display = 'none';
    });
    document.getElementById('form-login').addEventListener('submit', function (evt) {
        evt.preventDefault();
        const client = new XMLHttpRequest();
        client.open('POST', 'api/auth.php', true);
        client.send(new FormData(evt.target));
        client.onload = function () {
            if (this.status === 200) {
                const {token, email} = JSON.parse(this.response);
                document.cookie = `token=${token}`;
                document.cookie = `email=${email}`;
                window.location = 'home.php'
            } else {
                document.getElementById('modal').style.display = 'grid';
            }
        }
    });
</script>

</html>