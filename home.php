<!doctype html>
<html lang="es">
<?php require_once 'layouts/head.php'; ?>
<body>
<?php require_once 'layouts/header.php'; ?>
<?php
var_dump($_COOKIE);
?>
</body>
<script type="application/javascript">
    console.log(document.cookie);
    const token = document.cookie.split('=')[1];
    if (!token) {
        window.location = 'login.php';
    }
</script>
</html>