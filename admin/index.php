<?php $darkmode = $_COOKIE['darkmode']; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="../src/vendor/acode.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../src/invoice.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a93fffc8fc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="../src/vendor/acode.js"></script>
    <script src="../src/invoice.js"></script>
    <script> checkAuthStatus() </script>
</head>
<body id="body" class="<?php echo $darkmode ?>" style="display:none">
<header>
    <img class="logo" src="../src/img/isotype.png" alt="" style="filter:grayscale(1) contrast(0.8)">
    <p style="font-family:'Great Vibes',cursive;font-size:26px">Funeraria del Buen Pastor</p>
    <ul class="icons">
        <li><i onclick="logout()" class="fas fa-power-off"></i></li>
        <li><i onclick="toggleDarkMode()" class="fas fa-adjust"></i></li>
    </ul>
</header>
<div id="content" class="grid pv-1">
    <div class="row">
        <div class="col-12">
            <div class="tabs wide">
                <button id="tab_contract" onclick="showTabContent('#contract', '.tab-content')" class="tab active"><i class="fa fa-inbox no-click"></i>Nuevo Contrato</button>
                <button id="tab_quotation" onclick="showTabContent('#quotation', '.tab-content')" class="tab"><i class="fas fa-clipboard-list no-click"></i>Nueva Cotización</button>
                <button id="tab_search" onclick="showTabContent('#search', '.tab-content')" class="tab"><i class="fas fa-search no-click"></i>Búsqueda</button>
                <button id="tab_database" onclick="showTabContent('#database', '.tab-content')" class="tab"><i class="fas fa-database no-click"></i>Base de Datos</button>
            </div>
        </div>
        <div id="contract" class="tab-content col-12 card">
            <div class="row">
                <div class="col-12 right">
                    Contrato / Presupuesto Interno Nº: <b>123456789</b>
                </div>
                <div class="col-12 right">
                    Fecha: 2020-01-01
                </div>
            </div>
            <hr>
            <h5>Solicitado Por</h5>
            <div class="row">
                <div class="col-4">
                    <label for="solicName">Nombre</label>
                    <input id="solicName" type="text">
                </div>
                <div class="col-4">
                    <label for="solicLastName">Apellidos</label>
                    <input id="solicLastName" type="text">
                </div>
                <div class="col-4">
                    <label for="solicId">RUT</label>
                    <input id="solicId" type="text">
                </div>
                <div class="col-6">
                    <label for="solicAddress">Dirección</label>
                    <input id="solicAddress" type="text">
                </div>
                <div class="col-3">
                    <label for="solicState">Región</label>
                    <select id="solicState">
                        <option value="1">Region 1</option>
                        <option value="2">Region 2</option>
                        <option value="3">Region 3</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="solicDistrict">Comuna</label>
                    <select id="solicDistrict">
                        <option value="1">Comuna 1</option>
                        <option value="2">Comuna 2</option>
                        <option value="3">Comuna 3</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="solicEmail">Email</label>
                    <input id="solicEmail" type="text">
                </div>
                <div class="col-3">
                    <label for="solicMobile">Celular</label>
                    <input id="solicMobile" type="text">
                </div>
                <div class="col-3">
                    <label for="solicPhone">Teléfono</label>
                    <input id="solicPhone" type="text">
                </div>
            </div>
            <hr>
            <h5>Fallecido</h5>
            <div class="row">
                <div class="col-8">
                    <label for="deceFullName">Nombre Completo (Q.E.P.D.)</label>
                    <input id="deceFullName" type="text">
                </div>
                <div class="col-4">
                    <label for="deceId">RUT</label>
                    <input id="deceId" type="text">
                </div>
                <div class="col-6">
                    <label for="deceAddress">Dirección</label>
                    <input id="deceAddress" type="text">
                </div>
                <div class="col-3">
                    <label for="deceState">Región</label>
                    <select id="deceState">
                        <option value="1">Region 1</option>
                        <option value="2">Region 2</option>
                        <option value="3">Region 3</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="deceDistrict">Comuna</label>
                    <select id="deceDistrict">
                        <option value="1">Comuna 1</option>
                        <option value="2">Comuna 2</option>
                        <option value="3">Comuna 3</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="decePlace">Lugar de Fallecimiento</label>
                    <input id="decePlace" type="text">
                </div>
                <div class="col-4">
                    <label for="deceMaritalStatus">Estado Civil</label>
                    <select id="deceMaritalStatus">
                        <option value="1">Estado 1</option>
                        <option value="2">Estado 2</option>
                        <option value="3">Estado 3</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="deceOccupation">Ocupación</label>
                    <select id="deceOccupation">
                        <option value="1">Ocupacion 1</option>
                        <option value="2">Ocupacion 2</option>
                        <option value="3">Ocupacion 3</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="deceGrade">Estudios</label>
                    <select id="deceGrade">
                        <option value="1">Estudio 1</option>
                        <option value="2">Estudio 2</option>
                        <option value="3">Estudio 3</option>
                    </select>
                </div>
            </div>
            <hr>
            <h5>Velatorio</h5>
            <div class="row">
                <div class="col-12">
                    <label for="churchName">Capilla</label>
                    <input id="churchName" type="text">
                </div>
                <div class="col-6">
                    <label for="churchAddress">Dirección Capilla</label>
                    <input id="churchAddress" type="text">
                </div>
                <div class="col-3">
                    <label for="churchState">Región</label>
                    <select id="churchState">
                        <option value="1">Region 1</option>
                        <option value="2">Region 2</option>
                        <option value="3">Region 3</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="churchDistrict">Comuna</label>
                    <select id="churchDistrict">
                        <option value="1">Comuna 1</option>
                        <option value="2">Comuna 2</option>
                        <option value="3">Comuna 3</option>
                    </select>
                </div>
            </div>
            <hr>
            <h5>Funeral</h5>
            <div class="row">
                <div class="col-6">
                    <label for="funeralPlace">Cementerio</label>
                    <select id="funeralPlace">
                        <option value="1">Cementerio 1</option>
                        <option value="2">Cementerio 2</option>
                        <option value="3">Cementerio 3</option>
                    </select>
                </div>
                <div class="col-2">
                    <label for="funeralPress">Prensa</label>
                    <input id="funeralPress" type="text">
                </div>
                <div class="col-2">
                    <label for="funeralDate">Fecha</label>
                    <input id="funeralDate" type="date">
                </div>
                <div class="col-2">
                    <label for="funeralTime">Hora</label>
                    <input id="funeralTime" type="time">
                </div>
            </div>
            <hr>
            <h5>Servicio</h5>
            <div class="row">
                <div class="col-4">
                    <label for="serviceType">Tipo</label>
                    <input id="serviceType" type="text">
                </div>
                <div class="col-4">
                    <label for="serviceProvider">Proveedor</label>
                    <select id="serviceProvider">
                        <option value="1">Proveedor 1</option>
                        <option value="2">Proveedor 2</option>
                        <option value="3">Proveedor 3</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="serviceColor">Color</label>
                    <input id="serviceColor" type="text">
                </div>
                <div class="col-12">
                    <label for="serviceInclude">Incluye</label>
                    <textarea id="serviceInclude"></textarea>
                </div>
                <div class="col-12">
                    <label for="serviceWarning">Aviso</label>
                    <textarea id="serviceWarning"></textarea>
                </div>
                <div class="col-12">
                    <label for="serviceObservation">Observación</label>
                    <textarea id="serviceObservation"></textarea>
                </div>
                <div class="col-4">
                    <label for="serviceCost">Valor del Servicio</label>
                    <input id="serviceCost" type="number">
                </div>
                <div class="col-4">
                    <label for="serviceDiscount">Descuento</label>
                    <input id="serviceDiscount" type="number">
                </div>
                <div class="col-4">
                    <label for="serviceTotal">Valor Total</label>
                    <input id="serviceTotal" type="number" readonly>
                </div>
                <div class="col-4">
                    <label for="serviceDiscount2Name">Nombre Previsión</label>
                    <select id="serviceDiscount2Name">
                        <option value="1">Nombre 1</option>
                        <option value="1">Nombre 2</option>
                        <option value="1">Nombre 3</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="serviceDiscount2">Aporte Previsión</label>
                    <input id="serviceDiscount2" type="number">
                </div>
                <div class="col-4">
                    <label for="total2">Saldo</label>
                    <input id="total2" type="number" readonly>
                </div>
                <div class="col-4">
                    <label for="payment1" class="checkbox">Transferencia</label>
                    <input id="payment1" type="checkbox">
                </div>
                <div class="col-4">
                    <label for="payment2" class="checkbox">Efectivo</label>
                    <input id="payment2" type="checkbox">
                </div>
                <div class="col-4">
                    <label for="payment3" class="checkbox">Cheque al día</label>
                    <input id="payment3" type="checkbox">
                </div>
                <div class="col-4">
                    <label for="payment4" class="checkbox">Cheque a Fecha</label>
                    <input id="payment4" type="checkbox">
                </div>
                <div class="col-4">
                    <label for="payment5" class="checkbox">Tarjeta de Crédito</label>
                    <input id="payment5" type="checkbox">
                </div>
                <div class="col-4">
                    <label for="payment6" class="checkbox">Otro</label>
                    <input id="payment6" type="checkbox">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 right">
                    <button class="text">Limpiar</button>
                    <button>Vista Previa</button>
                    <button class="fill">Guardar</button>
                </div>
            </div>
        </div>
        <div id="quotation" class="tab-content col-12 card" style="display:none">
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
                    <button>Vista Previa</button>
                    <button class="fill">Guardar</button>
                </div>
            </div>
        </div>
        <div id="search" class="tab-content col-12 card" style="display:none">
            <h5>Contratos</h5>
            <table class="dTable display nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>Número</th>
                    <th>Fecha</th>
                    <th>Solicitante Nombres</th>
                    <th>Solicitante Apellidos</th>
                    <th>Solicitante RUT</th>
                    <th>Solicitante Dirección</th>
                    <th>Solicitante Comuna</th>
                    <th>Solicitante Región</th>
                    <th>Solicitante Teléfono</th>
                    <th>Solicitante Celular</th>
                    <th>Solicitante Email</th>
                    <th>Fallecido Nombres</th>
                    <th>Fallecido Apellidos</th>
                    <th>Fallecido Dirección</th>
                    <th>Fallecido Comuna</th>
                    <th>Fallecido Región</th>
                    <th>Fallecido Estado Civil</th>
                    <th>Fallecido Estudios</th>
                    <th>Fallecido Ocupación</th>
                    <th>Fallecido Lugar de Fallecimiento</th>
                    <th>Velatorio Capilla</th>
                    <th>Velatorio Dirección</th>
                    <th>Velatorio Comuna</th>
                    <th>Velatorio Región</th>
                    <th>Funeral Cementerio</th>
                    <th>Funeral Fecha</th>
                    <th>Funeral Hora</th>
                    <th>Servicio Tipo</th>
                    <th>Servicio Color</th>
                    <th>Servicio Incluye</th>
                    <th>Servicio Aviso</th>
                    <th>Servicio Observación</th>
                    <th>Servicio Valor</th>
                    <th>Servicio Descuento</th>
                    <th>Servicio Valor Total</th>
                    <th>Servicio Previsión</th>
                    <th>Servicio Previsión Aporte</th>
                    <th>Servicio Saldo</th>
                    <th data-placeholder="si/no">Transferencia</th>
                    <th data-placeholder="si/no">Efectivo</th>
                    <th data-placeholder="si/no">Cheque al día</th>
                    <th data-placeholder="si/no">Cheque a fecha</th>
                    <th data-placeholder="si/no">Tarjeta de Crédito</th>
                    <th data-placeholder="si/no">Otro</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>2020-08-12</td>
                    <td>Andres</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>2020-08-12</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>RUT 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Teléfono 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Nombres 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Estado Civil 1</td>
                    <td>Estudios 1</td>
                    <td>Ocupación 1</td>
                    <td>Lugar de Fallecimiento 1</td>
                    <td>Capilla 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Cementerio 1</td>
                    <td>Fecha 1</td>
                    <td>Hora 1</td>
                    <td>Tipo 1</td>
                    <td>Color 1</td>
                    <td>Incluye 1</td>
                    <td>Aviso 1</td>
                    <td>Observación 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="si" data-sort="si"><i class="far fa-check-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td data-search="no" data-sort="no"><i class="far fa-square"></i></td>
                    <td>
                        <button class="text">Ver</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="database" class="tab-content col-12 card" style="display:none">
            <div class="row">
                <div class="col-12">
                    <div class="tabs wide">
                        <button id="tab_service" onclick="showTabContent('#service', '.tab-subcontent')" class="tab active"><i class="fa fa-bible no-click"></i>Tipo de Servicio</button>
                        <button id="tab_insurance" onclick="showTabContent('#insurance', '.tab-subcontent')" class="tab"><i class="fas fa-handshake no-click"></i>Aseguradora</button>
                        <button id="tab_invoice" onclick="showTabContent('#invoice', '.tab-subcontent')" class="tab"><i class="fas fa-archive no-click"></i>Facturas y Pagos</button>
                        <button id="tab_providers" onclick="showTabContent('#providers', '.tab-subcontent')" class="tab"><i class="fab fa-black-tie no-click"></i>Instituciones para Pago</button>
                    </div>
                </div>
                <div id="service" class="tab-subcontent col-12 card">
                    <h5>Agregar Tipo de Servicio</h5>
                    <div class="row">
                        <div class="col-4">
                            <label for="addServiceType">Nombre</label>
                            <input id="addServiceType" type="text">
                        </div>
                        <div class="col-3">
                            <label for="addServiceProvider">Proveedor</label>
                            <select id="addServiceProvider">
                                <option value="1">Proveedor 1</option>
                                <option value="2">Proveedor 2</option>
                                <option value="3">Proveedor 3</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="addServiceColor">Color</label>
                            <input id="addServiceColor" type="text">
                        </div>
                        <div class="col-2">
                            <button class="full-width" id="addService">Agregar</button>
                        </div>
                    </div>
                    <hr>
                    <h5>Agregar Proveedor</h5>
                    <div class="row">
                        <div class="col-10">
                            <label for="addProviderNode">Nombre</label>
                            <input id="addProviderNode" type="text">
                        </div>
                        <div class="col-2">
                            <button class="full-width" id="addProvider">Agregar</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h5>Listado</h5>
                            <table class="dTable display nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Servicio</th>
                                    <th>Proveedor</th>
                                    <th>Color</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tipo 1</td>
                                    <td>Proveedor 1</td>
                                    <td>Color 1</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tipo 2</td>
                                    <td>Proveedor 2</td>
                                    <td>Color 2</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tipo 3</td>
                                    <td>Proveedor 3</td>
                                    <td>Color 3</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Tipo 4</td>
                                    <td>Proveedor 4</td>
                                    <td>Color 4</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Tipo 5</td>
                                    <td>Proveedor 5</td>
                                    <td>Color 5</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="insurance" class="tab-subcontent col-12 card" style="display: none">
                    <h5>Agregar</h5>
                    <div class="row">
                        <div class="col-9">
                            <label for="addInsuranceName">Nombre</label>
                            <input id="addInsuranceName" type="text">
                        </div>
                        <div class="col-3">
                            <button class="full-width" id="addInsurance">Agregar</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h5>Listado</h5>
                            <table class="dTable display nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Aseguradora</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aseguradora 1</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Aseguradora 2</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Aseguradora 3</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Aseguradora 4</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Aseguradora 5</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="invoice" class="tab-subcontent col-12 card" style="display: none">
                    <h5>Asociar Factura</h5>
                    <div class="row">
                        <div class="col-5">
                            <label for="addContractId">Número de Contrato</label>
                            <input id="addContractId" type="text">
                        </div>
                        <div class="col-5">
                            <label for="addInvoiceId">Folio Factura</label>
                            <input id="addInvoiceId" type="text">
                        </div>
                        <div class="col-2">
                            <button class="full-width" id="addInvoice">Asociar</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h5>Listado</h5>
                            <table class="dTable display nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nº Contrato</th>
                                    <th>Folio Factura</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1234</td>
                                    <td>5678</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>1235</td>
                                    <td>5679</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>1236</td>
                                    <td>5680</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>1237</td>
                                    <td>5681</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                <tr>
                                    <td>1238</td>
                                    <td>5682</td>
                                    <td><button class="text">Eliminar</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="providers" class="tab-subcontent col-12 card" style="display: none">
                    <h5>Agregar</h5>
                    <div class="row">
                        <div class="col-5">
                            <label for="addProviderName">Previsión/Banco</label>
                            <input id="addProviderName" type="text">
                        </div>
                        <div class="col-2">
                            <label for="addProviderDate">Fecha</label>
                            <input id="addProviderDate" type="date">
                        </div>
                        <div class="col-2">
                            <label for="addProviderStatus">Pagado</label>
                            <select id="addProviderStatus">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <button class="full-width" id="addProviderPayment">Agregar</button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h5>Listado</h5>
                            <table class="dTable display nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Previsión/Banco</th>
                                    <th>Fecha</th>
                                    <th>Pagado</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Banco 1</td>
                                    <td>2020-03-04</td>
                                    <td><i class="fas fa-check-circle greenI"></i></td>
                                    <td>
                                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                                        <button class="text">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Banco 2</td>
                                    <td>2020-03-04</td>
                                    <td><i class="fas fa-times-circle redI"></i></td>
                                    <td>
                                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                                        <button class="text">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Banco 3</td>
                                    <td>2020-03-04</td>
                                    <td><i class="fas fa-times-circle redI"></i></td>
                                    <td>
                                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                                        <button class="text">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Banco 4</td>
                                    <td>2020-03-04</td>
                                    <td><i class="fas fa-times-circle redI"></i></td>
                                    <td>
                                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                                        <button class="text">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Banco 5</td>
                                    <td>2020-03-04</td>
                                    <td><i class="fas fa-times-circle redI"></i></td>
                                    <td>
                                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                                        <button class="text">Eliminar</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>