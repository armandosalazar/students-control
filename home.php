<!doctype html>
<html lang="es">
<?php require_once 'layouts/head.php'; ?>
<body>
<?php require_once 'layouts/header.php'; ?>
<?php
var_dump($_COOKIE);
?>
<div id="modal">
    <div class="modal-alert">
        <h2><span>¡Bienvenido!</span><span id="close">&times;</span></h2>
        <p>Este sitio web es para uso exclusivo de alumnos de Centro de Enseñanza Técnico Industrial.</p>
    </div>
</div>
</body>
<script type="application/javascript">
    console.log(document.cookie);
    const token = document.cookie.split('=')[1];
    if (!token) {
        window.location = 'login.php';
    } else {
        document.getElementById('modal').style.display = 'grid';
        document.getElementById('close').addEventListener('click', function (evt) {
            document.getElementById('modal').style.display = 'none';
        });
    }
</script>
</html>