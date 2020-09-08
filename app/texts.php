<?php $admin = $texts = true; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Administración</title>
    <?php include 'layout/head.php' ?>
</head>
<body class="grey lighten-3">
<?php include 'layout/topbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h4>Textos</h4>
            <p>Listado de textos disponibles</p>
        </div>
    </div>
    <?php include 'pages/admin/texts/list.php' ?>
</div>
</body>
</html>