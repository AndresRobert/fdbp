<?php $admin = $providers = true; ?>
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
            <h4>Proveedores</h4>
            <p>Listado de proveedores disponibles</p>
            <a href="#addProvider" class="btn-floating btn-fixed btn-large waves-effect waves-light teal tooltipped modal-trigger" data-position="left" data-tooltip="Nuevo Proveedor"><i class="material-icons">add</i></a>
        </div>
    </div>
    <?php include 'pages/admin/providers/list.php' ?>
</div>
<?php include 'pages/admin/providers/add.php' ?>
<?php include 'pages/admin/providers/edit.php' ?>
<?php include 'pages/admin/providers/delete.php' ?>
</body>
</html>