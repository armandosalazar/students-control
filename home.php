<!doctype html>
<html lang="es">
<?php require_once 'layouts/head.php'; ?>
<body>
<?php require_once 'layouts/header.php'; ?>
<div id="modal">
    <div class="modal-alert">
        <h2><span>¡Bienvenido!</span><span id="close">&times;</span></h2>
        <p>Este sitio web es para uso exclusivo de alumnos de Centro de Enseñanza Técnico Industrial.</p>
    </div>
</div>
<table>
    <thead>
    <tr>
        <th>Materia</th>
        <th>Profesor</th>
        <th>Periodo</th>
        <th>Parciales</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include_once 'db.php';
    $connection = getConnection();
    $result = $connection->query('SELECT * FROM `courses`');
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->teacher; ?></td>
            <td><?php echo $row->period; ?></td>
            <td><?php echo $row->partials; ?></td>
            <td><?php echo $row->partials; ?></td>
            <?php
            // $connection->query('SELECT * FROM `users` WHERE `email` =  $_COOKIE[email]');
            //            var_dump($_COOKIE['email']);
            //            $email = $_COOKIE['email'];
            //            var_dump("SELECT * FROM `users` WHERE `email` = $email");
            $ss = "SELECT * FROM `users` WHERE `email` =  '$_COOKIE[email]'";
            var_dump($ss);
            $result = $connection->query($ss);
            if ($row->role_id == 3) {
                ?>
                <td>
                    <button>Ver</button>
                    <button>Editar</button>
                    <button>Eliminar</button>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
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