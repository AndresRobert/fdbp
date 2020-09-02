<?php $admin = $insurances = true; ?>
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
            <h4>Aseguradoras</h4>
            <p>Listado de aseguradoras disponibles</p>
            <a href="#newInsurance" class="btn-floating btn-fixed btn-large waves-effect waves-light teal tooltipped modal-trigger" data-position="left" data-tooltip="Nueva Aseguradora"><i class="material-icons">add</i></a>
        </div>
    </div>
    <?php //include 'pages/admin/insurances/list.php' ?>
</div>
<?php //include 'pages/admin/insurances/add.php' ?>
<?php //include 'pages/admin/insurances/edit.php' ?>
<?php //include 'pages/admin/insurances/delete.php' ?>
</body>
</html>