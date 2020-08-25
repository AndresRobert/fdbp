<!DOCTYPE html>
<html lang="es">
<head><?php include 'layout/head.php' ?></head>
<body class="grey lighten-3">
<?php include 'layout/topbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h4>Contratos</h4>
            <p>Listado de contratos emitidos</p>
        </div>
    </div>
    <div class="row card-panel">
        <div class="col s12">
            <table class="dTable striped highlight">
                <thead>
                <tr>
                    <th>Número</th>
                    <th>Fecha</th>
                    <th>Solicitante RUT</th>
                    <th>Solicitante Nombres</th>
                    <th>Solicitante Apellidos</th>
                    <th>Solicitante Dirección</th>
                    <th>Solicitante Comuna</th>
                    <th>Solicitante Región</th>
                    <th>Solicitante Celular</th>
                    <th>Solicitante Email</th>
                    <th>Solicitante Teléfono</th>
                    <th>Fallecido Nombre</th>
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
                    <th>Servicio Observación</th>
                    <th>Servicio Aviso</th>
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
                    <th data-placeholder="none">Acciones</th>
                </tr>
                </thead>
                <tbody id="contractsTable">
                <tr>
                    <td>1</td>
                    <td>2020-08-12</td>
                    <td>RUT 1</td>
                    <td>Nombre 1</td>
                    <td>Apellidos 1</td>
                    <td>Dirección 1</td>
                    <td>Comuna 1</td>
                    <td>Región 1</td>
                    <td>Celular 1</td>
                    <td>Email 1</td>
                    <td>Teléfono 1</td>
                    <td>Nombres 1</td>
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
                    <td>Observación 1</td>
                    <td>Aviso 1</td>
                    <td>Valor 1</td>
                    <td>Descuento 1</td>
                    <td>Valor Total 1</td>
                    <td>Previsión 1</td>
                    <td>Previsión Aporte 1</td>
                    <td>Saldo 1</td>
                    <td data-search="si" data-sort="si"><i class="material-icons">check_box</i></td>
                    <td data-search="si" data-sort="si"><i class="material-icons">crop_din</i></td>
                    <td data-search="si" data-sort="si"><i class="material-icons">crop_din</i></td>
                    <td data-search="si" data-sort="si"><i class="material-icons">check_box</i></td>
                    <td data-search="si" data-sort="si"><i class="material-icons">crop_din</i></td>
                    <td data-search="si" data-sort="si"><i class="material-icons">crop_din</i></td>
                    <td>
                        <button class="btn-flat waves-effect waves-googleBlue">Ver</button>
                        <button class="btn-flat waves-effect waves-googleGreen">Publicar</button>
                        <button class="btn-flat waves-effect waves-googleYellow">Editar</button>
                        <button class="btn-flat waves-effect waves-googleRed">Eliminar</button>
                    </td>
                </tr>
                </tbody>
            </table>
            <script>
                // TODO: Load contracts
                $.ajax({
                    url: Api.endpoints['contracts'],
                    type: 'get',
                    headers: Auth.getHeaders(),
                    dataType: 'json',
                    success: data => {
                        console.info(data);
                    },
                    error: data => {
                        if (data.responseJSON.response.response_code === 401) {
                            Helper.openLink('/');
                        }
                    }
                });
                //$('#contractsTable').html();
            </script>
        </div>
    </div>
</div>
</body>
</html>