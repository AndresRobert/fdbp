<?php $admin = $cementeries = true; ?>
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
            <h4>Cementerios</h4>
            <p>Listado de cementerios disponibles</p>
            <a href="#newService" class="btn-floating btn-fixed btn-large waves-effect waves-light teal tooltipped modal-trigger" data-position="left" data-tooltip="Nuevo Servicio"><i class="material-icons">add</i></a>
        </div>
    </div>
    <?php include 'pages/admin/cementeries/list.php' ?>
</div>
<?php include 'pages/admin/services/add.php' ?>
<?php include 'pages/admin/services/edit.php' ?>
<?php include 'pages/admin/cementeries/delete.php' ?>
</body>
</html>