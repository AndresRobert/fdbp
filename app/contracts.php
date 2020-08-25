<!DOCTYPE html>
<html lang="es">
<head><?php include 'layout/head.php' ?></head>
<body id="body">
<?php include 'layout/topbar.php' ?>
<div class="container">
    <h4>Contratos</h4>
    <div class="row card elevated">
        <h5>Solicitante</h5>
        <div class="col-4">
            <label for="s_id">RUT</label>
            <input id="s_id" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_name">Nombres</label>
            <input id="s_name" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_last_name">Apellidos</label>
            <input id="s_last_name" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_address">Dirección</label>
            <input id="s_address" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_region">Región</label>
            <select id="s_region">
                <option value="">Ninguna</option>
            </select>
        </div>
        <div class="col-4">
            <label for="s_comune">Comuna</label>
            <select id="s_comune">
                <option value="">Ninguna</option>
            </select>
        </div>
        <div class="col-4">
            <label for="s_email">Email</label>
            <input id="s_email" type="text">
        </div>
        <div class="col-4">
            <label for="s_mobile">Móvil</label>
            <input id="s_mobile" type="text" required>
        </div>
        <div class="col-4">
            <label for="s_phone">Teléfono</label>
            <input id="s_phone" type="text" required>
        </div>
    </div>
</div>
</body>
</html>