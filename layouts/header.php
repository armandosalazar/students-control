<header>
    <a href="/">
        <h2>Centro de Enseñanza Técnico Industrial</h2>
    </a>
    <?php
    if (isset($_COOKIE['token'])) {
        echo '
<nav>
<span onclick="">Calificaciones</span>
<span>Materias</span>
<span id="logout">Cerrar sesión</span>
</nav>
';
        echo "<script>
    document.getElementById('logout').addEventListener('click', function () {
        document.cookie = 'token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        window.location = '/';
    });
</script>";
    }
    ?>
</header>