<!doctype html>
<html lang="es">
<?php require_once 'layouts/head.php'; ?>
<body>
<?php require_once 'layouts/header.php'; ?>
<main>
    <article>
        <section>
            <h2>¡Bienvenido!</h2>
            <p>Este sitio web es para uso exclusivo de alumnos de Centro de Enseñanza Técnico Industrial.</p>
            <section>
                <button onclick="window.location = 'login.php'">Iniciar sesión</button>
                <button onclick="window.location = 'register.php'">Registrarse</button>
            </section>
        </section>
    </article>
</main>

</body>
<script type="application/javascript">
    console.log(document.cookie);
    const token = document.cookie.split('=')[1];
    if (token) {
        window.location = 'home.php';
    }
</script>
</html>