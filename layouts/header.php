<header>
    <a href="/">
        <h2>Centro de Enseñanza Técnico Industrial</h2>
    </a>
    <?php
    if (isset($_COOKIE['token'])) {
        echo '<span id="logout">Cerrar sesión</span>';
    }
    ?>
</header>

<script type="application/javascript">
    document.getElementById('logout').addEventListener('click', function () {
        document.cookie = 'token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        window.location = '/';
    });
</script>
