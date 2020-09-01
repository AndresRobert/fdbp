<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contratos</title>
    <?php include 'layout/head.php' ?>
</head>
<body class="grey lighten-3">
<?php include 'layout/topbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h4>Contratos</h4>
            <p>Listado de contratos emitidos</p>
            <a href="#newContract" class="btn-floating btn-fixed btn-large waves-effect waves-light teal tooltipped modal-trigger" data-position="left" data-tooltip="Nuevo Contrato"><i class="material-icons">add</i></a>
        </div>
    </div>
    <?php include 'pages/contracts/list.php' ?>
</div>
<?php include 'pages/contracts/add.php' ?>
<?php include 'pages/contracts/edit.php' ?>
</body>
</html>