<div class="row">
    <div class="col-12 right">
        Cotización Nº: <b>123456789</b>
    </div>
    <div class="col-12 right">
        Fecha: 2020-01-01
    </div>
</div>
<hr>
<h5>Solicitado Por</h5>
<div class="row">
    <div class="col-4">
        <label for="quotSolicName">Nombre</label>
        <input id="quotSolicName" type="text">
    </div>
    <div class="col-4">
        <label for="quotSolicLastName">Apellidos</label>
        <input id="quotSolicLastName" type="text">
    </div>
    <div class="col-4">
        <label for="quotSolicId">RUT</label>
        <input id="quotSolicId" type="text">
    </div>
    <div class="col-6">
        <label for="quotSolicAddress">Dirección</label>
        <input id="quotSolicAddress" type="text">
    </div>
    <div class="col-3">
        <label for="quotSolicState">Región</label>
        <select id="quotSolicState">
            <option value="1">Region 1</option>
            <option value="2">Region 2</option>
            <option value="3">Region 3</option>
        </select>
    </div>
    <div class="col-3">
        <label for="quotSolicDistrict">Comuna</label>
        <select id="quotSolicDistrict">
            <option value="1">Comuna 1</option>
            <option value="2">Comuna 2</option>
            <option value="3">Comuna 3</option>
        </select>
    </div>
    <div class="col-3">
        <label for="quotSolicEmail">Email</label>
        <input id="quotSolicEmail" type="text">
    </div>
    <div class="col-3">
        <label for="quotSolicMobile">Celular</label>
        <input id="quotSolicMobile" type="text">
    </div>
    <div class="col-3">
        <label for="quotSolicPhone">Teléfono</label>
        <input id="quotSolicPhone" type="text">
    </div>
    <div class="col-3">
        <label for="quotSolicFor">Para</label>
        <input id="quotSolicFor" type="text">
    </div>
</div>
<hr>
<h5>Servicio</h5>
<div class="row">
    <div class="col-8">
        <label for="quotServiceType">Tipo</label>
        <input id="quotServiceType" type="text">
    </div>
    <div class="col-4">
        <label for="quotServiceColor">Color</label>
        <input id="quotServiceColor" type="text">
    </div>
    <div class="col-12">
        <label for="quotServiceInclude">Incluye</label>
        <textarea id="quotServiceInclude"></textarea>
    </div>
    <div class="col-3">
        <label for="quotServiceCost">Valor del Servicio</label>
        <input id="quotServiceCost" type="number">
    </div>
    <div class="col-3">
        <label for="quotServiceDiscount2Name">Nombre Previsión</label>
        <select id="quotServiceDiscount2Name">
            <option value="1">Nombre 1</option>
            <option value="1">Nombre 2</option>
            <option value="1">Nombre 3</option>
        </select>
    </div>
    <div class="col-3">
        <label for="quotServiceDiscount2">Aporte Previsión</label>
        <input id="quotServiceDiscount2" type="number">
    </div>
    <div class="col-3">
        <label for="quotTotal">Saldo</label>
        <input id="quotTotal" type="number" readonly>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12 right">
        <button class="text">Limpiar</button>
        <button onclick="openLink('/app/preview/quotation.php', '_blank')">Vista Previa</button>
        <button class="fill">Guardar</button>
    </div>
</div>